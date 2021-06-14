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
                        <label for="">Tipe Kamar</label>
                        <input type="text" name="ketersediaanKamar" class="form-control" value="{{ $kamar->TipeKamar }}">
                    </div>

                    <div class="form-group">
                        <label for="">Jenis Kamar</label>
                        <input type="text" name="jenisKamar" class="form-control" value="{{ $kamar->jenisKamar }}">
                    </div>

                    <div class="form-group"> 
                        <label for="">Kapasitas</label>
                        <input type="text" name="kapasitas" class="form-control" value="{{ $kamar->Kapasitas }}">
                    </div>

                    <div class="form-group"> 
                        <label for="">Jenis Kasur</label>
                        <input type="text" name="jenisKasur" class="form-control" value="{{ $kamar->jenisKasur }}">
                    </div>

                    <div class="form-group"> 
                        <label for="">Harga</label>
                        <input type="text" name="harga" class="form-control" value="{{ $kamar->harga }}">
                    </div>

                    <div class="form-group"> 
                        <label for="">Include Breakfast</label>
                        <input type="text" name="includeBreakfast" class="form-control" value="{{ $kamar->includeBreakfast }}">
                    </div>

                    <div class="form-group">
                        <button class="btn btn-primary float-right" value="save" type="submit">Edit</button>
                    </div>
                </form>

            </div>
        </div>
     
    </div>

@endsection
