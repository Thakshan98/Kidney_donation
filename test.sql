-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 19, 2022 at 07:35 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `blood`
--

CREATE TABLE `blood` (
  `Blood_ID` int(255) NOT NULL,
  `Blood_G` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blood`
--

INSERT INTO `blood` (`Blood_ID`, `Blood_G`) VALUES
(6, 'A+'),
(7, 'A'),
(8, 'A-'),
(17, 'B'),
(18, 'B+');

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `R_ID` int(11) NOT NULL,
  `User_ID` int(11) NOT NULL,
  `Donor_ID` int(11) NOT NULL,
  `R_msg` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`R_ID`, `User_ID`, `Donor_ID`, `R_msg`) VALUES
(9, 57, 57, 'oiuo'),
(10, 57, 57, 'oiuo'),
(11, 57, 58, ' hghsgfh');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `ID` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Gender` varchar(255) NOT NULL,
  `Age` int(11) NOT NULL,
  `Mobile` varchar(11) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `isAdmin` tinyint(1) NOT NULL,
  `isDonor` tinyint(1) NOT NULL,
  `Blood_ID` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID`, `Name`, `Email`, `Gender`, `Age`, `Mobile`, `Address`, `Password`, `isAdmin`, `isDonor`, `Blood_ID`) VALUES
(57, 'Thakshan', 'thakshansk@gmail.com', 'Male', 24, '076-6186824', ' Jaffna', '4d8843ceed5fc9d8c6457a37fad87ef4', 0, 0, 6),
(58, 'Admin', 'admin123@gmail.com', 'Male', 45, '066-2233947', ' No.94,Main Street, Matale', '0192023a7bbd73250516f069df18b500', 1, 1, 8),
(59, 'Sharmini', 'sharmini99@gmail.com', 'female', 23, '077-5625511', ' No.32/32, River Side Road, Kaluthawala, Matale', '5b1969e99376c5a5f4bee7c6800ca39e', 0, 0, 6);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blood`
--
ALTER TABLE `blood`
  ADD PRIMARY KEY (`Blood_ID`);

--
-- Indexes for table `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`R_ID`),
  ADD KEY `rf1` (`User_ID`),
  ADD KEY `rf2` (`Donor_ID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `blood` (`Blood_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blood`
--
ALTER TABLE `blood`
  MODIFY `Blood_ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
  MODIFY `R_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `request`
--
ALTER TABLE `request`
  ADD CONSTRAINT `rf1` FOREIGN KEY (`User_ID`) REFERENCES `user` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `rf2` FOREIGN KEY (`Donor_ID`) REFERENCES `user` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `blood` FOREIGN KEY (`Blood_ID`) REFERENCES `blood` (`BLOOD_ID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
