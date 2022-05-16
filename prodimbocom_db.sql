-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 02-05-2022 a las 04:23:34
-- Versión del servidor: 10.3.34-MariaDB-0ubuntu0.20.04.1
-- Versión de PHP: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `prodimbocom_db`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` tinyint(4) NOT NULL,
  `menu_display` tinyint(1) DEFAULT NULL,
  `activo` tinyint(1) NOT NULL DEFAULT 1,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `admins`
--

INSERT INTO `admins` (`id`, `user`, `email`, `password`, `role`, `menu_display`, `activo`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@wozial.com', '$2a$10$4RkbKKmavc66IzEvXM6Ek.gH9H.aqsX9F4HWL75ts0ydOChZWvSKy', 1, 1, 1, '7bcbWneSubNyaE2pGrIcVCozYm8yAXH4dmNiQyaBOYKJuQxNGFQQdNWIMgQU', '2020-10-14 23:24:37', '2020-10-14 23:24:37');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrusels`
--

CREATE TABLE `carrusels` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `titulo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subtitulo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `orden` int(11) NOT NULL DEFAULT 666
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `carrusels`
--

INSERT INTO `carrusels` (`id`, `titulo`, `subtitulo`, `image`, `url`, `video`, `orden`) VALUES
(11, NULL, NULL, '0xOvbaHQKeiuvHA5kEH3rOmwh504g9.jpg', NULL, NULL, 666),
(12, NULL, NULL, 'TTYjQoaCv95P8pknA5zck2NqyqwRNa.jpg', NULL, NULL, 666),
(13, NULL, NULL, 'SaEBmTweFBLTxONlOx85aoqYyycwzY.jpg', NULL, NULL, 666);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent` int(11) NOT NULL DEFAULT 0,
  `activo` tinyint(1) NOT NULL DEFAULT 1,
  `orden` int(11) NOT NULL DEFAULT 666
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id`, `nombre`, `slug`, `parent`, `activo`, `orden`) VALUES
(1, 'Bolsas de papel', 'bolsas-de-papel', 0, 1, 666),
(2, 'Otros tipos de empaque', 'otros-tipos-de-empaque', 0, 1, 666);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `configuracions`
--

CREATE TABLE `configuracions` (
  `id` bigint(20) UNSIGNED NOT NULL,
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
  `mapa` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `direccion` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `configuracions`
--

INSERT INTO `configuracions` (`id`, `title`, `description`, `prodspag`, `paypalemail`, `destinatario`, `destinatario2`, `remitente`, `remitentepass`, `remitentehost`, `remitenteport`, `remitenteseguridad`, `telefono`, `whatsapp`, `whatsapp2`, `facebook`, `instagram`, `youtube`, `linkedin`, `envio`, `envioglobal`, `iva`, `incremento`, `mapa`, `direccion`, `created_at`, `updated_at`) VALUES
(1, 'IMBO', 'Productos para empaque', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '4426738346', '4427887509', '4425719568', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3735.26095032911!2d-100.3780338847383!3d20.57739830840845!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d344c63af2b2af%3A0x8506d3bdeed8e510!2sAv.%20Luis%20Vega%20Monrroy%20901A%2C%20zona%20dos%20extendida%2C%20Plazas%20del%20Sol%201ra%20Secc%2C%2076099%20Santiago%20de%20Quer%C3%A9taro%2C%20Qro.!5e0!3m2!1ses-419!2smx!4v1635149990350!5m2!1ses-419!2smx\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"></iframe>', 'Av. Luis Vega Monrroy 901A, Plazas del Sol 1ra Secc, 76099 Santiago de Querétaro, Qro.', NULL, '2021-10-29 15:12:19');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `elementos`
--

CREATE TABLE `elementos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `elemento` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `texto` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `imagen` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contenido` tinyint(1) NOT NULL DEFAULT 0,
  `activo` tinyint(1) NOT NULL DEFAULT 1,
  `orden` int(11) NOT NULL DEFAULT 666,
  `seccion` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `elementos`
--

INSERT INTO `elementos` (`id`, `elemento`, `texto`, `imagen`, `url`, `contenido`, `activo`, `orden`, `seccion`) VALUES
(1, 'resistencia', '<p>Nuestras bolsas resistende 6 a 10 Kg de peso</p>', NULL, NULL, 0, 1, 666, 1),
(2, 'resistencia', NULL, '2hqyX9OGPjx9SuaKebseb0tmvi00Jo.png', NULL, 1, 1, 666, 1),
(3, 'desde 50 piezas', '<p>Pueden ser de medidas y modelos diferentes</p>', NULL, NULL, 0, 1, 666, 1),
(4, 'desde 50 piezas', NULL, '6Zq2AgFWJtYZZyH0FPJt2Mht7RgtVh.png', NULL, 1, 1, 666, 1),
(5, 'papel de calidad', '<p>Papel m&aacute;s grueso que el de la competencia</p>', NULL, NULL, 0, 1, 666, 1),
(6, 'papel de calidad', NULL, 'MV5PZ6GNlndU5P267FFpb61jKSbqC1.png', NULL, 1, 1, 666, 1),
(7, 'tu solucion', '<p>Somos una empresa queretana que surgi&oacute; como una soluci&oacute;n para los negocios con problemas de transporte y almacenamiento para sus productos a ra&iacute;z de la legislaci&oacute;n a favor del medio ambiente que pretende reducir el uso y producci&oacute;n de empaques de pl&aacute;stico y unicel para el uso comercial.</p>', NULL, NULL, 0, 1, 666, 1),
(8, 'pagos', '<div>ACEPTAMOS DEP&Oacute;SITOS, TRANSFERENCIAS, PAGO CON TARJETA A DISTANCIA Y PAGOS EN EFECTIVO.</div>', NULL, NULL, 0, 1, 666, 1),
(9, 'pagos', NULL, 'NgCVWDhYbPx3U2UPEr8yyK1algippg.png', NULL, 1, 1, 666, 1),
(10, 'envios', '<div>REALIZAMOS ENV&Iacute;OS A TODA LA REP&Uacute;BLICA</div>', NULL, NULL, 0, 1, 666, 1),
(11, 'envios', NULL, '6VDSnw0ipx5yW1LNcEFtanst5F6Qko.png', NULL, 1, 1, 666, 1),
(12, 'paq 1', '<div>Paqueteria Fedex</div>', NULL, NULL, 0, 1, 666, 2),
(13, 'paq 1', NULL, 'LvW2ADR5ahhNmhjiFcn2vmf4OII11w.png', NULL, 1, 1, 666, 2),
(14, 'paq 2', '<div>Paqueteria Tres Guerras</div>', NULL, NULL, 0, 1, 666, 2),
(15, 'paq 2', NULL, 'dC90k68UsQ8fi5rr7ngyIcgKbolo4W.png', NULL, 1, 1, 666, 2),
(16, 'paq 3', '<div>Comunicate con nosotros si quieres usar otra paqueteria</div>', NULL, NULL, 0, 1, 666, 2),
(17, 'paq 3', NULL, 'PMcpi5dUamjfCfzJ7RvZ62UYSqaJKN.png', NULL, 1, 1, 666, 2),
(18, 'precio titulo', '<div>Precios de Mayoreo</div>\r\n<div>a partir de 500, 1000, 3000 o mas piezas</div>', NULL, NULL, 0, 1, 666, 2),
(19, 'precio subtitulo', '<div>Puedes combinar diferentes...</div>', NULL, NULL, 0, 1, 666, 2),
(20, 'nosotros', '<div>Somos una empresa queretana que surgi&oacute;&nbsp; de la necesidad actual de reducir el uso&nbsp; y producci&oacute;n de bolsas de pl&aacute;stico para el comercio.&nbsp;</div>\r\n<div>Utilizando papelreciclado de la mejor calidad, ofrecemos una variedad de medidas diferentes para cubrir la demanda de BOLSAS del mercado y hacer m&aacute;s f&aacute;cil la vida de sus clientes.&nbsp;</div>', NULL, NULL, 0, 1, 666, 3),
(21, 'nosotros', NULL, '4yz9k47cuyJCyaOsb7ebOdn3lLhtlY.png', NULL, 1, 1, 666, 3),
(22, 'resposabilidad', '<div>RESPONSABILIDAD ECOL&Oacute;GICA</div>', NULL, NULL, 0, 1, 666, 3),
(23, 'resposabilidad', NULL, 'wx9H5BTjgaeR826o1BYoM0KxEkUBlL.png', NULL, 1, 1, 666, 3),
(24, 'inventario', '<div>SIEMPRE TENEMOS INVENTARIO</div>', NULL, NULL, 0, 1, 666, 3),
(25, 'inventario', NULL, 'qFsMIXIS4oTC8Qh9SXdlscZ70pgexY.png', NULL, 1, 1, 666, 3),
(26, 'precio justo', '<div>TENEMOS PRECIOS JUSTOS</div>', NULL, NULL, 0, 1, 666, 3),
(27, 'precio justo', NULL, 'tS4uQFxG3yzbSHVKJPE0sAfqTvvj5u.png', NULL, 1, 1, 666, 3),
(28, 'proyecto especial', '<div>Si tienes un proyecto especial que no se adapte a losproductos que ofrecemos, comunicate, te asesoramos para encontrar una soluci&oacute;n.&nbsp;</div>', NULL, NULL, 0, 1, 666, 3),
(29, 'proyecto especial', NULL, 'beGygOPTf6NMKmyEzVRmFDic0wiaFX.png', NULL, 1, 1, 666, 3),
(30, 'contacto', '<div>Si necesitas m&aacute;s informaci&oacute;n, resolver dudas o hablar con un asesor para cotizar puedesllamarnos o enviar un mensaje via WhatsApp haciendo clic en estos botones.</div>', NULL, NULL, 0, 1, 666, 4),
(31, 'formulario', '<div>Comunicarte a trav&eacute;s de nuestro correo electr&oacute;nico utilizando el siguiente formulario:&nbsp;</div>', NULL, NULL, 0, 1, 666, 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `faqs`
--

CREATE TABLE `faqs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pregunta` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `respuesta` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `orden` int(11) NOT NULL DEFAULT 666,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

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
(11, '2021_04_01_184932_create_productos_table', 1),
(12, '2021_04_02_200200_create_productos_photos_table', 1),
(13, '2021_10_27_064531_create_categorias_table', 2),
(14, '2021_10_27_070113_create_producto_medidas_table', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `politicas`
--

CREATE TABLE `politicas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `titulo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `descripcion` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `archivo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `categoria` int(11) NOT NULL,
  `portada` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `medidas` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pdf` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `llave` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `inicio` tinyint(1) NOT NULL DEFAULT 0,
  `activo` tinyint(1) NOT NULL DEFAULT 1,
  `orden` int(11) NOT NULL DEFAULT 666,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `nombre`, `descripcion`, `categoria`, `portada`, `medidas`, `pdf`, `llave`, `inicio`, `activo`, `orden`, `created_at`, `updated_at`) VALUES
(1, 'kraft café', '<div>adfasdf</div>', 1, 'evK8T5jppzqgMPPQikt3kyZMuiMSbe.png', 'K3CxQwVYtZ1L3XarMZogU91c48YpT7.png', NULL, NULL, 1, 1, 666, '2021-10-27 12:08:00', '2021-10-29 14:08:21'),
(2, 'kraft blanca', '<div>kraft blanca</div>', 1, 'Tq3P5evH1VuZRdyT5cpmoJbiI5bX2J.png', 'K3CxQwVYtZ1L3XarMZogU91c48YpT72.png', NULL, NULL, 1, 1, 666, '2021-10-27 12:08:00', '2021-11-02 15:38:36'),
(5, 'loncheras en caple blanco de 18 pts', '<div>.</div>', 2, 'bmVhcl4hs5UA41JsQMzArjKn7b4IUI.png', 'rBEvC0Gm26jhzaHwL8p5W4Z7lioeTd.jpg', NULL, NULL, 1, 1, 666, '2021-11-02 00:20:29', '2021-11-02 15:40:36'),
(6, 'sulfatada 18 pts y ventana acetato color blanco', '<div>.</div>', 2, '7xlDcIsIRAWIW0EK6UiomLHI1KeHzN.png', '4DDbqho4In63i7OtSsXA9F94Dj2twP.jpg', NULL, NULL, 1, 1, 666, '2021-11-02 15:42:48', '2021-11-02 15:52:50');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos_photos`
--

