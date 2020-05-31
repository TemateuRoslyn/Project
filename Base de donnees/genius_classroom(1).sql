-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  lun. 25 mai 2020 à 12:19
-- Version du serveur :  5.7.24
-- Version de PHP :  7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `genius_classroom`
--

-- --------------------------------------------------------

--
-- Structure de la table `acronyme`
--

DROP TABLE IF EXISTS `acronyme`;
CREATE TABLE IF NOT EXISTS `acronyme` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `course_title` varchar(80) NOT NULL,
  `course_link` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `acronyme`
--

INSERT INTO `acronyme` (`id`, `course_title`, `course_link`) VALUES
(1, 'INTRODUCTION A L\'ALGORITHMIQUE', 'faculte_des_sciences/filiere_informatique/la.pdf'),
(2, 'ARCHITECTURE DES ORDINATEURS', 'faculte_des_sciences/filiere_informatique/la1.pdf'),
(3, 'ARCHITECTURE DES ORDINATEURS', 'faculte_des_sciences/filiere_informatique/la1.pdf'),
(4, 'PROGRAMMATION STRUCTUREE (C OU PYTHON)', 'faculte_des_sciences/filiere_informatique/la2.pdf'),
(5, 'ANALYSE 1', 'faculte_des_sciences/filiere_informatique/la3.pdf'),
(6, 'ANALYSE 1', 'faculte_des_sciences/filiere_informatique/la3.pdf'),
(7, 'INTRODUCTION A L\'ALGORITHMIQUE', 'faculte_des_sciences/filiere_informatique/la.pdf'),
(8, 'LANGUE ANGLAISE 1', 'faculte_des_sciences/filiere_informatique/la4.pdf'),
(9, 'LANGUE ANGLAISE 1', 'faculte_des_sciences/filiere_informatique/la4.pdf'),
(10, 'LANGUE ANGLAISE 1', 'faculte_des_sciences/filiere_informatique/la4.pdf'),
(11, 'LANGUE ANGLAISE 1', 'faculte_des_sciences/filiere_informatique/la4.pdf'),
(12, 'INTRODUCTION Ã€ L\'ALGORITHMIQUE', 'faculte_des_sciences/filiere_informatique/la4.pdf'),
(13, 'INTRODUCTION Ã€ L\'ALGORITHMIQUE', 'faculte_des_sciences/filiere_informatique/la4.pdf'),
(14, 'INTRODUCTION Ã€ L\'ALGORITHMIQUE', 'faculte_des_sciences/filiere_informatique/la4.pdf'),
(15, 'INTRODUCTION Ã€ L\'ALGORITHMIQUE', 'faculte_des_sciences/filiere_informatique/la4.pdf'),
(16, 'INTRODUCTION Ã€ L\'ALGORITHMIQUE', 'faculte_des_sciences/filiere_informatique/la4.pdf'),
(17, 'INTRODUCTION Ã€ L\'ALGORITHMIQUE', 'faculte_des_sciences/filiere_informatique/la4.pdf'),
(18, 'INTRODUCTION Ã€ L\'ALGORITHMIQUE', 'faculte_des_sciences/filiere_informatique/la4.pdf'),
(19, 'INTRODUCTION Ã€ L\'ALGORITHMIQUE', 'faculte_des_sciences/filiere_informatique/la4.pdf'),
(20, 'INTRODUCTION Ã€ L\'ALGORITHMIQUE', 'faculte_des_sciences/filiere_informatique/la4.pdf'),
(21, 'INTRODUCTION Ã€ L\'ALGORITHMIQUE', 'faculte_des_sciences/filiere_informatique/la4.pdf'),
(22, 'INTRODUCTION Ã€ L\'ALGORITHMIQUE', 'faculte_des_sciences/filiere_informatique/la4.pdf'),
(23, 'ARCHITECTURE DES ORDINATEURS', 'faculte_des_sciences/filiere_informatique/la4.pdf'),
(24, 'ARCHITECTURE DES ORDINATEURS', 'faculte_des_sciences/filiere_informatique/la4.pdf'),
(25, 'STRUCTURES DE DONNNÃ‰S', 'faculte_des_sciences/filiere_informatique/la4.pdf');

-- --------------------------------------------------------

--
-- Structure de la table `arnold`
--

