-- MySQL dump 10.13  Distrib 5.5.41, for Linux (x86_64)
--
-- Host: localhost    Database: mas02dm_coursework_blog_2017
-- ------------------------------------------------------
-- Server version	5.5.41

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
-- Dumping data for table `blog_entry`
--

LOCK TABLES `blog_entry` WRITE;
/*!40000 ALTER TABLE `blog_entry` DISABLE KEYS */;
INSERT INTO `blog_entry` VALUES (1,'GCHQ used a link shortener to identify and disrupt activists','GCHQâ€™s JTRIG unit used a link shortener in an attempt to influence online activists at the time of the 2009 Iranian presidential elections and the Arab Spring. GCHQ set up a free link-shortening service called lurl.me (codenamed DEADPOOL), which the agency classed as one of its â€œshaping and honeypotsâ€ tools, and used this to target activists from the Middle East. The same technique was used in an attempt to identify members of Anonymous. An examination of previously-published documents from the Snowden archive allows the likely objectives and methods used in this campaign to be understood, including the limitations of GCHQâ€™s capacity.','2017-02-19 14:17:14',NULL),(2,'AT&T helped the NSA wiretap the United Nations','A collection of newly published documents on the NSAâ€™s Special Source Operations cast light on the relationship between the NSA and its closest corporate partner, AT&T (codenamed FAIRVIEW). The telecommunications company installed surveillance equipment in at least 17 of its internet hubs in US soil and surveilled the internet line serving the United Nations headquarters, as directed by a US FISA court order. AT&Tâ€™s â€œextreme willingness to helpâ€ the NSA means that its cooperation has been more intense than that of its similarly sized competitor, Verizon (codenamed STORMBREW). ','2017-02-19 14:18:24',NULL),(3,'GCHQâ€™s Oman base and the corporate partners behind Tempora','Documents taken from GCHQâ€™s internal GC-Wiki dated 2012 and earlier reveal that the agency has a number of bases in Oman, one of which â€“ Overseas Processing Centre 1 (OPC-1), located at Seeb â€“ taps directly into 9 undersea cables passing through the Strait of Hormuz. The implementation of Tempora relies on two particular corporate partners, BT (codenamed REMEDY) and Vodafone Cable (owners of what was Cable & Wireless, codenamed GERONTIC), who are paid tens of millions of pounds each year by GCHQ to tap their own cables and those of competitors, as well as routing internet data from more than 18 submarine cables coming into different parts of the UK to GCHQâ€™s stations in Cheltenham and Bude via optical networks installed for that specific purpose. One document specifically identifies the Irish connection Hibernia Atlantic, landing at Stockport, and other European connections at Yarmouth, Dover and Brighton as being â€œon coverâ€.','2017-02-19 14:20:08',NULL);
/*!40000 ALTER TABLE `blog_entry` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;



LOCK TABLES `admin` WRITE;
INSERT INTO `admin` VALUES (1,'tiger','tiger');
UNLOCK TABLES;

