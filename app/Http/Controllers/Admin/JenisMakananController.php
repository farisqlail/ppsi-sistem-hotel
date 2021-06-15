<?php

namespace App\Http\Controllers\Admin;

use App\Models\JenisMakanan;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Paginator;
use Illuminate\Http\Request;

class JenisMakananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $JenisMakanan = JenisMakanan::all();

        return view('admin.JenisMakanan.index', compact('JenisMakanan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.JenisMakanan.create');
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

        JenisMakanan::create([
            'jenisMakanan' => request('jenisMakanan')
        ]);

        return redirect()->route('admin.JenisMakanan.index');
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
    public function edit(JenisMakanan $JenisMakanan)
    {
        return view('admin.JenisMakanan.edit', compact('JenisMakanan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, JenisMakanan $JenisMakanan)
    {
        Alert::success('Success', 'Berhasil mengedit data JenisMakanan');

        $JenisMakanan->update([

            'jenisMakanan' => request('jenisMakanan')

        ]);

        return redirect()->route('admin.JenisMakanan.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(JenisMakanan $JenisMakanan)
    {
        $JenisMakanan->delete();
        Alert::success('Success', 'Berhasil menghapus data menu JenisMakanan');

        return redirect()->route('admin.JenisMakanan.index');
    }
}
