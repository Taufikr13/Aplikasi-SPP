-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 14, 2023 at 05:23 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_nabilaa`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_kelas`
--

CREATE TABLE `tb_kelas` (
  `id_kelas` int(11) NOT NULL,
  `nama_kelas` varchar(20) NOT NULL,
  `keahlian` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_kelas`
--

INSERT INTO `tb_kelas` (`id_kelas`, `nama_kelas`, `keahlian`) VALUES
(1, 'X', 'RPL'),
(2, 'XI', 'RPL'),
(7, 'XII', 'RPL'),
(9, 'X', 'PBKS'),
(10, 'XI', 'PBKS'),
(11, 'XII', 'PBKS');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pembayaran`
--

CREATE TABLE `tb_pembayaran` (
  `id_pembayaran` int(11) NOT NULL,
  `id_petugas` int(11) NOT NULL,
  `id_siswa` int(11) NOT NULL,
  `tgl_bayar` date NOT NULL,
  `bulan_bayar` varchar(20) NOT NULL,
  `tahun_bayar` varchar(5) NOT NULL,
  `id_spp` int(11) NOT NULL,
  `jumlah_bayar` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_pembayaran`
--

INSERT INTO `tb_pembayaran` (`id_pembayaran`, `id_petugas`, `id_siswa`, `tgl_bayar`, `bulan_bayar`, `tahun_bayar`, `id_spp`, `jumlah_bayar`) VALUES
(2, 2, 5, '2023-02-25', 'Maret', '2023', 6, 500000),
(3, 2, 5, '2023-02-24', 'Januari', '2023', 6, 500000),
(4, 2, 3, '2023-02-23', 'Januari', '2022', 6, 600000),
(5, 2, 3, '2023-02-17', 'Februari', '2022', 6, 100000),
(6, 1, 4, '2023-03-03', 'Februari', '2023', 8, 200000),
(7, 2, 4, '2023-02-17', 'Januari', '2023', 8, 300000),
(8, 2, 3, '2023-02-28', 'Februari', '2023', 6, 100000),
(9, 2, 3, '2023-02-28', 'Januari', '2023', 6, 200000),
(10, 1, 5, '2023-03-02', 'Oktober', '2023', 6, -500000),
(11, 1, 6, '2023-02-09', 'September', '2021', 6, 300000),
(13, 1, 8, '2023-01-12', 'Januari', '2023', 8, 600000),
(14, 1, 6, '2023-03-02', 'November', '2023', 6, 20000),
(15, 1, 6, '2023-02-03', 'Desember', '2023', 6, 180000),
(16, 5, 9, '2022-09-06', 'September', '2023', 1, 100000),
(17, 5, 10, '2023-02-20', 'September', '2021', 6, 500000),
(19, 2, 14, '2023-03-04', 'Februari', '2015', 2, 200000),
(34, 2, 19, '2023-01-14', 'Februari', '2023', 1, 100000),
(35, 6, 13, '2022-09-06', 'September', '2023', 9, 950000),
(36, 6, 23, '2023-03-03', 'Desember', '2020', 1, 100000),
(37, 7, 15, '2023-02-03', 'Agustus', '2019', 9, 500000),
(38, 7, 13, '2023-01-15', 'Mei', '2022', 9, 30000),
(39, 7, 18, '2022-11-10', 'November', '2021', 7, 250000),
(40, 4, 15, '2023-03-01', 'Maret', '2022', 9, 100000),
(41, 4, 22, '2023-03-07', 'Oktober', '2020', 2, 50000),
(42, 4, 18, '2023-03-01', 'Desember', '2015', 7, 50000),
(43, 5, 21, '2023-01-07', 'September', '2018', 9, 730000);

-- --------------------------------------------------------

--
-- Table structure for table `tb_petugas`
--

CREATE TABLE `tb_petugas` (
  `id_petugas` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama_petugas` varchar(100) NOT NULL,
  `level` enum('admin','petugas') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_petugas`
--

INSERT INTO `tb_petugas` (`id_petugas`, `username`, `password`, `nama_petugas`, `level`) VALUES
(1, 'bila', '069', 'Nabila', 'admin'),
(2, 'aini', '12345', 'Nuraini', 'admin'),
(4, 'diana', '6996', 'Diana Putri', 'admin'),
(5, 'faisal', '252', 'Muhammad Faisal', 'petugas'),
(6, 'nita', '3006', 'Anita Fitria', 'petugas'),
(7, 'adit', '00332', 'Aditya', 'petugas');

-- --------------------------------------------------------

--
-- Table structure for table `tb_siswa`
--

CREATE TABLE `tb_siswa` (
  `id_siswa` int(11) NOT NULL,
  `nisn` varchar(10) NOT NULL,
  `nis` varchar(10) NOT NULL,
  `namaSiswa` varchar(50) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `noTlpn` varchar(13) NOT NULL,
  `id_spp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_siswa`
--

INSERT INTO `tb_siswa` (`id_siswa`, `nisn`, `nis`, `namaSiswa`, `id_kelas`, `alamat`, `noTlpn`, `id_spp`) VALUES
(6, '000001', '00001', 'Andika', 1, 'Kp.Lembursawah\r\n            ', '085700067009', 6),
(9, '044009', '449', 'Budi', 7, 'Kp. Cikukulu\r\n            ', '083124568877', 1),
(10, '90909', '9900', 'Fathan', 10, 'Kp. Lemburjami\r\n            ', '088923125678', 6),
(13, '005566', '0560', 'Hasna Aulia', 7, 'Kp. Genteng\r\n            ', '085699087765', 9),
(15, '660098', '0066', 'Layla Rahmah', 9, 'Kp. Salakopi\r\n            ', '085877664323', 9),
(18, '123009', '0091', 'Naila Saputri', 7, 'Kp. Cijengkol\r\n            ', '085677432121', 7),
(19, '005432', '054', 'Panji Hermawan', 1, 'Kp. Cileles\r\n            ', '088976543212', 1),
(21, '900876', '3211', 'Qaila Sapira', 9, 'Kp. Lembursawah\r\n            ', '083877514432', 9),
(22, '669905', '965', 'Raya Anatasya', 10, 'Kp. Nengeng\r\n            ', '085766900054', 2),
(23, '98765', '0098', 'Sandy Pratama', 9, 'Kp. Genteng\r\n            ', '085891009008', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_spp`
--

CREATE TABLE `tb_spp` (
  `id_spp` int(11) NOT NULL,
  `tahun` varchar(10) NOT NULL,
  `nominal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_spp`
--

INSERT INTO `tb_spp` (`id_spp`, `tahun`, `nominal`) VALUES
(1, '2023', 100000),
(2, '2024', 200000),
(3, '2025', 300000),
(5, '2026', 400000),
(6, '2027', 500000),
(7, '2028', 600000),
(8, '2029', 800000),
(9, '2030', 1000000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_kelas`
--
ALTER TABLE `tb_kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indexes for table `tb_pembayaran`
--
ALTER TABLE `tb_pembayaran`
  ADD PRIMARY KEY (`id_pembayaran`);

--
-- Indexes for table `tb_petugas`
--
ALTER TABLE `tb_petugas`
  ADD PRIMARY KEY (`id_petugas`);

--
-- Indexes for table `tb_siswa`
--
ALTER TABLE `tb_siswa`
  ADD PRIMARY KEY (`id_siswa`),
  ADD KEY `id_spp` (`id_spp`);

--
-- Indexes for table `tb_spp`
--
ALTER TABLE `tb_spp`
  ADD PRIMARY KEY (`id_spp`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_kelas`
--
ALTER TABLE `tb_kelas`
  MODIFY `id_kelas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tb_pembayaran`
--
ALTER TABLE `tb_pembayaran`
  MODIFY `id_pembayaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `tb_petugas`
--
ALTER TABLE `tb_petugas`
  MODIFY `id_petugas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tb_siswa`
--
ALTER TABLE `tb_siswa`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `tb_spp`
--
ALTER TABLE `tb_spp`
  MODIFY `id_spp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_siswa`
--
ALTER TABLE `tb_siswa`
  ADD CONSTRAINT `tb_siswa_ibfk_1` FOREIGN KEY (`id_spp`) REFERENCES `tb_spp` (`id_spp`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
