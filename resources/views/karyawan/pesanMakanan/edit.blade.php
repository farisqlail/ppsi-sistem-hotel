@extends('karyawan.layouts')

@section('content-karyawan')

     <div class="container-fluid">
        <h1 class="h3 mb-2 text-gray-800">Tambah Data Customer</h1>

        <div class="card shadow mb-4 mt-3">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Tambah Data Customer</h6>
            </div>
            <div class="card-body">

                <form action="{{ route('admin.pesanMakanan.update', $pesanMakanan) }}" method="post">
                    {{ csrf_field() }}
                    {{ method_field('PATCH') }}

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">No Kamar</label>
                                <input type="text" name="no_kamar" class="form-control" value="{{ $pesanMakanan->no_kamar }}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Nama Customer</label>
                                <input type="text" name="nama" class="form-control" value="{{ $pesanMakanan->nama }}">
                            </div>
                        </div>
                    </div>
    
                    <div class="form-group">
                        <label for="">Jumlah Pesanan</label>
                        <input type="number" name="jumlah" class="form-control" value="{{ $pesanMakanan->jumlah }}">
                    </div>
    
                    <div class="form-group">
                        <label for="">Pesanan</label>
                        <textarea name="pesanan" class="form-control" cols="30" rows="6">{{ $pesanMakanan->pesanan }}</textarea>
                    </div>
    
                    <div class="form-group">
                        <label for="">Total Harga</label>
                        <input type="text" name="total" class="form-control" value="{{ $pesanMakanan->total }}">
                    </div>

                    <div class="form-group">
                        <button class="btn btn-primary float-right" value="save" type="submit">Update</button>
                    </div>
                </form>

            </div>
        </div>
     
    </div>

@endsection
