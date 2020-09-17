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
			<a class="btn btn-outline-light margin-auto" href="<?= base_url('index.php/admin/admin') ?>">Home</a>
			<a class="btn btn-outline-light" href="<?= base_url('index.php/admin/Login_admin') ?>">Logout</a>
		</nav>
	</div>
	<div class="container">
		<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center" margin-top="500px">
				<h3></br></h3>
				<h1>Edit Data Bendahara</h1>
		</div>
		<?php foreach($kas_ganjil as $u){ ?>
		<div class="login-panel panel panel-default">
			<form action="<?= base_url('index.php/kas_siswa/kas_ganjil/update') ?>" method="post">
				<table class="table">
					<tr>
						<td>NIS</td>
						<td>
							<input type="text" class="form-control" value="<?php echo $u->nis ?>">
						</td>
					</tr>
					<tr>
						<td>Nama</td>
						<td><input type="text" class="form-control" value="<?php echo $u->nama ?>"></td>
					</tr>
					<tr>
						<td>Juli</td>
						<td><input type="text" class="form-control" name="jul" value="<?php echo $u->jul ?>"></td>
					</tr>
					<tr>
						<td>Agustus</td>
						<td><input type="text" class="form-control" name="agu" value="<?php echo $u->agu ?>"></td>
					</tr>
					<tr>
						<td>September</td>
						<td><input type="text" class="form-control" name="sep" value="<?php echo $u->sep ?>"></td>
					</tr>
					<tr>
						<td>Oktober</td>
						<td><input type="text" class="form-control" name="okt" value="<?php echo $u->okt ?>"></td>
					</tr>
					<tr>
						<td>November</td>
						<td><input type="text" class="form-control" name="nov" value="<?php echo $u->nov ?>"></td>
					</tr>
					<tr>
						<td>Desember</td>
						<td><input type="text" class="form-control" name="des" value="<?php echo $u->des ?>"></td>
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