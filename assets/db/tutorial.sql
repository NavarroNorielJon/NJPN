/*
SQLyog Community v13.1.5  (64 bit)
MySQL - 10.4.11-MariaDB : Database - tutorial
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`tutorial` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `tutorial`;

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `user_id` int(3) NOT NULL AUTO_INCREMENT,
  `username` varchar(24) DEFAULT NULL,
  `email` varchar(254) DEFAULT NULL,
  `password` varchar(60) DEFAULT NULL,
  `user_type` varchar(5) DEFAULT 'user',
  `date_created` datetime DEFAULT current_timestamp(),
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

/*Data for the table `user` */

insert  into `user`(`user_id`,`username`,`email`,`password`,`user_type`,`date_created`) values 
(1,'admin','norieljon.navarro.1998@gmail.com','$2y$10$zj84pnw2LHFOQqYRZPLr2u8tdMgm6hasB7GVSdOoqhkILV.zZA/Qi','admin','2020-01-20 14:11:30');

/*Table structure for table `user_information` */

DROP TABLE IF EXISTS `user_information`;

CREATE TABLE `user_information` (
  `user_id` int(3) NOT NULL,
  `first_name` varchar(24) DEFAULT NULL,
  `middle_name` varchar(24) DEFAULT NULL,
  `last_name` varchar(24) DEFAULT NULL,
  `user_image` blob DEFAULT NULL,
  PRIMARY KEY (`user_id`),
  CONSTRAINT `user_information_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `user_information` */

insert  into `user_information`(`user_id`,`first_name`,`middle_name`,`last_name`,`user_image`) values 
(1,'Noriel Jon','Pangilinan','Navarro',NULL);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
