<!DOCTYPE html>
<html>
<head>
	<title>Edit Data Bendahara</title>
	<link rel="stylesheet" type="text/css" href="<?= base_url ('assets/css/bootstrap.css') ?>">
		<script type="text/javascript" src="<?= base_url ('assets/js/jquery.js') ?>"></script>
		<script type="text/javascript" src="<?= base_url ('assets/js/bootstrap.js') ?>"></script>
</head>
<body>
	<div>
		<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-info">
			<a class="navbar-brand">Sistem Informsi Uang Kas</a>
			<a class="btn btn-outline-light margin-auto" href="<?= base_url('index.php/admin') ?>">Home</a>
			<a class="btn btn-outline-light" href="<?= base_url('index.php/Login_admin') ?>">Logout</a>
		</nav>
	</div>
	<div class="container">
		<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center" margin-top="500px">
				<h3></br></h3>
				<h1>Edit Data Wali Kelas</h1>
		</div>
		<?php foreach($walikelas as $u){ ?>
		<div class="login-panel panel panel-default">
			<form action="<?php echo base_url(). 'index.php/data_walikelas/update'; ?>" method="post">
				<table class="table">
					<tr>
						<td>ID Wali Kelas</td>
						<td>
							<input class="form-control" type="text" name="id_walikelas" value="<?php echo $u->id_walikelas ?>">
						</td>
					</tr>
					<tr>
						<td>Nama</td>
						<td><input type="text" class="form-control" name="nama" value="<?php echo $u->nama ?>"></td>
					</tr>
					<tr>
						<td>Username</td>
						<td><input type="text" class="form-control" name="username" value="<?php echo $u->username ?>"></td>
					</tr>
		            <tr>
						<td>Password</td>
						<td><input type="text" class="form-control" name="password" value="<?php echo $u->password ?>"></td>
					</tr>
					<tr>
						<td></td>
						<td><input type="submit" class="btn btn-info" value="Simpan"></td>
					</tr>
				</table>
			</form>
		</div>
		<?php } ?>
	</div>
</body>
</html>