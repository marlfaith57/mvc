-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2024 at 05:15 AM
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
-- Database: `mvc_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(55) NOT NULL,
  `price` double NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `id_no` varchar(12) NOT NULL,
  `name` varchar(55) NOT NULL,
  `course` varchar(55) NOT NULL,
  `year_level` varchar(4) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created` date NOT NULL,
  `modified` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `id_no`, `name`, `course`, `year_level`, `image`, `created`, `modified`) VALUES
(1, '123456', 'Noniepogi', 'BSIT', '4', NULL, '2024-03-20', '2024-03-20'),
(2, '1707716', 'Marlon L. Castro', 'BSIT', '4', NULL, '0000-00-00', '0000-00-00'),
(8, '12356', 'test name', 'bsit', '4', 'student.png', '2024-04-26', '2024-04-26');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(55) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(15) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `role`, `created`, `modified`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin', '2024-04-26 04:09:22', '2024-04-26 04:09:22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
