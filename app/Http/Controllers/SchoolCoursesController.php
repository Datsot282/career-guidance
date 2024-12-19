<?php

namespace App\Http\Controllers;

use App\application_publications;
use App\Courses;
use App\Fuculties;
use App\Studentapplications;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SchoolCoursesController extends Controller
{
    public function index()
    {
        $userId = Auth::id();
        $user = Auth::user();
        $school_id=$user->school_id;
        $courses=Courses::where('school_id', $school_id)
            ->with('school', 'faculty')
            ->get();
        $faculties=Fuculties::where('school_id', $school_id)
            ->with('school')
            ->get();
        return view('col_school.courses', compact('user', 'courses', 'faculties'));
    }
    function registercoursePost(Request $request){
        $request->validate([
            'course_names'=>'required',
            'sch_fuculty'=>'required',
            'course_select_math_in'=>'required',
            'course_select_english_in'=>'required',
            'course_select_biology_in'=>'required',
            'course_select_physics_in'=>'required',
            'course_select_accounting_in'=>'required'
        ]);
        $user = Auth::user();
        $school_id=$user->school_id;
        $data['fuculty_id']=$request->sch_fuculty;
        $data['school_id']=$school_id;
        $data['course_name']=$request->course_names;
        $data['math']=$request->course_select_math_in;
        $data['english']=$request->course_select_english_in;
        $data['biology']=$request->course_select_biology_in;
        $data['physics']=$request->course_select_physics_in;
        $data['accounting']=$request->course_select_accounting_in;

        $school = Courses::create($data);
        if ($school) {
            return redirect()->back()->with("error", 'Registration failed try again');
        }
        else
        {
            return redirect()->back()->with("success", "Registration successful, Login to access the app.");
        }
    }
}
