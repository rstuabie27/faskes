-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 07, 2022 at 05:22 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbfaskes`
--

-- --------------------------------------------------------

--
-- Table structure for table `faskes`
--

CREATE TABLE `faskes` (
  `id` int(11) NOT NULL,
  `nama` varchar(45) DEFAULT NULL,
  `alamat` varchar(200) DEFAULT NULL,
  `latlong` varchar(40) DEFAULT NULL,
  `jenis_id` int(11) NOT NULL,
  `deskripsi` text DEFAULT NULL,
  `skor_rating` double DEFAULT NULL,
  `foto1` varchar(40) DEFAULT NULL,
  `foto2` varchar(40) DEFAULT NULL,
  `foto3` varchar(40) DEFAULT NULL,
  `kecamatan_id` int(11) NOT NULL,
  `website` varchar(45) DEFAULT NULL,
  `jumlah_dokter` int(11) DEFAULT NULL,
  `jumlah_pegawai` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `faskes`
--

INSERT INTO `faskes` (`id`, `nama`, `alamat`, `latlong`, `jenis_id`, `deskripsi`, `skor_rating`, `foto1`, `foto2`, `foto3`, `kecamatan_id`, `website`, `jumlah_dokter`, `jumlah_pegawai`) VALUES
(1, 'RS Grha Permata Ibu', 'Jl. K.H.M. Usman No.168, Kukusan, Kecamatan Beji, Kota Depok, Jawa Barat 16425', '-6.3706925,106.8134163', 1, 'Menjadi Rumah Sakit Terbaik, Modern dan mampu bersaing dalam memberikan pelayanan kesehatan di Kota Depok dan sekitarnya', 4.8, 'permataibu1.jpg', 'permataibu02.jpg', 'permataibu03.jpg', 1, 'https://www.grhapermataibu.com', 80, 25),
(2, 'RSU Hermina Depok', 'Jl. Siliwangi No.50, Depok, Kec. Pancoran Mas, Kota Depok, Jawa Barat 16436', '-6.3998703,106.8229752', 1, 'Rumah Sakit yg menyediakan berbagai fasilitas', 4, 'hermina01.jpg', 'hermina02.jpg', 'hermina03.jpg', 2, 'www.herminahospitals.com', 100, 300),
(3, 'Audy Dental Depok', 'Jl. Komjen.Pol.M.Jasin No.45B, Tugu, Kec. Cimanggis, Kota Depok, Jawa Barat 16451', '-6.3998703,106.8229752', 2, 'klinik gigi specialis', 5, 'audyd01.jpg', 'audyd02.jpg', 'audyd03.jpg', 2, 'www.audydental.com', 20, 50),
(4, 'Puskesmas Depok Utara', 'Jl. Halmahera No.118, Beji, Kecamatan Beji, Kota Depok, Jawa Barat 16421', '-6.384288455972429, 106.81086535485304', 4, 'Puskesmas dengan pelayanan ramah', 4.4, 'puskes01.jpg', 'puskes02.jpg', 'puskes03.jpg', 1, 'pkmdepokutara.depok.go.id', 100, 200),
(5, 'Apotek Kimia Farma Cilodong', 'Jl. Raya Jatimulya No.01, Jatimulya, Kec. Cilodong, Kota Depok, Jawa Barat 16413', '-6.443883208007479, 106.83003581204562', 5, 'Menyediakan Banyak Obat dengan kualitas baik', 3.8, 'kimiafarma01.jpg', 'kimiafarma02.jpg', 'kimiafarma03.jpg', 3, 'kimiafarmaapotek.co.id', 0, 30),
(6, 'Manar medika', 'Jl. Limo Raya No.77A, Limo, Kec. Limo, Kota Depok, Jawa Barat 16515', '-6.3706925,106.8134163', 3, 'Klinik dan apotek manar medika selalu jadi yang terbaik untuk pilihan bunda', 4.9, 'manarm01.jpg', 'manarm02.jpg', 'manarm03.jpg', 4, 'www.manarmedika.com', 100, 150),
(7, 'Kliknik Apotek Mutiara', 'Jl. Arif Rahman Hakim No.31, Beji, Kecamatan Beji, Kota Depok, Jawa Barat 16421', '-6.384288455972429,106.81086535485304', 1, 'Klinik dan apotek mutiara dengan dokter berkualitas dan obat yang komplit', 4.7, 'mutiara01.jpg', 'mutiara02.jpg', 'mutiara03.jpg', 4, 'www.apotekmutiara.com', 100, 150),
(8, 'RSUD depok Tapos', 'Jl. Raya Tapos, Cimpaeun, Kec. Tapos, Kota Depok, Jawa Barat 16459', '-6.384288455972429,106.81086535485304', 5, 'Tersedia BPJS ', 3.1, 'rsuddepok01.jpg', 'rsuddepok02.jpg', 'rsuddepok03.jpg', 5, 'www.persi.or.id', 200, 350);

-- --------------------------------------------------------

--
-- Table structure for table `jenis_faskes`
--

CREATE TABLE `jenis_faskes` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `jenis_faskes`
--

INSERT INTO `jenis_faskes` (`id`, `nama`) VALUES
(1, 'Rumah Sakit'),
(2, 'Klinik Gigi'),
(3, 'Klinik Umum'),
(4, 'Puskesmas'),
(5, 'Apotik'),
(7, 'Bidan');

-- --------------------------------------------------------

--
-- Table structure for table `kecamatan`
--

CREATE TABLE `kecamatan` (
  `id` int(11) NOT NULL,
  `nama` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `kecamatan`
--

INSERT INTO `kecamatan` (`id`, `nama`) VALUES
(1, 'Beji'),
(2, 'Pancoran Mas'),
(3, 'Cilodong'),
(4, 'Sawangan'),
(5, 'Tapos');

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE `komentar` (
  `id` int(11) NOT NULL,
  `tanggal` date DEFAULT NULL,
  `isi` text DEFAULT NULL,
  `users_id` int(11) NOT NULL,
  `faskes_id` int(11) DEFAULT NULL,
  `nilai_rating_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `komentar`
