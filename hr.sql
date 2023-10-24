/*
SQLyog Ultimate v12.4.1 (64 bit)
MySQL - 10.3.17-MariaDB : Database - hrs
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`hrs` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `hrs`;

/*Table structure for table `education` */

DROP TABLE IF EXISTS `education`;

CREATE TABLE `education` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `eid` int(11) DEFAULT NULL,
  `empID` varchar(20) DEFAULT NULL,
  `degree` varchar(30) DEFAULT NULL,
  `major` varchar(30) DEFAULT NULL,
  `minor` varchar(30) DEFAULT NULL,
  `school` varchar(30) DEFAULT NULL,
  `date_grad` date DEFAULT NULL,
  `created` int(3) DEFAULT NULL,
  `date_created` date DEFAULT NULL,
  `edited` int(3) DEFAULT NULL,
  `date_edited` date DEFAULT NULL,
  `deleted` int(3) DEFAULT NULL,
  `date_deleted` date DEFAULT NULL,
  `is_deleted` int(1) DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

/*Data for the table `education` */

insert  into `education`(`id`,`eid`,`empID`,`degree`,`major`,`minor`,`school`,`date_grad`,`created`,`date_created`,`edited`,`date_edited`,`deleted`,`date_deleted`,`is_deleted`) values 
(1,1,'1','BS Computer Science','Computer Science ','','Philippine Christian Universit','2009-04-04',1,'2023-10-20',NULL,NULL,NULL,NULL,0);

/*Table structure for table `emp_info` */

DROP TABLE IF EXISTS `emp_info`;

