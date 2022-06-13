<h4 style="font-family: arial margin:80px; color:white; sans-serif; font-weight: bold;font-size: 35px; text-align:center; height:90px;background:#c2185b;  line-height: 150px;
height: 150px;"> LOGIN</h4>
<div class="container">
		<div id="login" style="margin:100px auto">
			<div class="row box">
				<div class="login-box-body">
					<div class="col text">
						<h2>TK Sirojut Tholibin</h2>
					</div>
					<form action="<?= site_url('admin') ?>" method="post" enctype="multipart/form-data">
						<div class="form-group has-feedback">
							<span class="glyphicon glyphicon-user form-control-feedback"></span>
							<input type="text" id="username" placeholder="Username" name="username" class="form-control" value="<?= set_value('username') ?>">
							<?= form_error('username', '<small class="text-danger pl-3">', '</small>') ?>
						</div>

						<div class=" form-group has-feedback">
							<span class="fa fa-unlock-alt form-control-feedback"></span>
							<input type="password" id="password1" name="password" placeholder="Password" name="tgl_lahir" class="form-control">
							<?= form_error('password', '<small class="text-danger pl-3">', '</small>') ?>
						</div>

						<div class="form-group ">
							<button type="submit" name="submit" class="btn  btn-block" style="background:#c2185b; color:white;">Login</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
