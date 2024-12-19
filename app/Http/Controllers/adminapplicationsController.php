<?php

namespace App\Http\Controllers;

use App\allinstitudes;
use App\allinstitudess;
use App\Courses;
use App\Fuculties;
use App\Studentapplications;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class adminapplicationsController extends Controller
{
    public function index() {
        $userId = Auth::id();
        $user = Auth::user();
        $scool_use=$user->school_id;
        $userData = StudentApplications::all();
        $shool_fuculties=Fuculties::all();
        $application_publications = Studentapplications::all();
        $courserss=Courses::all();
        $schools=allinstitudess::all();

        $userDataCount = $userData->count();
        $courserss_count=$courserss->count();
        $schools_count=$courserss->count();
        $shool_fuculties_count =$schools->count();
        $application_publicationscount = $application_publications ->count();

        return view('col_admin.dashboard', compact('userData', 'userDataCount', 'schools_count', 'shool_fuculties', 'application_publications', 'shool_fuculties_count', 'courserss', 'user', 'courserss_count', 'application_publicationscount'));
    }
    function create_school_profilePost(Request $request){
        $request->validate([
            'sch_full_names'=>'required',
            'sch_about'=>'required',
            'sch_contacts'=>'required',
            'sch_email'=>'required',
            'sch_location'=>'required',
        ]);
        $user = Auth::user();
        $data['name']=$request->sch_full_names;
        $data['description']=$request->sch_about;
        $data['contacts']=$request->sch_contacts;
        $data['email']=$request->sch_email;
        $data['location']=$request->sch_location;
        $school = allinstitudes::create($data);
        if ($school) {
            return redirect()->back()->with("error", 'School registration failed try again');
        }
        else
        {
            return redirect()->back()->with("success", "School registration successful.");
        }
    }
    public function admapplications() {
        $userId = Auth::id();
        $user = Auth::user();
        $scool_use=$user->school_id;
        $userData = StudentApplications::all();
        $shool_fuculties=Fuculties::all();
        $application_publications = Studentapplications::all();
        $courserss=Courses::all();
        $schools=Courses::all();
        $userDataCount = $userData->count();
        $courserss_count=$courserss->count();
        $schools_count=$schools->count();
        $shool_fuculties_count =$shool_fuculties->count();
        $application_publicationscount = $application_publications ->count();
        return view('col_admin.applications', compact('userData', 'userDataCount', 'schools_count', 'shool_fuculties', 'application_publications', 'shool_fuculties_count', 'courserss', 'user', 'courserss_count', 'application_publicationscount'));
    }
    public function admfuculties() {
        $userId = Auth::id();
        $user = Auth::user();
        $scool_use=$user->school_id;
        $userData = StudentApplications::all();
        $shool_fuculties=Fuculties::all();
        $application_publications = Studentapplications::all();
        $courserss=Courses::all();
        $schools=Courses::all();
        $userDataCount = $userData->count();
        $courserss_count=$courserss->count();
        $schools_count=$schools->count();
        $shool_fuculties_count =$shool_fuculties->count();
        $application_publicationscount = $application_publications ->count();
        return view('col_admin.fuculties', compact('userData', 'userDataCount', 'schools_count', 'shool_fuculties', 'application_publications', 'shool_fuculties_count', 'courserss', 'user', 'courserss_count', 'application_publicationscount'));
    }
    public function admcourses() {
        $userId = Auth::id();
        $user = Auth::user();
        $scool_use=$user->school_id;
        $userData = StudentApplications::all();
        $shool_fuculties=Fuculties::all();
        $application_publications = Studentapplications::all();
        $courses=Courses::all();
        $schools=Courses::all();
        $userDataCount = $userData->count();
        $courserss_count=$courses->count();
        $schools_count=$schools->count();
        $shool_fuculties_count =$shool_fuculties->count();
        $application_publicationscount = $application_publications ->count();
        return view('col_admin.courses', compact('userData', 'userDataCount', 'schools_count', 'shool_fuculties', 'application_publications', 'shool_fuculties_count', 'courses', 'user', 'courserss_count', 'application_publicationscount'));
    }
    public function admschools() {
        $userId = Auth::id();
        $user = Auth::user();
        $scool_use=$user->school_id;
        $userData = StudentApplications::all();
        $shool_fuculties=Fuculties::all();
        $application_publications = Studentapplications::all();
        $courses=Courses::all();
        $schools=allinstitudes::all();
        $userDataCount = $userData->count();
        $courserss_count=$courses->count();
        $schools_count=$schools->count();
        $shool_fuculties_count =$shool_fuculties->count();
        $application_publicationscount = $application_publications ->count();
        return view('col_admin.schools', compact('userData', 'schools', 'userDataCount', 'schools_count', 'shool_fuculties', 'application_publications', 'shool_fuculties_count', 'courses', 'user', 'courserss_count', 'application_publicationscount'));
    }
    public function adminprofile() {
        $user = Auth::user();
        return view('col_admin.profile', compact('user'));
    }
}
