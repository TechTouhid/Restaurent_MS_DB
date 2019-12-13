-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 13, 2019 at 11:37 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `RestaurantDB`
--

-- --------------------------------------------------------

--
-- Table structure for table `Bill`
--

CREATE TABLE `Bill` (
  `BillNo` int(11) NOT NULL,
  `Time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `Date` date DEFAULT NULL,
  `BillAmount` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `Cash`
--

CREATE TABLE `Cash` (
  `ReceiptNo` int(11) NOT NULL,
  `Time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `Date` date DEFAULT NULL,
  `PaymentType` varchar(255) DEFAULT NULL,
  `TotalAmount` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `CreditCard`
--

CREATE TABLE `CreditCard` (
  `CC_No` int(11) NOT NULL,
  `FirstName` varchar(255) DEFAULT NULL,
  `LastName` varchar(255) DEFAULT NULL,
  `ExpiryDate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `Customer`
--

CREATE TABLE `Customer` (
  `CustomerId` int(11) NOT NULL,
  `Name` varchar(255) DEFAULT NULL,
  `Phone` int(20) DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `C_Order`
--

CREATE TABLE `C_Order` (
  `OrderId` int(11) NOT NULL,
  `Time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `Date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `C_Table`
--

CREATE TABLE `C_Table` (
  `TableNo` int(11) NOT NULL,
  `Size` varchar(255) DEFAULT NULL,
  `IsReserved` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `Employee`
--

CREATE TABLE `Employee` (
  `EmployeeNo` int(11) NOT NULL,
  `FirstName` varchar(255) DEFAULT NULL,
  `LastName` varchar(255) DEFAULT NULL,
  `Phone` varchar(255) DEFAULT NULL,
  `City` varchar(255) DEFAULT NULL,
  `Gender` int(1) DEFAULT NULL,
  `Salary` int(25) DEFAULT NULL,
  `JobTitle` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Employee`
--

INSERT INTO `Employee` (`EmployeeNo`, `FirstName`, `LastName`, `Phone`, `City`, `Gender`, `Salary`, `JobTitle`) VALUES
(1, 'Touhidur', 'Rahman', '18377226513', 'Natore', 1, 500, 'CEO'),
(2, 'Azad', 'Hossain', '11111111', 'Dhaka', 1, 500, 'Manager');

-- --------------------------------------------------------

--
-- Table structure for table `Meal`
--

CREATE TABLE `Meal` (
  `MealId` int(11) NOT NULL,
  `Name` varchar(255) DEFAULT NULL,
  `Desciption` varchar(355) DEFAULT NULL,
  `Price` int(20) DEFAULT NULL,
  `Size` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `Reservation`
--

CREATE TABLE `Reservation` (
  `ReservationNo` int(11) NOT NULL,
  `Time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `Date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Bill`
--
ALTER TABLE `Bill`
  ADD PRIMARY KEY (`BillNo`);

--
-- Indexes for table `Cash`
--
ALTER TABLE `Cash`
  ADD PRIMARY KEY (`ReceiptNo`);

--
-- Indexes for table `CreditCard`
--
ALTER TABLE `CreditCard`
  ADD PRIMARY KEY (`CC_No`);

--
-- Indexes for table `Customer`
--
ALTER TABLE `Customer`
  ADD PRIMARY KEY (`CustomerId`);

--
-- Indexes for table `C_Order`
--
ALTER TABLE `C_Order`
  ADD PRIMARY KEY (`OrderId`);

--
-- Indexes for table `C_Table`
--
ALTER TABLE `C_Table`
  ADD PRIMARY KEY (`TableNo`);

--
-- Indexes for table `Employee`
--
ALTER TABLE `Employee`
  ADD PRIMARY KEY (`EmployeeNo`);

--
-- Indexes for table `Meal`
--
ALTER TABLE `Meal`
  ADD PRIMARY KEY (`MealId`);

--
-- Indexes for table `Reservation`
--
ALTER TABLE `Reservation`
  ADD PRIMARY KEY (`ReservationNo`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Bill`
--
ALTER TABLE `Bill`
  MODIFY `BillNo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Cash`
--
ALTER TABLE `Cash`
  MODIFY `ReceiptNo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `CreditCard`
--
ALTER TABLE `CreditCard`
  MODIFY `CC_No` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Customer`
--
ALTER TABLE `Customer`
  MODIFY `CustomerId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `C_Order`
--
ALTER TABLE `C_Order`
  MODIFY `OrderId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `C_Table`
--
ALTER TABLE `C_Table`
  MODIFY `TableNo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Employee`
--
ALTER TABLE `Employee`
  MODIFY `EmployeeNo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `Meal`
--
ALTER TABLE `Meal`
  MODIFY `MealId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Reservation`
--
ALTER TABLE `Reservation`
  MODIFY `ReservationNo` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
