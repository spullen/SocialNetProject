-- MySQL dump 10.11
--
-- Host: localhost    Database: friends
-- ------------------------------------------------------
-- Server version	5.0.51a-3ubuntu5.4

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
-- Table structure for table `AdminLog`
--

DROP TABLE IF EXISTS `AdminLog`;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
CREATE TABLE `AdminLog` (
  `id` int(11) NOT NULL auto_increment,
  `userID` int(11) default NULL,
  `remoteAddr` varchar(255) default NULL,
  `requestURI` varchar(255) default NULL,
  `queryString` varchar(255) default NULL,
  `requestMethod` varchar(255) default NULL,
  `referer` varchar(255) default NULL,
  `createdAt` datetime NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
SET character_set_client = @saved_cs_client;

--
-- Dumping data for table `AdminLog`
--

LOCK TABLES `AdminLog` WRITE;
/*!40000 ALTER TABLE `AdminLog` DISABLE KEYS */;
/*!40000 ALTER TABLE `AdminLog` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Friends`
--

DROP TABLE IF EXISTS `Friends`;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
CREATE TABLE `Friends` (
  `userID` int(11) NOT NULL,
  `friendID` int(11) NOT NULL,
  `friendedOn` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
SET character_set_client = @saved_cs_client;

--
-- Dumping data for table `Friends`
--

LOCK TABLES `Friends` WRITE;
/*!40000 ALTER TABLE `Friends` DISABLE KEYS */;
/*!40000 ALTER TABLE `Friends` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `PersonalInfo`
--

DROP TABLE IF EXISTS `PersonalInfo`;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
CREATE TABLE `PersonalInfo` (
  `id` int(11) NOT NULL auto_increment,
  `userID` int(11) NOT NULL,
  `interests` text NOT NULL,
  `music` text NOT NULL,
  `shows` text NOT NULL,
  `movies` text NOT NULL,
  `books` text NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
SET character_set_client = @saved_cs_client;

--
-- Dumping data for table `PersonalInfo`
--

LOCK TABLES `PersonalInfo` WRITE;
/*!40000 ALTER TABLE `PersonalInfo` DISABLE KEYS */;
INSERT INTO `PersonalInfo` VALUES (1,1,'sfsd\ndc\ndf\ndsf','weeewew cxcxz\nsdsfs\n\nfdsfds','reytytu','qwerty','qwerty1\n\n\n\ndfsdf'),(2,2,'','','','','');
/*!40000 ALTER TABLE `PersonalInfo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ProfilePictures`
--

DROP TABLE IF EXISTS `ProfilePictures`;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
CREATE TABLE `ProfilePictures` (
  `id` int(11) NOT NULL auto_increment,
  `userID` int(11) NOT NULL,
  `filename` varchar(255) NOT NULL,
  `uploadedOn` datetime NOT NULL,
  `isCurrent` tinyint(1) NOT NULL default '0',
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
SET character_set_client = @saved_cs_client;

--
-- Dumping data for table `ProfilePictures`
--

LOCK TABLES `ProfilePictures` WRITE;
/*!40000 ALTER TABLE `ProfilePictures` DISABLE KEYS */;
INSERT INTO `ProfilePictures` VALUES (1,1,'1_2009-03-05T12:14:42-05:00.jpg','2009-03-05 12:14:42',1);
/*!40000 ALTER TABLE `ProfilePictures` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Status`
--

DROP TABLE IF EXISTS `Status`;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
CREATE TABLE `Status` (
  `id` int(11) NOT NULL auto_increment,
  `userID` int(11) NOT NULL,
  `message` varchar(255) NOT NULL,
  `createdAt` datetime NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=latin1;
SET character_set_client = @saved_cs_client;

--
-- Dumping data for table `Status`
--

LOCK TABLES `Status` WRITE;
/*!40000 ALTER TABLE `Status` DISABLE KEYS */;
INSERT INTO `Status` VALUES (1,1,'blah','2009-03-26 11:10:58'),(2,1,'fdf','2009-03-26 11:11:41'),(3,1,'sdsd','2009-03-26 11:14:23'),(4,1,'sfdsdf','2009-03-26 11:14:30'),(5,1,'dssdsdsds','2009-03-26 11:14:57'),(6,1,'dsds','2009-03-26 11:17:47'),(7,1,'dsds','2009-03-26 11:18:06'),(8,1,'','2009-03-26 11:25:10'),(9,1,'as','2009-03-26 11:25:16'),(10,1,'sdsds','2009-03-26 11:27:06'),(11,1,'sdsds','2009-03-26 11:27:06'),(12,1,'sdsfdsfsfsfsf','2009-03-26 11:28:08'),(13,1,'fdfdfdfsdfsdfsdf','2009-03-26 11:28:11'),(14,1,'Blah blah blah ','2009-03-26 11:31:27'),(15,1,'balh baljds','2009-03-26 11:31:31'),(16,1,'blah blah blah','2009-03-26 11:31:38'),(17,1,'sdsdsad','2009-03-26 11:31:43'),(18,1,'blah blah blah ','2009-03-26 11:32:21'),(19,1,'blah blah blah','2009-03-26 11:32:47'),(20,1,'blah blah blah','2009-03-26 11:32:47'),(21,1,'blah blah blah','2009-03-26 11:32:49'),(22,1,'Sweet','2009-03-26 11:32:57'),(23,1,'Sweet','2009-03-26 11:32:57'),(24,1,'sdsd','2009-03-26 11:35:47'),(25,1,'sdsd','2009-03-26 11:35:47'),(26,1,'sdsd','2009-03-26 11:42:56'),(27,1,'sdsd','2009-03-26 11:42:56'),(28,1,'sdfdf','2009-03-26 21:13:46'),(29,1,'sdfdf','2009-03-26 21:13:46'),(30,1,'sdfsdfdsf','2009-03-26 21:13:54'),(31,1,'sdfsdfdsf','2009-03-26 21:13:54'),(32,1,'sdsdsdas','2009-03-26 21:21:30'),(33,1,'sdsdsdas','2009-03-26 21:21:30'),(34,1,'sdfdgfdgfsgghdfhdf','2009-03-26 21:22:52'),(35,1,'sdfdgfdgfsgghdfhdf','2009-03-26 21:22:52'),(36,1,'is bored','2009-03-26 21:23:36'),(37,1,'is happy','2009-03-26 21:23:40'),(38,1,'ufsdfdlfdflsdf','2009-03-26 21:23:46'),(39,1,'dsfsdf','2009-03-26 21:27:45'),(40,1,'is happy','2009-03-26 21:27:49'),(41,1,'is making a twitter like thing','2009-03-26 21:28:16');
/*!40000 ALTER TABLE `Status` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Users`
--

DROP TABLE IF EXISTS `Users`;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
CREATE TABLE `Users` (
  `id` int(11) NOT NULL auto_increment,
  `email` varchar(255) NOT NULL,
  `hashedPassword` varchar(255) NOT NULL,
  `isAdmin` tinyint(1) NOT NULL default '0',
  `name` varchar(255) NOT NULL,
  `birthdate` date NOT NULL,
  `hometown` varchar(255) NOT NULL,
  `currentLocation` varchar(255) default NULL,
  `gender` tinyint(1) NOT NULL,
  `createdAt` datetime NOT NULL,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
SET character_set_client = @saved_cs_client;

--
-- Dumping data for table `Users`
--

LOCK TABLES `Users` WRITE;
/*!40000 ALTER TABLE `Users` DISABLE KEYS */;
INSERT INTO `Users` VALUES (1,'s.pullen05@gmail.com','d3ccbe5ec8d6270f0442a0715219f9f1',1,'Scott Pullen','1986-09-22','Boston, MA','Amherst, MA',0,'2009-03-03 21:44:47'),(2,'test@test.com','d3ccbe5ec8d6270f0442a0715219f9f1',0,'sdsadasd','0000-00-00','Boston, MA',NULL,0,'2009-03-24 17:55:06');
/*!40000 ALTER TABLE `Users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2009-03-27  2:03:28
