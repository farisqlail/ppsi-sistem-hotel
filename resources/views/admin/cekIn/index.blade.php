@extends('admin.layouts')

@section('content-admin')
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Data Cek In Customer</h1>
            <a href="{{ route('admin.cekIn.create') }}"
                class="d-none d-sm-inline-block btn btn-sm btn-info shadow-sm"><i
                    class="fas fa-plus fa-sm text-white-50"></i> Tambah Data Cek In Customer</a>
        </div>

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-info">Data Cek In Customer</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="tableCekIn" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                               <th>Nama Customer</th>
                               <th>Nama Karyawan</th>
                               <th>Tanggal Cek In</th>
                               <th>Jumlah Tamu</th>
                               <th>Tanggal Cek Out</th>
                               <th>Tipe Kamar</th>
                               <th>Nomor Kamar</th>
                               <th>Deposit</th>
                               <th>Action</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Nama Customer</th>
                                <th>Nama Karyawan</th>
                                <th>Tanggal Cek In</th>
                                <th>Jumlah Tamu</th>
                                <th>Tanggal Cek Out</th>
                                <th>Tipe Kamar</th>
                                <th>Nomor Kamar</th>
                                <th>Deposit</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                        <tbody>

                            @foreach ($cekInCustomer as $cekIn)
                            <tr>
                                <td>{{ $cekIn->namaCustomer }}</td>
                                <td>{{ $cekIn->namaKaryawan }}</td>
                                <td>{{ $cekIn->tanggalCekIn }}</td>
                                <td>{{ $cekIn->jumlahTamu }}</td>
                                <td>{{ $cekIn->tanggalCekOut }}</td>
                                <td>{{ $cekIn->tipeKamar }}</td>
                                <td>{{ $cekIn->noKamar }}</td>
                                <td>{{ $cekIn->deposit }}</td>
                                <td>
                                    <a href="{{ route('admin.cekIn.edit', $cekIn) }}" class="btn btn-primary">Edit</a>
                                    <a href="{{ route('admin.cekIn.delete', $cekIn->id) }}"
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
            $('#tableCekIn').DataTable();
        });

    </script>

@endpush
