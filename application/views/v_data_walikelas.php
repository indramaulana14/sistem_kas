<!DOCTYPE html>
<html>
<head>
	<title>Input Data Wali Kelas</title>
</head>
<body>
	<center><?php echo anchor('data_walikelas/tambah','Tambah Data'); ?></center>
	<table style="margin:20px auto;" border="1">
		<tr>
			<th>No</th>
			<th>Id Wali Kelas</th>
			<th>Nama</th>
			<th>Usernmae</th>
			<th>Password</th>
		</tr>
		<?php 
		$no = 1;
		foreach($walikelas as $u){ 
		?>
		<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $u->id_walikelas ?></td>
			<td><?php echo $u->nama ?></td>
			<td><?php echo $u->username ?></td>
			<td><?php echo $u->password ?></td>
			<td>
			    <?php echo anchor('data_walikelas/edit/'.$u->id_walikelas,'Edit'); ?>
                <?php echo anchor('data_walikelas/hapus/'.$u->id_walikelas,'Hapus'); ?>
			</td>
		</tr>
		<?php } ?>
	</table>
</body>
</html>