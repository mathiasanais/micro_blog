-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Mar 25 Avril 2017 à 22:41
-- Version du serveur :  5.6.20-log
-- Version de PHP :  5.5.15

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
  `user_id` int(11) NOT NULL,
  `votes` int(11) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=30 ;

--
-- Contenu de la table `messages`
--

INSERT INTO `messages` (`id`, `contenu`, `date`, `user_id`, `votes`) VALUES
(1, 'Bonjour', 1484772793, 1, 5),
(2, 'Bienvenue dans le micro blog', 1484772801, 1, 5),
(3, 'De la licence pro DIM', 1484772809, 1, 3),
(16, '              dfd', 1488286106, 4, 2),
(9, 'Test1', 1484772793, 1, 4),
(10, 'eetestest', 1484772793, 2, 2),
(12, ' Coucou                              ', 1485882707, 2, 3),
(15, '              4\r\n', 1488286101, 4, 2),
(17, '              sdsd', 1488286108, 4, 0),
(18, '              sdsdsddd', 1488286111, 4, 0),
(19, '              vvvvvvv', 1488286113, 4, 0),
(21, '        #coucou\r\n                              ', 1489496608, 2, 0),
(22, '              Bienvenu a #iut\r\n', 1489497225, 2, 0),
(23, '              http://google.com', 1489497703, 2, 0),
(24, '              https://facebook.com', 1489498531, 2, 0),
(25, '              anais.mathias@gmail.com\r\n                              ', 1489511879, 2, 0),
(27, '              coucou', 1489502274, 2, 0),
(28, 'coucou voici http://facebook.com', 1490787295, 2, 0),
(29, '              bonjour', 1492421013, 2, 2);

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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=5 ;

--
-- Contenu de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `nom`, `prenom`, `email`, `mdp`, `pseudo`, `sid`) VALUES
(1, 'Admin', 'Admin', 'admin@gmail.com', '202cb962ac59075b964b07152d234b70', 'Administrateur', 'b4900cbed4eb862773c80376a4309233'),
(2, 'Mathias', 'Anais', 'anais.mathias@gmail.com', '202cb962ac59075b964b07152d234b70', 'Nana', '9bc4d94967ff234d54f008205abac816'),
(3, 'Delattre', 'Thomas', 'toto@sfr.fr', '202cb962ac59075b964b07152d234b70', 'Toto', 'e527cdfcbda5319952aa2e807d053de7'),
(4, 'Delattre', 'Thomas', 'toto@gmail.com', '202cb962ac59075b964b07152d234b70', 'Toto', '084c16f01e129d19294be90db10a0543');

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
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
