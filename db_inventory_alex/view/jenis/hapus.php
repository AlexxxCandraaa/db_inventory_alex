<?php

$id_barang = $_GET['id_jenis'];
include '../../config/koneksi.php';
$query = mysqli_query($conn, "DELETE FROM barang where id_jenis='$id_jenis'");


if ($query) {
    echo "<script>alert('Data Sudah Berhasil Di Hapus')</script>";
    echo "<script>window.location.href='index.php'</script>";
} else {
    echo "<script>alert('Gagal Menghapus Data')</script>";
    echo "<script>window.location.href=''view_tambah.php'</script>";
}