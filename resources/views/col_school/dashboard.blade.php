@extends('col_school.layout.base_portal')
@section('Tittle')
    Colledge | Dashboard
@endsection
@section('content')

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Dashboard</h1>

        </div><!-- End Page Title -->

        <section class="section dashboard">
            <div class="row">
                <!-- Left side columns -->
                <div class="col-lg-12">
                    <div class="row">
                        <!-- Sales Card -->
                        <div class="col-xxl-4 col-md-4">
                            <div class="card info-card sales-card">
                                <div class="card-body">
                                    <h5 class="card-title">Applications</h5>

                                    <div class="d-flex align-items-center">
                                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-journal-text"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>{{ $application_publicationscount }}</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-4 col-md-4">
                            <div class="card info-card revenue-card">

                                <div class="card-body">
                                    <h5 class="card-title">Fuculties</h5>

                                    <div class="d-flex align-items-center">
                                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-card-list text-primary"></i>
                                        </div>
                                        <div class="ps-3">
                                        <h6>{{$shool_fuculties_count}}</h6>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-xxl-4 col-md-4">
                            <div class="card info-card revenue-card">

                                <div class="card-body">
                                    <h5 class="card-title">Courses</h5>

                                    <div class="d-flex align-items-center">
                                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-box text-primary"></i>
                                        </div>
                                        <div class="ps-3">
                                        <h6>{{$courserss_count}}</h6>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- Recent Sales -->
                        <div class="col-12">
                            @include('col_student.components.user_applications')
                        </div><!-- End Recent Sales -->

                    </div>
                </div><!-- End Left side columns -->


            </div>
        </section>

    </main><!-- End #main -->

@endsection
