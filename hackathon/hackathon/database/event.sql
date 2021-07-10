-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 10, 2021 at 06:20 AM
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
  `user_name` varchar(20) NOT NULL,
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
('vinaybk@gmail', '123', 'admin', '', 'VINAY B K', '4GM17IS060', 'IS', '8', '8095531197'),
('k@gmail.com', '123', 'USER', 'BUSSINESS ORIENTED', 'kruthik p jain', '4GM18IS054', 'CS', '2', '8095531197'),
('g@gmail.com', '123', 'USER', 'SOCIETAL IMPACT', 'GURURAJ', '4GM18IS057', 'MECH', '4', '8095531175');

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
('HACKATHON', 'SOCIETAL IMPACT', 'SI');

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

--
-- Dumping data for table `grevience`
--

INSERT INTO `grevience` (`name`, `email`, `sub`, `msg`) VALUES
('GURURAJ', 'guru@gmail.com', 'regarding HACK', 'abcdefghijklmnopqrst');

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
  `email` varchar(20) NOT NULL,
  `msg` varchar(100) NOT NULL,
  `tid` varchar(30) NOT NULL,
  `place` varchar(10) NOT NULL DEFAULT 'NONE',
  `score` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`part_id`, `events`, `event_type`, `tname`, `name`, `usn`, `branch`, `sem`, `mobile`, `email`, `msg`, `tid`, `place`, `score`) VALUES
('BO-1', 'BUSSINESS ORIENTED', 'HACKATHON', 'Jupiter', 'kruthik p jain', 'Gm Institute of Technology,Davangere', 'IS', 6, '8095531197', 'kruthik@gmail.com', 'AAA\r\nAAA\r\nAAA', 'TRA0012637U00', 'NONE', 0),
('SI-1', 'SOCIETAL IMPACT', 'HACKATHON', 'pluto', 'nagesh s h', 'jain institute of technology,davangere', 'CS', 6, '8095531175', 'n@gmail.com', 'GGGG\r\nTTTT\r\nHHH', 'TRA0012637U007', 'NONE', 0);

-- --------------------------------------------------------

--
-- Table structure for table `prob`
--

CREATE TABLE `prob` (
  `id` int(11) DEFAULT 0,
  `ps` varchar(1000) NOT NULL
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
