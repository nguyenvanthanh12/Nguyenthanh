<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\productRequest;
use App\Models\product;
class productController extends Controller
{
    public function getProductList(){
    	return view('admin.modules.sanpham.list');
    }

    public function getProductAdd(){
    	return view('admin.modules.sanpham.add');
    }

    public function postProductAdd(){
    	
    }
}
