-- Adminer 4.7.7 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `galleries`;
CREATE TABLE `galleries` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `travel_packages_id` bigint(20) unsigned NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `travel_packages_id` (`travel_packages_id`),
  CONSTRAINT `galleries_ibfk_1` FOREIGN KEY (`travel_packages_id`) REFERENCES `travel_packages` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `galleries` (`id`, `travel_packages_id`, `image`, `deleted_at`, `created_at`, `updated_at`) VALUES
(2,	1,	'assets/gallery/b5vU0SIHyiLh7OyvZLqCthXoSWN6uFjiV4nE7tWQ.jpeg',	NULL,	'2020-09-18 20:57:09',	'2020-09-21 09:35:11'),
(3,	3,	'assets/gallery/QXWcVH3vmMolPlCWZneOjkag2O0lCAJcFO6KkdgA.jpeg',	NULL,	'2020-09-18 21:02:40',	'2020-09-21 09:35:53'),
(4,	3,	'assets/gallery/CTtDn09mZiwa1kZCp7Sg5UnHuqwD15xwIykgoY2g.png',	'2020-09-18 22:02:46',	'2020-09-18 21:03:02',	'2020-09-18 22:02:46'),
(5,	1,	'assets/gallery/xOIIPl1pvtTGfnYhQazsgbErTqdKr5csUM695aUC.jpeg',	NULL,	'2020-09-21 09:37:00',	'2020-09-21 09:37:00'),
(6,	1,	'assets/gallery/WtT1FivQejqfNZvO7RWF6SCZYVNqGCulXtapcwD0.jpeg',	NULL,	'2020-09-21 09:39:53',	'2020-09-21 09:39:53'),
(7,	1,	'assets/gallery/D9oqkUTVX3okHA4IcnmKZZJAV1mQiH7Uu3qR2AQ9.jpeg',	NULL,	'2020-09-21 09:40:40',	'2020-09-21 09:40:40'),
(8,	1,	'assets/gallery/ZJJCxLn4SoL79CJbF6lZif7aenbJMsl302ZfIfR2.jpeg',	NULL,	'2020-09-21 09:41:41',	'2020-09-21 09:41:41'),
(9,	3,	'assets/gallery/XclyQ9gKEopprFAtJRN3WuEKdiQp2fg3x1HdWRrO.jpeg',	NULL,	'2020-09-21 09:43:11',	'2020-09-21 09:43:11'),
(10,	3,	'assets/gallery/CZ3Cz7MIhh6gHZYdmJK7PDaQXkMZ4525F06dtHuS.jpeg',	NULL,	'2020-09-21 09:44:11',	'2020-09-21 09:44:11'),
(11,	3,	'assets/gallery/AYnj6uMaPDyHGqLHhghyHOdtKYCTwRZwPRDMSpT3.jpeg',	NULL,	'2020-09-21 09:45:00',	'2020-09-21 09:45:00'),
(12,	3,	'assets/gallery/ZvkZcvLSlxRbaqhURp5tQ4jugBnSS2QP1cxZzLsI.jpeg',	NULL,	'2020-09-21 09:45:47',	'2020-09-21 09:45:47');

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1,	'2014_10_12_000000_create_users_table',	1),
(2,	'2014_10_12_100000_create_password_resets_table',	1),
(3,	'2019_08_19_000000_create_failed_jobs_table',	1),
(4,	'2020_09_09_022727_create_galleries_table',	2),
(5,	'2020_09_09_023733_create_travel_packages_table',	3),
(6,	'2020_09_09_023746_create_galleries_table',	3),
(7,	'2020_09_09_024209_create_transactions_table',	4),
(8,	'2020_09_09_024829_create_transaction_details_table',	5),
(9,	'2020_09_09_025552_add_roles_field_to_users_table',	6),
(10,	'2020_09_09_150157_add_username_field_to_users_table',	7);

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `transactions`;
CREATE TABLE `transactions` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `travel_packages_id` bigint(20) unsigned NOT NULL,
  `users_id` bigint(20) unsigned DEFAULT NULL,
  `additional_visa` int(11) NOT NULL,
  `transaction_total` int(11) NOT NULL,
  `transaction_status` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `travel_packages_id` (`travel_packages_id`),
  KEY `users_id` (`users_id`),
  CONSTRAINT `transactions_ibfk_1` FOREIGN KEY (`travel_packages_id`) REFERENCES `travel_packages` (`id`),
  CONSTRAINT `transactions_ibfk_2` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `transactions` (`id`, `travel_packages_id`, `users_id`, `additional_visa`, `transaction_total`, `transaction_status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(8,	1,	1,	190,	390,	'PENDDING',	NULL,	'2020-09-23 23:27:11',	'2020-09-23 23:28:45'),
(10,	3,	1,	190,	20190,	'PENDDING',	NULL,	'2020-09-24 20:31:03',	'2020-09-24 20:31:33'),
(11,	1,	1,	0,	100,	'PENDDING',	NULL,	'2020-09-24 20:36:05',	'2020-09-24 20:36:09'),
(12,	3,	1,	0,	20000,	'PENDDING',	NULL,	'2020-09-24 23:09:14',	'2020-09-24 23:09:36');

DROP TABLE IF EXISTS `transaction_details`;
CREATE TABLE `transaction_details` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `transactions_id` int(11) NOT NULL,
  `username` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nationality` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_visa` tinyint(1) NOT NULL,
  `doe_passport` date NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `transaction_details` (`id`, `transactions_id`, `username`, `nationality`, `is_visa`, `doe_passport`, `deleted_at`, `created_at`, `updated_at`) VALUES
(11,	8,	'wandauser',	'ID',	0,	'2025-09-24',	NULL,	'2020-09-23 23:27:11',	'2020-09-23 23:27:11'),
(12,	8,	'laksuser',	'ID',	1,	'2020-09-25',	NULL,	'2020-09-23 23:27:53',	'2020-09-23 23:27:53'),
(13,	9,	'wandauser',	'ID',	0,	'2025-09-24',	'2020-09-23 23:28:58',	'2020-09-23 23:28:54',	'2020-09-23 23:28:58'),
(14,	10,	'wandauser',	'ID',	0,	'2025-09-25',	NULL,	'2020-09-24 20:31:03',	'2020-09-24 20:31:03'),
(15,	10,	'laksuser',	'ID',	1,	'2020-09-30',	NULL,	'2020-09-24 20:31:21',	'2020-09-24 20:31:21'),
(16,	11,	'wandauser',	'ID',	0,	'2025-09-25',	NULL,	'2020-09-24 20:36:05',	'2020-09-24 20:36:05'),
(17,	12,	'wandauser',	'ID',	0,	'2025-09-25',	NULL,	'2020-09-24 23:09:15',	'2020-09-24 23:09:15'),
(18,	12,	'laksuser',	'ID',	0,	'2020-09-30',	NULL,	'2020-09-24 23:09:29',	'2020-09-24 23:09:29');

DROP TABLE IF EXISTS `travel_packages`;
CREATE TABLE `travel_packages` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `about` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `featured_event` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `language` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foods` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `departure_date` date NOT NULL,
  `duration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `travel_packages` (`id`, `title`, `slug`, `location`, `about`, `featured_event`, `language`, `foods`, `departure_date`, `duration`, `type`, `price`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1,	'Pantai Kejawanan',	'pantai-kejawanan',	'Cirebon',	'wnowwjvnownovknwonwnwvnwknvwkp',	'ergehethet',	'Indonesia',	'karedok',	'2020-09-17',	'2D',	'Open Trip',	'100',	NULL,	'2020-09-16 21:32:28',	'2020-09-21 09:38:05'),
(2,	'Liburan Akhir Pekan',	'liburan-akhir-pekan',	'Kuningan',	'ajdfajdnvondjvbidbvjwb wdjbvwbvowbovb',	'Jojed',	'Indonesia',	'seblak',	'2020-01-01',	'2D',	'Liburan',	'1000',	'2020-09-17 00:02:36',	'2020-09-16 21:37:45',	'2020-09-17 00:02:36'),
(3,	'Goa Sunyaragi',	'goa-sunyaragi',	'Kuningan',	'dvwrbetbtebbbbbbbbbbbbbbbbbbbaaaaaaaaaaaaaabeeeeeee',	'Joget',	'Indonesia',	'seblak',	'2020-09-17',	'3D',	'Open Trip',	'10000',	NULL,	'2020-09-17 00:30:33',	'2020-09-21 09:38:32');

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `roles` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'USER',
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `roles`, `username`) VALUES
(1,	'wandasuwanda',	'wanda@gmail.com',	'2020-09-23 08:48:15',	'$2y$10$gtzKyDEBc94jatxLsnyksuaizEw0YhMoAVGe5c5FovW8RRwnOjM4W',	'udcGoRTlri7Q8Vc2pigZVaXkOm7H4Qc6fIyixKGuR6VZxwvmQLCo69Rs1naf',	'2020-09-09 03:01:01',	'2020-09-24 01:21:06',	'ADMIN',	'wandauser'),
(2,	'wandalaks',	'wandalaks@gmail.com',	'2020-09-23 08:48:09',	'$2y$10$Akot.tavl2B8xkgp0ZaVEOMRVy5sAkyVAUf9s70.d9T67a.UJJ8/a',	NULL,	'2020-09-09 03:03:04',	'2020-09-09 03:03:04',	'USER',	'laksuser'),
(12,	'wandawanda',	'wandawanda@gmail.com',	'2020-09-11 19:17:01',	'$2y$10$JIL9Re9grfs873JQrYEh.uWTdy/gZ9qRgjRqkOxri2L6emzrOqEDm',	NULL,	'2020-09-11 19:16:44',	'2020-09-11 19:17:01',	'USER',	'wandawanda'),
(13,	'okeh',	'okehokehokeh@gmail.com',	'2020-09-24 01:43:10',	'$2y$10$TLTgi/ZUGlPLZ3HvFa1wLu.yE8dFsiQKA4bkfZxAdHnUThdksMOnu',	NULL,	'2020-09-24 01:39:30',	'2020-09-24 01:43:10',	'USER',	'okehokehokeh');

-- 2020-09-25 09:01:05
