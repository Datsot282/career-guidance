@extends('col_school.layout.base_portal')
@section('Tittle')
    School | Faculties
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
                                                <th scope="col">Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($fuculties as $fuculty)
                                                <tr>
                                                    <td>{{$fuculty->id}}</td>
                                                    <td><a href="#" class="text-primary fw-bold">{{$fuculty->name}}</a></td>
                                                    <td><a href="#" class="btn btn-primary">View</a></td>
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
