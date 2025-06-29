@extends('frontend.inc.master')
@section('title','Add Ticket - User Panel')
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
                                <li class="breadcrumb-item active" aria-current="page">Create Ticket</li>
                            </ol>
                        </nav>
                    </div>
                       <div class="ms-auto">
                      
                    </div>
                </div>

                <!--end breadcrumb-->
                <h6 class="mb-0 text-uppercase">Create Ticket</h6>
                <hr/>

                 @include('partial.errors')

             <div class="card">
                    <div class="card-body">
                      
                       

<form method="post" action="{{route('user.store.ticket')}}" id="myForm" enctype="multipart/form-data">
                            {{csrf_field()}}

                            <div class="row">

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="subject" class="col-form-label"> Subject<span
                                                class="text-danger">*</span></label>
                                        <input id="name" type="text" name="subject" placeholder="Enter Subject"
                                                class="form-control" required>
                             
                                    </div>
                                </div>

                                 <div class="col-md-6">
                                    <div class="form-group">
                                      <label for="category_id" class="col-form-label required">Category / Department </label>
                                <select class="form-control" name="category_id" id="category_id">      
                                    @foreach($category as $value)
                                    <option value="{{$value->id}}">{{$value->name}} </option>
                                    @endforeach
                                </select>       
                                    </div>
                                </div>
                            </div>

                      <div class="row">


                        <div class="col-md-6">
                                    <div class="form-group">
                                      <label for="priority" class="col-form-label">Priority </label>
                                 <select class="form-control" name="priority" id="priority">      
                                   
                                    <option value="High">High </option>
                                    <option value="Low">Low</option>
                                    <option value="Medium">Medium</option>
                                    
                                </select>  
                                    </div>
                        </div>


                            
                               <div class="col-md-6">
                                  <div class="form-group">
        <label for="attachments" class="col-form-label "> Attachments </label>
         <input type="file" class="form-control" name="attachments" id="attachments" >
       
             </div>
           </div>



              <div class="col-md-12">
                                 <div class="form-group">
             <label for="message" class="col-form-label ">Message </label>

             <textarea class="form-control" id="editor" name="message" placeholder="enter your message"></textarea>
          
        </div>
           </div>
         


                 </div>  <br><br>


                      <div class="form-group mb-3">
                            <a href="{{route('user.list.ticket')}}"> <button type="button" class="btn btn-warning">Back to Listing</button>  </a>
                                <button class="btn btn-primary float-right" type="submit">Save</button>
                            </div>
                        </form>


                      
                    </div>
                </div>
            </div>
       </div>
 

 <script src="https://cdn.ckeditor.com/4.20.0/standard/ckeditor.js"></script>


               <script>
   CKEDITOR.replace( 'editor' );
</script>              
                   
    

@endsection


@push('styles')
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.css"/>
@endpush
@push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>

@endpush
