<aside class="main-sidebar">
    <!-- sidebar-->
    <section class="sidebar">

        <div class="user-profile">
			<div class="ulogo">
				 <a href="{{ route('admin.dashboard') }}">
				  <!-- logo for regular state and mobile devices -->
					 <div class="d-flex align-items-center justify-content-center">
						  <img src="{{ asset('backend/images/logo-welcare.png') }}" alt="" style="margin: 0px; padding: 0px; max-width: 60%;">
						  {{-- <h3><b>WelCare</b> Pharmacy</h3> --}}
					 </div>
				</a>
			</div>
        </div>

      <!-- sidebar menu-->
      <ul class="sidebar-menu" data-widget="tree">

		<li>
          <a href="{{ route('admin.dashboard') }}">
            <i data-feather="pie-chart"></i>
			<span>Dashboard</span>
          </a>
        </li>

        <li class="treeview">
          <a href="#">
            <i data-feather="message-circle"></i>
            <span>Medicine</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('admin.medicine') }}"><i class="ti-more"></i>All Medicine</a></li>
            <li><a href="{{ route('admin.medicine.add') }}"><i class="ti-more"></i>Add Medicine</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i data-feather="mail"></i>
            <span>Supliers</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('admin.supplier') }}"><i class="ti-more"></i>All Supliers</a></li>
            <li><a href="{{ route('admin.supplier.add') }}"><i class="ti-more"></i>Add Suplier</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i data-feather="file"></i>
            <span>Employees</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('admin.employee') }}"><i class="ti-more"></i>All Employees</a></li>
            <li><a href="{{ route('admin.employee.add') }}"><i class="ti-more"></i>Add Employee</a></li>
          </ul>
        </li>

        <li class="header nav-small-cap">User Interface</li>

      </ul>
    </section>

	<div class="sidebar-footer">
		<!-- item-->
		<a href="javascript:void(0)" class="link" data-toggle="tooltip" title="" data-original-title="Settings" aria-describedby="tooltip92529"><i class="ti-settings"></i></a>
		<!-- item-->
		<a href="mailbox_inbox.html" class="link" data-toggle="tooltip" title="" data-original-title="Email"><i class="ti-email"></i></a>
		<!-- item-->
		<a href="javascript:void(0)" class="link" data-toggle="tooltip" title="" data-original-title="Logout"><i class="ti-lock"></i></a>
	</div>
  </aside>
