-- Adminer 4.8.1 MySQL 5.5.5-10.4.27-MariaDB dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `musteriler`;
CREATE TABLE `musteriler` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `adsoyad` varchar(50) NOT NULL,
  `telefon` varchar(50) NOT NULL,
  `notlar` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

INSERT INTO `musteriler` (`id`, `adsoyad`, `telefon`, `notlar`) VALUES
(1,	'Nuri ',	'54133',	''),
(2,	'Rahmi',	'88877',	'A blook'),
(3,	'Osman',	'32114',	'Köşedeki bina'),
(4,	'Ferhat ',	'11455',	''),
(5,	'Hasan',	'66557',	''),
(6,	'Ayşe',	'66688',	'B blok, 3.Kat');

DROP TABLE IF EXISTS `satisdetaylari`;
CREATE TABLE `satisdetaylari` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `satisid` int(11) NOT NULL,
  `urunid` int(11) NOT NULL,
  `miktari` decimal(6,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

INSERT INTO `satisdetaylari` (`id`, `satisid`, `urunid`, `miktari`) VALUES
(1,	1,	1,	5.00),
(2,	1,	2,	1.00),
(3,	1,	4,	1.00),
(4,	2,	4,	7.00);

DROP TABLE IF EXISTS `satislar`;
CREATE TABLE `satislar` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `musteriid` int(11) NOT NULL,
  `islemzamani` datetime NOT NULL,
  `teslimeden` varchar(50) NOT NULL,
  `teslimalan` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

INSERT INTO `satislar` (`id`, `musteriid`, `islemzamani`, `teslimeden`, `teslimalan`) VALUES
(1,	2,	'2023-08-28 11:21:48',	'',	'Rahmi'),
(2,	3,	'2023-08-28 11:25:12',	'',	'Osman');

DROP TABLE IF EXISTS `urunler`;
CREATE TABLE `urunler` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `urunadi` varchar(50) NOT NULL,
  `birimfiyati` decimal(6,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

INSERT INTO `urunler` (`id`, `urunadi`, `birimfiyati`) VALUES
(1,	'ekmek',	5.00),
(2,	'süt',	25.00),
(3,	'tereyağı',	120.00),
(4,	'gofret',	7.00);

-- 2023-08-28 08:44:23
