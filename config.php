<?php


$sql = "CREATE TABLE IF NOT EXISTS `users` (
	`uid` int(11) unsigned NOT NULL auto_increment,
	`username` varchar(45) NOT NULL UNIQUE,
	`password` varchar(200) NOT NULL,
	`email` varchar(120) NOT NULL,
	PRIMARY KEY  (`id`)
	) ENGINE=MyISAM  DEFAULT CHARSET=utf8";
 
	mysql_query($sql);
?>