<h4 style="font-family: arial margin:80px; color:white; sans-serif; font-weight: bold;font-size: 35px; text-align:center; height:90px;background:#c2185b;  line-height: 150px;
height: 150px;"> LOGIN</h4>
<div class="jumbotron jumbotron-fluid" style="">
<!-- <div class="jumbotron jumbotron-fluid" style="background-image: url('assets/img/p.jpg');background-size: cover;height: 700px; opacity: .8;"> -->
	<div class="container">
		
		<div id="login">
			<div class="row box">
				<div class="login-box-body">
						<div class="col text">
						<h2>TK Sirojut Tholibin</h2>
					</div>
					<form action="<?= site_url('login') ?>" method="post" enctype="multipart/form-data">
						<div class="form-group has-feedback">
							<span class="glyphicon glyphicon-user form-control-feedback"></span>
							<input type="text" id="username" placeholder="Username" name="username" class="form-control" value="<?= set_value('username') ?>">
							<?= form_error('username', '<small class="text-danger pl-3">', '</small>') ?>
						</div>

						<div class=" form-group has-feedback">
							<span class="glyphicon glyphicon-calendar form-control-feedback"></span>
							<input type="passwordD" id="password1" placeholder="Tgl_lahir Contoh:(1996-08-02)" name="tgl_lahir" class="form-control">
							<?= form_error('tgl_lahir', '<small class="text-danger pl-3">', '</small>') ?>
						</div>

						<div class="form-group ">
							<button type="submit" name="submit" class="btn btn btn-block"style="background:#c2185b; color:white;"><i class="fa fa-unlock" ></i> Login</button >
							<a href="<?= site_url('daftar-akun') ?>" name="submit" class="btn btn-block"style="background:#c2185b; color:white;"><i class="fa fa-unlock-alt"></i> Registrasi</a>
							<a href="<?= site_url('auth_user/dashboard') ?>" class="btn btn-block "style="background:#c2185b; color:white;"><i class="fa fa-home"></i> Beranda</a>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
