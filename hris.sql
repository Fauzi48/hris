-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 18 Des 2020 pada 07.22
-- Versi server: 10.4.6-MariaDB
-- Versi PHP: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hris`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_absensi`
--

CREATE TABLE `tbl_absensi` (
  `id_absen` int(5) NOT NULL DEFAULT 0,
  `id_karyawan` int(10) NOT NULL,
  `tgl` date DEFAULT NULL,
  `jm_msk` time DEFAULT NULL,
  `jm_klr` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_absensi`
--

INSERT INTO `tbl_absensi` (`id_absen`, `id_karyawan`, `tgl`, `jm_msk`, `jm_klr`) VALUES
(1, 1, '2020-12-06', '08:00:00', '17:00:00'),
(2, 1, '2020-12-07', '10:33:24', '10:33:25'),
(3, 2, '2020-12-15', '11:21:01', '11:21:03'),
(4, 1, '2020-12-18', '13:01:57', '13:02:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_karyawan`
--

CREATE TABLE `tbl_karyawan` (
  `id_karyawan` int(10) NOT NULL,
  `nm_karyawan` varchar(33) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `j_kel` varchar(11) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `no_telp` varchar(13) DEFAULT NULL,
  `jabatan` varchar(15) DEFAULT NULL,
  `join_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `status` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_karyawan`
--

INSERT INTO `tbl_karyawan` (`id_karyawan`, `nm_karyawan`, `tgl_lahir`, `j_kel`, `alamat`, `no_telp`, `jabatan`, `join_date`, `end_date`, `status`) VALUES
(1, 'Fauzi Hidayat ', '1999-02-03', 'Laki - Laki', 'TangSel ', '081224004299', 'BOD', '2020-12-06', '0000-00-00', 'Aktif'),
(2, 'Hasbi Nur Hayat', '1997-02-01', 'Laki - Laki', 'Subang', '081237213523', 'Staff', '2020-12-15', '0000-00-00', 'Aktif');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(33) NOT NULL DEFAULT '',
  `username` varchar(30) NOT NULL DEFAULT '',
  `password` varchar(30) NOT NULL DEFAULT '',
  `email_address` varchar(50) NOT NULL DEFAULT '',
  `level` varchar(20) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `nama`, `username`, `password`, `email_address`, `level`) VALUES
(1, 'Fauzi Hidayat', 'admin', 'admin', 'hfauzi397@gmail.com', 'admin'),
(2, 'User2', 'user', 'user', 'user@gmail.com', 'user');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_absensi`
--
ALTER TABLE `tbl_absensi`
  ADD PRIMARY KEY (`id_absen`),
  ADD KEY `id_karyawan` (`id_karyawan`);

--
-- Indeks untuk tabel `tbl_karyawan`
--
ALTER TABLE `tbl_karyawan`
  ADD PRIMARY KEY (`id_karyawan`);

--
-- Indeks untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tbl_absensi`
--
ALTER TABLE `tbl_absensi`
  ADD CONSTRAINT `tbl_absensi_ibfk_1` FOREIGN KEY (`id_karyawan`) REFERENCES `tbl_karyawan` (`id_karyawan`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
