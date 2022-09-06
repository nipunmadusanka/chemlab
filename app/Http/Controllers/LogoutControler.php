<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LogoutControler extends Controller
{
    function index()
    {
        // Session::flush();

        Auth::logout();

        return Redirect('/');
    }
    
}
