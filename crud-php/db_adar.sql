-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 21, 2022 at 06:25 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `abc`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_xyz`
--

CREATE TABLE `tbl_xyz` (
  `id_xyz` int(11) NOT NULL,
  `nama_xyz` varchar(100) NOT NULL,
  `email_xyz` varchar(100) NOT NULL,
  `ket_xyz` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_xyz`
--

INSERT INTO `tbl_xyz` (`id_xyz`, `nama_xyz`, `email_xyz`, `ket_xyz`) VALUES
(1, 'faisol', 'faisolgans@gmail.com', 'faisol gg'),
(2, 'boy', 'boy@gmail.com', 'boy lol'),
(4, 'anton', 'anto@gmail.com', 'anton gg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_xyz`
--
ALTER TABLE `tbl_xyz`
  ADD PRIMARY KEY (`id_xyz`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_xyz`
--
ALTER TABLE `tbl_xyz`
  MODIFY `id_xyz` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