CREATE TABLE `emp_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `empID` varchar(20) DEFAULT NULL,
  `pword` varchar(50) DEFAULT NULL,
  `lname` varchar(50) DEFAULT NULL,
  `fname` varchar(50) DEFAULT NULL,
  `mname` varchar(50) DEFAULT NULL,
  `prov` varchar(50) DEFAULT NULL,
  `mun` varchar(50) DEFAULT NULL,
  `brgy` varchar(50) DEFAULT NULL,
  `contact` varchar(13) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `pbirth` varchar(50) DEFAULT NULL,
  `citizen` varchar(20) DEFAULT NULL,
  `religion` varchar(20) DEFAULT NULL,
  `marital_stat` varchar(10) DEFAULT NULL,
  `weight` char(8) DEFAULT NULL,
  `height` char(8) DEFAULT NULL,
  `created` int(11) DEFAULT NULL,
  `date_created` date DEFAULT NULL,
  `edited` int(11) DEFAULT NULL,
  `date_edited` date DEFAULT NULL,
  `deleted` int(11) DEFAULT NULL,
  `date_deleted` date DEFAULT NULL,
  `is_deleted` int(1) DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

/*Data for the table `emp_info` */

insert  into `emp_info`(`id`,`empID`,`pword`,`lname`,`fname`,`mname`,`prov`,`mun`,`brgy`,`contact`,`email`,`dob`,`pbirth`,`citizen`,`religion`,`marital_stat`,`weight`,`height`,`created`,`date_created`,`edited`,`date_edited`,`deleted`,`date_deleted`,`is_deleted`) values 
(1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,6,'2023-10-04',NULL,NULL,NULL,NULL,0),
(2,NULL,NULL,'Mendoza','Franz Joseph',NULL,'test','test','test','09055558609','franzjmendoza@live.com.ph','2023-10-10','test','test','test',NULL,'174','172',6,'2023-10-04',NULL,NULL,NULL,NULL,0),
(3,NULL,NULL,'Mendoza','Franz Joseph',NULL,'test','test','test','09055558609','franzjmendoza@live.com.ph','2023-10-10','test','test','test','Single','174','172',6,'2023-10-04',NULL,NULL,NULL,NULL,0),
(4,NULL,NULL,'Mendoza','Franz Joseph',NULL,'test','test','test','09055558609','franzjmendoza@live.com.ph','2023-10-10','test','test','test','Single','174','172',6,'2023-10-04',NULL,NULL,NULL,NULL,0),
(5,NULL,NULL,'Mendoza','Franz Joseph',NULL,'test','test','test','test','franzjmendoza@live.com.ph','2023-01-01','test','test','test','Married','174','172',6,'2023-10-19',NULL,NULL,NULL,NULL,0),
(6,NULL,NULL,'Mendoza','Franz Joseph',NULL,'test','test','test','+639254614776','franzjmendoza@live.com.ph','2023-10-10','test','test','test','Single','174','172',6,'2023-10-19',NULL,NULL,NULL,NULL,0);

/*Table structure for table `exams` */

DROP TABLE IF EXISTS `exams`;

CREATE TABLE `exams` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `eid` int(11) DEFAULT NULL,
  `empID` varchar(10) DEFAULT NULL,
  `cert` varchar(10) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `rate` int(11) DEFAULT NULL,
  `created` int(11) DEFAULT NULL,
  `date_created` date DEFAULT NULL,
  `edited` int(11) DEFAULT NULL,
  `date_edited` date DEFAULT NULL,
  `deleted` int(11) DEFAULT NULL,
  `date_deleted` date DEFAULT NULL,
  `is_deleted` int(11) DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

/*Data for the table `exams` */

insert  into `exams`(`id`,`eid`,`empID`,`cert`,`date`,`rate`,`created`,`date_created`,`edited`,`date_edited`,`deleted`,`date_deleted`,`is_deleted`) values 
(1,NULL,NULL,'test','2023-01-01',90,NULL,NULL,NULL,NULL,NULL,NULL,0),
(2,NULL,NULL,'test2','2023-01-01',90,NULL,NULL,NULL,NULL,NULL,NULL,0),
(3,NULL,NULL,'test3','2023-01-01',90,NULL,NULL,NULL,NULL,NULL,NULL,0);

/*Table structure for table `family` */

DROP TABLE IF EXISTS `family`;

CREATE TABLE `family` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `eid` int(11) DEFAULT NULL,
  `empID` varchar(30) DEFAULT NULL,
  `fullname` varchar(100) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `relation` varchar(50) DEFAULT NULL,
  `created` int(3) DEFAULT NULL,
  `date_created` date DEFAULT NULL,
  `edited` int(3) DEFAULT NULL,
  `date_edited` date DEFAULT NULL,
  `deleted` int(3) DEFAULT NULL,
  `date_deleted` date DEFAULT NULL,
  `is_deleted` int(1) DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

/*Data for the table `family` */

insert  into `family`(`id`,`eid`,`empID`,`fullname`,`dob`,`relation`,`created`,`date_created`,`edited`,`date_edited`,`deleted`,`date_deleted`,`is_deleted`) values 
(1,NULL,NULL,'Angeline DC Mendoza','1991-07-17','Wife',NULL,NULL,NULL,NULL,NULL,NULL,0);

/*Table structure for table `obligation_benifits` */

DROP TABLE IF EXISTS `obligation_benifits`;

CREATE TABLE `obligation_benifits` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `eid` int(11) DEFAULT NULL,
  `empID` varchar(30) DEFAULT NULL,
  `tin_no` varchar(30) DEFAULT NULL,
  `tax_code` varchar(30) DEFAULT NULL,
  `sss_no` varchar(30) DEFAULT NULL,
  `philhealth_no` varchar(30) DEFAULT NULL,
  `pagibig_no` varchar(30) DEFAULT NULL,
  `created` int(4) DEFAULT NULL,
  `date_created` date DEFAULT NULL,
  `edited` int(4) DEFAULT NULL,
  `date_edited` date DEFAULT NULL,
  `deleted` int(4) DEFAULT NULL,
  `date_deleted` date DEFAULT NULL,
  `is_deleted` int(4) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

/*Data for the table `obligation_benifits` */

insert  into `obligation_benifits`(`id`,`eid`,`empID`,`tin_no`,`tax_code`,`sss_no`,`philhealth_no`,`pagibig_no`,`created`,`date_created`,`edited`,`date_edited`,`deleted`,`date_deleted`,`is_deleted`) values 
(1,NULL,NULL,'234','234','5345','345','345',6,'2023-10-09',NULL,NULL,NULL,NULL,NULL),
(2,NULL,NULL,'234','234','5345','345','345',6,'2023-10-09',NULL,NULL,NULL,NULL,NULL),
(3,NULL,NULL,'234','234','5345','345','345',6,'2023-10-19',NULL,NULL,NULL,NULL,NULL),
(4,NULL,NULL,'234','234','5345','345','345',6,'2023-10-19',NULL,NULL,NULL,NULL,NULL),
(5,NULL,NULL,'1111111','111111','11111','11111','111',6,'2023-10-19',NULL,NULL,NULL,NULL,NULL),
(6,NULL,NULL,'12345','1234','123456','12345','123415123',6,'2023-10-20',NULL,NULL,NULL,NULL,NULL),
(7,NULL,NULL,'234','42134','51234235','4134','5143124',6,'2023-10-20',NULL,NULL,NULL,NULL,NULL),
(8,NULL,NULL,'234','42134','51234235','4134','514312454',6,'2023-10-20',NULL,NULL,NULL,NULL,NULL);

/*Table structure for table `work_exp` */

DROP TABLE IF EXISTS `work_exp`;

CREATE TABLE `work_exp` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `eid` int(11) DEFAULT NULL,
  `empID` varchar(20) DEFAULT NULL,
  `employer` varchar(50) DEFAULT NULL,
  `post` varchar(50) DEFAULT NULL,
  `years_service` int(4) DEFAULT NULL,
  `created` int(11) DEFAULT NULL,
  `date_created` date DEFAULT NULL,
  `edited` int(11) DEFAULT NULL,
  `date_edited` date DEFAULT NULL,
  `deleted` int(11) DEFAULT NULL,
  `date_deleted` date DEFAULT NULL,
  `is_deleted` int(11) DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

/*Data for the table `work_exp` */

insert  into `work_exp`(`id`,`eid`,`empID`,`employer`,`post`,`years_service`,`created`,`date_created`,`edited`,`date_edited`,`deleted`,`date_deleted`,`is_deleted`) values 
(1,NULL,NULL,'test emp','my post',1,NULL,NULL,NULL,NULL,NULL,NULL,0),
(2,NULL,NULL,'test emp','my post3',1,NULL,NULL,NULL,NULL,NULL,NULL,0),
(3,NULL,NULL,'test emp 2','my post2',1,NULL,NULL,NULL,NULL,NULL,NULL,0);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
