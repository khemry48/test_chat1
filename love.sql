-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 18, 2024 at 05:43 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test_1`
--

-- --------------------------------------------------------

--
-- Table structure for table `love`
--

CREATE TABLE `love` (
  `id` int(11) NOT NULL,
  `message` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `love`
--

INSERT INTO `love` (`id`, `message`, `date`) VALUES
(20, 'esrathyhghrfsghfd', '2024-09-18 15:02:46'),
(21, 'dsfgdf', '2024-09-18 15:02:47'),
(22, 'gdf', '2024-09-18 15:02:47'),
(32, 'rtydjyhjgctykuyjhg7ki ', '2024-09-18 15:03:03'),
(33, 'ghjfcgj', '2024-09-18 15:03:04'),
(34, 'hjghjgh', '2024-09-18 15:03:05'),
(35, 'ghjgh', '2024-09-18 15:03:06'),
(36, 'jghjgh', '2024-09-18 15:03:07'),
(37, 'jhgjgh', '2024-09-18 15:03:08'),
(38, 'hgjhgj', '2024-09-18 15:03:09'),
(39, 'jgjgjg', '2024-09-18 15:03:10'),
(40, 'ghjtfgjtgych', '2024-09-18 15:03:11'),
(41, 'fctyghcjjujc', '2024-09-18 15:03:12'),
(42, 'fvtyuvgkkhjhihjk', '2024-09-18 15:03:14'),
(43, 'ftcyjuchjihghj', '2024-09-18 15:03:15'),
(44, 'fctyuhcjjij', '2024-09-18 15:03:16'),
(45, 'tfcyjhcujgvjv', '2024-09-18 15:03:18'),
(46, 'fdc ty6chjhufifggvhjv', '2024-09-18 15:03:19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `love`
--
ALTER TABLE `love`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `love`
--
ALTER TABLE `love`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
