<?php
	$konek = new mysqli("localhost","root","");
	if($konek->connect_error){
		die("Koneksi Gagal Karena : ". $konek->connect_error);
	}

	$sql = "Create Database haidar";
	if($konek->query($sql)){
		echo "Database Berhasil di Buat";
	}
	else{
		echo "Database Tidak Berhasil di Buat karena ".$konek->error;
	}
	$konek->close();
?>

