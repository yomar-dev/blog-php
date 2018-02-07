-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-02-2018 a las 03:48:04
-- Versión del servidor: 10.1.28-MariaDB
-- Versión de PHP: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `cursophp`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `blog_posts`
--

CREATE TABLE `blog_posts` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `content` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `blog_posts`
--

INSERT INTO `blog_posts` (`id`, `title`, `content`) VALUES
(1, 'Miltlike', 'Moio snuggle trichomatose hemadynamics asphyxiant francium Babylonite myogenetic catch grandmotherism pericystic alfa noctambulant pyramider length butylation bombacaceous Turcoman semperidentical cassiduloid lectureproof Gordonia acephaline megachiropteran award resize doweress unkist unlisty geotectonic asymbolia orchidorrhaphy mulattress rabbinism interlingual puritanically gliriform monophyleticism nasutiform cystamine polycitral stalwartism gambogic upseek underconsciousness Stenotaphrum Trochus seminaristic.'),
(2, 'Bradburya', 'Percussioner orchiorrhaphy messin sherbetlee yinst paramagnetism tadpolehood unfreezable nephology unlivableness holer historicogeographical ladder draffman incitress oecumenian bantayan hygrometrically morrowtide Mazda scallion totipotential unportrayed retinene toponymy basifier Lupercalian bracingness suspensible tetragynous dermatographia preadamitic oversale unillumination puja globefish splenophrenic lecithinase unbuttonment unfaceable Congreve staphylodermatitis supermagnificently coumalin chous praise antimycotic aplasia.'),
(3, 'Metropolis', 'Vira dartman animadversion dermasurgery Saiva aerolith Kolis grooveless tideland Theligonum place retinoscopist illustrational hyperopia amchoor spearcast ripsaw antitypy sierran Rubicola fuji attachable sternofacialis enricher elb lastage preclean innascible oculozygomatic detailedness pachydermal transcurrent reflectional precordium fallectomy spadework barroom valvate pseudoimpartial slipcoat allegator lapidity rabbit surfactant dace unemulsified syzygium shamed.'),
(4, 'Lepidophyllous', 'Brachinus hydrotomy Gobiiformes parodist zonated contemplation pinonic crystallogenetic restorationer revivingly openwork microblephary dishpan unbesought bekah latro unstructural lipothymial few obolary lalling gyral misprovidence aurophore zoopantheon caulicule retrievement shipment Hockday isidoid patrondom romeite Barosma hydroclimate horizontically inverter Illuministic pocketable sixty denticulation cantative smeech forficated elementariness spinigrade washstand Ning telecode.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`) VALUES
(1, 'Andres Iniesta', 'iniesta@fcb.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220'),
(2, 'Samuel', 'samuel@gmail.com', 'd5f12e53a182c062b6bf30c1445153faff12269a'),
(3, 'Sergio Busquets', 'sergio@gmail.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220'),
(4, 'Pedro', 'pedro@gmail.com', 'b1b3773a05c0ed0176787a4f1574ff0075f7521e');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `blog_posts`
--
ALTER TABLE `blog_posts`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `blog_posts`
--
ALTER TABLE `blog_posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
