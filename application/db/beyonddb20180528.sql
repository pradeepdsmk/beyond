CREATE DATABASE  IF NOT EXISTS `beyonddb` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `beyonddb`;
-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: beyonddb
-- ------------------------------------------------------
-- Server version	5.5.5-10.1.32-MariaDB

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
-- Table structure for table `contacts`
--

DROP TABLE IF EXISTS `contacts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contacts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `requirement` varchar(45) NOT NULL,
  `created_on` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contacts`
--

LOCK TABLES `contacts` WRITE;
/*!40000 ALTER TABLE `contacts` DISABLE KEYS */;
INSERT INTO `contacts` VALUES (1,'fdsfadfds','jfkldsjflda@lkjfklsd.flls','fdsfadfds','webdev','2018-05-26 10:49:51'),(2,'my name','myemail@gmail.com','my name','webdev','2018-05-26 10:54:52'),(3,'azu','azu@gmail.com','azu','webdev','2018-05-27 06:34:22'),(4,'hello1','hello1@gmail.com','hello1','webdev','2018-05-27 10:46:46'),(5,'fadf','fsadsfd@sfsa.fdsdas','fadf','dmktg','2018-05-27 10:47:40'),(6,'fhjkdhsafkl','kljfds@lkjfkj.clkl','fhjkdhsafk','dmktg','2018-05-27 10:48:25'),(7,'fsf','kjsjflk@lilsfd.ljlfs','fsf','dmktg','2018-05-27 10:49:38'),(8,'lfsalkflksd','ljlfsj@lkjklsdj.lijfl','lfsalkflks','dmktg','2018-05-27 10:50:24'),(9,'f;lksdllsa','lsfslk@lkjlfs.ilfjdsl','f;lksdllsa','webdev','2018-05-27 10:50:47');
/*!40000 ALTER TABLE `contacts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'beyonddb'
--

--
-- Dumping routines for database 'beyonddb'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-05-28 16:09:49


ALTER TABLE `beyonddb`.`contacts` 
ADD COLUMN `last_updated_on` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP AFTER `created_on`;
