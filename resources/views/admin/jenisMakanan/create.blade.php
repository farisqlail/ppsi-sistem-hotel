@extends('admin.layouts')

@section('content-admin')

    <div class="container-fluid">
        <h1 class="h3 mb-2 text-gray-800">Tambah Data Jenis Menu</h1>

        <div class="card shadow mb-4 mt-3">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Tambah Data Jenis Menu</h6>
            </div>
            <div class="card-body">

                <form action="{{ route('admin.JenisMakanan.store') }}" method="post">
                    {{ csrf_field() }}

                    <div class="form-group">
                        <label for="">Jenis Menu</label>
                        <input type="text" name="JenisMakanan" class="form-control" placeholder="Jenis Menu">
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
@JenisMakanan