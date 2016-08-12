<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Untitled 1</title>
</head>
<?php 
include "koneksi.php";
?>
<body>
<?php 
$kd=$_POST['kd'];
$nm=$_POST['nm'];
$hj=$_POST['hj'];
$hb=$_POST['hb'];
$spl=$_POST['spl'];
$dtl=$_POST['dtl'];


?>
<form action="" method="post">
</form>
<?php 
$qs="INSERT into produk (kode_barang,nama_barang,hjual_barang,hbeli_barang,nama_suplier,detail_barang) Values ('$kd','$nm','$hj','$hb','$spl','$dtl')";
$hs=mysql_query($qs)or die(mysql_error());
?>
</body>

</html>
