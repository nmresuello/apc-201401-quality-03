-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 06, 2012 at 06:35 PM
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
('Authenticated', '2', NULL, 'N;'),
('Authenticated', '3', NULL, 'N;');

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
('Authenticated', 'Department.Index'),
('Authenticated', 'Department.View'),
('Authenticated', 'Employee.Index'),
('Authenticated', 'Employee.View'),
('Authenticated', 'Particular.Index'),
('Authenticated', 'Particular.View'),
('Authenticated', 'Payroll.Index'),
('Authenticated', 'Payroll.View'),
('Authenticated', 'Rank.Index'),
('Authenticated', 'Rank.View'),
('Authenticated', 'RankHistory.Index'),
('Authenticated', 'RankHistory.View'),
('Authenticated', 'Status.Index'),
('Authenticated', 'Status.View'),
('Authenticated', 'Transaction.Index'),
('Authenticated', 'Transaction.View'),
('Authenticated', 'Unit.Index'),
('Authenticated', 'Unit.View'),
('Authenticated', 'UnitHistory.Index'),
('Authenticated', 'UnitHistory.View');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE IF NOT EXISTS `department` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(10) NOT NULL,
  `description` varchar(45) NOT NULL,
  `time_log` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`id`, `code`, `description`, `time_log`) VALUES
(1, 'FFMO', 'Finance FMO', '0000-00-00 00:00:00'),
(2, 'FRMO', 'Finance RMO', '0000-00-00 00:00:00'),
(3, 'ACCT', 'Accounting', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE IF NOT EXISTS `employee` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `serialnum` char(10) NOT NULL,
  `picture` blob NOT NULL,
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
  `time_log` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `serialnum`, `picture`, `lname`, `fname`, `mname`, `mobile_num`, `gender`, `birthdate`, `address`, `street`, `city`, `tin_num`, `philhealth_num`, `atm_num`, `pagibig_num`, `deduction`, `pct_tax`, `bir_exempt`, `time_log`) VALUES
(1, '1981-23456', 0x696d61676573202831292e6a7067, 'Dela Pena', 'Augusto', '', '09285002397', 'F', '1966-12-20', 'Brgy Pinahan', 'Matatag St.', 'Pasay City', '', '1298739102', '239048230980', '104000488401', 2139.00, 2342.00, '', NULL),
(2, '1239-21093', '', 'Canlas', 'Anthony', '', '0928500****', 'M', '1966-12-20', '61-A RECTO EXT.,', 'CJVAB', 'Pasay City', '219048029', '2093482309', '93048209', '092482093', 2135.00, 1234.00, '', NULL),
(3, '1999-04123', 0x696d61676573202831292e6a7067, 'Macasaet', 'Ferdinand', '', '0923335****', 'M', '1967-11-13', '123A Phase 2', 'Manhattan St.', 'Pasay City', '', '2130982931', '12938219380', '1239821093', 987.00, 2344.00, '', NULL),
(4, '10041', '', 'Dumandal', 'Krisa', 'O', '09271234556', 'M', '1993-08-14', 'P68-15', 'Apple Street', 'Pasay City', '127246041', '190006551185', '413633', '190006551185', 28000.00, 4883912.00, '1890', NULL),
(5, '1999-28719', '', 'Evangelo', 'Arthuro', 'P', '09298271881', 'M', '1980-12-03', 'Block 19 Phase 2', 'Sto. Tomas Street', 'Quezon City', 'hjkhjkh', '38938100231', '19847729201', '38837122719', 20500.00, 10000.00, '2102', NULL),
(6, '89890', '', 'Bugais', 'Lady Kim', 'Q', '09123456789', 'F', '2012-12-12', 'Phase 12', 'Manhattan St.', 'Makati City', '98668', '0086672838', '99827718887', '8789789', 78789.00, 789777.00, '8862', NULL),
(7, '1993-19009', '', 'Domalanta', 'Kemp', 'B', '09129910299', 'M', '1993-10-21', 'Blk 98', '9-14th Street', 'Makati City', '1984282937', '7896789', '19841122918', '89567856567', 15000.00, 700.00, '1987', NULL),
(8, '1980-09981', '', 'Dela Cruz', 'Jenuelle', 'O', '09188288172', 'F', '1995-12-12', 'P98-10', '17-2nd street', 'Pasay City', '1982928920', '19282029201', '38930989377', '10029910012', 3000.00, 800.00, '3213', NULL),
(9, '2012-28827', '', 'Aguado', 'Roger', 'P', '09183716102', 'M', '1993-02-19', 'Phase Makahiya', 'Lily Street', 'Pasig', '2358789786', '93877729201', '95837748594', '41093817388', 30000.00, 1200.00, '4323', NULL),
(10, '2010-19928', '', 'Mendez', 'Jenuelle', 'P', '09157829909', 'M', '1990-04-18', 'P9188', 'Emilio Aguinaldo', 'Quezon City', '1991890009', '1092881991', '1029299100', '1999277766', 12000.00, 5000.00, '0877', NULL);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `employees_has_payroll`
--

