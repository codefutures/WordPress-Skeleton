CREATE TABLE `wpag_commentmeta` (  `meta_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,  `comment_id` bigint(20) unsigned NOT NULL DEFAULT '0',  `meta_key` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,  `meta_value` longtext COLLATE utf8mb4_unicode_ci,  PRIMARY KEY (`meta_id`),  KEY `comment_id` (`comment_id`),  KEY `meta_key` (`meta_key`(191))) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40000 ALTER TABLE `wpag_commentmeta` DISABLE KEYS */;
INSERT INTO `wpag_commentmeta` VALUES('1', '2', '_wp_trash_meta_status', '0');
INSERT INTO `wpag_commentmeta` VALUES('2', '1', '_wp_trash_meta_status', '0');
/*!40000 ALTER TABLE `wpag_commentmeta` ENABLE KEYS */;
