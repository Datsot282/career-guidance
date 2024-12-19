@extends('col_student.layout.base_portal')
@section('Tittle')
    Student | Admissions
@endsection
@section('content')
    <main id="main" class="main">

    <div class="pagetitle">
        <h1>Admissions</h1>
    </div><!-- End Page Title -->
    <section class="section dashboard">
        <div class="row">
            <!-- Left side columns -->
            <div class="col-lg-8">
                <div class="row">

                    <!-- Recent Sales -->
                    <div class="col-12">
                        <div class="card recent-sales overflow-auto">

                            <div class="filter">
                                <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                    <li class="dropdown-header text-start">
                                        <h6>Filter</h6>
                                    </li>

                                    <li><a class="dropdown-item" href="#">Today</a></li>
                                    <li><a class="dropdown-item" href="#">This Month</a></li>
                                    <li><a class="dropdown-item" href="#">This Year</a></li>
                                </ul>
                            </div>

                            <div class="card-body">
                                <h5 class="card-title">Recent Sales <span>| Today</span></h5>

                                <table class="table table-borderless datatable">
                                    <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">School Name</th>
                                        <th scope="col">Coursename</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($student_admissions_list as $publication)
                                    <tr>
                                        <td scope="row">{{$publication->id}}</td>
                                        <td scope="row">{{$publication->school->name}}</td>
                                        <td scope="row">{{$publication->course->course_name}}</td>
                                        <td><a href="#" class="btn btn-primary fw-bold" data-bs-toggle="modal" data-bs-target="#modalDialogScrollableViewAdmission{{$publication->id}}"  > <i class="bi bi-eye"></i> </a></td>
                                    <div class="modal fade" id="modalDialogScrollable{{$publication->id}}" tabindex="-1">
                        <div class="modal-dialog modal-dialog-scrollable">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Apply for {{$publication->course->course_name}}</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form class="row g-3" action="{{route('register_course_application.post')}}" method="POST">
                                        @csrf
                                        <div class="col-md-6">
                                            <select id="selected_course_id" name="selected_course_id" class="form-select" readonly>

                                                <option value="{{$publication->course->id}}" selected>{{$publication->course->course_name}}</option>

                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <select id="selected_school_id" name="selected_school_id" class="form-select" readonly>

                                                <option value="{{$publication->school->id}}" selected>{{$publication->school->name}}</option>

                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" id="name" name="name" class="form-control" placeholder="Your Name" value="{{ $user->name }}" readonly>
                                        </div>
                                        <div class="col-md-6">
                                            <input type="email" id="email" name="email" class="form-control" placeholder="Email" value="{{ $user->email }}">
                                        </div>
                                        @if($publication->course->math<=$user->math && $publication->course->english<=$user->english && $publication->course->biology<=$user->biology && $publication->course->physics<=$user->physics && $publication->course->accounting<=$user->accounting )
                                        <div class="col-md-4">
                                            <lable for="course_select_math_in">Math</lable>
                                            <br>
                                            <select id="course_select_math_in" name="course_select_math_in" class="form-select">
                                                <option selected>Math Grades</option>
                                                @if($publication->course->math==1)
                                                    <option value="1">A</option>
                                                @elseif($publication->course->math==2)
                                                    <option value="1">A</option>
                                                    <option value="2">B</option>
                                                @elseif($publication->course->math==3)
                                                    <option value="1">A</option>
                                                    <option value="2">B</option>
                                                    <option value="3">C</option>
                                                @elseif($publication->course->math==4)
                                                    <option value="1">A</option>
                                                    <option value="2">B</option>
                                                    <option value="3">C</option>
                                                    <option value="4">D</option>
                                                @elseif($publication->course->math==5)
                                                    <option value="1">A</option>
                                                    <option value="2">B</option>
                                                    <option value="3">C</option>
                                                    <option value="4">D</option>
                                                    <option value="5">C</option>
                                                @endif
                                            </select>
                                        </div>
                                        <div class="col-md-4">
                                            <lable for="course_select_english_in">English</lable>
                                            <br>
                                            <select id="course_select_english_in" name="course_select_english_in" class="form-select">
                                                <option selected>Grades</option>

                                                @if($publication->course->english==1)
                                                    <option value="1">A</option>
                                                @elseif($publication->course->english==2)
                                                    <option value="1">A</option>
                                                    <option value="2">B</option>
                                                @elseif($publication->course->english==3)
                                                    <option value="1">A</option>
                                                    <option value="2">B</option>
                                                    <option value="3">C</option>
                                                @elseif($publication->course->english==4)
                                                    <option value="1">A</option>
                                                    <option value="2">B</option>
                                                    <option value="3">C</option>
                                                    <option value="4">D</option>
                                                @elseif($publication->course->english==5)
                                                    <option value="1">A</option>
                                                    <option value="2">B</option>
                                                    <option value="3">C</option>
                                                    <option value="4">D</option>
                                                    <option value="5">E</option>
                                                @endif

                                            </select>
                                        </div>
                                        <div class="col-md-4">
                                            <lable for="course_select_biology_in">Biology</lable>
                                            <br>
                                                <select id="course_select_biology_in" name="course_select_biology_in" class="form-select">
                                                    <option selected>Grades</option>
                                                    @if($publication->course->biology==1)
                                                        <option value="1">A</option>
                                                    @elseif($publication->course->biology==2)
                                                        <option value="1">A</option>
                                                        <option value="2">B</option>
                                                @elseif($publication->course->biology==3)
                                                    <option value="1">A</option>
                                                    <option value="2">B</option>
                                                    <option value="3">C</option>
                                                @elseif($publication->course->biology==4)
                                                    <option value="1">A</option>
                                                    <option value="2">B</option>
                                                    <option value="3">C</option>
                                                    <option value="4">D</option>
                                                @elseif($publication->course->biology==5)
                                                    <option value="1">A</option>
                                                    <option value="2">B</option>
                                                    <option value="3">C</option>
                                                    <option value="4">D</option>
                                                    <option value="5">E</option>
                                                @endif
                                            </select>
                                        </div>
                                        <div class="col-md-4">
                                            <lable for="course_select_physics_in">Physics</lable>
                                            <br>
                                            <select id="course_select_physics_in" name="course_select_physics_in" class="form-select">
                                                <option selected>Grades</option>
                                                @if($publication->course->physics==1)
                                                    <option value="1">A</option>
                                                @elseif($publication->course->physics==2)
                                                    <option value="1">A</option>
                                                    <option value="2">B</option>
                                                @elseif($publication->course->physics==3)
                                                    <option value="1">A</option>
                                                    <option value="2">B</option>
                                                    <option value="3">C</option>
                                                @elseif($publication->course->physics==4)
                                                    <option value="1">A</option>
                                                    <option value="2">B</option>
                                                    <option value="3">C</option>
                                                    <option value="4">D</option>
                                                @elseif($publication->course->physics==5)
                                                    <option value="1">A</option>
                                                    <option value="2">B</option>
                                                    <option value="3">C</option>
                                                    <option value="4">D</option>
                                                    <option value="5">E</option>
                                                @endif
                                            </select>
                                        </div>
                                        <div class="col-md-4">
                                            <lable for="course_select_accounting_in">Accounting</lable>
                                            <br>
                                            <select id="course_select_accounting_in" name="course_select_accounting_in" class="form-select">
                                                <option selected>Grades</option>
                                                @if($publication->course->accounting==1)
                                                    <option value="1">A</option>
                                                @elseif($publication->course->accounting==2)
                                                    <option value="1">A</option>
                                                    <option value="2">B</option>
                                                @elseif($publication->course->accounting==3)
                                                    <option value="1">A</option>
                                                    <option value="2">B</option>
                                                    <option value="3">C</option>
                                                @elseif($publication->course->accounting==4)
                                                    <option value="1">A</option>
                                                    <option value="2">B</option>
                                                    <option value="3">C</option>
                                                    <option value="4">D</option>
                                                @elseif($publication->course->accounting==5)
                                                    <option value="1">A</option>
                                                    <option value="2">B</option>
                                                    <option value="3">C</option>
                                                    <option value="4">D</option>
                                                    <option value="5">E</option>
                                                @endif
                                            </select>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Apply</button>
                                        </div>
                                            <b>
                                        @else
                                            <center><h3>You do not qualify for this course</h3></center>
                                            <div class="col-md-4">
                                                @if($publication->course->math==1)
                                                <lable>Math requirement:A</lable>
                                                @elseif($publication->course->math==2)
                                                    <lable>Math requirement:B</lable>
                                                @elseif($publication->course->math==3)
                                                    <lable>Math requirement:C</lable>
                                                @elseif($publication->course->math==4)
                                                    <lable>Math requirement:D</lable>
                                                @elseif($publication->course->math==5)
                                                    <lable>Math requirement:E</lable>
                                                @endif
                                                <br>
                                                    @if($user->math==1)
                                                        <lable>Your Symbol:A</lable>
                                                    @elseif($user->math==2)
                                                        <lable>Your Symbol:B</lable>
                                                    @elseif($user->math==3)
                                                        <lable>Your Symbol:C</lable>
                                                    @elseif($user->math==4)
                                                        <lable>Your Symbol:D</lable>
                                                    @elseif($user->math==5)
                                                        <lable>Your Symbol:E</lable>
                                                    @endif
                                            </div>
                                            <div class="col-md-4">
                                                @if($publication->course->english==1)
                                                    <lable>English requirement:A</lable>
                                                @elseif($publication->course->english==2)
                                                    <lable>English requirement:B</lable>
                                                @elseif($publication->course->english==3)
                                                    <lable>English requirement:C</lable>
                                                @elseif($publication->course->english==4)
                                                    <lable>English requirement:D</lable>
                                                @elseif($publication->course->english==5)
                                                    <lable>English requirement:E</lable>
                                                @endif
                                                <br>
                                                    @if($user->english==1)
                                                        <lable>Your Symbol:A</lable>
                                                    @elseif($user->english==2)
                                                        <lable>Your Symbol:B</lable>
                                                    @elseif($user->english==3)
                                                        <lable>Your Symbol:C</lable>
                                                    @elseif($user->english==4)
                                                        <lable>Your Symbol:D</lable>
                                                    @elseif($user->english==5)
                                                        <lable>Your Symbol:E</lable>
                                                    @endif
                                            </div>
                                            <div class="col-md-4">
                                                @if($publication->course->biology==1)
                                                    <lable>Biology requirement:A</lable>
                                                @elseif($publication->course->biology==2)
                                                    <lable>Biology requirement:B</lable>
                                                @elseif($publication->course->biology==3)
                                                    <lable>Biology requirement:C</lable>
                                                @elseif($publication->course->biology==4)
                                                    <lable>Biology requirement:D</lable>
                                                @elseif($publication->course->biology==5)
                                                    <lable>Biology requirement:E</lable>
                                                @endif
                                                    <br>
                                                    @if($user->biology==1)
                                                        <lable>Your Symbol:A</lable>
                                                    @elseif($user->biology==2)
                                                        <lable>Your Symbol:B</lable>
                                                    @elseif($user->biology==3)
                                                        <lable>Your Symbol:C</lable>
                                                    @elseif($user->biology==4)
                                                        <lable>Your Symbol:D</lable>
                                                    @elseif($user->biology==5)
                                                        <lable>Your Symbol:E</lable>
                                                    @endif
                                            </div>
                                            <div class="col-md-4">
                                                @if($publication->course->physics==1)
                                                    <lable>Physics requirement:A</lable>
                                                @elseif($publication->course->physics==2)
                                                    <lable>Physics requirement:B</lable>
                                                @elseif($publication->course->physics==3)
                                                    <lable>Physics requirement:C</lable>
                                                @elseif($publication->course->physics==4)
                                                    <lable>Physics requirement:D</lable>
                                                @elseif($publication->course->physics==5)
                                                    <lable>Physics requirement:E</lable>
                                                @endif
                                                <br>
                                                @if($user->physics==1)
                                                    <lable>Your Symbol:A</lable>
                                                @elseif($user->physics==2)
                                                    <lable>Your Symbol:B</lable>
                                                @elseif($user->physics==3)
                                                    <lable>Your Symbol:C</lable>
                                                @elseif($user->physics==4)
                                                    <lable>Your Symbol:D</lable>
                                                @elseif($user->physics==5)
                                                    <lable>Your Symbol:E</lable>
                                                @endif
                                            </div>
                                            <div class="col-md-4">
                                                @if($publication->course->accounting==1)
                                                    <lable>Accounting requirement:A</lable>
                                                @elseif($publication->course->accounting==2)
                                                    <lable>Accounting requirement:B</lable>
                                                @elseif($publication->course->accounting==3)
                                                    <lable>Accounting requirement:C</lable>
                                                @elseif($publication->course->accounting==4)
                                                    <lable>Accounting requirement:D</lable>
                                                @elseif($publication->course->accounting==5)
                                                    <lable>Accounting requirement:E</lable>
                                                @endif
                                                <br>
                                                    @if($user->accounting==1)
                                                        <lable>Your Symbol:A</lable>
                                                    @elseif($user->accounting==2)
                                                        <lable>Your Symbol:B</lable>
                                                    @elseif($user->accounting==3)
                                                        <lable>Your Symbol:C</lable>
                                                    @elseif($user->accounting==4)
                                                        <lable>Your Symbol:D</lable>
                                                    @elseif($user->accounting==5)
                                                        <lable>Your Symbol:E</lable>
                                                    @endif
                                        @endif
                                            </b>
                                    </form><!-- End No Labels Form -->
                                </div>
                            </div>
                        </div>
                    </div>
                                    </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div><!-- End Recent Sales -->
                </div>
            </div><!-- End Left side columns -->

            <!-- Right side columns -->
            <div class="col-lg-4">
                @include('col_student.components.publications')
            </div><!-- End Right side columns -->
        </div>
    </section>

</main><!-- End #main -->
@endsection
