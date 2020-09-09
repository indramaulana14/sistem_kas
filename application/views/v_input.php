<!DOCTYPE html>
<html>
<head>
	<title>Halaman Tambah Siswa</title>
</head>
<body>
	<center>
		<h3>Tambah Siswa</h3>
	</center>
	<form action="<?= base_url('index.php/crud/tambah_aksi') ?>" method="post">
		<table style="margin:20px auto;">
			<tr>
				<td>NIS</td>
				<td><input type="text" name="nis"></td>
			</tr>
			<tr>
				<td>Nama</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td>Username</td>
				<td><input type="text" name="username"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="text" name="password"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Tambah"></td>
			</tr>
		</table>
	</form>	
</body>
</html>