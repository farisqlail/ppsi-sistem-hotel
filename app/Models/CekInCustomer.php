<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CekInCustomer extends Model
{
    use HasFactory;

    protected $fillable = [
        'namaCustomer',
        'namaKaryawan',
        'tanggalCekIn',
        'jumlahTamu',
        'tanggalCekOut',
        'deposit',
        'type_id',
        'noKamar'
    ];

    public function customer(){

        return $this->hasOne(Customer::class);
    }

    public function kamar(){
        
        return $this->hasOne(Kamar::class);
    }

    public function karyawan(){

        return $this->hasOne(Karyawan::class);
    }
}
