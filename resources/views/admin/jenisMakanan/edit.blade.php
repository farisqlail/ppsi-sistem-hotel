@extends('admin.layouts')

@section('content-admin')

     <div class="container-fluid">
        <h1 class="h3 mb-2 text-gray-800">Tambah Data Jenis Menu</h1>

        <div class="card shadow mb-4 mt-3">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Tambah Data Customer</h6>
            </div>
            <div class="card-body">

                <form action="{{ route('admin.JenisMakanan.update', $JenisMakanan) }}" method="post">
                    {{ csrf_field() }}
                    {{ method_field('PATCH') }}

                    <div class="form-group"> 
                        <label for="">Jenis Menu</label>
                        <input type="text" name="JenisMakanan" class="form-control" value="{{ $JenisMakanan->JenisMakanan }}"> 
                    </div>

                    <div class="form-group">
                        <button class="btn btn-primary float-right" value="save" type="submit">Update</button>
                    </div>
                </form>

            </div>
        </div>
     
    </div>

@endsection
