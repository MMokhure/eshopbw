
	<div class="left-side-bar">
		<br/>
		<div class="brand-logo">
			<a href="index.html">
				<img src="vendors/images/aoj.png" alt="" class="dark-logo">
				<img src="vendors/images/aoj_logo.png" alt="" class="light-logo">
			</a>
			<div class="close-sidebar" data-toggle="left-sidebar-close">
				<i class="ion-close-round"></i>
			</div>
		</div>
		<div class="menu-block customscroll">
			<br/>
		
			<div class="sidebar-menu">
				<ul id="accordion-menu">
					<li class="dropdown">
						<li>
							<a href="{{url('home')}}" class="dropdown-toggle no-arrow">
								<span class="micon dw dw-house1"></span><span class="mtext">HOME</span>
							</a>
						</li>
					
					<li class="dropdown">
						<a href="javascript:;" class="dropdown-toggle">
							<span class="micon dw dw-user1"></span><span class="mtext">USERS</span>
						</a>
						<ul class="submenu">
						
							<li><a href="form-basic.html">Manage Users</a></li>
							<li><a href="advanced-components.html">Add New User</a></li>
							
						</ul>
					</li>

            
					<li class="dropdown">
						<a href="javascript:;" class="dropdown-toggle">
							<span class="micon dw dw-library"></span><span class="mtext">INVENTORY</span>
						</a>
						<ul class="submenu">
							<li><a  href="{{url('manage_inventory')}}">Manage Inventory</a></li>
							<li><a href="{{url('new_inventory')}}" >Add New Inventory</a></li>
						</ul>
					</li>
					<li>
						<a href="{{url('manage_stations')}}" class="dropdown-toggle no-arrow">
							<span class="micon dw dw-apartment"></span><span class="mtext">STATIONS</span>
						</a>
					</li>
					<li>
						<a href="calendar.html" class="dropdown-toggle no-arrow">
							<span class="micon dw dw-calendar1"></span><span class="mtext">REPORT BOOK</span>
						</a>
					</li>
					<li>
						<a href="calendar.html" class="dropdown-toggle no-arrow">
							<span class="micon dw dw-copy"></span><span class="mtext">REPORTS</span>
						</a>
					</li>
					
				</ul>
			</div>
		</div>
	</div>