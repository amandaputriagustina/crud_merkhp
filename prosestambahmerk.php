<?php
include_once("koneksi.php");
$merk = $_POST['merk'];
$type = $_POST['type'];
$warna = $_POST['warna'];
$harga = $_POST['harga'];
$query = "INSERT INTO daftar
(merk,type,warna,harga) VALUE
('$merk','$type','$warna','$harga')";

$hasil = mysqli_query($conn, $query);
if ($hasil) {
    header('location:index.php');
} else {
    echo "input data gagal";
}
