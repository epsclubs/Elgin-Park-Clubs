-- phpMyAdmin SQL Dump
-- version 3.5.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 11, 2014 at 09:52 PM
-- Server version: 5.5.40-36.1
-- PHP Version: 5.4.23

--
-- Database: `newcomer_epsclubs`
--

-- --------------------------------------------------------

--
-- Table structure for table `clubs`
--

CREATE TABLE IF NOT EXISTS `clubs` (
  `clbID` int(11) NOT NULL AUTO_INCREMENT,
  `clbName` varchar(45) NOT NULL,
  `clbDescription` text,
  PRIMARY KEY (`clbID`),
  UNIQUE KEY `clbName_UNIQUE` (`clbName`),
  UNIQUE KEY `clbID_UNIQUE` (`clbID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE IF NOT EXISTS `events` (
  `eventID` int(11) NOT NULL AUTO_INCREMENT,
  `eventCode` varchar(45) NOT NULL,
  `eventName` varchar(45) NOT NULL,
  `eventDescription` text,
  `eventLocation` varchar(225) DEFAULT NULL,
  `eventStartDateTime_copy1` datetime DEFAULT NULL,
  `eventEndDateTime` datetime DEFAULT NULL,
  PRIMARY KEY (`eventID`),
  UNIQUE KEY `eventID_UNIQUE` (`eventID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `userID` int(11) NOT NULL AUTO_INCREMENT,
  `userEmail` varchar(45) NOT NULL,
  `userPass` varchar(225) NOT NULL,
  `firstName` varchar(45) NOT NULL,
  `lastName` varchar(45) NOT NULL,
  `studentNumber` int(11) DEFAULT NULL,
  `classOf` int(11) DEFAULT NULL,
  `volunteerHrs` float DEFAULT NULL,
  PRIMARY KEY (`userID`),
  UNIQUE KEY `userEmail_UNIQUE` (`userEmail`),
  UNIQUE KEY `studentNumber_UNIQUE` (`studentNumber`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE `newcomer_epsclubs`.`user_event` (
  `eventID` INT NOT NULL,
  `userID` INT NOT NULL,
  `userRole` TINYINT(1) NOT NULL COMMENT '0 = host\n1 = staff\n2 = volunteer',
  `checkInTime` DATETIME NULL,
  `checkOutTime` DATETIME NULL);


CREATE TABLE `newcomer_epsclubs`.`club_event` (
  `clubID` INT NOT NULL,
  `eventID` INT NOT NULL);


CREATE TABLE `newcomer_epsclubs`.`club_user` (
  `clubID` INT NOT NULL,
  `userID` INT NOT NULL,
  `userRole` TINYINT(1) NOT NULL COMMENT '0 = clubExec\n1 = clubMember')
ENGINE = MyISAM
DEFAULT CHARACTER SET = utf8;
