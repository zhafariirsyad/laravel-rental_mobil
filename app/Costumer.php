<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Costumer extends Model
{
    protected $fillable = [
        'nama', 'alamat', 'jk', 'no_telp', 'no_ktp'
    ];
}
