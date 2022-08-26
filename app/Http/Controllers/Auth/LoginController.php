<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    // protected $redirectTo = RouteServiceProvider::HOME;

    public function authenticated()
    {
        if (Auth::user()->is_admin == '1') {
            return redirect()->route('dashboard')->with('status', 'Welcome Admin!');
        } else if (Auth::user()->is_admin == '0') {
            return redirect()->route('userPage')->with('status', 'Welcome Dear Consumer!');
        } else {
            return redirect('/');
        }
    }

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
