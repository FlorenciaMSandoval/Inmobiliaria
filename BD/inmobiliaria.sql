-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-02-2022 a las 13:17:10
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `inmobiliaria`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contacto`
--

CREATE TABLE `contacto` (
  `nombre` varchar(50) NOT NULL,
  `apellidos` varchar(50) NOT NULL,
  `telefono` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `asunto` varchar(20) NOT NULL,
  `mensaje` longtext NOT NULL,
  `id` int(11) NOT NULL,
  `destino` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `contacto`
--

INSERT INTO `contacto` (`nombre`, `apellidos`, `telefono`, `email`, `asunto`, `mensaje`, `id`, `destino`) VALUES
('a', 'a', '68464', 'asdasd@asdad.com', 'alquier', 'assdsdsd', 1, ''),
('Florencia', 'Sandoval', '622206747', 'florencia@gmail.com', 'venta', 'Quiero vender mi alma a php y asi obtener su sabiduría. ', 2, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `favoritos`
--

CREATE TABLE `favoritos` (
  `id_usuario` varchar(100) NOT NULL,
  `id_viviendas` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `favoritos`
--

INSERT INTO `favoritos` (`id_usuario`, `id_viviendas`) VALUES
('admin@admin.com', 4),
('admin@admin.com', 5),
('admin@admin.com', 6),
('admin@admin.com', 8),
('admin@admin.com', 10),
('admin@admin.com', 15),
('admin@admin.com', 20),
('flor@flor.com', 2),
('flor@flor.com', 4),
('flor@flor.com', 8),
('flor@flor.com', 9),
('flor@flor.com', 10),
('flor@flor.com', 11),
('flor@flor.com', 22);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `propietarios`
--

CREATE TABLE `propietarios` (
  `id` int(100) NOT NULL,
  `id_viviendas` int(100) NOT NULL,
  `id_usuarios` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `propietarios`
--

INSERT INTO `propietarios` (`id`, `id_viviendas`, `id_usuarios`) VALUES
(1, 2, '789@admin.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `nombre` varchar(50) NOT NULL,
  `apellidos` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `telefono` varchar(20) NOT NULL,
  `tipo` tinyint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`nombre`, `apellidos`, `email`, `password`, `telefono`, `tipo`) VALUES
('a', 'aaa', '25252@admin.com', '21232f297a57a5a743894a0e4a801fc3', '470334844', 1),
('aaa', 'aaa', '44444@admin.com', '21232f297a57a5a743894a0e4a801fc3', '470334844', 1),
('aaa', 'llllll', '789@admin.com', '21232f297a57a5a743894a0e4a801fc3', '470334844', 1),
('bb', 'aaa', '888888@admin.com', '21232f297a57a5a743894a0e4a801fc3', '470334841', 1),
('a', 'a', 'a@a.com', '21232f297a57a5a743894a0e4a801fc3', '111111111', 1),
('a', '2323', 'a@admin.com', 'b59c67bf196a4758191e42f76670ceba', '43434', 1),
('bb', 'trinidad', 'ad@admin.com', 'cf8427fe6e6be470cb44a2bf00022c4d', '123412311', 1),
('admin', 'admin', 'admin@admin.com', '21232f297a57a5a743894a0e4a801fc3', '0000', 0),
('aaaaaaaaaaaaaaaaa', 'aaaaaaaaaaaaaaaaaaaa', 'daw@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '470334845', 1),
('efefwe', 'weffew', 'efwfew@fewfew.com', 'b7725157e4e5d6da5babe8870c4c04e6', '324342233', 1),
('aaa', 'aaaa', 'fffffn@admin.com', '21232f297a57a5a743894a0e4a801fc3', '111111111', 1),
('flooooooooor', 'aaaaaaaaa', 'floooooooor@gmail.com', '21232f297a57a5a743894a0e4a801fc3', '123123123', 1),
('flor', 'san', 'flor@flor.com', '81dc9bdb52d04dc20036dbd8313ed055', '1234', 1),
('flor', 'sandoval', 'florencia@admin.com', '81dc9bdb52d04dc20036dbd8313ed055', '47033484', 1),
('fsdfsdfsdf', 'Sandoval', 'florencia@flor.com', '21232f297a57a5a743894a0e4a801fc3', '470334845', 1),
('Maka', 'Sandoval', 'flormacarenasandoval@admin.com', '21232f297a57a5a743894a0e4a801fc3', '622206747', 1),
('dqwodwooqwd', 'dqowodq', 'iwdqjiowdj@jqwidj.com', '21232f297a57a5a743894a0e4a801fc3', '132131923', 1),
('macarena', 'sandoval', 'macarena@admin.com', '81dc9bdb52d04dc20036dbd8313ed055', '47034484', 1),
('wewqe', 'qwewqe', 'wqew@ewqe.com', '21232f297a57a5a743894a0e4a801fc3', '123124123', 1),
('yopes', 'yodenuevo', 'yopes@yo.com', 'cf8427fe6e6be470cb44a2bf00022c4d', '351235785', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `viviendas`
--

CREATE TABLE `viviendas` (
  `id` int(100) NOT NULL,
  `tipo` int(20) NOT NULL,
  `zona` varchar(50) NOT NULL,
  `direccion` varchar(50) NOT NULL,
  `nhabitacion` int(20) NOT NULL,
  `precio` int(100) NOT NULL,
  `descripcion` longtext NOT NULL,
  `fecha de anuncio` date NOT NULL,
  `metros` int(50) NOT NULL,
  `banio` int(20) NOT NULL,
  `opcion` int(10) NOT NULL,
  `fotos` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `viviendas`
--

INSERT INTO `viviendas` (`id`, `tipo`, `zona`, `direccion`, `nhabitacion`, `precio`, `descripcion`, `fecha de anuncio`, `metros`, `banio`, `opcion`, `fotos`) VALUES
(1, 0, 'Moratalaz - Artilleros', 'Calle La Cañada 1', 3, 130000, 'Vende vivienda de 65 m2 en primera planta con ascensor. Distribuido en salón, cocina equipada, 3 dormitorios y baño. Calefacción individual de gas natural. Muy bien comunicada próximo al Metro (Artilleros- Linea 9) con transporte público, cerca de colegios públicos y concertados, institutos, guarderías, mercados y comercios. Con fácil acceso a vías de comunicación A-3, M-30 y M-40.\r\n', '2022-02-08', 65, 1, 0, 'foto_1'),
(2, 1, 'Hortalezas', 'lo que sea', 3, 100, 'asdasdasd', '2022-02-05', 65, 1, 1, 'foto_2'),
(3, 0, 'Torrejón de Ardoz', 'Calle HierbaBuena 3', 4, 150000, 'blablabla....', '2022-02-05', 110, 2, 0, 'foto_3'),
(4, 1, 'Colmenar Viejo', 'San Cristóbal 3', 2, 720, 'no se mucho texto...', '2022-02-07', 110, 2, 1, 'foto_4'),
(5, 0, 'Morata de Tajuña', 'Av de la Constitucion 50', 2, 67000, 'Casa de dos plantas de 41 metros cuadrados por planta, 3 dormitorios, cuarto de estar, trastero, cocina equipada con electrodomésticos, 1 baño, termo eléctrico, estufa de leña, aire acondicionado.', '2022-02-09', 41, 1, 1, 'foto_5'),
(6, 0, 'Morata de Tajuña', 'Calle Molino 50', 3, 167000, 'Piso en el centro del pueblo tres dormitorios. dos baños, salón, gran terraza, calefacción eléctrica, aire acondicionado en dormitorio principal y salón. Muebles incluidos, doble ventana, toldos. Posibilidad de garaje. Ascensor. Cerca de supermercados, colegios.', '2022-02-09', 95, 2, 1, 'foto_6'),
(7, 0, 'Arganda de Rey El Mirador - Grillero', 'Calle canoa', 3, 70000, 'Piso 3 dormitorios en Morata de Tajuña zona de colegios y polideportivo. 3º planta con escaleras muy cómodas, no ascensor. Plaza de garaje temporal. Se puede meter el coche 2 años seguidos y uno no. El piso posee gran salón con salida a terraza donde se puede poner mesa y sillas. Vistas a la Piscina. No tenemos edificios delante de la vivienda por lo que la temperatura y las vistas son estupendas. 3 dormitorios muy amplios y armarios empotrados. Dos baños completos, uno con ducha y otro con bañe', '2022-02-09', 97, 2, 1, 'foto_7'),
(8, 1, 'Móstoles', 'Calle de Simón Hernández', 3, 850, 'Vivienda con garaje incluido situada en Morata de Tajuña, municipio de la provincia de Madrid situado en la Meseta Sur, en la comarca de La Alcarria. Se trata de una vivienda de 85 m² distribuida en salón-comedor, cocina independiente y amueblada, 3 dormitorios y 2 baños. La vivienda se ubica al norte de la localidad, perfectamente comunicada con la zona más comercial de esta a pocos minutos caminando. Respecto a las comunicaciones con otros municipios, encontramos muy próxima la M-313 que comun', '2022-02-09', 85, 2, 1, 'foto_8'),
(9, 1, 'Ibiza - Madrid', ' Calle Alcalde Sainz de Baranda', 2, 950, 'Piso en planta baja con amplias estancias, bomba de calor y frío en salón y en dos dormitorios, radiadores eléctricos, 1 baño con bañera y mampara, 1 aseo, plaza de garaje grande para coche y moto. Zona muy tranquila del pueblo.', '2022-02-09', 80, 1, 1, 'foto_10'),
(10, 1, 'Justicia - Chueca', 'Calle de Santa Teresa 2', 1, 860, '', '2022-02-09', 54, 1, 1, 'foto_9'),
(11, 1, 'Tres Cantos', 'Av. de la Vega s/n', 2, 1500, 'Piso de dos dormitorios con terraza de 14 metros privada. Planta baja. Edificio con ascensor. Amplio salón de 24 metros , amplio dormitorio principal. Armarios empotrados en dormitorios. Baño completo con bañera y aseo. Muy luminoso. Piscina comunitaria. Garaje y trastero. Zona céntrica, cerca colegios , parada de autobús, comercios. Cocina amueblada. Termo eléctrico. Calefacción eléctrica. Diseño muy moderno.', '2022-02-09', 91, 2, 1, 'foto_12'),
(12, 0, 'Morata de Tajuña', 'Calle Colmenares', 3, 110000, 'Piso en segunda planta de 80m2 en C. Colmenares, Morata de Tajuña (Madrid). La vivienda se distribuye en pasillo central, 3 dormitorios (dobles), salón comedor, cocina y cuarto de baño completo. El inmueble cuenta con aire acondicionado, calefacción y bonitas vistas. Además, se ubica cerca de una parada de autobús (330 Rivas-Arganda-Morata de Tajuña) y a 3 minutos de las líneas 336 (Morata de Tajuña-Madrid) y 337 (Valdelaguna-Colmenar-Chinchón-Morata de Tajuña-Madrid). La vivienda se encuentra próxima a restaurante, farmacia, panadería y a 3 minutos del bosque, un entorno verde predilecto en el municipio de Morata de Tajuña.', '2022-02-09', 80, 1, 1, 'foto_13'),
(13, 0, 'Colmenar Viejo', 'Avenida de la Constitución 34', 10, 1125000, 'Casa grande de 360 metros cuadrados + fábrica de aceites y bodega de vinos. Para reformar. En pleno centro de Morata de Tajuña. Ideal para construcción de pisos o para negocio.', '2022-02-09', 3074, 5, 0, 'foto_14'),
(14, 0, 'Torrejón de Ardoz', 'El Carril 16', 5, 649000, 'Chalet de una planta con un superficie de 140 metros. En esta planta se encuentran, 4 dormitorios amplios, uno de ellos con baño propio hecho en hormigón prensado con ducha. Cocina totalmente equipada con muebles de calidad y encimera de granito. Salón con dos ambientes. Suelo de parquet alta calidad. Planta primera: buhardilla forrada totalmente en madera, con dormitorio y aseo. planta sótano: capacidad para 4 vehículos. Cocina, salón-bodega, sauna y baño completo. Salimos al JARDIN, donde nos encontramos con una piscina de obra, barbacoa, zona de césped y de juegos infantiles. Existe una habitación trastero en esta parte. A la derecha del jardín hay una nave taller de unos 50 metros cuadrados donde también se pueden meter vehículos. La entrada del chalet es amplia con parcela delantera. Vivienda ideal para salir de Madrid y disfrutar de la calidad de todas las comodidades que se puede ', '2022-02-09', 1200, 4, 0, 'foto_15'),
(15, 0, 'Alcobendas', 'Calle Molino 50', 3, 238000, 'Vivienda unifamiliar construida en una sola planta con un total de 163m² construidos en parcela de 283m². El inmueble cuenta con patio delantero de 39m² con amplio porche de entrada acristalado y patio trasero de 52m² con horno de leña, barbacoa y trastero. La vivienda dispone de estancias muy amplias y se distribuye en: cocina amueblada con electrodomésticos y salida a patio; 2 baños completos, 3 dormitorios triples y gran salón comedor de 35m² con chimenea de leña. Así mismo, cuenta con calefacción de gasoil, rejas de seguridad en todas sus ventanas y garaje. Se ubica en zona tranquila de viviendas unifamiliares.', '2022-02-15', 163, 2, 0, 'foto_16'),
(18, 0, 'Tres Cantos', 'Calle La Cañada 1', 8, 278000, 'Casa señorial de Morata de Tajuña, 432 metros de superficie de parcela y 404 metros construidos en dos plantas. Patio delantero de 40 metros y parcela trasera de 134 metros con puerta de garaje de entrada. Gran terraza en la cubierta. hace esquina entre calle Cruz de Orozco y calle Prim. 17 metros de fachada en calle Cruz de Orozco, y 25 metros de fachada en calle Prim. Decoración modo palacete antiguo. Zona de servicio. Existe una casa independiente de la casa grande.', '2022-02-14', 432, 3, 0, 'foto_19'),
(19, 1, 'Recoletos', 'Calle Hermosilla', 3, 1873, 'Se levanta una vivienda de 172 metros cuadrados en planta baja y primera. la parcela tiene 109 metros. posibilidad de hacer patio más grande del que hay actualmente. zona centro de Morata de Tajuña. para reformar.', '2022-02-14', 172, 1, 1, 'foto_11'),
(20, 1, 'Alcobendas', 'Av de la Constitucion 50', 5, 1200, 'n una de las mejoras zonas residenciales de Morata de Tajuña, se ubica este precioso chalet independiente en parcela de 310m² de superficie y con 244m² construidos en varias plantas. La vivienda está rodea por tres de sus lados por patio privado de 190m², donde se ubica la piscina, zona de reuniones y barbacoas, porche y rampa de acceso para silla de ruedas. En su interior, encontramos una amplia cocina amueblada, gran salón comedor con luces por todos sus lados, baño completo, dormitorio doble en planta baja y salida al patio; así como otros cuatro dormitorios dobles y cuarto de baño con jacuzzi en la planta superior. Todos los materiales son de primera calidad y su estado de conservación es excelente. Asi mismo, la vivienda cuenta con garaje para 2/3 coches en la planta inferior, zona trastero y sala de caldera/depuradora. Gran oportunidad para los amantes de la tranquilidad y el disfr', '2022-02-13', 244, 2, 1, 'foto_17'),
(21, 1, 'Vallecas', 'Calle de los sauces', 4, 750, 'Consta de 2 plantas...la planta baja incluye un salon con el comedor independiente ,una enorme cocina y un patio con aseo\nLa planta superior incluye 4 dormitorios con armarios empotrados y aire acondicionado,un baño,dos balcones con trastero,,,el suelo de tarima...calefaccion y agua sanitaria funcionando con caldera de gasoil pero hay posibilidad de contratar gas natural...La casa esta para entrar a vivir, mejor verla.', '2022-02-13', 160, 2, 1, 'foto_18'),
(22, 1, 'Tres Cantos', 'Calle La Cañada 1', 1, 600, 'Piso completamente reformado y amueblado de 60m2 sita en primera planta en la Calle La Cañada 1. La vivienda se distribuye en amplio y luminoso salón-comedor, cocina semi amueblada, baño completo, 1 dormitorios.\nNo necesita ninguna reforma al encontrarse en condiciones de habitabilidad inmediata. Además, se ubica en el centro del pueblo, cerca de una parada de autobús. La vivienda se encuentra próxima a restaurante, farmacia, panadería y a minutos del bosque, un entorno verde predilecto en el municipio de Tres Cantos.', '2022-02-11', 60, 1, 1, 'foto_20');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `contacto`
--
ALTER TABLE `contacto`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `favoritos`
--
ALTER TABLE `favoritos`
  ADD PRIMARY KEY (`id_usuario`,`id_viviendas`),
  ADD KEY `id_viviendas` (`id_viviendas`);

--
-- Indices de la tabla `propietarios`
--
ALTER TABLE `propietarios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_usuarios` (`id_usuarios`),
  ADD KEY `id_viviendas` (`id_viviendas`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`email`);

--
-- Indices de la tabla `viviendas`
--
ALTER TABLE `viviendas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `contacto`
--
ALTER TABLE `contacto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `propietarios`
--
ALTER TABLE `propietarios`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `viviendas`
--
ALTER TABLE `viviendas`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `favoritos`
--
ALTER TABLE `favoritos`
  ADD CONSTRAINT `favoritos_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`email`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `favoritos_ibfk_2` FOREIGN KEY (`id_viviendas`) REFERENCES `viviendas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `propietarios`
--
ALTER TABLE `propietarios`
  ADD CONSTRAINT `propietarios_ibfk_1` FOREIGN KEY (`id_usuarios`) REFERENCES `usuarios` (`email`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `propietarios_ibfk_2` FOREIGN KEY (`id_viviendas`) REFERENCES `viviendas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
