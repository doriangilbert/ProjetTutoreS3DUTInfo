-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 18 jan. 2021 à 21:45
-- Version du serveur :  10.4.14-MariaDB
-- Version de PHP : 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `tutore_s3`
--

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE `client` (
  `numClient` int(11) NOT NULL,
  `nom` varchar(30) NOT NULL,
  `prenom` varchar(30) NOT NULL,
  `adresse` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `motDePasse` varchar(30) NOT NULL,
  `quartier` varchar(30) DEFAULT NULL,
  `producteur` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`numClient`, `nom`, `prenom`, `adresse`, `email`, `motDePasse`, `quartier`, `producteur`) VALUES
(1, 'Musk', 'Elon', '24 rue des\r\nBisounours', 'elon.musk@tesla.com', 'ELOOOOOOON', 'Paix', 0),
(2, 'Dupont', 'Dupont', '22 rue des\r\nBisounours', 'dupont.dupont@gmail.com', 'jEdiRmeme+', 'Paix', 0),
(3, 'Dupond', 'Dupond', '20 rue des\r\nBisounours', 'dupond.dupond@gmail.com', 'jEdiRmeme++', 'Paix', 0),
(4, 'Nemo', 'Capitaine', '18 rue des\r\nBisounours', 'Capitaine.Nemo@gmail.com', 'nAuTiLus18', 'Paix', 0),
(5, 'Xacour', 'Lavier', '28 rue des Bisounours', 'toto.titi@gmail.com', 'toto1234', 'Paix', 1),
(7, 'MONSIEUR', 'Monsieur', '23 rue des Bisounours', 'monsieur@gmail.com', 'monsieur456', NULL, 0);

-- --------------------------------------------------------

--
-- Structure de la table `contient`
--

