@extends('admin.layouts')

@section('content-admin')

     <div class="container-fluid">
        <h1 class="h3 mb-2 text-gray-800">Tambah Data TypeKamar</h1>

        <div class="card shadow mb-4 mt-3">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Tambah Data TypeKamar</h6>
            </div>
            <div class="card-body">

                <form action="{{ route('admin.typeKamar.store') }}" method="post">
                    {{ csrf_field() }}

                    <div class="form-group"> 
                        <label for="">Type Kamar</label>
                        <input type="text" name="typeKamar" class="form-control" placeholder="Type Kamar">
                    </div>

                    <div class="form-group">
                        <button class="btn btn-primary float-right" value="save" type="submit">Tambah</button>
                    </div>
                </form>

            </div>
        </div>
     
    </div>

@endsection
