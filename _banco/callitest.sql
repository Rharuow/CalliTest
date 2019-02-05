CREATE DATABASE  IF NOT EXISTS `callitest` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `callitest`;
-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: callitest
-- ------------------------------------------------------
-- Server version	5.5.5-10.1.34-MariaDB

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
-- Table structure for table `animal`
--

DROP TABLE IF EXISTS `animal`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `animal` (
  `animalID` int(11) NOT NULL AUTO_INCREMENT,
  `ani_nome` varchar(30) DEFAULT NULL,
  `ani_codigo` int(11) NOT NULL,
  `ani_sexo` enum('M','F') DEFAULT NULL,
  `ani_nasc` date DEFAULT NULL,
  `ani_gaiola` int(11) DEFAULT NULL,
  `ani_mark` varchar(30) DEFAULT NULL,
  `ani_obs` varchar(60) DEFAULT NULL,
  PRIMARY KEY (`animalID`),
  UNIQUE KEY `ani_codigo` (`ani_codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `animal`
--

LOCK TABLES `animal` WRITE;
/*!40000 ALTER TABLE `animal` DISABLE KEYS */;
/*!40000 ALTER TABLE `animal` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pesquisa`
--

DROP TABLE IF EXISTS `pesquisa`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pesquisa` (
  `pesquisaID` int(11) NOT NULL AUTO_INCREMENT,
  `animalID` int(11) DEFAULT NULL,
  `pesquisadorID` int(11) DEFAULT NULL,
  PRIMARY KEY (`pesquisaID`),
  KEY `animalID` (`animalID`),
  KEY `pesquisadorID` (`pesquisadorID`),
  CONSTRAINT `pesquisa_ibfk_1` FOREIGN KEY (`animalID`) REFERENCES `animal` (`animalID`),
  CONSTRAINT `pesquisa_ibfk_2` FOREIGN KEY (`pesquisadorID`) REFERENCES `pesquisador` (`pesquisadorID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pesquisa`
--

LOCK TABLES `pesquisa` WRITE;
/*!40000 ALTER TABLE `pesquisa` DISABLE KEYS */;
/*!40000 ALTER TABLE `pesquisa` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pesquisador`
--

DROP TABLE IF EXISTS `pesquisador`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pesquisador` (
  `pesquisadorID` int(11) NOT NULL AUTO_INCREMENT,
  `pes_nome` varchar(30) NOT NULL,
  `pes_senha` varchar(30) NOT NULL,
  PRIMARY KEY (`pesquisadorID`),
  UNIQUE KEY `pes_nome` (`pes_nome`),
  UNIQUE KEY `pes_senha` (`pes_senha`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pesquisador`
--

LOCK TABLES `pesquisador` WRITE;
/*!40000 ALTER TABLE `pesquisador` DISABLE KEYS */;
/*!40000 ALTER TABLE `pesquisador` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-09-01 14:05:50
