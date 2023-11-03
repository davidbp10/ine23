-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-11-2023 a las 21:58:51
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ine23`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `company_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(256) NOT NULL,
  `description` varchar(1024) NOT NULL,
  `imgUrl` varchar(512) NOT NULL,
  `price` double(8,2) NOT NULL,
  `discountPercent` double(8,2) DEFAULT NULL,
  `discountStart_at` date DEFAULT NULL,
  `discountEnd_at` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `products`
--

INSERT INTO `products` (`id`, `company_id`, `name`, `description`, `imgUrl`, `price`, `discountPercent`, `discountStart_at`, `discountEnd_at`, `created_at`, `updated_at`) VALUES
(1, 1, 'Mancuernas', 'Mancuernas para usar en casa. Sus pesos son de 5kg, 7kg y 10kg cada par.', 'img/mancuernas.jpg', 49.99, 0.30, '2023-10-26', '2023-10-27', '2023-10-26 12:18:57', '2023-10-26 12:18:57'),
(2, 3, 'Banco de press', 'Banco para realizar ejercicios de empuje pectoral en casa + barra con par de discos de 5kg y 10kg', 'img/press_de_banca.jpg', 89.99, 0.23, '2023-10-28', '2023-10-30', '2023-10-26 12:42:03', '2023-10-26 12:42:03'),
(3, 2, 'Barra de dominadas', 'Barra de dominadas para realizar ejercicios de espalda en casa', 'img/dominadas.jpg', 59.99, 0.17, '2023-11-02', '2023-11-04', '2023-10-26 12:47:05', '2023-10-26 12:47:05'),
(4, 2, 'Guantes de boxeo', 'Guantes de boxeo de buena calidad', 'img/guantes.jpg', 59.99, 0.20, '2023-10-26', '2023-10-27', '2023-10-26 12:50:56', '2023-10-26 12:50:56'),
(5, 1, 'Straps', 'Straps para mejorar agarre en ejercicios', 'img/straps.jpg', 13.99, NULL, NULL, NULL, '2023-11-02 14:53:05', '2023-11-02 14:53:05');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `products_name_unique` (`name`),
  ADD KEY `products_company_id_foreign` (`company_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_company_id_foreign` FOREIGN KEY (`company_id`) REFERENCES `companies` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
