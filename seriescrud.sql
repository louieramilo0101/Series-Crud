-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 19, 2025 at 06:27 AM
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
-- Table structure for table `seriescrud`
--

CREATE TABLE `seriescrud` (
  `id` int(11) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `multipleData` varchar(255) NOT NULL,
  `gender` enum('male','female','kids','') NOT NULL,
  `place` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `seriescrud`
--

INSERT INTO `seriescrud` (`id`, `fname`, `lname`, `email`, `mobile`, `multipleData`, `gender`, `place`) VALUES
(2, 'missu', 'bibi', 'akolangtomalakas@gas.com', '01010101', 'JavaScript', 'kids', ''),
(6, 'reetu123', 'mishra123', 'mishra@gmail.com', '12324212321', 'JavaScript, React, HTML', 'male', ''),
(9, 'roar', 'lion', 'lion@gmaul.com', '1234', 'JavaScript', 'male', ''),
(10, 'kasjd', 'lasjdlk', 'lkasjdlkasj@gmail.com', '12308120938', 'JavaScript, React, HTML', 'male', ''),
(11, 'qweqwe', 'qweqweq', 'qweqweqw@asd.com', '12312321', 'JavaScript', 'male', ''),
(12, 'dabee', 'lowiaa', 'lowi@gmail.comaa', '198273218900', 'JavaScript, React, HTML', 'male', ''),
(13, 'asd', 'qwe', 'asdas@gnaul.com', '18240', 'JavaScript', 'male', 'banglore'),
(14, '123', '123', 'qwih12@gaail.conm', '51654', 'React', 'male', 'Mumbai'),
(15, 'dave', 'asdasd', 'asdasd@ajkshd.com', '1237', 'React', 'male', 'Mysore'),
(16, 'DAMI', 'DAMi', 'dami@gmai.com', '123123', 'JavaScript', 'female', 'banglore'),
(17, 'asdasd', 'asdasda', 'asdasdasdas@gasf.com', '82717923', 'JavaScript, React, HTML', 'female', 'banglore');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `seriescrud`
--
ALTER TABLE `seriescrud`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `seriescrud`
--
ALTER TABLE `seriescrud`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
