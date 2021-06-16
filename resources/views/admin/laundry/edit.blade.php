@extends('admin.layouts')

@section('content-admin')

     <div class="container-fluid">
        <h1 class="h3 mb-2 text-gray-800">Tambah Data Kamar</h1>

        <div class="card shadow mb-4 mt-3">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Tambah Data Kamar</h6>
            </div>
            <div class="card-body">

                <form action="{{ route('admin.laundry.update', $laundry) }}" method="post">
                    {{ csrf_field() }}
                    {{ method_field('PATCH') }}

                    <div class="form-group"> 
                        <label for="">id Kamar</label>
                        <input type="text" name="idKamar" class="form-control" value="{{ $laundry->idKamar }}">
                    </div> 

                    <div class="form-group"> 
                        <label for="">id Customer</label>
                        <input type="text" name="idcustomer" class="form-control" value="{{ $laundry->idcustomer }}">
                    </div> 

                    <div class="form-group"> 
                        <label for="">Jenis Laundry</label>
                        <input type="text" name="JenisLaundri" class="form-control" value="{{ $laundry->JenisLaundri }}">
                    </div> 

                    <div class="form-group"> 
                        <label for="">Berat</label>
                        <input type="text" name="berat" class="form-control" value="{{ $laundry->berat }}">
                    </div> 

                    <div class="form-group"> 
                        <label for="">Total</label>
                        <input type="text" name="total" class="form-control" value="{{ $laundry->total }}">
                    </div> 

                    <div class="form-group">
                        <button class="btn btn-primary float-right" value="save" type="submit">Edit</button>
                    </div>
                </form>

            </div>
        </div>
     
    </div>

@endsection