<?php 
	$konek = new mysqli("localhost","root","","haidar");

	if($konek->connect_error){
		die("Koneksi Gagal Karena : ". $konek->connect_error);
	}
	
	$sql = "create table resto (namacustomer varchar(100), alamat varchar(100), tanggal date, order1 int, order2 int, order3 int, order4 int, order5 int, order6 int, jumlahtotal int, jumlahtotalbarang int, diskon int, jumlahbayar int, uanganda int, kembalian int)";
	if($konek->query($sql)){
		echo "Tabel Berhasil di Buat";
	}
	else{
		echo "Tabel Tidak Berhasil di Buat karena ".$konek->error;
	}
	$konek->close();
 ?>