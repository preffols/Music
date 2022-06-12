-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 09, 2022 at 05:48 AM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `music`
--

-- --------------------------------------------------------

--
-- Table structure for table `artistinfo`
--

CREATE TABLE IF NOT EXISTS `artistinfo` (
  `artistInfoId` int(11) NOT NULL,
  `nickName` varchar(45) DEFAULT NULL,
  `firstName` varchar(255) NOT NULL,
  `surName` varchar(255) NOT NULL,
  `district` varchar(245) NOT NULL,
  `artistInfoGen` varchar(45) DEFAULT NULL,
  `DoB` date NOT NULL,
  `phoneNumber` varchar(45) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `artistinfo`
--

INSERT INTO `artistinfo` (`artistInfoId`, `nickName`, `firstName`, `surName`, `district`, `artistInfoGen`, `DoB`, `phoneNumber`) VALUES
(4, 'brave', 'osbet', 'soko', 'Zomba', 'mzuni Student', '2021-12-07', '0999001347'),
(5, 'preffolz', 'prince', 'Nsusa', 'BT', 'mzuni Student', '2021-10-04', '0888001347');

-- --------------------------------------------------------

--
-- Table structure for table `graphicprice`
--

CREATE TABLE IF NOT EXISTS `graphicprice` (
  `graphicPriceId` int(11) NOT NULL,
  `graphicPrice` int(11) NOT NULL,
  `graphicPriceType` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `graphics`
--

CREATE TABLE IF NOT EXISTS `graphics` (
  `graphicsId` int(11) NOT NULL,
  `graphicsName` varchar(45) DEFAULT NULL,
  `graphicsType` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `music`
--

CREATE TABLE IF NOT EXISTS `music` (
  `id` int(11) NOT NULL,
  `name` varchar(256) NOT NULL,
  `location` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `songs`
--

CREATE TABLE IF NOT EXISTS `songs` (
  `songsId` int(11) NOT NULL,
  `songsName` varchar(45) DEFAULT NULL,
  `artistInfoId` int(11) NOT NULL,
  `ulbumID` int(11) NOT NULL,
  `songsDownloads` int(11) NOT NULL,
  `songMp3` text NOT NULL,
  `songPhoto` text NOT NULL,
  `otherArtist` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `ulbum`
--

CREATE TABLE IF NOT EXISTS `ulbum` (
  `ulbumId` int(11) NOT NULL,
  `ulbumName` varchar(45) NOT NULL,
  `artistInfoId` int(11) NOT NULL,
  `ulbumYear` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artistinfo`
--
ALTER TABLE `artistinfo`
  ADD PRIMARY KEY (`artistInfoId`);

--
-- Indexes for table `graphicprice`
--
ALTER TABLE `graphicprice`
  ADD KEY `graphicPriceId` (`graphicPriceId`);

--
-- Indexes for table `graphics`
--
ALTER TABLE `graphics`
  ADD PRIMARY KEY (`graphicsId`);

--
-- Indexes for table `music`
--
ALTER TABLE `music`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `songs`
--
ALTER TABLE `songs`
  ADD PRIMARY KEY (`songsId`), ADD KEY `artistInfoId` (`artistInfoId`);

--
-- Indexes for table `ulbum`
--
ALTER TABLE `ulbum`
  ADD PRIMARY KEY (`ulbumId`), ADD KEY `artistInfoId` (`artistInfoId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artistinfo`
--
ALTER TABLE `artistinfo`
  MODIFY `artistInfoId` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `graphicprice`
--
ALTER TABLE `graphicprice`
  MODIFY `graphicPriceId` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `graphics`
--
ALTER TABLE `graphics`
  MODIFY `graphicsId` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `music`
--
ALTER TABLE `music`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `songs`
--
ALTER TABLE `songs`
  MODIFY `songsId` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `ulbum`
--
ALTER TABLE `ulbum`
  MODIFY `ulbumId` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
