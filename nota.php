<html>
<head>
	<link href ="nota.css" rel = "stylesheet" type="text/css" media = "all" />
	<script type="text/javascript">
		
	</script>
</head>
<body>

	<div class="container">
		<h1> I.Y.H RESTO </h1>
		<h2> NOTA PEMBAYARAN </h2>
		<h2> ==================== </h2>	

<?php
$tgl_skrg = date("d-m-Y");

$host = "localhost";
$username = "root";
$password = "";
$db_name = "haidar";

$konek = new mysqli($host, $username, $password , $db_name);


if($konek->connect_error){
  die("Koneksi Gagal Karena : ". $konek->connect_error);
}else {

$user = $_GET['user'];

$sql = "select * from resto where Nama_Customer = '$user' ";
$data = $konek->query($sql);
echo "<table border='0'>";

if ($data->num_rows > 0){
	while ($row = $data->fetch_assoc()) {
		echo "<h3><tr>";
		echo "<td>TANGGAL </td>";
		echo "<td> : </td>";
		echo "<td> $tgl_skrg </td>";
		echo "</tr>";
		echo "<td></td>";
		echo "<tr>";
		echo "<td> NAMA PEMESAN </td>";
		echo "<td> : </td>";
		echo "<td>".$row['Nama_Customer']."</td>";
		echo "</tr>";
		echo "<td></td>";
		echo "<tr>";
		echo "<td> BIHUN PEDAS </td>";
		echo "<td> : </td>";
		echo "<td>".$row['order1']*12000;
		echo "</td>";
		echo "<td>".$row['order1']."</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td> NASI GORENG </td>";
		echo "<td> : </td>";
		echo "<td>".$row['order2']*14000;
		echo "</td>";
		echo "<td>".$row['order2']."</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td> BAKSO URAT </td>";
		echo "<td> : </td>";
		echo "<td>".$row['order3']*15000;
		echo "</td>";
		echo "<td>".$row['order3']."</td>";
		echo "<tr>";
		echo "<td> MI AYAM CEKER </td>";
		echo "<td> : </td>";
		echo "<td>".$row['order4']*15000;
		echo "</td>";
		echo "<td>".$row['order4']."</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td> AYAM GREPREK </td>";
		echo "<td> : </td>";
		echo "<td>".$row['order5']*10000;
		echo "</td>";
		echo "<td>".$row['order5']."</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td> SATE AYAM </td>";
		echo "<td> : </td>";
		echo "<td>".$row['order6']*10000;
		echo "</td>";
		echo "<td>".$row['order6']."</td>";
		echo "</tr>";
		echo "<td></td>";
		echo "<tr>";
		echo "<td><b> JUMLAH BARANG </td>";
		echo "<td><b> : </td>";
		echo "<td></td>";
		echo "<td><b>".$row['Jumlah_Barang'];
		echo "</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td><b> TOTAL HARGA </td>";
		echo "<td><b> : </td>";
		echo "<td></td>";
		echo "<td><b>".$row['Jumlah_Total'];
		echo "</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td><b> UANG ANDA </td>";
		echo "<td><b> : </td>";
		echo "<td></td>";
		echo "<td><b>".$row['Uang_Anda'];
		echo "</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td><b> KEMBALIAN </td>";
		echo "<td><b> : </td>";
		echo "<td></td>";
		echo "<td><b>".$row['Kembalian'];
		echo "</td>";
		echo "</tr>";
		
		echo "</table>";

	}	
}else{
	echo"Tidak dapat di cetak";
}
}
$konek->close();
?>
</div>
<h3><a href="#" onclick="window.print()"> Cetak </a> </h3>
</body>
</html>