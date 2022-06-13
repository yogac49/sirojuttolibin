<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Register</title>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="<?= base_url('assets/') ?>fontawesome-free-5.13.0-web/css/all.min.css">
	<link rel="stylesheet" href="<?= base_url('assets/') ?>css/materialize.min.css">
	<link rel="stylesheet" href="<?= base_url('assets/') ?>css/daftar.css">
	<script src="<?= base_url('assets/') ?>js/jquery.js"></script>

</head>

<body>
	<!-- REGISTER -->
	<div class="container regis">
		<div class="row box">
			<div class="col m4 s12 judul-register">
				<h2>Welcome Back!</h2>
				<p>Pastikan koneksi anda stabil agar bisa melakukan registrasi atau login</p>
				<div class="buton-login">
					<button class="btn btn-primary masuk" type="submit" name="action">Masuk
					</button>
				</div>
				<a href="<?= site_url('user') ?>">Halaman utama</a>
			</div>
			<div class="col m8 s12 form">
				<h2>Create Account</h2>
				<div class="row">
					<div class="col offset-s2 s8 form-sign-in center-align">
						<a class="mobile-signin">Sign In</a>
					</div>
				</div>
				<form action=" <?= site_url('user-register') ?>" method="post">
					<div class="row regist">
						<div class="input-field col s12 ">
							<i class="material-icons prefix">person</i>
							<input id="username" type="text" name="username" value="<?= set_value('username'); ?>">

							<label class="username" for="username">Username</label>
						</div>

						<div class="input-field col s12 ">
							<i class="material-icons prefix">person</i>
							<input id="full_name" type="text" name="full_name" value="<?= set_value('full_name') ?>">
							<label class="name" for="full_name">Full Name</label>
						</div>
						<div class="input-field col s12">
							<i class="material-icons prefix">vpn_key</i>
							<input id="password" type="password" name="password1">
							<label for="password">Password</label>
						</div>

						<div class="input-field col s12 pass2">
							<i class="material-icons prefix">vpn_key</i>
							<input id="re-password" type="password" name="password2">
							<label for="re-password">Re type Password</label>
						</div>

						<div class="row center-align">
							<div class="col s12">
								<div class="buton register2">
									<button class="btn waves-effect waves-light resgiter-buton" type="submit" name="daftar">Daftar
									</button>
								</div>
							</div>

						</div>
					</div>
				</form>
			</div>
		</div>
	</div>


	<!-- REGISTER -->
	<div class="container sign-in">
		<div class="row box">
			<div class="col m4 s12 judul-signin">
				<h2>Register Account!</h2>
				<p>Pastikan koneksi anda stabil agar bisa melakukan registrasi atau login</p>
				<div class="buton-login daftar">
					<button class="btn btn-primary masuk" type="submit" name="action">DAFTAR
					</button>
				</div>
				<a href="<?= site_url('user') ?>">Halaman utama</a>
			</div>
			<div class="col m8 s12 form sigin-user">
				<h2 class="sign">SIGN IN</h2>
				<div class="row">
					<div class="col offset-s2 s8 form-sign-in center-align">
						<a class="mobile-regis">Register</a>
					</div>
				</div>
				<div class="row">
					<form action="<?= site_url('user-login') ?>" method="post">
						<div class="input-field col s12 ">
							<i class="material-icons prefix">person</i>
							<input id="username" type="text" name="username_login" value="<?= set_value('username_login') ?>">
							<label class="name" for="username">Username</label>
						</div>

						<div class="input-field col s12">
							<i class="material-icons prefix">vpn_key</i>
							<input id="password" type="password" name="password">
							<label for="password">Password</label>
						</div>

						<div class="row">
							<div class="col s12">
								<div class="buton register">
									<button class="btn waves-effect waves-light resgiter-buton" type="submit" name="login">SIGN IN
									</button>
								</div>
							</div>

						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

	<script src="<?= base_url('assets/') ?>js/materialize.min.js"></script>
	<script src="<?= base_url('assets/') ?>js/daftar.js"></script>

</body>

</html>
