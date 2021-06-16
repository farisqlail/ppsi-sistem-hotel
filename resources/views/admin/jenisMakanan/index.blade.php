@extends('admin.layouts')

@section('content-admin')
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Data Jenis Menu</h1>
            <a href="{{ route('admin.JenisMakanan.create') }}"
                class="d-none d-sm-inline-block btn btn-sm btn-info shadow-sm"><i
                    class="fas fa-plus fa-sm text-white-50"></i> Tambah Data Jenis Menu</a>
        </div>

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-info">Data Jenis Menu</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="tableMakanan" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Jenis Menu</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Jenis Menu</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                        <tbody>

                            @foreach ($JenisMakanan as $jm)
                            <tr>
                                <td>{{ $jm->JenisMakanan }}</td>
                                <td>
                                    <a href="{{ route('admin.JenisMakanan.edit', $jm) }}" class="btn btn-primary">Edit</a>
                                    <a href="{{ route('admin.JenisMakanan.delete', $jm->id) }}"
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
