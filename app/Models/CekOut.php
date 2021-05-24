<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CekOut extends Model
{
    use HasFactory;

    protected $fillable = [
        'idPesanMakanan',
        'pelanggaran',
        'total'
    ];
}