DROP TABLE IF EXISTS `arnold`;
CREATE TABLE IF NOT EXISTS `arnold` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `course_title` varchar(80) NOT NULL,
  `course_link` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `arnold`
--

INSERT INTO `arnold` (`id`, `course_title`, `course_link`) VALUES
(1, 'INTRODUCTION A L\'ALGORITHMIQUE', 'faculte_des_sciences/filiere_informatique/la.pdf'),
(2, 'ARCHITECTURE DES ORDINATEURS', 'faculte_des_sciences/filiere_informatique/la1.pdf'),
(3, 'ANALYSE 1', 'faculte_des_sciences/filiere_informatique/la3.pdf'),
(4, 'INTRODUCTION A LA PROGRAMMATION FONCTIONNELLE', 'faculte_des_sciences/filiere_informatique/la6.pdf');

-- --------------------------------------------------------

--
-- Structure de la table `chat`
--

DROP TABLE IF EXISTS `chat`;
CREATE TABLE IF NOT EXISTS `chat` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `le_pseudo` varchar(50) NOT NULL,
  `le_message` text NOT NULL,
  `message_link` varchar(255) DEFAULT NULL,
  `notification` varchar(500) DEFAULT NULL,
  `date_time` datetime DEFAULT NULL,
  `color` varchar(20) DEFAULT NULL,
  `filiature` int(11) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `chat`
--

INSERT INTO `chat` (`id`, `le_pseudo`, `le_message`, `message_link`, `notification`, `date_time`, `color`, `filiature`) VALUES
(1, 'acronyme', 'hi', '', NULL, '2020-05-21 03:29:11', 'rgb(1,1,1)', 1),
(2, 'acronyme', 'L\' interface du site est asser attrayant...', '', NULL, '2020-05-21 03:29:42', 'rgb(1,1,1)', 0),
(3, 'acronyme', 'Le web master ?', '<div class=\"link_message\" id=\"link_message\" style=\"border-left: 3px solid rgb(1,110,100)\"><b style=\"color: rgb(1,110,100);\" id=\"pseudobd\" pseudobd=\"acronyme\">acronyme</b><br>L\' interface du site est asser attrayant...</div>', NULL, '2020-05-21 03:29:58', 'rgb(1,1,1)', 0),
(4, 'maestros21', 'salut', '<div class=\"link_message\" id=\"link_message\" style=\"border-left: 3px solid rgb(1,1,1)\"><b style=\"color: rgb(1,1,1);\" id=\"pseudobd\" pseudobd=\"acronyme\">acronyme</b><br>hi</div>', NULL, '2020-05-21 03:31:15', 'rgb(1,101,501)', 1),
(5, 'maestros21', 'Je trouve aussi', '<div class=\"link_message\" id=\"link_message\" style=\"border-left: 3px solid rgb(1,1,1)\"><b style=\"color: rgb(1,1,1);\" id=\"pseudobd\" pseudobd=\"acronyme\">acronyme</b><br>L\' interface du site est asser attrayant...</div>', NULL, '2020-05-21 03:31:45', 'rgb(1,101,501)', 0),
(6, 'maestros21', 'A la limite genial', '<div class=\"link_message\" id=\"link_message\" style=\"border-left: 3px solid rgb(1,110,100)\"><b style=\"color: rgb(1,110,100);\" id=\"pseudobd\" pseudobd=\"maestros21\">maestros21</b><br>Je trouve aussi</div>', NULL, '2020-05-21 03:32:23', 'rgb(1,101,501)', 0),
(7, 'acronyme', 'yo', '<div class=\"link_message\" id=\"link_message\" style=\"border-left: 5px solid rgb(1,101,501)\"><b style=\"color: rgb(1,101,501);\" id=\"pseudobd\" pseudobd=\"maestros21\">maestros21</b><br>salut</div>', NULL, '2020-05-21 08:41:37', 'rgb(1,1,1)', 1),
(8, 'acronyme', 'yo', '', NULL, '2020-05-21 12:22:26', 'rgb(1,1,1)', 0),
(9, 'acronyme', 'au top', '<div class=\"link_message\" id=\"link_message\" style=\"border-left: 5px solid rgb(1,101,501)\"><b style=\"color: rgb(1,101,501);\" id=\"pseudobd\" pseudobd=\"maestros21\">maestros21</b><br>Je trouve aussi</div>', NULL, '2020-05-21 12:22:39', 'rgb(1,1,1)', 0),
(10, 'acronyme', 'yo', '', NULL, '2020-05-21 14:04:48', 'rgb(1,1,1)', 0),
(11, 'acronyme', 'Jeme suis beaucoup entrene pour realier ce site web donc svp ne pietiner pas tans d\'heurs de travails comme sa', '<div class=\"link_message\" id=\"link_message\" style=\"border-left: 5px solid rgb(1,110,100)\"><b style=\"color: rgb(1,110,100);\" id=\"pseudobd\" pseudobd=\"acronyme\">acronyme</b><br>L\' interface du site est asser attrayant...</div>', NULL, '2020-05-21 14:27:44', 'rgb(1,1,1)', 0),
(17, 'acronyme', 'salut ', '', NULL, '2020-05-23 13:25:38', 'rgb(1,1,1)', 0),
(18, 'acronyme', 'lien', '<div class=\"link_message\" id=\"link_message\" style=\"border-left: 5px solid rgb(1,101,501)\"><b style=\"color: rgb(1,101,501);\" id=\"pseudobd\" pseudobd=\"maestros21\">maestros21</b><br>Je trouve aussi</div>', NULL, '2020-05-23 13:26:51', 'rgb(1,1,1)', 0),
(24, 'acronyme', 'yo', '', NULL, '2020-05-23 13:49:29', 'rgb(1,1,1)', 0),
(25, 'acronyme', 'hi', '<div class=\"link_message\" id=\"link_message\" style=\"border-left: 5px solid rgb(1,110,100)\"><b style=\"color: rgb(1,110,100);\" id=\"pseudobd\" pseudobd=\"acronyme\">acronyme</b><br><a href=\"2\">Le web master ?</a></div>', NULL, '2020-05-24 13:25:12', 'rgb(1,1,1)', 0),
(26, 'acronyme', 'yo', '<div class=\"link_message\" id=\"link_message\" style=\"border-left: 5px solid rgb(1,110,100)\"><b style=\"color: rgb(1,110,100);\" id=\"pseudobd\" pseudobd=\"acronyme\">acronyme</b><br><a href=\"12\">lien</a></div>', NULL, '2020-05-24 19:45:27', 'rgb(1,1,1)', 0);

