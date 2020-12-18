<?php
// mengaktifkan session php
session_start();
 
// menghubungkan dengan koneksi
include 'koneksi.php';
 
// menangkap data yang dikirim dari form
$username = $_POST['username'];
$password = $_POST['password'];
 
// menyeleksi data admin dengan username dan password yang sesuai
$login = mysqli_query($koneksi,"select * from tbl_user where username='$username' and password='$password'");

// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);

// cek apakah username dan password di temukan pada database
if($cek > 0){
	$data = mysqli_fetch_assoc($login);

	if ($data['level']=="admin"){
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "admin";
		//alihkan ke halaman dashboard admin
		header("location:../dashboard/halaman_admin.php");

	} else if ($data['level']=="user"){
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "user";
		header("location:../dashboard/halaman_user.php");
	}else{
		echo "<script>alert('LOGIN GAGAL Username / Password Salah !'); window.location='../dashboard/index.php';</script>";
		// header("location:../dashboard/index.php?pesan=gagal");
	}
} else {
	echo "<script>alert('LOGIN GAGAL Username / Password Salah !'); window.location='../dashboard/index.php';</script>";
	// header("location:../dashboard/index.php?pesan=gagal");
}
?>