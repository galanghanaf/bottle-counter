-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 03, 2022 at 05:41 AM
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
-- Database: `counter_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_botol`
--

CREATE TABLE `data_botol` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `shift` varchar(255) DEFAULT NULL,
  `botolkotordarichecker` varchar(255) DEFAULT NULL,
  `botolkosongdarivisualkosong` varchar(255) DEFAULT NULL,
  `botolyangmasuktreatment` varchar(255) DEFAULT NULL,
  `botolyangbisaditreatment` varchar(255) DEFAULT NULL,
  `botolyangtidakbisaditreatment` varchar(255) DEFAULT NULL,
  `createdAt` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_botol`
--

INSERT INTO `data_botol` (`id`, `name`, `shift`, `botolkotordarichecker`, `botolkosongdarivisualkosong`, `botolyangmasuktreatment`, `botolyangbisaditreatment`, `botolyangtidakbisaditreatment`, `createdAt`) VALUES
(23, 'Dhika Lama', 'Shift 2', '12', '11', '0', '0', '0', '2022-09-29'),
(24, 'Bina Marga', 'Shift 3', '0', '0', '0', '0', '0', '2022-09-29'),
(25, 'Bodi Santosa', 'Shift 1', '0', '0', '0', '0', '0', '2022-09-29'),
(26, 'Sandi Rama', 'Shift 2', '15', '50', '42', '21', '11', '2022-09-30'),
(27, 'Sandi Rama', 'Shift 3', '2', '31', '42', '14', '14', '2022-09-29'),
(28, 'Sandi Rama', 'Shift 3', '1', '1', '1', '1', '1', '2022-10-03'),
(29, 'Dhika Lama', 'Shift 1', '1', '1', '1', '1', '1', '2022-10-03'),
(31, 'Daffa Baru', 'Shift 1', '3', '4', '3', '3', '3', '2022-10-03'),
(32, 'Sandi Rama', 'Shift 2', '4', '3', '3', '7', '6', '2022-10-04'),
(33, 'Sandi Rama', 'Shift 1', '6', '4', '3', '4', '5', '2022-10-04'),
(34, 'Bina Marga', 'Shift 2', '3', '3', '4', '4', '4', '2022-10-05');

-- --------------------------------------------------------

--
-- Table structure for table `data_nama`
--

CREATE TABLE `data_nama` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_nama`
--

INSERT INTO `data_nama` (`id`, `name`) VALUES
(6, 'Bodi Santosa'),
(7, 'Sandi Rama'),
(8, 'Bina Marga'),
(9, 'Daffa Baru'),
(10, 'Galang Hanafi'),
(11, 'Dodi Saputra'),
(13, 'Dhika Lama'),
(14, 'Arya Bima'),
(15, 'Siti Gina'),
(16, 'Dina Mari'),
(17, 'test');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_botol`
--
ALTER TABLE `data_botol`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_nama`
--
ALTER TABLE `data_nama`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_botol`
--
ALTER TABLE `data_botol`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `data_nama`
--
ALTER TABLE `data_nama`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
