<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RouteController extends Controller
{

    // Welcome to Route Controller

    public function renderLanding() {
        return view('landing.index');
    }

    public function renderLogin() {
        return view('login.index');
    }

    public function renderRegister() {
        return view('register.index');
    }

}
