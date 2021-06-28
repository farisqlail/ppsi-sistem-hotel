<?php

namespace App\Http\Controllers\Admin;

use App\Models\Kamar;
use App\Models\Customer;
use App\Models\CekInCustomer;
use App\Models\MenuMakanan;
use App\Models\PesanMakanan;
use App\Models\Laundry;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

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
        // dd($kamar);
        $kamarCount = $kamar->count();

        $cekIn = CekInCustomer::all();
        $cekInTrash = CekInCustomer::onlyTrashed()->get();
        $cekInDash = CekInCustomer::orderBy('id', 'desc')->get();
        $cekInCount = $cekIn->count();

        $customer = Customer::all();
        $customerCount = $customer->count();

        $makanan = MenuMakanan::all();
        $makananCount = $makanan->count();

        $pesanMakanan = PesanMakanan::latest()->paginate(2);

        $laundry = Laundry::latest()->paginate(2);

        if(Auth::user()->hasRole('admin')){
            return view('admin.dashboard', compact('kamarCount', 'cekInCount', 'customerCount', 'cekInDash', 'makananCount', 'cekInTrash', 'pesanMakanan', 'laundry'));
        } elseif (Auth::user()->hasRole('karyawan')) {
            return view('karyawan.dashboard', compact('kamarCount', 'cekInCount', 'customerCount', 'cekInDash', 'makananCount', 'cekInTrash', 'pesanMakanan', 'laundry'));
        } else if(Auth::user()->hasRole('hrd')){
            return view('hrd.dashboard', compact('kamarCount', 'cekInCount', 'customerCount', 'cekInDash', 'makananCount', 'cekInTrash', 'pesanMakanan', 'laundry'));
        }

    }
}
