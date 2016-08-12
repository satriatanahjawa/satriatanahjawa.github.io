<?php 
    $host="localhost";
    $username="root";
    $password="desember";
    $db="snackstoragedb";
    $koneksi=mysql_connect ($host, $username, $password);
    $selectdb=mysql_select_db($db,$koneksi); 
?>