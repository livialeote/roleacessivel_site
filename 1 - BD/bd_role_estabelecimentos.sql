-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: bd_role
-- ------------------------------------------------------
-- Server version	5.5.5-10.1.22-MariaDB

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
-- Table structure for table `estabelecimentos`
--

DROP TABLE IF EXISTS `estabelecimentos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `estabelecimentos` (
  `idEstabelecimentos` int(11) NOT NULL,
  `Nome` varchar(45) NOT NULL,
  `Endereco` varchar(45) NOT NULL,
  `Detalhes` varchar(150) NOT NULL,
  `idTipoEstabelecimento` int(11) NOT NULL,
  `idCidade` int(11) DEFAULT NULL,
  PRIMARY KEY (`idEstabelecimentos`),
  UNIQUE KEY `idEstabelecimentos_UNIQUE` (`idEstabelecimentos`),
  KEY `fk_Estabelecimentos_TipoEstabelecimento1_idx` (`idTipoEstabelecimento`),
  CONSTRAINT `fk_Estabelecimentos_TipoEstabelecimento1` FOREIGN KEY (`idTipoEstabelecimento`) REFERENCES `tipoestabelecimento` (`idTipoEstabelecimento`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `estabelecimentos`
--

LOCK TABLES `estabelecimentos` WRITE;
/*!40000 ALTER TABLE `estabelecimentos` DISABLE KEYS */;
INSERT INTO `estabelecimentos` VALUES (4,'Bar da Dete','Rua Ignácio Moreira','Faz frango',1,1),(5,'Bar do Tonho','Av Cruz de Malta','Só tem coca',1,1),(6,'Bar do shdish','Bar do Fábio','4',1,2),(7,'Pelotas','dfd','4',2,1),(8,'Toca do doce','df','4',2,2),(9,'Hotel Atlanta','fd','fdf',3,1),(10,'Hotel do Rio','fdf','fd',3,2),(11,'Parcao','sa','asaas',4,1),(12,'Pracinha','ss','sas',4,2),(13,'Paredao','pp','asas',5,1),(14,'nsei','aaa','aaaa',5,2),(15,'Bom Gosto','aaaaa','aaa',6,1),(16,'Panoramico','a','a',6,2),(17,'Pompeia','p','lss',7,1),(18,'Lebes','lll','ass',7,2);
/*!40000 ALTER TABLE `estabelecimentos` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-08-21 14:51:35
