<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Even1 extends Model
{
    protected $table = 'ts_spkhuyenmai';
    protected $guarded = [];

    public function productEvent(){
    	return $this->belongsToMany('App\Models\product');
    }

    public function ctspkm(){
        return $this->hasMany('App\Models\ctspkm');
    }
}
