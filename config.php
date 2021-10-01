<?php
$host       = "localhost";
$user       = "root";
$pass       = "";
$db         = "madam_rose";

$koneksi    = mysqli_connect($host, $user, $pass, $db);
if (!$koneksi) { //cek koneksi
    die("Tidak bisa terkoneksi ke database");
}
$id_bunga       = "";
$nama_bunga       = "";
$jenis_bunga     = "";
$harga_bunga   = "";
$sukses     = "";
$error      = "";

if (isset($_GET['op'])) {
    $op = $_GET['op'];
} else {
    $op = "";
}
if($op == 'delete'){
    $id_bunga         = $_GET['id_bunga'];
    $sql1       = "delete from mahasiswa where id_bunga = '$id_bunga'";
    $q1         = mysqli_query($koneksi,$sql1);
    if($q1){
        $sukses = "Berhasil hapus data";
    }else{
        $error  = "Gagal melakukan delete data";
    }
}
if ($op == 'edit') {
    $id_bunga         = $_GET['id_bunga'];
    $sql1       = "select * from data_bunga where id_bunga = '$id_bunga'";
    $q1         = mysqli_query($koneksi, $sql1);
    $r1         = mysqli_fetch_array($q1);
    $nama_bunga       = $r1['nama_bunga'];
    $harga_bunga    = $r1['harga_bunga'];
    $jenis_bunga   = $r1['jenis_bunga'];

    if ($q1){
        $sukses = " Data Berhasil Diubah";
    }else{
        $error = " Data Gagal Diubah";
    }

    }

if (isset($_POST['simpan'])) { //untuk create
    $id_bunga        = $_POST['id_bunga'];
    $nama_bunga       = $_POST['nama_bunga'];
    $harga_bunga     = $_POST['harga_bunga'];
    $jenis_bunga   = $_POST['jenis_bunga'];

    if ($id_bunga && $nama_bunga && $harga_bunga && $jenis_bunga) {
        if ($op == 'edit') { //untuk update
            $sql1       = "update data_bunga set id_bunga = '$id_bunga',nama_bunga='$nama_bunga',harga_bunga = '$harga_bunga',jenis_bunga='$jenis_bunga' where id_bunga = '$id_bunga'";
            $q1         = mysqli_query($koneksi, $sql1);
            if ($q1) {
                $sukses = "Data berhasil diupdate";
            } else {
                $error  = "Data gagal diupdate";
            }
        } else { //untuk insert
            $sql1   = "insert into data_bunga(id_bunga,nama_bunga,harga_bunga,jenis_bunga) values ('$id_bunga','$nama_bunga','$harga_bunga','$jenis_bunga')";
            $q1     = mysqli_query($koneksi, $sql1);
            if ($q1) {
                $sukses     = "Berhasil memasukkan data baru";
            } else {
                $error      = "Gagal memasukkan data";
            }
        }
    } else {
        $error = "Silakan masukkan semua data";
    }
}
?>