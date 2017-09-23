-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 11, 2017 at 10:29 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fyp`
--

-- --------------------------------------------------------

--
-- Table structure for table `bus`
--

CREATE TABLE `bus` (
  `bus_id` int(10) UNSIGNED NOT NULL,
  `regs_no` varchar(10) CHARACTER SET latin1 NOT NULL,
  `seats` int(11) NOT NULL,
  `class` varchar(20) CHARACTER SET latin1 NOT NULL,
  `des` varchar(150) CHARACTER SET latin1 NOT NULL,
  `tracker_id` int(11) NOT NULL,
  `cam_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

--
-- Dumping data for table `bus`
--

INSERT INTO `bus` (`bus_id`, `regs_no`, `seats`, `class`, `des`, `tracker_id`, `cam_id`, `created_at`) VALUES
(1, 'AYT-786', 42, 'Royal Luxury-II', 'Lower Business Class', 1, 1, '2017-07-28 22:26:20'),
(2, 'AYT-787', 42, 'Royal Luxury-II', 'Lower Business Class', 2, 3, '2017-07-28 22:26:22'),
(3, 'AYT-788', 42, 'Royal Luxury-II', 'Lower Business Class', 3, 5, '2017-07-28 22:26:24'),
(4, 'AYT-789', 42, 'Royal Luxury-II', 'Lower Business Class', 4, 7, '2017-07-28 22:26:29'),
(5, 'AYT-790', 42, 'Royal Luxury-I', 'Business Class', 5, 11, '2017-07-28 22:29:20'),
(6, 'AYT-791', 42, 'Royal Luxury-I', 'Business Class', 6, 13, '2017-07-28 22:27:20'),
(7, 'AYT-792', 42, 'Royal Luxury-I', 'Business Class', 7, 15, '2017-07-28 22:31:52'),
(8, 'AYT-793', 42, 'Royal Luxury-I', 'Business Class', 8, 17, '2017-07-28 22:26:26'),
(9, 'AYT-794', 42, 'Gold Luxury', 'Gold Class', 9, 19, '2017-07-28 22:26:40'),
(10, 'AYT-795', 42, 'Gold Luxury', 'Gold Class', 10, 21, '2017-07-28 22:51:00'),
(11, 'Ayt-098', 98, 'Royal Luxury-I', 'jcfv', 0, 0, '2017-08-07 19:24:07'),
(14, '23', 23, 'Gold Luxury', '2345fgvdcv', 0, 0, '2017-08-07 14:34:13'),
(15, '342', 24, 'Gold Luxury', 'fefsf', 11, 9, '2017-08-20 14:35:14');

-- --------------------------------------------------------

--
-- Table structure for table `camera`
--

