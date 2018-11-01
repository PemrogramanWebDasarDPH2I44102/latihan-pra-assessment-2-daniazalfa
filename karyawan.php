<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action="createpaket.php">
<h2>login karyawan </h2>
	<tr>
		<td>nama :</td><br>
		<td><input type="text" name="nama"></td><br>
	</tr>
	<tr>
		<td>nip :</td><br>
		<td><input type="text" name="nip"></td>
	</tr><br>
	<tr>
 		<td><input style="width: 150px" type="submit" name="kirim" value="Login"></td>
 	</tr>
</form>
</body>
</html>
<?php
	if (isset($_POST['kirim'])) {
		session_start();
		include("koneksi.php");
		@$username = $_POST["username"]; //dania
		@$password = $_POST["password"]; //6701174129
		$sql = "SELECT * from karyawan";
		$result = mysqli_query($simpan, $sql);
		if (mysqli_num_rows($result) != 0) {
			//header("Location: dashboard.php");
		}else {
			echo "Login Gagal";
		}
	}
?>