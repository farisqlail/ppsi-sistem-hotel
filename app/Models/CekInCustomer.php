<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CekInCustomer extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'noTelp',
        'idKaryawan',
        'deposit',
        'jenisPembayaran',
        'tglCekIn',
        'tglCekOut'
    ];

    public function customer(){

        return $this->hasMany(Customer::class);
    }
}
