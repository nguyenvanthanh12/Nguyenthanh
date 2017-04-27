<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SettingController extends Controller
{
    public function getSetting1(){
    	return view('admin.modules.caidat.setting');
    }
}
