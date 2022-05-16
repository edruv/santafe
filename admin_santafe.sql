-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 15-05-2022 a las 06:28:59
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
-- Base de datos: `admin_santafe`
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
(1, 'admin', 'admin@wozial.com', '$2a$10$4RkbKKmavc66IzEvXM6Ek.gH9H.aqsX9F4HWL75ts0ydOChZWvSKy', 1, 1, 1, '7bcbWneSubNyaE2pGrIcVCozYm8yAXH4dmNiQyaBOYKJuQxNGFQQdNWIMgQU', '2020-10-14 18:24:37', '2020-10-14 18:24:37');

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
(14, NULL, NULL, 'l2kRW4O4dG2yK3P2Adg232RKltaW6J.jpg', NULL, NULL, 666),
(15, NULL, NULL, '5UhsODgguoLFcnwSIJ6FRO3ySR3Vts.png', NULL, NULL, 666);

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
(1, 'Evento empresarial', 'empresarial', 0, 1, 666),
(2, 'Evento social\r\n', 'social', 0, 1, 666),
(3, 'Musica para eventos\r\n', 'musica', 0, 1, 666),
(4, 'Recintos para eventos\r\n', 'recintos', 0, 1, 666),
(5, 'Dj', 'dj', 3, 1, 666),
(6, 'Bodas', 'bodas', 2, 1, 666),
(9, 'Boda', 'boda', 1, 1, 666),
(10, 'Mobiliario', 'mobiliario', 1, 1, 666),
(11, 'Banquetes', 'banquetes', 1, 1, 666),
(12, 'Decoracion', 'decoracion', 1, 1, 666),
(13, 'Grupo Musical', 'grupo-musical', 3, 1, 666),
(14, 'Salones', 'salones', 4, 1, 666),
(15, 'Terrazas', 'terrazas', 4, 1, 666),
(16, 'Música Clásica', 'musica-clasica', 3, 1, 666),
(17, 'Mariachi', 'mariachi', 3, 1, 666);

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
(1, 'Organización de eventos', 'santa fe sua', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '3338096501', '3338096502', '4425719568', 'https://www.facebook.com/', 'https://www.facebook.com/', 'https://www.facebook.com/', NULL, NULL, NULL, NULL, NULL, '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3733.674419350157!2d-103.39881418566796!3d20.64212360624187!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8428ae0ed241a9bb%3A0xbb4c3906c38265fd!2sWozial%20Marketing%20Lovers!5e0!3m2!1ses-419!2smx!4v1652083866683!5m2!1ses-419!2smx\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'Av. Lapizlázuli 2074, \nCP. 44560,\nGuadalajara, Jal.', NULL, '2022-05-10 02:13:38');

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
(1, 'parrafo', '<div>pat Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore aut magnam amet, esse ea repellendus quam placeat aliquam, tenetur et.&nbsp;</div>', NULL, NULL, 0, 1, 666, 1),
(2, 'ayuda', '<div>TEST 2Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis unde dolorem eum, adipisci culpa! Laboriosam quibusdam reprehenderit nihil qui, alias officia nam ea, in veritatis, impedit adipisci! Quod laborum, animi.&nbsp;</div>', NULL, NULL, 0, 1, 666, 2),
(3, 'hola', '<div>pAU 2Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam placeat vero officiis fugiat natus dolore voluptatibus in, quas. Doloribus nostrum aperiam consectetur, vel ratione maxime autem magnam, in labore minima sunt sed optio quo, reprehenderit iste officiis voluptatem. Molestiae, eaque.&nbsp;</div>', NULL, NULL, 0, 1, 666, 2),
(4, 'contenido', NULL, 'rrVhH2t7i4PPP2MDmivxD8BUo55eDn.jpg', NULL, 1, 1, 666, 3),
(5, 'contenido', '<div>test Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse quos maiores nam sit a alias, inventore eius libero ipsum consectetur.&nbsp;</div>', NULL, NULL, 0, 1, 666, 3);

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

--
-- Volcado de datos para la tabla `faqs`
--

INSERT INTO `faqs` (`id`, `pregunta`, `respuesta`, `orden`, `created_at`, `updated_at`) VALUES
(1, 'Por 1', '<p>asasas</p>', 666, '2022-05-09 16:50:30', '2022-05-09 16:50:30');

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
(13, '2021_10_27_064531_create_categorias_table', 2),
(15, '2021_04_01_184932_create_productos_table', 3),
(16, '2021_04_02_200200_create_productos_photos_table', 3);

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
  `descripcion_rapida` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `descripcion` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `categoria` int(11) NOT NULL,
  `portada` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pdf` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ciudad` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `inicio` tinyint(1) NOT NULL DEFAULT 0,
  `activo` tinyint(1) NOT NULL DEFAULT 1,
  `orden` int(11) NOT NULL DEFAULT 666,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `nombre`, `descripcion_rapida`, `descripcion`, `categoria`, `portada`, `pdf`, `ciudad`, `inicio`, `activo`, `orden`, `created_at`, `updated_at`) VALUES
