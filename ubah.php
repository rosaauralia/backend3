<?php
include "config.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Data</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

</head>

<body>
    <input type="hidden" name="id_bunga" id="id_bunga" value="<?php echo $row["id_bunga"] ?>">
    <div class="mx-auto">
    <div class="card">
        <div class="card-header">
            Ubah Data
        </div>
        <div class="card-body">
        <form action="" method="POST">
            <div class="mb-3 row">
                <label for="nim" class="col-sm-2 col-form-label">Id Bunga</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="id_bunga" name="id_bunga" value="<?php echo $id_bunga ?>">
                </div>
            </div>
                <div class="mb-3 row">
                    <label for="nama" class="col-sm-2 col-form-label">Nama Bunga</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nama_bunga" name="nama_bunga" value="<?php echo $nama_bunga ?>">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="alamat" class="col-sm-2 col-form-label">Harga Bunga</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="harga_bunga" name="harga_bunga" value="<?php echo $harga_bunga ?>">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="fakultas" class="col-sm-2 col-form-label">Jenis Bunga</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="jenis_bunga" name="jenis_bunga" value="<?php echo $jenis_bunga ?>">
                    </div>
                </div>
                <div class="col-12">
                    <input type="submit" name="simpan" value="Ubah Data" class="btn btn-warning" />
                    <a href="index.php"button" class="btn btn-primary">Kembali</button></a>
                </div>
        </form>
        </div>
    </div>
    </div>
</body>
</html>