-- phpMyAdmin SQL Dump
-- version 4.0.5
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Feb 27, 2014 at 03:35 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `baseball`
--

-- --------------------------------------------------------

--
-- Table structure for table `2013_players`
--

CREATE TABLE IF NOT EXISTS `2013_players` (
  `p_id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(128) DEFAULT NULL,
  `lname` varchar(128) DEFAULT NULL,
  `number` smallint(6) DEFAULT NULL,
  `st_id` smallint(6) DEFAULT NULL,
  `home_id` smallint(6) DEFAULT NULL,
  PRIMARY KEY (`p_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `2013_players`
--

INSERT INTO `2013_players` (`p_id`, `fname`, `lname`, `number`, `st_id`, `home_id`) VALUES
(1, 'Jake', 'Diekman', 63, 5, 6),
(2, 'Cole', 'Hammels', 35, 3, 4),
(3, 'Jonathan', 'Papelbon', 58, 2, 1),
(4, 'Doc', 'Halladay', 34, 1, 2),
(5, 'Cliff', 'Lee', 33, 4, 3),
(6, 'Kyle', 'Kendrick', 38, 6, 5);

-- --------------------------------------------------------

--
-- Table structure for table `home`
--

CREATE TABLE IF NOT EXISTS `home` (
  `home_id` int(11) NOT NULL AUTO_INCREMENT,
  `city` varchar(128) DEFAULT NULL,
  `state` varchar(2) DEFAULT NULL,
  PRIMARY KEY (`home_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `home`
--

INSERT INTO `home` (`home_id`, `city`, `state`) VALUES
(1, 'Baton Rouge', 'LA'),
(2, 'Denver', 'CO'),
(3, 'Benton', 'AR'),
(4, 'San Diego', 'CA'),
(5, 'Houston', 'TX'),
(6, 'Wynmore', 'NE');

-- --------------------------------------------------------

--
-- Table structure for table `stats`
--

CREATE TABLE IF NOT EXISTS `stats` (
  `st_id` int(11) NOT NULL AUTO_INCREMENT,
  `year_in` char(4) DEFAULT NULL,
  `year_out` char(4) DEFAULT NULL,
  `era` float DEFAULT NULL,
  `position` char(1) DEFAULT NULL,
  PRIMARY KEY (`st_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `stats`
--

INSERT INTO `stats` (`st_id`, `year_in`, `year_out`, `era`, `position`) VALUES
(1, '1998', '2013', 3.38, 'P'),
(2, '2005', '', 2.41, 'P'),
(3, '2006', '', 3.38, 'P'),
(4, '2002', '', 3.51, 'P'),
(5, '2012', '', 3.15, 'P'),
(6, '2007', '', 4.38, 'P');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
