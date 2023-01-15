-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 08, 2023 at 11:30 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `service`
--

-- --------------------------------------------------------

--
-- Table structure for table `komputer`
--

CREATE TABLE `komputer` (
  `pc_id` int(11) NOT NULL,
  `pc_merk` varchar(30) NOT NULL,
  `pc_nama_client` varchar(200) NOT NULL,
  `pc_spesifikasi` varchar(200) NOT NULL,
  `pc_kontak` varchar(100) NOT NULL,
  `pc_status` varchar(200) NOT NULL,
  `pc_photo` varchar(200) NOT NULL DEFAULT 'default.png'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `komputer`
--

INSERT INTO `komputer` (`pc_id`, `pc_merk`, `pc_nama_client`, `pc_spesifikasi`, `pc_kontak`, `pc_status`, `pc_photo`) VALUES
(1, 'Asus', 'Nurul F', 'Asus X415', '089265515074', 'Level 2', 'NURUL.jpg'),
(2, 'Asus', 'Amelia', 'Asus A416', '087916523221', 'Level 1', 'default.png'),
(3, 'Lenovo', 'Lili', 'Lenovo L311', '0817917655142', 'Level 2', 'default.png');

-- --------------------------------------------------------

--
-- Table structure for table `layanan`
--

CREATE TABLE `layanan` (
  `service_id` int(11) NOT NULL,
  `no_registrasi` varchar(30) NOT NULL,
  `pc_id` int(11) NOT NULL,
  `teknisi_id` int(11) NOT NULL,
  `service_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `merk` varchar(30) NOT NULL,
  `keluhan` varchar(200) NOT NULL,
  `harga` float NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `layanan`
--

INSERT INTO `layanan` (`service_id`, `no_registrasi`, `pc_id`, `teknisi_id`, `service_date`, `merk`, `keluhan`, `harga`, `status`) VALUES
(1, '2022121801', 1, 1, '2022-12-28 16:08:00', '', 'LCD blocking', 100, ''),
(2, '2022121802', 1, 1, '2022-12-28 16:28:15', '', 'Keyboard', 50, ''),
(3, '20230108', 2, 1, '2023-01-08 08:53:18', '', 'Layar rusak', 50, 'Level 1');

-- --------------------------------------------------------

--
-- Table structure for table `stock`
--

CREATE TABLE `stock` (
  `stock_id` int(11) NOT NULL,
  `stock_nama` varchar(100) NOT NULL,
  `stock_merk` varchar(100) NOT NULL,
  `stock_spesifikasi` varchar(200) NOT NULL,
  `stock_total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stock`
--

INSERT INTO `stock` (`stock_id`, `stock_nama`, `stock_merk`, `stock_spesifikasi`, `stock_total`) VALUES
(1, 'LCD', 'ASUS', '16 inchi', 10),
(2, 'VGA', 'Asus X416', 'Baru', 4);

-- --------------------------------------------------------

--
-- Table structure for table `teknisi`
--

CREATE TABLE `teknisi` (
  `teknisi_id` int(11) NOT NULL,
  `teknisi_nama` varchar(100) NOT NULL,
  `teknisi_email` varchar(100) NOT NULL,
  `teknisi_kontak` varchar(100) NOT NULL,
  `teknisi_alamat` varchar(200) NOT NULL,
  `teknisi_photo` varchar(100) NOT NULL DEFAULT 'default.png'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teknisi`
--

INSERT INTO `teknisi` (`teknisi_id`, `teknisi_nama`, `teknisi_email`, `teknisi_kontak`, `teknisi_alamat`, `teknisi_photo`) VALUES
(1, 'Agus', 'gus123@gmail.com', '08976987611', 'Jl. Banda', 'Cha Eun Woo polisi.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `usertype` varchar(100) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `user_photo` varchar(100) NOT NULL DEFAULT 'default.png'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `usertype`, `fullname`, `user_photo`) VALUES
(1, 'Nurul', '$2y$10$ShAmErEl7vPag9DM4mzycOzFNGzTbTp4BN8A/hnTzux3BVJ0ToHNC', 'Manager', 'Nurul F', 'NURUL.jpg'),
(2, 'suci', '$2y$10$9gLL81UUVfeUobIFZng2F.ZsjFVP5JXk7x8tDq2rTsL7J5N1neJQi', 'Admin', 'uciw', 'default.png'),
(3, 'nurulf', '$2y$10$Ed6dqkeJZ78KzX70.xdqNeS6Ddz2oMoc6fWWVXD7.tGQj/BhptEhG', 'Manager', 'nurulf', 'default.png'),
(4, 'nurulf', '$2y$10$IC5WkOrm7JV.w9gIEXV8H.muP3i/nOXOZ4MiZgZjDR2V43sh3l9.q', 'Manager', 'nurulf', 'default.png'),
(5, 'mark', '$2y$10$faH.kLe2WzeY1FSd6xJl.u3IIYV2m7v.ChkE..RHcN02IKbnT4S.y', 'Teknisi', 'mark', 'default.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `komputer`
--
ALTER TABLE `komputer`
  ADD PRIMARY KEY (`pc_id`);

--
-- Indexes for table `layanan`
--
ALTER TABLE `layanan`
  ADD PRIMARY KEY (`service_id`),
  ADD KEY `pc_id` (`pc_id`),
  ADD KEY `teknisi_id` (`teknisi_id`);

--
-- Indexes for table `stock`
--
ALTER TABLE `stock`
  ADD PRIMARY KEY (`stock_id`);

--
-- Indexes for table `teknisi`
--
ALTER TABLE `teknisi`
  ADD PRIMARY KEY (`teknisi_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `komputer`
--
ALTER TABLE `komputer`
  MODIFY `pc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `layanan`
--
ALTER TABLE `layanan`
  MODIFY `service_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `stock`
--
ALTER TABLE `stock`
  MODIFY `stock_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `teknisi`
--
ALTER TABLE `teknisi`
  MODIFY `teknisi_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `layanan`
--
ALTER TABLE `layanan`
  ADD CONSTRAINT `layanan_ibfk_1` FOREIGN KEY (`pc_id`) REFERENCES `komputer` (`pc_id`),
  ADD CONSTRAINT `layanan_ibfk_2` FOREIGN KEY (`teknisi_id`) REFERENCES `teknisi` (`teknisi_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
