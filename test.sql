-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 04, 2022 at 03:47 AM
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
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `dop` datetime NOT NULL DEFAULT current_timestamp(),
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `qty` int(5) NOT NULL,
  `address` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `pincode` int(11) NOT NULL,
  `selected_model` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`dop`, `name`, `email`, `qty`, `address`, `pincode`, `selected_model`) VALUES
('2022-07-02 09:27:08', 'prasad', 'prasadbebale01@gmail.com', 1, '', 0, ''),
('2022-07-02 09:27:30', 'prasad', 'prasadbebale01@gmail.com', 1, '', 0, ''),
('2022-07-02 10:25:09', 'John Doe', 'john@doe.com', 1, '', 0, ''),
('2022-07-02 10:41:16', 'prasad', 'prasadbebale01@gmail.com', 12, 'Powai Naka, Satara, Maharashtra, India', 415002, 'Samusang'),
('2022-07-02 10:41:24', '', '', 0, '', 0, ''),
('2022-07-02 10:42:15', 'Prasad Chandrakant Bebale', 'prasadbebale01@gmail.com', 12, 'Powai Naka, Satara, Maharashtra, India', 415002, 'Samusang'),
('2022-07-02 13:20:47', 'Prasad Chandrakant Bebale', 'prasadbebale01@gmail.com', 1, 'Powai Naka, Satara, Maharashtra, India', 415002, 'sa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD KEY `dop` (`dop`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
