    
</div>
        <!-- content-wrapper ends -->

    <!-- partial:partials/_footer.html -->
        <footer class="footer">
            <div class="card">
                <div class="card-body">
                    <div class="d-sm-flex justify-content-center justify-content-sm-between">
                        <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2022 Admin Panel. All rights reserved.</span>
                       
                    </div>
                </div>    
            </div>        
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->



  <!-- base:js -->

  <script src="{{asset('backend/vendors/js/vendor.bundle.base.js')}}"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <script src="{{asset('backend/vendors/chart.js/Chart.min.js')}}"></script>

  <!-- End plugin js for this page-->
  <!-- inject:js -->
<script src="{{asset('backend/js/off-canvas.js')}}"></script>
<script src="{{asset('backend/js/hoverable-collapse.js')}}"></script>
<script src="{{asset('backend/js/template.js')}}"></script>
<script src="{{asset('backend/js/settings.js')}}"></script>
<script src="{{asset('backend/js/todolist.js')}}"></script>

<script src="{{asset('backend/js/dashboard.js')}}"></script>

<script src="{{asset('backend/vendors/select2/select2.min.js')}}"></script>

<script src="{{asset('backend/js/select2.js')}}"></script>

<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>


  <!-- endinject -->
@stack('scripts')
  
</body>

</html>