<?php
include 'koneksi.php';
$data=mysqli_query($simpan, "SELECT * FROM paket");
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h2>list paket</h2>
<table border="1">
	<tr>
		<th>nama</th>
		<th>tanggal diterima</th>
		<th>isi paket</th>
		<th>sasaran paket</th>
		<th> action</th>
		
	</tr>
	<?php
	while($baru=mysqli_fetch_assoc($data)) :?>
		<tr>
			<td><?php echo $baru["nama"]; ?></td>
			<td><?php echo $baru["tgl"]; ?></td>
			<td><?php echo $baru["isipaket"]; ?></td>
			<td><?php echo $baru["sasaranpaket"]; ?></td>
			<td><a href="hapus.php?id=<?php echo $baru['id']; ?>">hapus</a></td>

		</tr>
   <?php endwhile; ?>
</table>
</body>