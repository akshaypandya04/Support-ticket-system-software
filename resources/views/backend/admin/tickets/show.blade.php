@extends('backend.admin.inc.master')
@section('title','Reply Ticket')
@section('main-content')



        <!--start page wrapper -->
        <div class="page-wrapper">
            <div class="page-content">
                <!--breadcrumb-->
                <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                    <div class="breadcrumb-title pe-3">Reply Ticket</div>
                    
                    <div class="ps-3">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-0 p-0">
                                <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">Reply Ticket</li>
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
                                
                                            
                                           <!-- <img src="{{asset('back-end/assets/images/avatars/avatar-2.png')}}" alt="Admin" class="rounded-circle p-1 bg-primary" width="110"> -->
                           
                                            <div class="mt-3">
                                                <h4>{{ (!empty($tickets->User->name) ? $tickets->User->name : '')  }} </h4> <br>
                                                <p class="text-muted font-size-sm">{{ (!empty($tickets->User->email) ? $tickets->User->email : '')  }}</p>

                                                <hr>

                                                <h5>  #{{$tickets->ticket_id}} </h5> <hr>

                                                <b> Posting Date </b>- {{$tickets->created_at}}  <hr>

                                                <b> Department / Category </b> - {{ (!empty($tickets->Category->name) ? $tickets->Category->name : '')  }}  <hr>

                                                <b> Status </b> :  

      @if($tickets->status=='Progress')
      <div class="badge rounded-pill text-info bg-light-info p-2 text-uppercase px-3"><i class="bx bxs-circle align-middle me-1"></i>In Progress</div>
      @elseif($tickets->status=='Closed')
     <div class="badge rounded-pill text-success bg-light-success p-2 text-uppercase px-3"><i class="bx bxs-circle align-middle me-1"> </i>Closed</div>
      @else
      <div class="badge rounded-pill text-danger bg-light-danger p-2 text-uppercase px-3"><i class="bx bxs-circle align-middle me-1"></i>Hold</div>
      @endif  

     <hr>

     <b> Subject : </b>  {{$tickets->subject}}  <hr>

     <b> Attachments :  </b>  <a href="{{ asset('/uploads/tickets/'.$tickets->attachments) }}"> <li class="fa fa-download ms-2"></li> </a>   <hr>


     <b> Message </b>  : <br><br> {!!$tickets->message!!}
                                               
                                            </div>
                                        </div>
                                        <hr class="my-4" />
                                     
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-8">

                                <div class="card">

                             <form enctype="multipart/form-data" class="border px-4 pt-2 pb-3" method="POST"
                                      action="{{route('ticket.reply')}}">
                                    @csrf        


                      <input type="hidden" name="ticket_id" value="{{$tickets->ticket_id}}">
                      <input type="hidden" name="user_id" value="{{ (!empty($tickets->User->id) ? $tickets->User->id : '')  }}">

                                    <div class="card-body">
                                         <h6> Add Reply </h6> <hr><br>
                                        <div class="row mb-3">
                                            <div class="col-sm-3">
                                                <h6 class="mb-0">Description</h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary">
                                           <textarea id="editor" name="comment"></textarea>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <div class="col-sm-3">
                                                <h6 class="mb-0">Attachments</h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary">
                                                <input type="file" class="form-control" name="attachments" >
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <div class="col-sm-3">
                                                <h6 class="mb-0">Status</h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary">
                                                <select class="form-control" name="status">

                                         <option>--select--</option>
                                         <option value="Hold">Hold</option>
                                         <option value="Progress">Progress</option>
                                         <option value="Closed">Closed</option>
                                                 </select>    
                                            </div>
                                        </div>
                                        
                                        
                                     
                                        <div class="row">
                                            <div class="col-sm-3"></div>
                                            <div class="col-sm-9 text-secondary">
                                                <input type="submit" class="btn btn-primary px-4" value="Reply" />
                                            </div>
                                        </div>
                                    </div>
                            </form>        
                                </div>
                             
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex flex-column">
@php
$replys = \App\Models\Reply::where('ticket_id' , $tickets->ticket_id)->get();
@endphp




                                  <div class="card-body"><br>
                                    

   <b>User Message </b>  : <br><br> {!!$tickets->message!!}
   
   <hr>

   <b> Reply </b>  : <br><br> 

   @foreach($replys as $data)

   <h6>{{ (!empty($data->Staff->role) ? $data->Staff->role : '')  }} </h6>

   {!!$data->comment!!}  

  <a href="{{ asset('/uploads/replys/'.$data->attachments) }}"> <li class="fa fa-download ms-2"></li> </a> <hr>

   @endforeach
                                
   

                                  
                                    </div>
                                        
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
     

 <script src="https://cdn.ckeditor.com/4.20.0/standard/ckeditor.js"></script>


               <script>
   CKEDITOR.replace( 'editor' );
</script>              
                   

@endsection
