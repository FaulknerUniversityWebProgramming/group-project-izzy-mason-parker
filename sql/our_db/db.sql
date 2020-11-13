-- MySQL dump 10.13  Distrib 5.5.59, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: users
-- ------------------------------------------------------
-- Server version	5.5.59-0ubuntu0.14.04.1

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
-- Current Database: `users`
--

DROP DATABASE IF EXISTS db;
CREATE DATABASE IF NOT EXISTS db;
USE db;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS user,
                     item,
                     image;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE user (
  user_id int(11) NOT NULL AUTO_INCREMENT,
  username varchar(25) NOT NULL,
  password varchar(25) NOT NULL,
  email varchar(50) NOT NULL,
  phone int(10) DEFAULT NULL,
  address varchar(100) NOT NULL,
  fname varchar(30) NOT NULL,
  lname varchar(40) NOT NULL,
  PRIMARY KEY (user_id),
  UNIQUE KEY username (username)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;


CREATE TABLE item (
    item_id INT(11) NOT NULL AUTO_INCREMENT,
    user_id INT(11) NOT NULL,
    iname VARCHAR(50) NOT NULL,
    description VARCHAR(500) DEFAULT NULL,
    category VARCHAR(20) NOT NULL,
    price DOUBLE(15,2) NOT NULL DEFAULT 0,
    purchased BOOLEAN NOT NULL DEFAULT 0,
    PRIMARY KEY(item_id),
    FOREIGN KEY (user_id)  REFERENCES user (user_id)    ON DELETE CASCADE
    
);

CREATE TABLE image(
    img_id int(11) NOT NULL AUTO_INCREMENT,
    item_id int(11) NOT NULL,
    img_path VARCHAR(500) NOT NULL,
    PRIMARY KEY(img_id),
    FOREIGN KEY (item_id) REFERENCES item (item_id) ON DELETE CASCADE
);


--
-- Dumping data for tables
--


SELECT 'LOADING user' as 'INFO';
source load_user.dump ;
SELECT 'LOADING item' as 'INFO';
source load_item.dump ;
SELECT 'LOADING image' as 'INFO';
source load_image.dump ;

/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-11-05 22:32:43
