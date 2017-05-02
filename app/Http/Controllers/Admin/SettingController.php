<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Setting;
use File;

class SettingController extends Controller
{
    public function getSetting1(){
    	$setting = Setting::select('id','logo','sdt','color_top','color_footer')->where('id',5)->first();
    	return view('admin.modules.caidat.setting',compact('setting'));
    }

    public function postSetting(Request $Request){
        $this->validate($Request,
            [
                'contact_phone'       =>  'regex:/[0-9]/'    
            ],
            [
                 'contact_phone.regex'    =>  'số điện thoại phải là số nguyên dương !'
                
            ]
         );
    	$data = Setting::find(5);
        if(!empty($Request->igmEven)){
            $file_name = $Request->file('igmEven')->getClientOriginalName();
            $data->logo        =   $file_name;
            if(strlen($file_name) >0) {
            $fImageCurrent  = $Request->fImageCurrent;
            if(file_exists(public_path().'/upload/'.$fImageCurrent)){
                File::delete(public_path().'/upload/'.$fImageCurrent);
            }
            
            $Request->file('igmEven')->move('upload/',$file_name);
         }
        }
    	
         $data->sdt        =   $Request->contact_phone;
         if (!empty($Request->color_header)) {
             $data->color_top    =   $Request->color_header;
         }
         if (!empty($Request->color_footer)) {
             $data->color_footer       =   $Request->color_footer;
         }
         
         
         

    	$data->save();
    	return redirect()->route('getSetting1')->with(['flash_level' => 'success', 'flash_message' => 'thay đổi cài đặt thành công']);
    }
}
