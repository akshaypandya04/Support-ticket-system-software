<!--wrapper-->
	<div class="wrapper">
<!--sidebar wrapper -->
		<div class="sidebar-wrapper" data-simplebar="true" style="background-color: #192c48;">
			<div class="sidebar-header">
				<div>
					<img src="{{asset('back-end/assets/images/logo-icon.png')}}" class="logo-icon" alt="logo icon">
				</div>
				<div> 
					<h4 class="logo-text" style="font-size:14px;">Staff Panel</h4>
				</div>
				<div class="toggle-icon ms-auto"><i class='bx bx-first-page'></i>
				</div>
			</div>
			<!--navigation-->
			<ul class="metismenu" id="menu">
				
				<li>
				<a href="{{url('user/dashboard')}}">
						<div class="parent-icon"><i class='bx bx-home'></i>
						</div>
						<div class="menu-title">Dashboard</div>
					</a>
				</li>

				<li>
					<a href="{{route('user.list.ticket')}}">
						<div class="parent-icon"><i class='fa fa-ticket'></i>
						</div>
						<div class="menu-title">Manage Ticket</div>
					</a>
				</li>	
				
			
				
				<li>
					<a href="{{route('user.profile')}}">
						<div class="parent-icon"><i class='bx bx-book'></i>
						</div>
						<div class="menu-title">Manage Setting</div>
					</a>
				</li>	
				

			</ul>
			<!--end navigation-->
		</div>
		<!--end sidebar wrapper -->