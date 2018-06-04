<?php
$host = "localhost";
$username = "root";
$password = "";
$db_name = "haidar";

$konek = new mysqli($host, $username, $password, $db_name);

if($konek->connect_error){
	die("Koneksi Gagal Karena : ". $konek->connect_error);
}
?>