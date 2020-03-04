-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 04, 2020 at 08:42 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

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
-- Table structure for table `collectmaterial`
--

CREATE TABLE `collectmaterial` (
  `id` int(11) NOT NULL,
  `materialName` varchar(50) NOT NULL,
  `collectorName` varchar(50) NOT NULL,
  `collectorID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `collectmaterial`
--

INSERT INTO `collectmaterial` (`id`, `materialName`, `collectorName`, `collectorID`) VALUES
(10, 'sdf ', 'mike stones', 7),
(15, 'tetetet', 'mike stones', 7);

-- --------------------------------------------------------

--
-- Table structure for table `collector`
--

CREATE TABLE `collector` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `fullName` varchar(50) NOT NULL,
  `totalPoints` int(11) NOT NULL,
  `address` varchar(50) NOT NULL,
  `schedule` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `collector`
--

INSERT INTO `collector` (`id`, `username`, `password`, `fullName`, `totalPoints`, `address`, `schedule`) VALUES
(7, 'mike', '123', 'mike stones', 0, 'fff', 'wednesday');

-- --------------------------------------------------------

--
-- Table structure for table `materials`
--

CREATE TABLE `materials` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `description` varchar(50) NOT NULL,
  `pointsperkg` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `materials`
--

INSERT INTO `materials` (`id`, `name`, `description`, `pointsperkg`) VALUES
(2, 'eeeevs ', 'vdsfds', 5),
(3, 'glass', 'tin glass', 28),
(6, 'tttt', ' ahdb kakds kajdk', 0),
(7, 'hgfh', 'mhjkl', 0),
(8, 'sgfdfhgf', 'nhgjhk', 0),
(9, 'mmbmhm', 'fdbn,m', 0),
(10, 'sdf ', 'bfghgf', 3),
(11, 'car', 'leg work', 4),
(13, 'cattt', 'vsdf sdfd', 3),
(14, 'Luwi ', 'fff', 4),
(15, 'tetetet', 'fsfes', 43);

-- --------------------------------------------------------

--
-- Table structure for table `recycler`
--

CREATE TABLE `recycler` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `totalPoints` int(11) NOT NULL,
  `ecolevel` varchar(50) NOT NULL DEFAULT 'newbie'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `recycler`
--

INSERT INTO `recycler` (`id`, `username`, `password`, `fullname`, `address`, `totalPoints`, `ecolevel`) VALUES
(1, 'peter', '123', 'peter smith', 'tttttt', 0, 'newbie');

-- --------------------------------------------------------

--
-- Table structure for table `submission`
--

CREATE TABLE `submission` (
  `submissionID` int(11) NOT NULL,
  `proposedDate` date NOT NULL,
  `actualDate` date NOT NULL,
  `weight` int(11) NOT NULL,
  `pointsawarded` int(11) NOT NULL,
  `status` varchar(50) NOT NULL,
  `materialID` int(11) NOT NULL,
  `userID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `address` varchar(100) NOT NULL,
  `schedule` varchar(50) NOT NULL,
  `totalpoints` int(11) NOT NULL,
  `ecolevel` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `fullname`, `usergroup`, `address`, `schedule`, `totalpoints`, `ecolevel`) VALUES
(1, 'admin', 'admin', 'Tester Luwi', 'admin', 'tester@help.edu.my', '0000-00-00', 0, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `collectmaterial`
--
ALTER TABLE `collectmaterial`
  ADD PRIMARY KEY (`id`),
  ADD KEY `collectorID` (`collectorID`);

--
-- Indexes for table `collector`
--
ALTER TABLE `collector`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `materials`
--
ALTER TABLE `materials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `recycler`
--
ALTER TABLE `recycler`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `submission`
--
ALTER TABLE `submission`
  ADD PRIMARY KEY (`submissionID`),
  ADD KEY `userID` (`userID`),
  ADD KEY `materialID` (`materialID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `collector`
--
ALTER TABLE `collector`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `materials`
--
ALTER TABLE `materials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `recycler`
--
ALTER TABLE `recycler`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `submission`
--
ALTER TABLE `submission`
  MODIFY `submissionID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `collectmaterial`
--
ALTER TABLE `collectmaterial`
  ADD CONSTRAINT `collectmaterial_ibfk_1` FOREIGN KEY (`collectorID`) REFERENCES `collector` (`id`);

--
-- Constraints for table `submission`
--
ALTER TABLE `submission`
  ADD CONSTRAINT `submission_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `submission_ibfk_2` FOREIGN KEY (`materialID`) REFERENCES `materials` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
