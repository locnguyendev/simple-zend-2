-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.5.39 - MySQL Community Server (GPL)
-- Server OS:                    Win32
-- HeidiSQL Version:             9.1.0.4867
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping database structure for zf2tutorial
CREATE DATABASE IF NOT EXISTS `zf2tutorial` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `zf2tutorial`;


-- Dumping structure for table zf2tutorial.album
CREATE TABLE IF NOT EXISTS `album` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `artist` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

-- Dumping data for table zf2tutorial.album: ~8 rows (approximately)
/*!40000 ALTER TABLE `album` DISABLE KEYS */;
INSERT INTO `album` (`id`, `artist`, `title`) VALUES
	(1, 'The  Military  Wives', 'In  My  Dreams'),
	(2, 'Adele', '21'),
	(3, 'Bruce  Springsteen', 'Wrecking Ball (Deluxe)'),
	(4, 'Lana  Del  Rey', 'Born  To  Die'),
	(5, 'Gotye', 'Making  Mirrors'),
	(6, 'Kenny G', 'Best of Kenny G'),
	(7, 'Bức Tường', 'Tâm hồn của đá (1)'),
	(9, 'Cẩm Ly', 'Chim sáo mồ côi');
/*!40000 ALTER TABLE `album` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
