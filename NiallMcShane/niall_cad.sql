-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 05, 2019 at 08:54 AM
-- Server version: 10.4.7-MariaDB
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
-- Database: `drice21`
--

-- --------------------------------------------------------

--
-- Table structure for table `niall_cad`
--

CREATE TABLE `niall_cad` (
  `cadID` int(11) NOT NULL,
  `projectID` int(11) NOT NULL,
  `cadTitle` varchar(255) NOT NULL,
  `cadImg` varchar(255) NOT NULL,
  `cadDesc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `niall_cad`
--

INSERT INTO `niall_cad` (`cadID`, `projectID`, `cadTitle`, `cadImg`, `cadDesc`) VALUES
(3, 2, '', 'img/loom3.png', ''),
(4, 2, '', 'img/loom2.png', ''),
(5, 2, '', 'img/loom1.png', ''),
(6, 2, '', 'img/Verticlerail.par.png', ''),
(7, 2, '', 'img/Verticleframe.par.png', ''),
(8, 2, '', 'img/Assembly8.asm(2).png', ''),
(9, 2, '', 'img/Assembly8.asm(1).png', ''),
(10, 2, '', 'img/HorizontalFrame.par.png', ''),
(11, 2, '', 'img/RailBlock.par.png', ''),
(12, 2, '', 'img/LinearBearing2.par.png', ''),
(13, 2, '', 'img/LinearBearing2.par(2).png', ''),
(14, 2, '', 'img/LinearBearing2.par(1).png', ''),
(15, 2, '', 'img/NewLowerplate.par(1).png', ''),
(16, 2, '', 'img/NewLowerplate.par(1).png', ''),
(17, 2, '', 'img/NewLowerplate.par.png', ''),
(18, 2, '', 'img/NewLowerplate.par(1).png', ''),
(19, 2, '', 'img/MountingPlate(1).par.png', ''),
(20, 2, '', 'img/FinalDesign.par.png', ''),
(21, 2, '', 'img/Bearingclamp2.par(1).png', ''),
(22, 2, '', 'img/Bearingclamp2.par.png', ''),
(23, 2, '', 'img/Assembly5.asm.png', ''),
(24, 2, '', 'img/Assembly6.asm.png', ''),
(25, 2, '', 'img/Assembly7.asm.png', ''),
(26, 2, '', 'img/Assembly8.asm.png', ''),
(27, 2, '', 'img/Assembly1.asm.png', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `niall_cad`
--
ALTER TABLE `niall_cad`
  ADD PRIMARY KEY (`cadID`),
  ADD KEY `FK_projectToCADIds` (`projectID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `niall_cad`
--
ALTER TABLE `niall_cad`
  MODIFY `cadID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `niall_cad`
--
ALTER TABLE `niall_cad`
  ADD CONSTRAINT `FK_projectToCADIds` FOREIGN KEY (`projectID`) REFERENCES `niall_projects` (`projectId`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
