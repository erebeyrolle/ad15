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
(1,	'Vue.js - Applications web complexes et rÃ©actives',	'Brice CHAPONNEAU',	'Un ouvrage de rÃ©fÃ©rence pour le dÃ©veloppeur web Vue.js est un framework JavaScript orientÃ© front-end qui mÃ©rite considÃ©ration Ã  plusieurs Ã©gards. Il est rÃ©actif, performant, versatile, facilement testable, maintenable et sa courbe d\'apprentissage est rÃ©ellement rapide. L\'Ã©criture globale est idÃ©alement structurÃ©e et son Ã©cosystÃ¨me aide Ã  crÃ©er, organiser et maintenir vos applications clientes. Ce framework peut se suffire Ã  lui-mÃªme pour dÃ©velopper des applications complexes en ayant recours Ã  de simples composants, des mixins ou des plug-ins.',	34.00,	'2019-12-12 21:46:17.202112'),
(2,	'React.js',	'Eric SARRION',	'En tant que dÃ©veloppeur, qui n\'a pas encore entendu parler de React.js (ou React de faÃ§on raccourcie) ? Cette bibliothÃ¨que JavaScript, initialement Ã©crite pour Facebook (en 2013), s\'utilise maintenant couramment dans le monde de l\'entreprise. Elle permet de structurer efficacement une application web, mais peut Ã©galement s\'utiliser dans une version dite native, pour Ã©crire des applications mobiles Ã  destination des iPhone ou Android.',	32.00,	'2019-12-12 21:57:56.766328'),
(3,	'AngularJS - DÃ©veloppez aujourd\'hui les applications web de demain',	'SÃ©bastien OLIVIER / Pierre-Alexandre GURY',	'Ce livre s\'adresse aux dÃ©veloppeurs Web qui souhaitent dÃ©couvrir ou approfondir le dÃ©veloppement de SPA (Single Page Apps ou applications web monopage) Ã  l\'aide d\'AngularJS, le framework JavaScript dÃ©veloppÃ© par Google, en version 1.3 au moment de l\'Ã©criture. Les auteurs prÃ©sentent la notion de SPA et font le tour des fonctionnalitÃ©s apportÃ©es par le framework, comme la structuration d\'une application, le binding ou les templates de vues.',	39.00,	'2019-12-12 22:07:46.814778'),
(4,	'Laravel - Un framework efficace pour dÃ©velopper vos applications PHP',	'RaphaÃ«l HUCHET',	'Ce livre s\'adresse aux dÃ©veloppeuses et dÃ©veloppeurs qui souhaitent dÃ©couvrir Laravel et acquÃ©rir des bases solides pour Ãªtre autonomes dans le dÃ©veloppement d\'applications avec ce framework. Pour l\'apprÃ©cier, il est conseillÃ© d\'avoir un minimum de connaissances sur les concepts de base du langage PHP ou d\'un autre langage orientÃ© objet. L\'auteur commence par dÃ©tailler la prÃ©paration de l\'environnement de dÃ©veloppement.',	39.00,	'2019-12-12 22:08:43.672346'),
(5,	'DÃ©veloppez votre site web avec le framework Symfony 4',	'Alexandre BACCO',	'Vous dÃ©veloppez des sites web rÃ©guliÃ¨rement et vous en avez assez de rÃ©inventer la roue ? Vous aimeriez utiliser les bonnes pratiques de dÃ©veloppement PHP pour concevoir des sites web de qualitÃ© professionnelle ? Cet ouvrage vous permettra de prendre en main Symfony4, le framework PHP de rÃ©fÃ©rence. Pourquoi utiliser un framework ? Comment crÃ©er un nouveau projet de site web avec Symfony4, mettre en place les environnements de test et de production, concevoir les contrÃ´leurs, les templates, gÃ©rer la traduction et communiquer avec une base de donnÃ©es ?',	29.90,	'2019-12-12 22:36:04.274462'),
(7,	'La grande',	'Zaza',	'Test DB',	50.00,	'2019-12-13 08:12:36.461226'),
(8,	'RIVAUD',	'Fanny',	'Test DB',	45.00,	'2019-12-13 08:13:33.647216'),
(9,	'CURTIS',	'Tony',	'Test DB',	50.00,	'2019-12-13 08:14:18.954232'),
(10,	'COSTNER',	'Kevin',	'Test DB',	34.00,	'2019-12-13 08:14:50.824467'),
(11,	'ASTICOT',	'Momo',	'Test DB',	45.00,	'2019-12-13 08:15:36.014423'),
(13,	'LA TERREUR',	'GG',	'Test DB',	45.00,	'2019-12-13 08:36:35.204659'),
(14,	'LA CAGNE',	'Riri',	'Test DB',	50.00,	'2019-12-13 10:20:37.397142');

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

INSERT INTO `genres` (`genre_id`, `genres`) VALUES
(1,	'Informatique'),
(2,	'Technique');

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `user_id` int(4) unsigned NOT NULL AUTO_INCREMENT,
  `login` varchar(255) NOT NULL,
  `pswd` varchar(255) NOT NULL,
  `admin` tinyint(1) unsigned NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `users` (`user_id`, `login`, `pswd`, `admin`) VALUES
(1,	'riri',	'1604',	1),
(2,	'zaza',	'01',	1),
(3,	'Fanny',	'69',	0),
(4,	'Tony',	'42',	0),
(6,	'Kev',	'69',	0),
(7,	'Mat',	'69',	0),
(8,	'Flo',	'38',	0),
(9,	'GG',	'01',	0);

-- 2019-12-13 16:08:26
