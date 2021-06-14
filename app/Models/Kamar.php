<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kamar extends Model
{
    use HasFactory;

    protected $fillable = [

        'tipeKamar',
        'jenisKamar',
        'kapasitas',
        'jenisKasur',
        'harga',
        'includeBreakfast'
    ];

    public function CekInCustomer()
    {

        return $this->belongsTo(CekInCustomer::class);
    }
}
