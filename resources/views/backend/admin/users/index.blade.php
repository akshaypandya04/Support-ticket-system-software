@extends('backend.admin.inc.master')
@section('title','User Management')
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
                                <li class="breadcrumb-item active" aria-current="page">User</li>
                            </ol>
                        </nav>
                    </div>
                       <div class="ms-auto">
                        <div class="btn-group">
                        <a href="{{route('users.create')}}"> <button type="button" class="btn btn-primary float-right" >Add New User</button> </a>
                        </div>
                    </div>
                </div>

                <!--end breadcrumb-->
                <h6 class="mb-0 text-uppercase">Manage User</h6>
                <hr/>

                 @include('partial.errors')

             <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                        <table id="example2" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>User Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
           <?php $i = 0 ?>
           @foreach ($users as $key => $user)
           <?php $i++ ?>
     <tr>
    
    <td> {{ $i}}</td>
    <td>{{ $user->name }}</td>
    <td>{{ $user->email }}</td>
    <td>{{ $user->phone }}</td>
      <td>
      @if($user->verifiy_status=='1')
      <span class="badge badge-success">Active</span>
      @else
      <span class="badge badge-warning">Inactive</span>
      @endif
      </td>     

    <td>
       <a class="btn btn-primary" href="{{route('users.edit',$user->id)}}">Edit</a>
       <!-- <a class="btn btn-info" href="{{route('users.show',$user->id)}}">view</a> -->
     {!! Form::open(['method' => 'DELETE','route' => ['users.destroy', $user->id],'style'=>'display:inline']) !!}
            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
        {!! Form::close() !!}  
        
    </td>
  </tr>
 @endforeach
                                </tfoot>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
       </div>
       
       
@endsection

