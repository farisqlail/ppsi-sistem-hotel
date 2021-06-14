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

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group"> 
                                <label for="">Tipe Kamar</label>
                                <select class="form-control" name="type_id">
                                    <option selected>Pilih Tipe Kamar</option>
                                    @foreach ($typeKamar as $tKamar)
                                        <option value="{{ $tKamar->id }}">{{ $tKamar->typeKamar }}</option>
                                    @endforeach
                                  </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Kapasitas</label>
                                <input type="text" name="kapasitas" class="form-control" value="{{ $kamar->kapasistas }}">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group"> 
                                <label for="">jenis Kasur</label>
                                <input type="text" name="jenisKasur" class="form-control" value="{{ $kamar->jenisKasur }}">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group"> 
                                <label for="">Harga</label>
                                <input type="text" name="harga" class="form-control" value="{{ $kamar->harga }}">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Include Breakfast</label>
                                <input type="text" name="includeBreakfast" class="form-control" value="{{ $kamar->includeBreakFast }}">
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