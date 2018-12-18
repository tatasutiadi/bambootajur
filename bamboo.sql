-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 17, 2018 at 10:36 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bamboo`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(255) NOT NULL,
  `full_name` varchar(255) DEFAULT NULL,
  `phone_number` varchar(15) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `message` text,
  `status` int(11) DEFAULT NULL,
  `type` varchar(25) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `full_name`, `phone_number`, `email`, `message`, `status`, `type`, `created_at`) VALUES
(1, 'as', '2', 'tatasutiadi@gmail.com', NULL, 1, 'phone_number', '2018-12-16 09:58:51'),
(2, 'as', '2', 'tatasutiadi@gmail.com', NULL, 1, 'phone_number', '2018-12-16 16:04:43'),
(3, 'Tata Sutiadi', '123456789', 'tatasutiadi@gmail.com', NULL, 1, 'phone_number', '2018-12-16 16:06:09'),
(4, 'Tata Sutiadi', '123456789', 'tatasutiadi@gmail.com', NULL, 1, 'phone_number', '2018-12-16 16:06:21'),
(5, 'Tata Sutiadi', '123456', 'tatasutiadi@gmail.com', NULL, 1, 'phone_number', '2018-12-16 16:06:53'),
(6, 'Tata Sutiadi', '342', 'tatasutiadi@gmail.com', NULL, 1, 'phone_number', '2018-12-16 16:07:31'),
(7, 'Tata Sutiadi', '123456', 'superadmin@pom.go.id', NULL, 1, 'phone_number', '2018-12-16 16:08:00'),
(8, 'Tata Sutiadi', '12345', 'tatasutiadi@gmail.com', NULL, 1, 'phone_number', '2018-12-16 16:09:38'),
(9, 'Tata Sutiadi', '123456', 'tatasutiadi@gmail.com', NULL, 1, 'phone_number', '2018-12-16 16:11:54'),
(10, 'Tata Sutiadi', '7777', 'tatasutiadi@gmail.com', NULL, 1, 'phone_number', '2018-12-16 16:12:41'),
(11, 'Demmy', '123456789', 'demi@gmail.com', 'Test', 1, 'contact', '2018-12-16 18:08:28'),
(12, 'Demmy Test', '0989999', 'demmy@gmail.com', 'Test', 1, 'contact', '2018-12-16 18:12:32'),
(13, 'Tata Sutiadi', '12345', 'tatasutiadi@gmail.com', 'Test Email', 1, 'contact', '2018-12-16 18:30:21'),
(14, 'Tata Sutiadi', '12345', 'tatasutiadi@gmail.com', 'Test Email', 1, 'contact', '2018-12-16 18:31:00'),
(15, 'Tata Sutiadi', '12345', 'tatasutiadi@gmail.com', 'Test Email', 1, 'contact', '2018-12-16 18:31:15'),
(16, 'Demmy', '12345678', 'demmy@gmail.com', NULL, 1, 'phone_number', '2018-12-16 18:36:55'),
(17, 'Demmy', '123456', 'demi@gmail.com', NULL, 1, 'phone_number', '2018-12-16 18:38:03'),
(18, 'Demmy Test', '12345', 'demi@gmail.com', 'Test Email', 1, 'contact', '2018-12-16 18:38:33'),
(19, 'Test Bamboo', '0899999', 'd.aminulloh@gmail.com', 'Dem kie waenya jang tes bamboo notif na, ulah alus2 da jang notif hungkul', 1, 'contact', '2018-12-16 18:43:59'),
(20, 'Tata Sutiadi', '1234', 'tatasutiadi@gmail.com', NULL, 1, 'phone_number', '2018-12-17 19:05:40');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
