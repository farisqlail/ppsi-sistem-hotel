<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\TypeKamar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Paginator;

class TypeKamarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $typeKamar = TypeKamar::all();

        return view('admin.type.index', compact('typeKamar'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.type.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Alert::success('Success', 'Berhasil menambah data TypeKamar');

        // $harga = str_replace('.', '', request('harga'));

        TypeKamar::create([
            'typeKamar' => request('typeKamar')
        ]);

        return redirect()->route('admin.typeKamar.index');
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
    public function edit(TypeKamar $typeKamar)
    {
        return view('admin.type.edit', compact('typeKamar'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, typeKamar $typeKamar)
    {
        Alert::success('Success', 'Berhasil mengedit data TypeKamar');

        // $harga = str_replace('.','',request('harga'));

        $typeKamar->update([
            'typeKamar' => request('typeKamar')
        ]);

        return redirect()->route('admin.typeKamar.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(typeKamar $typeKamar)
    {
        $typeKamar->delete();
        Alert::success('Success', 'Berhasil menghapus data TypeKamar');

        return redirect()->route('admin.typeKamar.index');
    }
}
