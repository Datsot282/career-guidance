<?php

namespace App\Http\Controllers;

use App\allinstitudes;
use App\Fuculties;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\allinstitudess;


class newstudentauthentication extends Controller
{
    function login(){
        return view('col_student.login');
    }
    function loginPost(Request $request){
        $request->validate([
            'email'=>'required',
            'password'=>'required'
        ]);
        $credentials = $request->only('email', 'password');
        if(Auth::attempt($credentials)){
            $user = Auth::user();
            if($user['user_type']==3){
                return redirect()->intended(route('studashboard'));
            }
            elseif ($user['user_type']==2){
                return redirect()->intended(route('shcdashboard'));
            }
            elseif ($user['user_type']==1){
                return redirect()->intended(route('admdashboard'));
            }
        }
        return redirect(route('col_student_login'))->with("error", "Login details are not valid");
    }
    function student_registration(){
        return view('col_student.register');
    }
    function school_registration(){
        return view('col_school.register');
    }
    function school_registrationPost(Request $request){
        $request->validate([
            'int_fullname'=>'required',
            'school_name'=>'required',
            'school_contacts'=>'required',
            'password'=>'required',
            'int_conf_password'=>'required',
            'email'=>'required'

        ]);
        $user_type=2;
        $sch_data['name']=$request->school_name;
        $sch_data['description']='Yet To be update';
        $sch_data['email']=$request->email;
        $sch_data['contacts']=$request->school_contacts;
        $sch_data['location']='yet to be update';
        $school = allinstitudes::create($sch_data);
        if ($school) {
            $data['name'] = $request->int_fullname;
            $data['email'] = $request->email;
            $data['user_type'] = $user_type;
            $data['school_id'] = $school->id; // Access the `id` directly
            $data['password'] = Hash::make($request->password);
            $data['user_about'] = ' ';
            $data['user_contacts'] = ' ';
            $data['gender'] = 0;
            $data['dateofbirth'] = ' ';
            $data['math'] = 0;
            $data['english'] = 0;
            $data['biology'] = 0;
            $data['physics'] = 0;
            $data['accounting'] = 0;
            $data['contact'] = 0;
            $data['remember_token'] = ' ';

            $user = User::create($data);
            $datssa['name']='Dummy Fululty';
            $datssa['school_id']= $school->id;
            $fuculty=Fuculties::create($datssa);
            if (!$user) {
                return redirect(route('col_student_register'))->with("error", 'Registration failed try again');
            }

            return redirect(route('col_student_login'))->with("success", "Registration successful, Login to access the app.");
        }
    }
    function student_registrationPost(Request $request){
        $request->validate([
            'int_fullname'=>'required',
            'password'=>'required',
            'int_conf_password'=>'required',
            'email'=>'required'

        ]);
        $user_type=3;
        $data['name'] = $request->int_fullname;
        $data['email'] = $request->email;
        $data['user_type'] = $user_type;
        $data['password'] = Hash::make($request->password);
        $data['user_about'] = ' ';
        $data['user_contacts'] = ' ';
        $data['gender'] = 0;
        $data['dateofbirth'] = ' ';
        $data['math'] = 0;
        $data['english'] = 0;
        $data['biology'] = 0;
        $data['physics'] = 0;
        $data['accounting'] = 0;
        $data['contact'] = 0;
        $data['remember_token'] = ' ';
        $data['school_id'] = 0;
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
