-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 11, 2024 at 08:37 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `task_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_account`
--

CREATE TABLE `tbl_account` (
  `id` int(25) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_account`
--

INSERT INTO `tbl_account` (`id`, `name`, `image`) VALUES
(12, 'DYP1', '2047520146_1.jpg'),
(13, 'DYP2', '48304776_2.jpg'),
(14, 'DYP3', '1230236102_3.jpg'),
(15, 'DYP4', '678525971_4.jpg'),
(16, 'DYP5', '1366930505_5.jpg'),
(17, 'DYP6', '1825099979_7.jpg'),
(18, 'DYP8', '1434892551_8.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact`
--

CREATE TABLE `tbl_contact` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_contact`
--

INSERT INTO `tbl_contact` (`id`, `name`, `address`, `city`, `image`, `message`) VALUES
(1, 'Mayur Madhukar More', 'RADHANGARI', 'kolhapur', '', 'TEST'),
(6, 'Pramod', 'Klohapur', 'kolhapur', '', 'Demo'),
(7, 'Shubham', 'Chandagad', 'kolhapur', '541887065_home.webp', 'Nature');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(10) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(25) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `username`, `password`, `role`) VALUES
(1, 'katkarp5474@gmail.com', '25d55ad283aa400af464c76d713c07ad', 'user'),
(2, 'admin@gmail.com', '25d55ad283aa400af464c76d713c07ad', 'admin'),
(3, 'abc@gmail.com', '25d55ad283aa400af464c76d713c07ad', 'user'),
(4, 'aa@gmail.com', '25d55ad283aa400af464c76d713c07ad', ''),
(5, 'bb@gmail.com', '25d55ad283aa400af464c76d713c07ad', 'user'),
(6, 'mayur@gmail.com', '25d55ad283aa400af464c76d713c07ad', 'user'),
(7, 'rohan@gmail.com', '25d55ad283aa400af464c76d713c07ad', 'user'),
(8, 'sai@gmail.com', '25d55ad283aa400af464c76d713c07ad', 'user'),
(9, 'shri@gmail.com', '25d55ad283aa400af464c76d713c07ad', 'user'),
(10, 'sakshi@gmail.com', '25d55ad283aa400af464c76d713c07ad', 'user'),
(11, 'more@gmail.com', '25d55ad283aa400af464c76d713c07ad', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_account`
--
ALTER TABLE `tbl_account`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_account`
--
ALTER TABLE `tbl_account`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
