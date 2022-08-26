<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function homePage()
    {
        return view('landing-page');
    }

    public function userPage()
    {
        return view('home');
    }
}
