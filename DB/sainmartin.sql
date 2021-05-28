/*
SQLyog Ultimate v11.11 (64 bit)
MySQL - 5.5.5-10.4.17-MariaDB : Database - sainmartin
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`sainmartin` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `sainmartin`;

/*Table structure for table `about` */

DROP TABLE IF EXISTS `about`;

CREATE TABLE `about` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `about` */

insert  into `about`(`id`,`title`,`description`,`created_at`,`updated_at`) values (1,'ABOUT US','<p><span style=\"font-family: &quot;Courier New&quot;;\">﻿</span>An Efficient &amp; Versatile AC Bus Service Provider in Bangladesh.\r\nSAINTMARTIN SERVICE Bangladesh - more than 13 years\r\nexperienced AC Bus Company, operating their services towards\r\nMultinational Corporates, UN Bodies, and Ministry of\r\nGovernment also in individual Corporate sectors with utmost\r\nsatisfaction and respite to its clients. SAINTMARTIN SERVICE\r\nmostly engages their services in various development projects and\r\ninternational specialized missions along with general people’s daily\r\ntransportation needs.</p>','2020-09-27 05:42:17','2021-04-27 05:35:53');

/*Table structure for table `admins` */

DROP TABLE IF EXISTS `admins`;

CREATE TABLE `admins` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `photo` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `admins_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `admins` */

insert  into `admins`(`id`,`photo`,`name`,`email`,`email_verified_at`,`password`,`remember_token`,`created_at`,`updated_at`) values (2,'170233082336147572261_3699359233516000_1007704989662585297_n.jpg','Roisul Osama','roisulosama@gmail.com',NULL,'$2y$10$/Cg7G88JbBSdOwtg5sDGLe4Zz1Eq2J9ibycNdp.wPR8HzK1ptgF0K',NULL,'2020-03-06 00:47:57','2021-05-19 17:02:33');

/*Table structure for table `award` */

DROP TABLE IF EXISTS `award`;

CREATE TABLE `award` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `img` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `award` */

insert  into `award`(`id`,`img`,`created_at`,`updated_at`) values (1,'1601271471.png','2020-09-28 05:37:51','2020-09-28 05:37:51'),(2,'1601271478.png','2020-09-28 05:37:58','2020-09-28 05:37:58'),(3,'1601271485.png','2020-09-28 05:38:05','2020-09-28 05:38:05'),(4,'1601271492.png','2020-09-28 05:38:12','2020-09-28 05:38:12'),(5,'1601271499.png','2020-09-28 05:38:19','2020-09-28 05:38:19'),(6,'1601271508.png','2020-09-28 05:38:28','2020-09-28 05:38:28'),(7,'1601271516.png','2020-09-28 05:38:36','2020-09-28 05:38:36'),(8,'1601271524.png','2020-09-28 05:38:44','2020-09-28 05:38:44');

/*Table structure for table `booking` */

DROP TABLE IF EXISTS `booking`;

CREATE TABLE `booking` (
  `booking_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `coach_id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `destination` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fromDate` timestamp NULL DEFAULT NULL,
  `toDate` timestamp NULL DEFAULT NULL,
  `number` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `booking_sts` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`booking_id`)
) ENGINE=InnoDB AUTO_INCREMENT=54 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `booking` */

insert  into `booking`(`booking_id`,`coach_id`,`name`,`email`,`destination`,`address`,`fromDate`,`toDate`,`number`,`message`,`status`,`booking_sts`,`created_at`,`updated_at`) values (51,2,'gad','roisulosama@gmail.com','gfdg','dfg','2021-05-29 00:00:00','2021-05-31 00:00:00','4363463','dja',0,0,'2021-05-27 19:30:38','2021-05-28 08:25:01'),(53,6,'nb,vn','fr@gmail.com','agag','2/3 New Circular Road, Dhaka-1000','2021-06-02 00:00:00','2021-06-12 00:00:00','01712557898','fdkghd',1,0,'2021-05-28 08:24:55','2021-05-28 08:24:55');

/*Table structure for table `brand` */

DROP TABLE IF EXISTS `brand`;

