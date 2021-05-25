@extends('admin.layouts')

@section('content-admin')

     <div class="container-fluid">
        <h1 class="h3 mb-2 text-gray-800">Tambah Data Kamar</h1>

        <div class="card shadow mb-4 mt-3">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Tambah Data Kamar</h6>
            </div>
            <div class="card-body">

                <form action="{{ route('admin.kamar.update', $kamar) }}" method="post">
                    {{ csrf_field() }}
                    {{ method_field('PATCH') }}

                    <div class="form-group"> 
                        <label for="">Ketersediaan</label>
                        <input type="text" name="ketersediaanKamar" class="form-control" value="{{ $kamar->ketersediaanKamar }}">
                    </div>

                    <div class="form-group">
                        <label for="">Jenis Kamar</label>
                        <input type="text" name="jenisKamar" class="form-control" value="{{ $kamar->jenisKamar }}">
                    </div>

                    <div class="form-group">
                        <button class="btn btn-primary float-right" value="save" type="submit">Edit</button>
                    </div>
                </form>

            </div>
        </div>
     
    </div>

@endsection
