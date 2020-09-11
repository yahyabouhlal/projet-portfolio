-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 05, 2020 at 03:11 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portfolio`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `Email`, `Password`) VALUES
(1, 'loutfallah.25@gmail.com', '$2y$10$G5td0can9M6XUB/wyakX/eEtIGLsrxTJax.CvzTtiu2JAHC/Ksfde');

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

DROP TABLE IF EXISTS `project`;
CREATE TABLE IF NOT EXISTS `project` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(50) NOT NULL,
  `Description` varchar(150) NOT NULL,
  `Image` varchar(100) NOT NULL,
  `Github` varchar(100) NOT NULL,
  `View` varchar(100) NOT NULL,
  `Category` varchar(50) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`Id`, `Name`, `Description`, `Image`, `Github`, `View`, `Category`) VALUES
(1, 'atelier flexbox', 'For this challenge you will reproduce the home page of the site: https://slack.com using Flexbox.', 'atelier-flexbox.jpg', 'https://github.com/loutfallah/atelier-flexbox', 'https://loutfallah.github.io/atelier-flexbox/', 'app'),
(3, ' JavaScript Drum Kit', 'The first of the JavaScript30 projects walks through building a drum kit that binds key presses to playing drum sounds', 'Drum-Kit.jpg', 'https://github.com/loutfallah/JavaScript-Drum-Kit/', ' https://loutfallah.github.io/JavaScript-Drum-Kit/', 'icon'),
(4, 'Clock', 'In this project the task consists of building a Clock by using only HTML/CSS/JS. ', 'Clock.jpg', 'https://github.com/loutfallah/JS-and-CSS-Clock', 'https://loutfallah.github.io/JS-and-CSS-Clock/', 'icon');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
