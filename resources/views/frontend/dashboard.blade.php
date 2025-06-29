@extends('frontend.inc.master')
@section('title','Dashboard - User Panel')
@section('main-content')


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
                                <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                            </ol>
                        </nav>
                    </div>
                       <div class="ms-auto">
                        <div class="btn-group">
                        <!-- <a href="#"> <button type="button" class="btn btn-primary float-right">Back to Listing</button> </a> -->
                        </div>
                    </div>
                </div>

                <!--end breadcrumb-->
                <h6 class="mb-0 text-uppercase">View Information</h6>
                <hr/>

             <div class="card">
                    <div class="card-body">
                       

<div class="student-profile py-4">
  <div class="container">
    <div class="row">
      <div class="col-lg-4">
        <div class="card shadow-sm">
          <div class="card-header bg-transparent text-center">

    @if(Auth::user()->profile)            
                                            <img src="{{ asset('/uploads/profile/'.Auth::user()->profile) }}" alt="User" class="rounded-circle p-1 bg-primary" width="110">
                                 @else
                                           <img src="{{asset('back-end/assets/images/avatars/avatar-2.png')}}" alt="User" class="rounded-circle p-1 bg-primary" width="110">
                                 @endif  <br><br>

            <h6>{{Auth::user()->name}}</h6>
          </div>
        
        </div>
      </div>
      <div class="col-lg-8">
        <div class="card shadow-sm">
          <div class="card-header bg-transparent border-0">
            <h5 class="mb-0"><i class="fa fa-clone pr-1"></i>General Information</h5> <br><br>
          </div>
          <div class="card-body pt-0">
            <table class="table table-bordered">

<tr>
                <th width="30%"> Name</th>
                <td width="2%">:</td>
                <td>{{Auth::user()->name}}</td>
              </tr>



               <tr>
                <th width="30%">Phone</th>
                <td width="2%">:</td>
                <td>{{Auth::user()->phone}}</td>
              </tr>


               <tr>
                <th width="30%">Email ID</th>
                <td width="2%">:</td>
                <td>{{Auth::user()->email}}</td>
              </tr>
         
            </table>
          </div>
        </div>
          <div style="height: 26px"></div>
        
      </div>
    </div>
  </div>
</div>



                    </div>
                </div>
            </div>
       </div>





















  
@endsection
