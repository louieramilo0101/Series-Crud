-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 06, 2025 at 03:42 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crudseries`
--

-- --------------------------------------------------------

--
-- Table structure for table `multipledata`
--

CREATE TABLE `multipledata` (
  `id` int(11) NOT NULL,
  `checkBoxData` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `multipledata`
--

INSERT INTO `multipledata` (`id`, `checkBoxData`) VALUES
(1, 'JavaScript, React, HTML'),
(2, 'JavaScript, React'),
(3, 'JavaScript, HTML'),
(4, 'JavaScript, React, HTML, CSS'),
(5, 'JavaScript, React, HTML, CSS');

-- --------------------------------------------------------

--
-- Table structure for table `seriescrud`
--

CREATE TABLE `seriescrud` (
  `id` int(11) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `multipleData` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `seriescrud`
--

INSERT INTO `seriescrud` (`id`, `fname`, `lname`, `email`, `mobile`, `multipleData`) VALUES
(2, 'missu', 'bibi', 'akolangtomalakas@gas.com', '01010101', ''),
(3, 'reetu', 'mishura', 'missu@gmail.com', '1234455', ''),
(5, 'seema', 'sharmas', 'sheema@gmail.com', '111111', 'JavaScript, React, HTML'),
(6, 'reetu123', 'mishra123', 'mishra@gmail.com', '12324212321', 'JavaScript, React, HTML');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `multipledata`
--
ALTER TABLE `multipledata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seriescrud`
--
ALTER TABLE `seriescrud`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `multipledata`
--
ALTER TABLE `multipledata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `seriescrud`
--
ALTER TABLE `seriescrud`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
