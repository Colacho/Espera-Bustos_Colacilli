-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 25, 2022 at 02:03 AM
-- Server version: 5.7.33
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `isft38`
--

--
-- Dumping data for table `sedes`
--

INSERT INTO `sedes` (`id`, `descripcion`, `calle`, `numero`, `ciudad`, `sedeimagen`, `created_at`, `updated_at`) VALUES
(1, 'Sede Central San Nicolás', 'Av. Central', '1825', 'San Nicolás de los Arroyos', '', NULL, NULL);


--
-- Dumping data for table `anios`
--

INSERT INTO `anios` (`id`, `anio`, `descripcion`, `created_at`, `updated_at`) VALUES
(1, 1, 'PRIMERO', NULL, NULL),
(2, 2, 'SEGUNDO', NULL, NULL),
(3, 3, 'TERCERO', NULL, NULL);

--
-- Dumping data for table `carreras`
--

INSERT INTO `carreras` (`id`, `descripcion`, `anios`, `resolucion`, `texto`, `imagen`, `nombre_carpeta`, `created_at`, `updated_at`) VALUES
(1, 'Tecnicatura Superior en Logística', '3', '1557/08', 'Es el profesional capacitado para gestionar, diseñar, implementar, evaluar y optimizar los procesos que componen la administración del flujo de materiales y servicios desde el proveedor hasta el cliente. Tendrá la capacidad de implementar técnicas que faciliten la toma de decisiones y procedimientos para la gestión en el área, de acuerdo a los marcos conceptuales que sustentan los principios y normas pertinente al campo de la logística.', '', '', NULL, NULL),
(2, 'Tecnicatura Superior en Análisis de Sistemas', '3', '6790/19', 'Es el profesional capacitado para diagnosticar necesidades, diseñar, desarrollar, poner en servicio y mantener productos, servicios o soluciones informáticas acorde a los requerimientos de las organizaciones.\r\n\r\nTendrá la capacidad de diagnosticar el conflicto de una organización, podrá ordenar sus recursos y actividades, además diseñar y desarrollar sistemas informáticos.', '', '', NULL, NULL),
(3, 'Tecnicatura Superior en Administración Contable', '3', '273/03', 'El Técnico Superior en Administración Contable es un profesional que estará capacitado para desarrollar las competencias para: organizar, programar, ejecutar y controlar las operaciones comerciales, financieras y administrativas de la organización; elaborar, controlar y registrar el flujo de información; organizar y planificar los recursos referidos para desarrollar sus actividades interactuando con el entorno y participando en la toma de decisiones relacionadas con sus actividades. Coordinando equipos de trabajo relacionado con su especialidad. Estas competencias serán desarrolladas según las incumbencias y las normas técnicas y legales que rigen su campo profesional.', '', '', NULL, NULL),
(4, 'Tecnicatura Superior en Administración de Recursos Humanos\r\n', '3', '11/11', 'Es el profesional capacitado para organizar, programar, planificar y ejecutar diversas actividades del sector de Recursos Humanos de las organizaciones en las cuales se inserte. Tendrá la capacidad de organizar, programar, ejecutar y controlar en las áreas de desarrollo de dirección y planeamiento, producción, recursos humanos, financiamiento, contabilización, gestión integral dentro de los distintos tipos de organización.', '', '', NULL, NULL),
(5, 'Tecnicatura Superior en Gestión Ambiental y Salud', '3', '123/12', 'Es el profesional con formación científica, tecnológica y ética, competente para la intervención en los procesos técnicos y específicos del campo de la gestión ambiental. Diseñará y ejecutará planes y programas tendientes a la vigilancia ambiental y sanitaria, en ámbitos urbanos y rurales.\r\n\r\nTendrá la capacidad de coordinar actividades de protección y promoción de la salud ambiental e implementar estrategias de atención primaria.', '', '', NULL, NULL),
(6, 'Tecnicatura Superior en Higiene y Seguridad en el Trabajo', '3', '11/111', 'Es el profesional capacitado para el asesoramiento a reparticiones, empresas y asociaciones profesionales en todo lo concerniente a su actividad. Estará habilitado para controlar el cumplimiento de las normas de seguridad e higiene en el trabajo en el área de su competencia, adoptando las medidas preventivas de acuerdo a cada tipo de industria o actividad. Tendrá la capacidad de elaborar normas manuales de higiene y seguridad en el trabajo, además de realizar tareas de investigación y desarrollo para el mejor desenvolvimiento de su labor.', '', '', NULL, NULL),
(7, 'Tecnicatura Superior en Laboratorio de Análisis Clí­nicos', '3', '44/999', '\r\nEl Técnico Superior en Laboratorio de Análisis Clínicos es competente, de acuerdo a las actividades que se desarrollan, para:\r\n\r\n- Atender a la persona y obtener materiales biológicos para su análisis, aportando a la producción de información a través de la ejecución de procedimientos analíticos y la gestión del proceso de su trabajo.\r\n\r\n- Involucrarse en los procesos de mejora continua.\r\n\r\nTodo ello con la supervisión del/la Bioquímico/a o Profesional universitario a cargo del laboratorio habilitado.\r\n\r\nComo profesional de la salud, su práctica profesional está caracterizada por una actitud reflexiva, crítica, ética y humanística basada en una concepción integral del hombre propendiendo a mejorar la calidad de vida de la población.', '', '', NULL, NULL),
(8, 'Tecnicatura Superior en Mantenimiento Industrial', '3', '45/55', 'Es el profesional que tendrá como propósito identificar problemas, buscar alternativas y tomar decisiones ante la presencia de fallas. A su vez, estará habilitado para evaluar situaciones y diseñar propuestas de mejora en el mantenimiento. Tendrá la capacidad de la organización del trabajo propio y de los otros a su cargo. Podrá formular y ejecutar planes de mantenimiento preventivo y predictivo óptimos, en función de los mecanismos de deterioros detectados. Tendrá además la habilidad para inspeccionar e identificar el estado de deterioro de un equipo para lograr su restauración, mejorando la confiabilidad y mantenibilidad del mismo.', '', '', NULL, NULL);

