-- MySQL dump 10.13  Distrib 5.7.26, for Linux (x86_64)
--
-- Host: localhost    Database: laravel
-- ------------------------------------------------------
-- Server version	5.7.26

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Current Database: `laravel`
--

CREATE DATABASE /*!32312 IF NOT EXISTS*/ `laravel` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `laravel`;

--
-- Table structure for table `chapters`
--

DROP TABLE IF EXISTS `chapters`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `chapters` (
  `chapter_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `game_id` int(11) NOT NULL,
  PRIMARY KEY (`chapter_id`,`game_id`),
  KEY `fk_chapter_Game1_idx` (`game_id`),
  CONSTRAINT `fk_chapter_Game1` FOREIGN KEY (`game_id`) REFERENCES `games` (`game_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=59 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `chapters`
--

LOCK TABLES `chapters` WRITE;
/*!40000 ALTER TABLE `chapters` DISABLE KEYS */;
INSERT INTO `chapters` VALUES (1,'Agean Sea',1),(3,'Gates of Athens',1),(4,'Road to Athens',1),(5,'Athens Town Square',1),(7,'Rooftops of Athens',1),(8,'Temple of the Oracle',1),(9,'Sewers of Athens',1),(10,'Desert of Lost Souls',1),(11,'Pandora\'s Temple',1),(12,'Rings of Pandora',1),(13,'The Challenge of Atlas',1),(14,'The Challenge of Poseidon',1),(15,'The Challenge of Hades',1),(16,'Cliffs of Madness',1),(17,'Architect\'s Tomb',1),(18,'The Path of Hades',1),(19,'Ares',1),(20,'Bioshock',2),(21,'Welcome to Rapture',2),(22,'Medical Pavilion',2),(23,'Neptune\'s Bounty',2),(24,'Smuggler\'s Hideout',2),(25,'Arcadia',2),(26,'Farmer\'s Market',2),(27,'Return to Arcadia',2),(28,'Fort Frolic',2),(29,'Hephaestus',2),(30,'Rapture Control Central',2),(31,'Olympus Heights',2),(32,'Point Prometheus',2),(33,'Proving Ground',2),(34,'Fontaine',2),(35,'The End?',2),(36,'The Lure of Adventure',3),(37,'Infernal Place',3),(38,'The Malaysia Job',3),(39,'A Normal Life',3),(40,'Hector Alcazar',3),(41,'Once a Thief',3),(42,'Lights Out',3),(43,'The Grave of Henry Avery',3),(44,'Those Who Prove Worthy',3),(45,'The Twelve Towers',3),(46,'Hidden in Plain Sight',3),(47,'At Sea',3),(48,'Marooned',3),(49,'Join Me in Paradise',3),(50,'The Thieves of Libertalia',3),(51,'The Brothers Drake',3),(52,'For Better or Worse',3),(53,'New Devon',3),(54,'Avery\'s Descent',3),(55,'No Escape',3),(56,'Brother\'s Keeper',3),(57,'A Thief\'s End',3),(58,'Epilogue',3);
/*!40000 ALTER TABLE `chapters` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `favorite`
--

DROP TABLE IF EXISTS `favorite`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `favorite` (
  `fav_id` int(11) NOT NULL AUTO_INCREMENT,
  `player_id` int(11) NOT NULL,
  `game_id` int(11) NOT NULL,
  PRIMARY KEY (`fav_id`,`player_id`,`game_id`),
  KEY `fk_favorite_players1_idx` (`player_id`),
  KEY `fk_favorite_games1_idx` (`game_id`),
  CONSTRAINT `fk_favorite_games1` FOREIGN KEY (`game_id`) REFERENCES `games` (`game_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_favorite_players1` FOREIGN KEY (`player_id`) REFERENCES `players` (`player_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `favorite`
--

LOCK TABLES `favorite` WRITE;
/*!40000 ALTER TABLE `favorite` DISABLE KEYS */;
INSERT INTO `favorite` VALUES (17,6,2);
/*!40000 ALTER TABLE `favorite` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `games`
--

DROP TABLE IF EXISTS `games`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `games` (
  `game_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `rating` float DEFAULT NULL,
  `age_limit` int(11) DEFAULT NULL,
  `platform` varchar(100) DEFAULT NULL,
  `detail` text,
  `genre` varchar(100) DEFAULT NULL,
  `developer` varchar(100) DEFAULT NULL,
  `poster_url` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`game_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `games`
--

LOCK TABLES `games` WRITE;
/*!40000 ALTER TABLE `games` DISABLE KEYS */;
INSERT INTO `games` VALUES (1,'god of war',9,18,'PS2','black nipple!!! \"It is a new beginning for Kratos. Living as a man, outside the shadow of the gods, he seeks solitude in the unfamiliar lands of Norse mythology. With new purpose and his son at his side, Kratos must fight for survival as powerful forces threaten to disrupt the new life he has created...\"','Action,Adventure,Puzzle','santa monica studio','/images/5cd8919a6fb89220px-Gowbox.jpg'),(2,'bioshock',8,18,'PC,PS4','run!!!! It BIG DADDY!!!!!!!! Set in the Objectivist underwater dystopia of Rapture in the \'60\'s, Bioshock is a first-person shooter with the premise of arming and genetically modifying yourself in order to survive against the city\'s resident great minds-turned-maddened anomalies and aid Atlas in his mission to overthrow the city\'s cruel ruler, Andrew Ryan.','RPG,Shooter,Action','2k games','/images/5cd891e3a9a3c220px-BioShock_cover.jpg'),(3,'Uncharted 4',10,12,'PS4','Nate and pirate\'s treasure!!! Several years after his last adventure, retired fortune hunter, Nathan Drake, is forced back into the world of thieves. With the stakes much more personal, Drake embarks on a globe-trotting journey in pursuit of a historical conspiracy behind a fabled pirate treasure. His greatest adventure will test his physical limits, his resolve, and ultimately what he\'s willing to sacrifice to save the ones he loves.','Shooter,Action,Adventure,Puzzle','naughty dog','/images/5cd892337ebc0220px-Uncharted_4_box_artwork.jpg');
/*!40000 ALTER TABLE `games` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `image`
--

DROP TABLE IF EXISTS `image`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `image` (
  `img_id` int(11) NOT NULL AUTO_INCREMENT,
  `url` varchar(100) DEFAULT NULL,
  `game_id` int(11) NOT NULL,
  PRIMARY KEY (`img_id`,`game_id`),
  KEY `fk_image_games1_idx` (`game_id`),
  CONSTRAINT `fk_image_games1` FOREIGN KEY (`game_id`) REFERENCES `games` (`game_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `image`
--

LOCK TABLES `image` WRITE;
/*!40000 ALTER TABLE `image` DISABLE KEYS */;
/*!40000 ALTER TABLE `image` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `players`
--

DROP TABLE IF EXISTS `players`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `players` (
  `player_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `gender` enum('M','F') DEFAULT NULL,
  `birth_date` date DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`player_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `players`
--

LOCK TABLES `players` WRITE;
/*!40000 ALTER TABLE `players` DISABLE KEYS */;
INSERT INTO `players` VALUES (5,'test','F','2019-05-01','test@test.com','2019-05-05 16:06:55','2019-05-05 16:06:55'),(6,'user','M','1997-05-01','user@user.com','2019-05-06 07:35:12','2019-05-06 07:35:12');
/*!40000 ALTER TABLE `players` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `progress`
--

DROP TABLE IF EXISTS `progress`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `progress` (
  `progress_id` int(11) NOT NULL AUTO_INCREMENT,
  `player_id` int(11) NOT NULL,
  `chapter_id` int(11) NOT NULL,
  `game_id` int(11) NOT NULL,
  `comment` varchar(99) DEFAULT NULL,
  `last_play_time` datetime DEFAULT NULL,
  `progress_percent` int(11) DEFAULT NULL,
  PRIMARY KEY (`progress_id`,`player_id`,`chapter_id`,`game_id`),
  KEY `fk_progress_player1_idx` (`player_id`),
  KEY `fk_progress_chapters1_idx` (`chapter_id`,`game_id`),
  CONSTRAINT `fk_progress_chapters1` FOREIGN KEY (`chapter_id`, `game_id`) REFERENCES `chapters` (`chapter_id`, `game_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_progress_player1` FOREIGN KEY (`player_id`) REFERENCES `players` (`player_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `progress`
--

LOCK TABLES `progress` WRITE;
/*!40000 ALTER TABLE `progress` DISABLE KEYS */;
/*!40000 ALTER TABLE `progress` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `type` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'admin','admin@zugetor.com',NULL,'$2y$10$42o2W5P0r3Lmb/UGzbhMdOZL4ebDPy.Mefng6wyKyPbwEmMs65cQ2',NULL,'2019-05-05 14:03:38','2019-05-05 14:03:38',1),(5,'test','test@test.com',NULL,'$2y$10$eUlW3GFEsYdxZMEGnS82IONRHfjEGfNZIIRhvCkpdPn1q3eUIkqq2',NULL,'2019-05-05 16:06:55','2019-05-05 16:06:55',0),(6,'user','user@user.com',NULL,'$2y$10$JfumNVGgyv5P6JIJbx00BeFpggEwmbW4/.T1E.X7Wv04HZO5XrpKa',NULL,'2019-05-06 07:35:11','2019-05-06 07:35:11',0);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-05-14  7:11:02
