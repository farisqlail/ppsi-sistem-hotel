<?php
namespace App\Http\Controllers\Admin;

<<<<<<< HEAD
use App\Models\Kamar;
use App\Models\Customer;
use App\Models\CekInCustomer;
use App\Models\MenuMakanan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
=======
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Paginator;
>>>>>>> ad54c96fb83b585a61a747a22c16e18d36fe97e8

class HistoryController extends Controller
{
public function index()
    {
        $this->middleware('role:admin');

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

        return view('admin.History.History', compact('kamarCount', 'cekInCount', 'customerCount', 'cekInDash', 'makananCount', 'cekInTrash'));
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


