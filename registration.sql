-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 14, 2018 at 06:27 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `registration`
--

-- --------------------------------------------------------

--
-- Table structure for table `cakes`
--

CREATE TABLE `cakes` (
  `cid` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cakes`
--

INSERT INTO `cakes` (`cid`, `name`, `price`) VALUES
(1, 'The Cake Factory', 200),
(2, 'Wasana Beakery', 100),
(3, 'Perera & Sons', 250),
(4, 'The English Cake Company -The Cakery', 300),
(5, 'Sen-Saal', 250);

-- --------------------------------------------------------

--
-- Table structure for table `deco`
--

CREATE TABLE `deco` (
  `did` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `deco`
--

INSERT INTO `deco` (`did`, `name`, `price`) VALUES
(1, 'Everlasting Flowers', 30000),
(2, 'Flower Decoration Sri Lanka', 40000),
(3, 'Leriza Flowers', 45000),
(4, 'Amalka Flowers', 30000);

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `eventid` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `nic` varchar(10) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `video` varchar(255) NOT NULL,
  `cake` varchar(255) NOT NULL,
  `cpieces` int(255) NOT NULL,
  `tables` varchar(255) NOT NULL,
  `tamount` int(11) NOT NULL,
  `camount` int(11) NOT NULL,
  `tentamount` int(11) NOT NULL,
  `venues` varchar(255) NOT NULL,
  `music` varchar(255) NOT NULL,
  `deco` varchar(255) NOT NULL,
  `food` varchar(255) NOT NULL,
  `pkgtype` int(11) NOT NULL,
  `plates` int(11) NOT NULL,
  `other` text NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`eventid`, `name`, `date`, `nic`, `photo`, `video`, `cake`, `cpieces`, `tables`, `tamount`, `camount`, `tentamount`, `venues`, `music`, `deco`, `food`, `pkgtype`, `plates`, `other`, `status`) VALUES
(1, '1212', 'aaaa', '', 'Vevra', '', 'ABC', 0, 'EEE', 0, 0, 0, 'III', 'Vevra', 'Vevra', 'Vevra', 0, 0, 'sdfsd', 'Rejected'),
(2, 'My Birthday', '2018-07-31', '961133610v', 'NowYouSeeME', 'NowYouSeeME', 'The Cake Factory', 50, 'Lassana Party(pvt) Ltd', 5, 20, 1, '', 'Entec Sound and Light', 'UUU', 'Royal Bekary', 1, 20, 'At my home', 'Approved'),
(3, 'Annual Batch Party', '2018-08-08', '961133610v', 'Umbrella', 'Umbrella', 'Perera $ Sons', 250, '', 0, 0, 0, '', 'London & Surrey', '', 'Raja Bojun', 1, 250, 'At UCSC', 'Reject'),
(4, 'Get Together', '2018-07-31', '961133610v', 'Umbrella', 'LetMeKnow.lk', 'The English Cake Company -The Cakery', 150, '', 0, 0, 0, '', 'ALG Sound & Lighting', '', 'Raja Bojun', 2, 150, 'At Carey College', 'Approve'),
(5, 'venura', '2018-07-04', '961133610v', 'Umbrella', 'LetMeKnow.lk', 'The Cake Factory', 2, 'P William', 3, 2, 1, 'Mt. Lavinia Hotel', 'London & Surrey', 'Everlasting Flowers', 'Raja Bojun', 1, 2, '', 'Reject');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `fbid` int(11) NOT NULL,
  `uname` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `msg` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`fbid`, `uname`, `email`, `msg`) VALUES
(1, 'Venura', 'venura.dananjaya@gmail.com', 'Your service was excellent');

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE `food` (
  `fid` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `pkg1` int(11) NOT NULL,
  `pkg2` int(11) NOT NULL,
  `pkg3` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`fid`, `name`, `pkg1`, `pkg2`, `pkg3`) VALUES
(1, 'Raja Bojun', 1200, 1300, 1500),
(2, 'Sen-Saal', 5200, 5300, 5500),
(3, 'Royal Bekary', 5000, 5500, 5700);

-- --------------------------------------------------------

--
-- Table structure for table `music`
--

CREATE TABLE `music` (
  `mid` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `music`
--

INSERT INTO `music` (`mid`, `name`, `price`) VALUES
(1, 'Entec Sound and Light', 50000),
(2, 'London & Surrey', 30000),
(3, 'Event Sound & Light Ltd', 30000),
(4, 'Eurohire Sound & Light', 50000),
(5, 'ALG Sound & Lighting', 40000),
(6, 'Wall Patterns', 10000);

-- --------------------------------------------------------

--
-- Table structure for table `photo`
--

CREATE TABLE `photo` (
  `pid` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `pprice` int(255) NOT NULL,
  `vprice` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `photo`
--

INSERT INTO `photo` (`pid`, `name`, `pprice`, `vprice`) VALUES
(1, 'Vevra', 6500, 7000),
(2, 'LetMeKnow.lk', 8500, 8000),
(3, 'NowYouSeeME', 9500, 7000),
(4, 'Umbrella', 5500, 5000);

-- --------------------------------------------------------

--
-- Table structure for table `tables`
--

CREATE TABLE `tables` (
  `tid` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `tprice` int(255) NOT NULL,
  `cprice` int(11) NOT NULL,
  `tentprice` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tables`
--

INSERT INTO `tables` (`tid`, `name`, `tprice`, `cprice`, `tentprice`) VALUES
(1, 'Charles Elvitigala & Sons', 250, 100, 1000),
(2, 'P William', 250, 100, 10000),
(3, 'Lassana Party(pvt) Ltd', 250, 100, 1000),
(4, 'Critco', 250, 100, 1000),
(5, 'Creative Entertainment (Pvt) Ltd', 250, 100, 1000),
(6, 'H.D Bennett Jayamanna & Sons', 250, 100, 1000);

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`name`) VALUES
('as'),
('as'),
('shehan'),
('as'),
('puka'),
('asa'),
('asa'),
('2q324234234'),
('7894'),
('123'),
('123'),
('123');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `nic` varchar(10) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `nic`, `password`) VALUES
(2, 'Admin', 'venura.dananjaya@gmail.com', '1312445v', '827ccb0eea8a706c4c34a16891f84e7b'),
(3, 'Venura', 'venura.dananjaya@gmail.com', '961133610v', '4297f44b13955235245b2497399d7a93'),
(16, 'Jeewanthi', 'jeewaprasa@gmail.com', '961213658v', '2d3d15a6cb13d9dcb7710b5a40b71e1f'),
(17, 'Chiran', 'chiran.nad@gmail.com', '945698783v', '1e5b278e612c0efde2c570112527bb27'),
(18, 'ucsc', 'ucsc.cmb.ac.lk', 'ucsc', 'd32934b31349d77e70957e057b1bcd28'),
(19, 'ucsc2', 'ucsc.cmb.ac@lk', 'ucsc2', '812d875491fc5496a5ea0dbcfd373133');

