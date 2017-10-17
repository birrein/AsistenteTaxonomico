/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 100110
Source Host           : localhost:3306
Source Database       : asistentetaxonomico

Target Server Type    : MYSQL
Target Server Version : 100110
File Encoding         : 65001

Date: 2017-10-17 10:31:44
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for input_data
-- ----------------------------
DROP TABLE IF EXISTS `input_data`;
CREATE TABLE `input_data` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
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
  `foto` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of input_data
-- ----------------------------
INSERT INTO `input_data` VALUES ('1', 'Asterionella', 'Tabellariaceae', 'Bacillariophyceae', 'Células de 30 a 160 micras de largo y 1,3 a 6 micras de diámetro', 'Colonia', 'Colonia estrellada, raramente en zigzag, unidas a través de la cara valvar, en la zona basal presentan una almohadilla de mucílago. Colonias constituídas por 4 a 8 células. Colonias libre flotantes.', 'Frústulo de sílice constituído por 2 valvas. Valvas largas y estrechas con ápices capitados.', 'Valvas heteropolares, márgenes asimétricos, variables entre las poblaciones', 'Valvas sin rafe, carentes de costillas transapicales, estrías irregulares y finas.', 'Sílice', 'Numerosos', 'Numerosos', 'images/Fotos/Bacillariophyceae/Asterionella/Asterionella 40X Rio Bio Bio cerca de concepción 2016_10_26_0094.jpg');
INSERT INTO `input_data` VALUES ('2', 'Tabellaria', 'Tabellariaceae', 'Bacillariophyceae', 'Células 6 a 130 micras de largo y de 3,8 a 8,5 micras de ancho', 'Colonia', 'Colonia en zigzag, algunas veces con formas de estrellas. Colonia libre flotante.', 'Frústulo de sílice constituído por 2 valvas. Valvas alargadas con extremos capitados.', 'Valvas más anchas en el centro que en los extremos.', 'Unidas por una almohadilla de mucílago, en el campo de poro apical.', 'Sílice', 'Numerosos', 'Numerosos', null);
INSERT INTO `input_data` VALUES ('3', 'Sphaerocystis', 'Sphaerocystidaceae', 'Chlorophyceae', 'Células de 4 a 16 micras de diametro', 'Colonia', 'Colonias tipo cenobio, esféricas, libre flotante, gelatinosas, de no más de 1 mm de diámetro con 4 a 32  células incrustadas en el mucílago.', 'Células globulosas.', 'Células agrupada de 2 o 4 ó amenudo en tetraedros regulares en el centro de la colonia.', 'N/A', 'Pared celular lisa, de celulosa.', 'Cloroplasto con forma de copa, en ubicación parietal en la célula.', 'Con y sin pirenoídes', null);
INSERT INTO `input_data` VALUES ('4', 'Scenedesmus', 'Scenedesmaceae', 'Chlorophyceae', 'Las células fluctúan entre  3 a 78 micras de diámetro y de  2 a 10 micras de ancho', 'Colonia', 'Colonia tipo cenobio-consorcio, dispuestas linealmente, alternando en 2 a 3 filas.', 'Células alargadas, elipsoidales o fusiformes, sin apéndices, casi redondeadas.', 'Células terminales con espinas', '4, 8 ó 12 células.', 'Pared lisa o verrucosa, de celulosa.', 'Uno', 'Uno', null);
INSERT INTO `input_data` VALUES ('5', 'Ceratium', 'Ceratiaceae', 'Dinophyceae', 'Células entre 90 a 450 micras de longitud', 'Unicelular', 'Células solitarias, con tecas (epiteca e hipoteca).', 'Célula aplastada.', '1 cuerno largo en la epiteca/ 2ó3 en la hipoteca', 'Células con cingulum y sulcus.', 'Tecas con placas con poros, lisas a densamente ornamentadas.', 'Numerosos', 'N/A', null);
INSERT INTO `input_data` VALUES ('6', 'Closterium', 'Closteriaceae', 'Conjugatophyceae', 'Células de 72 a 1700 micras de largo', 'Unicelular', 'Células solitarias con forma de medialuna.', 'Célula sin istmo (constricción media profunda).', 'Células cilindricas-fusiformes, elongadas', 'Extremos agudos, redondeados o truncados.', 'Pared lisa o con estrías o costas longitudinales, de celulosa.', 'Dos, uno en cada hemicélula.', 'Pocos o varios', null);
INSERT INTO `input_data` VALUES ('7', 'Cosmarium', 'Desmidiaceae', 'Conjugatophyceae', 'Células que fluctúan entre 9 a 210 micras.', 'Unicelular', 'Células solitarias, raramente en cadenas variables en tamaño, usualmente más largas que anchas.', 'Célula con istmo (constricción media profunda).', 'Células sin procesos', 'Hemicélulas de contornos variables, elípticas.', 'Pared lisa, punctada, excroviculada, verrucosa o papilosa, de celulosa.', 'Dos, uno en cada hemicélula, con forma lobulada.', 'Uno o dos, de gran tamaño', null);
INSERT INTO `input_data` VALUES ('8', 'Micrasterias', 'Desmidiaceae', 'Chlorophyceae', 'Células de 60 hasta 400 micras de largo', 'Unicelular', 'Células solitarias, de tamaño variable de contorno subcircular, generalmente muy comprimidas y profundamente contraídas en la parte media.', 'Célula con istmo (constricción media profunda).', 'Más largas que anchas', 'Hemicélulas semicirculares, en general con 5 lóbulos (algunas veces 3).', 'Pared lisa o con poros/escrobiculaciones o espinas, de celulosa.', 'Dos, uno en cada hemicélula.', 'Varios', null);
INSERT INTO `input_data` VALUES ('9', 'Staurastrum', 'Desmidiaceae', 'Conjugatophyceae', 'Células de 9 a 210 micras de largo.', 'Unicelular', 'Células solitarias, usuamente de simetría radial y contraídas en la región media.', 'Células generalmente más largas que anchas.', 'Con procesos, es decir, con  ápices a veces prolongados en apéndices en forma de brazos.', 'Hemicélulas fusiformes, o poligonales en vista polar.', 'Pared lisa, punctada, escrobiculada, granulada o con espinas, de celulosa.', 'Dos, uno en cada hemicélula.', 'Uno central', null);
INSERT INTO `input_data` VALUES ('10', 'Melosira', 'Melosiraceae', 'Bacillariophyceae', 'Células de 8 a 35 micras de diámetro', 'Colonia', 'Colonia tipo filamento, uniseriados, con frústulos formando largas colonias unidos por la cara valvar. Los filamentos siempre se presentan en vista conectival.', 'Frústulo de sílice constituído por 2 valvas. Células cilindricas, variables en la razón alto-ancho, robustas.', 'Células unidas en pares, con poca ornamentación.', 'Células con cintura hialina.', 'Sílice', 'Numerosos cloroplastos lobulados', 'N/A', null);
INSERT INTO `input_data` VALUES ('11', 'Nostoc', 'Nostocaceae', 'Cyanophyceae', 'Células de 4 a 7,5 micras de diámetro', 'Colonia', 'Colonia tipo filamento agrupado en cenobio, enrrollados y entrelazados, matriz gelatinosa, menbranosa o irregularmente lobulada, globulada, gruesa y firme.', 'Células cilindricas ó con forma de barril, embebida en un grueso y copioso mucílago.', 'El tricoma presenta células vegetativas y heterocistos  terminales o  intercalares', 'Tricoma sin diferenciación basal distal.', 'Ausente', 'N/A', 'N/A', null);
INSERT INTO `input_data` VALUES ('12', 'Oscillatoria', 'Oscillatoriaceae', 'Cyanophyceae', 'Tricomas de 4 a 60 micras de ancho', 'Colonia', 'Colonia tipo filamento, solitarios o agregados, derechos o flexibles, contraídos o no a través de tabiques transversales. Desprovistos de vaina y ocacionalmente pueden presentar vainas, hialinas finas o mucosas.', 'Células adyacentes unidas, y células terminales con o sin cofia.', 'Células cortas cilíndricas o discoides (siempre más cortas que anchas), estrechadas o no, en las paredes cruzadas.', 'Células con granulación fina o con gránulos solitarios.', 'Sin pared', 'N/A', 'N/A', null);
INSERT INTO `input_data` VALUES ('13', 'Ulothrix', 'Ulotrichaceae', 'Ulvophyceae', 'Células entre 5 a 45 micras de ancho y de 5 a 60 micras de largo.', 'Colonia', 'Colonia tipo filamento, con filamento uniseriado libre flotante, en estado adulto. En estado juvenil presenta filamento fijo sin célula ápical diferenciada.', 'Células uninucleadas, cilindricas.', 'Células con diferenciación basal, en algunas es pecies.', 'N/A', 'Pared delgada a gruesa raramente presenta tabiques en forma de H en sección óptica longitudinal.', 'Uno parietal en forma de anillo incompleto. El cloroplasto envuelve la mitad o las 3/4 partes de la circunsferencia de la célula.', 'Uno ó muchos', null);
INSERT INTO `input_data` VALUES ('14', 'Mougeotia', 'Zygnemataceae', 'Conjugatophyceae (Zygnematophyceae)', 'Células entre 10 a 21 micras de diámetro y de 50 a 250 micras de largo', 'Colonia', 'Colonia tipo filamento, con filamentos uniseriados entrelazados formando grandes madejas.', 'Célula alargada, cilindrica.', 'Células sin diferenciación basal distal', 'N/A', 'Pared celular con dos capas internas de celulosa.', 'Un cloroplasto, de forma laminar y parietal.', 'Numerosos pirenoides distribuidos al azar, ya sea axiales o esparcidos sobre la superficie.', null);
INSERT INTO `input_data` VALUES ('15', 'Spirogyra', 'Zygnemataceae', 'Conjugatophyceae (Zygnematophyceae)', 'Células de 10 a 200 micras de diámetro', 'Colonia', 'Colonia tipo filamento, con filamentos simples, uniseriado, a veces con rizoides en la base.', 'Células cilindricas, cortas a muy largas en algunas especies.', 'Con tabiques transversales planos, o de repliegue anular, repliegue unilateral o semireplegado.', 'Tabique con diafragma o doble cofia.', 'Pared celular de dos capas con celulosa interna, capa externa de mucílago que hace filamentos muy viscosos.', 'Uno a 16 cloroplastos, parietales y espiralados.', 'Numerosos', null);
INSERT INTO `input_data` VALUES ('16', 'Zygnema', 'Zygnemataceae', 'Conjugatophyceae (Zygnematophyceae)', 'Células con 10 a 50 micras de diámetro y de 20 a 30 micras', 'Colonia', 'Colonia tipo filamento, con filamentos no ramificados.', 'Células  iguales o varias veces mas largas que anchas, cilindricas, cortas o largas.', 'Celulas de paredes transversales planas y rodeadas de una banda mucilaginosa', 'N/A', 'Pared celular de dos capas con celulosa interna, capa externa de mucílago.', 'Dos estrellados y de posición axial.', 'Uno central de gran tamaño', null);
