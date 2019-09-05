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
-- Table structure for table `niall_projects`
--

CREATE TABLE `niall_projects` (
  `projectId` int(11) NOT NULL,
  `projectTitle` varchar(255) NOT NULL,
  `projectDesc` varchar(2555) NOT NULL,
  `projectSummary` varchar(2555) NOT NULL,
  `projectImg` varchar(255) NOT NULL,
  `projectDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `niall_projects`
--

INSERT INTO `niall_projects` (`projectId`, `projectTitle`, `projectDesc`, `projectSummary`, `projectImg`, `projectDate`) VALUES
(2, 'Weave Head Integration ', 'Worked in a multi-disciplinary team of engineers, to design and manufacture a loom for the creation of textiles in composite applications with a focus on 3D fiber reinforced composite manufacture. Designed weave head system & ensured fully-compatible integration into loom using CAD to design individual components for manufacture.', 'My CAD Drawings produced as part of a project to devlop a weave head for a 3D loom', 'img/loom3.png', '2031-08-17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `niall_projects`
--
ALTER TABLE `niall_projects`
  ADD PRIMARY KEY (`projectId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `niall_projects`
--
ALTER TABLE `niall_projects`
  MODIFY `projectId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
