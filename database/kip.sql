-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 08, 2019 at 11:42 AM
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
(3, 'Ushuluddin'),
(4, 'Tarbiyah dan Keguruan'),
(5, 'Syariah dan Hukum'),
(6, 'Dakwah dan Komunikasi'),
(7, 'Abad dan Humaniora'),
(8, 'Psikologi'),
(9, 'Sains dan Teknologi'),
(10, 'Ilmu Sosial dan Ilmu Politik');

-- --------------------------------------------------------

--
-- Table structure for table `jurusan`
--

CREATE TABLE `jurusan` (
  `id_jur` int(11) NOT NULL,
  `id_fak` int(10) NOT NULL,
  `namajurusan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jurusan`
--

INSERT INTO `jurusan` (`id_jur`, `id_fak`, `namajurusan`) VALUES
(1, 3, 'Aqidah dan Filsafat Islam'),
(2, 3, 'Perbandingan Agama'),
(3, 3, 'Ilmu Al-Qur’an dan Tafsir'),
(4, 3, 'Tasawuf Psikoterapi'),
(5, 4, 'Ilmu Hadits'),
(6, 4, 'Pendidikan Agama Islam'),
(7, 4, 'Pendidikan Bahasa Arab'),
(8, 4, 'Pendidikan Bahasa Inggris'),
(9, 4, 'Pendidikan Matematika'),
(10, 4, 'Pendidikan Biologi'),
(11, 4, 'Pendidikan Fisika'),
(12, 4, 'Pendidikan Kimia'),
(13, 4, 'Pendidikan Guru MI'),
(14, 4, 'Pendidikan Islam Anak Usia Dini'),
(15, 5, 'Hukum Keluarga (Ahwal AL-Syakhsiyah)'),
(16, 5, 'Hukum Ekonomi Syari’ah (Muamalah)'),
(17, 5, 'Hukum Tatanegara (Siyasah)'),
(18, 5, 'Perbandingan Madzab dan Hukum'),
(19, 5, 'Ilmu Hukum'),
(20, 5, 'Hukum Pidana Islam'),
(21, 5, 'Manajemen Keuangan Syari’ah'),
(22, 5, 'Akuntansi Syariah'),
(23, 6, 'Bimbingan Konseling Islam'),
(24, 6, 'Komunikasi dan Penyiaran Islam'),
(25, 6, 'Manajemen Dakwah'),
(26, 6, 'Pengembangan Masyarakat Islam'),
(27, 6, 'Ilmu Komunikasi Jurnalistik'),
(28, 6, 'Ilmu Komunikasi Humas'),
(29, 7, 'Sejarah dan Peradaban Islam'),
(30, 7, 'Bahasa dan Sastra Arab'),
(31, 7, 'Sastra Inggris'),
(32, 8, 'Psikologi'),
(33, 9, 'Matematika'),
(34, 9, 'Biologi'),
(35, 9, 'Fisika'),
(36, 9, 'Kimia'),
(37, 9, 'Teknik Informatika'),
(38, 9, 'Agroteknologi'),
(39, 9, 'Teknik Elektro'),
(40, 10, 'Administrasi Publik'),
(41, 10, 'Manajemen'),
(42, 10, 'Sosiologi'),
(43, 10, 'Ilmu Politik');

-- --------------------------------------------------------

--
-- Table structure for table `lapakhir`
--

CREATE TABLE `lapakhir` (
  `id_lapakhir` int(11) NOT NULL,
  `id_peneliti` int(20) NOT NULL,
  `nama_dosen` varchar(50) NOT NULL,
  `id_fak` int(11) NOT NULL,
  `id_jur` int(11) NOT NULL,
  `logbook` varchar(10) NOT NULL,
  `nomor_keg` int(10) NOT NULL,
  `nama_keg` varchar(20) NOT NULL,
  `tgl1` date NOT NULL,
  `capaian` varchar(50) NOT NULL,
  `kendala` varchar(50) NOT NULL,
  `link` varchar(50) NOT NULL,
  `rab` varchar(20) NOT NULL,
  `uraian` varchar(50) NOT NULL,
  `jumlah` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lapakhir`
--

INSERT INTO `lapakhir` (`id_lapakhir`, `id_peneliti`, `nama_dosen`, `id_fak`, `id_jur`, `logbook`, `nomor_keg`, `nama_keg`, `tgl1`, `capaian`, `kendala`, `link`, `rab`, `uraian`, `jumlah`) VALUES
(11, 1988012019, 'Ferli', 4, 9, 'Ada', 88261, 'pubg', '2019-02-03', 'chiken dinner', 'zone', 'www.tencent-gaming-buddy.com', 'Ada', 'booyah!', '100'),
(12, 9867, 'fanzyfatwa', 7, 29, 'Ada', 1, 'pubg', '2019-02-01', 'chiken dinner', 'zone', 'www.tencent-gaming-buddy.com', 'Tidak Ada', 'booyah!', '100'),
(13, 111, 'Ali Rahman', 5, 22, 'Ada', 88261, 'baksos', '2019-01-30', 'izin menteri', 'kades tak hadir', 'www.facebook.com', 'Tidak Ada', 'noooooooo', '100'),
(14, 76587, 'Husen atalas', 4, 5, 'Ada', 88261, 'baksos', '2019-01-02', 'chiken dinner', 'zone', 'www.tencent-gaming-buddy.com', 'Ada', 'noooooooo', '109');

-- --------------------------------------------------------

--
-- Table structure for table `laporan`
--

CREATE TABLE `laporan` (
  `id_antara` int(10) NOT NULL,
  `id_pengajuan` int(10) NOT NULL,
  `no_regis` int(10) NOT NULL,
  `nip` varchar(50) DEFAULT NULL,
  `nidn` varchar(50) DEFAULT NULL,
  `id_fak` varchar(100) NOT NULL,
  `id_jur` varchar(50) NOT NULL,
  `nama_dosen` varchar(100) NOT NULL,
  `logbook` varchar(50) NOT NULL,
  `lap_uang60` varchar(50) NOT NULL,
  `naskah` varchar(50) NOT NULL,
  `hki` varchar(50) NOT NULL,
  `catatan` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `laporan`
--

INSERT INTO `laporan` (`id_antara`, `id_pengajuan`, `no_regis`, `nip`, `nidn`, `id_fak`, `id_jur`, `nama_dosen`, `logbook`, `lap_uang60`, `naskah`, `hki`, `catatan`) VALUES
(15, 13, 20190201, '1230714839', '', '9', '37', 'Ali Rahman', 'Ada', 'Ada', 'Ada', 'Sudah Diajukan', ''),
(16, 22, 1532, '', '', '3', '2', 'yunanto', 'Tidak Ada', 'Ada', 'Ada', 'Sudah Diajukan', 'sssst'),
(17, 13, 20190201, '1230714839', '1111', '5', '22', 'Ali Rahman', 'Tidak Ada', 'Ada', 'Ada', 'Belum Diajukan', 'sssst');

-- --------------------------------------------------------

--
-- Table structure for table `pengajuan`
--

CREATE TABLE `pengajuan` (
  `id_pengajuan` int(10) NOT NULL,
  `id_peneliti` int(11) NOT NULL,
  `no_regis` int(10) NOT NULL,
  `nip` varchar(50) DEFAULT NULL,
  `nidn` varchar(50) DEFAULT NULL,
  `nama_dosen` varchar(50) NOT NULL,
  `id_fak` int(10) NOT NULL,
  `id_jur` int(10) NOT NULL,
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
  `catatan` text,
  `tahun` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengajuan`
--

INSERT INTO `pengajuan` (`id_pengajuan`, `id_peneliti`, `no_regis`, `nip`, `nidn`, `nama_dosen`, `id_fak`, `id_jur`, `file_prop`, `file_rab`, `file_turnitin`, `id_litap`, `status_litap`, `akun_sinta`, `akun_hki`, `nidn_br`, `tugas_bel`, `akun_digilib`, `catatan`, `tahun`) VALUES
(13, 111, 20190201, '1230714839', '1111', 'Ali Rahman', 5, 22, 'Tidak Ada', 'Tidak Ada', 'Tidak Ada', 'Tidak Ada', 'Administrator', 'Belum Terverifikasi', 'Tidak Ada', 'Belum Terverifikasi', 'Tidak', 'Tidak Ada', 'oh yeah', '2016'),
(14, 2342523, 3423, '317612', '234897238947', 'Dian Saadilah', 5, 15, 'Tidak Ada', 'Ada', 'Ada', 'Tidak Ada', 'Administrator', 'Terverifikasi', 'Ada', 'Terverifikasi', 'Tidak', 'Ada', '', '2017'),
(15, 1988012019, 89247918, '423', '12312', 'Aldy Rialdy', 9, 37, 'Ada', 'Ada', 'Ada', 'Ada', 'Peneliti', 'Terverifikasi', 'Ada', 'Terverifikasi', 'Iya', 'Ada', '', '2017'),
(16, 1988012019, 201902, '317612', '234897238947', 'Ferli', 4, 9, 'Ada', 'Ada', 'Ada', 'Ada', 'Peneliti', 'Terverifikasi', 'Ada', 'Terverifikasi', 'Iya', 'Ada', '', '2018'),
(19, 9867, 201901, '', '', 'fanzyfatwa', 7, 29, 'Ada', 'Ada', 'Ada', 'Tidak Ada', 'Administrator', 'Belum Terverifikasi', 'Ada', 'Terverifikasi', 'Iya', 'Tidak Ada', '', '2018'),
(20, 986799, 89247918, '', '', 'hasby ifkar', 8, 32, 'Ada', 'Ada', 'Ada', 'Ada', 'Peneliti', 'Terverifikasi', 'Ada', 'Terverifikasi', 'Tidak', 'Tidak Ada', '', '2018'),
(21, 2342523, 20190129, '', '', 'rizky sam', 10, 42, 'Tidak Ada', 'Tidak Ada', 'Ada', 'Ada', 'Peneliti', 'Belum Terverifikasi', 'Tidak Ada', 'Terverifikasi', 'Iya', 'Tidak Ada', '', '2018'),
(22, 76587, 1532, '', '', 'yunanto', 3, 2, 'Ada', 'Ada', 'Ada', 'Ada', 'Peneliti', 'Terverifikasi', 'Ada', 'Terverifikasi', 'Iya', 'Ada', '', '2019'),
(23, 76587, 111, '12421', '1244', 'Husen atalas', 4, 5, 'Ada', 'Ada', 'Ada', 'Ada', 'Peneliti', 'Terverifikasi', 'Ada', 'Terverifikasi', 'Iya', 'Ada', '', '2016'),
(24, 76534, 5345, '', '', 'Basil', 9, 37, 'Ada', 'Tidak Ada', 'Tidak Ada', 'Ada', 'Peneliti', 'Terverifikasi', 'Ada', 'Terverifikasi', 'Iya', 'Ada', '', '2016'),
(25, 76587, 111, '1232', '444', 'uloy', 4, 5, 'Ada', 'Ada', 'Ada', 'Ada', 'Administrator', 'Belum Terverifikasi', 'Tidak Ada', 'Belum Terverifikasi', 'Iya', 'Ada', '', '2016'),
(26, 34643, 54534, '143315', '452764', 'Ardicadel', 8, 32, 'Ada', 'Ada', 'Ada', 'Ada', 'Peneliti', 'Terverifikasi', 'Ada', 'Terverifikasi', 'Iya', 'Ada', '', '2018');

-- --------------------------------------------------------

--
-- Table structure for table `progres`
--

CREATE TABLE `progres` (
  `id_progres` int(11) NOT NULL,
  `id_peneliti` int(11) NOT NULL,
  `nama_dosen` varchar(50) NOT NULL,
  `pro_pub` varchar(50) NOT NULL,
  `upload_file` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `progres`
--

INSERT INTO `progres` (`id_progres`, `id_peneliti`, `nama_dosen`, `pro_pub`, `upload_file`) VALUES
(4, 9867, 'ali', 'published', 'Survey_on_Skin_Color_Techniques.pdf'),
(5, 1988012019, 'Ferli', 'draft', 'Cetak_Rencana_Studi_-_Portal_Akademik2.pdf'),
(6, 9867, 'fanzyfatwa', 'rejected', 'krs_semester7.zip');

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
  ADD PRIMARY KEY (`id_jur`);

--
-- Indexes for table `lapakhir`
--
ALTER TABLE `lapakhir`
  ADD PRIMARY KEY (`id_lapakhir`),
  ADD KEY `id_peneliti` (`id_peneliti`);

--
-- Indexes for table `laporan`
--
ALTER TABLE `laporan`
  ADD PRIMARY KEY (`id_antara`),
  ADD KEY `id_pengajuan` (`id_pengajuan`);

--
-- Indexes for table `pengajuan`
--
ALTER TABLE `pengajuan`
  ADD PRIMARY KEY (`id_pengajuan`),
  ADD UNIQUE KEY `nip` (`nip`,`nidn`,`nama_dosen`),
  ADD UNIQUE KEY `id_peneliti_2` (`nip`,`nidn`,`nama_dosen`,`id_fak`,`id_jur`),
  ADD UNIQUE KEY `id_peneliti_3` (`nip`,`nidn`,`nama_dosen`,`id_fak`,`id_jur`),
  ADD KEY `id_fak` (`id_fak`),
  ADD KEY `id_jur` (`id_jur`),
  ADD KEY `nip_2` (`nip`,`nidn`,`nama_dosen`);

--
-- Indexes for table `progres`
--
ALTER TABLE `progres`
  ADD PRIMARY KEY (`id_progres`),
  ADD KEY `id_peneliti` (`id_peneliti`),
  ADD KEY `id_peneliti_2` (`id_peneliti`);

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
  MODIFY `id_jur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
--
-- AUTO_INCREMENT for table `lapakhir`
--
ALTER TABLE `lapakhir`
  MODIFY `id_lapakhir` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `laporan`
--
ALTER TABLE `laporan`
  MODIFY `id_antara` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `pengajuan`
--
ALTER TABLE `pengajuan`
  MODIFY `id_pengajuan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `progres`
--
ALTER TABLE `progres`
  MODIFY `id_progres` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_pengguna` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `laporan`
--
ALTER TABLE `laporan`
  ADD CONSTRAINT `id_pengajuan` FOREIGN KEY (`id_pengajuan`) REFERENCES `pengajuan` (`id_pengajuan`);

--
-- Constraints for table `pengajuan`
--
ALTER TABLE `pengajuan`
  ADD CONSTRAINT `fakultas` FOREIGN KEY (`id_fak`) REFERENCES `fakultas` (`id_fak`),
  ADD CONSTRAINT `jurusan` FOREIGN KEY (`id_jur`) REFERENCES `jurusan` (`id_jur`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
