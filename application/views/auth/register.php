<h4 style="font-family: arial margin:80px; color:white; sans-serif; font-weight: bold;font-size: 35px; text-align:center; height:90px;background:#c2185b;  line-height: 150px;
height: 150px;"> REGISTRASI</h4>
<div class="container">

		<form action="<?= site_url('user-registrasi') ?>" method="post" enctype="multipart/form-data">
			<div id="register">
				<div class="row box">
					<div class="kotak" style="background-color: whitesmoke; height: 80px;">
						<a href="<?= site_url('login'); ?>" class="btn btn-light" style="margin-left: 10px; line-height: 30px;font-family: 'Microsoft PhagsPa'; font-weight: bold;font-size: 18px;"><i class="fa fa-unlock"></i> Login</a>
						<a href="<?= site_url('auth_user/dashboard'); ?>" class="btn btn-light" style="margin-left: 10px; line-height: 30px;font-family: 'Microsoft PhagsPa'; font-weight: bold;font-size: 18px;"><i class="fa fa-home"></i> Halaman Utama</a>
						<a href="<?= site_url('Admin/alur'); ?>" class="btn btn-light" style="margin-left: 10px; line-height: 30px;font-family: 'Microsoft PhagsPa'; font-weight: bold;font-size: 18px;"><i class="fa fa-book"></i> Alur pendaftaran</a>
					
					</div>
					<div class="login-box-body">
						<!-- <div class="col l12 text">
							<h3>Pendaftaran (Registrasi)</h3>
							<h2>TK Sirojut Tholibin</h2>

						</div> -->
						<p style="color :red;">*untuk mengetahui alur pendaftaran silahkan klik alur pendaftaran di atas</p>
						<p style="color :red;">JIKA SUDAH MELAKUKAN PENDAFTARAN SILAHKAN LOGIN DAN ISI USERNAME DAN TGGL LAHIR YANG SUDAH DIBUAT</p>
						<div class="row anak">
							<div class="container">
								<h3>Data Siswa</h3>
							</div>
							<div class="col-md-6 ">
								<div class="form-group has-feedback">
									<input type="hidden" name="kode" value="<?= $kode ?>">
									<span class="glyphicon glyphicon-user form-control-feedback"></span>
									<input type="text" id="username" name="username" placeholder="Username" class="form-control" value="<?= set_value('username') ?>">
									<small class="text-danger pl-3 null"></small><br>
									<a id="cek" class="btn btn-warning btn-sm cek">Cek Username</a>
								</div>
								<div class="form-group has-feedback">
									<span class="fa fa-user-plus form-control-feedback"></span>
									<input type="text" id="nik" name="nik" placeholder="Nik" class="form-control" value="<?= set_value('nik') ?>">
									<?= form_error('nik', '<small class="text-danger pl-3 ">', '</small>') ?>
								</div>
								<div class="form-group has-feedback">
									<span class="fa fa-user-plus form-control-feedback"></span>
									<input type="text" id="nama_lengkap" name="nama_lengkap" placeholder="Nama Lengkap" class="form-control" value="<?= set_value('nama_lengkap') ?>">
								</div>
								<div class="form-group has-feedback">
									<span class="glyphicon glyphicon-user form-control-feedback"></span>
									<input type="text" id="nama_panggilan" name="nama_panggilan" placeholder="Nama Panggilan" class="form-control" value="<?= set_value('nama_panggilan') ?>">
								</div>
								<div class="form-group has-feedback">
									<span class="fa fa-venus-mars form-control-feedback"></span>
									<select name="jk" id="jk" class="form-control" required>
										<option value="">~ Jenis Kelamin ~</option>
										<option value="laki-laki">Laki-Laki</option>
										<option value="perempuan">Perempuan</option>
									</select>
								</div>
								<div class="form-group has-feedback">
									<span class="fa fa-home form-control-feedback"></span>
									<input type="text" id="tempat_lahir" name="tempat_lahir" placeholder="Tempat Lahir" class="form-control" value="<?= set_value('tempat_lahir') ?>">
								</div>
								<div class="form-group ">
									<label for="tgl_lahir">Tgl lahir</label>
									<input type="date" id="tgl_lahir" name="tgl_lahir" placeholder="Tanggal Lahir" class="form-control" value="<?= set_value('tgl_lahir') ?>">
								</div>
								<div class="form-group has-feedback">
									<span class="fa fa-user-md form-control-feedback"></span>
									<input type="text" id="agama" name="agama" placeholder="Agama" class="form-control" value="<?= set_value('agama') ?>">
								</div>
							</div>
							<div class="col-md-6">

								<div class="form-group has-feedback">
									<span class="fa fa-home form-control-feedback"></span>
									<input type="text" class="form-control" id="alamat" placeholder="Alamat" name="alamat" value="<?= set_value('alamat') ?>">
								</div>
								<div class="row">
									<div class="col-md-3">
										<div class="form-group has-feedback">
											<span class="fa fa-home form-control-feedback"></span>
											<input type="text" class="form-control" id="rt" placeholder="RT" name="rt" value="<?= set_value('rt') ?>">
										</div>
									</div>
									<div class="col-md-3">
										<div class="form-group has-feedback">
											<span class="fa fa-home form-control-feedback"></span>
											<input type="text" class="form-control" id="rw" placeholder="RW" name="rw" value="<?= set_value('rw') ?>">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group has-feedback">
											<span class="fa fa-home form-control-feedback"></span>
											<input type="text" class="form-control" id="desa" placeholder="Desa" name="desa" value="<?= set_value('desa') ?>">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group has-feedback">
											<span class="fa fa-home form-control-feedback"></span>
											<input type="text" class="form-control" id="kec" placeholder="Kec" name="kec" value="<?= set_value('kec') ?>">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group has-feedback">
											<span class="fa fa-home form-control-feedback"></span>
											<input type="text" class="form-control" id="kab" placeholder="Kab" name="kab" value="<?= set_value('kab') ?>">
										</div>
									</div>
								</div>
								<div class="form-group has-feedback">
									<span class="fa fa-user-plus form-control-feedback"></span>
									<input type="text" id="anak_ke" name="anak_ke" placeholder="Anak-Ke" class="form-control" value="<?= set_value('anak_ke') ?>">
								</div>
								<div class="form-group has-feedback">
									<span class="fa fa-user-plus form-control-feedback"></span>
									<input type="text" id="jmlh_suara_kandung" name="jmlh_suara_kandung" placeholder="Jumlah Saudara Kandung" class="form-control" value="<?= set_value('jmlh_suara_kandung') ?>">
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group has-feedback">
											<span class="fa  fa-sort-alpha-desc form-control-feedback"></span>
											<input type="text" id="tinggi" name="tinggi" placeholder="Tinggi (cm)" class="form-control" value="<?= set_value('tinggi') ?>">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group has-feedback">
											<span class="fa fa-hourglass-end form-control-feedback"></span>
											<input type="text" id="berat" name="berat" placeholder="Berat (kg)" class="form-control" value="<?= set_value('berat') ?>">
										</div>
									</div>
								</div>
								<div class="form-group has-feedback">
									<span class="fa fa-adjust form-control-feedback"></span>
									<select name="gol_darah" id="gol_darah" class="form-control" required>
										<option value="">~ Gol Darah ~</option>
										<option value="A">A</option>
										<option value="B">B</option>
										<option value="AB">AB</option>
										<option value="O">O</option>
									</select>
								</div>
								<div class="form-group has-feedback">
									<label for="photo">Photo</label>
									<span class="fa fa-file form-control-feedback"></span>
									<input type="file" id="photo" name="photo" placeholder="photo (jpg,jpeg,png)" class="form-control" value="<?= set_value('photo') ?>">
									<p style="color:red;">*foto harus latar belakang merah dengan ukuran 3x6</p>
								</div>
								<a class="btn btn-light lanjut1" style="margin-left: 60%; line-height: 30px;font-family: 'Microsoft PhagsPa'; font-weight: bold;font-size: 18px;"><i class="fa fa-arrow-circle-right"></i> 1 Langkah lagi</a>
							</div>
						</div>
						<div class="row ayah_ibu">
							<div class="container">
								<h3>Data Orangtua</h3>
							</div>
							<!-- DATA AYAH  -->
							<div class="col-md-6">
								<div class="form-group has-feedback">
									<span class="glyphicon glyphicon-user form-control-feedback"></span>
									<input type="text" id="nik_ayah" name="nik_ayah" placeholder="Nik Ayah" class="form-control" value="<?= set_value('nik_ayah') ?>">
									<?= form_error('nik_ayah', '<small class="text-danger pl-3 ">', '</small>') ?>
								</div>
								<div class="form-group has-feedback">
									<span class="fa fa-user-plus form-control-feedback"></span>
									<input type="text" id="nama_ayah" name="nama_ayah" placeholder="Nama Ayah" class="form-control" value="<?= set_value('nama_ayah') ?>">
								</div>
								<div class="form-group has-feedback">
									<span class="fa fa-home form-control-feedback"></span>
									<input type="text" id="tempat_lahir_ayah" name="tempat_lahir_ayah" placeholder="Tempat Lahir Ayah" class="form-control" value="<?= set_value('tempat_lahir_ayah') ?>">
								</div>
								<div class="form-group">
									<label for="tgl_lahir_ayah">Tgl Lahir</label>
									<input type="date" id="tgl_lahir_ayah" class="form-control" name="tgl_lahir_ayah" placeholder="Tanggal Lahir Ayah" class="form-control" value="<?= set_value('tgl_lahir_ayah') ?>">
								</div>
								<div class="form-group has-feedback">
									<span class="fa fa-graduation-cap form-control-feedback"></span>
									<input type="text" id="pend_terakhir_ayah" name="pend_terakhir_ayah" placeholder="Pend Terakhir Ayah" class="form-control" value="<?= set_value('pend_terakhir_ayah') ?>">
								</div>
								<div class="form-group has-feedback">
									<span class="fa fa-user-md form-control-feedback"></span>
									<input type="text" id="pekerjaan_ayah" name="pekerjaan_ayah" placeholder="Pekerjaan Ayah" class="form-control" value="<?= set_value('pekerjaan_ayah') ?>">
								</div>
								<div class="form-group has-feedback">
									<span class="fa fa-home form-control-feedback"></span>
									<input type="text" name="alamat_ayah" id="alamat_ayah" class="form-control" placeholder="Alamat Ayah" value="<?= set_value('alamat_ayah') ?>">
								</div>
								<div class="row">
									<div class="col-md-3">
										<div class="form-group has-feedback">
											<span class="fa fa-home form-control-feedback"></span>
											<input type="text" class="form-control" id="rt_ayah" placeholder="RT" name="rt_ayah" value="<?= set_value('rt_ayah') ?>">
										</div>
									</div>
									<div class="col-md-3">
										<div class="form-group has-feedback">
											<span class="fa fa-home form-control-feedback"></span>
											<input type="text" class="form-control" id="rw_ayah" placeholder="RW" name="rw_ayah" value="<?= set_value('rw_ayah') ?>">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group has-feedback">
											<span class="fa fa-home form-control-feedback"></span>
											<input type="text" class="form-control" id="desa_ayah" placeholder="Desa" name="desa_ayah" value="<?= set_value('desa_ayah') ?>">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group has-feedback">
											<span class="fa fa-home form-control-feedback"></span>
											<input type="text" class="form-control" id="kec_ayah" placeholder="Kec" name="kec_ayah" value="<?= set_value('kec_ayah') ?>">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group has-feedback">
											<span class="fa fa-home form-control-feedback"></span>
											<input type="text" class="form-control" id="kab_ayah" placeholder="Kab" name="kab_ayah" value="<?= set_value('kab_ayah') ?>">
										</div>
									</div>
								</div>
								<div class="form-group has-feedback">
									<label for="photo_ayah">Photo</label>
									<span class="fa fa-file form-control-feedback"></span>
									<input type="file" id="photo_ayah" class="form-control" name="photo_ayah" placeholder="Photo Ayah (jpg,jpeg,png)" class="form-control" value="<?= set_value('photo_ayah') ?>">
								</div>
							</div>

							<!-- DATA IBU -->
							<div class="col-md-6">
								<div class="form-group has-feedback">
									<span class="glyphicon glyphicon-user form-control-feedback"></span>
									<input type="text" id="nik_ibu" name="nik_ibu" placeholder="Nik Ibu" class="form-control" value="<?= set_value('nik_ibu') ?>">
									<?= form_error('nik_ibu', '<small class="text-danger pl-3 ">', '</small>') ?>
								</div>
								<div class="form-group has-feedback">
									<span class="fa fa-user-plus form-control-feedback"></span>
									<input type="text" id="nama_ibu" name="nama_ibu" placeholder="Nama Ibu" class="form-control" value="<?= set_value('nama_ibu') ?>">
								</div>
								<div class="form-group has-feedback">
									<span class="fa fa-home form-control-feedback"></span>
									<input type="text" id="tempat_lahir_ibu" name="tempat_lahir_ibu" placeholder="Tempat Lahir Ibu" class="form-control" value="<?= set_value('tempat_lahir_ibu') ?>">
								</div>
								<div class="form-group">
									<label for="tgl_lahir_ibu">Tgl Lahir</label>
									<input type="date" id="tgl_lahir_ibu" class="form-control" name="tgl_lahir_ibu" placeholder="Tanggal Lahir" class="form-control" value="<?= set_value('tgl_lahir_ibu') ?>">
								</div>
								<div class="form-group has-feedback">
									<span class="fa fa-graduation-cap form-control-feedback"></span>
									<input type="text" id="pend_terakhir_ibu" name="pend_terakhir_ibu" placeholder="Pend Terakhir Ibu" class="form-control" value="<?= set_value('pend_terakhir_ibu') ?>">
								</div>
								<div class="form-group has-feedback">
									<span class="fa fa-user-md form-control-feedback"></span>
									<input type="text" id="pekerjaan_ibu" name="pekerjaan_ibu" placeholder="Pekerjaan Ibu" class="form-control" value="<?= set_value('pekerjaan_ibu') ?>">
								</div>
								<div class="form-group has-feedback">
									<span class="fa fa-home form-control-feedback"></span>
									<input type="text" name="alamat_ibu" id="alamat_ibu" rows="3" class="form-control" placeholder="Alamat Ibu" value="<?= set_value('alamat_ibu') ?>">
								</div>
								<div class="row">
									<div class="col-md-3">
										<div class="form-group has-feedback">
											<span class="fa fa-home form-control-feedback"></span>
											<input type="text" class="form-control" id="rt_ibu" placeholder="RT" name="rt_ibu" value="<?= set_value('rt_ibu') ?>">
										</div>
									</div>
									<div class="col-md-3">
										<div class="form-group has-feedback">
											<span class="fa fa-home form-control-feedback"></span>
											<input type="text" class="form-control" id="rw_ibu" placeholder="RW" name="rw_ibu" value="<?= set_value('rw_ibu') ?>">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group has-feedback">
											<span class="fa fa-home form-control-feedback"></span>
											<input type="text" class="form-control" id="desa_ibu" placeholder="Desa" name="desa_ibu" value="<?= set_value('desa_ibu') ?>">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group has-feedback">
											<span class="fa fa-home form-control-feedback"></span>
											<input type="text" class="form-control" id="kec_ibu" placeholder="Kec" name="kec_ibu" value="<?= set_value('kec_ibu') ?>">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group has-feedback">
											<span class="fa fa-home form-control-feedback"></span>
											<input type="text" class="form-control" id="kab_ibu" placeholder="Kab" name="kab_ibu" value="<?= set_value('kab_ibu') ?>">
										</div>
									</div>
								</div>
								<div class="form-group has-feedback">
									<label for="photo_ibu">Photo</label>
									<span class="fa fa-file form-control-feedback"></span>
									<input type="file" id="photo_ibu" class="form-control" name="photo_ibu" placeholder="Photo Ibu (jpg,jpeg,png)" class="form-control" value="<?= set_value('photo_ibu') ?>">
								</div>
								<div class="form-group has-feedback">
									<span class="fa fa-phone form-control-feedback"></span>
									<input type="number" id="no_hp" name="no_hp" placeholder="No HP" class="form-control" value="<?= set_value('no_hp') ?>">
								</div>
							</div>
						
						</div>

						<button type="submit" name="submit" class="btn btn-info simpan" style="margin-left: 88%;"><i class="fa fa-save"></i> Simpan</button>
					<a class="btn btn-ligth kembali1" style="margin-left: 85%; line-height: 30px;font-family: 'Microsoft PhagsPa'; font-weight: bold;font-size: 18px;"><i class="fa fa-reply"></i> Kembali</a>
					</div>
				</div>
			</div>
		</form>
	</div>
</div>
