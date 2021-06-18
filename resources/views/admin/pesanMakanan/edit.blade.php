@extends('admin.layouts')

@section('content-admin')

     <div class="container-fluid">
        <h1 class="h3 mb-2 text-gray-800">Tambah Data Customer</h1>

        <div class="card shadow mb-4 mt-3">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Tambah Data Customer</h6>
            </div>
            <div class="card-body">

                <form action="{{ route('admin.pesanMakanan.update', $pesan) }}" method="post">
                    {{ csrf_field() }}
                    {{ method_field('PATCH') }}
                    <div class="form-group"> 
                        <label for="">Id menu</label>
                        <input type="text" name="idMenu" class="form-control" value="{{ $pesan->idMenu }}">
                    </div>

                    <div class="form-group">
                        <label for="">Cek In</label>
                        <input type="number" name="cekIn" class="form-control" value="{{ $pesan->cekIn }}">
                    </div>

                    <div class="form-group">
                        <label for="">Harga</label>
                        <input type="number" name="harga" class="form-control" value="{{ $pesan->harga }}">
                    </div>

                    <div class="form-group">
                        <button class="btn btn-primary float-right" value="save" type="submit">Update</button>
                    </div>
                </form>

            </div>
        </div>
     
    </div>

@endsection
