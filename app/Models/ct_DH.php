<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ct_DH extends Model
{
    protected $table = 'ts_ctddh';
    protected $guarded = [];

    public function donhangchitiet(){
    	return $this->belongsTo('App\Models\Dondathang');
    }

    public function donProduct(){
    	return $this->belongsTo('App\Models\product');
    }
}
