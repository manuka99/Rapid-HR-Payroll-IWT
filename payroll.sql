-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 03, 2019 at 05:30 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.1.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `payroll`
--

-- --------------------------------------------------------

--
-- Table structure for table `emp_details`
--

CREATE TABLE `emp_details` (
  `Emp_ID` int(20) NOT NULL,
  `Emp_Name` varchar(20) NOT NULL,
  `Emp_Dep` varchar(10) DEFAULT NULL,
  `Emp_Desig` varchar(20) DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `days_worked` int(11) DEFAULT NULL,
  `epf_no` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `emp_details`
--

INSERT INTO `emp_details` (`Emp_ID`, `Emp_Name`, `Emp_Dep`, `Emp_Desig`, `start_date`, `days_worked`, `epf_no`) VALUES
(13131, 'Mudal appa', 'Account', 'Manager', '2015-08-18', 343, 252522),
(131313, 'James Lucifier', 'Account', 'Manager', '2015-08-18', 353, 345541),
(171112645, 'Rameshika Madushi', 'Account', 'Manager', '2015-08-16', 45, 123213),
(176512645, 'Ramesh Udawalawe', 'Account', 'Manager', '2015-08-16', 52, 123456),
(189312645, 'Thisun Saram', 'Account', 'Director', '2015-08-18', 78, 145636),
(189313345, 'Thashini lokuge', 'Account', 'Director', '2015-08-18', 54, 465213),
(195356445, 'Aksha Kumara', 'IT', 'Director', '2015-08-18', 89, 454622),
(195612345, 'Parami Nimuthu', 'Account', 'Secretary', '2015-08-20', 122, 125436),
(195964645, 'Dimuthu Rajapaksha', 'IT', 'Manager', '2015-08-20', 64, 154263),
(199312345, 'Sagari Perera', 'Account', 'Secretary', '2015-08-20', 78, 652413),
(199321545, 'Samadhi Perera', 'IT', 'Developer', '2015-08-20', 79, 455412),
(199323645, 'Maheshika Santha', 'Audit', 'Manager', '2015-08-21', 12, 213655),
(199333645, 'Kumath Peris', 'Audit', 'Accountant', '2015-08-21', 45, 126354),
(199337745, 'Kumath Ekanayaka', 'Audit', 'Accountant', '2015-08-21', 36, 877945),
(199351545, 'Sanjeewa Rathnayaka', 'IT', 'Developer', '2015-08-21', 121, 785544),
(199356445, 'Manuka Yasas', 'IT', 'Director', '2015-08-23', 147, 547877),
(199399945, 'Maheshi kantha', 'Audit', 'Manager', '2015-08-23', 23, 789654),
(199636445, 'Manupama Silva', 'IT', 'Director', '2015-08-23', 12, 456321),
(199662645, 'John logi', 'Audit', 'Accountant', '2015-08-25', 42, 456221),
(199882645, 'John De Silva', 'Audit', 'Accountant', '2015-08-25', 78, 456321),
(199964645, 'Jayaprabha Chamodya', 'IT', 'Manager', '2015-08-29', 36, 635425);

-- --------------------------------------------------------

--
-- Table structure for table `emp_salary`
--

CREATE TABLE `emp_salary` (
  `salary_id` int(11) NOT NULL,
  `Emp_ID` int(20) NOT NULL,
  `date` date DEFAULT NULL,
  `basic` float DEFAULT NULL,
  `bonus` float DEFAULT NULL,
  `TA` float DEFAULT NULL,
  `MA` float DEFAULT NULL,
  `HRA` float DEFAULT NULL,
  `PT` float DEFAULT NULL,
  `PF` float DEFAULT NULL,
  `net` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `emp_salary`
--

INSERT INTO `emp_salary` (`salary_id`, `Emp_ID`, `date`, `basic`, `bonus`, `TA`, `MA`, `HRA`, `PT`, `PF`, `net`) VALUES
(110, 171112645, '2015-08-25', 21211.3, 54512.2, 0, 4532.22, 7575.32, 4542.32, 12124, 71164.7),
(111, 176512645, '2015-08-25', 132213, 1452.23, 0, 154.23, 0, 45, 4565.32, 129209),
(112, 189312645, '2015-08-25', 4242.91, 575.889, 0, 0, 9797.08, 0, 121.327, 14494.6),
(113, 189313345, '2015-08-25', 4545.32, 54545.2, 0, 0, 0, 0, 5499.32, 53591.2),
(114, 195356445, '2015-08-25', 45405.3, 0, 0, 0, 644.325, 0, 5454.28, 40595.4),
(115, 195612345, '2015-08-25', 778131, 0, 0, 0, 0, 0, 1213.25, 776918),
(116, 195964645, '2015-08-25', 5353.79, 0, 453.254, 646.65, 0, 0, 4464.25, 1989.44),
(117, 199312345, '2015-08-25', 78788.3, 0, 7879.65, 0, 7876.44, 356, 5645, 88543.4),
(118, 199321545, '2015-04-24', 212141, 4546.23, 5754.33, 757.326, 454.355, 0, 4545.23, 219108),
(119, 199323645, '2015-08-25', 45784800, 5154.32, 0, 0, 5454.32, 0, 45465.4, 45750000),
(120, 199333645, '2015-08-25', 54546.3, 4544.33, 5453.5, 11421.2, 454.44, 2443.4, 445.22, 73531.2),
(121, 199337745, '2015-08-25', 45454.3, 454.32, 4454.45, 5454.4, 0, 0, 454.445, 55363),
(122, 199351545, '2015-08-25', 54445.6, 454.45, 3454, 0, 0, 0, 454.32, 57899.7),
(123, 199356445, '2015-08-25', 45445.4, 5453.24, 0, 0, 0, 0, 4563.25, 46335.3),
(124, 199399945, '2015-08-25', 78963.2, 5445.35, 0, 0, 0, 0, 4655.45, 79753.1),
(125, 199636445, '2015-08-25', 45444.5, 4454.44, 0, 0, 0, 0, 454.3, 49444.7),
(126, 199662645, '2015-08-25', 78936.6, 445.32, 4555.23, 4637, 5445.33, 4545.65, 464.345, 89009.4),
(127, 199882645, '2015-08-25', 46444.3, 4544.32, 4545.45, 445.554, 454423, 4543, 456.32, 505403),
(128, 199964645, '2015-08-25', 46545.4, 45463.3, 0, 44545, 0, 4563.32, 4453.25, 127537),
(162, 13131, '2015-08-25', 124141, 2313.57, 0, 0, 0, 4636.23, 0, 121819),
(163, 131313, '2015-08-25', 24242, 4564, 45234, 0, 0, 42422, 0, 31618);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `emp_details`
--
ALTER TABLE `emp_details`
  ADD PRIMARY KEY (`Emp_ID`);

--
-- Indexes for table `emp_salary`
--
ALTER TABLE `emp_salary`
  ADD PRIMARY KEY (`salary_id`),
  ADD KEY `emp_id_fk` (`Emp_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `emp_details`
--
ALTER TABLE `emp_details`
  MODIFY `Emp_ID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2141413416;

--
-- AUTO_INCREMENT for table `emp_salary`
--
ALTER TABLE `emp_salary`
  MODIFY `salary_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=164;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `emp_salary`
--
ALTER TABLE `emp_salary`
  ADD CONSTRAINT `emp_id_fk` FOREIGN KEY (`Emp_ID`) REFERENCES `emp_details` (`Emp_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
