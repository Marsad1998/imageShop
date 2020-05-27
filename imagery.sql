-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 27, 2020 at 03:21 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.3.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `imagery`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(255) NOT NULL,
  `admin_email` varchar(255) NOT NULL,
  `admin_pass` varchar(255) NOT NULL,
  `captcha` varchar(255) NOT NULL,
  `admin_timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`admin_id`, `admin_name`, `admin_email`, `admin_pass`, `captcha`, `admin_timestamp`) VALUES
(1, 'ali', 'ali@gmail.com', '1122', '16604', '2020-05-26 16:32:45'),
(2, 'ahmed', 'ahmed11@gmail.com', '11', '40574', '2020-05-26 16:36:15'),
(3, 'marsa', 'abc@abc.com', 'abc', '92875', '2020-05-26 20:39:35');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `brand_id` int(11) NOT NULL,
  `brand_name` varchar(255) NOT NULL,
  `brand_sts` varchar(255) NOT NULL,
  `brand_timestamp` int(11) NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`brand_id`, `brand_name`, `brand_sts`, `brand_timestamp`) VALUES
(1, 'samsung', '1', 2147483647),
(2, 'idrees', '0', 2147483647),
(4, 'samsung', '1', 2147483647),
(5, 'ali', '0', 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `categorys`
--

CREATE TABLE `categorys` (
  `cate_id` int(11) NOT NULL,
  `cate_name` varchar(255) NOT NULL,
  `cate_sts` varchar(255) NOT NULL,
  `cate_timestamp` int(11) NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categorys`
--

INSERT INTO `categorys` (`cate_id`, `cate_name`, `cate_sts`, `cate_timestamp`) VALUES
(2, 'idrees', '1', 2147483647),
(7, 'ahemd', '0', 2147483647),
(12, 'idrees', '0', 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `contributors`
--

CREATE TABLE `contributors` (
  `contr_id` int(11) NOT NULL,
  `contr_name` varchar(255) NOT NULL,
  `contr_email` varchar(255) NOT NULL,
  `contr_pass` varchar(255) NOT NULL,
  `captcha` varchar(255) NOT NULL,
  `contr_timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contributors`
--

INSERT INTO `contributors` (`contr_id`, `contr_name`, `contr_email`, `contr_pass`, `captcha`, `contr_timestamp`) VALUES
(1, 'ahemd', 'ahmed@gmail.com', '12', '78190', '2020-05-26 19:10:03'),
(3, 'abc', 'abc@gmail.com', '122', '54697', '2020-05-26 20:23:33'),
(4, 'abc', 'abc@abc.com', 'abc', '84163', '2020-05-26 20:37:47');

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE `files` (
  `file_id` int(11) NOT NULL,
  `user_pic` text NOT NULL DEFAULT 'default.png',
  `user_id` varchar(255) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`file_id`, `user_pic`, `user_id`, `timestamp`) VALUES
(1, '9544447475ecbcf6e3422a.png', '1', '2020-05-25 14:00:14'),
(2, '484167525ecbcf8b1e724.png', '1', '2020-05-25 14:00:43'),
(3, '10815268365ecc14c0d80a8.png', '1', '2020-05-25 18:56:00'),
(4, '10826336615ecc3043aa6dc.png', '1', '2020-05-25 20:53:23'),
(5, 'default.png', '5', '2020-05-26 10:42:26'),
(6, 'default.png', '3', '2020-05-26 20:23:33'),
(7, 'default.png', '4', '2020-05-26 20:37:47');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `item_id` int(11) NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `cate_id` varchar(255) NOT NULL,
  `brand_id` varchar(255) NOT NULL,
  `item_price` varchar(255) NOT NULL,
  `item_pic` text NOT NULL DEFAULT 'default.png',
  `item_sts` varchar(255) NOT NULL,
  `item_timestamp` int(11) NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`item_id`, `item_name`, `cate_id`, `brand_id`, `item_price`, `item_pic`, `item_sts`, `item_timestamp`) VALUES
(7, 'iphone 6+', '2', '2', '12', 'default.png', '1', 2147483647),
(8, 'iphone 6+', '2', '2', '12', 'default.png', '0', 2147483647),
(9, 'iphone 6+', '2', '2', '12', 'default.png', '0', 2147483647),
(10, 's6', '7', '2', '23', 'default.png', '0', 2147483647),
(11, 's6', '7', '2', '23', 'default.png', '0', 2147483647),
(12, 's6', '7', '2', '23', 'default.png', '0', 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `captcha` varchar(255) NOT NULL,
  `created_at` varchar(255) NOT NULL,
  `user_timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`admin_id`),
  ADD UNIQUE KEY `admin_email` (`admin_email`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `categorys`
--
ALTER TABLE `categorys`
  ADD PRIMARY KEY (`cate_id`);

--
-- Indexes for table `contributors`
--
ALTER TABLE `contributors`
  ADD PRIMARY KEY (`contr_id`),
  ADD UNIQUE KEY `contr_email` (`contr_email`);

--
-- Indexes for table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`file_id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `brand_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `categorys`
--
ALTER TABLE `categorys`
  MODIFY `cate_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `contributors`
--
ALTER TABLE `contributors`
  MODIFY `contr_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `file_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
