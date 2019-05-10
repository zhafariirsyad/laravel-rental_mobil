<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $fillable = [
        'nama','merk', 'plat_no', 'warna', 'tahun', 'status'
    ];
}
