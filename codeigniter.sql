-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 04, 2015 at 09:15 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `codeigniter`
--

-- --------------------------------------------------------

--
-- Table structure for table `collector_x_coordinator`
--

CREATE TABLE IF NOT EXISTS `collector_x_coordinator` (
`id` int(11) NOT NULL,
  `collector` int(11) NOT NULL,
  `coordinatorcol` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `combination`
--

CREATE TABLE IF NOT EXISTS `combination` (
`id` int(11) NOT NULL,
  `number` int(11) NOT NULL,
  `rumble` tinyint(1) DEFAULT '0',
  `amount` decimal(3,2) NOT NULL,
  `time` int(11) DEFAULT NULL COMMENT '1. 11AM',
  `date` date DEFAULT NULL,
  `owner` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `registered_fees`
--

CREATE TABLE IF NOT EXISTS `registered_fees` (
`id` int(11) NOT NULL,
  `salutation` int(11) NOT NULL COMMENT '1 Mr. 2 Ms.',
  `first_name` varchar(300) NOT NULL,
  `last_name` varchar(300) NOT NULL,
  `email` varchar(300) NOT NULL,
  `birthdate` varchar(300) NOT NULL,
  `contact` varchar(300) NOT NULL,
  `food_diet` int(11) NOT NULL COMMENT '1 - Muslim 2 - Vegetarian 3 - Regular',
  `pay_no` int(11) NOT NULL,
  `payment_desc` varchar(500) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registered_fees`
--

INSERT INTO `registered_fees` (`id`, `salutation`, `first_name`, `last_name`, `email`, `birthdate`, `contact`, `food_diet`, `pay_no`, `payment_desc`) VALUES
(1, 1, 'John Mart ', 'Belamide', 'belamide09@yahoo.com', '1992-06-23', '0234423-234234', 1, 12, 'P20,250.00 / USD 450');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`id` int(11) NOT NULL,
  `name` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `role` int(11) DEFAULT '1' COMMENT '1. coordinator',
  `parent` int(11) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `created_at` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `password`, `role`, `parent`, `status`, `created_at`) VALUES
(15, 'yongboang', 'limit123', 5, NULL, 1, '2015-03-18 08:04:53'),
(18, 'collector', 'limit123', 3, NULL, 1, '2015-03-18 09:04:54'),
(20, 'passer', 'limit123', 2, NULL, 1, '2015-03-18 09:05:25'),
(22, 'coordinator', 'limit123', 1, 18, 1, '2015-03-18 09:05:57'),
(23, 'admin', 'limit123', 4, NULL, 1, '2015-03-19 01:26:05'),
(24, 'coordinator2', 'limit123', 1, 18, 1, '2015-03-19 01:35:36'),
(25, 'asd', 'asdasd', 2, NULL, 1, '2015-05-24 07:32:20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `collector_x_coordinator`
--
ALTER TABLE `collector_x_coordinator`
 ADD PRIMARY KEY (`id`), ADD KEY `collector_x_coordinator_idx` (`coordinatorcol`);

--
-- Indexes for table `combination`
--
ALTER TABLE `combination`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `id_UNIQUE` (`id`), ADD KEY `owner_idx` (`owner`);

--
-- Indexes for table `registered_fees`
--
ALTER TABLE `registered_fees`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `collector_x_coordinator`
--
ALTER TABLE `collector_x_coordinator`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `combination`
--
ALTER TABLE `combination`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `registered_fees`
--
ALTER TABLE `registered_fees`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=26;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `collector_x_coordinator`
--
ALTER TABLE `collector_x_coordinator`
ADD CONSTRAINT `collector_x_coordinator` FOREIGN KEY (`coordinatorcol`) REFERENCES `user` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `combination`
--
ALTER TABLE `combination`
ADD CONSTRAINT `owner` FOREIGN KEY (`owner`) REFERENCES `user` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
