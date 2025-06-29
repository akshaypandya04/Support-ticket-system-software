@extends('backend.admin.inc.master')
@section('title','User Management')
@section('main-content')


<style type="text/css">
        #togglePassword {
            margin-left: 474px;
            cursor: pointer;
            margin-top: -26px;
            position: absolute;
        }

         #togglePassword1 {
            margin-left: 474px;
            cursor: pointer;
            margin-top: -26px;
            position: absolute;
        }
    </style>



<!--start page wrapper -->
        <div class="page-wrapper">
            <div class="page-content">
                <!--breadcrumb-->
                <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                    <div class="breadcrumb-title pe-3">Dashboard</div>
                    <div class="ps-3">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-0 p-0">
                                <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">User</li>
                            </ol>
                        </nav>
                    </div>
                       <div class="ms-auto">
                      
                    </div>
                </div>

                <!--end breadcrumb-->
                <h6 class="mb-0 text-uppercase">Manage User</h6>
                <hr/>

                 @include('partial.errors')

             <div class="card">
                    <div class="card-body">
                      
                       

<form method="post" action="{{route('users.store')}}" id="myForm" enctype="multipart/form-data">
                            {{csrf_field()}}

                            <div class="row">

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name" class="col-form-label"> Full Name <span
                                                class="text-danger">*</span></label>
                                        <input id="name" type="text" name="name" placeholder="Enter Name"
                                               value="{{old('name')}}" class="form-control" required>
                             
                                    </div>
                                </div>

                                 <div class="col-md-6">
                                    <div class="form-group">
                                      <label for="email" class="col-form-label required">Email </label>
                                      <input type="text" class="form-control" name="email" id="email" placeholder="Email">
                                       
                                    </div>
                                </div>
                            </div>

                      <div class="row">


                        <div class="col-md-6">
                                    <div class="form-group">
                                      <label for="phone" class="col-form-label required">Phone <span
                                                class="text-danger">*</span></label>
                                      <input type="text" class="form-control" name="phone" id="phone" placeholder="Phone" required>
                                    </div>
                        </div>


                            
                               <div class="col-md-6">
                                  <div class="form-group">
        <label for="password" class="col-form-label required"> Password
        <span class="text-danger">*</span></label>
         <input type="password" class="form-control password" name="password" id="password" placeholder="New Password" autocomplete="off" value="{{ old('password') }}">
         <!-- <i class="fa fa-eye" id="togglePassword"></i> -->
             </div>
           </div>



              <div class="col-md-6">
                                 <div class="form-group">
             <label for="confirm-password" class="col-form-label required">Confirm Password <span class="text-danger">*</span></label>
            <input type="password" class="form-control password1" name="password_confirmation" id="confirm-password" placeholder="Confirm Password Number" autocomplete="off"
             value="{{ old('password_confirmation') }}">
             <!-- <i class="fa fa-eye" id="togglePassword1"></i> -->
        </div>
           </div>




            <div class="col-md-6">
                                    <div class="form-group">
                                      <label for="verifiy_status" class="col-form-label required">Status</label>
                                      <select class="form-control" name="verifiy_status">
                                        <option value="0">--Select--</option>
                                        <option value="1">Active</option>
                                        <option value="0">Inactive</option>
                                      </select>
                                    </div>
                                </div>
         


                 </div>  <br><br>


                      <div class="form-group mb-3">
                            <a href="{{route('users.index')}}"> <button type="button" class="btn btn-warning">Back to Listing</button>  </a>
                                <button class="btn btn-primary float-right" type="submit">Save</button>
                            </div>
                        </form>


                      
                    </div>
                </div>
            </div>
       </div>
       
    

@endsection


@push('styles')
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.css"/>
@endpush
@push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>



    <script>
        const togglePassword = document.querySelector('#togglePassword');
        const password = document.querySelector('.password');

        togglePassword.addEventListener('click', function (e) {
            // toggle the type attribute
            const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
            password.setAttribute('type', type);
            // toggle the eye slash icon
            this.classList.toggle('fa-eye-slash');
        });
    </script>


    <script>
        const togglePassword1 = document.querySelector('#togglePassword1');
        const password1 = document.querySelector('.password1');

        togglePassword1.addEventListener('click', function (e) {
            // toggle the type attribute
            const type = password1.getAttribute('type') === 'password' ? 'text' : 'password';
            password1.setAttribute('type', type);
            // toggle the eye slash icon
            this.classList.toggle('fa-eye-slash');
        });
    </script>

@endpush
