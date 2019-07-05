-- MySQL dump 10.13  Distrib 5.7.26, for osx10.14 (x86_64)
--
-- Host: localhost    Database: 268_buggies_dummy
-- ------------------------------------------------------
-- Server version	5.7.26

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `agent`
--

DROP TABLE IF EXISTS `agent`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `agent` (
  `agent_id` int(6) NOT NULL,
  `agent_fname` varchar(30) NOT NULL,
  `agent_lname` varchar(30) NOT NULL,
  PRIMARY KEY (`agent_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `agent`
--

LOCK TABLES `agent` WRITE;
/*!40000 ALTER TABLE `agent` DISABLE KEYS */;
INSERT INTO `agent` VALUES (29,'Sandals','Resort'),(30,'Verandah','Resort');
/*!40000 ALTER TABLE `agent` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `buggy`
--

DROP TABLE IF EXISTS `buggy`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `buggy` (
  `buggy_id` varchar(8) NOT NULL,
  `colour` varchar(15) NOT NULL,
  `run_count` int(11) NOT NULL,
  `run_left` int(11) NOT NULL,
  PRIMARY KEY (`buggy_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `buggy`
--

LOCK TABLES `buggy` WRITE;
/*!40000 ALTER TABLE `buggy` DISABLE KEYS */;
INSERT INTO `buggy` VALUES ('10','Striped',24333434,43434),('11','Zed',19,19),('12','Zed',19,19),('13','Zed',19,19),('14','Riv',9,9),('15','Gold',1,1),('5','Hot Red',1,1),('501','Red',1,3),('502','Blue',2,2),('503','Green',1,3),('504','Yellow',3,1),('505','White',3,1),('6','Zebra',10,2),('7','Zebra',10,2),('8','Zebra',10,2),('9','Zebra',10,2),('f0jIkXiO','64',66,66),('HAgvBzSf','y',24333434,43434),('hiTcrFsg','44',4455,66),('HLXXZpqh','y',24333434,43434),('KUM8rxAl','y',24333434,43434),('su2n9qro','44',44,44),('Y1xhHl7k','y',24333434,43434);
/*!40000 ALTER TABLE `buggy` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `buggy_part`
--

DROP TABLE IF EXISTS `buggy_part`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `buggy_part` (
  `buggy_id` varchar(8) NOT NULL,
  `part_id` varchar(8) NOT NULL,
  `part_run_count` int(10) NOT NULL DEFAULT '0',
  KEY `Buggy_ID` (`buggy_id`),
  KEY `Part_ID` (`part_id`),
  CONSTRAINT `Part_id` FOREIGN KEY (`part_id`) REFERENCES `part` (`part_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `buggy_id` FOREIGN KEY (`buggy_id`) REFERENCES `buggy` (`buggy_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `buggy_part`
--

LOCK TABLES `buggy_part` WRITE;
/*!40000 ALTER TABLE `buggy_part` DISABLE KEYS */;
INSERT INTO `buggy_part` VALUES ('501','980',4),('501','981',4),('501','982',4),('501','983',4),('501','984',4),('501','985',4),('501','986',4),('502','980',5),('502','981',5),('502','982',5),('502','983',5),('502','984',5),('502','985',5),('502','986',5),('503','980',0),('503','981',0),('503','982',0),('503','983',0),('503','984',0),('503','985',0),('503','986',0),('504','980',4),('504','981',4),('504','982',4),('504','983',4),('504','984',4),('504','985',4),('504','986',4),('505','980',2),('505','981',2),('505','982',2),('505','983',2),('505','984',2),('505','985',2),('505','986',2),('13','980',4),('13','981',4),('13','982',4),('13','983',5),('13','984',5),('13','985',4),('13','986',3),('14','980',4),('14','981',4),('14','982',4),('14','983',5),('14','984',5),('14','985',4),('14','986',3),('10','982',1);
/*!40000 ALTER TABLE `buggy_part` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `buggy_tour`
--

DROP TABLE IF EXISTS `buggy_tour`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `buggy_tour` (
  `buggy_id` int(6) NOT NULL,
  `tour_id` int(6) NOT NULL,
  KEY `Buggy_ID` (`buggy_id`),
  KEY `Tour_ID` (`tour_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `buggy_tour`
--

LOCK TABLES `buggy_tour` WRITE;
/*!40000 ALTER TABLE `buggy_tour` DISABLE KEYS */;
INSERT INTO `buggy_tour` VALUES (501,11),(502,12),(503,13),(504,14),(505,15);
/*!40000 ALTER TABLE `buggy_tour` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `client`
--

DROP TABLE IF EXISTS `client`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `client` (
  `client_id` varchar(8) NOT NULL,
  `client_fname` varchar(30) NOT NULL,
  `client_lname` varchar(30) NOT NULL,
  `client_addr` varchar(50) NOT NULL,
  `client_dob` date NOT NULL,
  `client_phone` varchar(14) NOT NULL,
  `client_emerg_contact` varchar(30) NOT NULL,
  `client_emerg_contact_num` varchar(14) NOT NULL,
  `type` varchar(50) NOT NULL,
  PRIMARY KEY (`client_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `client`
--

LOCK TABLES `client` WRITE;
/*!40000 ALTER TABLE `client` DISABLE KEYS */;
INSERT INTO `client` VALUES ('101','Larry','Bird','Texas','1997-09-14','(268) 770-9090','','','unsure'),('102','Brett','Henry','Florida','1994-01-20','(268) 770-7788','Sandals','(268) 460-8990','unsure'),('103','Chris','Josiah','Colorado','1995-06-07','(268) 772-3434','Sister','(268) 779-8911','unsure'),('104','Jess','Adams','New York','1993-07-01','(268) 778-8899','Verandah','(268) 462-5959','unsure'),('105','Lori','James','Florida','1996-04-20','(268) 779-0123','Verandah','(268) 462-5959','unsure'),('5','Dayne','Gonsalves','Paynters Estate','1993-10-06','1-268-720-1006','DCL','1-268-720-8611','DL'),('6','Lynette','Saygon','Paynters Estate','1974-08-11','1-268-720-8611','Sugar Ridge','1-268-561-3218','VIP');
/*!40000 ALTER TABLE `client` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `client_agent`
--

DROP TABLE IF EXISTS `client_agent`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `client_agent` (
  `agent_id` varchar(8) NOT NULL,
  `client_id` varchar(8) NOT NULL,
  KEY `Agent_ID` (`agent_id`),
  KEY `Client_ID` (`client_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `client_agent`
--

LOCK TABLES `client_agent` WRITE;
/*!40000 ALTER TABLE `client_agent` DISABLE KEYS */;
INSERT INTO `client_agent` VALUES ('29','101'),('29','102'),('30','104'),('30','105');
/*!40000 ALTER TABLE `client_agent` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `client_incident`
--

DROP TABLE IF EXISTS `client_incident`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `client_incident` (
  `client_id` varchar(8) NOT NULL,
  `tour_id` varchar(8) NOT NULL,
  `incid_id` varchar(8) NOT NULL,
  KEY `client_id` (`client_id`) USING BTREE,
  KEY `incid_id` (`incid_id`) USING BTREE,
  KEY `tour_id` (`tour_id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `client_incident`
--

LOCK TABLES `client_incident` WRITE;
/*!40000 ALTER TABLE `client_incident` DISABLE KEYS */;
INSERT INTO `client_incident` VALUES ('101','11','1001'),('105','15','1002');
/*!40000 ALTER TABLE `client_incident` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `client_promotion`
--

DROP TABLE IF EXISTS `client_promotion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `client_promotion` (
  `promo_id` varchar(8) NOT NULL,
  `client_id` varchar(8) NOT NULL,
  KEY `Promo_ID` (`promo_id`),
  KEY `Client_ID` (`client_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `client_promotion`
--

LOCK TABLES `client_promotion` WRITE;
/*!40000 ALTER TABLE `client_promotion` DISABLE KEYS */;
INSERT INTO `client_promotion` VALUES ('201','101'),('202','104'),('203','103'),('204','105');
/*!40000 ALTER TABLE `client_promotion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `employee`
--

DROP TABLE IF EXISTS `employee`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `employee` (
  `emp_id` int(6) NOT NULL,
  `emp_fname` varchar(30) NOT NULL,
  `emp_lname` varchar(30) NOT NULL,
  `emp_phone` varchar(14) NOT NULL,
  `emp_addr` varchar(40) NOT NULL,
  `emp_dob` date NOT NULL,
  `job_title` varchar(50) NOT NULL,
  `hours_worked` int(10) NOT NULL,
  `pay_rate` double(10,2) NOT NULL,
  `emp_ssn` varchar(20) NOT NULL,
  `emp_mbn` varchar(9) NOT NULL,
  PRIMARY KEY (`emp_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `employee`
--

LOCK TABLES `employee` WRITE;
/*!40000 ALTER TABLE `employee` DISABLE KEYS */;
INSERT INTO `employee` VALUES (5,'Dayne','Gonsalves','1-268-720-1006','Paynters Estate','1993-10-06','Programmer',0,150.00,'123456-1-123456-GY-2','1234567GY'),(101,'John','Doe','(268) 774-4757','Piggots','1995-08-17','Mechanic',17,80.00,'111111-1-222222-AG-3','1231245AG'),(102,'James','Parker','(268) 770-9989','Buckleys','1990-01-18','Guide',12,80.00,'222222-2-333333-AG-4','1234501AG'),(103,'Rick','James','(268) 770-7789','Bolans','1993-09-20','Clerk',19,87.00,'333333-3-444444-AG-5','8887763AG'),(104,'Jane','Hurst','(268) 772-3647','Piggots','1996-03-15','Guide',18,80.00,'444444-4-555555-AG-6','8675847AG'),(105,'Adam','Toros','(268) 772-6457','English Harbour','1990-02-17','Mechanic',20,80.00,'555555-5-777777-AG-8','3654765AG');
/*!40000 ALTER TABLE `employee` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `employee_tour`
--

DROP TABLE IF EXISTS `employee_tour`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `employee_tour` (
  `emp_id` int(6) NOT NULL,
  `tour_id` int(6) NOT NULL,
  KEY `Emp_ID` (`emp_id`),
  KEY `Tour_ID` (`tour_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `employee_tour`
--

LOCK TABLES `employee_tour` WRITE;
/*!40000 ALTER TABLE `employee_tour` DISABLE KEYS */;
INSERT INTO `employee_tour` VALUES (101,11),(102,12),(103,13),(104,14),(105,15),(101,12),(101,13),(102,11),(102,13);
/*!40000 ALTER TABLE `employee_tour` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `equipment`
--

DROP TABLE IF EXISTS `equipment`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `equipment` (
  `equip_id` varchar(8) NOT NULL,
  `client_id` varchar(8) NOT NULL,
  `equip_type` varchar(100) NOT NULL,
  `quantity` int(11) NOT NULL,
  PRIMARY KEY (`equip_id`),
  KEY `Client_ID` (`client_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `equipment`
--

LOCK TABLES `equipment` WRITE;
/*!40000 ALTER TABLE `equipment` DISABLE KEYS */;
INSERT INTO `equipment` VALUES ('301','101','Safety',4),('302','102','Safety',4),('303','103','Safety',2),('304','104','Safety',4),('305','105','Safety',2);
/*!40000 ALTER TABLE `equipment` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `group_member`
--

DROP TABLE IF EXISTS `group_member`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `group_member` (
  `member_id` int(6) NOT NULL AUTO_INCREMENT,
  `mem_fname` varchar(30) NOT NULL,
  `mem_lname` varchar(30) NOT NULL,
  `mem_address` varchar(50) NOT NULL,
  `mem_phone` varchar(14) NOT NULL,
  `mem_tour_date` date NOT NULL,
  `client_id` int(6) NOT NULL,
  `tour_id` int(6) DEFAULT NULL,
  PRIMARY KEY (`member_id`),
  KEY `Client_ID` (`client_id`),
  KEY `TID_FK` (`tour_id`)
) ENGINE=InnoDB AUTO_INCREMENT=465 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `group_member`
--

LOCK TABLES `group_member` WRITE;
/*!40000 ALTER TABLE `group_member` DISABLE KEYS */;
INSERT INTO `group_member` VALUES (456,'Clare','Banks','Texas','(268) 776-9890','2019-01-03',101,11),(457,'Joseph','Williams','Texas','(268) 772-3377','2019-01-03',101,11),(458,'Trevor','Banks','Texas','(268) 771-1010','2019-01-03',101,11),(459,'Frank','Browne','Florida','(268) 722-0900','2019-03-01',102,12),(460,'Chris','James','Florida','(268) 779-8009','2019-03-01',102,12),(461,'Sarah','Blake','Florida','(268) 776-4444','2019-03-01',102,12),(462,'Lindsay','Jones','New York','(268) 720-1234','2019-01-19',104,14),(463,'Mica','Lynn','New York','(268) 720-5678','2019-01-19',104,14),(464,'Jack','Rodgers','Florida','(268) 770-7771','2019-01-19',104,14);
/*!40000 ALTER TABLE `group_member` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `incident`
--

DROP TABLE IF EXISTS `incident`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `incident` (
  `incid_id` varchar(8) NOT NULL,
  `client_id` varchar(8) NOT NULL,
  `incid_desc` varchar(100) NOT NULL,
  `cause_of_incid` varchar(100) NOT NULL,
  `recom` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  PRIMARY KEY (`incid_id`),
  KEY `Client_ID` (`client_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `incident`
--

LOCK TABLES `incident` WRITE;
/*!40000 ALTER TABLE `incident` DISABLE KEYS */;
INSERT INTO `incident` VALUES ('1001','101','Flat tire','fjeiinwokeje ekkwoo oo iine','blah blah blah','2019-01-03','18:10:16'),('1002','105','Buggy Stuck','Driver','blah blah blah','2019-02-20','16:29:13');
/*!40000 ALTER TABLE `incident` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `incident_details`
--

DROP TABLE IF EXISTS `incident_details`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `incident_details` (
  `incid_detail_id` varchar(8) NOT NULL,
  `incid_id` varchar(8) NOT NULL,
  `witness_present` tinyint(1) NOT NULL,
  `witness_fname` varchar(30) NOT NULL,
  `witness_lname` varchar(30) NOT NULL,
  `procedure_followed` tinyint(1) NOT NULL,
  `adequate_training` tinyint(1) NOT NULL,
  `equip_used` tinyint(1) NOT NULL,
  `equip_type` varchar(100) NOT NULL,
  `equipment_training` tinyint(1) NOT NULL,
  PRIMARY KEY (`incid_detail_id`),
  KEY `Incid_ID` (`incid_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `incident_details`
--

LOCK TABLES `incident_details` WRITE;
/*!40000 ALTER TABLE `incident_details` DISABLE KEYS */;
INSERT INTO `incident_details` VALUES ('678','1001',1,'James','Parker',1,1,1,'Safety',1),('679','1002',1,'Jane','Hurst',1,1,1,'Safety',1);
/*!40000 ALTER TABLE `incident_details` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `inventory`
--

DROP TABLE IF EXISTS `inventory`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `inventory` (
  `part_id` varchar(8) NOT NULL,
  `quantity` int(11) NOT NULL,
  KEY `Part_ID` (`part_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `inventory`
--

LOCK TABLES `inventory` WRITE;
/*!40000 ALTER TABLE `inventory` DISABLE KEYS */;
INSERT INTO `inventory` VALUES ('980',5),('981',6),('982',5),('983',4),('984',5),('985',10),('986',9);
/*!40000 ALTER TABLE `inventory` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `part`
--

DROP TABLE IF EXISTS `part`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `part` (
  `part_id` varchar(8) NOT NULL,
  `part_name` varchar(30) NOT NULL,
  `supplier_id` varchar(8) DEFAULT NULL,
  `unit_price` double(8,2) DEFAULT NULL,
  `run_rate` int(11) NOT NULL,
  `order_date` date DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  PRIMARY KEY (`part_id`),
  KEY `Supplier_ID` (`supplier_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `part`
--

LOCK TABLES `part` WRITE;
/*!40000 ALTER TABLE `part` DISABLE KEYS */;
INSERT INTO `part` VALUES ('980','part 11','578',98.00,4,NULL,3),('981','part 2','578',88.00,4,'2019-03-19',5),('982','part 3','578',75.00,4,'2019-02-18',7),('983','part 4','581',100.00,5,'2019-03-02',2),('984','part 5','581',110.00,5,'2019-03-10',3),('985','part 6','580',50.00,4,'2019-02-19',7),('986','part 7','579',39.00,3,'2019-03-19',8),('pqxBWmKi','ftf','',22.00,22,'2019-07-04',66),('rHNZvbxT','rrr','',55.00,55,'2019-07-04',55);
/*!40000 ALTER TABLE `part` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `promotion`
--

DROP TABLE IF EXISTS `promotion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `promotion` (
  `promo_id` int(6) NOT NULL,
  `client_id` int(6) NOT NULL,
  `promo_desc` varchar(50) NOT NULL,
  `promo_code` int(11) NOT NULL,
  PRIMARY KEY (`promo_id`),
  KEY `Client_ID` (`client_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `promotion`
--

LOCK TABLES `promotion` WRITE;
/*!40000 ALTER TABLE `promotion` DISABLE KEYS */;
INSERT INTO `promotion` VALUES (201,101,'20% off',4209),(202,104,'20% off',4201),(203,103,'BOGO',1213),(204,105,'BOGO',1214);
/*!40000 ALTER TABLE `promotion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `supplier`
--

DROP TABLE IF EXISTS `supplier`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `supplier` (
  `supplier_id` varchar(8) NOT NULL,
  `company_name` varchar(30) NOT NULL,
  `rep_name` varchar(30) NOT NULL,
  `supplier_phone` varchar(14) NOT NULL,
  `supplier_email` varchar(30) NOT NULL,
  `supplier_fax` bigint(10) NOT NULL,
  PRIMARY KEY (`supplier_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `supplier`
--

LOCK TABLES `supplier` WRITE;
/*!40000 ALTER TABLE `supplier` DISABLE KEYS */;
INSERT INTO `supplier` VALUES ('578','Generic','John Doe','(789) 789-7878','john.gen@gmail.com',234567),('579','Bolts','Jane Foe','(985) 756-8798','jane.bolt@gmail.com',987742),('580','Rust Free','Rick Jeremy','(767) 785-6767','rust@gmail.com',987675),('581','ZING','Kale Bridges','(654) 876-2266','kale.b@gmail.com',154635);
/*!40000 ALTER TABLE `supplier` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `supplier_part`
--

DROP TABLE IF EXISTS `supplier_part`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `supplier_part` (
  `supplier_id` varchar(8) NOT NULL,
  `part_id` varchar(8) NOT NULL,
  KEY `Supplier_ID` (`supplier_id`),
  KEY `Part_ID` (`part_id`),
  CONSTRAINT `supplier_id` FOREIGN KEY (`supplier_id`) REFERENCES `supplier` (`supplier_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `supplier_part_id` FOREIGN KEY (`part_id`) REFERENCES `part` (`part_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `supplier_part`
--

LOCK TABLES `supplier_part` WRITE;
/*!40000 ALTER TABLE `supplier_part` DISABLE KEYS */;
INSERT INTO `supplier_part` VALUES ('578','980'),('578','981'),('578','982'),('581','983'),('581','984'),('580','985'),('579','986');
/*!40000 ALTER TABLE `supplier_part` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `survey`
--

DROP TABLE IF EXISTS `survey`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `survey` (
  `survey_id` int(6) NOT NULL,
  `client_id` int(6) NOT NULL,
  `survey_recom` char(1) NOT NULL DEFAULT 'N',
  `survey_expect` char(1) NOT NULL DEFAULT 'N',
  `survey_advert` char(1) NOT NULL DEFAULT 'N',
  `survey_money_value` char(1) NOT NULL DEFAULT 'N',
  PRIMARY KEY (`survey_id`),
  KEY `Client_ID` (`client_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `survey`
--

LOCK TABLES `survey` WRITE;
/*!40000 ALTER TABLE `survey` DISABLE KEYS */;
INSERT INTO `survey` VALUES (248,103,'3','4','4','3'),(249,105,'N','N','N','N');
/*!40000 ALTER TABLE `survey` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tours`
--

DROP TABLE IF EXISTS `tours`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tours` (
  `tour_id` varchar(8) NOT NULL,
  `client_id` varchar(8) NOT NULL,
  `group_tour` char(1) NOT NULL DEFAULT 'N',
  `route` varchar(30) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `price` double(8,2) NOT NULL,
  `no_partic` int(12) NOT NULL,
  `equip_requested` tinyint(1) NOT NULL,
  `num_of_buggies` int(11) NOT NULL,
  PRIMARY KEY (`tour_id`),
  KEY `Client_ID` (`client_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tours`
--

LOCK TABLES `tours` WRITE;
/*!40000 ALTER TABLE `tours` DISABLE KEYS */;
INSERT INTO `tours` VALUES ('11','101','Y','South','2019-01-03','17:19:16',200.00,7,1,6),('12','102','Y','South','2019-03-01','11:10:59',200.00,7,1,6),('13','103','N','North','2019-02-14','13:15:07',150.00,7,1,3),('14','104','Y','East','2019-01-19','10:20:18',190.00,7,1,6),('15','5','0','North','2019-02-20','15:19:49',150.00,7,1,3),('ehTnKqXy','44','1','44','2019-07-04','12:30:00',44.00,1,1,1),('QRY6H202','101','','yytyt','2019-12-04','12:30:00',66.00,4,1,4),('XsB2GyA2','44','1','44','2019-07-04','12:30:00',44.00,1,1,1);
/*!40000 ALTER TABLE `tours` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-07-04 20:08:07
