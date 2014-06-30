-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 26, 2012 at 09:15 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `paf-fcms v2`
--

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE IF NOT EXISTS `department` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(10) NOT NULL,
  `description` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`id`, `code`, `description`) VALUES
(1, 'Finance', 'Finance'),
(2, 'FinanceFMO', 'Finance FMO'),
(3, 'FinanceRMO', 'Finance RMO'),
(4, 'Accounting', 'Accounting');

-- --------------------------------------------------------

--
-- Table structure for table `particular`
--

CREATE TABLE IF NOT EXISTS `particular` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `subparticular` varchar(45) NOT NULL,
  `amount` decimal(8,2) NOT NULL,
  `authority` varchar(45) NOT NULL,
  `date_submitted` date NOT NULL,
  `submitted_by` varchar(45) NOT NULL,
  `date_approved` date NOT NULL,
  `period_from` date DEFAULT NULL,
  `period_to` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `particular`
--

INSERT INTO `particular` (`id`, `name`, `subparticular`, `amount`, `authority`, `date_submitted`, `submitted_by`, `date_approved`, `period_from`, `period_to`) VALUES
(1, 'Variable Claim', 'Differential Long Pay', 10000.00, 'SO#123 HPAF', '2012-06-06', 'HPAF', '2012-01-25', '2012-01-01', '2012-02-01'),
(2, 'Collateral Claim', 'Flying Pay', 15000.00, 'SO#123 HPAF', '2012-06-23', 'HPAF', '2012-07-08', '2012-07-13', '2012-08-13');

-- --------------------------------------------------------

--
-- Table structure for table `payroll`
--