--
-- Dumping data for table `historias`
--

INSERT INTO `historias` (`id`, `historia`, `sede_id`, `created_at`, `updated_at`) VALUES
(2, 'Gracias a las iniciativa de un grupo de personas, surge en el año 1972 la necesidad de la creación del Instituto de Formación Técnica Nº 38, destinado a la enseñanza técnica de nivel superior para los habitantes de nuestra zona.\r\n\r\nPor entonces se vislumbró que la estructura interna del sector productivo, había alcanzado un grado de heterogeneidad mucho mayor que el que tuviera hasta ese momento, generando en consecuencia, un estancamiento del volumen de mano de obra especializado, para las ramas más dinámicas de la industria y el comercio. Con el objeto de satisfacer la demanda de ocupaciones que requerían niveles educacionales específicos de alta calificación, se canalizaron los objetivos al sector de servicios. También se tuvieron en cuenta la realidad económica y las crecientes aspiraciones de las personas del lugar, que deseaban mejorar su nivel técnico-formativo.\r\n\r\nComo consecuencia del deterioro de la situación económica de nuestra zona y alrededores, cada vez fue mayor la cantidad de jóvenes egresados de escuelas secundarias que dejaban de emigrar hacia las grandes urbes en busca de una Educación Superior, volcándose a las nuevas e interesantes carreras que la región demandaba, asegurando amplios campos laborales y futuro a sus egresos.De esta manera, los estudiantes no solo no afectaban el presupuesto familiar (viajando, manteniendo viviendas en grandes ciudades) sino también podían contribuir a la economía familiar realizando alguna actividad laboral.\r\n\r\nEste cúmulo de circunstancias ayudaron a definir los ejes que permitieron enfocar un nuevo tratamiento de la Educación Superior. Atento a lo expuesto, el 28 de noviembre de 1972 el entonces Ministerio de Educación de la Provincia de Buenos Aires emitió la resolución Nª 2965/72 que dispuso la creación del establecimiento.\r\n\r\nEste Instituto superior, se caracterizó por la flexibilidad estructural desde que, en el año 1973, comenzó su actividad académica con el dictado de las Licenciaturas en Administración de Empresas y en administración de personal. En 1979, se reestructura con carreras de Técnicos Superiores (Análisis de Sistemas, Administración de Empresas, Seguridad e Higiene Industrial y Mantenimiento Mecánico). A partir de 1982 se inicia el dictado de las carreras de Formación Docente, comenzando con la carrera de Asistente Educacional y, en 1988, Magisterio Especializado en Educación de Adultos. Para los docentes en actividad desde 1985 se implementaron carreras con modalidad “no residentes” (Actualización Docente, Conducción de servicios Educativos, Supervisión de servicios educativos, Supervisión de Servicios Educativos y Capacitación Docente Nivel I y Nivel II). Con las mismas características se abrió en 1991 la carrera de bibliotecnología (Auxiliar, Escolar y Profesional). Paralelamente desde 1985 se inició el distado de carreras regulares como el Profesorado en Psicopedagogía y en 1992 el Profesorado de Educación Física. En 1994 se dictó Capacitación Docente nivel III, orientada especialmente a los profesores de la casa (egresados universitarios) para mejorar su quehacer pedagógico. En el mismo año se crea la Extensión Ramallo, con el dictado de las carreras Técnico Superior en Administración de Empresas y el Profesorado Especializado en jardín maternal. El curso de Operador de PC para los internos de la Unidad Penal Nª3 en la Extensión allí creada en 1991, continúa desarrollándose desde esa fecha.\r\n\r\nA partir de 1997, el Instituto Superior Nª38 volvió a ser exclusivamente técnico y actualmente se dictan las carreras de Analista de Sistemas de Información y Analista en Administración de Empresas, en la Sede Central; Analista en Administración de Empresas y Operador de PC, en la extensión Ramallo y Operador de PC, en la Extensión Unidad Penal Nª3. En 1998 se da apertura a la carrera de Técnico Superior en Seguridad, Higiene y Control Ambiental Industrial.\r\n\r\nLa Institución pretende contar con los mejores recursos técnicos pedagógicos, y para llevar adelante esta propuesta, cuenta con profesores de primer Nivel, una tradición académica de consideración, una creciente actividad en la capacitación de su personal y un incondicional apoyo de su asociación Cooperadora y del Centro de Estudiantes.', 1, NULL, NULL);


