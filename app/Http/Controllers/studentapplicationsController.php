<?php

namespace App\Http\Controllers;

use App\Alladmissions;
use App\application_publications;
use App\Courses;
use App\Studentapplications;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StudentApplicationsController extends Controller
{
    public function index()
    {
        $userId = Auth::id();
        $user = Auth::user();
        $userData = Studentapplications::where('student_id', $userId)
            ->with('course', 'school')
            ->get();
        $userDataCount = $userData->count();
        $courses = Courses::with('school')->get();
        $application_publications =application_publications::with('course', 'school')
            ->get();
        return view('col_student.applications', compact('userData', 'userDataCount', 'user', 'courses', 'application_publications'));
    }

    public function applyforcoursePost(Request $request)
    {
        $request->validate([
            'selected_course_id' => 'required',
            'selected_school_id' => 'required',
            'email' => 'required|email',
            'course_select_math_in' => 'required',
            'course_select_english_in' => 'required',
            'course_select_biology_in' => 'required',
            'course_select_physics_in' => 'required',
            'course_select_accounting_in' => 'required',
        ]);

        $userId = Auth::id();
        $data = [
            'school_id' => $request->selected_school_id,
            'course_id' => $request->selected_course_id,
            'student_id' => $userId,
            'application_email' => $request->email,
            'student_grade_math' => $request->course_select_math_in,
            'student_grade_english' => $request->course_select_english_in,
            'student_grade_biology' => $request->course_select_biology_in,
            'student_grade_physics' => $request->course_select_physics_in,
            'student_grade_accounting' => $request->course_select_accounting_in,
            'status' => 'Pending', // Example default value
        ];

        $apply = Studentapplications::create($data);
        if (!$apply) {
            return redirect()->route('stuapps')->with("error", 'Application failed. Please try again.');
        }
        return redirect()->route('stuapps')->with("success", "Application successful!");
    }
}
