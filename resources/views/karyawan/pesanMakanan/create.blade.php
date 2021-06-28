@extends('karyawan.layouts')

@section('content-karyawan')

    <div class="container-fluid">
        <h1 class="h3 mb-2 text-gray-800">Tambah Data pesanMakanan</h1>


        <div class="card-body">

            <form action="{{ route('admin.pesanMakanan.store') }}" method="post">
                {{ csrf_field() }}

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">No Kamar</label>
                            <input type="text" name="no_kamar" class="form-control" placeholder="No Kamar">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Nama Customer</label>
                            <input type="text" name="nama" class="form-control" placeholder="Nama Customer">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="">Jumlah Pesanan</label>
                    <input type="number" name="jumlah" class="form-control" placeholder="Jumlah Pesanan">
                </div>

                <div class="form-group">
                    <label for="">Pesanan</label>
                    <textarea name="pesanan" class="form-control" cols="30" rows="6"></textarea>
                </div>

                <div class="form-group">
                    <label for="">Total Harga</label>
                    <input type="text" name="total" class="form-control" placeholder="Total Harga">
                </div>

                <div class="form-group">
                    <button class="btn btn-primary float-right" value="save" type="submit">Tambah</button>
                </div>

            </form>

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
