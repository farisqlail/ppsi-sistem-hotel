<?php

namespace App\Http\Controllers\Admin;

use App\Models\Kamar;
use App\Models\CekInCustomer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('role:admin');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $kamar = Kamar::all();
        $kamarCount = $kamar->count();

        $cekIn = CekInCustomer::all();
        $cekInCount = $cekIn->count();

        return view('admin.dashboard', compact('kamarCount', 'cekInCount'));
    }

    public function hrd(){
        
        return view('hrd.dashboard');
    }
}
