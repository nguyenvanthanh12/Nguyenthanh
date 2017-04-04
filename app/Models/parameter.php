<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class parameter extends Model
{
    protected $table = 'ts_thongso';
    protected $guarded = [];

    public function paraDetail(){
    	return $this->hasMany('App\Models\detailPara');
    }
}
