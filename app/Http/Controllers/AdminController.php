<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class AdminController extends Controller
{
    public function login(Request $request){
        if($request->isMethod('post')){
            $data = $request->input();
            if(Auth::attempt(['email'=>$data['email'],'password'=>$data['password'],'admin'=>'1'])){
                echo"Succesess";die;
            }else{
                echo"failed";die;
            }
        }
        return view("admin.admin_login");
    }
    public function dashboard(){
        return view('admin.dashboard');
    }
}
