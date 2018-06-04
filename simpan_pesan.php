<?php
// membuat koneksi
$konek = new mysqli("localhost","root","","haidar");

// mengecek koneksi
if($konek->connect_error){
  die("Koneksi Gagal Karena : ". $konek->connect_error);
}	

$username = $_POST['username'];
$tanggal = $_POST['tanggal'];
$bayar = $_POST['bayar'];
$alamat = $_POST['alamat'];
$order1 = $_POST['order1'];
$order2 = $_POST['order2'];
$order3 = $_POST['order3'];
$order4 = $_POST['order4'];
$order5 = $_POST['order5'];
$order6 = $_POST['order6'];
$dibayar = $_POST['dibayar'];
$kembalian = $_POST['kembalian1'];
$Diskon = $_POST['diskon'];
$Total = $_POST['total'];
$totalbarang = $_POST['totalbarang'];

// membuat table pesan

$sql = "INSERT INTO resto (Nama_Customer,Alamat,Tanggal,order1,order2,order3,order4,order5,order6,Jumlah_Total,Jumlah_Barang,Diskon,Jumlah_Bayar,Uang_Anda,Kembalian)VALUES ('$username','$alamat','$tanggal','$order1','$order2','$order3','$order4','$order5','$order6','$Total','$totalbarang','$Diskon','$bayar','$dibayar','$kembalian')";
if($konek->query($sql)){
  echo "data customer BERHASIL dibuat!<br/>";
}else{
  echo "data customer GAGAL dibuat : ".$konek->error."<br/>";
}
$konek->close();
echo "<a href='tampil_data.php'>Daftar customer</a>";
?>

<html>
 <body background='abc.jpg'> </html>