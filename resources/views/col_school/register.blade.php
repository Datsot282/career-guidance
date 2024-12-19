@extends('col_school.layout.base_for_register')
@section('Tittle')
    School | Register
@endsection
@section('content')
    <div class="register-box">
        @if($errors->any())
            <div class="col-12">
                @foreach($errors->all() as $error)
                    <div class="alert alert-danger">{{$error}}</div>
                @endforeach
            </div>
        @endif
        @if(session()->has('error'))
            <div class="alert alert-danger">{{session('error')}}</div>
        @endif

        @if(session()->has('success'))
            <div class="alert alert-success">{{ session('success')}}</div>
        @endif


        <div class="register-logo">
            <a href="/"><b>Online College Application System</a>
        </div>

        <div class="card">
            <div class="card-body register-card-body">
                <p class="login-box-msg">Register Colledge</p>

                <form action="{{route('sch_school_register.post')}}" method="POST">
                    @csrf
                    <div class="input-group mb-3">
                        <lable for="int_fullname" class="form-lable"></lable>
                        <input type="text" id="int_fullname" name="int_fullname" class="form-control" placeholder="Full name" required>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <lable for="email" class="form-lable"></lable>
                        <input type="email" id="email" name="email" class="form-control" placeholder="Email" required>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>

                    <div class="input-group mb-3">
                        <lable for="school_name" class="form-lable"></lable>
                        <input type="text" id="school_name" name="school_name" class="form-control" placeholder="Colledge name" required>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-file-signature"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <lable for="school_contacts" class="form-lable"></lable>
                        <input type="text" id="school_contacts" name="school_contacts" class="form-control" placeholder="Colledge Contacts" required>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-phone"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <lable for="password" class="form-lable"></lable>
                        <input type="password" id="password" name="password" class="form-control" placeholder="Password" required>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <lable for="int_conf_password" class="form-lable"></lable>
                        <input type="password" id="int_conf_password" name="int_conf_password" class="form-control" placeholder="Retype password" required>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-8">
                            <div class="icheck-primary">
                                <input type="checkbox" id="agreeTerms" name="terms" value="agree"  required>
                                <label for="agreeTerms">
                                    I agree to the <a href="#">terms</a>
                                </label>
                            </div>
                        </div>
                        <!-- /.col -->
                        <div class="col-4">
                            <button type="submit" class="btn btn-primary btn-block">Register</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>

                <div class="social-auth-links text-center">
                    <p>- OR -</p>
                    <a href="#" class="btn btn-block btn-primary">
                        <i class="fab fa-facebook mr-2"></i>
                        Sign up using Facebook
                    </a>
                    <a href="#" class="btn btn-block btn-danger">
                        <i class="fab fa-google-plus mr-2"></i>
                        Sign up using Google+
                    </a>
                </div>

                <a href="login.html" class="text-center">I already have a membership</a>
            </div>
            <!-- /.form-box -->
        </div><!-- /.card -->
    </div>
@endsection
