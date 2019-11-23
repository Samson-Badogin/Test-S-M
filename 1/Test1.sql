-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 23, 2019 at 11:05 AM
-- Server version: 5.7.28-0ubuntu0.18.04.4
-- PHP Version: 7.2.24-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `requestform`
--

-- --------------------------------------------------------

--
-- Table structure for table `Test1`
--

DROP TABLE IF EXISTS `Test1`;
CREATE TABLE IF NOT EXISTS `Test1` (
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `Test1`
--

INSERT INTO `Test1` (`name`) VALUES
('max'),
('Olegra'),
('Startost'),
('sfth'),
('ЛФЕН'),
('SAMSON'),
(''),
('SchwartzNIGGER'),
('SchwartzNIGGER'),
('SchwartzNIGGER'),
('SchwartzNIGGER'),
('SchwartzNIGGER'),
('SchwartzNIGGER'),
('ZZZ'),
('<script>alert(xss);</script>'),
('ZXCVB'),
('ZXCVB'),
('ZXCVB'),
('ZXCVB5'),
('ZXCVB6'),
('zzz10'),
('123'),
('321'),
('<script>alert(xss!);</script>');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
