-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 10, 2022 at 08:24 PM
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
  `date_created` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_botol`
--

INSERT INTO `data_botol` (`id`, `name`, `shift`, `botolkotordarichecker`, `botolkosongdarivisualkosong`, `botolyangmasuktreatment`, `botolyangbisaditreatment`, `date_created`) VALUES
(41, ' Bina Marga', 'Shift 1', '1', '1', '1', '1', '2022-10-09'),
(42, ' admin', 'Shift 3', '8', '2', '3', '3', '2022-10-10'),
(45, 'galanghanafi', 'Shift 1', '0', '0', '0', '0', '2022-10-10'),
(46, ' Bodi Santosa', 'Shift 2', '1', '0', '0', '0', '2022-10-10'),
(49, ' Andi Setiawan', 'Shift 3', '24', '76', '15', '36', '2022-10-10'),
(50, ' Siti Marna', 'Shift 1', '12', '62', '84', '732', '2022-10-11');

-- --------------------------------------------------------

--
-- Table structure for table `data_supervisor`
--

CREATE TABLE `data_supervisor` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `date_created` int(11) DEFAULT NULL,
  `date_changed` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_supervisor`
--

INSERT INTO `data_supervisor` (`id`, `name`, `date_created`, `date_changed`) VALUES
(1, 'Andi Setiawan', 1665419303, 1665423700),
(2, 'Ridwan Aji', 1665419347, 1665419347),
(3, 'Siti Marna', 1665419357, 1665423674);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL,
  `date_changed` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `image`, `email`, `password`, `role_id`, `is_active`, `date_created`, `date_changed`) VALUES
(35, 'admin', 'default.jpg', 'admin@mail.com', '1234', 1, 1, 1665402921, 1665402921),
(36, 'user', 'default.jpg', 'user@mail.com', '1234', 2, 1, 1665402949, 1665402949);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_botol`
--
ALTER TABLE `data_botol`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_supervisor`
--
ALTER TABLE `data_supervisor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_botol`
--
ALTER TABLE `data_botol`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `data_supervisor`
--
ALTER TABLE `data_supervisor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
