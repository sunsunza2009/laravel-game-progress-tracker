-- MySQL dump 10.13  Distrib 5.7.25, for Linux (x86_64)
--
-- Host: localhost    Database: laravel
-- ------------------------------------------------------
-- Server version	5.7.25

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
  `name` varchar(100) DEFAULT NULL,
  `game_id` int(11) NOT NULL,
  PRIMARY KEY (`chapter_id`,`game_id`),
  KEY `fk_chapter_Game1_idx` (`game_id`),
  CONSTRAINT `fk_chapter_Game1` FOREIGN KEY (`game_id`) REFERENCES `games` (`game_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=245 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `chapters`
--

LOCK TABLES `chapters` WRITE;
/*!40000 ALTER TABLE `chapters` DISABLE KEYS */;
INSERT INTO `chapters` VALUES (1,'Agean Sea',1),(3,'Gates of Athens',1),(4,'Road to Athens',1),(5,'Athens Town Square',1),(7,'Rooftops of Athens',1),(8,'Temple of the Oracle',1),(9,'Sewers of Athens',1),(10,'Desert of Lost Souls',1),(11,'Pandora\'s Temple',1),(12,'Rings of Pandora',1),(13,'The Challenge of Atlas',1),(14,'The Challenge of Poseidon',1),(15,'The Challenge of Hades',1),(16,'Cliffs of Madness',1),(17,'Architect\'s Tomb',1),(18,'The Path of Hades',1),(19,'Ares',1),(20,'Bioshock',2),(21,'Welcome to Rapture',2),(22,'Medical Pavilion',2),(23,'Neptune\'s Bounty',2),(24,'Smuggler\'s Hideout',2),(25,'Arcadia',2),(26,'Farmer\'s Market',2),(27,'Return to Arcadia',2),(28,'Fort Frolic',2),(29,'Hephaestus',2),(30,'Rapture Control Central',2),(31,'Olympus Heights',2),(32,'Point Prometheus',2),(33,'Proving Ground',2),(34,'Fontaine',2),(35,'The End?',2),(36,'The Lure of Adventure',3),(37,'Infernal Place',3),(38,'The Malaysia Job',3),(39,'A Normal Life',3),(40,'Hector Alcazar',3),(41,'Once a Thief',3),(42,'Lights Out',3),(43,'The Grave of Henry Avery',3),(44,'Those Who Prove Worthy',3),(45,'The Twelve Towers',3),(46,'Hidden in Plain Sight',3),(47,'At Sea',3),(48,'Marooned',3),(49,'Join Me in Paradise',3),(50,'The Thieves of Libertalia',3),(51,'The Brothers Drake',3),(52,'For Better or Worse',3),(53,'New Devon',3),(54,'Avery\'s Descent',3),(55,'No Escape',3),(56,'Brother\'s Keeper',3),(57,'A Thief\'s End',3),(58,'Epilogue',3),(59,'Prologue',4),(60,'Mission 1',4),(61,'Mission 2',4),(62,'Mission 3',4),(63,'Mission 4',4),(64,'Mission 5',4),(65,'Mission 6',4),(66,'Mission 7',4),(67,'Mission 8',4),(68,'Mission 9',4),(69,'Mission 10',4),(70,'Mission 11',4),(71,'Mission 12',4),(72,'Mission 13',4),(73,'Mission 14',4),(74,'Mission 15',4),(75,'Mission 16',4),(76,'Mission 17',4),(77,'Mission 18',4),(78,'Mission 19',4),(79,'Mission 20',4),(80,'Moscow',5),(81,'Winter',5),(82,'The Volga',5),(83,'Spring',5),(84,'The Caspian Sea',5),(85,'Summer',5),(86,'Taiga - main missions',5),(87,'Fall',5),(88,'Dead City',5),(89,'The Basics',6),(90,'King’s Pass',6),(91,'Dirtmouth',6),(92,'Forgotten Crossroads',6),(93,'Greenpath',6),(94,'Fungal Wastes',6),(95,'City of Tears',6),(96,'Royal Waterways',6),(97,'Crystal Peak',6),(98,'Resting Grounds',6),(99,'Ancient Basin',6),(100,'City Tears',6),(101,'Deepnest',6),(102,'Kingdom’s Edge',6),(103,'The Abyss',6),(104,'Fog Canyon',6),(105,'Forgotten Crossroads/Game End',6),(107,'Chapter 1 : Outlaws from the West',7),(108,'Chapter 1 : Enter, Pursued by a Memory',7),(109,'Chapter 1 : Old Friends',7),(110,'Chapter 1 : The Aftermath of Genesis',7),(111,'Chapter 1 : Who the Hell is Leviticus Cornwall',7),(112,'Chapter 1 : Eastward Bound',7),(113,'Chapter 2 : Polite Society, Valentine Style',7),(114,'Chapter 2 : Americans at Rest',7),(115,'Chapter 2 : Paying a Social Call',7),(116,'Chapter 2 : A Quiet Time',7),(117,'Chapter 2 : Good, Honest, Snake Oil',7),(118,'Chapter 2 : Exit Pursued by a Bruised Ego',7),(119,'Chapter 2 : Blessed are the Meek',7),(120,'Chapter 2 : Who is Not without Sin',7),(121,'Chapter 2 : Money Lending and Other Sins',7),(122,'Chapter 2 : The Spines of America',7),(123,'Chapter 2 : The First Shall be Last',7),(124,'Chapter 2 : Pouring Forth Oil',7),(125,'Chapter 2 : A Fisher of Men',7),(126,'Chapter 2 : We Loved Once and True',7),(127,'Chapter 2 : The Sheep and the Goats',7),(128,'Chapter 2 : An American Pastoral Scene',7),(129,'Chapter 2 : A Strange Kindness',7),(130,'Chapter 3 : The New South',7),(131,'Chapter 3 : Further Questions of Female Suffrage',7),(132,'Chapter 3 : American Distillation',7),(133,'Chapter 3 : An Honest Mistake',7),(134,'Chapter 3 : The Course of True Love',7),(135,'Chapter 3 : Preaching Forgiveness as He went',7),(136,'Chapter 3 : Sodom? Back to Gomorrah',7),(137,'Chapter 3 : Advertising, the New American Art',7),(138,'Chapter 3 : Horse Flesh for Dinner',7),(139,'Chapter 3 : Magicians for Sport',7),(140,'Chapter 3 :  The Fine Joys of Tobacco',7),(141,'Chapter 3 : Friends in Very Low Places',7),(142,'Chapter 3 : Blessed are the Peacemakers',7),(143,'Chapter 3 : A Short Walk in a Pretty Town',7),(144,'Chapter 3 : Blood Feuds, Ancient and Modern',7),(145,'Chapter 3 : The Battle of Shady Belle',7),(146,'Chapter 4 : The Joys of Civilization',7),(147,'Chapter 4 : Angelo Bronte, a Man of Honor',7),(148,'Chapter 4 : No, No and Thrice, No',7),(149,'Chapter 4 : The Gilded Cage',7),(150,'Chapter 4 : A Fine Night of Debauchery',7),(151,'Chapter 4 : Horsemen, Apocalypses',7),(152,'Chapter 4 : American Fathers',7),(153,'Chapter 4 : Urban Pleasures',7),(154,'Chapter 4 : Country Pursuits',7),(155,'Chapter 4 : Revenge is a Dish Best Eaten',7),(156,'Chapter 4 : Banking, the Old American Art',7),(157,'Chapter 5 : Welcome to the New World',7),(158,'Chapter 5 : Savagery Unleashed',7),(159,'Chapter 5 : A Kind and Benevolent Despot',7),(160,'Chapter 5 : Hell Hath No Fury',7),(161,'Chapter 5 : Paradise Mercifully Departed',7),(162,'Chapter 5 : Dear Uncle Tacitus',7),(163,'Chapter 5 : Fleeting Joy',7),(164,'Chapter 5 : A Fork in the Road',7),(165,'Chapter 5 : That’s Murfree Country',7),(166,'Chapter 5 : Icarus and Friends',7),(167,'Chapter 6 : Visiting Hours',7),(168,'Chapter 6 : Just a Social Call',7),(169,'Chapter 6 : A Rage Unleashed',7),(170,'Chapter 6 : The Delights of Van Horn',7),(171,'Chapter 6 : Archeology for Beginners',7),(172,'Chapter 6 : The Bridge to Nowhere',7),(173,'Chapter 6 : Honor, Amongst Thieves',7),(174,'Chapter 6 : The Fine Art of Conversation',7),(175,'Chapter 6 : Goodbye, Dear Friend',7),(176,'Chapter 6 : Mrs. Sadie Adler, Widow',7),(177,'Chapter 6 : Favored Sons',7),(178,'Chapter 6 : The King’s Son',7),(179,'Chapter 6 : My Last Boy',7),(180,'Chapter 6 : Our Best Selves',7),(181,'Chapter 6 : Red Dead Redemption',7),(182,'Epilogue Part 1 : The Wheel',7),(183,'Epilogue Part 1 : Simple Pleasures',7),(184,'Epilogue Part 1 : Farming, for Beginners',7),(185,'Epilogue Part 1 : Fatherhood, for Beginners',7),(186,'Epilogue Part 1 : Old Habits',7),(187,'Epilogue Part 1 : Jim Milton Riders, Again?',7),(188,'Epilogue Part 1 : Fatherhood, for Idiots',7),(189,'Epilogue Part 1 : Motherhood',7),(190,'Epilogue Part 1 : Gainful Employment',7),(191,'Epilogue Part 1 : Home of the Gentry?',7),(192,'Epilogue Part 2 : Bar Knuckle Friendships',7),(193,'Epilogue Part 2 : Home Improvement for Beginners',7),(194,'Epilogue Part 2 : An Honest Day’s Labors',7),(195,'Epilogue Part 2 : The Tool Box',7),(196,'Epilogue Part 2 : A New Jerusalem',7),(197,'Epilogue Part 2 : A Quick Favor for an Old Friend',7),(198,'Epilogue Part 2 : Uncles Bad Day',7),(199,'Epilogue Part 2 : A Really Big Bastard',7),(200,'Epilogue Part 2 : Trying Again',7),(201,'Epilogue Part 2 : A New Future Imagined',7),(202,'Epilogue Part 2 : American Venom',7),(203,'Kaer Morhen\r\n',10),(204,'Lilac and Gooseberries\r\n',10),(205,'The Beast of White Orchard\r\n',10),(206,'The Incident at White Orchard\r\n',10),(207,'Imperial Audience\r\n',10),(208,'In Ciri\'s Footsteps\r\n',10),(209,'The Nilfgaard Connection\r\n',10),(210,'Bloody Baron\r\n',10),(211,'Ciri\'s Story: King of the Wolves\r\n',10),(212,'Family Matters\r\n',10),(213,'A Princess in Distress\r\n',10),(214,'Ciri\'s Story: The Race\r\n',10),(215,'Ciri\'s Story: Out of the Shadows\r\n',10),(216,'Hunting a Witch\r\n',10),(217,'Wandering in the Dark\r\n',10),(218,'Ladies of the Wood\r\n',10),(219,'The Whispering Hillock\r\n',10),(220,'Ciri\'s Story: Fleeing the Bog\r\n',10),(221,'Pyres of Novigrad\r\n',10),(222,'Novigrad Dreaming\r\n',10),(223,'Broken Flowers\r\n',10),(224,'Get Junior\r\n',10),(225,'Ciri\'s Story: Visiting Junior\r\n',10),(226,'Count Reuven\'s Treasure\r\n',10),(227,'The Play\'s The Thing\r\n',10),(228,'Poet Under Pressure\r\n',10),(229,'Ciri\'s Story: Breakneck Speed\r\n',10),(230,'Destination: Skellige\r\n',10),(231,'The King is Dead - Long Live The King\r\n',10),(232,'Echoes of the Past\r\n',10),(233,'Missing Persons\r\n',10),(234,'Nameless\r\n',10),(235,'The Calm Before the Storm\r\n',10),(236,'Ugly Baby\r\n',10),(237,'The Isle of Mists\r\n',10),(238,'The Battle of Kaer Morhen\r\n',10),(239,'Blood on the Battlefield\r\n',10),(240,'Bald Mountain\r\n',10),(241,'Final Preparations\r\n',10),(242,'Battle Preparations\r\n',10),(243,'On Thin Ice\r\n',10),(244,'Tedd Deireadh, The Final Age',10);
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `favorite`
--

LOCK TABLES `favorite` WRITE;
/*!40000 ALTER TABLE `favorite` DISABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `games`
--

LOCK TABLES `games` WRITE;
/*!40000 ALTER TABLE `games` DISABLE KEYS */;
INSERT INTO `games` VALUES (1,'god of war',9,18,'PS2','black nipple!!! \"It is a new beginning for Kratos. Living as a man, outside the shadow of the gods, he seeks solitude in the unfamiliar lands of Norse mythology. With new purpose and his son at his side, Kratos must fight for survival as powerful forces threaten to disrupt the new life he has created...\"','Action,Adventure,Puzzle','santa monica studio','/images/5cd8919a6fb89220px-Gowbox.jpg'),(2,'bioshock',8,18,'PC,PS4','run!!!! It BIG DADDY!!!!!!!! Set in the Objectivist underwater dystopia of Rapture in the \'60\'s, Bioshock is a first-person shooter with the premise of arming and genetically modifying yourself in order to survive against the city\'s resident great minds-turned-maddened anomalies and aid Atlas in his mission to overthrow the city\'s cruel ruler, Andrew Ryan.','RPG,Shooter,Action','2k games','/images/5cd891e3a9a3c220px-BioShock_cover.jpg'),(3,'Uncharted 4',10,12,'PS4','Nate and pirate\'s treasure!!! Several years after his last adventure, retired fortune hunter, Nathan Drake, is forced back into the world of thieves. With the stakes much more personal, Drake embarks on a globe-trotting journey in pursuit of a historical conspiracy behind a fabled pirate treasure. His greatest adventure will test his physical limits, his resolve, and ultimately what he\'s willing to sacrifice to save the ones he loves.','Shooter,Action,Adventure,Puzzle','naughty dog','/images/5cd892337ebc0220px-Uncharted_4_box_artwork.jpg'),(4,'Devil May Cry 5',9,12,'PC,PS4,XBOX One','A brand new entry in the legendary over-the-top action series comes to Xbox One, PlayStation 4, and PC in Spring 2019, complete with its signature blend of high-octane stylized action and otherworldly and original characters the series is known for. Director Hideaki Itsuno and the core team have reunited to create the most over the top, technically advanced, utterly insane action experience of this generation.   Years have passed since the legions of hell have set foot in this world, but now a new demonic invasion has begun, and humanity’s last hope will rest in the hands of three lone demon hunters, each offering a radically different play style. United by fate and a thirst for vengeance, these demon hunters will have to face their demons if they hope to survive.','Action','Capcom','/images/5cdabcccb99295cd9ac9b508d1a2ppkmdjno7ja5w24qeq.jpg'),(5,'Metro Exodus',8,15,'PC,PS4,XBOX One','Metro Exodus is an epic, story-driven first person shooter from 4A Games that blends deadly combat and stealth with exploration and survival horror in one of the most immersive game worlds ever created. Explore the Russian wilderness across vast, non-linear levels and follow a thrilling story-line that spans an entire year through spring, summer and autumn to the depths of nuclear winter. Inspired by the novels of Dmitry Glukhovsky, Metro Exodus continues Artyom’s story in the greatest Metro adventure yet','RPG,Shooter,Action,Adventure','4A Games','/images/5cdabd122e6d05cd9b03b80ba7co1iuj.jpg'),(6,'Hollow Knight',10,9,'PC,PS4,XBOX One,Nintendo Switch','Hollow Knight is a challenging, beautiful action adventure game set in the vast, inter-connected underground kingdom of Hallownest. A 2D action game with an emphasis on skill and exploration, Hollow Knight has you fighting a fearsome host of deadly creatures, avoiding intricate traps and solving ancient mysteries as you make your own way through fungal wastes, forests of bone, and ruined underground cities.','RPG,Adventure','Team Cherry','/images/5cdabd5959ce55cd9b2acb2807llhtucsjtyev2ilhtogq.jpg'),(7,'Red Dead Redemption 2',10,18,'PS4,XBOX One','Developed by the creators of Grand Theft Auto V and Red Dead Redemption, Red Dead Redemption 2 is an epic tale of life in America’s unforgiving heartland. The game\'s vast and atmospheric world will also provide the foundation for a brand new online multiplayer experience.','RPG,Shooter,Action,Adventure','Rockstar Studio','/images/5cdabf7ca914ayfk9f2lbo0r7slytuhra (1).jpg'),(10,'The Witcher 3: Wild Hunt',10,18,'PC,PS4,XBOX One,Nintendo Switch','The world is in chaos. The air is thick with tension and the smoke of burnt villages. The fearsome Empire of Nilfgaard has struck again, ravaging the helpless Northern Kingdoms. The once mighty who tried to use Geralt for their own gain are now gone. In these uncertain times, no one can say what fortune holds in store, who will bring peace to the world and who will cause it only misery. But a force darker and deadlier emerges.','RPG','CD Projekt RED','/images/5cdc975a5c866TheWitcher3BoxArt.png');
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
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `image`
--

LOCK TABLES `image` WRITE;
/*!40000 ALTER TABLE `image` DISABLE KEYS */;
INSERT INTO `image` VALUES (1,'/images/5cdc9a89a76c1133845-games-review-the-witcher-3-wild-hunt-review-image2-lcwkcjplz3.jpg',10),(2,'/images/5cdc9a89c7c48image (1).jpg',10),(3,'/images/5cdc9a89daa57image.jpg',10),(4,'/images/5cdc9a8a22338the-witcher-3-wild-hunt_1.jpg',10),(5,'/images/5cdca8d23815a2783.10a.jpg',1),(6,'/images/5cdca8d254da0gow.jpg',1),(7,'/images/5cdca8e6a6bd539f9e8a167f05023fc4966f1cacd811066f3382a.jpg',2),(8,'/images/5cdca8e6ca1abijGzB.jpg',2),(12,'/images/5cdca91239ee0Uncharted_4_-_E3_2015_screenshot_-_7.0.0.jpg',3),(13,'/images/5cdca9124fa42uncharted-4-leap-mouse-pad-extended-gaming-custom.jpg',3),(14,'/images/5cdca9204cc936cPvyy3yk3cSTCpinJsxre-480-80.jpg',4),(15,'/images/5cdca9206593c2019_03_06_17.44.49_Screenshot.0.png',4),(16,'/images/5cdca9207df12Devil-May-Cry-v-steelbook.jpg',4),(17,'/images/5cdca93949aa1best_of_2019_6_winter.jpg',5),(18,'/images/5cdca93a0a837metroexoduswinter.jpg',5),(19,'/images/5cdca94ae3f5asnbvcpM7FfYVTzyp9oDtRG.jpg',6),(20,'/images/5cdca94b11f0awebsite_mini_0000_mini3.jpg',6),(21,'/images/5cdca95680e981-dutch.png',7),(22,'/images/5cdca95699c8ered_dead_redemption_2_-_publicity_-_h_2018.jpg',7),(23,'/images/5cdca956bd002red-dead-redemption-2-review-29850-1920x1080.jpg',7);
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
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

-- Dump completed on 2019-05-16 10:02:03
