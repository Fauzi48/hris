<?php 
include "../auth/koneksi.php"; 
?>
<!DOCTYPE html>
<head>
    <title>Dashboard HRIS</title>
</head>
<body>
<link rel="stylesheet" type="text/css" href="../css/login.css">
<div class="container">
  <div class="left">
    <div class="header">
<h2 class="animation a1">Fauzi Hidayat HR ver 1.0</h2>
</div>

<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan'] == "gagal"){
			echo "Login gagal! username dan password salah!";
		}else if($_GET['pesan'] == "logout"){
			echo "Anda telah berhasil logout";
		}
    }
    ?>
  <div class="form">
<form action="../auth/cek_login.php" method="post">
			<label>Username</label>
			<input type="text" name="username" class="form-field animation a3" placeholder="Masukkan Username " required="required">
            <br>
			<label>Password</label>
			<input type="password" name="password" class="form-field animation a4" placeholder="Masukkan Password " required="required">
            <br>
			<button class="animation a6">LOGIN</button>
</div>
  </div>
  <div class="right"></div>
</div>
			<br/>
			<br/>
			
		</form>

<br>
<!-- <input type="submit" value="login"> -->

</body>
</html>