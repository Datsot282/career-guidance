@extends('col_school.layout.base_portal')
@section('Tittle')
    Colledge | Manage Applications
@endsection
@section('content')
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Applications</h1>
        </div><!-- End Page Title -->
        <section class="section dashboard">
            <div class="row">
                <!-- Left side columns -->
                <div class="col-lg-12">
                    <div class="row">
                        <!-- Recent Sales -->
                        <div class="col-12">
                            <div class="card recent-sales overflow-auto">

                                <div class="card-body">
                                    <h5 class="card-title">My Applications</h5>

                                    <table class="table table-borderless datatable">
                                        <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Student Names</th>
                                            <th scope="col">Course</th>
                                            <th scope="col">Date Of Birth</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @if($userData->isEmpty())
                                            <p>No data found for your account.</p>
                                        @else
                                            @foreach ($userData as $data)
                                                <tr>
                                                    <th scope="row"><a href="#">#{{ $data->id }}</a></th>
                                                    <td>{{$data->student->name}}</td>
                                                    <td>{{$data->course->course_name}}</td>
                                                    <td>{{$data->student->dateofbirth}}</td>
                                                    @if($data->status=='Declined')
                                                        <td><span class="badge bg-danger">Rejected</span></td>
                                                    @elseif($data->status=='Approved')
                                                        <td><span class="badge bg-success">Approved</span></td>
                                                    @else
                                                        <td><span class="badge bg-info">pending</span></td>
                                                    @endif
                                                    <td><a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ExtralargeviewModal"><i class="bi bi-eye"></i></a></td>
                                                </tr>
                                                <div class="modal fade" id="ExtralargeviewModal" tabindex="-1">
                                                    <div class="modal-dialog modal-lg">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title">View Student Application</h5>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form action="{{route('school_update_student_applications.post')}}" Method="POST">
                                                                    @csrf
                                                                    <center><h4><b>{{$data->school->name}}</b></h4></center>
                                                                    <br>
                                                                    <div class="row mb-3">
                                                                        <label class="col-sm-2 col-form-label" for="application_status">Admit Student?</label>
                                                                        <div class="col-sm-10">
                                                                            <select class="form-select" name="application_status" id="application_status" aria-label="Default select example">
                                                                                <option class="bg-success" value="Approved" selected>Yes</option>
                                                                                <option class="bg-danger" value="Declined">No</option>
                                                                                <option class="bg-info" value="Pending">Hold</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row mb-3">
                                                                        <label class="col-sm-2 col-form-label" for="application_id">Application ID</label>
                                                                        <div class="col-sm-10">
                                                                            <select class="form-select" name="application_id" id="application_id" aria-label="Default select example">
                                                                                <option value="{{$data->id}}" selected>{{$data->id}}</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <h5 class="card-title">Profile Details</h5>
                                                                    <div class="row">
                                                                        <div class="col-lg-3 col-md-4 label ">Full Name: </div>
                                                                        <div class="col-lg-9 col-md-8">{{$data->student->name}}</div>
                                                                    </div>
                                                                    <div class="row">
                                                                <div class="col-lg-3 col-md-4 label ">Email: </div>
                                                                <div class="col-lg-9 col-md-8">{{$data->student->email}}</div>
                                                                </div>
                                                                <div class="row">
                                                                <div class="col-lg-3 col-md-4 label ">About Student: </div>
                                                                <div class="col-lg-9 col-md-8">{{$data->student->user_about}}</div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-lg-3 col-md-4 label">Date Of Birth</div>
                                                                    <div class="col-lg-9 col-md-8">{{$data->student->dateofbirth}}</div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-lg-3 col-md-4 label">Gender</div>
                                                                    @if($data->student->gender==1)
                                                                        <div class="col-lg-9 col-md-8">Male</div>
                                                                    @elseif($data->student->gender==2)
                                                                        <div class="col-lg-9 col-md-8">Female</div>
                                                                    @endif
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-lg-3 col-md-4 label">Phone</div>
                                                                    <div class="col-lg-9 col-md-8">+266 {{$data->student->contact}}</div>
                                                                </div>
                                                                <h5 class="card-title">Symbols</h5>
                                                                <div class="row">
                                                                    <div class="col-lg-3 col-md-4 label">Mathematics</div>
                                                                    @if($data->student->math==1)
                                                                        <div class="col-lg-9 col-md-8">A</div>
                                                                    @elseif($data->student->math==2)
                                                                        <div class="col-lg-9 col-md-8">B</div>
                                                                    @elseif($data->student->math==3)
                                                                        <div class="col-lg-9 col-md-8">C</div>
                                                                    @elseif($data->student->math==4)
                                                                        <div class="col-lg-9 col-md-8">D</div>
                                                                    @elseif($data->student->math==5)
                                                                        <div class="col-lg-9 col-md-8">E</div>
                                                                    @endif
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-lg-3 col-md-4 label">English</div>
                                                                    @if($data->student->english==1)
                                                                        <div class="col-lg-9 col-md-8">A</div>
                                                                    @elseif($data->student->english==2)
                                                                        <div class="col-lg-9 col-md-8">B</div>
                                                                    @elseif($data->student->english==3)
                                                                        <div class="col-lg-9 col-md-8">C</div>
                                                                    @elseif($data->student->english==4)
                                                                        <div class="col-lg-9 col-md-8">D</div>
                                                                    @elseif($data->student->english==5)
                                                                        <div class="col-lg-9 col-md-8">E</div>
                                                                    @endif
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-lg-3 col-md-4 label">Biology</div>
                                                                    @if($data->student->biology==1)
                                                                        <div class="col-lg-9 col-md-8">A</div>
                                                                    @elseif($data->student->biology==2)
                                                                        <div class="col-lg-9 col-md-8">B</div>
                                                                    @elseif($data->student->biology==3)
                                                                        <div class="col-lg-9 col-md-8">C</div>
                                                                    @elseif($data->student->biology==4)
                                                                        <div class="col-lg-9 col-md-8">D</div>
                                                                    @elseif($data->student->biology==5)
                                                                        <div class="col-lg-9 col-md-8">E</div>
                                                                    @endif
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-lg-3 col-md-4 label">Physics</div>
                                                                    @if($data->student->physics==1)
                                                                        <div class="col-lg-9 col-md-8">A</div>
                                                                    @elseif($data->student->physics==2)
                                                                        <div class="col-lg-9 col-md-8">B</div>
                                                                    @elseif($data->student->physics==3)
                                                                        <div class="col-lg-9 col-md-8">C</div>
                                                                    @elseif($data->student->physics==4)
                                                                        <div class="col-lg-9 col-md-8">D</div>
                                                                    @elseif($data->student->physics==5)
                                                                        <div class="col-lg-9 col-md-8">E</div>
                                                                    @endif
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-lg-3 col-md-4 label">Accounting</div>
                                                                    @if($data->student->accounting==1)
                                                                        <div class="col-lg-9 col-md-8">A</div>
                                                                    @elseif($data->student->accounting==2)
                                                                        <div class="col-lg-9 col-md-8">B</div>
                                                                    @elseif($data->student->accounting==3)
                                                                        <div class="col-lg-9 col-md-8">C</div>
                                                                    @elseif($data->student->accounting==4)
                                                                        <div class="col-lg-9 col-md-8">D</div>
                                                                    @elseif($data->student->accounting==5)
                                                                        <div class="col-lg-9 col-md-8">E</div>
                                                                    @endif
                                                                </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                                        <button type="submit" class="btn btn-primary">Save</button>
                                                                    </div>
                                                                </form>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div><!-- End Extra Large Modal -->

                                            @endforeach
                                        @endif
                                        </tbody>
                                    </table>

                                </div>

                            </div>
                        </div><!-- End Recent Sales -->

                </div><!-- End Le
                    </div>ft side columns -->
                <!-- Right side columns -->

            </div>
        </section>
    </main><!-- End #main -->
@endsection
