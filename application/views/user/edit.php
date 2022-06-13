<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Edit Profile
		</h1>
		<form action="" method="post">
			<div class="row" style="margin-top: 40px;">
				<div class="col-md-6">
					<div class="form-group has-feedback">
						<span class="fa fa-user-plus form-control-feedback"></span>
						<input type="text" id="nik" name="nik" placeholder="Nik" class="form-control" value="<?= $allSiswa['nik_siswa'] ?>" readonly>
						<?= form_error('nik', '<small class="text-danger pl-3 ">', '</small>') ?>
					</div>
					<div class="form-group has-feedback">
						<span class="glyphicon glyphicon-user form-control-feedback"></span>
						<input type="text" id="username" name="username" placeholder="Username" class="form-control" value="<?= $allSiswa['username'] ?>">
						<small class="text-danger pl-3 null"></small><br>
					</div>
					<div class="form-group has-feedback">
						<span class="fa fa-user-plus form-control-feedback"></span>
						<input type="text" id="nama_lengkap" name="nama_lengkap" placeholder="Nama Lengkap" class="form-control" value="<?= $allSiswa['nama_lengkap'] ?>">
					</div>
					<div class="form-group has-feedback">
						<span class="glyphicon glyphicon-user form-control-feedback"></span>
						<input type="text" id="nama_panggilan" name="nama_panggilan" placeholder="Nama Panggilan" class="form-control" value="<?= $allSiswa['nama_panggilan'] ?>">
					</div>

					<div class="form-group has-feedback">
						<span class="fa fa-home form-control-feedback"></span>
						<input type="text" id="tempat_lahir" name="tempat_lahir" placeholder="Tempat Lahir" class="form-control" value="<?= $allSiswa['tempat_lahir'] ?>">
					</div>

					<div class="form-group has-feedback">
						<span class="fa fa-user-md form-control-feedback"></span>
						<input type="text" id="agama" name="agama" placeholder="Agama" class="form-control" value="<?= $allSiswa['agama'] ?>">
					</div>

				</div>
				<div class="col-md-6">
					<div class="form-group has-feedback">
						<span class="fa fa-home form-control-feedback"></span>
						<input type="text" class="form-control" id="alamat" placeholder="Alamat" name="alamat" value="<?= $alamat ?>">
					</div>
					<div class="row">
						<div class="col-md-3">
							<div class="form-group has-feedback">
								<span class="fa fa-home form-control-feedback"></span>
								<input type="text" class="form-control" id="rt" placeholder="RT" name="rt" value="<?= $rt ?>">
							</div>
						</div>
						<div class="col-md-3">
							<div class="form-group has-feedback">
								<span class="fa fa-home form-control-feedback"></span>
								<input type="text" class="form-control" id="rw" placeholder="RW" name="rw" value="<?= $rw ?>">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group has-feedback">
								<span class="fa fa-home form-control-feedback"></span>
								<input type="text" class="form-control" id="desa" placeholder="Desa" name="desa" value="<?= $desa ?>">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group has-feedback">
								<span class="fa fa-home form-control-feedback"></span>
								<input type="text" class="form-control" id="kec" placeholder="Kec" name="kec" value="<?= $kec ?>">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group has-feedback">
								<span class="fa fa-home form-control-feedback"></span>
								<input type="text" class="form-control" id="kab" placeholder="Kab" name="kab" value="<?= $kab ?>">
							</div>
						</div>
					</div>
					<div class="form-group has-feedback">
						<span class="fa fa-user-plus form-control-feedback"></span>
						<input type="text" id="anak_ke" name="anak_ke" placeholder="Anak-Ke" class="form-control" value="<?= $allSiswa['anak_ke'] ?>">
					</div>
					<div class="form-group has-feedback">
						<span class="fa fa-user-plus form-control-feedback"></span>
						<input type="text" id="jmlh_suara_kandung" name="jmlh_suara_kandung" placeholder="Jumlah Saudara Kandung" class="form-control" value="<?= $allSiswa['jmlh_saudara_kandung'] ?>">
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group has-feedback">
								<span class="fa  fa-sort-alpha-desc form-control-feedback"></span>
								<input type="text" id="tinggi" name="tinggi" placeholder="Tinggi (cm)" class="form-control" value="<?= $allSiswa['tinggi_badan'] ?>">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group has-feedback">
								<span class="fa fa-hourglass-end form-control-feedback"></span>
								<input type="text" id="berat" name="berat" placeholder="Berat (kg)" class="form-control" value="<?= $allSiswa['berat_badan'] ?>">
							</div>
						</div>
					</div>

					<button type="submit" name="submit" class="btn btn-primary btn-block"><i class="fa fa-pencil"></i> Edit</button>
				</div>
			</div>
		</form>
	</section>

</div>
