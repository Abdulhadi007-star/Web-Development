<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
class registerController extends Controller
{
    
    public function addData(Request $request){
        
        $name = $request->input('name');
        $email = $request->input('email');
        $password = $request->input('password');

        DB::insert('insert into user(email,password,name) values(?,?,?)',[$email,$password,$name]);
        return redirect('/login');
    }

    public function loginUser(Request $request){
        $name =$request->input('name');
        $password = $request->input('password');
        $user = DB::select('select * from user where name = ? and password = ?',[$name,$password]);
        if(empty($user)){
            $em ='username or email invalid';
            return view ('login',['em' => $em]);
        }
        $users = null;
        foreach($user as $u){
            $users =$u;
        }
        Session::put('user',$users);
        return redirect('/home');
    }
}
