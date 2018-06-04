<?php
$dsn = 'mysql:host=localhost;dbname=haidar';
$username = 'root';
$password = '';
try{
    
    $con = new PDO($dsn, $username, $password);
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $ex) {
    echo 'Not Connected '.$ex->getMessage();
}
$tableContent = '';
$start ='';
$selectStmt = $con->prepare('SELECT * FROM resto');
$selectStmt->execute();
$resto = $selectStmt->fetchAll();

foreach ($resto as $resto)
{
    $tableContent = $tableContent.'<tr>'.
            '<td>'.$resto['namacustomer'].'</td>'
            .'<td>'.$resto['alamat'].'</td>'
            .'<td>'.$resto['tanggal'].'</td>'
            .'<td>'.$resto['bihunpedas'].'</td>'
            .'<td>'.$resto['nasigoreng'].'</td>'
            .'<td>'.$resto['baksourat'].'</td>'
            .'<td>'.$resto['miayamceker'].'</td>'
            .'<td>'.$resto['ayamgeprek'].'</td>'
            .'<td>'.$resto['sateayam'].'</td>'
            .'<td>'.$resto['totalbayar'].'</td>';
        
}

if(isset($_POST['search']))
{
$start = $_POST['start'];
$tableContent = '';
$selectStmt = $con->prepare('SELECT * FROM resto WHERE alamat like :start');
$selectStmt->execute(array(
        
         ':start'=>$start.'%'
    
));
$resto = $selectStmt->fetchAll();

foreach ($resto as $resto)
{
    $tableContent = $tableContent.'<tr>'.
            '<td>'.$resto['namacustomer'].'</td>'
            .'<td>'.$resto['alamat'].'</td>'
            .'<td>'.$resto['tanggal'].'</td>'
            .'<td>'.$resto['bihunpedas'].'</td>'
            .'<td>'.$resto['nasigoreng'].'</td>'
            .'<td>'.$resto['baksourat'].'</td>'
            .'<td>'.$resto['miayamceker'].'</td>'
            .'<td>'.$resto['ayamgeprek'].'</td>'
            .'<td>'.$resto['sateayam'].'</td>'
            .'<td>'.$resto['totalbayar'].'</td>';   
}   
}
?>
<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" href="css1/bootstrap.css">
        <title>Filter</title>  
        <style>
            table,tr,td
            {
               border: 1px solid #000; 
            }
            
            td{
                background-color: #ddd;
            }
        </style>   
    </head>
    <body>
      <div class="container">
        
        <form action="filter.php" method="POST">           
                <input type="text" name=" alamat" required >
            <input type="submit" name="search" value="Cari">            
            <table>
                <tr>          
                    <td>Nama Pembeli</td> 
                    <td>Alamat</td>
                    <td>Tanggal</td>
                    <td>Bihun Pedas</td>
                    <td>Nasi Goreng</td>
                    <td>Bakso Urat</td>  
                    <td>Mi Ayam Ceker</td> 
                    <td>Ayam Geprek</td>
                    <td>Sate Ayam</td>
                    <td>Total Bayar</td>
                </tr>                
                <?php                
                echo $tableContent;               
                ?>
            </table>
        </form>     
        <div>
    </body>    
</html>