CREATE TABLE `contient` (
  `numProduit` int(11) NOT NULL,
  `numLivraison` int(11) NOT NULL,
  `quantite` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `contient`
--

INSERT INTO `contient` (`numProduit`, `numLivraison`, `quantite`) VALUES
(1, 1, 6),
(1, 5, 0),
(1, 6, 0),
(1, 55, 2),
(1, 56, 2),
(1, 57, 2),
(1, 58, 2),
(1, 59, 0),
(2, 1, 4),
(2, 5, 0),
(2, 6, 0),
(2, 55, 3),
(2, 56, 3),
(2, 57, 3),
(2, 58, 3),
(3, 5, 0),
(3, 55, 0),
(3, 56, 0),
(3, 57, 0),
(3, 58, 0),
(4, 1, 8),
(4, 5, 0),
(4, 55, 5),
(4, 56, 5),
(4, 57, 5),
(4, 58, 5);

-- --------------------------------------------------------

--
-- Structure de la table `livraison`
--

CREATE TABLE `livraison` (
  `numLivraison` int(11) NOT NULL,
  `nomTypeLivraison` varchar(15) NOT NULL,
  `limitePrix` float NOT NULL,
  `rythmeLivraison` float(3,2) NOT NULL,
  `statut` varchar(20) NOT NULL DEFAULT 'En attente',
  `dateLivraison` date NOT NULL,
  `dateCommande` date NOT NULL,
  `nbPersonne` int(2) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `livraison`
--

INSERT INTO `livraison` (`numLivraison`, `nomTypeLivraison`, `limitePrix`, `rythmeLivraison`, `statut`, `dateLivraison`, `dateCommande`, `nbPersonne`) VALUES
(1, 'ponctuelle', 0, 0.00, 'En attente', '0000-00-00', '0000-00-00', 1),
(2, 'reguliere', 100, 0.50, 'En attente', '0000-00-00', '0000-00-00', 1),
(3, 'ponctuelle', 0, 0.00, 'En attente', '0000-00-00', '0000-00-00', 1),
(4, 'reguliere', 100, 0.50, 'En attente', '0000-00-00', '0000-00-00', 1),
(5, 'groupee', 0, 0.00, 'En attente', '0000-00-00', '0000-00-00', 5),
(6, 'reguliere', 200, 0.50, 'En attente', '0000-00-00', '2020-11-02', 3),
(12, 'reguliere', 25, 2.00, 'En attente', '0000-00-00', '0000-00-00', 5),
(15, 'reguliere', 100, 1.00, 'En attente', '0000-00-00', '0000-00-00', 4),
(17, 'reguliere', 25, 2.00, 'En attente', '0000-00-00', '0000-00-00', 5),
(35, 'reguliere', 35, 2.00, 'En attente', '2021-01-30', '2021-01-15', 6),
(37, 'reguliere', 2000, 1.00, 'En attente', '2021-01-31', '2021-01-15', 100),
(46, 'ponctuelle', 0, 0.00, 'En attente', '2021-01-20', '2021-01-18', 1),
(47, 'ponctuelle', 0, 0.00, 'En attente', '2021-01-20', '2021-01-18', 1),
(48, 'ponctuelle', 0, 0.00, 'En attente', '2021-01-20', '2021-01-18', 1),
(49, 'ponctuelle', 0, 0.00, 'En attente', '2021-01-20', '2021-01-18', 1),
(50, 'ponctuelle', 0, 0.00, 'En attente', '2021-01-20', '2021-01-18', 1),
(51, 'ponctuelle', 0, 0.00, 'En attente', '2021-01-20', '2021-01-18', 1),
(52, 'ponctuelle', 0, 0.00, 'En attente', '2021-01-20', '2021-01-18', 1),
(54, 'ponctuelle', 0, 0.00, 'En attente', '2021-01-20', '2021-01-18', 1),
(55, 'ponctuelle', 0, 0.00, 'En attente', '2021-01-20', '2021-01-18', 1),
(56, 'ponctuelle', 0, 0.00, 'En attente', '2021-01-20', '2021-01-18', 1),
(57, 'ponctuelle', 0, 0.00, 'En attente', '2021-01-20', '2021-01-18', 1),
(58, 'ponctuelle', 0, 0.00, 'En attente', '2021-01-20', '2021-01-18', 1),
(59, 'ponctuelle', 0, 0.00, 'En attente', '2021-01-20', '2021-01-18', 1);

-- --------------------------------------------------------

--
-- Structure de la table `passe`
--

CREATE TABLE `passe` (
  `numLivraison` int(11) NOT NULL,
  `numClient` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `passe`
--

INSERT INTO `passe` (`numLivraison`, `numClient`) VALUES
(1, 1),
(1, 4),
(2, 1),
(3, 4),
(4, 4),
(6, 2),
(12, 3),
(57, 1),
(58, 1),
(59, 1);

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

CREATE TABLE `produit` (
  `lienImage` varchar(400) NOT NULL,
  `numProduit` int(11) NOT NULL,
  `nomFruitLeg` varchar(25) NOT NULL,
  `famille` varchar(10) NOT NULL,
  `quantite` int(3) NOT NULL,
  `prix` float NOT NULL,
  `promotion` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`lienImage`, `numProduit`, `nomFruitLeg`, `famille`, `quantite`, `prix`, `promotion`) VALUES
('https://images.unsplash.com/photo-1490885578174-acda8905c2c6?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1049&q=80', 1, 'Ananas', 'Fruit', 64, 5, 2.5),
('https://images.unsplash.com/photo-1568702846914-96b305d2aaeb?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&auto=format&fit=crop&w=1050&q=80', 2, 'Pomme', 'Fruit', 100, 0.02, 2),
('https://cdn.pixabay.com/photo/2017/10/02/23/14/parsnips-2810706_960_720.jpg', 3, 'Panais', 'Fruit', 39, 0.05, 3),
('https://images.unsplash.com/photo-1603048719539-9ecb4aa395e3?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1062&q=80', 4, 'Pomme de terre', 'Légume', 200, 0.01, 2),
('https://images.unsplash.com/photo-1609889132698-1625aefc7f6b?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1047&q=80', 9, 'Kiwi', 'Fruit', 0, 0.3, 0.1);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`numClient`);

--
-- Index pour la table `contient`
--
ALTER TABLE `contient`
  ADD PRIMARY KEY (`numProduit`,`numLivraison`),
  ADD KEY `contient_Livraison_FK` (`numLivraison`);

--
-- Index pour la table `livraison`
--
ALTER TABLE `livraison`
  ADD PRIMARY KEY (`numLivraison`);

--
-- Index pour la table `passe`
--
ALTER TABLE `passe`
  ADD PRIMARY KEY (`numLivraison`,`numClient`),
  ADD KEY `passe_Client_FK` (`numClient`);

--
-- Index pour la table `produit`
--
ALTER TABLE `produit`
  ADD PRIMARY KEY (`numProduit`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `client`
--
ALTER TABLE `client`
  MODIFY `numClient` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `livraison`
--
ALTER TABLE `livraison`
  MODIFY `numLivraison` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT pour la table `produit`
--
ALTER TABLE `produit`
  MODIFY `numProduit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `contient`
--
ALTER TABLE `contient`
  ADD CONSTRAINT `contient_Livraison_FK` FOREIGN KEY (`numLivraison`) REFERENCES `livraison` (`numLivraison`),
  ADD CONSTRAINT `contient_Produit_FK` FOREIGN KEY (`numProduit`) REFERENCES `produit` (`numProduit`);

--
-- Contraintes pour la table `passe`
--
ALTER TABLE `passe`
  ADD CONSTRAINT `passe_Client_FK` FOREIGN KEY (`numClient`) REFERENCES `client` (`numClient`),
  ADD CONSTRAINT `passe_Livraison_FK` FOREIGN KEY (`numLivraison`) REFERENCES `livraison` (`numLivraison`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