CREATE TABLE IF NOT EXISTS `payroll` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `number` char(10) NOT NULL,
  `month` char(3) NOT NULL,
  `personnel_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_payroll_personnel1` (`personnel_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `payroll`
--

INSERT INTO `payroll` (`id`, `number`, `month`, `personnel_id`) VALUES
(1, '201207', 'Jul', 1),
(2, '201207', 'Jul', 2),
(3, '200901', 'Jan', 3);

-- --------------------------------------------------------

--
-- Table structure for table `personnel`
--

CREATE TABLE IF NOT EXISTS `personnel` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `serialnum` int(11) NOT NULL,
  `picture` blob,
  `lname` varchar(30) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `mname` varchar(30) DEFAULT NULL,
  `gender` char(1) NOT NULL,
  `address` varchar(30) NOT NULL,
  `street` varchar(30) NOT NULL,
  `city` varchar(30) NOT NULL,
  `zipcode` char(4) NOT NULL,
  `contact` varchar(11) NOT NULL,
  `atm_num` char(20) NOT NULL,
  `pagibig_num` char(20) NOT NULL,
  `philhealth_num` char(20) NOT NULL,
  `deduction` decimal(8,2) DEFAULT NULL,
  `birthdate` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `personnel`
--

INSERT INTO `personnel` (`id`, `serialnum`, `picture`, `lname`, `fname`, `mname`, `gender`, `address`, `street`, `city`, `zipcode`, `contact`, `atm_num`, `pagibig_num`, `philhealth_num`, `deduction`, `birthdate`) VALUES
(1, 10053, 0x3534383533305f3430363631383239323638343535335f313638373731323734385f6e2e6a7067, 'DELA PENA ', 'AUGUSTO ', 'D ', 'M', 'BRGY PINAHAN', 'MATATAG ST.', 'City', '1870', '9285002397', '127304688', '104000488401', 'none', 5435.00, '1966-12-20'),
(2, 10055, '', 'CANLAS ', 'ANTHONY ', 'D ', 'M', '61-A RECTO EXT., CJVAB', '61-A RECTO EXT., CJVAB', 'Pasay City', '1368', 'none', '127246531', '104000494619', 'none', 9734.15, '2012-03-25'),
(3, 10076, 0x3534383533305f3430363631383239323638343535335f313638373731323734385f6e2e6a7067, 'MACASAET ', 'FERDINAND ', 'T', 'M', 'none', 'none', 'none', '1234', '9189082632 ', '127304453', '104000512081', '190007093636', 43973.11, '1967-11-13');

-- --------------------------------------------------------

--
-- Table structure for table `rank`
--

CREATE TABLE IF NOT EXISTS `rank` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `description` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `rank`
--

INSERT INTO `rank` (`id`, `name`, `description`) VALUES
(1, 'D', 'Brig General'),
(2, 'E', 'Colonel'),
(3, 'F', 'Lt. Colonel');

-- --------------------------------------------------------

--
-- Table structure for table `rank_history`
--

CREATE TABLE IF NOT EXISTS `rank_history` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `rank_id` int(11) NOT NULL,
  `personnel_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_rank_history_rank1` (`rank_id`),
  KEY `fk_rank_history_personnel1` (`personnel_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `rank_history`
--

INSERT INTO `rank_history` (`id`, `date`, `rank_id`, `personnel_id`) VALUES
(1, '2012-08-04', 2, 3);

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE IF NOT EXISTS `status` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `active_inactive` tinyint(1) NOT NULL,
  `inactive_date` datetime DEFAULT NULL,
  `inactive_reason` varchar(100) DEFAULT NULL,
  `personnel_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_status_personnel1` (`personnel_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`id`, `active_inactive`, `inactive_date`, `inactive_reason`, `personnel_id`) VALUES
(1, 0, '2011-03-03 00:00:00', 'DECEASED', 3);

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE IF NOT EXISTS `transaction` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `status` varchar(45) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `PARTICULAR_id` int(11) NOT NULL,
  `PERSONNEL_id` int(11) NOT NULL,
  `department_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_TRANSACTION_PARTICULAR1` (`PARTICULAR_id`),
  KEY `fk_TRANSACTION_PERSONNEL1` (`PERSONNEL_id`),
  KEY `fk_transaction_department1` (`department_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`id`, `status`, `date`, `PARTICULAR_id`, `PERSONNEL_id`, `department_id`) VALUES
(1, 'Pending', '2012-08-01', 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `unit`
--

CREATE TABLE IF NOT EXISTS `unit` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` char(3) NOT NULL,
  `unit` varchar(45) NOT NULL,
  `subunit` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `unit`
--

INSERT INTO `unit` (`id`, `code`, `unit`, `subunit`) VALUES
(1, 'A00', 'HSSG', 'Special Staff'),
(2, 'A01', 'Office of CG', 'Commanding General'),
(3, 'A02', 'OVC/OCAS/OSAS', 'Special Staff'),
(4, 'A03', 'ACOFAS A-1 ', 'Coordinating Staff');

-- --------------------------------------------------------

--
-- Table structure for table `unit_history`
--

CREATE TABLE IF NOT EXISTS `unit_history` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `personnel_id` int(11) NOT NULL,
  `unit_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_unit_history_personnel1` (`personnel_id`),
  KEY `fk_unit_history_unit1` (`unit_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `unit_history`
--

INSERT INTO `unit_history` (`id`, `date`, `personnel_id`, `unit_id`) VALUES
(1, '2012-08-08', 3, 2);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL,
  `personnel_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_user_personnel1` (`personnel_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `personnel_id`) VALUES
(1, 'ddaugusto', 'qwerty', 1),
(2, 'cdanthony', 'qwerty', 2),
(3, 'admin', 'admin', 2);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `payroll`
--
ALTER TABLE `payroll`
  ADD CONSTRAINT `fk_payroll_personnel1` FOREIGN KEY (`personnel_id`) REFERENCES `personnel` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `rank_history`
--
ALTER TABLE `rank_history`
  ADD CONSTRAINT `fk_rank_history_personnel1` FOREIGN KEY (`personnel_id`) REFERENCES `personnel` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_rank_history_rank1` FOREIGN KEY (`rank_id`) REFERENCES `rank` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `status`
--
ALTER TABLE `status`
  ADD CONSTRAINT `fk_status_personnel1` FOREIGN KEY (`personnel_id`) REFERENCES `personnel` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `transaction`
--
ALTER TABLE `transaction`
  ADD CONSTRAINT `fk_transaction_department1` FOREIGN KEY (`department_id`) REFERENCES `department` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_TRANSACTION_PARTICULAR1` FOREIGN KEY (`PARTICULAR_id`) REFERENCES `particular` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_TRANSACTION_PERSONNEL1` FOREIGN KEY (`PERSONNEL_id`) REFERENCES `personnel` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `unit_history`
--
ALTER TABLE `unit_history`
  ADD CONSTRAINT `fk_unit_history_personnel1` FOREIGN KEY (`personnel_id`) REFERENCES `personnel` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_unit_history_unit1` FOREIGN KEY (`unit_id`) REFERENCES `unit` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `fk_user_personnel1` FOREIGN KEY (`personnel_id`) REFERENCES `personnel` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
