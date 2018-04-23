-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 23, 2018 at 04:14 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `assignment3`
--

-- --------------------------------------------------------

--
-- Table structure for table `Ass5`
--

CREATE TABLE `ass5` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` text,
  `URL` text,
  `date` date DEFAULT NULL,
  `description` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Ass5`
--

INSERT INTO `Ass5` (`id`, `name`, `URL`, `date`, `description`) VALUES
(2, 'test', 'test', '0000-00-00', 'test'),
(4, 'test2', 'yesy2', '0000-00-00', '	yes'),
(5, 'test2', 'yesy2', '2018-04-23', '	yes'),
(6, 'test2', 'yesy2', '2018-04-23', '	yes'),
(7, 'tg', 'g', '2018-04-23', 't'),
(8, 'peter', 'rer', '2018-04-23', 'er'),
(9, 'grg', 'rgr', '2018-04-23', 'rgr');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Ass5`
--
ALTER TABLE `Ass5`
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Ass5`
--
ALTER TABLE `Ass5`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
