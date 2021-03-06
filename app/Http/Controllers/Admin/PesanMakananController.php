<?php

namespace App\Http\Controllers\Admin;

use App\Models\pesanMakanan;
use App\Models\JenisMakanan;
use App\Models\CekInCustomer;
use App\Http\Controllers\Controller;
use App\Models\MenuMakanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Paginator;

class pesanMakananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pesan = pesanMakanan::all();
        $menu = MenuMakanan::all();
        $cek = CekInCustomer::all();

        if (Auth::user()->hasRole('admin')) {
            return view('admin.pesanMakanan.index', compact('pesan', 'menu', 'cek'));
        } else if(AUth::user()->hasRole('karyawan')) {
            return view('karyawan.pesanMakanan.index', compact('pesan', 'menu', 'cek'));
        }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pesan = pesanMakanan::all();

        if (Auth::user()->hasRole('admin')) {
            return view('admin.pesanMakanan.create', compact('pesan'));
        } else if (Auth::user()->hasRole('karyawan')) {
            return view('karyawan.pesanMakanan.create', compact('pesan'));
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
        Alert::success('Success', 'Berhasil menambah data menu pesanMakanan');

        $harga = str_replace('.', '', request('harga'));

        pesanMakanan::create([
            'no_kamar' => request('no_kamar'),
            'nama' => request('nama'),
            'jumlah' => request('jumlah'),
            'pesanan' => request('pesanan'),
            'total' => request('total'),
            'harga' => $harga
        ]);

        return redirect()->route('admin.pesanMakanan.index');
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
    public function edit(pesanMakanan $pesanMakanan)
    {
        if (Auth::user()->hasRole('admin')) {
            return view('admin.pesanMakanan.edit', compact('pesanMakanan'));
        } else if (Auth::user()->hasRole('karyawan')) {
            return view('karyawan.pesanMakanan.edit', compact('pesanMakanan'));
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, pesanMakanan $pesanMakanan)
    {
        Alert::success('Success', 'Berhasil menedit data menu pesanMakanan');

        $harga = str_replace('.', '', request('harga'));

        $pesanMakanan->update([
            'no_kamar' => request('no_kamar'),
            'nama' => request('nama'),
            'jumlah' => request('jumlah'),
            'pesanan' => request('pesanan'),
            'total' => request('total'),
            'harga' => $harga
        ]);

        return redirect()->route('admin.pesanMakanan.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(pesanMakanan $pesanMakanan)
    {
        $pesanMakanan->delete();
        Alert::success('Success', 'Berhasil menghapus data menu pesanMakanan');

        return redirect()->route('admin.pesanMakanan.index');
    }
}
