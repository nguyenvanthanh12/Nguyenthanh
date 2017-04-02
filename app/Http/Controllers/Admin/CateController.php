<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CateController extends Controller
{
	public function getCateList(){
		return view('admin.modules.loaisanpham.list');
	}
    public function getCateAdd(){
    	return view('admin.modules.loaisanpham.add');
    }

    public function postCateAdd(){

    }
}