CREATE TABLE `productos_photos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `producto` bigint(20) UNSIGNED NOT NULL,
  `titulo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `orden` int(11) NOT NULL DEFAULT 666
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `productos_photos`
--

INSERT INTO `productos_photos` (`id`, `producto`, `titulo`, `image`, `orden`) VALUES
(1, 1, 'ass tejida color negro', '7Xkb2sPKct9aLOdqGvb1BtPmdQqaAj.png', 1),
(2, 1, 'papel kraft de 160 gr.', 'G0mnJwHXQoH2qaTOwKjutLqhT95g8o.png', 0),
(3, 2, 'ass tejida color negro', '7Xkb2sPKct9aLOdqGvb1BtPmdQqaAj2.png', 1),
(4, 2, 'papel kraft de 160 gr.', 'G0mnJwHXQoH2qaTOwKjutLqhT95g8o2.png', 0),
(5, 5, 'asa troquelada', 'dYYdaiB3Kg3HLwcvXKJS0Nmc0fwZb2.jpg', 666),
(7, 5, 'Cartulina Caple de 18 pts', 'Eul0ljrpcebDzoQsKSYgxfPdIfdNiW.jpg', 666),
(8, 6, 'Ventana acetato', 'kwjFyOEdXKLC0zNuONqSHCzgmXjWXe.jpg', 666),
(9, 6, 'CARTULINA SULFATADA DE 18 PTS', 'De6Tr9b6q7IM2xCRfx7Vii3fso4thB.jpg', 666);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto_medidas`
--

CREATE TABLE `producto_medidas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mx` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `my` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mz` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `precio` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `producto` bigint(20) UNSIGNED NOT NULL,
  `activo` tinyint(1) NOT NULL DEFAULT 1,
  `orden` int(11) NOT NULL DEFAULT 666
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `producto_medidas`
--

