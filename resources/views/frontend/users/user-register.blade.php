@extends('frontend.layouts.master')
@section('content')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<style>
    .authentication-header {
    position: absolute;
    background: #ffca33;
    }

a {
    color: #8833ff;
}
.h1, .h2, .h3, .h4, .h5, .h6, h1, h2, h3, h4, h5, h6 {
    color: #32393f;
}

</style>

<script>
//jquery
$(document).ready(function () {

    $("#toggle").click(function () {

        if ($("#password").attr("type") == "password")
        {
            //Change type attribute
            $("#password").attr("type", "text");
        } else
        {
            //Change type attribute
            $("#password").attr("type", "password");
        }
    });

});
</script>

<!-- <body style="background-image::url('{{asset('frontend/img/login-background.webp');}}')"> -->

<body style="background-color: #0a58ca85 !important;">
    

    <!--wrapper-->
    <div class="wrapper" style="padding-top:150px;">
        <div class="authentication-header"></div>
        <div class="section-authentication-signin d-flex align-items-center justify-content-center my-5 my-lg-0">
            <div class="container-fluid">
                <div class="row row-cols-1 row-cols-lg-2 row-cols-xl-2">
                    <div class="col mx-auto">

<!-- Logo -->
                <img src="{{asset('back-end/assets/images/logo-img.png')}}" style="height: 70px; padding-left:185px;">  <br><br>
                        
                        <div class="card">
                            <div class="card-body">
                                <div class="p-4 rounded">

                                    <div class="text-center">
                                        <h3 class="">Sign Up</h3>
                                        <p>Already have an account? <a href="{{url('/login')}}">Sign in here</a>
                                        </p>
                                    </div>  <hr>
                                   
                                    <div class="form-body">
           
                        @include('partial.errors')
                                <form class="row g-3" method="POST" action="{{route('register')}}">
                                    {{csrf_field()}}

                                           <div class="col-sm-6">
                                                <label for="name" class="form-label">Name</label>
                                                <input type="text" name="name" class="form-control" id="name" placeholder="Enter Name">
                                            </div>

                                            <div class="col-sm-6">
                                                <label for="email" class="form-label">Email Address</label>
                                                <input type="email" name="email" class="form-control" id="email" placeholder="Enter Email Address">
                                            </div>

                                             <div class="col-sm-6">
                                                <label for="phone" class="form-label">Phone Number</label>
                                                <input type="number" name="phone" class="form-control" id="phone" placeholder="Enter Phone Number">
                                            </div>

                                             <div class="col-sm-6">
                                                <label for="unique_id" class="form-label">Console I'd</label>
                                                <input type="text" name="unique_id" class="form-control" id="unique_id" placeholder="Enter Console I'd">
                                            </div>


                                            <div class="col-12">
                                                <label for="password" class="form-label">Enter Password</label>
                                                <div class="input-group">
                                                    <input type="password" name="password" class="form-control border-end-0" id="password" placeholder="Enter Password" required="required"> 
                                                </div>
                                            </div>
     
                                            <div class="col-12">
                                                <div class="d-grid">
                                                    <button type="submit" class="btn btn-warning" style="background-color: #022859; color:white; border-color: #022859;"><i class="bx bxs-lock-open"></i> Register</button>
                                                </div>
                                            </div>
                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end row-->
            </div>
        </div>
    </div>
    <!--end wrapper--> <br><br>
  
<script src="{{asset('back-end/assets/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('back-end/assets/js/jquery.min.js')}}"></script>
<script src="{{asset('back-end/assets/plugins/metismenu/js/metisMenu.min.js')}}"></script>
<script src="{{asset('back-end/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js')}}"></script>
<script src="{{asset('back-end/assets/plugins/apexcharts-bundle/js/apexcharts.min.js')}}"></script>
<script src="{{asset('back-end/assets/js/index3.js')}}"></script>


@endsection
