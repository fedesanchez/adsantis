-- phpMyAdmin SQL Dump
-- version 4.0.10.7
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 20-04-2015 a las 21:54:04
-- Versión del servidor: 5.5.42-cll
-- Versión de PHP: 5.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `annadsar_admin`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE IF NOT EXISTS `categoria` (
  `id_categoria` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(150) NOT NULL,
  PRIMARY KEY (`id_categoria`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`id_categoria`, `nombre`) VALUES
(6, 'Profesional - Cuidado del cabello'),
(8, 'Profesional - Modeladores'),
(9, 'Gran Consumo - Cuidado del cabello'),
(10, 'Gran Consumo - Modeladores'),
(11, 'Gran Consumo - Cremas y Tratamientos'),
(12, 'Profesional - Cremas y Tratamientos');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `consejo`
--

CREATE TABLE IF NOT EXISTS `consejo` (
  `id_consejo` int(11) NOT NULL AUTO_INCREMENT,
  `html` text NOT NULL,
  `titulo` varchar(255) NOT NULL,
  PRIMARY KEY (`id_consejo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `linea`
--

CREATE TABLE IF NOT EXISTS `linea` (
  `id_linea` int(11) NOT NULL AUTO_INCREMENT,
  `id_categoria` int(11) NOT NULL,
  `img` varchar(255) NOT NULL,
  `descripcion` text NOT NULL,
  `atributos` text,
  `nombre` varchar(45) NOT NULL,
  `resumen` text NOT NULL,
  `novedad` tinyint(4) DEFAULT NULL,
  `color_fondo` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id_linea`),
  KEY `fk_linea_1_idx` (`id_categoria`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=49 ;

--
-- Volcado de datos para la tabla `linea`
--

INSERT INTO `linea` (`id_linea`, `id_categoria`, `img`, `descripcion`, `atributos`, `nombre`, `resumen`, `novedad`, `color_fondo`) VALUES
(4, 9, 'http://www.annadesanctis.com.ar/admin/upload/files/linea/Argan_Transp.png', 'Linea con extracto de argán. Nutre el cabello y otorga brillo y suavidad. Su fórmula con ProVitamina B5 ayuda a restaurar las cutículas dañadas  por procesos químicos. Disminuye el frizz', '1,Shampoo x 400 ml,Balsam Acondicionador x 400 ml,Baño de Crema x 250 ml,Olio Serum', 'Triple Acción Argán', 'Cabellos Brillantes', 1, '#e77d6b'),
(6, 9, 'http://www.annadesanctis.com.ar/admin/upload/files/linea/Mistos_transp.png', 'La Linea Triple Acción para cabellos mixtos limpia y regenera los cabellos desde la raiz. Actúa en el bulbo capilar absorbiendo la grasitud para devolver al cabello el brillo perdido, y combate la sequedad y la fragilidad de las puntas secas humectandolas, logrando mayor volumen. El cabello quedará realmente limpio. No produce acostumbramiento, y es para uso diario.', '1,Shampoo Crema x 400 ml,Balsam Acondicionador x  400 ml,Baño de crema x 250 ml', 'Triple Acción Cabellos Mixtos', 'Linea para Cuero cabelludo graso y puntas secas', 1, '#e298f2'),
(7, 9, 'http://www.annadesanctis.com.ar/admin/upload/files/linea/Te%C3%B1idos_transp%20%281%29.png', '', '1,Shampoo Crema x 400 ml,Balsam Acondicionador x 400 ml,Baño de Crema x 250 ml', 'Triple Acción Cabellos Teñidos', 'Mantiene el Color', 1, '#c4eaa4'),
(8, 9, 'http://www.annadesanctis.com.ar/admin/upload/files/linea/Silk_transp.png', '', '1,Shampoo Crema x 400 ml,Balsam Acondicionador x 400 ml,Baño de Crema  x 250 g', 'Triple Acción Silk Protein', 'Linea para cabellos secos y sin brillos', 0, '#cacaca'),
(9, 9, 'http://www.annadesanctis.com.ar/admin/upload/files/linea/Nutri_transp.png', 'La Keratina aporta brillo, suavidad y volumen a los cabellos castigados y la provitamina B5 nutre y repara, otorgando fuerza y vitalidad. \nLa combinacion de la keratina y la provitamina B5 cierra la cutícula, disminuye el frizz y facilita el peinado.', '1,Shampoo Crema x 400 ml,Balsam Acondicionador x 400 ml', 'Triple Acción Nutri Reparador', 'Cabellos planchados, dañados débiles.', 1, '#e77d6b'),
(10, 9, 'http://www.annadesanctis.com.ar/admin/upload/files/linea/emoliente_transp%20%281%29.png', '', '1,Shampoo Crema x 400 ml,Balsam Acondicionador x 400 ml', 'Triple Acción Emoliente', 'Cabellos Quebradizos, secos y porosos.', 0, '#b5bae5'),
(11, 9, 'http://www.annadesanctis.com.ar/admin/upload/files/linea/Cristales_transp.png', 'Su formula enriquecida con aceite de Semillas de Lino, forma una película protectora otorgando brillo, suavidad e hidratación profunda.', '1,Shampoo Crema x 400 ml,Balsam Acondicionador x 400 ml,Reparador de puntas x 40 g', 'Triple Acción Cristales Líquidos', 'Cabellos Teñidos y Castigados', 0, '#b9e5f3'),
(12, 9, 'http://www.annadesanctis.com.ar/admin/upload/files/linea/Keratina.png', '', '1,Shampoo x 420 ml,Acondicionador x 420 ml,Baño de Crema x 50/200 g,Ampollas x 18 g,Concentrado de puntas x 30 g,Crema de Peinado x 160 ml', 'Keratina', 'Cabellos con pérdida de materia', 1, '#c3aa84'),
(13, 9, 'http://www.annadesanctis.com.ar/admin/upload/files/linea/Macadamia.png', 'La fórmula exclusiva del aceite de Macadamia tiene una combinacion perfecta de hidratación profunda y rejuvenecimiento milagroso de los cabellos ásperos, secos y maltratados. Sus propiedades fortalecedoras hacen que el pelo quede brillante, suave y facilite el peinado eliminando el frizz.', '1,Shampoo x 420 ml,Acondicionador x 420 ml,Baño de Crema x 200 g', 'Macadamia', 'Regenerativo con Aceite de macadamia', 1, '#ff7100'),
(14, 9, 'http://www.annadesanctis.com.ar/admin/upload/files/linea/Arginina.png', 'La arginina es un aminoácido esencial  del cabello, es conocida por estimular la microcirculación y dar energía a la fibra capilar. La quinoa es una proteína hidrolizada que presenta alta concentración de aminoácidos, rica en minerales, vitamina B y C que le otorgan la propiedad antioxidante e hidratante, permitiendo el tratamiento y la restructuración interna y externa de los cabellos sometidos a la agresión química. ', '1,Shampoo x 420 ml,Acondiciondor x 420 ml', 'Arginina + Quinoa', 'Cabellos Debilitados y Maltratados', 1, '#edb4d2'),
(15, 9, 'http://www.annadesanctis.com.ar/admin/upload/files/linea/Ortiga%20%281%29.png', 'Los extractos de ortiga ayudan a la oxigenación del bulbo capilar contribuyendo a disminuir la caída del cabello y fortalecer el crecimiento. La Keratina aporta materia, cauteriza y cierra las cutículas del cabello ayudando a su reparación intensa.', '1,Shampoo x 420 ml,Acondicionador x 420 ml,Loción Anticaída x 100 g,Ampollas 10 g', 'Ortiga', 'Aporta Materia. Cierra cutículas.', 0, '#759a3e'),
(16, 9, 'http://www.annadesanctis.com.ar/admin/upload/files/linea/Manzanilla%20%281%29.png', '', '1,Shampoo x 420 ml,Acondicionador x 420 ml', 'Manzanilla', 'Fijador del color para cabellos Claros.', 0, '#e4c255'),
(17, 9, 'http://www.annadesanctis.com.ar/admin/upload/files/linea/Extra-Acido%20%281%29.png', 'La linea extra ácido para cabellos teñidos y permanentados contiene D-Pantenol y extractos vegetales humectantes. Cierra las cutículas regenera los cabellos porosos proporciona brillo y suavidad desenreda profundamente,', '1,Shampoo x 420 ml,Acondicionador x 420 ml,Baño de crema 50 / 200 g', 'Extra ácido', 'Cabellos teñidos y permanentados.', 0, '#759a3e'),
(18, 9, 'http://www.annadesanctis.com.ar/admin/upload/files/linea/Puntas%20%281%29.png', '', '1,Shampoo x 420 ml,Acondicionador x 420 ml,Baño de crema x 200 g', 'Puntas secas', 'Colágeno y proteínas para puntas florecidas.', 0, '#ff7100'),
(19, 9, 'http://www.annadesanctis.com.ar/admin/upload/files/linea/Rulos.png', '', '1,Shampoo x 420 ml,Acondicionador x 420 ml', 'Rulos. Non Frizz', 'Non Friz.  Rulos más definidos.', 0, '#a8e9e5'),
(20, 9, 'http://www.annadesanctis.com.ar/admin/upload/files/linea/Ba%C3%B1o-de-luz.png', '', '1,Shampoo x 420 ml,Acondicionador x 420 ml,Baño de Crema x 200 g', 'Baño de Luz', 'Mas cuerpo y brillo.\n', 0, '#f0e1b1'),
(21, 9, 'http://www.annadesanctis.com.ar/admin/upload/files/linea/Cero-Volumen.png', '', '1,Shampoo x 420 ml,Acondicionador x 420 ml', 'Cero Volumen.', 'Non Frizz. Lacios Perfectos', 0, '#b6a4e6'),
(22, 9, 'http://www.annadesanctis.com.ar/admin/upload/files/linea/Negro.png', '', '1,Shampoo x 420 ml,Acondicionador x 420 ml,Baño de Crema x 200 g', 'Negro.', 'Barro de Siberia. Previene la caída.', 0, '#cacaca'),
(23, 9, 'http://www.annadesanctis.com.ar/admin/upload/files/linea/SemiDiLino.png', '', '1,Shampoo x 420 ml,Acondicionador x 420 ml,Baño de crema x 200 g,Ampollas x 10 g', 'Semi de Lino', 'Restaurador con semillas de aceite de lino.', 0, '#a8e9e5'),
(24, 9, 'http://www.annadesanctis.com.ar/admin/upload/files/linea/Hipoalergenico.png', '', '1,Shampoo x 420 ml,Acondicionador x 420 ml,Baño de Crema x 200 g', 'HIpoalargénico', 'Cuero cabelludo sensible. Para uso diario.', 0, '#d48173'),
(25, 9, 'http://www.annadesanctis.com.ar/admin/upload/files/linea/Ortiga%2BKera.png', '', '1,Shampoo x 420 ml,Acondicionador x 420 ml,Ampollas x 18 g', 'Linea Ortiga + Keratina', 'Fuerza y Crecimiento', 0, '#d7d7d7'),
(26, 9, 'http://www.annadesanctis.com.ar/admin/upload/files/linea/SeboCOntrol.png', '', '1,Shampoo dermoprotector para la caspa  x 420 ml,Shampoo sebocontrol  para cabellos grasos x 420 ml', 'Control', 'Linea para caspa y cuero Cabelludo Graso.', 0, '#cacaca'),
(27, 9, 'http://www.annadesanctis.com.ar/admin/upload/files/linea/Proteccion%20Extrema.png', '', '1,Shampoo x 420 ml,Acondicionador x 420 ml,Baño de Crema x 200 g', 'Protección Extrema', 'Anti Cloro. Con aceite de arroz.', 0, '#9acdf0'),
(29, 9, 'http://www.annadesanctis.com.ar/admin/upload/files/linea/Chocolatto.png', '', '1,Shampoo x 300 ml,Enjuague x 300 ml,Baño x 200 ml,Serum x 30ml,Ampollas x 9ml', 'Chocolatto', 'Linea Antiquiebre. Chocolate', 0, '#A15A08'),
(30, 11, 'http://www.annadesanctis.com.ar/admin/upload/files/linea/Cremas-Peinar.png', '', '1,Crema de Peinado Extra ácida x 160 ml,Crema de Peinado  Puntas Secas x 160 ml,Crema de Peinado Lacios x 160 ml,Crema de Peinado Rulos x 160 ml,Crema de Peinado Keratina x 160 ml,Crema de Peinado Chocolatto x 160 ml', 'Cremas de Peinar', '', 0, ''),
(31, 11, 'http://www.annadesanctis.com.ar/admin/upload/files/linea/Cubre%2B.png', '', '1,MODELARTE ANTIAGE x 12 Unidades,MODELARTE CUBRE MAS x 12 Unidades,MODELARTE ANTICAÍDA x 12 Unidades', 'Tratamientos Capilares', '', 0, ''),
(32, 11, 'http://www.annadesanctis.com.ar/admin/upload/files/linea/Piojos.png', '', '1,Shampoo Removedor de Piojos y Liendres x 230 ml,Balsám Removedor de Piojos y Liendres x 230 ml,Loción Removedora de Piojos y Liendres x 110 ml', 'Anti Piojos y Liendres', '', 0, ''),
(33, 11, 'http://www.annadesanctis.com.ar/admin/upload/files/linea/Mascaras.png', '', '1,MODELARTE MÁSCARA HIDRATANTE x 200 ml,MODELARTE MÁSCARA NUTRIENTE x 200 ml', 'Máscaras de cabello', '', 0, ''),
(34, 10, 'http://www.annadesanctis.com.ar/admin/upload/files/linea/Geles.png', '', '1,Gel Con Elastina Modelador x 250 ml,Gel con Elastina Modelador x 500 ml,Gel Efecto Humedo x 250 ml,Gel Efecto Humedo x 500 ml,Gel Extra Forte x 250 ml,Gel Extra Forte x 500 ml', 'Geles', '', 0, ''),
(35, 10, 'http://www.annadesanctis.com.ar/admin/upload/files/linea/protector.png', '', '1,OLIO PROTECTOR TÉRMICO POST PLANCHITA X 130 ml,OLIO SILICONAS CAPILARES X 130 ml,OLIO TEX ORO C/PANTENOL X 120 ml,ANNA DE SANCTIS BRILLO SPRAY X 90 ml,ANNA DE SANCTIS CERA BRILLO X 20/50 ml,NON OLIO PROTECT NO GRASO RULOS X 250 ml,NON OLIO PROTECT NO GRASO LACIOS X 250 ml', 'Modeladores', '', 0, ''),
(36, 10, 'http://www.annadesanctis.com.ar/admin/upload/files/linea/Almendra%20%281%29.png', '', '1,PERMANENTE FORTE CABELLOS VIRGENES x 120 ml,PERMANENTE FORTE CABELLOS NORMALES x 120 ml,PERMANENTE DOLCE CABELLOS TEÑIDOS x 120 ml,NEUTRALIZANTE CON COLAGENO x 120 ml', 'Permanentes y Neutralizantes', '', 0, ''),
(37, 12, 'http://www.annadesanctis.com.ar/admin/upload/files/linea/Ba%C3%B1os2.png', '', '1,ADS Baño de Luz x 500 ml,OLIO Jazmín x 500 ml,OLIO puntas secas x 500 ml,OLIO extra ácido x 500 ml,OLIO almendra x 500 ml,OLIO puntas secas x 1000 ml,OLIO extra ácido x 1000 ml,ADS baño de almendras x 1000 ml', 'Baños de Crema', '', 0, ''),
(38, 6, '', '', '1,ADS Shampoo Eykum Colágeno x 5000 ml,ADS Shampoo Eykum Revitalizador x 5000 ml,ADS Shampoo Eykum Suave x 5000 ml,ADS Shampoo Eykum Neutro X 5000 ml,ADS Shampoo Eykum Siliconado x 5000 ml,ADS Shampoo Extra Ácido x 5000 ml,ADS Shampoo Macadamia x 5000 ml', 'Shampoo (bidón)', '', 0, ''),
(39, 6, '', '', '1,ADS Eykum Antioxidante x 5000 ml,ADS Eykum Nutrición x 5000 ml,ADS Eykum Siliconado x 5000 ml,ADS Eykum Extra ácido x 5000 ml,ADS Macadamia x 5000 ml', 'Enjuague (bidón)', '', 0, ''),
(40, 6, '', '', '1,MODELARTE Shampoo Extra Ácido x 2000 ml,MODELARTE Shampoo Técnico x 2000 ml,MODELARTE Shampoo Tónico x 2000 ml,MODELARTE Enjuague Restaurador x 2000 ml', 'Linea MODELARTE', '', 0, ''),
(41, 6, 'http://www.annadesanctis.com.ar/admin/upload/files/linea/Maca%21.png', '', '1,Shampoo Macadamia x 1000 ml,Enjuague Macadamia x 1000 ml,ADS Baño de crema x 1000 ml', 'Linea Macadamia', '', 0, ''),
(42, 6, '', '', '1,Shampoo Semi de Lino x 1000 ml,Enjuague Semi de Lino x 1000 ml,Baño de Crema  Semi de Lino x 1000 ml', 'Linea Semi de Lino', '', 0, ''),
(43, 6, 'http://www.annadesanctis.com.ar/admin/upload/files/linea/Kera.png', '', '1,ADS Shampoo Keratina x 5000 ml,ADS Enjuague Keratina x 5000 ml,ADS Shampoo Keratina x 1000 ml,ADS Enjuague Keratina x 1000 ml,ADS Baño de Keratina x 1000 ml,ADS Baño de Keratina x 500 ml,ADS Salón Keratina Concentrada x 110 ml', 'Linea Keratina', '', 0, ''),
(44, 12, 'http://www.annadesanctis.com.ar/admin/upload/files/linea/Triple-accion.png', '', '1,OLIO Crema de Peinado T. Acción Lacios x 750 ml,OLIO Crema de Peinador T. Acción Rulos x 750 ml', 'Cremas de Peinado', '', 0, ''),
(45, 8, '', '', '1,Anna de Sanctis - Gel Húmedo x 750 ml,Anna de Sanctis - Gel Extra Forte x 750 ml', 'Geles', '', 0, ''),
(46, 8, '', '', '1', 'Permanentes y Neutralizantes', '', 0, ''),
(47, 8, '', '', '1,MODELARTE brillo spray x 263 ml,MODELARTE espuma modeladora x 263 ml,MODELARTE Laca spray x 263 ml', 'Aerosoles Modelarte', '', 0, ''),
(48, 8, '', '', '1,Anna de Sanctis - Cera brillo Int x 110 ml,OLIO tex oro x 500 ml,ADS non oil Rulos / Lacios x 420 ml,ADS Hair Souflle x 15 ml', 'Modeladores', '', 0, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `punto_venta`
--

CREATE TABLE IF NOT EXISTS `punto_venta` (
  `id_punto` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) DEFAULT NULL,
  `direccion` varchar(255) DEFAULT NULL,
  `telefono` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `latitud` varchar(45) DEFAULT NULL,
  `longitud` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id_punto`),
  UNIQUE KEY `id_punto_UNIQUE` (`id_punto`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Volcado de datos para la tabla `punto_venta`
--

INSERT INTO `punto_venta` (`id_punto`, `nombre`, `direccion`, `telefono`, `email`, `latitud`, `longitud`) VALUES
(1, 'Perfumerías La Boutique', 'Calle 6 n.666', '(0221) 423 551', '', '-57.952544 ', '-34.910936'),
(2, 'Perfumerías La Boutique', 'Calle 7 N.915', '(0221) 423 5165', '', '-57.9495385', '-34.915007'),
(3, 'Perfumerías La Boutique', 'Calle 12 N.1217 e/57 y 58', '(0221) 427 5494', '', '-57.949589', '-34.923473'),
(4, 'Perfumerías La Boutique', 'Calle 12 N°1285 e/58 y 59', '(0221) 427 6625', '', '-57.948253', '-34.924452'),
(5, 'Perfumerías La Boutique', 'Calle 12 N°1399 esq.61', '(0221) 451 2244', '', '-57.945541', '-34.926450'),
(6, 'Perfumerías La boutique', 'Diag. 73 N°900 esq.4', '(0221) 4270355', '', '-57.935199', '-34.920583'),
(7, 'Perfumerías La Boutique', 'Calle 137 y 65', '(0221) 450 5108', '', '-57.967352', '-34.953653'),
(8, 'Perfumerías La Boutique', 'Montevideo 723 e/9 y 10', '(0221) 4611 968', '', '-57.884686', '-34.868182'),
(9, 'Perfumerías Corallo', 'Calle 8 N°787 e/47 y 48', '(0221) 422 0050', '', '-57.952769', '-34.914389'),
(10, 'Perfumerías Corallo', 'Calle 8 N°884 e/49 y 50', '(0221) 422 6613', '', '-57.951060', '-34.915576');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `salon`
--

CREATE TABLE IF NOT EXISTS `salon` (
  `id_salon` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) DEFAULT NULL,
  `direccion` varchar(255) DEFAULT NULL,
  `telefono` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `latitud` varchar(45) DEFAULT NULL,
  `longitud` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id_salon`),
  UNIQUE KEY `id_salon_UNIQUE` (`id_salon`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `slider`
--

CREATE TABLE IF NOT EXISTS `slider` (
  `id_slider` int(11) NOT NULL AUTO_INCREMENT,
  `img_fondo` varchar(255) DEFAULT NULL,
  `img_producto` varchar(255) DEFAULT NULL,
  `nombre_producto` varchar(255) DEFAULT NULL,
  `desc_sup_prod` varchar(255) DEFAULT NULL,
  `desc_inf_prod` varchar(255) DEFAULT NULL,
  `link` varchar(255) DEFAULT '#',
  `orden` int(10) unsigned DEFAULT NULL,
  `habilitado` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`id_slider`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Volcado de datos para la tabla `slider`
--

INSERT INTO `slider` (`id_slider`, `img_fondo`, `img_producto`, `nombre_producto`, `desc_sup_prod`, `desc_inf_prod`, `link`, `orden`, `habilitado`) VALUES
(4, 'http://www.annadesanctis.com.ar/admin/upload/files/slider_fondo/SlideMac_BG.jpg', 'http://www.annadesanctis.com.ar/admin/upload/files/slide_prod/SlideMac_prod%20%281%29.png', 'MACADAMIA', 'ACEITE <br>REGENERATIVO', 'Cabello brillante, suave y fácil de peinar.', 'http://www.annadesanctis.com.ar/nuevo/producto.php?id=13', 1, 1),
(6, 'http://www.annadesanctis.com.ar/admin/upload/files/slider_fondo/SlideArgan_BG.jpg', 'http://www.annadesanctis.com.ar/admin/upload/files/slide_prod/SlideArgan_prod.png', 'ARGAN', '', '', '#', 1, 1),
(7, 'http://www.annadesanctis.com.ar/admin/upload/files/slider_fondo/SlideArginina_BG.jpg', 'http://www.annadesanctis.com.ar/admin/upload/files/slide_prod/SlideArginina_prod.png', 'ARGININA', '', '', '#', 1, 1),
(8, 'http://www.annadesanctis.com.ar/admin/upload/files/slider_fondo/SlidesKera_BG.jpg', 'http://www.annadesanctis.com.ar/admin/upload/files/slide_prod/SlideKera_prod.png', 'Keratina', '', '', '#', 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `slider_ta`
--

CREATE TABLE IF NOT EXISTS `slider_ta` (
  `id_slider_ta` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `img_producto` varchar(255) NOT NULL,
  `tit_producto` varchar(255) NOT NULL,
  `tit_prop_1` varchar(255) DEFAULT NULL,
  `desc_prop_1` varchar(255) DEFAULT NULL,
  `tit_prop_2` varchar(255) DEFAULT NULL,
  `desc_prop_2` varchar(255) DEFAULT NULL,
  `tit_prop_3` varchar(255) DEFAULT NULL,
  `desc_prop_3` varchar(255) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `orden` int(10) unsigned DEFAULT NULL,
  `habilitado` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`id_slider_ta`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Volcado de datos para la tabla `slider_ta`
--

INSERT INTO `slider_ta` (`id_slider_ta`, `img_producto`, `tit_producto`, `tit_prop_1`, `desc_prop_1`, `tit_prop_2`, `desc_prop_2`, `tit_prop_3`, `desc_prop_3`, `link`, `orden`, `habilitado`) VALUES
(3, 'http://www.annadesanctis.com.ar/admin/upload/files/sliderta/Argan_Transp.png', 'ACEITE DE ARGÁN', 'Agrega Brillo', 'Nadie ama al dolor en si mismo, aquel que lo busca, y que lo quiere, sencillamente por que es dolor. ', 'Aporta Fuerza', 'Nadie ama al dolor en si mismo, aquel que lo busca, y que lo quiere, sencillamente por que es dolor. ', 'AntiFrizz', 'Nadie ama al dolor en si mismo, aquel que lo busca, y que lo quiere, sencillamente por que es dolor. ', '#', 1, 1),
(4, 'http://www.annadesanctis.com.ar/admin/upload/files/sliderta/Mistos_transp%20%281%29.png', 'Cabellos Mixtos', 'Cuero Cabello Graso', 'Actua en el bulbo capilar absorbiendo la grasitud para devolver al cabello el brillo perdido.', 'Puntas Secas', 'Combate la sequedad y fragilidad de las puntas secas. Reduce la aparición de puntas florecidas', 'Elimina el Frizz', 'Con su fórmula, te aseguras de tener un cabello sin frizz y realmente limpio.', 'http://www.annadesanctis.com.ar/nuevo/producto.php?id=6', 2, 1),
(5, 'http://www.annadesanctis.com.ar/admin/upload/files/sliderta/Te%C3%B1idos_transp.png', 'Cabellos Teñidos', 'Anti Residuos', 'Nadie ama al dolor en si mismo, aquel que lo busca, y que lo quiere, sencillamente por que es dolor. ', 'Mantiene el color', 'Nadie ama al dolor en si mismo, aquel que lo busca, y que lo quiere, sencillamente por que es dolor. ', 'Elimina el Frizz', 'Nadie ama al dolor en si mismo, aquel que lo busca, y que lo quiere, sencillamente por que es dolor. ', '', 3, 1),
(7, 'http://www.annadesanctis.com.ar/admin/upload/files/sliderta/Nutri_transp.png', 'Nutri Reparador', 'Nutre la Fibra capilar', 'La Provitamina B5 nutre y repara, otorgando fuerza y vitalidad al cabello.', 'Repara las cutículas', 'La Keratina  aporta brillo, suavidad y volumen a los cabellos castigados.', 'Forma un film protector', 'La Combinación de la Keratina y la Provitamina B5 cierra la cutícula y disminuye el frizz ', 'http://www.annadesanctis.com.ar/nuevo/producto.php?id=9', 5, 1),
(9, 'http://www.annadesanctis.com.ar/admin/upload/files/sliderta/Cristales_transp.png', 'Cristales Líquidos', 'Brillo Instantaneo', 'Nadie ama al dolor en si mismo, aquel que lo busca, y que lo quiere, sencillamente por que es dolor. ', 'Repara las puntas', 'Nadie ama al dolor en si mismo, aquel que lo busca, y que lo quiere, sencillamente por que es dolor. ', 'Facilita el peinado', 'Nadie ama al dolor en si mismo, aquel que lo busca, y que lo quiere, sencillamente por que es dolor. ', '', 7, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `testimonio`
--

CREATE TABLE IF NOT EXISTS `testimonio` (
  `id_testimonio` int(11) NOT NULL AUTO_INCREMENT,
  `texto` longtext NOT NULL,
  `autor` varchar(255) NOT NULL,
  `profesion` varchar(255) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_testimonio`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `testimonio`
--

INSERT INTO `testimonio` (`id_testimonio`, `texto`, `autor`, `profesion`, `img`) VALUES
(1, '', 'Alejandra Maglietti', 'Modelo', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `id_usuario` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(150) NOT NULL,
  `password` varchar(150) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `apellido` varchar(45) NOT NULL,
  PRIMARY KEY (`id_usuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `linea`
--
ALTER TABLE `linea`
  ADD CONSTRAINT `fk_linea_1` FOREIGN KEY (`id_categoria`) REFERENCES `categoria` (`id_categoria`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
