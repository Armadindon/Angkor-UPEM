-- phpMyAdmin SQL Dump
-- version 4.6.6deb4
-- https://www.phpmyadmin.net/
--
-- Client :  sqletud.u-pem.fr
-- Généré le :  Ven 17 Mai 2019 à 11:23
-- Version du serveur :  5.5.62-0+deb8u1-log
-- Version de PHP :  7.0.33-0+deb9u3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `qsinh_db`
--

-- --------------------------------------------------------

--
-- Structure de la table `anecdote`
--

CREATE TABLE `anecdote` (
  `idAnecdote` int(11) NOT NULL,
  `texte` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `anecdote`
--

INSERT INTO `anecdote` (`idAnecdote`, `texte`) VALUES
(1, '50% des touristes internationaux visitent le Cambodge pour voir ce monument religieux. Comme pour montrer à quel point ils sont fiers de leur patrimoine, le monument figure sur leur drapeau national. Le drapeau actuel de l\'Afghanistan est le seul autre drapeau national à comporter un monument national.'),
(2, 'Angkor Vat est la meilleure représentation du style classique de l\'architecture khmère.'),
(3, 'Le temple a été construit pour représenter le Mont Meru, la demeure du seigneur de la mythologie hindoue de Brahma et des demi-dieux devtas.'),
(4, 'Contrairement aux autres temples de la région qui sont orientés vers l\'est, ce temple était orienté vers l\'ouest. Il fait face au coucher du soleil et le soleil du soir ajoute à sa beauté le soir.'),
(5, 'Ce n\'est qu\'au XVIe siècle que le temple fut connu sous son nom actuel. Auparavant, il était connu sous le nom de Pisnulok, le titre officiel du roi khmer Suryavarman II qui l\'a construit.'),
(6, 'En reconnaissance du rôle important qu\'elle a joué dans l\'hindouisme et le bouddhisme, l\'UNESCO l\'a déclarée site du patrimoine mondial en 1992.'),
(7, 'Bien que la plupart des touristes connaissent le complexe du temple d\'Angkor Vat, la ville comprend Angkor Thom et le temple du Bayon qui sont également intrigants.'),
(8, 'Contrairement à ses prédécesseurs qui appartenaient à la lignée des rois qui pratiquaient le \"Shaivisme\" et donc leur Dieu suprême était le Seigneur Shiva ; Suryavarman II a rompu avec eux et a construit ce temple dédié au Seigneur Vishnu.'),
(9, 'Les décorations sur les murs du temple ont un caractère hindou unique qui raconte une histoire. Ils ont des fables et des images de mythes qui racontent l\'origine du temple dans la religion hindoue.'),
(10, 'Le site reçoit plus de 2 millions de visiteurs chaque année pour une raison bien précise : il dégage une aura de divinité que l\'on ne trouve que dans les sanctuaires incas et mayas.\r\nAngkor Wat est un spectacle à voir. C\'est une belle toile de fond que l\'on chérit pour toujours. Sa beauté appartient plus aux cartes postales qu\'à la réalité... et pourtant, le temple est aussi réel qu\'ils viennent. Si je ne le savais pas, je dirais que le temple est un vaisseau spatial alien prêt à s\'envoler dans l\'espace à tout moment.\r\n'),
(11, 'A l’équinoxe du printemps, le soleil pénètre dans un tunnel à 12h, celui-ci emmène les rayons à 30m, enterré dans le sol, dans une chambre secrète qui renferme le tombeau du roi qui a construit Angkor'),
(12, 'La construction d’Angkor a pris une trentaine d’année, tandis qu’à l’époque, pour nos cathédrales par exemple, cela prenait plusieurs siècles. C’est dire la force de main d’oeuvre qu’il y avait.'),
(13, 'Les pierres utilisée provenaient de carrière situé à 30km du temple. Pour les amener, les khmers ont créé des canaux de navigation et le courant amenait directement les pierres au site.'),
(14, 'Angkor est créé sur un sol très mou. Comment cette bâtisse a pu tenir dans le temps ? Autour du temple, de grands canaux ont été creusé, l’eau ainsi mêlé au sable fait durcir le sol, le site tient donc de cette manière sans fondation souterraine.'),
(15, 'A l’âge d’or d’Angkor, 700000 personnes y vivaient, c’était la plus grande ville du monde. Aujourd’hui ce n’est plus qu’une jungle. '),
(16, 'Chacune des pierres ont été taillé afin de s\'emboîter parfaitement avec sa précédente, le temple tient donc sans ciment mais juste par superposition des pierres.'),
(17, 'Le fer tenant les pierres entre elles, a été créé à 200km du site. C’est une ethnie khmer qui était chargé de le fabriquer, de le faire fondre...');

-- --------------------------------------------------------

--
-- Structure de la table `commentaire`
--

CREATE TABLE `commentaire` (
  `idCommentaire` int(11) NOT NULL,
  `nomAuteur` varchar(50) NOT NULL,
  `texte` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `statut` varchar(20) NOT NULL DEFAULT 'EN ATTENTE'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `marche`
--

CREATE TABLE `marche` (
  `ticker` varchar(20) NOT NULL,
  `nomIndice` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `marche`
--

INSERT INTO `marche` (`ticker`, `nomIndice`) VALUES
('EPA', 'CAC 40'),
('NASDAQ', 'National Association of Securities Dealers Automated Quotations');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `anecdote`
--
ALTER TABLE `anecdote`
  ADD PRIMARY KEY (`idAnecdote`);

--
-- Index pour la table `commentaire`
--
ALTER TABLE `commentaire`
  ADD PRIMARY KEY (`idCommentaire`);

--
-- Index pour la table `marche`
--
ALTER TABLE `marche`
  ADD PRIMARY KEY (`ticker`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `anecdote`
--
ALTER TABLE `anecdote`
  MODIFY `idAnecdote` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT pour la table `commentaire`
--
ALTER TABLE `commentaire`
  MODIFY `idCommentaire` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
