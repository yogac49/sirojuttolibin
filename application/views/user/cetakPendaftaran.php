<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Cetak pendaftaran</title>
	<style>
		.data_siswa p {
			padding-top: -10px;
		}
	</style>
</head>

<body>
	<div class="container">
		<div class="row">
			<div class="col-md-2">
				<h3 style="text-align: center;">TAMAN KANAK-KANAK ISLAM TERPADU</h3>
				<div class="rwo">
					<h1 style="text-align: center; margin-top: -80px;">INSAN KAMIL CIKOPO</h1>
				</div>
				<div class="row" style="text-align: center; border-bottom: 1px solid black;">
					<small>
						<p style="margin-top: 30px;">Nomor SK : 421.10/3882/PAUD/DIKMAS/2019</p>
						<p style="padding-top: -15px;">Sekretariat : Jalan Desa Cikopo Nomor 008 Kp.Krajan RT 006/003 Desa Cikopo</p>
						<p style="padding-top: -15px;">kecamatan Bungursari Kabupaten Purwakarta</p>
					</small>
				</div>
				<div class="row">
					<div class="form-group" style="margin-top: -130px;">
						<img src="<?= base_url('assets/img/logoTK1.png') ?>" alt="logo">
					</div>

				</div>
				<div class="row">
					<div class="form-group" style="margin-top: -68px; text-align: right;">
						<img src="<?= base_url('assets/img/logoTK2.png') ?>" alt="logo2">
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="form-group" style="margin-top: 60px;">
		<h3 style="text-align: center;">FORMULIR PENDAFTARAN SISWA BARU</h3>
		<h3 style="text-align: center; padding-top: -10px;">TAHUN PELAJARAN 2020/2021</h3>
	</div>
	<div class="form-group data_siswa">
		<p>No Pendaftaran : 001</p>
		<h3 style="padding-top: -20px;">Identitas Calon Siswa & Orang Tua</h3>
		<table style="padding-top: -10px;">
			<thead>
				<tr>
					<td>
						<p>Nama Lengkap Calon Siswa </p>
					</td>
					<td>: <?= $nama_lengkap ?></td>
				</tr>
				<tr>
					<td>
						<p>Nama Panggilan </p>
					</td>
					<td>: <?= $nama_panggilan ?></td>
				</tr>
				<tr>
					<td>
						<p>
							<p>Jenis Kelamin </p>
						</p>
					</td>
					<td>: <?= $jk ?></td>
				</tr>
				<tr>
					<td>
						<p>
							<p>Tempat, Tanggal Lahir </p>
						</p>
					</td>
					<td>: <?= $ttl ?></td>
				</tr>
				<tr>
					<td>
						<p>
							<p>NIK </p>
						</p>
					</td>
					<td>: <?= $nik ?></td>
				</tr>
				<tr>
					<td>
						<p>
							<p>Agama </p>
						</p>
					</td>
					<td>: <?= $agama ?></td>
				</tr>
				<tr>
					<td>
						<p>
							<p>Alamat Tempat Tinggal </p>
						</p>
					</td>
					<td>: <?= $alamatTinggal ?></td>
				</tr>
				<tr>
					<td>
						<p>
							<p>Anak Ke- </p>
						</p>
					</td>
					<td>: <?= $anakKe ?></td>
				</tr>
				<tr>
					<td>
						<p>
							<p>Jumlah Saudara Kandung </p>
						</p>
					</td>
					<td>: <?= $jmlhSaudara ?></td>
				</tr>
				<tr>
					<td>
						<p>
							<p>Berat Badan </p>
						</p>
					</td>
					<td>: <?= $berat . " kg" ?></td>
				</tr>
				<tr>
					<td>
						<p>
							<p>Tinggi Badan </p>
						</p>
					</td>
					<td>: <?= $tinggi . " cm" ?></td>
				</tr>
				<tr>
					<td>
						<p>
							<p>Golongan Darah</p>
						</p>
					</td>
					<td>: <?= $goldar ?></td>
				</tr>
				<tr>
					<td>
						<p>
							<p>Nama Ayah</p>
						</p>
					</td>
					<td>: <?= $nama_ayah ?></td>
				</tr>
				<tr>
					<td>
						<p>
							<p>Tempat, Tanggal Lahir</p>
						</p>
					</td>
					<td>: <?= $ttl_ayah ?></td>
				</tr>
				<tr>
					<td>
						<p>
							<p>NIK</p>
						</p>
					</td>
					<td>: <?= $nik_ayah ?></td>
				</tr>
				<tr>
					<td>
						<p>
							<p>Pendidikan Terakhir</p>
						</p>
					</td>
					<td>: <?= $pend_ayah ?></td>
				</tr>
				<tr>
					<td>
						<p>
							<p>Pekerjaan</p>
						</p>
					</td>
					<td>: <?= $pekerjaan_ayah ?></td>
				</tr>
				<tr>
					<td>
						<p>
							<p>Alamat Tempat Tinggal</p>
						</p>
					</td>
					<td>: <?= $alamat_ayah ?></td>
				</tr>
				<tr>
					<td>
						<p>
							<p>No telp/HP</p>
						</p>
					</td>
					<td>: <?= $no_hp ?></td>
				</tr>
				<tr>
					<td>
						<p>
							<p>Nama Ibu</p>
						</p>
					</td>
					<td>: <?= $nama_ibu ?></td>
				</tr>
				<tr>
					<td>
						<p>
							<p>Tempat, Tanggal Lahir</p>
						</p>
					</td>
					<td>: <?= $ttl_ibu ?></td>
				</tr>
				<tr>
					<td>
						<p>
							<p>NIK</p>
						</p>
					</td>
					<td>: <?= $nik_ibu ?></td>
				</tr>
				<tr>
					<td>
						<p>
							<p>Pendidikan Terakhir</p>
						</p>
					</td>
					<td>: <?= $pend_ibu ?></td>
				</tr>
				<tr>
					<td>
						<p>
							<p>Pekerjaan</p>
						</p>
					</td>
					<td>: <?= $pekerjaan_ibu ?></td>
				</tr>
				<tr>
					<td>
						<p>
							<p>Alamat Tempat Tinggal</p>
						</p>
					</td>
					<td>: <?= $alamat_ibu ?></td>
				</tr>

			</thead>
		</table>
	</div>
	<div class="form-group" style="text-align: right;">
		<p style="margin-right: 20px;padding-top: -10px;">Cikopo,..............202</p>
		<p style="padding-top: -10px; margin-right: 30px; margin-bottom: 30px;">Orang Tua/Wali</p>
		<p>(........................................)</p>
	</div>
	<img src="<?= base_url('assets/img-pendaftaran/photo_siswa/' . $photo_siswa) ?>" alt="logo" width="80px" height="60px">
	<img src="<?= base_url('assets/img-pendaftaran/photo_siswa/' . $photo_ayah) ?>" alt="logo" width="80px" height="60px">
	<img src="<?= base_url('assets/img-pendaftaran/photo_siswa/' . $photo_ibu) ?>" alt="logo" width="80px" height="60px">

</body>

</html>
