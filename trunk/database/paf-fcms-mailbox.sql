-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 01, 2012 at 04:45 AM
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
-- Table structure for table `authassignment`
--

CREATE TABLE IF NOT EXISTS `authassignment` (
  `itemname` varchar(64) NOT NULL,
  `userid` varchar(64) NOT NULL,
  `bizrule` text,
  `data` text,
  PRIMARY KEY (`itemname`,`userid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `authassignment`
--

INSERT INTO `authassignment` (`itemname`, `userid`, `bizrule`, `data`) VALUES
('Admin', '1', NULL, 'N;'),
('employee', '2', NULL, 'N;'),
('employee', '3', NULL, 'N;'),
('Employee.View', '2', NULL, 'N;'),
('Employee.View', '3', NULL, 'N;'),
('EmployeesHasPayroll.View', '3', NULL, 'N;'),
('Particular.View', '2', NULL, 'N;'),
('Particular.View', '3', NULL, 'N;'),
('RankHistory.View', '2', NULL, 'N;'),
('RankHistory.View', '3', NULL, 'N;'),
('Transaction.View', '2', NULL, 'N;'),
('Transaction.View', '3', NULL, 'N;'),
('UnitHistory.View', '2', NULL, 'N;'),
('UnitHistory.View', '3', NULL, 'N;');

-- --------------------------------------------------------

--
-- Table structure for table `authitem`
--

CREATE TABLE IF NOT EXISTS `authitem` (
  `name` varchar(64) NOT NULL,
  `type` int(11) NOT NULL,
  `description` text,
  `bizrule` text,
  `data` text,
  PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `authitem`
--

INSERT INTO `authitem` (`name`, `type`, `description`, `bizrule`, `data`) VALUES
('Admin', 2, NULL, NULL, 'N;'),
('Authenticated', 2, NULL, NULL, 'N;'),
('Department.*', 1, NULL, NULL, 'N;'),
('Department.Admin', 0, NULL, NULL, 'N;'),
('Department.Create', 0, NULL, NULL, 'N;'),
('Department.Delete', 0, NULL, NULL, 'N;'),
('Department.Index', 0, NULL, NULL, 'N;'),
('Department.Update', 0, NULL, NULL, 'N;'),
('Department.View', 0, NULL, NULL, 'N;'),
('employee', 2, 'employee', NULL, 'N;'),
('Employee.*', 1, NULL, NULL, 'N;'),
('Employee.Admin', 0, NULL, NULL, 'N;'),
('Employee.Create', 0, NULL, NULL, 'N;'),
('Employee.Delete', 0, NULL, NULL, 'N;'),
('Employee.Index', 0, NULL, NULL, 'N;'),
('Employee.Update', 0, NULL, NULL, 'N;'),
('Employee.View', 0, NULL, NULL, 'N;'),
('EmployeesHasPayroll.*', 1, NULL, NULL, 'N;'),
('EmployeesHasPayroll.Admin', 0, NULL, NULL, 'N;'),
('EmployeesHasPayroll.Create', 0, NULL, NULL, 'N;'),
('EmployeesHasPayroll.Delete', 0, NULL, NULL, 'N;'),
('EmployeesHasPayroll.Index', 0, NULL, NULL, 'N;'),
('EmployeesHasPayroll.Update', 0, NULL, NULL, 'N;'),
('EmployeesHasPayroll.View', 0, NULL, NULL, 'N;'),
('Guest', 2, 'guest', NULL, 'N;'),
('Particular.*', 1, NULL, NULL, 'N;'),
('Particular.Admin', 0, NULL, NULL, 'N;'),
('Particular.Create', 0, NULL, NULL, 'N;'),
('Particular.Delete', 0, NULL, NULL, 'N;'),
('Particular.Index', 0, NULL, NULL, 'N;'),
('Particular.Update', 0, NULL, NULL, 'N;'),
('Particular.View', 0, NULL, NULL, 'N;'),
('Payroll.*', 1, NULL, NULL, 'N;'),
('Payroll.Admin', 0, NULL, NULL, 'N;'),
('Payroll.Create', 0, NULL, NULL, 'N;'),
('Payroll.Delete', 0, NULL, NULL, 'N;'),
('Payroll.Index', 0, NULL, NULL, 'N;'),
('Payroll.Update', 0, NULL, NULL, 'N;'),
('Payroll.View', 0, NULL, NULL, 'N;'),
('Rank.*', 1, NULL, NULL, 'N;'),
('Rank.Admin', 0, NULL, NULL, 'N;'),
('Rank.Create', 0, NULL, NULL, 'N;'),
('Rank.Delete', 0, NULL, NULL, 'N;'),
('Rank.Index', 0, NULL, NULL, 'N;'),
('Rank.Update', 0, NULL, NULL, 'N;'),
('Rank.View', 0, NULL, NULL, 'N;'),
('RankHistory.*', 1, NULL, NULL, 'N;'),
('RankHistory.Admin', 0, NULL, NULL, 'N;'),
('RankHistory.Create', 0, NULL, NULL, 'N;'),
('RankHistory.Delete', 0, NULL, NULL, 'N;'),
('RankHistory.Index', 0, NULL, NULL, 'N;'),
('RankHistory.Update', 0, NULL, NULL, 'N;'),
('RankHistory.View', 0, NULL, NULL, 'N;'),
('Site.*', 1, NULL, NULL, 'N;'),
('Site.Contact', 0, NULL, NULL, 'N;'),
('Site.Error', 0, NULL, NULL, 'N;'),
('Site.Index', 0, NULL, NULL, 'N;'),
('Site.Login', 0, NULL, NULL, 'N;'),
('Site.Logout', 0, NULL, NULL, 'N;'),
('Status.*', 1, NULL, NULL, 'N;'),
('Status.Admin', 0, NULL, NULL, 'N;'),
('Status.Create', 0, NULL, NULL, 'N;'),
('Status.Delete', 0, NULL, NULL, 'N;'),
('Status.Index', 0, NULL, NULL, 'N;'),
('Status.Update', 0, NULL, NULL, 'N;'),
('Status.View', 0, NULL, NULL, 'N;'),
('Transaction.*', 1, NULL, NULL, 'N;'),
('Transaction.Admin', 0, NULL, NULL, 'N;'),
('Transaction.Create', 0, NULL, NULL, 'N;'),
('Transaction.Delete', 0, NULL, NULL, 'N;'),
('Transaction.Index', 0, NULL, NULL, 'N;'),
('Transaction.Update', 0, NULL, NULL, 'N;'),
('Transaction.View', 0, NULL, NULL, 'N;'),
('Unit.*', 1, NULL, NULL, 'N;'),
('Unit.Admin', 0, NULL, NULL, 'N;'),
('Unit.Create', 0, NULL, NULL, 'N;'),
('Unit.Delete', 0, NULL, NULL, 'N;'),
('Unit.Index', 0, NULL, NULL, 'N;'),
('Unit.Update', 0, NULL, NULL, 'N;'),
('Unit.View', 0, NULL, NULL, 'N;'),
('UnitHistory.*', 1, NULL, NULL, 'N;'),
('UnitHistory.Admin', 0, NULL, NULL, 'N;'),
('UnitHistory.Create', 0, NULL, NULL, 'N;'),
('UnitHistory.Delete', 0, NULL, NULL, 'N;'),
('UnitHistory.Index', 0, NULL, NULL, 'N;'),
('UnitHistory.Update', 0, NULL, NULL, 'N;'),
('UnitHistory.View', 0, NULL, NULL, 'N;'),
('User', 2, 'User', 'User', 'N;'),
('User.*', 1, NULL, NULL, 'N;'),
('User.Admin', 0, NULL, NULL, 'N;'),
('User.Create', 0, NULL, NULL, 'N;'),
('User.Delete', 0, NULL, NULL, 'N;'),
('User.Index', 0, NULL, NULL, 'N;'),
('User.Update', 0, NULL, NULL, 'N;'),
('User.View', 0, NULL, NULL, 'N;');

-- --------------------------------------------------------

--
-- Table structure for table `authitemchild`
--

CREATE TABLE IF NOT EXISTS `authitemchild` (
  `parent` varchar(64) NOT NULL,
  `child` varchar(64) NOT NULL,
  PRIMARY KEY (`parent`,`child`),
  KEY `child` (`child`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `authitemchild`
--

INSERT INTO `authitemchild` (`parent`, `child`) VALUES
('employee', 'Employee.View'),
('employee', 'EmployeesHasPayroll.View'),
('employee', 'Particular.View'),
('employee', 'RankHistory.View'),
('employee', 'Transaction.View'),
('employee', 'UnitHistory.View');

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
-- Table structure for table `personnel`
--

CREATE TABLE IF NOT EXISTS `personnel` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `serialnum` char(10) NOT NULL,
  `username` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
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
  `current_rank` varchar(45) DEFAULT NULL,
  `current_unit` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `personnel`
--

INSERT INTO `personnel` (`id`, `serialnum`, `username`, `password`, `picture`, `lname`, `fname`, `mname`, `gender`, `address`, `street`, `city`, `zipcode`, `contact`, `atm_num`, `pagibig_num`, `philhealth_num`, `deduction`, `birthdate`, `current_rank`, `current_unit`) VALUES
(1, '2143254326', 'kim', 'wanderlust', '', 'iuyflkash', 'skhfldsk', 'kjsldhgakd', 'F', 'sgdfg;kd', 'krjglhdkfjq', 'kdjfhglsk', '2423', '12479128', '21984701298', '92384709238', '29348723908', 100.00, '0000-00-00', 'sdhflk', 'kldjsglkf');

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
-- Table structure for table `rights`
--

CREATE TABLE IF NOT EXISTS `rights` (
  `itemname` varchar(64) NOT NULL,
  `type` int(11) NOT NULL,
  `weight` int(11) NOT NULL,
  PRIMARY KEY (`itemname`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rights`
--


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
-- Table structure for table `tbl_mailbox_conversation`
--

CREATE TABLE IF NOT EXISTS `tbl_mailbox_conversation` (
  `conversation_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `initiator_id` int(10) NOT NULL,
  `interlocutor_id` int(10) NOT NULL,
  `subject` varchar(100) NOT NULL DEFAULT '',
  `bm_read` tinyint(3) NOT NULL DEFAULT '0',
  `bm_deleted` tinyint(3) NOT NULL DEFAULT '0',
  `modified` int(10) unsigned NOT NULL,
  `is_system` enum('yes','no') NOT NULL DEFAULT 'no',
  `initiator_del` tinyint(1) unsigned DEFAULT '0',
  `interlocutor_del` tinyint(1) unsigned DEFAULT '0',
  PRIMARY KEY (`conversation_id`),
  KEY `initiator_id` (`initiator_id`),
  KEY `interlocutor_id` (`interlocutor_id`),
  KEY `conversation_ts` (`modified`),
  KEY `subject` (`subject`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_mailbox_conversation`
--

INSERT INTO `tbl_mailbox_conversation` (`conversation_id`, `initiator_id`, `interlocutor_id`, `subject`, `bm_read`, `bm_deleted`, `modified`, `is_system`, `initiator_del`, `interlocutor_del`) VALUES
(1, 1, 2, 'dsa', 1, 0, 1348999064, 'no', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mailbox_message`
--

CREATE TABLE IF NOT EXISTS `tbl_mailbox_message` (
  `message_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `conversation_id` int(10) unsigned NOT NULL,
  `created` int(10) unsigned NOT NULL DEFAULT '0',
  `sender_id` int(10) unsigned NOT NULL DEFAULT '0',
  `recipient_id` int(10) unsigned NOT NULL DEFAULT '0',
  `text` mediumtext NOT NULL,
  `crc64` bigint(20) NOT NULL,
  PRIMARY KEY (`message_id`),
  KEY `sender_profile_id` (`sender_id`),
  KEY `recipient_profile_id` (`recipient_id`),
  KEY `conversation_id` (`conversation_id`),
  KEY `timestamp` (`created`),
  KEY `crc64` (`crc64`),
  FULLTEXT KEY `text` (`text`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_mailbox_message`
--

INSERT INTO `tbl_mailbox_message` (`message_id`, `conversation_id`, `created`, `sender_id`, `recipient_id`, `text`, `crc64`) VALUES
(1, 1, 1348999064, 1, 2, 'dasdas', 84);

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
  `role` varchar(45) NOT NULL,
  `employee_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_account_employee1` (`employee_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `role`, `employee_id`) VALUES
(1, 'admin', 'admin', 'admin', 1),
(2, 'acanlas', 'acanlas', 'employee', 2),
(3, 'fmacasaet', 'qwerty123', 'employee', 3);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `authassignment`
--
ALTER TABLE `authassignment`
  ADD CONSTRAINT `authassignment_ibfk_1` FOREIGN KEY (`itemname`) REFERENCES `authitem` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `authitemchild`
--
ALTER TABLE `authitemchild`
  ADD CONSTRAINT `authitemchild_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `authitem` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `authitemchild_ibfk_2` FOREIGN KEY (`child`) REFERENCES `authitem` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

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
-- Constraints for table `rights`
--
ALTER TABLE `rights`
  ADD CONSTRAINT `rights_ibfk_1` FOREIGN KEY (`itemname`) REFERENCES `authitem` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

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
