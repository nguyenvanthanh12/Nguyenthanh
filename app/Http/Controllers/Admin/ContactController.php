<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{
    public function getContactList(){
    	$data = Contact::select('id','TieuDe','NoiDung','HoTen','email','trangthai')->orderBy('id','DESC')->get()->toArray();
        return view('admin.modules.contact.list',['data' => $data]);
    }

    public function getSetting($id){
		$contact = Contact::find($id);
		$contact->trangthai = 1;
		$contact->save();

		return redirect()->route('getContactList');
    }
}
