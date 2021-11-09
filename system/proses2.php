<?php
$server='localhost';
$user='root';
$psw='';
$dbname='penggajian';
$mysqli = mysqli_connect($server,$user,$psw,$dbname);
# koneksi Database
$koneksi = new mysqli($server,$user,$psw,$dbname);
$conn   = mysqli_connect ($server, $user, $psw, $dbname);
$connect = new mysqli($server, $user, $psw, $dbname);

?>