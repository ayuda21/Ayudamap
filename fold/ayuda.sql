-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 05, 2023 at 06:20 PM
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
-- Database: `ayuda`
--

-- --------------------------------------------------------

--
-- Table structure for table `beneficiaries`
--

CREATE TABLE `beneficiaries` (
  `user_id` int(11) NOT NULL,
  `status` text DEFAULT NULL,
  `full_name` text DEFAULT NULL,
  `gender` text DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `address` text DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `beneficiaries`
--

INSERT INTO `beneficiaries` (`user_id`, `status`, `full_name`, `gender`, `dob`, `address`) VALUES
(32, 'Senior Citizen', 'ayuda beneficiaries', 'Male', '2004-06-02', 'Q23J+R9M, Congressional Rd Ext, Barangay 171, Caloocan, Metro Manila');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `user_id` int(15) NOT NULL,
  `username` varchar(17) DEFAULT NULL,
  `full_name` varchar(20) DEFAULT NULL,
  `email` varchar(25) DEFAULT NULL,
  `tele` varchar(11) DEFAULT NULL,
  `password` varchar(21) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`user_id`, `username`, `full_name`, `email`, `tele`, `password`) VALUES
(30, 'user21', 'user user', 'user@gmail.com', '09075291904', '123');

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `user_id` int(11) NOT NULL,
  `full_name` varchar(30) DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL,
  `gender` varchar(20) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `address` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user _id` int(10) NOT NULL,
  `username` varchar(15) DEFAULT NULL,
  `full_name` varchar(20) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  `role` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user _id`, `username`, `full_name`, `password`, `role`) VALUES
(1, 'russel21', 'Russel Villacastinss', 'karaoke21', 'employee'),
(2, 'admin', 'ADMIN', 'admin123', 'admin'),
(3, 'samp', 'sample sample', 'sample123', 'employee'),
(4, '', 'sample samples', '', 'employee'),
(5, '', 'russelsssssss', '', 'employee'),
(6, 'russ22', 'rsadasadsadsasssssss', 'karaoke21', ''),
(7, 'ayuda21', 'ayudamap gis', 'ayuda21', 'employee'),
(10, 'emplo', 'employee1', '123', 'employee'),
(11, NULL, 'sels', NULL, 'beneficiary'),
(12, 'russel1', 'russel ayuda', '123', 'employee'),
(13, 'user21', 'user user', '123', 'employee');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `beneficiaries`
--
ALTER TABLE `beneficiaries`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user _id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `beneficiaries`
--
ALTER TABLE `beneficiaries`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `user_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user _id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
