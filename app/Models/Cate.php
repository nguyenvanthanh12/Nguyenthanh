<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cate extends Model
{
    protected $table = 'ts_loaisanpham';
    protected $guarded = [];

    public function productCate (){
    	return $this->hasMany('App\Models\product');
    }
}
