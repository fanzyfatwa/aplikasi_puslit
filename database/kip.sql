-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 18, 2019 at 11:54 AM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kip`
--

-- --------------------------------------------------------

--
-- Table structure for table `fakultas`
--

CREATE TABLE `fakultas` (
  `id_fak` int(11) NOT NULL,
  `namafakultas` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fakultas`
--

INSERT INTO `fakultas` (`id_fak`, `namafakultas`) VALUES
(3, 'Fakultas Ushuluddin'),
(4, 'Fakultas Tarbiyah dan Keguruan'),
(5, 'Syariah dan Hukum'),
(6, 'Fakultas Dakwah dan Komunikasi'),
(7, 'Fakultas Abad dan Humaniora'),
(8, 'Fakultas Psikologi'),
(9, 'Fakultas Sains dan Teknologi'),
(10, 'Fakultas Ilmu Sosial dan Ilmu Politik');

-- --------------------------------------------------------

--
-- Table structure for table `jurusan`
--

CREATE TABLE `jurusan` (
  `id_jur` int(11) NOT NULL,
  `id_fak` int(11) NOT NULL,
  `namajurusan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jurusan`
--

INSERT INTO `jurusan` (`id_jur`, `id_fak`, `namajurusan`) VALUES
(1, 3, 'Aqidah dan Filsafat'),
(2, 3, 'Perbandingan Agama'),
(3, 3, 'Tafsir dan Hadits'),
(4, 3, 'Tasawuf Psikoterafi'),
(5, 4, 'Kependidikan Islam'),
(6, 4, 'Pendidikan Agama Islam'),
(7, 4, 'Pendidikan Bahasa Arab'),
(8, 4, 'Pendidikan Bahasa Inggris'),
(9, 4, 'Pendidikan Matematika'),
(10, 4, 'Pendidikan Biologi'),
(11, 4, 'Pendidikan Fisika'),
(12, 4, 'Pendidikan Kimia'),
(13, 4, 'Pendidikan Guru MI'),
(14, 4, 'Pendidikan Guru RA'),
(15, 5, 'Al-Ahwal Al-Syakhsiyah'),
(16, 5, 'Mu’amalah'),
(17, 5, 'Siyasah'),
(18, 5, 'Perb.Madzhab dan Hukum'),
(19, 5, 'Ilmu Hukum'),
(20, 5, 'Hukum Pidana Islam'),
(21, 5, 'Manajemen Keuangan Syari’ah'),
(22, 6, 'Bimbingan dan Penyuluhan Islam'),
(23, 6, 'Komunikasi dan Penyiaran Islam'),
(24, 6, 'Manajemen Dakwah'),
(25, 6, 'Pengembangan Masyarakat Islam'),
(26, 6, 'Ilmu Komunikasi Jurnalistik'),
(27, 6, 'Ilmu Komunikasi Humas'),
(28, 7, 'Sejarah dan Peradaban Islam'),
(29, 7, 'Bahasa dan Sastra Arab'),
(30, 7, 'Bahasa dan Sastra Inggris'),
(31, 7, 'D3 Terjemah Bahasa Inggris'),
(32, 8, 'Psikologi'),
(33, 9, 'Matematika'),
(34, 9, 'Biologi'),
(35, 9, 'Fisika'),
(36, 9, 'Kimia'),
(37, 9, 'Teknik Informatika'),
(38, 9, 'Pertanian'),
(39, 9, 'Teknik Elektro'),
(40, 10, 'Administrasi Negara'),
(41, 10, 'Manajemen'),
(42, 10, 'Sosiologi');

-- --------------------------------------------------------

--
-- Table structure for table `laporan`
--

CREATE TABLE `laporan` (
  `id_antara` int(10) NOT NULL,
  `id_pengajuan` int(10) NOT NULL,
  `no_regis` int(10) NOT NULL,
  `nip` varchar(50) NOT NULL,
  `nidn` varchar(50) NOT NULL,
  `fakultas` varchar(100) NOT NULL,
  `jurusan` varchar(50) NOT NULL,
  `nama_dosen` varchar(100) NOT NULL,
  `logbook` varchar(50) NOT NULL,
  `lap_uang60` varchar(50) NOT NULL,
  `naskah` varchar(50) NOT NULL,
  `artikel` varchar(50) NOT NULL,
  `hki` varchar(50) NOT NULL,
  `catatan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `laporan`
--

INSERT INTO `laporan` (`id_antara`, `id_pengajuan`, `no_regis`, `nip`, `nidn`, `fakultas`, `jurusan`, `nama_dosen`, `logbook`, `lap_uang60`, `naskah`, `artikel`, `hki`, `catatan`) VALUES
(5, 4, 201901, '-', '7654421', '', 'Teknik Informatika / Saintek', 'ALI RAHMAN', 'Ada', 'Ada', 'Ada', 'Submitted', 'Sudah Diajukan', 'ee'),
(6, 5, 201902, '-', '3612736127', '', 'Teknik Informatika / Saintek', 'Dian Saadilah', 'Ada', 'Ada', 'Ada', 'Accepted', 'Sudah Diajukan', 'selesai');

-- --------------------------------------------------------

--
-- Table structure for table `peneliti`
--

CREATE TABLE `peneliti` (
  `id_peneliti` int(10) NOT NULL,
  `id_pengajuan` int(10) NOT NULL,
  `no_regis` int(10) NOT NULL,
  `nama_dosen` varchar(50) NOT NULL,
  `nip` varchar(50) NOT NULL,
  `nidn` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pengajuan`
--

CREATE TABLE `pengajuan` (
  `id_pengajuan` int(10) NOT NULL,
  `no_regis` int(10) NOT NULL,
  `nip` varchar(50) DEFAULT NULL,
  `nidn` varchar(50) NOT NULL,
  `nama_dosen` varchar(50) NOT NULL,
  `id_fak` varchar(100) NOT NULL,
  `id_jur` varchar(100) NOT NULL,
  `file_prop` varchar(50) NOT NULL,
  `file_rab` varchar(50) NOT NULL,
  `file_turnitin` varchar(50) NOT NULL,
  `id_litap` varchar(50) NOT NULL,
  `status_litap` varchar(50) NOT NULL,
  `akun_sinta` varchar(50) NOT NULL,
  `akun_hki` varchar(50) NOT NULL,
  `nidn_br` varchar(50) NOT NULL,
  `tugas_bel` varchar(50) NOT NULL,
  `akun_digilib` varchar(50) NOT NULL,
  `catatan` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengajuan`
--

INSERT INTO `pengajuan` (`id_pengajuan`, `no_regis`, `nip`, `nidn`, `nama_dosen`, `id_fak`, `id_jur`, `file_prop`, `file_rab`, `file_turnitin`, `id_litap`, `status_litap`, `akun_sinta`, `akun_hki`, `nidn_br`, `tugas_bel`, `akun_digilib`, `catatan`) VALUES
(4, 201901, '-', '7654421', 'ALI RAHMAN', '', 'Teknik Informatika / Saintek', 'Ada', 'Ada', 'Ada', 'Ada', 'Reviewer', 'Terverifikasi', 'Ada', 'Terverifikasi', 'Iya', 'Ada', 'lanjoot'),
(5, 201902, '-', '3612736127', 'Dian Saadilah', '', 'Teknik Informatika / Saintek', 'Ada', 'Ada', 'Ada', 'Ada', 'Peneliti', 'Terverifikasi', 'Ada', 'Terverifikasi', 'Tidak', 'Ada', 'lengkapi yang belum'),
(6, 2019004, '-', '5846495240', 'Ferli', '4', '9', 'Ada', 'Ada', 'Ada', 'Ada', 'Peneliti', 'Terverifikasi', 'Ada', 'Terverifikasi', 'Iya', 'Ada', 'complete'),
(7, 201901, '-', '234897238947', 'Ferli', '9', '37', 'Tidak Ada', 'Tidak Ada', 'Tidak Ada', 'Tidak Ada', 'Administrator', 'Belum Terverifikasi', 'Tidak Ada', 'Belum Terverifikasi', 'Tidak', 'Tidak Ada', 'jj');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_pengguna` int(11) NOT NULL,
  `namalengkap` varchar(50) NOT NULL,
  `namapengguna` varchar(50) NOT NULL,
  `jeniskelamin` varchar(20) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `nohp` varchar(13) NOT NULL,
  `alamat` text NOT NULL,
  `katasandi` varchar(20) NOT NULL,
  `jabatan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_pengguna`, `namalengkap`, `namapengguna`, `jeniskelamin`, `tanggal_lahir`, `nohp`, `alamat`, `katasandi`, `jabatan`) VALUES
(7, 'administator', 'admin', 'pria', '2001-01-01', '08567426033', 'admin', 'admin', 'admin'),
(10, 'fanzy caesar plasentia', 'fanzyfatwa', 'pria', '1996-01-05', '08567426033', 'kosan budewi mantapp', 'limaangka', 'mahasiswa magang');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fakultas`
--
ALTER TABLE `fakultas`
  ADD PRIMARY KEY (`id_fak`);

--
-- Indexes for table `jurusan`
--
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`id_jur`),
  ADD KEY `id_fak` (`id_fak`);

--
-- Indexes for table `laporan`
--
ALTER TABLE `laporan`
  ADD PRIMARY KEY (`id_antara`),
  ADD KEY `id_pengajuan` (`id_pengajuan`);

--
-- Indexes for table `peneliti`
--
ALTER TABLE `peneliti`
  ADD PRIMARY KEY (`id_peneliti`),
  ADD KEY `id_pengajuan` (`id_pengajuan`);

--
-- Indexes for table `pengajuan`
--
ALTER TABLE `pengajuan`
  ADD PRIMARY KEY (`id_pengajuan`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_pengguna`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `fakultas`
--
ALTER TABLE `fakultas`
  MODIFY `id_fak` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `jurusan`
--
ALTER TABLE `jurusan`
  MODIFY `id_jur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
--
-- AUTO_INCREMENT for table `laporan`
--
ALTER TABLE `laporan`
  MODIFY `id_antara` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `peneliti`
--
ALTER TABLE `peneliti`
  MODIFY `id_peneliti` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pengajuan`
--
ALTER TABLE `pengajuan`
  MODIFY `id_pengajuan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_pengguna` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `jurusan`
--
ALTER TABLE `jurusan`
  ADD CONSTRAINT `jurusan_ibfk_1` FOREIGN KEY (`id_fak`) REFERENCES `fakultas` (`id_fak`);

--
-- Constraints for table `laporan`
--
ALTER TABLE `laporan`
  ADD CONSTRAINT `id_pengajuan` FOREIGN KEY (`id_pengajuan`) REFERENCES `pengajuan` (`id_pengajuan`);

--
-- Constraints for table `peneliti`
--
ALTER TABLE `peneliti`
  ADD CONSTRAINT `idx_pengajuan` FOREIGN KEY (`id_pengajuan`) REFERENCES `pengajuan` (`id_pengajuan`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
