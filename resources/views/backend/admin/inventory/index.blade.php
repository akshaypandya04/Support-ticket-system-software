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
                                <li class="breadcrumb-item active" aria-current="page">Categories / Department</li>
                            </ol>
                        </nav>
                    </div>
                       <div class="ms-auto">
                        <div class="btn-group">
                        <a> <button type="button" class="btn btn-primary float-right" data-bs-toggle="modal" data-bs-target="#addModal">Add New Inventory</button> </a>
                        </div>
                    </div>
                </div>

                <!--end breadcrumb-->
                <h6 class="mb-0 text-uppercase">Manage Inventory</h6>
                <hr/>

                 @include('partial.errors')

             <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                         <table id="example2" class="table table-striped table-bordered">
          <thead>
          <tr>
    <th>No</th>
    <th>Branch Name</th>
    <th>Seriel No.</th>
    <th>Model No.</th>
    <th>Mac Address</th>
   <th width="280px">Action</th>
 </tr>
          </thead>
          <tfoot>
           <tr>
    <th>No</th>
    <th>Branch Name</th>
    <th>Seriel No.</th>
    <th>Model No.</th>
    <th>Mac Address</th>
   <th width="280px">Action</th>
 </tr>
          </tfoot>
          <tbody>
           <?php $i = 0 ?>
           @foreach($data as $value)   
          <?php $i++ ?>
       <tr>
      <td> {{ $i}}</td>
      <td>{{$value->branch_name}}</td>        
      <td>{{$value->serial_no}}</td>
      <td>{{$value->model_no}}</td>
      <td>{{$value->mac_address}}</td>
     <td>
        <a class="btn btn-sm btn-primary" href="{{ route('inventory.edit',$value->id) }}">Edit</a>
        <a class="btn btn-sm btn-danger" href="{{ route('inventory.delete',$value->id) }}" onclick="return confirm('Are you sure you want to delete this item?');">Delete</a>
    </td>
  </tr>
 @endforeach
          </tbody>
        </table>

                        </div>
                    </div>
                </div>
            </div>
       </div>
       
       
         <!--Add Category Modal -->
                                        <div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Add New Inventory</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form action="{{route('inventory.store')}}" method="post" enctype="multipart/form-data">
                                                        {{csrf_field()}}
                                                          <div class="row">

                            
                              <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="branch_name" class="col-form-label">Branch Name</label>
                               <input type="text" name="branch_name" id="branch_name" class="form-control" placeholder="Enter Branch Name"> 
                                   
                                    </div>
                                </div>

                                 <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="serial_no" class="col-form-label">Seriel No.</label>
                               <input type="text" name="serial_no" id="serial_no" class="form-control" placeholder="Enter Branch Name"> 
                                   
                                    </div>
                                </div>

                                 <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="model_no" class="col-form-label">Model No.</label>
                               <input type="text" name="model_no" id="model_no" class="form-control" placeholder="Enter Branch Name"> 
                                   
                                    </div>
                                </div>

                                 <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="mac_address" class="col-form-label">Mac Address</label>
                               <input type="text" name="mac_address" id="mac_address" class="form-control" placeholder="Enter Branch Name"> 
                                   
                                    </div>
                                </div>   
                                
                                
                                
                            </div>         
                                                               
                                                        
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-primary">Save</button>
                                                    </div>
                                                </form>    
                                                </div>
                                            </div>
                                        </div>



@endsection

