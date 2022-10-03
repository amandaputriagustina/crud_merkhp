<?php
include_once("koneksi.php");
$id = $_POST['id'];
$merk = $_POST['merk'];
$type = $_POST['type'];
$warna = $_POST['warna'];
$harga = $_POST['harga'];
$query = "UPDATE daftar SET
merk='$merk',type='$type',warna='$warna',harga='$harga' WHERE id=$id";
$hasil = mysqli_query($conn, $query);
if ($hasil) {
    header('location:index.php');
} else {
    echo "Update data gagal";
}
