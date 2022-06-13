<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper ">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Profile
		</h1>
		<div class="row " style="margin-top: 20px;">
			<div class="col-md-4">
				<!-- Widget: user widget style 1 -->
				<div class="box box-widget widget-user-2">
					<!-- Add the bg color to the header using any of the bg-* classes -->
					<div class="widget-user-header bg-yellow">
						<div class="widget-user-image">
							<img class="img-circle" src="<?= base_url('assets/img-pendaftaran/photo_siswa/' . $siswa['photo_ayah']); ?>" width="30px;" alt="User Avatar">
						</div>
						<!-- /.widget-user-image -->
						<h3 class="widget-user-username"><?= $siswa['nama_ayah'] ?></h3>
						<h5 class="widget-user-desc"><?= $siswa['pekerjaan_ayah'] ?></h5>
					</div>
					<div class="box-footer no-padding">
						<ul class="nav nav-stacked">
							<li><a href="#"><?= $siswa['nik_ayah'] ?> <span class="pull-right badge bg-blue">Nik</span></a></li>
							<li><a href="#"><?= $siswa['tanggal_lahir_ayah'] ?> <span class="pull-right badge bg-aqua">Tgl Lahir</span></a></li>
							<li><a href="#"><?= $siswa['pendidikan_terakhir_ayah'] ?> <span class="pull-right badge bg-green">Pendidikan</span></a></li>
							<li><a href="#"><?= $siswa['no_hp'] ?> <span class="pull-right badge bg-red">No Hp</span></a></li>
						</ul>
					</div>
				</div>
				<!-- /.widget-user -->
			</div>
			<!-- /.col -->
			<div class="col-md-4">
				<!-- Widget: user widget style 1 -->
				<div class="box box-widget widget-user">
					<!-- Add the bg color to the header using any of the bg-* classes -->
					<div class="widget-user-header bg-aqua-active">
						<h3 class="widget-user-username"><?= $siswa['nama_lengkap'] ?></h3>
						<h5 class="widget-user-desc"><?= $siswa['tanggal_lahir'] ?></h5>
					</div>
					<div class="widget-user-image">
						<img class="img-circle" src="<?= base_url('assets/img-pendaftaran/photo_siswa/' . $siswa['photo']); ?>" width="80px;" alt="User Avatar">
					</div>
					<div class="box-footer">
						<div class="row">
							<div class="col-sm-4 border-right">
								<div class="description-block">
									<h5 class="description-header"><?= $siswa['nik_siswa'] ?></h5>
									<span class="description-text">NIK</span>
								</div>
								<!-- /.description-block -->
							</div>
							<!-- /.col -->
							<div class="col-sm-4 border-right">
								<div class="description-block">
									<h5 class="description-header"><?= $siswa['jenis_kelamin'] ?></h5>
									<span class="description-text">Jenis Kelamin</span>
								</div>
								<!-- /.description-block -->
							</div>
							<!-- /.col -->
							<div class="col-sm-4">
								<div class="description-block">
									<h5 class="description-header"><?= $siswa['tempat_lahir'] ?></h5>
									<span class="description-text">Tempat Lahir</span>
									<a href="<?= site_url('user/edit/' . $siswa['nik_siswa']) ?>" class="btn btn-info"><i class="fa fa-pencil"></i> Edit</a>
								</div>
								<!-- /.description-block -->
							</div>
							<!-- /.col -->
						</div>
						<!-- /.row -->
					</div>
				</div>
				<!-- /.widget-user -->
			</div>
			<!-- /.col -->
			<div class="col-md-4">
				<!-- Widget: user widget style 1 -->
				<div class="box box-widget widget-user">
					<!-- Add the bg color to the header using any of the bg-* classes -->
					<div class="widget-user-header bg-black" style="background: url('../dist/img/photo1.png') center center;">
						<h3 class="widget-user-username"><?= $siswa['nama_ibu'] ?></h3>
						<h5 class="widget-user-desc"><?= $siswa['pekerjaan_ibu'] ?></h5>
					</div>
					<div class="widget-user-image">
						<img class="img-circle" src="<?= base_url('assets/img-pendaftaran/photo_siswa/' . $siswa['photo_ibu']); ?>" width="30px;" alt="User Avatar">
					</div>
					<div class="box-footer">
						<div class="row">
							<div class="col-sm-4 border-right">
								<div class="description-block">
									<h5 class="description-header"><?= $siswa['nik_ibu'] ?></h5>
									<span class="description-text">NIK</span>
								</div>
								<!-- /.description-block -->
							</div>
							<!-- /.col -->
							<div class="col-sm-4 border-right">
								<div class="description-block">
									<h5 class="description-header"><?= $siswa['tanggal_lahir_ibu'] ?></h5>
									<span class="description-text">Tanggal Lahir</span>
								</div>
								<!-- /.description-block -->
							</div>
							<!-- /.col -->
							<div class="col-sm-4">
								<div class="description-block">
									<h5 class="description-header"><?= $siswa['pendidikan_terakhir_ibu'] ?></h5>
									<span class="description-text">Pendidikan</span>
								</div>
								<!-- /.description-block -->
							</div>
							<!-- /.col -->
						</div>
						<!-- /.row -->
					</div>
				</div>
				<!-- /.widget-user -->
			</div>
			<!-- /.col -->
		</div>
		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
			<li class="active">Dashboard</li>
		</ol>
	</section>

</div>
