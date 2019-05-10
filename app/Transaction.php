<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $guarded = [
        'total_denda','status','tgl_dikembalikan'
    ];

    public function user()
    {
        return $this->hasOne('App\User','id','user_id');
    }

    public function car()
    {
        return $this->hasOne('App\Car','id','mobil_id');
    }

    public function costumer()
    {
        return $this->hasOne('App\Costumer','id','kostumer_id');
    }
}