INSERT INTO `producto_medidas` (`id`, `nombre`, `mx`, `my`, `mz`, `precio`, `producto`, `activo`, `orden`) VALUES
(1, '2', '10', '6', '12', NULL, 1, 1, 666),
(2, '5', '13', '9', '22', NULL, 1, 1, 666),
(3, '7', '23.5', '10', '20', NULL, 1, 1, 666),
(4, '8', '14', '8', '34.5', NULL, 1, 1, 666),
(5, '8A', '17', '8', '34.5', NULL, 1, 1, 666),
(6, '12', '33', '10', '24', NULL, 1, 1, 666),
(7, '13', '23', '9.5', '33.5', NULL, 1, 1, 666),
(8, '13C', '24', '21', '24', NULL, 1, 1, 666),
(9, '14C', '28', '24', '28', NULL, 1, 1, 666),
(10, '14 Q', '30', '15', '30', NULL, 1, 1, 666),
(11, '15 B', '33', '11.5', '40', NULL, 1, 1, 666),
(12, '15 TQ', '30', '15', '40', NULL, 1, 1, 666),
(13, '16', '40', '15', '31.5', NULL, 1, 1, 666),
(14, '17 H', '33', '31', '28', NULL, 1, 1, 666),
(15, '17 I', '45', '15', '40', NULL, 1, 1, 666),
(16, '22', '50', '15', '37', NULL, 1, 1, 666),
(17, '2', '10', '6', '12', NULL, 2, 1, 666),
(18, '5', '13', '9', '22', NULL, 2, 1, 666),
(19, '7', '23.5', '10', '20', NULL, 2, 1, 666),
(20, '8', '14', '8', '34.5', NULL, 2, 1, 666),
(21, '8A', '17', '8', '34.5', NULL, 2, 0, 666),
(22, '12', '33', '10', '24', NULL, 2, 1, 666),
(23, '13', '23', '9.5', '33.5', NULL, 2, 1, 666),
(24, '13C', '24', '21', '24', NULL, 2, 1, 666),
(25, '14C', '28', '24', '28', NULL, 2, 1, 666),
(26, '14 Q', '30', '15', '30', NULL, 2, 1, 666),
(27, '15 B', '33', '11.5', '40', NULL, 2, 0, 666),
(28, '15 TQ', '30', '15', '40', NULL, 2, 1, 666),
(29, '16', '40', '15', '31.5', NULL, 2, 1, 666),
(30, '17 H', '33', '31', '28', NULL, 2, 1, 666),
(31, '17 I', '45', '15', '40', NULL, 2, 1, 666),
(32, '22', '50', '15', '37', NULL, 2, 1, 666),
(33, '1', '11', '14', '10', NULL, 5, 1, 666),
(34, '2', '12', '17.5', '11', NULL, 5, 1, 666),
(35, '1', '15', '15', '14', NULL, 6, 1, 666),
(36, '2', '26.5', '14', '9', NULL, 6, 1, 666);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `seccions`
--

