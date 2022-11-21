-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 21, 2022 at 03:35 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mycurd`
--

-- --------------------------------------------------------

--
-- Table structure for table `curddata`
--

CREATE TABLE `curddata` (
  `ID` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Phone` int(20) NOT NULL,
  `Address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `curddata`
--

INSERT INTO `curddata` (`ID`, `Name`, `Email`, `Phone`, `Address`) VALUES
(1, 'Najib Hossain', 'najibhossain01@gmail.com', 1745114811, 'Bogura'),
(2, 'Arobi Islam', 'Arobislam@gmail.com', 1746876532, 'Sylhet'),
(3, 'Sojib Hasan', 'sajibsahan02@gmail.com', 1765287632, 'Bogura'),
(4, 'Sadik Hossain', 'sadikhossain@gmail.com', 1873546298, 'Tangail'),
(5, 'Sadia mir', 'mirsadia@gmail.com', 1736542876, 'CTG');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `curddata`
--
ALTER TABLE `curddata`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `curddata`
--
ALTER TABLE `curddata`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
