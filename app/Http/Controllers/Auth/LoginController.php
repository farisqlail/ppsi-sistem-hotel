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

    // protected $redirectTo = RouteServiceProvider::HOME;

    public function authenticated(Request $request, $user)
    {
        if ($user->hasRole('admin')) {
            // return view('admin.dashboard');
            return redirect()->route('admin.admin.dash');

        } elseif ($user->hasRole('hrd')) {
            // return view('hrd.dashboard');
            return redirect()->route('admin.hrd.dash');

        } elseif ($user->hasRole('karyawan')) {
            return redirect()->route('admin.karyawan.dash');

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
