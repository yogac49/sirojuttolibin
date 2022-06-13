	<h1>
		<?= $title; ?>
	</h1>

	<div class="box-body table-responsive pl-3">
		<table border="1" cellpadding="5" width="49%">
			<thead>
				<tr class="text-center">
					<th class="text-center">No</th>
					<th class="text-center">Nik</th>
					<th class="text-center">Nama</th>
					<th class="text-center">Jenis Kelamin</th>
					<th class="text-center">Tempat/Tgl Lahir</th>
					<th class="text-center">Alamat</th>
					<th class="text-center">Photo</th>

				</tr>
			</thead>
			<tbody>
				<?php $no = 1;
				foreach ($dataSiswa as $ds) : ?>
				<?php
					$alamat_anak = $ds['alamat'];
					$pecah_a 	 = explode("-", $alamat_anak);
					$alamat_anak = $pecah_a[0];
					$rt_a  		 = $pecah_a[1];
					$rw_a 	     = $pecah_a[2];
					$desa_a 	 = $pecah_a[3];
					$kec_a  	 = $pecah_a[4];
					$kab_a  	 = $pecah_a[5];
					$alamat	= $alamat_anak . " " . "RT" . "00" . $rt_a . "/" . "00" . $rw_a . " Desa." . $desa_a . ". Kec. " . $kec_a . ". Kab." . $kab_a;
				?>
					<tr class="text-center">
						<td><?= $no++; ?></td>
						<td><?= $ds['nik_siswa']; ?></td>
						<td style="width: 90px;"><?= $ds['nama_lengkap']; ?></td>
						<td><?= $ds['jenis_kelamin']; ?></td>
						<td style="width: 150px;"><?= $ds['tempat_lahir'] . ", " . date('d F Y', strtotime($ds['tanggal_lahir'])); ?></td>
						<td style="width: 250px;"><?= $alamat; ?></td>
						<td><a href="<?= base_url('assets/img-pendaftaran/photo_siswa/' . $ds['photo']); ?>" target="_blank"><img src="<?= base_url('assets/img-pendaftaran/photo_siswa/' . $ds['photo']); ?>" style="width: 60px;"></a></td>
					</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
	</div>
