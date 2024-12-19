<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class SchoolProfileController extends Controller
{
    public function index() {
        $user = Auth::user();
        return view('col_school.profile', compact('user'));
    }
    public function update_school_profilePost(Request $request)
    {
        $request->validate([
            'stu_full_names' => 'required',
            'stu_about' => 'required',
            'stu_contacts' => 'required',
            'stu_email' => 'required',
            'stu_gender' => 'required',
            'stu_date_of_birth' => 'required'
        ]);
        $userId = Auth::id();
        $user = User::find($userId);
        if (!$user) {
            return redirect()->route('schprofile')->with("error", "User not found.");
        }
        $user->name = $request->stu_full_names;
        $user->user_about = $request->stu_about;
        $user->user_contacts = $request->stu_contacts;
        $user->email = $request->stu_email;
        $user->gender = $request->stu_gender;
        $user->dateofbirth = $request->stu_date_of_birth;
        if ($user->save()) {
            return redirect()->route('schprofile')->with("success", "Profile updated successfully.");
        }
        return redirect()->route('schprofile')->with("error", "Update failed. Please try again.");
    }

    public function updatestudentprofilePost(Request $request)
    {
        $request->validate([
            'stu_full_names' => 'required',
            'stu_about' => 'required',
            'stu_contacts' => 'required',
            'stu_email' => 'required|email',
            'stu_gender' => 'required',
            'stu_date_of_birth' => 'required',
            'stu_course_select_math_in' => 'required',
            'stu_course_select_english_in' => 'required',
            'stu_course_select_biology_in' => 'required',
            'stu_course_select_physics_in' => 'required',
            'stu_course_select_accounting_in' => 'required',
        ]);

        $userId = Auth::id();
        $user = User::find($userId);

        if (!$user) {
            return redirect()->route('stuprofile')->with("error", "User not found.");
        }

        $user->name = $request->stu_full_names;
        $user->user_about = $request->stu_about;
        $user->user_contacts = $request->stu_contacts;
        $user->email = $request->stu_email;
        $user->gender = $request->stu_gender;
        $user->dateofbirth = $request->stu_date_of_birth;
        $user->math = $request->stu_course_select_math_in;
        $user->english = $request->stu_course_select_english_in;
        $user->biology = $request->stu_course_select_biology_in;
        $user->physics = $request->stu_course_select_physics_in;
        $user->accounting = $request->stu_course_select_accounting_in;

        if ($user->save()) {
            return redirect()->route('schprofile')->with("success", "Profile updated successfully.");
        }

        return redirect()->route('schprofile')->with("error", "Update failed. Please try again.");
    }
    public function updatestudentpasswordPost(Request $request)
    {
        $request->validate([
            'stu_currentPassword' => 'required',
            'stu_newPassword' => 'required',
            'stu_renewpassword' => 'required',
        ]);
        $userId = Auth::id();
        $user = User::find($userId);
        if (!$user) {
            return redirect()->route('stuprofile')->with("error", "User not found.");
        }
        $thispass = Hash::make($request->stu_currentPassword);
        if($user['password']==$thispass){
            if($request->stu_newPassword == $request->stu_renewpassword){
                $user->password=$thispass;
                if ($user->save()) {
                    return redirect()->route('schprofile')->with("success", "Profile updated successfully.");
                }
                return redirect()->route('schprofile')->with("error", "Update failed. Please try again.");
            }
        }
    }


}
