<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pesanMakanan extends Model
{
    use HasFactory;

    protected $fillable = [
        'no_kamar',
        'nama',
        'jumlah',
        'pesanan',
        'total'
    ];

    public function customer(){

        return $this->belongsTo(Customer::class);
    }

    public function menu(){

        return $this->belongsTo(MenuMakanan::class);
    }


}
