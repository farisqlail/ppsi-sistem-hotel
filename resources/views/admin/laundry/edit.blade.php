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

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group"> 
                                <label for="">Tipe Kamar</label>
                                {{-- <select class="form-control" name="type_id">
                                    <option selected>Pilih Tipe Kamar</option>
                                    @foreach ($laundry as $ldy)
                                        <option value="{{ $ldy->id }}">{{ $ldy->typeKamar }}</option>
                                    @endforeach
                                  </select> --}}
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Id Kamar</label>
                                <input type="text" name="idKamar" class="form-control" value="{{ $laundry->idKamar }}">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group"> 
                                <label for="">Id Customer</label>
                                <input type="text" name="idcustomer" class="form-control" value="{{ $laundry->idcustomer }}">
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group"> 
                                <label for="">Jenis Laundri</label>
                                <input type="text" name="jenisLaundri" class="form-control" value="{{ $laundry->JenisLaundri }}">
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Berat</label>
                                <input type="text" name="berat" class="form-control" value="{{ $laundry->berat }}">
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Total</label>
                                <input type="text" name="totak" class="form-control" value="{{ $laundry->total }}">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary float-right" value="save" type="submit">Edit</button>
                    </div>
                </form>

            </div>
        </div>
     
    </div>

@endsection

@push('script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.js"></script>
    <script>
        $('#harga').mask('000.000.000.000', {
            reverse: true
        });

    </script>
@endpush