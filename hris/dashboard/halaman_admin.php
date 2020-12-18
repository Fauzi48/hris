<!DOCTYPE html>
<head>
    <title>Fauzi Hidayat HR ver 1.0</title>
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="../js/jam_server.js"></script>
	<script>
		$(function() {
			$("#tanggal").datepicker({
					dateFormat : 'yy-mm-dd'
			});
	});
	</script>
</head>
<body>
<div id="wrap">
            <div id="header">
				<table>
					<tr>
					<td colspan="10" align="center"><h1>Fauzi Hidayat HR ver 1.0</h1></td>
					</tr>
				</table>
            </div>
			<div class="row">
                <div class="col-3 col-m-5">
                    <div id="silebar">
                        <div id="silebar">
						<table>
					<tr>
					<td><a href="#">Karyawan<br></a>
				<a href="../pages/karyawan/index.php" >Informasi Karyawan</a>
					</td>
					<td align="center"><a href="#">Kehadiran<br></a>
					<a href="../pages/kehadiran/index.php" >Data Kehadiranku</a>
					</td>
					</tr>
				</table>
                        </div>
				<div class="col-9 col-m-7">
                    <div id="konten">
                        <div class="col-12 col-m-12">
<link rel="stylesheet" type="text/css" href="../css/fauzi.css">
    <table border=1>
    <?php 
		include '../auth/koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"SELECT nm_karyawan, DATE_FORMAT(tgl,'%d-%m-%Y') AS tanggal ,jm_msk,jm_klr
		FROM tbl_karyawan, tbl_absensi ORDER BY id_absen DESC LIMIT 1
				
        ");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td colspan="10" align="center"><h1>Form Absen</h1></td>
			</tr>
			<tr class="hide_all">
				<td rowspan="10"><img src="../img/fauzi.png" style="width:150px;height:220px";></td>
				</tr>
				<tr class="hide_all">
				<td></td>
				<td><?php echo $d['nm_karyawan']; ?></td>
                </tr>
				<tr class="hide_all">
				<td></td>
				<td><?php echo $d['tanggal']; ?></td>
				</tr>
				<tr class="hide_all">
				<td></td>
                <td><?php echo "<b>IN </b>"; echo $d['jm_msk'];  echo "<b>    OUT</b> "; echo $d['jm_klr']; ?></td>
				</tr>
				<tr class="hide_all">
				<td></td>
				<td>	
				<h1><span id="jamServer"><?php echo date('H:i:s') ;?></span></h1>
				<script type="text/javascript" src="../js/jam_server.js"></script>
				</td>
				</tr>
				<tr class="hide_all">
				<td></td>
				<td>
					<center><h4><button type="submit" value="absen" >Absen</button></h4></center>
						<!-- <a href="hapus.php?no_urut_dosen=<?php echo $d['no_urut_dosen']; ?>">HAPUS</a> -->
				</td>
                </tr>
			</tr>
			<?php 
		}
		?>
    </table>
	</div>
                    </div>
                </div>
            </div>
			<div style="clear:both"></div>
            <div class="row">
                <div id="footer">
                    <div id="text">
						<table>
							<tr>
								<td>
						<footer>&copy; Copyright 2020 Fauzi Hidayat | All Rights Reserved</footer>
	</tr>
	</td>
								</table>
					</div>
                </div>
            </div>
        </div>
</body>
</html>