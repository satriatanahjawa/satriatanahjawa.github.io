<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="en-us" http-equiv="Content-Language" />
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Untitled 1</title>
</head>

<body bgcolor="#CCCCCC">
<?php 
include "koneksi.php";

?>
<form action="svsuplier.php" method="post">

	<p align="center" style="font-size: xx-large; color: #008000; font-style: normal; font-variant: normal; font-weight: bold; font-family: Calibri; position: static; width: 874px;">INPUT DATA SUPLIER<table style="width: 60%; left: -247px; top: 0px;" align="center" class="auto-style1">
		<tr>
			<td style="width: 165px; font-family: CALIBri; font-weight: bold; color: #008000;" align="justify">TELEPON</td>
			<td style="width: 366px" align="justify">
			<input name="tlp" type="text" style="width: 270px; color: #008000;" /></td>
		</tr>
		<tr>
			<td style="width: 165px; font-family: CALIbri; font-weight: bold; color: #008000;" align="justify">NAMA</td>
			<td style="width: 366px" align="justify">
			<input name="nm" type="text" style="width: 270px; color: #008000;" /></td>
		</tr>
		<tr>
			<td style="width: 165px; font-family: CALIbri; font-weight: bold; color: #008000;" align="justify" valign="top">ALAMAT</td>
			<td style="width: 366px" align="justify">
			<input name="alm" type="text" style="width: 270px; color: #008000; height: 100px;" align="top" /></td>
		</tr>
		<tr>
			<td style="width: 165px">&nbsp;</td>
			<td style="width: 366px">
			<input name="sv" type="submit" value="SIMPAN" style="border-style: none; background-position: center; font-family: Calibri; font-weight: bold; color: #FFFFFF; height: 33px; width: 99px; background-image: none; background-repeat: no-repeat; background-attachment: fixed; background-color: #008000; line-height: normal;" /></td>
		</tr>
	</table>

	</p>

</form>

<label id="Label1"></label>

</body>
<?php mysql_close()?>
</html>
