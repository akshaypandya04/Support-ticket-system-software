<!--start header -->
		<header>
			<div class="topbar d-flex align-items-center" style="background: #fd3550;">
				<nav class="navbar navbar-expand">
					<div class="mobile-toggle-menu"><i class='bx bx-menu'></i>
					</div>
					<div class="top-menu-left d-none d-lg-block">
						<ul class="nav">
						  <li class="nav-item">
							<!--<a class="nav-link" href="app-emailbox.html"><i class='bx bx-envelope'></i></a>-->
						  </li>
						  <li class="nav-item">
							<!--<a class="nav-link" href="app-chat-box.html"><i class='bx bx-message'></i></a>-->
						  </li>
						  <li class="nav-item">
							<!--<a class="nav-link" href="app-fullcalender.html"><i class='bx bx-calendar'></i></a>-->
						  </li>
						  <li class="nav-item">
							  <!--<a class="nav-link" href="app-to-do.html"><i class='bx bx-check-square'></i></a>-->
			<span style="color:#fff;">	<?php
                echo date("D d F,Y");
                ?>  </span>
						  </li>
					  </ul>
					 </div>
					<div class="search-bar flex-grow-1">
						<div class="position-relative search-bar-box">
							<input type="text" class="form-control search-control" placeholder="Type to search..."> <span class="position-absolute top-50 search-show translate-middle-y"><i class='bx bx-search'></i></span>
							<span class="position-absolute top-50 search-close translate-middle-y"><i class='bx bx-x'></i></span>
						</div>
					</div>

					
					<div class="top-menu ms-auto">



						<ul class="navbar-nav align-items-center">
							<li class="nav-item mobile-search-icon">
							<!-- 	<a class="nav-link" href="#">	<i class='bx bx-search'></i>
								</a>  -->
							</li>
							<li class="nav-item dropdown dropdown-large">
							<!-- 	<a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">	<i class='bx bx-category'></i>
								</a>  -->
								<div class="dropdown-menu dropdown-menu-end">
									<div class="row row-cols-3 g-3 p-3">
										
										
									</div>
								</div>
							</li>
							<li class="nav-item dropdown dropdown-large">
								<!-- <a class="nav-link dropdown-toggle dropdown-toggle-nocaret position-relative" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> 
									<i class='bx bx-bell'></i>
								</a>  -->
								<div class="dropdown-menu dropdown-menu-end">
									
									<div class="header-notifications-list">
										
									</div>
									
								</div>
							</li>
							<li class="nav-item dropdown dropdown-large">
							<!-- 	<a class="nav-link dropdown-toggle dropdown-toggle-nocaret position-relative" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> 
									<i class='bx bx-comment'></i>
								</a>  -->
								<div class="dropdown-menu dropdown-menu-end">
									
									<div class="header-message-list">
									
									</div>
									
								</div>
							</li>
						</ul>



					</div>
					<div class="user-box dropdown">
						<a class="d-flex align-items-center nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
						
							   @if(!empty(Auth::user()->profile))            
                                            <img src="{{ asset('/uploads/profile/'.Auth::user()->profile) }}" alt="Admin" class="user-img" width="110">
                                 @else
                                           <img src="{{asset('back-end/assets/images/avatars/avatar-2.png')}}" alt="Admin" class="user-img" width="110">
                                 @endif
							<div class="user-info ps-3">
								<!-- <p class="user-name mb-0">Pauline Seitz</p> -->
								<p class="designattion mb-0">User</p>
							</div>
						</a>
						<ul class="dropdown-menu dropdown-menu-end">
							<li><a class="dropdown-item" href="{{route('user.profile')}}"><i class="bx bx-user"></i><span>Profile</span></a>
							</li>
							<li><a class="dropdown-item" href="{{url('user/dashboard')}}"><i class='bx bx-home-circle'></i><span>Dashboard</span></a>
							</li>
							<li>
								<div class="dropdown-divider mb-0"></div>
							</li>
							<li><a class="dropdown-item" href="{{route('user.logout')}}"><i class='bx bx-log-out-circle'></i><span>Logout</span></a>
							</li>
						</ul>
					</div>
				</nav>
			</div>
		</header>
		<!--end header 