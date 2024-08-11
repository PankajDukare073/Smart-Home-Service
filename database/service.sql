-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 16, 2022 at 01:21 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `service`
--

-- --------------------------------------------------------

--
-- Table structure for table `appoint`
--

CREATE TABLE `appoint` (
  `id` int(6) NOT NULL,
  `spid` varchar(30) NOT NULL,
  `cid` varchar(30) NOT NULL,
  `time` varchar(50) DEFAULT NULL,
  `astatus` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appoint`
--

INSERT INTO `appoint` (`id`, `spid`, `cid`, `time`, `astatus`) VALUES
(19, '18', '8', '2022-04-17T17:14', '2'),
(20, '18', '8', '2022-04-16T14:16', '0'),
(21, '18', '8', NULL, '1'),
(22, '19', '8', NULL, '1');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(6) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `photo` varchar(50) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `mobile` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `pass` varchar(50) DEFAULT NULL,
  `role` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `fname`, `lname`, `photo`, `address`, `mobile`, `email`, `pass`, `role`) VALUES
(7, 'firstname', 'lastname', 'upload/admin.png', 'adminpune', 'mobilenumber', 'admin1@gmail.com', '12345678', 'Admin'),
(8, 'customername', 'customersurname', 'upload/customer.jpeg', 'customer address', 'customermobile1', 'customer1@gmail.com', '12345678', 'Customer');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `id` int(20) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `photo` varchar(30) NOT NULL,
  `address` varchar(30) NOT NULL,
  `stype` varchar(30) NOT NULL,
  `sname` varchar(30) NOT NULL,
  `sphoto` varchar(30) NOT NULL,
  `stimefrom` varchar(30) NOT NULL,
  `stimeto` varchar(30) NOT NULL,
  `mobile` varchar(30) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `pass` varchar(30) NOT NULL,
  `role` varchar(30) NOT NULL,
  `astatus` int(12) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`id`, `fname`, `lname`, `photo`, `address`, `stype`, `sname`, `sphoto`, `stimefrom`, `stimeto`, `mobile`, `email`, `pass`, `role`, `astatus`) VALUES
(18, 'servicefname', 'servicelname', 'upload/electrician.jpeg', 'electricianaddress', 'electrician', 'sai electrical', 'upload/eshop.jpeg', '09:00', '17:00', 'electricianmumber', 'electrician1@gmail.com', '12345678', 'Service Provider', 0),
(19, 'plumbername', 'lastname', 'upload/plumber.jpeg', 'plumberaddress', 'plumber', 'plumber shop', 'upload/pshop.jpeg', '09:36', '21:36', '123456789', 'plumber1@gmail.com', '12345678', 'Service Provider', 0);

-- --------------------------------------------------------

--
-- Table structure for table `userrole`
--

CREATE TABLE `userrole` (
  `id` int(10) NOT NULL,
  `role` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userrole`
--

INSERT INTO `userrole` (`id`, `role`) VALUES
(1, 'Admin'),
(2, 'Customer'),
(3, 'Service Provider');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appoint`
--
ALTER TABLE `appoint`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userrole`
--
ALTER TABLE `userrole`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appoint`
--
ALTER TABLE `appoint`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `userrole`
--
ALTER TABLE `userrole`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
