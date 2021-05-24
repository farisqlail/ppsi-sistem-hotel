<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kamar extends Model
{
    use HasFactory;

    protected $fillable = [
        'ketersediaanKamar',
        'jenisKamar'
    ];
    
    public function laundry(){

        return $this->belongsTo(Laundry::class);
    }
}
