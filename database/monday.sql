-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 22, 2022 at 11:01 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `monday`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE IF NOT EXISTS `bookings` (
  `id` int(200) NOT NULL AUTO_INCREMENT,
  `client_id` varchar(200) NOT NULL,
  `house_id` int(200) NOT NULL,
  `status` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `client_id`, `house_id`, `status`) VALUES
(1, '0', 1, 'booked'),
(2, '0', 1, 'booked'),
(3, 'egesa@praisewebsolutions.com', 1, 'booked'),
(4, 'alexakleinz@gmail.com', 1, 'booked'),
(5, 'egesa@praisewebsolutions.com', 3, 'booked'),
(6, 'egesa@praisewebsolutions.com', 3, 'booked'),
(7, 'egesa@praisewebsolutions.com', 0, 'booked'),
(8, 'egesa@praisewebsolutions.com', 0, 'booked'),
(9, 'egesa@praisewebsolutions.com', 0, 'booked'),
(10, 'egesa@praisewebsolutions.com', 0, 'booked'),
(11, 'egesa@praisewebsolutions.com', 0, 'booked'),
(12, 'egesa@praisewebsolutions.com', 3, 'booked'),
(13, 'egesa@praisewebsolutions.com', 2, 'booked');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE IF NOT EXISTS `clients` (
  `id` int(200) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `fullname`, `email`, `password`) VALUES
(1, 'Egesa', 'egesa@praisewebsolutions.com', '0cbc6611f5540bd0809a388dc95a615b'),
(2, 'Alexa Kleinz', 'alexakleinz@gmail.com', '6944d4d43c2ec200647b67e58153a123');

-- --------------------------------------------------------

--
-- Table structure for table `houses`
--

CREATE TABLE IF NOT EXISTS `houses` (
  `id` int(200) NOT NULL AUTO_INCREMENT,
  `img` varchar(200) NOT NULL,
  `hname` varchar(200) NOT NULL,
  `status` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `houses`
--

INSERT INTO `houses` (`id`, `img`, `hname`, `status`) VALUES
(1, '1.jpg', 'Double Room House In Ggaba', 'empty'),
(2, '2.jpg', 'Single Room House In Ggaba', 'empty'),
(3, '3.jpg', 'Apartment in Bunga', 'empty');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
