<aside class="main-sidebar">
	<!-- sidebar: style can be found in sidebar.less -->
	<section class="sidebar">
		<!-- Sidebar user panel -->
		<div class="user-panel">
			<div class="pull-left image">
				<img src="<?= base_url('assets/img-pendaftaran/photo_siswa/' . $photo); ?>" width="80px;">
			</div>
			<div class="pull-left info">
				<p><?= $namaLengkap; ?></p>
			</div>
		</div>
		<!-- search form -->
		<form action="#" method="get" class="sidebar-form">
			<div class="input-group">
				<input type="text" name="q" class="form-control" placeholder="Search...">
				<span class="input-group-btn">
					<button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
					</button>
				</span>
			</div>
		</form>
		<!-- /.search form -->
		<!-- sidebar menu: : style can be found in sidebar.less -->
		<ul class="sidebar-menu" data-widget="tree">
			<li class="header">MAIN NAVIGATION</li>
			<li <?php if ($title == "Dashboard") echo "class='active'" ?>><a href="<?= site_url('user'); ?>"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
			<li class=" treeview">
				<a href="#">
					<i class="fa fa-dashboard"></i> <span>Data Siswa</span>
					<span class="pull-right-container">
						<i class="fa fa-angle-left pull-right"></i>
					</span>
				</a>
				<ul class="treeview-menu">
					<li <?php if ($title == "Profile") echo "class='active'" ?>><a href="<?= site_url('profile') ?>"><i class="fa fa-circle-o"></i> Profile</a></li>
					<li <?php if ($title == "Data Pendaftaran") echo "class='active'" ?>><a href="<?= site_url('data-Pendaftaran'); ?>"><i class="fa fa-circle-o"></i> Data Pendaftaran</a></li>
					<!-- <li <?php if ($title == "Data Pendaftaran") echo "class='active'" ?>><a href="<?= site_url('user/bayar'); ?>"><i class="fa fa-circle-o"></i> Data Pembayaran</a></li> -->
				</ul>
			</li>


			<li class="header">LABELS</li>
			<li><a href="<?= site_url('logout'); ?>"><i class="fa fa-circle-o text-red"></i> <span>Logout</span></a></li>

		</ul>
	</section>
	<!-- /.sidebar -->
</aside>
