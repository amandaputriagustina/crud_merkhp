<?php
include_once("koneksi.php");
$query = "SELECT * FROM daftar";

$hasil = mysqli_query($conn, $query);

while ($data = mysqli_fetch_array($hasil)) {
    echo $data['merk'] . "‹br/>";
}
