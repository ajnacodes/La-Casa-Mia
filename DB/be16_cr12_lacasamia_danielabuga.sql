-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 02, 2022 at 11:30 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `be16_cr12_lacasamia_danielabuga`
--
CREATE DATABASE IF NOT EXISTS `be16_cr12_lacasamia_danielabuga` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `be16_cr12_lacasamia_danielabuga`;

-- --------------------------------------------------------

--
-- Table structure for table `properties`
--

CREATE TABLE `properties` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `size` int(11) NOT NULL,
  `rooms_n` int(3) NOT NULL,
  `city` varchar(50) NOT NULL,
  `price` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `address` varchar(100) NOT NULL,
  `latitude` varchar(20) NOT NULL,
  `longitude` varchar(20) NOT NULL,
  `price_reduction` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `properties`
--

INSERT INTO `properties` (`id`, `title`, `size`, `rooms_n`, `city`, `price`, `image`, `address`, `latitude`, `longitude`, `price_reduction`) VALUES
(1, 'Appartment ', 100, 3, 'Vienna, 1180', 200000, 'image1.jpg', 'Potzleinsdorfer Str. 34', '48.24020', '16.31471', 'yes'),
(2, 'Sunny Appartment with Garden', 140, 4, 'Vienna, 1080', 250000, 'image2.jpg', 'Laudongasse 9-1', '48.21343', '16.35295', 'no'),
(3, 'Top Floor Luxury Apartment With Pool', 250, 4, 'Vienna, 1020', 500000, 'image3.jpg', 'Taborstrasse 111', '48.22834', '16.39028', 'no'),
(4, 'Cozy House with Garden and Pool', 400, 5, 'Vienna, 1230', 1000000, 'image4.jpg', 'Kunerolgasse 3', '48.15462', '16.30162', 'yes'),
(5, 'Small House', 100, 2, 'Vienna, 1130', 450000, 'image5.jpg', 'Hiezing', '48.17352', '16.25407', 'yes');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `properties`
--
ALTER TABLE `properties`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `properties`
--
ALTER TABLE `properties`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
