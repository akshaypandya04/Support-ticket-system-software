@extends('backend.admin.inc.master')
@section('title','Ticket Management')
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
                                <li class="breadcrumb-item active" aria-current="page">Ticket</li>
                            </ol>
                        </nav>
                    </div>
                       <div class="ms-auto">
                        <div class="btn-group">
                        <!-- <a href="#"> <button type="button" class="btn btn-primary float-right" >Add New Ticket</button> </a> -->
                        </div>
                    </div>
                </div>

                <!--end breadcrumb-->
                <h6 class="mb-0 text-uppercase">Manage Ticket</h6>
                <hr/>

                 @include('partial.errors')

             <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                        <table id="example2" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>TICKET ID</th>
                                        <th>Name</th>
                                        <th>Subject</th>
                                        <th>Category/Department</th>
                                        <th>Status</th>
                                        <th>Posting</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
           <?php $i = 0 ?>
           @foreach ($data as $key => $value)
           <?php $i++ ?>
     <tr>
    
    <td> {{ $i}}</td>
    <td>{{$value->ticket_id}}</td>
    <td>{{ (!empty($value->User->name) ? $value->User->name : '')  }} <br> {{ (!empty($value->User->email) ? $value->User->email : '')  }}</td>
    <td>{{$value->subject}}</td>
    <td>{{ (!empty($value->Category->name) ? $value->Category->name : '')  }}</td>
      <td>
      @if($value->status=='Progress')
      <div class="badge rounded-pill text-info bg-light-info p-2 text-uppercase px-3"><i class="bx bxs-circle align-middle me-1"></i>In Progress</div>
      @elseif($value->status=='Closed')
     <div class="badge rounded-pill text-success bg-light-success p-2 text-uppercase px-3"><i class="bx bxs-circle align-middle me-1"></i>Closed</div>
     @else
     <div class="badge rounded-pill text-danger bg-light-danger p-2 text-uppercase px-3"><i class="bx bxs-circle align-middle me-1"></i>Hold</div>
     @endif
      </td>
      <td>{{date('d-m-Y', strtotime($value->created_at))}}</td>     
    

    <td>
       <a class="btn btn-primary" href="{{route('ticket.show',$value->id)}}">Reply</a>
        
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

