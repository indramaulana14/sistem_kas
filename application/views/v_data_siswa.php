<!DOCTYPE html>
<html>
<head>
	<title>Input Data Siswa</title>
</head>
<body>
	<center><?php echo anchor('data_siswa/tambah','Tambah Data'); ?></center>
	<table style="margin:20px auto;" border="1">
		<tr>
			<th>No</th>
			<th>NIS</th>
			<th>Nama</th>
			<th>Usernmae</th>
			<th>Password</th>
		</tr>
		<?php 
		$no = 1;
		foreach($siswa as $u){ 
		?>
		<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $u->nis ?></td>
			<td><?php echo $u->nama ?></td>
			<td><?php echo $u->username ?></td>
			<td><?php echo $u->password ?></td>
			<td>
			    <?php echo anchor('data_siswa/edit/'.$u->nis,'Edit'); ?>
                <?php echo anchor('data_siswa/hapus/'.$u->nis,'Hapus'); ?>
			</td>
		</tr>
		<?php } ?>
	</table>
</body>
</html>