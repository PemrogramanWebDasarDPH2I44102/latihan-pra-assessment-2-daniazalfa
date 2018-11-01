<?php
include ("koneksi.php");
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h2>create paket</h2>
<form  method="POST">
	<tr>
		<td>nama : <input type="text" name="nama"></td>
	</tr><br>
	<tr>
		<td> tgl diterima : <input type="date" name="tgl">
		</td>
	</tr>
<br>
	<tr>
		<td>isi paket : <input type="text" name="isipaket"></td>
	</tr>
	<br>
	<tr>
		<td>sasaran paket: <input type="text" name="sasaranpaket"></td>
	</tr><br>
	<tr><td><input style="width: 150px" type="submit" name="kirim" value="kirim"></td></tr>
</form>
</body>
</html>
<?php
	if (isset($_POST['nama'])) {
	    $nama        = $_POST['nama'];
	    $tgl	= $_POST['tgl'];
	    $isipaket  	= $_POST['isipaket'];
	    $sasaranpaket		= $_POST['sasaranpaket'];
	    $sql = "INSERT INTO paket (nama, tanggaldatang,isipaket, sasaranpaket)
	            VALUES ('$nama','$tgl', '$isipaket', '$sasaranpaket')";
	    if (mysqli_query($simpan, $sql)) {
	        header("location: listdata.php");
	    }else {
	        echo "Error: " . $sql . "<br?" . mysqli_error($simpan);
	    }
	    mysqli_close($simpan);
	}
?>