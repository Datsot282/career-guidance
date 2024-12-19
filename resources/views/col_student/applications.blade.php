@extends('col_student.layout.base_portal')
@section('Tittle')
    Student | Manage Applications
@endsection
@section('content')
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Applications</h1>
        </div><!-- End Page Title -->
        <section class="section dashboard">
            <div class="row">
                <!-- Left side columns -->
                <div class="col-lg-7">
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
                                            <th scope="col">Course</th>
                                            <th scope="col">School</th>
                                            <th scope="col">Status</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @if($userData->isEmpty())
                                            <p>No data found for your account.</p>
                                        @else
                                            @foreach ($userData as $data)
                                                <tr>
                                                    <th scope="row"><a href="#">#{{ $data->id }}</a></th>
                                                    <td>{{$data->course->course_name}}</td>
                                                    <td><a href="#" class="text-primary">{{$data->school->name}}</a></td>
                                                    @if($data->status=='rejected')
                                                        <td><span class="badge bg-danger">Rejected</span></td>
                                                    @elseif($data->status=='approved')
                                                        <td><span class="badge bg-success">Approved</span></td>
                                                    @else
                                                        <td><span class="badge bg-info">pending</span></td>
                                                    @endif
                                                </tr>
                                            @endforeach
                                        @endif
                                        </tbody>
                                    </table>

                                </div>

                            </div>
                        </div><!-- End Recent Sales -->

                </div><!-- End Le
                    </div>ft side columns -->
                </div>
                <!-- Right side columns -->
                <div class="col-lg-5">
                    <!-- Recent Activity -->
                    @include('col_student.components.courses')
                     </div><!-- End Right side columns -->
            </div>
        </section>
    </main><!-- End #main -->
@endsection
