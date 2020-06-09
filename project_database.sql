-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 09, 2020 at 02:17 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--
CREATE DATABASE IF NOT EXISTS `project` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `project`;

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `appointmentID` int(36) NOT NULL,
  `proID` int(36) NOT NULL,
  `customerID` int(36) NOT NULL,
  `datetime` text NOT NULL,
  `new_appointment` tinyint(1) NOT NULL,
  `set_appointment` tinyint(1) NOT NULL,
  `done_appointment` tinyint(1) NOT NULL,
  `critique` text NOT NULL,
  `address` varchar(42) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `name` varchar(255) DEFAULT NULL,
  `passwrd` varchar(24) DEFAULT NULL,
  `userID` int(24) NOT NULL,
  `email` varchar(36) DEFAULT NULL,
  `telephonenumber` int(10) DEFAULT NULL,
  `address` varchar(40) DEFAULT NULL,
  `paymentID` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`name`, `passwrd`, `userID`, `email`, `telephonenumber`, `address`, `paymentID`) VALUES
('Mixalhs Kourhs', '2234', 1, 'at@email.com', 21027838, 'Naupaktou 37', 2567),
('Vasileios Nektarios Kandylios', '696969', 2, 'toemailmou@email.com', 69787878, 'Karolou 27-29', 3475),
('Mixahl Seklerakhs', '424242', 3, 'ypallhlakos@mail.com', 222102848, 'Agios Mina 17', 1337);

-- --------------------------------------------------------

--
-- Table structure for table `professional`
--

CREATE TABLE `professional` (
  `name` varchar(36) DEFAULT NULL,
  `passwrd` varchar(36) DEFAULT NULL,
  `userID` int(36) NOT NULL,
  `email` varchar(36) DEFAULT NULL,
  `telephonenumber` int(36) DEFAULT NULL,
  `address` varchar(36) DEFAULT NULL,
  `rangee` text DEFAULT NULL,
  `workingHours` text DEFAULT NULL,
  `charge` int(36) DEFAULT NULL,
  `paymentMethod` varchar(36) DEFAULT NULL,
  `jobDescription` text DEFAULT NULL,
  `jobName` varchar(36) DEFAULT NULL,
  `rating` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `professional`
--

INSERT INTO `professional` (`name`, `passwrd`, `userID`, `email`, `telephonenumber`, `address`, `rangee`, `workingHours`, `charge`, `paymentMethod`, `jobDescription`, `jobName`, `rating`) VALUES
('Antreas Tavlas', '2324', 1, 'tavlas@mastoras.com', 210282828, 'athens', '15km', '8-10', 25, 'karta', 'hlektrologos', 'hlektrologos4u', 5),
('Swthrhs Papatheodorou', '2455', 2, 'mast2@mastoras.gr', 261027838, 'patras', '18km', '8-12', 25, 'card', 'ydraulikos', 'ydraulikos4u', 5),
('Athanasios Paliatsas', '23123', 3, 'liatsas@mail.com', 21028282, 'athens', '25km', '8-12', 30, 'cash', 'ydraulikos', 'ydraulikos geitonias', NULL),
('Meneles Messalas', '4546', 4, 'mj@mail.com', 211228232, 'athens', '45km', '9-12', 20, 'karta', 'hlektrologos', 'prizakias', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`appointmentID`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`userID`);

--
-- Indexes for table `professional`
--
ALTER TABLE `professional`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `appointmentID` int(36) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `userID` int(24) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `professional`
--
ALTER TABLE `professional`
  MODIFY `userID` int(36) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
