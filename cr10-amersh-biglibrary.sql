-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 23, 2022 at 06:11 PM
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
-- Database: `cr10-amersh-biglibrary`
--

-- --------------------------------------------------------

--
-- Table structure for table `blibrary`
--

CREATE TABLE `blibrary` (
  `id` int(11) NOT NULL,
  `pname` varchar(50) NOT NULL,
  `paddress` char(50) NOT NULL,
  `p_size` enum('big','bedium','small') NOT NULL,
  `publish_date` date DEFAULT NULL,
  `author_fname` varchar(30) NOT NULL,
  `author_lname` varchar(35) NOT NULL,
  `title` varchar(40) NOT NULL,
  `image` varchar(200) NOT NULL,
  `ISBNcode` int(11) DEFAULT NULL,
  `short_description` varchar(100) NOT NULL,
  `type` enum('Book','CD','DVD') DEFAULT NULL,
  `status` enum('available','reserved') DEFAULT NULL,
  `price` decimal(13,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blibrary`
--

INSERT INTO `blibrary` (`id`, `pname`, `paddress`, `p_size`, `publish_date`, `author_fname`, `author_lname`, `title`, `image`, `ISBNcode`, `short_description`, `type`, `status`, `price`) VALUES
(2, 'Winer Bücherei', 'westbahnstraße 101/3/4', 'big', '2012-10-10', 'Amer', 'Sh', 'PHP', 'https://media.istockphoto.com/photos/inscription-against-laptop-and-code-background-learn-php-programming-picture-id1297752994?s=612x612', 1221101, 'Hello world', 'DVD', 'available', '149.00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blibrary`
--
ALTER TABLE `blibrary`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blibrary`
--
ALTER TABLE `blibrary`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
