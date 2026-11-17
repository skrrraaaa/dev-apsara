<?php
$server = "localhost";
$username = "root";
$password = "";
$dbname = "pemesanan";

$koneksi = mysqli_connect($server, $username, $password, $dbname);

if (!$koneksi) {
    die("gagal" . mysqli_connect_error());
}
return $koneksi;
