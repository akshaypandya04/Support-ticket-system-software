@extends('backend.admin.inc.master')
@section('title','Profile Management')
@section('main-content')



        <!--start page wrapper -->
        <div class="page-wrapper">
            <div class="page-content">
                <!--breadcrumb-->
                <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                    <div class="breadcrumb-title pe-3">User Profile</div>
                    
                    <div class="ps-3">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-0 p-0">
                                <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">Admin Profile</li>
                            </ol>
                        </nav>
                    </div>
                    
                    <div class="ms-auto">
                       @include('partial.errors')
                    </div>
                </div>
                <!--end breadcrumb-->
                <div class="container">
                    <div class="main-body">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex flex-column align-items-center text-center">
                                 @if(Auth::user()->profile)            
                                            <img src="{{ asset('/uploads/profile/'.Auth::user()->profile) }}" alt="Admin" class="rounded-circle p-1 bg-primary" width="110">
                                 @else
                                           <img src="{{asset('back-end/assets/images/avatars/avatar-2.png')}}" alt="Admin" class="rounded-circle p-1 bg-primary" width="110">
                                 @endif
                                            <div class="mt-3">
                                                <h4>{{Auth::user()->name}}</h4>
                                                <p class="text-muted font-size-sm">{{Auth::user()->email}}</p>
                                               
                                            </div>
                                        </div>
                                        <hr class="my-4" />
                                     
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="card">
                             <form enctype="multipart/form-data" class="border px-4 pt-2 pb-3" method="POST"
                                      action="{{url('/admin/profileUpdate')}}">
                                    @csrf        
                                    <div class="card-body">
                                        <div class="row mb-3">
                                            <div class="col-sm-3">
                                                <h6 class="mb-0">Full Name</h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary">
                                                <input type="text" class="form-control" name="name" value="{{Auth::user()->name}}" />
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-3">
                                                <h6 class="mb-0">Email</h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary">
                                                <input type="text" class="form-control" name="email" value="{{Auth::user()->email}}" />
                                            </div>
                                        </div>
                                        
                                        <div class="row mb-3">
                                            <div class="col-sm-3">
                                                <h6 class="mb-0">Profile</h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary">
                                                <input type="file" class="form-control" name="profile" value="{{Auth::user()->profile}}" />
                                            </div>
                                        </div>
                                     
                                        <div class="row">
                                            <div class="col-sm-3"></div>
                                            <div class="col-sm-9 text-secondary">
                                                <input type="submit" class="btn btn-primary px-4" value="Save Changes" />
                                            </div>
                                        </div>
                                    </div>
                            </form>        
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="card">
                              <form enctype="multipart/form-data" class="border px-4 pt-2 pb-3" method="POST"
                                      action="{{url('/admin/update-pwd')}}">
                                    @csrf                     
                                            <div class="card-body">
                                                <h5 class="d-flex align-items-center mb-3">Change Password</h5>
                                                
                                                       <div class="row mb-3">
                                            <div class="col-sm-3">
                                                <h6 class="mb-0">Old Password</h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary">
                                                <input type="password" class="form-control" name="currentpassword">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-3">
                                                <h6 class="mb-0">New Password</h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary">
                                                <input type="password" class="form-control" name="newpassword">
                                            </div>
                                        </div>
                                        
                                         <div class="row mb-3">
                                            <div class="col-sm-3">
                                                <h6 class="mb-0">Confirm Password</h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary">
                                                <input type="password" class="form-control" name="newpassword_confirmation">
                                            </div>
                                        </div>
                                     
                                        <div class="row">
                                            <div class="col-sm-3"></div>
                                            <div class="col-sm-9 text-secondary">
                                                <input type="submit" class="btn btn-primary px-4" value="Save Changes" />
                                            </div>
                                        </div>
                                               
                                            </div>  
                                 </form>                                       
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end page wrapper -->
     

@endsection
