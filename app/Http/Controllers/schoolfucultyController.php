<?php

namespace App\Http\Controllers;

use App\allinstitudes;
use App\application_publications;
use App\Courses;
use App\Fuculties;
use App\Studentapplications;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class schoolfucultyController extends Controller
{
    public function index()
    {
        $userId = Auth::id();
        $user = Auth::user();
        $school_id=$user->school_id;
        $fuculties=Fuculties::where('school_id', $school_id)
            ->with('course')
            ->get();
        $fucultiescount=$fuculties->count();
        $userData = Studentapplications::where('school_id', $school_id)
            ->with('course', 'school', 'student')
            ->get();
        $userDataCount = $userData->count();
        $courses = Courses::with('school')->get();
        $application_publications =application_publications::with('course', 'school')
            ->get();
        redirect()->back()->with('error', 'Record not found.');
        return view('col_school.fuculties', compact('userData', 'userDataCount', 'user', 'courses', 'application_publications', 'fuculties'));
    }
    function schfucultyPost(Request $request){
        $request->validate([
            'fuculty_names'=>'required'
        ]);
        $user = Auth::user();
        $school_id=$user->school_id;
        $data['name']=$request->fuculty_names;
        $data['school_id']=$school_id;
        $school = Fuculties::create($data);
        if ($school) {
            return redirect()->back()->with("error", 'Registration failed try again');
        }
        else
        {
            return redirect()->back()->with("success", "Registration successful, Login to access the app.");
        }
    }
}
