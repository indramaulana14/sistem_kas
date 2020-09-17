<html>
<head>
	<title>Login Bendahara</title>
	<link rel="stylesheet" type="text/css" href="<?= base_url ('assets/css/bootstrap.css') ?>">
	<link rel="stylesheet" type="text/css" href="<?= base_url ('assets/css/signin.css') ?>">
	<script type="text/javascript" src="<?= base_url ('assets/js/jquery.js') ?>"></script>
	<script type="text/javascript" src="<?= base_url ('assets/js/bootstrap.js') ?>"></script>
</head>
	<body>
		<div>
			<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-info">
				<a class="navbar-brand">Sistem Informsi Uang Kas</a>
				<a class="btn btn-outline-light" href="<?= base_url('index.php/Home') ?>">Home</a>
			</nav>
		</div>
		<div class="container text-center">
			<div class="login-panel panel panel-default">
				<div class="panel-heading">
					<h1 class="h3 mb-3 font-weight-normal">Silahkan Login</h1>
				</div>
				<div class="panel-body">
					<form role="form" method="post" action="<?php echo base_url(); ?>index.php/bendahara/Login_bendahara/aksi_login" class="form-signin text-center">
						<?php
						if(!empty($notif)){
							echo'<div class="alert alert-danger">';
							echo 'Username dan Password salah!';
							echo '</div>';
						}
						?>
						<input type="text" name="username" class="form-control" placeholder="Masukan Username" autofocus>
						<input type="password" name="password" class="form-control" placeholder="Masukan Password">
						<div class="checkbox mb-3">
							<label>
								<input type="checkbox" value="remember-me"> Remember me
							</label>
						</div>
						<input type="submit" class="btn btn-lg btn-info btn-block" name="submit" value="Login">
						<p class="mt-5 mb-3 text-muted">&copy; SMK Manangga Pratama 2020</p>
					</form>
				</div>
			</div>
		</div>
	</body>
</html>