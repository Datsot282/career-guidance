<?php

use App\Http\Controllers\adminapplicationsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\newstudentauthentication;
use App\Http\Controllers\studentdashboardController;
use App\Http\Controllers\StudentAdmissionController;
use App\Http\Controllers\studentapplicationsController;
use App\Http\Controllers\StudentProfileController;
use App\Http\Controllers\schooldashboardController;
use App\Http\Controllers\schoolapplicationsController;
use App\Http\Controllers\schoolfucultyController;
use App\Http\Controllers\SchoolProfileController;
use App\Http\Controllers\SchoolCoursesController;
use App\Http\Controllers\RecordController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('web_front.home');
});

Route::get('/login', function () {
    return redirect('/student');
});

Route::get('contact', function () {
    return view('web_front.contact');
});

//end Student Routes
Route::get('/stu_dashboard', [studentdashboardController::class, 'index'])->name('studashboard')->middleware('auth');
Route::get('/stu_applications', [StudentApplicationsController::class, 'index'])->name('stuapps')->middleware('auth');
Route::get('/stu_admissions', [StudentAdmissionController::class, 'index'])->name('stuadds')->middleware('auth');
Route::get('/stu_profile', [StudentProfileController::class, 'index'])->name('stuprofile')->middleware('auth');
Route::get('/col_student_register', [newstudentauthentication::class, 'student_registration'])->name('col_student_register');
Route::post('/col_student_register', [newstudentauthentication::class, 'student_registrationPost'])->name('col_student_register.post');
Route::post('/stu_applications', [StudentApplicationsController::class, 'applyforcoursePost'])->name('register_course_application.post');
Route::post('/stu_profile/update', [StudentProfileController::class, 'updatestudentprofilePost'])->name('update_student_profile.post');
Route::post('/stu_profile/update-password', [StudentProfileController::class, 'updatestudentpasswordPost'])->name('update_student_password.post');
//end Student Routes
//Begin School Routes
Route::get('/shc_dashboard', [schooldashboardController::class, 'index'])->name('shcdashboard')->middleware('auth');
Route::get('/sch_applications', [schoolapplicationsController::class, 'index'])->name('shcapplications')->middleware('auth');
Route::get('/sch_fuculties', [schoolfucultyController::class, 'index'])->name('schfuculties')->middleware('auth');
Route::get('/sch_profile', [SchoolProfileController::class, 'index'])->name('schprofile')->middleware('auth');
Route::get('/sch_courses', [SchoolCoursesController::class, 'index'])->name('schcourses')->middleware('auth');
Route::get('/sch_register', [newstudentauthentication::class, 'school_registration'])->name('sch_school_register');
Route::post('/sch_register', [newstudentauthentication::class, 'school_registrationPost'])->name('sch_school_register.post');
Route::post('/sch_fuculties', [schoolfucultyController::class, 'schfucultyPost'])->name('register_fuculty.post');
Route::post('/sch_courses', [SchoolCoursesController::class, 'registercoursePost'])->name('register_course.post');
Route::post('/sch_applications', [schoolapplicationsController::class, 'updatestudentapplicationPost'])->name('update_student_application.post');
Route::post('/update-course-application', [schoolapplicationsController::class, 'update_course_applicationPost'])->name('update_course_application.post');
Route::post('/update-faculty-info', [schoolapplicationsController::class, 'update_faculty_infoPost'])->name('update_faculty_info.post');
Route::post('/update_course_details', [schoolapplicationsController::class, 'update_course_detailsPost'])->name('update_course_details.post');
Route::post('/sch_profile', [SchoolProfileController::class, 'update_school_profilePost'])->name('update_school_profile.post');
Route::post('/sch_applications', [schoolapplicationsController::class, 'school_update_student_applicationsPost'])->name('school_update_student_applications.post');
Route::post('/adm_schools', [adminapplicationsController::class, 'create_school_profilePost'])->name('create_school_profile.post');

