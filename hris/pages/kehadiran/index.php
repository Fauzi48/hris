<!DOCTYPE html>
<html>
<head>
	<title>DATA KEHADIRANKU</title>
</head>
<body>
<?php 
include '../../auth/koneksi.php';
?>
<h2>DATA KEHADIRANKU</h2>
<form method="post" action="tambah_aksi.php">
		<table>
			<tr>			
				<td>ID Absen</td>
				<td><input type="number" name="id_absen"></td>
			</tr>
			<tr>
				<td>ID Karyawan </td>
                <td><input type="text" name="id_karyawan"></td>
			</tr>
			<tr>
				<td>Tanggal </td>
				<td><input type="date" name="tgl"></td>
			</tr>
			<tr>
				<td>Jam Masuk </td>
                <td><input type="time" name="jm_msk">
            </td>
            </tr>
			<tr>
				<td>Jam Keluar</td>
				<td><input type="time" name="jm_klr"></td>
			</tr>
			<tr>
			<td></td>
			<td align="right"><input type="submit" value="INPUT"></td>
			</tr>		
		</table>
    </form>

	<form method="GET" action="index.php" style="text-align: left;">
		<label>CARI NAMA : </label>
		<input type="text" name="kata_cari" value="<?php if(isset($_GET['kata_cari'])) { echo $_GET['kata_cari']; } ?>"  />
		<button type="submit">Cari</button>
	</form>
	<?php 
if(isset($_GET['kata_cari'])){
	$kata_cari = $_GET['kata_cari'];
	echo "<b>Hasil pencarian : ".$kata_cari."</b>";
}
?>
	<table border="1">
		<tr>
			<th>ID Absen<br></th>
			<th>ID Karyawan	<br></th>
			<th>Tanggal	</th>
			<th>Jam Masuk	</th>
			<th>Jam Keluar	</th>
			<th>AKSI</th>
		</tr>
		<?php 

		$no = 1;
		$data = mysqli_query($koneksi,"select * from tbl_absensi");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $d['id_absen']; ?></td>
				<td><?php echo $d['id_karyawan']; ?></td>
				<td><?php echo $d['tgl']; ?></td>
				<td><?php echo $d['jm_msk']; ?></td>
				<td><?php echo $d['jm_klr']; ?></td>
				<td>
					<a href="edit.php?id_absen=<?php echo $d['id_absen']; ?>"><button>EDIT</button></a>
					<a href="hapus.php?id_absen=<?php echo $d['id_absen']; ?>"><button>HAPUS</button></a>
				</td>
			</tr>
			<?php 
		}
		?>
	</table>
	<br>
	<a href="../../dashboard/halaman_admin.php">Kembali</a>
</body>
</html>