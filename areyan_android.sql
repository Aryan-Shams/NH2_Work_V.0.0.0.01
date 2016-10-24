-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 17, 2016 at 07:57 PM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `areyan_android`
--

-- --------------------------------------------------------

--
-- Table structure for table `alertnotice`
--

CREATE TABLE `alertnotice` (
  `serial` int(11) NOT NULL,
  `notice` varchar(5000) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `date` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `time` varchar(40) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `alertnotice`
--

INSERT INTO `alertnotice` (`serial`, `notice`, `status`, `date`, `time`) VALUES
(14, 'asdsad', 'asdasdasd', '2016-10-17', '11:55:27pm'),
(9, 'tessssssssssssssssssssst', 'okkkk', '2016-09-28', '11:18:03pm');

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `mobileno` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `lattitude` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `longititude` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `time` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`mobileno`, `lattitude`, `longititude`, `address`, `date`, `time`) VALUES
('01714906170', '23.8050387', '90.3639488', 'Mirpur Rd, Dhaka, Bangladesh', '2016-08-08', '12:35:48pm'),
('01776554411', '23.8052143', '90.364031', 'Mirpur Rd, Dhaka, Bangladesh', '2016-08-21', '11:07:42am'),
('123456', '23.771091', '90.398396', 'gangni', '2016-09-01', '12.00'),
('123455', '23.771098', '90.398396', 'gangni', '2016-09-01', '12.00'),
('0123456', '23.786982', '90.377493', 'Green University', '2016-10-17', '10:30:48pm');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `memberID` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `active` varchar(255) NOT NULL,
  `resetToken` varchar(255) DEFAULT NULL,
  `resetComplete` varchar(3) DEFAULT 'No'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`memberID`, `username`, `password`, `email`, `active`, `resetToken`, `resetComplete`) VALUES
(3, 'diner', '$2y$10$BWliYfCY9vyyCzDz0N6KVutlIn.Kb6y4aZwaYbF21oqlRNzJ5xCo2', 'diner.ragib@gmail.com', 'Yes', NULL, 'No');

-- --------------------------------------------------------

--
-- Table structure for table `user_data`
--

CREATE TABLE `user_data` (
  `id` int(5) NOT NULL,
  `name` varchar(300) NOT NULL,
  `mail` varchar(300) NOT NULL,
  `username` varchar(60) NOT NULL,
  `password` varchar(80) NOT NULL,
  `mobileno` varchar(20) NOT NULL,
  `usertype` varchar(100) NOT NULL,
  `active` varchar(255) NOT NULL,
  `resetToken` varchar(255) NOT NULL,
  `resetComplete` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_data`
--

INSERT INTO `user_data` (`id`, `name`, `mail`, `username`, `password`, `mobileno`, `usertype`, `active`, `resetToken`, `resetComplete`) VALUES
(20, 'obak ami', 'obakami2013@gmail.com', 'obakami', '123', '0123456', 'User', 'Yes', '', ''),
(10, 'Ragib Sahariar', 'diner.ragib1@gmail.com', 'ragib', '123', '01714906170', 'admin', 'Yes', 'No', ''),
(1, 'areyan shams', 'areyancse@gmail.com', 'areyan', '246', '01776554411', 'admin', 'Yes', '', ''),
(17, 'aryan', 'aaa@gmail.com', 'aaa', '345', '123455', 'admin', 'Yes', '', ''),
(19, 'dam', 'dam@dam.com', 'dam', '678', '123456', 'modarator', 'Yes', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `user_response`
--

CREATE TABLE `user_response` (
  `mobileno` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `userstatus` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `time` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user_response`
--

INSERT INTO `user_response` (`mobileno`, `userstatus`, `date`, `time`) VALUES
('0123456', 'SAFE', '2016-10-17', '11:46:28pm'),
('01776554411', 'SAFE', '2016-10-17', '11:46:28pm'),
('123456', 'SAFE', '2016-10-17', '11:46:28pm'),
('01714906170', 'SAFE', '2016-10-17', '11:46:28pm'),
('123455', 'SAFE', '2016-10-17', '11:46:28pm');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alertnotice`
--
ALTER TABLE `alertnotice`
  ADD PRIMARY KEY (`date`),
  ADD UNIQUE KEY `status` (`status`),
  ADD UNIQUE KEY `serial` (`serial`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`mobileno`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`memberID`);

--
-- Indexes for table `user_data`
--
ALTER TABLE `user_data`
  ADD PRIMARY KEY (`mobileno`),
  ADD UNIQUE KEY `uniq` (`username`),
  ADD KEY `index` (`id`);

--
-- Indexes for table `user_response`
--
ALTER TABLE `user_response`
  ADD UNIQUE KEY `mobileno` (`mobileno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alertnotice`
--
ALTER TABLE `alertnotice`
  MODIFY `serial` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `memberID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `user_data`
--
ALTER TABLE `user_data`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
