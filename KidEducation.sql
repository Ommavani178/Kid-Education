-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 02, 2023 at 06:37 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ad`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ID` int(11) NOT NULL,
  `fullname` varchar(50) DEFAULT NULL,
  `password` varchar(10) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `phone` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ID`, `fullname`, `password`, `email`, `phone`) VALUES
(1, 'admin', 'admin12345', 'admin@gmail.com', 9924820307);

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `ID` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`ID`, `Name`, `email`, `phone`, `message`) VALUES
(1, 'wrg', 'werg@gmail.com', 5487554, 'wefweg'),
(2, '', '', 0, ''),
(3, '', '', 0, ''),
(4, '', '', 0, ''),
(5, '', '', 0, ''),
(6, '', '', 0, ''),
(7, 'Om Mavani', 'k@gmail.com', 9924820307, 'scvSBDCHJvCJvhzscvjZS'),
(8, 'Om Mavani', 'a@gmail.com', 9924820307, 'dsvzdvzsdvzsvzd'),
(9, 'Om Mavani', 'admin@gmail.com', 9924820307, 'dfvjdhvcjehvbcejbc'),
(10, 'deep', 'deep@gmail.com', 995642631, 'this is best website....'),
(11, 'dfb', 'k@gmail.com', 6458653451, 'vew'),
(12, 'dvdc', 'k@gmail.com', 2165, '');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `ID` int(50) NOT NULL,
  `fullname` varchar(255) DEFAULT NULL,
  `password` varchar(10) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `phone` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`ID`, `fullname`, `password`, `email`, `phone`) VALUES
(1, 'admin', 'admin12345', 'admin@gmail.com', 9924820307),
(46, 'om', '12345678', 'om@gmail.com', 992482030),
(48, 'Om Mavani', '159159159', 'k@gmail.com', 9924820307);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `ID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
