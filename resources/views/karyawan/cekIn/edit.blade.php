@extends('karyawan.layouts')

@section('content-karyawan')

     <div class="container-fluid">
        <h1 class="h3 mb-2 text-gray-800">Cek In Customer</h1>

        <div class="card shadow mb-4 mt-3">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Cek In Customer</h6>
            </div>
            <div class="card-body">

                <form action="{{ route('admin.cekIn.update', $cekIn) }}" method="post">
                    {{ csrf_field() }}
                    {{ method_field('PATCH') }}

                    <div class="row">
                        <div class="col-md-6">                            
                            <div class="form-group"> 
                                <label for="">Nama Customer</label>
                                <input type="text" name="namaCustomer" class="form-control" value="{{ $cekIn->namaCustomer }}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group"> 
                                <label for="">Karyawan yang menangani</label>
                                <input type="text" name="namaKaryawan" class="form-control" value="{{ $cekIn->namaKaryawan }}">
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
                                <input type="date" name="tanggalCekOut" class="form-control" value="{{ $cekIn->tanggalCekOut }}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group"> 
                                <label for="">Jumlah Deposit (Rp)</label>
                                <input type="text" name="deposit" id="deposit" class="form-control" value="{{ $cekIn->deposit }}">
                            </div>
                        </div>
                    </div>
                    
                    <hr>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group"> 
                                <label for="">Tipe Kamar</label>
                                <select class="form-control" name="type_id">
                                    <option selected>Pilih Tipe Kamar</option>
                                    @foreach ($typeKamar as $tKamar)
                                        <option value="{{ $tKamar->id }}">{{ $tKamar->typeKamar }}</option>
                                    @endforeach
                                  </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="">Nomor Kamar</label>
                            <select class="form-control" name="noKamar">
                                <option selected>Pilih No Kamar</option>
                                    @foreach ($kamar as $kmr)
                                        <option value="{{ $kmr->noKamar }}">{{ $kmr->noKamar }}</option>
                                    @endforeach
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