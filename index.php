<?php
include_once("koneksi.php");
$query = "SELECT * FROM daftar";
$hasil = mysqli_query($conn, $query);
?>
<!DOCTYPE html>
<html>

<head>
    <title>Daftar HandPhone di AmandaCell</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=devicewidth, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/c
ss/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title> Daftar Toko Hp</title>
</head>

<body>
    <div class="alert alert-success text-center" role="alert">
        <h2>DATA HANDPHONE DI TOKO </h2>
    </div>
    <a href="tambahmerkhp.php" class="btn btn-primary
mb-1 mt-1"><i class="fas fa-user-plus mr2"></i>Tambah Merk</a>

    <table class="table table-bordered">
        <thead class="thead-light">
            <tr>
                <th scope="col">id</th>
                <th scope="col">merk</th>
                <th scope="col">type</th>
                <th scope="col">warna</th>
                <th scope="col">harga</th>
                <th scope="col">aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($data = mysqli_fetch_array($hasil)) { ?>
                <tr>
                    <th scope="row"> <?php echo $data['id']; ?>
                    </th>
                    <td> <?php echo $data['merk']; ?> </td>
                    <td> <?php echo $data['type']; ?> </td>
                    <td> <?php echo $data['warna']; ?> </td>
                    <td> <?php echo $data['harga']; ?> </td>
                    <td> <a href="ubahmerkhp.php?id=<?php echo
                                                    $data['id'] ?>">Edit</a> | <a href="hapusmerkhp.php?id=<?php echo
                                                                                                            $data['id'] ?>">Delete</a> </td>
                    </td>

                </tr>
            <?php } ?>
        </tbody>
    </table>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery3.2.1.slim.min.js" integrity="sha384-
KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJ
wFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.
9/umd/popper.min.js" integrity="sha384-
ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUib
X39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/
bootstrap.min.js" integrity="sha384-
JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1
MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>