--
-- Dumping data for table `objetivos`
--

INSERT INTO `objetivos` (`id`, `objetivo`, `sede_id`, `created_at`, `updated_at`) VALUES
(1, '<p><strong>Objetivos generales</strong></p>\r\n<p>Proporcionar a nuestros estudiantes una adecuada orientacion personal y profesional en funci&oacute;n de los requerimientos de la Empresa, de la ciudad, la zona y la regi&oacute;n.</p>\r\n<p>Proporcionar a nuestros estudiantes la adquisici&oacute;n de t&eacute;cnicas de trabajo, intelectual que le permita acceder a la informaci&oacute;n a su uso de manera progresivamente m&aacute;s autonoma.</p>\r\n<p>Brindar h&aacute;bitos de trabajo responsable.</p>\r\n<p>Preparar profesionales capacitados para competir en el mercado laboral.</p>\r\n<p>&nbsp;<strong>Objetivos de la carreras</strong></p>\r\n<p>Formar recursos humanos capaces de insertarse laboralmente en el mercado.</p>\r\n<p>Proporcionar formaci&oacute;n especializada y de car&aacute;rter interdisciplinario en las diferentes &aacute;reas de la Ciencia y Tecnolog&iacute;a.</p>\r\n<p>Promover la capacitaci&oacute;n, actualizaci&oacute;n y especializaci&oacute;n T&eacute;cnico &ndash; Profesional.</p>\r\n<p>Acceder a un permanente incremento de los niveles de calidad y eficiencia, de la Educacion Superior T&eacute;cnica.</p>\r\n<p>&nbsp;<strong>Objetivos institucionales</strong></p>\r\n<p>Proponemos una gestion institucional democr&aacute;tica regida por los principios de participaci&oacute;n y transparencia, participando a los estudiantes de reuniones con el CAI, Centro de estudiantes, ya que entendemos que los estudiantes son sujetos activos en los procesos de ense&ntilde;anza y aprendizaje.</p>\r\n<p>Buscamos acomodar las estrategias de ense&ntilde;anza a las necesidades de nuestos estudiantes, atendiendo las necesidad del alumnado respondiendo tambi&eacute;n al perfil del egresado que busca el mercado productivo y de servicio local, zonal y regional.</p>\r\n<p>Tenemos como objetivo proporcionar a nuestros estudiantes una adecuada orientaci&oacute;n profesional y una &oacute;ptima capacitaci&oacute;n.</p>\r\n<p>Indicio de todas estas pr&aacute;cticas son los cursos que se dictan en la instituci&oacute;n, la mayoria destinado a los estudiantes (tambi&eacute;n hay abiertos a la comunidad), como por ejemplo el curso de incendio, el de riesgo escolar o los de prevenci&oacute;n auditiva.</p>', 1, NULL, NULL);

--
-- Dumping data for table `sedeemails`
--

INSERT INTO `sedeemails` (`id`, `email`, `sede_id`, `created_at`, `updated_at`) VALUES
(1, 'info@isft38.edu.ar', 1, NULL, NULL),
(2, 'secretaria@isft38.edu.ar', 1, NULL, NULL);

--
-- Dumping data for table `sedetelefonos`
--

INSERT INTO `sedetelefonos` (`id`, `caracteristica`, `numero`, `sede_id`, `created_at`, `updated_at`) VALUES
(1, '0336', '4492188', 1, NULL, NULL),
(2, '0336', '4462857', NULL, NULL, NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
