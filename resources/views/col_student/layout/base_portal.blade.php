
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>@yield('Tittle')</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{asset('niceadmin/assets/img/favicon.png')}}" rel="icon">
    <link href="{{asset('niceadmin/assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{asset('niceadmin/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('niceadmin/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{asset('niceadmin/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
    <link href="{{asset('niceadmin/assets/vendor/quill/quill.snow.css')}}" rel="stylesheet">
    <link href="{{asset('niceadmin/assets/vendor/quill/quill.bubble.css')}}" rel="stylesheet">
    <link href="{{asset('niceadmin/assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
    <link href="{{asset('niceadmin/assets/vendor/simple-datatables/style.css')}}" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Template Main CSS File -->
    <link href="{{asset('niceadmin/assets/css/style.css')}}" rel="stylesheet">
</head>

<body>

<!-- ======= Header ======= -->
<header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
        <a href="/stu_dashboard" class="logo d-flex align-items-center">
            <span class="d-none d-lg-block">CARER GUIDANCE</span>
        </a>
        <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <nav class="header-nav ms-auto">
        <ul class="d-flex align-items-center">

            <li class="nav-item dropdown pe-3">

                <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                    <img src="{{asset('niceadmin/assets/img/profile-img.jpg')}}" alt="Profile" class="rounded-circle">
                    <span class="d-none d-md-block dropdown-toggle ps-2">{{$user->name}}</span>
                </a><!-- End Profile Iamge Icon -->

                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                    <li class="dropdown-header">
                        <h6>{{$user->name}}</h6>
                    </li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>

                    <li>
                        <a class="dropdown-item d-flex align-items-center" href="/stu_profile">
                            <i class="bi bi-person"></i>
                            <span>My Profile</span>
                        </a>
                    </li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>

                    <li>
                        <a class="dropdown-item d-flex align-items-center" href="/logout">
                            <i class="bi bi-box-arrow-right"></i>
                            <span>Sign Out</span>
                        </a>
                    </li>

                </ul><!-- End Profile Dropdown Items -->
            </li><!-- End Profile Nav -->

        </ul>
    </nav><!-- End Icons Navigation -->

</header><!-- End Header -->

<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link " href="/stu_dashboard">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li><!-- End Dashboard Nav -->
        <li class="nav-heading">Account</li>
        <li class="nav-item">
            <a class="nav-link collapsed" href="/stu_applications">
                <i class="bi bi-journal-text"></i>
                <span>Applications</span>
            </a>
        </li><!-- End Profile Page Nav -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="/stu_admissions">
                <i class="bi bi-card-list"></i>
                <span>Admissions</span>
            </a>

        <li class="nav-heading">Settings</li>
        <li class="nav-item">
            <a class="nav-link collapsed" href="/stu_profile">
                <i class="bi bi-person"></i>
                <span>Profile</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" href="/logout">
                <center>
                    <span>Logout</span>
                </center>
            </a>
        </li><!-- End Profile Page Nav -->
        <!-- End Profile Page Nav -->
    </ul>

</aside><!-- End Sidebar-->
@yield('content')
<!-- ======= Footer ======= -->
<footer id="footer" class="footer">
    <div class="copyright">
        &copy; Copyright . All Rights Reserved
    </div>
    <div class="credits">
        Designed by <a href="/">Group Assignment</a>
    </div>
</footer><!-- End Footer -->

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="{{asset('niceadmin/assets/vendor/apexcharts/apexcharts.min.js')}}"></script>
<script src="{{asset('niceadmin/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"')}}></script>
<script src="{{asset('niceadmin/assets/vendor/chart.js/chart.min.js')}}"></script>
<script src="{{asset('niceadmin/assets/vendor/echarts/echarts.min.js')}}"></script>
<script src="{{asset('niceadmin/assets/vendor/quill/quill.min.js')}}"></script>
<script src="{{asset('niceadmin/assets/vendor/simple-datatables/simple-datatables.js')}}"></script>
<script src="{{asset('niceadmin/assets/vendor/tinymce/tinymce.min.js')}}"></script>
<script src="{{asset('niceadmin/assets/vendor/php-email-form/validate.js')}}"></script>

<!-- Template Main JS File -->
<script src="{{asset('niceadmin/assets/js/main.js')}}"></script>

</body>

</html>
