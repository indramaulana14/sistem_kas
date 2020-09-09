<!DOCTYPE html>
<html>
<head>
	<title>Halaman Bendahara</title>
</head>
<body>
	<h1>Login berhasil !</h1>
	<h2>Hai, <?php echo $this->session->userdata("nama"); ?></h2>
	<a href="<?php echo base_url('index.php/Login_bendahara/logout'); ?>">Logout</a>
</body>
</html>