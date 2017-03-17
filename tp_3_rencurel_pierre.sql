-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Ven 17 Mars 2017 à 12:53
-- Version du serveur :  5.7.14
-- Version de PHP :  5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `tp_3_rencurel_pierre`
--

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE `client` (
  `NumClient` int(11) NOT NULL,
  `NomClient` varchar(255) NOT NULL,
  `PrenomClient` varchar(255) NOT NULL,
  `AdresseClient` varchar(255) NOT NULL,
  `CP` varchar(255) NOT NULL,
  `VilleClient` varchar(255) NOT NULL,
  `PaysClient` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Contenu de la table `client`
--

INSERT INTO `client` (`NumClient`, `NomClient`, `PrenomClient`, `AdresseClient`, `CP`, `VilleClient`, `PaysClient`) VALUES
(1, 'Dark', 'Roger', '15 - 18', '50000', 'JVC', 'Internet'),
(6, 'Dieu', 'Empereur', 'Terra', '40000', 'Trone doree', 'Sectrum Helios');

-- --------------------------------------------------------

--
-- Structure de la table `d_facture`
--

CREATE TABLE `d_facture` (
  `QTE` int(11) NOT NULL,
  `NumFacture` int(11) NOT NULL,
  `NumProduit` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Contenu de la table `d_facture`
--

INSERT INTO `d_facture` (`QTE`, `NumFacture`, `NumProduit`) VALUES
(20, 2, 1),
(30, 2, 2);

-- --------------------------------------------------------

--
-- Structure de la table `facture`
--

CREATE TABLE `facture` (
  `NumFacture` int(11) NOT NULL,
  `DateFacture` date NOT NULL,
  `NumClient` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Contenu de la table `facture`
--

INSERT INTO `facture` (`NumFacture`, `DateFacture`, `NumClient`) VALUES
(9, '2017-03-16', 2),
(2, '2017-03-07', 1);

-- --------------------------------------------------------

--
-- Structure de la table `produits`
--

CREATE TABLE `produits` (
  `NumProduits` int(11) NOT NULL,
  `Des` varchar(64) NOT NULL,
  `PUHT` int(11) NOT NULL,
  `NomProd` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Contenu de la table `produits`
--

INSERT INTO `produits` (`NumProduits`, `Des`, `PUHT`, `NomProd`) VALUES
(1, 'Un Ã©cran 4K de qualitÃ©.', 1200, 'Ecran 4K'),
(2, 'Un GPU nouvelle generation de chez AMD', 400, 'GPU AMD');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `ID` varchar(40) NOT NULL COMMENT 'Pseudo de l''utilisateur',
  `MDP` varchar(66) NOT NULL COMMENT 'Mot de passe de l''utilisateur',
  `NumUser` int(10) NOT NULL COMMENT 'Numero de l''utilisateur'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`ID`, `MDP`, `NumUser`) VALUES
('admin', '$2y$10$5Tk1o0OqWhVuHfb4/SS8xu6vrQuOXv0BW8EGYa2t6m8lr5RxjF.4S', 1);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`NumClient`);

--
-- Index pour la table `d_facture`
--
ALTER TABLE `d_facture`
  ADD PRIMARY KEY (`NumFacture`,`NumProduit`),
  ADD KEY `NumFacture` (`NumFacture`);

--
-- Index pour la table `facture`
--
ALTER TABLE `facture`
  ADD PRIMARY KEY (`NumFacture`),
  ADD KEY `NumClient` (`NumClient`);

--
-- Index pour la table `produits`
--
ALTER TABLE `produits`
  ADD PRIMARY KEY (`NumProduits`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`NumUser`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `client`
--
ALTER TABLE `client`
  MODIFY `NumClient` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT pour la table `facture`
--
ALTER TABLE `facture`
  MODIFY `NumFacture` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT pour la table `produits`
--
ALTER TABLE `produits`
  MODIFY `NumProduits` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `NumUser` int(10) NOT NULL AUTO_INCREMENT COMMENT 'Numero de l''utilisateur', AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
