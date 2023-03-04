-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 10, 2021 at 05:30 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `patient`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`email`, `password`) VALUES
('kumara@gmail.com', 'kumara1234');

-- --------------------------------------------------------

--
-- Table structure for table `online_payments`
--

CREATE TABLE `online_payments` (
  `UserId` int(10) NOT NULL,
  `Name1` varchar(50) NOT NULL,
  `CardNo` varchar(20) NOT NULL,
  `NameOnCard` varchar(50) NOT NULL,
  `expYearMonth` varchar(10) NOT NULL,
  `CVV` int(5) NOT NULL,
  `Payment` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `online_payments`
--

INSERT INTO `online_payments` (`UserId`, `Name1`, `CardNo`, `NameOnCard`, `expYearMonth`, `CVV`, `Payment`) VALUES
(10025, 'Kumara Siriwardana', '1111-2253-5630-5862', 'Visa', '03/22', 458, '16000'),
(10130, 'Nirasha Fernando', '5369-5236-9511-6233', 'mastercard', '07/23', 915, '5000'),
(10131, 'Pushpa Gunasena', '62259-5627-5748-4125', 'mastercard', '08/24', 820, '7500');

-- --------------------------------------------------------

--
-- Table structure for table `patientdetails`
--

CREATE TABLE `patientdetails` (
  `ID` int(20) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `dob` date NOT NULL,
  `age` int(3) NOT NULL,
  `address` varchar(50) NOT NULL,
  `parentname` varchar(30) NOT NULL,
  `pid` varchar(15) NOT NULL,
  `phonenum` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patientdetails`
--

INSERT INTO `patientdetails` (`ID`, `fname`, `lname`, `gender`, `dob`, `age`, `address`, `parentname`, `pid`, `phonenum`, `email`, `password`, `date`) VALUES
(10025, 'Kumara', 'Siriwardana', 'male', '1973-07-26', 47, '3,Alhena mawatha, Pannipitiya', 'L.D.Perera', '756325413v', 778564525, 'kumara@gmail.com', 'kumara1234', '2021-06-10 10:41:32'),
(10129, 'Champika', 'Priyadarshani', 'female', '1980-05-14', 41, '14/18, Malwatta rd, Kottawa', 'P.N.P.Silva', '786253848v', 762594563, 'champi@gmail.com', 'silva@78', '2021-06-10 11:49:18'),
(10130, 'Nirasha', 'Fernando', 'female', '2000-02-24', 21, '04, Sirwardana rd, Kawdana, Dehiwala', 'Piyal Fernando', '705426519v', 112758369, 'nirashafernando@gmail.com', 'nirasha@20', '2021-06-10 12:10:45'),
(10131, 'Pushpa', 'Gunasena', 'female', '1982-09-15', 38, '32A, Gorakana rd, Colombo 06', 'Priyantha', 'Dias', 756482546, 'priyanthapushpa@gmail.com', '1234@priyantha', '2021-06-10 12:23:44');

-- --------------------------------------------------------

--
-- Table structure for table `records`
--

CREATE TABLE `records` (
  `records_ID` int(11) NOT NULL,
  `records` varchar(1000) NOT NULL,
  `ID_fk` int(20) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `records`
--

INSERT INTO `records` (`records_ID`, `records`, `ID_fk`, `date`) VALUES
(1, 'Problems:\r\nBlood pressure 150/100,     \r\n\r\nMedications:\r\nLosartan 50mg (after breakfast and dinner)', 10025, '2021-06-10 10:49:40'),
(7, 'Problems:\r\nCholesterol\r\n\r\n,\r\n\r\nMedications:\r\nAspirin 150mg (after breakfast and dinner, one tablet per time)\r\nAtorva 40mg (after breakfast and dinner, one tablet per time)', 10129, '2021-06-10 12:06:44'),
(8, 'Problems:\r\nMigraine\r\n\r\n,\r\nMedications:\r\nFlunarizine tablets 5mg (After breakfast , one tablet per time)', 10130, '2021-06-10 12:14:45'),
(9, 'Problems:\r\nDiabetes\r\n\r\n,\r\nMedications:\r\nHUMULIN INJ 70/30 (insulin reg & isophane(human)) 20 units ac breakfast', 10131, '2021-06-10 12:26:22');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_appointment`
--

CREATE TABLE `tbl_appointment` (
  `Id` int(11) NOT NULL,
  `fldFName` varchar(50) NOT NULL,
  `fldLName` varchar(50) NOT NULL,
  `fldService` varchar(50) NOT NULL,
  `fldPhone` int(11) NOT NULL,
  `fldDate` date NOT NULL,
  `fldTime` time NOT NULL,
  `fldMessage` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_appointment`
--

INSERT INTO `tbl_appointment` (`Id`, `fldFName`, `fldLName`, `fldService`, `fldPhone`, `fldDate`, `fldTime`, `fldMessage`) VALUES
(4, 'Malithi', 'perera', 'Dental', 772563158, '2021-06-18', '16:00:00', ''),
(5, 'Geethma', 'Amarasena', 'Neurology', 756845236, '2021-06-25', '18:00:00', ''),
(6, 'Damith', 'Weerasekara', 'Dental', 776485239, '2021-06-24', '17:30:00', ''),
(7, 'Nimal', 'Perera', 'Dental', 712563648, '2021-06-25', '18:30:00', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `online_payments`
--
ALTER TABLE `online_payments`
  ADD PRIMARY KEY (`UserId`);

--
-- Indexes for table `patientdetails`
--
ALTER TABLE `patientdetails`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `records`
--
ALTER TABLE `records`
  ADD PRIMARY KEY (`records_ID`),
  ADD KEY `ID_fk` (`ID_fk`);

--
-- Indexes for table `tbl_appointment`
--
ALTER TABLE `tbl_appointment`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `online_payments`
--
ALTER TABLE `online_payments`
  MODIFY `UserId` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10132;

--
-- AUTO_INCREMENT for table `patientdetails`
--
ALTER TABLE `patientdetails`
  MODIFY `ID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10132;

--
-- AUTO_INCREMENT for table `records`
--
ALTER TABLE `records`
  MODIFY `records_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_appointment`
--
ALTER TABLE `tbl_appointment`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `records`
--
ALTER TABLE `records`
  ADD CONSTRAINT `records_ibfk_1` FOREIGN KEY (`ID_fk`) REFERENCES `patientdetails` (`ID`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
