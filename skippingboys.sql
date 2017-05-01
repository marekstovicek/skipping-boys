-- phpMyAdmin SQL Dump
-- version 4.2.12deb2+deb8u2
-- http://www.phpmyadmin.net
--
-- Počítač: localhost
-- Vytvořeno: Ned 23. dub 2017, 17:24
-- Verze serveru: 5.5.54-0+deb8u1
-- Verze PHP: 5.6.30-0+deb8u1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Databáze: `skippingboys`
--

-- --------------------------------------------------------

--
-- Struktura tabulky `images`
--

CREATE TABLE IF NOT EXISTS `images` (
`image_id` int(64) NOT NULL,
  `path` varchar(128) COLLATE utf8_czech_ci NOT NULL,
  `thumbs` varchar(128) COLLATE utf8_czech_ci NOT NULL,
  `page` varchar(24) COLLATE utf8_czech_ci NOT NULL,
  `sort` int(12) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8 COLLATE=utf8_czech_ci;

--
-- Vypisuji data pro tabulku `images`
--

INSERT INTO `images` (`image_id`, `path`, `thumbs`, `page`, `sort`) VALUES
(2, 'images/galerie/', 'images/galerie/thumbs/', 'galerie', 0),
(3, 'images/galerie/', 'images/galerie/thumbs/', 'galerie', 1),
(4, 'images/galerie/', 'images/galerie/thumbs/', 'galerie', 2),
(5, 'images/galerie/', 'images/galerie/thumbs/', 'galerie', 3),
(6, 'images/galerie/', 'images/galerie/thumbs/', 'galerie', 4),
(7, 'images/galerie/', 'images/galerie/thumbs/', 'galerie', 5),
(8, 'images/galerie/', 'images/galerie/thumbs/', 'galerie', 6),
(9, 'images/galerie/', 'images/galerie/thumbs/', 'galerie', 7),
(10, 'images/galerie/', 'images/galerie/thumbs/', 'galerie', 8),
(11, 'images/galerie/', 'images/galerie/thumbs/', 'galerie', 9),
(12, 'images/galerie/', 'images/galerie/thumbs/', 'galerie', 10),
(13, 'images/galerie/', 'images/galerie/thumbs/', 'galerie', 11),
(14, 'images/galerie/', 'images/galerie/thumbs/', 'galerie', 12),
(15, 'images/galerie/', 'images/galerie/thumbs/', 'galerie', 13),
(16, 'images/photo-box/', 'images/photo-box/thumbs/', 'photo-box', 0),
(17, 'images/photo-box/', 'images/photo-box/thumbs/', 'photo-box', 1),
(18, 'images/photo-box/', 'images/photo-box/thumbs/', 'photo-box', 2),
(19, 'images/photo-box/', 'images/photo-box/thumbs/', 'photo-box', 3),
(20, 'images/photo-box/', 'images/photo-box/thumbs/', 'photo-box', 4),
(21, 'images/photo-box/', 'images/photo-box/thumbs/', 'photo-box', 5),
(22, 'images/photo-box/', 'images/photo-box/thumbs/', 'photo-box', 6),
(23, 'images/photo-box/', 'images/photo-box/thumbs/', 'photo-box', 7),
(24, 'images/photo-box/', 'images/photo-box/thumbs/', 'photo-box', 8),
(25, 'images/photo-box/', 'images/photo-box/thumbs/', 'photo-box', 9);

-- --------------------------------------------------------

--
-- Struktura tabulky `page`
--

CREATE TABLE IF NOT EXISTS `page` (
`page_id` int(64) NOT NULL,
  `url` varchar(24) COLLATE utf8_czech_ci NOT NULL,
  `title` varchar(512) COLLATE utf8_czech_ci NOT NULL,
  `description` varchar(512) COLLATE utf8_czech_ci NOT NULL,
  `content` text COLLATE utf8_czech_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_czech_ci;

--
-- Vypisuji data pro tabulku `page`
--

INSERT INTO `page` (`page_id`, `url`, `title`, `description`, `content`) VALUES
(1, 'uvod', 'Ropeskipping tým zajistí show, vystoupení a workshop', 'Ropeskipping tým Skipping Boys zajistí nevídané vystoupení na ples a další akce.', '<div class="full-column">\r\n\r\n\r\n<h2>V&iacute;t&aacute;me V&aacute;s na str&aacute;nk&aacute;ch Skipping Boys!</h2>\r\n\r\n<p>Jmenujeme se Skipping Boys. Přes &scaron;vihadla sk&aacute;čeme už t&eacute;měř devět&nbsp;let. Vidět jste n&aacute;s mohli v r&aacute;mci někter&eacute;ho z na&scaron;ich četn&yacute;ch vystoupen&iacute; nebo v televizi. Když pro obecenstvo zrovna nemet&aacute;me salta a nesk&aacute;čeme troj&scaron;vihy, jezd&iacute;me po soutěž&iacute;ch a tr&eacute;nujeme. Na&scaron;e vystoupen&iacute; si můžete objednat na info@skippingboys.cz.</p>\r\n  \r\n  \r\n\r\n\r\n</div>			'),
(2, 'o-nas', 'Kdo jsme a co je rope skipping?', 'Kdo jsme a co je ropeskipping? TOP 10 v performance na světě.', '<div class="full-column">\r\n	<h2>Něco m&aacute;lo o n&aacute;s</h2>\r\n\r\n<p>Jsme jedn&iacute;m&nbsp;z nejstar&scaron;&iacute;ch a nejd&eacute;le vystupuj&iacute;c&iacute;ch t&yacute;mů&nbsp;v Česk&eacute; republice. Se sk&aacute;k&aacute;n&iacute;m jsme začali na podzim 2008, t&yacute;m&nbsp;založili ofici&aacute;lně o dva roky později. Vyrostli jsme v Sokole Libeň, kde tak&eacute; t&yacute;m vznikl a nad&aacute;le se rozv&iacute;j&iacute;. Hlavn&iacute; aktivitou na&scaron;eho t&yacute;mu zůst&aacute;vaj&iacute; vystoupen&iacute;, poř&aacute;d&aacute;n&iacute; workshopů a popularizace Ropeskippingu v Česk&eacute; republice.</p>\r\n\r\n<p>Objevili jsme se např&iacute;klad v Československo m&aacute; talent, natočili tutori&aacute;ly na Ropeskipping společně s VZP nebo&nbsp;s&nbsp;Českou televiz&iacute; spolupracovali na&nbsp;pořadu Faktoru U. V roce 2015 jsme zaz&aacute;řili na Mistrovstv&iacute; světa v Ropeskippingu v Pař&iacute;ži a loni v Portugalsku, kde jsme &uacute;spě&scaron;ně obh&aacute;jili na&scaron;e m&iacute;sto v TOP 10. Letos se připravujeme na MS&nbsp;na Floridě. Spolupracujeme se slovensk&yacute;m t&yacute;mem Crazy Jump a dal&scaron;&iacute;mi ropeskippingov&yacute;mi t&yacute;my. Nejv&iacute;ce času v&scaron;ak&nbsp;tr&aacute;v&iacute;me tr&eacute;ninkem a př&iacute;pravou na vystoupen&iacute;.&nbsp;<br />\r\nMezi klienty, se kter&yacute;mi jsme spolupracovali, patř&iacute; např&iacute;klad: &Scaron;koda auto,&nbsp;Fernet Stock, Česk&aacute; televize, McDonalds, Nutrend, VZP, TV Prima, Flaming Nights, Apla, For Kids a mnoho dal&scaron;&iacute;ch.</p>\r\n\r\n<h3>Co je to ten ropeskipping?</h3>\r\n\r\n<p>Ropeskipping je sport, kter&yacute; do Česk&eacute; republiky pronikl ze Spojen&yacute;ch st&aacute;tů. Od sk&aacute;k&aacute;n&iacute; přes &scaron;vihadlo, kter&eacute; pravděpodobně zn&aacute;te z dětstv&iacute;, se odli&scaron;uje přid&aacute;n&iacute;m nespočtu triků, akrobatick&yacute;ch a gymnastick&yacute;ch prvků. Se &scaron;vihadly se soutěž&iacute; v mnoha&nbsp;discipl&iacute;n&aacute;ch &ndash; sk&aacute;če se na rychlost (speed), s&aacute;m, ve dvou, ve třech, s kr&aacute;tk&yacute;mi i dlouh&yacute;mi &scaron;vihadly... My se v&scaron;ak věnujeme tzv.&nbsp;&#39;show contest&#39;, tedy vystoupen&iacute;, na kter&eacute; se specializujeme od zač&aacute;tku na&scaron;eho působen&iacute;.</p>\r\n\r\n<p>Na&scaron;&iacute;m hlavn&iacute;m c&iacute;lem je&nbsp;zprostředkov&aacute;n&iacute; z&aacute;bavy a &uacute;žasu obecenstvu. Chtěli bychom dokazovat, že sk&aacute;k&aacute;n&iacute; přes &scaron;vihadlo nemus&iacute; b&yacute;t nuda nebo nutně trest.</p>\r\n\r\n\r\n</div>'),
(3, 'vystoupeni', 'Nabídka vystoupení ROPE SKIPPING, show rope skipping, workshopu se švihadly a spolupráce', 'Vystoupení na ples jako půlnoční překvapení. Doprovodný program na vánoční večírek.', '<div class="full-column">\r\n\r\n<h2>Jak si n&aacute;s objednat?</h2>\r\n\r\n<p>Přes rok m&aacute;me des&iacute;tky vystoupen&iacute; a akc&iacute;, je proto dobr&eacute; objednat si n&aacute;s včas. M&aacute;me zku&scaron;enosti s&nbsp;pracovn&iacute;mi več&iacute;rky, firemn&iacute;mi akcemi, maturitn&iacute;mi plesy&nbsp;nebo představen&iacute;mi pro děti. Kromě samotn&eacute;ho vystoupen&iacute; můžeme tak&eacute; zajistit doprovodn&yacute; program, workshop nebo teambuildingov&eacute; aktivity. Pro vystoupen&iacute; potřebujeme prostor ide&aacute;lně o 8x8&nbsp;metrech a hladk&yacute;, rovn&yacute; povrch. Při&nbsp;freestylu si porad&iacute;me s prostorem o 3x3 metrech. Vystoupen&iacute; je doprov&aacute;zen&eacute; hudbou, kterou dod&aacute;v&aacute;me na flash disku.</p>\r\n\r\n<p>V př&iacute;padě, že m&aacute;te dotaz nebo speci&aacute;ln&iacute; př&aacute;n&iacute;, nebojte se n&aacute;s kontaktovat.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h2>Kde jste n&aacute;s mohli potkat:</h2>\r\n\r\n<p>&nbsp;</p>\r\n  \r\n\r\n \r\n\r\n</div>		'),
(4, 'galerie', 'Ukázka ze sportu ropeskipping, rope skipping', 'Foto a video ukázky sportu ropeskipping. TOP 10 ve světě v show.', 'text'),
(5, 'kontakt', 'Objednání vystoupení na ples, půlnoční překvapení, ropeskipping workshop', 'Objednání vystoupení na ples, půlnoční překvapení, rope skipping workshop.', 'text');

-- --------------------------------------------------------

--
-- Struktura tabulky `show`
--

CREATE TABLE IF NOT EXISTS `show` (
`show_id` int(255) NOT NULL,
  `date_from` date NOT NULL,
  `date_to` date DEFAULT NULL,
  `name` varchar(355) COLLATE utf8_czech_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3177 DEFAULT CHARSET=utf8 COLLATE=utf8_czech_ci;

--
-- Vypisuji data pro tabulku `show`
--

INSERT INTO `show` (`show_id`, `date_from`, `date_to`, `name`) VALUES
(3047, '2008-11-29', NULL, 'První vystoupení, Akademie 2008, Sokol Libeň'),
(3048, '2009-02-21', NULL, 'Šibřinky, Sokol Libeň'),
(3049, '2009-03-01', NULL, 'Ples, Kolín'),
(3050, '2009-03-01', NULL, 'Přehlídka pódiových skladeb, Tyršův dům'),
(3051, '2009-10-08', NULL, '100. výročí k položení základního kamene, Sokol Libeň'),
(3052, '2009-11-28', NULL, 'Akademie 2009, Sokol Libeň'),
(3053, '2010-03-01', NULL, 'Přehlídka pódiových skladeb, Tyršův dům'),
(3054, '2010-09-01', NULL, 'Odhalení pomníku rtm. Josefa Gabčíka a rtm. Jana Kubiše, Nehvizdy'),
(3055, '2010-11-27', NULL, 'Akademie 2010, Sokol Libeň'),
(3056, '2011-01-22', NULL, 'Ples, Český Brod'),
(3057, '2011-03-19', NULL, 'Karaoke show, Český Brod'),
(3058, '2011-05-28', NULL, 'ČSMT casting, Ostrava'),
(3059, '2011-06-11', NULL, 'Farmářské trhy, Praha - Karlín'),
(3060, '2011-07-10', NULL, 'ČSMT, Mahenovo divadlo, Brno'),
(3061, '2011-09-24', NULL, 'Posvícenská zábava, Český Brod'),
(3062, '2011-12-03', NULL, 'Akademie, Sokol - Libeň'),
(3063, '2011-12-10', NULL, 'Ropeskipping soutěž v ČR, Praha - Petřiny'),
(3064, '2011-12-16', NULL, 'Ples Gymnázia Chomutov'),
(3065, '2012-01-11', NULL, 'Maturitní ples gymnázium Evropská, Lucerna, Praha'),
(3066, '2012-01-14', NULL, 'Maturitní ples SPŠE Na Příkopech, Lucerna, Praha'),
(3067, '2012-01-18', NULL, 'Maturitní ples Malostranského gymnázia, Smíchov, Praha'),
(3068, '2012-02-17', NULL, 'Maturitní ples gymnázia Čelákovice'),
(3069, '2012-02-27', NULL, 'Maturitní ples hotelové školy, Lucerna, Praha'),
(3070, '2012-03-02', NULL, 'Ples basketbalistek, Sojovice'),
(3071, '2012-03-03', NULL, 'Šibřinky, Sokol Libeň'),
(3072, '2012-03-10', NULL, 'Vodácký ples, Kostelec nad Labem'),
(3073, '2012-03-16', NULL, 'Společenský ples, Sokol Dejvice'),
(3074, '2012-03-17', NULL, 'Soukromá oslava narozenin, Sokol Libeň'),
(3075, '2012-03-17', NULL, 'Ples Fernet Stock Klub, Dvůr králové'),
(3076, '2012-03-23', NULL, 'Maturitní ples Českolipská, Kongresové centrum, Praha'),
(3077, '2012-05-26', NULL, 'Zahájení Lázeňské sezóny, Teplice'),
(3078, '2012-06-02', NULL, 'Oslavy 150. let v pohybu, Nádvoří Tyršova domu'),
(3079, '2012-06-02', NULL, 'Kampa, Praha'),
(3080, '2012-06-05', NULL, 'Staroměstské náměstí, Praha'),
(3081, '2012-06-19', NULL, 'Den Přeborníků, Sokol Pražský'),
(3082, '2012-06-30', NULL, 'Sokolové proti hákovému kříži, Kobyliská střelnice, Praha'),
(3083, '2012-07-03', NULL, 'Tesco EDEN, Praha'),
(3084, '2012-07-01', '2012-07-07', 'Všesokolský Slet, Praha'),
(3085, '2012-09-22', NULL, 'Zažít Libeň jinak, Elznicovo náměstí, Praha'),
(3086, '2012-10-07', NULL, '19. Břevnovské posvícení, Praha'),
(3087, '2012-11-15', NULL, 'Akademie Sokola Karlín, Praha'),
(3088, '2012-11-24', NULL, 'Akademie 2012, Sokol Libeň'),
(3089, '2012-12-01', NULL, 'Ropeskipping soutěž, Praha'),
(3090, '2012-12-01', NULL, 'Gala pro seniory, Sokol Kampa, Praha'),
(3091, '2012-12-08', NULL, 'Taneční Hafla show, Kamenice u Prahy'),
(3092, '2012-12-15', NULL, '3. Vánoční ples, Litoměřice'),
(3093, '2013-01-26', NULL, 'Maturitní ples - SPŠ Most, Litvínov'),
(3094, '2013-01-31', NULL, 'Maturitní ples Čakovického gymnázia, Čakovice'),
(3095, '2013-02-02', NULL, 'V. Reprezentační ples vinařů a přátel vína, Čejkovice'),
(3096, '2013-02-08', NULL, 'Maturitní ples, Štětí'),
(3097, '2013-02-15', NULL, 'Maturitní ples, Kutná Hora'),
(3098, '2013-02-22', NULL, 'XVII.Reprezentační ples Občanského sdružení Počítáte s námi? Blansko'),
(3099, '2013-03-01', NULL, 'Reprezentační ples FLD ČZU, Kostelec nad Černými lesy'),
(3100, '2013-03-02', NULL, 'UV SHOW Šibřinky, Sokol Libeň'),
(3101, '2013-03-09', NULL, 'Maturitní ples, Kolín'),
(3102, '2013-03-15', NULL, 'Maturitní ples VOŠ Štětí'),
(3103, '2013-05-11', NULL, 'Květnový festival orientálního tance, Divadlo na Prádle, Praha'),
(3104, '2013-05-15', NULL, 'Prezentace + workshop, ZŠ Generála Janouška'),
(3105, '2013-05-24', NULL, 'Bambiriáda 2013, Praha'),
(3106, '2013-05-25', NULL, 'Zahájení lázeňské sezóny, Teplice'),
(3107, '2013-06-14', NULL, 'OVOV RR, Praha'),
(3108, '2013-07-05', NULL, 'ČSMT, Mahenovo divadlo, Brno'),
(3109, '2013-09-07', NULL, 'Obecní den, Pustějov'),
(3110, '2013-11-23', NULL, 'Akademie 2013, Sokol Libeň'),
(3111, '2013-11-27', NULL, 'Program pro 7. základní školu, Mladá Boleslav'),
(3112, '2013-11-30', NULL, 'Hafla show, Kamenice u Prahy'),
(3113, '2013-12-05', NULL, 'Program pro 9. základní školu, Mladá Boleslav'),
(3114, '2013-12-06', NULL, 'Maturitní ples, Rokycany'),
(3115, '2014-01-08', '2014-01-09', 'Natáčení pořadu Faktor U pro Českou televizi'),
(3116, '2014-01-11', NULL, 'Maturitní ples, Teplice'),
(3117, '2014-01-24', NULL, 'Maturitní ples, Poděbrady'),
(3118, '2014-01-25', NULL, 'Ples nekuřáků, Kamenice u Prahy'),
(3119, '2014-01-31', NULL, 'Charitativní ples, Blansko'),
(3120, '2014-02-08', NULL, 'Maturitní ples, Neratovice'),
(3121, '2014-02-14', NULL, 'Společenský večer, Sokol Dejvice'),
(3122, '2014-02-21', NULL, 'Maturitní ples, Rakovník'),
(3123, '2014-03-01', NULL, 'Workshop, Jihlava'),
(3124, '2014-03-01', NULL, 'V. charitativní ples, Jihlava'),
(3125, '2014-03-28', NULL, 'Oceňování sportovců a sportovních kolektivů, Otrokovice'),
(3126, '2014-04-04', NULL, 'UV SHOW, Setkání v modrém, APLA, Praha'),
(3127, '2014-04-14', NULL, 'Vystoupení + workshop pro ZŠ Jeseniova, Praha'),
(3128, '2014-05-29', NULL, 'DDM Modřany, Praha'),
(3129, '2014-05-30', NULL, 'Workshop, Sokol Libeň'),
(3130, '2014-05-31', NULL, 'Nominace na mezinárodní soutěž Erso show contest 2014, Praha'),
(3131, '2014-08-15', NULL, 'Flaming Nights 2014, Třebíč'),
(3132, '2014-09-13', NULL, 'Svatba, tvrz Malešov'),
(3133, '2014-09-20', NULL, 'Zažít město jinak, Kobylisy, Praha'),
(3134, '2014-09-20', NULL, 'Zažít město jinak, Libeň, Praha'),
(3135, '2014-11-09', NULL, 'Workshop, Sokol Hostivař, Praha'),
(3136, '2014-11-28', '2014-11-30', 'Show Contest 2014 + workshop, Graz, Rakousko'),
(3137, '2015-01-16', NULL, 'Ples SOŠ a SOU Horky nad Jizerou, Mladá Boleslav'),
(3138, '2015-02-21', NULL, 'Historický ples, Kněževes'),
(3139, '2015-02-21', NULL, 'Ples hasičů, Tuchořice'),
(3140, '2015-03-21', NULL, 'Ples gymnázia Litoměřická, Praha'),
(3141, '2015-04-04', NULL, 'WORKSHOP S JUMP IT + 1. DD BATTLE V ČR!, Sokol Libeň'),
(3142, '2015-05-01', NULL, 'Festival mini basketbalu, Jaroměř'),
(3143, '2015-05-02', NULL, 'Kouřimská 50, Kouřim'),
(3144, '2015-05-16', '2015-05-17', 'Dvoudenní WORKSHOP, Sokol Libeň'),
(3145, '2015-05-30', NULL, 'Colour Run, Praha'),
(3146, '2015-07-24', '2015-07-28', 'Mistrovství Světa v Ropeskippingu, Paris, France'),
(3147, '2015-08-21', NULL, 'Gerlev Grammy Awards, Gerlev, Dánsko'),
(3148, '2015-09-25', NULL, 'Slagelse culture night, Slagelse, Dánsko'),
(3149, '2015-12-19', NULL, 'Workshop, Bratislava'),
(3150, '2016-01-30', NULL, 'Ples basketbalistů, Tachov'),
(3151, '2016-02-17', NULL, 'Maturitní ples Litoměřická, Praha'),
(3152, '2016-02-19', NULL, 'Maturitní ples, Rumburk'),
(3153, '2016-03-19', NULL, '120 let elektrické dráhy Praha - Libeň - Vysočany'),
(3154, '2016-04-09', NULL, 'For Kids, PVA Letňany, Praha'),
(3155, '2016-04-10', NULL, 'For Kids, PVA Letňany, Praha'),
(3156, '2016-05-14', NULL, 'Rally Show a Helicopter Show, Hradec Králové'),
(3157, '2016-05-15', NULL, 'S rodinou do Vesce, Liberec'),
(3158, '2016-05-28', NULL, '56. Zlín Film Festival, Zlín'),
(3159, '2016-06-04', NULL, 'Kopřivnické dny techniky, Kopřivnice'),
(3160, '2016-07-21', '2016-07-26', 'Mistrovství Světa v Ropeskippingu, Braga, Portugalsko'),
(3161, '2016-08-20', '2016-08-21', 'Letní Jump Rope Camp, Sokol Libeň'),
(3162, '2016-09-03', NULL, 'Prezentace + workshop, Prague British School Vlastina'),
(3163, '2016-09-03', NULL, 'Vísecký festiválek, Víska'),
(3164, '2016-10-09', NULL, 'For Toys, PVA Letňany, Praha'),
(3165, '2016-11-26', NULL, 'Akademie 2016, Sokol Libeň'),
(3166, '2016-12-03', NULL, 'Házenkářský ples, Strakonice'),
(3167, '2016-12-22', NULL, 'Vánoční večírek NUTREND, Olomouc'),
(3168, '2017-01-06', NULL, 'Ples Vyšší odborná škola a Střední umělecká škola textilních řemesel, Praha'),
(3169, '2017-01-07', NULL, 'Ples SPŠS a OA Kladno, Kladno'),
(3170, '2017-01-21', '2017-01-22', 'Zimní Jump Rope Camp, Sokol Libeň'),
(3171, '2017-01-21', NULL, 'Ples Fit Studia D, Zeleneč'),
(3172, '2017-01-21', NULL, 'Šibřinky Sokola Podolí, Praha'),
(3173, '2017-02-20', NULL, 'Maturitní ples VOŠON & SPŠO, Praha'),
(3174, '2017-03-06', NULL, 'Zetko Jirky Krále, Praha'),
(3175, '2017-03-18', NULL, 'Ples Fotbalistů, Raspenava'),
(3176, '2017-03-28', NULL, 'Dobré ráno, Česká televize, Ostrava');

-- --------------------------------------------------------

--
-- Struktura tabulky `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`user_id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_czech_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_czech_ci NOT NULL,
  `role` enum('member','admin') COLLATE utf8_czech_ci NOT NULL DEFAULT 'member'
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_czech_ci;

--
-- Vypisuji data pro tabulku `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`, `role`) VALUES
(1, 'dostalh', '$2y$10$h8vmMU0yHJ4jFOpfxrZO0eIW3qgnRFXsdi4G9DKzXaHuo9OLPuPJu', 'admin');

-- --------------------------------------------------------

--
-- Struktura tabulky `videos`
--

CREATE TABLE IF NOT EXISTS `videos` (
`video_id` int(64) NOT NULL,
  `name` varchar(255) COLLATE utf8_czech_ci NOT NULL,
  `link` varchar(255) COLLATE utf8_czech_ci NOT NULL,
  `page` varchar(12) COLLATE utf8_czech_ci NOT NULL,
  `sort` int(8) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_czech_ci;

--
-- Vypisuji data pro tabulku `videos`
--

INSERT INTO `videos` (`video_id`, `name`, `link`, `page`, `sort`) VALUES
(1, 'Promo 2016', '<iframe width="440" height="220" src="https://www.youtube.com/embed/gYhzuBQYOf8" frameborder="0" allowfullscreen></iframe>', 'uvod', 1),
(2, 'Mistrovství světa 2015 v Paříži', '<iframe width="440" height="220" src="https://www.youtube.com/embed/IQz_g9O5nAQ" frameborder="0" allowfullscreen></iframe>', 'galerie', 1),
(3, 'Československo má talent 2016', '<iframe width="440" height="220" src="https://www.youtube.com/embed/BPA5p0Ikz7g" frameborder="0" allowfullscreen></iframe>', 'galerie', 2),
(4, 'Náš rok 2016 v 7 minutách', '<iframe width="440" height="220" src="https://www.youtube.com/embed/zSkyue5OG-8" frameborder="0" allowfullscreen></iframe>', 'galerie', 3),
(5, 'YesNeYes lekce č. 2', '<iframe width="440" height="220" src="https://www.youtube.com/embed/aoY8ETReH5s" frameborder="0" allowfullscreen></iframe>', 'galerie', 4);

--
-- Klíče pro exportované tabulky
--

--
-- Klíče pro tabulku `images`
--
ALTER TABLE `images`
 ADD PRIMARY KEY (`image_id`);

--
-- Klíče pro tabulku `page`
--
ALTER TABLE `page`
 ADD PRIMARY KEY (`page_id`);

--
-- Klíče pro tabulku `show`
--
ALTER TABLE `show`
 ADD PRIMARY KEY (`show_id`);

--
-- Klíče pro tabulku `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`user_id`), ADD UNIQUE KEY `username` (`username`) USING BTREE;

--
-- Klíče pro tabulku `videos`
--
ALTER TABLE `videos`
 ADD PRIMARY KEY (`video_id`);

--
-- AUTO_INCREMENT pro tabulky
--

--
-- AUTO_INCREMENT pro tabulku `images`
--
ALTER TABLE `images`
MODIFY `image_id` int(64) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT pro tabulku `page`
--
ALTER TABLE `page`
MODIFY `page_id` int(64) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT pro tabulku `show`
--
ALTER TABLE `show`
MODIFY `show_id` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3177;
--
-- AUTO_INCREMENT pro tabulku `user`
--
ALTER TABLE `user`
MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pro tabulku `videos`
--
ALTER TABLE `videos`
MODIFY `video_id` int(64) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