INSERT INTO `employees_has_payroll` (`id`, `payroll_id`, `employee_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 1, 3),
(4, 1, 4),
(5, 1, 5),
(6, 1, 6),
(7, 1, 7),
(8, 1, 8),
(9, 1, 9),
(10, 1, 10),
(11, 2, 4),
(12, 2, 6),
(13, 2, 7);

-- --------------------------------------------------------

--
-- Table structure for table `forum`
--

CREATE TABLE IF NOT EXISTS `forum` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `parent_id` int(10) unsigned DEFAULT NULL,
  `title` varchar(120) NOT NULL,
  `description` text NOT NULL,
  `listorder` smallint(5) unsigned NOT NULL,
  `is_locked` tinyint(1) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_forum_forum` (`parent_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `forum`
--

INSERT INTO `forum` (`id`, `parent_id`, `title`, `description`, `listorder`, `is_locked`) VALUES
(1, NULL, 'sample', 'sample forum only', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `forumuser`
--

CREATE TABLE IF NOT EXISTS `forumuser` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `siteid` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `siteid` (`siteid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `forumuser`
--

INSERT INTO `forumuser` (`id`, `siteid`, `name`) VALUES
(1, '1', 'admin'),
(2, '2', 'acanlas');

-- --------------------------------------------------------

--
-- Table structure for table `particular`
--

CREATE TABLE IF NOT EXISTS `particular` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(10) NOT NULL,
  `code` varchar(45) NOT NULL,
  `description` varchar(45) NOT NULL,
  `group1` tinyint(1) DEFAULT NULL,
  `degree` varchar(20) DEFAULT NULL,
  `ngas` varchar(20) DEFAULT NULL,
  `group2` tinyint(1) DEFAULT NULL,
  `percentage` int(5) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=33 ;

--
-- Dumping data for table `particular`
--

INSERT INTO `particular` (`id`, `type`, `code`, `description`, `group1`, `degree`, `ngas`, `group2`, `percentage`) VALUES
(1, 'Collateral', 'C01', 'Air Mechanic', 0, '', '719', 1, NULL),
(2, 'Variable', 'V01', 'Restored Pay/LP', NULL, '', '', NULL, NULL),
(3, 'Collateral', 'C02', 'Cold Weather', 0, '', '715', 0, NULL),
(4, 'Collateral', 'C04', 'Flying Pay', 1, '5', '749B', 1, 1),
(5, 'Collateral', 'C03', 'Combat Duty Pay', 0, '0', '749A ', 1, NULL),
(6, 'Collateral', 'C04', 'Flying Pay', 1, '5', '749B ', 1, 5),
(7, 'Variable', 'C06', 'Hazardous Duty Pay', 1, '5', '749C ', 1, 5),
(8, 'Variable', 'C07', 'Incentive Pay', 0, '', '', 0, NULL),
(9, 'Collateral', 'C08', 'Instructor Duty Pay 10% ', 1, '1', '749D ', 1, 1),
(10, 'Collateral', 'C09', 'Instructor Duty Pay 25% ', 1, '1', '749D ', 1, 25),
(11, 'Collateral', 'C10', 'Magna Carta', 1, '4', '743', 1, 10),
(12, 'Collateral', 'C11', 'Parachutist Pay ', 1, '3', '749E ', 1, 50),
(13, 'Collateral', 'C12', 'Radiation Hazard Pay ', 1, '2', '749F ', 1, 15),
(14, 'Collateral', 'C13', 'Addl Subsistence Allowance ', 0, '2', '716B ', 0, 0),
(15, 'Collateral', 'C14', 'SCA Annual Maintenance ', 0, '0', '715', 0, 0),
(16, 'Collateral', 'C15', 'Special Clothing Allow ', 0, '0', '715', 0, 0),
(17, 'Collateral', 'C16', 'Special Counsel Allow ', 0, '0', '715', 0, NULL),
(18, 'Collateral', 'C17', 'Specialist Pay ', 0, '0', '749G ', 1, NULL),
(19, 'Collateral', 'C18', 'Winter Clothing ', 0, '', '', NULL, NULL),
(20, 'Collateral', 'C19', 'Clothing/Laundry Allow ', NULL, '', '', NULL, NULL),
(21, 'Variable', 'FRA', 'Fractional Pay ', NULL, '', '', NULL, NULL),
(22, 'Variable', 'LON', 'Long Pay ', NULL, '', '', NULL, NULL),
(23, 'Variable', 'M01', 'Base Pay ', NULL, '', '', NULL, NULL),
(24, 'Variable', 'O01', '5-Day Comm ', NULL, '', '', NULL, NULL),
(25, 'Variable', 'O03', 'Mid-Year ', NULL, '', '', NULL, NULL),
(26, 'Variable', 'O04', 'Year-End ', NULL, '', '', NULL, NULL),
(27, 'Variable', 'O05', 'Full Bonus ', NULL, '', '', NULL, NULL),
(28, 'Variable', 'O06', 'Cash Gift ', NULL, '', '', NULL, NULL),
(29, 'Variable', 'O07', 'Performance ', NULL, '', '', NULL, NULL),
(30, 'Collateral', 'O08', 'RCA ', 0, '715', '', 0, NULL),
(31, 'Variable', 'PRO', 'Promotions ', NULL, '', '', NULL, NULL),
(32, 'Variable', 'REF', 'Refund of Netpay ', NULL, '', '', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `payroll`
--

CREATE TABLE IF NOT EXISTS `payroll` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `number` char(10) NOT NULL,
  `month` char(3) NOT NULL,
  `time_log` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `payroll`
--

INSERT INTO `payroll` (`id`, `number`, `month`, `time_log`) VALUES
(1, '1234567890', 'Jun', '0000-00-00 00:00:00'),
(2, '9876543210', 'Apr', '0000-00-00 00:00:00'),
(3, '543', 'jul', '2012-11-10 19:26:08'),
(4, '7887889089', 'May', '2012-11-11 00:27:12'),
(5, '5555', 'Apr', '2012-11-12 09:01:57');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE IF NOT EXISTS `post` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `author_id` int(10) unsigned NOT NULL,
  `thread_id` int(10) unsigned NOT NULL,
  `editor_id` int(10) unsigned DEFAULT NULL,
  `content` text NOT NULL,
  `created` int(10) unsigned NOT NULL,
  `updated` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_post_author` (`author_id`),
  KEY `FK_post_editor` (`editor_id`),
  KEY `FK_post_thread` (`thread_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `author_id`, `thread_id`, `editor_id`, `content`, `created`, `updated`) VALUES
(1, 1, 1, NULL, 'sample 1', 1352742620, 1352742620),
(2, 1, 1, NULL, 'sample 2 sample 2', 1352742651, 1352742651);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `rank`
--

INSERT INTO `rank` (`id`, `code`, `name`, `description`) VALUES
(1, 'D', 'Brig. Gen.', 'Brigadier General'),
(2, 'E', 'Col', 'Colonel'),
(3, 'F', 'Lt. Col.', 'Lieutenant Colonel'),
(7, 'A', 'General', 'General'),
(8, 'B', 'Lieutenant General', 'Lieutenant General'),
(9, 'C', 'Major General', 'Major General'),
(10, 'G', 'Major', 'Major'),
(11, 'H', 'Captain', 'Captain'),
(12, 'I', 'First Lieutenant', 'First Lieutenant'),
(13, 'J', 'Second Lieutenant', 'Second Lieutenant'),
(14, 'K', 'First Chief Master Sergeant', 'First Chief Master Sergeant'),
(15, 'L', 'Chief Master Sergeant', 'Chief Master Sergeant'),
(16, 'M', 'Senior Master Sergeant', 'Senior Master Sergeant'),
(17, 'N', 'Master Sergeant', 'Master Sergeant'),
(18, 'O', 'Technical Sergeant', 'Technical Sergeant'),
(19, 'P', 'Staff Sergeant', 'Staff Sergeant'),
(20, 'Q', 'Sergeant', 'Sergeant'),
(21, 'R', 'Corporal', 'Corporal'),
(22, 'S', 'Private First Class', 'Private First Class'),
(23, 'T', 'Private', 'Private');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `rank_history`
--

INSERT INTO `rank_history` (`id`, `date`, `rank_id`, `employee_id`) VALUES
(1, '2012-08-01', 3, 1),
(2, '2012-07-07', 1, 4),
(3, '2012-12-09', 14, 6),
(4, '2012-04-28', 15, 7),
(5, '2010-12-25', 11, 9),
(6, '2010-10-20', 9, 5),
(7, '2012-08-07', 22, 8),
(8, '2012-12-29', 19, 3);

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
  `active_inactive` varchar(8) NOT NULL,
  `inactive_date` date DEFAULT NULL,
  `inactive_reason` varchar(100) DEFAULT NULL,
  `employee_id` int(11) NOT NULL,
  `time_log` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_status_employee1` (`employee_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`id`, `active_inactive`, `inactive_date`, `inactive_reason`, `employee_id`, `time_log`) VALUES
(1, 'active', '0000-00-00', '', 1, NULL),
(2, 'active', '0000-00-00', '', 2, NULL),
(3, 'active', '0000-00-00', '', 3, NULL),
(4, 'active', '0000-00-00', '', 4, NULL),
(5, 'active', '0000-00-00', '', 6, NULL),
(6, 'active', '0000-00-00', '', 7, NULL),
(7, 'active', '0000-00-00', '', 8, NULL),
(8, 'inactive', '0000-00-00', '', 9, NULL),
(9, 'inactive', '2012-12-12', '', 10, NULL);

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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `tbl_mailbox_conversation`
--

INSERT INTO `tbl_mailbox_conversation` (`conversation_id`, `initiator_id`, `interlocutor_id`, `subject`, `bm_read`, `bm_deleted`, `modified`, `is_system`, `initiator_del`, `interlocutor_del`) VALUES
(1, 1, 2, 'dsa', 3, 0, 1348999064, 'no', 0, 0),
(2, 1, 3, 'Kemp', 3, 1, 1349067412, 'no', 92, 0),
(3, 1, 2, 'asdasdasdasd', 3, 2, 1349069317, 'no', 0, 92),
(4, 1, 2, '(no subject)', 3, 0, 1352742896, 'no', 0, 0),
(5, 1, 2, 'qqq', 3, 0, 1352743487, 'no', 0, 0),
(6, 1, 2, 'csds', 1, 0, 1353881531, 'no', 0, 0);

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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `tbl_mailbox_message`
--

INSERT INTO `tbl_mailbox_message` (`message_id`, `conversation_id`, `created`, `sender_id`, `recipient_id`, `text`, `crc64`) VALUES
(1, 1, 1348999064, 1, 2, 'dasdas', 84),
(2, 2, 1349067256, 1, 3, 'Kemp', 0),
(3, 2, 1349067412, 3, 1, 'Yes!', 588532322598),
(4, 3, 1349069317, 1, 2, 'asdasdasdas', 127100025),
(5, 4, 1352742806, 1, 2, 'fdfdfd', 19213265026),
(6, 4, 1352742896, 2, 1, 'kkkkk', 64),
(7, 5, 1352743487, 1, 2, 'sfdsgerbrewytrsyhtgr egrewvggrvegtrewtrewfrefrw\r\nfdsfdsfdwdewennejej\r\nnenebbebebebebbebebebe\r\nbebebebbebebebebbe\r\nbebebebebebbebe\r\nbebebebebebebekekekkekeisiisisispqpqpqlalaksksieieuj\r\n', 30594),
(8, 6, 1353881531, 1, 2, 'wewew', 103);

-- --------------------------------------------------------

--
-- Table structure for table `thread`
--

CREATE TABLE IF NOT EXISTS `thread` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `forum_id` int(10) unsigned NOT NULL,
  `subject` varchar(120) NOT NULL,
  `is_sticky` tinyint(1) unsigned NOT NULL,
  `is_locked` tinyint(1) unsigned NOT NULL,
  `view_count` bigint(20) unsigned NOT NULL,
  `created` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_thread_forum` (`forum_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `thread`
--

INSERT INTO `thread` (`id`, `forum_id`, `subject`, `is_sticky`, `is_locked`, `view_count`, `created`) VALUES
(1, 1, 'sample1', 0, 0, 3, 1352742619);

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE IF NOT EXISTS `transaction` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `number` varchar(14) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `particular_id` int(11) NOT NULL,
  `status` varchar(20) NOT NULL,
  `date_received` date NOT NULL,
  `date_submitted` date NOT NULL,
  `period_from` date NOT NULL,
  `period_to` date NOT NULL,
  `amount` decimal(8,2) NOT NULL,
  `payroll_id` int(11) NOT NULL,
  `department_id` int(11) NOT NULL,
  `time_log` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_transaction_department1` (`department_id`),
  KEY `fk_transaction_payroll1` (`payroll_id`),
  KEY `fk_transaction_employee1` (`employee_id`),
  KEY `fk_transaction_particular1` (`particular_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`id`, `number`, `employee_id`, `particular_id`, `status`, `date_received`, `date_submitted`, `period_from`, `period_to`, `amount`, `payroll_id`, `department_id`, `time_log`) VALUES