CREATE TABLE `camera` (
  `cam_id` int(11) UNSIGNED NOT NULL,
  `model` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `camera`
--

INSERT INTO `camera` (`cam_id`, `model`) VALUES
(1, 'High Resolution.'),
(2, 'High Resolution.'),
(3, 'High Resolution.'),
(4, 'High Resolution.'),
(5, 'High Resolution.'),
(6, 'High Resolution.'),
(7, 'High Resolution.'),
(8, 'High Resolution.'),
(9, 'High Resolution.'),
(10, 'High Resolution.'),
(11, 'High Resolution.'),
(12, 'High Resolution.'),
(13, 'High Resolution.'),
(21, 'High Resolution.'),
(22, 'High Resolution.'),
(14, 'High Resolution.'),
(15, 'High Resolution.'),
(16, 'High Resolution.'),
(17, 'High Resolution.'),
(18, 'High Resolution.'),
(19, 'High Resolution.'),
(20, 'High Resolution.'),
(23, 'jkl'),
(24, 'jkl'),
(25, 'jkl23'),
(26, 'jkl56'),
(27, 'jkl56'),
(28, 'jkl56'),
(29, 'jkl56'),
(30, 'jkl56'),
(31, 'jkl56'),
(32, 'rgh'),
(33, 'rehn'),
(34, 'rehn'),
(35, 'rehn'),
(36, 'we2dfe'),
(37, 'wcxwer'),
(38, 'wcxwer'),
(39, 'wcxwer'),
(40, 'wcxwer'),
(41, 'wcxwer'),
(42, 'wcxwer'),
(43, 'wcxwer'),
(44, 'wcxwer'),
(45, 'wcxwer'),
(46, 'wcxwer'),
(47, 'wcxwer'),
(48, 'wcxwer'),
(49, 'wcxwer'),
(50, 'wcxwer'),
(51, 'wcxwer'),
(52, 'wcxwer'),
(53, 'rg'),
(54, 'wfb'),
(55, 'rg'),
(56, '3rfvg'),
(57, '3r5ftv'),
(58, '35gfvc '),
(59, 'ew2cf'),
(60, '2e4c34'),
(61, 'asefy c24'),
(62, 'g t42h b'),
(63, 'defvb  '),
(64, ' rv ergf f rv'),
(65, 'f34ecfe'),
(66, '3df34'),
(67, '3d4'),
(68, '3');

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `city_id` int(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `shortcode` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`city_id`, `name`, `shortcode`) VALUES
(1, 'Lahore', 'LHR'),
(2, 'Karachi', 'KHI'),
(3, 'Islamabad', 'IBD'),
(4, 'Faisalabad', 'FSD'),
(5, 'Peshawer', 'PSW'),
(6, 'Quetta', 'QTA');

-- --------------------------------------------------------

--
-- Table structure for table `passenger`
--

CREATE TABLE `passenger` (
  `reservation_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `visitor_id` int(11) NOT NULL,
  `schedule_id` int(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `role_id` int(11) UNSIGNED NOT NULL,
  `type` varchar(10) NOT NULL,
  `role` varchar(20) NOT NULL,
  `created_at` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`role_id`, `type`, `role`, `created_at`) VALUES
(1, 'Admin', 'FULL CRUD', 0),
(2, 'USER', 'INTER CRUD', 0),
(3, 'CAPTAIN', 'RU', 0);

-- --------------------------------------------------------

--
-- Table structure for table `route`
--

CREATE TABLE `route` (
  `route_id` int(11) UNSIGNED NOT NULL,
  `source` varchar(20) NOT NULL,
  `destination` varchar(20) NOT NULL,
  `stops` varchar(100) NOT NULL,
  `departure` time NOT NULL,
  `arrival` time NOT NULL,
  `day` int(11) NOT NULL,
  `fare` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `route`
--

INSERT INTO `route` (`route_id`, `source`, `destination`, `stops`, `departure`, `arrival`, `day`, `fare`, `created_at`) VALUES
(1, 'KHI', 'FSD', 'HYD,MORO,SUK,CBK,BHW,MUL,JHNG', '18:00:00', '14:20:00', 1, 3580, '2017-08-07 19:00:00'),
(2, 'KHI', 'LHR', 'HYD,MORO,SUK,CBK,BHW,MUL,JHNG,FSD', '08:15:00', '05:15:00', 1, 4500, '2017-08-08 19:00:00'),
(3, 'KHI', 'CBK', 'HYD,MORO,SUK', '07:00:00', '17:40:00', 0, 2030, '2017-08-06 19:00:00'),
(4, 'KHI', 'HYD', 'NON-STOP', '17:10:00', '19:00:00', 0, 430, '2017-07-31 19:00:00'),
(5, 'KHI', 'SUK', 'HYD,MORO', '01:10:00', '09:45:00', 0, 1510, '2017-08-06 19:00:00'),
(6, 'KHI', 'PSW', 'HYD,MORO,SUK,CBK,BHW,MUL,JHNG,FSD,BHR-INTR,RWP,ABT', '18:00:00', '19:55:00', 1, 5050, '2017-08-01 19:00:00'),
(7, 'KHI', 'ABT', 'HYD,MORO,SUK,CBK,BHW,MUL,JHNG,FSD,BHR-INTR,RWP', '22:15:00', '00:40:00', 1, 5050, '2017-08-05 19:00:00'),
(8, 'KHI', 'MORO', 'HYD', '07:00:00', '11:45:00', 0, 1030, '2017-08-06 19:00:00'),
(9, 'KHI', 'MUL', 'HYD,MORO,SUK,CBK,BHW', '09:00:00', '00:45:00', 1, 3200, '2017-08-08 19:00:00'),
(10, 'KHI', 'BHW', 'HYD,MORO,SUK,CBK', '08:00:00', '21:45:00', 0, 2640, '2017-07-31 19:00:00'),
(12, 'LHR', 'KHI', 'FSD,JHNG,MUL,BHWL,CBK,SUK,MORO,HYD', '10:15:00', '07:15:00', 1, 4550, '2017-08-08 10:52:57');

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE `schedule` (
  `schedule_id` int(11) UNSIGNED NOT NULL,
  `route_id` int(11) NOT NULL,
  `bus_id` varchar(10) NOT NULL,
  `seats` int(50) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `bus_time` timestamp NOT NULL,
  `avail_seats` int(11) DEFAULT '42'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`schedule_id`, `route_id`, `bus_id`, `seats`, `created_at`, `bus_time`, `avail_seats`) VALUES
(1, 1, '1', 42, '2017-08-08 13:54:58', '2017-08-28 19:00:00', 42),
(2, 1, '2', 42, '2017-08-08 13:54:58', '2017-08-28 19:00:00', 42),
(3, 3, '3', 42, '2017-08-08 13:54:58', '2017-08-26 19:00:00', 42),
(4, 1, '4', 42, '2017-08-08 13:54:58', '2017-08-28 19:00:00', 42),
(5, 5, '5', 42, '2017-08-08 13:54:58', '2017-08-25 19:00:00', 42),
(6, 1, '6', 42, '2017-08-08 13:54:58', '2017-08-25 19:00:00', 42),
(7, 1, '7', 42, '2017-08-08 13:54:58', '2017-08-26 19:00:00', 42),
(8, 8, '8', 42, '2017-08-08 13:54:58', '2017-08-26 19:00:00', 42),
(9, 9, '9', 42, '2017-08-08 13:54:58', '2017-08-26 19:00:00', 42),
(10, 10, '10', 42, '2017-08-08 13:54:58', '2017-08-27 19:00:00', 42),
(13, 12, '14', 42, '2017-08-08 10:53:13', '2017-08-27 19:00:00', 42),
(14, 1, '1', 42, '2017-09-09 14:59:02', '2017-09-14 19:00:00', 42);

-- --------------------------------------------------------

--
-- Table structure for table `seat`
--

CREATE TABLE `seat` (
  `id` int(50) NOT NULL,
  `seat_num` int(20) NOT NULL,
  `resevation_id` int(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tracker`
--

CREATE TABLE `tracker` (
  `tracker_id` int(11) UNSIGNED NOT NULL,
  `position` varchar(40) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tracker`
--

INSERT INTO `tracker` (`tracker_id`, `position`, `created_at`) VALUES
(1, '37.0625/-95.677068', '2017-08-08 18:51:21'),
(2, '37.0625/-95.677068', '2017-08-08 18:51:21'),
(3, '37.0625/-95.677068', '2017-08-08 18:51:21'),
(4, '37.0625/-95.677068', '2017-08-08 18:51:21'),
(5, '37.0625/-95.677068', '2017-08-08 18:51:21'),
(6, '37.0625/-95.677068', '2017-08-08 18:51:21'),
(7, '37.0625/-95.677068', '2017-08-08 18:51:21'),
(8, '37.0625/-95.677068', '2017-08-08 18:51:21'),
(9, '37.0625/-95.677068', '2017-08-08 18:51:21'),
(10, '37.0625/-95.677068', '2017-08-08 18:51:21'),
(11, 'NULL', '2017-08-08 18:51:21'),
(12, 'NULL', '2017-08-08 18:51:21'),
(13, 'NULL', '2017-08-08 18:51:21'),
(14, 'NULL', '2017-08-08 18:51:21'),
(15, 'NULL', '2017-08-08 18:51:21'),
(16, 'NULL', '2017-08-08 18:51:21'),
(17, 'NULL', '2017-08-08 18:51:21'),
(18, 'NULL', '2017-08-08 18:51:21'),
(19, 'NULL', '2017-08-08 18:51:21'),
(20, 'NULL', '2017-08-08 18:51:21'),
(21, 'NULL', '2017-08-08 18:51:21'),
(22, 'NULL', '2017-08-08 18:51:21'),
(23, 'NULL', '2017-08-08 18:51:21'),
(24, 'NULL', '2017-08-08 18:51:21'),
(25, 'NULL', '2017-08-08 18:51:21'),
(26, 'NULL', '2017-08-08 18:51:21'),
(27, 'NULL', '2017-08-08 18:51:21'),
(28, 'NULL', '2017-08-08 18:51:21'),
(29, 'NULL', '2017-08-08 18:51:21');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) UNSIGNED NOT NULL,
  `fname` varchar(15) NOT NULL,
  `lname` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `image` blob,
  `password` varchar(16) NOT NULL,
  `cnic` varchar(13) NOT NULL,
  `address` varchar(50) NOT NULL,
  `role_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `fname`, `lname`, `email`, `phone`, `image`, `password`, `cnic`, `address`, `role_id`, `created_at`) VALUES
(1, 'Nisar', 'Hassan', 'k132387@nu.edu.pk', '03070167259', NULL, 'nisar9928', '3310416842103', 'Model Colony, Malir, Karachi.', 1, '0000-00-00 00:00:00'),
(2, 'Ali', 'Arsilan', 'k132067@nu.edu.pk', '03422859820', NULL, 'ali7985', '3310383986807', 'Green Town,Shah Faisal Town,Karachi.', 2, '0000-00-00 00:00:00'),
(4, 'Rabail', 'Ammar', 'k132350@nu.edu.pk', '03003003003', NULL, 'rabailshah', '3310416856983', 'PAF Housing Society2, Malir Cant.', 2, '2017-09-11 09:49:40'),
(5, 'Ayaz', 'Lateef', 'k132409@nu.edu.pk', '03452020992', NULL, 'ayaz7985', '4110118814409', 'Model Colony, Malir, Karachi.', 2, '2017-09-11 09:49:30'),
(6, 'Rabail', 'Iftikhar', 'rabail1@gmail.com', '353535', NULL, 'rabail', '34523', 'sdas', 2, '2017-09-11 05:26:14'),
(7, 'rabail', 'Iftikhar', 'rabail1@gmail.com', '34242', NULL, 'rabail', '323', 'sdasd', 2, '2017-09-11 05:27:15');

-- --------------------------------------------------------

--
-- Table structure for table `visitor_passenger`
--

CREATE TABLE `visitor_passenger` (
  `visitor_id` int(11) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `cnic` varchar(13) NOT NULL,
  `email` varchar(20) NOT NULL,
  `image` blob NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bus`
--
ALTER TABLE `bus`
  ADD PRIMARY KEY (`bus_id`),
  ADD KEY `tracker_id` (`tracker_id`),
  ADD KEY `cam_id` (`cam_id`);

--
-- Indexes for table `camera`
--
ALTER TABLE `camera`
  ADD PRIMARY KEY (`cam_id`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`city_id`);

--
-- Indexes for table `passenger`
--
ALTER TABLE `passenger`
  ADD PRIMARY KEY (`reservation_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `v_pass_id` (`visitor_id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `route`
--
ALTER TABLE `route`
  ADD PRIMARY KEY (`route_id`);

--
-- Indexes for table `schedule`
--
ALTER TABLE `schedule`
  ADD PRIMARY KEY (`schedule_id`),
  ADD KEY `route_id` (`route_id`),
  ADD KEY `bus_id` (`bus_id`);

--
-- Indexes for table `seat`
--
ALTER TABLE `seat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tracker`
--
ALTER TABLE `tracker`
  ADD PRIMARY KEY (`tracker_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `role_id` (`role_id`);

--
-- Indexes for table `visitor_passenger`
--
ALTER TABLE `visitor_passenger`
  ADD PRIMARY KEY (`visitor_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bus`
--
ALTER TABLE `bus`
  MODIFY `bus_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `camera`
--
ALTER TABLE `camera`
  MODIFY `cam_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;
--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `city_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `passenger`
--
ALTER TABLE `passenger`
  MODIFY `reservation_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `role_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `route`
--
ALTER TABLE `route`
  MODIFY `route_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `schedule`
--
ALTER TABLE `schedule`
  MODIFY `schedule_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `seat`
--
ALTER TABLE `seat`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tracker`
--
ALTER TABLE `tracker`
  MODIFY `tracker_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
