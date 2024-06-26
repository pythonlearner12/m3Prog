-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: mariadb
-- Generation Time: Apr 02, 2024 at 12:39 PM
-- Server version: 11.3.2-MariaDB-1:11.3.2+maria~ubu2204
-- PHP Version: 8.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `m3prog_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `meterstanden`
--

CREATE TABLE `meterstanden` (
  `id` int(11) NOT NULL,
  `stand` int(11) NOT NULL,
  `soort` varchar(16) NOT NULL,
  `datum` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


INSERT INTO `meterstanden` (`id`, `stand`, `soort`, `datum`) VALUES
(1, 10000, 'electriciteit', '2023-12-12'),
(2, 10000, 'electriciteit', '2023-12-01'),
(3, 10500, 'electriciteit', '2023-12-02'),
(4, 11000, 'electriciteit', '2023-12-03'),
(5, 12000, 'electriciteit', '2023-12-04'),
(6, 13000, 'electriciteit', '2023-12-05');
--
-- Indexes for dumped tables
--

--
-- Indexes for table `meterstanden`
--
ALTER TABLE `meterstanden`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `meterstanden`
--
ALTER TABLE `meterstanden`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
