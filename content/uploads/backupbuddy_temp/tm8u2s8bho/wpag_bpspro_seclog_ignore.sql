CREATE TABLE `wpag_bpspro_seclog_ignore` (  `id` bigint(20) NOT NULL AUTO_INCREMENT,  `time` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',  `user_agent_bot` text NOT NULL,  UNIQUE KEY `id` (`id`)) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40000 ALTER TABLE `wpag_bpspro_seclog_ignore` DISABLE KEYS */;
/*!40000 ALTER TABLE `wpag_bpspro_seclog_ignore` ENABLE KEYS */;
