<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dondathang extends Model
{
    protected $table = 'ts_dondathang';
    protected $guarded = [];

    public function User(){
    	return $this->belongsTo('App\Models\User');
    }

    public function CTDH(){
    	return $this->hasMany('App\Models\ct_DH');
    }

    public function DH_PR(){
        return $this->belongsToMany('App\Models\product');
    }
}
