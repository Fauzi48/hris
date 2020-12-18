<?php 
// koneksi database
include '../../auth/koneksi.php';

// menangkap data no urut dosen yang di kirim dari url
$id_karyawan = $_GET['id_karyawan'];


// menghapus data dari database
mysqli_query($koneksi,"delete from tbl_karyawan where id_karyawan='$id_karyawan'");

// mengalihkan halaman kembali ke index.php
header("location:index.php");

?>