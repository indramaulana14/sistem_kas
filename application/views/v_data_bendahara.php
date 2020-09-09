<!DOCTYPE html>
<html>
<head>
	<title>Input Data Bendahara</title>
</head>
<body>
	<center><?php echo anchor('data_bendahara/tambah','Tambah Data'); ?></center>
	<table style="margin:20px auto;" border="1">
		<tr>
			<th>No</th>
			<th>Id Bendahara</th>
			<th>NIS</th>
			<th>Nama</th>
			<th>Usernmae</th>
			<th>Password</th>
		</tr>
		<?php 
		$no = 1;
		foreach($bendahara as $u){ 
		?>
		<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $u->id_bendahara ?></td>
			<td><?php echo $u->nis ?></td>
			<td><?php echo $u->nama ?></td>
			<td><?php echo $u->username ?></td>
			<td><?php echo $u->password ?></td>
			<td>
			    <?php echo anchor('data_bendahara/edit/'.$u->id_bendahara,'Edit'); ?>
                <?php echo anchor('data_bendahara/hapus/'.$u->id_bendahara,'Hapus'); ?>
			</td>
		</tr>
		<?php } ?>
	</table>
</body>
</html>