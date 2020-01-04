-- MySQL dump 10.13  Distrib 5.7.27, for Linux (x86_64)
--
-- Host: 127.0.0.1    Database: paper
-- ------------------------------------------------------
-- Server version	5.5.5-10.4.10-MariaDB

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
-- Table structure for table `authors`
--

DROP TABLE IF EXISTS `authors`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `authors` (
  `author_id` varchar(10) NOT NULL,
  `author_name` text NOT NULL,
  `author_designation` text NOT NULL,
  `author_organisation` text NOT NULL,
  `author_email` varchar(30) NOT NULL,
  `author_mobile` bigint(10) NOT NULL,
  `submission_id` varchar(10) NOT NULL,
  PRIMARY KEY (`author_id`),
  UNIQUE KEY `author_id` (`author_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `authors`
--

LOCK TABLES `authors` WRITE;
/*!40000 ALTER TABLE `authors` DISABLE KEYS */;
INSERT INTO `authors` VALUES ('5e10384562','Garvit Solanki','','cdasv','dsdg@dfs.com',8956231478,'5e10384562'),('5e10384570','','','cdasv','dsdg@dfs.com',8956231478,'5e10384562');
/*!40000 ALTER TABLE `authors` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `city`
--

DROP TABLE IF EXISTS `city`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `city` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `state_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `state_id` (`state_id`),
  CONSTRAINT `city_ibfk_1` FOREIGN KEY (`state_id`) REFERENCES `states` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=76 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `city`
--

LOCK TABLES `city` WRITE;
/*!40000 ALTER TABLE `city` DISABLE KEYS */;
INSERT INTO `city` VALUES (1,'Diadema',1),(2,'Mauá',1),(3,'Rio Grande da Serra',1),(4,'Angra dos Reis',2),(5,'Barra Mansa',2),(6,'Belford Roxo',2),(7,'Cabo Frio',2),(8,'Aquiraz',3),(9,'Canindé',3),(10,'Caucaia',3),(11,'Crato',3),(12,'Blumenau',4),(13,'Chapecó',4),(14,'Criciúma',4),(15,'Lages',4),(16,'Aracruz',5),(17,'Cariacica',5),(18,'Colatina',5),(19,'Linhares',5),(20,'Guangzhou',6),(21,'Shanghai',6),(22,'Chongqing',6),(23,'Beijing',6),(24,'Baoding',7),(25,'Qinhuangdao',7),(26,'Tangshan',8),(27,'Sanhe',8),(28,'Paris',11),(29,'Poissy',11),(30,'Torbes',12),(31,'Rodrez',12),(32,'Auger-Saint-Vincent',13),(33,'Aumatre',13),(34,'Belfort',14),(35,'Dole',14),(36,'Colmar',15),(37,'Obernai',15),(38,'Gurugram',16),(39,'Panipat',16),(40,'Rewari',16),(41,'Chandigarh',16),(42,'Tirupati',17),(43,'Vijayvada',17),(44,'Elluru',17),(45,'Nellore',17),(46,'New Delhi',18),(47,'Faridabad',18),(48,'Chennai',19),(49,'Madurai',19),(50,'Coimbatore',19),(51,'Salem',19),(52,'Ballia',20),(53,'Varanasi',20),(54,'Lucknow',20),(55,'Kanpur',20),(56,'Los Angeles',21),(57,'San Francisco',21),(58,'San Diego',21),(59,'Oakland',21),(60,'lowa city',22),(61,'Ames',22),(62,'Waterloo',22),(63,'Mason city',22),(64,'New york city',23),(65,'Buffalo',23),(66,'Albany',23),(67,'Yonkers',23),(68,'Trenton',24),(69,'Princeton',24),(70,'Atlantic city',24),(71,'Paterson',24),(72,'Boston',25),(73,'Cambridge',25),(74,'Springfield',25),(75,'Lowell',25);
/*!40000 ALTER TABLE `city` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `country`
--

DROP TABLE IF EXISTS `country`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `country` (
  `id` int(11) NOT NULL,
  `country_name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `country`
--

LOCK TABLES `country` WRITE;
/*!40000 ALTER TABLE `country` DISABLE KEYS */;
INSERT INTO `country` VALUES (1,'Brazil'),(2,'China'),(3,'France'),(4,'India'),(5,'USA');
/*!40000 ALTER TABLE `country` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `researcher_info`
--

DROP TABLE IF EXISTS `researcher_info`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `researcher_info` (
  `researcher_id` varchar(10) NOT NULL,
  `r_name` text NOT NULL,
  `designation` text NOT NULL,
  `qualification` varchar(50) NOT NULL,
  `organisation` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` bigint(10) NOT NULL,
  `alt_email` varchar(20) NOT NULL,
  `alt_mobile` bigint(10) NOT NULL,
  `r_address` varchar(100) NOT NULL,
  `country` text NOT NULL,
  `r_state` text NOT NULL,
  `city` text NOT NULL,
  `postalCode` int(5) NOT NULL,
  PRIMARY KEY (`researcher_id`),
  UNIQUE KEY `researcher_id` (`researcher_id`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `mobile` (`mobile`),
  UNIQUE KEY `alt_email` (`alt_email`),
  UNIQUE KEY `alt_mobile` (`alt_mobile`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `researcher_info`
--

LOCK TABLES `researcher_info` WRITE;
/*!40000 ALTER TABLE `researcher_info` DISABLE KEYS */;
/*!40000 ALTER TABLE `researcher_info` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `states`
--

DROP TABLE IF EXISTS `states`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `states` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `country_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `country_id` (`country_id`),
  CONSTRAINT `states_ibfk_1` FOREIGN KEY (`country_id`) REFERENCES `country` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `states`
--

LOCK TABLES `states` WRITE;
/*!40000 ALTER TABLE `states` DISABLE KEYS */;
INSERT INTO `states` VALUES (1,'Sao Paulo',1),(2,'Rio de Janeiro',1),(3,'Ceara',1),(4,'Santa Catarina',1),(5,'Espirito Santo',1),(6,'Beijing',2),(7,'Hebei',2),(8,'Jiangsu',2),(9,'Guangdong',2),(10,'Guangdong',2),(11,'Ile-de-France',3),(12,'Midi-Pyrenees',3),(13,'Picardie',3),(14,'Franche-Comte',3),(15,'Alsace',3),(16,'Haryana',4),(17,'Andhra Pradesh',4),(18,'Delhi',4),(19,'Tamil Nadu',4),(20,'Uttar Pradesh',4),(21,'California',5),(22,'Iowa',5),(23,'New York',5),(24,'New Jersey',5),(25,'Massachusetts',5);
/*!40000 ALTER TABLE `states` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `submissions`
--

DROP TABLE IF EXISTS `submissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `submissions` (
  `submission_id` varchar(10) NOT NULL,
  `researcher_id` varchar(10) NOT NULL,
  `title` text NOT NULL,
  `no_of_pages` int(100) NOT NULL,
  `No_of_authors` int(15) NOT NULL,
  `submission_track` text NOT NULL,
  `submission_assets` text NOT NULL,
  UNIQUE KEY `submission_id` (`submission_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `submissions`
--

LOCK TABLES `submissions` WRITE;
/*!40000 ALTER TABLE `submissions` DISABLE KEYS */;
/*!40000 ALTER TABLE `submissions` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-01-04 14:45:43
