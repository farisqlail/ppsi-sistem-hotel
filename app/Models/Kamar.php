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
        'jumlah'
    ];

    public function CekInCustomer()
    {

        return $this->belongsTo(CekInCustomer::class);
    }

    public function type(){

        return $this->belongsTo(TypeKamar::class);
    }
}
