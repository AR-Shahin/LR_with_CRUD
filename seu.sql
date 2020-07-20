-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 20, 2020 at 06:21 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `seu`
--

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`id`, `name`, `email`, `pass`) VALUES
(1, 'Shahin', 's@gmail.com', '123'),
(4, ' amin', 'a@gmail.com', '555'),
(5, ' ddd', 's@gmail.com', '123'),
(6, ' ss', 's@gmail.com', 'sss'),
(7, ' pp', 's@gmail.com', '88'),
(8, ' ss', 'fi@gmail.com', 'ss'),
(9, ' s', 'fi@gmail.com', 'ss'),
(10, ' shahin', 'arshahin@gmail.com', '123'),
(11, ' coder shahin', 'p@gmail.com', '123'),
(12, ' ss', 'k@gmail.com', '11'),
(13, ' shahin', 'd@gmail.com', 'dd'),
(14, ' Anisur Rahman Shahin', 'r@gmail.com', 'aa'),
(15, ' shahin wordpress', 'pa@gmail.com', '12'),
(16, ' AR Shahin', 'shahin@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `name` varchar(60) NOT NULL,
  `s_id` bigint(50) NOT NULL,
  `password` varchar(25) NOT NULL,
  `email` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `name`, `s_id`, `password`, `email`) VALUES
(1, 'Shahin', 123, '321', 'sha@gmail.com'),
(2, 'AR Shahin', 2147483647, '111', 'shahin@gmail.com'),
(3, 'AR Shahin', 2147483647, '555', 'shahin@gmail.com'),
(4, 'll', 2147483647, '111', 'shahin@gmail.com'),
(5, 'coder shahin', 2147483647, '55', 'shahin@gmail.com'),
(6, 'coder shahin', 2147483647, '55', 'shahin@gmail.com'),
(7, 'coder shahin', 123456, '55', 'shahin@gmail.com'),
(8, 'coder shahin', 2147483647, '88', 'shahin@gmail.com'),
(9, 'coder shahin', 2147483647, '66', 'shahin@gmail.com'),
(10, 'AR Shahin', 2147483647, '123', 'shahin@gmail.com'),
(11, 'AR Shahin', 2147483647, '55', 'shahin@gmail.com'),
(12, 'AR Shahin', 1, '555', 'shahin@gmail.com'),
(13, 'AR Shahin', 5, '5656', 'shahin@gmail.com'),
(14, 'AR Shahin', 2018200000018, '111', 'shahin@gmail.com'),
(15, 'll', 2018200000018, '55', 'shahin@gmail.com'),
(16, 'AR Shahin', 12345, '111', 'shahin@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data`
--
ALTER TABLE `data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