CREATE TABLE `seccions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `seccion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `portada` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `seccions`
--

INSERT INTO `seccions` (`id`, `seccion`, `portada`, `slug`) VALUES
(1, 'inicio', NULL, 'index'),
(2, 'productos', NULL, 'products'),
(3, 'nosotros', NULL, 'aboutus'),
(4, 'contacto', NULL, 'contact');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
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
  `nivel` tinyint(4) NOT NULL DEFAULT 0,
  `puntos` int(11) NOT NULL,
  `distr_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `referido_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `distribuidor` tinyint(1) NOT NULL DEFAULT 0,
  `profile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `activo` tinyint(1) NOT NULL DEFAULT 1,
  `role` int(11) DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_user_unique` (`user`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indices de la tabla `carrusels`
--
ALTER TABLE `carrusels`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categorias_slug_unique` (`slug`);

--
-- Indices de la tabla `configuracions`
--
ALTER TABLE `configuracions`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `elementos`
--
ALTER TABLE `elementos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `elementos_seccion_foreign` (`seccion`);

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `politicas`
--
ALTER TABLE `politicas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `productos_llave_unique` (`llave`);

--
-- Indices de la tabla `productos_photos`
--
ALTER TABLE `productos_photos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `productos_photos_producto_foreign` (`producto`);

--
-- Indices de la tabla `producto_medidas`
--
ALTER TABLE `producto_medidas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `producto_medidas_producto_foreign` (`producto`);

--
-- Indices de la tabla `seccions`
--
ALTER TABLE `seccions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `seccions_slug_unique` (`slug`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_distr_code_unique` (`distr_code`),
  ADD UNIQUE KEY `users_username_unique` (`username`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `carrusels`
--
ALTER TABLE `carrusels`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `configuracions`
--
ALTER TABLE `configuracions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `elementos`
--
ALTER TABLE `elementos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `politicas`
--
ALTER TABLE `politicas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `productos_photos`
--
ALTER TABLE `productos_photos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `producto_medidas`
--
ALTER TABLE `producto_medidas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT de la tabla `seccions`
--
ALTER TABLE `seccions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `elementos`
--
ALTER TABLE `elementos`
  ADD CONSTRAINT `elementos_seccion_foreign` FOREIGN KEY (`seccion`) REFERENCES `seccions` (`id`);

--
-- Filtros para la tabla `productos_photos`
--
ALTER TABLE `productos_photos`
  ADD CONSTRAINT `productos_photos_producto_foreign` FOREIGN KEY (`producto`) REFERENCES `productos` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `producto_medidas`
--
ALTER TABLE `producto_medidas`
  ADD CONSTRAINT `producto_medidas_producto_foreign` FOREIGN KEY (`producto`) REFERENCES `productos` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
