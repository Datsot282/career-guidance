@extends('col_student.layout.base_portal')
@section('Tittle')
    Student | Profile
@endsection
@section('content')
    <main id="main" class="main">
        <!--Page Title -->
        <div class="pagetitle">
            <h1>Profile</h1>
        </div>
        <!-- End Page Title -->

        <section class="section profile">
            <div class="row">
                <div class="col-xl-4">

                    <div class="card">
                        <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

                            <img src="{{asset('niceadmin/assets/img/profile-img.jpg')}}" alt="Profile" class="rounded-circle">
                            <h2>{{$user->name}}</h2>
                            <h3>Web Designer</h3>
                            @if($user->user_type==1)
                            <h5>Admin</h5>
                            @elseif($user->user_type==2)
                                <h5>Institude Admin</h5>
                            @elseif($user->user_type==3)
                                <h5>Student</h5>
                            @endif
                                <a href="#" class="email"><i class="bi bi-envelope"></i>{{$user->email}}</a>
                                <a href="#" class="email"><i class="bi bi-telephone"></i>{{$user->user_contacts}}</a>
                        </div>
                    </div>

                </div>

                <div class="col-xl-8">

                    <div class="card">
                        <div class="card-body pt-3">
                            <!-- Bordered Tabs -->
                            <ul class="nav nav-tabs nav-tabs-bordered">
                                <li class="nav-item">
                                    <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Overview</button>
                                </li>
                                <li class="nav-item">
                                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Edit Profile</button>
                                </li>
                                <li class="nav-item">
                                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-change-password">Change Password</button>
                                </li>
                            </ul>
                            <div class="tab-content pt-2">

                                <div class="tab-pane fade show active profile-overview" id="profile-overview">
                                    <div class="row mb-3">
                                        <div class="col-md-8 col-lg-9">
                                    <h5 class="card-title">About</h5>
                                    <p class="small fst-italic">{{$user->user_about}}</p>

                                    <h5 class="card-title">Profile Details</h5>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label ">Full Name</div>
                                        <div class="col-lg-9 col-md-8">{{$user->name}}</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">Date Of Birth</div>
                                        <div class="col-lg-9 col-md-8">{{$user->dateofbirth}}</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">Gender</div>
                                        @if($user->gender==1)
                                        <div class="col-lg-9 col-md-8">Male</div>
                                            @elseif($user->gender==2)
                                            <div class="col-lg-9 col-md-8">Female</div>
                                        @endif
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">Email</div>
                                        <div class="col-lg-9 col-md-8">{{$user->email}}</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">Phone</div>
                                        <div class="col-lg-9 col-md-8">+266 {{$user->contact}}</div>
                                    </div>


                                    <h5 class="card-title">Symbols</h5>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">Mathematics</div>
                                        @if($user->math==1)
                                        <div class="col-lg-9 col-md-8">A</div>
                                        @elseif($user->math==2)
                                            <div class="col-lg-9 col-md-8">B</div>
                                        @elseif($user->math==3)
                                            <div class="col-lg-9 col-md-8">C</div>
                                        @elseif($user->math==4)
                                            <div class="col-lg-9 col-md-8">D</div>
                                        @elseif($user->math==5)
                                            <div class="col-lg-9 col-md-8">E</div>
                                        @endif
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">English</div>
                                        @if($user->english==1)
                                            <div class="col-lg-9 col-md-8">A</div>
                                        @elseif($user->english==2)
                                            <div class="col-lg-9 col-md-8">B</div>
                                        @elseif($user->english==3)
                                            <div class="col-lg-9 col-md-8">C</div>
                                        @elseif($user->english==4)
                                            <div class="col-lg-9 col-md-8">D</div>
                                        @elseif($user->english==5)
                                            <div class="col-lg-9 col-md-8">E</div>
                                        @endif
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">Biology</div>
                                        @if($user->biology==1)
                                            <div class="col-lg-9 col-md-8">A</div>
                                        @elseif($user->biology==2)
                                            <div class="col-lg-9 col-md-8">B</div>
                                        @elseif($user->biology==3)
                                            <div class="col-lg-9 col-md-8">C</div>
                                        @elseif($user->biology==4)
                                            <div class="col-lg-9 col-md-8">D</div>
                                        @elseif($user->biology==5)
                                            <div class="col-lg-9 col-md-8">E</div>
                                        @endif
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">Physics</div>
                                        @if($user->physics==1)
                                            <div class="col-lg-9 col-md-8">A</div>
                                        @elseif($user->physics==2)
                                            <div class="col-lg-9 col-md-8">B</div>
                                        @elseif($user->physics==3)
                                            <div class="col-lg-9 col-md-8">C</div>
                                        @elseif($user->physics==4)
                                            <div class="col-lg-9 col-md-8">D</div>
                                        @elseif($user->physics==5)
                                            <div class="col-lg-9 col-md-8">E</div>
                                        @endif
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">Accounting</div>
                                        @if($user->accounting==1)
                                            <div class="col-lg-9 col-md-8">A</div>
                                        @elseif($user->accounting==2)
                                            <div class="col-lg-9 col-md-8">B</div>
                                        @elseif($user->accounting==3)
                                            <div class="col-lg-9 col-md-8">C</div>
                                        @elseif($user->accounting==4)
                                            <div class="col-lg-9 col-md-8">D</div>
                                        @elseif($user->accounting==5)
                                            <div class="col-lg-9 col-md-8">E</div>
                                        @endif
                                    </div>
                                        </div>
                                    </div>

                                </div>

                                <div class="tab-pane fade profile-edit pt-3" id="profile-edit">

                                    <!-- Profile Edit Form -->
                                    <form action="{{route('update_student_profile.post')}}" method="POST">
                                        @csrf
                                        <div class="row mb-3">
                                            <label for="stu_full_names" class="col-md-4 col-lg-3 col-form-label">Full Name</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="stu_full_names" id="stu_full_names" type="text" class="form-control" value="{{$user->name}}">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="stu_about" class="col-md-4 col-lg-3 col-form-label">About</label>
                                            <div class="col-md-8 col-lg-9">
                                                <textarea name="stu_about" id="stu_about" class="form-control" id="about" style="height: 100px">{{$user->user_about}}</textarea>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="stu_contacts" class="col-md-4 col-lg-3 col-form-label">Contacts</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="stu_contacts" id="stu_contacts" type="text" class="form-control" value="{{$user->user_contacts}}">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="stu_email" class="col-md-4 col-lg-3 col-form-label">Email</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="stu_email" id="stu_email" type="email" class="form-control" value="{{$user->email}}">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <div class="col-md-12">
                                            <label for="stu_gender" class="col-md-4 col-lg-3 col-form-label">Gender</label>
                                            <select id="stu_gender" name="stu_gender" name="course_select_biology_in" class="form-select">

                                                    <option value="1">Male</option>
                                                    <option value="2" selected>Female</option>

                                            </select>
                                        </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="stu_date_of_birth" class="col-md-4 col-lg-3 col-form-label">Date Of Birth</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="stu_date_of_birth" type="date" class="form-control" id="stu_date_of_birth" value="{{$user->dateofbirth}}">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <div class="col-md-4">
                                            <lable for="stu_course_select_math_in" class="col-md-4 col-lg-3 col-form-label">Mathematics Symbol</lable>
                                            <br>
                                            <select id="stu_course_select_math_in" name="stu_course_select_math_in" class="form-select col-md-8 col-lg-9">

                                                @if($user->math==1)
                                                    <option value="1" selected>A</option>
                                                    <option value="2">B</option>
                                                    <option value="3">C</option>
                                                    <option value="4">D</option>
                                                    <option value="5">C</option>
                                                @elseif($user->math==2)
                                                    <option value="1">A</option>
                                                    <option value="2" selected>B</option>
                                                    <option value="3">C</option>
                                                    <option value="4">D</option>
                                                    <option value="5">C</option>
                                                @elseif($user->math==0)
                                                    <option value="1">A</option>
                                                    <option value="2">B</option>
                                                    <option value="3">C</option>
                                                    <option value="4">D</option>
                                                    <option value="5">C</option>
                                                @elseif($user->math==3)
                                                    <option value="1">A</option>
                                                    <option value="2">B</option>
                                                    <option value="3" selected>C</option>
                                                    <option value="4">D</option>
                                                    <option value="5">C</option>
                                                @elseif($user->math==4)
                                                    <option value="1">A</option>
                                                    <option value="2">B</option>
                                                    <option value="3">C</option>
                                                    <option value="4" selected>D</option>
                                                    <option value="5">C</option>
                                                @elseif($user->math==5)
                                                    <option value="1">A</option>
                                                    <option value="2">B</option>
                                                    <option value="3">C</option>
                                                    <option value="4">D</option>
                                                    <option value="5" selected>C</option>
                                                @endif
                                            </select>
                                            </div>
                                            <div class="col-md-4">
                                                <lable for="stu_course_select_english_in" class="col-md-4 col-lg-3 col-form-label">English Symbol</lable>
                                                <br>
                                                <select id="stu_course_select_english_in" name="stu_course_select_english_in" class="form-select col-md-8 col-lg-9">


                                                    @if($user->english==1)
                                                        <option value="1" selected>A</option>
                                                        <option value="2">B</option>
                                                        <option value="3">C</option>
                                                        <option value="4">D</option>
                                                        <option value="5">C</option>
                                                    @elseif($user->english==2)
                                                        <option value="1">A</option>
                                                        <option value="2" selected>B</option>
                                                        <option value="3">C</option>
                                                        <option value="4">D</option>
                                                        <option value="5">C</option>
                                                    @elseif($user->math==0)
                                                        <option value="1">A</option>
                                                        <option value="2">B</option>
                                                        <option value="3">C</option>
                                                        <option value="4">D</option>
                                                        <option value="5">C</option>
                                                    @elseif($user->english==3)
                                                        <option value="1">A</option>
                                                        <option value="2">B</option>
                                                        <option value="3" selected>C</option>
                                                        <option value="4">D</option>
                                                        <option value="5">C</option>
                                                    @elseif($user->english==4)
                                                        <option value="1">A</option>
                                                        <option value="2">B</option>
                                                        <option value="3">C</option>
                                                        <option value="4" selected>D</option>
                                                        <option value="5">C</option>
                                                    @elseif($user->english==5)
                                                        <option value="1">A</option>
                                                        <option value="2">B</option>
                                                        <option value="3">C</option>
                                                        <option value="4">D</option>
                                                        <option value="5" selected>E</option>
                                                    @endif

                                                </select>
                                            </div>
                                            <div class="col-md-4">
                                                <lable for="stu_course_select_biology_in" class="col-md-4 col-lg-3 col-form-label">Biology Symbol</lable>
                                                <br>
                                                <select id="stu_course_select_biology_in" name="stu_course_select_biology_in" class="form-select col-md-8 col-lg-9">

                                                    @if($user->biology==1)
                                                        <option value="1" selected>A</option>
                                                        <option value="2">B</option>
                                                        <option value="3">C</option>
                                                        <option value="4">D</option>
                                                        <option value="5">E</option>
                                                    @elseif($user->math==0)
                                                        <option value="1">A</option>
                                                        <option value="2">B</option>
                                                        <option value="3">C</option>
                                                        <option value="4">D</option>
                                                        <option value="5">C</option>
                                                    @elseif($user->biology==2)
                                                        <option value="1">A</option>
                                                        <option value="2" selected>B</option>
                                                        <option value="3">C</option>
                                                        <option value="4">D</option>
                                                        <option value="5">E</option>
                                                    @elseif($user->biology==3)
                                                        <option value="1">A</option>
                                                        <option value="2">B</option>
                                                        <option value="3" selected>C</option>
                                                        <option value="4">D</option>
                                                        <option value="5">E</option>
                                                    @elseif($user->biology==4)
                                                        <option value="1">A</option>
                                                        <option value="2">B</option>
                                                        <option value="3">C</option>
                                                        <option value="4" selected>D</option>
                                                        <option value="5">E</option>
                                                    @elseif($user->biology==5)
                                                        <option value="1">A</option>
                                                        <option value="2">B</option>
                                                        <option value="3">C</option>
                                                        <option value="4">D</option>
                                                        <option value="5" selected>E</option>
                                                    @endif
                                                </select>
                                            </div>
                                            <div class="col-md-4">
                                                <lable for="stu_course_select_physics_in" class="col-md-4 col-lg-3 col-form-label">Physics Symbol</lable>
                                                <br>
                                                <select id="stu_course_select_physics_in" name="stu_course_select_physics_in" class="form-select col-md-8 col-lg-9">

                                                    @if($user->physics==1)
                                                        <option value="1" selected>A</option>
                                                        <option value="2">B</option>
                                                        <option value="3">C</option>
                                                        <option value="4">D</option>
                                                        <option value="5">E</option>
                                                    @elseif($user->math==0)
                                                        <option value="1">A</option>
                                                        <option value="2">B</option>
                                                        <option value="3">C</option>
                                                        <option value="4">D</option>
                                                        <option value="5">C</option>
                                                    @elseif($user->physics==2)
                                                        <option value="1">A</option>
                                                        <option value="2" selected>B</option>
                                                        <option value="3">C</option>
                                                        <option value="4">D</option>
                                                        <option value="5">E</option>
                                                    @elseif($user->physics==3)
                                                        <option value="1">A</option>
                                                        <option value="2">B</option>
                                                        <option value="3" selected>C</option>
                                                        <option value="4">D</option>
                                                        <option value="5">E</option>
                                                    @elseif($user->physics==4)
                                                        <option value="1">A</option>
                                                        <option value="2">B</option>
                                                        <option value="3">C</option>
                                                        <option value="4" selected>D</option>
                                                        <option value="5">E</option>
                                                    @elseif($user->physics==5)
                                                        <option value="1">A</option>
                                                        <option value="2">B</option>
                                                        <option value="3">C</option>
                                                        <option value="4">D</option>
                                                        <option value="5" selected>E</option>
                                                    @endif
                                                </select>
                                            </div>
                                            <div class="col-md-4">
                                                <lable for="stu_course_select_accounting_in" class="col-md-4 col-lg-3 col-form-label">Accounting Symbol</lable>
                                                <br>
                                                <select id="stu_course_select_accounting_in" name="stu_course_select_accounting_in" class="form-select col-md-8 col-lg-9">

                                                    @if($user->accounting==1)
                                                        <option value="1" selected>A</option>
                                                        <option value="2">B</option>
                                                        <option value="3">C</option>
                                                        <option value="4">D</option>
                                                        <option value="5">E</option>
                                                    @elseif($user->math==0)
                                                        <option value="1">A</option>
                                                        <option value="2">B</option>
                                                        <option value="3">C</option>
                                                        <option value="4">D</option>
                                                        <option value="5">C</option>
                                                    @elseif($user->accounting==2)
                                                        <option value="1">A</option>
                                                        <option value="2" selected>B</option>
                                                        <option value="3">C</option>
                                                        <option value="4">D</option>
                                                        <option value="5">E</option>
                                                    @elseif($user->accounting==3)
                                                        <option value="1">A</option>
                                                        <option value="2">B</option>
                                                        <option value="3" selected>C</option>
                                                        <option value="4">D</option>
                                                        <option value="5">E</option>
                                                    @elseif($user->accounting==4)
                                                        <option value="1">A</option>
                                                        <option value="2">B</option>
                                                        <option value="3">C</option>
                                                        <option value="4" selected>D</option>
                                                        <option value="5">E</option>
                                                    @elseif($user->accounting==5)
                                                        <option value="1">A</option>
                                                        <option value="2">B</option>
                                                        <option value="3">C</option>
                                                        <option value="4">D</option>
                                                        <option value="5" selected>E</option>
                                                    @endif
                                                </select>
                                            </div>

                                        </div>
                                        <div class="text-center  mt-6">
                                            <button type="submit" class="btn btn-primary">Save Changes</button>
                                        </div>
                                    </form><!-- End Profile Edit Form -->
                                </div>
                                <div class="tab-pane fade pt-3" id="profile-change-password">
                                    <!-- Change Password Form -->
                                    <form action="{{route('update_student_password.post')}}" method="POST">
                                        @csrf
                                        <div class="row mb-3 mt-3">
                                            <label for="stu_currentPassword" class="col-md-4 col-lg-3 col-form-label">Enter Current Password</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="stu_currentPassword" id="stu_currentPassword" type="password" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="stu_newPassword" class="col-md-4 col-lg-3 col-form-label">Enter New Password</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="stu_newpassword" id="stu_newpassword" type="password" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="stu_renewPassword" class="col-md-4 col-lg-3 col-form-label">Re-enter New Password</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="stu_renewpassword" id="stu_renewpassword" type="password" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-lg-9">
                                            <div class="text-center">
                                                <button type="submit" class="btn btn-primary">Update Password</button>
                                            </div>
                                        </div>
                                    </form><!-- End Change Password Form -->
                                </div>
                            </div><!-- End Bordered Tabs -->
                        </div>
                    </div>

                </div>
            </div>
        </section>

    </main><!-- End #main -->

@endsection
