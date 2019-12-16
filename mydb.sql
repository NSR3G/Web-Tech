-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 16, 2019 at 08:32 AM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `emp`
--

DROP TABLE IF EXISTS `emp`;
CREATE TABLE IF NOT EXISTS `emp` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `us` varchar(22) NOT NULL,
  `em` varchar(22) NOT NULL,
  `ps` varchar(256) NOT NULL,
  `name` varchar(22) NOT NULL,
  `ad` varchar(22) NOT NULL,
  `mo` int(22) NOT NULL,
  `dob` varchar(22) NOT NULL,
  `ge` varchar(22) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `emp`
--

INSERT INTO `emp` (`id`, `us`, `em`, `ps`, `name`, `ad`, `mo`, `dob`, `ge`) VALUES
(1, 'nanda', 'nanda@1', 'nk', 'nanda', 'asd', 121431, '123432', 'male'),
(2, 'raghu', 'raghu', 'jp', 'raghu', 'asdf', 1234214, '34234', 'male'),
(3, 'raghsu', 'ragfhu', 'jp', 'raghu', 'asdf', 1234214, '34234', 'male'),
(4, 'fnsda', 'nanda@1', 'nk', 'fnsda', 'magadi', 123456, '23092000', 'male'),
(5, '', '', '', '', 'magadi', 123456, '23092000', 'male'),
(6, 'adsf', 'sdf@123', '123', 'adsf', 'magadi', 123456, '23092000', 'male'),
(7, 'dasf', 'asdf@123', 'asd', 'dasf', 'magadi', 123456, '23092000', 'male'),
(8, 'sdf', 'raghu@12', 'asd', 'sdf', 'magadi', 123456, '23092000', 'male');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(22) NOT NULL AUTO_INCREMENT,
  `us` varchar(22) NOT NULL,
  `em` varchar(22) NOT NULL,
  `ps` varchar(256) NOT NULL,
  `name` varchar(22) NOT NULL,
  `ad` varchar(22) NOT NULL,
  `mo` int(22) NOT NULL,
  `dob` varchar(22) NOT NULL,
  `ge` varchar(22) NOT NULL,
  `complainid` int(255) DEFAULT NULL,
  `complain` varchar(100) DEFAULT NULL,
  `status` varchar(50) NOT NULL,
  `requestid` int(255) DEFAULT NULL,
  `request` varchar(255) DEFAULT NULL,
  `orderid` int(255) DEFAULT NULL,
  `obrand` varchar(10) DEFAULT NULL,
  `omodel` varchar(10) DEFAULT NULL,
  `ovariant` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `us`, `em`, `ps`, `name`, `ad`, `mo`, `dob`, `ge`, `complainid`, `complain`, `status`, `requestid`, `request`, `orderid`, `obrand`, `omodel`, `ovariant`) VALUES
(1, 'raghu', 'raghu@123', '123', 'raghu', 'magadi', 12234, '23092000', 'male', 100, 'sdfsad', 'hello', 0, NULL, NULL, NULL, NULL, ''),
(5, 'nanda', 'nanda@1', '123', 'nanda', 'magadi', 123456, '23092000', 'male', 101, 'sdfsafsdf', 'osjdfh', 0, NULL, NULL, NULL, NULL, ''),
(6, 'srish', 'srish@123', '12', 'srish', 'magadi', 123456, '23092000', 'male', 102, 'asdasd', '', 0, NULL, NULL, NULL, NULL, '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
