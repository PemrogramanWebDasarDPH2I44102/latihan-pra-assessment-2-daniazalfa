<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "pos";
$simpan = new mysqli($servername, $username, $password, $database);
if ($simpan->connect_error) {
    die("Connection failed: " . $simpan->connect_error);
}
?>