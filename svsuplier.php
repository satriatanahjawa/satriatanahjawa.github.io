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
$tlp=$_POST['tlp'];
$nm=$_POST['nm'];
$alm=$_POST['alm'];

?>
<form action="" method="post">
</form>
<?php 
$qs="INSERT into suplier (tlp_suplier,nama_suplier,alamat_suplier) Values ('$tlp','$nm','$alm')";
$hs=mysql_query($qs)or die(mysql_error());
?>
</body>

</html>
