-- MySQL dump 10.13  Distrib 8.0.18, for Linux (x86_64)
--
-- Host: localhost    Database: delta
-- ------------------------------------------------------
-- Server version	8.0.18

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `filial`
--

DROP TABLE IF EXISTS `filial`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `filial` (
  `codigo` int(11) NOT NULL,
  `apelido` varchar(50) NOT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `filial`
--

LOCK TABLES `filial` WRITE;
/*!40000 ALTER TABLE `filial` DISABLE KEYS */;
INSERT INTO `filial` VALUES (1,'Ananindeua'),(2,'Sao Luis'),(3,'Manaus Ctr'),(4,'Paragominas'),(5,'Itaituba'),(6,'Imperatriz'),(7,'Parauapebas'),(8,'Palmas/To'),(9,'Manaus Agr');
/*!40000 ALTER TABLE `filial` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `produto`
--

DROP TABLE IF EXISTS `produto`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `produto` (
  `id_produto` bigint(20) NOT NULL AUTO_INCREMENT,
  `filial_codigo` int(11) NOT NULL,
  `codigo_produto` varchar(25) NOT NULL,
  `tipo_divergencia` int(11) NOT NULL,
  `qtd` decimal(11,0) NOT NULL,
  `numero_devolucao` varchar(45) CHARACTER SET utf8 DEFAULT NULL,
  `retorno_fabrica` varchar(250) CHARACTER SET utf8 DEFAULT NULL,
  `numero_nota` varchar(20) CHARACTER SET utf8 NOT NULL,
  `status` text CHARACTER SET utf8,
  `devolvido` int(11) NOT NULL,
  `data` date DEFAULT NULL,
  PRIMARY KEY (`id_produto`),
  UNIQUE KEY `codigo_produto` (`codigo_produto`),
  KEY `fkey_produto_idx` (`tipo_divergencia`),
  KEY `fk_produto_filial1_idx` (`filial_codigo`),
  CONSTRAINT `fk_produto_filial1` FOREIGN KEY (`filial_codigo`) REFERENCES `filial` (`codigo`),
  CONSTRAINT `fkey_produto` FOREIGN KEY (`tipo_divergencia`) REFERENCES `tipo_divergencia` (`id_tipo`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `produto`
--

LOCK TABLES `produto` WRITE;
/*!40000 ALTER TABLE `produto` DISABLE KEYS */;
INSERT INTO `produto` VALUES (1,1,'24894511',4,5,NULL,NULL,'258924','',1,'2019-12-31'),(4,5,'24894512',5,5,NULL,NULL,'258934','',0,'2019-12-31'),(5,4,'24894513',6,5,NULL,NULL,'259834','',1,'2019-12-31'),(6,1,'2489458811',4,5,'','','739834','',0,'2019-12-31');
/*!40000 ALTER TABLE `produto` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tipo_divergencia`
--

DROP TABLE IF EXISTS `tipo_divergencia`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tipo_divergencia` (
  `id_tipo` int(11) NOT NULL AUTO_INCREMENT,
  `descricao_tipo` varchar(100) NOT NULL,
  PRIMARY KEY (`id_tipo`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tipo_divergencia`
--

LOCK TABLES `tipo_divergencia` WRITE;
/*!40000 ALTER TABLE `tipo_divergencia` DISABLE KEYS */;
INSERT INTO `tipo_divergencia` VALUES (4,'FALTA'),(5,'SOBRA'),(6,'DANO OCULTO'),(7,'AVARIA'),(8,'SUPER AVARIA');
/*!40000 ALTER TABLE `tipo_divergencia` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-01-01 21:41:57
