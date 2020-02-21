-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 24, 2019 at 01:59 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webpro2`
--

-- --------------------------------------------------------

--
-- Table structure for table `allocation`
--

CREATE TABLE `allocation` (
  `id` int(11) NOT NULL,
  `fromDate` date NOT NULL,
  `duration` int(11) NOT NULL,
  `endDate` date NOT NULL,
  `unit` int(10) NOT NULL,
  `application` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `appeals`
--

CREATE TABLE `appeals` (
  `id` int(10) NOT NULL,
  `reason` varchar(100) NOT NULL,
  `images` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appeals`
--

INSERT INTO `appeals` (`id`, `reason`, `images`) VALUES
(1, 'not money', 0x34313532626436352d383032622d346563352d396563642d3337343065626465396664392e6a7067),
(5, 'vff', 0x31343935353936335f3638313834383637383634353834365f313139383930333936343536393532383732335f6e2e6a7067);

-- --------------------------------------------------------

--
-- Table structure for table `application`
--

CREATE TABLE `application` (
  `id` int(10) NOT NULL,
  `applicationDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `requiredDate` date NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'new',
  `residence` int(10) NOT NULL,
  `userName` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `application`
--

INSERT INTO `application` (`id`, `applicationDate`, `requiredDate`, `status`, `residence`, `userName`) VALUES
(29, '2019-11-24 09:45:03', '2019-11-14', 'new', 4, 'test'),
(30, '2019-11-24 09:45:21', '2019-11-29', 'new', 2, 'test'),
(31, '2019-11-24 09:51:29', '2019-11-14', 'new', 3, 'test'),
(32, '2019-11-24 09:52:55', '2019-11-07', 'new', 2, 'peter'),
(33, '2019-11-24 09:55:22', '2019-11-01', 'new', 1, 'peter'),
(37, '2019-11-24 12:51:55', '2019-11-14', 'new', 1, 'john'),
(38, '2019-11-24 12:52:51', '2019-11-01', 'new', 1, 'peter');

-- --------------------------------------------------------

--
-- Table structure for table `residences`
--

CREATE TABLE `residences` (
  `id` int(10) NOT NULL,
  `residenceName` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `numUnits` int(10) NOT NULL,
  `sizePerUnit` int(10) NOT NULL,
  `amenities` varchar(100) NOT NULL,
  `monthlyRental` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `residences`
--

INSERT INTO `residences` (`id`, `residenceName`, `address`, `numUnits`, `sizePerUnit`, `amenities`, `monthlyRental`) VALUES
(1, 'Help University', 'Bukit bandaraya', 2, 2, 'Ping Pong, Dance Studio etc', 2000),
(2, 'Trek Condo', 'Bukit bandaraya', 2, 2, '', 2000),
(3, 'South Bend ', 'Bukit bandaraya', 2, 2, '', 2000),
(4, 'Crystal Residence', 'Bukit bandaraya', 2, 2, '', 2000),
(5, 'Diamond Residence', 'Bukit bandaraya', 2, 2, '', 2000);

-- --------------------------------------------------------

--
-- Table structure for table `unit`
--

CREATE TABLE `unit` (
  `id` int(10) NOT NULL,
  `unitNo` int(5) NOT NULL,
  `availability` varchar(20) NOT NULL,
  `residence` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `unit`
--

INSERT INTO `unit` (`id`, `unitNo`, `availability`, `residence`) VALUES
(1, 1, 'available', 1),
(2, 2, 'available', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(64) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `usergroup` varchar(20) NOT NULL,
  `staff_id` varchar(30) NOT NULL,
  `email` varchar(100) NOT NULL,
  `monthly_income` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `fullname`, `usergroup`, `staff_id`, `email`, `monthly_income`) VALUES
(1, 'test', 'test', 'Tester', 'applicant', '', 'tester@help.edu.my', 4000),
(3, 'peter', 'abcd', 'lughano ghambi', 'applicant', '', 'ghambi.lughano@gmail.com', 4562),
(5, 'jane2', 'luwi', 'lughano  vincent ghambi', 'applicant', '', 'ghambi.lughano@gmail.comdd', 4562),
(7, 'john', 'john', 'john smith', 'applicant', '', 'john@g.com', 7777),
(9, 'testt', 'testt', 'test', 'officer', '78', 'gggg@h.com', 785),
(22, 'mia', 'mia', 'dfsfdsf', 'officer', '124', 'fddfds@fddsf.com', 454);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `allocation`
--
ALTER TABLE `allocation`
  ADD PRIMARY KEY (`id`),
  ADD KEY `application` (`application`),
  ADD KEY `unit` (`unit`);

--
-- Indexes for table `appeals`
--
ALTER TABLE `appeals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `application`
--
ALTER TABLE `application`
  ADD PRIMARY KEY (`id`),
  ADD KEY `residence` (`residence`),
  ADD KEY `userName` (`userName`);

--
-- Indexes for table `residences`
--
ALTER TABLE `residences`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `unit`
--
ALTER TABLE `unit`
  ADD PRIMARY KEY (`id`),
  ADD KEY `residence` (`residence`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appeals`
--
ALTER TABLE `appeals`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `application`
--
ALTER TABLE `application`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `residences`
--
ALTER TABLE `residences`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `unit`
--
ALTER TABLE `unit`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `allocation`
--
ALTER TABLE `allocation`
  ADD CONSTRAINT `allocation_ibfk_1` FOREIGN KEY (`application`) REFERENCES `application` (`id`),
  ADD CONSTRAINT `allocation_ibfk_2` FOREIGN KEY (`unit`) REFERENCES `unit` (`id`);

--
-- Constraints for table `appeals`
--
ALTER TABLE `appeals`
  ADD CONSTRAINT `appeals_ibfk_1` FOREIGN KEY (`id`) REFERENCES `application` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `application`
--
ALTER TABLE `application`
  ADD CONSTRAINT `application_ibfk_1` FOREIGN KEY (`residence`) REFERENCES `residences` (`id`),
  ADD CONSTRAINT `application_ibfk_2` FOREIGN KEY (`userName`) REFERENCES `user` (`username`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `unit`
--
ALTER TABLE `unit`
  ADD CONSTRAINT `unit_ibfk_1` FOREIGN KEY (`residence`) REFERENCES `residences` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
