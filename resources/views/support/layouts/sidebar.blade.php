
					<!-- Sidebar user (optional) -->
					<nav class="sidebar_navigation">
						<ul class="nav nav-pills nav-sidebar flex-column topnavigation" data-widget="treeview" role="menu" data-accordion="false">
							<!-- Add icons to the links using the .nav-icon class
								with font-awesome or any other icon font library -->
							<li class="nav-item">
								<a href="{{ route('support.dashboard') }}" class="nav-link {{ Route::is('support.dashboard') ? 'active' : '' }}">
									<i class="nav-icon fas fa-tachometer-alt"></i>
									<p>Dashboard</p>
								</a>
							</li>

							<li class="nav-item">
								<a href="{{ route('list.customer') }}" class="nav-link {{ Route::is('list.customer') ? 'active' : '' }}">
									<i class="nav-icon  fas fa-users"></i>
									<p>Customer Profiles</p>
								</a>
							</li>

                              <li class="nav-item">
								<a href="#" class="nav-link">
									<i class="nav-icon  fas fa-users"></i>
									<p>Bookings</p>
								</a>
							</li>
                              <li class="nav-item">
								<a href="#" class="nav-link">
									<i class="nav-icon  fas fa-users"></i>
									<p>Customer Inquiries</p>
								</a>
							</li>

                            <li class="nav-item">
								<a href="#" class="nav-link">
									<i class="nav-icon  fa-first-order"></i>
									<p>Orders</p>
								</a>
							</li>

						</ul>
						<ul class="nav nav-pills nav-sidebar flex-column bottomNavigation">
							<li class="nav-item">
								<a href="{{ route('support.logout') }}" class="nav-link {{ Route::is('support.logout') ? 'active' : '' }}">
									<i class="fas fa-sign-out-alt nav-icon"></i> <p>Logout</p>
								</a>
							</li>
						</ul>
					</nav>
