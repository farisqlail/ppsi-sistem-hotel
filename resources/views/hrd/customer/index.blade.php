@extends('hrd.layouts')

@section('content-hrd')
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Data Customer</h1>
            <a href="{{ route('admin.customer.create') }}"
                class="d-none d-sm-inline-block btn btn-sm btn-info shadow-sm"><i
                    class="fas fa-plus fa-sm text-white-50"></i> Tambah Data Customer</a>
        </div>

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-info">Data Customer</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="tableCustomer" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>nama</th>
                                <th>no telepon</th>
                                <th>Id Card</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>nama</th>
                                <th>no telepon</th>
                                <th>Id Card</th>
                                <th>Actions</th>
                            </tr>
                        </tfoot>
                        <tbody>

                            @foreach ($customer as $cstmr)
                            <tr>
                                <td>{{ $cstmr->nama }}</td>
                                <td>{{ $cstmr->noTelp }}</td>
                                <td>{{ $cstmr->idCard }}</td>

                                <td>
                                    <a href="{{ route('admin.customer.edit', $cstmr) }}" class="btn btn-primary">Edit</a>
                                    <a href="{{ route('admin.customer.delete', $cstmr->id) }}"
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
            $('#tableCustomer').DataTable();
        });

    </script>

@endpush
