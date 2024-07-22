-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 16, 2022 at 02:55 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `amsdatabase`
--

-- --------------------------------------------------------

--
-- Table structure for table `complaint`
--

CREATE TABLE `complaint` (
  `Complaint_no` int(255) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Complaint` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `complaint`
--

INSERT INTO `complaint` (`Complaint_no`, `Name`, `Complaint`) VALUES
(5, 'akejfba', 'aeufjanf'),
(6, 'alfnae', 'akubuakejg'),
(7, 'akufbaef', 'qiuefhkajeg');

-- --------------------------------------------------------

--
-- Table structure for table `flats`
--

CREATE TABLE `flats` (
  `Flat_id` int(100) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Block` varchar(100) NOT NULL,
  `Manager_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `flats`
--

INSERT INTO `flats` (`Flat_id`, `Name`, `Block`, `Manager_name`) VALUES
(87, 'alijaeg', 'BLOCK-B1', 'dlkgknsg'),
(2485, 'sjfkns', 'BLOCK-B1', 'sos'),
(249, 'rsgsg', 'Select Block', 'dhf');

-- --------------------------------------------------------

--
-- Table structure for table `manager`
--

CREATE TABLE `manager` (
  `Name` varchar(100) NOT NULL,
  `Phone` bigint(100) NOT NULL,
  `Email_id` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `manager`
--

INSERT INTO `manager` (`Name`, `Phone`, `Email_id`, `Password`) VALUES
('abcd', 1234, 'abcd@ab.ab', 'abcd'),
('asdfg', 1234567, 'abcd@ab.abc', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `Pay_id_no` int(100) NOT NULL,
  `Tenant_name` varchar(100) NOT NULL,
  `Ten_id_no` int(100) NOT NULL,
  `Accm_type` varchar(100) NOT NULL,
  `House_type` varchar(100) NOT NULL,
  `Pay_amt` int(100) NOT NULL,
  `Pay_type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`Pay_id_no`, `Tenant_name`, `Ten_id_no`, `Accm_type`, `House_type`, `Pay_amt`, `Pay_type`) VALUES
(23847, 'oinr', 3849, 'veg', 'AC', 9999, 'CASH'),
(991891, 'ajofalefn', 0, 'veg', 'AC', 289123, 'CASH'),
(3294732, 'kjfkauejf', 18347, 'veg', 'AC', 2308, 'BANKING');

-- --------------------------------------------------------

--
-- Table structure for table `tenant`
--

CREATE TABLE `tenant` (
  `Ten_reg_no` int(100) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Address` text NOT NULL,
  `Phone` bigint(100) NOT NULL,
  `Email_id` varchar(100) NOT NULL,
  `Managername` varchar(100) NOT NULL,
  `Payment` int(100) NOT NULL,
  `Block` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tenant`
--

INSERT INTO `tenant` (`Ten_reg_no`, `Name`, `Address`, `Phone`, `Email_id`, `Managername`, `Payment`, `Block`) VALUES
(326, 'biubiku', 'uhbij', 9999999, 'kk@kk.kk', 'iub', 986, 'BLOCK-B1'),
(9876, 'oihghg', 'igujfhgf', 14873, 'sjkw@kbhw.wb', 'qwdkb', 45678, 'BLOCK-B2'),
(23456, 'vineethkm', 'zrxdtcfygvbhjk', 34567, '2345@17345.234', 'wertghj', 45678, 'BLOCK-B3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `complaint`
--
ALTER TABLE `complaint`
  ADD PRIMARY KEY (`Complaint_no`);

--
-- Indexes for table `manager`
--
ALTER TABLE `manager`
  ADD UNIQUE KEY `Email_id` (`Email_id`) USING BTREE;

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`Pay_id_no`);

--
-- Indexes for table `tenant`
--
ALTER TABLE `tenant`
  ADD PRIMARY KEY (`Ten_reg_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `complaint`
--
ALTER TABLE `complaint`
  MODIFY `Complaint_no` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
