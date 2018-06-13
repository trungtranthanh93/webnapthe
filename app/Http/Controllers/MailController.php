<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Mail;
use Auth;
class MailController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function sendInfor(Request $request)
    {
        $email = Auth::user()->email;
        $name = Auth::user()->name;
        $input = $request->all();
        $data1 = $input["loaithe"];
        $data = array('name'=>$name,'email'=>$email,'loaithe'=>$input["loaithe"],'menhgia'=>$input["menhgia"], 'mathe'=>$input['mathe'],'seri'=>$input['seri']);
        Mail::send('mail',$data , function($message){
	        $message->to('trungtranthanh.k56@gmail.com', 'TrungTran')->subject("Người gửi thẻ nạp :");
	    });
        Session::flash('message', 'Gửi thẻ nạp thành công');

        return view('welcome');
    }
}