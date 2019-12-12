-- Adminer 4.7.5 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `books`;
CREATE TABLE `books` (
  `book_id` int(4) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `summary` varchar(1024) NOT NULL,
  `price` float(4,2) unsigned NOT NULL,
  `entry_date` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6),
  PRIMARY KEY (`book_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `books` (`book_id`, `title`, `author`, `summary`, `price`, `entry_date`) VALUES
(5,	'DÃ©veloppez votre site web avec le framework Symfony 4',	'Alexandre BACCO',	'Vous dÃ©veloppez des sites web rÃ©guliÃ¨rement et vous en avez assez de rÃ©inventer la roue ? Vous aimeriez utiliser les bonnes pratiques de dÃ©veloppement PHP pour concevoir des sites web de qualitÃ© professionnelle ? Cet ouvrage vous permettra de prendre en main Symfony4, le framework PHP de rÃ©fÃ©rence. Pourquoi utiliser un framework ? Comment crÃ©er un nouveau projet de site web avec Symfony4, mettre en place les environnements de test et de production, concevoir les contrÃ´leurs, les templates, gÃ©rer la traduction et communiquer avec une base de donnÃ©es ?',	0.00,	'2019-12-10 13:40:18.606938'),
(6,	'Vue.js - Applications web complexes et rÃ©actives',	'Brice CHAPONNEAU',	'Un ouvrage de rÃ©fÃ©rence pour le dÃ©veloppeur web Vue.js est un framework JavaScript orientÃ© front-end qui mÃ©rite considÃ©ration Ã  plusieurs Ã©gards. Il est rÃ©actif, performant, versatile, facilement testable, maintenable et sa courbe d\'apprentissage est rÃ©ellement rapide. L\'Ã©criture globale est idÃ©alement structurÃ©e et son Ã©cosystÃ¨me aide Ã  crÃ©er, organiser et maintenir vos applications clientes. Ce framework peut se suffire Ã  lui-mÃªme pour dÃ©velopper des applications complexes en ayant recours Ã  de simples composants, des mixins ou des plug-ins. De plus, il s\'accompagne d\'un univers oÃ¹ de multiples outils sont disponibles pour aider au dÃ©veloppement : des extensions, des plug-ins et des librairies complÃ¨tes pour vous faire gagner en temps de rÃ©alisation, en qualitÃ© de code et Ã©galement en performance. ComplÃ©ments web Tous les exemples des programmes du livre sont en tÃ©lÃ©chargement sur notre site Internet : www.editions-eyrolles.com/dl/0067783.',	0.00,	'2019-12-10 15:54:06.260511'),
(7,	'dsfdsfsfd',	'fdsfdsff',	'dsfdsfs',	0.00,	'2019-12-11 15:02:43.012056'),
(8,	'sfdsfdsfdsf',	'sfsfsfsdfdsfds',	'fdsfdsfdsf',	0.00,	'2019-12-11 15:03:18.630994'),
(9,	'tnnntyesrne',	'dsrtntsnsten',	'ernsenst,n',	34.00,	'2019-12-12 10:10:31.000000'),
(13,	'Le Troll',	'des montagnes',	'erazgraezbhgaz',	45.00,	'2019-12-12 10:35:31.769389'),
(14,	'La grande',	'Zaza',	'f qeg hf nbgn',	45.00,	'2019-12-12 10:38:01.886999'),
(15,	'Riri',	'La cagne',	'fndgqbdfsvZ',	90.00,	'2019-12-12 10:38:40.386955'),
(16,	'RIVAUD',	'Fanny',	'ervezrz',	60.00,	'2019-12-12 10:48:44.763734'),
(17,	'Razer Combo',	'Julien',	'gjgtvihnc,j&lt;;i',	60.00,	'2019-12-12 10:53:48.173799');

DELIMITER ;;

CREATE TRIGGER `books_price` BEFORE INSERT ON `books` FOR EACH ROW
BEGIN
IF NEW.price > 50.00 THEN
SET NEW.price = 50.00;
END IF;
END;;

DELIMITER ;

DROP TABLE IF EXISTS `genres`;
CREATE TABLE `genres` (
  `genre_id` int(4) NOT NULL AUTO_INCREMENT,
  `genres` varchar(255) NOT NULL,
  PRIMARY KEY (`genre_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `user_id` int(4) unsigned NOT NULL AUTO_INCREMENT,
  `login` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `admin` bit(1) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `users` (`user_id`, `login`, `password`, `admin`) VALUES
(1,	'Eric',	'1604',	CONV('1', 2, 10) + 0),
(2,	'Isa',	'1111',	CONV('0', 2, 10) + 0),
(3,	'Momo',	'2222',	CONV('0', 2, 10) + 0),
(4,	'Jeremy',	'3333',	CONV('0', 2, 10) + 0);

-- 2019-12-12 15:57:55
