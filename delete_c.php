<?php
// membuat koneksi
$konek = new mysqli("localhost","root","","haidar");

// mengecek koneksi
if($konek->connect_error){
  die("Koneksi Gagal Karena : ". $konek->connect_error);
}

$Nama_Customer = $_GET['user'];
$sql = "DELETE FROM resto where Nama_Customer = '$user' ";
if($konek->query($sql)){
  echo "Data pesan BERHASIL dihapus!<br/>";
}else{
  echo "Data pesan GAGAL dihapus : ".$konek->error."<br/>";
}

$konek->close();
echo "<a href='tampil_data.php'>Daftar pesan</a>";
?>

<html>
 <body background='abc.jpg'> </html>