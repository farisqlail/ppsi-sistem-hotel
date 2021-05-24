<?php

namespace App\Http\Controllers\Admin;

use App\Models\MenuMakanan;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Paginator;

class MakananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $makanan = MenuMakanan::all();
        
        return view('admin.makanan.index', compact('makanan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.makanan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Alert::success('Success', 'Berhasil menambah data menu makanan');

        $harga = str_replace('.','',request('harga'));

        MenuMakanan::create([
            'namaMenu' => request('namaMenu'),
            'jumlah' => request('jumlah'),
            'harga' => $harga
        ]);

        return redirect()->route('admin.makanan.index');
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
    public function edit(MenuMakanan $makanan)
    {
        return view('admin.makanan.edit', compact('makanan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MenuMakanan $makanan)
    {
        Alert::success('Success', 'Berhasil menedit data menu makanan');

        $harga = str_replace('.','',request('harga'));

        $makanan->update([
            'namaMenu' => request('namaMenu'),
            'jumlah' => request('jumlah'),
            'harga' => $harga
        ]);

        return redirect()->route('admin.makanan.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(MenuMakanan $makanan)
    {
        $makanan->delete();
        Alert::success('Success', 'Berhasil menghapus data menu makanan');

        return redirect()->route('admin.makanan.index');
    }
}