(1, 'boda social', '<div>\r\n<p class=\"_04xlpA direction-ltr align-center para-style-body\"><span class=\"JsGRdQ\">Cumplimos tus sue&ntilde;os y materializamos tus ideas con un equipo profesional y comprometido para crear el Evento que siempre deseaste.</span></p>\r\n<p class=\"_04xlpA direction-ltr align-center para-style-body\"><span class=\"JsGRdQ\">EVENT &amp; WEDDING PLANNER</span></p>\r\n</div>', '<div>Dise&ntilde;amos un evento justo para ti, &iexcl;para que te sientas orgulloso de tu gran d&iacute;a! a trav&eacute;s de un plan estrat&eacute;gico de proyecci&oacute;n y seguimiento por medio de juntas programadas, donde vamos desarrollando a detalle cada una de las &aacute;reas id&oacute;neas que materializar&aacute;n un d&iacute;a inolvidable.</div>\r\n<div>&nbsp;</div>\r\n<div>Factores importantes como n&uacute;mero de invitados, lugar de tu evento, presupuesto contemplado, y visualizaci&oacute;n del panorama indicado, son la base principal para direccionar correctamente la planeaci&oacute;n de tu d&iacute;a so&ntilde;ado, y por supuesto, con la correcta ejecuci&oacute;n y supervisi&oacute;n de cada &aacute;rea por separado y en perfecta coordinaci&oacute;n.</div>\r\n<div>&nbsp;</div>\r\n<div>\"Somos un equipo de especialistas en crear tu mayor Diversi&oacute;n\"</div>\r\n<div>\r\n<p class=\"_04xlpA direction-ltr align-center para-style-body\">&nbsp;</p>\r\n</div>', 6, NULL, 'pNGpsimGfmrKchbv5zhZondLh4DPEa.pdf', NULL, 0, 1, 666, '2022-05-09 08:57:55', '2022-05-14 04:09:58'),
(3, 'empresarial', '<div>Sabemos lo importante que es para ti y para tu empresa el alcanzar los objetivos y metas planeadas, por lo cual te ofrecemos un gran soporte y variedad de posibilidades para la organizaci&oacute;n de eventos originales, personalizados y espectaculares.&nbsp;</div>\r\n<div>&nbsp;</div>\r\n<div><span class=\"JsGRdQ\">&ldquo;Somos un equipo de especialistas en Materializar tus ideas&rdquo;<br /></span></div>', '<div>La organizaci&oacute;n de Eventos bien ejecutados pueden abrir horizontes para una empresa, reforzar su identidad corporativa, establecer nuevas relaciones comerciales, atraer inversores, dar a conocer nuevos productos o servicios, as&iacute; c&oacute;mo fortalecer el compromiso organizacional cuando la empresa cuenta con diferentes sedes entre muchos m&aacute;s, es por esto que es sumamente importante est&eacute;n bien dise&ntilde;ados y realizados para lograr su cometido exitosamente.</div>\r\n<div>\r\n<div>&nbsp;</div>\r\n</div>\r\n<div>\r\n<div>Santa Fe Sua&nbsp; Eventos es tu soporte ideal en esta labor tan detallada, ya que te acompa&ntilde;a desde el inicio del proyecto hasta desarrollar y culminar en un evento ideal justo a tus requerimientos.</div>\r\n<div>&nbsp;</div>\r\n</div>\r\n<div>&nbsp;</div>', 9, NULL, 'HrlDiHG1UPf63gwEcBrIXrYuTgkXah.pdf', NULL, 0, 1, 666, '2022-05-09 08:57:55', '2022-05-14 04:12:06'),
(4, 'dj', '<div>Disfruta de la mejor M&uacute;sica mezclada a tu gusto, y v&iacute;ve un evento a lo grande con diferentes Producciones dise&ntilde;adas justo a tus requerimientos.</div>\r\n<div>&nbsp;</div>\r\n<div>&iexcl;Nos encanta Verte feliz!</div>', '<div>Cuidamos cada producci&oacute;n musical a detalle para que puedas disfrutar del mejor ambiente, desde un b&aacute;sico para un festejo en casa, o bien, una real producci&oacute;n con entarimados especiales, iluminaci&oacute;n computarizada, pistas de baile personalizadas, decoraci&oacute;n org&aacute;nica y floral y por supuesto, un Dj selecto para tu mayor diversi&oacute;n.</div>', 5, NULL, NULL, NULL, 0, 1, 666, '2022-05-09 09:36:44', '2022-05-14 04:13:29'),
(5, 'grupo musical santa fe', '<div>\r\n<p>V&iacute;ve el mayor ambiente con la mejor M&uacute;sica en V&iacute;vo, y disfruta de diferentes producciones y g&eacute;neros musicales creados para eventos especiales y selectos c&oacute;mo el tuyo.</p>\r\n<p class=\"_04xlpA direction-ltr align-center para-style-body\"><span class=\"JsGRdQ\">&iexcl;Porque la mejor M&uacute;sica </span><span class=\"JsGRdQ\">garantiza el </span><span class=\"JsGRdQ\">&eacute;xito de tu Evento!</span></p>\r\n</div>', '<div>L&oacute;s g&eacute;neros m&uacute;sicales mas selectos y divertidos interpretados por un equipo de m&uacute;sicos y vocalistas 100% profesionales, que te har&aacute;n deleitar y disfrutar la m&uacute;sica para cualquier tipor de ocasi&oacute;n,&nbsp;</div>\r\n<div>&nbsp;</div>\r\n<div>Nuestras producciones musicales desde un Tr&iacute;o y Cuarteto de m&uacute;sica Vers&aacute;til, Jazz y Bossanova para eventos menores a 100 invitados, el Grupo con 7 integrantes hasta para 250 invitados, y la Orquesta Sonora Musical Santa Fe con 13 integrantes, te har&aacute;n disfrutar al m&aacute;ximo y vivir un evento inolvidable.&nbsp;</div>\r\n<div>&nbsp;</div>\r\n<div>&nbsp;</div>', 9, NULL, NULL, NULL, 0, 1, 666, '2022-05-09 15:46:36', '2022-05-14 04:15:06'),
(6, 'banquete', '<div>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essent</div>', '<div>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essent&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essent&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essent&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essent&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essent&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essent</div>', 11, NULL, 'mkljdHZnCMWVMob9HTP9vhqmATVHCu.pdf', NULL, 0, 1, 666, '2022-05-09 16:28:08', '2022-05-09 16:57:47'),
(7, 'decoracion', '<p class=\"_04xlpA direction-ltr align-center para-style-body\"><span class=\"JsGRdQ\">Dise&ntilde;amos espacios armonizados a trav&eacute;s de la colocaci&oacute;n y combinaci&oacute;n de elementos ornamentales y funcionales, para embellecerlos, y cumplir un objetivo designado.</span></p>\r\n<p class=\"_04xlpA direction-ltr align-center para-style-body\">&nbsp;</p>', '<div>\r\n<p>Determinar la decoraci&oacute;n para un evento empresarial es una labor que requiere visualizaci&oacute;n, estrat&eacute;gia, sutileza y buen gusto para que todo coordine correctamente. El objetivo es que los asistentes disfruten cada momento, y que desde el primer contacto con el recinto, ellos puedan vivir una experiencia cuidada y sorprendente.</p>\r\n<p>La decoraci&oacute;n&nbsp; correcta transmitir&aacute; el mensaje adecuado.&nbsp;&nbsp;</p>\r\n<p>&nbsp;</p>\r\n</div>', 12, NULL, NULL, NULL, 1, 1, 666, '2022-05-09 16:35:37', '2022-05-14 04:15:05'),
(9, 'bodas', '<div>jajajj</div>', '<div>dfdfdfdfdfdfdfd</div>', 9, NULL, NULL, NULL, 0, 1, 666, '2022-05-09 17:05:43', '2022-05-12 19:11:04'),
(10, 'mariachi', '<div>Test 1</div>', '<div>Test 1</div>', 17, NULL, NULL, NULL, 0, 1, 666, '2022-05-13 22:10:29', '2022-05-14 04:06:19');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos_photos`
--

CREATE TABLE `productos_photos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `producto` bigint(20) UNSIGNED NOT NULL,
  `titulo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `orden` int(11) NOT NULL DEFAULT 666,
  `galeria` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `productos_photos`
--

INSERT INTO `productos_photos` (`id`, `producto`, `titulo`, `image`, `orden`, `galeria`) VALUES
(10, 6, NULL, '0XLe2HpGkVj2HHkhb7fW6IuLkP63pH.jpeg', 666, 1),
(11, 6, NULL, 'zJPT5UH1alXTxqjcTQ3Y69K76oMEGf.jpeg', 666, 2),
(12, 1, NULL, '4Hz1QjohsFJFlW2OfZBG1tyn4PQiYw.png', 666, 1),
(13, 1, NULL, 'uP7UfCNmhG6WSwx4ln6DQRlkM3u1Cq.png', 666, 2),
(20, 1, NULL, '5h7mkFVpDlwXkJLGAuzJDBDj6I6gOM.png', 666, 2),
(21, 1, NULL, 'a0FDRgEBX43jdqYxVCWXk6tUZ5iJPA.png', 666, 2),
(30, 4, NULL, 'P5yMdLdPJgfT9kLwR5LjUbHP1OYICp.png', 666, 1),
(31, 4, NULL, 'UyISnISzZWwr0nbpXJzFvYFjsgbui4.png', 0, 2),
(32, 4, NULL, '2qyKx6DnfvkSNIEIQq02bYkjExHTuM.png', 2, 2),
(33, 4, NULL, 'kPg8xCrSLnTXR9W2CXZ2CXxan7o86j.png', 3, 2),
(34, 4, NULL, 'FbgBtoFECrQq29mlxKbVeubJZFDR71.png', 4, 2),
(35, 4, NULL, 'pfbXwNJ90M63H8ak5heU2xUcq7x3Wz.png', 5, 2),
(36, 3, NULL, '2Ts1hfw1oW1CnGBs1oWIpwkoj6TEED.png', 666, 1),
(37, 3, NULL, 'KtGua91TRkHWvfkOwMuOQzhswFJ9zT.png', 666, 2),
(38, 3, NULL, 'FX0gzDNz1EOU376sgsmaQnl4nYhZ99.png', 666, 2),
(39, 3, NULL, 'qrz2mp2I5Ad5MKpBAfRU8TW8kKr8ib.png', 666, 2),
(40, 3, NULL, 'L1SHre87iAH0v6kOqKGv0BES7P51Vy.png', 666, 2),
(41, 3, NULL, 'KaDSUgYQMAebj9pwGuUM6mtd6Bcgu3.png', 666, 2),
(43, 5, NULL, 'joDoByLJeeeFmtmxz6rkrssNwhPg76.png', 0, 2),
(44, 5, NULL, 'ogQAIEnEWwf22TtqLX2uFRI0FMa5Wg.png', 5, 2),
(45, 5, NULL, 'Ku8ntd5YpW4MMp6vLilYTvXxIbzmNa.png', 2, 2),
(47, 3, NULL, '7h5DuNOfYgxt0fmvvmIi6Sfav79u9J.png', 666, 2),
(48, 10, NULL, 'MUheYV2UlS3wBjrkM7qMUjtBfX3Lf5.png', 666, 2),
(49, 10, NULL, 'UTRmCCEAnYsDIjqja36oYOSvbODW6s.jpg', 666, 2),
(50, 10, NULL, '6YWzZWsk5NO7OLUclGAkWOEwA01K2I.jpeg', 666, 1),
(51, 10, NULL, 'kKr1hBoLOf6L7BftplVVpy9GW2Tr2f.jpeg', 666, 1),
(52, 1, NULL, 'RHkFfaRGLVIsgYdTfdXWoWZi9KoX9T.png', 666, 2),
(53, 5, NULL, '8Fntf5qK2Mvj9FZ5o4xR98IDGyFp0A.png', 1, 2),
(56, 5, NULL, '86qZg4VCQyXXrJ0m0evfqLEhw4eBXC.png', 666, 1),
(57, 5, NULL, 'KyMMC1ibt03O9iFD2PrvFxqskIXbrP.png', 4, 2),
(58, 5, NULL, 'li8QshJOCoOk92La7emJdW2rCtrGGx.png', 3, 2),
(59, 4, NULL, 'PSl8Dnhlygt8QLoBnFOBDS0g0mSjdw.png', 1, 2),
(60, 7, NULL, 'SlnEMwC1ncnuo9FFdnJj1wL9rTGipd.png', 666, 1),
(61, 7, NULL, 'vDMZYNj6Q2r9j6se5g6DrlxdIUmLXC.png', 0, 2),
(62, 7, NULL, 'Shvk23iiYG6VdH3gusvOsNlqIi2YFW.png', 1, 2),
(63, 7, NULL, 'y2epQwofkti1d6skZ2heudhArmmzzw.png', 3, 2),
(64, 7, NULL, 'qQj9LQxPdSlddPwFyDhCHNaYbf4uMN.png', 4, 2),
(65, 7, NULL, 'vcukRLmZ9IfifT5lKpgm8GjSSeSlI7.png', 5, 2),
(66, 7, NULL, 'NvLEgiyjEiCtB1XpPJuLTTV3Uzw3Tr.png', 2, 2);

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
(2, 'contacto', NULL, 'contact'),
(3, 'formulario', NULL, 'form');

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
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `productos_photos`
--
ALTER TABLE `productos_photos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `productos_photos_producto_foreign` (`producto`);

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `configuracions`
--
ALTER TABLE `configuracions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `elementos`
--
ALTER TABLE `elementos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `politicas`
--
ALTER TABLE `politicas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `productos_photos`
--
ALTER TABLE `productos_photos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT de la tabla `seccions`
--
ALTER TABLE `seccions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
