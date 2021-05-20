@extends('admin.layouts')

@section('content-admin')

     <div class="container-fluid">
        <h1 class="h3 mb-2 text-gray-800">Tambah Data Customer</h1>

        <div class="card shadow mb-4 mt-3">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Tambah Data Customer</h6>
            </div>
            <div class="card-body">

                <form action="{{ route('admin.customer.update', $customer) }}" method="post">
                    {{ csrf_field() }}
                    {{ method_field('PATCH') }}

                    <div class="form-group">
                        <label for="">Nama Lengkap</label>
                        <input type="text" name="nama" class="form-control" value="{{ $customer->nama }}">
                    </div>

                    <div class="form-group">
                        <label for="">No Telepon</label>
                        <input type="text" name="noTelp" class="form-control" value="{{ $customer->noTelp }}">
                    </div>

                    <div class="form-group">
                        <label for="">Id Card</label>
                        <input type="text" name="idCard" class="form-control" value="{{ $customer->idCard }}">
                    </div>

                    <div class="form-group">
                        <button class="btn btn-primary float-right" value="save" type="submit">Edit</button>
                    </div>
                </form>

            </div>
        </div>
     
    </div>

@endsection
