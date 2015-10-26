CREATE DATABASE `neothunder` ;

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `username` varchar(15) NOT NULL,
  `password` varchar(90) NOT NULL,
  `siggy` text NOT NULL,
  `rank` varchar(19) NOT NULL DEFAULT 'Member',
  `coins` mediumint(255) NOT NULL DEFAULT '0',
  `email` varchar(255) NOT NULL,
  `trainer` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;
