-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 28, 2021 at 11:39 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `210821_flashlab`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(250) NOT NULL,
  `admin_username` varchar(250) NOT NULL,
  `admin_password` varchar(250) NOT NULL,
  `admin_email` varchar(250) NOT NULL,
  `admin_role` smallint(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

CREATE TABLE `patients` (
  `patient_id` int(11) NOT NULL,
  `no_ktp` varchar(100) NOT NULL,
  `complete_name` varchar(200) NOT NULL,
  `address` text NOT NULL,
  `phone_number` varchar(20) NOT NULL,
  `birth_date` date NOT NULL,
  `gender` tinyint(4) NOT NULL,
  `user_inputter` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`patient_id`, `no_ktp`, `complete_name`, `address`, `phone_number`, `birth_date`, `gender`, `user_inputter`) VALUES
(8, '90128390218312', 'Halut Halut Bujon', 'Jalan Tadulako', '+6282194077126', '2021-08-17', 2, 8),
(9, '90128390218312', 'ASdasdw', 'sadasd', '2343432', '2021-08-19', 1, 9),
(10, '234234230218312', 'Narjun', 'Jalan Hah pe bagaya', '+6282194077126', '2021-08-30', 1, 9);

-- --------------------------------------------------------

--
-- Table structure for table `patient_package`
--

CREATE TABLE `patient_package` (
  `patient_package_id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `package` smallint(6) NOT NULL,
  `date_inserted` datetime NOT NULL,
  `date_swab` datetime NOT NULL,
  `package_status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patient_package`
--

INSERT INTO `patient_package` (`patient_package_id`, `patient_id`, `package`, `date_inserted`, `date_swab`, `package_status`) VALUES
(9, 9, 3, '2021-08-27 22:27:03', '2021-08-27 22:27:03', 0),
(11, 10, 1, '2021-08-27 22:28:21', '2021-08-27 22:28:21', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_password` varchar(250) NOT NULL,
  `user_name` varchar(250) NOT NULL,
  `user_email` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_password`, `user_name`, `user_email`) VALUES
(7, '$2y$10$nWJrNv.0Bh8SwwepgiGfmeC4RLpHtAquK7RQeTNtCKzND.ogtNBwK', 'asde', 'yuityz@mdsgf.com'),
(8, '$2y$10$rMUFMAs2L0UWQv3CiH4jo.LFvLRpt7I.pvFWTqQ47IXODfC75y7Pe', 'yuityz@mdsgf.com', 'yuityz@mdsgf.coma'),
(9, '$2y$10$rrCkvoEIiDK0wTewkotcEerAdY4tsmytR7cTE2XxFaNkqjwuPDRTa', 'yuityz@mdsgf.comas', 'yuityz@mdsgf.comas');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`patient_id`),
  ADD UNIQUE KEY `no_ktp` (`no_ktp`,`user_inputter`),
  ADD KEY `user_inputter_fk` (`user_inputter`);

--
-- Indexes for table `patient_package`
--
ALTER TABLE `patient_package`
  ADD PRIMARY KEY (`patient_package_id`),
  ADD KEY `patient_id` (`patient_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `patients`
--
ALTER TABLE `patients`
  MODIFY `patient_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `patient_package`
--
ALTER TABLE `patient_package`
  MODIFY `patient_package_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `patients`
--
ALTER TABLE `patients`
  ADD CONSTRAINT `user_inputter_fk` FOREIGN KEY (`user_inputter`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `patient_package`
--
ALTER TABLE `patient_package`
  ADD CONSTRAINT `patient_package_ibfk_1` FOREIGN KEY (`patient_id`) REFERENCES `patients` (`patient_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
