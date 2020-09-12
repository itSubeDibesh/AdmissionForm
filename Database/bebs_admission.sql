-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 12, 2020 at 02:53 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
  `AdmissionId` int(10) UNSIGNED NOT NULL,
  `FullNameDevnagari` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `FullNameEnglish` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Dob` date NOT NULL,
  `Gender` enum('Male','Female','Other') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Other',
  `PermanentProvince` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `PermanentDistrict` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `PermanentMunicipality` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `PermanentWardNo` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `TemporaryProvince` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `TemporaryDistrict` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `TemporaryMunicipality` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `TemporaryWardNo` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `FathersName` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `FatherOccupation` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `FatherPhoneNumber` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `MothersName` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `MotherOccupation` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `MotherPhoneNumber` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `GuardianName` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `GuardianOccupation` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `GuardianPhoneNumber` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `SchoolsName` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `SchoolAddress` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `PercentageGPA` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `PassedYear` date NOT NULL,
  `SymbolNo` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Science` enum('Biology','Mathematics') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Management` enum('Economics','Marketing','BusinessMathematics') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Humanities` enum('English','Nepali') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Education` enum('English','Nepali') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `disability` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Created` timestamp NOT NULL DEFAULT current_timestamp()
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
(1, 'System', '96fbd42124a24fd3ded4c81f1f5414ef5da0ea55', NULL, '127.0.0.1', '2020-06-28 16:56:44', '2020-09-12 18:10:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admission`
--
ALTER TABLE `admission`
  ADD PRIMARY KEY (`AdmissionId`);

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
  MODIFY `AdmissionId` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `LoginId` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
