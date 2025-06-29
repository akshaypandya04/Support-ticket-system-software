@extends('backend.admin.inc.master')
@section('title','Customer Management')
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
                                <li class="breadcrumb-item active" aria-current="page">Customer</li>
                            </ol>
                        </nav>
                    </div>
                       <div class="ms-auto">
                        <div class="btn-group">
                        <a href="{{route('users.index')}}"> <button type="button" class="btn btn-primary float-right">Back to Listing</button> </a>
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

@if(!empty($users->profile))
            <img class="profile_img" src="{{asset('uploads/profiles/'.$users->profile)}}" alt="student dp" style="height: 80px; width:80px;">

@else
            <img class="profile_img" src="https://source.unsplash.com/600x300/?student" alt="student dp" style="height: 80px; width:80px;"> 
@endif   <br><br>
 


            <h6>{{$users->name}}</h6>
          </div>
        
        </div>
      </div>
      <div class="col-lg-8">
        <div class="card shadow-sm">
          <div class="card-header bg-transparent border-0">
            <h5 class="mb-0"><i class="fa fa-clone pr-1"></i>General Information</h5><BR><BR>
          </div>
          <div class="card-body pt-0">
            <table class="table table-bordered">



<tr>
                <th width="30%"> Name</th>
                <td width="2%">:</td>
                <td>{{$users->name}}</td>
              </tr>



               <tr>
                <th width="30%">Phone</th>
                <td width="2%">:</td>
                <td>{{$users->phone}}</td>
              </tr>


               <tr>
                <th width="30%">Email ID</th>
                <td width="2%">:</td>
                <td>{{$users->email}}</td>
              </tr>

                <tr>
                <th width="30%">Aadhar No.</th>
                <td width="2%">:</td>
                <td>{{$users->aadhar_no}}</td>
              </tr>


              <tr>
                <th width="30%">Pan No.</th>
                <td width="2%">:</td>
                <td>{{$users->pan_no}}</td>
              </tr>


                <tr>
                <th width="30%">Aadhar Document</th>
                <td width="2%">:</td>
                <td> <a href="{{asset('uploads/documents/'.$users->aadhar_document)}}" target="_blank">VIEW</a> &nbsp;&nbsp; <a href="{{asset('uploads/documents/'.$users->aadhar_document)}}" download>Download</a></td>
              </tr>

                   <tr>
                <th width="30%">PANCARD Document</th>
                <td width="2%">:</td>
                <td> <a href="{{asset('uploads/documents/'.$users->pan_document)}}" target="_blank">VIEW</a>  &nbsp;&nbsp; <a href="{{asset('uploads/documents/'.$users->pan_document)}}" download>Download</a></td>
              </tr>

                   <tr>
                <th width="30%">LOAN APPROVAL Document</th>
                <td width="2%">:</td>
                <td> <a href="{{asset('uploads/documents/'.$users->latter_document)}}" target="_blank">VIEW</a> &nbsp;&nbsp; <a href="{{asset('uploads/documents/'.$users->latter_document)}}" download>Download</a></td>
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

