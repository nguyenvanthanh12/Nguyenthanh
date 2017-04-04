<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    protected $table = 'ts_sanpham';
    protected $guarded = [];

    public function Cate(){
    	return $this->belongsTo('App\Models\Cate');
    }

    public function Event(){
    	return $this->belongsTo('App\Models\Even1');
    }
}
