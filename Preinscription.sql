-- --------------------------------------------------------
-- Hôte :                        localhost
-- Version du serveur:           5.7.24 - MySQL Community Server (GPL)
-- SE du serveur:                Win64
-- HeidiSQL Version:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Listage de la structure de la base pour preinscription
CREATE DATABASE IF NOT EXISTS `preinscription` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci */;
USE `preinscription`;

-- Listage de la structure de la table preinscription. admins
CREATE TABLE IF NOT EXISTS `admins` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table preinscription.admins : ~1 rows (environ)
/*!40000 ALTER TABLE `admins` DISABLE KEYS */;
INSERT INTO `admins` (`id`, `fullname`, `username`, `password`) VALUES
	(1, 'meriem lachhab', 'meriem', 'meriem123');
/*!40000 ALTER TABLE `admins` ENABLE KEYS */;

-- Listage de la structure de la table preinscription. etudiants
CREATE TABLE IF NOT EXISTS `etudiants` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `etat` int(11) NOT NULL DEFAULT '0',
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adresse` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ville` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `anne_bac` year(4) NOT NULL,
  `etabliss` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_filiere` int(11) NOT NULL,
  `id_pays` int(11) NOT NULL,
  `id_serie` int(11) NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cne` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `note` float NOT NULL,
  `tel` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `sexe` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_naiss` date NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_filiere` (`id_filiere`),
  KEY `id_pays` (`id_pays`),
  KEY `id_serie` (`id_serie`),
  CONSTRAINT `id_filiere` FOREIGN KEY (`id_filiere`) REFERENCES `filiere` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `id_pays` FOREIGN KEY (`id_pays`) REFERENCES `pays` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `id_serie` FOREIGN KEY (`id_serie`) REFERENCES `serie_bac` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table preinscription.etudiants : ~8 rows (environ)
/*!40000 ALTER TABLE `etudiants` DISABLE KEYS */;
INSERT INTO `etudiants` (`id`, `etat`, `nom`, `prenom`, `adresse`, `email`, `ville`, `anne_bac`, `etabliss`, `image`, `id_filiere`, `id_pays`, `id_serie`, `password`, `cne`, `cin`, `note`, `tel`, `sexe`, `date_naiss`) VALUES
	(1, 1, 'Assma', 'Assma', 'Saada', 'assmadaaif@gmail.com', 'Casablanca', '2020', 'Ibn Rochd', 'clientjpg.jpg', 1, 1, 1, 'asma123hhh', 'K13345543', 'HH67543', 18, '0678132458', 'Feminin', '2022-12-22'),
	(2, 1, 'samira', 'Mounir', '', 'samira@gmail.com', 'SAFI', '2013', 'Imam Ali', '2.jpg', 2, 1, 1, 'samira123', 'K8750069', 'HH675432', 19, '0697750451', 'Feminin', '2022-12-09'),
	(3, 1, 'meriem', 'lachhab', '', 'meriem@gmail.com', 'SAFI', '2019', 'Almotanabi', 'avatar-11.png', 1, 1, 1, 'meriem123', 'K133473399', 'HH187649', 15, '0766887766', 'Feminin', '2001-12-16'),
	(4, 1, 'Youssef', 'Monfi', 'Hay Mohamadi', 'youssef@gmail.com', 'CASABLANCA', '2019', 'Ibn Sina', '3.jpg', 2, 1, 1, 'youssef123', 'K1338765', 'HH187649', 15, '0655443322', 'Masculin', '2001-12-16'),
	(5, 1, 'Hamid', 'Sirami', 'Welfa', 'hamidf@gmail.com', 'CASABLANCA', '2019', 'Ibn Sina', '3.jpg', 2, 1, 2, 'hamid123', 'K1333099', 'HH187649', 15, '0688978654', 'Masculin', '2001-12-16'),
	(6, 0, 'Lamia', 'Nasiri', 'Sada', 'lamia@gmail.com', 'SAFI', '2019', 'Imam Ali', '4.jpg', 2, 1, 3, 'hamid123', 'K1333099', 'HH187649', 15, '0675432198', 'Masculin', '2001-12-16'),
	(10, 0, 'Almoloa', 'bochra', 'Saada', 'bochra@gmail.com', 'SAFI', '2019', 'Moulay Ismail', '2.jpg', 2, 1, 2, 'hhhhhhh', 'K76543214', 'HH187649', 12, '0697750451', 'Feminin', '2022-12-23'),
	(11, 0, 'Elmalki', 'Fadwa', 'Saada', 'fadwa@gmail.com', 'Tanger', '2018', 'Ibn Khaldoun', 'avatar-10.png', 1, 1, 1, 'fadwa123', 'K6654325265', 'HH653436', 15, '067254312', 'Feminin', '2022-12-17');
/*!40000 ALTER TABLE `etudiants` ENABLE KEYS */;

-- Listage de la structure de la table preinscription. filiere
CREATE TABLE IF NOT EXISTS `filiere` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `libelle` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table preinscription.filiere : ~4 rows (environ)
/*!40000 ALTER TABLE `filiere` DISABLE KEYS */;
INSERT INTO `filiere` (`id`, `libelle`) VALUES
	(1, 'TIM'),
	(2, 'TIM'),
	(3, 'GI'),
	(4, 'GIM');
/*!40000 ALTER TABLE `filiere` ENABLE KEYS */;

-- Listage de la structure de la table preinscription. parametre
CREATE TABLE IF NOT EXISTS `parametre` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `debut` date NOT NULL,
  `fin` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table preinscription.parametre : ~2 rows (environ)
/*!40000 ALTER TABLE `parametre` DISABLE KEYS */;
INSERT INTO `parametre` (`id`, `debut`, `fin`) VALUES
	(1, '2022-12-07', '2022-12-06'),
	(3, '2022-12-30', '2022-12-31');
/*!40000 ALTER TABLE `parametre` ENABLE KEYS */;

-- Listage de la structure de la table preinscription. pays
CREATE TABLE IF NOT EXISTS `pays` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `libelle` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table preinscription.pays : ~5 rows (environ)
/*!40000 ALTER TABLE `pays` DISABLE KEYS */;
INSERT INTO `pays` (`id`, `libelle`) VALUES
	(1, 'Maroc'),
	(2, 'France'),
	(3, 'Algerie'),
	(4, 'USA'),
	(5, 'Tunise');
/*!40000 ALTER TABLE `pays` ENABLE KEYS */;

-- Listage de la structure de la table preinscription. serie_bac
CREATE TABLE IF NOT EXISTS `serie_bac` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom_serie` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `pourcentage` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table preinscription.serie_bac : ~3 rows (environ)
/*!40000 ALTER TABLE `serie_bac` DISABLE KEYS */;
INSERT INTO `serie_bac` (`id`, `nom_serie`, `pourcentage`) VALUES
	(1, 'PC', 40),
	(2, 'MATH', 70),
	(3, 'Electricité', 30);
/*!40000 ALTER TABLE `serie_bac` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
