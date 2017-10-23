-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 23, 2017 at 01:31 PM
-- Server version: 5.6.36-cll-lve
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `amakaik1_AsistenteTaxonomico`
--

-- --------------------------------------------------------

--
-- Table structure for table `input_data`
--

CREATE TABLE `input_data` (
  `id` int(11) NOT NULL,
  `genero` varchar(64) NOT NULL,
  `familia` varchar(64) NOT NULL,
  `clase` varchar(64) NOT NULL,
  `tamanos_referenciales` text NOT NULL,
  `nivel_organizacion` varchar(64) NOT NULL,
  `formas` text NOT NULL,
  `forma_celula_caracter1` text,
  `forma_celula_caracter2` text,
  `forma_celula_caracter3` text,
  `pared_celular_ornamentaciones` text,
  `n_cloroplastos_forma` text,
  `pirenoides` text,
  `foto` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `input_data`
--

INSERT INTO `input_data` (`id`, `genero`, `familia`, `clase`, `tamanos_referenciales`, `nivel_organizacion`, `formas`, `forma_celula_caracter1`, `forma_celula_caracter2`, `forma_celula_caracter3`, `pared_celular_ornamentaciones`, `n_cloroplastos_forma`, `pirenoides`, `foto`) VALUES
(1, 'Asterionella', 'Tabellariaceae', 'Bacillariophyceae', 'Células de 30 a 160 micras de largo y 1,3 a 6 micras de diámetro', 'Colonia', 'Colonia estrellada, raramente en zigzag, unidas a través de la cara valvar, en la zona basal presentan una almohadilla de mucílago. Colonias constituídas por 4 a 8 células. Colonias libre flotantes.', 'Frústulo de sílice constituído por 2 valvas. Valvas largas y estrechas con ápices capitados.', 'Valvas heteropolares, márgenes asimétricos, variables entre las poblaciones', 'Valvas sin rafe, carentes de costillas transapicales, estrías irregulares y finas.', 'Sílice', 'Numerosos', 'Numerosos', 'images/Fotos/Bacillariophyceae/Asterionella/Asterionella 40X Rio Bio Bio cerca de concepción 2016_10_26_0094.jpg'),
(2, 'Tabellaria', 'Tabellariaceae', 'Bacillariophyceae', 'Células 6 a 130 micras de largo y de 3,8 a 8,5 micras de ancho', 'Colonia', 'Colonia en zigzag, algunas veces con formas de estrellas. Colonia libre flotante.', 'Frústulo de sílice constituído por 2 valvas. Valvas alargadas con extremos capitados.', 'Valvas más anchas en el centro que en los extremos.', 'Unidas por una almohadilla de mucílago, en el campo de poro apical.', 'Sílice', 'Numerosos', 'Numerosos', NULL),
(3, 'Sphaerocystis', 'Sphaerocystidaceae', 'Chlorophyceae', 'Células de 4 a 16 micras de diametro', 'Colonia', 'Colonias tipo cenobio, esféricas, libre flotante, gelatinosas, de no más de 1 mm de diámetro con 4 a 32  células incrustadas en el mucílago.', 'Células globulosas.', 'Células agrupada de 2 o 4 ó amenudo en tetraedros regulares en el centro de la colonia.', 'N/A', 'Pared celular lisa, de celulosa.', 'Cloroplasto con forma de copa, en ubicación parietal en la célula.', 'Con y sin pirenoídes', NULL),
(4, 'Scenedesmus', 'Scenedesmaceae', 'Chlorophyceae', 'Las células fluctúan entre  3 a 78 micras de diámetro y de  2 a 10 micras de ancho', 'Colonia', 'Colonia tipo cenobio-consorcio, dispuestas linealmente, alternando en 2 a 3 filas.', 'Células alargadas, elipsoidales o fusiformes, sin apéndices, casi redondeadas.', 'Células terminales con espinas', '4, 8 ó 12 células.', 'Pared lisa o verrucosa, de celulosa.', 'Uno', 'Uno', NULL),
(5, 'Ceratium', 'Ceratiaceae', 'Dinophyceae', 'Células entre 90 a 450 micras de longitud', 'Unicelular', 'Células solitarias, con tecas (epiteca e hipoteca).', 'Célula aplastada.', '1 cuerno largo en la epiteca/ 2ó3 en la hipoteca', 'Células con cingulum y sulcus.', 'Tecas con placas con poros, lisas a densamente ornamentadas.', 'Numerosos', 'N/A', NULL),
(6, 'Closterium', 'Closteriaceae', 'Conjugatophyceae', 'Células de 72 a 1700 micras de largo', 'Unicelular', 'Células solitarias con forma de medialuna.', 'Célula sin istmo (constricción media profunda).', 'Células cilindricas-fusiformes, elongadas', 'Extremos agudos, redondeados o truncados.', 'Pared lisa o con estrías o costas longitudinales, de celulosa.', 'Dos, uno en cada hemicélula.', 'Pocos o varios', NULL),
(7, 'Cosmarium', 'Desmidiaceae', 'Conjugatophyceae', 'Células que fluctúan entre 9 a 210 micras.', 'Unicelular', 'Células solitarias, raramente en cadenas variables en tamaño, usualmente más largas que anchas.', 'Célula con istmo (constricción media profunda).', 'Células sin procesos', 'Hemicélulas de contornos variables, elípticas.', 'Pared lisa, punctada, excroviculada, verrucosa o papilosa, de celulosa.', 'Dos, uno en cada hemicélula, con forma lobulada.', 'Uno o dos, de gran tamaño', NULL),
(8, 'Micrasterias', 'Desmidiaceae', 'Chlorophyceae', 'Células de 60 hasta 400 micras de largo', 'Unicelular', 'Células solitarias, de tamaño variable de contorno subcircular, generalmente muy comprimidas y profundamente contraídas en la parte media.', 'Célula con istmo (constricción media profunda).', 'Más largas que anchas', 'Hemicélulas semicirculares, en general con 5 lóbulos (algunas veces 3).', 'Pared lisa o con poros/escrobiculaciones o espinas, de celulosa.', 'Dos, uno en cada hemicélula.', 'Varios', NULL),
(9, 'Staurastrum', 'Desmidiaceae', 'Conjugatophyceae', 'Células de 9 a 210 micras de largo.', 'Unicelular', 'Células solitarias, usuamente de simetría radial y contraídas en la región media.', 'Células generalmente más largas que anchas.', 'Con procesos, es decir, con  ápices a veces prolongados en apéndices en forma de brazos.', 'Hemicélulas fusiformes, o poligonales en vista polar.', 'Pared lisa, punctada, escrobiculada, granulada o con espinas, de celulosa.', 'Dos, uno en cada hemicélula.', 'Uno central', NULL),
(10, 'Melosira', 'Melosiraceae', 'Bacillariophyceae', 'Células de 8 a 35 micras de diámetro', 'Colonia', 'Colonia tipo filamento, uniseriados, con frústulos formando largas colonias unidos por la cara valvar. Los filamentos siempre se presentan en vista conectival.', 'Frústulo de sílice constituído por 2 valvas. Células cilindricas, variables en la razón alto-ancho, robustas.', 'Células unidas en pares, con poca ornamentación.', 'Células con cintura hialina.', 'Sílice', 'Numerosos cloroplastos lobulados', 'N/A', NULL),
(11, 'Nostoc', 'Nostocaceae', 'Cyanophyceae', 'Células de 4 a 7,5 micras de diámetro', 'Colonia', 'Colonia tipo filamento agrupado en cenobio, enrrollados y entrelazados, matriz gelatinosa, menbranosa o irregularmente lobulada, globulada, gruesa y firme.', 'Células cilindricas ó con forma de barril, embebida en un grueso y copioso mucílago.', 'El tricoma presenta células vegetativas y heterocistos  terminales o  intercalares', 'Tricoma sin diferenciación basal distal.', 'Ausente', 'N/A', 'N/A', NULL),
(12, 'Oscillatoria', 'Oscillatoriaceae', 'Cyanophyceae', 'Tricomas de 4 a 60 micras de ancho', 'Colonia', 'Colonia tipo filamento, solitarios o agregados, derechos o flexibles, contraídos o no a través de tabiques transversales. Desprovistos de vaina y ocacionalmente pueden presentar vainas, hialinas finas o mucosas.', 'Células adyacentes unidas, y células terminales con o sin cofia.', 'Células cortas cilíndricas o discoides (siempre más cortas que anchas), estrechadas o no, en las paredes cruzadas.', 'Células con granulación fina o con gránulos solitarios.', 'Sin pared', 'N/A', 'N/A', NULL),
(13, 'Ulothrix', 'Ulotrichaceae', 'Ulvophyceae', 'Células entre 5 a 45 micras de ancho y de 5 a 60 micras de largo.', 'Colonia', 'Colonia tipo filamento, con filamento uniseriado libre flotante, en estado adulto. En estado juvenil presenta filamento fijo sin célula ápical diferenciada.', 'Células uninucleadas, cilindricas.', 'Células con diferenciación basal, en algunas es pecies.', 'N/A', 'Pared delgada a gruesa raramente presenta tabiques en forma de H en sección óptica longitudinal.', 'Uno parietal en forma de anillo incompleto. El cloroplasto envuelve la mitad o las 3/4 partes de la circunsferencia de la célula.', 'Uno ó muchos', NULL),
(14, 'Mougeotia', 'Zygnemataceae', 'Conjugatophyceae (Zygnematophyceae)', 'Células entre 10 a 21 micras de diámetro y de 50 a 250 micras de largo', 'Colonia', 'Colonia tipo filamento, con filamentos uniseriados entrelazados formando grandes madejas.', 'Célula alargada, cilindrica.', 'Células sin diferenciación basal distal', 'N/A', 'Pared celular con dos capas internas de celulosa.', 'Un cloroplasto, de forma laminar y parietal.', 'Numerosos pirenoides distribuidos al azar, ya sea axiales o esparcidos sobre la superficie.', NULL),
(15, 'Spirogyra', 'Zygnemataceae', 'Conjugatophyceae (Zygnematophyceae)', 'Células de 10 a 200 micras de diámetro', 'Colonia', 'Colonia tipo filamento, con filamentos simples, uniseriado, a veces con rizoides en la base.', 'Células cilindricas, cortas a muy largas en algunas especies.', 'Con tabiques transversales planos, o de repliegue anular, repliegue unilateral o semireplegado.', 'Tabique con diafragma o doble cofia.', 'Pared celular de dos capas con celulosa interna, capa externa de mucílago que hace filamentos muy viscosos.', 'Uno a 16 cloroplastos, parietales y espiralados.', 'Numerosos', NULL),
(16, 'Zygnema', 'Zygnemataceae', 'Conjugatophyceae (Zygnematophyceae)', 'Células con 10 a 50 micras de diámetro y de 20 a 30 micras', 'Colonia', 'Colonia tipo filamento, con filamentos no ramificados.', 'Células  iguales o varias veces mas largas que anchas, cilindricas, cortas o largas.', 'Celulas de paredes transversales planas y rodeadas de una banda mucilaginosa', 'N/A', 'Pared celular de dos capas con celulosa interna, capa externa de mucílago.', 'Dos estrellados y de posición axial.', 'Uno central de gran tamaño', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `input_data2`
--

CREATE TABLE `input_data2` (
  `id` int(11) NOT NULL,
  `genero` varchar(64) NOT NULL,
  `clase` varchar(64) NOT NULL,
  `nivel_organizacion` varchar(64) NOT NULL,
  `forma_organizacion1` varchar(64) NOT NULL,
  `forma_organizacion2` varchar(64) DEFAULT NULL,
  `forma_celula_caracter1` text,
  `forma_celula_caracter2` text,
  `forma_celula_caracter3` text,
  `pared_celular` varchar(32) NOT NULL,
  `pared_celular_ornamentaciones` text,
  `cloroplastos_n` varchar(64) NOT NULL,
  `cloroplastos_forma` text,
  `pirenoides` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `input_data2`
--

INSERT INTO `input_data2` (`id`, `genero`, `clase`, `nivel_organizacion`, `forma_organizacion1`, `forma_organizacion2`, `forma_celula_caracter1`, `forma_celula_caracter2`, `forma_celula_caracter3`, `pared_celular`, `pared_celular_ornamentaciones`, `cloroplastos_n`, `cloroplastos_forma`, `pirenoides`) VALUES
(17, 'Asterionella', 'Bacillariophyceae', 'Colonia', 'Colonia estrellada', NULL, '2 Valvas largas y estrechas', 'Valvas heteropolares, márgenes asimétricos', NULL, 'Sílice', NULL, 'Numerosos', NULL, 'Numerosos'),
(18, 'Tabellaria', 'Bacillariophyceae', 'Colonia', 'Colonia en zigzag', NULL, '2 Valvas alargadas con extremos capitados', 'Valvas más anchas en el centro que en los extremos.', NULL, 'Sílice', NULL, 'Numerosos', NULL, 'Numerosos'),
(19, 'Sphaerocystis', 'Chlorophyceae', 'Colonia', 'Colonias tipo cenobio', 'Incrustadas en el mucílago', 'Células globulosas', 'Células agrupada de 2 o 4 ó a menudo en tetraedros regulares en el centro de la colonia', NULL, 'Celulosa', 'Pared celular lisa.', 'Uno', 'Cloroplasto con forma de copa, en ubicación parietal en la célula', 'Con y sin pirenoídes'),
(20, 'Scenedesmus', 'Chlorophyceae', 'Colonia', 'Colonia tipo cenobio-consorcio', 'Colonias formadas por 4, 8 o 12 células', 'Células terminales con espinas', 'Alargadas, elipsoidales o fusiformes, sin apéndices, casi redondeadas', NULL, 'Celulosa', 'Pared lisa o verrucosa', 'Uno', NULL, 'Uno'),
(21, 'Ceratium', 'Dinophyceae', 'Solitarias', 'Con teca y cuernos', NULL, 'Célula aplastada', '1 cuerno largo en la epiteca/ 2 ó 3 en la hipoteca', 'Células con cingulo y sulco', 'Celulosa', 'Tecas con placas, poros, lisas a densamente ornamentadas', 'Numerosos', NULL, 'Ausentes'),
(22, 'Closterium', 'Conjugatophyceae', 'Solitarias', 'Con forma de medialuna', NULL, 'Más largas que anchas, contraídas en la región media', 'Células cilindricas-fusiformes, elongadas', 'Extremos agudos, redondeados o truncados', 'Celulosa', 'Pared lisa o con estrías o costas longitudinales', 'Dos, uno en cada hemicélula', NULL, 'Pocos o varios'),
(23, 'Cosmarium', 'Conjugatophyceae', 'Solitarias', 'Con hemicélulas', 'Más largas que anchas, contraídas en la región media.', 'Célula con istmo (constricción media profunda)', 'Células sin procesos', 'Hemicélulas de contornos variables, elípticas', 'Celulosa', 'Pared lisa, punctada, excroviculada, verrucosa o papilosa', 'Dos, uno en cada hemicélula', 'Lobulados', 'Uno o dos, de gran tamaño'),
(24, 'Micrasterias', 'Chlorophyceae', 'Solitarias', 'Con hemicélulas', 'Contorno subcircular, contraídas en la región media.', 'Célula con istmo (constricción media profunda)', 'Más largas que anchas', 'Hemicélulas en general con 5 lóbulos (algunas veces 3)', 'Celulosa', 'Pared lisa o con poros, escrobiculaciones o espinas', 'Dos, uno en cada hemicélula', NULL, 'Varios'),
(25, 'Staurastrum', 'Conjugatophyceae', 'Solitarias', 'Con hemicélulas', 'Simetría radial y contraídas en la región media.', 'Células generalmente más largas que anchas', 'Con procesos, es decir, con  ápices a veces prolongados en forma de brazos', 'Hemicélulas fusiformes, o poligonales en vista polar', 'Celulosa', 'Pared lisa, punctada, escrobiculada, granulada o con espinas', 'Dos, uno en cada hemicélula', NULL, 'Uno central'),
(26, 'Melosira', 'Bacillariophyceae', 'Colonia', 'Colonia tipo filamento', 'Con cingulo sobresaliente', '2 valvas cilindricas', 'Células unidas en pares, con poca ornamentación', NULL, 'Sílice', NULL, 'Numerosos', 'Lobulados', 'Ausentes'),
(27, 'Nostoc', 'Cyanophyceae', 'Colonia', 'Colonia tipo filamento', 'Matriz gelatinosa, grueso', 'Células cilindricas ó con forma de barril', 'Con células vegetativas y heterocistos  terminales o  intercalares', 'Isopolares', 'Ausente', NULL, 'Ausentes', NULL, 'N/A'),
(28, 'Oscillatoria', 'Cyanophyceae', 'Colonia', 'Colonia tipo filamento', 'Sin matriz gelatinosa', 'Células adyacentes unidas, y células terminales con o sin cofia', 'Células cortas cilíndricas o discoides (siempre más cortas que anchas)', 'Células con granulación fina o con gránulos solitarios', 'Ausente', NULL, 'Ausentes', NULL, 'N/A'),
(29, 'Ulothrix', 'Ulvophyceae', 'Colonia', 'Colonia tipo filamento', NULL, 'Células uninucleadas, cilindricas', 'Células con diferenciación basal, en algunas especies', NULL, 'Celulosa', 'Pared delgada a gruesa, tabiques en forma de H en sección óptica longitudinal', 'Uno', 'Parietal en forma de anillo que ocupa la mitad o las 3/4 partes de la circunsferencia de la célula.', 'Uno ó muchos'),
(30, 'Mougeotia', 'Zygnematophyceae', 'Colonia', 'Colonia tipo filamento', NULL, 'Célula alargada, cilindrica', 'Células sin diferenciación basal distal', NULL, 'Celulosa', 'Pared celular con dos capas internas de celulosa', 'Uno', 'Laminar y parietal', 'Numerosos pirenoides distribuidos al azar, ya sea axiales o esparcidos sobre la superficie.'),
(31, 'Spirogyra', 'Zygnematophyceae', 'Colonia', 'Colonia tipo filamento', NULL, 'Células cilindricas, cortas a muy largas', NULL, NULL, 'Celulosa', NULL, 'Uno a 16', 'Parietales y espiralados', 'Numerosos'),
(32, 'Zygnema', 'Zygnematophyceae', 'Colonia', 'Colonia tipo filamento', NULL, 'Células  iguales o varias veces mas largas que anchas, cilindricas, cortas o largas', NULL, NULL, 'Celulosa', NULL, 'Dos', 'Estrellados y de posición axial', 'Uno central de gran tamaño');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `input_data`
--
ALTER TABLE `input_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `input_data2`
--
ALTER TABLE `input_data2`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `input_data`
--
ALTER TABLE `input_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `input_data2`
--
ALTER TABLE `input_data2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
