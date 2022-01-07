-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 07, 2022 at 10:47 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
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
  `tanggal` datetime NOT NULL DEFAULT current_timestamp(),
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
  `datetime` datetime NOT NULL DEFAULT current_timestamp()
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
('04', 'offset', 'Jilid Spiral Kawat Kecil Buku', '', '', 3000, 8000, 7000, 7000),
('BR-01', 'offset', 'Brosur lipat tiga', '<p>brosur untuk promosi</p>', '', 500, 1000, 1500, 500),
('CK01', 'offset', 'Yasin Cover Bludru Isi Construk', '', '', 0, 0, 0, 0),
('CK02', 'offset', 'Yasin Cover Emas Isi Construk', '', '', 0, 0, 0, 0),
('CK03', 'offset', 'Yasin Cover hardcover Isi Construk', '', '', 0, 0, 0, 0),
('CK04', 'offset', 'Yasin Cover Semicover Isi Construk', '', '', 0, 0, 0, 0),
('CK05', 'offset', 'Yasin Cover Softcover Isi Construk', '', '', 0, 0, 0, 0),
('CT01', 'offset', 'Cetak Nota NCR ', '', '', 65000, 130000, 125000, 100000),
('CT02', 'offset', 'Cetak Nota NCR 2 warna', '', '', 70000, 145000, 135000, 110000),
('CT03', 'offset', 'Cetak HVS Warna', '', '', 65000, 130000, 110000, 90000),
('CT04', 'offset', 'Cetak HVS Putih', '', '', 65000, 130000, 110000, 90000),
('CT05', 'offset', 'Cetak Manila 1 Muka', '', '', 400, 800, 800, 800),
('CT06', 'offset', 'Cetak Manila 2 Muka', '', '', 500, 1100, 1000, 1000),
('CT07', 'offset', 'Cetak Manila Full Color', '', '', 800, 1500, 1500, 1500),
('CT08', 'offset', 'Cetak Manila Full Color 2muka', '', '', 1000, 3000, 2500, 2500),
('CT09', 'offset', 'Yasin Cover Bludru Isi Konstruk', '', '', 18000, 28000, 25000, 25000),
('CT10', 'offset', 'Yasin Cover Bludru Isi HVS', '', '', 14000, 20000, 18000, 18000),
('CT11', 'offset', 'Yasin Cover Emas Isi Konstruk', '', '', 16000, 25000, 23000, 23000),
('CT12', 'offset', 'Yasin Cover Emas Isi HVS', '', '', 11000, 18000, 15000, 15000),
('CT13', 'offset', 'Yasin Soft Cover Emas Isi HVS', '', '', 5000, 10000, 10000, 10000),
('CT14', 'offset', 'Name Tag Magnet', '', '', 15000, 40000, 30000, 25000),
('CT15', 'offset', 'PIN Tingkat', '', '', 5000, 12000, 9000, 9000),
('CT16', 'offset', 'Name Tag Peniti', '', '', 10000, 35000, 30000, 20000),
('CT17', 'offset', 'Id Card PVC', '', '', 500, 20000, 10000, 5000),
('CT18', 'offset', 'Id Card Lengkap ', '', '', 7500, 35000, 30000, 25000),
('CT19', 'offset', 'Undangan Sparasi per500', '', '', 1200, 1800, 1800, 1800),
('CT20', 'offset', 'Undangan Sparasi per1000', '', '', 800, 1300, 1250, 1250),
('CT21', 'offset', 'Undangan BW per500', '', '', 822, 1200, 1200, 1200),
('CT22', 'offset', 'Undangan BW per1000', '', '', 632, 1000, 1000, 1000),
('CT23', 'offset', 'AC 230 Uk. 65 x 90 cm', '', '', 2700, 3100, 3100, 3100),
('CT24', 'offset', 'AC 230 Uk. 65 x 100 cm', '', '', 3000, 3400, 3400, 3400),
('CT25', 'offset', 'AC 230 Uk. 79 x 109 cm', '', '', 3800, 4200, 4200, 4200),
('CT26', 'offset', 'AC 150 Uk. 65 x 100 cm', '', '', 2000, 2400, 2400, 2400),
('CT27', 'offset', 'AC 150 Uk. 79 x 109 cm', '', '', 2500, 2900, 2900, 2900),
('CT28', 'offset', 'AC 120 Uk. 65 x 100 cm', '', '', 1600, 2000, 2000, 2000),
('CT29', 'offset', 'AC 120 Uk. 79 x 109 cm', '', '', 2000, 2400, 2400, 2400),
('JD04', 'offset', 'Jilid Spiral Kawat Kecil Buku', '', '', 3000, 8000, 7000, 7000),
('JD05', 'offset', 'Jilid Spiral Kawat Sedang Buku', '', '', 4000, 12000, 10500, 10500),
('JD06', 'offset', 'Jilid Spiral Kawat Besar Buku', '', '', 7000, 25000, 15000, 15000),
('JD07', 'offset', 'Jilid Spiral Plastik Kecil', '', '', 3000, 8000, 7000, 7000),
('JD08', 'offset', 'Jilid Spiral Plastik Sedang', '', '', 4000, 12000, 10500, 10500),
('JD09', 'offset', 'Jilid Spiral Plastik Besar', '', '', 7000, 25000, 15000, 15000),
('JD10', 'offset', 'Jilid Lakban Kecil', '', '', 1500, 3000, 2500, 2500),
('JD11', 'offset', 'Jilid Lakban Sedang', '', '', 1600, 4000, 3000, 3000),
('JD12', 'offset', 'Jilid Lakban Besar', '', '', 2000, 5000, 4000, 4000),
('JD13', 'offset', 'Jilid Lakban Super', '', '', 4000, 10000, 8000, 8000),
('JD14', 'offset', 'Jilid Buku Bufallo Kecil', 'Tebal 1 cm', '', 6000, 15000, 10000, 8000),
('JD15', 'offset', 'Jilid Buku Bufallo Sedang', 'Tebal 3 cm', '', 7000, 35000, 25000, 20000),
('JD16', 'offset', 'Jilid Buku Bufallo Besar', 'Tebal 5 cm', '', 8000, 50000, 35000, 30000),
('JD17', 'offset', 'Jilid Buku Cover Warna Kecil', 'Tebal 1 cm', '', 8000, 20000, 15000, 10000),
('JD18', 'offset', 'Jilid Buku Cover Warna Sedang', 'Tebal 3 cm', '', 8000, 30000, 20000, 15000),
('JD19', 'offset', 'Jilid Buku Cover Warna Besar', 'Tebal 5 cm', '', 14000, 50000, 35000, 25000),
('JD20', 'offset', 'Jilid Hardcover Bufallo Kecil', 'Tebal 1 cm', '', 10000, 25000, 20000, 18000),
('JD21', 'offset', 'Jilid Hardcover Bufallo Besar', 'Tebal 5 cm', '', 15000, 50000, 35000, 30000),
('JD22', 'offset', 'Jilid Hardcover Cover Warna Kecil', 'Tebal 1 cm', '', 10000, 25000, 20000, 18000),
('JD23', 'offset', 'Jilid Hardcover Cover Warna Besar', 'Tebal 5 cm', '', 15000, 50000, 35000, 25000),
('KN-01', 'offset', 'Kartu Nama', '<p>Powered By Tinymce</p>', '', 1000, 3000, 2500, 2000),
('LM01', 'offset', 'Laminating Tebal Folio', '', '', 800, 3000, 2500, 2000),
('LM02', 'offset', 'Laminating Tebal Kecil ', '', '', 200, 1500, 1000, 1000),
('LM03', 'offset', 'Laminating Tipis Roll Besar 1 muka', '', '', 300, 2000, 500, 500),
('LM04', 'offset', 'Laminating Tipis Roll Besar 2 muka', '', '', 600, 4000, 1000, 1000),
('LM05', 'offset', 'Laminating Tipis Roll Kecil 1 muka', '', '', 500, 2000, 1500, 1500),
('LM06', 'offset', 'Laminating Tipis Roll Kecil 2 muka', '', '', 1000, 4000, 3000, 3000),
('PR01', 'offset', 'Print Biasa HVS Folio BW', '', '', 200, 500, 500, 500),
('PR02', 'offset', 'Print Biasa HVS Folio Color', '', '', 500, 1000, 1000, 1000),
('PR03', 'offset', 'Print Biasa HVS Folio Full Color', '', '', 1000, 3000, 2500, 2500),
('PR04', 'offset', 'Print Biasa HVS A3 BW', '', '', 300, 2000, 1500, 1500),
('PR05', 'offset', 'Print Biasa HVS A3 Color', '', '', 1000, 2500, 2000, 2000),
('PR06', 'offset', 'Print Biasa HVS A3 Full Color', '', '', 2500, 5000, 3000, 3000),
('PR07', 'offset', 'Laser HVS Folio BW', '', '', 100, 500, 250, 250),
('PR08', 'offset', 'Laser  HVS Folio Color', '', '', 500, 2000, 1000, 800),
('PR09', 'offset', 'Laser HVS A3 BW', '', '', 300, 1000, 1000, 1000),
('PR10', 'offset', 'Fotocopy HVS', '', '', 60, 200, 200, 175),
('PR11', 'offset', 'Fotocopy A3', '', '', 200, 500, 500, 400),
('PR12', 'offset', 'Laser AP 150 A3+ Color 1 muka', '', '', 2300, 5000, 4000, 3000),
('PR13', 'offset', 'Laser AP 230 A3+ Color 1 muka', '', '', 2500, 10000, 5000, 3500),
('PR14', 'offset', 'Laser AP 150 A3+ Color 2 muka', '', '', 4300, 10000, 8000, 6000),
('PR15', 'offset', 'Laser AP 230 A3+ Color 2 muka', '', '', 4500, 18000, 10000, 7000),
('SP-01', 'digital', 'Spanduk', '<p>blah blah blah</p>', '', 25000, 35000, 40000, 30000),
('ST01', 'offset', 'Stampel Komputer Kecil', '', '', 10000, 50000, 45000, 40000),
('ST02', 'offset', 'Stampel Komputer Sedang', '', '', 15000, 80000, 70000, 60000),
('ST03', 'offset', 'Stampel Komputer Besar', '', '', 25000, 100000, 80000, 70000),
('ST04', 'offset', 'Stampel Kayu Sedang', '', '', 8000, 35000, 25000, 25000),
('ST05', 'offset', 'Stampel Kayu Besar', '', '', 10000, 60000, 35000, 35000);

-- --------------------------------------------------------

--
-- Table structure for table `tb_transaksi`
--

CREATE TABLE `tb_transaksi` (
  `id` varchar(9) NOT NULL,
  `tanggal_terima` datetime NOT NULL DEFAULT current_timestamp(),
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
