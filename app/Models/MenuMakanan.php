<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MenuMakanan extends Model
{
    use HasFactory;

    protected $fillable = [
        'jenis_id',
        'namaMenu',
        'jumlah',
        'harga'
    ];

    public function jenis(){

        return $this->belongsTo(JenisMakanan::class);
    }

}
