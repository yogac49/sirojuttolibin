<aside class="main-sidebar">
	<!-- sidebar: style can be found in sidebar.less -->
	<section class="sidebar">
		<!-- Sidebar user panel -->
		<div class="user-panel">
			<div class="pull-left image">
				<img src="<?= base_url('assets/img/admin.jpeg'); ?>" width="40px" class="img-circle" alt="User Image">
			</div>
			<div class="pull-left info" style="padding-bottom: 20px;">
				<p><?= $nama ?></p>
				<a href="#"><i class="fa fa-circle text-success"></i> Online</a>
			</div>
		</div>

		<!-- sidebar menu: : style can be found in sidebar.less -->
		<ul class="sidebar-menu mt-5" data-widget="tree">
			<li class="header ">MAIN NAVIGATION</li>
			<li <?php if ($title == "Dashboard") echo "class='active'" ?>><a href="<?= base_url('admin/dashboard') ?>"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
			<li <?php if ($title == "Data Pendaftaran") echo "class='active'" ?>><a href="<?= site_url('dataPendaftaran') ?>"><i class="fa fa-book"></i> <span>Data Pendaftaran</span></a></li>
			
			<li class="treeview">
				<a href="#">
					<!-- <i class="fa fa-table"></i> <span>Data Siswa</span> -->
					<span class="pull-right-container">
						<i class="fa fa-angle-left pull-right"></i>
					</span>
				</a>
			
			</li>


			<li class="header">LABELS</li>
			<li><a href="<?= site_url('admin/logout') ?>"><i class="fa fa-circle-o text-red"></i> <span>Logout</span></a></li>

		</ul>
	</section>
	<!-- /.sidebar -->
</aside>
