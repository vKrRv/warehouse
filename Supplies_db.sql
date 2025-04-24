-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net


SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";




--
-- Database: `Supplies_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `Requests`
--

CREATE TABLE IF NOT EXISTS `Requests` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `C_Username` varchar(20) NOT NULL,
  `Item_ID` varchar(10) NOT NULL,
  `Quantity` tinyint(4) NOT NULL DEFAULT '1',
  `Approve_Request` tinyint(1) NOT NULL DEFAULT '0',
  `Delivery_Sent` tinyint(1) NOT NULL DEFAULT '0',
  `Delivery_Received` tinyint(1) NOT NULL DEFAULT '0',
  `Order_Time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `Requests`
--

INSERT INTO `Requests` (`ID`, `C_Username`, `Item_ID`, `Quantity`, `Approve_Request`, `Delivery_Sent`, `Delivery_Received`, `Order_Time`) VALUES
(1, 'lSaad', 'art_1', 3, 0, 0, 0, '2014-03-16 14:21:10'),
(2, 'aKhalid', 'st_2', 2, 0, 0, 0, '2014-03-16 14:22:24'),
(3, 'mSami', 'hw_1', 3, 1, 0, 0, '2014-03-16 14:23:16'),
(4, 'mZahed', 'hw_2', 1, 1, 1, 0, '2014-03-16 14:24:14');

-- --------------------------------------------------------

--
-- Table structure for table `Unit`
--

CREATE TABLE IF NOT EXISTS `Unit` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Department_Name` varchar(50) NOT NULL,
  `College/Deanship` varchar(50) NOT NULL,
  `Search_Keywords` text NOT NULL,
  `Admin` varchar(20) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `Unit`
--

INSERT INTO `Unit` (`ID`, `Department_Name`, `College/Deanship`, `Search_Keywords`, `Admin`) VALUES
(1, 'Department of Computer Science', 'College of Computer Science & IT', 'IT, software, hardware, stationary', 'mZahed'),
(2, 'Department of Computer Information System', 'College of Computer Science & IT', 'IT, software, hardware, stationary', 'mZahed'),
(3, '', 'College of Computer Science & IT', 'IT, software, hardware, stationary', 'mZahed'),
(4, '', 'College of Design', 'software, Art, stationary, tools', 'lSaad'),
(5, 'Human Resources', 'Deanship of Admin Staff Development', 'software, stationary', 'mSami'),
(6, '', 'Deanship of Admin Staff Development', 'software, stationary', 'mSami'),
(7, 'Department of Graphic Design', 'College of Design', 'software, hardware, stationary, Art, Tools', 'lSaad'),
(8, '', 'Warehouse Admin', 'All', 'sAli');

-- --------------------------------------------------------

--
-- Table structure for table `User`
--

CREATE TABLE IF NOT EXISTS `User` (
  `Username` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Unit_ID` int(11) NOT NULL,
  `BuildingNo` varchar(10) NOT NULL,
  `RoomNo` varchar(10) NOT NULL,
  PRIMARY KEY (`Username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `User`
--

INSERT INTO `User` (`Username`, `Password`, `Name`, `Unit_ID`, `BuildingNo`, `RoomNo`) VALUES
('aKhalid', '11111', 'Adel Khalid', 2, '400', '401'),
('lSaad', '12345', 'Layla Saad', 7, '900', '929'),
('mSami', '12345', 'Mohammed Sami', 5, '10', '101'),
('mZahed', '12345', 'Mai Zahed', 3, '600', '6200'),
('sAli', '101010', 'Salem Ali', 8, '555', '501');

-- --------------------------------------------------------

--
-- Table structure for table `Warehouse_Item`
--

CREATE TABLE IF NOT EXISTS `Warehouse_Item` (
  `ID` varchar(10) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Category` varchar(20) NOT NULL,
  `Quantity` int(10) unsigned NOT NULL DEFAULT '1',
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Warehouse_Item`
--

INSERT INTO `Warehouse_Item` (`ID`, `Name`, `Category`, `Quantity`) VALUES
('art_1', 'Brushes', 'Art', 872),
('hw_1', 'Internet Cables', 'Hardware', 271),
('hw_2', 'Projector', 'Hardware', 10),
('st_1', 'Blue Pens', 'Stationary', 1000),
('st_2', 'A4 Paper Pack', 'Stationary', 2090),
('sw_1', 'OS Installation CD', 'Software', 342);


