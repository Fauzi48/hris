<!DOCTYPE html>
<html>
<head>
	<title>Informasi Karyawan</title>
</head>
<body>
<?php 
include '../../auth/koneksi.php';
?>
<h2>DATA KARYAWAN</h2>
<form method="post" action="tambah_aksi.php">
		<table>
			<tr>			
				<td>No.</td>
				<td><input type="number" name="id_karyawan"></td>
			</tr>
			<tr>
				<td>Nama Karyawan </td>
                <td><input type="text" name="nm_karyawan"></td>
			</tr>
			<tr>
				<td>Tgl Lahir </td>
				<td><input type="date" name="tgl_lahir"></td>
			</tr>
			<tr>
				<td>Jenis Kelamin </td>
                <td><input type="text" name="j_kel">
            </td>
            
            </tr>
			<tr>
				<td>Alamat</td>
				<td><input type="text" name="alamat"></td>
			</tr>
			<tr>
				<td>No. telp</td>
                <td><input type="text" name="no_telp"></td>
			</tr>
			<tr>
			<tr>
				<td>Jabatan</td>
                <td><input type="text" name="jabatan"></td>
			</tr>
			<tr>
				<td>Join Date</td>
                <td><input type="date" name="join_date"></td>
			</tr>
			<tr>
			<tr>
				<td>End Date</td>
                <td><input type="date" name="end_date"></td>
			</tr>
			<tr>
			<tr>
				<td>Status</td>
                <td><input type="text" name="status"></td>
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
			<th>No.<br></th>
			<th>Nama Karyawan<br></th>
			<th>Tgl Lahir</th>
			<th>Jenis Kelamin</th>
			<th>Alamat</th>
            <th>No. telp</th>
            <th>Jabatan</th>
            <th>Join Date</th>
            <th>End Date</th>
            <th>Status</th>
			<th>AKSI</th>
		</tr>
		<?php 

		$no = 1;
		$data = mysqli_query($koneksi,"select * from tbl_karyawan");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $d['id_karyawan']; ?></td>
				<td><?php echo $d['nm_karyawan']; ?></td>
				<td><?php echo $d['tgl_lahir']; ?></td>
				<td><?php echo $d['j_kel']; ?></td>
				<td><?php echo $d['alamat']; ?></td>
				<td><?php echo $d['no_telp']; ?></td>
				<td><?php echo $d['jabatan']; ?></td>
				<td><?php echo $d['join_date']; ?></td>
				<td><?php echo $d['end_date']; ?></td>
				<td><?php echo $d['status']; ?></td>
				<td>
					<a href="edit.php?id_karyawan=<?php echo $d['id_karyawan']; ?>"><button>EDIT</button></a>
					<a href="hapus.php?id_karyawan=<?php echo $d['id_karyawan']; ?>"><button>HAPUS</button></a>
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