-- --------------------------------------------------------

--
-- Structure de la table `commentaires`
--

DROP TABLE IF EXISTS `commentaires`;
CREATE TABLE IF NOT EXISTS `commentaires` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(250) NOT NULL,
  `message` text NOT NULL,
  `date_publication` datetime NOT NULL,
  `j_aime` int(11) DEFAULT '0',
  `j_aime_pas` int(11) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `commentaires`
--

INSERT INTO `commentaires` (`id`, `pseudo`, `message`, `date_publication`, `j_aime`, `j_aime_pas`) VALUES
(1, 'Maestros', 'salut, ce messag est un message de test surtout faites pas attention a lui', '2020-05-24 00:00:00', 0, 0),
(2, 'maestros21', 'yo', '2020-05-25 08:56:17', 0, 0),
(4, 'acronyme', 'Message de test', '2020-05-25 09:06:13', 0, 0),
(5, 'acronyme', 'yo', '2020-05-25 09:07:38', 0, 0),
(6, 'acronyme', 'nouveau test', '2020-05-25 09:09:04', 0, 0);

-- --------------------------------------------------------

--
-- Structure de la table `lelouche_lamperouge`
--

DROP TABLE IF EXISTS `lelouche_lamperouge`;
CREATE TABLE IF NOT EXISTS `lelouche_lamperouge` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `course_title` varchar(80) NOT NULL,
  `course_link` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `lelouche_lamperouge`
--

