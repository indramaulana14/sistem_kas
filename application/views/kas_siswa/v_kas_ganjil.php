<!DOCTYPE html>
<html>
<head>
	<title>Kas XII RPL 2</title>
	<link rel="stylesheet" type="text/css" href="<?= base_url ('assets/css/bootstrap.css') ?>">
	<script type="text/javascript" src="<?= base_url ('assets/js/jquery.js') ?>"></script>
	<script type="text/javascript" src="<?= base_url ('assets/js/bootstrap.js') ?>"></script>
</head>
<body>
	<div>
		<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-info">
			<a class="navbar-brand">Sistem Informsi Uang Kas</a>
			<a class="btn btn-outline-light margin-auto" href="<?= base_url('index.php/bendahara/dasbor_bendahara') ?>">Home</a>
			<a class="btn btn-outline-light" href="<?= base_url('index.php/bendahara/Login_bendahara') ?>">Logout</a>
		</nav>
	</div>
	<div class="container ">
		<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center" margin-top="500px">
				<h3></br></h3>
				<h1 class="">DATA KAS XII RPL 2</h1>
				<h2 class="">Semester Ganjil</h2>
			</div>
		<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center" style="padding-top: 800px;">
			<table class="table table-bordered table-striped table-hover" >
				<tr>
					<thead bgcolor=#17a2b8 >
						<th>No</th>
						<th>NIS</th>
						<th>Nama</th>
						<th>Jul</th>
						<th>Agu</th>
						<th>Sep</th>
						<th>Okt</th>
						<th>Nov</th>
						<th>Des</th>
						<th>Jumlah</th>
						<th>Keterangan</th>
						<th>Aksi</th>
					</thead>
				</tr>
				<?php 
				$no = 1;
				foreach($kas_ganjil as $u){ 
				?>
				<tr>
					<td><?php echo $no++ ?></td>
					<td><?php echo $u->nis ?></td>
					<td><?php echo $u->nama ?></td>
					<td><?php echo $u->jul ?></td>
					<td><?php echo $u->agu ?></td>
					<td><?php echo $u->sep ?></td>
					<td><?php echo $u->okt ?></td>
					<td><?php echo $u->nov ?></td>
					<td><?php echo $u->des ?></td>
					<td><?php echo $u->jumlah ?></td>
					<td><?php echo $u->keterangan ?></td>
					<td>
		                <a class="btn btn-outline-info" href="<?= base_url('index.php/kas_siswa/kas_ganjil/edit/'.$u->nis) ?>">Edit</a>
		                <a class="btn btn-outline-danger" href="<?= base_url('index.php/kas_siswa/kas_ganjil/hapus/'.$u->nis) ?>">Hapus</a>
					</td>
				</tr>
				<?php } ?>
			</table>
			<a class="btn btn-outline-info" href="<?= base_url('index.php/kas_siswa/kas_ganjil/tambah_kas_siswa') ?>">Tambah Data</a>
			<a class="btn btn-outline-info" href="<?= base_url('index.php/kas_siswa/kas_ganjil/edit') ?>">Edit Data</a>
		</div>
	</div>
</body>
</html>