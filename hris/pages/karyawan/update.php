<?php 
// koneksi database
include '../../auth/koneksi.php';

// menangkap data yang di kirim dari form
$id_karyawan = $_POST['id_karyawan'];
$nm_karyawan = $_POST['nm_karyawan'];
$tgl_lahir = $_POST['tgl_lahir'];
$j_kel = $_POST['j_kel'];
$alamat = $_POST['alamat'];
$no_telp = $_POST['no_telp'];
$jabatan = $_POST['jabatan'];
$join_date = $_POST['join_date'];
$end_date = $_POST['end_date'];
$status = $_POST['status'];

// update data ke database
mysqli_query($koneksi,"update tbl_karyawan set id_karyawan='$id_karyawan',
 nm_karyawan='$nm_karyawan', tgl_lahir='$tgl_lahir',
j_kel='$j_kel', alamat='$alamat', no_telp='$no_telp', jabatan='$jabatan',
join_date='$join_date', end_date='$end_date', status='$status'
 where id_karyawan='$id_karyawan'");

// mengalihkan halaman kembali ke index.php
header("location:index.php");

?>