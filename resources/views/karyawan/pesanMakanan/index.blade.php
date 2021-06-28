@extends('karyawan.layouts')

@section('content-karyawan')
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Data Menu Makanan</h1>
            <a href="{{ route('admin.pesanMakanan.create') }}"
                class="d-none d-sm-inline-block btn btn-sm btn-info shadow-sm"><i
                    class="fas fa-plus fa-sm text-white-50"></i> Tambah Data Pesan Makanan</a>
        </div>

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-info">Data Pesan Makanan</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="tableMakanan" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No Kamar</th>
                                <th>Nama Customer</th>
                                <th>Jumlah Pesanan</th>
                                <th>Pesanan</th>
                                <th>Total</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>No Kamar</th>
                                <th>Nama Customer</th>
                                <th>Jumlah Pesanan</th>
                                <th>Pesanan</th>
                                <th>Total</th>
                                <th>Actions</th>
                            </tr>
                        </tfoot>
                        <tbody>

                            @foreach ($pesan as $psn)
                            <tr>
                                <td>{{ $psn->no_kamar }}</td>
                                <td>{{ $psn->nama }}</td>
                                <td>{{ $psn->jumlah }}</td>
                                <td>{{ $psn->pesanan }}</td>
                                <td>{{ $psn->total }}</td>
                                
                                <td>
                                    <a href="{{ route('admin.pesanMakanan.edit', $psn) }}" class="btn btn-primary">Edit</a>
                                    <a href="{{ route('admin.pesanMakanan.delete', $psn->id) }}"
                                        class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>


    </div>
@endsection

@push('script')

    <script>
        $(document).ready(function() {
            $('#tableMakanan').DataTable();
        });

    </script>

@endpush
