@extends('backend.admin.inc.master')
@section('title','Category Management')
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
                        <a> <button type="button" class="btn btn-primary float-right" data-bs-toggle="modal" data-bs-target="#addModal">Add New Category</button> </a>
                        </div>
                    </div>
                </div>

                <!--end breadcrumb-->
                <h6 class="mb-0 text-uppercase">Manage Category / Department</h6>
                <hr/>

                 @include('partial.errors')

             <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                         <table id="example2" class="table table-striped table-bordered">
          <thead>
          <tr>
    <th>No</th>
    <th>Name</th>
    <th>Status</th>
   <th width="280px">Action</th>
 </tr>
          </thead>
          <tfoot>
           <tr>
    <th>No</th>
    <th>Name</th>
    <th>Status</th>
   <th width="280px">Action</th>
 </tr>
          </tfoot>
          <tbody>
           <?php $i = 0 ?>
           @foreach($data as $category)   
          <?php $i++ ?>
       <tr>
      <td> {{ $i}}</td>
      <td>{{ $category->name }}</td>
      <td>
      @if($category->status=='1')
      <span class="badge badge-success">Active</span>
      @else
      <span class="badge badge-warning">Inactive</span>
      @endif
      </td>        

     <td>
        <!--<a class="btn btn-sm btn-warning" href="#">Block</a>-->
        <a class="btn btn-sm btn-primary" href="{{ route('category.edit',$category->id) }}">Edit</a>
        {!! Form::open(['method' => 'DELETE','route' => ['category.destroy', $category->id],'style'=>'display:inline']) !!}
            {!! Form::submit('Delete', ['class' => 'btn btn-sm btn-danger']) !!}
        {!! Form::close() !!}
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
                                                        <h5 class="modal-title" id="exampleModalLabel">Add New Category</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form action="{{route('category.store')}}" method="post" enctype="multipart/form-data">
                                                        {{csrf_field()}}
                                                          <div class="row">

                            
                              <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="name" class="col-form-label">Name<span
                                                class="text-danger">*</span></label>
                               <input type="text" name="name" class="form-control" placeholder="Enter Name"> 
                                   
                                    </div>
                                </div>   
                                
                                

                                 <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="status" class="col-form-label"> Status<span
                                                class="text-danger">*</span></label>
                                
                                <select class="form-control" name="status">
                                    <option value="">--select status--</option>
                                    <option value="1">Active</option>
                                    <option value="0">Inactive</option>
                                </select>
                                       
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

