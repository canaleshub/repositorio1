--
-- Base de datos: `consumoelectrico`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos`
--

CREATE TABLE `datos` (
  `dni` int(11) DEFAULT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `apellido` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- datos para la tabla `datos`
--

INSERT INTO `datos` (`dni`, `nombre`, `apellido`) VALUES
(342322, 'Luis', 'Perez'),
(558866, 'Pedro', 'Lopez');
