@extends('karyawan.layouts')

@section('content-karyawan')
    <div class="container-fluid">

        <div class="row">

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    Kamar Tersedia</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $kamarCount }}</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-bed fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-success shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                    On Books</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $cekInCount }}</div>

                            </div>
                            <div class="col-auto">
                                <i class="fas fa-bed fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Pending Requests Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-warning shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                    Menu Yang Tersedia</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $makananCount }}</div>

                            </div>
                            <div class="col-auto">
                                <i class="fas fa-utensils fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Pending Requests Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-info shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                    Jumlah Pesanan</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $pmCount }}</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-users fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">

            <!-- Area Chart -->
            <div class="col-xl-6 col-lg-6">
                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">Customer Cek In Hari Ini</h6>
                        <div class="dropdown no-arrow">
                            <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
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
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">Customer Cek Out Hari Ini</h6>
                        <div class="dropdown no-arrow">
                            <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
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
        {{-- End Row --}}

        <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Pesanan Makanan</h6>
                <div class="dropdown no-arrow">
                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
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
                <div class="row">
                    @php
                        $no = 1;
                    @endphp
                    @if ($pesanMakanan == null)
                        <div class="mx-auto">
                            <h3>Belum ada pesanan</h3>
                        </div>
                    @else
                        @foreach ($pesanMakanan as $item)
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-body">
                                        <b>Pesanan no {{ $no++ }}</b>
                                        <br><br>
                                        No Kamar : {{ $item->no_kamar }} <br>
                                        Atas Nama : {{ $item->nama }} <br>
                                        Jumlah Pesanan : {{ $item->jumlah }} <br>
                                        List Pesanan : {{ $item->pesanan }} <br>
                                        Harga : {{ $item->total }}
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>

        <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Pesanan Laundry</h6>
                <div class="dropdown no-arrow">
                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
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
                <div class="row">
                    @php
                        $no = 1;
                    @endphp
                    @if ($laundry == null)
                        <div class="mx-auto">
                            <h3>Belum ada pesanan Laundry</h3>
                        </div>
                    @else
                        @foreach ($laundry as $item)
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-body">
                                        <b>Laundry no {{ $no++ }}</b>
                                        <br><br>
                                        No Kamar : {{ $item->no_kamar }} <br>
                                        Atas Nama : {{ $item->nama }} <br>
                                        Jumlah KG : {{ $item->berat }}Kg <br>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif
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
