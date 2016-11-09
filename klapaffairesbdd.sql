-- MySQL dump 10.13  Distrib 5.7.16, for Linux (x86_64)
--
-- Host: localhost    Database: klapaffairesbdd
-- ------------------------------------------------------
-- Server version	5.7.16-0ubuntu0.16.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `category_video`
--

DROP TABLE IF EXISTS `category_video`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `category_video` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(70) COLLATE utf8_unicode_ci DEFAULT NULL,
  `short_desc` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `long_desc` longtext COLLATE utf8_unicode_ci NOT NULL,
  `picture` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `category_title` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `updated` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_94F49565C3053722` (`category_title`),
  UNIQUE KEY `UNIQ_94F4956564C19C1` (`category`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `category_video`
--

LOCK TABLES `category_video` WRITE;
/*!40000 ALTER TABLE `category_video` DISABLE KEYS */;
INSERT INTO `category_video` VALUES (1,'Art de vivre','Des plaisirs de la table','Des plaisirs de la table aux espaces touristiques en passant par les hébergements et le monde de la culture, partez à la rencontre de différents lieux de vie et autres contrées. L’art de vivre est un concept général qui englobe tous les aspects des savoir-faire humain (recette, peinture, poterie, massage…) et tous les domaines de vie (chambre d\'hôtes, musée, restaurant, galerie, centre de bien-être…). De la découverte des territoires au travers des produits gourmands, des musées et des espaces naturels en passant par les savoir-faire régionaux et locaux, l\'art de vivre donne une photographie d\'un territoire ou des femmes et des hommes le font vivre. Le patrimoine touristique se traduit aux travers des saveurs de proximité dans les plats régionaux et les vins locaux.  L\'art de vivre a pour objectifs principaux la valorisation des produits, des territoires, du patrimoine, des pratiques, des savoir-faire, des métiers, de la recherche et développement et de l\'innovation élargie. Réservez une chambre d\'hôtes, camping, hôtel ou gîtes pour vos week-ends et courts séjours vous permettrons de visiter et savourer les terroirs autrement. Le bien-être passe par les la douceur des mets à déguster mais aussi par la détente du corps et de l’esprit par des balades et autres randonnées (pédestre, vtt, cheval, ski, quad…).','Klap-affaires-video-categorie-art-de-vivre.jpg','l\'Art de vivre','2016-11-02 10:07:37'),(2,'Entreprise','Un métier c\'est une activité humaine','Rencontrez les différents univers du monde de l’entreprise pour mieux comprendre les métiers. Rationnellement, on recense plusieurs grandes fonctions dans l’entreprise production, marketing,  vente ainsi que la fonction recherche et développement. Parcourir les secteurs d’activités (banque, assurance, croisières, divertissement, transports…) et les domaines de compétences (marketing, la communication, le management, les finances..). Un secteur d\'activité économique est le regroupement des entreprises de fabrication, d\'industrie, de commerces ou de services qui ont la même activité principale. Ainsi, l\'entreprise est la plus petite combinaison d\'unités légales qui constitue une unité organisationnelle de production de biens et de services jouissant d\'une certaine autonomie de décision, notamment pour l\'affectation de ses ressources courantes. Quel que soit l’entreprise, une affaire agricole, commerciale ou industrielle, l’entité est dirigée par une personne morale ou physique privée en vue de produire des biens ou services pour le marché (unité économique de production ; firme : entreprise industrielle ou société commerciale). De ce fait, l’économie de marché est un système économique où les prix des biens et des services sont le résultat de décisions prises librement par les particuliers et les entreprises. Un métier est une activité humaine, le plus souvent à but lucratif. C\'est aussi un savoir-faire acquis et ainsi, lorsque le métier le permet, une amélioration de ce savoir. L\'exercice d\'un métier est fréquemment précédé d\'un apprentissage pointu et professionnel.','Klap-affaires-video-categorie-entreprise.jpg','Vidéo d\'entreprise','2016-11-02 10:10:49'),(5,'cv video','Cartes de visite vidéo','Humanisez votre présentation et augmentez votre référencement.  La carte de visite vidéo professionnelle est un support clé de communication qui véhicule l\'image et les références de l\'entreprise à l\'extérieur (collaborateurs, clients, etc.). Elle est personnalisable et contient le nom et prénom du détenteur, son statut ainsi que le logo et les références de l\'entreprise. Par son animation, elle dynamise votre image et donne une véritable impulsion de votre personnalité.  Ainsi, une présentation de votre activité, de votre recherche, de vos besoins au format vidéo en quelques secondes donne à votre interlocuteur confiance et vous permet d’obtenir plus facilement un entretien prospect, recrutement ou stage. Au travers d’un ensemble des techniques relatives à la formation, l\'enregistrement, le traitement ou la transmission de l’information (scénario, prise de parole, coaching, tournage et postsynchronisation), vous aurez un véritable outil de communication. Cela ainsi augmente le référencement naturel sur les moteurs de recherche correspondant aux requêtes visées des Internautes valorisant de ce fait votre image par une communication virale sur nos réseaux et notre chaine YouTube. Des techniques qui consistent à positionner favorablement votre vidéo et ainsi votre profil et/ou entreprise. Elle est ainsi visible sur tous types de supports (ordinateur, smartphone, tablette) et ainsi consultable à tous moments.','Klap-affaires-video-categorie-cv-video.jpg','CV vidéos','2016-11-03 15:27:07'),(6,'Evénements','Les moments clefs de votre vie professionnelle','Restituez par l’image les moments clefs de votre vie professionnelle. La communication événementielle est un outil de communication interne ou externe utilisée par une entreprise dans le but d\'organiser un événement professionnel, sous la forme d\'un salon, un congrès, un festival, une soirée ou encore un cocktail. Il permet ainsi de valoriser l’image de la société ou d’une marque. La communication événementielle peut viser les clients /consommateurs, la presse, les partenaires ou les salariés de l’entreprise (conventions). Certaines opérations « événementielles classiques » relèvent des relations publiques (les événements grand public, d’incentive force de vente, lancement, conventions et congrès,  journées portes ouvertes, conférences et voyages de presse, assemblées générales, roadshows…). La communication événementielle peut-être également un outil de communication hors-média, interne ou externe, utilisé par une entreprise ou une institution ou tout autre organisme (association...). De même, un salon professionnel est un évènement thématique qui regroupe sur un même lieu des prestataires exposants et des visiteurs professionnels d’un domaine d’activités identique et similaire à la recherche de nouveautés. Ainsi, La communication événementielle est une technique de communication basée sur la création d’événements d’entreprise classiques ou voulus comme spectaculaires et sortant de l’ordinaire à l’occasion desquels un public cible est généralement convié.','Klap-affaires-video-categorie-event.jpg','Soirées évènementielles','2016-11-02 13:08:39');
/*!40000 ALTER TABLE `category_video` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `employees`
--

DROP TABLE IF EXISTS `employees`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `employees` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `last_name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `video_description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `video_url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `employees`
--

