CREATE TABLE `wpag_rg_form` (  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,  `title` varchar(150) NOT NULL,  `date_created` datetime NOT NULL,  `is_active` tinyint(1) NOT NULL DEFAULT '1',  `is_trash` tinyint(1) NOT NULL DEFAULT '0',  PRIMARY KEY (`id`)) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40000 ALTER TABLE `wpag_rg_form` DISABLE KEYS */;
INSERT INTO `wpag_rg_form` VALUES('1', 'Contact Us - AgilData Website', '2015-05-07 04:44:47', '1', '0');
INSERT INTO `wpag_rg_form` VALUES('2', 'AgilData Whitepaper Download', '2015-06-04 19:44:39', '1', '0');
INSERT INTO `wpag_rg_form` VALUES('3', 'Join The AgilData Beta', '2015-06-04 20:05:40', '1', '0');
INSERT INTO `wpag_rg_form` VALUES('4', 'Consulting Request', '2015-12-16 04:54:38', '1', '0');
/*!40000 ALTER TABLE `wpag_rg_form` ENABLE KEYS */;
