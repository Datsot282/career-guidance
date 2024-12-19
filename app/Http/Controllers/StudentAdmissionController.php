<?php

namespace App\Http\Controllers;

use App\application_publications;
use App\Courses;
use App\Studentapplications;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StudentAdmissionController extends Controller
{
    public function index()
    {
        $userId = Auth::id();
        $user = Auth::user();
        $admissions_published='approved';
        $student_admissions_list = Studentapplications::where([
            ['student_id', '=', $userId],
            ['status', '=', $admissions_published],
        ])->with('course', 'school')->get();
//         $userDataCount = $userData->count();
        $courses = Courses::all();
        $application_publications =application_publications::with('course', 'school')
            ->get();
        return view('col_student.admissions', compact('student_admissions_list', 'userDataCount', 'user', 'courses', 'application_publications'));
    }
}
