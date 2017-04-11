<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class productImage extends Model
{
    protected $table = 'ts_anh';
    protected $guarded = [];

    public function parameter(){
    	return $this->belongsTo('App\Models\product');
    }
}
