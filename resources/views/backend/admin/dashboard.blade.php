@extends('backend.admin.inc.master')
@section('title','Dashboard - Admin Panel')
@section('main-content')

    <!--start page wrapper -->
        <div class="page-wrapper">
            <div class="page-content">
                
                
                <div class="row row-cols-1 row-cols-lg-3">
                    <div class="col">
                        <div class="card radius-10 overflow-hidden bg-gradient-burning">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div>
                                     <a href="#">   <p class="mb-0 text-white">Total User</p> </a>
                                        <h5 class="mb-0 text-white">{{DB::table('users')->where('role_id' ,'2')->count()}}</h5>
                                    </div>
                                    <div class="ms-auto text-white"><i class='bx bx-store font-30'></i>
                                    </div>
                                </div>
                                <div class="progress bg-white-2 radius-10 mt-4" style="height:4.5px;">
                                    <div class="progress-bar bg-white" role="progressbar" style="width: 72%"></div>
                                </div>
                            </div>
                        </div>
                    </div>


                   <div class="col">
                        <div class="card radius-10 overflow-hidden bg-gradient-cosmic">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div>
                                     <a href="#">   <p class="mb-0 text-white">Total Department</p> </a>
                                        <h5 class="mb-0 text-white">{{DB::table('categories')->count()}}</h5>
                                    </div>
                                    <div class="ms-auto text-white"><i class='bx bx-book font-30'></i>
                                    </div>
                                </div>
                                <div class="progress bg-white-2 radius-10 mt-4" style="height:4.5px;">
                                    <div class="progress-bar bg-white" role="progressbar" style="width: 72%"></div>
                                </div>
                            </div>
                        </div>
                    </div>  


               <div class="col">
                        <div class="card radius-10 overflow-hidden bg-gradient-Ohhappiness">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div>
                                     <a href="#">   <p class="mb-0 text-white">Total Ticket</p> </a>
                                        <h5 class="mb-0 text-white">{{DB::table('tickets')->count()}}</h5>
                                    </div>
                                    <div class="ms-auto text-white"><i class='bx bx-book font-30'></i>
                                    </div>
                                </div>
                                <div class="progress bg-white-2 radius-10 mt-4" style="height:4.5px;">
                                    <div class="progress-bar bg-white" role="progressbar" style="width: 72%"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card radius-10 overflow-hidden bg-gradient-moonlit">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div>
                                     <a href="#">   <p class="mb-0 text-white">Total Hold Ticket</p> </a>
                                        <h5 class="mb-0 text-white">{{DB::table('tickets')->where('status' ,'Hold')->count()}}</h5>
                                    </div>
                                    <div class="ms-auto text-white"><i class='bx bx-book font-30'></i>
                                    </div>
                                </div>
                                <div class="progress bg-white-2 radius-10 mt-4" style="height:4.5px;">
                                    <div class="progress-bar bg-white" role="progressbar" style="width: 72%"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card radius-10 overflow-hidden bg-gradient-burning">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div>
                                     <a href="#">   <p class="mb-0 text-white">Total Closed Ticket</p> </a>
                                        <h5 class="mb-0 text-white">{{DB::table('tickets')->where('status' ,'Closed')->count()}}</h5>
                                    </div>
                                    <div class="ms-auto text-white"><i class='bx bx-user font-30'></i>
                                    </div>
                                </div>
                                <div class="progress bg-white-2 radius-10 mt-4" style="height:4.5px;">
                                    <div class="progress-bar bg-white" role="progressbar" style="width: 72%"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card radius-10 overflow-hidden bg-gradient-cosmic">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div>
                                     <a href="#">   <p class="mb-0 text-white">Total Inprogress Ticket</p> </a>
                                        <h5 class="mb-0 text-white">{{DB::table('tickets')->where('status' ,'Progress')->count()}}</h5>
                                    </div>
                                    <div class="ms-auto text-white"><i class='bx bx-user font-30'></i>
                                    </div>
                                </div>
                                <div class="progress bg-white-2 radius-10 mt-4" style="height:4.5px;">
                                    <div class="progress-bar bg-white" role="progressbar" style="width: 72%"></div>
                                </div>
                            </div>
                        </div>
                    </div>
               
                      
                </div><!--end row-->
                
                 <div class="row row-cols-1 row-cols-lg-4">
                 
                   
                 <!--    <div class="col">
                        <div class="card radius-10 overflow-hidden bg-gradient-Ohhappiness">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div>
                                <a href="#">        <p class="mb-0 text-white">Total Transcation</p> </a>
                                       <h5 class="mb-0 text-white"></h5>
                                    </div>
                                    <div class="ms-auto text-white"><i class='bx bx-wallet font-30'></i>
                                    </div>
                                </div>
                                <div class="progress bg-white-2 radius-10 mt-4" style="height:4.5px;">
                                    <div class="progress-bar bg-white" role="progressbar" style="width: 68%"></div>
                                </div>
                            </div>
                        </div>
                    </div> -->

                    

                  
                    
                </div><!--end row-->
             
            </div>
        </div>
        <!--end page wrapper -->

  
@endsection
