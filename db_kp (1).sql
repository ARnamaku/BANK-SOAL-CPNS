-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 29, 2020 at 04:35 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_kp`
--

-- --------------------------------------------------------

--
-- Table structure for table `kamar`
--

CREATE TABLE `kamar` (
  `id_kamar` int(11) NOT NULL,
  `id_tipe` int(11) NOT NULL,
  `no_kamar` varchar(50) NOT NULL,
  `max_dewasa` int(11) NOT NULL,
  `max_anak` int(11) NOT NULL,
  `status_kamar` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kamar`
--

INSERT INTO `kamar` (`id_kamar`, `id_tipe`, `no_kamar`, `max_dewasa`, `max_anak`, `status_kamar`) VALUES
(7, 4, '101', 4, 4, 'Vacant Dirty'),
(8, 4, '102', 4, 4, 'Occupied'),
(10, 4, '103', 4, 2, 'Vacant Dirty'),
(11, 3, '104', 3, 3, 'Vacant Clean Inspected'),
(12, 3, '105', 2, 1, 'Vacant Dirty'),
(13, 3, '106', 2, 1, 'Occupied Dirty'),
(14, 3, '107', 2, 2, 'Occupied'),
(15, 7, '108', 4, 4, 'Vacant Dirty'),
(16, 7, '109', 2, 2, 'Occupied'),
(17, 3, '110', 2, 1, 'Occupied');

-- --------------------------------------------------------

--
-- Table structure for table `kategori_layanan`
--

CREATE TABLE `kategori_layanan` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(50) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori_layanan`
--

INSERT INTO `kategori_layanan` (`id_kategori`, `nama_kategori`, `keterangan`) VALUES
(1, 'Food', 'Produk Makanan,snack,desert,dsb\r\n goblok\r\n\r\n'),
(2, 'Drink', 'Minuman dingin,panas,pahit,manis seperti cinta ku goblok\r\n'),
(3, 'Laundry', 'Cuci baju');

-- --------------------------------------------------------

--
-- Table structure for table `layanan`
--

CREATE TABLE `layanan` (
  `id_layanan` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `nama_layanan` varchar(50) NOT NULL,
  `satuan` varchar(50) NOT NULL,
  `harga_layanan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `layanan`
--

INSERT INTO `layanan` (`id_layanan`, `id_kategori`, `nama_layanan`, `satuan`, `harga_layanan`) VALUES
(1, 1, 'Nasi Goreng', 'Porsi', 12000),
(2, 1, 'Bakpia Pathuk', 'Porsi', 15000),
(4, 1, 'Mie Goreng', 'buah', 50000),
(5, 1, 'pempek kapal', 'porsi', 45000),
(6, 2, 'jus mangga', 'pcs', 15000);

-- --------------------------------------------------------

--
-- Table structure for table `tamu`
--

