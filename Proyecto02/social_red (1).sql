-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-03-2018 a las 04:05:10
-- Versión del servidor: 5.7.14
-- Versión de PHP: 7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `social_red`
--

DELIMITER $$
--
-- Procedimientos
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `spG1` (IN `idU` INT)  NO SQL
UPDATE `registroj` SET `ng1`=`ng1`+1 WHERE  `idUsuario`=`idU`$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `spG2` (IN `idU` INT)  NO SQL
UPDATE `registroj` SET `ng2`=`ng2`+1 WHERE  `idUsuario`=`idU`$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `spG3` (IN `idU` INT)  NO SQL
UPDATE `registroj` SET `ng3`=`ng3`+1 WHERE  `idUsuario`=`idU`$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `spI1` (IN `idU` INT)  NO SQL
UPDATE `registroj` SET `ni1`=`ni1`+1,`uf1`=NOW() WHERE  `idUsuario`=`idU`$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `spI2` (IN `idU` INT)  NO SQL
UPDATE `registroj` SET `ni2`=`ni2`+1,`uf2`=NOW() WHERE  `idUsuario`=`idU`$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `spI3` (IN `idU` INT)  NO SQL
UPDATE `registroj` SET `ni3`=`ni3`+1,`uf3`=NOW() WHERE  `idUsuario`=`idU`$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `spInsertarSJ1` (IN `_idu` INT)  NO SQL
BEGIN
	DECLARE _fec date ;
	set _fec =(SELECT CURDATE());
    INSERT INTO `segj1`(`idU`, `fecha`) VALUES (_idu,_fec);
	
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `spInsertarSJ1C` (IN `_idu` INT, IN `_c` VARCHAR(255))  NO SQL
BEGIN
	DECLARE _fec date ;
	set _fec =(SELECT CURDATE());
    INSERT INTO `segj1`(`idU`, `fecha`,`comentario`) VALUES (_idu,_fec,_c);
	
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `spInsertarSJ2` (IN `_idu` INT)  NO SQL
BEGIN
	DECLARE _fec date ;
	set _fec =(SELECT CURDATE());
    INSERT INTO `segj2`(`idU`, `fecha`) VALUES (_idu,_fec);
	
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `spInsertarSJ3` (IN `_idu` INT)  NO SQL
BEGIN
	DECLARE _fec date ;
	set _fec =(SELECT CURDATE());
    INSERT INTO `segj3`(`idU`, `fecha`) VALUES (_idu,_fec);
	
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `spInsertarU` (IN `_username` VARCHAR(20), IN `_nombre` VARCHAR(50), IN `_apellidos` VARCHAR(50), IN `_password` VARCHAR(30), IN `_nacimient` DATE, IN `_sexo` VARCHAR(10), IN `_correo` VARCHAR(50))  NO SQL
BEGIN
    DECLARE _contador INT DEFAULT 0;
    insert into `usuario`(`username`, `nombre`, `apellidos`, `password`, `fecha_nacimiento`, `sexo`, `correo`)
         values(`_username`,`_nombre`,`_apellidos`,`_password`,`_nacimient`,`_sexo`,`_correo`);
         
  set _contador =(select MAX(id) from usuario); 
INSERT INTO `registroj`(`idUsuario`, `ng1`, `ni1`,  `ng2`, `ni2`,  `ng3`, `ni3`) values
  (_contador,0,0,0,0,0,0);
  
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registroj`
--

CREATE TABLE `registroj` (
  `idUsuario` int(11) NOT NULL,
  `ng1` int(11) DEFAULT NULL,
  `ni1` int(11) DEFAULT NULL,
  `uf1` date DEFAULT NULL,
  `ng2` int(11) DEFAULT NULL,
  `ni2` int(11) DEFAULT NULL,
  `uf2` date DEFAULT NULL,
  `ng3` int(11) DEFAULT NULL,
  `ni3` int(11) DEFAULT NULL,
  `uf3` date DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `registroj`
--

INSERT INTO `registroj` (`idUsuario`, `ng1`, `ni1`, `uf1`, `ng2`, `ni2`, `uf2`, `ng3`, `ni3`, `uf3`) VALUES
(9, 1, 2, '2018-03-27', 0, 0, NULL, 2, 2, '2018-03-27'),
(1, 0, 0, NULL, 0, 0, NULL, 0, 0, NULL),
(2, 0, 0, NULL, 0, 0, NULL, 0, 0, NULL),
(3, 0, 0, NULL, 0, 0, NULL, 0, 0, NULL),
(4, 0, 0, NULL, 0, 0, NULL, 0, 0, NULL),
(5, 0, 0, NULL, 0, 0, NULL, 0, 0, NULL),
(6, 0, 0, NULL, 0, 0, NULL, 0, 0, NULL),
(7, 0, 0, NULL, 0, 0, NULL, 0, 0, NULL),
(8, 0, 0, NULL, 0, 0, NULL, 0, 0, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `segj1`
--

CREATE TABLE `segj1` (
  `id` int(11) NOT NULL,
  `idU` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `comentario` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `segj2`
--

CREATE TABLE `segj2` (
  `id` int(11) NOT NULL,
  `idU` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `comentario` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `segj3`
--

CREATE TABLE `segj3` (
  `id` int(11) NOT NULL,
  `idU` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `comentario` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellidos` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `sexo` varchar(10) NOT NULL,
  `correo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `username`, `nombre`, `apellidos`, `password`, `fecha_nacimiento`, `sexo`, `correo`) VALUES
(1, 'AARONFOR', 'aarón leonardo', 'sánchez martínez', 'secreto', '1997-07-01', 'hombre', '1530509@upv.edu.mx'),
(2, 'car', 'mario', 'cris', 'car', '2018-03-15', 'hombre', '2134@gdfgdf'),
(3, 'margarita01', 'isamar', 'torres moreno', 'gatitos', '1990-01-12', 'mujer', 'princesita_1990@upv.edu.mx');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `registroj`
--
ALTER TABLE `registroj`
  ADD PRIMARY KEY (`idUsuario`);

--
-- Indices de la tabla `segj1`
--
ALTER TABLE `segj1`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `unicoU` (`idU`);

--
-- Indices de la tabla `segj2`
--
ALTER TABLE `segj2`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `unicoU` (`idU`);

--
-- Indices de la tabla `segj3`
--
ALTER TABLE `segj3`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `unicoU` (`idU`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`username`),
  ADD UNIQUE KEY `idi` (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
