<?php

namespace App\Http\Controllers\Admin;

use App\Models\Kamar;
use App\Models\Customer;
use App\Models\CekInCustomer;
use App\Models\MenuMakanan;
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
        $this->middleware('role:admin');

        $kamar = Kamar::sum('jumlah');
        // dd($kamar);
        // $kamarCount = $kamar;

        $cekIn = CekInCustomer::all();
        $cekInTrash = CekInCustomer::onlyTrashed()->get();
        $cekInDash = CekInCustomer::orderBy('id', 'desc')->get();
        $cekInCount = $cekIn->count();

        $customer = Customer::all();
        $customerCount = $customer->count();

        $makanan = MenuMakanan::all();
        $makananCount = $makanan->count();

        return view('admin.dashboard', compact('kamar', 'cekInCount', 'customerCount', 'cekInDash', 'makananCount', 'cekInTrash'));
    }

    public function hrd(){
        $this->middleware('role:hrd');
        
        return view('hrd.dashboard');
    }

    public function karyawan(){
        $this->middleware('role:karyawan');

        return view('karyawan.dashboard');
    }
}
