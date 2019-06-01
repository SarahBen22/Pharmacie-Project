-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le :  sam. 01 juin 2019 à 17:33
-- Version du serveur :  5.7.11
-- Version de PHP :  7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `pharmacie`
--

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`id`, `type`) VALUES
(1, 'homeopathie'),
(2, 'phytotherapie'),
(3, 'cosmetologie'),
(4, 'veterinaire'),
(5, 'materiel_medical'),
(6, 'orthopedie'),
(7, 'univers bébé');

-- --------------------------------------------------------

--
-- Structure de la table `categories_pro`
--

CREATE TABLE `categories_pro` (
  `id` int(11) NOT NULL,
  `type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `categories_pro`
--

INSERT INTO `categories_pro` (`id`, `type`) VALUES
(1, 'infirmière'),
(2, 'medecin generaliste'),
(3, 'Ostéopathe'),
(4, 'Dentiste'),
(5, 'ORL'),
(6, 'Ophtalmo'),
(7, 'Podologue');

-- --------------------------------------------------------

--
-- Structure de la table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `nom_id` int(11) NOT NULL,
  `commentaires` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `produits`
--

CREATE TABLE `produits` (
  `id` int(11) NOT NULL,
  `nom_produit` varchar(50) NOT NULL,
  `id_categories` int(11) NOT NULL,
  `prix` decimal(4,0) NOT NULL,
  `image_produit` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `produits`
--

INSERT INTO `produits` (`id`, `nom_produit`, `id_categories`, `prix`, `image_produit`) VALUES
(1, 'chaussures ortho', 6, '100', '');

-- --------------------------------------------------------

--
-- Structure de la table `professionnels_sante`
--

CREATE TABLE `professionnels_sante` (
  `id` int(11) NOT NULL,
  `id_categories_pro` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `adresse` text NOT NULL,
  `telephone` varchar(10) NOT NULL,
  `email` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `professionnels_sante`
--

INSERT INTO `professionnels_sante` (`id`, `id_categories_pro`, `nom`, `prenom`, `adresse`, `telephone`, `email`) VALUES
(1, 1, 'Faz', 'Sabrina', '77 rue Maurice Rigolet, 91550 Paray-Vieille-Poste', '0769392642', ''),
(2, 1, 'Osskanian', 'Dimitri', '77 rue Maurice Rigolet, 91550 Paray-Vieille-Poste', '0769392642', ''),
(3, 1, 'Domet', 'Hélène', '10, avenue du Général de Gaulle, 91260 Juvisy-sur-Orge', '0169242735', ''),
(4, 1, 'Defosse', 'David', '10, avenue du Général de Gaulle, 91260 Juvisy-sur-Orge', '0169242735', ''),
(5, 1, 'Saïd-Dauvergne', 'Fatima', '4 rue de l\'entente, 91200 Athis-Mons', '0169382767', ''),
(6, 1, 'Clabaut', 'Aurore', '4 rue de l\'entente, 91200 Athis-Mons', '0169382767', ''),
(7, 1, 'Benisti', 'Illiana', '4 rue de l\'entente, 91200 Athis-Mons', '0678978076', ''),
(8, 1, 'Beneat', 'Frédéric', '4 rue de l\'entente, 91200 Athis-Mons', '0678978076', ''),
(9, 3, 'Boukhalfa', 'Chahinèze', '175 Avenue Jules Vallès, 91200 Athis-Mons', '0178846674', 'chahineze.boukhalfa@gmail.com'),
(10, 3, 'Benteo', 'Nathan', '', '0660145637', 'benteo.nathan@gmail.com'),
(11, 7, 'Brece Duong', 'Caroline', '131 av du 18 avril, 91200 Athis-Mons', '0160484203', ''),
(12, 1, 'Addario', 'Déborah', '5 A r Montagne de Mons, 91200 Athis-Mons', '0169243892', ''),
(13, 2, 'Saldanha Gomes', 'Cécilia', '4 Rue de l\'Entente, 91200 Athis-Mons', '0185742990', ''),
(14, 2, 'Cohen', 'Gérard', '61 Bis rue Mutualité, 91200 Athis-Mons', '0169383838', ''),
(15, 2, 'Cachin', 'Jean-Charles', '131 av 18 avril, 91200 Athis-Mons', '0169388871', ''),
(16, 2, 'Dubois', 'Pierre', '4 rue l\'entente, 91200 Athis-Mons\r\n', '0185742990', ''),
(17, 2, '', '', '', '', '');

-- --------------------------------------------------------

--
-- Structure de la table `profil_client`
--

CREATE TABLE `profil_client` (
  `id` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `adresse` varchar(50) NOT NULL,
  `telephone` varchar(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mot_de_passe` varchar(4) NOT NULL,
  `admin` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `profil_client`
--

INSERT INTO `profil_client` (`id`, `nom`, `prenom`, `adresse`, `telephone`, `email`, `mot_de_passe`, `admin`) VALUES
(1, 'dupont', 'maria', '', '0', 'mardup@test.com', 'jpp', 0);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `categories_pro`
--
ALTER TABLE `categories_pro`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nom_id_FK` (`nom_id`);

--
-- Index pour la table `produits`
--
ALTER TABLE `produits`
  ADD PRIMARY KEY (`id`),
  ADD KEY `produits_categories_FK` (`id_categories`);

--
-- Index pour la table `professionnels_sante`
--
ALTER TABLE `professionnels_sante`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Id_cat_pro` (`id_categories_pro`);

--
-- Index pour la table `profil_client`
--
ALTER TABLE `profil_client`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `produits`
--
ALTER TABLE `produits`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `profil_client`
--
ALTER TABLE `profil_client`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `messages`
--
ALTER TABLE `messages`
  ADD CONSTRAINT `nom_id_FK` FOREIGN KEY (`nom_id`) REFERENCES `profil_client` (`id`);

--
-- Contraintes pour la table `produits`
--
ALTER TABLE `produits`
  ADD CONSTRAINT `produits_categories_FK` FOREIGN KEY (`id_categories`) REFERENCES `categories` (`id`);

--
-- Contraintes pour la table `professionnels_sante`
--
ALTER TABLE `professionnels_sante`
  ADD CONSTRAINT `Id_catpro_FK` FOREIGN KEY (`id_categories_pro`) REFERENCES `categories_pro` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
