@extends('admin.layouts')

@section('content-admin')

     <div class="container-fluid">
        <h1 class="h3 mb-2 text-gray-800">Tambah Data TypeKamar</h1>

        <div class="card shadow mb-4 mt-3">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Tambah Data TypeKamar</h6>
            </div>
            <div class="card-body">

                <form action="{{ route('admin.laundry.store') }}" method="post">
                    {{ csrf_field() }}

                    <div class="form-group"> 
                        <label for="">id kamar</label>
                        <input type="text" name="idkamar" class="form-control" placeholder="id Kamar">
                    </div>

                    <div class="form-group"> 
                        <label for="">id Customer</label>
                        <input type="text" name="idkamar" class="form-control" placeholder="id Customer">
                    </div>

                    <div class="form-group"> 
                        <label for="">Jenis Laundry</label>
                        <input type="text" name="jenisLaundry" class="form-control" placeholder="Jenis Laundry">
                    </div>

                    <div class="form-group"> 
                        <label for="">Berat</label>
                        <input type="text" name="berat" class="form-control" placeholder="berat">
                    </div>

                    <div class="form-group"> 
                        <label for="">Harga</label>
                        <input type="text" name="harga" class="form-control" placeholder="Harga">
                    </div>

                    <div class="form-group">
                        <button class="btn btn-primary float-right" value="save" type="submit">Tambah</button>
                    </div>
                </form>

            </div>
        </div>
     
    </div>

@endsection
