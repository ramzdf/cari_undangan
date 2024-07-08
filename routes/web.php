<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\InvitationController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [IndexController::class, 'index']);
Route::get('/semua-tema', [IndexController::class, 'allThemes']);
Route::get('/semua-tema/{id}', [IndexController::class, 'themeDetail']);
Route::get('/profile/{id}', [IndexController::class, 'profile']);

Route::get('/form', function () {
    return view('form');
});

Route::post('/search', [SearchController::class, 'search'])->name('search');

Route::middleware('guest')->group(function () {
    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::post('/login', [LoginController::class, 'authenticate']);
});

Route::middleware('checkRole')->group(function () {
    Route::resource('/admin/invitation', InvitationController::class);
    Route::get('/admin', [AdminController::class, 'index']);
    Route::get('/logout', [LoginController::class, 'logout']);
});