CREATE TABLE `tamu` (
  `id_tamu` int(11) NOT NULL,
  `prefix` varchar(5) NOT NULL,
  `nama_tamu` varchar(100) NOT NULL,
  `tipe_identitas` varchar(20) NOT NULL,
  `no_identitas` varchar(30) NOT NULL,
  `wn_tamu` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `hp_tamu` varchar(20) NOT NULL,
  `email_tamu` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tamu`
--

INSERT INTO `tamu` (`id_tamu`, `prefix`, `nama_tamu`, `tipe_identitas`, `no_identitas`, `wn_tamu`, `alamat`, `hp_tamu`, `email_tamu`) VALUES
(1, 'Mr', 'Antok Betotok', 'PASSPORT', '0000999933334444', 'Indonesia', 'jl kembang no 23', '081321232123', 'Antokbetok@GMAIL.COM'),
(8, 'Mr', 'Rendra Syahputra', 'KTP', '666677779999', 'China', 'Gonjiam Street number 23', '077124542332', 'Rendrasaputra@gmail.com'),
(10, 'Mrs', 'Aya Nugraha S', 'PASSPORT', '777799990000', 'Indonesia', 'Jl Bengkulu no 23', '081323452342', 'ayanugraha@gmail.com'),
(11, 'Mr', 'Renda Syahputri', 'KTP', '123123123', 'Korea Utara', 'jl cendrawasih no 23', '123123', 'rendrasyahputri@gmail.com'),
(12, 'Mr', 'Andre ', 'KTP', '123123', 'Indonesia', 'jl permai no 23', '081397231111', 'andreanfarhan@gmail.com'),
(13, 'Mr', 'Farhantama', 'KTP', '1231232342', 'Indonesia', 'Jl Manggis 23', '08199999992', 'manggis@gmail.com'),
(14, 'Ms', 'Salsabila', 'KTP', '123123123123', 'Korea Utara', 'Xianima Street 23', '1123123213', 'salsabiladit33@gmail.com'),
(15, 'Mr', 'Antok Lotok', 'KTP', '00009999333344442', 'China', 'jl xia gong 23', '089900020004', 'antoklotok@gmail.com'),
(16, 'Mr', 'Andy', 'KTP', '219022224444', 'Indonesia', 'Jl Hang Lekir no 23', '081922334444', 'andy0909@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tipe_kamar`
--

CREATE TABLE `tipe_kamar` (
  `id_tipe` int(50) NOT NULL,
  `nama_tipe` varchar(50) NOT NULL,
  `harga_malam` int(11) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tipe_kamar`
--

INSERT INTO `tipe_kamar` (`id_tipe`, `nama_tipe`, `harga_malam`, `keterangan`) VALUES
(3, 'Standart Room', 125000, 'Kamar standart,tidak mewah,dan biasa saja'),
(4, 'Luxury Room', 500000, 'kamar mewah dengan kolam renang di kamar\r\n\r\n'),
(7, 'Suite Room ', 750000, 'Kamar untuk keluarga ramai , mewah , elegant');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi_kamar`
--

CREATE TABLE `transaksi_kamar` (
  `id_transaksi_kamar` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_kamar` int(11) NOT NULL,
  `id_tamu` int(11) NOT NULL,
  `nomor_invoice` varchar(50) NOT NULL,
  `jumlah_dewasa` int(11) NOT NULL,
  `jumlah_anak` int(11) NOT NULL,
  `tanggal_checkin` date NOT NULL,
  `waktu_checkin` time NOT NULL,
  `tanggal_checkout` date NOT NULL,
  `waktu_checkout` time NOT NULL,
  `total_biaya_kamar` int(15) NOT NULL,
  `deposit` int(15) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi_kamar`
--

INSERT INTO `transaksi_kamar` (`id_transaksi_kamar`, `id_user`, `id_kamar`, `id_tamu`, `nomor_invoice`, `jumlah_dewasa`, `jumlah_anak`, `tanggal_checkin`, `waktu_checkin`, `tanggal_checkout`, `waktu_checkout`, `total_biaya_kamar`, `deposit`, `status`) VALUES
(13, 24, 8, 8, 'INV-20201105-30', 1, 1, '2020-11-05', '16:12:00', '2020-11-06', '12:00:00', 750000, 50000, 'Check-out'),
(14, 17, 10, 10, 'INV-20201105-14', 2, 1, '2020-11-05', '16:26:00', '2020-11-07', '12:00:00', 1500000, 300000, 'Check-out'),
(21, 24, 7, 8, 'INV-20201119-66', 2, 2, '2020-11-19', '17:02:00', '2020-11-20', '12:00:00', 750000, 50000, 'Check-out'),
(22, 17, 11, 15, 'INV-20201119-15', 1, 1, '2020-11-19', '19:11:00', '2020-11-22', '12:00:00', 375000, 50000, 'Check-out'),
(23, 17, 7, 1, 'INV-20201119-29', 1, 1, '2020-11-19', '19:46:00', '2020-11-20', '12:00:00', 750000, 250000, 'Check-out'),
(24, 24, 8, 8, 'INV-20201119-78', 1, 0, '2020-11-19', '19:48:00', '2020-11-20', '12:00:00', 750000, 50000, 'Check-out'),
(25, 24, 10, 1, 'INV-20201122-45', 2, 1, '2020-11-22', '18:34:00', '2020-11-23', '12:00:00', 500000, 250000, 'Check-out'),
(26, 24, 11, 16, 'INV-20201122-72', 1, 0, '2020-11-22', '18:34:00', '2020-11-23', '12:00:00', 125000, 50000, 'Check-out'),
(27, 24, 15, 10, 'INV-20201122-12', 4, 2, '2020-11-22', '18:35:00', '2020-11-24', '12:00:00', 1500000, 300000, 'Check-out'),
(28, 24, 15, 10, 'INV-20201122-12', 4, 2, '2020-11-22', '18:35:00', '2020-11-24', '12:00:00', 1500000, 300000, 'Check-out'),
(29, 17, 12, 1, 'INV-20201123-70', 1, 0, '2020-11-23', '14:28:00', '2020-11-24', '12:00:00', 125000, 50000, 'Check-out'),
(30, 24, 13, 16, 'INV-20201123-47', 1, 0, '2020-11-23', '20:48:00', '2020-11-24', '12:00:00', 0, 10000, 'Check-in'),
(31, 24, 14, 11, 'INV-20201123-10', 1, 0, '2020-11-23', '20:57:00', '2020-11-24', '12:00:00', 0, 10000, 'Check-in'),
(32, 24, 16, 12, 'INV-20201123-58', 1, 0, '2020-11-23', '21:01:00', '2020-11-24', '12:00:00', 0, 10000, 'Check-in'),
(33, 24, 17, 13, 'INV-20201123-86', 1, 0, '2020-11-23', '22:33:00', '2020-11-24', '12:00:00', 0, 50000, 'Check-in'),
(34, 24, 10, 1, 'INV-20201123-75', 2, 1, '2020-11-23', '23:04:00', '2020-11-24', '12:00:00', 500000, 10000, 'Check-out'),
(35, 24, 7, 8, 'INV-20201123-27', 2, 1, '2020-11-23', '23:05:00', '2020-11-24', '12:00:00', 500000, 10000, 'Check-out'),
(36, 24, 8, 13, 'INV-20201124-18', 1, 0, '2020-11-24', '16:33:00', '2020-11-25', '12:00:00', 0, 250000, 'Check-in');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi_layanan`
--

CREATE TABLE `transaksi_layanan` (
  `id_transaksi_layanan` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `waktu` time NOT NULL,
  `id_transaksi_kamar` int(11) NOT NULL,
  `id_layanan` int(11) NOT NULL,
  `jumlah` int(50) NOT NULL,
  `total` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi_layanan`
--

INSERT INTO `transaksi_layanan` (`id_transaksi_layanan`, `id_user`, `tanggal`, `waktu`, `id_transaksi_kamar`, `id_layanan`, `jumlah`, `total`) VALUES
(12, 17, '2020-11-17', '12:20:00', 13, 1, 1, 12000),
(13, 24, '2020-11-19', '17:03:00', 21, 1, 15, 180000),
(14, 24, '2020-11-19', '17:07:00', 21, 1, 12, 144000),
(15, 24, '2020-11-19', '17:07:00', 21, 2, 12, 180000),
(16, 17, '2020-11-19', '19:46:00', 23, 1, 1, 12000),
(17, 17, '2020-11-22', '18:35:00', 25, 1, 2, 24000),
(18, 24, '2020-11-24', '16:33:00', 36, 1, 1, 12000);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(40) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `level` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `nama`, `no_hp`, `level`) VALUES
(17, 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'Andrean', '123123', 1),
(24, 'fo123', '28af7cd114d41d84e88e144529eafda4bcd66475', 'Agil Sulapo', '08123123123122', 2),
(25, 'hk123', '092ccd5f308b27ed5b17014ae670f88bd4ea354a', 'JoeBilly', '082923452222', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kamar`
--
ALTER TABLE `kamar`
  ADD PRIMARY KEY (`id_kamar`),
  ADD KEY `kamar_ibfk_1` (`id_tipe`);

--
-- Indexes for table `kategori_layanan`
--
ALTER TABLE `kategori_layanan`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `layanan`
--
ALTER TABLE `layanan`
  ADD PRIMARY KEY (`id_layanan`),
  ADD KEY `layanan_ibfk_1` (`id_kategori`);

--
-- Indexes for table `tamu`
--
ALTER TABLE `tamu`
  ADD PRIMARY KEY (`id_tamu`);

--
-- Indexes for table `tipe_kamar`
--
ALTER TABLE `tipe_kamar`
  ADD PRIMARY KEY (`id_tipe`);

--
-- Indexes for table `transaksi_kamar`
--
ALTER TABLE `transaksi_kamar`
  ADD PRIMARY KEY (`id_transaksi_kamar`),
  ADD KEY `id_kamar` (`id_kamar`),
  ADD KEY `id_tamu` (`id_tamu`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `transaksi_layanan`
--
ALTER TABLE `transaksi_layanan`
  ADD PRIMARY KEY (`id_transaksi_layanan`),
  ADD KEY `transaksi_layanan_ibfk_1` (`id_layanan`),
  ADD KEY `id_transaksi_kamar` (`id_transaksi_kamar`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kamar`
--
ALTER TABLE `kamar`
  MODIFY `id_kamar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `kategori_layanan`
--
ALTER TABLE `kategori_layanan`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `layanan`
--
ALTER TABLE `layanan`
  MODIFY `id_layanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tamu`
--
ALTER TABLE `tamu`
  MODIFY `id_tamu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tipe_kamar`
--
ALTER TABLE `tipe_kamar`
  MODIFY `id_tipe` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `transaksi_kamar`
--
ALTER TABLE `transaksi_kamar`
  MODIFY `id_transaksi_kamar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `transaksi_layanan`
--
ALTER TABLE `transaksi_layanan`
  MODIFY `id_transaksi_layanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `kamar`
--
ALTER TABLE `kamar`
  ADD CONSTRAINT `kamar_ibfk_1` FOREIGN KEY (`id_tipe`) REFERENCES `tipe_kamar` (`id_tipe`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `layanan`
--
ALTER TABLE `layanan`
  ADD CONSTRAINT `layanan_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `kategori_layanan` (`id_kategori`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `transaksi_kamar`
--
ALTER TABLE `transaksi_kamar`
  ADD CONSTRAINT `transaksi_kamar_ibfk_1` FOREIGN KEY (`id_kamar`) REFERENCES `kamar` (`id_kamar`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `transaksi_kamar_ibfk_2` FOREIGN KEY (`id_tamu`) REFERENCES `tamu` (`id_tamu`),
  ADD CONSTRAINT `transaksi_kamar_ibfk_3` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Constraints for table `transaksi_layanan`
--
ALTER TABLE `transaksi_layanan`
  ADD CONSTRAINT `transaksi_layanan_ibfk_1` FOREIGN KEY (`id_layanan`) REFERENCES `layanan` (`id_layanan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `transaksi_layanan_ibfk_2` FOREIGN KEY (`id_transaksi_kamar`) REFERENCES `transaksi_kamar` (`id_transaksi_kamar`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `transaksi_layanan_ibfk_3` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