(1, '201104-294957 ', 1, 22, 'Pending', '2012-08-16', '2012-05-15', '2012-08-27', '2012-09-19', 1800.00, 1, 3, NULL),
(2, '201104-294958 ', 2, 11, 'On Process', '2012-12-02', '2012-12-04', '2012-12-01', '2012-12-31', 25000.00, 1, 1, NULL),
(3, '200801-1913 ', 3, 5, 'Pending', '2012-12-02', '2012-12-05', '2012-12-01', '2012-12-31', 20000.00, 1, 1, NULL),
(4, '2012-100192889', 4, 11, 'On Process', '2012-12-04', '2012-12-06', '2012-12-01', '2013-01-05', 35000.00, 2, 1, NULL),
(5, '2012-102991021', 6, 6, 'Pending', '2012-12-06', '2012-12-06', '2012-12-01', '2012-12-31', 30000.00, 2, 1, NULL),
(6, '2011-102991819', 7, 2, 'Pending', '2012-12-04', '2012-12-05', '2012-12-01', '2012-12-22', 20000.00, 2, 1, NULL),
(7, '201104-2949579', 10, 31, 'For Check', '2012-11-29', '2012-11-29', '2012-11-03', '2012-11-29', 10000.00, 2, 3, NULL),
(8, '2011-12200957 ', 5, 9, 'On Process', '2012-12-05', '2012-12-05', '2012-12-07', '2013-01-05', 40000.00, 2, 1, NULL);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `unit`
--

