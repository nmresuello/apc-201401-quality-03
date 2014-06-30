-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 18, 2012 at 07:58 AM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `paf-fcms`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE IF NOT EXISTS `employee` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `serialnum` char(10) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `mname` varchar(30) DEFAULT NULL,
  `mobile_num` varchar(11) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `birthdate` date NOT NULL,
  `address` varchar(30) NOT NULL,
  `street` varchar(30) NOT NULL,
  `city` varchar(30) NOT NULL,
  `tin_num` varchar(10) DEFAULT NULL,
  `philhealth_num` char(20) NOT NULL,
  `atm_num` char(20) NOT NULL,
  `pagibig_num` char(20) NOT NULL,
  `deduction` decimal(8,2) NOT NULL,
  `pct_tax` decimal(10,2) NOT NULL,
  `bir_exempt` varchar(4) DEFAULT NULL,
  `picture` blob NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `serialnum`, `lname`, `fname`, `mname`, `mobile_num`, `gender`, `birthdate`, `address`, `street`, `city`, `tin_num`, `philhealth_num`, `atm_num`, `pagibig_num`, `deduction`, `pct_tax`, `bir_exempt`, `picture`) VALUES
(1, '1981-23456', 'Dela Pena', 'Augusto', '', '09285002397', 'F', '1966-12-20', 'Brgy Pinahan', 'Matatag St.', 'Pasay City', '', '1298739102', '239048230980', '104000488401', 2139.00, 2342.00, '', ''),
(2, '1239-21093', 'Canlas', 'Anthony', '', '0928500****', 'M', '1966-12-20', '61-A RECTO EXT.,', 'CJVAB', 'Pasay City', '219048029', '2093482309', '93048209', '092482093', 2135.00, 1234.00, '', ''),
(3, '1999-04123', 'Macasaet', 'Ferdinand', '', '0923335****', 'M', '1967-11-13', '123A Phase 2', 'Manhattan St.', 'Pasay City', '', '2130982931', '12938219380', '1239821093', 987.00, 2344.00, '', ''),
(4, 'e6546', 'gfd', 'gfd', 'g', '546', 'F', '2012-10-09', 'gfd', 'gfd', 'gfd', '546', '654', '654', '654', 654.00, 654.00, '654', 0x50656e6775696e732e6a7067),
(5, '5467', 'hgj', 'jhg', 'j', '567', 'F', '2012-10-03', 'jhg', 'jhg', 'jhg', '765', '765', '765', '765', 765.00, 765.00, '765', ''),
(6, '3213', '6789', '78', '789', '7', 'F', '0000-00-00', '89', '87', '897', '87', '7897', '87', '8978', 8789.00, 7897.00, '89', 0x50656e6775696e732e6a7067);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