-- --------------------------------------------------------

--
-- Table structure for table `venues`
--

CREATE TABLE `venues` (
  `vid` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `venues`
--

INSERT INTO `venues` (`vid`, `name`, `price`) VALUES
(1, 'Hilton', 20000),
(2, 'Taj', 20000),
(3, 'Cinnamon Lakeside', 30000),
(4, 'Mt. Lavinia Hotel', 30000),
(5, 'Galle Face Hotel', 30000),
(6, 'Park Street Mews - Warehouse D', 15000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cakes`
--
ALTER TABLE `cakes`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `deco`
--
ALTER TABLE `deco`
  ADD PRIMARY KEY (`did`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`eventid`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`fbid`);

--
-- Indexes for table `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`fid`);

--
-- Indexes for table `music`
--
ALTER TABLE `music`
  ADD PRIMARY KEY (`mid`);

--
-- Indexes for table `photo`
--
ALTER TABLE `photo`
  ADD PRIMARY KEY (`pid`),
  ADD UNIQUE KEY `name` (`name`),
  ADD UNIQUE KEY `name_2` (`name`),
  ADD UNIQUE KEY `pid` (`pid`,`name`,`pprice`);

--
-- Indexes for table `tables`
--
ALTER TABLE `tables`
  ADD PRIMARY KEY (`tid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `venues`
--
ALTER TABLE `venues`
  ADD PRIMARY KEY (`vid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cakes`
--
ALTER TABLE `cakes`
  MODIFY `cid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `deco`
--
ALTER TABLE `deco`
  MODIFY `did` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `eventid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `fbid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `food`
--
ALTER TABLE `food`
  MODIFY `fid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `music`
--
ALTER TABLE `music`
  MODIFY `mid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `photo`
--
ALTER TABLE `photo`
  MODIFY `pid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tables`
--
ALTER TABLE `tables`
  MODIFY `tid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `venues`
--
ALTER TABLE `venues`
  MODIFY `vid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
