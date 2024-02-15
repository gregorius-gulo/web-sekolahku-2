-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 14, 2024 at 10:27 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sekolahku`
--

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE `guru` (
  `guru_id` int(5) NOT NULL,
  `nip` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(9) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat` text NOT NULL,
  `telepon` varchar(15) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pendidikan_terakhir` varchar(100) NOT NULL,
  `tingkat_pengajaran` varchar(20) NOT NULL,
  `jabatan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`guru_id`, `nip`, `nama`, `jenis_kelamin`, `tanggal_lahir`, `alamat`, `telepon`, `email`, `pendidikan_terakhir`, `tingkat_pengajaran`, `jabatan`) VALUES
(2, '021040060001', 'Desman Syah Putra, S.Pd', 'Laki-laki', '1998-12-08', 'Jl. Budi Utama', '08125374566', 'desman@gmail.com', 'S1 Pendidikan Bahasa Inggris', 'Kelas XII-RPL', 'Wali Kepala Sekolah'),
(3, '272636368002', 'Norma Gulo, S.Kom', 'Perempuan', '1992-12-06', 'Jl. Setia Medan Sunggal', '081253776549', 'normag@gmail.com', 'S1 Teknik Informatika', 'Kelas XII-ATPH', 'Kepala Perpustakaan'),
(4, '727389740003', 'Yanti Maria, S.Pd', 'Perempuan', '1995-07-05', 'Jakarta Pusat', '085287646753', 'yantimaria@gmail.com', 'S1 Pendidikan Agama Kristen', 'Kelas XII-DPIB', 'Wali kelas'),
(5, '396246983645', 'Rahmat Hidayat, S.Pd', 'Laki-laki', '1990-04-05', 'Tetehosi', '085287642546', 'rahmat@gmail.com', 'S1 Pendidikan Kewirausahaan', 'Kelas XI-RPL', 'Kaprodi Rekayasa Perangkat Lunak');

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE `komentar` (
  `komentar_id` int(5) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pesan` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `komentar`
--

INSERT INTO `komentar` (`komentar_id`, `nama`, `email`, `pesan`, `date`) VALUES
(0, 'Putra Gulo', 'putragulo@gmail.com', 'Website sekolah ini sangat bagus', '2024-02-14 09:19:17'),
(0, 'Gregorius Gulo', 'gregoriuss04@gmail.com', 'Hello', '2024-02-14 09:22:02');

-- --------------------------------------------------------

--
-- Table structure for table `pendaftaran`
--

CREATE TABLE `pendaftaran` (
  `pendaftaran_id` int(5) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `alamat` text NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `tempat_lahir` varchar(25) NOT NULL,
  `asal_sekolah` varchar(50) NOT NULL,
  `nomor_hp` varchar(15) NOT NULL,
  `pilihan_jurusan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pendaftaran`
--

INSERT INTO `pendaftaran` (`pendaftaran_id`, `nama`, `jenis_kelamin`, `alamat`, `tanggal_lahir`, `tempat_lahir`, `asal_sekolah`, `nomor_hp`, `pilihan_jurusan`) VALUES
(13, 'Gregorius Gulo', 'Laki-Laki', 'Jakarta', '2004-06-17', 'Lolohosi', 'SMP Swasta Karya Kasih', '081262359398', 'Otomatisasi dan Tata Kelola Perkantoran'),
(14, 'Norma Gulo', 'Perempuan', 'Setia Budi', '2001-12-01', 'bandung', 'SMP Swasta Karya Kasih', '0873230974', 'Teknik Kendaraan Ringan dan Otomotif'),
(16, 'Tamasya Putri', 'Perempuan', 'Medan', '2004-04-05', 'Medan', 'SMP Negeri 1 Mandrehe', '082278748656', 'Agribisnis Tanaman Pangan dan Hortikultura'),
(20, 'Yarman Sesan', 'Laki-Laki', 'Jakarta', '2005-12-07', 'Jakarta', 'SMP N 5 Jakarta', '081356459087', 'Agribisnis Tanaman Pangan dan Hortikultura');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `siswa_id` int(5) NOT NULL,
  `nis` char(8) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `jenis_kelamin` varchar(9) NOT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `tempat_lahir` varchar(50) DEFAULT NULL,
  `kelas` varchar(10) NOT NULL,
  `jurusan` varchar(255) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`siswa_id`, `nis`, `nama`, `jenis_kelamin`, `tanggal_lahir`, `tempat_lahir`, `kelas`, `jurusan`, `alamat`) VALUES
(3, '21786485', 'Budi Putra', 'Laki-laki', '1999-07-07', 'Bandung', 'XII', 'Rekayasa Perangkat Lunak', 'Jl. Seibatang Hari'),
(4, '78492375', 'Gregorius Gulo', 'Laki-laki', '2003-06-17', 'Medan', 'X', 'Otomatisasi dan Tata Kelola Perkantoran', 'Jl. Medan merdeka'),
(6, '12345678', 'Putra Harefa', 'Laki-laki', '2001-02-03', 'Jakarta', 'XII', 'Otomatisasi dan Tata Kelola Perkantoran', 'Jl. Jenderal Sudirman'),
(8, '12349796', 'Iman Budi', 'Laki-laki', '2004-04-05', 'Gunung Sitoli', 'XII', 'Otomatisasi dan Tata Kelola Perkantoran', 'Gunung Sitoli'),
(11, '12344656', 'Tamasya Putri', 'Perempuan', '2001-12-31', 'Medan', 'XI', 'Desain Pemodelan dan Informasi Bangunan', 'Medan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`guru_id`);

--
-- Indexes for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  ADD PRIMARY KEY (`pendaftaran_id`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`siswa_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `guru`
--
ALTER TABLE `guru`
  MODIFY `guru_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  MODIFY `pendaftaran_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `siswa_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
