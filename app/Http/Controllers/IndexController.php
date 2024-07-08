<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Asistant;
use App\Models\Invitation;

class IndexController extends Controller
{
    public function index()
    {
        $invitations = Invitation::orderBy('created_at', 'desc')->take(8)->get();

        return view('index', compact('invitations'));
    }

    public function allThemes()
    {
        $invitations = Invitation::orderBy('created_at', 'desc')->paginate(12);

        return view('themes', compact('invitations'));
    }

    public function themeDetail($id)
    {
        $invitation = Invitation::where('id', $id)->firstOrFail();
        return view('theme', compact('invitation'));
    }
    // public function profile($id)
    // {
    //     $asistant = Asistant::find($id);

    //     return view('profile', compact('asistant'));
    // }

    // public function register(){
    //     return view('register');
    // }

}
