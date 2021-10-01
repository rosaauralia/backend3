<?php

include "config.php"

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Bunga</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

</head>

<body>
    <div class="mx-auto">
        <!-- untuk memasukkan data -->
        <div class="card">
            <div class="card-header">
                Tambah Data
            </div>
            <div class="card-body">
                <?php
                if ($error) {
                ?>
                    <div class="alert alert-danger" role="alert">
                        <?php echo $error ?>
                    </div>
                <?php
                    header("refresh:5;url=index.php");//5 : detik
                }
                ?>
                <?php
                if ($sukses) {
                ?>
                    <div class="alert alert-success" role="alert">
                        <?php echo $sukses ?>
                    </div>
                <?php
                    header("refresh:5;url=index.php");
                }
                ?>
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
                        <input type="submit" name="simpan" value="Simpan Data" class="btn btn-primary" />
                    </div>
                </form>
            </div>
        </div>

        <!-- untuk mengeluarkan data -->
        <div class="card">
            <div class="card-header text-white bg-secondary">
                Data Bunga
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Id Bunga</th>
                            <th scope="col">Nama Bunga</th>
                            <th scope="col">Harga Bunga</th>
                            <th scope="col">Jenis Bunga</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql2   = "select * from data_bunga order by id_bunga desc";
                        $q2     = mysqli_query($koneksi, $sql2);
                        $urut   = 1;
                        while ($r2 = mysqli_fetch_array($q2)) {
                            $id_bunga         = $r2['id_bunga'];
                            $nama_bunga      = $r2['nama_bunga'];
                            $harga_bunga     = $r2['harga_bunga'];
                            $jenis_bunga   = $r2['jenis_bunga'];

                        ?>
                            <tr>
                                <th scope="row"><?php echo $urut++ ?></th>
                                <td scope="row"><?php echo $nama_bunga ?></td>
                                <td scope="row"><?php echo $harga_bunga ?></td>
                                <td scope="row"><?php echo $jenis_bunga ?></td>
                                <td scope="row">
                                    <a href="ubah.php" button" class="btn btn-warning">Ubah</button></a>
                                    <a href="index.php?op=delete&id=<?php echo $id?>" onclick="return confirm('Yakin hapus data?')"><button type="button" class="btn btn-danger">Hapus</button></a>            
                                </td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                    
                </table>
            </div>
        </div>
    </div>
</body>

</html>
