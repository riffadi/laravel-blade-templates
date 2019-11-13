@extends('layout.base')

@section('title', 'Dashboard - Blade Templatas Laravel')

@section('konten')
  <!-- Main Sidebar Container -->
 <div class="navside">
  <div class="row">
    <div class="col-md-2">
		<div class="wrapper">
			<aside class="sidebar-dark-primary">
		    <!-- Brand Logo -->
		    <a href="../../index3.html" class="brand-link">
		      <img src="/adminlte/dist/img/AdminLTELogo.png"
		           alt="AdminLTE Logo"
		           class="brand-image img-circle elevation-3"
		           style="opacity: .8">
		      <span class="brand-text font-weight-light">AdminLTE 3</span>
		    </a>

		    <!-- Sidebar -->
		    <div class="sidebar">
		      <!-- Sidebar user (optional) -->
		      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
		        <div class="image">
		          <img src="/adminlte/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
		        </div>
		        <div class="info">
		          <a href="#" class="d-block">Alexander Pierce</a>
		        </div>
		      </div>

		      <!-- Sidebar Menu -->
		      <nav class="mt-2">
		        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
		          <!-- Add icons to the links using the .nav-icon class
		               with font-awesome or any other icon font library -->
		          <li class="nav-item has-treeview">
		            <a href="#" class="nav-link">
		              <i class="nav-icon fas fa-tachometer-alt"></i>
		              <p>
		                Dashboard
		                <i class="right fas fa-angle-left"></i>
		              </p>
		            </a>
		            <ul class="nav nav-treeview">
		              <li class="nav-item">
		                <a href="../../index.html" class="nav-link">
		                  <i class="far fa-circle nav-icon"></i>
		                  <p>Dashboard v1</p>
		                </a>
		              </li>
		              <li class="nav-item">
		                <a href="../../index2.html" class="nav-link">
		                  <i class="far fa-circle nav-icon"></i>
		                  <p>Dashboard v2</p>
		                </a>
		              </li>
		              <li class="nav-item">
		                <a href="../../index3.html" class="nav-link">
		                  <i class="far fa-circle nav-icon"></i>
		                  <p>Dashboard v3</p>
		                </a>
		              </li>
		            </ul>
		          </li>
		          <li class="nav-item">
		            <a href="../widgets.html" class="nav-link">
		              <i class="nav-icon fas fa-th"></i>
		              <p>
		                Widgets
		                <span class="right badge badge-danger">New</span>
		              </p>
		            </a>
		          </li>
		          <li class="nav-item has-treeview">
		            <a href="#" class="nav-link">
		              <i class="nav-icon fas fa-copy"></i>
		              <p>
		                Layout Options
		                <i class="fas fa-angle-left right"></i>
		                <span class="badge badge-info right">6</span>
		              </p>
		            </a>
		            <ul class="nav nav-treeview">
		              <li class="nav-item">
		                <a href="../layout/top-nav.html" class="nav-link">
		                  <i class="far fa-circle nav-icon"></i>
		                  <p>Top Navigation</p>
		                </a>
		              </li>
		              <li class="nav-item">
		                <a href="../layout/boxed.html" class="nav-link">
		                  <i class="far fa-circle nav-icon"></i>
		                  <p>Boxed</p>
		                </a>
		              </li>
		              <li class="nav-item">
		                <a href="../layout/fixed-sidebar.html" class="nav-link">
		                  <i class="far fa-circle nav-icon"></i>
		                  <p>Fixed Sidebar</p>
		                </a>
		              </li>
		              <li class="nav-item">
		                <a href="../layout/fixed-topnav.html" class="nav-link">
		                  <i class="far fa-circle nav-icon"></i>
		                  <p>Fixed Navbar</p>
		                </a>
		              </li>
		              <li class="nav-item">
		                <a href="../layout/fixed-footer.html" class="nav-link">
		                  <i class="far fa-circle nav-icon"></i>
		                  <p>Fixed Footer</p>
		                </a>
		              </li>
		              <li class="nav-item">
		                <a href="../layout/collapsed-sidebar.html" class="nav-link">
		                  <i class="far fa-circle nav-icon"></i>
		                  <p>Collapsed Sidebar</p>
		                </a>
		              </li>
		            </ul>
		          </li>
		          <li class="nav-item has-treeview">
		            <a href="#" class="nav-link">
		              <i class="nav-icon fas fa-chart-pie"></i>
		              <p>
		                Charts
		                <i class="right fas fa-angle-left"></i>
		              </p>
		            </a>
		            <ul class="nav nav-treeview">
		              <li class="nav-item">
		                <a href="../charts/chartjs.html" class="nav-link">
		                  <i class="far fa-circle nav-icon"></i>
		                  <p>ChartJS</p>
		                </a>
		              </li>
		              <li class="nav-item">
		                <a href="../charts/flot.html" class="nav-link">
		                  <i class="far fa-circle nav-icon"></i>
		                  <p>Flot</p>
		                </a>
		              </li>
		              <li class="nav-item">
		                <a href="../charts/inline.html" class="nav-link">
		                  <i class="far fa-circle nav-icon"></i>
		                  <p>Inline</p>
		                </a>
		              </li>
		            </ul>
		          </li>
		          <li class="nav-item has-treeview">
		            <a href="#" class="nav-link">
		              <i class="nav-icon fas fa-tree"></i>
		              <p>
		                UI Elements
		                <i class="fas fa-angle-left right"></i>
		              </p>
		            </a>
		            <ul class="nav nav-treeview">
		              <li class="nav-item">
		                <a href="../UI/general.html" class="nav-link">
		                  <i class="far fa-circle nav-icon"></i>
		                  <p>General</p>
		                </a>
		              </li>
		              <li class="nav-item">
		                <a href="../UI/icons.html" class="nav-link">
		                  <i class="far fa-circle nav-icon"></i>
		                  <p>Icons</p>
		                </a>
		              </li>
		              <li class="nav-item">
		                <a href="../UI/buttons.html" class="nav-link">
		                  <i class="far fa-circle nav-icon"></i>
		                  <p>Buttons</p>
		                </a>
		              </li>
		              <li class="nav-item">
		                <a href="../UI/sliders.html" class="nav-link">
		                  <i class="far fa-circle nav-icon"></i>
		                  <p>Sliders</p>
		                </a>
		              </li>
		              <li class="nav-item">
		                <a href="../UI/modals.html" class="nav-link">
		                  <i class="far fa-circle nav-icon"></i>
		                  <p>Modals & Alerts</p>
		                </a>
		              </li>
		              <li class="nav-item">
		                <a href="../UI/navbar.html" class="nav-link">
		                  <i class="far fa-circle nav-icon"></i>
		                  <p>Navbar & Tabs</p>
		                </a>
		              </li>
		              <li class="nav-item">
		                <a href="../UI/timeline.html" class="nav-link">
		                  <i class="far fa-circle nav-icon"></i>
		                  <p>Timeline</p>
		                </a>
		              </li>
		              <li class="nav-item">
		                <a href="../UI/ribbons.html" class="nav-link">
		                  <i class="far fa-circle nav-icon"></i>
		                  <p>Ribbons</p>
		                </a>
		              </li>
		            </ul>
		          </li>
		          <li class="nav-item has-treeview">
		            <a href="#" class="nav-link">
		              <i class="nav-icon fas fa-edit"></i>
		              <p>
		                Forms
		                <i class="fas fa-angle-left right"></i>
		              </p>
		            </a>
		            <ul class="nav nav-treeview">
		              <li class="nav-item">
		                <a href="../forms/general.html" class="nav-link">
		                  <i class="far fa-circle nav-icon"></i>
		                  <p>General Elements</p>
		                </a>
		              </li>
		              <li class="nav-item">
		                <a href="../forms/advanced.html" class="nav-link">
		                  <i class="far fa-circle nav-icon"></i>
		                  <p>Advanced Elements</p>
		                </a>
		              </li>
		              <li class="nav-item">
		                <a href="../forms/editors.html" class="nav-link">
		                  <i class="far fa-circle nav-icon"></i>
		                  <p>Editors</p>
		                </a>
		              </li>
		            </ul>
		          </li>
		          <li class="nav-item has-treeview">
		            <a href="#" class="nav-link">
		              <i class="nav-icon fas fa-table"></i>
		              <p>
		                Tables
		                <i class="fas fa-angle-left right"></i>
		              </p>
		            </a>
		            <ul class="nav nav-treeview">
		              <li class="nav-item">
		                <a href="../tables/simple.html" class="nav-link">
		                  <i class="far fa-circle nav-icon"></i>
		                  <p>Simple Tables</p>
		                </a>
		              </li>
		              <li class="nav-item">
		                <a href="../tables/data.html" class="nav-link">
		                  <i class="far fa-circle nav-icon"></i>
		                  <p>DataTables</p>
		                </a>
		              </li>
		              <li class="nav-item">
		                <a href="../tables/jsgrid.html" class="nav-link">
		                  <i class="far fa-circle nav-icon"></i>
		                  <p>jsGrid</p>
		                </a>
		              </li>
		            </ul>
		          </li>
		          <li class="nav-header">EXAMPLES</li>
		          <li class="nav-item">
		            <a href="../calendar.html" class="nav-link">
		              <i class="nav-icon far fa-calendar-alt"></i>
		              <p>
		                Calendar
		                <span class="badge badge-info right">2</span>
		              </p>
		            </a>
		          </li>
		          <li class="nav-item">
		            <a href="../gallery.html" class="nav-link">
		              <i class="nav-icon far fa-image"></i>
		              <p>
		                Gallery
		              </p>
		            </a>
		          </li>
		          <li class="nav-item has-treeview">
		            <a href="#" class="nav-link">
		              <i class="nav-icon far fa-envelope"></i>
		              <p>
		                Mailbox
		                <i class="fas fa-angle-left right"></i>
		              </p>
		            </a>
		            <ul class="nav nav-treeview">
		              <li class="nav-item">
		                <a href="../mailbox/mailbox.html" class="nav-link">
		                  <i class="far fa-circle nav-icon"></i>
		                  <p>Inbox</p>
		                </a>
		              </li>
		              <li class="nav-item">
		                <a href="../mailbox/compose.html" class="nav-link">
		                  <i class="far fa-circle nav-icon"></i>
		                  <p>Compose</p>
		                </a>
		              </li>
		              <li class="nav-item">
		                <a href="../mailbox/read-mail.html" class="nav-link">
		                  <i class="far fa-circle nav-icon"></i>
		                  <p>Read</p>
		                </a>
		              </li>
		            </ul>
		          </li>
		          <li class="nav-item has-treeview">
		            <a href="#" class="nav-link">
		              <i class="nav-icon fas fa-book"></i>
		              <p>
		                Pages
		                <i class="fas fa-angle-left right"></i>
		              </p>
		            </a>
		            <ul class="nav nav-treeview">
		              <li class="nav-item">
		                <a href="../examples/invoice.html" class="nav-link">
		                  <i class="far fa-circle nav-icon"></i>
		                  <p>Invoice</p>
		                </a>
		              </li>
		              <li class="nav-item">
		                <a href="../examples/profile.html" class="nav-link">
		                  <i class="far fa-circle nav-icon"></i>
		                  <p>Profile</p>
		                </a>
		              </li>
		              <li class="nav-item">
		                <a href="../examples/e_commerce.html" class="nav-link">
		                  <i class="far fa-circle nav-icon"></i>
		                  <p>E-commerce</p>
		                </a>
		              </li>
		              <li class="nav-item">
		                <a href="../examples/projects.html" class="nav-link">
		                  <i class="far fa-circle nav-icon"></i>
		                  <p>Projects</p>
		                </a>
		              </li>
		              <li class="nav-item">
		                <a href="../examples/project_add.html" class="nav-link">
		                  <i class="far fa-circle nav-icon"></i>
		                  <p>Project Add</p>
		                </a>
		              </li>
		              <li class="nav-item">
		                <a href="../examples/project_edit.html" class="nav-link">
		                  <i class="far fa-circle nav-icon"></i>
		                  <p>Project Edit</p>
		                </a>
		              </li>
		              <li class="nav-item">
		                <a href="../examples/project_detail.html" class="nav-link">
		                  <i class="far fa-circle nav-icon"></i>
		                  <p>Project Detail</p>
		                </a>
		              </li>
		              <li class="nav-item">
		                <a href="../examples/contacts.html" class="nav-link">
		                  <i class="far fa-circle nav-icon"></i>
		                  <p>Contacts</p>
		                </a>
		              </li>
		            </ul>
		          </li>
		          <li class="nav-item has-treeview menu-open">
		            <a href="#" class="nav-link active">
		              <i class="nav-icon far fa-plus-square"></i>
		              <p>
		                Extras
		                <i class="fas fa-angle-left right"></i>
		              </p>
		            </a>
		            <ul class="nav nav-treeview">
		              <li class="nav-item">
		                <a href="../examples/login.html" class="nav-link">
		                  <i class="far fa-circle nav-icon"></i>
		                  <p>Login</p>
		                </a>
		              </li>
		              <li class="nav-item">
		                <a href="../examples/register.html" class="nav-link">
		                  <i class="far fa-circle nav-icon"></i>
		                  <p>Register</p>
		                </a>
		              </li>
		              <li class="nav-item">
		                <a href="..examples/forgot-password.html" class="nav-link">
		                  <i class="far fa-circle nav-icon"></i>
		                  <p>Forgot Password</p>
		                </a>
		              </li>
		              <li class="nav-item">
		                <a href="..examples/recover-password.html" class="nav-link">
		                  <i class="far fa-circle nav-icon"></i>
		                  <p>Recover Password</p>
		                </a>
		              </li>
		              <li class="nav-item">
		                <a href="../examples/lockscreen.html" class="nav-link">
		                  <i class="far fa-circle nav-icon"></i>
		                  <p>Lockscreen</p>
		                </a>
		              </li>
		              <li class="nav-item">
		                <a href="../examples/legacy-user-menu.html" class="nav-link">
		                  <i class="far fa-circle nav-icon"></i>
		                  <p>Legacy User Menu</p>
		                </a>
		              </li>
		              <li class="nav-item">
		                <a href="../examples/language-menu.html" class="nav-link">
		                  <i class="far fa-circle nav-icon"></i>
		                  <p>Language Menu</p>
		                </a>
		              </li>
		              <li class="nav-item">
		                <a href="../examples/404.html" class="nav-link">
		                  <i class="far fa-circle nav-icon"></i>
		                  <p>Error 404</p>
		                </a>
		              </li>
		              <li class="nav-item">
		                <a href="../examples/500.html" class="nav-link">
		                  <i class="far fa-circle nav-icon"></i>
		                  <p>Error 500</p>
		                </a>
		              </li>
		              <li class="nav-item">
		                <a href="../examples/pace.html" class="nav-link">
		                  <i class="far fa-circle nav-icon"></i>
		                  <p>Pace</p>
		                </a>
		              </li>
		              <li class="nav-item">
		                <a href="../examples/blank.html" class="nav-link active">
		                  <i class="far fa-circle nav-icon"></i>
		                  <p>Blank Page</p>
		                </a>
		              </li>
		              <li class="nav-item">
		                <a href="../../starter.html" class="nav-link">
		                  <i class="far fa-circle nav-icon"></i>
		                  <p>Starter Page</p>
		                </a>
		              </li>
		            </ul>
		          </li>
		        </ul>
		      </nav>
		      <!-- /.sidebar-menu -->
		    </div>
		    <!-- /.sidebar -->
			</aside>
		</div>
	</div>
    <div class="col-md-9">
	<div class="card">
    	<div class="card-header">
    		<div class="card-title">Ini adalah halaman dashboard</div>
    	</div>
	</div>
    <div class="card">
        <div class="card-header">
        	<h3 class="card-title">Data Pegawai</h3>
        	<div class="card-tools">
            	<button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fas fa-minus"></i></button>
        	</div>
        </div>
	    <div class="card-body">
	         <table class="table table-bordered">
				<thead>
				    <tr>
				      <th scope="col">No.</th>
				      <th scope="col">Nama Depan</th>
				      <th scope="col">Nama Belakang</th>
				      <th scope="col">Telepon</th>
				    </tr>
				</thead>
				<tbody>
				    <tr>
				      <th scope="row">1</th>
				      <td>Alambana</td>
				      <td>Saptono</td>
				      <td>(+62) 874 064 830</td>
				    </tr>
				    <tr>
				      <th scope="row">2</th>
				      <td>Niyaga</td>
				      <td>Mandala</td>
				      <td>(+62) 854-487-9789</td>
				    </tr>
				    <tr>
				      <th scope="row">3</th>
				      <td>Willi</td>
				      <td>Yulianti</td>
				      <td>(+62) 808 234 609</td>
				    </tr>
				    <tr>
				      <th scope="row">4</th>
				      <td>Vanesa</td>
				      <td>Violet Novitasari</td>
				      <td>(+62) 808 428 609</td>
				    </tr>
				    <tr>
				      <th scope="row">5</th>
				      <td>Emin</td>
				      <td>Ardianto</td>
				      <td>(+62) 441 1640 8893</td>
				    </tr>
				    <tr>
				      <th scope="row">6</th>
				      <td>Umi</td>
				      <td>Pertiwi</td>
				      <td>(+62) 022 5081 1701</td>
				    </tr>
				    <tr>
				      <th scope="row">7</th>
				      <td>Rachel</td>
				      <td>Palastri</td>
				      <td>(+62) 530 9643 5269</td>
				    </tr>
				    <tr>
				      <th scope="row">8</th>
				      <td>Ifa</td>
				      <td>Nasyidah</td>
				      <td>(+62) 366 8754 2679</td>
				    </tr>
				    <tr>
				      <th scope="row">9</th>
				      <td>Yono</td>
				      <td>Candra Mandala</td>
				      <td>(+62) 953 7794 639</td>
				    </tr>
				    <tr>
				      <th scope="row">10</th>
				      <td>Yono</td>
				      <td>Candra Mandala</td>
				      <td>(+62) 410 2346 343</td>
				    </tr>
				    
				  </tbody>
				</table>
	        </div>
	    </div>
	  </div>
	</div>
</div>
@endsection