LOCK TABLES `employees` WRITE;
/*!40000 ALTER TABLE `employees` DISABLE KEYS */;
INSERT INTO `employees` VALUES (1,'Lacassagne','Christophe','Menant parallèlement une carrière internationale de baryton soliste d’opéra et une vraie passion pour l’entreprise, il fonde en 2012 \"Voix, Attitude et Comportement\" programme de coaching en prise de parole. Lors des tournages de Klap Affaires, il filme et réalise le montage final, jouant sur la voix, le regard et la gestuelle.','https://www.youtube.com/embed/Ua4XhSoEQZ0'),(2,'Janton','Delphine','Chargée de clientèle, elle apporte une réflexion pertinente sur vos besoins concernant le développement de votre image en s’appuyant sur son propre parcours de chef d’entreprises. Elle offre ainsi à l’équipe une vision globale sur votre société, sur vos marques par son regard extérieur et apporte ainsi un véritable éclairage d’avenir.','https://www.youtube.com/embed/DD7hm67cfbc'),(3,'Reibel','Rémi','journaliste-éditeur, fondateur de la \"Web Revue Rhône-Alpes- Auvergne Passions Média\" en 2000 et de \"Rdm Editions\", il privilégie le contenu rédactionnel sur les différents supports grâce à son parcours journalistique depuis plus de 20 ans et ses nombreuses collaborations. Il prépare en amont le rédactionenel au travers d’une interview et pilote votre intervention pendant le tournage.','https://www.youtube.com/embed/HeNURpr3vaw');
/*!40000 ALTER TABLE `employees` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `formulaire`
--

DROP TABLE IF EXISTS `formulaire`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `formulaire` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `prenom` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `societe` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `message` longtext COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `formulaire`
--

LOCK TABLES `formulaire` WRITE;
/*!40000 ALTER TABLE `formulaire` DISABLE KEYS */;
INSERT INTO `formulaire` VALUES (1,'Hacini','Riad','TEst','rezqr','blablabla'),(2,'Anguuuuuuuuuuuuuuuuuuuuays','Cecile','Wild Code School','Test@test.com','J\'aime les poneyx'),(3,'Hacini','Riad','Wild Code School','riad.hacini.pro@gmail.com','TESTETETSTSTETDTETS'),(4,'Chanteloup','Yann','Jemangemoncaca.com','Jaime@labite.com','Je suce des mars et j\'aime les twix!'),(5,'Test','test','test','test@test.com','looooooooooooooooool drole'),(6,'Hacini','Riad','Wild Code School','test@test2.com','sqgsefg'),(7,'Riad 21','Hacini 88','WESTCOST','riricaps@test.com','Blablabla'),(8,'test','test','test','test','test'),(9,'test','test','test','test@gtest.com','test'),(10,'Le Bourdonnec','Tangui','WCS','tang@gmail.com','Salut les noobs');
/*!40000 ALTER TABLE `formulaire` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `integration_video`
--

DROP TABLE IF EXISTS `integration_video`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `integration_video` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_id` int(11) DEFAULT NULL,
  `iframe` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `add_date` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_F6978DFDA466EA8A` (`add_date`),
  KEY `IDX_F6978DFD12469DE2` (`category_id`),
  CONSTRAINT `FK_F6978DFD12469DE2` FOREIGN KEY (`category_id`) REFERENCES `category_video` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `integration_video`
--

LOCK TABLES `integration_video` WRITE;
/*!40000 ALTER TABLE `integration_video` DISABLE KEYS */;
INSERT INTO `integration_video` VALUES (1,1,'https://www.youtube.com/embed/Sx80RQZDo0M','AUGUSTE LE BISTROT','2016-10-28 11:30:38'),(2,2,'https://www.youtube.com/embed/guXg_5jczsk','Maison Familiale Rurale St Consorce','2016-11-02 11:53:09'),(4,5,'https://www.youtube.com/embed/hFoP9jEuxaY','Léa Letellier','2016-11-02 12:44:43'),(5,5,'https://www.youtube.com/embed/zRFefzIs4yo','Christelle Beauvent','2016-11-02 12:56:55'),(6,2,'https://www.youtube.com/embed/Hd8yd6ycoIY','FLY PRODUCTS','2016-11-02 13:21:25'),(7,6,'https://www.youtube.com/embed/YSin14zgRBc','Teaser Soirée Club Affaires 69 - juin 2016','2016-11-03 10:20:43');
/*!40000 ALTER TABLE `integration_video` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `testimony`
--

DROP TABLE IF EXISTS `testimony`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `testimony` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `w_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `w_firstname` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `w_description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `w_picture_path` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `updated` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `testimony`
--

LOCK TABLES `testimony` WRITE;
/*!40000 ALTER TABLE `testimony` DISABLE KEYS */;
INSERT INTO `testimony` VALUES (1,'Société','Anonyme','Lorem Ipsum is simply dummy text of the printing and typesetting industry.','wcs-logo-svg-200.png','2016-11-02 10:39:54');
/*!40000 ALTER TABLE `testimony` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-11-09 13:29:14
