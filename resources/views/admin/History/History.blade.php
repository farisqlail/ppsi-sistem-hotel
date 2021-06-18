@extends('admin.layouts')

@section('content-admin')
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">History   </h1>
    </div>


      <!-- Content Row -->
      <div class="row">

        <!-- Earnings (Monthly) Card Example -->
       

    <div class="row">

        <!-- Area Chart -->
        <div class="col-xl-6 col-lg-6">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div
                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Customer Cek In Hari Ini</h6>
                    <div class="dropdown no-arrow">
                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                            aria-labelledby="dropdownMenuLink">
                            <div class="dropdown-header">Dropdown Header:</div>
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </div>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <table class="table table-bordered" id="tableCekIn" width="100%" cellspacing="0">
                        <thead>
                            <tr class="bg-muted">
                                <th>No Kamar</th>
                                <th>Nama Customer</th>
                                <th>Tanggal Cek In</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr class="bg-muted">
                                <th>No Kamar</th>
                                <th>Nama Customer</th>
                                <th>Tanggal Cek In</th>
                            </tr>
                        </tfoot>
                        <tbody>

                            @foreach ($cekInDash as $ck)
                            <tr class="bg-success text-white">
                                <td>{{ $ck->noKamar }}</td>
                                <td>{{ $ck->namaCustomer }}</td>
                                <td>{{ $ck->tanggalCekIn }}</td>

                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- Pie Chart -->
        <div class="col-xl-6 col-lg-6">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div
                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Customer Cek Out Hari Ini</h6>
                    <div class="dropdown no-arrow">
                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                            aria-labelledby="dropdownMenuLink">
                            <div class="dropdown-header">Dropdown Header:</div>
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </div>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <table class="table table-bordered" id="tableCekOut" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No Kamar</th>
                                <th>Nama Customer</th>
                                <th>Tanggal Cek In</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>No Kamar</th>
                                <th>Nama Customer</th>
                                <th>Tanggal Cek In</th>
                                <th>Tanggal Cek Out</th>
                            </tr>
                        </tfoot>
                        <tbody>

                            @foreach ($cekInTrash as $ck)
                                @if ($ck->trashed())
                                    <tr class="bg-danger text-white">
                                        <td>{{ $ck->noKamar }}</td>
                                        <td>{{ $ck->namaCustomer }}</td>
                                        <td>{{ $ck->tanggalCekIn }}</td>
        
                                    </tr>
                                @endif
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    
</div>
@endsection

@push('script')

    <script>
        $(document).ready(function() {
            $('#tableCekIn').DataTable();
            $('#tableCekOut').DataTable();
        });

    </script>

@endpush