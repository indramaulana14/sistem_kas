<!DOCTYPE html>
<html>
<head>
	<title>Membuat CRUD dengan CodeIgniter | MalasNgoding.com</title>
</head>
<body>
	<center><h1>Membuat CRUD dengan CodeIgniter | MalasNgoding.com</h1></center>
	<center><?php echo anchor('crud/tambah','Tambah Data'); ?></center>
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
			    <?php echo anchor('crud/edit/'.$u->nis,'Edit'); ?>
                <?php echo anchor('crud/hapus/'.$u->nis,'Hapus'); ?>
			</td>
		</tr>
		<?php } ?>
	</table>
</body>
</html>