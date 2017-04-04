<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Even1 extends Model
{
    protected $table = 'ts_khuyenmai';
    protected $guarded = [];

    public function productEvent(){
    	return $this->hasMany('App\Models\product');
    }
}
