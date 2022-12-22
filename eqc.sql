-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 19 ديسمبر 2022 الساعة 11:45
-- إصدار الخادم: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eqc2`
--

-- --------------------------------------------------------

--
-- بنية الجدول `company`
--

CREATE TABLE `company` (
  `CID` int(100) NOT NULL,
  `CName` varchar(200) NOT NULL,
  `CCity` varchar(200) NOT NULL,
  `CEmail` varchar(200) NOT NULL,
  `CPhone` int(20) NOT NULL,
  `a_ID` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- إرجاع أو استيراد بيانات الجدول `company`
--

INSERT INTO `company` (`CID`, `CName`, `CCity`, `CEmail`, `CPhone`, `a_ID`) VALUES
(14, 'nameer', 'Riyadh', 'nameer@cc', 569685437, 1);

-- --------------------------------------------------------

--
-- بنية الجدول `hr`
--

CREATE TABLE `hr` (
  `HrID` int(100) NOT NULL,
  `HrName` varchar(200) NOT NULL,
  `HrEmail` varchar(200) NOT NULL,
  `HrPassword` varchar(200) NOT NULL,
  `HrPhone` int(20) NOT NULL,
  `a_ID` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- إرجاع أو استيراد بيانات الجدول `hr`
--

INSERT INTO `hr` (`HrID`, `HrName`, `HrEmail`, `HrPassword`, `HrPhone`, `a_ID`) VALUES
(1, 'Najla', 'najla@gmail.com', '1234', 569685437, 1),
(3, 'elaf', 'elaf@gmail.com', 'elaf123', 505632145, 1),
(4, 'ather', 'ather@gmail.com', 'ather654', 594563210, 1);

-- --------------------------------------------------------

--
-- بنية الجدول `job`
--

CREATE TABLE `job` (
  `id_job` int(100) NOT NULL,
  `jobName` varchar(200) NOT NULL,
  `qualification` varchar(225) NOT NULL,
  `experience` varchar(225) NOT NULL,
  `S_Date` date NOT NULL,
  `E_Date` date NOT NULL,
  `id_a` int(11) NOT NULL,
  `id_c` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- بنية الجدول `student`
--

CREATE TABLE `student` (
  `s_id` int(100) NOT NULL,
  `SName` int(200) NOT NULL,
  `SEmail` int(200) NOT NULL,
  `SPassword` int(100) NOT NULL,
  `Sfile` blob NOT NULL,
  `a_ID` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- بنية الجدول `student_apply_job`
--

CREATE TABLE `student_apply_job` (
  `id_s` int(100) NOT NULL,
  `id_j` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- بنية الجدول `systemadmin`
--

CREATE TABLE `systemadmin` (
  `Aid` int(100) NOT NULL,
  `AName` varchar(200) NOT NULL,
  `AEmail` varchar(200) NOT NULL,
  `APassword` varchar(100) NOT NULL,
  `APhone` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- بنية الجدول `works_on`
--

CREATE TABLE `works_on` (
  `c_id` int(100) NOT NULL,
  `hr_id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`CID`),
  ADD KEY `a_ID` (`a_ID`);

--
-- Indexes for table `hr`
--
ALTER TABLE `hr`
  ADD PRIMARY KEY (`HrID`),
  ADD KEY `a_ID` (`a_ID`);

--
-- Indexes for table `job`
--
ALTER TABLE `job`
  ADD PRIMARY KEY (`id_job`),
  ADD KEY `id_a` (`id_a`),
  ADD KEY `id_c` (`id_c`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`s_id`),
  ADD KEY `a_ID` (`a_ID`);

--
-- Indexes for table `student_apply_job`
--
ALTER TABLE `student_apply_job`
  ADD PRIMARY KEY (`id_s`,`id_j`),
  ADD KEY `id_j` (`id_j`);

--
-- Indexes for table `systemadmin`
--
ALTER TABLE `systemadmin`
  ADD PRIMARY KEY (`Aid`);

--
-- Indexes for table `works_on`
--
ALTER TABLE `works_on`
  ADD PRIMARY KEY (`c_id`,`hr_id`),
  ADD KEY `hr_id` (`hr_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `CID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `hr`
--
ALTER TABLE `hr`
  MODIFY `HrID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `job`
--
ALTER TABLE `job`
  MODIFY `id_job` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `s_id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `systemadmin`
--
ALTER TABLE `systemadmin`
  MODIFY `Aid` int(100) NOT NULL AUTO_INCREMENT;

--
-- قيود الجداول المحفوظة
--

--
-- القيود للجدول `job`
--
ALTER TABLE `job`
  ADD CONSTRAINT `job_ibfk_1` FOREIGN KEY (`id_c`) REFERENCES `company` (`CID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- القيود للجدول `student_apply_job`
--
ALTER TABLE `student_apply_job`
  ADD CONSTRAINT `student_apply_job_ibfk_1` FOREIGN KEY (`id_s`) REFERENCES `student` (`s_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `student_apply_job_ibfk_2` FOREIGN KEY (`id_j`) REFERENCES `job` (`id_job`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- القيود للجدول `works_on`
--
ALTER TABLE `works_on`
  ADD CONSTRAINT `works_on_ibfk_1` FOREIGN KEY (`c_id`) REFERENCES `company` (`CID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `works_on_ibfk_2` FOREIGN KEY (`hr_id`) REFERENCES `hr` (`HrID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
