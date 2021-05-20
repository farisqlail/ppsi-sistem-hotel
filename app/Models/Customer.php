<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'noTelp',
        'idCard'
    ];

    public function CekInCustomer(){

        return $this->belongsTo(CekInCustomer::class);
    }
}
