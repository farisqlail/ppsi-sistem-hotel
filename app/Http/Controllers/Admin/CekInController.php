<?php

namespace App\Http\Controllers\Admin;

use App\Models\CekInCustomer;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Paginator;

class CekInController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cekInCustomer = CekInCustomer::all();

        return view('admin.cekIn.index', compact('cekInCustomer'));
    }

    public function inHouse(){

        $cekInCustomer = CekInCustomer::all();

        return view('admin.cekIn.inHouse', compact('cekInCustomer'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.cekIn.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Alert::success('Success', 'Customer berhasil cek in kamar');

        CekInCustomer::create([
            'namaCustomer' => request('namaCustomer'),
            'namaKaryawan' => request('namaKaryawan'),
            'tanggalCekIn' => request('tanggalCekIn'),
            'jumlahTamu' => request('jumlahTamu'),
            'tanggalCekOut' => request('tanggalCekOut'),
            'deposit' => request('deposit'),
            'tipeKamar' => request('tipeKamar'),
            'noKamar' => request('noKamar')
        ]);

        return redirect()->route('admin.cekIn.index');
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
    public function edit(CekInCustomer $cekIn)
    {
        // dd($cekInCustomer);
        return view('admin.cekIn.edit', compact('cekIn'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CekInCustomer $cekIn)
    {
        Alert::success('Success', 'Berhasil mengupdate cek in customer');

        $cekIn->update([
            'namaCustomer' => request('namaCustomer'),
            'namaKaryawan' => request('namaKaryawan'),
            'tanggalCekIn' => request('tanggalCekIn'),
            'jumlahTamu' => request('jumlahTamu'),
            'tanggalCekOut' => request('tanggalCekOut'),
            'deposit' => request('deposit'),
            'tipeKamar' => request('tipeKamar'),
            'noKamar' => request('noKamar')
        ]);

        return redirect()->route('admin.cekIn.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(CekInCustomer $cekIn)
    {
        Alert::success('Success', 'Berhasil menghapus data cek in customer');
        $cekIn->delete();

        return redirect()->route('admin.cekIn.index');
    }
}
