<?php
$host = 'localhost';
$userdb = 'root';
$passdb = '';
$db = 'psaszaidanpasya';
$con = mysqli_connect($host, $userdb, $passdb, $db);

if(mysqli_connect_errno()) {
    echo "kesalahan koneksi : " . mysqli_connect_error() ;
    exit();
}
