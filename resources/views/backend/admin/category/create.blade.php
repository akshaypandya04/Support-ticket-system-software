@extends('backend.admin.layouts.master')
@section('title','Create Categories')
@section('main-content')

    <style type="text/css">
        #togglePassword {
            margin-left: 474px;
            cursor: pointer;
            margin-top: -26px;
            position: absolute;
        }
    </style>


    <div class="container">
        <div class="row">
      <div class="col-md-12">
      <nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{url('/admin/dashboard')}}">Home</a></li>
    <li class="breadcrumb-item">Create Categories</li>
  </ol>
</nav>
   </div>
            <!-- Category -->
                    <div class="col-md-12">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">

         <h6 class="m-0 font-weight-bold text-primary float-left"> Create Categories </h6> <a href="{{ route('category.index') }}"
                                                           class="btn btn-primary btn-sm float-right"
                                                           data-toggle="tooltip" data-placement="bottom"
                                                           title="Categories Management" style="float: right;">Categories Management</a>
    </div>
                    <div class="card-body">
                          <form method="post" action="{{route('category.store')}}" id="myForm" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name" class="col-form-label"> Name </label>
                                        <input id="name" type="text" name="name" placeholder="Enter Title"
                                               value="{{old('name')}}" class="form-control" required>
                                        @error('name')
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                </div>
                                
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="amount" class="col-form-label"> Amount </label>
                                        <input id="amount" type="text" name="name" placeholder="Enter Amount"
                                               value="{{old('amount')}}" class="form-control" required>
                                        @error('amount')
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="image" class="col-form-label"> Image </label>
                                        <input id="image" type="file" name="image" class="form-control" required>
                                        @error('image')
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="icon" class="col-form-label"> Icon </label>
                                        <input id="icon" type="file" name="icon" class="form-control" required>
                                        @error('icon')
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                </div>

                                 <div class="col-md-6">
                                    <div class="form-group">
                                      <label for="status" class="col-form-label required">Status</label>
                                      <select class="form-control" name="status">
                                        <option value="">Select</option>
                                        <option value="1">Active</option>
                                        <option value="0">Deactive</option>
                                      </select>
                                    </div>
                                </div>

                             <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="description" class="col-form-label"> Description </label>
                                       <textarea class="form-control" name="description"></textarea>
                                        @error('description')
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                </div>
                           

                          </div>
                        <div class="form-group mb-3">
                                 <a href="{{route('category.index')}}"> <button type="button" class="btn btn-warning">Back to Listing</button> </a>
                                <button class="btn btn-primary float-right" type="submit">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@push('styles')
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.css"/>
@endpush
@push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>
@endpush
