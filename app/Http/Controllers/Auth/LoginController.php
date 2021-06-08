<?php

namespace App\Http\Controllers\Auth;

use App\Http\Middleware;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
 
    use AuthenticatesUsers;

    protected $redirectTo = RouteServiceProvider::HOME;

    public function authenticated(Request $request, $user)
    {
        if ($user->hasRole('admin')) {
            return view('admin.dashboard');
        } elseif ($user->hasRole('hrd')) {
            return view('hrd.dashboard');
        } elseif ($user->hasRole('karyawan')) {
            return view('karyawan.dashboard');
        }
    
        return redirect()->route('login');
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('guest')->except('logout');
    // }
}
