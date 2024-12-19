<?php

namespace App\Http\Controllers;

use App\allinstitudes;
use App\allinstitudess;
use App\application_publications;
use App\Course;
use App\Courses;
use App\Fuculties;
use App\Studentapplications;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class schoolapplicationsController extends Controller
{
    public function index()
    {
        $userId = Auth::id();
        $user = Auth::user();
        $school_id=$user->school_id;
        $userData = Studentapplications::where('school_id', $school_id)
            ->with('course', 'school', 'student')
            ->get();
        $userDataCount = $userData->count();
        $courses = Courses::with('school')->get();
        $application_publications =application_publications::with('course', 'school')
            ->get();
        return view('col_school.applications', compact('userData', 'userDataCount', 'user', 'courses', 'application_publications'));
    }
    public function school_update_student_applicationsPost(Request $request)
    {
        $request->validate([
            'application_status' => 'required',
            'application_id' => 'required'
        ]);
        $applicationid = $request->application_id;
        $application = Studentapplications::find($applicationid);
        if (!$application) {
            return redirect()->route('shcapplications')->with("error", "Application not found.");
        }
        $application->status = $request->application_status;
        if ($application->save()) {
            return redirect()->route('shcapplications')->with("success", "Application updated successfully.");
        }
        return redirect()->route('shcapplications')->with("error", "Update failed. Please try again.");
    }

    function updatestudentapplicationPost(Request $request){
        $request->validate([
            'course_names'=>'required',
        ]);
        $user = Auth::user();
        $school_id=$user->school_id;
        $application = Course::find($request->application_id);
        $application->id=$request->application_id;
        $application->status=$request->application_status;
        $application->save();
        if ($application) {
            return redirect()->back()->with("error", 'Admitted Student.');
        }
        else
        {
            return redirect()->back()->with("success", "Failed to admit student.");
        }
    }
    function update_course_applicationPost(Request $request) {
        // Validate incoming request data
        $request->validate([
            'input_school_name' => 'required|string|max:255',
            'input_school_location' => 'required|string|max:255',
            'input_school_contacts' => 'required|string|max:255',
            'input_school_email' => 'required|email|max:255'
        ]);

        $user = Auth::user(); // Get authenticated user

        // Find the school record by application ID
        $school = allinstitudes::find($request->input_school_id);

        // Check if the school exists
        if (!$school) {
            return redirect()->back()->with("error", "School record not found.");
        }

        // Update school details
        $school->name = $request->input_school_name;
        $school->location = $request->input_school_location;
        $school->contacts = $request->input_school_contacts;
        $school->email = $request->input_school_email;

        // Save the changes and return appropriate response
        if ($school->save()) {
            return redirect()->back()->with("success", "School details updated successfully.");
        } else {
            return redirect()->back()->with("error", "Failed to update school details.");
        }
    }

    public function update_faculty_infoPost(Request $request) {
        $request->validate([
            'input_faculty_name' => 'required|string|max:255',
            'input_faculty_school_id' => 'required',
        ]);
        $user = Auth::user();
        $faculty = Fuculties::find($request->input_faculty_id);

        if (!$faculty) {
            return redirect()->back()->with("error", "Faculty record not found.");
        }
        $faculty->name = $request->input_faculty_name;
        $faculty->school_id = $request->input_faculty_school_id;
        if ($faculty->save()) {
            return redirect()->back()->with("success", "Faculty details updated successfully.");
        } else {
            return redirect()->back()->with("error", "Failed to update Faculty details.");
        }
    }
    public function update_course_detailsPost(Request $request) {
        $request->validate([
            'input_faculty_name' => 'required|string|max:255',
            'input_faculty_school_id' => 'required',
        ]);
        $user = Auth::user();
        $faculty = Course::find($request->input_faculty_id);
        if (!$faculty) {
            return redirect()->back()->with("error", "Faculty record not found.");
        }
        $faculty->name = $request->input_faculty_name;
        $faculty->school_id = $request->input_faculty_school_id;
        if ($faculty->save()) {
            return redirect()->back()->with("success", "Faculty details updated successfully.");
        } else {
            return redirect()->back()->with("error", "Failed to update Faculty details.");
        }
    }



}
