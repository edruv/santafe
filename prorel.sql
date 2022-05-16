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

-- Volcando estructura para tabla rodarte.producto_relacions
CREATE TABLE IF NOT EXISTS `producto_relacions` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `producto` bigint(20) unsigned NOT NULL,
  `otroProducto` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `producto_relacions_producto_foreign` (`producto`),
  KEY `producto_relacions_otroproducto_foreign` (`otroProducto`),
  CONSTRAINT `producto_relacions_otroproducto_foreign` FOREIGN KEY (`otroProducto`) REFERENCES `productos` (`id`) ON DELETE CASCADE,
  CONSTRAINT `producto_relacions_producto_foreign` FOREIGN KEY (`producto`) REFERENCES `productos` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla rodarte.producto_relacions: ~3 rows (aproximadamente)
/*!40000 ALTER TABLE `producto_relacions` DISABLE KEYS */;
INSERT INTO `producto_relacions` (`id`, `producto`, `otroProducto`) VALUES
	(2, 4, 3),
	(3, 4, 4),
	(10, 2, 4);
/*!40000 ALTER TABLE `producto_relacions` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
