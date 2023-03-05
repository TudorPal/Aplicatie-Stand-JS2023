-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 02, 2022 at 03:03 PM
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
-- Database: `bestcj_standuri`
--

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `id` int(11) NOT NULL,
  `user` varchar(64) NOT NULL,
  `pass` varchar(64) NOT NULL,
  `size` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`id`, `user`, `pass`, `size`) VALUES
(1, 'best', 'best95', '4'),
(2, 'rapidonkey', '6BdRFZXnTm', '4'),
(3, 'emerson', 'CHSr7L1vGQ', '4'),
(4, '.msg', 'fElvvLhsMc', '4'),
(5, 'connatix', 'H9SKHWyvBP', '4'),
(6, 'accenture', 'k0nXXzCvCu', '4'),
(7, 'frequentis', '6aFmR6kCej', '4'),
(8, 'analogd', 'LrWaxpZh9z', '4'),
(9, 'wayfare', 'UppzJqb6Yt', '4'),
(10, 'pitech', 'beOlEsfJqK', '4'),
(11, 'evozon', 'cLFA7yl1k5', '4'),
(12, 'grab', '8i98k5zAkn', '4'),
(13, 'fme', 'CEsi93zHfx', '4'),
(14, 'bosch', 'aJK5ggDKi9', '4'),
(15, 'rebeld', 'aJK5ggDKi9', '4'),
(16, 'umts', 'PBppiRaB0z', '4'),
(17, 'barebyte', 'EnVZ7VmueT', '4'),
(18, 'cbsm', 'vKQgiIbS2e', '4'),
(19, 'accesa', 'BrMFGJe9JI', '4');

-- --------------------------------------------------------

--
-- Table structure for table `companies_tables`
--

CREATE TABLE `companies_tables` (
  `company_id` int(11) NOT NULL,
  `table_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `companies_tables`
--

INSERT INTO `companies_tables` (`company_id`, `table_id`) VALUES
(1, 19);

-- --------------------------------------------------------

--
-- Table structure for table `tables`
--

CREATE TABLE `tables` (
  `id` int(11) NOT NULL,
  `size` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tables`
--

INSERT INTO `tables` (`id`, `size`) VALUES
(1, '4'),
(2, '4'),
(3, '4'),
(4, '4'),
(5, '4'),
(6, '4'),
(7, '4'),
(8, '4'),
(9, '4'),
(10, '4'),
(11, '4'),
(12, '4'),
(13, '4'),
(14, '4'),
(15, '4'),
(16, '4'),
(17, '4'),
(18, '4'),
(19, '4'),
(20, '4'),
(21, '4'),
(22, '4'),
(23, '4'),
(24, '4'),
(25, '4');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `companies_tables`
--
ALTER TABLE `companies_tables`
  ADD UNIQUE KEY `table_id` (`table_id`),
  ADD UNIQUE KEY `company_id_2` (`company_id`),
  ADD KEY `company_id` (`company_id`,`table_id`);

--
-- Indexes for table `tables`
--
ALTER TABLE `tables`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tables`
--
ALTER TABLE `tables`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
