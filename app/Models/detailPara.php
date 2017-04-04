<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class detailPara extends Model
{
    protected $table = 'ts_loaithongso';
    protected $guarded = [];

    public function parameter(){
    	return $this->belongsTo('App\Models\parameter');
    }

    public function paraProduct(){
    	return $this->belongsTo('App\Models\product');
    }
}
