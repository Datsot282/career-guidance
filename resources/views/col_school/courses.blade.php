@extends('col_school.layout.base_portal')
@section('Tittle')
    School | Courses
@endsection
@section('content')
    <main id="main" class="main">
        <!--Page Title -->
        <div class="pagetitle">
            <h1>Courses</h1>
        </div>
        <!-- End Page Title -->

        <section class="section profile">
            <div class="row">
                <div class="col-xl-12">

                    <div>
                        <!-- Bordered Tabs -->
                        <ul class="nav nav-tabs nav-tabs-bordered">
                            <li class="nav-item">
                                <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Courses</button>
                            </li>
                            <li class="nav-item">
                                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Add Courses</button>
                            </li>
                        </ul>
                        <div class="tab-content pt-2">
                            <div class="tab-pane fade show active profile-overview" id="profile-overview">
                                <div class="card">
                                    <div class="card-body pt-3">
                                        @if($courses->isEmpty())
                                            <p>No data found for your account.</p>
                                        @else
                                            <table class="table table-borderless datatable">
                                                <thead>
                                                <tr>
                                                    <th scope="col">id</th>
                                                    <th scope="col">Course Name</th>
                                                    <th scope="col">Course Faculty</th>
                                                    <th scope="col">Action</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($courses as $course)
                                                    <tr>
                                                        <th scope="row"><a href="#">{{$course->id}}</a></th>
                                                        <td>{{$course->course_name}}</td>
                                                        <td>{{$course->faculty->name}}</td>
                                                        <td><a href="#" class="btn btn-primary">View</a></td>
                                                    </tr>
                                                @endforeach
                                                </tbody>
                                            </table>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade profile-edit pt-3" id="profile-edit">
                                <!-- Profile Edit Form -->
                                <form action="{{route('register_course.post')}}" method="POST">
                                    @csrf
                                    <div class="row mb-3">
                                        <label for="course_names" class="col-md-4 col-lg-3 col-form-label">Course Name</label>
                                        <div class="col-md-12 col-lg-9">
                                            <input name="course_names" id="course_names" type="text" class="form-control" placeholder="Enter Course Name" ">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-md-12">
                                            <label for="sch_fuculty" class="col-md-4 col-lg-3 col-form-label">Faculty</label>
                                            <select id="sch_fuculty" name="sch_fuculty" name="course_select_biology_in" class="form-select">
                                                <option selected>Select Fuculty</option>
                                                @foreach($faculties as $faculty)
                                                    <option value="{{$faculty->id}}">{{$faculty->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                    <h4>Course Requirements</h4>
                                    <div class="col-md-4">
                                        <lable for="course_select_math_in" class="col-md-4 col-lg-3 col-form-label">Mathematics</lable>
                                        <br>
                                        <select id="course_select_math_in" name="course_select_math_in" class="form-select">
                                            <option selected>Grades</option>
                                                <option value="1">A</option>
                                                <option value="2">B</option>
                                                <option value="3">C</option>
                                                <option value="4">D</option>
                                                <option value="5">C</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <lable for="course_select_english_in" class="col-md-4 col-lg-3 col-form-label">English</lable>
                                        <br>
                                        <select id="course_select_english_in" name="course_select_english_in" class="form-select">
                                            <option selected>Grades</option>
                                                <option value="1">A</option>
                                                <option value="2">B</option>
                                                <option value="3">C</option>
                                            <option value="4">D</option>
                                            <option value="5">E</option>

                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <lable for="course_select_biology_in"class="col-md-4 col-lg-3 col-form-label">Biology</lable>
                                        <br>
                                        <select id="course_select_biology_in" name="course_select_biology_in" class="form-select">
                                            <option selected>Grades</option>
                                                <option value="1">A</option>
                                                <option value="2">B</option>
                                                <option value="3">C</option>
                                                <option value="4">D</option>
                                                <option value="5">E</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <lable for="course_select_physics_in" class="col-md-4 col-lg-3 col-form-label">Physics</lable>
                                        <br>
                                        <select id="course_select_physics_in" name="course_select_physics_in" class="form-select">
                                            <option selected>Grades</option>
                                                <option value="1">A</option>
                                                <option value="2">B</option>
                                                <option value="3">C</option>
                                                <option value="4">D</option>
                                                <option value="5">E</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <lable for="course_select_accounting_in" class="col-md-4 col-lg-3 col-form-label">Accounting</lable>
                                        <br>
                                        <select id="course_select_accounting_in" name="course_select_accounting_in" class="form-select">
                                            <option selected>Grades</option>
                                                <option value="1">A</option>
                                                <option value="2">B</option>
                                                <option value="3">C</option>
                                                <option value="4">D</option>
                                                <option value="5">E</option>
                                        </select>
                                    </div>
                                    </div>
                                    <div class="text-center  mt-6">
                                        <button type="submit" class="btn btn-primary">Add New</button>
                                    </div>
                                </form><!-- End Profile Edit Form -->
                            </div>
                        </div><!-- End Bordered Tabs -->
                    </div>
                </div>

            </div>
            </div>
        </section>

    </main><!-- End #main -->

@endsection
