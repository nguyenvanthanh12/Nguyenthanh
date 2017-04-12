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

    public function Image(){
    	return $this->hasMany('App\Models\productImage');
    }

    public function DetailPara(){
        return $this->hasMany('App\Models\detailPara');
    }

    public function para(){
        return $this->belongsToMany('App\Models\parameter');
    }
}
