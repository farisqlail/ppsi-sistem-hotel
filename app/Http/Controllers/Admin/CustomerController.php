<?php

namespace App\Http\Controllers\Admin;

use App\Models\Customer;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Paginator;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customer = Customer::all();

        if (Auth::user()->hasRole('admin')) {
            return view('admin.customer.index', compact('customer'));
        } else if(Auth::user()->hasRole('hrd')){
            return view('hrd.customer.index', compact('customer'));
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (Auth::user()->hasRole('admin')) {
            return view('admin.customer.create');
        } else if(Auth::user()->hasRole('hrd')){
            return view('hrd.customer.create');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Alert::success('Success', 'Berhasil menambah data customer');

        Customer::create([
            'nama' => request('nama'),
            'noTelp' => request('noTelp'),
            'idCard' => request('idCard')
        ]);

        return redirect()->route('admin.customer.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Customer $customer)
    {
        if (Auth::user()->hasRole('admin')) {
            return view('admin.customer.edit', compact('customer'));
        } else if(Auth::user()->hasRole('hrd')){
            return view('hrd.customer.edit', compact('customer'));
        }
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Customer $customer)
    {
        Alert::success('Success', 'Berhasil mengedit data customer');

        $customer->update([
            'nama' => request('nama'),
            'noTelp' => request('noTelp'),
            'idCard' => request('idCard')
        ]);

        return redirect()->route('admin.customer.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Customer $customer)
    {
        $customer->delete();
        Alert::success('Success', 'Berhasil menghapus data customer');

        return redirect()->route('admin.customer.index');
    }
}
