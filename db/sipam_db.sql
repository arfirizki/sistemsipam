-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 16, 2020 at 04:03 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.3.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sipam_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` varchar(100) NOT NULL,
  `name` varchar(25) NOT NULL,
  `address` varchar(20) NOT NULL,
  `phone` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `name`, `address`, `phone`) VALUES
('A01', 'arfi', 'tegal       ', '085201584202'),
('A02', 'nanda', 'Bojong       ', '1234567890'),
('A03', 'skripsi', 'BOJONG RT 1 / 3     ', '085201584202');

-- --------------------------------------------------------

--
-- Table structure for table `kubikasi`
--

CREATE TABLE `kubikasi` (
  `id_kubikasi` int(100) NOT NULL,
  `pelanggan_id` varchar(10) NOT NULL,
  `kub_a` varchar(10) NOT NULL,
  `kub_b` varchar(10) NOT NULL,
  `total` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kubikasi`
--

INSERT INTO `kubikasi` (`id_kubikasi`, `pelanggan_id`, `kub_a`, `kub_b`, `total`) VALUES
(18, 'PAD.0001', '0', '2', '2'),
(19, 'PAD.0002', '0', '0', '0'),
(20, 'PAD.0003', '0', '0', '0'),
(21, 'PAD.0004', '0', '0', '0'),
(22, 'PAD.0005', '0', '0', '0'),
(23, 'PAD.0006', '0', '0', '0'),
(24, 'PAD.0007', '0', '0', '0'),
(25, 'PAD.0008', '0', '0', '0'),
(26, 'PAD.0009', '0', '0', '0'),
(27, 'PAD.0010', '0', '0', '0'),
(28, 'PAD.0011', '0', '0', '0'),
(29, 'PAD.0012', '0', '0', '0'),
(30, 'PAD.0013', '0', '0', '0'),
(31, 'PAD.0014', '0', '0', '0'),
(32, 'PAD.0015', '0', '0', '0'),
(33, 'PAD.0016', '0', '0', '0'),
(34, 'PAD.0017', '0', '0', '0'),
(35, 'PAD.0018', '0', '0', '0'),
(36, 'PAD.0019', '0', '0', '0'),
(37, 'PAD.0020', '0', '0', '0'),
(38, 'PAD.0021', '0', '0', '0'),
(39, 'PAD.0022', '0', '0', '0');

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `pelanggan_id` varchar(100) NOT NULL,
  `name` varchar(30) NOT NULL,
  `address` varchar(20) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `kategori` varchar(25) NOT NULL COMMENT '1:Rumah Tanga, 2:Fasilitas Umum, 3:Perusahaan'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`pelanggan_id`, `name`, `address`, `phone`, `kategori`) VALUES
('PAD.0001', 'ALI SOPANI', 'RT. 01 RW. 01       ', '1234567890', '1'),
('PAD.0002', 'AWAN MULYANTO', 'RT. 01 RW. 01      ', '1234567890', '1'),
('PAD.0003', 'BAMBANG SUGIONO', 'RT. 01 RW. 01       ', '1234567890', '1'),
('PAD.0004', 'DIRAH', 'RT. 01 RW. 01       ', '1234567890', '1'),
('PAD.0005', 'H. AMINUDIN', 'RT. 01 RW. 01       ', '1234567890', '1'),
('PAD.0006', 'H. KHALIMI', 'RT. 01 RW. 01', '1234567890', '1'),
('PAD.0007', 'HERU WIHARTO', 'RT. 01 RW. 01       ', '1234567890', '1'),
('PAD.0008', 'KARMAN', 'RT. 01 RW. 01       ', '1234567890', '1'),
('PAD.0009', 'KHATUN URIPAH', 'RT. 01 RW. 01       ', '1234567890', '1'),
('PAD.0010', 'KHOMIMAH', 'RT. 01 RW. 01       ', '1234567890', '1'),
('PAD.0011', 'LIKHAN', 'RT. 01 RW. 01       ', '1234567890', '1'),
('PAD.0012', 'M. TARMIDI', 'RT. 01 RW. 01       ', '1234567890', '1'),
('PAD.0013', 'MARIO ROMADHONA', 'RT. 01 RW. 01       ', '1234567890', '1'),
('PAD.0014', 'RISMONO', 'RT. 01 RW. 01       ', '1234567890', '1'),
('PAD.0015', 'RO`ASIH', 'RT. 01 RW. 01       ', '1234567890', '1'),
('PAD.0016', 'ROJIKIN', 'RT. 01 RW. 01       ', '1234567890', '1'),
('PAD.0017', 'SA`ADAH', 'RT. 01 RW. 01       ', '1234567890', '1'),
('PAD.0018', 'SATORI / YAYU', 'RT. 01 RW. 01       ', '1234567890', '1'),
('PAD.0019', 'SITI RUMIDAH', 'RT. 01 RW. 01       ', '1234567890', '1'),
('PAD.0020', 'SUDIYANTI / LANI', 'RT. 01 RW. 01       ', '1234567890', '1'),
('PAD.0021', 'BKK BOJONG', 'RT. 01 RW. 01       ', '1234567890', '3'),
('PAD.0022', 'MUSHOLA ALKHIKMAH', 'RT. 01 RW. 01       ', '1234567890', '2');

