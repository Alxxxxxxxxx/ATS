-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 22, 2016 at 02:02 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dbalumni`
--

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

CREATE TABLE IF NOT EXISTS `education` (
  `education_id` int(11) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(50) NOT NULL,
  `education` varchar(500) NOT NULL,
  `pskills` varchar(100) NOT NULL,
  PRIMARY KEY (`education_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `employed_data`
--

CREATE TABLE IF NOT EXISTS `employed_data` (
  `employed_data_id` int(11) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(255) NOT NULL,
  `employment_status` varchar(10) NOT NULL,
  `organization` varchar(255) NOT NULL,
  `qualifications` varchar(255) NOT NULL,
  `income` varchar(255) NOT NULL,
  `skills` varchar(10) NOT NULL,
  PRIMARY KEY (`employed_data_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `generalinfo`
--

CREATE TABLE IF NOT EXISTS `generalinfo` (
  `general_info_id` int(11) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(50) NOT NULL,
  `permanent_address` varchar(50) NOT NULL,
  `email_address` varchar(50) NOT NULL,
  `telephone_number` varchar(11) NOT NULL,
  `civil_status` varchar(30) NOT NULL,
  `sex` varchar(10) NOT NULL,
  `date_of_birth` date NOT NULL,
  `religion` varchar(50) NOT NULL,
  `region` varchar(10) NOT NULL,
  `province` varchar(50) NOT NULL,
  `residence` varchar(10) NOT NULL,
  PRIMARY KEY (`general_info_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `selfemployed`
--

CREATE TABLE IF NOT EXISTS `selfemployed` (
  `self_employed_data_id` int(11) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(255) NOT NULL,
  `business` varchar(255) NOT NULL,
  `related` varchar(255) NOT NULL,
  `reasons` varchar(255) NOT NULL,
  `noofemployee` varchar(10) NOT NULL,
  `skills` varchar(255) NOT NULL,
  PRIMARY KEY (`self_employed_data_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `unemployed`
--

CREATE TABLE IF NOT EXISTS `unemployed` (
  `unemployed_data_id` int(11) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(255) NOT NULL,
  `reason` varchar(255) NOT NULL,
  `seek` varchar(10) NOT NULL,
  `doing` varchar(255) NOT NULL,
  `finance` varchar(100) NOT NULL,
  `desire` varchar(10) NOT NULL,
  `consider` varchar(10) NOT NULL,
  PRIMARY KEY (`unemployed_data_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `fullname`, `username`, `password`) VALUES
(1, 'Gerwin', 'admin', 'admin');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
