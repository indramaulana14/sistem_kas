<!DOCTYPE html>
<html>
<head>
	<title>Edit Data Siswa</title>
</head>
<body>
	<center>
		<h1>Edit Data Siswa</h1>
	</center>
	<?php foreach($siswa as $u){ ?>
	<form action="<?php echo base_url(). 'index.php/data_siswa/update'; ?>" method="post">
		<table style="margin:20px auto;">
			<tr>
				<td>NIS</td>
				<td>
					<input type="text" name="nis" value="<?php echo $u->nis ?>">
				</td>
			</tr>
			<tr>
				<td>Nama</td>
				<td><input type="text" name="nama" value="<?php echo $u->nama ?>"></td>
			</tr>
			<tr>
				<td>Username</td>
				<td><input type="text" name="username" value="<?php echo $u->username ?>"></td>
			</tr>
            <tr>
				<td>Password</td>
				<td><input type="text" name="password" value="<?php echo $u->password ?>"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Simpan"></td>
			</tr>
		</table>
	</form>	
	<?php } ?>
</body>
</html>