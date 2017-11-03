-- phpMyAdmin SQL Dump
-- version 4.4.15.7
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Gegenereerd op: 03 nov 2017 om 01:08
-- Serverversie: 5.6.36
-- PHP-versie: 7.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kdg_project3`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `account`
--

CREATE TABLE IF NOT EXISTS `account` (
  `id` int(11) NOT NULL,
  `gebruikersnaam` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Gegevens worden geëxporteerd voor tabel `account`
--

INSERT INTO `account` (`id`, `gebruikersnaam`, `email`) VALUES
(1, 'Robbert', 'robbertluit@hotmail.com');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `block`
--

CREATE TABLE IF NOT EXISTS `block` (
  `id` int(11) NOT NULL,
  `titel` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `foto` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tekst` longtext COLLATE utf8_unicode_ci,
  `sort` int(11) DEFAULT NULL,
  `actief` tinyint(1) NOT NULL,
  `pagina_id` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Gegevens worden geëxporteerd voor tabel `block`
--

INSERT INTO `block` (`id`, `titel`, `foto`, `tekst`, `sort`, `actief`, `pagina_id`) VALUES
(1, 'Blok 1', 'foto1', 'tekst1', 1, 1, 1),
(2, 'Blok 2', 'foto2', 'tekst2', 2, 1, 2);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `categorie`
--

