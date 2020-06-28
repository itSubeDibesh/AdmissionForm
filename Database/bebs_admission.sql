-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 28, 2020 at 08:15 PM
-- Server version: 10.3.23-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bebs_admission`
--

-- --------------------------------------------------------

--
-- Table structure for table `admission`
--

CREATE TABLE `admission` (
  `admissionId` bigint(20) UNSIGNED NOT NULL,
  `Stream` enum('Science','Management') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `AppliedFor` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Level` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `FullName` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Gender` enum('Male','Female','Other') COLLATE utf8mb4_unicode_ci NOT NULL,
  `Nationality` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `YearBs` int(11) NOT NULL,
  `MonthBs` int(11) NOT NULL,
  `DayBs` int(11) NOT NULL,
  `YearAD` int(11) NOT NULL,
  `MonthAD` int(11) NOT NULL,
  `DayAD` int(11) NOT NULL,
  `Zone` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `District` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `VDC_Municapilaty` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `WardNo` int(11) DEFAULT NULL,
  `ToleNo` int(11) DEFAULT NULL,
  `TelephoneNo` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `FatherName` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `FatherNationality` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `FatherOccupation_Title` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Telephone_Off` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Telephone_Res` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `MotherName` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `MotherNationality` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `MotherOccupation_Title` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `MotherTelephone` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `LocalGurdain` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Relationship` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Address` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `GurdainTelephoneNo` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `MobileNo` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `SlcPassedSchool` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `PassedOutYear` int(4) DEFAULT NULL,
  `SlcPassedSchoolAddress` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `OptionalSubjectsInSlc` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `FirstOptional` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Mark1stOpionalInSlc` int(11) DEFAULT NULL,
  `AggregratePercent` int(11) DEFAULT NULL,
  `SecondOptional` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Mark2ndOpionalInSlc` int(11) DEFAULT NULL,
  `ECA` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Hobby` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Awards` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Bus` tinyint(1) DEFAULT NULL,
  `BloodGroup` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `HealthProblem` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `EmergencyContact` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `UnSualHabit` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Image` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `LoginId` bigint(20) UNSIGNED NOT NULL,
  `Username` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Passwd` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Token` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `LastIp` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `DateCreated` datetime DEFAULT current_timestamp(),
  `DateUpdated` datetime DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`LoginId`, `Username`, `Passwd`, `Token`, `LastIp`, `DateCreated`, `DateUpdated`) VALUES
(1, 'System', '96fbd42124a24fd3ded4c81f1f5414ef5da0ea55', NULL, '27.34.27.5', '2020-06-28 16:56:44', '2020-06-28 16:57:44');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admission`
--
ALTER TABLE `admission`
  ADD PRIMARY KEY (`admissionId`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`LoginId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admission`
--
ALTER TABLE `admission`
  MODIFY `admissionId` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `LoginId` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