-- --------------------------------------------------------

--
-- Table structure for table `tagihan`
--

CREATE TABLE `tagihan` (
  `tagihan_id` varchar(40) NOT NULL,
  `pelanggan_id` varchar(40) NOT NULL,
  `bulan` varchar(10) NOT NULL,
  `kubikasi` varchar(40) NOT NULL,
  `kub_a` varchar(40) NOT NULL,
  `kub_b` varchar(40) NOT NULL,
  `tarif` varchar(40) NOT NULL,
  `beban` varchar(40) NOT NULL,
  `total` varchar(40) NOT NULL,
  `tgl_bayar` varchar(15) NOT NULL,
  `keterangan` varchar(20) NOT NULL,
  `tanggal` datetime(6) NOT NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tagihan`
--

INSERT INTO `tagihan` (`tagihan_id`, `pelanggan_id`, `bulan`, `kubikasi`, `kub_a`, `kub_b`, `tarif`, `beban`, `total`, `tgl_bayar`, `keterangan`, `tanggal`) VALUES
('150120001', 'PAD.0001', 'Desember', '2', '0', '2', '500', '10000', '11000', '2020-01-15', 'DIBAYAR', '2020-01-15 21:02:06.925100');

-- --------------------------------------------------------

--
-- Table structure for table `tarif`
--

CREATE TABLE `tarif` (
  `id` int(10) NOT NULL,
  `kategori` varchar(15) NOT NULL,
  `tarif` varchar(10) NOT NULL,
  `beban` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tarif`
--

INSERT INTO `tarif` (`id`, `kategori`, `tarif`, `beban`) VALUES
(1, 'Rumah Tangga', '500', '10000'),
(2, 'Fasilitas Umum', '500', '5000'),
(3, 'Perusahaan', '500', '10000');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `level` int(1) NOT NULL COMMENT '1:admin, 2:pelanggan',
  `id` varchar(40) DEFAULT NULL,
  `id_p` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`, `level`, `id`, `id_p`) VALUES
(15, 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 1, 'A01', NULL),
(48, 'nanda', '16e8b7d240c81a0cbc6c0d5dcf00ef946b771823', 1, 'A02', NULL),
(57, 'skripsi', '6d49f3427fa841cecf33f45e1714806ff023bb3f', 1, 'A03', NULL),
(58, 'pad.0001', '01b307acba4f54f55aafc33bb06bbbf6ca803e9a', 2, NULL, 'PAD.0001'),
(59, 'pad.0002', '356a192b7913b04c54574d18c28d46e6395428ab', 2, NULL, 'PAD.0002'),
(60, 'pad.0003', '356a192b7913b04c54574d18c28d46e6395428ab', 2, NULL, 'PAD.0003'),
(61, 'pad.0004', '356a192b7913b04c54574d18c28d46e6395428ab', 2, NULL, 'PAD.0004'),
(62, 'pad.0005', '356a192b7913b04c54574d18c28d46e6395428ab', 2, NULL, 'PAD.0005'),
(63, 'pad.0006', '356a192b7913b04c54574d18c28d46e6395428ab', 2, NULL, 'PAD.0006'),
(64, 'pad.0007', '356a192b7913b04c54574d18c28d46e6395428ab', 2, NULL, 'PAD.0007'),
(65, 'pad.0008', '356a192b7913b04c54574d18c28d46e6395428ab', 2, NULL, 'PAD.0008'),
(66, 'pad.0009', '356a192b7913b04c54574d18c28d46e6395428ab', 2, NULL, 'PAD.0009'),
(67, 'pad.0010', '356a192b7913b04c54574d18c28d46e6395428ab', 2, NULL, 'PAD.0010'),
(68, 'pad.0011', '356a192b7913b04c54574d18c28d46e6395428ab', 2, NULL, 'PAD.0011'),
(69, 'pad.0012', '356a192b7913b04c54574d18c28d46e6395428ab', 2, NULL, 'PAD.0012'),
(70, 'pad.0013', '356a192b7913b04c54574d18c28d46e6395428ab', 2, NULL, 'PAD.0013'),
(71, 'pad.0014', '356a192b7913b04c54574d18c28d46e6395428ab', 2, NULL, 'PAD.0014'),
(72, 'pad.0015', '356a192b7913b04c54574d18c28d46e6395428ab', 2, NULL, 'PAD.0015'),
(73, 'pad.0016', '356a192b7913b04c54574d18c28d46e6395428ab', 2, NULL, 'PAD.0016'),
(74, 'pad.0017', '356a192b7913b04c54574d18c28d46e6395428ab', 2, NULL, 'PAD.0017'),
(75, 'pad.0018', '356a192b7913b04c54574d18c28d46e6395428ab', 2, NULL, 'PAD.0018'),
(76, 'pad.0019', '356a192b7913b04c54574d18c28d46e6395428ab', 2, NULL, 'PAD.0019'),
(77, 'pad.0020', '356a192b7913b04c54574d18c28d46e6395428ab', 2, NULL, 'PAD.0020'),
(78, 'pad.0021', '356a192b7913b04c54574d18c28d46e6395428ab', 2, NULL, 'PAD.0021'),
(79, 'pad.0022', '356a192b7913b04c54574d18c28d46e6395428ab', 2, NULL, 'PAD.0022');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `kubikasi`
--
ALTER TABLE `kubikasi`
  ADD PRIMARY KEY (`id_kubikasi`),
  ADD KEY `pelanggan_id` (`pelanggan_id`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`pelanggan_id`);

--
-- Indexes for table `tagihan`
--
ALTER TABLE `tagihan`
  ADD PRIMARY KEY (`tagihan_id`),
  ADD KEY `tagihan_id` (`tagihan_id`),
  ADD KEY `pelanggan_id` (`pelanggan_id`);

--
-- Indexes for table `tarif`
--
ALTER TABLE `tarif`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `admin_id` (`id`),
  ADD KEY `id_p` (`id_p`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kubikasi`
--
ALTER TABLE `kubikasi`
  MODIFY `id_kubikasi` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `tarif`
--
ALTER TABLE `tarif`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `kubikasi`
--
ALTER TABLE `kubikasi`
  ADD CONSTRAINT `kubikasi_ibfk_1` FOREIGN KEY (`pelanggan_id`) REFERENCES `pelanggan` (`pelanggan_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tagihan`
--
ALTER TABLE `tagihan`
  ADD CONSTRAINT `tagihan_ibfk_2` FOREIGN KEY (`pelanggan_id`) REFERENCES `pelanggan` (`pelanggan_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`id`) REFERENCES `admin` (`admin_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `user_ibfk_2` FOREIGN KEY (`id_p`) REFERENCES `pelanggan` (`pelanggan_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
