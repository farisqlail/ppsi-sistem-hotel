<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kamar extends Model
{
    use HasFactory;

    protected $fillable = [
        'noKamar',
        'type_id',
        'kapasitas',
        'jenisKasur',
<<<<<<< HEAD
        'harga'
=======
        'harga',
        'includeBreakfast'
>>>>>>> c3e4c85f85ff3c54b8ca23557d8321ab90680d1c
    ];

    public function CekInCustomer()
    {

        return $this->belongsTo(CekInCustomer::class);
    }

    public function type(){

        return $this->belongsTo(TypeKamar::class);
    }
}
