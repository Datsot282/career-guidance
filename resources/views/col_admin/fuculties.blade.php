@extends('col_admin.layout.base_portal')
@section('Tittle')
    Admin | Faculties
@endsection
@section('content')
    <main id="main" class="main">
        <!--Page Title -->
        <div class="pagetitle">
            <h1>Faculties</h1>
        </div>
        <!-- End Page Title -->

        <section class="section profile">
            <div class="row">
                <div class="col-xl-12">

                    <div>
                            <!-- Bordered Tabs -->
                            <ul class="nav nav-tabs nav-tabs-bordered">
                                <li class="nav-item">
                                    <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Fuculties</button>
                                </li>
                                <li class="nav-item">
                                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Add New</button>
                                </li>
                            </ul>
                            <div class="tab-content pt-2">

                                <div class="tab-pane fade show active profile-overview" id="profile-overview">
                                    <div class="card">
                                    <div class="card-body pt-3">
                                        <table class="table table-borderless">
                                            <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Fuculty Name</th>
                                                <th scope="col">School</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($shool_fuculties as $fuculty)
                                                <tr>
                                                    <td>{{$fuculty->id}}</td>
                                                    <td><a href="#" class="text-primary fw-bold">{{$fuculty->name}}</a></td>
                                                    <td><a href="#" class="text-primary fw-bold">{{$fuculty->school->name}}</a></td>
                                                    <td><a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDialogScrollable{{$fuculty->id}}"><i class="bi bi-eye"></i></a>
                                                        <div class="modal fade" id="modalDialogScrollable{{$fuculty->id}}" tabindex="-1">
                                                            <div class="modal-dialog modal-dialog-scrollable">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <center><h5 class="modal-title">Edit {{$fuculty->name}}</h5></center>
                                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <form class="row g-3" action="{{ route('update_faculty_info.post') }}" method="POST">
                                                                            @csrf
                                                                            <div class="col-md-12">
                                                                                <select id="input_faculty_id" name="input_faculty_id" class="form-select" readonly>
                                                                                    <option value="{{ $fuculty->id }}" selected>{{ $fuculty->name }}</option>
                                                                                </select>
                                                                            </div>
                                                                            <div class="col-md-12">
                                                                                <input type="text" id="input_faculty_name" name="input_faculty_name" class="form-control" placeholder="Name" value="{{ $fuculty->name }}" required>
                                                                            </div>
                                                                            <div class="col-md-12">
                                                                                <select id="input_faculty_school_id" name="input_faculty_school_id" class="form-select" readonly>
                                                                                    <option value="{{ $fuculty->school->id }}" selected>{{ $fuculty->school->name }}</option>
                                                                                </select>
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

                                                        <form action="{{ route('fuculty.delete', $fuculty->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this record?');">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger mt-2"><i class="bi bi-trash"></i></button>
                                                    </form>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                    </div>

                                <div class="tab-pane fade profile-edit pt-3" id="profile-edit">
                                    <!-- Profile Edit Form -->
                                    <form action="{{route('register_fuculty.post')}}" method="POST">
                                        @csrf
                                        <div class="row mb-3">
                                            <label for="stu_full_names" class="col-md-4 col-lg-3 col-form-label">Fuculty Name</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="fuculty_names" id="fuculty_names" type="text" class="form-control" placeholder="Enter Fuculty Name" ">
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