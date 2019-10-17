<?php
include 'database.php';
$biodata = new Biodata();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit</title>
</head>
<body>
    <?php
    foreach ($biodata->edit($_GET['id']) as $data) {
        $id = $data['id'];
        $nama = $data['nama'];
        $alamat = $data['alamat'];
        $tgl_lahir = $data['tgl_lahir'];
        $jenis_kelamin = $data['jenis_kelamin'];
        $agama = $data['agama'];
    }
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
                        <div class="card-body">
                            <div class="form-group">
                            
                        <form action="output.php?aksi=update" method="POST">
                                    <input type="hidden" name="id" value="<?php echo $id; ?>">
                                    <table>
                                        <tr>
                                            <th>Nama</th>
                                            <td><input type="text" name="nama" class="form-control" value="<?php echo $nama; ?>"required></td>
                                        </tr>
                                        <tr>
                                            <th>Alamat</th>
                                            <td><textarea name="alamat" class="form-control" required><?php echo $alamat; ?></textarea></td>
                                        </tr>
                                        <tr>
                                            <th>Tanggal Lahir</th>
                                            <td><input type="date" name="tgl_lahir" class="form-control" value="<?php echo $tgl_lahir; ?>"required></td>
                                        </tr>
                                        <tr>
                                            <th><label for="">Jenis Kelamin</label></th>
                                            <td><input type='radio' name='jenis_kelamin' value='Laki-Laki'<?php if ($jenis_kelamin == 'Laki-Laki') {
                                                                                                                ?>checked<?php

                                                                                                                    } ?>>Laki-Laki</td>
                                            <td><input type='radio' name='jenis_kelamin' value='perempuan'<?php if ($jenis_kelamin == 'perempuan') {
                                                                                                                ?>checked<?php

                                                                                                                    } ?>>Perempuan</td>
                                        </tr>
                                        <tr>
                                            <th>Agama</th>
                                            <td><select name="agama" class="form-control">
                                            <option value="Islam"<?php if ($agama == "Islam") { ?> selected <?php 
                                                                                                        } ?>> Islam </option>
                                            <option value="Budha"<?php if ($agama == "Budha") { ?> selected <?php 
                                                                                                        } ?>> Budha </option>
                                            <option value="Hindu"<?php if ($agama == "Hindu") { ?> selected <?php 
                                                                                                        } ?>> Hindu </option>
                                            <option value="Konghucu"<?php if ($agama == "Konghucu") { ?> selected <?php 
                                                                                                                } ?>> Konghucu </option>
                                            <option value="Kristen"<?php if ($agama == "Kristen") { ?> selected <?php 
                                                                                                            } ?>> Kristen </option>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th><input class="btn btn-success" type="submit" name="proses" value="Simpan"></th>
                                            <th><a href="index.php" class="btn btn-warning">Kembali</a></th>
                                        </tr>
                                    </table>
                                </form>
                                                    
                        </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>




