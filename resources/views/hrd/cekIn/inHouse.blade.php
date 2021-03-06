@extends('hrd.layouts')

@section('content-hrd')
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Data Customer In House</h1>
        </div>

        <div class="row">
            @foreach ($cekInCustomer as $cekIn)
                <div class="col-md-3">
                    <div class="card border-left-success shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                        Kamar </div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $cekIn->noKamar }}</div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-bed fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            
        </div>

    </div>
@endsection