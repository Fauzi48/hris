<!DOCTYPE html>
<html>
<head>
	<title>UPDATE DATA DOSEN</title>
</head>
<body>

	<h2>DATA KARYAWAN</h2>
	<br/>
	<a href="index.php">KEMBALI</a>
	<br/>
	<br/>
	<h3>EDIT DATA KARYAWAN</h3>

	<?php
	include '../../auth/koneksi.php';
	$id_karyawan = $_GET['id_karyawan'];
	$data = mysqli_query($koneksi,"select * from tbl_karyawan where id_karyawan='$id_karyawan'");
	while($d = mysqli_fetch_array($data)){
		?>
		<form method="post" action="update.php">
			<table>
				<tr>			
				<td>No.</td>
				<td><input type="number" name="id_karyawan" value="<?php echo $d['id_karyawan']; ?>"></td>
				<input type="hidden" name="id_karyawan" value="<?php echo $d['id_karyawan']; ?>">
			</tr>
			<tr>
				<td>Nama Karyawan </td>
				<td><input type="text" name="nm_karyawan" value="<?php echo $d['nm_karyawan']; ?>"></td>
			</tr>
			<tr>
				<td>Tgl Lahir </td>
				<td><input type="date" name="tgl_lahir" value="<?php echo $d['tgl_lahir']; ?>"></td>
			</tr>
			<tr>
				<td>Jenis Kelamin </td>
                <td><input type="text" name="j_kel" value="<?php echo $d['j_kel']; ?>">
            </td>
            </tr>
			<tr>
				<td>Alamat</td>
				<td><input type="text" name="alamat" value="<?php echo $d['alamat']; ?>"></td>
			</tr>
			<tr>
				<td>No. telp</td>
                <td><input type="text" name="no_telp" value="<?php echo $d['no_telp']; ?>"></td>
			</tr>
			<tr>
			<tr>
				<td>Jabatan</td>
                <td><input type="text" name="jabatan" value="<?php echo $d['jabatan']; ?>"></td>
			</tr>
			<tr>
				<td>Join Date</td>
                <td><input type="date" name="join_date" value="<?php echo $d['join_date']; ?>"></td>
			</tr>
			<tr>
			<tr>
				<td>End Date</td>
                <td><input type="date" name="end_date" value="<?php echo $d['end_date']; ?>"></td>
			</tr>
			<tr>
			<tr>
				<td>Status</td>
				<td><input type="text" name="status" value="<?php echo $d['status']; ?>"></td>
			</tr>
			<tr>
					<td></td>
					<td><input type="submit" value="SIMPAN"></td>
				</tr>		
			</table>
		</form>
		<?php 
	}
	?>

</body>
</html>