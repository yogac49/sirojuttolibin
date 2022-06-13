<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Dashboard
			<small>Control panel</small>
			<?php if ($pembayaran == "Belum Bayar") : ?>

				<h3>Selamat Datang <?= $namaLengkap ?> Status kamu Belum Bayar </h3>
			<?php elseif ($pembayaran == "Sudah Bayar") : ?>
				<h3>Selamat Datang <?= $namaLengkap ?> Status kamu Belum di konfirmasi </h3>
			<?php else : ?>
				<h3>Selamat Datang <?= $namaLengkap ?> Status kamu telah Aktif </h3>
			<?php endif; ?>
		</h1>
		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
			<li class="active">Dashboard</li>
		</ol>
	</section>

</div>
