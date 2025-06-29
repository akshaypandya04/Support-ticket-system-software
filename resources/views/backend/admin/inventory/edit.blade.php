@extends('backend.admin.inc.master')
@section('title','Inventory Management')
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
                                <li class="breadcrumb-item active" aria-current="page">Manage Inventory</li>
                            </ol>
                        </nav>
                    </div>
                    
                </div>

                <!--end breadcrumb-->
                <h6 class="mb-0 text-uppercase">Edit Inventory</h6>
                <hr/>

                 @include('partial.errors')


                 <div class="card">
                            <div class="card-body">
                                <div class="p-4 border rounded">
                                

                    <form class="row g-3 needs-validation" novalidate="" method="post" enctype="multipart/form-data" action="{{route('inventory.update',$inventory->id)}}" id="myForm">
        @csrf 
        @method('PUT')

                                <div class="row">


                               <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="branch_name" class="col-form-label">Branch Name</label>
                               <input type="text" name="branch_name" id="branch_name" class="form-control" placeholder="Enter Branch Name" value="{{$inventory->branch_name}}"> 
                                   
                                    </div>
                                </div>

                                 <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="serial_no" class="col-form-label">Seriel No.</label>
                               <input type="text" name="serial_no" id="serial_no" class="form-control" placeholder="Enter Seriel No." value="{{$inventory->serial_no}}"> 
                                   
                                    </div>
                                </div>

                                 <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="model_no" class="col-form-label">Model No.</label>
                               <input type="text" name="model_no" id="model_no" class="form-control" placeholder="Enter Model No." value="{{$inventory->model_no}}"> 
                                   
                                    </div>
                                </div>

                                 <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="mac_address" class="col-form-label">Mac Address</label>
                               <input type="text" name="mac_address" id="mac_address" class="form-control" placeholder="Enter Mac Address" value="{{$inventory->mac_address}}"> 
                                   
                                    </div>
                                </div>   


                            
                                </div> 

                                   <div class="form-group mb-3">
                           <a href="{{route('inventory.index')}}"> <button type="button" class="btn btn-warning">Back to Listing</button> </a>
                                <button class="btn btn-primary float-right" type="submit">Update</button>
                            </div>  
                                    </form>
                                </div>
                            </div>
                        </div>
                     </div>
                  </div>
     

@endsection
