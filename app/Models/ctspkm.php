<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ctspkm extends Model
{
    protected $table = 'ts_ctspkm';
    protected $guarded = [];

    public function Even1(){
    	return $this->belongsTo('App\Models\Even1');
    }

    public function Product(){
    	return $this->belongsTo('App\Models\product');
    }
}