--

INSERT INTO `komentar` (`id`, `tanggal`, `isi`, `users_id`, `faskes_id`, `nilai_rating_id`) VALUES
(1, '2022-06-12', 'layanan nya baik', 2, 1, 4),
(2, '2022-06-06', 'woooow mantap!', 3, 2, 4),
(3, '2022-07-07', 'Pelayanan Kurang', 4, 3, 2),
(5, '2022-08-08', 'Pelayanan woow harga murah!', 6, 5, 5),
(14, '2022-07-02', 'Sangat Memuaskan', 21, 4, 3);

-- --------------------------------------------------------

--
-- Table structure for table `nilai_rating`
--

CREATE TABLE `nilai_rating` (
  `id` int(11) NOT NULL,
  `nama` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `nilai_rating`
--

INSERT INTO `nilai_rating` (`id`, `nama`) VALUES
(1, 'Jelek'),
(2, 'Kurang Bagus'),
(3, 'Biasa Aja'),
(4, 'Bagus'),
(5, 'Sangat Bagus'),
(7, 'mantapuuu');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `last_login` timestamp NULL DEFAULT NULL,
  `status` smallint(6) DEFAULT NULL,
  `role` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `created_at`, `last_login`, `status`, `role`) VALUES
(1, 'admin', '$2y$10$I4k8letAr1EJqjk8DATbuOOVdeyy4d4mSH3zBNvYk.Lb/35zDam0K', 'admin@gmail.com', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'administrator'),
(2, 'aminah', '90b74c589f46e8f3a484082d659308bd', 'aminah@gmail.com', '2022-06-12 00:32:06', '2022-06-12 00:32:06', 1, 'public'),
(3, 'Faqih', '123456', 'faqih@gmail.com', '2022-06-15 06:43:16', '2022-06-15 06:43:16', 1, 'public'),
(4, 'Zahra', '123456', 'zahra@gmail.com', '2022-06-15 06:44:14', '2022-06-15 06:44:14', 1, 'public'),
(6, 'Nisa', '123456', 'nisa@gmail.com', '2022-06-15 06:44:14', '2022-06-15 06:44:14', 1, 'public'),
(19, 'adminah', '$2y$10$qrnH8ieMh/1CV/9ZjdZqUOdO51fnEDjqxFp/bvCDT6Wc5UsRVMlWq', 'adminah@gmail.com', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'public'),
(20, 'Percobaan', '$2y$10$OOrnpwAzyRKEt3t56.RxW.JRun57F4iCXZmYYh1h3hhl5KxFQqX7u', 'percobaan@gmail.com', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'public'),
(21, 'Faqih Azhar', '$2y$10$tUo9Wo2jd1xAD9c5QvExK.2MHYhSOwbW3US6UFYsZHljFCaupHVB6', 'faqihazh@gmail.com', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'public'),
(22, 'Fahri Prastyo', '$2y$10$oAM4MHwexRcwen6rZ/js0eX/mdbChKVYU7pzKGb0yC.X2C6uxhvB2', 'fahri2@gmail.com', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'public');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `faskes`
--
ALTER TABLE `faskes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_produk_jenis_produk_idx` (`jenis_id`),
  ADD KEY `fk_tempat_wisata_kelurahan1_idx` (`kecamatan_id`);

--
-- Indexes for table `jenis_faskes`
--
ALTER TABLE `jenis_faskes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kecamatan`
--
ALTER TABLE `kecamatan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_pesanan_users1_idx` (`users_id`),
  ADD KEY `fk_pesanan_produk1_idx` (`faskes_id`),
  ADD KEY `fk_komentar_nilai_rating1_idx` (`nilai_rating_id`);

--
-- Indexes for table `nilai_rating`
--
ALTER TABLE `nilai_rating`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username_UNIQUE` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `faskes`
--
ALTER TABLE `faskes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `jenis_faskes`
--
ALTER TABLE `jenis_faskes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `kecamatan`
--
ALTER TABLE `kecamatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `nilai_rating`
--
ALTER TABLE `nilai_rating`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `faskes`
--
ALTER TABLE `faskes`
  ADD CONSTRAINT `fk_produk_jenis_produk` FOREIGN KEY (`jenis_id`) REFERENCES `jenis_faskes` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tempat_wisata_kelurahan1` FOREIGN KEY (`kecamatan_id`) REFERENCES `kecamatan` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `komentar`
--
ALTER TABLE `komentar`
  ADD CONSTRAINT `fk_komentar_nilai_rating1` FOREIGN KEY (`nilai_rating_id`) REFERENCES `nilai_rating` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_pesanan_produk1` FOREIGN KEY (`faskes_id`) REFERENCES `faskes` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_pesanan_users1` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
