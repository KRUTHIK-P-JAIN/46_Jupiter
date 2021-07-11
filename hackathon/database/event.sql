-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 11, 2021 at 06:10 AM
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
-- Database: `event`
--

-- --------------------------------------------------------

--
-- Table structure for table `coordinator`
--

CREATE TABLE `coordinator` (
  `user_name` varchar(200) NOT NULL,
  `user_pass` varchar(20) NOT NULL,
  `category` varchar(10) NOT NULL,
  `events` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `usn` varchar(10) NOT NULL,
  `branch` varchar(5) NOT NULL,
  `sem` varchar(1) NOT NULL,
  `mobile` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `coordinator`
--

INSERT INTO `coordinator` (`user_name`, `user_pass`, `category`, `events`, `name`, `usn`, `branch`, `sem`, `mobile`) VALUES
('vinaybk1999@gmail.com', '123456', 'admin', '', 'VINAY B K', '4GM17IS060', 'IS', '8', '8095531197');

-- --------------------------------------------------------

--
-- Table structure for table `event_master`
--

CREATE TABLE `event_master` (
  `event_type` varchar(10) NOT NULL,
  `events` varchar(20) NOT NULL,
  `code` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `event_master`
--

INSERT INTO `event_master` (`event_type`, `events`, `code`) VALUES
('HACKATHON', 'BUSSINESS ORIENTED', 'BO'),
('HACKATHON', 'SOCIAL IMPACT', 'SI');

-- --------------------------------------------------------

--
-- Table structure for table `grevience`
--

CREATE TABLE `grevience` (
  `name` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `sub` varchar(20) NOT NULL,
  `msg` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE `info` (
  `part_id` varchar(6) NOT NULL,
  `events` varchar(20) NOT NULL,
  `event_type` varchar(10) NOT NULL,
  `tname` varchar(20) NOT NULL,
  `name` varchar(30) NOT NULL,
  `usn` varchar(100) NOT NULL,
  `branch` varchar(6) NOT NULL,
  `sem` int(1) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `msg` varchar(100) NOT NULL,
  `tid` varchar(30) NOT NULL,
  `place` varchar(10) NOT NULL DEFAULT 'NONE',
  `score` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`part_id`, `events`, `event_type`, `tname`, `name`, `usn`, `branch`, `sem`, `mobile`, `email`, `msg`, `tid`, `place`, `score`) VALUES
('BO-1', 'BUSSINESS ORIENTED', 'HACKATHON', 'JUPITER', 'GURURAJ DALAWAI', 'gm institute of technology,davangere', 'IS', 6, '9916152536', 'gururaj.dalawai@gmail.com', 'vinay\r\nkruthik\r\nkiran', 'tra001n0015', 'NONE', 0),
('SI-1', 'SOCIAL IMPACT', 'HACKATHON', 'pluto', 'kiran', 'gm institute of technology,davangere', 'IS', 4, '9731335226', 'vinay17dot19@gmail.c', 'ftftftf', 'tra001n003', 'NONE', 0);

-- --------------------------------------------------------

--
-- Table structure for table `prob`
--

CREATE TABLE `prob` (
  `id` int(11) DEFAULT 0,
  `ps` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `results`
--

CREATE TABLE `results` (
  `part_id` varchar(6) NOT NULL,
  `team_name` varchar(30) NOT NULL,
  `events` varchar(20) NOT NULL,
  `event_type` varchar(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `usn` varchar(10) NOT NULL,
  `branch` varchar(6) NOT NULL,
  `place` varchar(6) NOT NULL,
  `score` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `event_master`
--
ALTER TABLE `event_master`
  ADD PRIMARY KEY (`events`);

--
-- Indexes for table `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`part_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
