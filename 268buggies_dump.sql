-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 19, 2019 at 12:14 AM
-- Server version: 5.7.19
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `268buggies_dummy`
--

-- --------------------------------------------------------

--
-- Table structure for table `agent`
--

DROP TABLE IF EXISTS `agent`;
CREATE TABLE IF NOT EXISTS `agent` (
  `Agent_ID` int(6) NOT NULL,
  `Agent_Fname` varchar(30) NOT NULL,
  `Agent_Lname` varchar(30) NOT NULL,
  PRIMARY KEY (`Agent_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `agent`
--

INSERT INTO `agent` (`Agent_ID`, `Agent_Fname`, `Agent_Lname`) VALUES
(29, 'Sandals', 'Resort'),
(30, 'Verandah', 'Resort');

-- --------------------------------------------------------

--
-- Table structure for table `buggy`
--

DROP TABLE IF EXISTS `buggy`;
CREATE TABLE IF NOT EXISTS `buggy` (
  `Buggy_ID` int(6) NOT NULL,
  `Colour` varchar(15) NOT NULL,
  `Run_Duration` int(11) NOT NULL,
  `Run_Count` int(11) NOT NULL,
  `Run_Left` int(11) NOT NULL,
  PRIMARY KEY (`Buggy_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buggy`
--

INSERT INTO `buggy` (`Buggy_ID`, `Colour`, `Run_Duration`, `Run_Count`, `Run_Left`) VALUES
(5, 'Hot Red', 1, 1, 1),
(6, 'Zebra', 12, 10, 2),
(7, 'Zebra', 12, 10, 2),
(8, 'Zebra', 12, 10, 2),
(9, 'Zebra', 12, 10, 2),
(10, 'Zebra', 12, 10, 2),
(11, 'Zed', 19, 19, 19),
(12, 'Zed', 19, 19, 19),
(13, 'Zed', 19, 19, 19),
(14, 'Riv', 9, 9, 9),
(15, 'Gold', 1, 1, 1),
(501, 'Red', 12, 1, 3),
(502, 'Blue', 12, 2, 2),
(503, 'Green', 12, 1, 3),
(504, 'Yellow', 12, 3, 1),
(505, 'White', 12, 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `buggy_part`
--

DROP TABLE IF EXISTS `buggy_part`;
CREATE TABLE IF NOT EXISTS `buggy_part` (
  `Buggy_ID` int(6) NOT NULL,
  `Part_ID` int(6) NOT NULL,
  `Part_Run_Count` int(10) NOT NULL DEFAULT '0',
  KEY `Buggy_ID` (`Buggy_ID`),
  KEY `Part_ID` (`Part_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buggy_part`
--

INSERT INTO `buggy_part` (`Buggy_ID`, `Part_ID`, `Part_Run_Count`) VALUES
(501, 980, 4),
(501, 981, 4),
(501, 982, 4),
(501, 983, 4),
(501, 984, 4),
(501, 985, 4),
(501, 986, 4),
(502, 980, 5),
(502, 981, 5),
(502, 982, 5),
(502, 983, 5),
(502, 984, 5),
(502, 985, 5),
(502, 986, 5),
(503, 980, 0),
(503, 981, 0),
(503, 982, 0),
(503, 983, 0),
(503, 984, 0),
(503, 985, 0),
(503, 986, 0),
(504, 980, 4),
(504, 981, 4),
(504, 982, 4),
(504, 983, 4),
(504, 984, 4),
(504, 985, 4),
(504, 986, 4),
(505, 980, 2),
(505, 981, 2),
(505, 982, 2),
(505, 983, 2),
(505, 984, 2),
(505, 985, 2),
(505, 986, 2),
(13, 980, 4),
(13, 981, 4),
(13, 982, 4),
(13, 983, 5),
(13, 984, 5),
(13, 985, 4),
(13, 986, 3),
(14, 980, 4),
(14, 981, 4),
(14, 982, 4),
(14, 983, 5),
(14, 984, 5),
(14, 985, 4),
(14, 986, 3),
(15, 980, 4),
(15, 981, 4),
(15, 982, 4),
(15, 983, 5),
(15, 984, 5),
(15, 985, 4),
(15, 986, 3);

-- --------------------------------------------------------

--
-- Table structure for table `buggy_tour`
--

DROP TABLE IF EXISTS `buggy_tour`;
CREATE TABLE IF NOT EXISTS `buggy_tour` (
  `Buggy_ID` int(6) NOT NULL,
  `Tour_ID` int(6) NOT NULL,
  KEY `Buggy_ID` (`Buggy_ID`),
  KEY `Tour_ID` (`Tour_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buggy_tour`
--

INSERT INTO `buggy_tour` (`Buggy_ID`, `Tour_ID`) VALUES
(501, 11),
(502, 12),
(503, 13),
(504, 14),
(505, 15);

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

DROP TABLE IF EXISTS `client`;
CREATE TABLE IF NOT EXISTS `client` (
  `Client_ID` int(6) NOT NULL,
  `Client_Fname` varchar(30) NOT NULL,
  `Client_Lname` varchar(30) NOT NULL,
  `Client_Addr` varchar(50) NOT NULL,
  `Client_DOB` date NOT NULL,
  `Client_Phone` varchar(14) NOT NULL,
  `Client_emerg_contact` varchar(30) NOT NULL,
  `Client_emerg_contact_num` varchar(14) NOT NULL,
  `Type` varchar(50) NOT NULL,
  PRIMARY KEY (`Client_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`Client_ID`, `Client_Fname`, `Client_Lname`, `Client_Addr`, `Client_DOB`, `Client_Phone`, `Client_emerg_contact`, `Client_emerg_contact_num`, `Type`) VALUES
(5, 'Dayne', 'Gonsalves', 'Paynters Estate', '1993-10-06', '1-268-720-1006', 'DCL', '1-268-720-8611', 'DL'),
(6, 'Lynette', 'Saygon', 'Paynters Estate', '1974-08-11', '1-268-720-8611', 'Sugar Ridge', '1-268-561-3218', 'VIP'),
(101, 'Larry', 'Bird', 'Texas', '1997-09-14', '(268) 770-9090', 'Sandals', '(268) 460-8990', 'unsure'),
(102, 'Brett', 'Henry', 'Florida', '1994-01-20', '(268) 770-7788', 'Sandals', '(268) 460-8990', 'unsure'),
(103, 'Chris', 'Josiah', 'Colorado', '1995-06-07', '(268) 772-3434', 'Sister', '(268) 779-8911', 'unsure'),
(104, 'Jess', 'Adams', 'New York', '1993-07-01', '(268) 778-8899', 'Verandah', '(268) 462-5959', 'unsure'),
(105, 'Lori', 'James', 'Florida', '1996-04-20', '(268) 779-0123', 'Verandah', '(268) 462-5959', 'unsure');

-- --------------------------------------------------------

--
-- Table structure for table `client_agent`
--

DROP TABLE IF EXISTS `client_agent`;
CREATE TABLE IF NOT EXISTS `client_agent` (
  `Agent_ID` int(6) NOT NULL,
  `Client_ID` int(6) NOT NULL,
  KEY `Agent_ID` (`Agent_ID`),
  KEY `Client_ID` (`Client_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client_agent`
--

INSERT INTO `client_agent` (`Agent_ID`, `Client_ID`) VALUES
(29, 101),
(29, 102),
(30, 104),
(30, 105);

-- --------------------------------------------------------

--
-- Table structure for table `client_incident`
--

DROP TABLE IF EXISTS `client_incident`;
CREATE TABLE IF NOT EXISTS `client_incident` (
  `Client_ID` int(6) NOT NULL,
  `Tour_ID` int(6) NOT NULL,
  `Incid_ID` int(6) NOT NULL,
  KEY `Client_ID` (`Client_ID`),
  KEY `Tour_ID` (`Tour_ID`),
  KEY `Incid_ID` (`Incid_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client_incident`
--

INSERT INTO `client_incident` (`Client_ID`, `Tour_ID`, `Incid_ID`) VALUES
(101, 11, 1001),
(105, 15, 1002);

-- --------------------------------------------------------

--
-- Table structure for table `client_promotion`
--

DROP TABLE IF EXISTS `client_promotion`;
CREATE TABLE IF NOT EXISTS `client_promotion` (
  `Promo_ID` int(6) NOT NULL,
  `Client_ID` int(6) NOT NULL,
  KEY `Promo_ID` (`Promo_ID`),
  KEY `Client_ID` (`Client_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client_promotion`
--

INSERT INTO `client_promotion` (`Promo_ID`, `Client_ID`) VALUES
(201, 101),
(202, 104),
(203, 103),
(204, 105);

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

DROP TABLE IF EXISTS `employee`;
CREATE TABLE IF NOT EXISTS `employee` (
  `Emp_ID` int(6) NOT NULL,
  `Emp_Fname` varchar(30) NOT NULL,
  `Emp_Lname` varchar(30) NOT NULL,
  `Emp_Phone` varchar(14) NOT NULL,
  `Emp_Addr` varchar(40) NOT NULL,
  `Emp_DOB` date NOT NULL,
  `Job_title` varchar(50) NOT NULL,
  `Hours_worked` int(10) NOT NULL,
  `Pay_rate` double(10,2) NOT NULL,
  `Emp_Ssn` varchar(20) NOT NULL,
  `Emp_Mbn` varchar(9) NOT NULL,
  PRIMARY KEY (`Emp_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`Emp_ID`, `Emp_Fname`, `Emp_Lname`, `Emp_Phone`, `Emp_Addr`, `Emp_DOB`, `Job_title`, `Hours_worked`, `Pay_rate`, `Emp_Ssn`, `Emp_Mbn`) VALUES
(5, 'Dayne', 'Gonsalves', '1-268-720-1006', 'Paynters Estate', '1993-10-06', 'Programmer', 0, 150.00, '123456-1-123456-GY-2', '1234567GY'),
(101, 'John', 'Doe', '(268) 774-4757', 'Piggots', '1995-08-17', 'Mechanic', 17, 80.00, '111111-1-222222-AG-3', '1231245AG'),
(102, 'James', 'Parker', '(268) 770-9989', 'Buckleys', '1990-01-18', 'Guide', 12, 80.00, '222222-2-333333-AG-4', '1234501AG'),
(103, 'Rick', 'James', '(268) 770-7789', 'Bolans', '1993-09-20', 'Clerk', 19, 87.00, '333333-3-444444-AG-5', '8887763AG'),
(104, 'Jane', 'Hurst', '(268) 772-3647', 'Piggots', '1996-03-15', 'Guide', 18, 80.00, '444444-4-555555-AG-6', '8675847AG'),
(105, 'Adam', 'Toros', '(268) 772-6457', 'English Harbour', '1990-02-17', 'Mechanic', 20, 80.00, '555555-5-777777-AG-8', '3654765AG');

-- --------------------------------------------------------

--
-- Table structure for table `employee_tour`
--

DROP TABLE IF EXISTS `employee_tour`;
CREATE TABLE IF NOT EXISTS `employee_tour` (
  `Emp_ID` int(6) NOT NULL,
  `Tour_ID` int(6) NOT NULL,
  KEY `Emp_ID` (`Emp_ID`),
  KEY `Tour_ID` (`Tour_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee_tour`
--

INSERT INTO `employee_tour` (`Emp_ID`, `Tour_ID`) VALUES
(101, 11),
(102, 12),
(103, 13),
(104, 14),
(105, 15),
(101, 12),
(101, 13),
(102, 11),
(102, 13);

-- --------------------------------------------------------

--
-- Table structure for table `equipment`
--

DROP TABLE IF EXISTS `equipment`;
CREATE TABLE IF NOT EXISTS `equipment` (
  `Equip_ID` int(6) NOT NULL,
  `Client_ID` int(6) NOT NULL,
  `Equip_Type` varchar(100) NOT NULL,
  `Quantity` int(11) NOT NULL,
  PRIMARY KEY (`Equip_ID`),
  KEY `Client_ID` (`Client_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `equipment`
--

INSERT INTO `equipment` (`Equip_ID`, `Client_ID`, `Equip_Type`, `Quantity`) VALUES
(301, 101, 'Safety', 4),
(302, 102, 'Safety', 4),
(303, 103, 'Safety', 2),
(304, 104, 'Safety', 4),
(305, 105, 'Safety', 2);

-- --------------------------------------------------------

--
-- Table structure for table `group_member`
--

DROP TABLE IF EXISTS `group_member`;
CREATE TABLE IF NOT EXISTS `group_member` (
  `Member_ID` int(6) NOT NULL AUTO_INCREMENT,
  `mem_Fname` varchar(30) NOT NULL,
  `mem_Lname` varchar(30) NOT NULL,
  `mem_Address` varchar(50) NOT NULL,
  `mem_Phone` varchar(14) NOT NULL,
  `mem_Tour_Date` date NOT NULL,
  `Client_ID` int(6) NOT NULL,
  `Tour_ID` int(6) DEFAULT NULL,
  PRIMARY KEY (`Member_ID`),
  KEY `Client_ID` (`Client_ID`),
  KEY `TID_FK` (`Tour_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=465 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `group_member`
--

INSERT INTO `group_member` (`Member_ID`, `mem_Fname`, `mem_Lname`, `mem_Address`, `mem_Phone`, `mem_Tour_Date`, `Client_ID`, `Tour_ID`) VALUES
(456, 'Clare', 'Banks', 'Texas', '(268) 776-9890', '2019-01-03', 101, 11),
(457, 'Joseph', 'Williams', 'Texas', '(268) 772-3377', '2019-01-03', 101, 11),
(458, 'Trevor', 'Banks', 'Texas', '(268) 771-1010', '2019-01-03', 101, 11),
(459, 'Frank', 'Browne', 'Florida', '(268) 722-0900', '2019-03-01', 102, 12),
(460, 'Chris', 'James', 'Florida', '(268) 779-8009', '2019-03-01', 102, 12),
(461, 'Sarah', 'Blake', 'Florida', '(268) 776-4444', '2019-03-01', 102, 12),
(462, 'Lindsay', 'Jones', 'New York', '(268) 720-1234', '2019-01-19', 104, 14),
(463, 'Mica', 'Lynn', 'New York', '(268) 720-5678', '2019-01-19', 104, 14),
(464, 'Jack', 'Rodgers', 'Florida', '(268) 770-7771', '2019-01-19', 104, 14);

-- --------------------------------------------------------

--
-- Table structure for table `incident`
--

DROP TABLE IF EXISTS `incident`;
CREATE TABLE IF NOT EXISTS `incident` (
  `Incid_ID` int(6) NOT NULL,
  `Client_ID` int(6) NOT NULL,
  `Incid_desc` varchar(100) NOT NULL,
  `Cause_of_Incid` varchar(100) NOT NULL,
  `Recom` varchar(100) NOT NULL,
  `Witness_Fname` varchar(30) NOT NULL,
  `Witness_Lname` varchar(30) NOT NULL,
  `Procedure_Followed` tinyint(1) NOT NULL,
  `Equip_Used` tinyint(1) NOT NULL,
  `Equip_Type` varchar(30) NOT NULL,
  `Date` date NOT NULL,
  `Time` time NOT NULL,
  PRIMARY KEY (`Incid_ID`),
  KEY `Client_ID` (`Client_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `incident`
--

INSERT INTO `incident` (`Incid_ID`, `Client_ID`, `Incid_desc`, `Cause_of_Incid`, `Recom`, `Witness_Fname`,`Witness_Lname`,`Procedure_Followed`,`Equip_Used`,`Equip_Type`, `Date`, `Time`) VALUES
(1001, 101, 'Flat tire', 'fjeiinwokeje ekkwoo oo iine', 'blah blah blah', 'James', 'Parker',1,1,'safety', '2019-01-03', '18:10:16'),
(1002, 105, 'Buggy Stuck', 'Driver', 'blah blah blah', 'James', 'Parker', 1, 1,'safety', '2019-02-20', '16:29:13');


-- --------------------------------------------------------

--
-- Table structure for table `inventory`
--

DROP TABLE IF EXISTS `inventory`;
CREATE TABLE IF NOT EXISTS `inventory` (
  `Part_ID` int(6) NOT NULL,
  `Quantity` int(11) NOT NULL,
  KEY `Part_ID` (`Part_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inventory`
--

INSERT INTO `inventory` (`Part_ID`, `Quantity`) VALUES
(980, 5),
(981, 6),
(982, 5),
(983, 4),
(984, 5),
(985, 10),
(986, 9);

-- --------------------------------------------------------

--
-- Table structure for table `part`
--

DROP TABLE IF EXISTS `part`;
CREATE TABLE IF NOT EXISTS `part` (
  `Part_ID` int(6) NOT NULL,
  `Part_Name` varchar(30) NOT NULL,
  `Supplier_ID` int(6) NOT NULL,
  `Unit_Price` double(8,2) NOT NULL,
  `Run_Rate` int(11) NOT NULL,
  `Order_Date` date NOT NULL,
  `Quantity` int(11) NOT NULL,
  PRIMARY KEY (`Part_ID`),
  KEY `Supplier_ID` (`Supplier_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `part`
--

INSERT INTO `part` (`Part_ID`, `Part_Name`, `Supplier_ID`, `Unit_Price`, `Run_Rate`, `Order_Date`, `Quantity`) VALUES
(980, 'part 1', 578, 98.00, 4, '2019-03-19', 3),
(981, 'part 2', 578, 88.00, 4, '2019-03-19', 5),
(982, 'part 3', 578, 75.00, 4, '2019-02-18', 7),
(983, 'part 4', 581, 100.00, 5, '2019-03-02', 2),
(984, 'part 5', 581, 110.00, 5, '2019-03-10', 3),
(985, 'part 6', 580, 50.00, 4, '2019-02-19', 7),
(986, 'part 7', 579, 39.00, 3, '2019-03-19', 8);

-- --------------------------------------------------------

--
-- Table structure for table `promotion`
--

DROP TABLE IF EXISTS `promotion`;
CREATE TABLE IF NOT EXISTS `promotion` (
  `Promo_ID` int(6) NOT NULL,
  `Client_ID` int(6) NOT NULL,
  `Promo_Desc` varchar(50) NOT NULL,
  `Promo_Code` int(11) NOT NULL,
  PRIMARY KEY (`Promo_ID`),
  KEY `Client_ID` (`Client_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `promotion`
--

INSERT INTO `promotion` (`Promo_ID`, `Client_ID`, `Promo_Desc`, `Promo_Code`) VALUES
(201, 101, '20% off', 4209),
(202, 104, '20% off', 4201),
(203, 103, 'BOGO', 1213),
(204, 105, 'BOGO', 1214);

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

DROP TABLE IF EXISTS `supplier`;
CREATE TABLE IF NOT EXISTS `supplier` (
  `Supplier_ID` int(6) NOT NULL,
  `Company_Name` varchar(30) NOT NULL,
  `Rep_Name` varchar(30) NOT NULL,
  `Supplier_Phone` varchar(14) NOT NULL,
  `Supplier_Email` varchar(30) NOT NULL,
  `Supplier_Fax` bigint(10) NOT NULL,
  PRIMARY KEY (`Supplier_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`Supplier_ID`, `Company_Name`, `Rep_Name`, `Supplier_Phone`, `Supplier_Email`, `Supplier_Fax`) VALUES
(578, 'Generic', 'John Doe', '(789) 789-7878', 'john.gen@gmail.com', 234567),
(579, 'Bolts', 'Jane Foe', '(985) 756-8798', 'jane.bolt@gmail.com', 987742),
(580, 'Rust Free', 'Rick Jeremy', '(767) 785-6767', 'rust@gmail.com', 987675),
(581, 'ZING', 'Kale Bridges', '(654) 876-2266', 'kale.b@gmail.com', 154635);

-- --------------------------------------------------------

--
-- Table structure for table `supplier_part`
--

DROP TABLE IF EXISTS `supplier_part`;
CREATE TABLE IF NOT EXISTS `supplier_part` (
  `Supplier_ID` int(6) NOT NULL,
  `Part_ID` int(6) NOT NULL,
  KEY `Supplier_ID` (`Supplier_ID`),
  KEY `Part_ID` (`Part_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supplier_part`
--

INSERT INTO `supplier_part` (`Supplier_ID`, `Part_ID`) VALUES
(578, 980),
(578, 981),
(578, 982),
(581, 983),
(581, 984),
(580, 985),
(579, 986);

-- --------------------------------------------------------

--
-- Table structure for table `survey`
--

DROP TABLE IF EXISTS `survey`;
CREATE TABLE IF NOT EXISTS `survey` (
  `Survey_ID` int(6) NOT NULL,
  `Client_ID` int(6) NOT NULL,
  `Survey_Recom` char(1) NOT NULL DEFAULT 'N',
  `Survey_Expect` char(1) NOT NULL DEFAULT 'N',
  `Survey_Advert` char(1) NOT NULL DEFAULT 'N',
  `Survey_Money_Value` char(1) NOT NULL DEFAULT 'N',
  PRIMARY KEY (`Survey_ID`),
  KEY `Client_ID` (`Client_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `survey`
--

INSERT INTO `survey` (`Survey_ID`, `Client_ID`, `Survey_Recom`, `Survey_Expect`, `Survey_Advert`, `Survey_Money_Value`) VALUES
(248, 103, '3', '4', '4', '3'),
(249, 105, 'N', 'N', 'N', 'N');

-- --------------------------------------------------------

--
-- Table structure for table `tours`
--

DROP TABLE IF EXISTS `tours`;
CREATE TABLE IF NOT EXISTS `tours` (
  `Tour_ID` int(6) NOT NULL,
  `Client_ID` int(6) NOT NULL,
  `Group_Tour` char(1) NOT NULL DEFAULT 'N',
  `Route` varchar(30) NOT NULL,
  `Date` date NOT NULL,
  `Time` time NOT NULL,
  `Price` double(8,2) NOT NULL,
  `No_Partic` int(12) NOT NULL,
  `Equip_requested` tinyint(1) NOT NULL,
  `Num_of_Buggies` int(11) NOT NULL,
  PRIMARY KEY (`Tour_ID`),
  KEY `Client_ID` (`Client_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tours`
--

INSERT INTO `tours` (`Tour_ID`, `Client_ID`, `Group_Tour`, `Route`, `Date`, `Time`, `Price`, `No_Partic`, `Equip_requested`, `Num_of_Buggies`) VALUES
(11, 101, 'Y', 'South', '2019-01-03', '17:19:16', 200.00, 7, 1, 6),
(12, 102, 'Y', 'South', '2019-03-01', '11:10:59', 200.00, 7, 1, 6),
(13, 103, 'N', 'North', '2019-02-14', '13:15:07', 150.00, 7, 1, 3),
(14, 104, 'Y', 'East', '2019-01-19', '10:20:18', 190.00, 7, 1, 6),
(15, 105, 'N', 'North', '2019-02-20', '15:19:49', 150.00, 7, 1, 3);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `buggy_part`
--
ALTER TABLE `buggy_part`
  ADD CONSTRAINT `buggy_part_ibfk_1` FOREIGN KEY (`Buggy_ID`) REFERENCES `buggy` (`Buggy_ID`),
  ADD CONSTRAINT `buggy_part_ibfk_2` FOREIGN KEY (`Part_ID`) REFERENCES `part` (`Part_ID`);

--
-- Constraints for table `buggy_tour`
--
ALTER TABLE `buggy_tour`
  ADD CONSTRAINT `buggy_tour_ibfk_1` FOREIGN KEY (`Buggy_ID`) REFERENCES `buggy` (`Buggy_ID`),
  ADD CONSTRAINT `buggy_tour_ibfk_2` FOREIGN KEY (`Tour_ID`) REFERENCES `tours` (`Tour_ID`);

--
-- Constraints for table `client_agent`
--
ALTER TABLE `client_agent`
  ADD CONSTRAINT `client_agent_ibfk_1` FOREIGN KEY (`Agent_ID`) REFERENCES `agent` (`Agent_ID`),
  ADD CONSTRAINT `client_agent_ibfk_2` FOREIGN KEY (`Client_ID`) REFERENCES `client` (`Client_ID`);

--
-- Constraints for table `client_incident`
--
ALTER TABLE `client_incident`
  ADD CONSTRAINT `client_incident_ibfk_1` FOREIGN KEY (`Client_ID`) REFERENCES `client` (`Client_ID`),
  ADD CONSTRAINT `client_incident_ibfk_2` FOREIGN KEY (`Incid_ID`) REFERENCES `incident` (`Incid_ID`),
  ADD CONSTRAINT `client_incident_ibfk_3` FOREIGN KEY (`Tour_ID`) REFERENCES `tours` (`Tour_ID`);

--
-- Constraints for table `client_promotion`
--
ALTER TABLE `client_promotion`
  ADD CONSTRAINT `client_promotion_ibfk_1` FOREIGN KEY (`Client_ID`) REFERENCES `client` (`Client_ID`),
  ADD CONSTRAINT `client_promotion_ibfk_2` FOREIGN KEY (`Promo_ID`) REFERENCES `promotion` (`Promo_ID`);

--
-- Constraints for table `equipment`
--
ALTER TABLE `equipment`
  ADD CONSTRAINT `equipment_ibfk_1` FOREIGN KEY (`Client_ID`) REFERENCES `client` (`Client_ID`);

--
-- Constraints for table `group_member`
--
ALTER TABLE `group_member`
  ADD CONSTRAINT `group_member_ibfk_1` FOREIGN KEY (`Client_ID`) REFERENCES `client` (`Client_ID`),
  ADD CONSTRAINT `group_member_ibfk_2` FOREIGN KEY (`Tour_ID`) REFERENCES `tours` (`Tour_ID`);

--
-- Constraints for table `incident`
--
ALTER TABLE `incident`
  ADD CONSTRAINT `incident_ibfk_1` FOREIGN KEY (`Client_ID`) REFERENCES `client` (`Client_ID`);

--
-- Constraints for table `inventory`
--
ALTER TABLE `inventory`
  ADD CONSTRAINT `inventory_ibfk_1` FOREIGN KEY (`Part_ID`) REFERENCES `part` (`Part_ID`);

--
-- Constraints for table `part`
--
ALTER TABLE `part`
  ADD CONSTRAINT `part_ibfk_1` FOREIGN KEY (`Supplier_ID`) REFERENCES `supplier` (`Supplier_ID`);

--
-- Constraints for table `promotion`
--
ALTER TABLE `promotion`
  ADD CONSTRAINT `promotion_ibfk_1` FOREIGN KEY (`Client_ID`) REFERENCES `client` (`Client_ID`);

--
-- Constraints for table `supplier_part`
--
ALTER TABLE `supplier_part`
  ADD CONSTRAINT `supplier_part_ibfk_1` FOREIGN KEY (`Part_ID`) REFERENCES `part` (`Part_ID`),
  ADD CONSTRAINT `supplier_part_ibfk_2` FOREIGN KEY (`Supplier_ID`) REFERENCES `supplier` (`Supplier_ID`);

--
-- Constraints for table `survey`
--
ALTER TABLE `survey`
  ADD CONSTRAINT `survey_ibfk_1` FOREIGN KEY (`Client_ID`) REFERENCES `client` (`Client_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
