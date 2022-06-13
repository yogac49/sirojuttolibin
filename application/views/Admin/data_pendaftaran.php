<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			<?= $title; ?>
		</h1>
		<div class="box">
			<div class="box-header">
				<h3 class="box-title" style="margin-bottom: 10px;">Table Siswa</h3>
				<a href="<?= site_url('cetakPendaftaran') ?>" target="_blank" class="btn btn-primary"><i class="fa fa-print"> Cetak</i></a>

			</div>

			<div class="box-body table-responsive pl-3">
				<table id="example1" class="table table-bordered table-striped">
					<thead>
						<tr class="text-center">
							<th class="text-center">No</th>
							<th class="text-center">Nik</th>
							<th class="text-center">Nama</th>
							<th class="text-center">Jenis Kelamin</th>
							<th class="text-center">Tempat/Tgl Lahir</th>
							<th class="text-center">Agama</th>
							<th class="text-center">Alamat</th>
							<th class="text-center">Photo</th>
							<th class="text-center">Status</th>
							<th class="text-center">Action</th>

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
								<td><?= $ds['nama_lengkap']; ?></td>
								<td><?= $ds['jenis_kelamin']; ?></td>
								<td><?= $ds['tempat_lahir'] . ", " . date('d F Y', strtotime($ds['tanggal_lahir'])); ?></td>
								<td><?= $ds['agama']; ?></td>
								<td><?= $alamat; ?></td>
								<td><a href="<?= base_url('assets/img-pendaftaran/photo_siswa/' . $ds['photo']); ?>" target="_blank"><img src="<?= base_url('assets/img-pendaftaran/photo_siswa/' . $ds['photo']); ?>" width="80px;"></a></td>
								<td><?= $ds['status']; ?></td>
								<td>
								
									<?php if ($ds['status'] == "Belum Bayar") : ?>
										<div class="alert alert-danger">Belum dikonfirmasi</div>
									<?php elseif ($ds['status'] == "Sudah Bayar") : ?>
										<a href="admin/disetujui/<?php echo $ds ['no_pembayaran'];?>" data-popup='tooltip' data-placement='top' title='Disetujui'class="btn btn-sm btn-info" type="disetujui" name="setujui"><i class="fa fa-pencil"></i> Konfirmasi</a>
									<?php else : ?>
										<div class="label-success">Aktif</div>
									<?php endif; ?>
								</td>
							</tr>
							
						<?php endforeach; ?>
					</tbody>
				</table>
				<table>
			</div>
			
		</div>

	</section>
</div>