INSERT INTO `unit` (`id`, `code`, `unit`, `subunit`) VALUES
(1, 'ABW', '600th Air Base Wing', 'Clark Special Economic Zone'),
(2, 'A01', 'Office of CG', 'Commanding General'),
(3, 'A02', 'OVC/OCAS/OSAS', 'Special Staff'),
(4, 'A03', 'ACOFAS A-1', 'Coordinating Staff'),
(5, '001', 'K-9 SQDN', '710TH'),
(6, '200', 'ARC', ''),
(7, '201', 'AFROTC', ''),
(8, '300', 'ADC', 'ADC'),
(9, '400', 'AFWG', 'AFWG'),
(10, '501', 'HQ 554 AEMS', 'HQ 554 AEMS'),
(11, '502', '550 AEW', '550 AEW'),
(12, '503', '553 AES', '553 AES'),
(13, '504', '550 AES', '550 AES'),
(14, '505', '551st AES', '551st AES'),
(15, '600', 'AFFC', 'AFFC'),
(16, '601', 'PAFFC ATTACH', 'PAFFC ATTACH'),
(17, '700', 'TOC', 'TOC'),
(18, '701', 'CASF VI', 'CASF CI'),
(19, '702', 'CASF VIII', 'CASF VIII'),
(20, '703', 'OPCON, 2ND AD', 'OPCON, 2ND AD'),
(21, '800', 'AFGH', 'AFGH'),
(22, '900', 'AFSSG', 'AFSSG');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `unit_history`
--

