-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 18, 2018 at 07:17 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `student`
--

-- --------------------------------------------------------

--
-- Table structure for table `reg`
--

CREATE TABLE IF NOT EXISTS `reg` (
  `fst_name` varchar(50) NOT NULL,
  `lst_name` varchar(50) NOT NULL,
  `sid` int(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `slot1` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reg`
--

INSERT INTO `reg` (`fst_name`, `lst_name`, `sid`, `email`, `slot1`) VALUES
('dsd', 'sdsd', 12122, 'jj@gmail.com', 'A '),
('sakib', 'hossain', 1111, 'sakib@gmail.com', 'A '),
('tarek', 'hossain', 1001, 'tarek@gmail.com', 'B '),
('manik', 'ahmed', 1002, 'manik@gmail.com', 'B '),
('kair', 'ahmed', 1003, 'kabir@gmail.com', 'B '),
('sumonn', 'ashsan', 44, 'd@gmail.com', 'A ');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
