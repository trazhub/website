-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 20, 2023 at 05:41 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cybuss`
--

-- --------------------------------------------------------

--
-- Table structure for table `laundary`
--

CREATE TABLE `laundary` (
  `id` int(111) NOT NULL,
  `name` varchar(55) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `city` varchar(255) NOT NULL,
  `pincode` varchar(20) NOT NULL,
  `dry_cleaning` varchar(5) NOT NULL,
  `laundary` varchar(5) NOT NULL,
  `shoes_cleaning` varchar(5) NOT NULL,
  `home_cleaning` varchar(5) NOT NULL,
  `iron_cleaning` varchar(5) NOT NULL,
  `luggage` text NOT NULL,
  `carpet` varchar(5) NOT NULL,
  `sofa` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `laundary`
--

INSERT INTO `laundary` (`id`, `name`, `phone`, `city`, `pincode`, `dry_cleaning`, `laundary`, `shoes_cleaning`, `home_cleaning`, `iron_cleaning`, `luggage`, `carpet`, `sofa`) VALUES
(1, 'abc', '1212222211', 'patna', '801103`', 'on', 'on', 'on', 'on', 'on', 'on', '', 'on'),
(2, 'Suraj Kumar', '08210767986', 'patna', '801103`', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on'),
(3, 'Suraj Kumar', '08210767986', 'patna', '801103`', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on'),
(4, 'Suraj Kumar', '08210767986', 'patna', '801103`', 'on', '', '', '', '', '', '', ''),
(5, 'Suraj Kumar', '08210767986', 'patna', '801103`', '', '', '', '', '', '', '', ''),
(6, 'Suraj Kumar', '08210767986', 'patna', '801103`', '', '', '', '', '', '', '', ''),
(7, 'Suraj Kumar', '08210767986', 'patna', '801103`', '', '', '', '', '', '', 'on', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `laundary`
--
ALTER TABLE `laundary`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `laundary`
--
ALTER TABLE `laundary`
  MODIFY `id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
