-- MariaDB dump 10.19  Distrib 10.4.22-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: db_website
-- ------------------------------------------------------
-- Server version	10.4.22-MariaDB

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
-- Table structure for table `tb_capil`
--

DROP TABLE IF EXISTS `tb_capil`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_capil` (
  `NAMA` varchar(35) NOT NULL,
  `NIP` varchar(20) NOT NULL,
  `JENIS KELAMIN` enum('LAKI-LAKI','PEREMPUAN') NOT NULL,
  `USERNAME` varchar(35) NOT NULL,
  `PASSWORD` varchar(20) NOT NULL,
  PRIMARY KEY (`PASSWORD`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_capil`
--

LOCK TABLES `tb_capil` WRITE;
/*!40000 ALTER TABLE `tb_capil` DISABLE KEYS */;
INSERT INTO `tb_capil` VALUES ('DESMAWATI','196912241995032002','PEREMPUAN','desmawati@gmail.com','196912241995032002');
/*!40000 ALTER TABLE `tb_capil` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_hubungi_kami`
--

DROP TABLE IF EXISTS `tb_hubungi_kami`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_hubungi_kami` (
  `NAMA` varchar(35) NOT NULL,
  `ALAMAT EMAIL` varchar(30) NOT NULL,
  `SUBJEK` varchar(30) NOT NULL,
  `TANGGAL` date NOT NULL,
  `ISI PESAN` varchar(200) NOT NULL,
  PRIMARY KEY (`ALAMAT EMAIL`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_hubungi_kami`
--

LOCK TABLES `tb_hubungi_kami` WRITE;
/*!40000 ALTER TABLE `tb_hubungi_kami` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_hubungi_kami` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_kabid`
--

DROP TABLE IF EXISTS `tb_kabid`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_kabid` (
  `NAMA` varchar(35) NOT NULL,
  `NIP` varchar(20) NOT NULL,
  `JENIS KELAMIN` enum('LAKI-LAKI','PEREMPUAN') NOT NULL,
  `USERNAME` varchar(35) NOT NULL,
  `PASSWORD` varchar(20) NOT NULL,
  PRIMARY KEY (`PASSWORD`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_kabid`
--

LOCK TABLES `tb_kabid` WRITE;
/*!40000 ALTER TABLE `tb_kabid` DISABLE KEYS */;
INSERT INTO `tb_kabid` VALUES ('EHADI YANUAR','196701291993031004','LAKI-LAKI','yanuarehadi@gmail.com','196701291993031004');
/*!40000 ALTER TABLE `tb_kabid` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_login`
--

DROP TABLE IF EXISTS `tb_login`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_login` (
  `USERNAME` varchar(35) NOT NULL,
  `PASSWORD` varchar(20) NOT NULL,
  PRIMARY KEY (`PASSWORD`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_login`
--

LOCK TABLES `tb_login` WRITE;
/*!40000 ALTER TABLE `tb_login` DISABLE KEYS */;
INSERT INTO `tb_login` VALUES ('yanuarehadi@gmail.com','196701291993031004'),('desmawati@gmail.com','196912241995032002');
/*!40000 ALTER TABLE `tb_login` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_pemuda`
--

DROP TABLE IF EXISTS `tb_pemuda`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_pemuda` (
  `NAMA` varchar(35) NOT NULL,
  `NIK` varchar(20) NOT NULL,
  `TANGGAL LAHIR` date NOT NULL,
  `TEMPAT LAHIR` varchar(50) NOT NULL,
  `JENIS KELAMIN` enum('LAKI-LAKI','PEREMPUAN') NOT NULL,
  `ALAMAT` varchar(100) NOT NULL,
  `RIWAYAT ORGANISASI` varchar(50) NOT NULL,
  PRIMARY KEY (`TANGGAL LAHIR`),
  UNIQUE KEY `NIK` (`NIK`),
  KEY `NIK_2` (`NIK`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_pemuda`
--

LOCK TABLES `tb_pemuda` WRITE;
/*!40000 ALTER TABLE `tb_pemuda` DISABLE KEYS */;
INSERT INTO `tb_pemuda` VALUES ('UMAR ZAER','1303040107890003','1989-07-01','KANDANG BARU','LAKI-LAKI','JORONG SAMIAK NAGARI KANDANG BARU KECAMATAN SIJUNUNG KABUPATEN SIJUNJUNG PROVINSI SUMATERA BARAT','Masata Sijunjung'),('QORINA ZAER','1303044706980001','1998-06-07','KANDANG BARU','PEREMPUAN','JORONG SAMIAK NAGARI KANDANG BARU KECAMATAN SIJUNUNG KABUPATEN SIJUNJUNG PROVINSI SUMATERA BARAT','-');
/*!40000 ALTER TABLE `tb_pemuda` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-12-24 19:10:16
