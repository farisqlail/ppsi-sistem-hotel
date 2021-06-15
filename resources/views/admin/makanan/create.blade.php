@extends('admin.layouts')

@section('content-admin')

    <div class="container-fluid">
        <h1 class="h3 mb-2 text-gray-800">Tambah Data Customer</h1>

        <div class="card shadow mb-4 mt-3">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Tambah Data Customer</h6>
            </div>
            <div class="card-body">

                <form action="{{ route('admin.makanan.store') }}" method="post">
                    {{ csrf_field() }}

                    <div class="form-group"> 
                        <label for="">Jenis Menu</label>
                        <select class="form-control" name="jenis_id">
                            <option selected>Pilih Jenis Menu</option>
                            @foreach ($jenisMenu as $jenis)
                                <option value="{{ $jenis->id }}">{{ $jenis->jenisMakanan }}</option>
                            @endforeach
                          </select>
                    </div>

                    <div class="form-group">
                        <label for="">Nama Menu</label>
                        <input type="text" name="namaMenu" class="form-control" placeholder="Nama Menu">
                    </div>

                    <div class="form-group">
                        <label for="">Jumlah</label>
                        <input type="number" name="jumlah" class="form-control" placeholder="Jumlah">
                    </div>

                    <div class="form-group">
                        <label for="">Harga</label>
                        <input type="text" name="harga" id="harga" class="form-control" placeholder="Harga">
                    </div>

                    <div class="form-group">
                        <button class="btn btn-primary float-right" value="save" type="submit">Tambah</button>
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
