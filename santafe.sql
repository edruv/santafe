-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         5.7.33 - MySQL Community Server (GPL)
-- SO del servidor:              Win64
-- HeidiSQL Versión:             11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Volcando estructura para tabla santafe.admins
CREATE TABLE IF NOT EXISTS `admins` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` tinyint(4) NOT NULL,
  `menu_display` tinyint(1) DEFAULT NULL,
  `activo` tinyint(1) NOT NULL DEFAULT '1',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `admins_user_unique` (`user`),
  UNIQUE KEY `admins_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla santafe.admins: ~1 rows (aproximadamente)
DELETE FROM `admins`;
/*!40000 ALTER TABLE `admins` DISABLE KEYS */;
INSERT INTO `admins` (`id`, `user`, `email`, `password`, `role`, `menu_display`, `activo`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'admin', 'admin@wozial.com', '$2a$10$4RkbKKmavc66IzEvXM6Ek.gH9H.aqsX9F4HWL75ts0ydOChZWvSKy', 1, 1, 1, '7bcbWneSubNyaE2pGrIcVCozYm8yAXH4dmNiQyaBOYKJuQxNGFQQdNWIMgQU', '2020-10-14 18:24:37', '2020-10-14 18:24:37');
/*!40000 ALTER TABLE `admins` ENABLE KEYS */;

-- Volcando estructura para tabla santafe.carrusels
CREATE TABLE IF NOT EXISTS `carrusels` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `titulo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subtitulo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `orden` int(11) NOT NULL DEFAULT '666',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla santafe.carrusels: ~2 rows (aproximadamente)
DELETE FROM `carrusels`;
/*!40000 ALTER TABLE `carrusels` DISABLE KEYS */;
INSERT INTO `carrusels` (`id`, `titulo`, `subtitulo`, `image`, `url`, `video`, `orden`) VALUES
	(14, NULL, NULL, 'l2kRW4O4dG2yK3P2Adg232RKltaW6J.jpg', NULL, NULL, 666),
	(15, NULL, NULL, '5UhsODgguoLFcnwSIJ6FRO3ySR3Vts.png', NULL, NULL, 666);
/*!40000 ALTER TABLE `carrusels` ENABLE KEYS */;

-- Volcando estructura para tabla santafe.categorias
CREATE TABLE IF NOT EXISTS `categorias` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent` int(11) NOT NULL DEFAULT '0',
  `activo` tinyint(1) NOT NULL DEFAULT '1',
  `orden` int(11) NOT NULL DEFAULT '666',
  PRIMARY KEY (`id`),
  UNIQUE KEY `categorias_slug_unique` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla santafe.categorias: ~9 rows (aproximadamente)
DELETE FROM `categorias`;
/*!40000 ALTER TABLE `categorias` DISABLE KEYS */;
INSERT INTO `categorias` (`id`, `nombre`, `slug`, `parent`, `activo`, `orden`) VALUES
	(1, 'Evento empresarial', 'empresarial', 0, 1, 666),
	(2, 'Evento social\r\n', 'social', 0, 1, 666),
	(3, 'Musica para eventos\r\n', 'musica', 0, 1, 666),
	(4, 'Recintos para eventos\r\n', 'recintos', 0, 1, 666),
	(5, 'Dj', 'dj', 3, 1, 666),
	(6, 'Bodas', 'bodas', 2, 1, 666),
	(7, 'Recinto Exterior', 'recinto-exterior', 4, 1, 666),
	(8, 'Recinto Interior', 'recinto-interior', 4, 1, 666),
	(9, 'Boda', 'boda', 1, 1, 666);
/*!40000 ALTER TABLE `categorias` ENABLE KEYS */;

-- Volcando estructura para tabla santafe.configuracions
CREATE TABLE IF NOT EXISTS `configuracions` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `prodspag` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `paypalemail` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `destinatario` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `destinatario2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remitente` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remitentepass` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remitentehost` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remitenteport` varchar(6) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remitenteseguridad` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telefono` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `whatsapp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `whatsapp2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `envio` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `envioglobal` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `iva` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `incremento` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mapa` text COLLATE utf8mb4_unicode_ci,
  `direccion` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla santafe.configuracions: ~1 rows (aproximadamente)
