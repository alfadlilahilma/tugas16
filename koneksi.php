<?php
$host = "localhost"; // Ganti dengan nama server database Anda
$user = "root"; // Ganti dengan nama pengguna database Anda
$pass = ""; // Ganti dengan kata sandi database Anda
$database = "online_shop";

$koneksi=mysqli_connect($host, $user, $pass);
if ($koneksi){
    $buka=mysqli_select_db($koneksi, $database);
    echo "DATABASE INI BERHASIL";
    if (!$buka){
        echo "DATABASE TIDAK DAPAT TERHUBUNG";
    }
}else{
    echo "mysql tidak terhubung";
}
?>