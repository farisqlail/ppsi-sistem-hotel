<?php

namespace App\Http\Controllers\Admin;

use App\Models\Laundry;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Paginator;

class LaundryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $laundry = Laundry::all();

        return view('admin.laundry.index', compact('laundry'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $laundry = Laundry::all();

        return view('admin.laundry.create', compact('laundry'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Alert::success('Success', 'Berhasil menambah data kamar');

        Laundry::create([
            'idKamar' => request('idKamar'),
            'idcustomer' => request('idcustomer'),
            'JenisLaundry' => request('JenisLaundry'),
            'berat' => request('berat'),
            'total' => request('total')
            
        ]);

        return redirect()->route('admin.kamar.index');
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
    public function edit(Laundry $laundry)
    {
        $laundry = Laundry::all();

        return view('admin.laundry.edit', compact('laundry'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Laundry $laundry)
    {
        Alert::success('Success', 'Berhasil mengedit data laundry');

        $laundry->update([
            'idKamar' => request('idKamar'),
            'idcustomer' => request('idcustomer'),
            'JenisLaundry' => request('JenisLaundry'),
            'berat' => request('berat'),
            'total' => request('total')

        ]);

        return redirect()->route('admin.laundry.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Laundry $laundry)
    {
        $laundry->delete();
        Alert::success('Success', 'Berhasil menghapus data menu laundry');

        return redirect()->route('admin.laundry.index');
    }
}