INSERT INTO `lelouche_lamperouge` (`id`, `course_title`, `course_link`) VALUES
(1, 'INTRODUCTION A L\'ALGORITHMIQUE', 'faculte_des_sciences/filiere_informatique/la.pdf'),
(2, 'ARCHITECTURE DES ORDINATEURS', 'faculte_des_sciences/filiere_informatique/la1.pdf'),
(3, 'PROGRAMMATION STRUCTUREE (C OU PYTHON)', 'faculte_des_sciences/filiere_informatique/la2.pdf'),
(4, 'PROGRAMMATION STRUCTUREE (C OU PYTHON)', 'faculte_des_sciences/filiere_informatique/la2.pdf'),
(5, 'LANGUE ANGLAISE 1', 'faculte_des_sciences/filiere_informatique/la4.pdf'),
(6, 'LANGUE ANGLAISE 1', 'faculte_des_sciences/filiere_informatique/la4.pdf');

-- --------------------------------------------------------

--
-- Structure de la table `maestros21`
--

DROP TABLE IF EXISTS `maestros21`;
CREATE TABLE IF NOT EXISTS `maestros21` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `course_title` varchar(80) NOT NULL,
  `course_link` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `marveldaryl`
--

DROP TABLE IF EXISTS `marveldaryl`;
CREATE TABLE IF NOT EXISTS `marveldaryl` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `course_title` varchar(80) NOT NULL,
  `course_link` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `marveldaryl`
--

INSERT INTO `marveldaryl` (`id`, `course_title`, `course_link`) VALUES
(1, 'INTRODUCTION Ã€ L\'ALGORITHMIQUE', 'faculte_des_sciences/filiere_informatique/la4.pdf');

-- --------------------------------------------------------

--
-- Structure de la table `mateo21`
--

DROP TABLE IF EXISTS `mateo21`;
CREATE TABLE IF NOT EXISTS `mateo21` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `course_title` varchar(80) NOT NULL,
  `course_link` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `mikassaackerman`
--

DROP TABLE IF EXISTS `mikassaackerman`;
CREATE TABLE IF NOT EXISTS `mikassaackerman` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `course_title` varchar(80) NOT NULL,
  `course_link` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `mikassaackerman`
--

INSERT INTO `mikassaackerman` (`id`, `course_title`, `course_link`) VALUES
(4, 'ANALYSE 1', 'faculte_des_sciences/filiere_informatique/la4.pdf');

-- --------------------------------------------------------

--
-- Structure de la table `visiteur`
--

DROP TABLE IF EXISTS `visiteur`;
CREATE TABLE IF NOT EXISTS `visiteur` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pseudonyme` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `addresse_email` varchar(100) NOT NULL,
  `date_arrivee` date NOT NULL,
  `nombre_cours_suivis` int(11) NOT NULL,
  `description` text,
  PRIMARY KEY (`id`),
  UNIQUE KEY `pseudonyme` (`pseudonyme`),
  UNIQUE KEY `addresse_email` (`addresse_email`)
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `visiteur`
--

INSERT INTO `visiteur` (`id`, `pseudonyme`, `password`, `addresse_email`, `date_arrivee`, `nombre_cours_suivis`, `description`) VALUES
(1, 'acronyme', '9b5bb47979f8d514d6e73cedf951eb9c488a388e', 'acronyme@gmail.com', '2020-03-27', 25, NULL),
(2, 'Maestros Roslyn', '3ac4a1d96e937fe8b77488027b93a71445579767', 'Roslyn21@gmail.com', '2020-03-27', 1, NULL),
(3, 'lelouche_lamperouge', '57bedca816dd3ecfaa8fc55f2a1350398900d1f2', 'lelouche_lamperougef21@gmail.com', '2020-03-27', 6, NULL),
(4, 'Arnold', '15830c454f73dbe1a75405496d9f26d6773e7601', 'acronymej@gmail.com', '2020-03-30', 4, NULL),
(5, 'maestros21', 'e7c9937c87b6510eaaed905cc65403dd790e85ea', 'maestros21@gmail.com', '2020-03-30', 0, NULL),
(6, 'mateo21', 'd54f34616aae47ea0424d5674addb6d678502b4d', 'mateo21@gmail.com', '2020-04-22', 0, NULL),
(23, 'Mikassa Ackerman', '0714dc616af0952fd1685408641d796210cc245a', 'mikassa@gmail.com', '2020-05-22', 1, 'par un vielle ami.'),
(24, 'Marvel Daryl', 'ab715f52cc9249d43c261012fecc9775b5814ed9', 'daryldudrame@gmail.com', '2020-05-22', 2, 'C\'est le site web d\'un ami cher dont il est bien Normale que je le visiste.');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
