<?php
include '../database.php';
$database = new Database();
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
    foreach ($database->edit($_GET['id']) as $data) {
        $id = $data['id'];
        $nama = $data['nama'];
        $alamat = $data['alamat'];
        $tgl_lahir = $data['tgl_lahir'];
        $jenis_kelamin = $data['jenis_kelamin'];
        $agama = $data['agama'];
    }
    ?>
    <fieldset>
        <legend>Edit Data Siswa</legend>
        <form action="proses.php?aksi=update" method="POST">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <table>
                <tr>
                    <th>Nomor Induk Siswa</th>
                    <td><input type="number" name="nis" value="<?php echo $nis; ?>"required></td>
                </tr>
                <tr>
                    <th>Nama Siswa</th>
                    <td><input type="text" name="nama" value="<?php echo $nama; ?>"required></td>
                </tr>
                <tr>
                    <th>Alamat</th>
                    <td><textarea name="alamat" value="<?php echo $alamat; ?>"required></textarea></td>
                </tr>
                <tr>
                    <th><input type="submit" name="save" value="Simpan"></th>
                </tr>
            </table>
        </form>
    </fieldset>
</body>
</html>