INSERT INTO `unit_history` (`id`, `date`, `unit_id`, `employee_id`) VALUES
(1, '2012-08-05', 3, 1),
(2, '2012-07-01', 14, 2),
(3, '2010-04-07', 19, 3),
(4, '2012-01-25', 5, 4),
(5, '2012-05-15', 12, 6),
(6, '2012-12-22', 14, 7),
(7, '2012-11-19', 22, 8),
(8, '2008-12-18', 10, 9);

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
  `time_log` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_account_employee1` (`employee_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `role`, `employee_id`, `time_log`) VALUES
(1, 'admin', 'admin', 'Admin', 6, NULL),
(2, 'employee', 'employee', 'Employee', 4, NULL),
(3, 'department', 'department', 'Department', 7, NULL),
(4, 'jen', 'd41d8cd98f00b20', 'Employee', 10, NULL),
(5, 'roger', 'roger', 'Employee', 9, NULL),
(6, 'art', 'd41d8cd98f00b20', 'Employee', 5, NULL),
(7, 'ferd', 'd41d8cd98f00b20', 'Employee', 3, NULL),
(8, 'anth', 'd41d8cd98f00b20', 'Employee', 2, NULL),
(9, 'aug', 'd41d8cd98f00b20', 'Employee', 1, NULL);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `authassignment`
--
ALTER TABLE `authassignment`
  ADD CONSTRAINT `AuthAssignment_ibfk_1` FOREIGN KEY (`itemname`) REFERENCES `authitem` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `authitemchild`
