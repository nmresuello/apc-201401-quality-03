-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 28, 2012 at 01:22 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `paf-fcms`
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`id`, `code`, `description`) VALUES
(1, 'FFMO', 'FinanceFMO'),
(2, 'FRMO', 'FinanceRMO'),
(3, 'ACCT', 'Accounting');

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
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `serialnum`, `lname`, `fname`, `mname`, `mobile_num`, `gender`, `birthdate`, `address`, `street`, `city`, `tin_num`, `philhealth_num`, `atm_num`, `pagibig_num`, `deduction`, `pct_tax`, `bir_exempt`) VALUES
(1, '1981-23456', 'Dela Pena', 'Augusto', '', '09285002397', 'F', '1966-12-20', 'Brgy Pinahan', 'Matatag St.', 'Pasay City', '', '1298739102', '239048230980', '104000488401', 2139.00, 2342.00, ''),
(2, '1239-21093', 'Canlas', 'Anthony', '', '0928500****', 'M', '1966-12-20', '61-A RECTO EXT.,', 'CJVAB', 'Pasay City', '219048029', '2093482309', '93048209', '092482093', 2135.00, 1234.00, ''),
(3, '1999-04123', 'Macasaet', 'Ferdinand', '', '0923335****', 'M', '1967-11-13', '123A Phase 2', 'Manhattan St.', 'Pasay City', '', '2130982931', '12938219380', '1239821093', 987.00, 2344.00, '');

-- --------------------------------------------------------

--
-- Table structure for table `employees_has_payroll`
--

CREATE TABLE IF NOT EXISTS `employees_has_payroll` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `payroll_id` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_employees_has_payroll_payroll1` (`payroll_id`),
  KEY `fk_employees_has_payroll_employee1` (`employee_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `employees_has_payroll`
--

