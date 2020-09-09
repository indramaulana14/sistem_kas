<!doctype html>
<html>
  	<head>
    	<title>Home Sistem Informasi Uang Kas</title>
		<link rel="stylesheet" type="text/css" href="<?= base_url ('assets/css/bootstrap.css') ?>">
		<script type="text/javascript" src="<?= base_url ('assets/js/jquery.js') ?>"></script>
		<script type="text/javascript" src="<?= base_url ('assets/js/bootstrap.js') ?>"></script>
  	</head>
 	<body>
	    <div>
			<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-info">
				<a class="navbar-brand">Sistem Informsi Uang Kas</a>
				<a class="btn btn-outline-light" href="<?= base_url('index.php/Login_admin') ?>">Logout</a>
			</nav>
		</div>
		<div class="container">
			<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center" margin-top="500px">
				<h3></br></h3>
				<h1 class="display-4">MANAJEMEN UANG KAS</h1>
				<h1 class="display-4">SMK Manangga Pratama</h1>
				<h4></br></h4>
				<p class="lead">Selamat datang di Sistem Informasi Uang Kas SMK Manangga Pratama.</br> Uang kas merupakan salahsatu kebutuhan bagi setiap kelas, dengan adanya uang kas, kebutuhan sehari-hari maupun kebutuhan kegiatan kelas dapat terpenuhi. Untuk itu mari lakasanakan kewajiban kita dengan membayar uang kas kelas tepat waktu.</p>
				<p class="lead">Untuk memuali, Silahkan Login terlebih dahulu!</p>
			</div>


			<div class="card-deck mb-3 text-center">
				<div class="card mb-4 shadow-sm">
					<div class="card-header">
						<h4 class="my-0 font-weight-normal">Kelola Data Wali Kelas</h4>
					</div>
					<div class="card-body">
						<h1 class="card-title pricing-card-title"></br></h1>
						<ul class="list-unstyled mt-3 mb-4">
							<li></br></li>
							<li></br></li>
							<li></br></li>
							<li></br></li>
						</ul>
						<a class="btn btn-info btn-lg btn-block" href="<?= base_url('index.php/Data_walikelas') ?>">Klik Disini</a>			
					</div>
				</div>

				<div class="card mb-4 shadow-sm">
					<div class="card-header">
						<h4 class="my-0 font-weight-normal">Kelola Data Bendahara</h4>
					</div>
					<div class="card-body">
						<h1 class="card-title pricing-card-title"></br></h1>
						<ul class="list-unstyled mt-3 mb-4">
							<li></br></li>
							<li></br></li>
							<li></br></li>
							<li></br></li>
						</ul>
						<a class="btn btn-info btn-lg btn-block" href="<?= base_url('index.php/Data_bendahara') ?>">Klik Disini</a>
					</div>
				</div>

				<div class="card mb-4 shadow-sm">
					<div class="card-header">
						<h4 class="my-0 font-weight-normal">Kelola Data Siswa</h4>
					</div>
					<div class="card-body">
						<h1 class="card-title pricing-card-title"></br></h1>
						<ul class="list-unstyled mt-3 mb-4">
							<li></br></li>
							<li></br></li>
							<li></br></li>
							<li></br></li>
						</ul>
						<a class="btn btn-info btn-lg btn-block" href="<?= base_url('index.php/Data_siswa') ?>">Klik Disini</a>
					</div>
				</div>
			</div>

			<footer class="pt-4 my-md-5 pt-md-5 border-top text-center">
				<p class="mt-5 mb-3 text-muted">&copy; SMK Manangga Pratama 2020</p>
			</footer>
		</div>
	</body>
</html>
