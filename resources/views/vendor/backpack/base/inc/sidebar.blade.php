@if (Auth::check())
	<!-- Left side column. contains the sidebar -->
	<aside class="main-sidebar">
		<!-- sidebar: style can be found in sidebar.less -->
		<section class="sidebar">
			<!-- Sidebar user panel -->
			<div class="user-panel">
				<div class="pull-left image">
					<img src="https://placehold.it/160x160/00a65a/ffffff/&text={{ mb_substr(Auth::user()->name, 0, 1) }}" class="img-circle" alt="User Image">
				</div>
				<div class="pull-left info">
					<p>{{ Auth::user()->name }}</p>
					<a href="#"><i class="fa fa-circle text-success"></i> Online</a>
				</div>
			</div>
			<!-- sidebar menu: : style can be found in sidebar.less -->
			<ul class="sidebar-menu">
				@can('view settings')
				<li><a href="{{ url(config('backpack.base.route_prefix', 'admin').'/dashboard') }}"><i class="fa fa-dashboard"></i> <span>{{ trans('backpack::base.dashboard') }}</span></a></li>
					<li class="header">{{ trans('backpack::base.settingsMenu') }}</li>
					<li><a href="{{ url('admin/event') }}"><i class="fa fa-calendar"></i> <span>Manage Events</span></a></li>
					<li><a href="{{ url('admin/judge') }}"><i class="fa fa-gavel"></i> <span>Manage Judges</span></a></li>
					<li><a href="{{ url('admin/sanctioningBody') }}"><i class="fa fa-trophy"></i> <span>Manage Sanctioning Bodies</span></a></li>
					<li><a href="{{ url('admin/tableRule') }}"><i class="fa fa-user"></i> <span>Manage Table Rules</span></a></li>
					<li><a href="{{ url('admin/tableType') }}"><i class="fa fa-user"></i> <span>Manage Table Types</span></a></li>
					<li><a href="{{ url('admin/team') }}"><i class="fa fa-users"></i> <span>Manage Teams</span></a></li>
				@endcan
				@can('view admin settings')
					<li class="header">{{ trans('backpack::base.administration') }}</li>
					<!-- ================================================ -->
					<!-- ==== Recommended place for admin menu items ==== -->
					<!-- ================================================ -->
					<li><a href="{{ url(config('backpack.base.route_prefix', 'admin') . '/elfinder') }}"><i class="fa fa-files-o"></i> <span>File manager</span></a></li>
					<li><a href="{{ url(config('backpack.base.route_prefix', 'admin') . '/language') }}"><i class="fa fa-flag-o"></i> <span>Languages</span></a></li>
					<li><a href="{{ url(config('backpack.base.route_prefix', 'admin') . '/language/texts') }}"><i class="fa fa-language"></i> <span>Language Files</span></a></li>
					<li><a href="{{ url(config('backpack.base.route_prefix', 'admin').'/backup') }}"><i class="fa fa-hdd-o"></i> <span>Backups</span></a></li>
					<li><a href="{{ url(config('backpack.base.route_prefix', 'admin').'/log') }}"><i class="fa fa-terminal"></i> <span>Logs</span></a></li>
					<li><a href="{{ url(config('backpack.base.route_prefix', 'admin').'/setting') }}"><i class="fa fa-cog"></i> <span>Settings</span></a></li>
					<!-- Users, Roles Permissions -->
					<li class="treeview">
					<a href="#"><i class="fa fa-group"></i> <span>Users, Roles, Permissions</span> <i class="fa fa-angle-left pull-right"></i></a>
						<ul class="treeview-menu">
							<li><a href="{{ url(config('backpack.base.route_prefix', 'admin') . '/user') }}"><i class="fa fa-user"></i> <span>Users</span></a></li>
							<li><a href="{{ url(config('backpack.base.route_prefix', 'admin') . '/role') }}"><i class="fa fa-group"></i> <span>Roles</span></a></li>
							<li><a href="{{ url(config('backpack.base.route_prefix', 'admin') . '/permission') }}"><i class="fa fa-key"></i> <span>Permissions</span></a></li>
						</ul>
					</li>
				@endcan
				<!-- ======================================= -->
				<li class="header">{{ trans('backpack::base.user') }}</li>
				<li><a href="{{ url(config('backpack.base.route_prefix', 'admin').'/logout') }}"><i class="fa fa-sign-out"></i> <span>{{ trans('backpack::base.logout') }}</span></a></li>
			</ul>
		</section>
		<!-- /.sidebar -->
	</aside>
@endif
