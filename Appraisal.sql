-- MySQL dump 10.13  Distrib 5.1.46, for mandriva-linux-gnu (i586)
--
-- Host: localhost    Database: Appraisal
-- ------------------------------------------------------
-- Server version	5.1.46

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
-- Table structure for table `Employee`
--
drop database IF EXISTS `Appraisal`;
create DATABASE `Appraisal`;
use `Appraisal`; 
DROP TABLE IF EXISTS `Employee`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Employee` (
  `Empid` char(20) NOT NULL,
  `Name` char(30) NOT NULL,
  `Department` char(30) NOT NULL,
  `Semester` char(30) NOT NULL,
  `Subject` char(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Employee`
--

LOCK TABLES `Employee` WRITE;
/*!40000 ALTER TABLE `Employee` DISABLE KEYS */;
INSERT INTO `Employee` VALUES('MDAx','U2hhcm1pbGE=','Q1M=','Mm5kIFNFTSBDUw==','QXBwIE1hdGhzLUlJ'),('MDAy','S3VzdW1h','Q1M=','Mm5kIFNFTSBDUw==','RW5nbGlzaA=='),('MDAz','TmFuZGFrdW1hcmEgTmF5YWthIE0=','Q1M=','Mm5kIFNFTSBDUw==','RCAmQ0Y='),('MDA0','QW51cmFkaGE=','Q1M=','Mm5kIFNFTSBDUw==','REUgTEFC'),('MDA1','Tml0aHlhIEEgUw==','Q1M=','Mm5kIFNFTSBDUw==','V0QgTEFC'),('MDAz','TmFuZGFrdW1hcmEgTmF5YWthIE0=','Q1M=','Mm5kIFNFTSBDUw==','TU0gTEFC'),
('MDAz','TmFuZGFrdW1hcmEgTmF5YWthIE0=','Q1M=','NHRoIFNFTSBDUw==','T1M='),('MDA2','QiBQIEVzaHdhcmk=','Q1M=','NHRoIFNFTSBDUw==','RFM='),('MDA3','QiBOIE11cmFsaQ==','Q1M=','NHRoIFNFTSBDUw==','SmF2YQ=='),('MDA4','UmFqZXNo','Q1M=','NHRoIFNFTSBDUw==','UEUmSUM='),('MDA5','UmV2YXRoaQ==','Q1M=','NHRoIFNFTSBDUw==','S2FubmFkYQ=='),('MDA3','QiBOIE11cmFsaQ==','Q1M=','NHRoIFNFTSBDUw==','SmF2YSBMQUI='),('MDA1','Tml0aHlhIEEgUw==','Q1M=','NHRoIFNFTSBDUw==','TGludXggTEFC'),('MDA2','QiBQIEVzaHdhcmk=','Q1M=','NHRoIFNFTSBDUw==','RFMgTEFC'),('MDEw','SyBTcmVlbml2YXNh','Q1M=','NnRoIFNFTSBDUw==','U1cgVGVzdGluZw=='),('MDA2','QiBQIEVzaHdhcmk=','Q1M=','NnRoIFNFTSBDUw==','SU9U'),('MDA2','QiBQIEVzaHdhcmk=','Q1M=','NnRoIFNFTSBDUw==','TncgU2VjdXJpdHk='),('MDEw','SyBTcmVlbml2YXNh','Q1M=','NnRoIFNFTSBDUw==','TncgU2VjdXJpdHk='),('MDEw','SyBTcmVlbml2YXNh','Q1M=','NnRoIFNFTSBDUw==','U1cgVGVzdGluZyBMYWI='),
('MDA3','QiBOIE11cmFsaQ==','Q1M=','NnRoIFNFTSBDUw==','TncgU2VjdXJpdHkgTGFi'),
('MDA3','QiBOIE11cmFsaQ==','Q1M=','NnRoIFNFTSBDUw==','UHJvamVjdCBXb3JrLUlJ'),('MDEx','VmFuaXRoYSBNIEE=','RUM=','Mm5kIFNFTSBFQw==','RW5nZyBNYXRocy1JSQ=='),
('MDAy','S3VzdW1h','RUM=','Mm5kIFNFTSBFQw==','RW5nbGlzaA=='),('MDEy','U2hhc2hpa2FudGggSyBT','RUM=','Mm5kIFNFTSBFQw==','QlNE'),
('MDEy','U2hhc2hpa2FudGggSyBT','RUM=','Mm5kIFNFTSBFQw==','U0QgTGFi'),('MDA0','QW51cmFkaGE=','RUM=','Mm5kIFNFTSBFQw==','REUgTGFi'),
('MDEz','TWFoZXNoYQ==','RUM=','Mm5kIFNFTSBFQw==','TUFUIExhYg=='),('MDE0','SmF5YXJhbWUgR293ZGE=','RUM=','NHRoIFNFTSBFQw==','REMmQ04='),
('MDEy','U2hhc2hpa2FudGggSyBT','RUM=','NHRoIFNFTSBFQw==','RENPTQ=='),('MDE1','S2FsYXRoYW1h','RUM=','NHRoIFNFTSBFQw==','TWljcm9jb250cm9sbGVy'),
('MDE2','VmlkeWEgU2hhbmJoYWc=','RUM=','NHRoIFNFTSBFQw== ','RENPTSBMYWI='),
('MDE1','S2FsYXRoYW1h','RUM=','NHRoIFNFTSBFQw==','TWljcm9jb250b2xsZXIgTGFi'),
('MDA4','UmFqZXNo','RUM=','NHRoIFNFTSBFQw==','UEUmSUM='),('MDA5','UmV2YXRoaQ==','RUM=','NHRoIFNFTSBFQw==','2FubmFkYQ=='),
('MDEx','VmFuaXRoYQ==','TUU=',' Mm5kIFNFTSBNRQ==','RW5nZyBNYXRocy1JSQ=='),
('MDAx','U2hhcm1pbGE=','TUU=','Mm5kIFNFTSBNRQ==','QVBQIFNjaWVuY2U='),('MDE2','VmlkeWEgU2hhbmJoYWc=','TUU=','Mm5kIFNFTSBNRQ==','QkUgJiBFRQ=='),
('MDE3','UHJhc2FkIFJhbw==','TUU=','Mm5kIFNFTSBNRQ==','RW5nZyBHcmFwaGljcy1JSQ=='),
('MDAx','U2hhcm1pbGE=','TUU=','Mm5kIFNFTSBNRQ==','QXBwIFNjaWVuY2UgTEFC'),
('MDE4','T21wcmFrYXNo','TUU=','Mm5kIFNFTSBNRQ==','QkUgJiBFRSBMQUI='),('MDE5','VW5uaWtyaXNobmFu','TUU=','NHRoIFNFTSBNRQ==','SCZQ'),
('MDIw','RGV2YWlhaA==','TUU=','NHRoIFNFTSBNRQ==','QlRF'),('MDE3','UHJhc2FkIFJhbw==','TUU=','NHRoIFNFTSBNRQ==','TVRU'),
('MDA4','UmFqZXNo','TUU=','NHRoIFNFTSBNRQ==','UEUmSUM='),('MDE5','VW5uaWtyaXNoYW5hbg==','TUU=','NHRoIFNFTSBNRQ==','SCZQIExBQg=='),
('MDE3','UHJhc2FkIFJhbw==','TUU=','NHRoIFNFTSBNRQ==','TS9DIFNIT1A='),
('MDEz','TWFoZXNoYQ==','TUU=','NHRoIFNFTSBNRQ==','Qy1QUk9HIExBQg=='),('MDA5','UmV2YXRoaQ==','TUU=','NHRoIFNFTSBNRQ==','S2FubmFkYQ==');
/*!40000 ALTER TABLE `Employee` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Question`
--

DROP TABLE IF EXISTS `Question`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Question` (
  `Qno` char(2) NOT NULL,
  `Question` varchar(250) NOT NULL,
  PRIMARY KEY (`Qno`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Question`
--

LOCK TABLES `Question` WRITE;
/*!40000 ALTER TABLE `Question` DISABLE KEYS */;
INSERT INTO `Question` VALUES ('01','Does the teacher come to th class  ?'),('02','Does the teacher control the class effectively ?'),('03','Does your teacher come well prepared to the class, in the subject ?'),('04','Does teacher fully cover the syllabus in the semester on time ?'),('05','Does he/she encourage you to ask questions in the class ?'),('06','Do you understand teachers presentation and language ?'),('07','Does the teacher counsel the students ?'),('08','Does the teacher help/encourage you in academic matters ?'),('09','Does the teacher, help/encourage you in extra curricular activities ?'),('10','Is your teacher responsewell to your approach ?'),('11','Is her/his dress neat and decent ?');
/*!40000 ALTER TABLE `Question` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Result`
--

DROP TABLE IF EXISTS `Result`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Result` (
  `Empid` char(30) NOT NULL,
  `Subject` char(30) NOT NULL,
  `Yes` char(30) NOT NULL,
  `No` char(30) NOT NULL,
  `Total` char(15) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Result`
--

LOCK TABLES `Result` WRITE;
/*!40000 ALTER TABLE `Result` DISABLE KEYS */;
INSERT INTO `Result` VALUES ('MDAx','QXBwIE1hdGhzLUlJ','MA==','MA==','MA=='),('MDAy','RW5nbGlzaA==','MA==','MA==','MA=='),
('MDAz','RCAmQ0Y=','MA==','MA==','MA=='),('MDA0','REUgTEFC','MA==','MA==','MA=='),('MDA1','V0QgTEFC','MA==','MA==','MA=='),            ('MDAz','TU0gTEFC','MA==','MA==','MA=='),('MDAz','T1M=','MA==','MA==','MA=='),('MDA2','RFM=','MA==','MA==','MA=='),('MDA3','SmF2YQ==','MA==','MA==','MA=='),('MDA4','UEUmSUM=','MA==','MA==','MA=='),('MDA5','S2FubmFkYQ==','MA==','MA==','MA=='),('MDA3','SmF2YSBMQUI=','MA==','MA==','MA=='),('MDA1','TGludXggTEFC','MA==','MA==','MA=='),('MDA2','RFMgTEFC','MA==','MA==','MA=='),('MDEw','U1cgVGVzdGluZw==','MA==','MA==','MA=='),('MDA2','SU9U','MA==','MA==','MA=='),('MDA2','TncgU2VjdXJpdHk=','MA==','MA==','MA=='),('MDEw','TncgU2VjdXJpdHk=','MA==','MA==','MA=='),('MDEw','U1cgVGVzdGluZyBMYWI=','MA==','MA==','MA=='),('MDA3','TncgU2VjdXJpdHkgTGFi','MA==','MA==','MA=='),('MDA3','UHJvamVjdCBXb3JrLUlJ','MA==','MA==','MA=='),('MDEx','RW5nZyBNYXRocy1JSQ==','MA==','MA==','MA=='),('MDAy','RW5nbGlzaA==','MA==','MA==','MA=='),('MDEy','QlNE','MA==','MA==','MA=='),('MDEy','U0QgTGFi','MA==','MA==','MA=='),('MDA0','REUgTGFi','MA==','MA==','MA=='),('MDEz','TUFUIExhYg==','MA==','MA==','MA=='),('MDE0','REMmQ04=','MA==','MA==','MA=='),('MDEy','RENPTQ==','MA==','MA==','MA=='),('MDE1','TWljcm9jb250cm9sbGVy','MA==','MA==','MA=='),  ('MDE2','RENPTSBMYWI=','MA==','MA==','MA=='),('MDE1','TWljcm9jb250b2xsZXIgTGFi','MA==','MA==','MA=='),
('MDA4','UEUmSUM=','MA==','MA==','MA=='),('MDA5','S2FubmFkYQ==','MA==','MA==','MA=='),('MDEx','RW5nZyBNYXRocy1JSQ==','MA==','MA==','MA=='),('MDAx','QVBQIFNjaWVuY2U=','MA==','MA==','MA=='),        ('MDE2','QkUgJiBFRQ==','MA==','MA==','MA=='),('MDE3','RW5nZyBHcmFwaGljcy1JSQ==','MA==','MA==','MA=='),
('MDAx','QXBwIFNjaWVuY2UgTEFC','MA==','MA==','MA=='),('MDE4','QkUgJiBFRSBMQUI=','MA==','MA==','MA=='),        
('MDE5','SCZQ','MA==','MA==','MA=='),('MDIw','QlRF','MA==','MA==','MA=='),('MDE3','TVRU','MA==','MA==','MA=='),                   
('MDA4','UEUmSUM=','MA==','MA==','MA=='),('MDE5','SCZQIExBQg==','MA==','MA==','MA=='),('MDE3','TS9DIFNIT1A=','MA==','MA==','MA=='),  ('MDEz','Qy1QUk9HIExBQg==','MA==','MA==','MA=='),('MDA5','S2FubmFkYQ==','MA==','MA==','MA== ');
/*!40000 ALTER TABLE `Result` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Security`
--

DROP TABLE IF EXISTS `Security`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Security` (
  `username` char(50) NOT NULL,
  `password` char(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Security`
--

LOCK TABLES `Security` WRITE;
/*!40000 ALTER TABLE `Security` DISABLE KEYS */;
INSERT INTO `Security` VALUES ('21232f297a57a5a743894a0e4a801fc3','9002629b210baff49a987c44103e09b3');
/*!40000 ALTER TABLE `Security` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Student`
--

DROP TABLE IF EXISTS `Student`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Student` (
	`Name` char(30) NOT NULL,
 	`Regno` char(30) NOT NULL,
 	`Class` char(30) NOT NULL,
  	`Pin` char(30) NOT NULL,
  	`Flag` char(1) NOT NULL,
  PRIMARY KEY (`Regno`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Student`
--

LOCK TABLES `Student` WRITE;
/*!40000 ALTER TABLE `Student` DISABLE KEYS */;
INSERT INTO `Student` VALUES ('QXJzaGFk','NDAyY3MxNzAwMQ==','NnRoIFNFTSBDUw==','MmJiYzQw','N'),('QW5lZXM=','NDAyY3MxNzAwMg==','NnRoIFNFTSBDUw==','NzliZDY4','N'),
('TmlraXRoYQ==','NDAyY3MxNzAwMw==','NnRoIFNFTSBDUw==','ODRhNzUw','N'),('SmFtc2hp','NDAyY3MxNzAwNA==','NnRoIFNFTSBDUw==','ZmQzYzM1','N'),('U2hpbHBh','NDAyY3MxNzAwNg==','NnRoIFNFTSBDUw==','Mzk5ZmFk','N'),
('U2FuZGh5YQ==','NDAyY3MxNzAwNQ==','NnRoIFNFTSBDUw==','NjE3NTNj','N'),
('WWFzaHdhbnRo','NDAyY3MxNzAwNw==','NnRoIFNFTSBDUw==','MDIxNWQ4','N'),('UmFkZWVzaA==','NDAyY3MxNzAwOA==','NnRoIFNFTSBDUw==','OGE3MjVl','N'),
('TWFub2o=','NDAyY3MxNzAwOQ==','NnRoIFNFTSBDUw==','MGU1ZWJm','N'),('Qmhhdml0aGE=','NDc3Y3MxNzAwMQ==','NnRoIFNFTSBDUw==','YTE2OWYz','N'),
('UmFtc2hhZA==','NDAyY3MxNzAxMA==','NnRoIFNFTSBDUw==','MzU5ZDUw','N'),
('S2FydGhpaw==','NDAyY3MxODAwMQ==','NHRoIFNFTSBDUw==','NWM0ODY4','N'),
('S2F2aXRoYQ==','NDAyY3MxODAwMg==','NHRoIFNFTSBDUw==','YTk3ZmRi','N'),
('U25laGE=','NDAyY3MxODAwMw==','NHRoIFNFTSBDUw==','N2M1OWQ1','N'),
('TmF2ZWVu','NDAyY3MxODAwNA==','NHRoIFNFTSBDUw==','NzFlOWI2','N'),
('UHJhc2FubmE=','NDAyY3MxODAwNQ==','NHRoIFNFTSBDUw==','MjI2NmNm','N'),
('QW5raXRo','NDAyY3MxODAwNg==','NHRoIFNFTSBDUw==','MTc2Yjc1','N'),
('UHJhc2hhbnRo','NDAyY3MxODAwNw==','NHRoIFNFTSBDUw==','OWFhYTY0','N'),
('UmFqaXRo','NDAyY3MxODAwOA==','NHRoIFNFTSBDUw==','NDI2YjQz','N'),
('U2FtcnV0aGk=','NDAyY3MxODAwOQ==','NHRoIFNFTSBDUw==','MWRkYzBi','N'),
('U2FoYW5h','NDAyY3MxODAxMA==','NHRoIFNFTSBDUw==','MWMwZmM4','N'),
('U2FuZGVlcA==','NDAyY3MxOTAwMQ==','Mm5kIFNFTSBDUw==','Y2I3YmIy','N'),
('TWFoYWRldmE=','NDAyY3MxOTAwMg==','Mm5kIFNFTSBDUw==','MTBiODIx','N'),
('QWJkdWw=','NDAyY3MxOTAwMw==','Mm5kIFNFTSBDUw==','NWU1ZTA3','N'),
('QWRhcnNo','NDAyY3MxOTAwNA==','Mm5kIFNFTSBDUw==','MTNiM2E5','N'),
('QmFzYXZhcmFq','NDAyY3MxOTAwNQ==','Mm5kIFNFTSBDUw==','Zjc3YmNl','N'),
('Qmhhc2thcg==','NDAyY3MxOTAwNg==','Mm5kIFNFTSBDUw==','MDVjNzMy','N'),
('Qmhhdnlh','NDAyY3MxOTAwNw==','Mm5kIFNFTSBDUw==','YzQ4ZGNl','N'),
('Q2hhdGh1','NDAyY3MxOTAwOA==','Mm5kIFNFTSBDUw==','Y2IyZTg2','N'),
('RGVla3NoaXRoYQ==','NDAyY3MxOTAwOQ==','Mm5kIFNFTSBDUw==','ZDNiOThk','N'),
('RGV2ZWdvd2Rh','NDAyY3MxOTAxMA==','Mm5kIFNFTSBDUw==','N2EyN2I1','N'),
('QW1hbCBqb3Nl','NDAyZWMxOTAwMQ==','Mm5kIFNFTSBFQw==','ZWJlN2Mw',' N'),
('QWJoaXNoZWsgSyBT','NDAyZWMxOTAwMg==','Mm5kIFNFTSBFQw==','M2EwY2M0','N'),
('QWJoaWxhc2ggUg==','NDAyZWMxOTAwMw==','Mm5kIFNFTSBFQw==','ZGEyMTUy','N'),
('QXNod2luaQ==','NDAyZWMxOTAwNA==','Mm5kIFNFTSBFQw==','NDJiMjkw','N'),
('QWJoaXNoZWsgTg==','NDAyZWMxOTAwNQ==','Mm5kIFNFTSBFQw==','MzBjNGM4','N'),
('QmhhdmlzaCBUIEM=','NDAyZWMxOTAwNg==','Mm5kIFNFTSBFQw==','MGVlNDY3','N'),
('QWJoaXNoZWsgTiBS','NDAyZWMxOTAwNw==','Mm5kIFNFTSBFQw==','MTZkN2Uz','N'),
('Q2hpbm5hcHBhIEsgUw==','NDAyZWMxOTAwOA==','Mm5kIFNFTSBFQw==','YzA5OTNm','N'),
('QWRpdHlhIFAgSw==','NDAyZWMxOTAwOQ==','Mm5kIFNFTSBFQw==','MmFhZDI4','N'),
('RGlnYW50aCBNIEI=','NDAyZWMxOTAxMA==','Mm5kIFNFTSBFQw==','NmIxZGM3','N'),
('Q2hhaXRocmEgQiBB','NDAyZWMxOTAxMQ==','Mm5kIFNFTSBFQw==','NmJiOTYx','N'),
('QWl5YXBwYSBJIE4=','NDAyZWMxODAwMQ==','NHRoIFNFTSBFQw==','NzhlYTIw','N'),
('Q2hhbmRhbmEgSyBT','NDAyZWMxODAwMg==','NHRoIFNFTSBFQw==','MzBiMWI4','N'),
('RGluZXNoIFIgTQ==','NDAyZWMxODAwMw==','NHRoIFNFTSBFQw==','OTAzNzk1','N'),
('Q2hhbmRyYXNoZWthciBLIFM=','NDAyZWMxODAwNA==','NHRoIFNFTSBFQw==','MjE5YmU1','N'),
('QWxiaW5iIEsgUw==','NDAyZWMxODAwNQ==','NHRoIFNFTSBFQw==','MTNlYWNk','N'),
('SmVlc2FuIE0gSg==','NDAyZWMxODAwNg==','NHRoIFNFTSBFQw==','ODBjYzZh','N'),
('Q2hhcmFuIEggQw==','NDAyZWMxODAwNw==','NHRoIFNFTSBFQw==','ZDFmNzVj','N'),
('S2F2YW4gViBD','NDAyZWMxODAwOA==','NHRoIFNFTSBFQw==','NDM0NTNi','N'),
('QW5vb3AgUA==','NDAyZWMxODAwOQ==','NHRoIFNFTSBFQw==','ZWU0YTYx','N'),
('QWthc2ggUyBQ','NDAyZWMxODAxMA==','NHRoIFNFTSBFQw==','ZGU0NWJk','N'),
('S2xlbmluIGthcmxvc2U=','NDAyZWMxODAxMQ==','NHRoIFNFTSBFQw==','ZWFmNzM1','N'),
('QWtzaGF5IGt1bWFy','NDAyZWMxODAxMg==','NHRoIFNFTSBFQw==','ZTViMDlh','N'),
('QXJ1biBrdW1hciBNIFI=','NDAyZWMxNzAwMQ==','NnRoIFNFTSBFQw==','NTE4MmE3','N'),
('TGlraXRoYSBNIFA=','NDAyZWMxNzAwMg==','NnRoIFNFTSBFQw==','MTQ0NDUx','N'),
('Q2hldGhhbiBQIEM=','NDAyZWMxNzAwMw==','NnRoIFNFTSBFQw==','NjE4ZmE4','N'),
('TW9oYW1tZWQgU3VmYWlk','NDAyZWMxNzAwNA==','NnRoIFNFTSBFQw==','NmUzN2Iy','N'),
('QXZpbmFzaCBDIEc=','NDAyZWMxNzAwNQ==','NnRoIFNFTSBFQw==','NzI4NDVi','N'),
('RGF0aGluIEEgRw==','NDAyZWMxNzAwNg==','NnRoIFNFTSBFQw==','NDA1ZmI5','N'),
('R2lyaXNoIFAgQQ==','NDAyZWMxNzAwNw==','NnRoIFNFTSBFQw==','ZDgwOWQ1','N'),
('QmVsbGlhcHBhIEIgTQ==','NDAyZWMxNzAwOQ==','NnRoIFNFTSBFQw==','NjQwNWQz','N'),
('UmFuamFuIEQgUg==','NDAyZWMxNzAwOA==','NnRoIFNFTSBFQw==','YWJlMWYz','N'),
('SmFuYXJkaGFuYSBN','NDAybWUxOTAwMQ==','Mm5kIFNFTSBNRQ==','N2E1NThi','N'),
('UmFuaml0aCBB','NDAybWUxOTAwMg==','Mm5kIFNFTSBNRQ==','YzA2NzJm','N'),
('SmVldmFuIEs=','NDAybWUxOTAwMw==','Mm5kIFNFTSBNRQ==','ZWJkZWI1','N'),
('RGFyc2hhbiBUIEE=','NDAybWUxOTAwNA==','Mm5kIFNFTSBNRQ==',' | MjkzZjJi','N'),
('Um9zaGFuIEFudG9ueQ==','NDAybWUxOTAwNQ==','Mm5kIFNFTSBNRQ==','ZmQ4NjY1','N'),
('S2FydGhpayBNIFY=','NDAybWUxOTAwNg==','Mm5kIFNFTSBNRQ==','MTY0MWE4','N'),
('RGVlcGFrIGdvd2RhIEsgUg==','NDAybWUxOTAwNw==','Mm5kIFNFTSBNRQ==','ZTIwMWYz','N'),
('S2lyYW4gTQ==','NDAybWUxOTAwOA==','Mm5kIFNFTSBNRQ==','YmRjYTdk','N'),
('U2FudGhvc2ggS3VtYXIgUCBT','NDAybWUxOTAwOQ==','Mm5kIFNFTSBNRQ==','Y2M4YWQ5','N'),
('RGhhbmVzaCBrcmlzaG5hbiBLIFY=','NDAybWUxOTAxMA==','Mm5kIFNFTSBNRQ==','ODJjZDMx','N'),
('TWFkdWt1bWFyYSBCIFY=','NDAybWUxOTAxMQ==','Mm5kIFNFTSBNRQ==','YWNhN2Jk','N'),
('Um9zaGFuIEFudG9ueQ==','NDAybWUxODAwMQ==','NHRoIFNFTSBNRQ==','OTE0MTMy','N'),
('S2FydGhpayBNIFY=','NDAybWUxODAwMg==','NHRoIFNFTSBNRQ==','OTNkYjc4','N'),
('U2FkZXNoIEt1bWFyIE0gUw==','NDAybWUxODAwMw==','NHRoIFNFTSBNRQ==','N2E5NzI3','N'),
('UG9ubmFwcGEgTyBD','NDAybWUxODAwNA==','NHRoIFNFTSBNRQ==','ZTU0ZGY0','N'),
('U2ltcmFuZmFyYXogTSBT','NDAybWUxODAwNQ==','NHRoIFNFTSBNRQ==','MDc2Yjhm','N'),
('UHJhbmppdGggSyBQ','NDAybWUxODAwNg==','NHRoIFNFTSBNRQ==','OGNkYjgw','N'),
('UHJhc2FkIEIgUg==','NDAybWUxODAwNw==','NHRoIFNFTSBNRQ==','ZWIzYzBm','N'),
('UHJlZXRoYW4gRGV2YWlhaCBLIEE=','NDAybWUxODAwOA==','NHRoIFNFTSBNRQ==','NDA0YzI1','N'),
('SmF5YW50aCBNIFM=','NDAybWUxODAwOQ==','NHRoIFNFTSBNRQ==','ZDliMmNl','N'),
('UHVuZWV0aCBLIFI=','NDAybWUxODAxMA==','NHRoIFNFTSBNRQ==','MzFlMjkw','N'),
('QWJzaGlzaGVrIEcgUw==','NDAybWUxNzAwMQ==','NnRoIFNFTSBNRQ==','NzI4ZTZk','N'),
('QWthc2ggVXRoYXBwYSBDIFA=','NDAybWUxNzAwMg==','NnRoIFNFTSBNRQ==','NjBmMzYx','N'),
('TmVlcmFqIFYgVg==','NDAybWUxNzAwMw==','NnRoIFNFTSBNRQ==','NGFjNDFl','N'),
('Tml0aGluIFM=','NDAybWUxNzAwNA==','NnRoIFNFTSBNRQ==','ZjNmMDk5','N'),
('QWxlZW1hdGggTWFoenV6YSBNYWhpbg','NDAybWUxNzAwNQ==','NnRoIFNFTSBNRQ==','Mjg3OTk2','N'),
('T21wcmFrYXNoIEsgSg==','NDAybWUxNzAwNg==','NnRoIFNFTSBNRQ==','OWEyNzgy','N'),
('RGlrc2hpdGggUCBL','NDAybWUxNzAwNw==','NnRoIFNFTSBNRQ==','NzRjYzNl','N'),
('UmV2YW5uYSBUIEo=','NDAybWUxNzAwOA==','NnRoIFNFTSBNRQ==','OTY1ZWVi','N'),
('RGhhcnNoYW4=','NDAybWUxNzAwOQ==','NnRoIFNFTSBNRQ==','MzIwZGVl','N'),
('R2lyaXNoIEIgUw==','NDAybWUxNzAxMA==','NnRoIFNFTSBNRQ==','YWQ4ODBj','N');
/*!40000 ALTER TABLE `Student` ENABLE KEYS */;
UNLOCK TABLES;
CREATE TABLE `Emp` (
  `Empid` char(30) NOT NULL,
  `Name` char(30) NOT NULL,
  `Department` char(30) NOT NULL,
  `Semester` char(30) NOT NULL,
  `Subject` char(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2013-04-20 10:35:38
