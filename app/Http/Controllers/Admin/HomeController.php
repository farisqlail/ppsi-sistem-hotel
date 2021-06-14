<?php

namespace App\Http\Controllers\Admin;

use App\Models\Kamar;
use App\Models\Customer;
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
        $cekInDash = CekInCustomer::orderBy('id', 'desc')->get();
        $cekInCount = $cekIn->count();

        $customer = Customer::all();
        $customerCount = $customer->count();

        return view('admin.dashboard', compact('kamarCount', 'cekInCount', 'customerCount', 'cekInDash'));
    }

    public function hrd(){
        
        return view('hrd.dashboard');
    }
}
