 <div class="container-fluid page-body-wrapper">
 <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="{{url('admin/dashboard')}}">
              <i class="typcn typcn-device-desktop menu-icon"></i>
              <span class="menu-title">Dashboard</span>
              <div class="badge badge-danger">new</div>
            </a>
          </li>

          <!--  <li class="nav-item">
            <a class="nav-link" href="{{route('banner.index')}}">
              <i class="fa fa-picture-o" aria-hidden="true"></i> &nbsp;&nbsp;&nbsp;&nbsp;
              <span class="menu-title">Banner</span>
            </a>
          </li> -->

           <li class="nav-item">
            <a class="nav-link" href="{{route('gallery.index')}}">
              <i class="fa fa-picture-o" aria-hidden="true"></i> &nbsp;&nbsp;&nbsp;&nbsp;
              <span class="menu-title">Gallery</span>
            </a>
          </li>


          <li class="nav-item">
            <a class="nav-link" href="{{route('amenitie.index')}}">
              <i class="fa fa-hotel" aria-hidden="true"></i> &nbsp;&nbsp;&nbsp;&nbsp;
              <span class="menu-title">Amenities</span>
            </a>
          </li>


          <li class="nav-item">
            <a class="nav-link" href="{{route('testimonial.index')}}">
              <i class="fa fa-quote-left" aria-hidden="true"></i> &nbsp;&nbsp;&nbsp;&nbsp;
              <span class="menu-title">Testimonial</span>
            </a>
          </li>
          
            <li class="nav-item">
            <a class="nav-link" href="{{route('service.index')}}">
              <i class="fa fa-quote-left" aria-hidden="true"></i> &nbsp;&nbsp;&nbsp;&nbsp;
              <span class="menu-title">Services</span>
            </a>
          </li>


        </ul>
      </nav>
      <!-- partial -->
