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
-- Table structure for table `avaliacoes`
--

DROP TABLE IF EXISTS `avaliacoes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `avaliacoes` (
  `idAvaliacoes` int(11) NOT NULL AUTO_INCREMENT,
  `Pontos` varchar(45) NOT NULL,
  `idEstabelecimentos` int(11) NOT NULL,
  `idUsuarios` int(11) NOT NULL,
  `idItensAcessibilidade` int(11) NOT NULL,
  `idQuesito` int(11) NOT NULL,
  `DataHora` datetime NOT NULL,
  `Comentario` varchar(100) NOT NULL,
  PRIMARY KEY (`idAvaliacoes`),
  KEY `fk_Avaliacoes_Estabelecimentos1_idx` (`idEstabelecimentos`),
  KEY `fk_Avaliacoes_Usuarios1_idx` (`idUsuarios`),
  KEY `fk_Avaliacoes_ItensAcessibilidade1_idx` (`idItensAcessibilidade`),
  CONSTRAINT `fk_Avaliacoes_Estabelecimentos1` FOREIGN KEY (`idEstabelecimentos`) REFERENCES `estabelecimentos` (`idEstabelecimentos`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_Avaliacoes_ItensAcessibilidade1` FOREIGN KEY (`idItensAcessibilidade`) REFERENCES `itensacessibilidade` (`idItensAcessibilidade`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_Avaliacoes_Usuarios1` FOREIGN KEY (`idUsuarios`) REFERENCES `usuarios` (`idUsuarios`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `avaliacoes`
--

LOCK TABLES `avaliacoes` WRITE;
/*!40000 ALTER TABLE `avaliacoes` DISABLE KEYS */;
/*!40000 ALTER TABLE `avaliacoes` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-08-21 14:51:36