INSERT INTO `employees_has_payroll` (`id`, `payroll_id`, `employee_id`) VALUES
(1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `particular`
--

CREATE TABLE IF NOT EXISTS `particular` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` char(1) NOT NULL,
  `code` varchar(45) NOT NULL,
  `description` varchar(45) NOT NULL,
  `group1` tinyint(1) DEFAULT NULL,
  `degree` varchar(20) DEFAULT NULL,
  `ngas` varchar(20) DEFAULT NULL,
  `group2` tinyint(1) DEFAULT NULL,
  `percentage` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `particular`
--

INSERT INTO `particular` (`id`, `type`, `code`, `description`, `group1`, `degree`, `ngas`, `group2`, `percentage`) VALUES
(1, 'C', 'C01', 'Air Mechanic', 0, '', '719', 1, NULL),
(2, 'V', 'V01', 'Restored Pay/LP', NULL, '', '', NULL, NULL),
(3, 'C', 'C02', 'Cold Weather', 0, '', '715', 0, NULL),
(4, 'C', 'C04', 'Flying Pay', 1, '5', '749B', 1, 50);

-- --------------------------------------------------------

--
-- Table structure for table `payroll`
--

CREATE TABLE IF NOT EXISTS `payroll` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `number` char(10) NOT NULL,
  `month` char(3) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `payroll`
--

INSERT INTO `payroll` (`id`, `number`, `month`) VALUES
(1, '1234567890', 'Jun'),
(2, '9876543210', 'Apr');

-- --------------------------------------------------------

--
-- Table structure for table `rank`
--

CREATE TABLE IF NOT EXISTS `rank` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(45) NOT NULL,
  `name` varchar(45) NOT NULL,
  `description` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `rank`
--

INSERT INTO `rank` (`id`, `code`, `name`, `description`) VALUES
(1, 'D', 'Brig. Gen.', 'Brigadier General'),
(2, 'E', 'Col', 'Colonel'),
(3, 'F', 'Lt. Col.', 'Lieutenant Colonel');

-- --------------------------------------------------------

--
-- Table structure for table `rank_history`
--

CREATE TABLE IF NOT EXISTS `rank_history` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `rank_id` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_rank_history_rank1` (`rank_id`),
  KEY `fk_rank_history_employee1` (`employee_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `rank_history`
--

INSERT INTO `rank_history` (`id`, `date`, `rank_id`, `employee_id`) VALUES
(1, '2012-08-01', 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE IF NOT EXISTS `status` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `active_inactive` tinyint(1) NOT NULL,
  `inactive_date` date DEFAULT NULL,
  `inactive_reason` varchar(100) DEFAULT NULL,
  `employee_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_status_employee1` (`employee_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`id`, `active_inactive`, `inactive_date`, `inactive_reason`, `employee_id`) VALUES
(1, 1, '0000-00-00', '', 1),
(2, 0, '1997-08-04', 'Deceased', 2);

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE IF NOT EXISTS `transaction` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `number` varchar(14) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `particular_id` int(11) NOT NULL,
  `status` char(3) NOT NULL,
  `date_received` date NOT NULL,
  `date_submitted` date NOT NULL,
  `period_from` date NOT NULL,
  `period_to` date NOT NULL,
  `amount` decimal(8,2) NOT NULL,
  `payroll_id` int(11) NOT NULL,
  `department_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_transaction_department1` (`department_id`),
  KEY `fk_transaction_payroll1` (`payroll_id`),
  KEY `fk_transaction_employee1` (`employee_id`),
  KEY `fk_transaction_particular1` (`particular_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`id`, `number`, `employee_id`, `particular_id`, `status`, `date_received`, `date_submitted`, `period_from`, `period_to`, `amount`, `payroll_id`, `department_id`) VALUES
(1, '13579246800', 1, 2, 'P', '2012-08-16', '2012-05-15', '2012-08-27', '2012-09-19', 800.00, 1, 3);

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
(4, 'A03', 'ACOFAS A-1', 'Coordinating Staff');

-- --------------------------------------------------------

--
-- Table structure for table `unit_history`
--

CREATE TABLE IF NOT EXISTS `unit_history` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `unit_id` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_unit_history_unit1` (`unit_id`),
  KEY `fk_unit_history_employee1` (`employee_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `unit_history`
--

INSERT INTO `unit_history` (`id`, `date`, `unit_id`, `employee_id`) VALUES
(1, '2012-08-05', 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL,
  `employee_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_account_employee1` (`employee_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `employee_id`) VALUES
(1, 'admin', 'admin', 1),
(2, 'acanlas', 'acanlas', 2),
(3, 'fmacasaet', 'qwerty123', 3);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `employees_has_payroll`
--
ALTER TABLE `employees_has_payroll`
  ADD CONSTRAINT `fk_employees_has_payroll_employee1` FOREIGN KEY (`employee_id`) REFERENCES `employee` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_employees_has_payroll_payroll1` FOREIGN KEY (`payroll_id`) REFERENCES `payroll` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `rank_history`
--
ALTER TABLE `rank_history`
  ADD CONSTRAINT `fk_rank_history_employee1` FOREIGN KEY (`employee_id`) REFERENCES `employee` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_rank_history_rank1` FOREIGN KEY (`rank_id`) REFERENCES `rank` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `status`
--
ALTER TABLE `status`
  ADD CONSTRAINT `fk_status_employee1` FOREIGN KEY (`employee_id`) REFERENCES `employee` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `transaction`
--
ALTER TABLE `transaction`
  ADD CONSTRAINT `fk_transaction_department1` FOREIGN KEY (`department_id`) REFERENCES `department` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_transaction_employee1` FOREIGN KEY (`employee_id`) REFERENCES `employee` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_transaction_particular1` FOREIGN KEY (`particular_id`) REFERENCES `particular` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_transaction_payroll1` FOREIGN KEY (`payroll_id`) REFERENCES `payroll` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `unit_history`
--
ALTER TABLE `unit_history`
  ADD CONSTRAINT `fk_unit_history_employee1` FOREIGN KEY (`employee_id`) REFERENCES `employee` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_unit_history_unit1` FOREIGN KEY (`unit_id`) REFERENCES `unit` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `fk_account_employee1` FOREIGN KEY (`employee_id`) REFERENCES `employee` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
