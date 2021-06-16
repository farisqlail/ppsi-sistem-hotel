@extends('admin.layouts')

@section('content-admin')
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Data Laundry</h1>
            <a href="{{ route('admin.makanan.create') }}"
                class="d-none d-sm-inline-block btn btn-sm btn-info shadow-sm"><i
                    class="fas fa-plus fa-sm text-white-50"></i> Tambah Data Laundry</a>
        </div>

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-info">Data Laundry</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="tableLaundry" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>nama menu</th>
                                <th>jumlah</th>
                                <th>harga</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>nama menu</th>
                                <th>jumlah</th>
                                <th>harga</th>
                                <th>Actions</th>
                            </tr>
                        </tfoot>
                        <tbody>

                            @foreach ($makanan as $mkn)
                            <tr>
                                <td>{{ $mkn->namaMenu }}</td>
                                <td>{{ $mkn->jumlah }}</td>
                                <td>Rp.{{ number_format($mkn->harga,2) }}</td>
                                <td>
                                    <a href="{{ route('admin.makanan.edit', $mkn) }}" class="btn btn-primary">Edit</a>
                                    <a href="{{ route('admin.makanan.delete', $mkn->id) }}"
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
            $('#tableLaundry').DataTable();
        });

    </script>

@endpush
