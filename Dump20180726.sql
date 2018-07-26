-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: questions
-- ------------------------------------------------------
-- Server version	5.5.5-10.3.2-MariaDB

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
-- Table structure for table `best_employee_o`
--

DROP TABLE IF EXISTS `best_employee_o`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `best_employee_o` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `question_id` int(11) DEFAULT NULL,
  `answer` varchar(50) DEFAULT NULL,
  `correct` int(11) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `best_employee_o`
--

LOCK TABLES `best_employee_o` WRITE;
/*!40000 ALTER TABLE `best_employee_o` DISABLE KEYS */;
INSERT INTO `best_employee_o` VALUES (1,1,'Develop',1),(2,1,'Play games',0),(3,2,'Draugiemgroup',1),(4,2,'Scandiweb',0),(5,2,'Lattelecom',0),(6,3,'Juris',0),(7,3,'Trick question',0),(8,3,'Janis',1),(9,3,'No idea',0),(10,4,'Absolutelly yes',1),(11,4,'No',0),(12,4,'What was the question?',0),(13,4,'Will see',0);
/*!40000 ALTER TABLE `best_employee_o` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `best_employee_q`
--

DROP TABLE IF EXISTS `best_employee_q`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `best_employee_q` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `question` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `best_employee_q`
--

LOCK TABLES `best_employee_q` WRITE;
/*!40000 ALTER TABLE `best_employee_q` DISABLE KEYS */;
INSERT INTO `best_employee_q` VALUES (1,'What do I do?'),(2,'Where do I work?'),(3,'What\'s my name?'),(4,'Will you hire me?');
/*!40000 ALTER TABLE `best_employee_q` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `results`
--

DROP TABLE IF EXISTS `results`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `results` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(50) DEFAULT NULL,
  `score` int(11) NOT NULL DEFAULT 0,
  `test` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `results`
--

LOCK TABLES `results` WRITE;
/*!40000 ALTER TABLE `results` DISABLE KEYS */;
INSERT INTO `results` VALUES (1,'Takescreen',0,'6'),(2,'super',0,'4'),(3,'as',0,'3'),(4,'abc',0,'3'),(5,'juris',3,NULL),(6,'shopping',0,'1'),(7,'juris',3,'1'),(8,'juris',3,'1'),(9,'asdfasd',3,'horses'),(10,'super',0,'horses'),(11,'juris',0,'eggs'),(12,'juris',1,'horses'),(13,'juris',3,'horses'),(14,'super',1,'eggs'),(15,'juris',5,'horses'),(16,'juris',5,'horses'),(17,'super',2,'horses'),(18,'super',0,'horses'),(19,'juris',1,'horses'),(20,'super',0,'eggs'),(21,'abc',2,'eggs'),(22,'Takescreen',1,'horses'),(23,'veikals',1,'horses'),(24,'Takescreen',5,'horses'),(25,'veikals',5,'horses'),(26,'Takescreen',2,'eggs'),(27,'Janis',2,'eggs'),(28,'juris',5,'horses'),(29,'adasd',4,'horses'),(30,'as',2,'eggs'),(31,'adasd',2,'eggs'),(32,'shop',5,'horses'),(33,'juris',4,'horses'),(34,'shopping',4,'best_employee'),(35,'as',2,'best_employee'),(36,'Takescreen',1,'eggs'),(37,'Takescreen',3,'best_employee'),(38,'as',0,'horses'),(39,'Takescreen',5,'horses'),(40,'suns',2,'horses'),(41,'juris',1,'eggs'),(42,'super',2,'best_employee');
/*!40000 ALTER TABLE `results` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `test`
--

DROP TABLE IF EXISTS `test`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `test` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `test`
--

LOCK TABLES `test` WRITE;
/*!40000 ALTER TABLE `test` DISABLE KEYS */;
INSERT INTO `test` VALUES (1,'Best_employee');
/*!40000 ALTER TABLE `test` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'questions'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-07-26 17:41:54
