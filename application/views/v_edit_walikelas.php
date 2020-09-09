<!DOCTYPE html>
<html>
<head>
	<title>Edit Data Walikelas</title>
</head>
<body>
	<center>
		<h1>Edit Data Walikelas</h1>
		<h3>Edit Data</h3>
	</center>
	<?php foreach($walikelas as $u){ ?>
	<form action="<?php echo base_url(). 'index.php/data_walikelas/update'; ?>" method="post">
		<table style="margin:20px auto;">
			<tr>
				<td>Id Walikelas</td>
				<td>
					<input type="text" name="id_walikelas" value="<?php echo $u->id_walikelas ?>">
				</td>
			</tr>
			<tr>
				<td>Nama</td>
				<td><input type="text" name="nama" value="<?php echo $u->nama ?>"></td>
			</tr>
			<tr>
				<td>Username</td>
				<td><input type="text" name="usernmae" value="<?php echo $u->username ?>"></td>
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