<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    use HasFactory;

    protected $fillable = [
        
        'namaKaryawan',
        'passwordKaryawan',
        'jenisKelamin',
        'tangalLahir'
    ];

    public function CekInCustomer(){

        return $this->belongsTo(CekInCustomer::class);
    }

}
