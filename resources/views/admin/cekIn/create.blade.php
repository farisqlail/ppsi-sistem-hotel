@extends('admin.layouts')

@section('content-admin')

     <div class="container-fluid">
        <h1 class="h3 mb-2 text-gray-800">Tambah Data Cek In Customer</h1>

        <div class="card shadow mb-4 mt-3">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Tambah Data Cek In Customer</h6>
            </div>
            <div class="card-body">

                <form action="{{ route('admin.cek-in.store') }}" method="post">
                    {{ csrf_field() }}

                    <div class="form-group"> 
                        <label for="">Ketersediaan</label>
                        <input type="text" name="ketersediaanKamar" class="form-control" placeholder="Ketersediaan Kamar">
                    </div>

                    <div class="form-group">
                        <label for="">Jenis Kamar</label>
                        <input type="text" name="jenisKamar" class="form-control" placeholder="Jenis Kamar">
                    </div>

                    <div class="form-group">
                        <button class="btn btn-primary float-right" value="save" type="submit">Tambah</button>
                    </div>
                </form>

            </div>
        </div>
     
    </div>

@endsection
