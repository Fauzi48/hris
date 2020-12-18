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


// menginput data ke database
mysqli_query($koneksi,"insert into tbl_karyawan values('$id_karyawan','$nm_karyawan','$tgl_lahir',
'$j_kel','$alamat','$no_telp','$jabatan','$join_date','$end_date','$status')");

// mengalihkan halaman kembali ke index.php
header("location:index.php");

?>