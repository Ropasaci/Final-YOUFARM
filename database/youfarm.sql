-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 09, 2021 at 02:23 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `youfarm`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

DROP DATABASE IF EXISTS youfarm; 
CREATE DATABASE youfarm; 
USE youfarm; 

CREATE TABLE `cart` (
  `transactionID` int(11) NOT NULL,
  `InvestmentID` int(11) NOT NULL,
  `NameOfInvestment` varchar(50) NOT NULL,
  `ProfitShare` varchar(11) NOT NULL,
  `HarvestPeriod` varchar(50) NOT NULL,
  `ExpectedYield` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`transactionID`, `InvestmentID`, `NameOfInvestment`, `ProfitShare`, `HarvestPeriod`, `ExpectedYield`) VALUES
(3, 2, '1 Hectare Covo', '40%', 'over 12 months (continuous)', '11000 bundles'),
(4, 5, '1 Hectare Tsunga', '40%', 'over 12 months (continuous)', '8000 bundles');

-- --------------------------------------------------------

--
-- Table structure for table `investmentopportunity`
--

CREATE TABLE `investmentopportunity` (
  `opportunity_id` int(11) NOT NULL,
  `oppname` varchar(50) DEFAULT NULL,
  `requiredinvestment` float DEFAULT NULL,
  `profitshare` varchar(5) DEFAULT NULL,
  `miniinvestment` float DEFAULT NULL,
  `harvestperiod` varchar(100) DEFAULT NULL,
  `wholesaleprice` float DEFAULT NULL,
  `expectedyield` varchar(100) DEFAULT NULL,
  `oppstatus` enum('available','taken') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `investmentopportunity`
--

INSERT INTO `investmentopportunity` (`opportunity_id`, `oppname`, `requiredinvestment`, `profitshare`, `miniinvestment`, `harvestperiod`, `wholesaleprice`, `expectedyield`, `oppstatus`) VALUES
(1, 'Button Mushrooms', 4500, '40%', 100, 'after 60 days', 7, '700kg per room', 'available'),
(2, '1 Hectare Covo', 25971.1, '40%', 100, 'over 12 months (continuous)', 4, '11000 bundles', 'available'),
(3, '1 Hectare Rape', 25461.1, '40%', 100, 'over 12 months (continuous)', 4, '9000 bundles', 'available'),
(4, '1 Hectare Spinach', 23334.1, '40%', 100, 'over 12 months (continuous)', 4, '10000 bundles', 'available'),
(5, '1 Hectare Tsunga', 24124.9, '40%', 100, 'over 12 months (continuous)', 4, '8000 bundles', 'available');

-- --------------------------------------------------------

--
-- Table structure for table `investor`
--

CREATE TABLE `investor` (
  `investor_id` int(10) UNSIGNED NOT NULL,
  `amountinvested` float DEFAULT NULL,
  `amountentitled` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `investor`
--

INSERT INTO `investor` (`investor_id`, `amountinvested`, `amountentitled`) VALUES
(1, 5000, 7000),
(2, 4000, 5600),
(3, 10000, 14000),
(4, 15000, NULL),
(5, 1000, 1400);

-- --------------------------------------------------------

--
-- Table structure for table `person`
--

CREATE TABLE `person` (
  `person_id` int(10) UNSIGNED NOT NULL,
  `fname` varchar(50) DEFAULT NULL,
  `lname` varchar(50) DEFAULT NULL,
  `username` varchar(90) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `location` varchar(70) DEFAULT NULL,
  `phonenumber` varchar(12) DEFAULT NULL,
  `pass` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `person`
--

INSERT INTO `person` (`person_id`, `fname`, `lname`, `username`, `dob`, `location`, `phonenumber`, `pass`) VALUES
(1, 'Grace', 'Andrews', 'grace', '1990-01-30', '92 Daniel street Mbare Harare', '+23353849452', 'grace12'),
(2, 'Anna', 'Ike', 'anna', '1970-07-01', '34 Mukute Rd Houghton Park', '+2335456790', 'ike13'),
(3, 'Paul', 'Peterson', 'paul', '1996-08-26', '89 7th Street Harare', '099788234', 'paul11'),
(4, 'Rutendo', 'Saci', 'rutendo', '1998-12-01', '54 Gateway Mazoe', '0557890456', 'djflkfalksaci7'),
(5, 'Akua', 'Ansah', 'akua', '1989-10-10', '67 Silcox Macheke', '+23353849452', 'akua13'),
(6, 'dsfgdgf', 'egsdfgdsg', 'sdfasfgdsf', '2021-12-06', 'gdfgfdgfd', '54564646', 'rod'),
(7, 'gdfgdfsgdsf', 'dfgdfsgfsg', 'qdfsgfdsgdfs', '2021-12-22', 'fadsfadsf', '44554', 'rodney'),
(8, 'dgdfg', 'gfdsgdfsg', 'dfgfdsgf', '0000-00-00', 'fgsfdgf', 'fdgfdg', '123'),
(9, 'DFGDSGD', 'DFGDSG', 'DFGDG', '1999-11-22', 'KJLDFALSDJF', '4451321332', '1'),
(10, '544', '55654', '456464', '0044-05-04', '4546', '5646', '45'),
(11, 'Ropa', 'Saci', 'ropasaci123', '1998-12-01', 'Ghana, Accra', '465566', '123');

-- --------------------------------------------------------

--
-- Table structure for table `workshops`
--

CREATE TABLE `workshops` (
  `workshop_id` int(10) UNSIGNED NOT NULL,
  `eventdate` date DEFAULT NULL,
  `eventname` varchar(50) DEFAULT NULL,
  `person_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `workshops`
--

INSERT INTO `workshops` (`workshop_id`, `eventdate`, `eventname`, `person_id`) VALUES
(1, '2021-02-18', 'Precision Farming', 0),
(2, '2021-03-18', 'Agriculture', 0),
(3, '2021-04-18', 'Poultry', 0),
(4, '2021-05-18', 'Fishing', 0),
(5, '2021-06-18', 'Financing farming', 0);

-- --------------------------------------------------------

--
-- Table structure for table `workshops_attending`
--

CREATE TABLE `workshops_attending` (
  `WorkshopID` int(11) NOT NULL,
  `EventDate` date NOT NULL,
  `EventName` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `workshops_attending`
--

INSERT INTO `workshops_attending` (`WorkshopID`, `EventDate`, `EventName`) VALUES
(5, '2021-06-18', 'Financing farming');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`transactionID`);

--
-- Indexes for table `investmentopportunity`
--
ALTER TABLE `investmentopportunity`
  ADD PRIMARY KEY (`opportunity_id`);

--
-- Indexes for table `investor`
--
ALTER TABLE `investor`
  ADD PRIMARY KEY (`investor_id`);

--
-- Indexes for table `person`
--
ALTER TABLE `person`
  ADD PRIMARY KEY (`person_id`);

--
-- Indexes for table `workshops`
--
ALTER TABLE `workshops`
  ADD PRIMARY KEY (`workshop_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `transactionID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `investmentopportunity`
--
ALTER TABLE `investmentopportunity`
  MODIFY `opportunity_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `person`
--
ALTER TABLE `person`
  MODIFY `person_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `workshops`
--
ALTER TABLE `workshops`
  MODIFY `workshop_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `investor`
--
ALTER TABLE `investor`
  ADD CONSTRAINT `investor_ibfk_1` FOREIGN KEY (`investor_id`) REFERENCES `person` (`person_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
