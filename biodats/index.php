<?php
//menambah / memanggil file database.php
include 'database.php';
$db = new Database();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <title>Biodata</title>
</head>
<body>
<!-- content -->
<h1><center>Biodata</center></h1>
    <div class="container">
        <div class="row" style="padding:20px;">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Data Diri</div>
                    <center><a href="create.php">Input Biodata</a></center>
                    <table class="table table-borderless table-dark">
  <thead>
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>Tanggal Lahir</th>
        <th>Jenis Kelamin</th>
        <th>Agama</th>
        <th colspan="3">Aksi</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $biodata = new Biodata();
    $no = 1;
    foreach ($biodata->index() as $data) {
        ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $data['nama']; ?></td>
            <td><?php echo $data['alamat']; ?></td>
            <td><?php echo $data['tgl_lahir']; ?></td>
            <td><?php echo $data['jenis_kelamin']; ?></td>
            <td><?php echo $data['agama']; ?></td>
            <td><a href="show.php?id=<?php echo $data['id']; ?>">Show</a></td>
            <td><a href="edit.php?id=<?php echo $data['id']; ?>">Edit</a></td>
            <td><a href="output.php?id=<?php echo $data['id']; ?>&aksi=delete" onclick="return confirm("Apakah Anda Yakin Mau menghapus?");">Delete</a></td>
        </tr>
        <?php

    } ?>
  </tbody>
</table>   
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

