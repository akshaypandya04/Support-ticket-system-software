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
                                <li class="breadcrumb-item active" aria-current="page">Manage Customer</li>
                            </ol>
                        </nav>
                    </div>
                    
                </div>

                <!--end breadcrumb-->
                <h6 class="mb-0 text-uppercase">Edit Customer</h6>
                <hr/>

                 @include('partial.errors')


                 <div class="card">
                            <div class="card-body">
                                <div class="p-4 border rounded">
                                

                    <form class="row g-3 needs-validation" novalidate="" method="post" enctype="multipart/form-data" action="{{route('users.update',$users->id)}}" id="myForm">
        @csrf 
        @method('PUT')

                                      <div class="row">

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name" class="col-form-label">Customer Name <span
                                                class="text-danger">*</span></label>
                                        <input id="name" type="text" name="name" placeholder="Enter Title"
                                               value="{{$users->name}}" class="form-control" required>
                                     
                                    </div>
                                </div>

                               <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="email" class="col-form-label"> Email</label>
                                
                                   <input id="email" type="email" name="email" placeholder="Enter Email"
                                               value="{{$users->email}}" class="form-control" >
                                               
                                    </div>
                                </div> 


                                  <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="phone" class="col-form-label"> Phone </label>
                                        <input id="phone" type="text" name="phone" placeholder="Enter Phone Number"
                                               value="{{$users->phone}}" class="form-control" >
                                     
                                    </div>
                                </div>


                               <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="email" class="col-form-label"> Status<span
                                                class="text-danger">*</span></label>
                                <select class="form-control" name="verifiy_status">
                                    <option value="">--select status--</option>
              <option value="1" {{(($users->verifiy_status=='1')? 'selected' : '')}}>Active</option>
              <option value="0" {{(($users->verifiy_status=='0')? 'selected' : '')}}>Inactive</option>
                                </select>
                                               
                                    </div>
                                </div> 


                                 <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="password" class="col-form-label"> Password<span
                                                class="text-danger">*</span></label>
                                
                  <input id="password" type="text" name="password" placeholder="Enter Password"
                                               value="{{$users->vissible}}" class="form-control" required>
                                       
                                    </div>
                                </div>  
                                
                                
                                                        
                                

                                </div> 

                                   <div class="form-group mb-3">
                           <a href="{{route('users.index')}}"> <button type="button" class="btn btn-warning">Back to Listing</button> </a>
                                <button class="btn btn-primary float-right" type="submit">Update</button>
                            </div>  
                                    </form>
                                </div>
                            </div>
                        </div>
                     </div>
                  </div>
     

@endsection