//end School Routes
//Beggin admin Route
Route::get('/adm_dashboard', [adminapplicationsController::class, 'index'])->name('admdashboard')->middleware('auth');
Route::get('/adm_applications', [adminapplicationsController::class, 'admapplications'])->name('manageapps')->middleware('auth');
Route::get('/adm_fuculties', [adminapplicationsController::class, 'admfuculties'])->name('admmngfuculties')->middleware('auth');
Route::get('/adm_courses', [adminapplicationsController::class, 'admcourses'])->name('admmngcourses')->middleware('auth');
Route::get('/adm_schools', [adminapplicationsController::class, 'admschools'])->name('admmngschools')->middleware('auth');
Route::get('/adm_profile', [adminapplicationsController::class, 'adminprofile'])->name('admmngprofile')->middleware('auth');
//end admin Route
//Authentication
Route::get('/col_student_login', [newstudentauthentication::class, 'login'])->name('col_student_login');
Route::post('/col_student_login', [newstudentauthentication::class, 'loginPost'])->name('col_student_login.post');
Route::delete('/record/{id}', [RecordController::class, 'destroyShool'])->name('record.delete');
Route::delete('/recor/{id}', [RecordController::class, 'destroyFuculty'])->name('fuculty.delete');
Route::delete('/reco/{id}', [RecordController::class, 'destroyCourse'])->name('course.delete');
Route::get('/logout', [newstudentauthentication::class, 'logout'])->name('logout');
//end authentications
// Admin routes
Route::group(['middleware' => ['auth:admin']], function () {
    Route::get('feedbacks/index', 'FeedbackController@index')->name('feedbacks.index');
    Route::resource('boards', 'BoardController');
    Route::resource('genders', 'GenderController');
    Route::resource('categories', 'CategoryController');
    Route::resource('courses', 'CourseController');
    Route::resource('feesheads', 'FeesHeadController');
    Route::resource('religions', 'ReligionController');
    Route::resource('admin_students', 'adminStudentController');
    Route::resource('newfees', 'NewFeeController');
    Route::get('getSMSBalance', 'adminStudentController@getSMSBalance')->name('getSMSBalance');
    Route::get('displayStudentApplication/{application}', 'adminStudentController@showStudentApplication')->name('displayStudentApplication');
    Route::get('/myadminstorage/{filename}', function ($filename) {
        $path = storage_path('app/student_files/' . $filename);
        if (!File::exists($path)) {
            abort(404);
        }
        $file = File::get($path);
        $type = File::extension($path);
        $response = Response::make($file, 200);
        $response->header("Content-Type", $type);
        return $response;
    })->name('myadminstorage');
});

// Student routes
Route::group(['middleware' => ['auth:student']], function () {
    Route::post('ApplicationStore', 'AdmisssionApplicationController@store')->name('ApplicationStore');
    Route::post('ApplicationUpdateAgree', 'AdmisssionApplicationController@UpdateAgree')->name('ApplicationUpdateAgree');
    Route::post('ApplicationUpdatePersonal', 'AdmisssionApplicationController@UpdatePersonal')->name('ApplicationUpdatePersonal');
    Route::post('ApplicationUpdateProfessional', 'AdmisssionApplicationController@UpdateProfessional')->name('ApplicationUpdateProfessional');
    Route::post('ApplicationUpdateUpload', 'AdmisssionApplicationController@UpdateUpload')->name('ApplicationUpdateUpload');
    Route::post('ApplicationUpdateSubjects', 'AdmisssionApplicationController@UpdateSubjects')->name('ApplicationUpdateSubjects');
    Route::post('generateOTP', 'AdmisssionApplicationController@generateOTP')->name('generateOTP');
    Route::post('verifyOTP', 'AdmisssionApplicationController@verifyOTP')->name('verifyOTP');
    Route::get('resendOTP', 'AdmisssionApplicationController@resendOTP')->name('resendOTP');
    Route::get('ApplicationUpdateEdit', 'AdmisssionApplicationController@UpdateEdit')->name('ApplicationUpdateEdit');
    Route::get('displayApplication/{application}', 'AdmisssionApplicationController@show')->name('displayApplication');
    Route::get('/mystorage/{filename}', function ($filename) {
        $path = storage_path('app/student_files/' . $filename);

        if (!File::exists($path)) {
            abort(404);
        }

        $file = File::get($path);
        $type = File::extension($path);

        $response = Response::make($file, 200);
        $response->header("Content-Type", $type);

        return $response;
    })->name('mystorage');
});

// General route
Route::get('/anotherstorage/{filename}', function ($filename) {
    $path = storage_path('app/student_files/' . $filename);

    if (!File::exists($path)) {
        abort(404);
    }

    $file = File::get($path);
    $type = File::extension($path);

    $response = Response::make($file, 200);
    $response->header("Content-Type", $type);

    return $response;
})->name('anotherstorage');
