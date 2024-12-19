<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class newstudentauthe extends Controller
{
    function login(){
        return view('col_student.login');
    }
    function loginPost(Request $request){
        $request->validate([
            'int_email'=>'required',
            'int_password'=>'required'
        ]);
        $credentials = $request->only('int_email', 'int_password');
        if(Auth::attempt($credentials)){
            return redirect()->intended(route('stu_dashboard'));
        }
        return redirect(route('col_student_login'))->with("error", "Login details are not valid");
    }
    function registration(){
        return view('col_student.register');
    }
    function registrationPost(Request $request){
        $request->validate([
            'int_fullname'=>'required',
            'int_email'=>'required|email|unique:users',
            'int_password'=>'required',
            'int_conf_password'=>'required'
        ]);
        $data['name'] = $request->int_fullname;
        $data['email'] = $request->int_email;
        $data['password'] = Hash::make($request->int_password);
        $user = User::create($data);
        if(!$user){
            return redirect(route('col_student_register'))->with("error", 'Registration failed try again');
        }
        return redirect(route('col_student_login'))->with("success", "Registration successfull, Login to access the app.");
    }
    function logout(){
        Session::flush();
        Auth::logout();
        return redirect((route('col_student_login')));
    }
}
