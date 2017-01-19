-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Jeu 19 Janvier 2017 à 22:05
-- Version du serveur :  5.6.20-log
-- Version de PHP :  5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `micro_blog`
--

-- --------------------------------------------------------

--
-- Structure de la table `messages`
--

CREATE TABLE IF NOT EXISTS `messages` (
`id` int(11) NOT NULL,
  `contenu` text COLLATE utf8_bin NOT NULL,
  `date` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=9 ;

--
-- Contenu de la table `messages`
--

INSERT INTO `messages` (`id`, `contenu`, `date`, `user_id`) VALUES
(1, 'Bonjour', 1484772793, 1),
(2, 'Bienvenue dans le micro blog', 1484772801, 1),
(3, 'De la licence pro DIM', 1484772809, 1),
(4, 'Par AnaÃ¯s Mathias', 1484772817, 1),
(7, 'Bienvenue', 1484859790, 2);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE IF NOT EXISTS `utilisateur` (
`id` int(11) NOT NULL,
  `nom` varchar(55) COLLATE utf8_bin NOT NULL,
  `prenom` varchar(55) COLLATE utf8_bin NOT NULL,
  `email` varchar(55) COLLATE utf8_bin NOT NULL,
  `mdp` varchar(255) COLLATE utf8_bin NOT NULL,
  `pseudo` varchar(55) COLLATE utf8_bin NOT NULL,
  `sid` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=3 ;

--
-- Contenu de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `nom`, `prenom`, `email`, `mdp`, `pseudo`, `sid`) VALUES
(1, 'Admin', 'Admin', 'admin@gmail.com', '202cb962ac59075b964b07152d234b70', 'Administrateur', 'b4900cbed4eb862773c80376a4309233'),
(2, 'Mathias', 'Anais', 'anais.mathias@gmail.com', '202cb962ac59075b964b07152d234b70', 'Nana', 'e399b2d2e1f0d4a709bc0558f29b84b0');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `messages`
--
ALTER TABLE `messages`
 ADD PRIMARY KEY (`id`), ADD KEY `user_id` (`user_id`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `messages`
--
ALTER TABLE `messages`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
