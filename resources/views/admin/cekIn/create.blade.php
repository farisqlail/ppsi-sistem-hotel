@extends('admin.layouts')

@section('content-admin')

     <div class="container-fluid">
        <h1 class="h3 mb-2 text-gray-800">Cek In Customer</h1>

        <div class="card shadow mb-4 mt-3">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Cek In Customer</h6>
            </div>
            <div class="card-body">

                <form action="{{ route('admin.cekIn.store') }}" method="post">
                    {{ csrf_field() }}

                    <div class="row">
                        <div class="col-md-6">                            
                            <div class="form-group"> 
                                <label for="">Nama Customer</label>
                                <input type="text" name="namaCustomer" class="form-control" placeholder="Nama Customer">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group"> 
                                <label for="">Karyawan yang menangani</label>
                                <input type="text" name="namaKaryawan" class="form-control" placeholder="Nama Customer">
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group"> 
                                <label for="">Jumlah Tamu</label>
                                <select class="form-control" name="jumlahTamu">
                                    <option selected>Pilih Jumlah Tamu</option>
                                    <option value="1">1 Orang</option>
                                    <option value="2">2 Orang</option>
                                    <option value="3">3 Orang</option>
                                  </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group"> 
                                <label for="">Tanggal Cek In </label>
                                <input type="text" name="tanggalCekIn" class="form-control" value="{{ date('d-m-Y') }}" readonly>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group"> 
                                <label for="">Tanggal Cek Out</label>
                                <input type="date" name="tanggalCekOut" class="form-control" placeholder="Tanggal Cek Out">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group"> 
                                <label for="">Jumlah Deposit (Rp)</label>
                                <input type="text" name="deposit" id="deposit" class="form-control" placeholder="Deposit">
                            </div>
                        </div>
                    </div>
                    
                    <hr>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group"> 
                                <label for="">Tipe Kamar</label>
                                <select class="form-control" name="tipeKamar">
                                    <option selected>Pilih Tipe Kamar</option>
                                    <option value="deluxe">Deluxe</option>
                                  </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="">Nomor Kamar</label>
                            <select class="form-control" name="noKamar">
                                <option selected>Pilih No Kamar</option>
                                <option value="201">201</option>
                              </select>
                        </div>
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
        $('#deposit').mask('000.000.000.000', {
            reverse: true
        });

    </script>
@endpush