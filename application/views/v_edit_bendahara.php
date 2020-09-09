<!DOCTYPE html>
<html>
<head>
	<title>Edit Data Bendahara</title>
</head>
<body>
	<center>
		<h1>Edit Data Bendahara</h1>
	</center>
	<?php foreach($bendahara as $u){ ?>
	<form action="<?php echo base_url(). 'index.php/data_bendahara/update'; ?>" method="post">
		<table style="margin:20px auto;">
			<tr>
				<td>Id Bendahara</td>
				<td>
					<input type="text" name="id_bendahara" value="<?php echo $u->id_bendahara ?>">
				</td>
			</tr>
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