DELETE FROM `configuracions`;
/*!40000 ALTER TABLE `configuracions` DISABLE KEYS */;
INSERT INTO `configuracions` (`id`, `title`, `description`, `prodspag`, `paypalemail`, `destinatario`, `destinatario2`, `remitente`, `remitentepass`, `remitentehost`, `remitenteport`, `remitenteseguridad`, `telefono`, `whatsapp`, `whatsapp2`, `facebook`, `instagram`, `youtube`, `linkedin`, `envio`, `envioglobal`, `iva`, `incremento`, `mapa`, `direccion`, `created_at`, `updated_at`) VALUES
	(1, 'IMBO', 'Productos para empaque', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '3320452430', '3317430455', '4425719568', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3733.674419350157!2d-103.39881418566796!3d20.64212360624187!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8428ae0ed241a9bb%3A0xbb4c3906c38265fd!2sWozial%20Marketing%20Lovers!5e0!3m2!1ses-419!2smx!4v1652083866683!5m2!1ses-419!2smx" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>', 'Av. Lapizlázuli 2074, \nCP. 44560,\nGuadalajara, Jal.', NULL, '2022-05-09 08:12:49');
/*!40000 ALTER TABLE `configuracions` ENABLE KEYS */;

-- Volcando estructura para tabla santafe.elementos
CREATE TABLE IF NOT EXISTS `elementos` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `elemento` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `texto` text COLLATE utf8mb4_unicode_ci,
  `imagen` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contenido` tinyint(1) NOT NULL DEFAULT '0',
  `activo` tinyint(1) NOT NULL DEFAULT '1',
  `orden` int(11) NOT NULL DEFAULT '666',
  `seccion` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `elementos_seccion_foreign` (`seccion`),
  CONSTRAINT `elementos_seccion_foreign` FOREIGN KEY (`seccion`) REFERENCES `seccions` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla santafe.elementos: ~5 rows (aproximadamente)
DELETE FROM `elementos`;
/*!40000 ALTER TABLE `elementos` DISABLE KEYS */;
INSERT INTO `elementos` (`id`, `elemento`, `texto`, `imagen`, `url`, `contenido`, `activo`, `orden`, `seccion`) VALUES
	(1, 'parrafo', '<div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore aut magnam amet, esse ea repellendus quam placeat aliquam, tenetur et.&nbsp;</div>', NULL, NULL, 0, 1, 666, 1),
	(2, 'ayuda', '<div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis unde dolorem eum, adipisci culpa! Laboriosam quibusdam reprehenderit nihil qui, alias officia nam ea, in veritatis, impedit adipisci! Quod laborum, animi.&nbsp;</div>', NULL, NULL, 0, 1, 666, 2),
	(3, 'hola', '<div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam placeat vero officiis fugiat natus dolore voluptatibus in, quas. Doloribus nostrum aperiam consectetur, vel ratione maxime autem magnam, in labore minima sunt sed optio quo, reprehenderit iste officiis voluptatem. Molestiae, eaque.&nbsp;</div>', NULL, NULL, 0, 1, 666, 2),
	(4, 'contenido', NULL, 'rrVhH2t7i4PPP2MDmivxD8BUo55eDn.jpg', NULL, 1, 1, 666, 3),
	(5, 'contenido', '<div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse quos maiores nam sit a alias, inventore eius libero ipsum consectetur.&nbsp;</div>', NULL, NULL, 0, 1, 666, 3);
/*!40000 ALTER TABLE `elementos` ENABLE KEYS */;

-- Volcando estructura para tabla santafe.failed_jobs
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla santafe.failed_jobs: ~0 rows (aproximadamente)
DELETE FROM `failed_jobs`;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;

-- Volcando estructura para tabla santafe.faqs
CREATE TABLE IF NOT EXISTS `faqs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `pregunta` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `respuesta` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `orden` int(11) NOT NULL DEFAULT '666',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla santafe.faqs: ~0 rows (aproximadamente)
DELETE FROM `faqs`;
/*!40000 ALTER TABLE `faqs` DISABLE KEYS */;
/*!40000 ALTER TABLE `faqs` ENABLE KEYS */;

-- Volcando estructura para tabla santafe.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla santafe.migrations: ~13 rows (aproximadamente)
DELETE FROM `migrations`;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_resets_table', 1),
	(3, '2019_08_19_000000_create_failed_jobs_table', 1),
	(4, '2020_10_13_163806_create_admins_table', 1),
	(5, '2020_10_14_181530_create_configuracions_table', 1),
	(6, '2020_12_08_170359_create_carrusels_table', 1),
	(7, '2020_12_09_193424_create_politicas_table', 1),
	(8, '2020_12_16_000636_create_faqs_table', 1),
	(9, '2021_02_02_175759_create_seccions_table', 1),
	(10, '2021_02_02_175823_create_elementos_table', 1),
	(13, '2021_10_27_064531_create_categorias_table', 2),
	(15, '2021_04_01_184932_create_productos_table', 3),
	(16, '2021_04_02_200200_create_productos_photos_table', 3);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Volcando estructura para tabla santafe.password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla santafe.password_resets: ~0 rows (aproximadamente)
DELETE FROM `password_resets`;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- Volcando estructura para tabla santafe.politicas
CREATE TABLE IF NOT EXISTS `politicas` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `titulo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `descripcion` text COLLATE utf8mb4_unicode_ci,
  `archivo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla santafe.politicas: ~0 rows (aproximadamente)
DELETE FROM `politicas`;
/*!40000 ALTER TABLE `politicas` DISABLE KEYS */;
/*!40000 ALTER TABLE `politicas` ENABLE KEYS */;

-- Volcando estructura para tabla santafe.productos
CREATE TABLE IF NOT EXISTS `productos` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion_rapida` text COLLATE utf8mb4_unicode_ci,
  `descripcion` text COLLATE utf8mb4_unicode_ci,
  `categoria` int(11) NOT NULL,
  `portada` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pdf` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ciudad` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `inicio` tinyint(1) NOT NULL DEFAULT '0',
  `activo` tinyint(1) NOT NULL DEFAULT '1',
  `orden` int(11) NOT NULL DEFAULT '666',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla santafe.productos: ~4 rows (aproximadamente)
DELETE FROM `productos`;
/*!40000 ALTER TABLE `productos` DISABLE KEYS */;
INSERT INTO `productos` (`id`, `nombre`, `descripcion_rapida`, `descripcion`, `categoria`, `portada`, `pdf`, `ciudad`, `inicio`, `activo`, `orden`, `created_at`, `updated_at`) VALUES
	(1, 'boda social', '<div>Boda social<br />Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam placeat vero officiis fugiat natus dolore voluptatibus in, quas. Doloribus nostrum aperiam consectetur</div>', '<div>Boda social<br />Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam placeat vero officiis fugiat natus dolore voluptatibus in, quas. Doloribus nostrum aperiam consectetur, vel ratione maxime autem magnam, in labore minima sunt sed optio quo, reprehenderit iste officiis voluptatem. Molestiae, eaque.&amp;nbsp;</div>', 6, NULL, 'pNGpsimGfmrKchbv5zhZondLh4DPEa.pdf', NULL, 1, 1, 666, '2022-05-09 08:57:55', '2022-05-09 11:17:15'),
	(2, 'recinto', '<div>recinto<br />Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam placeat vero officiis fugiat natus dolore voluptatibus in, quas. Doloribus nostrum aperiam consectetur</div>', '<div>recinto<br />Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam placeat vero officiis fugiat natus dolore voluptatibus in, quas. Doloribus nostrum aperiam consectetur, vel ratione maxime autem magnam, in labore minima sunt sed optio quo, reprehenderit iste officiis voluptatem. Molestiae, eaque.&amp;nbsp;</div>', 8, NULL, '', 'guadalajara', 1, 1, 666, '2022-05-09 08:57:55', '2022-05-09 09:51:21'),
	(3, 'boda empresarial', '<div>Boda empresarial<br />Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam placeat vero officiis fugiat natus dolore voluptatibus in, quas. Doloribus nostrum aperiam consectetur</div>', '<div>Boda empresarial<br />Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam placeat vero officiis fugiat natus dolore voluptatibus in, quas. Doloribus nostrum aperiam consectetur, vel ratione maxime autem magnam, in labore minima sunt sed optio quo, reprehenderit iste officiis voluptatem. Molestiae, eaque.&amp;nbsp;</div>', 9, NULL, 'pNGpsimGfmrKchbv5zhZondLh4DPEa2.pdf', NULL, 1, 1, 666, '2022-05-09 08:57:55', '2022-05-09 09:51:22'),
	(4, 'conjunto', '<div>conjunto</div>', '<div>conjunto</div>', 5, NULL, NULL, NULL, 1, 1, 666, '2022-05-09 09:36:44', '2022-05-09 09:51:22');
/*!40000 ALTER TABLE `productos` ENABLE KEYS */;

-- Volcando estructura para tabla santafe.productos_photos
CREATE TABLE IF NOT EXISTS `productos_photos` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `producto` bigint(20) unsigned NOT NULL,
  `titulo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `orden` int(11) NOT NULL DEFAULT '666',
  `galeria` tinyint(4) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `productos_photos_producto_foreign` (`producto`),
  CONSTRAINT `productos_photos_producto_foreign` FOREIGN KEY (`producto`) REFERENCES `productos` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla santafe.productos_photos: ~7 rows (aproximadamente)
DELETE FROM `productos_photos`;
/*!40000 ALTER TABLE `productos_photos` DISABLE KEYS */;
INSERT INTO `productos_photos` (`id`, `producto`, `titulo`, `image`, `orden`, `galeria`) VALUES
	(1, 1, NULL, 'AZYjXYR6Fc7TSjyH4MQUPUhSHvKFSA.png', 666, 1),
	(2, 1, NULL, 'EJd0obkl14kg0UtC8tPctPsp6L7FZz.png', 666, 2),
	(3, 4, NULL, 'Ivp5Pvo6MYz6Q8hk6hEblZl5vJ5vfz.png', 666, 1),
	(4, 2, NULL, '6gcgEjQZdtLg1Myd89YY4C4P9fw5vG.png', 666, 1),
	(5, 2, NULL, 'Wmfv27JAeBObRCwZfNjy3MtcUXguQO.png', 666, 2),
	(6, 3, NULL, 'w7ohPxaYN5TS5Zx9j12md0qZ6l25AG.png', 666, 1),
	(7, 3, NULL, 'z7do8x0rhMibyEVGxAoI95XCVqo2C9.png', 666, 2);
/*!40000 ALTER TABLE `productos_photos` ENABLE KEYS */;

-- Volcando estructura para tabla santafe.seccions
CREATE TABLE IF NOT EXISTS `seccions` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `seccion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `portada` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `seccions_slug_unique` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla santafe.seccions: ~3 rows (aproximadamente)
DELETE FROM `seccions`;
/*!40000 ALTER TABLE `seccions` DISABLE KEYS */;
INSERT INTO `seccions` (`id`, `seccion`, `portada`, `slug`) VALUES
	(1, 'inicio', NULL, 'index'),
	(2, 'contacto', NULL, 'contact'),
	(3, 'formulario', NULL, 'form');
/*!40000 ALTER TABLE `seccions` ENABLE KEYS */;

-- Volcando estructura para tabla santafe.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lastname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `telefono` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `empresa` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rfc` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nivel` tinyint(4) NOT NULL DEFAULT '0',
  `puntos` int(11) NOT NULL,
  `distr_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `referido_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `distribuidor` tinyint(1) NOT NULL DEFAULT '0',
  `profile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `activo` tinyint(1) NOT NULL DEFAULT '1',
  `role` int(11) DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  UNIQUE KEY `users_distr_code_unique` (`distr_code`),
  UNIQUE KEY `users_username_unique` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla santafe.users: ~0 rows (aproximadamente)
DELETE FROM `users`;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
