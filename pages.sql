-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 25, 2022 at 12:06 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.2.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sp`
--

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(11) NOT NULL,
  `title1` varchar(100) NOT NULL,
  `para1` text NOT NULL,
  `image1` varchar(50) NOT NULL,
  `title2` varchar(100) NOT NULL,
  `para2` text NOT NULL,
  `image2` varchar(50) NOT NULL,
  `title3` varchar(100) NOT NULL,
  `para3` text NOT NULL,
  `image3` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `title1`, `para1`, `image1`, `title2`, `para2`, `image2`, `title3`, `para3`, `image3`) VALUES
(1, 'Picking Team test', 'Our picking team consists of islanders who are come from the spc scheme. These pickers come over for about 6-24 months and then go home back to the islands where they get to bring money back to their homes and family\'s.', '../images/picking team.jpeg', 'Packing Team test', 'Packing Team test', '../images/packing team.jfif', 'Dispatch Team test', 'Dispatch Teams job is to organised and send out fruit ready to be sent to supermarkets or overseas. Packing teams job is to organise the chiller and ensure that all the fruit is in a good condition and is staying fresh.', '../images/dispatch team.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
