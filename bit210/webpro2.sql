-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 04, 2020 at 08:15 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

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
(1, 'wood', 'peter', 1),
(2, 'glass', 'peter', 1),
(3, 'plastic', 'peter', 1);

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
  `schedule` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `collector`
--

INSERT INTO `collector` (`id`, `username`, `password`, `fullName`, `totalPoints`, `address`, `schedule`) VALUES
(1, 'peter', 'abc', 'peter', 70210, 'jalan damansara desa kiara condo', 'Monday, Thrusday'),
(2, 'john', '123', 'john', 77, 'help', 'Monday, Wednesay');

-- --------------------------------------------------------

--
-- Table structure for table `makeappointment`
--

CREATE TABLE `makeappointment` (
  `submissionID` int(11) NOT NULL,
  `proposedDate` date NOT NULL,
  `actualDate` date NOT NULL DEFAULT current_timestamp(),
  `status` varchar(50) NOT NULL DEFAULT 'Proposed',
  `materialID` int(11) NOT NULL,
  `materialName` text NOT NULL,
  `weight` int(50) NOT NULL,
  `userID` int(11) NOT NULL,
  `recyclerName` text NOT NULL,
  `pointAwarded` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `makeappointment`
--

INSERT INTO `makeappointment` (`submissionID`, `proposedDate`, `actualDate`, `status`, `materialID`, `materialName`, `weight`, `userID`, `recyclerName`, `pointAwarded`) VALUES
(1, '2020-04-30', '2020-04-04', 'submitted', 1, ' wood', 4, 1, 'mike', 0),
(2, '2020-04-19', '2020-04-04', 'submitted', 2, ' glass', 3, 1, 'mike', 24),
(3, '2020-04-29', '2020-04-04', 'submitted', 3, ' plastic', 5000, 1, 'mike', 0);

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
(1, 'wood', 'Hard wood for furniture ', 5),
(2, 'glass', 'flexible glass ', 8),
(3, 'plastic', 'Thin shopping bag plastic', 12),
(4, 'rubber', 'torn rubber from cars', 4),
(5, 'metal', 'Tin from home electronics ', 15);

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
  `totalPoint` int(11) NOT NULL,
  `ecolevel` varchar(50) NOT NULL DEFAULT 'newbie'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `recycler`
--

INSERT INTO `recycler` (`id`, `username`, `password`, `fullname`, `address`, `totalPoint`, `ecolevel`) VALUES
(1, 'mike', '123', 'mike', 'jalan damansara desa kiara condo', 24, 'newbie');

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
-- Indexes for table `makeappointment`
--
ALTER TABLE `makeappointment`
  ADD PRIMARY KEY (`submissionID`),
  ADD KEY `userID` (`userID`),
  ADD KEY `materialID` (`materialID`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `makeappointment`
--
ALTER TABLE `makeappointment`
  MODIFY `submissionID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `materials`
--
ALTER TABLE `materials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `recycler`
--
ALTER TABLE `recycler`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
  ADD CONSTRAINT `collectmaterial_ibfk_1` FOREIGN KEY (`collectorID`) REFERENCES `collector` (`id`),
  ADD CONSTRAINT `collectmaterial_ibfk_2` FOREIGN KEY (`id`) REFERENCES `materials` (`id`);

--
-- Constraints for table `makeappointment`
--
ALTER TABLE `makeappointment`
  ADD CONSTRAINT `makeappointment_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `collector` (`id`),
  ADD CONSTRAINT `makeappointment_ibfk_2` FOREIGN KEY (`materialID`) REFERENCES `materials` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
