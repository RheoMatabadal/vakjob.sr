-- MySQL dump 10.13  Distrib 5.7.21, for Linux (x86_64)
--
-- Host: localhost    Database: new_vakjob
-- ------------------------------------------------------
-- Server version	5.5.5-10.1.31-MariaDB

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
-- Table structure for table `admins`
--

DROP TABLE IF EXISTS `admins`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admins` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(45) NOT NULL,
  `wachtwoord` varchar(50) NOT NULL,
  `user_level` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admins`
--
-- ORDER BY:  `id`

LOCK TABLES `admins` WRITE;
/*!40000 ALTER TABLE `admins` DISABLE KEYS */;
INSERT INTO `admins` VALUES (1,'timothy','timmy1420',1),(2,'rheo','rheo',1);
/*!40000 ALTER TABLE `admins` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `announcements`
--

DROP TABLE IF EXISTS `announcements`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `announcements` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `admin_id` int(11) NOT NULL,
  `topic` varchar(45) NOT NULL,
  `description` varchar(512) NOT NULL,
  `img` text NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `id` (`id`,`admin_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `announcements`
--
-- ORDER BY:  `id`

LOCK TABLES `announcements` WRITE;
/*!40000 ALTER TABLE `announcements` DISABLE KEYS */;
INSERT INTO `announcements` VALUES (1,0,'Test','Test 1','','2018-02-07 08:07:15','2018-02-07 08:07:15'),(2,0,'Test','Test 2','','2018-02-07 08:07:15','2018-02-07 08:07:15'),(3,0,'Test','Test 3','','2018-02-07 08:07:15','2018-02-07 08:07:15'),(4,0,'Test','Test 4','','2018-02-07 08:07:15','2018-02-07 08:07:15'),(6,0,'Test','Test 5','','2018-02-07 08:07:15','2018-02-07 08:07:15');
/*!40000 ALTER TABLE `announcements` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `availability`
--

DROP TABLE IF EXISTS `availability`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `availability` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(45) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`,`type`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `availability`
--
-- ORDER BY:  `id`

LOCK TABLES `availability` WRITE;
/*!40000 ALTER TABLE `availability` DISABLE KEYS */;
/*!40000 ALTER TABLE `availability` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `employers`
--

DROP TABLE IF EXISTS `employers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `employers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `gebruikersnaam` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `bedrijfsnaam` varchar(45) NOT NULL,
  `adres` varchar(45) NOT NULL,
  `wachtwoord` varchar(50) NOT NULL,
  `img_path` text NOT NULL,
  `img_name` text NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `employers`
--
-- ORDER BY:  `id`

LOCK TABLES `employers` WRITE;
/*!40000 ALTER TABLE `employers` DISABLE KEYS */;
INSERT INTO `employers` VALUES (1,'tim','company@gmail.com','','','tim','','','2018-02-13 13:57:18','2018-02-13 13:57:18'),(2,'test','test@test','test','test','test','','','2018-02-13 15:22:08','2018-02-13 15:22:08');
/*!40000 ALTER TABLE `employers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `messages`
--

DROP TABLE IF EXISTS `messages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `messages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `user_type` varchar(15) NOT NULL,
  `naam` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `onderwerp` varchar(45) NOT NULL,
  `bericht` varchar(512) NOT NULL,
  `datum` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `messages`
--
-- ORDER BY:  `id`

LOCK TABLES `messages` WRITE;
/*!40000 ALTER TABLE `messages` DISABLE KEYS */;
INSERT INTO `messages` VALUES (2,0,'','Timothy','timothy@email.com','Test','Dit is een test','2018-02-11'),(3,0,'','Rheo','rheo@email.com','Test','Dit is een test 2','2018-02-11'),(4,0,'','','test@email','Een bericht','DIt is een test','2018-02-11');
/*!40000 ALTER TABLE `messages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `students`
--

DROP TABLE IF EXISTS `students`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `students` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `gebruikersnaam` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `school` varchar(45) NOT NULL,
  `adres` varchar(45) NOT NULL,
  `wachtwoord` varchar(50) NOT NULL,
  `geboorte_datum` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `students`
--
-- ORDER BY:  `id`

LOCK TABLES `students` WRITE;
/*!40000 ALTER TABLE `students` DISABLE KEYS */;
INSERT INTO `students` VALUES (1,'gebruikersnaam','','','','','2018-02-07 08:42:20','2018-02-07 08:42:20','2018-02-07 08:42:20'),(2,'test','','','','','2018-02-07 08:48:34','2018-02-07 08:48:34','2018-02-07 08:48:34'),(3,'test','','','','','2018-02-07 08:51:54','2018-02-07 08:51:54','2018-02-07 08:51:54'),(4,'Test','test@dfdf','NATIN','','','2018-02-07 08:52:13','2018-02-07 08:52:13','2018-02-07 08:52:13'),(5,'Test','test@dfdf','NATIN','Ergens','','2018-02-07 08:52:33','2018-02-07 08:52:33','2018-02-07 08:52:33'),(6,'Test','test@dfdf','NATIN','Ergens','test','2018-02-07 08:52:47','2018-02-07 08:52:47','2018-02-07 08:52:47'),(7,'tim','tim@gmail.com','NATIN','Eergens','12345','2018-02-13 12:56:36','2018-02-07 14:32:58','2018-02-07 14:32:58'),(8,'test','test@test','test','test','test','2018-02-13 15:19:41','2018-02-13 15:19:41','2018-02-13 15:19:41'),(9,'test','test@test','','test','test','2018-02-13 15:20:15','2018-02-13 15:20:15','2018-02-13 15:20:15'),(10,'test','test@test','te','test','test','2018-02-13 15:20:52','2018-02-13 15:20:52','2018-02-13 15:20:52');
/*!40000 ALTER TABLE `students` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `vacatures`
--

DROP TABLE IF EXISTS `vacatures`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `vacatures` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `employer_id` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `views` varchar(45) NOT NULL,
  `begin_time` timestamp NULL DEFAULT NULL,
  `end_time` timestamp NULL DEFAULT NULL,
  `location` varchar(45) NOT NULL,
  `latitude` varchar(20) NOT NULL,
  `longtitude` varchar(20) NOT NULL,
  `status` varchar(10) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `id` (`id`,`employer_id`,`name`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `vacatures`
--
-- ORDER BY:  `id`

LOCK TABLES `vacatures` WRITE;
/*!40000 ALTER TABLE `vacatures` DISABLE KEYS */;
INSERT INTO `vacatures` VALUES (1,0,'Test','This is a test','','2018-02-17 19:32:02','2018-02-17 19:32:02','','','','','0000-00-00 00:00:00','2018-02-17 19:31:36');
/*!40000 ALTER TABLE `vacatures` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'new_vakjob'
--

--
-- Dumping routines for database 'new_vakjob'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-02-17 16:56:50
