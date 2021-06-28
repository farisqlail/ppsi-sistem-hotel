<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laundry extends Model
{
    
    use HasFactory;

    protected $fillable = [
        'no_kamar',
        'nama',
        'jenisLaundri',
        'berat',
        'total'
    ];

    public function kamar(){

        return $this->hasMany(Kamar::class);
    }

}
