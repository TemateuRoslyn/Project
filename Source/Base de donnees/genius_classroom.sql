-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  lun. 01 juin 2020 à 12:08
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
(21, 'INTRODUCTION Ã€ L\'ALGORITHMIQUE', 'faculte_des_sciences/filiere_informatique/la4.pdf'),
(25, 'STRUCTURES DE DONNNÃ‰S', 'faculte_des_sciences/filiere_informatique/la4.pdf');

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
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;

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
(26, 'acronyme', 'yo', '<div class=\"link_message\" id=\"link_message\" style=\"border-left: 5px solid rgb(1,110,100)\"><b style=\"color: rgb(1,110,100);\" id=\"pseudobd\" pseudobd=\"acronyme\">acronyme</b><br><a href=\"12\">lien</a></div>', NULL, '2020-05-24 19:45:27', 'rgb(1,1,1)', 0),
(27, 'acronyme', 'du nouveau ici ?', '', NULL, '2020-06-01 11:20:07', 'rgb(1,1,1)', 0),
(28, 'maestros21', 'hola genius corporation.', '', NULL, '2020-06-01 11:30:51', 'rgb(1,101,501)', 1),
(29, 'maestros21', 'les nouvelles fonctionnalites sont vraiment tres attraillantes merci hahah', '', NULL, '2020-06-01 11:31:35', 'rgb(1,101,501)', 0);

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
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `commentaires`
--

INSERT INTO `commentaires` (`id`, `pseudo`, `message`, `date_publication`, `j_aime`, `j_aime_pas`) VALUES
(1, 'Maestros', 'Un message de test', '2020-05-24 00:00:00', 0, 0),
(9, 'acronyme', 'salut les geeks.', '2020-06-01 00:37:21', 0, 0),
(7, 'acronyme', 'Sinon  pour les vus et les likes vous pouvez faire quelque chose ?', '2020-06-01 00:15:47', 0, 0),
(8, 'maestros21', 'salut, ce messag est un message de test surtout faites pas attention a lui..', '2020-06-01 00:18:50', 0, 0),
(11, 'acronyme', 'l\'option des commentaire est vraiment tres cool', '2020-06-01 02:23:09', 0, 0),
(12, 'maestros21', 'Un message de test..', '2020-06-01 11:32:34', 0, 0);

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
  `profil` varchar(200) DEFAULT 'usr_profil/utilisateur.png',
  PRIMARY KEY (`id`),
  UNIQUE KEY `pseudonyme` (`pseudonyme`),
  UNIQUE KEY `addresse_email` (`addresse_email`)
) ENGINE=MyISAM AUTO_INCREMENT=38 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `visiteur`
--

INSERT INTO `visiteur` (`id`, `pseudonyme`, `password`, `addresse_email`, `date_arrivee`, `nombre_cours_suivis`, `description`, `profil`) VALUES
(1, 'acronyme', '9b5bb47979f8d514d6e73cedf951eb9c488a388e', 'acronyme@gmail.com', '2020-03-27', 25, NULL, 'usr_profil/utilisateur.png'),
(5, 'maestros21', 'e7c9937c87b6510eaaed905cc65403dd790e85ea', 'maestros21@gmail.com', '2020-03-30', 0, NULL, 'usr_profil/utilisateur.png');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
