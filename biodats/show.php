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
    <title>Show Data</title>
</head>
<body>
    <?php 
    foreach ($biodata->show($_GET['id']) as $data) {
        $id = $data['id'];
        $nama = $data['nama'];
        $alamat = $data['alamat'];
        $tgl_lahir = $data['tgl_lahir'];
        $jenis_kelamin = $data['jenis_kelamin'];
        $agama = $data['agama'];
        $umur = $data['umur'];
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
                    <div class="card-header"><b><h1>Show Data</h1></b></div>
                        <div class="card-body">
                            <div class="form-group">
                            <table>
                            <tr>
                                <th>Nama : </th>
                                <td><input type="text" name="nama" class="form-control" value="<?php echo $nama; ?>"readonly></td>
                            </tr>
                            <tr>
                                <th>Alamat : </th>
                                <td><textarea name="alamat" cols="40" class="form-control" readonly><?php echo $alamat; ?></textarea></td>
                            </tr>
                            <tr>
                                <th>Tanggal Lahir : </th>
                                <td><input type="date" name="tgl_lahir" class="form-control" value="<?php echo $tgl_lahir; ?>" readonly></td>
                            </tr>
                            <tr>
                                            <th><label for="">Jenis Kelamin : </label></th>
                                            <td><input type='radio' name='jenis_kelamin' value='Laki-Laki'<?php if ($jenis_kelamin == 'Laki-Laki') {
                                                                                                                ?>checked<?php

                                                                                                                    } ?>>Laki-Laki</td>
                                            <td><input type='radio' name='jenis_kelamin' value='perempuan'<?php if ($jenis_kelamin == 'perempuan') {
                                                                                                                ?>checked<?php

                                                                                                                    } ?>>Perempuan</td>
                                        </tr>
                            <tr>
                                <th>Agama : </th>
                                <td><input type="text" name="agama" class="form-control" value="<?php echo $agama; ?>"readonly></td>
                            </tr>
                            <tr>
                                <th>Umur : </th>
                                <td><input type="text" name="nama" class="form-control" value="<?php echo $umur; ?>"readonly></td>
                            </tr>
                            </table>
                            <center><a href="index.php" class="btn btn-outline-success">Kembali</a></center>
                            
                            
                        </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>





