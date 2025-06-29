<!--wrapper-->
	<div class="wrapper">
<!--sidebar wrapper -->
		<div class="sidebar-wrapper" data-simplebar="true" style="background-color: #192c48;">
			<div class="sidebar-header">
				<div>
					<img src="{{asset('back-end/assets/images/logo-icon.png')}}" class="logo-icon" alt="logo icon">
				</div>
				<div> 
					<h4 class="logo-text">Admin Panel</h4>
				</div>
				<div class="toggle-icon ms-auto"><i class='bx bx-first-page'></i>
				</div>
			</div>
			<!--navigation-->
			<ul class="metismenu" id="menu">
				
				<li>
				<a href="{{url('/admin/dashboard')}}">
						<div class="parent-icon"><i class='bx bx-home'></i>
						</div>
						<div class="menu-title">Dashboard</div>
					</a>
				</li>


				<li>
					<a href="{{route('users.index')}}">
						<div class="parent-icon"><i class='bx bx-user'></i>
						</div>
						<div class="menu-title">Manage Users</div>
					</a>
				</li>

				<li>
					<a href="{{route('category.index')}}">
						<div class="parent-icon"><i class='fa fa-list'></i>
						</div>
						<div class="menu-title">Manage Category</div>
					</a>
				</li>

				<li>
					<a href="{{route('ticket.index')}}">
						<div class="parent-icon"><i class='fa fa-ticket'></i>
						</div>
						<div class="menu-title">Manage Tickets</div>
					</a>
				</li>

				<li>
					<a href="{{route('inventory.index')}}">
						<div class="parent-icon"><i class='fa fa-calculator'></i>
						</div>
						<div class="menu-title">Manage Inventory</div>
					</a>
				</li>

				<li>
					<a href="#">
						<div class="parent-icon"><i class='fa fa-question'></i>
						</div>
						<div class="menu-title">Manage FAQ</div>
					</a>
				</li>


             	<li>
					<a href="#">
						<div class="parent-icon"><i class='bx bx-file'></i>
						</div>
						<div class="menu-title">Knowledge Base</div>
					</a>
				</li>



				
				<li>
					<a href="{{url('admin/profileUpdate')}}">
						<div class="parent-icon"><i class='bx bx-cog'></i>
						</div>
						<div class="menu-title">Manage Setting</div>
					</a>
				</li>	
				

			</ul>
			<!--end navigation-->
		</div>
		<!--end sidebar wrapper -->