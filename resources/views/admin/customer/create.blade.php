@extends('admin.layouts')

@section('content-admin')

     <div class="container-fluid">
        <h1 class="h3 mb-2 text-gray-800">Tambah Data Customer</h1>

        <div class="card shadow mb-4 mt-3">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Tambah Data Customer</h6>
            </div>
            <div class="card-body">

                <form action="{{ route('admin.customer.store') }}" method="post">
                    {{ csrf_field() }}

                    <div class="form-group">
                        <label for="">Nama Lengkap</label>
                        <input type="text" name="nama" class="form-control" placeholder="Nama Lengkap">
                    </div>

                    <div class="form-group">
                        <label for="">No Telepon</label>
                        <input type="text" name="noTelp" class="form-control" placeholder="no telepon">
                    </div>

                    <div class="form-group">
                        <label for="">Id Card</label>
                        <input type="text" name="idCard" class="form-control" placeholder="Id Card">
                    </div>

                    <div class="form-group">
                        <button class="btn btn-primary float-right" value="save" type="submit">Tambah</button>
                    </div>
                </form>

            </div>
        </div>
     
    </div>

@endsection
