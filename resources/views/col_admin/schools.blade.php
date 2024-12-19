@extends('col_admin.layout.base_portal')
@section('Tittle')
    Admin | Schools
@endsection
@section('content')
    <main id="main" class="main">
        <!--Page Title -->
        <div class="pagetitle">
            <h1>Schools</h1>
        </div>
        <!-- End Page Title -->
        <section class="section profile">
            <div class="row">
                <div class="col-xl-12">
                    <div>
                        <!-- Bordered Tabs -->
                        <ul class="nav nav-tabs nav-tabs-bordered">
                            <li class="nav-item">
                                <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Schools</button>
                            </li>
                            <li class="nav-item">
                                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Add School</button>
                            </li>
                        </ul>
                        <div class="tab-content pt-2">
                            <div class="tab-pane fade show active profile-overview" id="profile-overview">
                                <div class="card">
                                    <div class="card-body pt-3">
                                        @if($courses->isEmpty())
                                            <p>No data found for your account.</p>
                                        @else
                                            <table class="table table-borderless table-striped table-hover datatable">
                                                <thead>
                                                <tr>
                                                    <th scope="col">id</th>
                                                    <th scope="col">School Name</th>
                                                    <th scope="col">School Location</th>
                                                    <th scope="col">School Email</th>
                                                    <th scope="col">School Contacts</th>
                                                    <th scope="col">Action</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($schools as $course)
                                                    <tr>
                                                        <th scope="row"><a href="#">{{$course->id}}</a></th>
                                                        <td>{{$course->name}}</td>
                                                        <td>{{$course->location}}</td>
                                                        <td>{{$course->email}}</td>
                                                        <td>{{$course->contacts}}</td>
                                                        <td>
                                                            <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDialogScrollable{{$course->id}}"><i class="bi bi-eye"></i></a>
                                                            <div class="modal fade" id="modalDialogScrollable{{$course->id}}" tabindex="-1">
                                                                <div class="modal-dialog modal-dialog-scrollable">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <center><h5 class="modal-title">Edit {{$course->name}}</h5></center>
                                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <form class="row g-3" action="{{ route('update_course_application.post') }}" method="POST">
                                                                                @csrf
                                                                                <div class="col-md-12">
                                                                                    <select id="input_school_id" name="input_school_id" class="form-select" readonly>
                                                                                        <option value="{{ $course->id }}" selected>{{ $course->name }}</option>
                                                                                    </select>
                                                                                </div>
                                                                                <div class="col-md-12">
                                                                                    <input type="text" id="input_school_name" name="input_school_name" class="form-control" placeholder="Name" value="{{ $course->name }}" required>
                                                                                </div>
                                                                                <div class="col-md-12">
                                                                                    <input type="text" id="input_school_location" name="input_school_location" class="form-control" placeholder="Location" value="{{ $course->location }}" required>
                                                                                </div>
                                                                                <div class="col-md-12">
                                                                                    <input type="text" id="input_school_contacts" name="input_school_contacts" class="form-control" placeholder="Contacts" value="{{ $course->contacts }}" required>
                                                                                </div>
                                                                                <div class="col-md-12">
                                                                                    <input type="email" id="input_school_email" name="input_school_email" class="form-control" placeholder="Email" value="{{ $course->email }}" required>
                                                                                </div>
                                                                                <div class="modal-footer">
                                                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                                                    <button type="submit" class="btn btn-primary">Update</button>
                                                                                </div>
                                                                            </form>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div><!-- End Modal Dialog Scrollable-->

                                                            <form action="{{ route('record.delete', $course->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this record?');">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-danger mt-2"><i class="bi bi-trash"></i></button>
                                                        </form>
                                                        </td>
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
                                <form action="{{route('create_school_profile.post')}}" method="POST">
                                    @csrf
                                    <div class="row mb-3">
                                        <label for="sch_full_names" class="col-md-4 col-lg-3 col-form-label">School Name</label>
                                        <div class="col-md-8 col-lg-9">
                                            <input name="sch_full_names" id="sch_full_names" type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="sch_about" class="col-md-4 col-lg-3 col-form-label">Description</label>
                                        <div class="col-md-8 col-lg-9">
                                            <textarea name="sch_about" id="sch_about" class="form-control" id="about" style="height: 100px"></textarea>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="sch_contacts" class="col-md-4 col-lg-3 col-form-label">Phone</label>
                                        <div class="col-md-8 col-lg-9">
                                            <input name="sch_contacts" id="sch_contacts" type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="sch_email" class="col-md-4 col-lg-3 col-form-label">Email</label>
                                        <div class="col-md-8 col-lg-9">
                                            <input name="sch_email" id="sch_email" type="email" class="form-control">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="sch_location" class="col-md-4 col-lg-3 col-form-label">Address</label>
                                        <div class="col-md-8 col-lg-9">
                                            <input name="sch_location" id="sch_location" type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="text-center  mt-6">
                                        <button type="submit" class="btn btn-primary">Create</button>
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