CREATE TABLE IF NOT EXISTS `categorie` (
  `id` int(11) NOT NULL,
  `naam` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Gegevens worden geëxporteerd voor tabel `categorie`
--

INSERT INTO `categorie` (`id`, `naam`) VALUES
(1, 'Vis'),
(2, 'Vlees'),
(3, 'Veggie');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Gegevens worden geëxporteerd voor tabel `contact`
--

INSERT INTO `contact` (`id`, `email`) VALUES
(7, 'robbertluit@hotmail.com'),
(19, 'test@test.be');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `gerecht`
--

CREATE TABLE IF NOT EXISTS `gerecht` (
  `id` int(11) NOT NULL,
  `naam` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `beschrijving` longtext COLLATE utf8_unicode_ci,
  `rating` int(11) DEFAULT NULL,
  `actief` tinyint(1) DEFAULT NULL,
  `benodigdheden` longtext COLLATE utf8_unicode_ci,
  `category_id` int(11) DEFAULT NULL,
  `bereidingstijd` int(11) DEFAULT NULL,
  `foto_vierkant` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `foto_rechthoek` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `foto` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Gegevens worden geëxporteerd voor tabel `gerecht`
--

INSERT INTO `gerecht` (`id`, `naam`, `beschrijving`, `rating`, `actief`, `benodigdheden`, `category_id`, `bereidingstijd`, `foto_vierkant`, `foto_rechthoek`, `foto`) VALUES
(1, 'Chicken wrap', 'Wrap met gebakken kip en groentjes', 3, 1, '<ul><li>Kip (1hele kip)</li>\n	<li>1 tros tomaten</li>\n	<li>Ajuin (200 gram)</li>\n	<li>2 paprika''s</li>\n	<li>1 krop sla</li>\n	<li>1 teentje look.</li>\n	<li>Grote wraps (1 per persoon)</li>\n</ul>', 2, 20, '/uploads/chicken-chilli-wrap%20V.jpg', '/uploads/chicken-chilli-wrap%20R.jpg', NULL),
(2, 'Glutenfree chorizo tart', 'Quiche van aardappelen, spinazi, feta en chorizo.', 2, 1, '<ul><li>10 aardappelen</li>\n	<li>2 chorizo worsten</li>\n	<li>1 zak spinazie</li>\n	<li>1 zakje feta kaas</li>\n	<li>1 knor boullion blokje</li>\n	<li>500 ml koude melk</li>\n	<li>1 deegbodem</li>\n	<li>1 zakje geraspte kaas</li>\n</ul>', 3, 50, '/uploads/glutenfree-spinach-feta-chorizo-tomato-tart%20V.jpg', '/uploads/glutenfree-spinach-feta-chorizo-tomato-tart%20R.jpg', NULL),
(3, 'Zalm curry', 'Rode curry met zalm en groentjes.', 3, 1, '<ul><li>3 wortels</li>\n	<li>1 stam broccoli</li>\n	<li>1 zalm per persoon</li>\n	<li>Rode curry pasta</li>\n	<li>1 brik room</li>\n	<li>1 knor boullion blokje</li>\n	<li>Een half zakje geraspte kaas</li>\n</ul>', 1, 35, '/uploads/salmon-curry%20V.jpg', '/uploads/salmon-curry%20R.jpg', NULL),
(4, 'Kippentaart', 'Taart van kip, champignons en andere groentjes.', 3, 1, '<ul><li>10 aardappelen</li>\n	<li>1 bakje championnen</li>\n	<li>2 gele paprika''s</li>\n	<li>1 kippenbil per persoon</li>\n	<li>2 deegbodems</li>\n	<li>1 brik room</li>\n	<li>1 Knor boullion blokje</li>\n</ul>', 2, 60, '/uploads/Chicken-kale-pie%20V.jpg', '/uploads/Chicken-kale-pie%20R.jpg', NULL),
(6, 'Lente kip', 'Kip gevuld met puree, aardappelen en erwtjes.', 2, 1, '<ul><li>6 aardappelen</li>\n	<li>1 hele kip</li>\n	<li>1 blikje erwten</li>\n	<li>3 ajuinen</li>\n	<li>1 brik melk</li>\n</ul>', 2, 75, '/uploads/spring-chicken%20V.jpg', '/uploads/spring-chicken%20R.jpg', NULL),
(7, 'Mexicaanse taco', 'Taco met gehakt, paprika, sla en een dressing.', 3, 1, '<ul><li>Krop sla</li>\n	<li>2 paprika''s</li>\n	<li>taco’s</li>\n	<li>Saladedressing</li>\n	<li>300 gram gehakt (rund en varken)</li>\n</ul>', 2, 25, '/uploads/taco%20V.jpeg', '/uploads/taco%20R.jpeg', NULL),
(9, 'Noedels met bimi en mango', 'Noedels, pittige tofu en frisse stukjes mango', 3, 1, '<ul><li>200 gr bimi</li>\n	<li>180 gr noedels</li>\n	<li>1 bak tofu a 325 gr</li>\n	<li>275 gr mango</li>\n	<li>1 rode peper</li>\n</ul>', 3, 25, '/uploads/1V_noodles_bimi_tofu', '/uploads/1R_noodles_bimi_tofu', NULL),
(10, 'Spinazie-kaasschnitzel', 'Spinazie, kaasschnitzel en pasta combinatie', 4, 1, '<p>BENODIGDHEDEN(2personen)</p>\n\n<ul><li>100 gr verse spinazie</li>\n	<li>250 gr aardbeien</li>\n	<li>2 kaasschnitzels</li>\n	<li>125 gr pasta</li>\n	<li>½ komkommer</li>\n	<li>1 mango</li>\n</ul>', 3, 20, '/uploads/2V_spinazie_kaassnit.jpg', '/uploads/2R_spinazie_kaassnit.jpg', NULL),
(11, 'Ovenschotel vis en prei', 'Ovenschotel kabeljauw en prei', 4, 1, '<ul><li>250 gr rijst</li>\n	<li>500 gr prei</li>\n	<li>100 gram geraspte kaas</li>\n	<li>3 dl melk</li>\n	<li>3 tomaten</li>\n	<li>1el peterselie</li>\n	<li>400 gr kabeljauwfilet</li>\n</ul>', 1, 60, '/uploads/3V_vis_prei_ovenschotel.jpg', '/uploads/3R_vis_prei_ovenschotel.jpg', NULL);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `ingredient`
--

CREATE TABLE IF NOT EXISTS `ingredient` (
  `id` int(11) NOT NULL,
  `naam` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `prijs_delhaize` double DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Gegevens worden geëxporteerd voor tabel `ingredient`
--

INSERT INTO `ingredient` (`id`, `naam`, `prijs_delhaize`) VALUES
(1, 'wortel', 2.1),
(2, 'balsamico', 1.2),
(3, 'melk', 0.85),
(4, 'banaan', 1),
(5, 'appel', 1.85),
(6, 'mandarijn', 1.99),
(7, 'zalm', 4.5),
(8, 'kabeljauw', 4.8),
(9, 'kip', 2),
(10, 'rund', 2.5),
(11, 'steak', 3.5),
(12, 'rosbief', 10),
(13, 'pasta', 0.85),
(14, 'look', 0.79),
(15, 'courgette', 0.86),
(16, 'ajuin', 1.29),
(17, 'pikante kruiden', 3),
(18, 'milde kruiden', 2.85),
(19, 'zoete kruiden', 2.75),
(20, 'spaghettikruiden', 2.3),
(21, 'tomaten', 1.99),
(22, 'sla', 1.29),
(23, 'wrap', 2.99),
(24, 'paprika', 2.49),
(25, 'chorizo', 1.99),
(26, 'aardappel', 2.99),
(27, 'spinazie', 3.49),
(28, 'feta kaas', 1.99),
(29, 'geraspte kaas', 2.29),
(30, 'bouillon blokjes', 1.49),
(31, 'bladerdeeg', 2.49),
(32, 'room', 1.99),
(33, 'champignons', 3.29),
(34, 'erwtjes', 2.49),
(35, 'gehakt', 3.79),
(36, 'taco', 1.49),
(37, 'saladedressing', 3.29),
(38, 'brocolli', 2.99),
(39, 'currypasta', 2.29),
(40, 'tofu', 1.99),
(41, 'noedels', 0.99),
(42, 'bimi', 1.99),
(43, 'mango', 3.49),
(44, 'rode peper', 1.29),
(45, 'kaasschnitzel', 1.99),
(46, 'komkommer', 0.99),
(47, 'aardbeien', 3.99),
(48, 'peterselie', 1.49),
(49, 'prei', 1.99),
(50, 'rijst', 0.79);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `ingredient_gerecht`
--

CREATE TABLE IF NOT EXISTS `ingredient_gerecht` (
  `ingredient_id` int(11) NOT NULL,
  `gerecht_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Gegevens worden geëxporteerd voor tabel `ingredient_gerecht`
--

INSERT INTO `ingredient_gerecht` (`ingredient_id`, `gerecht_id`) VALUES
(1, 7),
(3, 2),
(3, 4),
(3, 6),
(3, 11),
(7, 3),
(7, 7),
(8, 11),
(9, 1),
(9, 4),
(9, 6),
(13, 10),
(14, 1),
(16, 1),
(16, 4),
(16, 6),
(21, 1),
(21, 11),
(22, 1),
(23, 1),
(24, 1),
(24, 3),
(25, 2),
(26, 2),
(26, 3),
(26, 4),
(26, 6),
(27, 2),
(27, 10),
(28, 2),
(29, 2),
(29, 7),
(29, 11),
(30, 2),
(30, 3),
(30, 7),
(31, 2),
(31, 3),
(32, 3),
(32, 7),
(33, 3),
(34, 4),
(34, 6),
(35, 7),
(38, 7),
(39, 7),
(40, 9),
(41, 9),
(42, 9),
(43, 9),
(43, 10),
(44, 9),
(45, 10),
(46, 10),
(47, 10),
(48, 11),
(49, 11),
(50, 11);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `klaargemaakte_gerechten`
--

CREATE TABLE IF NOT EXISTS `klaargemaakte_gerechten` (
  `id` int(11) NOT NULL,
  `datum` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Gegevens worden geëxporteerd voor tabel `klaargemaakte_gerechten`
--

INSERT INTO `klaargemaakte_gerechten` (`id`, `datum`) VALUES
(4, '2017-10-21 01:20:00'),
(7, '2017-10-21 01:30:00'),
(8, '2017-10-21 17:53:00'),
(11, '2017-10-23 00:30:00'),
(20, '2017-10-25 12:54:00'),
(21, '2017-10-25 15:06:00'),
(22, '2017-10-25 15:09:00'),
(23, '2017-10-25 15:23:00'),
(24, '2017-10-25 15:30:00'),
(26, '2017-10-25 15:32:00'),
(27, '2017-10-25 15:46:00'),
(28, '2017-10-26 13:35:00'),
(29, '2017-10-26 13:35:00'),
(30, '2017-10-26 13:35:00'),
(31, '2017-10-26 13:35:00'),
(33, '2017-10-27 13:47:00'),
(34, '2017-10-27 13:51:00'),
(35, '2017-10-27 13:51:00'),
(36, '2017-10-27 23:20:00'),
(37, '2017-10-28 00:09:00'),
(38, '2017-10-28 00:33:00'),
(40, '2017-10-28 02:08:00'),
(41, '2017-10-28 02:09:00'),
(42, '2017-10-28 02:09:00'),
(43, '2017-10-29 21:15:00'),
(44, '2017-10-29 21:32:00'),
(45, '2017-10-30 15:53:00'),
(46, '2017-10-30 15:58:00'),
(47, '2017-11-03 02:04:00');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `klaar_gerechten`
--

CREATE TABLE IF NOT EXISTS `klaar_gerechten` (
  `gerecht_id` int(11) NOT NULL,
  `klaargem_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Gegevens worden geëxporteerd voor tabel `klaar_gerechten`
--

INSERT INTO `klaar_gerechten` (`gerecht_id`, `klaargem_id`) VALUES
(4, 4),
(7, 2),
(8, 1),
(11, 1),
(20, 4),
(21, 7),
(22, 7),
(23, 7),
(24, 6),
(26, 2),
(27, 7),
(28, 4),
(29, 4),
(30, 4),
(31, 4),
(33, 6),
(34, 3),
(35, 3),
(36, 1),
(37, 6),
(38, 2),
(40, 6),
(41, 7),
(42, 7),
(43, 3),
(44, 1),
(45, 3),
(46, 7),
(47, 11);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `pagina`
--

CREATE TABLE IF NOT EXISTS `pagina` (
  `id` int(11) NOT NULL,
  `url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `naam` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `seo_titel` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `seo_omschrijving` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `seo_trefwoorden` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `seo_afbeelding` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `seo_robots` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `actief` tinyint(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Gegevens worden geëxporteerd voor tabel `pagina`
--

INSERT INTO `pagina` (`id`, `url`, `naam`, `seo_titel`, `seo_omschrijving`, `seo_trefwoorden`, `seo_afbeelding`, `seo_robots`, `actief`) VALUES
(1, '/', 'Home', 'titel', 'omsch', 'trefw', 'afb', 'robots', 1),
(2, '/gerechten', 'Gerechten', 'x', 'x', 'x', 'x', 'x', 1),
(3, '/gerechten/surprise', 'Verrassing', 'x', 'x', 'x', 'x', 'x', 1),
(4, '/account/gerechten-klaargemaakt', 'Klaargemaakte gerechten', 'x', 'x', 'x', 'x', 'x', 1),
(5, '/account', 'Account pagina', 'geen', 'geen', 'geen', 'geen', 'geen', 1);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `recept`
--

CREATE TABLE IF NOT EXISTS `recept` (
  `id` int(11) NOT NULL,
  `benodigdheden` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `actief` tinyint(1) NOT NULL,
  `naam` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Gegevens worden geëxporteerd voor tabel `recept`
--

INSERT INTO `recept` (`id`, `benodigdheden`, `actief`, `naam`) VALUES
(1, 'Wortelen, Courgette, Snacks', 1, 'Pannenkoeken op grootmoeders wijze'),
(2, 'test,test,test', 1, 'Broodkruimels op tante Sidonia''s recept geinspireerd');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `shoppinglijst`
--

CREATE TABLE IF NOT EXISTS `shoppinglijst` (
  `id` int(11) NOT NULL,
  `datum_aangemaakt` datetime NOT NULL,
  `actief` tinyint(1) NOT NULL,
  `naam_gerecht` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ingredientitems` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Gegevens worden geëxporteerd voor tabel `shoppinglijst`
--

INSERT INTO `shoppinglijst` (`id`, `datum_aangemaakt`, `actief`, `naam_gerecht`, `ingredientitems`) VALUES
(19, '2012-01-01 00:00:00', 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `stap`
--

CREATE TABLE IF NOT EXISTS `stap` (
  `id` int(11) NOT NULL,
  `stapnummer` int(11) NOT NULL,
  `tekst` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gerecht_id` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=65 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Gegevens worden geëxporteerd voor tabel `stap`
--

INSERT INTO `stap` (`id`, `stapnummer`, `tekst`, `gerecht_id`) VALUES
(1, 1, 'Stap 1 tekst', NULL),
(2, 2, 'blabla', NULL),
(3, 1, 'Stap 1 text', NULL),
(4, 1, '2', NULL),
(5, 1, '2', NULL),
(6, 1, 'lkfsdf', NULL),
(7, 1, 'Snijd de sla op reepjes en de tomaten en paprika''s in stukjes.', 1),
(8, 1, 'Schil de wortelen. Snijd de broccoli en wortelen en kook ze tot ze al dente zijn.', 3),
(9, 2, 'Voeg room en 1 blokje boullion van Knor toe aan een pan. Breng deze aan de kook.', 3),
(10, 3, 'Voeg de rode curry pasta toe en meng deze goed. Dik dan de saus in.', 3),
(11, 4, 'Snijd de zalm op stukjes en bak deze op.', 3),
(12, 1, 'Was de aardappelen. Snijd de champignons, gele paprika''s en aardappelen.', 4),
(13, 2, 'Snijd de kip op blokjes en bak ze op. Verwarm de oven op 210°C.', 4),
(14, 3, 'Voeg de room samen met de helft van de champignons aan de pan toe.', 4),
(20, 2, 'Snijd de kip in blokjes en bak deze op.', 1),
(21, 3, 'Warm de wrap op en leg hem op een blad zilverpapier.', 1),
(22, 1, 'Schil de aardappelen, snijd ze in kleine blokken en kook ze tot ze beetgaar zijn.', 6),
(23, 2, 'Stamp de patatten, voeg een beetje melk toe en kruid ze naar believen met peper en zout.', 6),
(24, 3, 'Haal de ingewanden uit de kip en vul de kip met de puree patatten.', 6),
(25, 1, 'Bak het gehakt en snijd de sla en paprika in stukken', 7),
(26, 2, 'Warm de taco op voor 2 minuutjes in de microgolf oven', 7),
(27, 3, 'Doe alle groenten in de pan', 7),
(28, 4, 'Als de groenten klaar zijn doe deze in de taco', 7),
(29, 5, 'Voorzie de taco nadien met dressing naar keuze', 7),
(32, 4, 'Voeg de ingrediënten toe. Drizzel wat looksaus op de inhoud en rol de wrap op.', 1),
(33, 1, 'Was de aardappelen en spinazie. Verwarm de oven op 200°C. Schil de aardappelen.', 2),
(34, 2, 'Snijd de chorizo en aardappelen op schijfjes en de feta op blokjes.', 2),
(35, 3, 'Kook de spinazie voor 5 min en de aardappelen tot ze al dente (beetgaar) zijn.', 2),
(36, 4, 'Voeg een knor boullion blokje toe aan 500 ml koude melk en los deze op.', 2),
(37, 5, 'Rol de deegbodem uit in je bakvorm. Voeg dan alle ingrediënten toe buiten de feta.', 2),
(38, 6, 'Voeg geraspte kaas toe bovenop alle ingrediënten en verspreid daarna de feta.', 2),
(39, 7, 'Zet de bakvorm in de oven voor 30-35min. Zet daarna de grill aan voor 1-2 min.', 2),
(40, 5, 'Voeg daarna alle ingrediënten aan de saus toe en werk af met wat geraspte kaas bovenop.', 3),
(41, 4, 'Voeg een boullion blokje toe aan de saus en laat 10 min op een zacht vuurtje pruttelen.', 4),
(42, 5, 'Rol een deegbodem uit over je bakvorm en snijd de andere op reepjes.', 4),
(43, 6, 'Voeg alle ingrediënten toe en werk af door de reepjes van de 2e deegbodem schuin over elkaar te leggen.', 4),
(44, 7, 'Zet de bakvorm in de oven voor 15 min. Daarna nog 1 min op de grill stand.', 4),
(45, 4, 'Leg de kip in een bakvorm. Snijd de ajuin in de helft en leg ze erbij samen met de erwten.', 6),
(46, 5, 'Kruid de kip met gewenste kruiden en steek 35 min in een oven van 210°C.', 6),
(47, 1, 'Snijd de tofu in blokjes en leg op een stuk keukenpapier. Dek af met nog meer keukenpapier en druk zo veel mogelijk vocht er uit', 9),
(48, 2, 'Kook de noedels volgens de verpakking', 9),
(49, 3, 'Hak de rode peper fijn en meng deze samen met de uitgelekte tofublokjes', 9),
(50, 4, 'Verhit een (wok)pan. Bak de tofu op hoog vuur tot dat hij iets begint te kleuren en licht krokant wordt', 9),
(51, 5, 'Voeg de bimi toe en roerbak 5 minuten mee', 9),
(52, 6, 'Voeg de mango in stukjes toe en als laatste doe je de noedels er doorheen', 9),
(53, 1, 'Kook de pasta gaar in een pan met water.', 10),
(54, 2, 'Snijd ondertussen de komkommer en mango in blokjes.', 10),
(55, 3, 'Snijd ook de aardbeien in stukjes. Meng alle ingrediënten samen met de verse spinazie.', 10),
(56, 4, 'Verhit een beetje olie of boter in een pan en bak de kaasschnitzels mooi goudbruin.', 10),
(57, 5, 'Serveer het gerecht lauwwarm.', 10),
(58, 1, 'Verwarm de oven voor op 180°C. Kook de rijst volgens de aanwijzingen op de verpakking.', 11),
(59, 2, 'Was en snijd de prei in ringen en kook ze in water in 15 minuten gaar. Snijd de tomaten in stukjes.', 11),
(60, 3, 'Giet de prei af  en meng er vervolgens de stukjes tomaat en gehakte peterselie door.', 11),
(61, 4, 'Schenk al roerend de melk samen met de geraspte kaas en roer tot een dikke, gladde saus ontstaat.', 11),
(62, 5, 'Kruid ondertussen de kabeljauwfilet met zout en peper.', 11),
(63, 6, 'Schep de helft van de rijst in een ovenschaal. Schep daarop de helft van de prei en leg hierop de vis. Dek de vis af met de rest van de prei en schep hierop de rest van de rijst.', 11),
(64, 7, 'Schenk de kaassaus over de rijst, bestrooi met de achtergehouden kaas en bak het gerecht in ongeveer een half uur goudbruin.', 11);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `website_user`
--

CREATE TABLE IF NOT EXISTS `website_user` (
  `id` int(11) NOT NULL,
  `username` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `username_canonical` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `email_canonical` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `enabled` tinyint(1) NOT NULL,
  `salt` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_login` datetime DEFAULT NULL,
  `confirmation_token` varchar(180) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password_requested_at` datetime DEFAULT NULL,
  `roles` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:array)'
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Gegevens worden geëxporteerd voor tabel `website_user`
--

INSERT INTO `website_user` (`id`, `username`, `username_canonical`, `email`, `email_canonical`, `enabled`, `salt`, `password`, `last_login`, `confirmation_token`, `password_requested_at`, `roles`) VALUES
(1, 'sam', 'sam', 'sam.serrien@kdg.be', 'sam.serrien@kdg.be', 1, 'RjdyybJ80dsIDOlFU1YNKxFo2AmdWAZIK4intVraBG8', 'Xv8s44A7b38FlAdzUVH3+tU8So4oUDS3sUZPkGSK6UiEjpNoUbAQ1c6cFkY2K9SVEAnNFzEmX+MsEu2hrWs+5Q==', '2017-10-20 18:24:29', NULL, NULL, 'a:1:{i:0;s:9:"ROLE_USER";}'),
(2, 'robbert', 'robbert', 'robbertluit@hotmail.com', 'robbertluit@hotmail.com', 1, 'Ph6WfWOi8qGqvDt4YUnL40Y9f8yqT7Qw1Rqc3Wk9p3o', 'OaXvAxfc+soLW1J48AkQpwVw0o9bE2vrAQK9riiF6bWvkOA4WNFWDBNpCqPr2VNHf6SKq6DD9CToid+Px+j/yQ==', NULL, NULL, NULL, 'a:2:{s:9:"ROLE_USER";s:9:"ROLE_USER";i:0;s:10:"ROLE_ADMIN";}');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `website_usergroup`
--

CREATE TABLE IF NOT EXISTS `website_usergroup` (
  `id` int(11) NOT NULL,
  `name` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `roles` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:array)',
  `slug` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Gegevens worden geëxporteerd voor tabel `website_usergroup`
--

INSERT INTO `website_usergroup` (`id`, `name`, `roles`, `slug`) VALUES
(1, 'Owners', 'a:0:{}', 'owners'),
(2, 'users', 'a:0:{}', 'users');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `website_user_group`
--

CREATE TABLE IF NOT EXISTS `website_user_group` (
  `user_id` int(11) NOT NULL,
  `group_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Gegevens worden geëxporteerd voor tabel `website_user_group`
--

INSERT INTO `website_user_group` (`user_id`, `group_id`) VALUES
(1, 2),
(2, 1),
(3, 1);

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `block`
--
ALTER TABLE `block`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_831B972257991ECF` (`pagina_id`);

--
-- Indexen voor tabel `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `gerecht`
--
ALTER TABLE `gerecht`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_B473A69112469DE2` (`category_id`);

--
-- Indexen voor tabel `ingredient`
--
ALTER TABLE `ingredient`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `ingredient_gerecht`
--
ALTER TABLE `ingredient_gerecht`
  ADD PRIMARY KEY (`gerecht_id`,`ingredient_id`),
  ADD KEY `IDX_B544AD57933FE08C` (`ingredient_id`),
  ADD KEY `IDX_B544AD57ABC12CAA` (`gerecht_id`);

--
-- Indexen voor tabel `klaargemaakte_gerechten`
--
ALTER TABLE `klaargemaakte_gerechten`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `klaar_gerechten`
--
ALTER TABLE `klaar_gerechten`
  ADD PRIMARY KEY (`gerecht_id`,`klaargem_id`),
  ADD KEY `IDX_214D37ACABC12CAA` (`gerecht_id`),
  ADD KEY `IDX_214D37ACEB68448D` (`klaargem_id`);

--
-- Indexen voor tabel `pagina`
--
ALTER TABLE `pagina`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `recept`
--
ALTER TABLE `recept`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `shoppinglijst`
--
ALTER TABLE `shoppinglijst`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `stap`
--
ALTER TABLE `stap`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_27D53B38ABC12CAA` (`gerecht_id`);

--
-- Indexen voor tabel `website_user`
--
ALTER TABLE `website_user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_8F963F3D92FC23A8` (`username_canonical`),
  ADD UNIQUE KEY `UNIQ_8F963F3DA0D96FBF` (`email_canonical`),
  ADD UNIQUE KEY `UNIQ_8F963F3DC05FB297` (`confirmation_token`);

--
-- Indexen voor tabel `website_usergroup`
--
ALTER TABLE `website_usergroup`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_D9BC90C35E237E06` (`name`),
  ADD UNIQUE KEY `UNIQ_D9BC90C3989D9B62` (`slug`);

--
-- Indexen voor tabel `website_user_group`
--
ALTER TABLE `website_user_group`
  ADD PRIMARY KEY (`user_id`,`group_id`),
  ADD KEY `IDX_E2F71B8A76ED395` (`user_id`),
  ADD KEY `IDX_E2F71B8FE54D947` (`group_id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `account`
--
ALTER TABLE `account`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT voor een tabel `block`
--
ALTER TABLE `block`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT voor een tabel `categorie`
--
ALTER TABLE `categorie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT voor een tabel `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT voor een tabel `gerecht`
--
ALTER TABLE `gerecht`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT voor een tabel `ingredient`
--
ALTER TABLE `ingredient`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=51;
--
-- AUTO_INCREMENT voor een tabel `klaargemaakte_gerechten`
--
ALTER TABLE `klaargemaakte_gerechten`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=48;
--
-- AUTO_INCREMENT voor een tabel `pagina`
--
ALTER TABLE `pagina`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT voor een tabel `recept`
--
ALTER TABLE `recept`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT voor een tabel `shoppinglijst`
--
ALTER TABLE `shoppinglijst`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT voor een tabel `stap`
--
ALTER TABLE `stap`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=65;
--
-- AUTO_INCREMENT voor een tabel `website_user`
--
ALTER TABLE `website_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT voor een tabel `website_usergroup`
--
ALTER TABLE `website_usergroup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- Beperkingen voor geëxporteerde tabellen
--

--
-- Beperkingen voor tabel `block`
--
ALTER TABLE `block`
  ADD CONSTRAINT `FK_831B972257991ECF` FOREIGN KEY (`pagina_id`) REFERENCES `pagina` (`id`);

--
-- Beperkingen voor tabel `gerecht`
--
ALTER TABLE `gerecht`
  ADD CONSTRAINT `FK_B473A69112469DE2` FOREIGN KEY (`category_id`) REFERENCES `categorie` (`id`);

--
-- Beperkingen voor tabel `ingredient_gerecht`
--
ALTER TABLE `ingredient_gerecht`
  ADD CONSTRAINT `FK_B544AD57933FE08C` FOREIGN KEY (`ingredient_id`) REFERENCES `ingredient` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_B544AD57ABC12CAA` FOREIGN KEY (`gerecht_id`) REFERENCES `gerecht` (`id`) ON DELETE CASCADE;

--
-- Beperkingen voor tabel `klaar_gerechten`
--
ALTER TABLE `klaar_gerechten`
  ADD CONSTRAINT `FK_214D37ACABC12CAA` FOREIGN KEY (`gerecht_id`) REFERENCES `klaargemaakte_gerechten` (`id`),
  ADD CONSTRAINT `FK_214D37ACEB68448D` FOREIGN KEY (`klaargem_id`) REFERENCES `gerecht` (`id`);

--
-- Beperkingen voor tabel `stap`
--
ALTER TABLE `stap`
  ADD CONSTRAINT `FK_27D53B38ABC12CAA` FOREIGN KEY (`gerecht_id`) REFERENCES `gerecht` (`id`);

--
-- Beperkingen voor tabel `website_user_group`
--
ALTER TABLE `website_user_group`
  ADD CONSTRAINT `FK_E2F71B8A76ED395` FOREIGN KEY (`user_id`) REFERENCES `website_user` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_E2F71B8FE54D947` FOREIGN KEY (`group_id`) REFERENCES `website_usergroup` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
