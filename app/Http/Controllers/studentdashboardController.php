<?php

namespace App\Http\Controllers;

use App\Alladmissions;
use App\application_publications;
use App\Courses;
use App\StudentApplications;
use Illuminate\Support\Facades\Auth;

class StudentDashboardController extends Controller
{
    public function index()
    {
        $userId = Auth::id();
        $user = Auth::user();

        $userData = StudentApplications::with('course', 'school')
            ->where('student_id', $userId)
            ->get();
        $user_admissions = Alladmissions::with('course', 'school')
            ->where('student_id', $userId)
            ->get();
        $application_publications = application_publications::with('course', 'school')
            ->get();
        $courserss = Courses::all();
        $user_admissions_count = $user_admissions->count();
        $userDataCount = $userData->count();

        return view('col_student.dashboard', compact(
            'userData',
            'userDataCount',
            'user_admissions_count',
            'application_publications',
            'courserss',
            'user'
        ));
    }
}
