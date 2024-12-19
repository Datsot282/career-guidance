<?php

namespace App\Http\Controllers;

use App\Alladmissions;
use App\application_publications;
use App\Fuculties;
use App\Courses;
use App\Studentapplications;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class schooldashboardController extends Controller
{
    public function index() {
        $userId = Auth::id();
        $user = Auth::user();
        $userData = StudentApplications::where('school_id', $userId)
            ->with('course', 'school')
            ->get();
        $scool_use=$user->school_id;
        $shool_fuculties=Fuculties::where('school_id', $scool_use)
            ->with('school')
            ->get();
        $application_publications = Studentapplications::where('school_id', $scool_use)
            ->with('course', 'school', 'student')
            ->get();
        $shool_fuculties_count =$shool_fuculties->count();
        $userDataCount = $userData->count();
        $application_publicationscount = $application_publications ->count();
        $courserss=Courses::where('school_id', $scool_use);
        $courserss_count=$courserss->count();
        return view('col_school.dashboard', compact('userData', 'userDataCount', 'shool_fuculties', 'application_publications', 'shool_fuculties_count', 'courserss', 'user', 'courserss_count', 'application_publicationscount'));
    }
}
