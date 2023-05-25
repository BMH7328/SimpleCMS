-- Adminer 4.8.0 MySQL 5.5.5-10.5.17-MariaDB-1:10.5.17+maria~ubu2004 dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `users` (`id`, `name`, `email`, `password`, `created_at`) VALUES
(1,	'BMH',	'diu@diu.com',	'$2y$10$P5nWwiFIhMZNd265pSpHJe3XXgcEiqjQywMixAWzKmD49/Yzdmyte',	'2023-05-23 05:51:21');

-- 2023-05-25 01:20:21
