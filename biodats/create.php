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
                            <form action="output.php?aksi=tambah" method="POST">
                            <label for="">Nama</label>
                            <input type="text" name="nama" placeholder="Nama" class="form-control">                 
                            </div>

                            <div>
                            <label for="">Alamat</label>
                            <textarea name="alamat" row="5" class="form-control"></textarea>
                            </div><br>

                            <div>
                            <label for="">Tanggal Lahir</label>
                            <input type="date" name="tgl_lahir" row="5" class="form-control"></input>
                            </div><br>

                            <div>
                            <label for="">Jenis Kelamin</label><br>
                            <input type='radio' name='jenis_kelamin' value='Laki-Laki'/>Laki-Laki
                            <input type='radio' name='jenis_kelamin' value='perempuan' />Perempuan</p>
                            </div>

                             <div>
                            <label for="">Agama</label>
                            <select name="agama">
                            <option value = "Islam">Islam</option>
                            <option value = "Budha">Budha</option>
                            <option value = "Hindu">Hindu</option>
                            <option value = "Konghucu">Konghucu</option>
                            <option value = "Kristen">Kristen</option>
                            </select>
                            </div><br>

                            <input type="submit" name="proses" value="Simpan" class="btn btn-outline-success">
                            <input type="reset" value="Reset" class="btn btn-outline-danger">
                            </form>
                            
                        </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

