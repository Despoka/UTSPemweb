<?php
$serverName = "localhost"; 
$userName = "root";
$password = "";
$dbName = "UTS-BADUDU";

//buat koneksi
$conn = mysqli_connect($serverName, $userName, $password, $dbName);

//cek koneksi
if (!$conn) {
    die("koneksi gagal");
}


?>