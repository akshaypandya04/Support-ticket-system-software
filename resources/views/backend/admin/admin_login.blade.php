@include('backend.admin.inc.head')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


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

<body>
    <!--wrapper-->
    <div class="wrapper">
        <div class="authentication-header"></div>
        <div class="section-authentication-signin d-flex align-items-center justify-content-center my-5 my-lg-0">
            <div class="container-fluid">
                <div class="row row-cols-1 row-cols-lg-2 row-cols-xl-3">
                    <div class="col mx-auto">
                        <div class="mb-4 text-center">
                            <img src="{{asset('back-end/assets/images/logo-img.png')}}" width="180" alt="" />
                        </div> 
                        <div class="card">
                            <div class="card-body">
                                <div class="p-4 rounded">
                                   
                                    <div class="d-grid">
                                        <a class="btn my-4 shadow-sm btn-white"> <span class="d-flex justify-content-center align-items-center">
                        
                          <span>Admin Panel</span>
                                            </span>
                                        </a> 
                                    </div>
                               
                                    <div class="form-body">
           
                        @include('partial.errors')
                                <form class="row g-3" method="POST" action="{{url('/admin')}}">
                                    {{csrf_field()}}
                                            <div class="col-12">
                                                <label for="inputEmailAddress" class="form-label">Email Address</label>
                                                <input type="email" name="email" class="form-control" id="inputEmailAddress" placeholder="Email Address">
                                            </div>
                                            <div class="col-12">
                                                <label for="inputChoosePassword" class="form-label">Enter Password</label>
                                                <div class="input-group" id="show_hide_password">
                                                    <input type="password" name="password" class="form-control border-end-0" id="password" placeholder="Enter Password" required="required"> <a href="javascript:;" class="input-group-text bg-transparent"><i class='bx bx-show' id="toggle"></i></a>
                                                </div>
                                            </div>
                                           
                                           <!--  <div class="col-md-6 text-end"> <a href="authentication-forgot-password.html">Forgot Password ?</a>
                                            </div> -->
                                            <div class="col-12">
                                                <div class="d-grid">
                                                    <button type="submit" class="btn btn-primary"><i class="bx bxs-lock-open"></i>Sign in</button>
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
    <!--end wrapper-->
  
<script src="{{asset('back-end/assets/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('back-end/assets/js/jquery.min.js')}}"></script>
<script src="{{asset('back-end/assets/plugins/metismenu/js/metisMenu.min.js')}}"></script>
<script src="{{asset('back-end/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js')}}"></script>
<script src="{{asset('back-end/assets/plugins/apexcharts-bundle/js/apexcharts.min.js')}}"></script>
<script src="{{asset('back-end/assets/js/index3.js')}}"></script>

    <script>
        new PerfectScrollbar('.best-selling-products');
        new PerfectScrollbar('.recent-reviews');
        new PerfectScrollbar('.support-list');
    </script>
    <!--app JS-->
    <script src="{{asset('back-end/assets/js/app.js')}}"></script>
</body>

</html>


@push("sub-script")
<script>
    function showhide() {

        var type = document.getElementById("password").getAttribute("type");

        if (type == "password")
        {
            //Change type attribute
            document.getElementById("password").setAttribute("type", "text");
        } else
        {
            //Change type attribute
            document.getElementById("password").setAttribute("type", "password");
        }

    }
</script>
@endpush
