<?php

namespace App\Http\Controllers\Admin;

use App\Models\Kamar;
use App\Models\TypeKamar;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Paginator;

class KamarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kamar = Kamar::all();

        return view('admin.kamar.index', compact('kamar'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $typeKamar = TypeKamar::all();

        return view('admin.kamar.create', compact('typeKamar'));
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

        Kamar::create([
            'noKamar' => request('noKamar'),
            'type_id' => request('type_id'),
            'kapasitas' => request('kapasitas'),
            'jenisKasur' => request('jenisKasur'),
            'harga' => request('harga'),
            'includeBreakfast' => request('includeBreakfast')
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
    public function edit(Kamar $kamar)
    {
        $typeKamar = TypeKamar::all();

        return view('admin.kamar.edit', compact('kamar', 'typeKamar'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kamar $kamar)
    {
        Alert::success('Success', 'Berhasil mengedit data kamar');

        $kamar->update([
            'noKamar' => request('noKamar'),
            'type_id' => request('type_id'),
            'kapasitas' => request('kapasitas'),
            'jenisKasur' => request('jenisKasur'),
            'harga' => request('harga'),
            'includeBreakfast' => request('includeBreakfast')

        ]);

        return redirect()->route('admin.kamar.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kamar $kamar)
    {
        $kamar->delete();
        Alert::success('Success', 'Berhasil menghapus data menu kamar');

        return redirect()->route('admin.kamar.index');
    }
}
