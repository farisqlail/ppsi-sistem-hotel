<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pesanMakanan extends Model
{
    use HasFactory;

    protected $fillable = [
        'idMenu',
        'cekIn',
        'harga'
    ];
}
