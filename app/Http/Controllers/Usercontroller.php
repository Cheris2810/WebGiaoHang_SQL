<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; //Sử dụng database
use Illuminate\Support\Facades\Session;
use App\Http\Requets;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Result;
use App\Http\Results;
session_start();

class Usercontroller extends Controller
{
    public function home(Request $request){
              $user_email = $request->email_user;
              $user_password = md5($request->password_user);
                                                 
              $result = DB::table('usership')->where('email_user',$user_email)->where('password_user',$user_password)->first();
              if($result){
                     Session::put('name_user',$result->name_user);
                     Session::put('id_user',$result->id_user);
                     return Redirect::to('home');
              }else{
                     Session::put('message','Email hoặc mật khẩu nhập sai!');
                     return view('pages.login');
              }
       }
       public function log_out(){
             return view('pages.login');
       }
       
}
