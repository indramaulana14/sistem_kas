<!DOCTYPE html>
<html>
<head>
	<title>Input Data Bendahara</title>
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
	<div class="container ">
		<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center" margin-top="500px">
				<h3></br></h3>
				<h1 class="">DATA BENDAHARA KELAS</h1>
				<h1 class="">SMK Manangga Pratama</h1>
			</div>
		<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center" style="padding-top: 800px;">
			<table class="table table-bordered table-striped table-hover" >
				<tr>
					<th>No</th>
					<th>Id Bendahara</th>
					<th>NIS</th>
					<th>Nama</th>
					<th>Usernmae</th>
					<th>Password</th>
					<th>Aksi</th>
				</tr>
				<?php 
				$no = 1;
				foreach($bendahara as $u){ 
				?>
				<tr>
					<td><?php echo $no++ ?></td>
					<td><?php echo $u->id_bendahara ?></td>
					<td><?php echo $u->nis ?></td>
					<td><?php echo $u->nama ?></td>
					<td><?php echo $u->username ?></td>
					<td><?php echo $u->password ?></td>
					<td>
		                <a class="btn btn-outline-info" href="<?= base_url('index.php/bendahara/data_bendahara/edit/'.$u->id_bendahara) ?>">Edit</a>
		                <a class="btn btn-outline-danger" href="<?= base_url('index.php/bendahara/data_bendahara/hapus/'.$u->id_bendahara) ?>">Hapus</a>
					</td>
				</tr>
				<?php } ?>
			</table>
			<a class="btn btn-outline-info" href="<?= base_url('index.php/bendahara/data_bendahara/tambah') ?>">Tambah data</a>
		</div>
	</div>
</body>
</html>