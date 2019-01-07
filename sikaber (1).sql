-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 04, 2019 at 11:30 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sikaber`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_email`
--

CREATE TABLE `tb_email` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `pesan` text NOT NULL,
  `tanggal` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` enum('0','1') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_email`
--

INSERT INTO `tb_email` (`id`, `email`, `nama`, `pesan`, `tanggal`, `status`) VALUES
(1, 'a@gmail.com', 'adi', 'a', '2018-12-31 10:09:01', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tb_gambar`
--

CREATE TABLE `tb_gambar` (
  `id` int(3) NOT NULL,
  `jenis` enum('slider','layanan') NOT NULL,
  `gambar` text NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_gambar`
--

INSERT INTO `tb_gambar` (`id`, `jenis`, `gambar`, `keterangan`) VALUES
(1, 'slider', 'NS3FB_WP_R02_1920x1080.jpg', '<p>dajghjk</p>');

-- --------------------------------------------------------

--
-- Table structure for table `tb_log`
--

CREATE TABLE `tb_log` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `activity` text NOT NULL,
  `datetime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_log`
--

INSERT INTO `tb_log` (`id`, `username`, `activity`, `datetime`) VALUES
(1, 'operator', 'menambahkan transaksi baru dengan id trx 2', '2019-01-02 09:22:31'),
(2, 'admin', 'menambahkan transaksi baru dengan id trx 3', '2019-01-02 09:58:21'),
(3, 'admin', 'mengupdate transaksi dengan id trx 3', '2019-01-02 09:58:51'),
(4, 'admin', 'menyelesaikan transaksi dengan id trx 3', '2019-01-02 09:59:01'),
(5, 'admin', 'menambah pelanggan baru', '2019-01-03 11:25:19'),
(6, 'admin', 'menambahkan transaksi baru dengan id trx 1', '2019-01-03 12:29:14'),
(7, 'admin', 'menambahkan transaksi baru dengan id trx 1', '2019-01-03 12:35:48'),
(8, 'admin', 'menambahkan transaksi baru dengan id trx KB1900002', '2019-01-03 12:36:07'),
(9, 'admin', 'menambahkan transaksi baru dengan id trx KB1900001', '2019-01-03 12:47:52'),
(10, 'admin', 'menambahkan transaksi baru dengan id trx KB1900002', '2019-01-03 14:57:15'),
(11, 'admin', 'mengupdate transaksi dengan id trx 1', '2019-01-03 20:33:04'),
(12, 'admin', 'mengupdate transaksi dengan id trx 1', '2019-01-03 20:34:57'),
(13, 'admin', 'mengupdate transaksi dengan id trx 1', '2019-01-03 20:40:18'),
(14, 'admin', 'mengupdate transaksi dengan id trx 1', '2019-01-03 20:43:29'),
(15, 'admin', 'mengupdate transaksi dengan id trx 1', '2019-01-03 20:44:17'),
(16, 'admin', 'mengupdate transaksi dengan id trx KB1900002', '2019-01-03 20:47:13'),
(17, 'admin', 'mengupdate transaksi dengan id trx KB1900002', '2019-01-03 22:00:29'),
(18, 'admin', 'mengupdate transaksi dengan id trx KB1900002', '2019-01-03 22:24:22');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pelanggan`
--

CREATE TABLE `tb_pelanggan` (
  `id` int(11) NOT NULL,
  `tipe` enum('umum','agent','reseller') NOT NULL,
  `nama` varchar(50) NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `tb_pelanggan`
--

INSERT INTO `tb_pelanggan` (`id`, `tipe`, `nama`, `no_telp`, `alamat`) VALUES
(1, 'umum', 'Budi', '0732987654321', 'bengkulu'),
(2, 'umum', 'Samsul', '09878976531', 'nyc'),
(3, 'umum', 'Naruto', '0876543219', 'blah blah');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pengguna`
--

CREATE TABLE `tb_pengguna` (
  `username` varchar(50) NOT NULL,
  `password` varchar(32) NOT NULL,
  `level` enum('admin','operator') NOT NULL,
  `nama` varchar(50) NOT NULL,
  `avatar` varchar(50) NOT NULL,
  `last_login` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pengguna`
--

INSERT INTO `tb_pengguna` (`username`, `password`, `level`, `nama`, `avatar`, `last_login`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3', 'admin', 'Admin', 'ui-sam.jpg', '2018-12-16 00:00:00'),
('operator', '4b583376b2767b923c3e1da60d10de59', 'operator', 'Operator', 'ui-sam.jpg', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pesanan`
--

CREATE TABLE `tb_pesanan` (
  `id` int(11) NOT NULL,
  `id_transaksi` varchar(9) NOT NULL,
  `kode_barang` varchar(10) NOT NULL,
  `jumlah` varchar(20) NOT NULL,
  `upah_cetak` int(11) NOT NULL,
  `upah_design` int(11) NOT NULL,
  `upah_finishing` int(11) NOT NULL,
  `keterangan` text NOT NULL,
  `status` enum('dipesan','diproses','selesai') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pesanan`
--

INSERT INTO `tb_pesanan` (`id`, `id_transaksi`, `kode_barang`, `jumlah`, `upah_cetak`, `upah_design`, `upah_finishing`, `keterangan`, `status`) VALUES
(7, 'KB1900001', 'BR-01', '2', 2000, 0, 0, '', 'dipesan'),
(8, 'KB1900002', 'BR-01', '1', 1300, 0, 0, '', 'dipesan');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pesanan_tmp`
--

CREATE TABLE `tb_pesanan_tmp` (
  `id` int(11) NOT NULL,
  `kasir` varchar(50) NOT NULL,
  `kode_barang` varchar(10) NOT NULL,
  `jumlah` varchar(10) NOT NULL,
  `upah_cetak` int(11) NOT NULL,
  `upah_design` int(11) NOT NULL,
  `upah_finishing` int(11) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_printing`
--

CREATE TABLE `tb_printing` (
  `kode` varchar(10) NOT NULL,
  `jenis_cetak` enum('offset','digital') NOT NULL,
  `nama_cetak` text NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar` text NOT NULL,
  `harga_modal` int(11) NOT NULL,
  `harga_umum` int(11) NOT NULL,
  `harga_reseller` int(11) NOT NULL,
  `harga_agent` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `tb_printing`
--

INSERT INTO `tb_printing` (`kode`, `jenis_cetak`, `nama_cetak`, `deskripsi`, `gambar`, `harga_modal`, `harga_umum`, `harga_reseller`, `harga_agent`) VALUES
('BR-01', 'offset', 'Brosur lipat tiga', '<p>brosur untuk promosi</p>', 'NS3FB_WP_R01_1920x1080.jpg', 500, 1000, 1500, 500),
('KN-01', 'offset', 'Kartu Nama', '<p>Powered By Tinymce</p>', 'ilyos.png', 1000, 3000, 2500, 2000),
('SP-01', 'digital', 'Spanduk', '<p>blah blah blah</p>', 'NS3FB_WP_R01_1920x1080.jpg', 25000, 35000, 40000, 30000);

-- --------------------------------------------------------

--
-- Table structure for table `tb_transaksi`
--

CREATE TABLE `tb_transaksi` (
  `id` varchar(9) NOT NULL,
  `tanggal_terima` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `kasir` varchar(50) DEFAULT NULL,
  `id_pelanggan` int(11) DEFAULT NULL,
  `tanggal_jadi` date NOT NULL,
  `bayar` int(11) NOT NULL,
  `keterangan` text NOT NULL,
  `tanggal_diambil` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_transaksi`
--

INSERT INTO `tb_transaksi` (`id`, `tanggal_terima`, `kasir`, `id_pelanggan`, `tanggal_jadi`, `bayar`, `keterangan`, `tanggal_diambil`) VALUES
('KB1900001', '2019-01-03 12:47:52', 'admin', 1, '2019-01-03', 0, '', NULL),
('KB1900002', '2019-01-03 14:57:15', 'admin', 1, '2019-01-24', 0, 'gudd', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_umum`
--

CREATE TABLE `tb_umum` (
  `id` int(1) NOT NULL,
  `logo` varchar(100) NOT NULL,
  `tentang` text NOT NULL,
  `alamat` text NOT NULL,
  `telepon` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `map_latitude` varchar(20) NOT NULL,
  `map_longitude` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_umum`
--

INSERT INTO `tb_umum` (`id`, `logo`, `tentang`, `alamat`, `telepon`, `email`, `map_latitude`, `map_longitude`) VALUES
(0, 'unib.png', 'Percetakan KABER merupakan ....', 'Jl. Seruni, Tanah Patah, Ratu Agung, Kota Bengkulu, Bengkulu 38223', '08123456789', 'email@gmail.com', '-3.813303', '102.280115');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_email`
--
ALTER TABLE `tb_email`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `tb_gambar`
--
ALTER TABLE `tb_gambar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_log`
--
ALTER TABLE `tb_log`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`);

--
-- Indexes for table `tb_pelanggan`
--
ALTER TABLE `tb_pelanggan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_pengguna`
--
ALTER TABLE `tb_pengguna`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `tb_pesanan`
--
ALTER TABLE `tb_pesanan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_transaksi` (`id_transaksi`),
  ADD KEY `kode_barang` (`kode_barang`);

--
-- Indexes for table `tb_pesanan_tmp`
--
ALTER TABLE `tb_pesanan_tmp`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kasir` (`kasir`),
  ADD KEY `kode_barang` (`kode_barang`);

--
-- Indexes for table `tb_printing`
--
ALTER TABLE `tb_printing`
  ADD PRIMARY KEY (`kode`);

--
-- Indexes for table `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kasir` (`kasir`),
  ADD KEY `pelanggan` (`id_pelanggan`);

--
-- Indexes for table `tb_umum`
--
ALTER TABLE `tb_umum`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_email`
--
ALTER TABLE `tb_email`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tb_gambar`
--
ALTER TABLE `tb_gambar`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tb_log`
--
ALTER TABLE `tb_log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `tb_pelanggan`
--
ALTER TABLE `tb_pelanggan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tb_pesanan`
--
ALTER TABLE `tb_pesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `tb_pesanan_tmp`
--
ALTER TABLE `tb_pesanan_tmp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_log`
--
ALTER TABLE `tb_log`
  ADD CONSTRAINT `tb_log_ibfk_1` FOREIGN KEY (`username`) REFERENCES `tb_pengguna` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_pesanan`
--
ALTER TABLE `tb_pesanan`
  ADD CONSTRAINT `tb_pesanan_ibfk_2` FOREIGN KEY (`kode_barang`) REFERENCES `tb_printing` (`kode`) ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_pesanan_ibfk_3` FOREIGN KEY (`id_transaksi`) REFERENCES `tb_transaksi` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_pesanan_tmp`
--
ALTER TABLE `tb_pesanan_tmp`
  ADD CONSTRAINT `tb_pesanan_tmp_ibfk_1` FOREIGN KEY (`kode_barang`) REFERENCES `tb_printing` (`kode`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_pesanan_tmp_ibfk_2` FOREIGN KEY (`kasir`) REFERENCES `tb_pengguna` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  ADD CONSTRAINT `tb_transaksi_ibfk_1` FOREIGN KEY (`kasir`) REFERENCES `tb_pengguna` (`username`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_transaksi_ibfk_2` FOREIGN KEY (`id_pelanggan`) REFERENCES `tb_pelanggan` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
