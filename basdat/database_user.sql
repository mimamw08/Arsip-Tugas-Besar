-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 22 Jan 2021 pada 13.01
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `database_user`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `daftarmhs`
--

CREATE TABLE `daftarmhs` (
  `No` int(5) NOT NULL,
  `Nama` varchar(50) NOT NULL,
  `NIM` varchar(15) NOT NULL,
  `Jenis_Kelamin` varchar(20) NOT NULL,
  `Jurusan` varchar(15) NOT NULL,
  `Kelas` varchar(8) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `nohp` char(15) NOT NULL,
  `matkul` varchar(20) NOT NULL,
  `jam` char(10) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `daftarmhs`
--

INSERT INTO `daftarmhs` (`No`, `Nama`, `NIM`, `Jenis_Kelamin`, `Jurusan`, `Kelas`, `alamat`, `nohp`, `matkul`, `jam`, `email`) VALUES
(1, 'imam', '1103184089', 'pria', 'nguli', '12', 'padang', '082255470425', 'nguli', '12.00', 'imam.whidyarto@gmail.com'),
(2, 'M. Imam Whidyarto', '1103184089', 'pria', 'S1 Teknik Kompu', 'TK-42-03', 'Jl. Sukabirus', '082255470425', 'Desain Basis Data', '07.30', 'imam.whidyarto@gmail.com'),
(3, 'Desfitri Ramadhani', '1103184100', 'wanita', 'S1 Teknik Kompu', 'TK-42-03', 'Padang', '082287850108', 'Desain Basis Data', '07.30', 'desfitri.ramadhani@gmail.com'),
(4, 'Renny', '1143', 'wanita', 'Sistem Informas', 'SI-42-03', 'Jakarta', '0800', 'Desain Basis Data', '12.00', 'renny@gmail.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_alamat`
--

CREATE TABLE `tb_alamat` (
  `no` int(2) NOT NULL,
  `alamat_baru` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_email`
--

CREATE TABLE `tb_email` (
  `id_email` int(2) NOT NULL,
  `email_baru` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_jam`
--

CREATE TABLE `tb_jam` (
  `id_jam` int(11) NOT NULL,
  `jam_baru` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_matkul`
--

CREATE TABLE `tb_matkul` (
  `id_matkul` int(11) NOT NULL,
  `matkul_baru` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_nohp`
--

CREATE TABLE `tb_nohp` (
  `id_nohp` int(11) NOT NULL,
  `nohp` char(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `ID` int(11) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Nama` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`ID`, `Username`, `Password`, `Nama`) VALUES
(1, 'Admin', '123', 'admin'),
(2, 'Imam', '123', 'M. Imam W'),
(3, 'Dhani', '123', 'Desfitri Ramadhani'),
(4, 'Imam', '123', 'M. Imam Whidyarto'),
(5, 'Renny', '12345', 'Renny');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `daftarmhs`
--
ALTER TABLE `daftarmhs`
  ADD PRIMARY KEY (`No`),
  ADD UNIQUE KEY `Nama` (`Nama`),
  ADD KEY `alamat` (`alamat`),
  ADD KEY `nohp` (`nohp`),
  ADD KEY `matkul` (`matkul`),
  ADD KEY `jam` (`jam`),
  ADD KEY `email` (`email`);

--
-- Indeks untuk tabel `tb_alamat`
--
ALTER TABLE `tb_alamat`
  ADD PRIMARY KEY (`no`),
  ADD KEY `alamat_baru` (`alamat_baru`);

--
-- Indeks untuk tabel `tb_email`
--
ALTER TABLE `tb_email`
  ADD PRIMARY KEY (`id_email`),
  ADD KEY `email_baru` (`email_baru`);

--
-- Indeks untuk tabel `tb_jam`
--
ALTER TABLE `tb_jam`
  ADD PRIMARY KEY (`id_jam`),
  ADD KEY `jam_baru` (`jam_baru`);

--
-- Indeks untuk tabel `tb_matkul`
--
ALTER TABLE `tb_matkul`
  ADD PRIMARY KEY (`id_matkul`),
  ADD KEY `matkul_baru` (`matkul_baru`);

--
-- Indeks untuk tabel `tb_nohp`
--
ALTER TABLE `tb_nohp`
  ADD PRIMARY KEY (`id_nohp`),
  ADD KEY `nohp` (`nohp`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `Nama` (`Nama`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `daftarmhs`
--
ALTER TABLE `daftarmhs`
  MODIFY `No` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tb_alamat`
--
ALTER TABLE `tb_alamat`
  MODIFY `no` int(2) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_email`
--
ALTER TABLE `tb_email`
  MODIFY `id_email` int(2) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_jam`
--
ALTER TABLE `tb_jam`
  MODIFY `id_jam` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_matkul`
--
ALTER TABLE `tb_matkul`
  MODIFY `id_matkul` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_nohp`
--
ALTER TABLE `tb_nohp`
  MODIFY `id_nohp` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `daftarmhs`
--
ALTER TABLE `daftarmhs`
  ADD CONSTRAINT `daftarmhs_ibfk_1` FOREIGN KEY (`No`) REFERENCES `tb_user` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_alamat`
--
ALTER TABLE `tb_alamat`
  ADD CONSTRAINT `tb_alamat_ibfk_1` FOREIGN KEY (`alamat_baru`) REFERENCES `daftarmhs` (`alamat`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_email`
--
ALTER TABLE `tb_email`
  ADD CONSTRAINT `tb_email_ibfk_1` FOREIGN KEY (`email_baru`) REFERENCES `daftarmhs` (`email`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_jam`
--
ALTER TABLE `tb_jam`
  ADD CONSTRAINT `tb_jam_ibfk_1` FOREIGN KEY (`jam_baru`) REFERENCES `daftarmhs` (`jam`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_matkul`
--
ALTER TABLE `tb_matkul`
  ADD CONSTRAINT `tb_matkul_ibfk_1` FOREIGN KEY (`matkul_baru`) REFERENCES `daftarmhs` (`matkul`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_nohp`
--
ALTER TABLE `tb_nohp`
  ADD CONSTRAINT `tb_nohp_ibfk_1` FOREIGN KEY (`nohp`) REFERENCES `daftarmhs` (`nohp`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
