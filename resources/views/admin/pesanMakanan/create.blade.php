@extends('admin.layouts')

@section('content-admin')

    <div class="container-fluid">
        <h1 class="h3 mb-2 text-gray-800">Tambah Data pesanMakanan</h1>

    
            <div class="card-body">

                <form action="{{ route('admin.pesanMakanan.store') }}" method="post">
                    {{ csrf_field() }}

                    <div class="form-group">
                        <label for="">id Menu</label>
                        <input type="text" name="idMenu" class="form-control" placeholder="Id Menu">
                    </div>

                    <div class="form-group">
                        <label for="">Id Cek In</label>
                        <input type="text" name="idCekIn" class="form-control" placeholder="Id Cek In">
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
