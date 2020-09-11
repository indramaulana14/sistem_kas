<!DOCTYPE html>
<html>
<head>
	<title>Halaman Tambah Bendahara</title>
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
				<h3>Tambah Bendahara</h3>
		</div>
		<form action="<?= base_url('index.php/data_bendahara/tambah_aksi') ?>" method="post">
			<table class="table">
				<tr>
					<td>Id Bendahara</td>
					<td><input type="text" class="form-control" name="id_bendahara"></td>
				</tr>
				<tr>
					<td>NIS</td>
					<td><input type="text" class="form-control" name="nis"></td>
				</tr>
				<tr>
					<td>Nama</td>
					<td><input type="text" class="form-control" name="nama"></td>
				</tr>
				<tr>
					<td>Username</td>
					<td><input type="text" class="form-control" name="username"></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="text" class="form-control" name="password"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" class="btn btn-info" value="Tambah"></td>
				</tr>
			</table>
		</form>
	</div>	
</body>
</html>