CREATE TABLE `brand` (
  `id` bigint(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=399 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `brand` */

insert  into `brand`(`id`,`name`,`created_at`,`updated_at`) values (384,'Dhaka Bandorban Ac Bus Service----(Saintmartin Travels)','2020-03-11 13:20:38','2020-09-27 07:40:41'),(385,'Dhaka Chittagong AC Bus Service----(Saintmartin Travels)','2020-03-11 13:20:52','2020-09-27 07:40:30'),(386,'Dhaka Chittagong Cox bazar Teknaf Ac Bus service----(Saintmartin Travels)','2020-03-11 13:21:00','2020-09-27 07:40:15'),(387,'Dhaka Chittagong Cox bazar AC Bus service----(Saintmartin Travels)','2020-03-11 13:21:08','2020-09-27 07:40:01'),(388,'Officiale Monthly basic AC Bus Rent---------(Saint martin Service)','2020-03-11 13:21:16','2020-09-27 07:39:43'),(390,'AC buses Rent & Reservation in whole Bangladesh---------(Saint martin Service)','2020-09-27 07:38:38','2020-09-27 07:38:38'),(391,'Dhaka Khagrachori Ac Bus Service----(Saintmartin Travels)','2020-09-27 07:40:52','2020-09-27 07:40:52'),(392,'Dhaka Dorshona Ac Non Ac Bus Service----(Saintmartin Travels)','2020-09-27 07:41:01','2020-09-27 07:41:01'),(393,'Dhaka Khagrachori Ac Bus Service----(Saintmartin Travels)','2020-09-27 07:41:19','2020-09-27 07:41:19'),(394,'Dhaka Dorshona Ac Non Ac Bus Service----(Saintmartin Travels)','2020-09-27 07:41:28','2020-09-27 07:41:28'),(395,'Chittagong Benapole Ac Non Ac Bus Service----(Saintmartin Travels)','2020-09-27 07:41:47','2020-09-27 07:41:47'),(396,'Chittagong Dorshona Ac Non Ac Bus Service----(Saintmartin Travels)','2020-09-27 07:41:58','2020-09-27 07:41:58'),(397,'Chittagong Khulna AC Non Ac Bus service----(Saintmartin Travels)','2020-09-27 07:42:06','2020-09-27 07:42:06'),(398,'Chittagong Satkhira Ac Non Ac Bus Service----(Saintmartin Travels)','2020-09-27 07:42:18','2020-09-27 07:42:18');

/*Table structure for table `client` */

DROP TABLE IF EXISTS `client`;

CREATE TABLE `client` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `client_cat_id` int(11) NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=150 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `client` */

insert  into `client`(`id`,`client_cat_id`,`name`,`created_at`,`updated_at`) values (9,13,'UNDP, Dhaka, Bangladesh','2020-09-28 08:18:42','2020-09-28 08:18:42'),(10,2,'The Acme Laboratories Ltd.','2020-09-28 08:18:59','2020-09-28 08:18:59'),(11,2,'BRAC-Reneta Agro Ltd.','2020-09-28 08:19:17','2020-09-28 08:19:17'),(12,4,'Asset Development','2020-09-28 08:19:43','2020-09-28 08:19:43'),(13,4,'Amin Mohammad Foundation','2020-09-28 08:19:58','2020-09-28 08:19:58'),(14,11,'Bangladesh Public Administration Training Centre (BPATC)','2020-09-28 08:28:56','2020-09-28 08:28:56'),(16,11,'Prime Minister’s Office','2020-09-28 09:21:24','2020-09-28 09:21:24'),(17,11,'Ministry of Women Affairs','2020-09-28 09:21:42','2020-09-28 09:21:42'),(18,11,'National Board of Revenue (NBR)','2020-09-28 09:21:53','2020-09-28 09:21:53'),(19,11,'Arsenic Project, new DOHS','2020-09-28 09:22:13','2020-09-28 09:22:13'),(20,4,'NAVANA Real Estate Ltd.','2020-09-28 09:22:32','2020-09-28 09:22:32'),(21,4,'Urban Design & Development Ltd.','2020-09-28 09:22:44','2020-09-28 09:22:44'),(22,4,'Rupayan Housing Ltd.','2020-09-28 09:23:15','2020-09-28 09:23:15'),(23,2,'Sangenta Bangladesh Limited','2020-09-28 09:24:08','2020-09-28 09:24:08'),(24,2,'Alfa Agro Pharmaceuticals Ltd.','2020-09-28 09:24:24','2020-09-28 09:24:24'),(25,2,'Roshe Bangladesh','2020-09-28 09:24:37','2020-09-28 09:24:37'),(26,13,'Megna Life Insurance','2020-09-28 09:25:07','2020-09-28 09:25:07'),(27,13,'Alico','2020-09-28 09:25:28','2020-09-28 09:25:28'),(28,13,'Fedarel Insurance','2020-09-28 09:25:43','2020-09-28 09:25:43'),(29,13,'Progoti Insurance','2020-09-28 09:25:59','2020-09-28 09:25:59'),(30,12,'ETV Charidike','2020-09-28 09:26:51','2020-09-28 09:26:51'),(31,12,'Daily Ajker Kagoj','2020-09-28 09:27:05','2020-09-28 09:27:05'),(32,12,'Daily Ittefaq','2020-09-28 09:27:15','2020-09-28 09:27:15'),(33,12,'Bangladesh Centre for Development, Journalism and Communication','2020-09-28 09:27:32','2020-09-28 09:27:32'),(34,1,'UNICEF, Dhaka, Bangladesh','2020-09-30 03:54:44','2020-09-30 03:54:44'),(35,1,'UNDP, Dhaka, Bangladesh','2020-09-30 03:54:59','2020-09-30 03:54:59'),(36,1,'UNFPA','2020-09-30 03:55:11','2020-09-30 03:55:11'),(37,1,'UNESCO','2020-09-30 03:55:21','2020-09-30 03:55:21'),(38,1,'UNAIDS','2020-09-30 03:55:33','2020-09-30 03:55:33'),(39,1,'UNIFEM','2020-09-30 03:55:43','2020-09-30 03:55:43'),(40,1,'International Labour Organization (ILO)','2020-09-30 03:55:58','2020-09-30 03:55:58'),(41,1,'Food and Agriculture Organization of the United Nations (FAO)','2020-09-30 03:56:09','2020-09-30 03:56:09'),(42,3,'The Australian High Commission','2020-09-30 03:56:58','2020-09-30 03:56:58'),(43,3,'The Delegation of the European Commission','2020-09-30 03:57:09','2020-09-30 03:57:09'),(44,3,'Embassy of Myanmar','2020-09-30 03:57:19','2020-09-30 03:57:19'),(45,3,'Embassy of China','2020-09-30 03:57:29','2020-09-30 03:57:29'),(46,3,'Indian High Commission','2020-09-30 03:57:41','2020-09-30 03:57:41'),(47,3,'Indian High Commission','2020-09-30 03:57:41','2020-09-30 03:57:41'),(48,3,'Embassy of Saudi','2020-09-30 03:57:51','2020-09-30 03:57:51'),(50,5,'World Bank, Dhaka office','2020-09-30 03:58:39','2020-09-30 03:58:39'),(51,5,'Asian Development Bank (ADB)','2020-09-30 03:59:01','2020-09-30 03:59:01'),(52,5,'The British Council','2020-09-30 03:59:18','2020-09-30 03:59:18'),(53,5,'IOM International Organization for Migration','2020-09-30 03:59:29','2020-09-30 03:59:29'),(54,5,'Save the Children (Denmark)','2020-09-30 03:59:40','2020-09-30 03:59:40'),(55,5,'CIDA Legal Aid Reform Project','2020-09-30 03:59:49','2020-09-30 03:59:49'),(56,5,'Plan International','2020-09-30 03:59:57','2020-09-30 03:59:57'),(57,5,'Daywalka Foundation','2020-09-30 04:00:07','2020-09-30 04:00:07'),(58,5,'Red Burnet','2020-09-30 04:00:16','2020-09-30 04:00:16'),(59,5,'South-South Center, Bangladesh','2020-09-30 04:00:25','2020-09-30 04:00:25'),(60,5,'Action against Trafficking and sexual Exploitation of Children (ATSEC)','2020-09-30 04:00:35','2020-09-30 04:00:35'),(61,5,'ARD, Bangladesh','2020-09-30 04:00:44','2020-09-30 04:00:44'),(62,5,'Family Planning Association of Bangladesh (FPAB)','2020-09-30 04:00:54','2020-09-30 04:00:54'),(63,5,'Family Health International (FHI)','2020-09-30 04:01:03','2020-09-30 04:01:03'),(64,5,'HSBC','2020-09-30 04:01:13','2020-09-30 04:01:13'),(65,7,'CARITAS Bangladesh','2020-09-30 04:01:44','2020-09-30 04:01:44'),(66,7,'Democratic Local Governance Program DLGP, USAID','2020-09-30 04:02:02','2020-09-30 04:02:02'),(67,7,'Ain-O-Shalish Kendro (ASK)','2020-09-30 04:02:14','2020-09-30 04:02:14'),(68,7,'Concerned Women for Family Development (CWFD)','2020-09-30 04:02:27','2020-09-30 04:02:27'),(69,7,'Steps Towards Developments (STD)','2020-09-30 04:02:42','2020-09-30 04:02:42'),(70,7,'Mohila Parishad','2020-09-30 04:02:52','2020-09-30 04:02:52'),(71,7,'Mohila Ainjibi Somity','2020-09-30 04:03:05','2020-09-30 04:03:05'),(72,7,'Karmajibi Nari','2020-09-30 04:03:32','2020-09-30 04:03:32'),(73,7,'Nari Pakkha','2020-09-30 04:03:43','2020-09-30 04:03:43'),(74,7,'Community Development Library (CDL)','2020-09-30 04:03:55','2020-09-30 04:03:55'),(75,7,'Survey Research Group of Bangladesh','2020-09-30 04:04:07','2020-09-30 04:04:07'),(76,7,'Prodipan','2020-09-30 04:04:16','2020-09-30 04:04:16'),(77,7,'Social Initiative Limited','2020-09-30 04:04:27','2020-09-30 04:04:27'),(78,7,'Bangladesh Management and Resources Development Initiative (BMRDI)','2020-09-30 04:04:37','2020-09-30 04:04:37'),(79,7,'Bandshu Social Welfare Society','2020-09-30 04:04:56','2020-09-30 04:04:56'),(80,10,'Grameen Phone','2020-09-30 04:05:54','2020-09-30 04:05:54'),(81,10,'Robi','2020-09-30 04:06:06','2020-09-30 04:06:06'),(82,10,'Banglalink','2020-09-30 04:06:19','2020-09-30 04:06:19'),(83,10,'Citycell','2020-09-30 04:06:33','2020-09-30 04:06:33'),(84,11,'Bangladesh Rice Research Institute','2020-09-30 04:07:52','2020-09-30 04:07:52'),(85,11,'Bangladesh Cricket Board (BCB)','2020-09-30 04:08:39','2020-09-30 04:08:39'),(86,13,'Padma Life Insurance','2020-09-30 04:10:10','2020-09-30 04:10:10'),(87,6,'Aftab Bohumukhi Hatchery Ltd.','2020-09-30 04:11:06','2020-09-30 04:11:06'),(88,6,'TOSHIBA','2020-09-30 04:11:17','2020-09-30 04:11:17'),(89,6,'Envoy Group','2020-09-30 04:11:32','2020-09-30 04:11:32'),(90,6,'United Group','2020-09-30 04:11:44','2020-09-30 04:11:44'),(91,6,'British American Tobacco Ltd.','2020-09-30 04:11:57','2020-09-30 04:11:57'),(92,6,'City bank','2020-09-30 04:12:12','2020-09-30 04:12:12'),(93,6,'Dayeu Bangladesh','2020-09-30 04:12:24','2020-09-30 04:12:24'),(94,6,'Aegis Textile Mills Ltd.','2020-09-30 04:12:34','2020-09-30 04:12:34'),(95,6,'Golden Star','2020-09-30 04:12:45','2020-09-30 04:12:45'),(96,6,'Landmark Bangladesh','2020-09-30 04:12:56','2020-09-30 04:12:56'),(97,6,'Maksons','2020-09-30 04:13:05','2020-09-30 04:13:05'),(98,6,'Eusuf & Associates','2020-09-30 04:13:17','2020-09-30 04:13:17'),(99,6,'Breaking the Silence','2020-09-30 04:13:28','2020-09-30 04:13:28'),(100,6,'Adroit Engineering Ltd.','2020-09-30 04:13:37','2020-09-30 04:13:37'),(101,6,'Zenith Package','2020-09-30 04:13:48','2020-09-30 04:13:48'),(102,6,'International Travel Agency','2020-09-30 04:13:58','2020-09-30 04:13:58'),(103,9,'Acid Survival Foundation','2020-09-30 04:14:47','2020-09-30 04:14:47'),(104,9,'Amin Mohammad Foundation','2020-09-30 04:14:59','2020-09-30 04:14:59'),(105,9,'Manusher Jonno Foundation','2020-09-30 04:15:12','2020-09-30 04:15:12'),(106,15,'Abakash Parjatan Ltd.','2020-09-30 04:16:17','2020-09-30 04:16:17'),(107,15,'Amazing Holidays','2020-09-30 04:16:35','2020-09-30 04:16:35'),(108,15,'Asian Holidays','2020-09-30 04:16:44','2020-09-30 04:16:44'),(109,15,'Bangladesh Eco Tours','2020-09-30 04:17:02','2020-09-30 04:17:02'),(110,15,'Bangladesh Travel Homes Ltd.','2020-09-30 04:17:14','2020-09-30 04:17:14'),(111,15,'Bangladesh Travel Planers Ltd.','2020-09-30 04:17:24','2020-09-30 04:17:24'),(112,15,'Barsa Tourism Ltd.','2020-09-30 04:17:37','2020-09-30 04:17:37'),(113,15,'Blue Marin Holidays','2020-09-30 04:17:54','2020-09-30 04:17:54'),(114,15,'Bright Travels','2020-09-30 04:18:04','2020-09-30 04:18:04'),(115,15,'City Holidays','2020-09-30 04:18:13','2020-09-30 04:18:13'),(116,15,'Classic Tours and Travels','2020-09-30 04:18:22','2020-09-30 04:18:22'),(117,15,'Coral reef tours travels','2020-09-30 04:18:31','2020-09-30 04:18:31'),(118,15,'Crystal Tours & Travels','2020-09-30 04:18:39','2020-09-30 04:18:39'),(119,15,'CTB Limited','2020-09-30 04:18:49','2020-09-30 04:18:49'),(120,15,'Discovery Tours & Logistics','2020-09-30 04:19:01','2020-09-30 04:19:01'),(121,15,'Excursion & Resort BD Ltd.','2020-09-30 04:19:09','2020-09-30 04:19:09'),(122,15,'Explore Cruise BD','2020-09-30 04:19:17','2020-09-30 04:19:17'),(123,15,'Galaxy Holidays Limited','2020-09-30 04:19:26','2020-09-30 04:19:26'),(124,15,'Galaxy Holidays Limited','2020-09-30 04:19:26','2020-09-30 04:19:26'),(125,15,'Green Channel','2020-09-30 04:19:35','2020-09-30 04:19:35'),(126,15,'Green Holidays Tours','2020-09-30 04:19:44','2020-09-30 04:19:44'),(127,15,'Jamuna Resort','2020-09-30 04:19:54','2020-09-30 04:19:54'),(128,15,'Jaba Tours Limiteds','2020-09-30 04:20:07','2020-09-30 04:20:07'),(129,15,'Journey Plus','2020-09-30 04:20:16','2020-09-30 04:20:16'),(130,15,'Keari Tours & Services Ltd.','2020-09-30 04:20:24','2020-09-30 04:20:24'),(131,15,'Maas Travels & Tours Ltd.','2020-09-30 04:20:33','2020-09-30 04:20:33'),(132,15,'Mangrove Tourism','2020-09-30 04:20:43','2020-09-30 04:20:43'),(133,15,'My Tourism','2020-09-30 04:20:51','2020-09-30 04:20:51'),(134,15,'One Travel Planer Ltd.','2020-09-30 04:21:00','2020-09-30 04:21:00'),(135,15,'Ornet Holidays','2020-09-30 04:21:09','2020-09-30 04:21:09'),(136,15,'Petro Aviation','2020-09-30 04:21:18','2020-09-30 04:21:18'),(137,15,'Riverain Tours','2020-09-30 04:21:28','2020-09-30 04:21:28'),(138,15,'Royal Resort','2020-09-30 04:21:48','2020-09-30 04:21:48'),(139,15,'Safari Plus','2020-09-30 04:21:58','2020-09-30 04:21:58'),(140,15,'Speed Holidays','2020-09-30 04:22:07','2020-09-30 04:22:07'),(141,15,'Shemana Pereya Resort Ltd','2020-09-30 04:22:15','2020-09-30 04:22:15'),(142,15,'Silver wave tours ltd','2020-09-30 04:22:25','2020-09-30 04:22:25'),(143,15,'The Bengal Tours Ltd.','2020-09-30 04:22:33','2020-09-30 04:22:33'),(144,15,'The Guide Tours Ltd.','2020-09-30 04:22:41','2020-09-30 04:22:41'),(145,15,'Tiger Tours Limited','2020-09-30 04:22:51','2020-09-30 04:22:51'),(146,15,'Tour Planners Ltd.','2020-09-30 04:23:01','2020-09-30 04:23:01'),(147,15,'The Tiger Trail','2020-09-30 04:23:10','2020-09-30 04:23:10'),(148,15,'Unique Tours & Travels','2020-09-30 04:23:19','2020-09-30 04:23:19'),(149,15,'Walton International','2020-09-30 04:23:28','2020-09-30 04:23:28');

/*Table structure for table `clientcategory` */

DROP TABLE IF EXISTS `clientcategory`;

CREATE TABLE `clientcategory` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `clientcategory` */

insert  into `clientcategory`(`id`,`name`,`created_at`,`updated_at`) values (1,'UN Organizations','2020-09-28 07:11:27','2020-09-28 07:11:27'),(2,'Health/Pharmaceuticals','2020-09-28 07:11:47','2020-09-28 07:11:47'),(3,'Embassy','2020-09-28 07:11:57','2020-09-28 07:11:57'),(4,'Real State','2020-09-28 07:12:07','2020-09-28 07:12:07'),(5,'International Organizations','2020-09-28 07:12:18','2020-09-28 07:12:18'),(6,'Industries & Others','2020-09-28 07:12:28','2020-09-28 07:12:28'),(7,'National NGOs','2020-09-28 07:12:38','2020-09-28 07:12:38'),(9,'Foundation','2020-09-28 07:13:00','2020-09-28 07:13:00'),(10,'Telephone Company','2020-09-28 07:13:12','2020-09-28 07:13:12'),(11,'Government/Semi Govt. Project/organization','2020-09-28 07:13:24','2020-09-28 07:13:24'),(12,'Media Organizations','2020-09-28 07:13:37','2020-09-28 07:13:37'),(13,'Insurance','2020-09-28 07:13:49','2020-09-28 07:13:49'),(15,'Tour Operator','2020-09-30 03:52:58','2020-09-30 03:52:58');

/*Table structure for table `clientslider` */

DROP TABLE IF EXISTS `clientslider`;

CREATE TABLE `clientslider` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `img` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `clientslider` */

insert  into `clientslider`(`id`,`img`,`created_at`,`updated_at`) values (1,'1601378036.png','2020-09-29 11:13:56','2020-09-29 11:13:56'),(2,'1601378150.png','2020-09-29 11:15:50','2020-09-29 11:15:50'),(3,'1601378157.png','2020-09-29 11:15:57','2020-09-29 11:15:57'),(4,'1601378167.png','2020-09-29 11:16:07','2020-09-29 11:16:07'),(5,'1601378174.png','2020-09-29 11:16:14','2020-09-29 11:16:14'),(6,'1601378184.png','2020-09-29 11:16:24','2020-09-29 11:16:24'),(7,'1601378197.png','2020-09-29 11:16:37','2020-09-29 11:16:37'),(8,'1601378205.png','2020-09-29 11:16:45','2020-09-29 11:16:45'),(9,'1601378214.png','2020-09-29 11:16:54','2020-09-29 11:16:54'),(10,'1601378225.png','2020-09-29 11:17:05','2020-09-29 11:17:05'),(11,'1601378236.png','2020-09-29 11:17:16','2020-09-29 11:17:16'),(12,'1601378245.png','2020-09-29 11:17:25','2020-09-29 11:17:25'),(13,'1601378252.png','2020-09-29 11:17:32','2020-09-29 11:17:32'),(14,'1601378259.png','2020-09-29 11:17:39','2020-09-29 11:17:39');

/*Table structure for table `coach` */

DROP TABLE IF EXISTS `coach`;

CREATE TABLE `coach` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) DEFAULT 0,
  `fromDate` date DEFAULT NULL,
  `toDate` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `coach` */

insert  into `coach`(`id`,`name`,`img`,`status`,`fromDate`,`toDate`,`created_at`,`updated_at`) values (1,'36 seater economy AC Bus','1601269800.png',1,'2021-05-28','2021-05-31','2020-09-28 05:08:37','2021-05-26 14:16:17'),(2,'28 seater Business Class AC Bus','1601269773.png',0,'0000-00-00','0000-00-00','2020-09-28 05:09:33','2021-05-27 20:01:43'),(5,'40 seater economy non AC Bus','1601269856.png',0,'0000-00-00','0000-00-00','2020-09-28 05:10:56','2021-05-25 17:42:28'),(6,'30 Beds (sleeper) Luxuries AC Bus','1601269876.png',1,'2021-06-02','2021-06-12','2020-09-28 05:11:16','2021-05-28 08:24:55'),(7,'test','1621960566.png',0,'0000-00-00','0000-00-00','2021-05-25 16:36:06','2021-05-25 21:31:50');

/*Table structure for table `destination` */

DROP TABLE IF EXISTS `destination`;

CREATE TABLE `destination` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `destination` */

insert  into `destination`(`id`,`name`,`img`,`created_at`,`updated_at`) values (1,'Dhaka','1601198235.png','2020-09-27 09:17:15','2020-09-27 09:17:15'),(2,'Chittagong','1601198365.png','2020-09-27 09:19:25','2020-09-27 09:19:25'),(3,'CoxesBazar','1601216975.png','2020-09-27 14:29:35','2020-09-27 14:29:35'),(7,'Khulna','1601267114.png','2020-09-28 04:24:08','2020-09-28 04:25:14'),(8,'Bandarban','1601267171.png','2020-09-28 04:26:11','2020-09-28 04:26:11'),(9,'Khagrachari','1601267238.png','2020-09-28 04:27:18','2020-09-28 04:27:18');

/*Table structure for table `gallery` */

DROP TABLE IF EXISTS `gallery`;

CREATE TABLE `gallery` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `img` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `gallery` */

insert  into `gallery`(`id`,`img`,`created_at`,`updated_at`) values (1,'1601274691.png','2020-09-28 06:31:31','2020-09-28 06:31:31'),(2,'1601274700.png','2020-09-28 06:31:40','2020-09-28 06:31:40'),(3,'1601274708.png','2020-09-28 06:31:48','2020-09-28 06:31:48'),(4,'1601274719.png','2020-09-28 06:31:59','2020-09-28 06:31:59'),(5,'1601274726.png','2020-09-28 06:32:06','2020-09-28 06:32:06'),(6,'1601274733.png','2020-09-28 06:32:13','2020-09-28 06:32:13'),(7,'1601274818.png','2020-09-28 06:33:38','2020-09-28 06:33:38'),(8,'1601274843.png','2020-09-28 06:34:03','2020-09-28 06:34:03');

/*Table structure for table `generalsetting` */

DROP TABLE IF EXISTS `generalsetting`;

CREATE TABLE `generalsetting` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `googlePlus` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tweeter` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtubeVideoLink` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `buyTicketLinkBkash` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `buyTicketLinkBus` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `memberOfLink` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `footerBottomText` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `emergenctHelpService` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `forAcBusRent` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `information` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `headerBackgrounColor` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `menuBackgrounColor` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `footerBackgroundColor` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dashboardHeaderColor` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dashboardHeaderLogoColor` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dashboardSidebarColor` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `favicon` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phoneCallLogo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `buyTicketBkashLogo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `buyTicketBusLogo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `memberOfLogo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `generalsetting` */

insert  into `generalsetting`(`id`,`name`,`mobile`,`email`,`address`,`facebook`,`googlePlus`,`tweeter`,`instagram`,`youtube`,`youtubeVideoLink`,`buyTicketLinkBkash`,`buyTicketLinkBus`,`memberOfLink`,`footerBottomText`,`emergenctHelpService`,`forAcBusRent`,`information`,`headerBackgrounColor`,`menuBackgrounColor`,`footerBackgroundColor`,`dashboardHeaderColor`,`dashboardHeaderLogoColor`,`dashboardSidebarColor`,`logo`,`favicon`,`phoneCallLogo`,`buyTicketBkashLogo`,`buyTicketBusLogo`,`memberOfLogo`,`created_at`,`updated_at`) values (4,'Sainmartin service','01713869303','royes1224@gmail.com','2/3 New Circular Road, Dhaka-1000','https://www.facebook.com/usama1224/','https://www.google.com/','https://twitter.com/','https://www.instagram.com/?hl=en','http://youtube.com/','https://www.youtube.com/embed/ZnhRT8cX-DI','https://www.bkash.com/','http://busbd.com.bd/','https://www.toab.org/','<p><span style=\"color: rgb(153, 153, 153); font-family: &quot;Helvetica&quot;; font-size: 18px; text-align: center; background-color: rgb(0, 0, 0);\">Copyright © 2021 </span><a href=\"http://localhost/saintmrtn/public/#\" style=\"margin: 0px; padding: 0px; outline: none; background-color: rgb(0, 0, 0); color: rgb(153, 153, 153); font-size: 18px; font-weight: 600; font-family: &quot;Barlow Condensed&quot;, sans-serif; text-align: center;\"><span style=\"font-family: &quot;Helvetica&quot;;\">Saintmartin Service.</span></a><span style=\"color: rgb(153, 153, 153); font-family: &quot;Helvetica&quot;; font-size: 18px; text-align: center; background-color: rgb(0, 0, 0);\">&nbsp;All Right Reserved.</span></p>','01712 557898 or,&nbsp; 01911&nbsp; 431655<span style=\"background-color: rgb(0, 255, 0);\"></span><br>','01712 557898 or,&nbsp; 01911&nbsp; 431655','01712 557898 or,&nbsp; 01911&nbsp; 431655','#ffffff','#44c76a','#171717','#007065','#fafafa','#007013','164534065828logo.png','065842favicon.ico','065857call.png','070727bkash.png','070727bus.png','070727m-1.png','2020-09-29 06:39:47','2021-05-28 08:16:18');

/*Table structure for table `migrations` */

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `migrations` */

insert  into `migrations`(`id`,`migration`,`batch`) values (6,'2014_10_12_000000_create_users_table',3),(7,'2014_10_12_100000_create_password_resets_table',3),(8,'2019_08_19_000000_create_failed_jobs_table',3),(9,'2020_01_16_073354_create_admins_table',3),(20,'2020_03_05_133830_create_brand_table',12),(21,'2020_03_05_134643_create_models_table',13),(22,'2020_03_05_135434_create_items_table',14),(23,'2020_02_26_044543_create_general_settings_table',15),(24,'2020_02_26_110224_create_packages_table',15),(25,'2020_09_23_052140_create_slider_table',15),(26,'2020_09_23_065320_create_rent_table',16),(27,'2020_09_26_043742_create_welcomemessage_table',17),(28,'2020_09_27_052918_create_about_table',18),(29,'2020_09_27_065913_create_service_table',19),(30,'2020_09_27_091217_create_destination_table',20),(31,'2020_09_27_103025_create_coach_table',21),(32,'2020_09_27_111833_create_award_table',22),(33,'2020_09_27_112127_create_gallery_table',23),(34,'2020_09_27_112427_create_contact_table',24),(35,'2020_09_28_070156_create_clientcategory_table',25),(36,'2020_09_28_080437_create_client_table',26),(37,'2020_09_29_055625_create_generalsetting_table',27),(38,'2020_09_29_105441_create_clientslider_table',28),(39,'2020_09_30_134718_create_ourprofile_table',29),(40,'2021_05_06_142716_create_booking_table',30);

/*Table structure for table `ourprofile` */

DROP TABLE IF EXISTS `ourprofile`;

CREATE TABLE `ourprofile` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `profile` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `ourprofile` */

insert  into `ourprofile`(`id`,`profile`,`created_at`,`updated_at`) values (1,'071410my pdf.pdf','2020-09-30 14:27:04','2021-04-27 20:14:10');

/*Table structure for table `password_resets` */

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `password_resets` */

/*Table structure for table `rent` */

DROP TABLE IF EXISTS `rent`;

CREATE TABLE `rent` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `rent` */

insert  into `rent`(`id`,`title`,`img`,`publication_status`,`created_at`,`updated_at`) values (2,'Hyundai','1600844989.png',1,'2020-09-23 07:09:49','2020-10-01 03:40:07'),(3,'40 Set AC Bus','1600845011.png',1,'2020-09-23 07:10:11','2020-09-23 07:10:11'),(8,'Sainmartin Ac Bus','1601523970.png',1,'2020-09-30 06:18:28','2020-10-01 03:46:10'),(10,'Hyundai Bus','1601523905.png',1,'2020-09-30 06:47:04','2020-10-01 03:45:05'),(12,'Non Ac Bus','1601523822.png',1,'2020-09-30 09:34:07','2020-10-01 03:43:42');

/*Table structure for table `service` */

DROP TABLE IF EXISTS `service`;

CREATE TABLE `service` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `service` */

insert  into `service`(`id`,`title`,`img`,`created_at`,`updated_at`) values (1,'OUR SERVICES DETAILS','1601464101.png','2020-09-27 08:23:50','2020-09-30 11:08:21');

/*Table structure for table `slider` */

DROP TABLE IF EXISTS `slider`;

CREATE TABLE `slider` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `img` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `slider` */

insert  into `slider`(`id`,`img`,`publication_status`,`created_at`,`updated_at`) values (30,'1601479480.png',1,'2020-09-30 15:24:40','2020-09-30 15:24:40'),(31,'1601479490.png',1,'2020-09-30 15:24:50','2020-09-30 15:24:50'),(32,'1601479498.png',1,'2020-09-30 15:24:58','2020-09-30 15:24:58'),(33,'1601479506.png',1,'2020-09-30 15:25:06','2020-09-30 15:25:06'),(34,'1601479514.png',1,'2020-09-30 15:25:14','2020-09-30 15:25:14');

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `users` */

insert  into `users`(`id`,`name`,`email`,`email_verified_at`,`password`,`remember_token`,`created_at`,`updated_at`) values (1,'Md. Fazley Rabbi','fazleyrabbicse@gmail.com',NULL,'$2y$10$cFjH50/dZ6We7FKwjzB8Jur6erhKyawKMDN3ILGYtjV261FO104fu',NULL,'2020-01-20 06:43:51','2020-01-20 06:43:51');

/*Table structure for table `welcomemessage` */

DROP TABLE IF EXISTS `welcomemessage`;

CREATE TABLE `welcomemessage` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `designation` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `welcomemessage` */

insert  into `welcomemessage`(`id`,`title`,`name`,`description`,`designation`,`contact`,`img`,`created_at`,`updated_at`) values (8,'Welcome To Saintmartin Service','Roysul islam','Welcome to the wonderful scenic beauties in Cox\'s Bazar, St. Martin Island, Himchori and Chera Island. Whether it is the longest sandy beach in the world, or a tropical coral paradise, St. Martin service gives you the absolute freedom to chose from its wide variety of tours designed just to cater to you. Emmerse in a hassle free all inclusive (excluding food) wonder tour where we take all the responsibility. Browse through the site and have a look at our offers.','Proprietor, Saintmartin Service','01712557898','1619513345.jpg','2020-09-26 06:47:20','2021-04-27 21:49:05');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
