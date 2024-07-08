<?php

namespace App\Http\Controllers;

use App\Models\Invitation;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $invitations = Invitation::paginate(8);
        $iteration = $invitations->firstItem();
        return view('admin.index', compact('invitations', 'iteration'));
    }
}
