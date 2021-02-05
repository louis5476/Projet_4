-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Feb 03, 2021 at 02:41 PM
-- Server version: 5.7.32
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `projet_4`
--

-- --------------------------------------------------------

--
-- Table structure for table `t_billet`
--

CREATE TABLE `t_billet` (
  `BIL_ID` int(11) NOT NULL,
  `BIL_DATE` datetime NOT NULL,
  `BIL_TITRE` varchar(100) NOT NULL,
  `BIL_CONTENU` varchar(8000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `t_billet`
--

INSERT INTO `t_billet` (`BIL_ID`, `BIL_DATE`, `BIL_TITRE`, `BIL_CONTENU`) VALUES
(7, '2021-02-02 16:03:50', 'Chapitre 1 : Intro à l\'Alaska', '<p class=\"p1\" style=\"margin: 0px; text-align: justify; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 13px; line-height: normal; font-family: \'Helvetica Neue\';\"><span style=\"font-size: 14pt;\">L\'Alaska (prononc&eacute; [a.las.ka] &Eacute;couter (Fr.) en fran&ccedil;ais et [ə.ˈl&aelig;.skə] &Eacute;couter (&Eacute;.-U.A) en anglais) est le 49e &Eacute;tat des &Eacute;tats-Unis, dont la capitale est Juneau et la plus grande ville Anchorage, o&ugrave; habite environ 40 % de la population de l\'&Eacute;tat. Avec une superficie totale de 1 717 854 km2, il est l\'&Eacute;tat le plus &eacute;tendu et le plus septentrional du pays, mais l\'un des moins peupl&eacute;s, ne comptant que 731 449 habitants en 20121. Comme Hawa&iuml;, l\'Alaska est s&eacute;par&eacute; du Mainland et se situe au nord-ouest du Canada. Bord&eacute; par l\'oc&eacute;an Arctique au nord et la mer de B&eacute;ring et l\'oc&eacute;an Pacifique au sud, ce territoire est s&eacute;par&eacute; de l\'Asie par le d&eacute;troit de B&eacute;ring. En outre, ses divisions administratives ne sont pas des comt&eacute;s mais des boroughs. Alaska signifie &laquo; grande Terre &raquo; ou &laquo; continent &raquo; en al&eacute;oute3. Cette r&eacute;gion, que l\'on appelait au xixe si&egrave;cle l\'&laquo; Am&eacute;rique russe &raquo;, tire son nom d\'une longue presqu\'&icirc;le, au nord-ouest du continent am&eacute;ricain, &agrave; environ 1 000 km au sud du d&eacute;troit de Bering, et qui se lie, vers le sud, aux &icirc;les Al&eacute;outiennes. Le surnom de l\'Alaska est &laquo; la derni&egrave;re fronti&egrave;re &raquo; ou &laquo; la terre du soleil de minuit &raquo;. Peupl&eacute; par des Al&eacute;outes, Esquimaux (notamment I&ntilde;upiak et Yupiks) et peut-&ecirc;tre d\'autres Am&eacute;rindiens depuis plusieurs mill&eacute;naires, le territoire est colonis&eacute; par des trappeurs russes &agrave; la fin du xviiie si&egrave;cle. L\'Alaska vit alors essentiellement du commerce du bois et de la traite des fourrures. En 1867, les &Eacute;tats-Unis l\'ach&egrave;tent &agrave; la Russie pour la somme de 7,2 millions de dollars (environ 120 millions de dollars actuels), et celui-ci adh&egrave;re &agrave; l\'Union le 3 janvier 1959. Les domaines &eacute;conomiques pr&eacute;dominants aujourd\'hui sont la p&ecirc;che, le tourisme, et surtout la production d\'hydrocarbures (p&eacute;trole, gaz) depuis la d&eacute;couverte de gisements &agrave; Prudhoe Bay dans les ann&eacute;es 1970. Le Denali (6 168 m&egrave;tres d\'altitude), point culminant des &Eacute;tats-Unis, se trouve dans la cha&icirc;ne d\'Alaska et constitue le c&oelig;ur du Parc national de Denali. Le climat y est de type polaire, et la faune caract&eacute;ristique des milieux froids (grizzli, caribou, &eacute;lan, ours blanc). Les territoires limitrophes sont le territoire du Yukon et la province de Colombie-Britannique au Canada. Le Kra&iuml; du Kamtchatka et le district autonome de Tchoukotka en Russie se trouvent &agrave; quelques dizaines de kilom&egrave;tres, de l\'autre c&ocirc;t&eacute; du d&eacute;troit de Bering. Bastion du Parti r&eacute;publicain, l\'Alaska fut gouvern&eacute; de 2006 &agrave; 2009 par Sarah Palin, candidate &agrave; la vice-pr&eacute;sidence des &Eacute;tats-Unis en 2008 et &eacute;g&eacute;rie du mouvement des Tea Party.</span></p>'),
(8, '2021-02-02 16:11:30', 'Chapitre 2 : Histoire des peuples', '<p class=\"p1\" style=\"margin: 0px; text-align: justify; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 13px; line-height: normal; font-family: \'Helvetica Neue\';\"><span style=\"font-size: 14pt;\">L\'Alaska est un ancien territoire russe d\'Am&eacute;rique, vendu aux &Eacute;tats-Unis en 1867 pour la somme de 7,2 millions de dollars. Ce chiffre est &agrave; comparer avec les 15 millions de USD d&eacute;bours&eacute;s par les &Eacute;tats-Unis pour l\'achat de la Louisiane. Cultures autochtones de l\'Alaska Les savoirs et savoir-faire traditionnels font l\'objet de recherches et colportage, notamment coordonn&eacute;s par l\'Alaska Native Science Commission. Culture de Denbigh en Alaska (3000 &agrave; 1000 av. J.-C.) Le territoire Les gens de Denbigh vivaient dans le nord de l\'Alaska, il y a 5 000 ans. Leur principale ressource &eacute;tait les animaux qu\'ils chassaient dans la toundra, pour leur nourriture, leurs v&ecirc;tements et leurs abris. En 1948, l\'arch&eacute;ologue am&eacute;ricain Louis Giddings (en) excave, au Cap Denbigh, sur la c&ocirc;te de la mer de B&eacute;ring, des microlames de chert et d\'obsidienne, qui ressemblent &agrave; celles trouv&eacute;es pr&eacute;c&eacute;demment dans le d&eacute;sert de Gobi (Pal&eacute;o et m&eacute;solithique asiatique). Giddings remarque &eacute;galement que les pointes de projectiles ont des similitudes avec celles des Pal&eacute;oindiens et des cultures archa&iuml;ques du Nouveau-Monde. Le nom de cette culture, comme beaucoup d\'autres d\'ailleurs, nous vient donc de la situation g&eacute;ographique de cette premi&egrave;re d&eacute;couverte. Ressources naturelles et activit&eacute;s de subsistance Ces peuplades passaient l\'&eacute;t&eacute; sur les c&ocirc;tes de la mer de B&eacute;ring et durant les autres saisons, &agrave; l\'int&eacute;rieur des terres &agrave; la recherche de caribou et de poissons anadromes. Organisation sociale Ce groupe culturel est connu pour ses outils de pierre taill&eacute;e, comme les grattoirs, les pointes de projectile, les outils pour le travail de l\'os, les lames et les gouges. Origines et descendances Le Denbighien est tr&egrave;s proche culturellement des trois autres entit&eacute;s formant ce que l\'on appelle les Pal&eacute;oesquimaux anciens, que nous avons d&eacute;crits pr&eacute;c&eacute;demment. Les origines exactes de cette culture ne sont pas tr&egrave;s bien connues. La technologie microlithique a s&ucirc;rement pris racine dans la tradition pal&eacute;olithique de l\'Alaska et plus s&ucirc;rement dans la culture pal&eacute;osib&eacute;rienne. En revanche, les Denbighiens sont les anc&ecirc;tres de toute une s&eacute;rie de cultures alaskaines : baleini&egrave;res anciennes, Choris et Norton. Pendant que les Pal&eacute;oesquimaux d&eacute;veloppaient leur culture dans le Canada arctique et au Groenland, une &eacute;volution fort diff&eacute;rente se poursuivait en Alaska dans la r&eacute;gion du d&eacute;troit de B&eacute;ring. De leur c&ocirc;t&eacute;, les &icirc;les Al&eacute;outiennes ont connu un d&eacute;veloppement graduel qui a d&eacute;bouch&eacute; sur la culture des Al&eacute;outes d\'aujourd\'hui. La c&ocirc;te pacifique de l\'Alaska, quant &agrave; elle, a connu une &eacute;volution technologique fond&eacute;e sur l\'ardoise polie, qui a pu &ecirc;tre &agrave; l\'origine des cultures esquimaudes de cette r&eacute;gion. Les c&ocirc;tes nord et ouest &eacute;taient occup&eacute;es par des gens de la tradition des outils microlithiques de l\'Arctique, la m&ecirc;me culture que ceux de l\'Arctique canadien. Vers 1000 av. J.-C., l\'activit&eacute; humaine en Alaska a connu un arr&ecirc;t de plusieurs si&egrave;cles. Apr&egrave;s cette pause, appara&icirc;t une s&eacute;rie de groupes comme les cultures baleini&egrave;res anciennes, Choris et Norton qui sont un m&eacute;lange complexe de microlithisme de l\'Arctique, de culture de la c&ocirc;te du Pacifique et de groupes du N&eacute;olithique de la Sib&eacute;rie orientale de la m&ecirc;me &eacute;poque. Cultures baleini&egrave;res anciennes (1000 av. J.-C. &agrave; 120 av. J.-C.) Nous savons tr&egrave;s peu de choses sur les cultures baleini&egrave;res anciennes. En fait, il n\'y a qu\'un seul village de cinq maisons qui a &eacute;t&eacute; d&eacute;couvert au cap Krusenstern (en), au nord du d&eacute;troit de B&eacute;ring. Il y avait des os de phoque dans les maisons et des os de baleine &eacute;tendus sur les plages environnantes. On peut consid&eacute;rer cette culture comme une tentative &eacute;ph&eacute;m&egrave;re de mixit&eacute;, des Al&eacute;outes peut-&ecirc;tre, des Esquimaux ou des Am&eacute;rindiens. Culture de Choris (1000 av. J.-C. &agrave; l\'an 1) Les gens de la culture de Choris vivaient dans de grandes maisons semi-souterraines ovales et chassaient le phoque et le caribou. Ils fabriquaient aussi des outils de pierre taill&eacute;e qui rappellent passablement ceux de la Tradition microlithique de l\'Arctique. Comme pour les cultures baleini&egrave;res anciennes, l\'origine des gens de Choris reste n&eacute;buleuse pour l\'instant. Ces petits groupes de chasseurs &eacute;taient peut-&ecirc;tre Esquimaux du sud de l\'Alaska, ou des Al&eacute;outes qui migr&egrave;rent vers le nord, ou des Am&eacute;rindiens qui avaient adopt&eacute; des coutumes esquimaudes, voire des immigrants sib&eacute;riens.</span></p>'),
(9, '2021-02-02 16:12:08', 'Chapitre 3 : Traite des fourrures', '<p class=\"p1\" style=\"margin: 0px; text-align: justify; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 13px; line-height: normal; font-family: \'Helvetica Neue\';\"><span style=\"font-size: 14pt;\">&Agrave; partir de 1784, les trappeurs russes &eacute;tablissent des comptoirs de traite permanents sur les &icirc;les Al&eacute;outiennes et sur la c&ocirc;te am&eacute;ricaine du Pacifique, jusqu\'&agrave; la Californie (fort Ross, &agrave; moins de 160 kilom&egrave;tres au nord de San Francisco). Pour commencer, des postes c&ocirc;tiers sont &eacute;tablis &agrave; Attu, Agattu (en) et Unalaska, dans les &icirc;les Al&eacute;outiennes, ainsi que dans l\'&icirc;le de Kodiak, au large de l\'embouchure du golfe de Cook. Dix-huit mois plus tard, une colonie est &eacute;tablie sur le continent, en face de l\'anse Cook. L\'objectif est de chasser la loutre de mer, dont la fourrure se vend &agrave; prix d\'or sur les march&eacute;s chinois. Comme en Sib&eacute;rie, les Russes embauchent, alcoolisent et cherchent &agrave; convertir &agrave; l\'orthodoxie les populations locales : la communaut&eacute; orthodoxe alaskane est al&eacute;oute ou kodiak. On comptait environ 25 000 Al&eacute;outes &agrave; l\'arriv&eacute;e des Russes, mais seulement 3 892 en 1885, apr&egrave;s 122 ans de domination russe (au pied du volcan Mont Redoubt, haut de 3 100 m&egrave;tres, la pr&eacute;sence de l\'&eacute;glise russe orthodoxe de Ninilchik rappelle que l\'Alaska fut une colonie russe), puis am&eacute;ricaine&hellip; vodka, bourbon et grippe ont eu ici les m&ecirc;mes effets qu\'ailleurs6. D&egrave;s la fin du xviiie si&egrave;cle, des marchands et des missionnaires am&eacute;ricains et anglais viennent concurrencer les activit&eacute;s russes. En 1787, Aleksandr Andre&iuml;evitch Baranov fonde un poste de traite sur l\'&icirc;le Sitka, o&ugrave; il implante des serfs russes et al&eacute;outes ; de 1799 &agrave; 1804, il est le gouverneur et administrateur r&eacute;sidant de l\'Am&eacute;rique russe et d&eacute;cide d\'y construire sa capitale. Le fort est d&eacute;truit par les Tlingits en 1802. Baranov reprend les lieux deux ans plus tard : l\'&icirc;le est rebaptis&eacute;e de son nom actuel et la capitale prend le nom de Novo-Arkhangelsk (actuelle &laquo; Sitka &raquo;). En 1807, le gouverneur r&eacute;side au ch&acirc;teau Baranov. En 1811, c\'est lui qui &eacute;tablit le poste de fort Ross en Californie. Au total, on peut compter une quarantaine de forts russes en Am&eacute;rique, dans la premi&egrave;re moiti&eacute; du xixe si&egrave;cle. La Russie d&eacute;clare que l\'Am&eacute;rique russe s\'&eacute;tend jusqu\'au d&eacute;troit de la Reine-Charlotte (actuel Canada) et que les &eacute;trangers n\'ont pas droit de passage. La Californie &eacute;tant espagnole, alors que l\'Oregon et la Colombie-Britannique (comprenant encore l\'actuel &Eacute;tat de Washington) sont anglais, l\'acc&egrave;s au Pacifique et &agrave; ses fourrures semble impossible aux &Eacute;tats-Unis. Face &agrave; ce blocage, le pr&eacute;sident am&eacute;ricain James Monroe r&eacute;dige sa c&eacute;l&egrave;bre doctrine qui vise &agrave; &eacute;liminer les influences europ&eacute;ennes du continent. Les &Eacute;tats-Unis, le Royaume-Uni et la Russie finissent par s\'entendre, et un trait&eacute; est sign&eacute; en 1824, par le biais duquel la fronti&egrave;re russe est d&eacute;plac&eacute;e du sud (Californie) vers le nord (actuel Alaska), tandis que les Anglais renoncent &agrave; l\'Or&eacute;gon et au sud de la Colombie-Britannique (d&eacute;sormais territoire de Washington). Par ce trait&eacute;, l\'&eacute;tablissement de nouveaux forts russes hors Alaska est prohib&eacute; et, en 1825, le Royaume-Uni obtient un droit de passage le long de l\'&eacute;troite bande c&ocirc;ti&egrave;re alaskane. Finalement, l\'achat de l\'Alaska par les Am&eacute;ricains, en 1867, met un terme &agrave; la pr&eacute;sence russe en Am&eacute;rique.</span></p>');

-- --------------------------------------------------------

--
-- Table structure for table `t_commentaire`
--

CREATE TABLE `t_commentaire` (
  `COM_ID` int(11) NOT NULL,
  `COM_DATE` datetime NOT NULL,
  `COM_AUTEUR` varchar(100) NOT NULL,
  `COM_CONTENU` varchar(200) NOT NULL,
  `COM_SIGNALE` int(11) NOT NULL,
  `BIL_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `t_commentaire`
--

INSERT INTO `t_commentaire` (`COM_ID`, `COM_DATE`, `COM_AUTEUR`, `COM_CONTENU`, `COM_SIGNALE`, `BIL_ID`) VALUES
(12, '2021-02-02 16:13:49', 'Paul', 'Top!', 0, 7),
(13, '2021-02-02 16:14:06', 'GTL', 'Bon chapitre !', 0, 8),
(14, '2021-02-02 16:14:31', 'Louis', 'Bien', 1, 9);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `pseudo` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `pseudo`, `pass`) VALUES
(1, 'JeanF', '$2y$10$UYtLvL8VlNECAjN6SwvWjOsiDXriXUJeT2pX/DbW2N0CbeGw9HYM2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `t_billet`
--
ALTER TABLE `t_billet`
  ADD PRIMARY KEY (`BIL_ID`);

--
-- Indexes for table `t_commentaire`
--
ALTER TABLE `t_commentaire`
  ADD PRIMARY KEY (`COM_ID`),
  ADD KEY `fk_com_bil` (`BIL_ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `t_billet`
--
ALTER TABLE `t_billet`
  MODIFY `BIL_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `t_commentaire`
--
ALTER TABLE `t_commentaire`
  MODIFY `COM_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `t_commentaire`
--
ALTER TABLE `t_commentaire`
  ADD CONSTRAINT `fk_com_bil` FOREIGN KEY (`BIL_ID`) REFERENCES `t_billet` (`BIL_ID`) ON DELETE CASCADE;
