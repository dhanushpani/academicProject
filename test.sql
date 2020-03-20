-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 20, 2020 at 05:51 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `EVENTS` ()  NO SQL
select * from event order by eventid$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `coordinator`
--

CREATE TABLE `coordinator` (
  `cname` varchar(40) NOT NULL,
  `cid` varchar(40) NOT NULL,
  `cpassword` varchar(40) NOT NULL,
  `eid` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `coordinator`
--

INSERT INTO `coordinator` (`cname`, `cid`, `cpassword`, `eid`) VALUES
('madhu', '1', '1234', '1'),
('dhanush', '2', '1234', '2'),
('harish', '3', '123456', '1'),
('akash pani', '5', '1234', '3');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `eventname` varchar(50) NOT NULL,
  `eventid` varchar(20) NOT NULL,
  `eventlocation` varchar(20) NOT NULL,
  `eventtime` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`eventname`, `eventid`, `eventlocation`, `eventtime`) VALUES
('football', '1', 'hall1', '2pm'),
('cricket', '2', 'hall2', '4pm');

-- --------------------------------------------------------

--
-- Table structure for table `participant`
--
-- Error reading structure for table test.participant: #1932 - Table 'test.participant' doesn't exist in engine
-- Error reading data for table test.participant: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'FROM `test`.`participant`' at line 1

-- --------------------------------------------------------

--
-- Table structure for table `participants`
--

CREATE TABLE `participants` (
  `pid` int(40) NOT NULL,
  `usn` varchar(40) NOT NULL,
  `name` varchar(40) NOT NULL,
  `eventid` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `participants`
--

INSERT INTO `participants` (`pid`, `usn`, `name`, `eventid`) VALUES
(1, '1ay1', 'harish', '2'),
(2, '1at', 'habeeb', '3'),
(3, '123', 'harish', '1');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `name` varchar(40) NOT NULL,
  `usn` varchar(40) NOT NULL,
  `dob` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `sem` varchar(5) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`name`, `usn`, `dob`, `email`, `sem`, `phone`, `password`) VALUES
('pani', '1', '18/04/1998', 'dhan@gmail.com', '3', '12222222', '1234'),
('dhanush', '123', '18?04>1998', 'dhanu@gmail.com', '3', '12345', '123'),
('madhusudhan', '1ay16is033', '18/09/1998', 'madhu@gmail.com', '4', '8431636906', '123456789'),
('dhanush pani c r', '1ay16is042', '18/04/1998', 'dhanushpani@gmail.com', '5', '7022463389', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `winner`
--

CREATE TABLE `winner` (
  `name` varchar(20) NOT NULL,
  `wusn` varchar(20) NOT NULL,
  `position` varchar(20) NOT NULL,
  `eid` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `winner`
--

INSERT INTO `winner` (`name`, `wusn`, `position`, `eid`) VALUES
('raju', '', '1', '1'),
('habeeb', '', '1', '2'),
('harish', '', '2', '1'),
('deepika', '', '3', '2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `coordinator`
--
ALTER TABLE `coordinator`
  ADD PRIMARY KEY (`cid`),
  ADD KEY `eventid` (`eid`);

--
-- Indexes for table `participants`
--
ALTER TABLE `participants`
  ADD PRIMARY KEY (`pid`),
  ADD KEY `eventid` (`eventid`),
  ADD KEY `usn` (`usn`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`usn`);

--
-- Indexes for table `winner`
--
ALTER TABLE `winner`
  ADD KEY `wusn` (`wusn`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
