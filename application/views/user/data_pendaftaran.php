<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			<?= $title; ?>
		</h1>
		<div class="box">
			<div class="box-header">
				<h3 class="box-title" style="margin-bottom: 10px;">Table Siswa</h3>
				<?php if ($status == "Belum Bayar") : ?>
					<div class="alert alert-danger">Silangkan Lakukan Pembayaran</div>
				<?php elseif ($status == "Sudah Bayar") : ?>
					<div class="alert alert-info">Menunggu Konfirmasi Admin</div>
				<?php else : ?>
				<?php endif; ?>
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
						foreach ($dataJoin as $dp) : ?>
							<tr class="text-center">
								<td><?= $no++; ?></td>
								<td><?= $dp['nik_siswa']; ?></td>
								<td><?= $dp['nama_lengkap']; ?></td>
								<td><?= $dp['jenis_kelamin']; ?></td>
								<td><?= $dp['tempat_lahir'] . ", " . date('d F Y', strtotime($dp['tanggal_lahir'])); ?></td>
								<td><?= $dp['agama']; ?></td>
								<td><?= $alamat . " " . "RT" . $nol . $rt . "/" . $nol . $rw . " Desa." . $desa . ". Kec. " . $kec . ". Kab." . $kab; ?></td>
								<td><a href="<?= base_url('assets/img-pendaftaran/photo_siswa/' . $dp['photo']); ?>" target="_blank"><img src="<?= base_url('assets/img-pendaftaran/photo_siswa/' . $dp['photo']); ?>" width="80px;"></a></td>
								<td><?= $dp['status']; ?></td>
								<td>

									<?php if ($dp['status'] == "Belum Bayar") : ?>
										<a href="" class="btn btn-sm btn-info"><i class="fa fa-pencil"></i> Edit</a>
										<a href="<?= site_url('pembayaran'); ?>" class="btn btn-primary btn-sm"><i class="fa fa-paypal"></i> Bayar</a>
									<?php elseif ($dp['status'] == "Sudah Bayar") : ?>
										<a href="" class="btn btn-sm btn-info"><i class="fa fa-pencil"></i> Edit</a>
										<a href="<?= site_url('cetakPendaftaran'); ?>" target="_blank" class="btn btn-primary btn-sm"><i class="fa fa-print"> Cetak</i></a>
									<?php else : ?>
										<a href="<?= site_url('cetakPendaftaran'); ?>" target="_blank" class="btn btn-primary btn-sm"><i class="fa fa-print"> Cetak</i></a>
									<?php endif; ?>
								</td>
							</tr>
						<?php endforeach; ?>
					</tbody>
				</table>
			</div>
		</div>

	</section>
</div>