--
ALTER TABLE `authitemchild`
  ADD CONSTRAINT `AuthItemChild_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `authitem` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `AuthItemChild_ibfk_2` FOREIGN KEY (`child`) REFERENCES `authitem` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `employees_has_payroll`
--
ALTER TABLE `employees_has_payroll`
  ADD CONSTRAINT `fk_employees_has_payroll_employee1` FOREIGN KEY (`employee_id`) REFERENCES `employee` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_employees_has_payroll_payroll1` FOREIGN KEY (`payroll_id`) REFERENCES `payroll` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `forum`
--
ALTER TABLE `forum`
  ADD CONSTRAINT `FK_forum_forum` FOREIGN KEY (`parent_id`) REFERENCES `forum` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `post`
--
ALTER TABLE `post`
  ADD CONSTRAINT `FK_post_author` FOREIGN KEY (`author_id`) REFERENCES `forumuser` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_post_editor` FOREIGN KEY (`editor_id`) REFERENCES `forumuser` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_post_thread` FOREIGN KEY (`thread_id`) REFERENCES `thread` (`id`) ON DELETE CASCADE;

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
  ADD CONSTRAINT `Rights_ibfk_1` FOREIGN KEY (`itemname`) REFERENCES `authitem` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `status`
--
ALTER TABLE `status`
  ADD CONSTRAINT `fk_status_employee1` FOREIGN KEY (`employee_id`) REFERENCES `employee` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `thread`
--
ALTER TABLE `thread`
  ADD CONSTRAINT `FK_thread_forum` FOREIGN KEY (`forum_id`) REFERENCES `forum` (`id`) ON DELETE CASCADE;

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
