<?php

$server = "localhost";
$user = "root";
$pass = "";
$database = "data_infaq";

$koneksi = mysqli_connect($server, $user, $pass, $database);

if (!$koneksi) {
    die("<script> alert('gagal tersambung dengan database')</script>");
}

?>