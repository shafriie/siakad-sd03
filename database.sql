-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Aug 27, 2018 at 06:39 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 5.6.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `akademik_sd`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_absenguru`
--

CREATE TABLE `tbl_absenguru` (
  `id` int(11) NOT NULL,
  `bulan` varchar(50) NOT NULL,
  `tahun` int(11) NOT NULL,
  `dokumen` text NOT NULL,
  `catatan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_absenguru`
--

INSERT INTO `tbl_absenguru` (`id`, `bulan`, `tahun`, `dokumen`, `catatan`) VALUES
(9, 'Januari', 2018, 'c62115aa534b8c41c3eaa657163e4c0a.xlsx', 'ASDASDSA'),
(10, 'Mei', 2018, '65a30d1c5bc98cbb6079f2c178e3723b.xlsx', 'Ini absen 2018 bulan mei');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_absensiswa`
--

CREATE TABLE `tbl_absensiswa` (
  `id` int(11) NOT NULL,
  `bulan` varchar(220) NOT NULL,
  `tahun` int(11) NOT NULL,
  `dokumen` text NOT NULL,
  `catatan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_guru`
--

CREATE TABLE `tbl_guru` (
  `id` int(11) NOT NULL,
  `nip` varchar(12) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `kota` varchar(100) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `kelamin` enum('Laki-laki','Perempuan') NOT NULL,
  `agama` varchar(20) NOT NULL,
  `alamat` text NOT NULL,
  `pendidikan` varchar(30) NOT NULL,
  `jabatan` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_guru`
--

INSERT INTO `tbl_guru` (`id`, `nip`, `nama`, `kota`, `tgl_lahir`, `kelamin`, `agama`, `alamat`, `pendidikan`, `jabatan`) VALUES
(28, '1502020043', 'maryadi s.pd', 'Tegal', '2018-03-04', 'Laki-laki', 'Islam', 'jl kp muka rt004 rw005 ', 'S1', 'Guru'),
(29, '150442020043', 'rifa bachtiar', 'melbourne', '1998-01-22', 'Laki-laki', 'Islam', 'jl kp muka rt009 rw004 kelurahan ancol kecamatan pademangan', 'S1', 'Dosen'),
(30, '12889998878', 'dwiyan', 'gombong', '1998-11-29', 'Laki-laki', 'Buddha', 'jl jl gak jelas', 'smp', 'cleaning');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_jadwal`
--

CREATE TABLE `tbl_jadwal` (
  `id` int(11) NOT NULL,
  `nama_pelajaran` varchar(40) NOT NULL,
  `kkm` int(3) NOT NULL,
  `id_guru` int(3) NOT NULL,
  `kelas` varchar(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_jadwal`
--

INSERT INTO `tbl_jadwal` (`id`, `nama_pelajaran`, `kkm`, `id_guru`, `kelas`) VALUES
(51, 'Pendidikan Agama Islam', 80, 14, 'IX '),
(50, 'Bahasa Jawa', 70, 25, 'VII'),
(49, 'Bahasa Inggris', 80, 3, 'IX '),
(48, 'Seni Budaya dan Keterampilan', 90, 4, 'IX '),
(47, ' Ilmu Pengetahuan Sosial', 90, 1, 'IX '),
(46, 'Bahasa Indonesia', 90, 13, 'VII'),
(45, 'Matematika', 90, 2, 'VII'),
(44, ' Ilmu Pengetahuan Alam', 90, 16, 'IX '),
(53, 'Penjaskes', 90, 11, 'VIII'),
(54, 'TIK', 90, 18, 'IX '),
(55, 'IPA', 0, 89, '12');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kelas`
--

CREATE TABLE `tbl_kelas` (
  `id` int(11) NOT NULL,
  `nama_kelas` varchar(10) NOT NULL,
  `wali_kelas` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_kelas`
--

INSERT INTO `tbl_kelas` (`id`, `nama_kelas`, `wali_kelas`) VALUES
(7, '12', 'habibi'),
(8, 'VII', 'lela'),
(9, 'VIII', 'sabar');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_login`
--

CREATE TABLE `tbl_login` (
  `id` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nisn` varchar(10) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `kelamin` enum('Laki-laki','Perempuan') NOT NULL,
  `agama` varchar(10) NOT NULL,
  `alamat_siswa` text NOT NULL,
  `kelas` varchar(6) NOT NULL,
  `ayah` varchar(30) NOT NULL,
  `ibu` varchar(30) NOT NULL,
  `alamatortu` varchar(40) NOT NULL,
  `hportu` varchar(13) NOT NULL,
  `pekerjaanayah` varchar(20) NOT NULL,
  `pekerjaanibu` varchar(20) NOT NULL,
  `wali` varchar(30) NOT NULL,
  `alamatwali` varchar(40) NOT NULL,
  `hpwali` varchar(13) NOT NULL,
  `pekerjaanwali` varchar(20) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '2'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_login`
--

INSERT INTO `tbl_login` (`id`, `username`, `password`, `nama`, `nisn`, `tempat_lahir`, `tgl_lahir`, `kelamin`, `agama`, `alamat_siswa`, `kelas`, `ayah`, `ibu`, `alamatortu`, `hportu`, `pekerjaanayah`, `pekerjaanibu`, `wali`, `alamatwali`, `hpwali`, `pekerjaanwali`, `status`) VALUES
(29, 'admin', '123', 'Administrator', '113', 'Kota', '2018-03-05', 'Laki-laki', 'Islam', 'Kampung Muka', '', '', '', '', '', '', '', '', '', '', '', 1),
(30, 'rifa', '123', 'Rifa Bachtiar', '12121', 'Priuk', '2018-03-05', 'Laki-laki', 'Islam', 'Jln Kampung Bahari', '6', 'Kurdi', 'Renald', 'Pesing', '021-932432432', 'Manager', 'Supervisor', 'Urip', 'Kertajaya', '021-343223', 'Manager Accounting', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_nilai`
--

CREATE TABLE `tbl_nilai` (
  `id` int(11) NOT NULL,
  `id_siswa` int(5) NOT NULL,
  `kelas` varchar(5) NOT NULL,
  `id_guru` int(5) NOT NULL,
  `nilai_uh1` int(3) NOT NULL,
  `nilai_uh2` int(3) NOT NULL,
  `nilai_uh3` int(3) NOT NULL,
  `nilai_uh4` int(3) NOT NULL,
  `nilai_uh5` int(3) NOT NULL,
  `rata_uh` int(3) NOT NULL,
  `nilai_tugas1` int(3) NOT NULL,
  `nilai_tugas2` int(3) NOT NULL,
  `nilai_tugas3` int(3) NOT NULL,
  `nilai_tugas4` int(3) NOT NULL,
  `rata_tugas` int(3) NOT NULL,
  `nilai_harian` int(3) NOT NULL,
  `nilai_ukk` int(11) NOT NULL,
  `nilai_uas` int(3) NOT NULL,
  `nilai_rapor` int(3) NOT NULL,
  `kkm` int(3) NOT NULL,
  `ket` varchar(12) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_nilai`
--

INSERT INTO `tbl_nilai` (`id`, `id_siswa`, `kelas`, `id_guru`, `nilai_uh1`, `nilai_uh2`, `nilai_uh3`, `nilai_uh4`, `nilai_uh5`, `rata_uh`, `nilai_tugas1`, `nilai_tugas2`, `nilai_tugas3`, `nilai_tugas4`, `rata_tugas`, `nilai_harian`, `nilai_ukk`, `nilai_uas`, `nilai_rapor`, `kkm`, `ket`) VALUES
(40, 2, 'VII', 2, 89, 88, 90, 88, 80, 87, 90, 80, 90, 85, 86, 87, 0, 89, 88, 90, ' Tidak Lulus'),
(41, 10, 'VII', 2, 80, 98, 88, 87, 89, 88, 90, 90, 100, 89, 92, 90, 0, 90, 90, 90, ' Lulus'),
(39, 7, 'VII', 2, 88, 90, 93, 92, 96, 92, 95, 91, 92, 95, 93, 93, 0, 92, 92, 90, ' Lulus'),
(38, 3, 'VII', 2, 100, 91, 90, 90, 92, 93, 91, 93, 94, 95, 93, 93, 0, 92, 92, 90, ' Lulus'),
(37, 6, 'VII', 2, 70, 75, 82, 76, 78, 76, 88, 90, 89, 80, 87, 81, 0, 79, 80, 90, ' Tidak Lulus'),
(32, 18, 'IX', 4, 80, 85, 90, 100, 78, 87, 98, 79, 70, 100, 87, 87, 0, 100, 96, 90, 'Lulus'),
(33, 19, 'IX', 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 90, 'Tidak Lulus'),
(34, 15, 'IX', 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 90, 'Tidak Lulus'),
(35, 16, 'IX', 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 90, 'Tidak Lulus'),
(36, 17, 'IX', 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 90, 'Tidak Lulus');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pelajaran`
--

CREATE TABLE `tbl_pelajaran` (
  `id` int(11) NOT NULL,
  `nama_pelajaran` varchar(50) NOT NULL,
  `kkm` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pelajaran`
--

INSERT INTO `tbl_pelajaran` (`id`, `nama_pelajaran`, `kkm`) VALUES
(2, 'Matematika', 90),
(4, 'Bahasa Indonesia', 90),
(6, ' Ilmu Pengetahuan Sosial', 90),
(9, 'Bahasa Inggris', 80),
(10, 'Bahasa Jawa', 70),
(11, 'Pendidikan Agama Islam', 80),
(12, 'Pendidikan Kewarganegaraan', 70),
(14, 'Penjaskes', 90),
(15, 'TIK', 90);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sekolah`
--

CREATE TABLE `tbl_sekolah` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `nss` char(20) NOT NULL,
  `nis` char(20) NOT NULL,
  `ntsn` char(20) NOT NULL,
  `skpd` varchar(20) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `nomor` char(13) NOT NULL,
  `fax` char(13) NOT NULL,
  `email` varchar(30) NOT NULL,
  `profile` varchar(50) NOT NULL,
  `tahun` varchar(9) NOT NULL,
  `semester` varchar(6) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_sekolah`
--

INSERT INTO `tbl_sekolah` (`id`, `nama`, `nss`, `nis`, `ntsn`, `skpd`, `alamat`, `nomor`, `fax`, `email`, `profile`, `tahun`, `semester`) VALUES
(1, 'SDN 03 Ancol', '20.103.65.03.001', '20.103.65.03.001', '2', 'Dinas Pemuda', 'Jalan Kampung Bandan ', '0283-9983331', '0283-9983331', 'SDN03OYEEE@gmail.com', 'JUJU', '2019', 'Ganjii');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_absenguru`
--
ALTER TABLE `tbl_absenguru`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_absensiswa`
--
ALTER TABLE `tbl_absensiswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_guru`
--
ALTER TABLE `tbl_guru`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_jadwal`
--
ALTER TABLE `tbl_jadwal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_kelas`
--
ALTER TABLE `tbl_kelas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_login`
--
ALTER TABLE `tbl_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_nilai`
--
ALTER TABLE `tbl_nilai`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_pelajaran`
--
ALTER TABLE `tbl_pelajaran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_sekolah`
--
ALTER TABLE `tbl_sekolah`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_absenguru`
--
ALTER TABLE `tbl_absenguru`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_absensiswa`
--
ALTER TABLE `tbl_absensiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_guru`
--
ALTER TABLE `tbl_guru`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `tbl_jadwal`
--
ALTER TABLE `tbl_jadwal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `tbl_kelas`
--
ALTER TABLE `tbl_kelas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbl_login`
--
ALTER TABLE `tbl_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `tbl_pelajaran`
--
ALTER TABLE `tbl_pelajaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tbl_sekolah`
--
ALTER TABLE `tbl_sekolah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
