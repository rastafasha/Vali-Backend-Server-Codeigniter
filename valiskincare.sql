-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 31-07-2020 a las 11:33:04
-- Versión del servidor: 5.6.48-cll-lve
-- Versión de PHP: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `valiskincare`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `antiages`
--

CREATE TABLE `antiages` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `titleesp` varchar(255) NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `description` text,
  `descriptionesp` text NOT NULL,
  `price` varchar(255) NOT NULL,
  `popup` varchar(255) NOT NULL,
  `button` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `is_featured` tinyint(1) NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `created_at` datetime NOT NULL,
  `textFinanc` varchar(255) NOT NULL,
  `textFinancEsp` varchar(255) NOT NULL,
  `is_activeTf` varchar(255) NOT NULL,
  `target` varchar(255) NOT NULL,
  `buttonEs` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `antiages`
--

INSERT INTO `antiages` (`id`, `title`, `titleesp`, `user_id`, `category_id`, `description`, `descriptionesp`, `price`, `popup`, `button`, `image`, `is_featured`, `is_active`, `created_at`, `textFinanc`, `textFinancEsp`, `is_activeTf`, `target`, `buttonEs`) VALUES
(1, 'free Consultation Appointment ', 'Consulta Gratuita', 1, 1, '<p>Let our skin experts help you choose the perfect treatment with your face or body concern in your visit. Our first consultation is FREE, No Obligation, if you agree with the recommendation we will do the treatment the same day or we schedule a new appointment.&nbsp;<br><br><i><strong>Let yourself, come, relax and enjoy with us!!</strong></i></p>', '<p>Deje que nuestros expertos en piel lo ayuden a elegir el tratamiento perfecto para su rostro o cuerpo cuando nos visite. Nuestra primera cita es GRATUITA, Sin Obligación. Si está de acuerdo con la recomendación haremos el tratamiento el mismo día o programaremos una nueva cita.&nbsp;</p><p>&nbsp;</p><p><i><strong>Déjate llevar, relájate y disfruta con nosotros!</strong></i></p>', 'Free', 'modal', '/booking-facial', '1_FREE-CONSULTATION.jpg', 1, 1, '2018-10-27 04:12:09', 'test', 'test', 'displayNone', '_self', '/es/booking-facial'),
(2, 'Smoothing Eye Treatment With Collagen', 'Tratamiento para ojos con colágeno.', 1, 1, '<p>Counteract puffiness and dark circles with an instant release collagen Bio matrix infused with Ginko Biloba. This natural Fiber Mask Treatment increases periorbital circulation, soothes, cools, and decongests the fragile eye contour, while visibly reducing puffiness and dark circles through collagen eye gel pads. Your eyes will look visibly rejuvenated.&nbsp;<br><br>Each treatment performed requires at-home care to see better results in the short term. The use of sunscreen is important to prevent damage to the skin.</p>', '<p>Reduce, regenera, combate los síntomas de cansancio con Ginko Biloba. Este tratamiento natural de mascarilla de fibra natural aumenta la circulación peri orbital, calma, refresca y descongestiona el frágil contorno de los ojos, mientras que reduce la hinchazón y las ojeras debido que añadimos almohadillas de gel con la matriz Bio de colágeno de liberación instantánea . Los ojos se vuelven visiblemente rejuvenecidos. Esta terapia es ideal para personas con falta de sueño y <i>jet lag</i></p><p>&nbsp;</p><p>En cada tratamiento debemos realizar el debido cuidado en el hogar para ver mejores resultados a corto plazo. Importante el uso de protector solar para evitar daños en la piel.</p>', '50.00', 'Smoothing', '/booking-facial', '2_SMOOTHING-EYE-TREATMENT-WITH-COLLAGEN.jpg', 1, 1, '2018-10-27 06:12:09', 'test', 'test', 'displayNone', '_self', '/es/booking-facial'),
(3, 'Anti Aging Collagen Treatment', 'Tratamiento anti edad con colágeno.', 1, 2, '<p>Anti-age treatment with collagen. Our anti-aging facial treatment tones and introduces to the skin a veil of collagen, cell complexes, amino acids, vitamins and natural oils to help increase the level of moisture and minimize the appearance of fine lines and wrinkles. Feel refreshed! A special refreshing for your skin, relives stressed, dehydrated and overworked skin in minutes. In this treatment a hyaluronic acid booster is necessary. It is a breath of fresh air for the skin of your face. Ideal for dehydrated and aged skin.</p>', '<p>Nuestro tratamiento facial antienvejecimiento tonifica e introduce a la piel un velo de colágeno, complejos celulares, aminoácidos, vitaminas y aceites naturales para ayudar a aumentar el nivel de humedad y minimizar la aparición de líneas finas y arrugas. Siéntete renovado! Un refrescamiento especial para tu piel, revive la piel estresada, deshidratada y con exceso de trabajo en minutos. En este tratamiento es necesario un refuerzo de Ácido Hialurónico. Es un soplo de aire fresco para la piel de tu rostro. Ideal para pieles deshidratadas y envejecidas</p><p>&nbsp;</p><p>En cada tratamiento debemos realizar el debido cuidado en el hogar para ver mejores resultados a corto plazo. Importante el uso de protector solar para evitar daños en la piel.</p>', '85.00', 'modal2', '/booking-facial', '3_ANTI-AGING-COLLAGEN-TREATMENT.jpg', 1, 1, '2018-10-27 07:12:09', 'test', 'test', 'displayNone', '_self', '/es/booking-facial'),
(4, 'Carbonic Co2 Gel Facial Therapy ', 'Terapia facial con gel de Carbón y Co2', 1, 2, '<p>A facial followed by a CO2 mask. When we apply CO2 to the skin, we make our body think that this area needs more oxygen. Blood then rushes to our skin and delivers a large amount of oxygen. In this case, you will notice wrinkle reduction and the prevention of new ones forming. Also, moisturized skin and a lifting effect will be seen. If you have sun damage, dark spots, or age spots, it will remove them from the skin and the look of the skin will be better.&nbsp;<br><br>Each treatment performed requires at-home care to see better results in the short term. The use of sunscreen is important to prevent damage to the skin.</p>', '<p>Acá realizaremos un facial seguido de una máscara de CO2. Cuando aplicamos CO2 a la piel, hacemos que nuestro cuerpo piense que esta área necesita más oxígeno, Se notará instantáneamente una reducción de arrugas evitando así que se formen nuevas, la piel quedara hidratada, con un efecto lifting. Si tiene daño solar, manchas oscuras, o manchas por la edad, las eliminará poco a poco y su apariencia en la piel será mucho más saludable. Recomendado para pieles flácidas con daño solar , deshidratadas y opacas&nbsp;</p><p>&nbsp;</p><p>En cada tratamiento debemos realizar el debido cuidado en el hogar para ver mejores resultados a corto plazo. Importante el uso de protector solar para evitar daños a nuestra piel.</p>', '90.00', 'Carbonic', '/booking-facial', '4_CARBONIC-CO2-GEL-FACIAL-THERAPY.jpg', 1, 0, '2018-10-27 09:12:09', 'test', 'test', 'displayNone', '_self', '/es/booking-facial'),
(5, 'Nourishment & Antioxidant Vitaolive treatment', 'Tratamiento Antioxidante para nutrir la piel con Vitaolive.', 1, 7, '<p>This treatment is perfect because it has a firming, tensor and decongestant effect on the skin. It provides the necessary components to keep the skin smooth, soft, fresh, safe and tonicity with moisturizing, active, antioxidant and moisturizing effect.</p>', '<p>Este tratamiento es perfecto porque tiene un efecto reafirmante, tensor y descongestionante en la piel. Proporciona los componentes necesarios para mantener la piel suave, fresca, segura y tonificada con efecto hidratante activo y antioxidante. Para pieles hiperpigmentadas con daños (actínico) por los rayos UV</p>', '100.00', 'Nourishment', '/booking-facial', '5_NOURISHMENT--ANTIOXIDANT-VITAOLIVE-TREATMENT1.jpg', 1, 0, '2018-10-27 10:12:09', 'Or monthly payment from $10 ', 'O pago mensual desde $10 ', 'displayBlok', '_self', '/es/booking-facial'),
(6, 'Hydration Boost', 'Terapia para impulsar la hidratación de tu rostro', 1, 0, '<p>Therapy to Boost Hydration of Your Face Excellent anti-aging treatment, for mature skin, with dry signs, dehydrated skin and wrinkles. Improve skin texture, hydrate, add volume and rejuvenate with our special Hydra machine for a luxurious facial treatment, applying hyaluronic acid and closing with our hydration mask to control expression lines.&nbsp; For dry skin, with mature and devitalized wrinkles.&nbsp; &nbsp;&nbsp;</p><p>Each treatment performed requires at-home care to see better results in the short term. The use of sunscreen is important to prevent damage to the skin.</p>', '<p>Excelente tratamiento anti edad, para pieles maduras, con signos secos, pieles deshidratadas y con arrugas. Mejore la textura de la piel, hidrate, agregue volumen y rejuvenezca con nuestra máquina especial Hidra para un tratamiento facial de lujo, aplicando ácido hialurónico y cerrando con nuestra máscara de hidratación para el control de las líneas de expresión.</p><p>Para pieles secas , con arrugas maduras y desvitalizadas.</p><p>&nbsp;</p><p>En cada tratamiento debemos realizar el debido cuidado en el hogar para ver mejores resultados a corto plazo. Importante el uso de protector solar para evitar daños en la piel.</p>', '100.00', 'Hydration', '/booking-facial', '6_HYDRATION-6-BOOST.jpg', 1, 1, '2019-07-28 03:43:17', 'Or monthly payment from $10 ', 'O pago mensual desde $10 ', 'displayBlok', '_self', '/es/booking-facial'),
(7, 'Firming And Contouring Facial', 'Facial reafirmante y contorneado.', 1, 0, '<p>Our unique firming and contouring facial consists of using a micro current device that can temporarily tight muscles in the face for a more lifted appearance. It may sound intense but it is super relaxing. We end our treatment by applying an exfoliating hydrating cream and a boost of hyaluronic acid with a peel off hydro jelly mask, according to your skin type.&nbsp;<br><br>Each treatment performed requires at-home care to see better results in the short term. The use of sunscreen is important to prevent damage to the skin.</p>', '<p>Nuestro exclusivo tratamiento facial reafirmante y de contorneado consiste en utilizar un dispositivo de micro corriente que puede tensar temporalmente los músculos de la cara para una apariencia más firme. Suena intenso pero es súper relajante. Finalizamos nuestro tratamiento aplicando un exfoliante, una crema hidratante y un refuerzo de ácido hialurónico con una mascarilla a base de hidratante de acuerdo con su tipo de piel.&nbsp;</p><p>&nbsp;</p><p>En cada tratamiento debemos realizar el debido cuidado en el hogar para ver mejores resultados a corto plazo. Importante el uso de protector solar para evitar daños en la piel.</p>', '100.00', 'Firming', '/booking-facial', '7_FIRMING-AND-CONTOURING-FACIAL.jpg', 1, 1, '2019-07-28 03:44:02', 'Or monthly payment from $10 ', 'O pago mensual desde $10 ', 'displayBlok', '_self', '/es/booking-facial'),
(8, 'Micro Retinol Revitalize Special Treatment', 'Tratamiento revitalizante con Micro Retinol', 1, 0, '<p>Amplify the results and recover the luminosity with an insurmountable formula. This high-performance treatment combines a powerful and smooth exfoliation and a treatment with micro retinol to instantly recover a smoother, denser and younger skin. This luxury treatment is ideal for the refinement of the skin and the renewal of aging skin. We recommend it once a year for its powerful ingredients, preferably between the months of August and March.&nbsp;<br><br>Each treatment performed requires at-home care to see better results in the short term. The use of sunscreen is important to prevent damage to the skin.</p>', '<p>Aumente los resultados y recupere la luminosidad desu piel con una fórmula insuperable, este tratamiento de alto rendimiento combina una exfoliación potente y suave con un tratamiento que incluye micro retinol para recuperar instantáneamente una piel más suave, densa y joven. Este tratamiento de lujo es ideal para el refinamiento de la piel y la renovación del envejecimiento. Lo recomendamos una vez al año por sus poderosos ingredientes, preferiblemente entre los meses de agosto y marzo. Ideal para pieles maduras y&nbsp; envejecidas&nbsp;</p><p>&nbsp;</p><p>En cada tratamiento debemos realizar el debido cuidado en el hogar para ver mejores resultados a corto plazo. Importante el uso de protector solar para evitar daños en la piel.</p>', '120.00', 'Micro', '/booking-facial', '8_MICRO-RETINOL-REVITALIZE-SPECIAL-TREATMENT.jpg', 1, 0, '2019-07-28 03:44:41', 'test', 'test', 'displayNone', '_self', '/es/booking-facial'),
(9, 'Micro Retinol Revitalize Special Treatment Package – 12 Sessions', 'Paquete de Tratamiento Especial con Micro Retinol - 12 sesiones', 1, 0, '<p>For amazing results we recommend carrying out (12 sessions) preferably between the months from August to March.&nbsp;<br><br>Amplify the results and recover the luminosity with an insurmountable formula, this high-performance treatment combines a powerful and gentle exfoliation with micro retinol to instantly recover smoother, denser and younger skin. In this service, it is ideal for the refinement of the skin and the renewal of the aged skin that we suggest a package with high quality products.&nbsp;<br><br>You should avoid sunlight for a few weeks afterwards. When outdoors, use a broad-spectrum sunscreen with an SPF of 30 or more, and wear a wide-brimmed hat.</p>', '<p>Creamos esta opción de 12 sesiones para resultados asombrosos,&nbsp; preferiblemente entre los meses de agosto a marzo. Aumente los resultados y recupere la luminosidad con una fórmula insuperable, este tratamiento de alto rendimiento combina una exfoliación potente y suave con micro retinol para recuperar instantáneamente una piel más suave, más densa y más joven. En este servicio, es ideal para el refinamiento de la piel y la renovación de la piel envejecida que sugerimos un paquete con productos de alta calidad.&nbsp;</p><p>&nbsp;</p><p>Debes evitar la luz del sol por unas semanas después. Cuando esté al aire libre, use un protector solar de amplio espectro con un SPF de 30 o más, y use un sombrero de ala ancha</p>', '1,200.00', 'Micro12', '/booking-facial', '9_MICRO-RETINOL-REVITALIZE-SPECIAL-TREATMENT-PACKAGE–12-SESSIONS.jpg', 1, 0, '2019-07-28 03:45:19', 'test', 'test', 'displayNone', '_self', '/es/booking-facial'),
(10, 'Radiant Deluxe', 'Tratamiento de lujo para una piel Radiante  ', 1, 0, '<p>This rejuvenating facial will decrease the appearance of fine lines and wrinkles by tightening your skin and restoring collagen. It will hydrate, lift, clear, lighten and renew the skin.&nbsp;<br><br>We use a RF session for this treatment, which increases the skin’s elasticity by repairing damaged fibers and promoting the formation of natural collagen. It also increases blood flow circulation to treated areas, which can aid in the reduction of adipose (fat storing) tissue.&nbsp;<br><br>Each treatment performed requires at-home care to see better results in the short term. The use of sunscreen is important to prevent damage to the skin.</p>', '<p>Este facial rejuvenecedor disminuirá la apariencia de líneas finas y arrugas al tensar la piel y restaurar el colágeno. Hidratar, levantar, aclarar y renovar la piel.</p><p>&nbsp;</p><p>Utilizamos una sesión de RF para este tratamiento, que aumenta la elasticidad de la piel al reparar las fibras dañadas y promueve la formación de colágeno natural. También puede aumentar la circulación del flujo sanguíneo a las áreas tratadas, lo que ayudará a reducir el tejido adiposo (almacenamiento de grasa). Excelente para pieles secas, deshidratadas, con líneas de expresión, desvitalizadas y con manchas&nbsp;acnicas.&nbsp;</p><p>&nbsp;</p><p>En cada tratamiento debemos realizar el debido cuidado en el hogar para ver mejores resultados a corto plazo. Importante el uso de protector solar para evitar daños en la piel.</p>', '130.00', 'Radiant', '/booking-facial', '10_RADIANT-DELUXE.jpg', 1, 1, '2019-07-28 03:45:58', 'Or monthly payment from $10 ', 'O pago mensual desde $12', 'displayBlok', '_self', '/es/booking-facial'),
(11, 'Caviar Anti Aging Treatment', 'Tratamiento antiarrugas con caviar.', 1, 0, '<p>Wrinkle Treatment With Caviar. We prepare a luxury treatment with the VIP ingredient Caviar that has rejuvenating properties. It is also appreciated for the deep protection and repair effects it gives to the skin. It is essential for cell membranes and is also enriched with amino acids vitamins, minerals and trace elements. It is designed for mature and dry skin, we use repair serums, masks to improve the vitality, hydration and promote the radiance of your skin.&nbsp;</p><p>&nbsp;</p><p>Each treatment performed requires at-home care to see better results in the short term. The use of sunscreen is important to prevent damage to the ski</p>', '<p>Preparamos un tratamiento de lujo con el ingrediente VIP \"Caviar\" que tiene propiedades rejuvenecedoras. También es apreciado por los efectos de protección y reparación profunda que da a la piel. Es fundamental para las MEMBRANAS celulares y además está enriquecido con aminoácidos y vitaminas, minerales y oligoelementos. Está formulado para pieles maduras y secas, utilizamos Serums reparadores, máscaras para mejorar la vitalidad, hidratación y promover el resplandor de su piel.&nbsp;</p><p>&nbsp;</p><p>En cada tratamiento debemos realizar el debido cuidado en el hogar para ver mejores resultados a corto plazo. Importante el uso de protector solar para evitar daños en la piel.</p>', '160.00', 'Caviar', '/booking-facial', '11_CAVIAR-ANTI-AGING-TREATMENT.jpg', 1, 1, '2019-07-28 03:46:41', 'o 6 pagos de 26$', 'o 6 pagos de 26$', 'displayBlok', '_self', '/es/booking-facial'),
(12, 'Beauty Skin Stem Cells Treatment', 'Exclusivo tratamiento con células madres para darle vitalidad a la piel.', 1, 0, '<p>Exclusive treatment with stem cells to give vitality to the skin. This innovative plant-based treatment redefines the anti-aging facial with an infusion of the first mixture of argan stem cells, comfrey and supercharged demagnetizers such as collagen, retinol, elastin and other key assets. This exceptional treatment to reverse age visibly reduces lines and wrinkles, provides a smoother skin surface and prolongs protection of naturally-occurring skin repair stem cells.</p><p>Each treatment performed requires at-home care to see better results in the short term. The use of sunscreen is important to prevent damage to the skin.</p>', '<p>Este innovador tratamiento a base de plantas redefine el facial anti-envejecimiento con una infusión de la primera mezcla de células madres de argán, consuelda y des-magnetizadores sobrealimentados como colágeno, retinol, elastina y otros activos clave. Este excepcional tratamiento para revertir la edad reduce visiblemente las líneas y arrugas, brinda una superficie de la piel más suave y prolonga protección de las células madres naturalmente reparadoras de la piel.</p><p>&nbsp;</p><p>En cada tratamiento debemos realizar el debido cuidado en el hogar para ver mejores resultados a corto plazo. Importante el uso de protector solar para evitar daños en la piel.</p>', '160.00', 'Beauty', '/booking-facial', '12_BEAUTY-SKIN-STEM-CELLS-TREATMENT.jpg', 1, 1, '2019-07-28 03:47:17', ' test', 'test', 'displayNone', '_self', '/es/booking-facial'),
(13, 'Anti Aging Treatments Package - 6 Sessions ', 'Paquete de Tratamientos Anti Envejecimiento - 6 Sesiones', 1, 0, '<p>In this super attractive facial package, a series of treatments are included in each session that will help you improve and leave your skin radiant and prevent anti-aging causing over the years: a luxury facial for radiant, anti-aging skin. Collagen treatment, explosive moisturizing, firming and facial contour, nourishing and Vitaolive antioxidant treatment and we finished the last session with anti-inflammatory and decongestant treatment for the eyes.</p>', '<p>En este paquete facial súper atractivo se incluye en cada sesión una serie de tratamientos que lo ayudarán a mejorar y dejar su piel radiante y evitar el antienvejecimiento causando a lo largo de los años: un facial de lujo para una piel radiante, antiedad. Tratamiento con colágeno, tratamiento hidratante explosivo, reafirmante y contorno facial, nutritivo y<br>tratamiento antioxidante vitaolive y finalizamos la última sesión con tratamiento desinflamante y descongestionante para los ojos</p>', '500', 'antiaging6sessions', '/booking-facial', '13_ANTI_AGING_TREATMENTS_PACKAGE_–_6_SESSIONS.png', 0, 1, '2020-02-10 22:22:47', 'test', 'test', 'displayBlok', '_self', '/es/booking-facial'),
(14, 'Carbonic Co2 Gel Facial therapy ', 'Terapia facial con gel de Carbón y Co2', 1, 0, '<p>A facial followed by a CO2 mask. When we apply CO2 to the skin, we make our body think that this area needs more oxygen. Blood then rushes to our skin and delivers a large amount of oxygen. The results are, wrinkle reduction and the prevention, moisturized skin and a lifting effect. it will also &nbsp;reduce sun damage, dark spots, or age spots and leave you with a skin that looks and feels younger.</p><p>Each treatment performed requires at-home care to see better results in the short term. The use of sunscreen is important to prevent damage to the skin.</p>', '<p><strong>Acá realizaremos un facial seguido de una máscara de CO2. Cuando aplicamos CO2 a la piel, hacemos que nuestro cuerpo piense que esta área necesita más oxígeno, Se notará instantáneamente una reducción de arrugas evitando así&nbsp; que se formen nuevas, la piel quedará hidratada, con un efecto lifting. Si tiene daño solar, manchas oscuras, o manchas por la edad, las eliminará poco a poco y su apariencia en la piel será mucho más saludable. Recomendado para pieles flácidas con daño solar , deshidratadas y opacas&nbsp;</strong></p><p><strong>En cada tratamiento debemos realizar el debido cuidado en el hogar para ver mejores resultados a corto plazo. Importante el uso de protector solar para evitar daños a nuestra piel.</strong></p>', '$', 'factherapy', 'prueba', '4__CARBONIC_CO2_GEL_FACIAL_THERAPY.jpg', 0, 0, '2020-02-17 21:50:43', 'test', 'test', 'displayNone', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `blogs`
--

CREATE TABLE `blogs` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `description` text,
  `image` varchar(255) DEFAULT NULL,
  `is_featured` tinyint(1) NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `user_id`, `category_id`, `description`, `image`, `is_featured`, `is_active`, `created_at`) VALUES
(1, 'Sample blog post 1', 1, 1, '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', 'img1.jpg', 1, 1, '2018-10-27 04:12:09'),
(2, 'Sample blog post 2', 1, 1, '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', 'img2.jpg', 1, 1, '2018-10-27 06:12:09'),
(3, 'Sample blog post 3', 1, 2, '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', 'img3.jpg', 0, 1, '2018-10-27 07:12:09'),
(4, 'Sample blog post 4', 1, 2, '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', 'img4.jpg', 0, 1, '2018-10-27 09:12:09'),
(5, 'Sample blog post 5', 1, 7, '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', 'img5.jpg', 1, 1, '2018-10-27 10:12:09'),
(6, 'Sample blog post 6', 1, 7, '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', 'img6.jpg', 0, 1, '2018-10-27 12:12:09');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bodys`
--

CREATE TABLE `bodys` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `titleesp` varchar(255) NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `description` text,
  `descriptionesp` text NOT NULL,
  `price` varchar(255) NOT NULL,
  `popup` varchar(255) NOT NULL,
  `button` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `is_featured` tinyint(1) NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `created_at` datetime NOT NULL,
  `textFinanc` varchar(255) NOT NULL,
  `textFinancEsp` varchar(255) NOT NULL,
  `is_activeTf` varchar(255) NOT NULL,
  `target` varchar(255) NOT NULL,
  `buttonEs` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `bodys`
--

INSERT INTO `bodys` (`id`, `title`, `titleesp`, `user_id`, `category_id`, `description`, `descriptionesp`, `price`, `popup`, `button`, `image`, `is_featured`, `is_active`, `created_at`, `textFinanc`, `textFinancEsp`, `is_activeTf`, `target`, `buttonEs`) VALUES
(1, 'free Consultation Appointment', 'Consulta Gratuita', 1, 1, '<p>Let our skin experts help you choose the perfect treatment with your face or body concern in your visit. Our first consultation is FREE, No Obligation, if you agree with the recommendation we will do the treatment the same day or we schedule a new appointment.&nbsp;<br><br><i><strong>Let yourself, come, relax and enjoy with us!!</strong></i></p>', '<p>Deje que nuestros expertos en piel lo ayuden a elegir el tratamiento perfecto para su rostro o cuerpo cuando nos visite. Nuestra primera cita es GRATUITA, Sin Obligación. Si está de acuerdo con la recomendación haremos el tratamiento el mismo día o programaremos una nueva cita.&nbsp;</p><p>&nbsp;</p><p><i><strong>Déjate llevar, relájate y disfruta con nosotros!</strong></i></p>', 'Free', 'modal1', '/booking-fibroblast', '1_FREE-CONSULTATION.jpg', 1, 1, '2018-10-27 04:12:09', 'test', 'test', 'displayNone', '_self', '/es/booking-fibroblast'),
(2, 'Knee', 'Rodilla. ', 1, 1, '<p>Tighten upper eyelid wrinkles reduce the fine lines, excess skin and sun spots.</p>', '<p>Ayuda a levantar el exceso de piel alrededor de la rodilla.</p>', '400.00', 'Uppere', '/booking-fibroblast', '2_KNEE.jpg', 1, 1, '2018-10-27 06:12:09', 'test', 'test', 'displayNone', '_self', '/es/booking-fibroblast'),
(3, 'Elbow', 'Codo', 1, 2, '<p>For those with excess and wrinkled skin.</p>', '<p>Para aquellos con exceso de piel y arrugada</p>', '350.00', 'Elbow', '/booking-fibroblast', '3_ELBOW.jpg', 1, 1, '2018-10-27 07:12:09', 'test', 'test', 'displayNone', '_self', '/es/booking-fibroblast'),
(4, 'Hand', 'Manos', 1, 2, '<p>For those with aging appearance and excess of skin.</p>', '<p>Para aquellos con exceso de piel y arrugada</p>', '800.00', 'Hand', '/booking-fibroblast', '4_HAND.jpg', 1, 1, '2018-10-27 09:12:09', 'test', 'test', 'displayNone', '_self', '/es/booking-fibroblast'),
(5, 'Tommy tighten', 'Zona del Estomago', 1, 7, '<p>Ideal for those who have lost weight and now are left with excess saggy skin. if you were pregnant remember that you have to wait at least 9 month before gave birth.</p>', '<p>Ideal para aquellas que han perdido peso y ahora se quedan con exceso de piel holgada. Si estaba embarazada, recuerde que debe esperar al menos 9 meses antes del parto.</p>', 'Starting at $1,000.00', 'Tommy', '/booking-fibroblast', '5_TOMMY-TIGHTEN.jpg', 1, 1, '2018-10-27 10:12:09', 'test', 'test', 'displayNone', '_self', '/es/booking-fibroblast'),
(6, 'Neck', 'Cuello', 1, 7, '<p>The skin is forced into repair the neck area</p>', '<p>La piel se ve obligada a reparar el área del cuello.</p>', '950.00', 'Neck', '/booking-fibroblast', '6_NECK.jpg', 1, 1, '2018-10-27 12:12:09', 'test', 'test', 'displayNone', '_self', '/es/booking-fibroblast');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bridals`
--

CREATE TABLE `bridals` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `titleesp` varchar(255) NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `description` text,
  `descriptionesp` text NOT NULL,
  `price` varchar(255) NOT NULL,
  `popup` varchar(255) NOT NULL,
  `button` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `is_featured` tinyint(1) NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `created_at` datetime NOT NULL,
  `textFinanc` varchar(255) NOT NULL,
  `textFinancEsp` varchar(255) NOT NULL,
  `is_activeTf` varchar(255) NOT NULL,
  `target` varchar(255) NOT NULL,
  `buttonEs` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `bridals`
--

INSERT INTO `bridals` (`id`, `title`, `titleesp`, `user_id`, `category_id`, `description`, `descriptionesp`, `price`, `popup`, `button`, `image`, `is_featured`, `is_active`, `created_at`, `textFinanc`, `textFinancEsp`, `is_activeTf`, `target`, `buttonEs`) VALUES
(1, 'Bridal makeup trial', 'Prueba de Maquillaje de novia', 1, 1, '<p>Before you say “I do”, there are so many things to do to plan for your big day. This is especially the case when it comes to your bridal look. Get a preview of what that makeup will look like. To hire this service, you need the Bridal Makeup.</p>', '<p>Antes de que diga \"Yo Acepto\", hay muchas cosas que hacer para planificar su gran día. Este es especialmente el caso cuando se trata de su aspecto nupcial. Obtenga una vista previa e observe cómo se verá su maquillaje. Para contratar este servicio, necesitas el Maquillaje de Novia.</p>', '80.00', 'bridal', '/booking-makeup', '1_BRIDAL-MAKEUP-TRIAL.jpg', 1, 1, '2018-10-27 04:12:09', 'test', 'test', 'displayNone', '_self', '/es/booking-makeup'),
(2, 'Bridal makeup', 'Maquillaje de Novia', 1, 1, '<p>In your special day we will give you special treat. Feel comfortable and beautiful the day you celebrate love. Full makeup application + Luxury Hydration Skin: luxury hydration, primer, full coverage foundation, loose powder, contour and highlight.&nbsp;<br><br><strong>Eyes:</strong> Subtle or intense eye definition. Fake eyelashes included. Cheeks: bronzer or blush.&nbsp;<br><br><strong>Lips:</strong> Luxury hydration for lips and long lasting lipstick application.</p>', '<p>En este día tan especial para ti &nbsp; te daremos un trato único e inolvidable. Siéntete cómodo y hermosa y entrégate a recibir de la experiencia de las expertas. Este día recibirás una hidratación profunda a tu rostro seguido del look de maquillaje de tu elección. Luego te colocaremos el toque final con una elegantes pestañas y un glow inigualable</p>', '200.00', 'bridalm', '/booking-makeup', '2_BRIDAL-MAKEUP.jpg', 1, 1, '2018-10-27 06:12:09', 'test', 'test', 'displayNone', '_self', '/es/booking-makeup'),
(3, 'Bridal party makeup - 4 people', 'Maquillaje para boda - 4 personas', 1, 2, '<p>When it comes to the brides wedding day, the bride should absolutely be the center of everyone\'s attention. However, it\'s also important that those in her bridal party look their best too! To hire this service you need the Bridal Makeup.</p>', '<p>Cuando se trata del día de la boda de novias, la novia debe ser absolutamente el centro de atención de todos. ¡Sin embargo, también es importante que las personas en su fiesta nupcial también se vean lo mejor posible! Para contratar este servicio necesitas el maquillaje de novia.</p>', '480.00', 'party4', '/booking-makeup', '3_BRIDAL-PARTY-MAKEUP-4-PEOPLE.jpg', 1, 1, '2018-10-27 07:12:09', 'test', 'test', 'displayNone', '_self', '/es/booking-makeup'),
(4, 'Bridal party makeup - 6 people', 'Maquillaje Fiesta Nupcial 6 Personas', 1, 2, '<p>What about the sisters, the moms and the other wedding guests who want makeup at home services at affordable prices without compromising on quality? To hire this service you need the Bridal Makeup</p>', '<p>¿Qué pasa con las hermanas, las mamás y los demás invitados a la boda que desean los servicios de maquillaje en el hogar a precios asequibles sin comprometer la calidad? Para contratar este servicio necesitas el maquillaje de novia.&nbsp;</p><p>&nbsp;</p>', '660.00', 'modal4', '/booking-makeup', '4_BRIDAL-PARTY-MAKEUP-6-PEOPLE.jpg', 1, 1, '2018-10-27 09:12:09', 'test', 'test', 'displayNone', '_self', '/es/booking-makeup'),
(5, 'Bridal party makeup - 8 people', ' Maquillaje Fiesta Nupcial 8 Personas', 1, 7, '<p>Everyone wants light makeup that’s subtle and not overdone. There are a lot of MUAs that cater to this need and enable brides to look their absolute best on this special day. To hire this service you need the Bridal Makeup.</p>', '<p>Todos quieren un maquillaje ligero que sea sutil y no exagerado. Hay una gran cantidad de maquilladores que satisfacen esta necesidad y permiten a las novias lucir lo mejor posible en este día especial. Para contratar este servicio necesitas el maquillaje de novia.</p>', '800.00', 'modal5', '/booking-makeup', '5_BRIDAL-PARTY-MAKEUP-8-PEOPLE.jpg', 1, 1, '2018-10-27 10:12:09', 'test', 'test', 'displayNone', '_self', '/es/booking-makeup');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `brightenings`
--

CREATE TABLE `brightenings` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `titleesp` varchar(255) NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `description` text,
  `descriptionesp` text NOT NULL,
  `price` varchar(255) NOT NULL,
  `popup` varchar(255) NOT NULL,
  `button` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `is_featured` tinyint(1) NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `created_at` datetime NOT NULL,
  `textFinanc` varchar(255) NOT NULL,
  `textFinancEsp` varchar(255) NOT NULL,
  `is_activeTf` varchar(255) NOT NULL,
  `target` varchar(255) NOT NULL,
  `buttonEs` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `brightenings`
--

INSERT INTO `brightenings` (`id`, `title`, `titleesp`, `user_id`, `category_id`, `description`, `descriptionesp`, `price`, `popup`, `button`, `image`, `is_featured`, `is_active`, `created_at`, `textFinanc`, `textFinancEsp`, `is_activeTf`, `target`, `buttonEs`) VALUES
(1, 'free Consultation Appointment', 'Consulta Gratuita', 1, 1, '<p>Let our skin experts help you choose the perfect treatment with your face or body concern in your visit. Our first consultation is FREE, No Obligation, if you agree with the recommendation we will do the treatment the same day or we schedule a new appointment.&nbsp;<br><br><i><strong>Let yourself, come, relax and enjoy with us!!</strong></i></p>', '<p>Deje que nuestros expertos en piel lo ayuden a elegir el tratamiento perfecto para su rostro o cuerpo cuando nos visite. Nuestra primera cita es GRATUITA, Sin Obligación. Si está de acuerdo con la recomendación haremos el tratamiento el mismo día o programaremos una nueva cita.&nbsp;</p><p>&nbsp;</p><p><i><strong>Déjate llevar, relájate y disfruta con nosotros!</strong></i></p>', 'Free', 'modal1', '/booking-facial', '1_FREE-CONSULTATION.jpg', 1, 1, '2018-10-27 04:12:09', 'test', 'test', 'displayNone', '_self', '/es/booking-facial'),
(2, 'Fruit Facial Peel & Renew Treatment', 'Tratamiento Facial e iluminador de Frutas', 1, 1, '<p>In this light treatment we use fruit acids from foods such as apples, grapes, sugarcane and berries to exfoliate your skin. What we like most about this special treatment is how smooth it is while still being effective. This peeling works very well also on sensitive skin. The results are immediate and leave our skin soft and vibrant after the first treatment. This type of treatment is also recommended once a week to attribute to your radiant skin the gentle stimulation and exfoliation that allow our skin care to be absorbed in the deeper layers of your skin.&nbsp;</p><p>Each treatment performed requires at-home care to see better results in the short term. The use of sunscreen is important to prevent damage to the skin.</p>', '<p>En este tratamiento aclarante usamos ácidos de frutas como manzanas, uvas, caña de azúcar y bayas para exfoliar tu piel. Lo que más nos gusta de este tratamiento especial es que es suave y a la vez sigue siendo muy efectivo. Este peeling funciona muy bien también en pieles sensibles. Los resultados son inmediatos y dejaran nuestra piel suave y vibrante después del primer tratamiento. Este tipo de tratamiento se recomienda una vez por semana para observar mejores resultados dejando su rostro cada día más claro y radiante.</p><p>En cada tratamiento debemos realizar el debido cuidado en el hogar para ver mejores resultados a corto plazo. Importante el uso de protector solar para evitar daños en la piel.</p>', '85.00', 'Fruit', '/booking-facial', '2_FRUIT-FACIAL-PEEL--RENEW-TREATMENT.jpg', 1, 1, '2018-10-27 06:12:09', 'test', 'test', 'displayNone', '_self', '/es/booking-facial'),
(3, 'Neck And Decollate Peeling Treatment', 'Tratamiento Peeling para alzar tu cuello', 1, 2, '<p>The neck and chest can show early signs of aging. The skin there is much thinner, which means that it will probably be one of the first places where we will notice things like brown spots, sagging and wrinkles.&nbsp;</p><p>This is the result of not having protected our neck and neckline from the sun every day. Thinking about taking care of your skin and offering a better service we have created special peeling treatment to help the skin look and feel better, with shine, softness, hydration, firmness, hydration, revitalization, finishing with a soothing mask.</p>', '<p>El cuello y el pecho pueden mostrar signos tempranos de envejecimiento.La piel allí es mucho más delgada, lo que significa que probablemente será uno de los primeros lugares donde notaremos cosas como manchas marrones, flacidez y arrugas.</p><p>&nbsp;</p><p>Esto puede ser el resultado de no haber protegido nuestro cuello y escote del sol todos los días.Pensando en cuidar su piel y ofreciendo un mejor servicio, hemos creado un tratamiento especial de peeling para ayudar a que la piel se vea y se sienta mejor, con brillo, suavidad, hidratación, firmeza y revitalización.Finalizamos con una mascarilla calmante.</p><p>&nbsp;</p><p>En cada tratamiento debemos realizar el debido cuidado en el hogar para ver mejores resultados a corto plazo. Importante el uso de protector solar</p>', '100.00', 'Neck', '/booking-facial', '3_NECK-AND-DECOLLATE-PEELING-TREATMENT.jpg', 1, 1, '2018-10-27 07:12:09', 'test', 'test', 'displayNone', '_self', '/es/booking-facial'),
(4, 'Super Exfoliation Enzyme Peel Treatment', 'Tratamiento de peeling con enzimas', 1, 2, '<p>This complete exfoliating treatment is recommended to eliminate impurities from the skin, softens the congestion of sebum, has a brightens complexion with the help of natural enzymes such as pineapple, papaya, ginkgo and arnica. We want to take care of your skin, so we add a special Vail with collagen and Ginko Biloba to the treatment to improve the microcirculation and strengthen the epidermis, which gives an anti-oxidant and anti-irritant effect to the skin.&nbsp;</p><p>Each treatment performed requires at-home care to see better results in the short term. The use of sunscreen is important to prevent damage to the skin</p>', '<p>Se recomienda este tratamiento exfoliante completo para eliminar las impurezas de la piel, disminuye la congestión de la grasa ,elimina las impurezas de la piel logrando un aspecto más luminoso con la ayuda de enzimas naturales como la piña, la papaya, el ginkgo y el árnica. Queremos cuidar su piel, así que agregamos un velo especial con colágeno y Ginkgo Biloba al tratamiento para mejorar la microcirculación y fortalecer la epidermis, lo que le da un efecto antioxidante y anti irritante a la piel.</p><p>En cada tratamiento debemos realizar el debido cuidado en el hogar para ver mejores resultados a corto plazo. Importante el uso de protector solar para evitar daños en la piel.</p>', '100.00', 'Super', '/booking-facial', '4_SUPER-EXFOLIATION-ENZYME-PEEL-TREATMENT.jpg', 1, 1, '2018-10-27 09:12:09', 'test', 'test', 'displayNone', '_self', '/es/booking-facial'),
(5, 'Clearing And Lightening Peeling Treat With Peel Off Brightening Mask', 'Tratamiento aclarante iluminador con mascarilla hidroplástica ', 1, 7, '<p>This is an exfoliation to remove the top layer of the skin, dry acne spots, remove pimples and help clear up the appearance of blemishes.&nbsp;</p><p>Accelerate shine, improve skin tone, improve skin clarity and create a fresher and healthier appearance with this effective treatment. The powerful exfoliant softens the skin and releases the opaque surface cells, helping to minimize the appearance of sunspots and age. Botanical extracts, different ingredients in our products help to treat and prevent cellular discoloration for a brilliance and tonal balance without equal. The protocols of the series will vary depending on the amount of hyperpigmentation. Your skin specialist will suggest the number and frequency of necessary treatments. &nbsp;</p><p><strong>Benefits:</strong> Clarifies the complexion, detoxifies and lightens pigmentation spots, for all skin types.&nbsp;</p><p>Each treatment performed requires at-home care to see better results in the short term. The use of sunscreen is important to prevent damage to the skin.</p>', '<p>Esta es una exfoliación para eliminar las células muertas que se encuentran en la capa superior de la piel, mejorar el aspecto de las manchas y eliminar los granos. Acelere el brillo, mejore el tono de la piel, mejore la claridad de la piel y cree un aspecto más fresco y saludable con este tratamiento efectivo. Los potentes exfoliantes suavizan la piel y liberan las células opacas de la superficie, lo que ayuda a minimizar la aparición de manchas solares y la edad. Extractos botánicos y diferentes ingredientes en nuestros productos ayudan a tratar y prevenir la decoloración celular para un brillo y un equilibrio tonal sin igual. Los protocolos&nbsp; variarán dependiendo de la cantidad de hiperpigmentación. Su especialista en piel le sugerirá el número y la frecuencia de los tratamientos necesarios.</p><p>&nbsp;</p><p><strong>Beneficios:</strong><br><br>Aclara el cutis, desintoxica y aclara las manchas de pigmentación para todo tipo de pieles.</p><p>En cada tratamiento debemos realizar el debido cuidado en el hogar para ver mejores resultados a corto plazo. Importante el uso de protector solar para evitar daños en la piel.</p>', '120.00', 'Clearing', '/booking-facial', '5_CLEARING-AND-LIGHTENING-PEELING-TREAT-WITH-PEEL-OFF-BRIGHTENING-MASK.jpg', 1, 1, '2018-10-27 10:12:09', 'test', 'test', 'displayNone', '_self', '/es/booking-facial'),
(6, 'Peeling Package - 6 Sessions', 'Paquete Peeling - 6 Sesiones', 1, 0, '<p>To improve results according to their evolution we recommend carrying out 6 sessions. Thinking about your skin and the damage that occasioned by external factors such as the sun, pregnancy and hormonal processes, we offer you in Vali Spa this fabulous peeling package so that with our help you get rid of these damage. It is an excellent treatment, so the improvements you see, will be constant, because the results are progressive.</p><p><strong>Note</strong> It is necessary to perform a skin evaluation to determine which treatment is indicated according to the conditions of your face</p>', '<p>Pensando en su piel y el daño causado por factores externos como el sol, el embarazo y los procesos hormonales, le ofrecemos en Vali Spa este fabuloso paquete de peeling para que, con nuestra ayuda, pueda deshacerse de estos daños. Es un excelente producto. Para que veas las mejoras debes ser constante porque los resultados son progresivos, es por eso que ofrecemos 6 sesiones que varían su contenido de acuerdo a su tipo de piel y evolución.</p><p>Es necesario realizar una evaluación de la piel para determinar qué tratamiento está indicado de acuerdo con las condiciones de su rostro</p><p>En cada tratamiento debemos realizar el debido cuidado en el hogar para ver mejores resultados a corto plazo. Importante el uso de protector solar para evitar daños en la piel.</p>', '500.00', 'Peeling', '/booking-facial', '6_PEELING-PACKAGE-6-SESSIONS.jpg', 1, 1, '2019-07-28 18:27:33', 'test', 'test', 'displayNone', '_self', '/es/booking-facial'),
(7, 'Peeling Package -  12 Sessions', 'Paquete Peeling - 12 Sesiones', 1, 0, '<p>For special conditions and amazing results according to their evolution we recommend carrying out 12 sessions. Thinking about your skin and the damage that occasioned by external factors such as the sun, pregnancy and hormonal processes, we offer you in Vali Spa this fabulous peeling package so that with our help you get rid of these damage. It is an excellent treatment, so the improvements you see, will be constant, because the results are progressive.&nbsp;</p><p><strong>Note</strong> It is necessary to perform a skin evaluation to determine which treatment is indicated according to the conditions of your face.</p>', '<p>Pensando en su piel y el daño causado por factores externos como el sol, el embarazo y los procesos hormonales, le ofrecemos en Vali Spa este fabuloso paquete de peeling para que, con nuestra ayuda, pueda deshacerse de estos daños. Es un excelente producto. Para que veas las mejoras debes ser constante porque los resultados son progresivos, es por eso que ofrecemos 12 sesiones que varían su contenido de acuerdo a su tipo de piel y evolución.</p><p>Es necesario realizar una evaluación de la piel para determinar qué tratamiento está indicado de acuerdo con las condiciones de su rostro</p><p>En cada tratamiento debemos realizar el debido cuidado en el hogar para ver mejores resultados a corto plazo. Importante el uso de protector solar para evitar daños en la piel.</p>', '950.00', 'Peeling2', '/booking-facial', '7_PEELING-PACKAGE-12-SESSIONS.jpg', 1, 1, '2019-07-28 18:28:16', 'test', 'test', 'displayNone', '_self', '/es/booking-facial');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `calmings`
--

CREATE TABLE `calmings` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `titleesp` varchar(255) NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `description` text,
  `descriptionesp` text NOT NULL,
  `price` varchar(255) NOT NULL,
  `popup` varchar(255) NOT NULL,
  `button` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `is_featured` tinyint(1) NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `created_at` datetime NOT NULL,
  `textFinanc` varchar(255) NOT NULL,
  `textFinancEsp` varchar(255) NOT NULL,
  `is_activeTf` varchar(255) NOT NULL,
  `target` varchar(255) NOT NULL,
  `buttonEs` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `calmings`
--

INSERT INTO `calmings` (`id`, `title`, `titleesp`, `user_id`, `category_id`, `description`, `descriptionesp`, `price`, `popup`, `button`, `image`, `is_featured`, `is_active`, `created_at`, `textFinanc`, `textFinancEsp`, `is_activeTf`, `target`, `buttonEs`) VALUES
(1, 'free Consultation Appointment', 'Consulta Gratuita', 1, 1, '<p>Let our skin experts help you choose the perfect treatment with your face or body concern in your visit. Our first consultation is FREE, No Obligation, if you agree with the recommendation we will do the treatment the same day or we schedule a new appointment.&nbsp;<br><br><i><strong>Let yourself, come, relax and enjoy with us!!</strong></i></p>', '<p>Deje que nuestros expertos en piel lo ayuden a elegir el tratamiento perfecto para su rostro o cuerpo cuando nos visite. Nuestra primera cita es GRATUITA, Sin Obligación. Si está de acuerdo con la recomendación haremos el tratamiento el mismo día o programaremos una nueva cita.&nbsp;</p><p>&nbsp;</p><p><i><strong>Déjate llevar, relájate y disfruta con nosotros!</strong></i></p>', 'Free', 'modal', '/booking-facial', '1_FREE-CONSULTATION.jpg', 1, 1, '2018-10-27 04:12:09', 'test', 'test', 'displayNone', '_self', '/es/booking-facial'),
(2, 'European Facial (Deep Pore Cleanse)', 'Facial Europeo  (limpieza profunda de poros)', 1, 1, '<p>This personalized facial cleans deeply the pores and tones your face to give back the vibration to your skin. This facial includes cleansing, exfoliation, extractions (when necessary), massages, tonics, mask and hydration, leaving your skin renewed and radiant.</p>', '<p>Este facial personalizado limpia profundamente los poros y tonifica tu rostro para devolver la vibración a tu piel. Este facial incluye limpieza, exfoliación, extracciones, masajes, tónicos, mascarilla e hidratación, dejando su piel renovada y radiante.</p><p>En cada tratamiento debemos realizar el debido cuidado en el hogar para ver mejores resultados a corto plazo. Importante el uso de protector solar para evitar daños en la piel.</p>', '80.00', 'eur', '/booking-facial', '2_EUROPEAN-FACIAL-DEEP-PORE-CLEANSE.jpg', 1, 1, '2018-10-27 06:12:09', 'test', 'test', 'displayNone', '_self', '/es/booking-facial'),
(3, 'Led Light Therapy For Acne', 'Terapia de luz led para el acné', 1, 2, '<p>LED phototherapy is an amazing technology invented by NASA scientist. It is completely non-invasive, plus there is no downtime or irritation after receiving a treatment. &nbsp;It works great on aging and acne skin as well. It will leave you with nothing but glowing, beautiful skin.&nbsp;<br><br>&nbsp; During this treatment, you will receive a customized acne treatment plus 15 minutes LED light treatment. Incorporating the LED light therapy into the treatment has many benefits:&nbsp;</p><p>&nbsp;</p><p>Speed up the healing process</p><p>Kills the bacteria in the pores</p><p>Reduce inflammation</p><p>Help heal scarring, pigmentation</p><p>Reduces fine lines, wrinkles</p>', '<p>La fototerapia LED es una tecnología increíble inventada por un científico de la NASA. Es un método no invasivo, además de que no hay tiempo de inactividad ni irritación después de recibir un tratamiento. Funciona muy bien en el envejecimiento y en la piel con acné . Como resultado obtendrás una piel radiante hermosa</p><p>&nbsp;</p><p>Durante este tratamiento recibirá atención personalizada para el acné más 15 minutos de tratamiento con luz LED. La incorporación de la terapia de luz LED en el tratamiento tiene muchos beneficios:<br><br>&nbsp;</p><p>Acelera el proceso de curación.</p><p>Ataca las bacterias en los poros.</p><p>Reduce la inflamación</p><p>Ayuda a sanar cicatrices, pigmentación.</p><p>&nbsp;</p><p>En cada tratamiento debemos realizar el debido cuidado en el hogar para ver mejores resultados a corto plazo. Importante el uso de protector solar para evitar daños en la piel.</p>', '90.00', 'Led', '/booking-facial', '3_LED-LIGHT-THERAPY-FOR-ACNE.jpg', 1, 1, '2018-10-27 07:12:09', 'test', 'test', 'displayNone', '_self', '/es/booking-facial'),
(4, 'Rosacea And Sensitive Calm Skin Pamper Treatment', 'Tratamiento para pieles con  Rosácea y sensibles', 1, 2, '<p>The perfect facial to feel relaxed and pampered. In this special treatment we choose the best products with the right ingredients to treat this type of skin lesion. We designed a protocol that includes cleaning, light exfoliation, tonic, soothing mask, hydration and protection.</p><p>Each treatment performed requires at-home care to see better results in the short term. The use of sunscreen is important to prevent damage to the skin.</p>', '<p>El facial perfecto para sentirse relajado y mimado. En este tratamiento especial, elegimos los mejores productos con los ingredientes adecuados para tratar este tipo de lesión de la piel. Diseñamos un protocolo que incluye limpieza, exfoliación con luz, tónico, mascarilla calmante, hidratación y protección.</p><p>En cada tratamiento debemos realizar el debido cuidado en el hogar para ver mejores resultados a corto plazo. Importante el uso de protector solar para evitar daños en la piel.</p>', '100.00', 'rosacea', '/booking-facial', '4_ROSACEA-AND-SENSITIVE-CALM-SKIN-PAMPER-TREATMENT.jpg', 1, 1, '2018-10-27 09:12:09', 'test', 'test', 'displayNone', '_self', '/es/booking-facial'),
(5, 'Rosacea And Sensitive Treatment Package - 6 Sessions', 'Paquete de tratamiento de rosácea y sensibilidad - 6 sesiones', 1, 7, '<p>We create a special package for those skins that need to be treated more than one session with specific ingredients and therapies that will help to relax, calm, and reduce inflammation and redness. In all sessions a facial is included, we vary the therapies with phototherapy, aromatherapy facial, deep hydration, facial lymphatic drain, and others. We invite you to try this spectacular package that will change the appearance of your skin with the best products and best prices.&nbsp;</p><p>You should avoid sunlight for a few weeks. we recommend include in your skin care routine the 4 steps treatment &nbsp;cleanser, tonic, moisturizer and sunscreen (at least 2 times) twice daily. We recommend you ask your specialist for recommendations products.</p>', '<p>Creamos un paquete especial para aquellas pieles que deben tratarse con ingredientes y terapias específicas que ayudarán a relajar, calmar y reducir la inflamación y el enrojecimiento. En todas las sesiones se incluye un facial, variamos las terapias con fototerapia, aromaterapia facial, hidratación profunda, drenaje linfático facial y otros. Lo invitamos a probar este espectacular paquete que cambiará la apariencia de su piel con los mejores productos y los mejores precios.</p><p>Debes evitar la luz del sol por algunas semanas. Recomendamos incluir en su rutina de cuidado de la piel el limpiador, tónico, humectante y protector solar para el tratamiento de 4 pasos (al menos 2 veces) dos veces al día (consulte a su especialista para obtener recomendaciones de productos).</p>', '500.00', 'Rosacea6', '/booking-facial', '5_ROSACEA-AND-SENSITIVE-TREATMENT-PACKAGE-6-SESSIONS.jpg', 1, 1, '2018-10-27 10:12:09', 'test', 'test', 'displayNone', '_self', '/es/booking-facial'),
(6, 'Acne Killer With Charcoal Mask', 'Tratamiento para el acné (Killer) con máscara de carbón', 1, 0, '<p>Customized to treat the outbreaks, balance the oil, rinse and refine your skin. Includes a clean facial with deep pores with ozone, which ends in high frequency with a carbon mask.</p><p>In addition to this treatment we include a phototherapy session with Blue Light, that will help reducing acne inflammation.&nbsp;</p><p>Each treatment we must perform due care at home to see better results in the short term, Important the use of sunscreen to prevent damage to our skin.</p>', '<p>Personalizado para tratar los brotes, equilibrar la grasa y refinar su piel. Incluye un facial de limpieza profunda con extracciones y ozono , que termina en alta frecuencia y una máscara de carbono.<br>Además de este tratamiento, incluimos una sesión de fototerapia con Luz Azul, que ayudará a reducir la inflamación del acné.</p><p>En cada tratamiento debemos realizar el debido cuidado en el hogar para ver mejores resultados a corto plazo. Importante el uso de protector solar para evitar daños en la piel.</p>', '100.00', 'acne', '/booking-facial', '6_ACNE-KILLER-WITH-CHARCOAL-MASK.jpg', 1, 1, '2019-07-28 18:21:29', 'test', 'test', 'displayNone', '_self', '/es/booking-facial'),
(7, 'Acne Killer Package – 6 Sessions', 'Paquete de acné (Killer) - 6 sesiones', 1, 0, '<p>We created a special package for those skins that should be treated acne condition. The sessions vary weekly including the following: European facial, microdermabrasion, super exfoliation enzyme, a session of our best-selling service for acne (acne killer) with carbon mask and others. We invite you to try this spectacular package that will change the appearance of your skin with the best products and the best prices.</p><p>Remember that after a facial treatment you should avoid sunlight for a few weeks. We recommend include in your facial care routine the cleanser, tonic, moisturizer and sunscreen for the treatment of 4 steps twice a day (consult your specialist for recommendations).</p>', '<p>Creamos un paquete especial para aquellas pieles que deben tratarse con condición de acné. Las sesiones varían semanalmente e incluyen lo siguiente: Facial europeo, microdermoabrasión, enzima de súper exfoliación, una sesión de nuestro servicio más vendido para el acné (acné Killer) con máscara de carbono y otros. Lo invitamos a probar este espectacular paquete que cambiará la apariencia de su piel con los mejores productos y los mejores precios.</p><p>Recuerda que después de un tratamiento facial debes evitar la luz solar durante unas semanas. Recomendamos incluir en su rutina de cuidado facial los 4 pasos : el limpiador, loción tónica, crema hidratante y protector solar. (consulte a su especialista)&nbsp;</p>', '500.00', 'acn', '/booking-facial', '7_ACNE-KILLER-PACKAGE–6-SESSIONS.jpg', 1, 1, '2019-07-28 18:22:12', 'test', 'test', 'displayNone', '_self', '/es/booking-facial');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `category_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `categories`
--

INSERT INTO `categories` (`id`, `category_name`) VALUES
(1, 'Facial'),
(2, 'Wax'),
(3, 'Permanent'),
(4, 'Body'),
(5, 'Makeup'),
(6, 'Fibroblast'),
(7, 'Special');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clasess`
--

CREATE TABLE `clasess` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `titleesp` varchar(255) NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `description` text,
  `descriptionesp` text NOT NULL,
  `price` varchar(255) NOT NULL,
  `popup` varchar(255) NOT NULL,
  `button` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `is_featured` tinyint(1) NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `created_at` datetime NOT NULL,
  `is_activeTf` varchar(255) NOT NULL,
  `textFinancEsp` varchar(255) NOT NULL,
  `textFinanc` varchar(255) NOT NULL,
  `target` varchar(255) NOT NULL,
  `buttonEs` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `clasess`
--

INSERT INTO `clasess` (`id`, `title`, `titleesp`, `user_id`, `category_id`, `description`, `descriptionesp`, `price`, `popup`, `button`, `image`, `is_featured`, `is_active`, `created_at`, `is_activeTf`, `textFinancEsp`, `textFinanc`, `target`, `buttonEs`) VALUES
(1, 'One on one makeup class', 'Clase de Maquillaje Personal y Privada', 1, 1, '<p>The course offers the ins and outs of how to effectively enhance your beauty, choose the correct products for your tone and undertone, and unique face and eye shape. I also teach you how to cover blemishes, reduce the appearance of dark circles; I teach you how is a perfect blend shadow, and the best makeup tricks. I teach you how to convert a glam but natural day makeup into a night and glowing one.</p>', '<p>El curso ofrece información detallada sobre cómo mejorar su belleza de manera efectiva, elegir los productos correctos para su tono e intensidad y una forma única de cara y ojo.También te enseñamos cómo cubrir manchas, reducir la apariencia de círculos oscuros;aprenderás cómo es una mezcla perfecta de sombras y los mejores trucos de maquillaje.Te enseñamos a convertir un maquillaje glamuroso pero natural en una noche especial.</p>', '180.00', 'modal1', '/booking-makeup', '1_ONE-ON-ONE-MAKEUP-CLASS.jpg', 1, 1, '2018-10-27 04:12:09', 'displayNone', 'test', 'test', '_self', '/es/booking-makeup'),
(2, 'One day group makeup class - 4 people', 'Clase Grupal de Maquillaje – 4 Personas ', 1, 1, '<p>Learn how to apply your own makeup and about the best products to use for your skin this class will help you achieve your perfect day to night makeup look!. Bring your makeup bag to find out what works and what doesn\'t work!. I also recommend you which makeup could work on you. This event is perfect for at specials best friends Plan!!! We have a lot of fun!!</p>', '<p>Aprende cómo aplicar tu propio maquillaje y sobre los mejores productos para usar en tu piel, ¡esta clase te ayudará a lograr tu maquillaje perfecto de día y noche! Traiga su estuche de maquillaje para averiguar qué funciona y qué no funciona. También te recomendaré qué maquillaje será mejor en ti. Este evento es perfecto para compartir con amigas! …Nos divertimos mucho!!</p>', '550.00', 'One4', '/booking-makeup', '2_ONE-DAY-GROUP-MAKEUP-CLASS-4-PEOPLE.jpg', 1, 1, '2018-10-27 06:12:09', 'displayNone', 'test', 'test', '_self', '/es/booking-makeup'),
(3, 'One day group makeup class - 6 people', 'Clase Grupal de Maquillaje – 6 Personas', 1, 2, '<p>Invite some friends for some makeup fun sessions! We can show you how to use your own makeup products to create the perfect look for you. This is the perfect chance to ask a professional any questions you’ve ever had about makeup! During each demonstration, you’ll get to take notes and ask questions so you can recreate the looks in the future. We give you a certificate of completion.</p>', '<p>¡Invita a algunas amigas a un curso grupal divertido de maquillaje! Podemos mostrarle cómo usar sus propios productos de maquillaje para crear el look perfecto para usted. ¡Esta es la oportunidad perfecta para hacerle a un profesional cualquier pregunta que haya tenido sobre el maquillaje! Durante el curso, podrás tomar notas y hacer preguntas para poder recrear tu apariencia en el futuro. Te entregamos un certificado de finalización.</p>', '750.00', 'One6', '/booking-makeup', '3_ONE-DAY-GROUP-MAKEUP-CLASS-6-PEOPLE.jpg', 1, 1, '2018-10-27 07:12:09', 'displayNone', 'test', 'test', '_self', '/es/booking-makeup');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `lastname` varchar(30) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `message` text,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `lastname`, `email`, `phone`, `message`, `created_at`) VALUES
(1, 'Malcolm', 'Cordova', 'mercadocreativo@gmail.com', '9999999999', 'This is test message', '2018-10-30 10:14:15'),
(2, 'Malcolm', 'Cordova', 'mercadocreativo@gmail.com', '4241874370', 'prueba', '2019-07-25 22:57:00'),
(3, 'Malcolm', 'Cordova', 'mercadocreativo@gmail.com', '4241874370', 'Prueba desde web', '2019-08-28 19:00:13'),
(4, 'Janny', 'Acosta', 'Jannyacosta@live.com', '7862602756', 'Hola somos una amiga y yo, estamos interesadas en el tratamiento para las ojeras. Agradecería se pusieran en contacto conmigo. Gracias ', '2019-09-05 20:03:11'),
(5, 'Brian', 'Williams', 'Brian@thechatinc.org', '5555555555', 'Hi,\n\nThis is Brian Williams from The Chats Inc. I have visited your website and noticed good traffic. We can convert that traffic into you client lead by equipping your website with 24-7 live chat service with live attendant availability which will increase your website conversion up to 35% and generate 3 times more leads from your visitor traffic, ensuring you don’t lose a single client visiting your website.\n\nPer Lead billing – No setup charges- Free non-qualified chats.\n\nYou can test the potential with $300 worth of free lead credit and continue if you see the results.\n\n\nIf you would like to explore this further - please reply by email and we can take it from there!\n\n\nBest,\nBrian Williams\nClient Relations\nbrian@thechatinc.org\nwww.thechatinc.org', '2019-09-20 21:05:32'),
(6, 'Scott', 'Jones', 'scott@livecallreps.org', '0000000000', 'Do You Know The Impact Missing One Business Call? Can You Imagine the number of New Customers You\'d Get if you were to stay active on your business Phone 24/7/365?\nWe At LiveCallReps.org Enable Businesses To Ensure They Never Ever Miss a Business Call Again!\nOur U.S Based Agents virtually attend your phone & professionally engage each caller in a conversation.  \nWould you like to sign up for free trial of one week?\n\nBest,\nScott Jones\nscott@livecallreps.org   \nwww.livecallreps.org', '2019-09-23 17:26:08'),
(7, 'Susette ', 'Bibi', 'susettebibi@hotmail.com', '5105868075', 'Hola, tienen clinicas que hagan Fibroblas cerca de San Francisco,CA.\nGracias ', '2019-09-24 16:34:20'),
(8, 'Aurisnelly ', 'Ramos ', 'Aramos2122@yahoo.com', '954-662-8078', 'Hi! \n\nI was interested in the fiberblast for upper lip. I was wondering how long is the recovery for this? And also, I see under the specials there is one for grand opening or first time. Is that still valid?\n\nI look forward to hearing from you,\n( text or Email  preferred)\n\nAurisnelly Ramos \n964-662-8078', '2019-10-30 21:55:28'),
(9, 'Clara ', 'Marin ', 'Domifrutas@hotamal.com', '7866066684', 'Hello my name is clara marin I’m full specialist and I’m looking for a job .\nSpecialist in \nMicroblading \nMicro needing \nEyelash extensions \nMicrodermabrasion \nPlease let me know if you have any position open \nThanks ', '2019-11-27 00:29:21'),
(10, 'Caroly', 'Ped', 'carolypedersen@gmail.com', '9546827509', 'Hi i am interested in fibroblast treatment. How many years of experience do you have in this procedure?', '2019-12-25 15:23:08'),
(11, 'Nolly', 'O\'Hallorans', 'nollyohallorans@gmail.com', '9542487161', 'Valentina, my sister told me you can take me today please condirm the time for me? Thanks ', '2020-01-03 12:47:53'),
(12, 'may', 'wu', 'maywuzhong@gmail.com', '9543261398', 'would like to make an appointment, and have a groupon, please call me at 954-326-1398. Thanks!', '2020-01-15 15:35:27'),
(13, 'Kathryn ', 'Diaz', 'kjd11242@yahoo.com', '3054946157', 'Please cancel my appointment for January 28 th . I will need to reschedule at a later date. Thank you very much', '2020-01-26 12:30:31'),
(14, 'Nadia', 'Pena', 'nadia@benatnow.com', '9545628750', 'Hola!! Nos conocimos en un bazar en Weston,\n\nMy name is Nadia Pena, and I am co-owner of a local distribution business (Wesmex Trading) of personal care natural products under our own brand BeNat.\nI believe there is a great fit between our products and your business, as your clientele is health-conscious while sensitive to protect our environment and natural resources.\nOur artisanal and natural products (deodorants, shampoos, and conditioners in a bar, among others) are hand-made with natural ingredients in our certified lab in Mexico, built-in small batches and zero-waste presentations.\nThis is also a good business opportunity as you could sell these products at your location with a great margin, plus we can discuss consignment programs for the initial exhibition of products until your demand gets going. The exhibition container takes just a little space.\nI’d appreciate an opportunity to discuss this with you on the phone or even better set up an appointment to elaborate on this potential business opportunity. \nFeel free to visit our website and social media links below.\n \nLook forward to hearing back from you.\nThanks in advance and best regards.\nhttps://benatnow.com\nFB7IG @benatnow\n\n ', '2020-01-29 22:26:31'),
(15, 'Julia', 'Gonzalez', 'juliatrealtor@yahoo.com', '786-443-2119', 'Soy Diabetica y queria saber si me puedo hacer el procedimiento', '2020-02-08 02:57:34'),
(16, 'Nadine', 'Lada', 'Nadinelada@gmail.com', '954-292-6227', 'Hi , how are you ? \n\nI have an expired Groupon for 1 anti aging facial with radio frequency treatment . Let me know  if I can apply the amount paid for the groupon towards the price of that treatment and pay the difference . \nOr what you can do , and see  if you had anything available tomorrow 2/27 after 3 ? Or anytime Friday 2/28 ? \n\nPlease feel free to call me thanks ', '2020-02-26 18:46:00'),
(17, 'Adriana ', 'Adriana Christie ', 'Adrianazidobre@gmail.com', '9544152453', 'Buenos Días me encantaría hacer una cita Pat consulta y facial\n\nMuchas gracias \n\nAdriana', '2020-02-27 16:16:30'),
(18, 'Belkys', 'Pages', 'Belkyspages33@gmail.com', '305-491-7805', 'Cual es el precio de  el kit para la flacidez del rostro que mostraste en tu live y como lo puedo comprar.  Necesito hacer mi primera cita porfa avisa cuando puedes abrir el spa.  Gracias ☺️ ', '2020-04-23 13:35:18'),
(19, 'Cecilia', 'Acevedo', 'cecy_garcia01@yahoo.com', NULL, 'Buenas Tardes! Yo vivo en Illinois así que no puedo ir a su spa por la distancia. En últimos dos años eh notado que mi cara a envejecido muchisimo. Tengo 40 años. Tengo más líneas de expresión que no tenia antes. Siento que mi piel está muy reseca. Que crema me recomienda para mi cara? Necesito una crema que la moisturize y mucho....ayúdeme porfavor! ', '2020-05-20 21:50:40'),
(20, 'prueba ', 'malcom', 'villegasalgarra@hotmail.com', '9542600000', 'prueba desde ficha de contacto ', '2020-05-24 16:55:47'),
(21, 'test', 'test', 'armstrong7661@gmail.com', '9044796112', 'test', '2020-06-02 16:15:41'),
(22, 'Jessica', 'Rolon', 'jrolon1@bellsouth.net', '3059872215', 'Hola Valentina, \nEstuve con Omayda esta manana cuando\nTu entrastes y que bueno que estrastes en el cuarto de ella. Porque Omayda me hablo de ti. (Te sentías mariada).  Quería una evaluación para el camouflage de estrías y de microblading de cejas.  Gracias  ', '2020-06-26 15:43:01'),
(23, 'Malcolm', 'Cordova', 'mercadocreativo@gmail.com', '04241874370', 'dassa', '2020-06-27 16:06:32'),
(24, 'Malcolm', 'Cordova', 'mercadocreativo@gmail.com', '04241874370', 'sad', '2020-06-27 16:06:40'),
(25, 'Malcolm', 'Cordova', 'mercadocreativo@gmail.com', '04241874370', '1342', '2020-06-27 16:28:50'),
(26, 'Malcolm', 'Cordova', 'mercadocreativo@gmail.com', '04241874370', 'prueba', '2020-06-27 16:44:06'),
(27, 'Tracy', 'Xu', 'xyf58462@gmail.com', '13236966988', 'Hi there,\n\nWe have some BEST SELLERs, and now we are looking for cooperators worldwide for long-term cooperation.\n\nOur main product is Laser Skin Beautifier. the functions include: hair removel, freckle, fade red blood silk, whiten skin, lift wrinkle removal, and import of essential oil.\nThis is our product detail:  https://www.facebook.com/cameraingshop/posts/2760169494213815\n\nIf ok for you we can discuss more details online.\n\nBest wishes,\nTracy', '2020-06-28 08:23:38'),
(28, 'Tracy', 'Xu', 'xyf58462@gmail.com', '13236966988', 'Hi there,\n\nWe have some BEST SELLERs, and now we are looking for cooperators worldwide for long-term cooperation.\n\nOur main product is Laser Skin Beautifier. the functions include: hair removel, freckle, fade red blood silk, whiten skin, lift wrinkle removal, and import of essential oil.\nThis is our product detail:  https://www.facebook.com/cameraingshop/posts/2760169494213815\n\nIf ok for you we can discuss more details online.\n\nBest wishes,\nTracy', '2020-06-29 04:13:29'),
(29, 'Julie', 'Mallory', 'julie.madora@hotmail.com', '9545542351', 'Hi, I met with you last Friday in regards to Fibroblast. Can you please tell me how long you have been doing this treatment and where you did your training?\nThank you\nJulie Mallory ', '2020-06-30 00:59:50'),
(30, 'test', 'test', 'Test@test.com', '1234567890', 'test', '2020-06-30 15:46:25'),
(31, 'test', 'test', 'Test@test.com', '1234654970', 'test', '2020-07-01 15:07:19'),
(32, 'Jose Reynerio', 'Vallecillo', 'reynerio.olivas@gmail.com', '3055920839', 'test', '2020-07-01 15:08:25'),
(33, 'ROBERT', 'SAMAYOA', 'armstrong7661@gmail.com', '3055920839', 'test', '2020-07-01 22:26:12'),
(34, 'Precious', 'Pueda', 'preshiouserica@gmail.com', '9546433737', 'Hi, I was wondering if you are hiring part time or full time. I am a licensed esthetician ', '2020-07-13 22:33:37'),
(35, 'María', 'Gabriela', 'gabyaponte01@gmail.com', '+58 414-2010298', 'regálame una franquicia!!!', '2020-07-15 19:37:51'),
(36, 'Gaby', 'Aponte', 'apontemariae@gmail.com', '+58 414-2010298', 'TE ESCRIBO DESDE CONTACTO', '2020-07-15 19:39:28'),
(37, 'Malcolm', 'Cordova', 'mercadocreativo@gmail.com', '04241874370', 'prueba desde contacto', '2020-07-15 20:06:12'),
(38, 'Malcolm', 'Cordova', 'mercadocreativo@gmail.com', '04241874370', 'prueba desde franquicia', '2020-07-15 20:06:33'),
(39, 'ABC', 'ABC', 'ivillegas@asincro.com', '7862601195', 'TEST CONTACT ', '2020-07-16 16:11:19'),
(40, 'Malcolm', 'Cordova', 'mercadocreativo@gmail.com', '04241874370', 'prueba desde contacto', '2020-07-16 18:12:21'),
(41, 'Malcolm', 'Cordova', 'mercadocreativo@gmail.com', '04241874370', 'pruebaaaaa', '2020-07-16 18:13:15'),
(42, 'Malcolm', 'Cordova', 'mercadocreativo@gmail.com', '04241874370', 'desde franquicia', '2020-07-16 18:14:31'),
(43, 'malcolm', 'cordova', 'mercadocreativo@gmail.com', '04241874370', 'pruebaaaa', '2020-07-16 18:53:25'),
(44, 'Malcolm', 'Cordova', 'mercadocreativo@gmail.com', '04241874370', 'pruebaaa', '2020-07-16 18:56:02'),
(45, 'Malcolm', 'Cordova', 'mercadocreativo@gmail.com', '04241874370', 'prueba', '2020-07-16 19:07:12'),
(46, 'Maru', 'Aponte', 'apontemariae@gmail.com', '+584122070144', 'PRUEBA DESDE CONTACT INGLÉS', '2020-07-16 19:15:16'),
(47, 'Maru ', 'Aponte', 'apontemariae@gmail.com', '+584122070144', 'PRUEBA DESDE FRANCHISE INGLÉS', '2020-07-16 19:16:14'),
(48, 'Maru', 'Aponte', 'apontemariae@gmail.com', '+584122070144', 'PRUEBA DESDE CONTACTO ESPAÑOL', '2020-07-16 19:17:06'),
(49, 'Maru', 'Aponte', 'apontemariae@gmail.com', '+584122070144', 'PRUEBA DESDE FRANQUICIA ESPAÑOL\n', '2020-07-16 19:17:46'),
(50, 'Malcolm', 'Cordova', 'mercadocreativo@gmail.com', '04241874370', 'pruebaaa', '2020-07-16 20:16:32'),
(51, 'Malcolm', 'Cordova', 'mercadocreativo@gmail.com', '04241874370', 'prueba desde franquicia', '2020-07-16 20:17:47'),
(52, 'Malcolmd', 'Cordova', 'mercadocreativo@gmail.com', '04241874370', 'asdsa', '2020-07-16 20:18:40'),
(53, 'das', 'das', 'mercadocreativo@gmail.com', '04241874370', 'adsdsaasd', '2020-07-16 20:19:52'),
(54, 'Malcolm', 'Cordova', 'mercadocreativo@gmail.com', '04241874370', 'das', '2020-07-16 20:26:06'),
(55, 'Malcolmd', 'Cordova', 'mercadocreativo@gmail.com', '04241874370', 'as', '2020-07-16 20:49:05'),
(56, 'Malcolm', 'Cordova', 'mercadocreativo@gmail.com', '04241874370', 'pruebaa', '2020-07-17 15:17:20'),
(57, 'Malcolm', 'Cordova', 'mercadocreativo@gmail.com', '04241874370', 'pruebaa', '2020-07-17 15:37:34'),
(58, 'Malcolm', 'Cordova', 'mercadocreativo@gmail.com', '04241874370', 'prueba desde español', '2020-07-17 15:40:08'),
(59, 'Malcolm', 'Cordova', 'mercadocreativo@gmail.com', '04241874370', 'preuba desde  contact', '2020-07-17 15:41:53'),
(60, 'Malcolm', 'Cordova', 'mercadocreativo@gmail.com', '04241874370', 'prueba desde franquicia', '2020-07-17 15:43:32'),
(61, 'Malcolm', 'Cordova', 'mercadocreativo@gmail.com', '04241874370', 'preuba desde el spanishe', '2020-07-17 15:45:44'),
(62, 'Maru', 'Aponte', 'apontemariae@gmail.com', '+584122070144', 'mensaje desde FINANCING Inglés- enviado el 17 de Julio', '2020-07-17 15:51:50'),
(63, 'Maru', 'Aponte', 'apontemariae@gmail.com', '+584122070144', 'mensaje desde CONTACT Inglés- enviado el 17 de Julio', '2020-07-17 15:52:33'),
(64, 'Maru', 'Aponte', 'apontemariae@gmail.com', '+584122070144', 'mensaje desde FRANQUICIA Español- enviado el 17 de Julio', '2020-07-17 15:53:29'),
(65, 'Maru', 'Aponte', 'apontemariae@gmaul.com', '+584122070144', 'mensaje desde CONTACTO Español - enviado el 17 de Julio', '2020-07-17 15:54:27'),
(66, 'Malcolm', 'Cordova', 'mercadocreativo@gmail.com', '04241874370', 'pruebaa', '2020-07-17 17:11:50'),
(67, 'Malcolm', 'Cordova', 'mercadocreativo@gmail.com', '04241874370', 'dasdas', '2020-07-17 17:15:38'),
(68, 'Malcolm', 'Cordova', 'mercadocreativo@gmail.com', '04241874370', 'affd', '2020-07-17 17:16:58'),
(69, 'Malcolm', 'Cordova', 'mercadocreativo@gmail.com', '04241874370', 'ads', '2020-07-17 17:35:45'),
(70, 'Maru', 'Aponte', 'apontemariae@gmail.com', '+584122070144', 'Mensaje enviado desde FRANCHISE inglés -  17 de julio 1:48 pm', '2020-07-17 17:48:33'),
(71, 'Maru', 'Aponte', 'apontemariae@gmail.com', '+584122070144', 'Mensaje enviado desde CONTACT inglés -  17 de julio 1:49 pm', '2020-07-17 17:49:19'),
(72, 'Maru ', 'Aponte', 'apontemariae@gmail.com', '+584122070144', 'Mensaje enviado desde FRANQUICIA español -  17 de julio 1:50 pm', '2020-07-17 17:50:18'),
(73, 'Maru', 'Aponte', 'apontemarie@gmail.com', '+584122070144', 'Mensaje enviado desde CONTACTO español -  17 de julio 1:51 pm', '2020-07-17 17:51:18'),
(74, 'Malcolm', 'Cordova', 'mercadocreativo@gmail.com', '04241874370', 'fads', '2020-07-17 18:25:18'),
(75, 'Prueba ', 'Contacto ', 'IVILLEGAS@ASINCRO.COM', NULL, 'Test contacto ', '2020-07-17 20:09:27'),
(76, 'Test ', 'Contact ', 'IVILLEGAS@ASINCRO.COM', NULL, 'Tease desde contacto ', '2020-07-17 20:09:58'),
(77, 'Prueba ', 'Franquicia ', 'IVILLEGAS@ASINCRO.COM', NULL, 'Franquicia ', '2020-07-17 20:11:52'),
(78, 'Malcolm', 'Cordova', 'mercadocreativo@gmail.com', '04241874370', 'Prueba desde movil', '2020-07-17 22:13:22'),
(79, 'test ', 'Franquicia', 'frqnuicia@francuicia.com', NULL, 'test ', '2020-07-21 14:05:28'),
(80, 'test ', 'contacto', 'contacto@contacto.com', NULL, 'test contacto ingles ', '2020-07-21 14:06:54'),
(81, 'sdasdasd', 'fasfsd', 'contact@ajhdja.com', NULL, 'pdf gragfdv fdfg  ', '2020-07-21 14:07:24'),
(82, 'MARU', 'APONTE', 'apontemariae@gmail.com', '04122070144', 'desde contact', '2020-07-21 14:44:44'),
(83, 'Ivg', 'Ivg', 'IVILLEGAS@ASINCRO.COM', NULL, 'Test safari Cel ', '2020-07-21 14:45:54'),
(84, 'Babsb', 'Bsbdb', 'Bdbdbd@abc.com', NULL, 'Chrome Cel contacto ', '2020-07-21 14:46:57'),
(85, 'Jajajaja ', 'Shshsh', 'Ahsh@dhshsh.com', NULL, 'Hdbsbsbsn', '2020-07-21 14:49:29'),
(86, 'Maru', 'Aponte', 'Apontemariae@gmail.com', '041220170144', 'Holaaaaaaàaaaa', '2020-07-21 14:50:08'),
(87, 'Maru', 'Aponte', 'Apontemariae@gmail.com', '04122070144', 'Nuevooooookkkkkk', '2020-07-21 14:51:49'),
(88, 'Ignacio ', 'Cordova ', 'Ivillegasg@me.com', NULL, 'Test chrome Cel ', '2020-07-21 14:53:55'),
(89, 'J', 'Ghggh', 'valgarra@kidstimeonline.com', NULL, 'Text ipad ', '2020-07-21 14:55:26'),
(90, 'Maru', 'Aponte', 'Apontemariae@gmail.com', '041220170144', 'Holaaaaaaaaaa', '2020-07-21 14:58:54'),
(91, 'Djjdj', 'Djdjdj', 'Iville@asinnda.com', NULL, 'Djddj', '2020-07-21 15:01:33'),
(92, 'Yo', 'Yo', 'Apontemariae@gmail.com', NULL, 'Ultimoooo', '2020-07-21 15:02:44'),
(93, 'Nsbdb', 'Dndndb', 'Ivillegas@vali.com', '9542692747', 'Con teléfono ', '2020-07-21 15:04:32'),
(94, 'Malcolm', 'Cordova', 'mercadocreativo@gmail.com', '04241874370', 'pruebaaa', '2020-07-21 20:43:10'),
(95, 'Malcolm', 'Cordova', 'mercadocreativo@gmail.com', '', 'dsfs', '2020-07-21 20:43:59'),
(96, 'Malcolm', 'Cordova', 'mercadocreativo@gmail.com', '', 'dsadsa', '2020-07-21 20:55:38'),
(97, 'Malcolm', 'Cordova', 'mercadocreativo@gmail.com', '', 'prueba sin telefono desde español ', '2020-07-21 21:07:02'),
(98, 'maru', 'aponte', 'apontemariae@gmail.com', NULL, 'prueba de envío', '2020-07-21 22:13:42'),
(99, 'demo', 'demo', 'demo@demo.com', '3055920839', 'demo form submission', '2020-07-27 21:22:35'),
(100, 'demo', 'demo', 'demo@demo.com', '3055920839', 'demo form submission', '2020-07-27 21:24:05'),
(101, 'demo', 'demo', 'demo@demo.com', '3055920839', 'form submission demo', '2020-07-27 21:25:18'),
(102, 'demo', 'demo', 'demo@demo.com', '3055920839', 'demo form submission', '2020-07-27 21:29:58'),
(103, 'PRUEBA ', 'FINAL ', 'villegasalgarra@hotmail.com', NULL, 'contacto ingles ', '2020-07-29 17:12:35'),
(104, 'FINAL ', 'FRANQUICIA ', 'villegasalgarra@hotmail.com', NULL, 'FINAL FRANQUICIA TEST ', '2020-07-29 17:13:46'),
(105, 'ESPAÑOL ', 'FRANQUICIA ', 'villegasalgarra@hotmail.com', '9542602747', 'ESPAOÑ FRANQUICIA FINAL ', '2020-07-29 17:15:06'),
(106, 'ESPAÑOL ', 'CONTACTO ', 'villegasalgarra@hotmail.com', NULL, 'CONTACTO FINAL ESPAÑOL ', '2020-07-29 17:15:31'),
(107, 'FINAL ', 'CONTACT ', 'ivillegasg@me.com', '9542602747', 'CONTACTO FORMA  INGLES ', '2020-07-29 17:17:08'),
(108, 'PRUEBA ', 'CHROME ', 'XYZ@FINAL.COM', NULL, 'ESPAÑOL CONTACTO ', '2020-07-29 17:18:12'),
(109, 'Malcolm', 'Cordova', 'mercadocreativo@gmail.com', '', 'prueba', '2020-07-29 23:38:30');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fibrofaces`
--

CREATE TABLE `fibrofaces` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `titleesp` varchar(255) NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `description` text,
  `descriptionesp` text NOT NULL,
  `price` varchar(255) NOT NULL,
  `popup` varchar(255) NOT NULL,
  `button` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `is_featured` tinyint(1) NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `created_at` datetime NOT NULL,
  `textFinanc` varchar(255) NOT NULL,
  `textFinancEsp` varchar(255) NOT NULL,
  `is_activeTf` varchar(255) NOT NULL,
  `target` varchar(255) NOT NULL,
  `buttonEs` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `fibrofaces`
--

INSERT INTO `fibrofaces` (`id`, `title`, `titleesp`, `user_id`, `category_id`, `description`, `descriptionesp`, `price`, `popup`, `button`, `image`, `is_featured`, `is_active`, `created_at`, `textFinanc`, `textFinancEsp`, `is_activeTf`, `target`, `buttonEs`) VALUES
(1, 'free Consultation Appointment', 'Consulta Gratuita', 1, 0, '<p>Let our skin experts help you choose the perfect treatment with your face or body concern in your visit. Our first consultation is FREE, No Obligation, if you agree with the recommendation we will do the treatment the same day or we schedule a new appointment.&nbsp;<br><br><i><strong>Let yourself, come, relax and enjoy with us!!</strong></i></p>', '<p>Deje que nuestros expertos en piel lo ayuden a elegir el tratamiento perfecto para su rostro o cuerpo cuando nos visite. Nuestra primera cita es GRATUITA, Sin Obligación. Si está de acuerdo con la recomendación haremos el tratamiento el mismo día o programaremos una nueva cita.&nbsp;</p><p>&nbsp;</p><p><i><strong>Déjate llevar, relájate y disfruta con nosotros!</strong></i></p>', 'Free', 'modal1', '/booking-fibroblast', '1_FREE-CONSULTATION.jpg', 1, 1, '2018-10-27 04:12:09', 'test', 'test', 'displayNone', '_self', '/es/booking-fibroblast'),
(2, 'Upper eyelids', 'Párpados superiores', 1, 0, '<p>Tighten upper eyelid wrinkles reduce the fine lines, excess skin and sun spots.</p>', '<p>Reduce las arrugas de los párpados superiores, reduce las líneas finas, el exceso de piel y las manchas solares.</p>', '400.00', 'Uppere', '/booking-fibroblast', '2_UPPER-EYELIDS.jpg', 1, 1, '2018-10-27 06:12:09', 'test', 'test', 'displayNone', '_self', '/es/booking-fibroblast'),
(3, 'Lower Eyelids', 'Párpados inferiores. ', 1, 0, '<p>Tighten lower eyelid wrinkles reduce the fine lines, excess skin and sun spots.</p>', '<p>Apriete las arrugas del párpado inferior, reduzca las líneas finas, el exceso de piel y las manchas solares.</p>', '400.00', 'Lowere', '/booking-fibroblast', '3_LOWER-EYELIDS.jpg', 1, 1, '2018-10-27 07:12:09', 'test', 'test', 'displayNone', '_self', '/es/booking-fibroblast'),
(4, 'Upper & Lower Eyelids with FREE Crows Feet Fibroblast Package', 'Parpados Inferiores y superiores con patas de gallo Gratis. ', 1, 0, '<p>Special package for Eyelids !!!</p>', '<p>Paquete especial para fibroblast en el área de los párpados</p>', '800.00', 'Upper2', '/booking-fibroblast', '4_Upper--Lower-Eyelids-with-FREE-Crows-Feet-Fibroblast-Package.jpg', 1, 1, '2018-10-27 09:12:09', 'test', 'test', 'displayNone', '_self', '/es/booking-fibroblast'),
(5, 'Accordion lines (Nasolabial Fold)', 'Líneas de acordeón. ', 1, 0, '<p>The lines that form outside of the mouth when you smile</p>', '<p>Son las líneas que se forman fuera de la boca cuando sonríes.</p>', '250.00', 'Accordion', '/booking-fibroblast', '5_ACCORDION-LINES.jpg', 1, 1, '2018-10-27 10:12:09', 'test', 'est', 'displayNone', '_self', '/es/booking-fibroblast'),
(6, 'Under the eyes', 'Area debajo de los ojos. ', 1, 0, '<p>Reduce the appearance of lines, excess of skin and dark spots.</p>', '<p>Reduce la aparición de líneas de expresión en esta zona, el exceso de piel y manchas oscuras.</p>', '250.00', 'Under2', '/booking-fibroblast', '6_UNDER-THE-EYES.jpg', 1, 1, '2018-10-27 12:12:09', 'test', 'test', 'displayNone', '_self', '/es/booking-fibroblast'),
(7, 'Crow\'s feet around the eyes', 'Patas de gallo alrededor de los ojos', 1, 0, '<p>Decrease the appearance of harsh wrinkles</p>', '<p>Disminuye la apariencia de arrugas en el área externa de los ojos.&nbsp;</p>', '250.00', 'feet', '/booking-fibroblast', '7_CROWS-FEET-AROUND-THE-EYES.jpg', 1, 1, '2019-07-28 02:53:36', 'test', 'test', 'displayNone', '_self', '/es/booking-fibroblast'),
(8, 'Glabella (Frown lines)', 'Glabella (Frown Lines) ', 1, 0, '<p>Reduce the appearance of frown lines.</p>', '<p>Reduce la apariencia de las líneas de expresión.</p>', '300.00', 'Glabella', '/booking-fibroblast', '8_GLABELLA-FROWN-LINES.jpg', 1, 1, '2019-07-28 02:54:11', 'test', 'test', 'displayNone', '_self', '/es/booking-fibroblast'),
(9, 'Before Ear Lines Fibrioblast', 'Área de las líneas de las  orejas  ', 1, 0, '<p>Tight the skin before ears</p>', '<p>Disminuye las líneas de expresión ásperas.</p>', '250.00', 'ear', '/booking-fibroblast', '9_Before-Ear-Lines-Fibrioblast.jpg', 1, 1, '2019-07-28 02:54:48', 'test', 'test', 'displayNone', '_self', '/es/booking-fibroblast'),
(10, 'Acne Scars', 'Cicatrices de acné', 1, 0, '<p>Improvement in the appearance of post acne marks and scars.</p>', '<p>Mejora en la aparición de marcas y cicatrices post-acné.</p>', 'Starting at $400.00', 'Acne', '/booking-fibroblast', '10_ACNE-SCARS.jpg', 1, 1, '2019-07-28 02:55:25', 'test', 'test', 'displayNone', '_self', '/es/booking-fibroblast'),
(11, 'Forehead lines', 'Líneas de la frente ', 1, 0, '<p>Decrease the appearance of harsh expressions and wrinkles.</p>', '<p>Disminuyen la aparición de expresiones ásperas y arrugas.</p>', '350.00', 'Forehead', '/booking-fibroblast', '11_FOREHEAD-LINES.jpg', 1, 1, '2019-07-28 02:56:05', 'test', 'tes', 'displayNone', '_self', '/es/booking-fibroblast'),
(12, 'Nasolabial fold', 'Pliegue naso labial ', 1, 0, '<p>Soften the appearance of (parentheses) smile lines that add years to your face.</p>', '<p>Suaviza la apariencia de las líneas de sonrisa (paréntesis) que agregan años a su rostro.</p>', '250.00', 'Nasolabial', '/booking-fibroblast', '12_NASOLABIAL-FOLD.jpg', 1, 1, '2019-07-28 02:56:45', 'test', 'test', 'displayNone', '_self', '/es/booking-fibroblast'),
(13, 'Upper Lips (Bar code)', 'Labios superiores (Código de barras) ', 1, 0, '<p>Soften the appearance of \"smoker lines\" or \"straw lines\"</p>', '<p>Suavizan la apariencia de las \"líneas de fumador\" o \"código de barra\"</p>', '250.00', 'upLips', '/booking-fibroblast', '13_UPPER-LIPS-BAR-CODE.jpg', 1, 1, '2019-07-28 02:57:28', 'test', 'test', 'displayNone', '_self', '/es/booking-fibroblast'),
(14, 'Lower lips (lower lips)', 'Labio inferior', 1, 0, '<p>Before ear lines diminish harsh expression lines.</p>', '<p>Antes de las líneas de la oreja Disminuye las líneas de expresión ásperas.</p>', '250.00', 'Lower', '/booking-fibroblast', '14_LOWER-LIPS.jpg', 1, 1, '2019-07-28 02:58:06', 'test', 'test', 'displayNone', '_self', '/es/booking-fibroblast'),
(15, 'Jaw lines', 'Líneas de la mandíbula', 1, 0, '<p>Tight the skin for good.</p>', '<p>Aprieta la piel de la mandíbula para siempre</p>', '250.00', 'Jaw', '/booking-fibroblast', '15_JAW-LINES.jpg', 1, 1, '2019-07-28 02:58:57', 'test', 'test', 'displayNone', '_self', '/es/booking-fibroblast'),
(16, 'Jowl line', 'Papada', 1, 0, '<p>Reduce the excess of skin and lift your face</p>', '<p>Reduce los excesos de piel y pule tu cara</p>', '300.00', 'Jowl', '/booking-fibroblast', '16_JOWL-LINE.jpg', 1, 1, '2019-07-28 02:59:37', 'test', 'test', 'displayNone', '_self', '/es/booking-fibroblast'),
(17, 'Marionette lines', 'Líneas de Marioneta ', 1, 0, '<p>Refresh the smile zone</p>', '<p>Refresca tu sonrisa trabajando la zona de los laterales inferiores de los labios.</p>', '400.00', 'Marionette', '/booking-fibroblast', '17_MARIONETTE-LINES.jpg', 1, 1, '2019-07-28 03:00:13', 'test', 'e', 'displayNone', '_self', '/es/booking-fibroblast'),
(18, 'V Shape Contouring', 'Zona  V del rostro', 1, 0, '<p>Soften the appearance of lines and wrinkles</p>', '<p>Suaviza la aparición de líneas y arrugas en tu zona V de la cara.</p>', '400.00', 'Shape', '/booking-fibroblast', '18_V-Shape-Contouring.jpg', 1, 1, '2019-07-28 03:01:02', 'test', 'test', 'displayNone', '_self', '/es/booking-fibroblast'),
(19, 'Chin', 'Barbilla ', 1, 0, '<p>Reduce the appearance of lines and wrinkles</p>', '<p>Reduce la aparición de líneas y arrugas en esta zona.&nbsp;</p>', '300.00', 'Chin', '/booking-fibroblast', '19_CHIN.jpg', 1, 1, '2019-07-28 03:01:37', 'test', 'test', 'displayNone', '_self', '/es/booking-fibroblast'),
(20, 'Lower Face', 'Parte Baja de la Cara ', 1, 0, '<p>Includes Nasolabial Folds, Lip Lines, Marionette Lines, Chin, Jowl Lift, Jaw Lines, V Shapes Contouring (Neck Not Included).</p>', '<p>Incluye Pliegues Nasolabiales, Líneas de Labios, Líneas de Marioneta, Barbilla, Líneas de Mandíbula, Contorno en Forma de V (Cuello No Incluido)</p>', '950.00', 'Lowerf', '/booking-fibroblast', '20_LOWER-FACE.jpg', 1, 1, '2019-07-28 03:02:16', 'test', 'test', 'displayNone', '_self', '/es/booking-fibroblast'),
(21, 'Full Face', 'Cara Completa ', 1, 0, '<p>Includes all the fibroblast zones in the face, you can exclude any zone. (Neck Not Included)</p>', '<p>Incluye todas las zonas en la cara, puede excluir cualquier zona. (Cuello no incluido)</p>', '1,900.00', 'Full', '/booking-fibroblast', '21_FULL-FACE.jpg', 1, 1, '2019-07-28 03:02:53', 'tet', 'test', 'displayNone', '_self', '/es/booking-fibroblast');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gallerys`
--

CREATE TABLE `gallerys` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `description` text,
  `image` varchar(255) DEFAULT NULL,
  `is_featured` tinyint(1) NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `gallerys`
--

INSERT INTO `gallerys` (`id`, `title`, `user_id`, `category_id`, `description`, `image`, `is_featured`, `is_active`, `created_at`) VALUES
(2, 'Sample blog post 2', 1, 1, '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', 'location-vali.jpeg', 1, 1, '2018-10-27 06:12:09'),
(3, 'Sample blog post 3', 1, 2, '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', 'location-vali1.jpg', 0, 1, '2018-10-27 07:12:09'),
(4, 'Sample blog post 4', 1, 2, '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', 'location-vali2.jpg', 0, 1, '2018-10-27 09:12:09'),
(5, 'Sample blog post 5', 1, 7, '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', 'location-vali3.jpg', 1, 1, '2018-10-27 10:12:09'),
(6, 'Sample blog post 6', 1, 7, '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', 'location-vali4.jpg', 0, 1, '2018-10-27 12:12:09'),
(7, 'prueba', 1, 0, 'prueba', 'BODY-hand.jpg', 0, 0, '2019-07-20 19:08:23');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `hands`
--

CREATE TABLE `hands` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `titleesp` varchar(255) NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `description` text,
  `descriptionesp` text NOT NULL,
  `price` varchar(255) NOT NULL,
  `popup` varchar(255) NOT NULL,
  `button` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `is_featured` tinyint(1) NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `created_at` datetime NOT NULL,
  `is_activeTf` varchar(255) NOT NULL,
  `textFinanc` varchar(255) NOT NULL,
  `textFinancEsp` varchar(255) NOT NULL,
  `target` varchar(255) NOT NULL,
  `buttonEs` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `hands`
--

INSERT INTO `hands` (`id`, `title`, `titleesp`, `user_id`, `category_id`, `description`, `descriptionesp`, `price`, `popup`, `button`, `image`, `is_featured`, `is_active`, `created_at`, `is_activeTf`, `textFinanc`, `textFinancEsp`, `target`, `buttonEs`) VALUES
(1, 'Hands hydrating with Exfoliation paraffin treatments', 'Manos hidratadas con exfoliación de parafina.', 1, 1, '<p>The paraffin treatments have many therapeutic benefits for internal ailments as well but the truth is, it can be more than just an add-on to a manicure. We offer it in our spa because we think that it could be a helpful treatment not just to hydrate your hands also to treat some conditions like arthritis and fibromyalgia among others. A wax treatment acts as a type of thermotherapy, or heat therapy, that helps treat these conditions by increasing blood flow, relaxing muscles and reducing stiffness in joints. It can also help with minimizing muscle spasms and inflammation, and to treat sprains and pulled muscles. Can also help with lowering fluid retention and flushing toxins, which can reduce swelling. In addition to soothing and healing the skin, paraffin treatments have many therapeutic benefits for internal ailments as well.&nbsp;<br><br>Paraffin wax therapy can be particularly effective for those suffering from osteoarthritis and rheumatoid arthritis. Regular paraffin hand treatments can help relax joints and relieve pain in hands before physical therapy and exercise.&nbsp;<br><br>After several layers are added, the wax will be covered in a plastic bag, wrapped in hot towels and you can relax as the benefits kick in. The wax will trap the heat against your skin as it hardens, opening the pores. Once the wax is completely cooled it will be pulled away, taking dead skin cells along with it. ). Its warm temperature is meant to provide relief from arthritis pain, sore joints or sore muscles. You can use paraffin wax (may be called either paraffin or wax) to apply moist heat to your hands or feet to ease the pain and stiffness of osteoarthritis. Paraffin especially helps to reduce pain and loosen up your hand and finger joints before exercise.&nbsp;<br><br>A paraffin treatment creates a sort of barrier on your skin that helps retain the oils that your body naturally produces. ... Paraffin wax can be effective in soothing and softening calluses on hands and healing dry cracked skin.</p>', '<p>Los tratamientos con parafina también tienen muchos beneficios terapéuticos para las dolencias internas, pero la verdad es que puede ser algo más que un complemento a la manicura. Lo ofrecemos en nuestro spa porque creemos que podría ser un tratamiento útil no solo para hidratar las manos, sino también para tratar algunas afecciones como la artritis y la fibromialgia, entre otras. Un tratamiento con cera actúa como un tipo de termoterapia o terapia de calor que ayuda a tratar estas afecciones al aumentar el flujo de sangre, relajar los músculos y reducir la rigidez en las articulaciones. También puede ayudar a minimizar los espasmos musculares y la inflamación,&nbsp; ayuda con la reducción de la retención de líquidos y el lavado de toxinas, que pueden reducir la hinchazón. Además de calmar y curar la piel; los tratamientos con parafina también tienen muchos beneficios terapéuticos para las dolencias internas.</p><p>&nbsp;</p><p>Nuestro tratamiento de parafina es una terapia especial debido a los beneficios que aporta a su piel.</p><p>Un tratamiento con parafina es una caricia para calmar y curar la piel. Ya sea que busque mantener su piel sana o curar las manos secas y agrietadas, los beneficios cosméticos y curativos de un tratamiento con parafina son numerosos. La apertura de los poros y la eliminación de las células muertas de la piel rejuvenecerán la apariencia de su piel y harán que sus manos y pies se sientan sedosos y suaves.</p><p>&nbsp;</p><p>La terapia con cera de parafina puede ser particularmente efectiva para quienes padecen osteoartritis y artritis reumatoide. Los tratamientos regulares de parafina para la mano pueden ayudar a relajar las articulaciones y aliviar el dolor en las manos antes de la fisioterapia y el ejercicio.</p><p>&nbsp;</p><p>Después de agregar varias capas, la cera se cubrirá con una bolsa de plástico, se envolverá en toallas calientes y podrá relajarse mientras los beneficios se activan. La cera atrapará el calor contra su piel a medida que se endurece, abriendo los poros. Una vez que la cera se haya enfriado por completo, se retirará, llevando consigo células muertas de la piel. Su temperatura cálida está destinada a proporcionar alivio del dolor de la artritis, dolor en las articulaciones o dolor en los músculos.&nbsp;</p><p>&nbsp;</p><p>Un tratamiento con parafina crea una especie de barrera en su piel que ayuda a retener la grasa que su cuerpo produce naturalmente… La cera de parafina puede ser eficaz para calmar y suavizar los callos en las manos y curar la piel seca y agrietada.</p>', '35.00', 'Hands', '/booking-body', '1_HANDS-HYDRATING-WITH-EXFOLIATION-PARAFFIN-TREATMENT.jpg', 1, 1, '2018-10-27 04:12:09', 'displayNone', 'test', 'test', '_self', '/es/booking-body'),
(2, 'Tyred legs and Feet Therapy', 'Terapia de piernas y pies cansados', 1, 1, '<p>Unique and exclusive treatment for all public; We must consent to those twins who lead us day by day, for this we offer this service in which the following is offered, decreases varicose veins, telangiectasia and swelling, relieves heaviness and provides freshness and immediate sensation of rest, relaxes the muscles, revitalizing, toning and decongesting.</p>', '<p>Trato único y exclusivo para todos los públicos;Debemos consentir a los gemelos que nos guían día a día, para esto ofrecemos este servicio en el que se ofrece lo siguiente, disminuye las venas varicosas, telangiectasia e hinchazón, alivia la pesadez y proporciona frescura y sensación inmediata de descanso, relaja los músculos, revitaliza, tonificante y descongestionante.</p>', '80.00', 'Tyred', '/booking-body', '2_TIRED-LEGS-AND-FEET-THERAPY.jpg', 1, 1, '2018-10-27 06:12:09', 'displayNone', 'test', 'test', '_self', '/es/booking-body');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `hypertrophics`
--

CREATE TABLE `hypertrophics` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `titleesp` varchar(255) NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `description` text,
  `descriptionesp` text NOT NULL,
  `price` varchar(255) NOT NULL,
  `popup` varchar(255) NOT NULL,
  `button` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `is_featured` tinyint(1) NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `created_at` datetime NOT NULL,
  `textFinanc` varchar(255) NOT NULL,
  `is_activeTf` varchar(255) NOT NULL,
  `textFinancEsp` varchar(255) NOT NULL,
  `target` varchar(255) NOT NULL,
  `buttonEs` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `hypertrophics`
--

INSERT INTO `hypertrophics` (`id`, `title`, `titleesp`, `user_id`, `category_id`, `description`, `descriptionesp`, `price`, `popup`, `button`, `image`, `is_featured`, `is_active`, `created_at`, `textFinanc`, `is_activeTf`, `textFinancEsp`, `target`, `buttonEs`) VALUES
(1, 'Free Consultation Appointment ', 'Consulta Gratuita', 1, 1, '<p>Let our skin experts help you choose the perfect treatment with your face or body concern in your visit. Our first consultation is FREE, No Obligation, if you agree with the recommendation we will do the treatment the same day or we schedule a new appointment.&nbsp;<br><br><i><strong>Let yourself, come, relax and enjoy with us!!</strong></i></p>', '<p>Deje que nuestros expertos en piel lo ayuden a elegir el tratamiento perfecto para su rostro o cuerpo cuando nos visite. Nuestra primera cita es GRATUITA, Sin Obligación. Si está de acuerdo con la recomendación haremos el tratamiento el mismo día o programaremos una nueva cita.&nbsp;</p><p>&nbsp;</p><p><i><strong>Déjate llevar, relájate y disfruta con nosotros!</strong></i></p>', 'Free', 'modal1', '/booking-fibroblast', '1_FREE-CONSULTATION.jpg', 1, 1, '2018-10-27 04:12:09', 'test', 'displayNone', 'test', '_self', '/es/booking-fibroblast'),
(2, 'Scars / Small area', 'Cicatrices / área pequeña. ', 1, 1, '<p>Decrease the appearance of your small scar with this special treatment. We will need you send us pictures of the treating area before your appointment to decide which treatment is better for you.</p>', '<p>Disminuye la apariencia de tu cicatriz pequeña con este tratamiento especial. Necesitaremos que nos envíe imágenes del área de tratamiento antes de su cita para decidir qué tratamiento es mejor para usted</p>', '700.00', 'ScarsS', '/booking-fibroblast', '2_SCARS-SMALL-AREA.jpg', 1, 1, '2018-10-27 06:12:09', 'test', 'displayNone', 'test', '_self', '/es/booking-fibroblast'),
(3, 'Scars / Medium area', 'Cicatrices / área mediana. ', 1, 2, '<p>Decrease the appearance of your medium scar with this special treatment. We will need you send us pictures of the treating area before your appointment to decide which treatment is better for you.</p>', '<p>Disminuye la apariencia de tu cicatriz mediana con este tratamiento especial. Necesitaremos que nos envíe imágenes del área de tratamiento antes de su cita para decidir qué tratamiento es mejor para usted</p>', '900.00', 'ScarsM', '/booking-fibroblast', '3_SCARS-MEDIUM-AREA.jpg', 1, 1, '2018-10-27 07:12:09', 'test', 'displayNone', 'test', '_self', '/es/booking-fibroblast'),
(4, 'Scars / large area', 'Cicatrices / zona grande. ', 1, 2, '<p>Decrease the appearance of your large scar with this special treatment. We will need you send us pictures of the treating area before your appointment to decide which treatment is better for you.</p>', '<p>Disminuye la apariencia de tu cicatriz grande con este tratamiento especial. Necesitaremos que nos envíe imágenes del área de tratamiento antes de su cita para decidir qué tratamiento es mejor para usted.</p>', '1,400.00', 'modal4', '/booking-fibroblast', '4_SCARS-LARGE-AREA.jpg', 1, 1, '2018-10-27 09:12:09', 'test', 'displayNone', 'test', '_self', '/es/booking-fibroblast'),
(5, 'Stretch marks / small area', 'Estrías / zona pequeña. ', 1, 7, '<p>Decrease the appearance of your small stretch mark with this special treatment. We will need you send us pictures of the treating area before your appointment to decide which treatment is better for you.</p>', '<p>Disminuye la apariencia de tu marca pequeña de estiramiento con este tratamiento especial. Necesitaremos que nos envíe imágenes del área de tratamiento antes de su cita para decidir qué tratamiento es mejor para usted</p>', '900.00', 'modal5', '/booking-fibroblast', '5_STRETCH-MARKS-SMALL-AREA.jpg', 1, 1, '2018-10-27 10:12:09', 'test', 'displayNone', 'test', '_self', '/es/booking-fibroblast'),
(6, 'Stretch marks / medium area', ' Zona de estrías / medias', 1, 7, '<p>Decrease the appearance of your medium stretch mark with this special treatment. We will need you send us pictures of the treating area before your appointment to decide which treatment is better for you.</p>', '<p>Disminuye la apariencia de tu marca pequeña de estiramiento con este tratamiento especial. Necesitaremos que nos envíe imágenes del área de tratamiento antes de su cita para decidir qué tratamiento es mejor para usted</p>', '1,400.00', 'modal6', '/booking-fibroblast', '6_STRETCH-MARKS-MEDIUM-AREA.jpg', 1, 1, '2018-10-27 12:12:09', 'test', 'displayNone', 'test', '_self', '/es/booking-fibroblast'),
(7, 'Stretch marks / large area ', 'Estrías / área grande. ', 1, 0, '<p>Decrease the appearance of your large stretch mark with this special treatment. We will need you send us pictures of the treating area before your appointment to decide which treatment is better for you.</p>', '<p>Disminuye la apariencia de tu marca grande de estiramiento con este tratamiento especial. Necesitaremos que nos envíe imágenes del área de tratamiento antes de su cita para decidir qué tratamiento es mejor para usted</p>', '2,400.00', 'Stretch', '/booking-fibroblast', '7_STRETCH-MARKS-LARGE-AREA.jpg', 1, 1, '2019-07-28 03:14:09', 'test', 'displayNone', 'test', '_self', '/es/booking-fibroblast');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `looks`
--

CREATE TABLE `looks` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `titleesp` varchar(255) NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `description` text,
  `descriptionesp` text NOT NULL,
  `price` varchar(255) NOT NULL,
  `popup` varchar(255) NOT NULL,
  `button` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `is_featured` tinyint(1) NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `created_at` datetime NOT NULL,
  `is_activeTf` varchar(255) NOT NULL,
  `textFinanc` varchar(255) NOT NULL,
  `textFinancEsp` varchar(255) NOT NULL,
  `target` varchar(255) NOT NULL,
  `buttonEs` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `looks`
--

INSERT INTO `looks` (`id`, `title`, `titleesp`, `user_id`, `category_id`, `description`, `descriptionesp`, `price`, `popup`, `button`, `image`, `is_featured`, `is_active`, `created_at`, `is_activeTf`, `textFinanc`, `textFinancEsp`, `target`, `buttonEs`) VALUES
(1, 'Glam makeup look', 'Maquillaje de Noche', 1, 1, '<p>It\'s time to indulge yourself ! Every woman deserves a “Red Carpet Look\" once in a while and our makeup artist professional team can get you ready for your personal night at the Special time.&nbsp;<br><br>Book your best makeup for a holiday party or special occasion. In this makeup application you will be treated to flawless makeup, beautiful eye makeup with a touch of glow, either smokey or natural, perfect blush and lips.</p>', '<p>¡Es hora de consentirse! Cada mujer merece un \"look de alfombra roja\" de vez en cuando y nuestro equipo de maquilladores profesionales puede prepararle para su noche personal en el momento especial.<br>Reserve su mejor maquillaje para una fiesta o una ocasión especial. En esta aplicación de maquillaje, disfrutarás de un maquillaje impecable, un hermoso maquillaje de ojos con un toque de brillo, ya sea ahumado o natural, rubor y labios perfectos.</p>', '100.00', 'modal1', '/booking-makeup', '1_GLAM-MAKEUP-LOOK.jpg', 1, 1, '2018-10-27 04:12:09', 'displayNone', 'test', 'test', '_self', '/es/booking-makeup'),
(2, 'Soft makeup look', 'Maquillaje de día ', 1, 1, '<p>Whether you’re looking for natural, glamorous or something in between, we take a personalized approach to create your perfect look. We recommend it for an special day event but if you are the person that likes the natural but glam makeup look this is your perfect choice !&nbsp;<br><br>Book your treatment for a holiday party or special occasion in this makeup application you will be treated to flawless foundation makeup techniques, beautiful eye makeup either smoke or natural, perfect blush and lips.</p>', '<p>Ya sea que busque un estilo natural, glamoroso o algo intermedio, tomamos un enfoque personalizado para crear su apariencia perfecta. Lo recomendamos para un evento especial del día, pero si eres la persona a quien le gusta el look natural pero con un look glamuroso, ¡esta es tu elección perfecta!</p><p>&nbsp;</p><p>Reserve su cita para una fiesta o una ocasión especial con esta aplicación de maquillaje, se le ofrecerán técnicas de maquillaje de base impecable, maquillaje hermoso para los ojos, ya sea ahumado o natural, rubor y labios perfectos.</p>', '100.00', 'Soft', '/booking-makeup', '2_SOFT-MAKEUP-LOOK.jpg', 1, 1, '2018-10-27 06:12:09', 'displayNone', 'test', 'test', '_self', '/es/booking-makeup'),
(3, 'Sweet 16 / 15 makeup look', 'Maquillaje Quinceañera 16/15.', 1, 2, '<p>We want to be part of your team in your unforgettable and special occasions of your young woman life with an unique and glam glow makeup to be ready to rock that night!!! Let us live with you this moment!!</p>', '<p>¡Queremos ser parte de tu equipo en tus ocasiones inolvidables y especiales de la vida de tu joven con un maquillaje único y glamuroso para estar listo para bailar esa noche! Déjanos vivir contigo este momento !!</p>', '100.00', 'Sweet', '/booking-makeup', '3_SWEET-16-15-MAKEUP-LOOK.jpg', 1, 1, '2018-10-27 07:12:09', 'displayNone', 'test', 'test', '_self', '/es/booking-makeup'),
(4, 'Prom makeup look', 'Maquillaje de fiesta de Graduación', 1, 2, '<p>We also LOVE to fancy up girls for their prom!. High school prom marks the time when you end your teenage years and head into adulthood. It’s the perfect occasion to get glammed up and look your best!!! We will make them glow with glam but natural look for the occasion!!! Let us be part of that history!!!</p>', '<p>También atendemos a las chicas para su fiesta de graduación. El baile de graduación de la escuela secundaria marca el momento en que terminas tu adolescencia y te diriges a la edad adulta. ¡Es la ocasión perfecta para lucir glamorosa y verte lo mejor posible! ¡Las haremos brillar con un aspecto natural para la ocasión! ¡Seamos parte de esa historia!</p>', '100.00', 'Prom', '/booking-makeup', '4_PROM-MAKEUP-LOOK.jpg', 1, 1, '2018-10-27 09:12:09', 'displayNone', 'test', 'test', '_self', '/es/booking-makeup'),
(5, 'Photoshoot makeup - 2 Hours', 'Maquillaje para sesión fotográfica 2 Horas', 1, 7, '<p>We contribute to the look in your images helping you to enhance your beauty with special photography makeup products. We will follow the instructions of the photography expert. Include Retouches.</p>', '<p>Contribuimos a la apariencia de sus imágenes para ayudarlo a mejorar su belleza con productos especiales de maquillaje para fotografía.Seguiremos las instrucciones del experto en fotografía.Incluye Retoques.</p>', '250.00', 'Photos', '/booking-makeup', '5_PHOTOSHOOT-MAKEUP-2-HOURS.jpg', 1, 1, '2018-10-27 10:12:09', 'displayNone', 'test', 'test', '_self', '/es/booking-makeup'),
(6, 'Eyebrow design and tint', 'Diseño de cejas y tinte.', 1, 7, '<p>In Vali Spa Skincare &amp; Makeup, we try to do everything you need to look beautiful. Speaking of eyebrows that are the frame of your eyes, we think that they offer a complete service to pamper this area of your face. To achieve a PERFECT We not only configure your eyebrows, we make an analysis of your facial structure and adopt an architectural approach to define the shape and structure of your forehead. We shape, fill and adjust your eyebrows perfectly!&nbsp;<br><br>With just a touch of dye (non-toxic, organic and natural) you can wear natural and full-looking eyebrows. With a special dye that adheres even to the finest hairs of your eyebrows, simply sit back and relax while our eyebrow experts take your eyebrows and become fabulous with a custom color that will leave you impressed for a week or more, depending on the color. Skin type and home care.</p>', '<p>En Vali Spa Skincare &amp; Makeup, intentamos hacer todo lo que necesitas para lucir bella. Hablando de cejas que son el marco de tus ojos, ofrecemos un servicio completo para mimar esta área de tu cara. Para lograr un balance perfecto no solo configuramos sus cejas, hacemos un análisis de su estructura facial y adoptamos un enfoque arquitectónico para definir la forma y la estructura de su frente. ¡Formamos, llenamos y ajustamos tus cejas perfectamente!</p><p>Con solo un toque de tinte (no tóxico, orgánico y natural) puedes lucir las cejas naturales y de apariencia completa que se adhiere incluso a los pelos más finos de sus cejas, simplemente siéntese y relájese mientras nuestros expertos en cejas las transforman con un color personalizado que lo dejará impresionado por una semana o más, dependiendo del color, tipo de piel y cuidado en el hogar.</p>', '40.00', 'edesign', '/booking-makeup', '6_EYEBROW-DESIGN-AND-TINT.jpg', 1, 1, '2018-10-27 12:12:09', 'displayNone', 'test', 'prueba', '_self', '/es/booking-makeup');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `luxurings`
--

CREATE TABLE `luxurings` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `titleesp` varchar(255) NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `description` text,
  `descriptionesp` text NOT NULL,
  `price` varchar(255) NOT NULL,
  `popup` varchar(255) NOT NULL,
  `button` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `is_featured` tinyint(1) NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `created_at` datetime NOT NULL,
  `textFinanc` varchar(255) NOT NULL,
  `is_activeTf` varchar(255) NOT NULL,
  `textFinancEsp` varchar(255) NOT NULL,
  `target` varchar(255) NOT NULL,
  `buttonEs` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `luxurings`
--

INSERT INTO `luxurings` (`id`, `title`, `titleesp`, `user_id`, `category_id`, `description`, `descriptionesp`, `price`, `popup`, `button`, `image`, `is_featured`, `is_active`, `created_at`, `textFinanc`, `is_activeTf`, `textFinancEsp`, `target`, `buttonEs`) VALUES
(1, 'free Consultation Appointment', 'Consulta Gratuita', 1, 1, '<p>Let our skin experts help you choose the perfect treatment with your face or body concern in your visit. Our first consultation is FREE, No Obligation, if you agree with the recommendation we will do the treatment the same day or we schedule a new appointment.&nbsp;<br><br><i><strong>Let yourself, come, relax and enjoy with us!!</strong></i></p>', '<p>Deje que nuestros expertos en piel lo ayuden a elegir el tratamiento perfecto para su rostro o cuerpo cuando nos visite. Nuestra primera cita es GRATUITA, Sin Obligación. Si está de acuerdo con la recomendación haremos el tratamiento el mismo día o programaremos una nueva cita.&nbsp;</p><p>&nbsp;</p><p><i><strong>Déjate llevar, relájate y disfruta con nosotros!</strong></i></p>', 'Free', 'modal', '/booking-facial', '1_FREE-CONSULTATION.jpg', 1, 1, '2018-10-27 04:12:09', 'test', 'displayNone', 'test', '_self', '/es/booking-facial'),
(2, 'Hydra Facial Advance Skin Treatment', 'Hidra Facial Advance Skin Treatment', 1, 1, '<p>The Hydra Facial treatment is the newest advance in non-laser skin resurfacing. Hydra Facial is the only hydrodermabrasion procedure that combines cleansing, exfoliation, extraction, hydration and antioxidant protection simultaneously, resulting in clearer, more beautiful skin with no discomfort or downtime. The treatment is soothing, moisturizing, non-invasive and non-irritating. Hydration is the foundation of healthy, radiant skin. Irritation of the skin has been proven to increase signs of aging. Hydra Facial is a hydrating and non-irritating treatment</p>', '<p>El tratamiento Hidra Facial es el avance más reciente en el rejuvenecimiento cutáneo sin láser. Hidra Facial es el único procedimiento de hidrodermabrasión que combina limpieza, exfoliación, extracción, hidratación y protección antioxidante simultáneamente, dando como resultado una piel más clara y bella, sin molestias ni tiempo de inactividad. El tratamiento es calmante, hidratante, no invasivo y no irritante. La hidratación es la base de una piel sana y radiante. Se ha comprobado que la irritación de la piel aumenta los signos del envejecimiento.&nbsp;</p>', '100.00', 'Hydro', '/booking-facial', '2_HYDRA-FACIAL-ADVANCE-SKIN-TREATMENT.jpg', 1, 1, '2018-10-27 06:12:09', 'test', 'displayNone', 'test', '_self', '/es/booking-facial'),
(3, 'Red Carpet Facial', 'Facial Alfombra Roja', 1, 2, '<p>Thinking about what we can offer our clients to show them how important they are to us, we created a three-hour treatment that includes almost all anti-aging tools in our arsenal. Beginning with a complete cleansing and exfoliation with diamond peel, your skin specialist will perform a specialized lymphatic drainage massage. This is followed by a gentle non-surgical face lift that uses micro currents to restore elasticity, stimulate circulation and re-sculpt the facial structure. Finally, your skin is treated with a nourishing caviar facial mask, a mega-moisturizing treatment for the eyes and a curative LED light therapy. Throughout this age-defying treatment, you will receive a relaxing massage that includes a treatment for hands and feet.</p>', '<p>Pensando en lo que podemos ofrecerles a nuestros clientes mas exigentes y demostrarles cuán importantes son para nosotros, creamos un tratamiento de tres horas que incluye casi todas las herramientas antienvejecimiento. Comenzando con una limpieza completa y una exfoliación con punta de diamante, su especialista en piel realizará undrenaje linfático. A esto le sigue un suave estiramiento facial no quirúrgico que utiliza micro corrientes para restaurar la elasticidad, estimular la circulación y volver a esculpir la estructura facial. Finalmente, tu piel es tratada con una nutriente mascarilla facial de caviar, un tratamiento mega-hidratante para los ojos y una terapia de luz LED. A lo largo de este tratamiento que desafía la edad, recibirá un masaje relajante que incluye un tratamiento para las manos y los pies</p><p>En cada tratamiento debemos realizar el debido cuidado en el hogar para ver mejores resultados a corto plazo. Importante el uso de protector solar para evitar daños en la piel.</p>', '250.00 ', 'Red', '/booking-facial', '3_RED-CARPET-FACIAL.jpg', 1, 1, '2018-10-27 07:12:09', 'or $28 monthly ', 'displayBlok', 'or $28 al mes ', '_self', '/es/booking-facial');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `modals`
--

CREATE TABLE `modals` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `description` text,
  `image` varchar(255) DEFAULT NULL,
  `is_featured` tinyint(1) NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `modals`
--

INSERT INTO `modals` (`id`, `title`, `user_id`, `category_id`, `description`, `image`, `is_featured`, `is_active`, `created_at`) VALUES
(2, 'modal home', 1, 1, 'as', 'POPUP.jpg', 1, 0, '2018-10-27 06:12:09'),
(3, 'Modal2', 1, 0, 'modal', 'PROMO-VALI-800x900px.jpg', 0, 0, '2019-09-05 17:04:41'),
(5, 'Store', 1, 0, '', 'post_STORE_definitivo_.jpg', 0, 0, '2020-02-04 15:08:08'),
(8, 'Membership', 1, 0, '', 'Sin_título.jpg', 0, 1, '2020-06-13 19:44:23');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pages`
--

CREATE TABLE `pages` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `description` text,
  `description2` text NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `is_featured` tinyint(1) NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `created_at` datetime NOT NULL,
  `video` varchar(255) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `descripcionesp` text NOT NULL,
  `descripcionesp2` text NOT NULL,
  `verVideo` varchar(255) NOT NULL,
  `verImagen` varchar(255) NOT NULL,
  `videoEsp` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `pages`
--

INSERT INTO `pages` (`id`, `title`, `user_id`, `description`, `description2`, `image`, `is_featured`, `is_active`, `created_at`, `video`, `titulo`, `descripcionesp`, `descripcionesp2`, `verVideo`, `verImagen`, `videoEsp`) VALUES
(1, 'Membership', 1, '<h4>Become a member of Vali Skincare &amp; Makeup and start enjoying exclusive benefits, loyalty program and promotions from your first visit. Your annual membership can be paid monthly or receive a 20% discount when you pay in advance.</h4><h4><br>All our membership programs include, at no additional cost, participation on our fantastic loyalty program that will allow you to redeem points for cash to pay services.</h4>', '<h2><strong>Silver</strong></h2><p>&nbsp;</p><ul><li>Includes 12 treatments or services per year with a value of up to $ 150 each, to enjoy them within the next 12 months. You choose when.&nbsp;(2)</li><li>You can buy up to 6 Gift Cards for a friend or relative to enjoy our services with a 60% discount, you choose the amount. I.E: You buy a $100 Gift Card paying only $40.</li><li>20% discount on the regular price of any additional service or you can exchange one monthly treatment and pay 50% of the additional services that you want.</li><li>10% discount on products.</li><li>All your facial treatments will include facial massage with an additional $15 price at no cost.</li><li>You can request at each aromatherapy visit with a value of $ 20 at no cost.</li><li>You participate in the referral program where you will receive a $20 gift card for each person who indicates that you referred them and buy treatments over $100.</li><li>You participate in our loyalty program accumulating points that you can exchange for any of our services. This membership guarantees points equivalent to $60 dollars per year. (1)</li></ul><p>&nbsp;</p><p>&nbsp;</p><h2><strong>Gold&nbsp;</strong></h2><ul><li>Includes all the benefits of Silver.</li><li><strong>6 additional treatments </strong>or services a year for a <strong>total of 18 treatments&nbsp; </strong>with a value of up to $150 each.</li><li>This membership guarantees Loyalty Program points equivalent to <strong>$92 Dollars per year.&nbsp;(2)</strong></li><li>You can buy <strong>2 additional Gift Cards </strong>for a total of 8 with a 60% discount.</li><li>You can request <strong>Led Light therapy </strong>in your facial at no additional cost (valued at $ 40 each session).</li><li>A <strong>24k Gold mask </strong>valued at $30 will be applied at one of your treatments at no additional cost.</li></ul><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><h2><strong>Platinum&nbsp;</strong></h2><ul><li>Includes all the benefits of Gold.</li><li><strong>6 additional treatments </strong>or services a year for a total of <strong>24 treatments</strong></li><li>with a value of up to $150 each to enjoy them within the next 12 months, you choose when.&nbsp;(2). This membership guarantees Loyalty Program points equivalent to <strong>$120 Dollars per year&nbsp;(1)</strong></li><li>You can buy <strong>2 additional&nbsp;</strong>Gift Cards for a <strong>total of 10,</strong> so that a family member or friend can enjoy our services with a 60% discount.</li><li>You can request <strong>Radio Frequency </strong>therapy in your facial treatments at no additional cost (valued at $ 25 each session)</li><li><strong>You can transfer&nbsp; </strong>up to 6 services to a family member or friend.&nbsp;(3)</li></ul><p><br><br>&nbsp;</p><h3><strong>Notes:</strong></h3><p>(1)&nbsp;Every $75 you invest in you will generate 300 points equivalent to $5.</p><p>(2)&nbsp;To have the flexibility to choose when you must pre-pay membership. Otherwise, the available services will be distributed between 12 months.</p><p>(3) One per person.</p><p>(4) You can pay in advance your membership program and enjoy a 20% off with our monthly payment program of 3, 6 or 12 monthly payments (option without interest)</p><p>&nbsp;</p><figure class=\"table\"><table><tbody><tr><td><strong>Summary</strong></td><td><strong>Silver</strong></td><td><strong>Gold</strong></td><td><strong>Platinum</strong></td></tr><tr><td>Quantity of treatments</td><td>12</td><td>18</td><td>24</td></tr><tr><td>$ Earned on royalty program</td><td>60</td><td>92</td><td>120</td></tr><tr><td>Gift Cards $60/$100</td><td>6</td><td>8</td><td>10</td></tr><tr><td>Facial Massage</td><td>X</td><td>X</td><td>X</td></tr><tr><td>Aroma Therapy</td><td>X</td><td>X</td><td>X</td></tr><tr><td>20% off on additional services</td><td>X</td><td>X</td><td>X</td></tr><tr><td>10% off on products</td><td>X</td><td>X</td><td>X</td></tr><tr><td>Referral Program</td><td>X</td><td>X</td><td>X</td></tr><tr><td>LED therapy</td><td>&nbsp;</td><td>X</td><td>X</td></tr><tr><td>Gold Face Mask</td><td>&nbsp;</td><td>X</td><td>X</td></tr><tr><td>RF Therapy</td><td>&nbsp;</td><td>&nbsp;</td><td>X</td></tr><tr><td>Transferable services</td><td>&nbsp;</td><td>&nbsp;</td><td>X</td></tr></tbody></table></figure><p>&nbsp;</p><figure class=\"table\"><table><tbody><tr><td><strong>Regular Value (assuming you use all the services)</strong></td><td><strong>Silver</strong></td><td><strong>Gold</strong></td><td><strong>Platinum</strong></td></tr><tr><td>Treatments Value</td><td>1,800</td><td>2,700</td><td>3,600</td></tr><tr><td>$ Earned in royalty program</td><td>60</td><td>92</td><td>120</td></tr><tr><td>Gift Card savings $60/$100</td><td>360</td><td>380</td><td>600</td></tr><tr><td>Facial Massage</td><td>240</td><td>360</td><td>480</td></tr><tr><td>Aroma Therapy</td><td>180</td><td>270</td><td>360</td></tr><tr><td>Gold face mask</td><td>&nbsp;</td><td>30</td><td>30</td></tr><tr><td>RF Therapy</td><td>&nbsp;</td><td>&nbsp;</td><td>300</td></tr><tr><td>Total for the year</td><td>2,640</td><td>4,652</td><td>6,450</td></tr><tr><td>Monthly</td><td>220</td><td>390</td><td>540</td></tr><tr><td>You only pay per month</td><td>95</td><td>135</td><td>180</td></tr></tbody></table></figure><p>&nbsp;</p><figure class=\"table\"><table><tbody><tr><td><strong>Additionally you will receive</strong></td><td><strong>Silver</strong></td><td><strong>Gold</strong></td><td><strong>Platinum</strong></td></tr><tr><td>20% off additional services</td><td>X</td><td>X</td><td>X</td></tr><tr><td>10% off products</td><td>X</td><td>X</td><td>X</td></tr><tr><td>Referral Program</td><td>X</td><td>X</td><td>X</td></tr><tr><td>Transferable services option</td><td>&nbsp;</td><td>&nbsp;</td><td>X</td></tr></tbody></table></figure>', 'CATEGORiA-WAX.jpg', 0, 1, '2018-10-27 04:12:09', 'https://www.youtube.com/watch?v=U4qGj7jUpa4&feature=youtu.be', 'Membresía', '<h4>Conviértete en miembro de Vali Skincare &amp; Makeup y comienza a disfrutar desde tu primera visita de los exclusivos beneficios, programa de fidelidad y promociones en tratamientos faciales y corporales.&nbsp;</h4><h4>Tu membresía anual puedes pagarla mensualmente o de manera anticipada y obtener un 20% de descuento.&nbsp;</h4><h4>Todos nuestros programas de membresía incluyen sin costo adicional la participación del fantástico programa de fidelidad que te permitirá canjear puntos por dinero en efectivo para pagar servicios.</h4>', '<h2><strong>Silver</strong></h2><p>&nbsp;</p><ul><li>Incluye <strong>12 tratamientos</strong>&nbsp; o servicios con un valor de hasta $150 cada uno, para disfrutarlos dentro de los próximos 12 meses, tu escoges cuando.&nbsp;(2)</li><li>Podrás comprar hasta 6 Gift Cards para un amigo o familiar para que disfrute de nuestros servicios con un 60% de descuento, tu escoges el monto. EJ Compras un Gift Card de $100 pagando solo $40.</li><li>20% de descuento sobre el precio regular de cualquier servicio adicional o podrás canjear tu tratamiento mensual y pagar 50% del valor de cualquier tratamiento adicional</li><li>10% de descuento en productos</li><li>Todas tus tratamientos faciales incluirán masaje facial con precio de $15 adicionales sin costo alguno.</li><li>Podrás solicitar en tus visitas aromaterapia con un valor de $20 sin costo alguno.</li><li>Participas automáticamente en el programa de referidos donde recibirás una tarjeta de regalo de 20$, por cada persona que compre un tratamiento de mas de $100 e indique que fue referido por ti.</li><li>Serás parte automáticamente de nuestro programa de fidelidad acumulando puntos que podrás canjear por cualquiera de nuestros servicios. Esta membresía garantiza puntos equivalentes a $60 Dólares al año.&nbsp;(1)</li></ul><p>&nbsp;</p><h2><strong>Gold</strong></h2><ul><li>Incluye todos los beneficios del Silver</li><li><strong>6 tratamientos</strong> o servicios adicionales para un total de <strong>18 Tratamientos</strong> con un valor de hasta $150 cada uno.</li><li>Podrás comprar <strong>2 Gift Cards</strong> adicionales para un <strong>total 8</strong>, con el mismo descuento de 60%</li><li>Podrás solicitar en tus tratamientos faciales terapia de Luz Led sin ningún costo adicional, valorado en $40 cada sesión.</li><li>Se te aplicará en uno de tus tratamientos una mascarilla de Oro 24k valorada en $30 sin costo adicional.</li><li>Esta membresía garantiza en nuestro Programa de Fidelidad puntos equivalentes a <strong>$92 Dólares al año.</strong>(1)</li></ul><p>&nbsp;</p><p>&nbsp;</p><h2><strong>Platino</strong></h2><ul><li>Incluye todos los beneficios del Gold</li><li><strong>6 tratamientos</strong> o servicios adicionales para un total de <strong>24 Tratamientos</strong> con un valor de hasta $150 cada uno.</li><li>Podrás comprar <strong>2 Gift Cards</strong> adicionales para un <strong>total 10</strong>, para que un familiar o amigo disfrute de nuestros servicios con un 60% de descuento</li><li><strong>Podrás transferir hasta 6 servicios a un familiar o amigo.&nbsp;</strong>(3)</li><li>Podrás solicitar en tus tratamientos faciales terapia de <strong>Radio Frecuencia</strong> sin ningún costo adicional, valorado en $25 cada sesión.</li><li>Esta membresía garantiza en nuestro Programa de Fidelidad puntos equivalentes a <strong>$120 Dólares al año</strong>.&nbsp;(1)</li></ul><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><h3><strong>Notas:</strong></h3><p>(1) Cada $75 que inviertas en ti, generarán 300 puntos que equivalen a $5.&nbsp;</p><p>(2) Para escoger la frecuencia por mes de los tratamientos y sesiones deberás pre-pagar la membresía, de otra manera se distribuirán los mismos en 12 meses.&nbsp;</p><p>(3) Uno máximo por persona, no se podrá transferir 2 o mas sesiones o tratamientos a una misma persona</p><p>(4) Puedes pagar anticipadamente tu membresía con nuestros programas de financiamiento a 3, 6 o 12 meses y obtener 20% de descuento (algunas opciones sin intereses) &nbsp;</p><p>&nbsp;</p><figure class=\"table\"><table><tbody><tr><td><strong>Resumen</strong></td><td><strong>Silver</strong></td><td><strong>Gold</strong></td><td><strong>Platinum</strong></td></tr><tr><td>Cantidad de tratamientos&nbsp;&nbsp;</td><td>12</td><td>18</td><td>24</td></tr><tr><td>$ Ganados con programa de fidelidad</td><td>60</td><td>92</td><td>120</td></tr><tr><td>Gift Cards ahorro $60/$100</td><td>6</td><td>8</td><td>10</td></tr><tr><td>Masaje Facial</td><td>X</td><td>X</td><td>X</td></tr><tr><td>Aromaterapia</td><td>X</td><td>X</td><td>X</td></tr><tr><td>20% Descuento Servicios Adicionales</td><td>X</td><td>X</td><td>X</td></tr><tr><td>10% Descuento en Productos&nbsp;&nbsp;</td><td>X</td><td>X</td><td>X</td></tr><tr><td>Programa de Referidos</td><td>X</td><td>X</td><td>X</td></tr><tr><td>Terapia Luz Led</td><td>&nbsp;</td><td>X</td><td>X</td></tr><tr><td>Mascarilla de Oro 24K</td><td>&nbsp;</td><td>X</td><td>X</td></tr><tr><td>Terapia de Radio Frecuencia</td><td>&nbsp;</td><td>&nbsp;</td><td>X</td></tr><tr><td>Opción de Transferir Tratamientos</td><td>&nbsp;</td><td>&nbsp;</td><td>X</td></tr></tbody></table></figure><p>&nbsp;</p><figure class=\"table\"><table><tbody><tr><td><strong>Valor Regular (asumiendo que usas todos los servicios)</strong></td><td><strong>Silver</strong></td><td><strong>Gold</strong></td><td><strong>Platinum</strong></td></tr><tr><td>Costo de Tratamientos</td><td>1,800</td><td>2,700</td><td>3,600</td></tr><tr><td>$ Ganados con programa de fidelidad</td><td>60</td><td>92</td><td>120</td></tr><tr><td>Gift Card ahorro $60/$100</td><td>360</td><td>380</td><td>600</td></tr><tr><td>Masaje Facial</td><td>240</td><td>360</td><td>480</td></tr><tr><td>Aromaterapia</td><td>180</td><td>270</td><td>360</td></tr><tr><td>Mascarilla de Oro 24K</td><td>&nbsp;</td><td>30</td><td>30</td></tr><tr><td>Terapia de Radio Frecuencia</td><td>&nbsp;</td><td>&nbsp;</td><td>300</td></tr><tr><td>Total por año</td><td>2,640</td><td>4,652</td><td>6,450</td></tr><tr><td>Costo Regular Mensual</td><td>220</td><td>390</td><td>540</td></tr><tr><td>Solo Pagas</td><td>95</td><td>135</td><td>180</td></tr></tbody></table></figure><p>&nbsp;</p><figure class=\"table\"><table><tbody><tr><td><strong>Adicionalmente</strong></td><td><strong>Silver</strong></td><td><strong>Gold</strong></td><td><strong>Platinum</strong></td></tr><tr><td>20% Descuento Servicios Adicionales</td><td>X</td><td>X</td><td>X</td></tr><tr><td>10% Descuento en Productos&nbsp;&nbsp;</td><td>X</td><td>X</td><td>X</td></tr><tr><td>Programa de Referidos</td><td>X</td><td>X</td><td>X</td></tr><tr><td>Opción de Transferir Tratamientos</td><td>&nbsp;</td><td>&nbsp;</td><td>X</td></tr></tbody></table></figure><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p>', 'displblok', 'displNone', 'https://www.youtube.com/watch?v=GXa1s-2Zm7w'),
(2, 'Franchise', 1, '<h3>You studied to be an esthetician and do not know how to start?&nbsp;</h3><h3>Are you an esthetician and want to be part of Vali Skincare &amp; Makeup?&nbsp;</h3><h3>&nbsp;</h3>', '<h4>If you answered “Yes” to any of the questions above, then you are looking for:</h4><ul><li>Independence in your business with a corporate image.</li><li>Receive assistance in finding a suitable space to open your studio.</li><li>Have the support to design a cozy and pleasant studio.</li><li>You don’t want to make a million dollar investment to independently develop your profession.</li><li>Have your business alone or with a partner that allows your initial financial commitments to be balanced out with your income. In other words, you are looking to share the expenses of a studio, of which you will be part of and once you achieve a reasonable occupation you will be able to open another studio to achieve 100% of your independence and start directing your skin and beauty care professionals…. In your own business.</li><li>Have a list of suppliers of furniture, equipment, products and consumables that facilitate the opening and operation of your business.</li><li>Have an adequate pricing scheme that gives greater value to the services provided</li><li>Receive training and material to learn how to sell your services.</li><li>Have a beautiful website where you can promote your services.</li><li>Offer your clients the possibility of making their appointments online according to your availability at work and family hours.</li><li>Have a credit card payment platform.</li><li>Have an application to keep the records and history of your customers.</li><li>To be able to offer their clients fully automated membership and loyalty programs.</li><li>Documented protocols for each service you offer.</li><li>Enjoy discounts from the main supplier of products with which you carry out treatments and offer home care, without the need to manage large inventories.</li><li>Initial training and continuous updating of professional training.</li><li>Have a friendly tool for the control, report and analysis of sales, inventory, administration of services, clients, loyalty program and direct marketing.</li><li>Be&nbsp; able to offer physical Gift Cards or eGifCard.</li><li>Receive assistance for the opening of the main Social Media accounts as well as the art works and texts for their periodicals at no additional cost.</li><li>Enjoy an stock of images to make your own publications in the main social media applications.</li><li>Have the design of the opening campaign for their Studio as well as a promotion and advertising program for each year.</li><li>Support in the development of your first advertising campaign in Google and educational material, as well as, the link with Google staff who will assist you in the configuration and performance of your ads at no additional cost.</li><li>Have promotional material printed and digital of promotions, having to edit only the phone number and location data.</li><li>Have a Corporate email address at no additional cost.</li><li>Have available formats and script for common responses to customer inquiries.</li></ul><h4>Contact us and as soon as we be ready to grow we will contact you.</h4>', 'CATEGORiA-MAKEUPLook.jpg', 0, 1, '2018-10-27 06:12:09', 'https://www.youtube.com/watch?v=dj8WyMI8UzU&feature=youtu.be', 'Franquicia', '<h3>¿Estudiaste para ser esteticista y no sabes como comenzar?&nbsp;</h3><h3>¿Eres esteticista y quieres ser parte de Vali Skincare &amp; Makeup?&nbsp;</h3><h3>&nbsp;</h3>', '<h4>Si contestaste que “Si” a alguna de las preguntas anteriores entonces estás buscando. &nbsp;&nbsp;</h4><ul><li>Independencia en tu negocio con imagen corporativa.</li><li>Recibir asistencia para encontrar un espacio adecuado para abrir tu estudio.</li><li>Contar con el soporte para diseñar un estudio cálido y agradable.</li><li>No realizar una inversión millonaria para desarrollar de manera independiente tu profesión.</li><li>Tener tu negocio sola o con una socia que permita que tus compromisos económicos iniciales estén balanceados con tus ingresos. En otras palabras buscas compartir los gastos de un Estudio del cual tu serás parte y una vez que logres una ocupación razonable podrás abrir otro estudio para lograr el 100% de tu ocupación y comenzar a dirigir tus profesionales de cuidado de la piel y belleza…. En tu negocio propio.</li><li>Contar con listado de proveedores de mobiliario, equipos, productos y consumibles que facilite la apertura y operación de tu negocio.</li><li>Disponer de un esquema de precios adecuado que de mayor valor a los servicios que se prestan.</li><li>Recibir adiestramiento y material para aprender a vender tus servicios.</li><li>Contar con una bella página web donde podrás promocionar tus servicios.</li><li>Ofrecer a tus clientes la posibilidad de realizar sus citas online de acuerdo a tu disponibilidad de horario de trabajo y familiar.</li><li>Contar con una plataforma de pago de tarjetas de crédito.</li><li>Disponer de una aplicación para llevar tus registros e historias de tus clientes.</li><li>Poder ofrecer a sus clientes programas de membresía y fidelidad totalmente automatizado.</li><li>Protocolos documentados para cada servicio que ofreces.</li><li>Disfrutar de descuentos de los principales proveedores de productos con los que realizas los tratamientos y ofreces productos para el cuidado en casa, sin la necesidad de manejar grandes inventarios.</li><li>Entrenamiento inicial y actualización continua de formación profesional.</li><li>Contar con una herramienta amigable para el control , reporte y análisis de venta, inventario, administración de servicios, clientes, programa de fidelidad y mercadeo directo.</li><li>Poder ofrecer Gift Cards físicas o e-GifCard (virtuales).</li><li>Recibir asistencia para la apertura de las principales cuentas de Redes Sociales&nbsp; así como los artes y textos para sus publicaciones periódicas sin ningún costo adicional</li><li>Disfrutar de un banco de imágenes para realizar publicaciones propias en las principales aplicaciones de redes sociales.</li><li>Contar con el diseño de campaña de apertura de su Estudio así como de un programa de promoción y publicidad para cada año.</li><li>Apoyo en el desarrollo de su primera campaña publicitara en Google y material didáctico, así como, el enlace con personal de Google que le prestará asistencia en la configuración y performance de sus anuncios sin ningún tipo de costo adicional.</li><li>Contar con los artes de material promocional impreso y digital de promociones, teniendo que editar únicamente sus datos de teléfono y ubicación.</li><li>Disfrutar de un correo corporativo sin ningún costo adicional.</li><li>Disfrutar de un banco de imágenes para realizar publicaciones propias en las principales aplicaciones de redes sociales.</li></ul><h4>Escríbenos y tan pronto comencemos a buscar aliados para crecer te contactaremos.&nbsp;</h4>', 'displblok', 'displNone', 'https://www.youtube.com/watch?v=7AbObDxdtAs&feature=youtu.be');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permanents`
--

CREATE TABLE `permanents` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `titleesp` varchar(255) NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `description` text,
  `descriptionesp` text NOT NULL,
  `price` varchar(255) NOT NULL,
  `popup` varchar(255) NOT NULL,
  `button` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `is_featured` tinyint(1) NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `created_at` datetime NOT NULL,
  `is_activeTf` varchar(255) NOT NULL,
  `textFinanc` varchar(255) NOT NULL,
  `textFinancEsp` varchar(255) NOT NULL,
  `target` varchar(255) NOT NULL,
  `buttonEs` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `permanents`
--

INSERT INTO `permanents` (`id`, `title`, `titleesp`, `user_id`, `category_id`, `description`, `descriptionesp`, `price`, `popup`, `button`, `image`, `is_featured`, `is_active`, `created_at`, `is_activeTf`, `textFinanc`, `textFinancEsp`, `target`, `buttonEs`) VALUES
(1, 'free Consultation Appointment', 'Consulta Gratuita', 1, 1, '<p>Let our skin experts help you choose the perfect treatment with your face or body concern in your visit. Our first consultation is FREE, No Obligation, if you agree with the recommendation we will do the treatment the same day or we schedule a new appointment.&nbsp;<br><br><i><strong>Let yourself, come, relax and enjoy with us!!</strong></i></p>', '<p>Deje que nuestros expertos en piel lo ayuden a elegir el tratamiento perfecto para su rostro o cuerpo cuando nos visite. Nuestra primera cita es GRATUITA, Sin Obligación. Si está de acuerdo con la recomendación haremos el tratamiento el mismo día o programaremos una nueva cita.&nbsp;</p><p>&nbsp;</p><p><i><strong>Déjate llevar, relájate y disfruta con nosotros!</strong></i></p>', 'free', 'modal', '/booking-permanent-makeup', '1_FREE-CONSULTATION.jpg', 1, 1, '2018-10-27 04:12:09', 'displayNone', 'est', 'test', '_self', '/es/booking-permanent-makeup'),
(2, 'Microblading Session', 'Tratamiento de Microblading', 1, 1, '<p>Microblading usually takes two appointments to complete. On the first appointment, the client is outlined and the eyebrows are drawn with a waterproof pencil, so that the artist and the client can agree on the appearance. The artist then cleans the eyebrows and the client is ready to return to the world. There are some mild scabs and further care is required, but your microblading must be completely cured in 30 days.&nbsp;<br><br>The second appointment is a retouch at least 30 days after the first session. This allows enough time for the ink on the epidermis to naturally come off and the color to settle on the skin. At the touch-up appointment, the artist can see how his skin has received the ink and make the necessary corrections (included).&nbsp;<br><br>Sometimes, the background tones of a client\'s skin may have unexpected effects on the color of the ink, and the artist may need to add color to adjust. This type of correction is normal with any microblading artist and an essential part of the process, since the skin of each person is different and receives the ink in a different way.</p>', '<p>El tratamiento de Microblading por lo general toma dos citas para completarse. En la primera cita, se conoce al cliente y se dibujan las cejas con un lápiz a prueba de agua, para que el artista y el cliente puedan ponerse de acuerdo sobre la apariencia. El artista luego limpia las cejas y el cliente está listo para regresar al mundo. Hay algunas costras leves y se requieren cuidados adicionales, pero su microblading debe curarse completamente en 30 días.</p><p>La segunda cita es un retoque al menos 30 días después de la primera sesión. Esto permite suficiente tiempo para que la tinta en la epidermis se desprenda naturalmente y el color se asiente en la piel. En la cita de retoque, el artista puede ver cómo su piel ha recibido la tinta y hacer las correcciones necesarias (incluidas).</p><p>&nbsp;</p><p>A veces, los tonos de fondo de la piel de un cliente pueden tener efectos inesperados en el color de la tinta, y el especialista puede necesitar agregar color para ajustar. Este tipo de corrección es normal con cualquier especialista de Microblading y una parte esencial del proceso, ya que la piel de cada persona es diferente y recibe la tinta de una manera diferente.</p>', '350.00', 'Microblading', '/booking-permanent-makeup', '2_MICROBLADING-SESSION.jpeg', 1, 1, '2018-10-27 06:12:09', 'displayBlok', 'or $32 monthly ', 'o $32 al mes', '_self', '/es/booking-permanent-makeup'),
(3, 'Microblading Touch up Session', 'Retoque Microblading', 1, 2, '<p>Only with a Microblanding Session up to 30 days after our treatment. The client will need touched up approximately once a year to keep them, as the pigment is near the surface of the skin and is carried away much faster than with tattooed brows.</p>', '<p>Servicio exclusivo para clientes que hayan tomado el tratamiento básico Microblading con nosotros (hasta 30 días después). El cliente deberá retocarse aproximadamente una vez al año, ya que el pigmento está cerca de la superficie de la piel y se lleva mucho más rápido que con las cejas tatuadas.&nbsp;</p>', '100', 'Touch', '/booking-permanent-makeup', '3_MICROBLADING-TOUCH-UP-SESSION.jpg', 1, 1, '2018-10-27 07:12:09', 'displayNone', 'test', 'test', '_self', '/es/booking-permanent-makeup'),
(4, 'Microblading Semi annual touch up session', 'Retoque Semi Anual de Microblading', 1, 2, '<p>Services within 5-7 months after the Microblading Session. Each skin reacts differently, the client will need touched up approximately once or twice per year to keep them, as the pigment is near the surface of the skin and is carried away much faster than with tattooed brows.</p>', '<p>Servicio exclusivo para clientes que hayan tomado el tratamiento básico Microblading con nosotros.Servicios dentro de 5 a 7 meses después de la sesión de Microblading. Cada piel reacciona de manera diferente, el cliente deberá retocarse aproximadamente una o dos veces al año para mantenerla, ya que el pigmento está cerca de la superficie de la piel y se elimina mucho más rápido que con las cejas tatuadas.&nbsp;</p>', '250.00', 'sannualT', '/booking-permanent-makeup', '4_MICROBLADING-SEMI-ANNUAL-TOUCH-UP-SESSION.jpg', 1, 1, '2018-10-27 09:12:09', 'displayNone', 'est', 'test', '_self', '/es/booking-permanent-makeup'),
(5, 'Microblading  annual touch up session', 'Retoque Anual de Microblading', 1, 7, '<p>Services within 10-13 months after after the Microblading Session. Each skin reacts differently, the client will need touched up approximately once or twice per year to keep them, as the pigment is near the surface of the skin and is carried away much faster than with tattooed brows.</p>', '<p>Servicio exclusivo para clientes que hayan tomado el tratamiento básico Microblading con nosotros.Servicios dentro de 10 a 13 meses después de la sesión de Microblading. Cada piel reacciona de manera diferente, el cliente deberá retocarse aproximadamente una o dos veces al año para mantenerla, ya que el pigmento está cerca de la superficie de la piel y se elimina mucho más rápido que con las cejas tatuadas.&nbsp;</p>', '300.00', 'annualT', '/booking-permanent-makeup', '5_MICROBLADING-ANNUAL-TOUCH-UP-SESSION.jpg', 1, 1, '2018-10-27 10:12:09', 'displayNone', 'test', 'prueba', '_self', '/es/booking-permanent-makeup');

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `products`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `products` (
`id` int(11)
,`type` varchar(13)
,`title` varchar(255)
,`description` text
,`titleesp` varchar(255)
,`descriptionesp` text
,`price` varchar(255)
,`popup` varchar(255)
,`button` varchar(255)
,`image` varchar(255)
,`is_featured` tinyint(4)
,`is_active` tinyint(4)
,`created_at` datetime
);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publicacions`
--

CREATE TABLE `publicacions` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `description` text,
  `image` varchar(255) DEFAULT NULL,
  `is_featured` tinyint(1) NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `publicacions`
--

INSERT INTO `publicacions` (`id`, `title`, `user_id`, `category_id`, `description`, `image`, `is_featured`, `is_active`, `created_at`) VALUES
(1, 'Sample blog post 1', 1, 1, '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '1specials.jpg', 1, 1, '2018-10-27 04:12:09'),
(2, 'Sample blog post 2', 1, 1, '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '2specials.jpg', 1, 1, '2018-10-27 06:12:09'),
(3, 'Sample blog post 3', 1, 2, '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '3specials.jpg', 0, 1, '2018-10-27 07:12:09'),
(4, 'Sample blog post 4', 1, 2, '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '4specials.jpg', 0, 1, '2018-10-27 09:12:09'),
(5, 'Sample blog post 5', 1, 7, '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '5specials.jpg', 1, 1, '2018-10-27 10:12:09'),
(6, 'Sample blog post 6', 1, 7, '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '6specials.jpg', 1, 1, '2018-10-27 12:12:09'),
(7, 'Microblading Financing Option', 1, 0, 'Financing available .. you choose 3, 6 or 12 monthly payments. ', 'microblading_image_financing.jpg', 0, 1, '2020-03-06 19:56:57');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `restoratives`
--

CREATE TABLE `restoratives` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `titleesp` varchar(255) NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `description` text,
  `descriptionesp` text NOT NULL,
  `price` varchar(255) NOT NULL,
  `popup` varchar(255) NOT NULL,
  `button` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `is_featured` tinyint(1) NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `created_at` datetime NOT NULL,
  `textFinanc` varchar(255) NOT NULL,
  `is_activeTf` varchar(255) NOT NULL,
  `textFinancEsp` varchar(255) NOT NULL,
  `target` varchar(255) NOT NULL,
  `buttonEs` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `restoratives`
--

INSERT INTO `restoratives` (`id`, `title`, `titleesp`, `user_id`, `category_id`, `description`, `descriptionesp`, `price`, `popup`, `button`, `image`, `is_featured`, `is_active`, `created_at`, `textFinanc`, `is_activeTf`, `textFinancEsp`, `target`, `buttonEs`) VALUES
(1, 'Free Consultation Appointment', 'Consulta Gratuita', 1, 1, '<p>Let our skin experts help you choose the perfect treatment with your face or body concern in your visit. Our first consultation is FREE, No Obligation, if you agree with the recommendation we will do the treatment the same day or we schedule a new appointment.&nbsp;<br><br><i><strong>Let yourself, come, relax and enjoy with us!!</strong></i></p>', '<p>Deje que nuestros expertos en piel lo ayuden a elegir el tratamiento perfecto para su rostro o cuerpo cuando nos visite. Nuestra primera cita es GRATUITA, Sin Obligación. Si está de acuerdo con la recomendación haremos el tratamiento el mismo día o programaremos una nueva cita.&nbsp;</p><p>&nbsp;</p><p><i><strong>Déjate llevar, relájate y disfruta con nosotros!</strong></i></p>', 'Free', 'modal1', '/booking-facial', '1_FREE-CONSULTATION.jpg', 1, 1, '2018-10-27 04:12:09', 'test', 'displayNone', 'test', '_self', '/es/booking-facial'),
(2, 'Eye Contour Regeneration', 'Regeneración del contorno de ojos', 1, 1, '<p>In our exclusive eye treatment, we use the best products that will improve the texture and vitality of your eye zone, will help you to soften lines, diminish dark circles, relieve congestion, and reduce puffiness, improves under eye bags, increase natural collagen and elastin, bring back firmness with a little help of micro current therapy, leaving the delicate eye area feeling refreshed and toned. It ends with a special hydro Jelly eye mask.&nbsp;<br><br>Each treatment performed requires at-home care to see better results in the short term. The use of sunscreen is important to prevent damage to the skin.</p>', '<p>En nuestro exclusivo tratamiento para los ojos, utilizamos los mejores productos que mejorarán la textura y la vitalidad de su zona ocular, lo ayudarán a suavizar las líneas, disminuir las ojeras, aliviar la congestión y reducir la hinchazón, mejorarán las bolsas oculares, aumentarán el colágeno natural y Elastina. Devuelva la firmeza con un poco de ayuda utilizando micro corriente que deja el área delicada de los ojos con una sensación refrescante y tonificada terminando con una mascarilla especial hidro plastica</p><p>&nbsp;</p><p>En cada tratamiento debemos realizar el debido cuidado en el hogar para ver mejores resultados a corto plazo. Importante el uso de protector solar para evitar daños en la piel.</p>', '30.00', 'Eye', '/booking-facial', '2_EYE-CONTOUR-REGENERATION.jpg', 1, 0, '2018-10-27 06:12:09', 'test', 'displayNone', 'test', '_self', '/es/booking-facial'),
(3, 'Detox With A Deep Exfoliating Facial', 'Desintoxica y equilibra tu piel con este magnífico facial exfoliante profundo.', 1, 2, '<p>Our detoxifying facial encourages the skin to purge, detoxify and cleanse while purifying. This spa treatment is designed to soften the skin. Rescue your congested and dull skin while defending it from impurities that clog pores. Our facial detoxifies and cleanses while it purifies and reconstructs the texture of the skin. It is for problematic and acne conditions that end with our anti-inflammatory and anti-irritant mask of azulene.</p>', '<p>Nuestro facial desintoxicante alienta a la piel descongestionar y limpiar mientras purifica. Este tratamiento de spa está diseñado para suavizar la piel. Rescata tu piel congestionada y opaca mientras la defiendes de las impurezas que obstruyen los poros. Nuestro facial reconstruye la textura de la piel. Ideal para condiciones problemáticas y de acné finalizando este &nbsp; con nuestra máscara antiinflamatoria y anti irritante de azuleno.</p>', '80.00', 'Detox', '/booking-facial', '3_DETOX-WITH-A-DEEP-EXFOLIATING-FACIAL.jpg', 1, 1, '2018-10-27 07:12:09', 'test', 'displayNone', 'test', '_self', '/es/booking-facial'),
(4, 'Skin Smooth, Firm And Lift Treatment', 'Tratamiento de la piel suave, firme y con efecto lifting.', 1, 2, '<p>Improve the tone and firmness of the skin through a cosmetic \"Lifting Effect\" with herbal lotions and Hydrolyzed Silk Proteins as our protocol products. We also add an ultrasound therapy to deepen the layers of the skin and stimulate the fibroblast who is in charge of the production of collagen. Our goal with this treatment is to restore the levels of hydration and nutrition that result in skin that looks and feels like silk and returns to the skin its optimal firmness by the action of proteins in the skin fibers. It helps to diminish the appearance of wrinkles better called fine lines. If you have all those signs ... This is your treatment!&nbsp;<br><br>Each treatment performed requires at-home care to see better results in the short term. The use of sunscreen is important to prevent damage to the skin.</p>', '<p>Mejore el tono y la firmeza de la piel a través de un \"Efecto Lifting\" cosmético con lociones herbales y Proteínas de Seda Hidrolizada con nuestros productos de protocolo. También agregamos una terapia de ultrasonido para profundizar las capas de la piel y estimular el fibroblasto que está a cargo de la producción de colágeno. Nuestro objetivo con este tratamiento es restaurar los niveles de hidratación y nutrición que resultan en una piel envejecida , haciendo que se vea y se sienta como la seda, y devuelva a la piel su firmeza optima por la acción de las proteínas en las fibras de la piel . Ayuda a disminuir la apariencia de Arrugas mejor llamadas líneas de expresión. Si tienes esos signos ... ¡Este es tu tratamiento!</p><p>&nbsp;</p><p>En cada tratamiento debemos realizar el debido cuidado en el hogar para ver mejores resultados a corto plazo. Importante el uso de protector solar para evitar daños en la piel.</p>', '90.00', 'Skin', '/booking-facial', '4_SKIN-SMOOTH-FIRM-AND-LIFT-TREATMENT.jpg', 1, 1, '2018-10-27 09:12:09', 'test', 'displayNone', 'test', '_self', '/es/booking-facial'),
(5, 'Recovery Boost', 'Tratamiento para impulsar y recuperar el equilibrio de  tu piel ', 1, 7, '<p>Our Ultra Hydrating Recovery Boost is a skin fit Treatment that is directed to skins that are opaque, without radiance with unhealthy look and dehydrated. In Vali Skincare &amp; Makeup we want to share with you our formulated treatment beginning with our special enzymes Freeze-Dried Peel followed by a Hyaluronic Acid splash, in a small amount of time you will be enjoying a relaxing aromatherapy with calming essences ending with a Led Therapy to calm and restore your skin applying also a Marine Collagen Mask.&nbsp;<br><br>Each treatment performed requires at-home care to see better results in the short term. The use of sunscreen is important to prevent damage to the skin.</p>', '<p>Nuestro servicio de Recuperación ultra Hidratante es un tratamiento de acoplamiento de la piel que se dirige a los rostros&nbsp; opacos, sin brillo, con un aspecto poco saludable y deshidratado. En Vali Skincare &amp; Makeup deseamos compartir con usted nuestro tratamiento formulado, que comienza con una exfoliación de enzimas seguido de un rocío de Ácido Hialurónico, al mismo tiempo estarás disfrutando de una relajante aromaterapia con esencias calmantes y culminando con Terapia Led para calmar y restaurar tu piel aplicando por ultimo una máscara de colágeno marino. Ven a sentir este placer de ayudarte a retardar tu envejecimiento. Excelente para todo tipo de piel, con manchas, secas, desvitalizadas.</p><p>&nbsp;</p><p>En cada tratamiento debemos realizar el debido cuidado en el hogar para ver mejores resultados a corto plazo. Importante el uso de protector solar para evitar daños en la piel.</p>', '100.00', 'Recovery', '/booking-facial', '5_RECOVERY-BOOST.jpg', 1, 1, '2018-10-27 10:12:09', 'test', 'displayNone', 'test', '_self', '/es/booking-facial'),
(6, 'Rejuv Radiant Restoration Treatment With Hyaluronic Acid', 'Tratamiento de restauración radiante y rejuvenecedor con ácido hialurónico.', 1, 0, '<p>Designed to restore skin moisture by increasing hydration and nutrition. This amazing complex (Hyaluronic Acid) occurs naturally in the body and has a thousand times its weight in water. The rejuvenating complex helps to smooth out wrinkles and fine lines and also helps to minimize the appearance of enlarged pores, helps with the texture of the skin and diminishes the appearance of dry, scaly skin and reveals a smoother, fuller complexion, ending this favorable treatment with a radiant collagen Mask. &nbsp;</p><p>Each treatment performed requires at-home care to see better results in the short term. The use of sunscreen is important to prevent damage to the skin.</p>', '<p>Diseñado para restaurar la hidratación de la piel dándole brillo y a la vez nutriéndola. Este increíble complejo (ácido hialurónico) se produce naturalmente en el cuerpo y tiene mil veces su peso en agua. El complejo rejuvenecedor ayuda a suavizar las arrugas y las líneas de expresión, y también ayuda a minimizar la apariencia de los poros dilatados, mejora la textura de la piel y disminuye la apariencia de la piel seca y escamosa, revelando un cutis más suave y completo,&nbsp; finaliza este tratamiento&nbsp; con una máscara de colágeno radiante. Para pieles secas , deshidratadas y desvitalizadas</p><p>&nbsp;</p><p>En cada tratamiento debemos realizar el debido cuidado en el hogar para ver mejores resultados a corto plazo. Importante el uso de protector solar para evitar daños en la piel.</p>', '100.00', 'Rejuv', '/booking-facial', '6_REJUV-RADIANT-RESTORATION-TREATMENT-WITH-HYALURONIC-ACID4.jpg', 1, 1, '2019-07-28 19:18:01', 'test', 'displayNone', 'test', '_self', '/es/booking-facial'),
(7, 'Firming Marine Elastin Treatment', 'Tratamiento reafirmante con elastina marina.', 1, 0, '<p>Special treatment in which impurities are removed, softens the texture of the skin, makes the circulation run and remineralizes with this luxurious body exfoliation of algae your face. Using only the best and most of the world\'s mineral-rich algae, your skin replicates better, rejuvenated, hydrated and softer.&nbsp;</p><p>Each treatment performed requires at-home care to see better results in the short term. The use of sunscreen is important to prevent damage to the skin.</p>', '<p>Tratamiento especial en el que se eliminan las impurezas, suaviza la textura de la piel, hacen que la circulación funcione y se remineralizan con esta lujosa exfoliación corporal de algas en su rostro. Usando solo las mejores y la mayoría de las algas ricas en minerales del mundo, su piel se rejuvenece, hidrata y suaviza. Para pieles ásperas, desmineralizadas, deshidratadas y envejecidas</p><p>En cada tratamiento debemos realizar el debido cuidado en el hogar para ver mejores resultados a corto plazo. Importante el uso de protector solar para evitar daños en la piel.</p>', '140.00', 'Firming', '/booking-facial', '7_FIRMING-MARINE-ELASTIN-TREATMENT1.jpg', 1, 1, '2019-07-28 19:18:46', 'test', 'displayNone', 'test', '_self', '/es/booking-facial'),
(8, 'Luminous And Oxygenated Skin With Vitamin “C”', 'Terapia luminosa y oxigenada con vitamina “C”', 1, 0, '<p>This treatment brightens the skin, while stimulating collagen production. Good for strengthening elasticity and reducing lines, wrinkles, mottled texture and age spots.</p><p>The skin is treated with a powerful Vitamin C cocktail that is comprised of only the highest quality ingredients and penetrates the skin in high concentrations. At the end of the treatment, we will apply a special CO2 Mask that will help you to moisturize by giving you a lifting effect, whitening, pore reduction and more...Your skin will glow after this amazing facial and with a continued treatment, you will notice a dramatic improvement.&nbsp;</p><p>Each treatment performed requires at-home care to see better results in the short term. The use of sunscreen is important to prevent damage to the skin</p><p><br>&nbsp;</p>', '<p>Este tratamiento aclara la piel, al tiempo que estimula la producción de colágeno. Bueno para fortalecer la elasticidad y reducir líneas, arrugas, textura irregular y manchas de la edad.</p><p>La piel se trata con un poderoso cóctel de vitamina C que incluye solo los ingredientes de la más alta calidad penetrando en la piel en altas concentraciones al final del tratamiento aplicaremos una máscara especial de carboxy con CO2 que lo ayudará a hidratarse, observará efecto de blanqueamiento, reducción de poros y más ... Su piel brillará después de este increíble facial, … con un tratamiento continuo, notará una mejora significativa. Para pieles secas , deshidratadas, maduras, desvitalizadas y opacas.&nbsp;</p><p>En cada tratamiento debemos realizar el debido cuidado en el hogar para ver mejores resultados a corto plazo. Importante el uso de protector solar para evitar daños en la piel.</p>', '$120.00', 'Luminous', '/booking-facial', '8_LUMINOUS-AND-OXYGENATED-SKIN-WITH-VITAMIN-C.jpg', 1, 1, '2019-07-28 19:19:30', 'test', 'displayNone', 'prueba', '_self', '/es/booking-facial'),
(9, 'Micro Pore Deep Treatment', 'Tratamiento profundo de micro poros', 1, 0, '<p>If you want to experience lighter skin, smaller visible pores, and make your complexion look beautiful and matte, we can help you. The objective of this exclusive treatment is to eliminate all the impurities and the balance of the skin. Starting with our unique Vali Spa Skincare &amp; Makeup facial, we continue with the application of Bio\'Active Serums, and the products that are exclusive to our spa and will help the skin reduce oil production, working to visibly refine pores and illuminate the complexion.&nbsp;</p><p>Each treatment performed requires at-home care to see better results in the short term. The use of sunscreen is important to prevent damage to the skin.</p>', '<p>Si desea experimentar una piel más clara, poros más pequeños visibles, y hacer que su cutis se vea hermosa y mate, podemos ayudarlo. El objetivo de este tratamiento exclusivo es eliminar todas las impurezas y el desequilibrio de la piel. Comenzando con nuestro exclusivo tratamiento facial Vali Spa Skincare &amp; Makeup, continúe con la aplicación de BioActive Serums y los productos que son exclusivos de nuestro spa, le ayudarán a la piel a reducir la producción de grasa, trabajando para refinar visiblemente los poros e iluminar la tez.</p><p>En cada tratamiento debemos realizar el debido cuidado en el hogar para ver mejores resultados a corto plazo. Importante el uso de protector solar para evitar daños en la piel.</p>', '120.00', 'Micro', '/booking-facial', '9_MICRO-PORE-DEEP-TREATMENT.jpeg', 1, 1, '2019-07-28 19:20:11', 'test', 'displayNone', 'prueba', '_self', '/es/booking-facial'),
(10, 'Repair And Redefine Skin Texture With Microneedling', '. Tratamiento de Microneedling para reparar y redefinir la textura de la piel  ', 1, 0, '<p>Wonderful and complete treatment in which we offer a safe technique that detonates the regeneration of the skin avoiding invasive methods. It greatly increases and stimulates the production of collagen due to said detonation in the natural mechanism of self-repair of the skin. The results are visible from the first session, superior to those made with other treatments due to the stimulation of the structures that hold and give smoothness to the skin.</p><p>&nbsp;</p><p>Each treatment performed requires at-home care to see better results in the short term. The use of sunscreen is important to prevent damage to the skin.</p>', '<p>Tratamiento de maravilloso y completo en el que ofrecemos una técnica segura que detona la regeneración de la piel evitando métodos invasivos. Aumenta en gran medida y estimula la producción de colágeno. Los resultados son visibles desde las primeras sesiones, superiores a los realizados con otros tratamientos debido a la estimulación de las estructuras que sostienen y dan suavidad a la piel.</p><p>BENEFICIOS</p><p>Reduce las cicatrices de acné.</p><p>disminución de poros agrandados.</p><p>Cicatrización por quemaduras.</p><p>Absorción de hiperpigmentación o tono cutáneo desigual.</p><p>Alivio de arrugas.</p><p>Combate y mejora la flacidez de la piel.</p><p>Da una textura suave a la piel.</p><p>Ajusta y disfraza estrías.</p><p>Rejuvenecimiento facial.</p><p>Es bueno para la caída del cabello.</p><p>&nbsp;</p><p>En cada tratamiento debemos realizar el debido cuidado en el hogar para ver mejores resultados a corto plazo. Importante el uso de protector solar para evitar daños en la piel.</p>', '140.00', 'Repair', '/booking-facial', '10_REPAIR-AND-REDEFINE-SKIN-TEXTURE-WITH-MICRONEEDLING.jpg', 1, 1, '2019-07-28 19:21:11', ' test', 'displayNone', 'test', '_self', '/es/booking-facial'),
(11, 'Repair Microneedling Package – 6 Sessions', 'Paquete Para Reparar con Microneedling - 6 Sesiones', 1, 0, '<p>For amazing results we recommend a minimum of 6 sessions due to the stimulation of the structures that hold and give smoothness to the skin.&nbsp;</p><p>Complete treatment in which we offer a safe technique that detonates the regeneration of the skin avoiding invasive methods. It greatly increases and stimulates the production of collagen due to said detonation in the natural mechanism of self-repair of the skin. The results are visible from the first session; for this reason.&nbsp;</p><p>Remember that after a treatment with microneedling, you should avoid sunlight for a few weeks. We recommend to include in your facial care routine the cleanser, tonic, moisturizer and sunscreen for the treatment of 4 steps twice a day (consult your specialist for recommendations).</p>', '<p>Para obtener resultados sorprendentes, recomendamos un mínimo de 6 sesiones para la estimulación completa de las estructuras que sostienen y dan suavidad a la piel.</p><p>&nbsp;</p><p>Tratamiento maravilloso y completo en el que ofrecemos una técnica segura que detona la regeneración de la piel evitando métodos invasivos. Aumenta en gran medida y estimula la producción de colágeno.&nbsp;</p><p><br>Recuerde que después de un tratamiento con microneedling debe evitar la luz solar durante unas semanas. Recomendamos incluir en su rutina de cuidado facial el limpiador, tónico, crema hidratante y protector solar (consulte a su especialista para obtener recomendaciones).</p>', '500.00', 'Repair2', '/booking-facial', '11_REPAIR-AND-REDEFINE-SKINCARE-MICRONEEDLING-PACKAGE-6-SESSIONS.jpg', 1, 1, '2019-07-28 19:21:49', 'test', 'displayNone', 'test', '_self', '/es/booking-facial'),
(12, 'Hydra Facial Treatment With Phototherapy', 'Tratamiento Hidra facial con fototerapia.', 1, 0, '<p>The Hydra Facial treatment is the newest advance in non-laser skin resurfacing. Hydra Facial is the only hydrodermabrasive procedure that combines cleansing, exfoliation, extraction, hydration and antioxidant protection simultaneously, resulting in clearer, more beautiful skin with no discomfort or downtime. The treatment is soothing, moisturizing, non-invasive and non-irritating. Hydration is the foundation of healthy, radiant skin. Irritation of the skin has been proven to increase signs of aging. The Hydra Facial treatment improves the appearance of fine lines, wrinkles, congested and enlarged pores, oily or acne-prone skin, hyperpigmentation and brown spots. &nbsp;</p><p>The Hydra Facial procedure is suitable for most skin types, including thin or aging skin, ethnic skin, and dry skin or oily skin. Start your skin maintenance program now with Hydra Facial to slow down your skin\'s aging process and delay the need for invasive procedures.&nbsp;</p><p>Hydra Facial’s versatility makes it the go-to treatment for a number of skin conditions because even patients with sensitive skin can tolerate the procedure, just about everyone is a good candidate for the Hydra Facial treatment. Various serums are available, and your treatment can be customized to meet specific needs.</p><p>Skin conditions that can be alleviated by a Hydra Facial procedure include:&nbsp;</p><p>A Hydra Facial treatment firms and tones the skin, improving its texture and the skin’s overall health.</p><p>Our team can customize your treatment to target your precise concerns. To end the treatment, we close it with an add on 20 min customized phototherapy depending on your skin’s need.&nbsp;</p><p>&nbsp;</p><p>Each treatment performed requires at-home care to see better results in the short term. The use of sunscreen is important to prevent damage to the skin.</p>', '<p>El tratamiento Hidra Facial es el avance más reciente en el rejuvenecimiento cutáneo sin láser. Hidra Facial es el único procedimiento de hidradermabrasión que combina limpieza, exfoliación,<br>extracción, hidratación y protección antioxidante simultáneamente, lo que da como resultado una piel más clara y bella, sin molestias ni tiempo de inactividad. El tratamiento es calmante, hidratante, no invasivo y no irritante. La hidratación es la base de una piel sana y radiante. Se ha comprobado que la irritación de la piel aumenta los signos del envejecimiento.&nbsp;<br><br>&nbsp;</p><p>El tratamiento Hidra Facial mejora la apariencia de líneas finas, arrugas, poros congestionados y agrandados, piel grasa o propensa al acné, hiperpigmentación y manchas marrones. El procedimiento Hidra Facial es adecuado para la mayoría de los tipos de piel, incluida la piel delgada o envejecida, la piel étnica y Piel seca o piel grasa. Inicie su programa de mantenimiento de la piel ahora con Hidra Facial para disminuir el proceso de envejecimiento de la piel y retrasar la necesidad de procedimientos invasivos.</p><p>Las afecciones de la piel que pueden aliviarse mediante un procedimiento Hidra facial incluyen:</p><p>Textura desigual</p><p>Piel grasa y congestionada que es propensa al acné</p><p>Secar la piel eliminando las células muertas y proporcionando hidratación.</p><p>&nbsp;</p><p>Un tratamiento Hidra Facial reafirma y tonifica la piel, mejorando su textura y la salud general de la piel.<br><br>&nbsp;</p><p>Nuestro equipo puede personalizar su tratamiento para responder sus inquietudes. Para finalizar, lo haremos con un complemento de 20 minutos de fototerapia personalizada según las necesidades de su piel.</p>', '160.00', 'Hydra', '/booking-facial', '12_HYDRA-FACIAL-TREATMENT-WITH-PHOTOTHERAPY.jpg', 1, 1, '2019-07-28 19:23:00', '  test', 'displayNone', 'test', '_self', '/es/booking-facial'),
(13, 'Eye Contour Regeneration', 'Regeneración del contorno de ojos', 1, 0, '<p>In our exclusive eye treatment, we use the best products that will improve the texture and vitality of your eye zone, will help you to soften lines, diminish dark circles, relieve congestion, and reduce puffiness, improves under eye bags, increase natural collagen and elastin, bring back firmness with a little help of micro current therapy, leaving the delicate eye area feeling refreshed and toned. It ends with a special hydro Jelly eye mask.</p><p>Each treatment performed requires at-home care to see better results in the short term. The use of sunscreen is important to prevent damage to the skin.</p>', '<p>En nuestro exclusivo tratamiento para los ojos, utilizamos los mejores productos que mejorarán la textura y la vitalidad de su zona ocular, lo ayudarán a suavizar las líneas, disminuir las ojeras, aliviar la congestión y reducir la hinchazón, mejorarán las bolsas oculares, aumentarán el colágeno natural y Elastina. Devuelva la firmeza con un poco de ayuda de la terapia con micro corriente que deja el área delicada de los ojos con una sensación refrescante y tonificada que termina conuna mascarilla especial</p>', '60', 'eyecontour', '.', '2_EYE-CONTOUR-REGENERATION.jpg', 0, 0, '2020-02-10 22:54:40', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sculptings`
--

CREATE TABLE `sculptings` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `titleesp` varchar(255) NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `description` text,
  `descriptionesp` text NOT NULL,
  `price` varchar(255) NOT NULL,
  `popup` varchar(255) NOT NULL,
  `button` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `is_featured` tinyint(1) NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `created_at` datetime NOT NULL,
  `textFinanc` varchar(255) NOT NULL,
  `is_activeTf` varchar(255) NOT NULL,
  `textFinancEsp` varchar(255) NOT NULL,
  `target` varchar(255) NOT NULL,
  `buttonEs` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `sculptings`
--

INSERT INTO `sculptings` (`id`, `title`, `titleesp`, `user_id`, `category_id`, `description`, `descriptionesp`, `price`, `popup`, `button`, `image`, `is_featured`, `is_active`, `created_at`, `textFinanc`, `is_activeTf`, `textFinancEsp`, `target`, `buttonEs`) VALUES
(1, 'Free Consultation Appointment ', 'Consulta Gratuita', 1, 1, '<p>Let our skin experts help you choose the perfect treatment with your face or body concern in your visit. Our first consultation is FREE, No Obligation, if you agree with the recommendation we will do the treatment the same day or we schedule a new appointment.&nbsp;<br><br><i><strong>Let yourself, come, relax and enjoy with us!!</strong></i></p>', '<p>Deje que nuestros expertos en piel lo ayuden a elegir el tratamiento perfecto para su rostro o cuerpo cuando nos visite. Nuestra primera cita es GRATUITA, Sin Obligación. Si está de acuerdo con la recomendación haremos el tratamiento el mismo día o programaremos una nueva cita.&nbsp;</p><p>&nbsp;</p><p><i><strong>Déjate llevar, relájate y disfruta con nosotros!</strong></i></p>', 'Free', 'modal', '/booking-body', '1_FREE-CONSULTATION.jpg', 1, 1, '2018-10-27 04:12:09', 'test', 'displayNone', 'test', '_self', '/es/booking-body'),
(2, 'Cavitation Treatment', 'Terapia de Cavitación Ultrasonica', 1, 1, '<p>Cavitation is a new, non-surgical and non-invasive fat removal procedure. Because there is no surgery and no anesthesia, there is no hospital stay, no time off from work and no recovery time. Clients see immediate results and will continue to see results in the reduction of fat up to 72 hours following the treatment. The most common problem areas are the buttocks, abdomen, love handles, male chest, upper arms, inner thighs and the chin area. It is especially effective in the removal of cellulite. Cavitation is the perfect treatment for people who want to contour their bodies and regain their confidence and figure. Most clients see an immediate change in their appearance after the first session, with optimum results after 4 to 8 sessions.&nbsp;<br><br>Cavitation is a method of liposuction. Cavitation destroys fat cells by using low frequency sound waves. Once the fat cell is destroyed, the fat is discharged between the cells where they are turned into protein and then changed to free fatty acids and glycerol. Free fatty acids are moved to the liver where they decay and are removed from the body while glycerol is used as energy.</p>', '<p>La cavitación es un procedimiento de eliminación de grasa nuevo, no quirúrgico y no invasivo. Debido a que no se necesita cirugía ni anestesia, no hay hospitalización y no hay tiempo de recuperación. Los clientes ven resultados inmediatos y continuarán viendo resultados en la reducción de grasa hasta 72 horas después del tratamiento. Las áreas problemáticas más comunes son las nalgas, el abdomen, el pecho masculino, la parte superior de los brazos, los muslos internos y el área de la barbilla. Es especialmente eficaz en la eliminación de la celulitis. La cavitación es el tratamiento perfecto para las personas que desean moldear su cuerpo y recuperar su confianza y figura. La mayoría de los clientes ven un cambio inmediato en su apariencia después de la primera sesión, con resultados óptimos después de 4 a 8 sesiones.</p><p>&nbsp;</p><p>La cavitación es un método de liposucción. La cavitación destruye las células de grasa mediante el uso de ondas de sonido de baja frecuencia. Una vez que la célula grasa se destruye, la grasa se descarga entre las células donde se convierten en proteínas y luego se transforman en ácidos grasos libres y glicerol. Los ácidos grasos libres se trasladan al hígado, donde se descomponen y se eliminan del cuerpo, mientras que el glicerol se usa como energía.</p>', '80.00', 'Cavitation', '/booking-body', '2_CAVITATION-TREATMENT.jpg', 1, 1, '2018-10-27 06:12:09', 'test', 'displayNone', 'test', '_self', '/es/booking-body'),
(3, 'Radio frequency treatment', 'Tratamiento de Radiofrecuencia.', 1, 2, '<p>Radiofrequency is currently the best available technology for non-invasive, non-surgical skin tightening and cellulite removal. Radiofrequency treatments are used in aesthetics as a way to deliver intense heat to tissues deeper than the epidermis (the outermost layer of the skin), with the aim to boost collagen production, circulation and (optionally, depending on treatment depth) fat release from those tissues. Radiofrequency is based on the fact that very high frequency electrical currents (300kHz-40MHz) penetrate the superficial layers of the skin without heating them, only heating selected tissues, such as the dermis, the middle skin layer where collagen-producing cells are located, and hypodermis, deepest skin layer where big collagen structures and fat tissue are located.&nbsp;<br><br>With a deep radiofrequency treatment, skin looseness and cellulite can be treated at the same time for smoother, slimmer firmer skin with one treatment. The essence of a radiofrequency procedure is to provide a deep, focused action where it matters without causing irritation, redness and burns which can occur when the surface of the skin is affected.&nbsp;<br><br>The treatment gives you tight, rejuvenated, and invigorated skin on both the surface, and in the deeper subcutaneous layers. The overall effect of the therapy is supported by the stimulation of collagen fibers, the “building blocks” of the skin. The better the condition of these fibers, the younger your skin will look.&nbsp;<br><br>The thinner fat layer, combined with a stronger more pronounced skin layer, leads to circumference reduction and improves appearance of cellulite, resulting in smoother, firmer, and more radiant skin.&nbsp;<br><br>After every treatment session, you will see a noticeable change in your skin\'s appearance. With the completion of the full treatment course you will enjoy long lasting body contouring and tightening.&nbsp;<br><br>A pleasant, warm sensation is felt while the RF beams generate the therapeutic action that stimulates the fat and dermis layers. The RF energy transmitted into the fat layers forces the fat cells to release liquid fat, causing them to shrink and contract. Simultaneously, dermal activity stimulates the skin’s fibroblasts to increase collagen replenishment to strengthen and rejuvenate skin for a smoother, tighter, more contoured appearance.&nbsp;<br><br>Each person requires a different number of times but the average is between 8 and 12. This is the number of sessions you will need and is indicative. They can be less and also more. Less than 6 does not usually reproduce a continuity so that the effects are maintained over time. It is one session per week, so for the price of body radiofrequency you will be 2 or 3 months</p>', '<p>La radiofrecuencia es actualmente la mejor tecnología disponible para el estiramiento de la piel no quirúrgico y no invasivo y la eliminación de la celulitis. Los tratamientos de radiofrecuencia se utilizan en la estética como una forma de suministrar calor intenso a los tejidos más profundos que la epidermis (la capa más externa de la piel), con el objetivo de aumentar la producción de colágeno, la circulación y la liberación de grasa de esos tejidos.&nbsp;</p><p>La radiofrecuencia se basa en el hecho de que las corrientes eléctricas de muy alta frecuencia (300 kHz a 40 MHz) penetran las capas superficiales de la piel sin calentarlas, solo calientan los tejidos seleccionados, como la dermis, la capa media de la piel donde se ubican las células productoras de colágeno e hipodermis, la capa más profunda de la piel donde se localizan grandes estructuras de colágeno y tejido graso.<br>Con un tratamiento de radiofrecuencia profunda, la relajación de la piel y la celulitis se pueden tratar al mismo tiempo para una piel más firme, más lisa y delgada con un solo tratamiento. La esencia de un procedimiento de radiofrecuencia es proporcionar una acción profunda y enfocada donde sea importante sin causar irritación, enrojecimiento y quemaduras que pueden ocurrir cuando la superficie de la piel se ve afectada.<br><br>&nbsp;</p><p>El tratamiento le brinda una piel tensa, rejuvenecida y vigorizada tanto en la superficie como en las capas subcutáneas más profundas. El efecto general de la terapia se apoya en la estimulación de las fibras de colágeno, los \"bloques de construcción\" de la piel. Cuanto mejor sea la condición de estas fibras, más joven se verá su piel.<br><br>&nbsp;</p><p>La capa de grasa más delgada, combinada con una capa de piel más pronunciada y fuerte, conduce a la reducción de la circunferencia y mejora la apariencia de la celulitis, dando como resultado una piel más suave, más firme y más radiante.</p><p>&nbsp;</p><p>Después de cada sesión de tratamiento, verá un cambio notable en la apariencia de su piel. Con la finalización del curso de tratamiento completo, disfrutará de un estiramiento y contorno corporal duraderos.<br>Una sensación agradable y cálida se siente mientras los haces de RF generan la acción terapéutica que estimula las capas de grasa y dermis. La energía de RF transmitida a las capas de grasa obliga a las células de grasa a liberar grasa líquida, lo que hace que se contraigan y contraigan. Simultáneamente, la actividad dérmica estimula los fibroblastos de la piel para aumentar la reposición del colágeno para fortalecer y rejuvenecer la piel para lograr una apariencia más suave, más ajustada y más contorneada.<br><br>&nbsp;</p><p>Durante el procedimiento, el cliente siente una suave vibración a medida que las ondas de radiofrecuencia penetran en el tejido adiposo. Nunca debe haber ningún dolor; de hecho, muchos clientes experimentan el tratamiento como un masaje muy agradable. La piel puede estar visiblemente tensa después del procedimiento, y la piel puede estar caliente y roja como resultado del aumento de la circulación sanguínea. Todo vuelve a la normalidad después de uno o dos días.</p><p>&nbsp;</p><p>Cada persona requiere un número diferente de veces, pero el promedio es entre 8 y 12. Este es el número de sesiones que necesitará y es indicativo. Pueden ser menos y también más. En menos de 6 sesiones no tendrás tan visibles los resultados.&nbsp;</p>', '80.00', 'Radio', '/booking-body', '3_RADIO-FREQUENCY-TREATMENT.jpg', 1, 1, '2018-10-27 07:12:09', 'test', 'displayNone', 'test', '_self', '/es/booking-body'),
(4, 'Vacuum therapy', 'Terapia Vacuum', 1, 2, '<p>Tired of the dimples, lumps and excess fat deposits? It’s time to say good bye to that disgusting fats with the Vacuum Therapy.&nbsp;&nbsp;<br><br>Vacuum Therapy eliminates fat + smooth and firms the skin. The treatment combines the ancient art of cupping with negative pressure to assist in eliminating fat, waste, toxins and excess fluids from your body.&nbsp;Vacuum Therapy is a non-invasive scientifically researched treatment, certified by Quality Standards like CE and FDA. It offers an effective solution to fight cellulite in all its stages, reduces localized fat and reshapes the body.&nbsp;<br><br>Vacuum Therapy is great as a stand-alone treatment for cellulite, reduces fluid retention, improves skin texture, increases lymphatic circulation, reduces muscle tension, body reshape and for reducing small deposits of fat. The treatment leaves your skin immediately smoother and firmer.&nbsp;<br><br>The Cellulite Vacuum therapy system uses suction and power driven rollers to manipulate and massage the tissues in problem cellulite areas. This new system of Vacuum Therapy uses a high-revolution axial turbine (15,000 rpm) instead of the well-known vacuum pump used in other vacuum treatments. &nbsp;This turbine produces a continuous suction at a constant flow, which prevents the skin and tissues from being damaged thus, it is possible to achieve better results in fewer sessions.&nbsp;<br><br>The roller head, with a revolving coupling, has low friction rollers which slide in a linear and perpendicular way so that the therapist can exert the right pressure according to each patient’s treatment requirements. The combination of the rollers with the suction mobilizes the different skin tissues and stimulates micro-circulation, which generates lymphatic drainage to eliminate fluids accumulated in the areas that have been treated therefore, facilitating the elimination of toxins.&nbsp;<br><br>In addition, the innovative light therapy (Dermoleds) activates the cell receptors producing and stimulating collagen and elastin. In this way, the skin\'s elasticity is stimulated, giving it a smooth and youthful appearance.&nbsp;<br><br>WHAT RESULTS CAN I EXPECT TO SEE?&nbsp;</p><ul><li>Reduced excess fat deposit in hips, tights and buttocks.</li><li>Improved blood circulation</li><li>Relaxed Muscle Tension</li><li>Increased lymph circulation and elimination of toxins</li><li>Improved skin tightness, firmness and elasticity</li></ul>', '<p>¿Cansado de los hoyuelos, bultos y exceso de depósitos de grasa? Es hora de decir adiós a esas grasas repugnantes con la terapia de vacuum.</p><p><br>La terapia de vacío elimina la grasa, suaviza y reafirma la piel. El tratamiento combina el antiguo arte de ahuecar con la presión negativa para ayudar a eliminar la grasa, los desechos, las toxinas y el exceso de líquidos de su cuerpo. La terapia de vacío es un tratamiento no invasivo con investigación científica, certificado por estándares de calidad como CE y FDA. Ofrece una solución eficaz para combatir la celulitis en todas sus etapas, reduce la grasa localizada y remodela el cuerpo.</p><p><br>La terapia de vacío es excelente como tratamiento independiente para la celulitis, reduce la retención de líquidos, mejora la textura de la piel, aumenta la circulación linfática, reduce la tensión muscular, remodela el cuerpo y reduce los pequeños depósitos de grasa. El tratamiento deja su piel de inmediato más tersa y firme.</p><p>¿COMO FUNCIONA?</p><p>&nbsp;</p><p>El sistema de vacuum terapia utiliza un succionador​ con potencia para manipular y masajear los tejidos en áreas problemáticas de celulitis. Este sistema de vacuum terapia utiliza una turbina axial de alta revolución (15,000 rpm) en lugar de la conocida bomba de vacío utilizada en otros tratamientos de vacuum. Esta turbina produce una succión continua a un flujo constante, lo que evita que la piel y los tejidos se dañen, por lo que es posible lograr mejores resultados en menos sesiones.</p><p>&nbsp;</p><p>Esta succión ayuda al especialista a ejercer la presión correcta de acuerdo a los requisitos del tratamiento de cada paciente movilizando los diferentes tejidos de la piel y estimulando la microcirculación, lo que genera un drenaje linfático para eliminar los líquidos acumulados en las áreas que han sido tratadas, facilitando así la eliminación de toxinas.</p><p>&nbsp;</p><p>¿QUÉ RESULTADOS PUEDO ESPERAR VER?</p><ul><li>Reducción del exceso de grasa depositada en caderas y glúteos.</li><li>Mejora la circulación sanguínea.</li><li>Tensión muscular relajada</li><li>Aumento de la circulación linfática y eliminación de toxinas.</li><li>Mejora la firmeza y elasticidad de la piel.</li></ul><p>Prevención de la celulitis por inhibición del almacenamiento de grasa.</p>', '80.00', 'Vacuum', '/booking-body', '4_VACUUM-THERAPY.jpg', 1, 1, '2018-10-27 09:12:09', 'test', 'displayNone', 'test', '_self', '/es/booking-body'),
(5, 'Body sculpting package treatment (RF + cavitation + vacuum) - 6 sessions', 'Paquete escultura corporal (RF + Cavitación + Vacum) – 6 Sesiones ', 1, 7, '<p>We customize your sessions depending of the areas you want sculpt, we use a sort of therapies that will help your skin look better.&nbsp;<br><br>This treatment has numerous uses, some of the most common are:&nbsp;</p><p>&nbsp;</p><p>Reducing pockets of stubborn fat</p><p>Improving the look and texture of stretch marks and scars</p><p>Lifting the skin on the face and neck to give a non-invasive and natural looking facelift</p><p>Targeting areas of cellulite</p><p><strong>Cavitation</strong><br>Ultrasonic Cavitation is a sound wave which has been designed to target fat cells, it penetrates through your bodies skin layers and destroys the fat cells with up to 1 million vibrations per second, this causes the cell to expand because tiny bubbles of oxygen are formed within the cell which causes internal pressure in the cell which in turn then causes it&nbsp;to disperse its&nbsp;contents into the body.&nbsp;<br><br><strong>Radio Frequency and Vacuum Suction</strong><br>The Radio Frequency part of the treatment is designed to clean up the content left in the body from the ultrasonic cavitation treatment. this is done by increasing the body temperature which causes capillary dilation enabling a faster, more efficient blood circulation, the vacuum then causes better blood to fat exchange, then the fat enriched blood is circulated and processed through your liver, which cleans your blood whilst removing the fat, Radio Frequency also has the ability to shrink loose skin and repair collagen /Elastin in the skin</p>', '<p>Personalizamos sus sesiones en función de las áreas que desee esculpir, utilizamos un tipo de terapias que ayudarán a que su piel se vea mejor.<br><br>&nbsp;</p><p>Este tratamiento tiene numerosos usos, algunos de los más comunes son:<br><br>&nbsp;</p><p>Reducir la grasa</p><p>Mejora el aspecto y la textura de las estrías y cicatrices.</p><p>Áreas de focalización de la celulitis.</p><p>Cavitación ultrasónica</p><p>&nbsp;</p><p>La cavitación ultrasónica es una onda de sonido que ha sido diseñada para atacar a las células de grasa, penetra a través de las capas de la piel de sus cuerpos y destruye las células de grasa con hasta 1 millón de vibraciones por segundo, esto hace que la célula se expanda porque se forman pequeñas burbujas de oxígeno en su interior. Las células que causa presión interna en la célula que a su vez hace que se disperse en el cuerpo.</p><p>Radiofrecuencia y vacuum</p><p>&nbsp;</p><p>La parte de radiofrecuencia del tratamiento está diseñada para limpiar el contenido que queda en el cuerpo del tratamiento de cavitación ultrasónica. Esto se hace aumentando la temperatura corporal que causa la dilatación capilar permitiendo una circulación sanguínea más rápida y eficiente, el vacío produce mejor intercambio de sangre a grasa, luego la sangre enriquecida en grasa circula y se procesa a través de su hígado, que limpia su sangre mientras la extrae la grasa, la radiofrecuencia también tiene la capacidad de reducir la piel suelta y reparar el colágeno / elastina en la piel</p><p>&nbsp;</p>', '420.00', 'modal4', '/booking-body', '5_BODY-SCULPTING-PACKAGE-TREATMENT-RF-CAVITATION-VACUUM-6-SESSIONS.jpg', 1, 1, '2018-10-27 10:12:09', 'test', 'displayNone', 'test', '_self', '/es/booking-body');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `specialfs`
--

CREATE TABLE `specialfs` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `titleesp` varchar(255) NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `description` text,
  `descriptionesp` text NOT NULL,
  `price` varchar(255) NOT NULL,
  `popup` varchar(255) NOT NULL,
  `button` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `is_featured` tinyint(1) NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `created_at` datetime NOT NULL,
  `is_activeTf` varchar(255) NOT NULL,
  `textFinanc` varchar(255) NOT NULL,
  `textFinancEsp` varchar(255) NOT NULL,
  `target` varchar(255) NOT NULL,
  `buttonEs` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `specialfs`
--

INSERT INTO `specialfs` (`id`, `title`, `titleesp`, `user_id`, `category_id`, `description`, `descriptionesp`, `price`, `popup`, `button`, `image`, `is_featured`, `is_active`, `created_at`, `is_activeTf`, `textFinanc`, `textFinancEsp`, `target`, `buttonEs`) VALUES
(1, 'Free Consultation Appointment ', 'Consulta Gratuita', 1, 1, '<p>Let our skin experts help you choose the perfect treatment with your face or body concern in your visit. Our first consultation is FREE, No Obligation, if you agree with the recommendation we will do the treatment the same day or we schedule a new appointment.&nbsp;<br><br><i><strong>Let yourself, come, relax and enjoy with us!!</strong></i></p>', '<p>Deje que nuestros expertos en piel lo ayuden a elegir el tratamiento perfecto para su rostro o cuerpo cuando nos visite. Nuestra primera cita es GRATUITA, Sin Obligación. Si está de acuerdo con la recomendación haremos el tratamiento el mismo día o programaremos una nueva cita.&nbsp;</p><p>&nbsp;</p><p><i><strong>Déjate llevar, relájate y disfruta con nosotros!</strong></i></p>', 'Free', 'modal', '/booking-facial', '1_FREE-CONSULTATION.jpg', 1, 1, '2018-10-27 04:12:09', 'displayNone', 'test', 'test', '_self', '/es/booking-facial'),
(2, 'Express Facial', 'Facial Express', 1, 1, '<p>Vali Spa combine the power of plants and fruits with modern science to create a prescription facial to balance the skin. Dry, oily, aged, uneven, sensitive and acne qualify if the skin conditions are addressed with this good treatment. It only takes five steps (clean, exfoliate, mask, moisturize and protect) to make your skin look radiant.</p>', '<p>Vali Spa combina el poder de las plantas y las frutas con la ciencia moderna para crear una receta facial para equilibrar la piel Seca, grasa, envejecida o irregular.</p><p>Analiza si las condiciones de la piel son aptas para estos&nbsp; tratamientos. Solo se necesitan cinco pasos (limpiar, exfoliar, enmascarar, hidratar y proteger) para que su piel se vea radiante.</p><p>En cada tratamiento debemos realizar el debido cuidado en el hogar para ver mejores resultados a corto plazo. Importante el uso de protector solar para evitar daños en la piel.</p>', '60.00', 'Express', '/booking-facial', '2_EXPRESS-FACIAL.jpg', 1, 1, '2018-10-27 06:12:09', 'displayNone', 'test', 'prueba', '_self', '/es/booking-facial'),
(3, 'Mini Facial With Hydro Jelly Mask', 'Mini Facial Con Mascarilla Hidro Jelly', 1, 2, '<p>eautiful skin starts here, We add to Special Natural Hydro Jelly Mask enriched with antioxidants and moisturizing properties that you will love. It only takes five steps (clean, exfoliate, mask, moisturize and protect) to give your skin a radiant look.&nbsp;</p><p>Vali Skincare &amp; Makeup combine the power of plants and fruits with modern science to create a prescript facial to balance the skin. Dry, oily, aged, uneven, sensitive and acne qualify if the skin conditions are addressed with this good treatment.&nbsp;</p><p>Each treatment performed requires at-home care to see better results in the short term. The use of sunscreen is important to prevent damage to the skin.</p>', '<p>La piel hermosa comienza aquí, añadimos la Mascarilla Hidratante Natural Especial Enriquecida con Antioxidantes y Propiedades Hidratantes que te encantarán. Solo se requieren cinco pasos (limpiar, exfoliar, enmascarar, hidratar y proteger) para darle a su piel un aspecto radiante. Vali Skincare &amp; Makeup combina el poder de las plantas y las frutas con la ciencia moderna para crear una prescripción facial y equilibrar la piel seca, grasa, envejecida, irregular, sensible y con acné.</p><p>En cada tratamiento debemos realizar el debido cuidado en el hogar para ver mejores resultados a corto plazo. Importante el uso de protector solar para evitar daños en la piel.</p>', '70.00', 'Mini', '/booking-facial', '3_MINI-FACIAL-WITH-HYDRO-JELLY-MASK.jpg', 1, 0, '2018-10-27 07:12:09', 'displayNone', 'test', 'test', '_self', '/es/booking-facial'),
(4, 'Gentleman Facial', 'Facial de caballero', 1, 2, '<p>The gentleman\'s facial is designed for the specific needs of a man\'s skin care. The treatment begins with a deep cleaning, followed by a special exfoliating exfoliation of apricot seeds and extraction. To replenish the skin, the facial concludes with a fresh and soothing algae mask that is used to balance and moisturize the skin and also helps to alleviate the irritation that occurs in the skin after shaving.</p>', '<p>El tratamiento facial para caballeros está diseñado para las necesidades específicas del cuidado de la piel de un hombre. El tratamiento comienza con una limpieza profunda, seguida de una exfoliación especial de semillas de albaricoque y extracción. Para reponer la piel, el facial concluye con una mascarilla de algas fresca y suave que se utiliza para equilibrar e hidratar la piel y también ayuda a aliviar la irritación que se produce en la piel después del afeitado.</p><p>Es necesario realizar una evaluación de la piel para determinar qué tratamiento está indicado de acuerdo con las condiciones de su rostro</p><p>En cada tratamiento debemos realizar el debido cuidado en el hogar para ver mejores resultados a corto plazo. Importante el uso de protector solar para evitar daños en la piel.</p>', '70.00', 'Gentleman', '/booking-facial', '4_GENTLEMAN-FACIAL.jpg', 1, 0, '2018-10-27 09:12:09', 'displayNone', 'test', 'test', '_self', '/es/booking-facial'),
(5, '911 Teen Treatment', '911 Tratamiento para adolescentes.', 1, 7, '<p>We create a special treatment thinking in our special teens with a selection of products just for their needs including the hormonal changes, there are recharged of non aggressive principal actives like Papaya, strawberry, Hyaluronic Acid, Lemon and lime that will help their skin feel more heal, smooth, hydrated, brightened and will be more confident with the appearance of it.</p><p>Acne is a skin condition that causes clogged pores, pimples and, in more severe cases, inflamed patches of skin and painful cysts. These can appear on the face, neck, chest, shoulders, back and upper arms.&nbsp;</p><p>Acne occurs when the pores on the surface of the skin become clogged with an accumulation of oil (sebum) produced by the glands in the hair follicles with a mixture of dirt, dead skin cells and bacteria. Acne most often begins at puberty as teenagers experience hormonal changes that can cause their skin to produce more oil. We will start with an analysis of the skin to prepare a personalized treatment. We will create a customized treatment that will variety weekly with high frequency, extractions with steamer, exfoliants with enzymes, microdermabrasion, and more, according to the criteria of your specialist.&nbsp;</p><p>If you want to see the better results, a package of at least 6 sessions (1 per week) is recommended.</p>', '<p>Creamos un tratamiento especial pensando en nuestros adolescentes con una selección de productos solo para sus necesidades, incluyendo los cambios hormonales, de esto se encargan los principios activos no agresivos como la papaya, la fresa, el ácido hialurónico, el limón y la lima que ayudarán a que su piel se sienta más , suave, hidratada e iluminada.</p><p>&nbsp;</p><p>El acné es una afección de la piel que causa poros obstruidos, granos y, en casos más graves, parches inflamados de la piel y quistes dolorosos. Estos pueden aparecer en la cara, cuello, pecho, hombros, espalda y parte superior de los brazos.</p><p>El acné se produce cuando los poros en la superficie de la piel se obstruyen con una acumulación de grasa (sebo) producida por las glándulas en los folículos pilosos con una mezcla de suciedad, células muertas de la piel y bacterias. El acné con mayor frecuencia comienza en la pubertad ya que los adolescentes experimentan cambios hormonales que pueden hacer que su piel produzca más grasa. Comenzaremos con un análisis de la piel para preparar un tratamiento personalizado.&nbsp;</p><p>El tratamiento personalizado variará semanalmente con tratamiento de alta frecuencia, extracciones con vaporizador, exfoliaciones con enzimas, microdermoabrasión y más, según los criterios de su especialista.<br><br>&nbsp;</p><p>Si desea ver los mejores resultados, se recomienda un paquete de al menos 12 sesiones (1 por semana).</p><p>Es necesario realizar una evaluación de la piel para determinar qué tratamiento está indicado de acuerdo con las condiciones de su rostro</p><p>En cada tratamiento debemos realizar el debido cuidado en el hogar para ver mejores resultados a corto plazo. Importante el uso de protector solar para evitar daños en la piel.</p>', '80.00', 'modal4', '/booking-facial', '5_911-TEEN-TREATMENT.jpg', 1, 1, '2018-10-27 10:12:09', 'displayNone', 'test', 'test', '_self', '/es/booking-facial'),
(6, '911 Teen Package – 6 Sessions', 'Paquete Teen 911 - 6 Sesiones', 1, 0, '<p>Emergency treatment for acne.&nbsp;</p><p>To obtain an amazing result we offer a package of our special treatment for teens with a selection of products just for their needs including the hormonal changes, there are recharged of non aggressive principal actives like Papaya, strawberry, Hyaluronic Acid, Lemon and lime that will help their skin feel more heal, smooth, hydrated, brightened and will be more confident with the appearance of it.</p><p>Acne is a skin condition that causes clogged pores, pimples and, in more severe cases, inflamed patches of skin and painful cysts. These can appear on the face, neck, chest, shoulders, back and upper arms.&nbsp;</p><p>Acne occurs when the pores on the surface of the skin become clogged with an accumulation of oil (sebum) produced by the glands in the hair follicles with a mixture of dirt, dead skin cells and bacteria. Acne most often begins at puberty as teenagers experience hormonal changes that can cause their skin to produce more oil. We will start with an analysis of the skin to prepare a personalized treatment. We will create a customized treatment that will variety weekly with high frequency, extractions with steamer, exfoliants with enzymes, microdermabrasion, and more, according to the criteria of your specialist.&nbsp;</p><p>If you want to see the better results, a package of at least 6 sessions (1 per week) is recommended.</p>', '<p>Tratamiento de emergencia para el acné.</p><p><br>Para obtener un resultado increíble, ofrecemos un paquete de nuestro tratamiento especial para adolescentes con una selección de productos solo para sus necesidades, incluidos los cambios hormonales, de esto se encargan de activos principales no agresivos como la papaya, la fresa, el ácido hialurónico, el limón y la lima. Ayude a que su piel se sienta más sana, suave, hidratada, iluminada y tendrá más confianza con su apariencia.</p><p>El acné es una afección de la piel que causa poros obstruidos, granos y, en casos más graves, parches inflamados de la piel y quistes dolorosos. Estos pueden aparecer en la cara, cuello, pecho, hombros, espalda y parte superior de los brazos.</p><p>El acné se produce cuando los poros en la superficie de la piel se obstruyen con una acumulación de aceite (sebo) producida por las glándulas en los folículos pilosos con una mezcla de suciedad, células muertas de la piel y bacterias.</p><p>El acné con mayor frecuencia comienza en la pubertad ya que los adolescentes experimentan cambios hormonales que pueden hacer que su piel produzca más grasa. Pero cualquiera puede tener acné, incluso bebés y adultos hasta los 40 y 50 años.</p><p>Es necesario realizar una evaluación de la piel para determinar qué tratamiento está indicado de acuerdo con las condiciones de su rostro</p><p>En cada tratamiento debemos realizar el debido cuidado en el hogar para ver mejores resultados a corto plazo. Importante el uso de protector solar para evitar daños en la piel.</p>', '400.00', '911t', '/booking-facial', '6_911-TEEN-PACKAGE–6-SESSIONS.jpg', 1, 1, '2019-07-28 18:33:37', 'displayNone', 'test', 'test', '_self', '/es/booking-facial'),
(7, 'Back Facial', 'Facial en la espalda', 1, 0, '<p>A special facial to pamper your back. Designed to treat spots and buds. It includes a deep cleansing exfoliation and detoxification, which leaves you fresh and hydrated, includes a personalized mask and aromatherapy.</p>', '<p>Un facial especial para mimar tu espalda. Diseñado para tratar manchas y brotes. Incluye una exfoliación y desintoxicación de limpieza profunda, que te deja fresco e hidratado, incluye una máscara personalizada y aromaterapia.</p>', '80.00', 'Back', '/booking-facial', '7_BACK-FACIAL.jpg', 1, 1, '2019-07-28 18:34:13', 'displayNone', 'test', 'test', '_self', '/es/booking-facial'),
(8, 'Led Facial Therapy', 'Terapia Facial Led', 1, 0, '<p>This special facial begins with a fabulous cleanse, then a gentle exfoliation is needed that adds the properties of the fruit to stimulate the hydration of the skin; the next step is a moisturizer to prepare the skin for therapy with LED. We add harnesses to the specific wavelengths in the LED light to soothe outbreaks and inflammation, making it ideal for those with skin prone to acne and redness. A single treatment can improve both, but for severe outbreaks, it can take more than three sessions to notice a dramatic reduction. Each LED wavelength (color) of light provides unique therapeutic benefits.&nbsp;</p><p><strong>Red Light:&nbsp;</strong>Complementary photo-aging treatment. Increases the growth factor of fibroblasts in macrophage cells.</p><p><strong>Amber Light:</strong> Healing acceleration. Increases lymphatic flow to eliminate waste and stimulate cell growth and healing.</p><p><strong>Green Light:&nbsp;</strong>Adjuvant treatment of hyperpigmentation. Illuminates the skin and reduces inflammation.</p><p><strong>Blue Light:&nbsp;</strong>Complementary Treatment of Acne. Propionibacterium responds to blue light, reducing acne inflammation.</p><p>We finish this treatment with a super hydrated mask to give your skin a bright and nourishing.</p>', '<p>Este facial especial comienza con una limpieza fabulosa. Se necesita una exfoliación suave que agregue las propiedades de la fruta para estimular la hidratación de la piel; El siguiente paso es una humectante para preparar la piel para terapia con LED. Agregamos arneses a las longitudes de onda específicas en la luz LED para aliviar los brotes y la inflamación, lo que lo hace ideal para aquellas personas con piel propensa al acné y enrojecimiento. Un solo tratamiento puede mejorar , pero para brotes severos, puede tomar más de tres sesiones para notar una reducción significativa.</p><p>Cada LED de longitud de onda (color) de la luz proporciona beneficios terapéuticos únicos.</p><p><strong>Luz roja:</strong> Tratamiento complementario de foto envejecimiento. Aumenta el factor de crecimiento de los fibroblastos en células macrófagas.</p><p><strong>Luz ámbar:</strong> Aceleración curativa. Aumenta el flujo linfático para eliminar toxinas y estimular el crecimiento celular y la cicatrización.</p><p><strong>Luz verde:</strong> Tratamiento adyuvante de la hiperpigmentación. Aclara la piel y reduce la inflamación.</p><p><strong>Luz azul:</strong> Tratamiento complementario del acné. Propionibacterium responde a la luz azul, reduciendo la inflamación del acné.<br>Terminamos este tratamiento con una máscara súper hidratante para darle a tu piel un aspecto brillante y nutritivo.</p><p>Es necesario realizar una evaluación de la piel para determinar qué tratamiento está indicado de acuerdo con las condiciones de su rostro</p><p>En cada tratamiento debemos realizar el debido cuidado en el hogar para ver mejores resultados a corto plazo. Importante el uso de protector solar para evitar daños en la piel.</p>', '90.00', 'Ledf', '/booking-facial', '8_LED-LIGHT-THERAPY-FOR-ACNE.jpg', 1, 1, '2019-07-28 18:35:59', 'displayNone', 'test', 'test', '_self', '/es/booking-facial'),
(9, 'Lymphatic Drainage Facial', 'Drenaje linfático facial.', 1, 0, '<p>Lymphatic massage is a fantastic treatment which has been around for many years, and its multiple benefits are always widely documented . The lymphatic massage of the face and decollete area can be highly effective due to its ability to prevent sluggish circulation and remove unwanted toxins. This reduces puffiness and keeps our complexion healthy.&nbsp;</p><p>&nbsp;Here are the 6 key benefits of a lymphatic facial massage.&nbsp;</p><p>Deep cleanse</p><p>Accelerated healing</p><p>Reduced puffiness</p><p>Congestion free skin&nbsp;</p><p>Reduction of scar tissue</p><p>Promotes the feeling of relaxation and wellbeing</p><p>Come and enjoy a complete and effective service starting with a mini facial, followed by constant drains applying oxygenating products that repair damaged cells hydrating and deep moisturizing your face. It eliminates fine wrinkles and smoothest lines of expression improves circulation, culminates giving that firmness that we want for the properties of moisturizers that we use among others hyaluronic acid yerba mate, the hydrolyzed protein of peptide-rich silk, helping to regenerate mature skin thus achieving a youthful appearance. Come enjoy it and we will be happy to assist you.</p>', '<p>El masaje linfático es un tratamiento fantástico que ha existido durante muchos años y sus múltiples beneficios siempre están ampliamente documentados. El masaje linfático de la cara y el área de escote puede ser altamente efectivo debido a su capacidad para prevenir la circulación lenta y eliminar las toxinas no deseadas. Esto reduce la hinchazón y mantiene nuestra tez saludable.</p><p>Aquí están los 6 beneficios claves de un masaje facial linfático.</p><p>Limpieza profunda</p><p>Curación acelerada</p><p>Reducción de la hinchazón.</p><p>Piel libre de congestión.</p><p>Reducción del tejido cicatricial.</p><p>Promueve la sensación de relajación y bienestar.</p><p>&nbsp;</p><p>Venga y disfrute de un servicio completo y efectivo que comienza con un mini facial, seguido de un drenaje constante que aplica productos oxigenantes que reparan las células dañadas, hidratan y humectan profundamente su cara, elimina las líneas de expresión más suaves mejorando la circulación, gracias a las propiedades de los humectantes que utilizamos, tales como, el ácido hialurónico, la yerba mate, la proteína hidrolizada, que ayuda a regenerar la piel madura, logrando así un aspecto juvenil. Ven a disfrutarlo y estaremos encantados de atenderte.</p><p>Es necesario realizar una evaluación de la piel para determinar qué tratamiento está indicado de acuerdo con las condiciones de su rostro</p><p>En cada tratamiento debemos realizar el debido cuidado en el hogar para ver mejores resultados a corto plazo. Importante el uso de protector solar para evitar daños en la piel.</p>', '90.00', 'Lymphatic', '/booking-facial', '9_LYMPHATIC-DRAINAGE-FACIAL.jpg', 1, 1, '2019-07-28 18:38:12', 'displayNone', 'test', 'test', '_self', '/es/booking-facial'),
(10, 'Microdermabrasion', 'Microdermoabrasión', 1, 0, '<p>Microdermabrasion is a skin care treatment that exfoliates dead skin cells and promotes a healthy appearance and elasticity of the skin. Using fine granules, abrasion serves to polish the outer layer of the skin and increase circulation. Over time, microdermabrasion can help eliminate fine lines, acne, scars, spots and sunspots.</p><p>Many exfoliating products are composed of ingredients such as sugar, salt or ground walnut or apricot seeds. As such, these exfoliates are imperfectly rounded and have cut edges that can leave small scratches on the skin, causing irritation, congested pores and swelling.<br>Since the crystals of microdermabrasion are based on aluminum oxide, the granules are pure, perfectly round and discrete. This allows a gentle exfoliation that leaves the skin rejuvenated, renewed and renewed. Microdermabrasion is for all skin types and ages. For users under 18 years of age, drive with adult supervision. Accelerates the cellular renewal of the skin and increases the production of collagen.</p><p>We add a special gift for you ... a mini facial with an Aloe Vera Collagen Vail.</p><p>&nbsp;</p><p>Each treatment performed requires at-home care to see better results in the short term. The use of sunscreen is important to prevent damage to the skin.</p><p>&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; For better results we recommend one of doing one of these treatments ones every 15 days.</p>', '<p>La microdermoabrasión es un tratamiento para el cuidado de la piel que exfolia las células muertas de la piel y promueve una apariencia saludable y la elasticidad de la piel. Usando gránulos finos, la abrasión sirve para pulir la capa externa de la piel y aumentar la circulación. Con el tiempo, la microdermoabrasión puede ayudar a eliminar líneas finas, acné, cicatrices, manchas incluso solares.&nbsp;</p><p>Muchos productos exfoliantes están compuestos de ingredientes tales como azúcar, sal o nueces molidas o semillas de albaricoque. Como tales, estos efoliantes están redondeados de manera imperfecta y tienen bordes cortados que pueden dejar pequeños rasguños en la piel, causando irritación, poros congestionados e hinchazón. Dado que los cristales de microdermoabrasión están basados ​​en óxido de aluminio, los gránulos son puros, perfectamente redondos y discretos. Esto permite una exfoliación suave que deja la piel rejuvenecida y renovada. La microdermoabrasión es para todos los tipos de piel y edades. Para usuarios menores de 18 años, conducir consupervisión de un adulto. Acelera la renovación celular de la piel y aumenta la producción de colágeno.</p><p>Agregamos un regalo especial para usted ... un mini facial con un Aloe Vera Collagen Vail.</p><p>En cada tratamiento debemos realizar el debido cuidado en el hogar para ver mejores resultados a corto plazo. Importante el uso de protector solar para evitar daños en la piel.&nbsp;</p><p>Para obtener mejores resultados, recomendamos uno de estos tratamientos cada 15 días.</p>', '95', 'microdermabrasion', '/booking-facial', '10__MICRODERMABRASION_copia1.jpg', 0, 1, '2020-02-10 23:00:37', 'displayNone', 'test', 'test', '_self', '/es/booking-facial'),
(12, 'Microdermabrasion Package - 4 Sessions', 'Paquete de Microdermoabrasión - 4 Sesiones', 1, 0, '<p>Created to Microdermabrasion lovers that want to make the skin appear younger.&nbsp;</p><p>The procedure should not be painful and takes&nbsp;<a href=\"https://www.aad.org/public/diseases/cosmetic-treatments/microdermabrasion#faqs\">30–40 minutes</a>. Afterward, there may be slight swelling or sunburn-like symptoms for a few days.</p><p>Before seeing reduced signs of aging, we recommend between 6&nbsp;and 12 sessions in a term of 3 month.&nbsp;</p><p>People can have treatments weekly, every 2 weeks, or monthly, depending on their skin type and the reason for treatment.</p><p>Note: You should avoid sunlight for a few weeks&nbsp;after&nbsp;the pink color has gone away. When outdoors, use a broad spectrum sunscreen with an SPF of 30 or more, and wear a wide-brimmed hat.&nbsp;After microdermabrasion, your&nbsp;skin&nbsp;will be pink and feel dry and tight (like sunburn or windburn) for about 24 hours. Use moisturizer.</p>', '<p>Creado para los amantes de la microdermabrasión, que quieren que la piel se vea más joven. El procedimiento no debe ser doloroso y dura de 30 a 40 minutos. Después, puede haber una ligera hinchazón o síntomas similares a las quemaduras solares durante algunos días.</p><p>Antes de ver signos reducidos de envejecimiento, recomendamos entre 6 y 12 sesiones en un plazo de 3 meses.</p><p>Las personas pueden recibir tratamientos semanalmente, cada 2 semanas o mensualmente, según el tipo de piel y el motivo del tratamiento.<br><br>&nbsp;</p><p>Nota: debe evitar la luz del sol durante algunas semanas después de que el color rosado haya desaparecido. Cuando esté al aire libre, use un protector solar de amplio espectro con un SPF de 30 o más, y use un sombrero de ala ancha. Después de la microdermoabrasión, su piel estará rosada y se sentirá seca y tensa (como una quemadura solar o una quemadura de viento) durante aproximadamente 24 horas. Use crema hidratante.</p><p>En cada tratamiento debemos realizar el debido cuidado en el hogar para ver mejores resultados a corto plazo. Importante el uso de protector solar para evitar daños en la piel.</p>', '400', 'microdermabrasionx4', '/booking-facial', '11__MICRODERMABRASION_PACKAGE_–_4_SESSIONS.jpg', 0, 1, '2020-02-10 23:10:11', 'displayNone', 'test', 'test', '_self', '/es/booking-facial'),
(13, 'Microneedling', 'Microneedling', 1, 0, '<p>We offer a special treatment to improve conditions like acne scarring, fine lines and wrinkles, loose&nbsp;skin,&nbsp;skin&nbsp;texture, pore size, brown spots, stretch marks, and pigment issues.&nbsp;It may also help rejuvenate the skin.&nbsp;Microneedling&nbsp;is the latest trend in the esthetics market to stay youthful. It\'s a procedure that uses fine needles to puncture the skin and create a controlled skin injury in order to rejuvenate skin.&nbsp;</p><p>Skin can also lose collagen due to injuries, such as acne scarring, stretch marks, or other scars. Aging causes the decline of collagen in the skin, contributing to wrinkles and other signs of aging. Collagen is an essential protein that helps keep the skin looking youthful, with a firm, smooth, and stretchy texture. Microneedling is generally a safe and effective procedure that can improve the appearance of the skin. It may reduce wrinkles, diminish scarring, and tighten or rejuvenate loose or aging skin. Microneedling increases the production of&nbsp;<a href=\"https://www.medicalnewstoday.com/articles/262881.php\">collagen</a>&nbsp;and other healing factors by causing trauma to the skin.</p><p>Note that is important to realize that microneedling is not a quick fix, as it involves the growth of new skin. It can take several months for a person to see the full results of the procedure. We finish the treatment with a calming Aloe peel off mask.</p><p>The frequency of&nbsp;micro needling&nbsp;treatments vary with the intensity of the treatment. Mild treatments may be repeated every 2 to 4 weeks. Deep treatments for scars may be repeated every 4 to 6 weeks</p><p>The skin will be pink or red in appearance for 24-48 hours, much like a sunburn with some minor bleeding and very occasionally some mild bruising. While some results may be almost immediate, your best results usually won\'t be visible until&nbsp;four to six weeks&nbsp;after the procedure</p>', '<p>Microneedling es un tratamiento que ofrecemos para tratar y mejorar afecciones como cicatrices del acné, líneas finas y arrugas, piel suelta, textura de la piel, tamaño de los poros, manchas marrones, estrías y problemas de pigmento. También puede ayudar a rejuvenecer la piel. Microneedling es la última tendencia en el mercado de la estética para mantenerse joven. Es un procedimiento que utiliza agujas finas para pinchar la piel y crear una lesión controlada para rejuvenecerla.</p><p>La piel también puede perder colágeno debido a lesiones, como cicatrices del acné, estrías u otras cicatrices. El envejecimiento provoca la disminución del colágeno en la piel, contribuyendo a las arrugas y otros signos del envejecimiento. El colágeno es una proteína esencial que ayuda a mantener la piel con un aspecto joven, con una textura firme, suave y elástica. Microneedling es un procedimiento seguro y eficaz que puede mejorar la apariencia de la piel. Puede reducir las arrugas, disminuir las cicatrices y tensar o rejuvenecer la piel suelta o envejecida. Microneedling aumenta la producción de colágeno y otros factores de curación al causar traumas en la piel.</p><p>&nbsp;</p><p>Tenga en cuenta que Microneedling no es una solución rápida, ya que implica el crecimiento de piel nueva. Puede tomar varios meses para que una persona vea los resultados completos del procedimiento.</p><p>La frecuencia de los tratamientos con micro agujas varía con la intensidad del tratamiento. Los tratamientos leves se pueden repetir cada 2 a 4 semanas. Los tratamientos profundos para cicatrices pueden repetirse cada 4 a 6 semanas. La piel tendrá una apariencia rosada o roja durante 24 a 48 horas, al igual que una quemadura solar con un sangrado leve y, muy ocasionalmente, algunos moretones leves.&nbsp;</p><p>Si bien algunos resultados pueden ser casi inmediatos, sus mejores resultados generalmente no serán visibles hasta cuatro a seis semanas después del procedimiento.</p>', '130', 'microneedlingspecial', '/booking-facial', '12__MICRONEEDLING.jpg', 0, 1, '2020-02-10 23:17:44', 'displayNone', 'test', 'test', '_self', '/es/booking-facial'),
(14, 'Microneedling Package - 6 Sessions', 'Paquete Microneedling', 1, 0, '<p>Incredible package to help rejuvenate the skin. We offer a 6 sessions packages helping you to pamper yourself with this treatment.&nbsp;&nbsp;</p><p>The frequency of&nbsp;micro needling&nbsp;treatments vary with the intensity of the treatment. Mild treatments may be repeated every 2 to 4 weeks. Deep treatments for scars may be repeated every 4 to 6 weeks</p><p>The skin will be pink or red in appearance for 24-48 hours, much like a sunburn with some minor bleeding and very occasionally some mild bruising. While some results may be almost immediate, your best results usually won\'t be visible until&nbsp;four to six weeks&nbsp;after the procedure</p>', '<p>Increíble paquete para ayudar a rejuvenecer la piel. Ofrecemos paquetes de 6 sesiones que lo ayudan a mimarse con este tratamiento. La frecuencia de los tratamientos con micro agujas varía con la intensidad del tratamiento. Los tratamientos leves se pueden repetir cada 2 a 4 semanas. Los tratamientos profundos para cicatrices pueden repetirse cada 4 a 6 semanas. La piel tendrá una apariencia rosada o roja durante 24 a 48 horas, al igual que una quemadura solar con un sangrado leve y, muy ocasionalmente, algunos moretones leves. Si bien algunos resultados pueden ser casi inmediatos, sus mejores resultados generalmente no serán visibles hasta cuatro a seis semanas después del procedimiento.</p>', '600', 'microneedlingx6', '/booking-facial', '13__MICRONEEDLING_PACKAGE_–_6_SESSIONS1.jpg', 0, 1, '2020-02-10 23:22:48', 'displayNone', 'test', 'test', '_self', '/es/booking-facial');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `specialts`
--

CREATE TABLE `specialts` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `titleesp` varchar(255) NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `description` text,
  `descriptionesp` text NOT NULL,
  `price` varchar(255) NOT NULL,
  `popup` varchar(255) NOT NULL,
  `button` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `is_featured` tinyint(1) NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `created_at` datetime NOT NULL,
  `textFinanc` varchar(255) NOT NULL,
  `is_activeTf` varchar(255) NOT NULL,
  `textFinancEsp` varchar(255) NOT NULL,
  `target` varchar(255) NOT NULL,
  `buttonEs` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `specialts`
--

INSERT INTO `specialts` (`id`, `title`, `titleesp`, `user_id`, `category_id`, `description`, `descriptionesp`, `price`, `popup`, `button`, `image`, `is_featured`, `is_active`, `created_at`, `textFinanc`, `is_activeTf`, `textFinancEsp`, `target`, `buttonEs`) VALUES
(1, 'free Consultation Appointment ', 'Consulta Gratuita', 1, 1, '<p>Let our skin experts help you choose the perfect treatment with your face or body concern in your visit. Our first consultation is FREE, No Obligation, if you agree with the recommendation we will do the treatment the same day or we schedule a new appointment.&nbsp;<br><br><i><strong>Let yourself, come, relax and enjoy with us!!</strong></i></p>', '<p>Deje que nuestros expertos en piel lo ayuden a elegir el tratamiento perfecto para su rostro o cuerpo cuando nos visite. Nuestra primera cita es GRATUITA, Sin Obligación. Si está de acuerdo con la recomendación haremos el tratamiento el mismo día o programaremos una nueva cita.&nbsp;</p><p>&nbsp;</p><p><i><strong>Déjate llevar, relájate y disfruta con nosotros!</strong></i></p>', 'Free', 'modal', '/booking-special-treatments', '1_FREE-CONSULTATION.jpg', 1, 1, '2018-10-27 04:12:09', 'test', 'displayNone', 'test', '_self', '/es/booking-special-treatments'),
(2, 'Bb glow treatment - 1 session', 'Tratamiento BB Glow - 1 Sesión', 1, 1, '<p>The BB Glow treatment is a safe and intensive treatment for the skin that can help reduce the appearance of freckles and help to lighten the skin. It also helps with the discoloration of the skin caused by the photoaging of acne or age spots and the production of collagen by the use of nanotechnology with the microneedling technique. With this treatment, your skin can look shiny, soft and radiant without using foundation.&nbsp;<br><br>Keep in mind that with one session of the BB Glow Treatment you will not see drastic changes. For better results we recommend a treatment of 4 sessions. Ask your specialist what is best for your type of skin.</p>', '<p>Tenga en cuenta que con una sesión del Tratamiento BB Glow no verá cambios drásticos. Para mejores resultados recomendamos un tratamiento de 4 sesiones. Pregunte a su especialista qué es lo mejor para su tipo de piel.</p>', '150.00', 'glow', '/booking-special-treatments', '2_BB-GLOW-TREATMENT–1-SESSIONS.jpg', 1, 1, '2018-10-27 06:12:09', 'test', 'displayNone', 'test', '_self', '/es/booking-special-treatments'),
(3, 'Bb glow treatment - 4 sessions', 'Paquete de Tratamiento BB Glow - 4 Sesiones', 1, 2, '<p>Perfect package to reach real changes. The BB Glow treatment is a safe and intensive treatment for the skin that can help reduce the appearance of freckles and help to lighten the skin. It also helps with the discoloration of the skin caused by the photoaging of acne or age spots and the production of collagen by the use of nanotechnology with the microneedling technique. With this treatment, your skin can look shiny, soft and radiant without using foundation.</p>', '<p>Perfecto paquete para alcanzar los cambios deseados. El tratamiento BB Glow es un tratamiento seguro e intensivo para la piel que puede ayudar a reducir la apariencia de las pecas y ayudar a aclarar la piel. También ayuda con la decoloración de la piel causada por el foto envejecimiento del acné o las manchas de la edad y la producción de colágeno mediante el uso de la nanotecnología con la técnica de micro alimentación. Con este tratamiento, su piel puede lucir brillante, suave y radiante sin usar base.</p>', '480.00', 'glow4', '/booking-special-treatments', '3_BB-GLOW-TREATMENT–4-SESSIONS.jpg', 1, 1, '2018-10-27 07:12:09', 'test', 'displayNone', 'test', '_self', '/es/booking-special-treatments'),
(4, 'Under eye camouflage treatment', 'Tratamiento de camuflaje de ojeras ', 1, 2, '<p>Skin Camouflage: (Use tattoo techniques to hide or mix the scars to make them less visible). Dark circles are a famous enemy of beauty. This dark shading around the eyes appears in both men and women thus affecting their self-esteem. Dark circles are a product of poor sleep, fatigue, alcohol consumption, cigar.&nbsp;<br><br>The dark circles have no cure but can be mitigated with special care with bleaching, creams, laser treatments or camouflage with tattoo. The solution for each case is defined with a Dermatologist because it is necessary to check the origin of these imperfections to find the best treatment.&nbsp;<br><br>The less severe and less marked cases are treated with whitening creams based on vitamins, however, the most severe and most marked cases are reduced with laser treatments and / or procedure of dark circles for skin treatment. In Vali Spa we offer you this magnificent treatment working in the area and helping to blur the dark circles. If we consider that your eyes can be treated with other procedures to help clarify it without using the ink, your specialist will inform you and will present you other option like our&nbsp;<br><br>MAGIC ENLIGHTENMENT TREATMENT.</p>', '<p>Camuflaje de la piel: (Usamos técnicas de tatuaje para ocultar o mezclar las cicatrices y hacerlas menos visibles).</p><p>Las ojeras son un famoso enemigo de la belleza. Esta sombra oscura alrededor de los ojos aparece tanto en hombres como en mujeres, lo que afecta su autoestima.&nbsp;</p><p>&nbsp;</p><p>Las ojeras son producto de un mal sueño, fatiga, consumo de alcohol, cigarros. Los círculos oscuros no tienen cura, pero se pueden mitigar con especial cuidado con el blanqueo, las cremas, los tratamientos con láser o el camuflaje con tatuajes. La solución para cada caso se define con un Dermatólogo porque es necesario verificar el origen de estas imperfecciones para encontrar el mejor tratamiento. Los casos menos graves y menos marcados se tratan con cremas blanqueadoras basadas en vitaminas, sin embargo, los casos más graves y más marcados se reducen con tratamientos con láser y / o procedimientos de ojeras para el tratamiento de la piel.&nbsp;</p><p>&nbsp;</p><p>En el cuidado de la piel y el maquillaje, Vali Spa le ofrece este magnífico tratamiento trabajando en el área y ayudando a difuminar las ojeras. Si consideramos que sus ojos pueden tratarse con otros procedimientos para ayudar a aclararlos sin usar la tinta, su especialista le informará y le presentará otra opción como nuestro TRATAMIENTO DE ILUMINACIÓN MÁGICA.</p>', '300.00', 'under', '/booking-special-treatments', '4_UNDER-EYE-CAMOUFLAGE-TREATMENT.jpg', 1, 1, '2018-10-27 09:12:09', 'test', 'displayNone', 'prueba', '_self', '/es/booking-special-treatments'),
(5, 'Magic Enlightenment', 'Tratamiento de Iluminación mágica (NUEVO)', 1, 7, '<p>Magic Enlightenment treatment is different from camouflage but works in the same way, because we use the same techniques to work the area, thus improving the appearance of dark circles without using inks. In the procedure, a cocktail is used based on different sera and vitamins that help address the hyperpigmentation due to damage caused by the sun, lines of expression, wrinkles and hormonal acne thus giving a clear and healthy shine to the area to be treated.</p>', '<p>Nuestro servicio de tratamiento Magic Enlightenment es diferente del camuflaje pero funciona de la misma manera porque utilizamos las mismas técnicas para trabajar el área, mejorando así la apariencia de círculos oscuros sin usar tintas.En el procedimiento utilizaremos un cóctel a base de diferentes sueros y vitaminas que ayudan a tratar la hiperpigmentación debida al daño causado por el sol, las líneas de expresión, las arrugas y el acné hormonal, lo que brinda un brillo claro y saludable al área a tratar.</p>', '300.00', 'magic', '/booking-special-treatments', '5_MAGIC-ENLIGHTMENT.jpg', 1, 1, '2018-10-27 10:12:09', 'test', 'displayNone', 'test', '_self', '/es/booking-special-treatments'),
(6, 'The Hair Loss Treatment with Microneedles', 'Tratamiento para la pérdida del cabello con microneedling. ', 1, 0, '<p>Microneedle is a method that creates transdermal microchannels across the stratum corneum barrier layer of skin. No previous study showed a therapeutic effect of microneedle itself on hair growth by wounding. microneedling&nbsp;may also be a method of treatment for&nbsp;hair loss. There\'s even evidence that it&nbsp;can help&nbsp;hereditary&nbsp;hair loss, also known as alopecia. The Micro needling &nbsp;Pen creates micro-injury to the scalp, which is a catalyst for the body\'s natural healing response, That response instigates collagen production — which in turn stimulates&nbsp;hair&nbsp;growth. We use many different and special products to stimulate hair growth ,strengthening&nbsp;hair&nbsp;follicles, leading to stronger, thicker strands. We offer an intensive 1 per weeks treatment&nbsp;to&nbsp;stimulate endothelial&nbsp;growth&nbsp;factor production for follicle and&nbsp;hair growth.</p>', '<p>Microneedle es un método que crea microcanales transdérmicos a través de la capa de la barrera de la capa córnea. Ningún estudio previo mostró un efecto terapéutico de la microaguja en el crecimiento del cabello por heridas. microneedling también puede ser un método de tratamiento para la pérdida del cabello. Incluso hay evidencia de que puede ayudar a la pérdida hereditaria del cabello, también conocida como alopecia. La Micro aguja&nbsp; crea una microlesión en el cuero cabelludo, que es un catalizador para la respuesta curativa natural del cuerpo.&nbsp;</p><p>&nbsp;</p><p>Esa respuesta fomenta la producción de colágeno, que a su vez estimula el crecimiento del cabello. Utilizamosproductos diferentes y especiales para estimular el crecimiento del cabello, fortaleciendo los folículos pilosos, lo que lleva a el nacimiento hebras más fuertes y gruesas. Ofrecemos un tratamiento intensivo de 1 sesion semanal para estimular la producción del factor de crecimiento endotelial para el crecimiento del folículo y el cabello.</p>', '130.00', 'Hair', '/booking-special-treatments', '6_The-Hair-Loss-Treatment-with-Microneedles.jpg', 1, 1, '2019-07-28 02:44:53', 'test', 'displayNone', 'test', '_self', '/es/booking-special-treatments'),
(7, 'Stretch Marks Camouflage Treatment (Tatoo) Belly, Arm, Hips, Buttocks, Legs, Waist, Chest', 'Tratamiento de camuflaje de las estrías (Tatoo)', 1, 0, '<p>Skin Camouflage … Use tattoo techniques to hide or mix the scars to make them less visible. For scars 1 year (+): All scars should be evaluated before treatment to determine what treatment is recommended, and if you are a candidate for scar treatment. Patch tests may be required for sensitivity and color prior to procedures.&nbsp;<br><br>The camouflage of the scar is an exciting alternative treatment that works directly on the damaged skin, relaxing and smoothing the scars, as well as reducing stretch marks. Essentially, this treatment brings new life to damaged skin and by using a digital tattoo machine, this can be done in a very fast and accurate manner. When pigment is used, skin tone colors are the options.&nbsp;<br><br>The complete basis of this type of tattoo technique is to slide the groups of needles through the very surface of the skin to add a slight dispersion of skin tone color to camouflage the stain.&nbsp;<br><br>This is not a new service for the market, it was invented by tattoo artists more than 30 years ago. Scar Camouflage works in the specific areas of the affected skin, that is, in each stretch mark or only in the scar. The areas that are not affected are not treated. It can be used on all skin colors, with only dark skins being used with caution as they are prone to hyperpigmentation.&nbsp;<br><br>You can see an improvement of 20-50% in only ONE SESSION, with 3 recommended sessions to obtain the best results. We will need you send us pictures of the treating area before your appointment to decide which treatment is better for you.</p>', '<p>Camuflaje de la piel: (Usamos técnicas de tatuaje para ocultar o mezclar las cicatrices para hacerlas menos visibles). Para cicatrices de 1 año (+): todas las cicatrices deben evaluarse antes del tratamiento para determinar qué tratamiento se recomienda y si usted es candidato para el tratamiento de cicatrices.&nbsp;</p><p>&nbsp;</p><p>El camuflaje de la cicatriz es un emocionante tratamiento alternativo que funciona directamente sobre la piel dañada, relajando y suavizando las cicatrices, así como reduciendo las estrías.&nbsp;</p><p>&nbsp;</p><p>Esencialmente, este tratamiento le da nueva vida a la piel dañada y al usar una máquina de tatuaje digital, esto se puede hacer de una manera muy rápida y precisa. Cuando se usa pigmento, los colores de tono de piel son las opciones.</p><p>&nbsp;</p><p>La base completa de este tipo de técnica de tatuaje es deslizar los grupos de agujas a través de la superficie misma de la piel para agregar una ligera dispersión del color del tono de la piel para camuflar la mancha.</p><p>&nbsp;</p><p>Este no es un servicio nuevo para el mercado, fue inventado por artistas del tatuaje hace más de 30 años.</p><p>&nbsp;</p><p>Cicatriz: El camuflaje funciona en las áreas específicas de la piel afectada, es decir, en cada marca de estiramiento o solo en la cicatriz. Las áreas que no están afectadas no son tratadas. Se puede usar en todos los colores de la piel, y solo las pieles oscuras se usan con precaución, ya que son propensas a la hiperpigmentación.</p><p>&nbsp;</p><p>Puede ver una mejora del 20-50% en solo UNA SESIÓN, son 3 sesiones recomendadas para obtener los mejores resultados.<br>Necesitaremos que nos envíe imágenes del área de tratamiento antes de su cita para decidir qué tratamiento es mejor para usted</p>', '250.00', 'Stretch', '/booking-special-treatments', '7_STRETCH-MARKS-CAMOUFLAGE-TREATMENT-Tattoo.jpg', 1, 1, '2019-07-28 02:45:54', 'test', 'displayNone', 'test', '_self', '/es/booking-special-treatments');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `subcriptores`
--

CREATE TABLE `subcriptores` (
  `id` int(11) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `subcriptores`
--

INSERT INTO `subcriptores` (`id`, `email`, `created_at`) VALUES
(1, 'demoang@rsgitech.com', '2018-10-30 10:14:15'),
(2, 'Mfuxman@comcast.net', '2019-08-29 02:35:26'),
(3, 'Vane.ortega03@gmail.com', '2019-09-02 22:09:27'),
(4, 'dianydecor@hotmail.com', '2019-09-04 03:33:11'),
(5, 'paula.pulmano@gmail.com', '2019-09-11 10:55:56'),
(6, 'astridafebremd1957@gmail.com', '2019-09-20 20:16:46'),
(7, 'Norkau@hotmail.com', '2019-09-24 13:26:38'),
(8, 'miamihouse@hotmail.com', '2019-09-24 13:34:49'),
(9, 'Zunamyher@yahoo.com', '2019-09-24 14:45:14'),
(10, 'Sonduaghter@yahoo.com', '2019-09-27 14:34:09'),
(11, 'Adripatri@gmail.com', '2019-10-13 06:42:18'),
(12, 'feegih@hotmail. com', '2019-10-13 19:43:32'),
(13, 'erikanavas24@gmail.com', '2019-10-22 13:35:42'),
(14, 'Nelsy1957@hotmail.com', '2019-10-26 14:58:04'),
(15, 'dayanaps@hotmail.com', '2019-11-09 14:24:00'),
(16, 'cb67@ymail.com', '2019-11-10 15:21:16'),
(17, 'Xuxuxuly@yahoo.com', '2019-11-12 22:37:09'),
(18, 'Amamercedes12@gmail.com', '2019-11-14 03:30:40'),
(19, 'karenms0403@gmail.com', '2019-11-18 14:52:15'),
(20, 'karenms0403@gmail.com', '2019-11-21 18:52:26'),
(21, 'ana18447@comcast.net', '2019-11-23 16:45:56'),
(22, 'Barbyvidal12@gmail.com', '2019-11-25 01:20:17'),
(23, 'Vibilasano@aol.com', '2019-11-29 23:28:58'),
(24, 'mariakd55@hotmail.com', '2019-12-23 16:31:29'),
(25, 'romeryc@hotmail.com', '2019-12-27 17:02:43'),
(26, 'Zoreudysmaurera@gmail.com', '2020-01-03 00:35:53'),
(27, 'nollyohallorans@gmail.com', '2020-01-03 12:45:31'),
(28, 'aldanaraiza14@gmail.com', '2020-01-06 12:02:01'),
(29, 'manuel.ituarte1@gmail.com', '2020-01-07 01:09:13'),
(30, 'karla.mead@zumbamail.com', '2020-01-08 01:34:04'),
(31, 'denisemucke@hotmail.com', '2020-01-09 23:19:57'),
(32, 'Karinrosado@hotmail.com', '2020-01-10 18:24:36'),
(33, 'Joy.mitch@hotmail.com', '2020-01-11 03:19:10'),
(34, 'leethalrage@msn.com', '2020-01-12 00:15:53'),
(35, 'carlrod54@gmail.com', '2020-01-12 22:10:58'),
(36, 'buncotray@comcast.net', '2020-01-13 22:05:36'),
(37, 'jer.barrett1@gmail.com', '2020-01-14 13:40:59'),
(38, 'vivienne.1995@freenet.de', '2020-01-15 20:21:44'),
(39, 'mhattman@suddenlink.net', '2020-01-18 10:22:45'),
(40, 'pperri01@gmail.com', '2020-01-20 20:02:12'),
(41, 'Anita.a.darrah@gmail.com', '2020-01-24 13:44:35'),
(42, 'Magdsail@aol.com', '2020-01-25 17:41:50'),
(43, 'garrettkauffman10@yahoo.com', '2020-01-26 00:34:43'),
(44, 'yajinw@gmail.com', '2020-01-26 23:17:31'),
(45, 'a.figueroa2313@gmail.com', '2020-01-28 15:28:54'),
(46, 'gary.wilcox@jagufs.com', '2020-01-28 17:30:52'),
(47, 'bulkbuddy1@gmail.com', '2020-01-30 04:58:42'),
(48, 'mvarug02@gmail.com', '2020-01-30 16:41:27'),
(49, 'rponchin@att.net', '2020-02-02 04:59:48'),
(50, 'dmystique@aol.com', '2020-02-04 06:18:52'),
(51, 'Anbrian82@gmail.com', '2020-02-04 20:09:38'),
(52, 'Socorrorubio3@hotmail.com', '2020-02-06 15:37:19'),
(53, 'bulkbuddy1@gmail.com', '2020-02-07 08:14:29'),
(54, 'kkrawford@yahoo.com', '2020-02-08 16:41:22'),
(55, 'karenmurray62@icloud.com', '2020-02-09 00:23:42'),
(56, 'highlash1@gmail.com', '2020-02-11 17:01:16'),
(57, 'odonne63@msu.edu', '2020-02-12 11:18:57'),
(58, 'Fabicr_1073@hotmail.com', '2020-02-13 23:55:12'),
(59, 'louis@innerspacecases.com', '2020-02-15 06:40:06'),
(60, 'Elbamalave1531@icloud.com', '2020-02-18 01:30:35'),
(61, 'Claracolindres@yahoo.com', '2020-02-18 03:22:26'),
(62, 'Mayraed@aol.com', '2020-02-20 13:58:28'),
(63, 'edsilvagno@gmail.com', '2020-02-25 10:32:02'),
(64, 'jason@fatfendergarage.com', '2020-02-26 05:57:10'),
(65, 'haydee_pol@yahoo.com', '2020-02-26 14:32:07'),
(66, 'marieta15@yahoo.com', '2020-02-27 01:10:05'),
(67, 'Aleman5727@gmail.com', '2020-02-27 01:56:26'),
(68, 'mariana130997@hotmail.com', '2020-02-27 03:19:09'),
(69, 'wstrom25@gmail.com', '2020-02-27 07:30:18'),
(70, 'Adrianazidobre@gmail.com', '2020-02-27 11:32:54'),
(71, 'Ayle72@yahoo.com', '2020-02-27 15:12:03'),
(72, 'Yudisnalvyacosta@gmail.com', '2020-03-02 15:31:06'),
(73, 'lucyg_28@hotmail.co.uk', '2020-03-02 16:39:07'),
(74, 'chloe@love.com', '2020-03-04 03:14:55'),
(75, 'Belkyspages33@gmail.com', '2020-03-04 15:47:30'),
(76, 'mariakd55@hotmail.com', '2020-03-07 00:28:00'),
(77, 'mariakd@hotmail.com', '2020-03-07 00:59:38'),
(78, 'Sharyaponte@gmail.com', '2020-03-07 13:45:01'),
(79, 'lynnhanusa@yahoo.com', '2020-03-09 09:21:57'),
(80, 'kellywerner05@gmail.com', '2020-03-11 16:16:55'),
(81, 'hmwatson88@gmail.com', '2020-03-13 10:58:36'),
(82, 'enquiries@lizardlabs.eu', '2020-03-14 23:12:18'),
(83, 'manuelsantelices@hotmail.com', '2020-03-18 09:36:57'),
(84, 'rollinghardpaco@yahoo.com', '2020-03-21 21:55:13'),
(85, 'urouroboros25@yahoo.co.jp', '2020-03-22 18:46:30'),
(86, 'cw@murrows.com', '2020-03-27 01:03:03'),
(87, 'paola.ingenito@gmail.com', '2020-03-31 15:03:30'),
(88, 'mrivera1603@gmail.com', '2020-04-04 17:38:18'),
(89, 'Blanca-1204@hotmail.com', '2020-04-08 21:08:12'),
(90, 'thetopdogstore@gmail.com', '2020-04-14 19:06:29'),
(91, 'veteran76@comcast.com', '2020-04-15 21:18:24'),
(92, 'showthis@yahoo.com', '2020-04-22 22:42:56'),
(93, 'lugraziano@gmail.com', '2020-04-25 10:18:33'),
(94, 'baby_fee@yahoo.com', '2020-04-27 04:51:28'),
(95, 'nbgroup@gmail.com', '2020-04-30 22:24:54'),
(96, 'aespinell30@gmail.com', '2020-05-07 03:18:59'),
(97, 'karamleik@gmail.com', '2020-05-09 10:55:01'),
(98, 'Maguilyndiaz@gmail.com', '2020-05-09 20:43:35'),
(99, 'Belkyspages33@gmail.com', '2020-05-11 20:41:43'),
(100, 'zulay84@yahoo.es', '2020-05-12 23:15:22'),
(101, 'milenamartin1968@gmail.com', '2020-05-14 23:35:15'),
(102, 'cbuchanan10@hotmail.co.uk', '2020-05-18 07:44:30'),
(103, 'blacklightning744@yahoo.com', '2020-05-20 12:30:15'),
(104, 'Marielena12431@hotmail.com', '2020-05-21 05:15:57'),
(105, 'colojerez18@yahoo.com', '2020-05-25 11:51:16'),
(106, 'Sorismargarita@yahoo.com', '2020-05-27 01:08:38'),
(107, 'vilmaaguilar620@icloud.com', '2020-05-27 02:00:00'),
(108, 'info@webycorp.com', '2020-05-27 12:35:37'),
(109, 'kohlheidi732@gmail.com', '2020-05-30 08:09:48'),
(110, 'aurelinda_alejo@hotmail.com', '2020-05-30 22:25:49'),
(111, 'caro_carlota@yahoo.com', '2020-06-03 18:53:28'),
(112, 'yolie912@yahoo.com', '2020-06-04 01:56:55'),
(113, 'Faveloor@hotmail.com', '2020-06-04 15:03:44'),
(114, 'drewgab83@gmail.com', '2020-06-08 09:26:39'),
(115, 'Rossananu@hotmail.com', '2020-06-11 02:52:16'),
(116, 'dberenson322@gmail.com', '2020-06-12 01:36:36'),
(117, 'kfisher07@hotmail.com', '2020-06-12 06:46:16'),
(118, 'margamaricintron@gmail.com', '2020-06-13 14:30:49'),
(119, 'jimlockett@charter.net', '2020-06-13 23:20:32'),
(120, 'maritzaago@hotmail.com', '2020-06-15 23:58:33'),
(121, 'vsuarez1491@gmail.com', '2020-06-16 14:45:37'),
(122, 'stevensleyjo@gmail.com', '2020-06-21 21:21:06'),
(123, 'dannahodge@aol.com', '2020-06-23 22:19:41'),
(124, 'corinna@gerbi.it', '2020-06-24 21:59:49'),
(125, 'melismac007@yahoo.com', '2020-06-26 22:11:23'),
(126, 'cathuemmer@gmail.com', '2020-06-30 00:34:01'),
(127, 'emserl@yahoo.com', '2020-06-30 13:51:22'),
(128, 'renaeclites@gmail.com', '2020-07-01 00:14:31'),
(129, 'powjeremy@gmail.com', '2020-07-06 11:20:58'),
(130, 'eric.rivera77@yahoo.com', '2020-07-06 12:59:48'),
(131, 'pimpmasternate@yahoo.com', '2020-07-07 03:44:38'),
(132, 'marc@k1pp.de', '2020-07-07 08:43:34'),
(133, 'isabelm0423@yahoo.com', '2020-07-07 18:16:24'),
(134, 'johnsonquenia4@gmail.com', '2020-07-11 09:48:22'),
(135, 'Kariokavila@hotmail.com', '2020-07-13 23:52:19');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `first_name` varchar(30) DEFAULT NULL,
  `last_name` varchar(30) DEFAULT NULL,
  `token` varchar(255) DEFAULT NULL,
  `image` varchar(255) NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `first_name`, `last_name`, `token`, `image`, `is_active`, `created_at`) VALUES
(1, 'admin', 'fcf3a8b9ea4f6be887c4d63b420b0375', 'Vali', 'Spa', 'a1aed1a77c0916c43a4a67afe49af265', 'img2.jpg', 1, '2018-10-27 05:25:13');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `waxs`
--

CREATE TABLE `waxs` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `titleesp` varchar(255) NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `description` text,
  `descriptionesp` text NOT NULL,
  `price` varchar(255) NOT NULL,
  `popup` varchar(255) NOT NULL,
  `button` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `is_featured` tinyint(1) NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `created_at` datetime NOT NULL,
  `is_activeTf` varchar(255) NOT NULL,
  `textFinanc` varchar(255) NOT NULL,
  `textFinancEsp` varchar(255) NOT NULL,
  `target` varchar(255) NOT NULL,
  `buttonEs` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `waxs`
--

INSERT INTO `waxs` (`id`, `title`, `titleesp`, `user_id`, `category_id`, `description`, `descriptionesp`, `price`, `popup`, `button`, `image`, `is_featured`, `is_active`, `created_at`, `is_activeTf`, `textFinanc`, `textFinancEsp`, `target`, `buttonEs`) VALUES
(1, 'Eyebrows wax', 'Depilación de Cejas', 1, 1, '<p>Come and shave your eyebrows in Vali Spa, straight or curved wax strips will be used to give the desired eyebrow shape, our products have more natural and vegetable components than the rest of the market waxes&nbsp;<br><br><strong>Square:</strong> Because square faces have sharp, well-defined angles naturally, a rounded or soft angled forehead will create a magnificent balance.&nbsp;<br><br><strong>Round:</strong> With a round face, angled eyebrows with a high arc look better and help to create defined lines that are flatter.&nbsp;<br><br><strong>Long or oval:</strong> Long or oval faces benefit from soft arches or flat eyebrows, as too high an arch can lengthen the face.&nbsp;<br><br><strong>Heart-shaped:</strong> Heart-shaped faces look better with a natural soft-angle bow that draws the correct attention to the upper half of the face.&nbsp;<br><br><strong>Note:</strong> use post-depilatory gels such as glycerin, azulene, calendula or chamomile.</p>', '<p>Venga y depile sus cejas en Vali Spa, se utilizarán tiras de cera rectas o curvas para dar la forma de ceja deseada, nuestros productos tienen componentes más naturales y vegetales que el resto de ceras del mercado.</p><p>&nbsp;</p><p><strong>Cuadrado:</strong> Debido a que las caras cuadradas tienen ángulos afilados y bien definidos de forma natural, una frente redondeada o de ángulo suave creará un equilibrio magnífico.</p><p>&nbsp;</p><p><strong>Redondo:</strong> con una cara redonda, las cejas en ángulo con un arco alto se ven mejor y ayudan a crear líneas definidas que son más planas.<br><br>&nbsp;</p><p><strong>Larga u ovalada:</strong> las caras largas u ovaladas se benefician de los arcos suaves o las cejas planas, ya que un arco demasiado alto puede alargar la cara.</p><p>&nbsp;</p><p><strong>En forma de corazón:</strong> las caras en forma de corazón se ven mejor con un arco de ángulo suave natural que atrae la atención correcta hacia la mitad superior de la cara.</p><p>Nota: use geles post-depilatorios como glicerina, azuleno, caléndula o manzanilla</p>', '20', 'eyebrows', '/booking-wax', '1_EYEBROWS-WAX1.jpg', 1, 1, '2019-11-21 23:37:05', 'displayNone', 'Test', 'Prueba', '_self', '/es/booking-wax'),
(2, 'Facial Lips wax ', 'Depilación superior de labio', 1, 1, '<p>Here we extract that delicate hair around our upper lip.&nbsp;<br><br><strong>Note:</strong> use post-depilatory gels such as glycerin, azulene, calendula or chamomile Upper Legs Wax.&nbsp;<br><br>The treatment of epilation of the upper part of the leg involves the depilation of the front and back of both thighs and above the knees. After applying the wax strips, our beautician removes them quickly to minimize your discomfort.&nbsp;<br><br><strong>Note:</strong> use post-depilatory gels such as glycerin, azulene, calendula or chamomile.</p>', '<p>Aquí extraemos ese delicado cabello alrededor de nuestro labio superior.<br>Nota: use geles post-depilatorios como glicerina, azuleno, caléndula o manzanilla.&nbsp;</p>', '20', 'Facial', '/booking-wax', '2_FACIAL-LIPS-WAX.jpg', 1, 1, '2019-11-21 23:37:58', 'displayNone', 'est', 'test', '_self', '/es/booking-wax'),
(3, 'Full Face Wax', 'Depilación de cara completa', 1, 2, '<p>Entire face is enclosed from the forehead, the cheeks, the sideburns, the lips, the chin and just below the jaw.&nbsp;<br><br><strong>Note:</strong> use post-depilatory gels such as glycerin, azulene, calendula or chamomile</p>', '<p>Depilaremos las áreas de tu rostro en donde haya presencia de vello</p><p>&nbsp;</p><p>Nota: use geles post-depilatorios como glicerina, azuleno, caléndula o manzanilla</p>', '40.00', 'fullF', '/booking-wax', '3_FULL-FACE-WAX.jpg', 1, 1, '2019-11-21 23:41:17', 'displayNone', 'test', 'test', '_self', '/es/booking-wax'),
(4, 'Underams Wax', 'Depilación de las axilas', 1, 2, '<p>Waxing your underarms has the same benefits as waxing anywhere else.&nbsp;<br><br><strong>Note:</strong> use post-depilatory gels such as glycerin, azulene, calendula or chamomile</p>', '<p>Encerar sus axilas tiene los mismos beneficios que encerar en cualquier otro lugar.&nbsp;</p><p>&nbsp;</p><p>Nota: use geles post-depilatorios como glicerina, azuleno, caléndula o manzanilla</p>', '20', 'Underams', '/booking-wax', '4_UNDERARMS-WAX.jpg', 1, 1, '2019-11-21 23:41:49', 'displayNone', 'test', 'test', '_self', '/es/booking-wax'),
(5, 'Half arm Wax', 'Depilación de medio brazo', 1, 7, '<p>You can choose to have your lower arms waxed which removes everything from the elbow down to the wrist. <strong>Note:</strong> use post-depilatory gels such as glycerin, azulene, calendula or chamomile.</p>', '<p>Se depilara su brazo, esta zona abarca desde el codo hasta la muñeca.</p><p>&nbsp;</p><p>Nota: use geles post-depilatorios como glicerina, azuleno, caléndula o manzanilla</p>', '20.00', 'Half', '/booking-wax', '5_HALF-ARM-WAX.jpg', 1, 1, '2019-11-21 23:43:04', 'displayNone', 'test', 'test', '_self', '/es/booking-wax'),
(6, 'Full arms Wax', 'Depilación de brazos completos', 1, 7, '<p>We remove every single hair from the arms in a quick and almost painless fashion.&nbsp;<br><br><strong>Note:</strong> use post-depilatory gels such as glycerin, azulene, calendula or chamomile</p>', '<p>Eliminamos cada vello de los brazos de forma rápida y casi indolora.<br><br>&nbsp;</p><p>Nota: use geles post-depilatorios como glicerina, azuleno, caléndula o manzanilla</p>', '30.00', 'FullA', '/booking-wax', '6_FULL-ARMS-WAX.jpg', 1, 1, '2019-11-21 23:43:30', 'displayNone', 'test', 'test', '_self', '/es/booking-wax'),
(7, 'Upper legs Wax', 'Depilación piernas superiores ', 1, 0, '<p>The treatment of epilation of the upper part of the leg involves the depilation of the front and back of both thighs and above the knees. After applying the wax strips, our beautician removes them quickly to minimize your discomfort.&nbsp;<br><br><strong>Note:</strong> use post-depilatory gels such as glycerin, azulene, calendula or chamomile.</p>', '<p>El tratamiento de la depilación de la parte superior de la pierna implica la depilación de la parte anterior y posterior de ambos muslos y por encima de las rodillas. Después de aplicar las tiras de cera, nuestra esteticista se las quita rápidamente para minimizar su incomodidad.</p><p>&nbsp;</p><p>Nota: use geles post-depilatorios como glicerina, azuleno, caléndula o manzanilla</p>', '30.00', 'Upper', '/booking-wax', '7_UPPER-LEGS1.jpg', 1, 1, '2019-11-21 23:44:18', 'displayNone', 'test', 'test', '_self', '/es/booking-wax'),
(8, 'Lower legs Wax', 'Depilación piernas Inferiores', 1, 0, '<p>The wax is applied in strips on the front and back of both legs, from the top of the knee to the ankle, eliminating the wax quickly and professionally.&nbsp;<br><br><strong>Note:</strong> use post-depilatory gels such as glycerin, azulene, calendula or chamomile.</p>', '<p>La cera se aplica en tiras en la parte delantera y trasera de ambas piernas, desde la parte superior de la rodilla hasta el tobillo, eliminando la cera de manera rápida y profesional.</p><p>&nbsp;</p><p>Nota: use geles post-depilatorios como glicerina, azuleno, caléndula o manzanilla</p>', '35.00', 'Lower', '/booking-wax', '8_LOWER-LEGS-WAX.jpg', 1, 1, '2019-11-21 23:44:40', 'displayNone', 'test', 'test', '_self', '/es/booking-wax'),
(9, 'Full Legs Wax', 'Depilación de piernas completas', 1, 0, '<p>The complete treatment of leg hair removal involves removing the hair from both legs and applying our wax formula, from the upper part of the thigh to the ankle. Hair removal begins approximately two inches from the bikini line and includes the front and back of the thighs, knees and lower legs.&nbsp;<br><br><strong>Note: </strong>use post-depilatory gels such as glycerin, azulene, calendula or chamomile.</p>', '<p>El tratamiento completo de la eliminación del vello de la pierna implica quitar el vello de ambas piernas y aplicar nuestra fórmula de depilación, desde la parte superior del muslo hasta el tobillo. La eliminación del vello comienza aproximadamente a dos pulgadas de la línea del bikini e incluye la parte frontal y posterior de los muslos, las rodillas y la parte inferior de las piernas.</p><p>&nbsp;</p><p>Nota: use geles post-depilatorios como glicerina, azuleno, caléndula o manzanilla</p>', '60.00', 'FullL', '/booking-wax', '9_FULL-LEGS-WAX.jpg', 1, 1, '2019-11-21 23:45:07', 'displayNone', 'test', 'test', '_self', '/es/booking-wax'),
(10, 'Classic Bikini Wax', 'Depilación Bikini Clásico', 1, 0, '<p>Bikini hair removal is the removal of pubic hair with a special wax. A bikini line is the area of the upper leg and inner thigh where pubic hair grows that is not normally covered by the bottom of a swimsuit.&nbsp;<br><br><strong>Note:</strong> use post-depilatory gels such as glycerin, azulene, calendula or chamomile.</p>', '<p>La depilación del bikini es la eliminación del vello púbico con una cera especial. Una línea de bikini es el área de la parte superior de la pierna y la parte interna del muslo donde crece el vello púbico que normalmente no está cubierto por la parte inferior de un traje de baño.</p><p>&nbsp;</p><p>Nota: use geles post-depilatorios como glicerina, azuleno, caléndula o manzanilla.</p>', '35.00', 'Classic', '/booking-wax', '10_CLASSIC-BIKINI-WAX.jpg', 1, 1, '2019-11-21 23:45:34', 'displayNone', 'est', 'test', '_self', '/es/booking-wax'),
(11, 'Brazilian Wax', 'Depilación Brasileña', 1, 0, '<p>In this hair removal the pubic hair is extracted in its entirety from the front to the back with an additional back strap. This is perfect for a completely nude look or you can leave a triangle, a strip or a clean square on the front.&nbsp;<br><br><strong>Note:</strong> use post-depilatory gels such as glycerin, azulene, calendula or chamomile.</p>', '<p>En esta depilación, el vello púbico se extrae en su totalidad desde la parte frontal hasta la parte posterior con una correa posterior adicional. Esto es perfecto para un look completamente desnudo o puedes dejar un triángulo, una tira o un cuadrado limpio en el frente.</p><p>&nbsp;</p><p>Nota: use geles post-depilatorios como glicerina, azuleno, caléndula o manzanilla</p>', '40.00', 'Brazilian', '/booking-wax', '11_BRAZILIAN-WAX.jpg', 1, 1, '2019-11-21 23:45:56', 'displayNone', 'test', 'est', '_self', '/es/booking-wax'),
(12, 'Full Body Wax ', 'Depilación de cuerpo entero', 1, 0, '<p>Full Body Wax includes Brows, Lips, Full Arms, Full Legs, Classic or Brazilian Bikini wax.&nbsp;<br><br><strong>Note:</strong> use post-depilatory gels such as glycerin, azulene, calendula or chamomile</p>', '<p>La cera de cuerpo completo incluye cejas, labios, brazos completos, piernas completas, cera clásica o brasileña para bikini.</p><p>&nbsp;</p><p>Nota: use geles post-depilatorios como glicerina, azuleno, caléndula o manzanilla.</p>', '125.00', 'FullB', '/booking-wax', '12_FULL-BODY-WAX.jpeg', 1, 1, '2019-11-21 23:46:24', 'displayNone', 'test', 'est', '_self', '/es/booking-wax');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `wrappings`
--

CREATE TABLE `wrappings` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `titleesp` varchar(255) NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `description` text,
  `descriptionesp` text NOT NULL,
  `price` varchar(255) NOT NULL,
  `popup` varchar(255) NOT NULL,
  `button` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `is_featured` tinyint(1) NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `created_at` datetime NOT NULL,
  `textFinanc` varchar(255) NOT NULL,
  `is_activeTf` varchar(255) NOT NULL,
  `textFinancEsp` varchar(255) NOT NULL,
  `target` varchar(255) NOT NULL,
  `buttonEs` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `wrappings`
--

INSERT INTO `wrappings` (`id`, `title`, `titleesp`, `user_id`, `category_id`, `description`, `descriptionesp`, `price`, `popup`, `button`, `image`, `is_featured`, `is_active`, `created_at`, `textFinanc`, `is_activeTf`, `textFinancEsp`, `target`, `buttonEs`) VALUES
(1, 'Free Consultation Appointment', 'Consulta Gratuita', 1, 1, '<p>Let our skin experts help you choose the perfect treatment with your face or body concern in your visit. Our first consultation is FREE, No Obligation, if you agree with the recommendation we will do the treatment the same day or we schedule a new appointment.&nbsp;<br><br><i><strong>Let yourself, come, relax and enjoy with us!!</strong></i></p>', '<p>Deje que nuestros expertos en piel lo ayuden a elegir el tratamiento perfecto para su rostro o cuerpo cuando nos visite. Nuestra primera cita es GRATUITA, Sin Obligación. Si está de acuerdo con la recomendación haremos el tratamiento el mismo día o programaremos una nueva cita.&nbsp;</p><p>&nbsp;</p><p><i><strong>Déjate llevar, relájate y disfruta con nosotros!</strong></i></p>', 'Free', 'modal', '/booking-body', '1_FREE-CONSULTATION.jpg', 1, 1, '2018-10-27 04:12:09', 'test', 'displayNone', 'test', '_self', '/es/booking-body'),
(2, 'Cryogen treatment body wrapping', 'Tratamiento con criógeno (con envoltura)', 1, 1, '<p>Our exclusive treatment to reduce the flaccidity that makes us feel uncomfortable when we do not have the time factor in favor, with this procedure we are dedicated to activate the lymphatic system, eliminating accumulated lipids and toxins; has decongestive effects; Anti-inflammatory and sedative for its cryogenic action reduces localized adiposity ideal to reduce and control cellulite.</p>', '<p>Nuestro exclusivo tratamiento para reducir la flacidez que nos hace sentir incómodos cuando no tenemos el factor tiempo a favor permite activar el sistema linfático, eliminando los lípidos y toxinas acumuladas; tiene efectos descongestivos; es antiinflamatorio y sedante por su acción criogénica reduciendo la adiposidad localizada ideal para reducir y controlar la celulitis.</p>', '100.00', 'Cryogen', '/booking-body', '2_CRYOGEN-TREATMENT-BODY-WRAPPING.jpg', 1, 1, '2018-10-27 06:12:09', 'test', 'displayNone', 'test', '_self', '/es/booking-body'),
(3, 'Modeler thermal body wrapping', 'Modelada tu cuerpo con termoterapia ', 1, 2, '<p>This treatment stimulates the blood supply and facilitates perspiration. Its thermogenic assets promote lipo-mobilization and thermo lipolysis for its ingredients.</p>', '<p>Este tratamiento estimula el suministro de sangre y facilita la transpiración. Sus activos termogénicos promueven la lipo-movilización y la termololólisis de sus ingredientes.</p>', '120.00', 'Modeler', '/booking-body', '3_MODELER-THERMAL-BODY-WRAPPING.jpg', 1, 1, '2018-10-27 07:12:09', 'test', 'displayNone', 'trs', '_self', '/es/booking-body'),
(4, 'Reaffirming treatment with Nano-liposomes body wrapping ', 'Tratamiento reafirmante con nano-liposomas', 1, 2, '<p>Exquisite firming and toning treatment returns elasticity to the tissues due to its rich retinol ingredients that help to rejuvenate the skin, oil that delays aging, improving stretch marks, scars and spots.</p>', '<p>El exquisito tratamiento reafirmante y tonificante devuelve la elasticidad a los tejidos gracias a sus ricos ingredientes de retinol que ayudan a rejuvenecer la piel, un aceite que retrasa el envejecimiento y mejora las estrías, cicatrices y manchas.</p>', '120.00', 'Reaffirming', '/booking-body', '4_REAFFIRMING-TREATMENT-WITH-NANO-LIPOSOMES-BODY-WRAPPING.jpg', 1, 1, '2018-10-27 09:12:09', 'test', 'displayNone', 'test', '_self', '/es/booking-body'),
(5, 'Body wrapping package -6 sessions', 'Paquete de envoltura corporal - 6 sesiones', 1, 7, '<p>The body wrap at Vali Spa Skincare &amp; Makeup detoxifies the body. Minerals are the building block of the body. The process of hydrating the body with minerals helps the body eliminates toxins caused by excessive consumption of salt, sugar, carbohydrates and alcohol. The process of detoxification helps the body to lose ctms. The slimming body wrap takes around 90 minutes.&nbsp;<br><br>Our Body Wrapping treatment will be customizes depending of the need of our customers.</p>', '<p>La envoltura corporal en Vali Spa Skincare &amp; Makeup desintoxica el cuerpo. Los minerales son el bloque de construcción del cuerpo. El proceso de hidratación del cuerpo con minerales ayuda al cuerpo a eliminar las toxinas causadas por el consumo excesivo de sal, azúcar, carbohidratos y alcohol. El proceso de desintoxicación ayuda al cuerpo a perder ctms. La envoltura corporal adelgazante dura unos 90 minutos. Nuestro tratamiento de envoltura corporal será personalizado dependiendo de la necesidad de nuestros clientes.</p>', '600.00', 'Wrapping', '/booking-body', '5_BODY-WRAPPING-PACKAGE-6-SESSIONS.jpg', 1, 1, '2018-10-27 10:12:09', 'test', 'displayNone', 'prueba', '_self', '/es/booking-body');

-- --------------------------------------------------------

--
-- Estructura para la vista `products`
--
DROP TABLE IF EXISTS `products`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `products`  AS  select `antiages`.`id` AS `id`,'antiages' AS `type`,`antiages`.`title` AS `title`,`antiages`.`description` AS `description`,`antiages`.`titleesp` AS `titleesp`,`antiages`.`descriptionesp` AS `descriptionesp`,`antiages`.`price` AS `price`,`antiages`.`popup` AS `popup`,`antiages`.`button` AS `button`,`antiages`.`image` AS `image`,`antiages`.`is_featured` AS `is_featured`,`antiages`.`is_active` AS `is_active`,`antiages`.`created_at` AS `created_at` from `antiages` union select `bodys`.`id` AS `id`,'bodys' AS `bodys`,`bodys`.`title` AS `title`,`bodys`.`description` AS `description`,`bodys`.`titleesp` AS `titleesp`,`bodys`.`descriptionesp` AS `descriptionesp`,`bodys`.`price` AS `price`,`bodys`.`popup` AS `popup`,`bodys`.`button` AS `button`,`bodys`.`image` AS `image`,`bodys`.`is_featured` AS `is_featured`,`bodys`.`is_active` AS `is_active`,`bodys`.`created_at` AS `created_at` from `bodys` union select `bridals`.`id` AS `id`,'bridals' AS `bridals`,`bridals`.`title` AS `title`,`bridals`.`description` AS `description`,`bridals`.`titleesp` AS `titleesp`,`bridals`.`descriptionesp` AS `descriptionesp`,`bridals`.`price` AS `price`,`bridals`.`popup` AS `popup`,`bridals`.`button` AS `button`,`bridals`.`image` AS `image`,`bridals`.`is_featured` AS `is_featured`,`bridals`.`is_active` AS `is_active`,`bridals`.`created_at` AS `created_at` from `bridals` union select `brightenings`.`id` AS `id`,'brightenings' AS `brightenings`,`brightenings`.`title` AS `title`,`brightenings`.`description` AS `description`,`brightenings`.`titleesp` AS `titleesp`,`brightenings`.`descriptionesp` AS `descriptionesp`,`brightenings`.`price` AS `price`,`brightenings`.`popup` AS `popup`,`brightenings`.`button` AS `button`,`brightenings`.`image` AS `image`,`brightenings`.`is_featured` AS `is_featured`,`brightenings`.`is_active` AS `is_active`,`brightenings`.`created_at` AS `created_at` from `brightenings` union select `calmings`.`id` AS `id`,'calmings' AS `calmings`,`calmings`.`title` AS `title`,`calmings`.`description` AS `description`,`calmings`.`titleesp` AS `titleesp`,`calmings`.`descriptionesp` AS `descriptionesp`,`calmings`.`price` AS `price`,`calmings`.`popup` AS `popup`,`calmings`.`button` AS `button`,`calmings`.`image` AS `image`,`calmings`.`is_featured` AS `is_featured`,`calmings`.`is_active` AS `is_active`,`calmings`.`created_at` AS `created_at` from `calmings` union select `clasess`.`id` AS `id`,'clasess' AS `clasess`,`clasess`.`title` AS `title`,`clasess`.`description` AS `description`,`clasess`.`titleesp` AS `titleesp`,`clasess`.`descriptionesp` AS `descriptionesp`,`clasess`.`price` AS `price`,`clasess`.`popup` AS `popup`,`clasess`.`button` AS `button`,`clasess`.`image` AS `image`,`clasess`.`is_featured` AS `is_featured`,`clasess`.`is_active` AS `is_active`,`clasess`.`created_at` AS `created_at` from `clasess` union select `fibrofaces`.`id` AS `id`,'fibrofaces' AS `fibrofaces`,`fibrofaces`.`title` AS `title`,`fibrofaces`.`description` AS `description`,`fibrofaces`.`titleesp` AS `titleesp`,`fibrofaces`.`descriptionesp` AS `descriptionesp`,`fibrofaces`.`price` AS `price`,`fibrofaces`.`popup` AS `popup`,`fibrofaces`.`button` AS `button`,`fibrofaces`.`image` AS `image`,`fibrofaces`.`is_featured` AS `is_featured`,`fibrofaces`.`is_active` AS `is_active`,`fibrofaces`.`created_at` AS `created_at` from `fibrofaces` union select `hands`.`id` AS `id`,'hands' AS `hands`,`hands`.`title` AS `title`,`hands`.`description` AS `description`,`hands`.`titleesp` AS `titleesp`,`hands`.`descriptionesp` AS `descriptionesp`,`hands`.`price` AS `price`,`hands`.`popup` AS `popup`,`hands`.`button` AS `button`,`hands`.`image` AS `image`,`hands`.`is_featured` AS `is_featured`,`hands`.`is_active` AS `is_active`,`hands`.`created_at` AS `created_at` from `hands` union select `hypertrophics`.`id` AS `id`,'hypertrophics' AS `hypertrophics`,`hypertrophics`.`title` AS `title`,`hypertrophics`.`description` AS `description`,`hypertrophics`.`titleesp` AS `titleesp`,`hypertrophics`.`descriptionesp` AS `descriptionesp`,`hypertrophics`.`price` AS `price`,`hypertrophics`.`popup` AS `popup`,`hypertrophics`.`button` AS `button`,`hypertrophics`.`image` AS `image`,`hypertrophics`.`is_featured` AS `is_featured`,`hypertrophics`.`is_active` AS `is_active`,`hypertrophics`.`created_at` AS `created_at` from `hypertrophics` union select `looks`.`id` AS `id`,'looks' AS `looks`,`looks`.`title` AS `title`,`looks`.`description` AS `description`,`looks`.`titleesp` AS `titleesp`,`looks`.`descriptionesp` AS `descriptionesp`,`looks`.`price` AS `price`,`looks`.`popup` AS `popup`,`looks`.`button` AS `button`,`looks`.`image` AS `image`,`looks`.`is_featured` AS `is_featured`,`looks`.`is_active` AS `is_active`,`looks`.`created_at` AS `created_at` from `looks` union select `luxurings`.`id` AS `id`,'luxurings' AS `luxurings`,`luxurings`.`title` AS `title`,`luxurings`.`description` AS `description`,`luxurings`.`titleesp` AS `titleesp`,`luxurings`.`descriptionesp` AS `descriptionesp`,`luxurings`.`price` AS `price`,`luxurings`.`popup` AS `popup`,`luxurings`.`button` AS `button`,`luxurings`.`image` AS `image`,`luxurings`.`is_featured` AS `is_featured`,`luxurings`.`is_active` AS `is_active`,`luxurings`.`created_at` AS `created_at` from `luxurings` union select `permanents`.`id` AS `id`,'permanents' AS `permanents`,`permanents`.`title` AS `title`,`permanents`.`description` AS `description`,`permanents`.`titleesp` AS `titleesp`,`permanents`.`descriptionesp` AS `descriptionesp`,`permanents`.`price` AS `price`,`permanents`.`popup` AS `popup`,`permanents`.`button` AS `button`,`permanents`.`image` AS `image`,`permanents`.`is_featured` AS `is_featured`,`permanents`.`is_active` AS `is_active`,`permanents`.`created_at` AS `created_at` from `permanents` union select `restoratives`.`id` AS `id`,'restoratives' AS `restoratives`,`restoratives`.`title` AS `title`,`restoratives`.`description` AS `description`,`restoratives`.`titleesp` AS `titleesp`,`restoratives`.`descriptionesp` AS `descriptionesp`,`restoratives`.`price` AS `price`,`restoratives`.`popup` AS `popup`,`restoratives`.`button` AS `button`,`restoratives`.`image` AS `image`,`restoratives`.`is_featured` AS `is_featured`,`restoratives`.`is_active` AS `is_active`,`restoratives`.`created_at` AS `created_at` from `restoratives` union select `sculptings`.`id` AS `id`,'sculptings' AS `sculptings`,`sculptings`.`title` AS `title`,`sculptings`.`description` AS `description`,`sculptings`.`titleesp` AS `titleesp`,`sculptings`.`descriptionesp` AS `descriptionesp`,`sculptings`.`price` AS `price`,`sculptings`.`popup` AS `popup`,`sculptings`.`button` AS `button`,`sculptings`.`image` AS `image`,`sculptings`.`is_featured` AS `is_featured`,`sculptings`.`is_active` AS `is_active`,`sculptings`.`created_at` AS `created_at` from `sculptings` union select `specialfs`.`id` AS `id`,'specialfs' AS `specialfs`,`specialfs`.`title` AS `title`,`specialfs`.`description` AS `description`,`specialfs`.`titleesp` AS `titleesp`,`specialfs`.`descriptionesp` AS `descriptionesp`,`specialfs`.`price` AS `price`,`specialfs`.`popup` AS `popup`,`specialfs`.`button` AS `button`,`specialfs`.`image` AS `image`,`specialfs`.`is_featured` AS `is_featured`,`specialfs`.`is_active` AS `is_active`,`specialfs`.`created_at` AS `created_at` from `specialfs` union select `specialts`.`id` AS `id`,'specialts' AS `specialts`,`specialts`.`title` AS `title`,`specialts`.`description` AS `description`,`specialts`.`titleesp` AS `titleesp`,`specialts`.`descriptionesp` AS `descriptionesp`,`specialts`.`price` AS `price`,`specialts`.`popup` AS `popup`,`specialts`.`button` AS `button`,`specialts`.`image` AS `image`,`specialts`.`is_featured` AS `is_featured`,`specialts`.`is_active` AS `is_active`,`specialts`.`created_at` AS `created_at` from `specialts` union select `waxs`.`id` AS `id`,'waxs' AS `waxs`,`waxs`.`title` AS `title`,`waxs`.`description` AS `description`,`waxs`.`titleesp` AS `titleesp`,`waxs`.`descriptionesp` AS `descriptionesp`,`waxs`.`price` AS `price`,`waxs`.`popup` AS `popup`,`waxs`.`button` AS `button`,`waxs`.`image` AS `image`,`waxs`.`is_featured` AS `is_featured`,`waxs`.`is_active` AS `is_active`,`waxs`.`created_at` AS `created_at` from `waxs` union select `wrappings`.`id` AS `id`,'wrappings' AS `wrappings`,`wrappings`.`title` AS `title`,`wrappings`.`description` AS `description`,`wrappings`.`titleesp` AS `titleesp`,`wrappings`.`descriptionesp` AS `descriptionesp`,`wrappings`.`price` AS `price`,`wrappings`.`popup` AS `popup`,`wrappings`.`button` AS `button`,`wrappings`.`image` AS `image`,`wrappings`.`is_featured` AS `is_featured`,`wrappings`.`is_active` AS `is_active`,`wrappings`.`created_at` AS `created_at` from `wrappings` ;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `antiages`
--
ALTER TABLE `antiages`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `bodys`
--
ALTER TABLE `bodys`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `bridals`
--
ALTER TABLE `bridals`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `brightenings`
--
ALTER TABLE `brightenings`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `calmings`
--
ALTER TABLE `calmings`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `clasess`
--
ALTER TABLE `clasess`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `fibrofaces`
--
ALTER TABLE `fibrofaces`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `gallerys`
--
ALTER TABLE `gallerys`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `hands`
--
ALTER TABLE `hands`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `hypertrophics`
--
ALTER TABLE `hypertrophics`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `looks`
--
ALTER TABLE `looks`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `luxurings`
--
ALTER TABLE `luxurings`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `modals`
--
ALTER TABLE `modals`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `permanents`
--
ALTER TABLE `permanents`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `publicacions`
--
ALTER TABLE `publicacions`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `restoratives`
--
ALTER TABLE `restoratives`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `sculptings`
--
ALTER TABLE `sculptings`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `specialfs`
--
ALTER TABLE `specialfs`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `specialts`
--
ALTER TABLE `specialts`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `subcriptores`
--
ALTER TABLE `subcriptores`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `waxs`
--
ALTER TABLE `waxs`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `wrappings`
--
ALTER TABLE `wrappings`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `antiages`
--
ALTER TABLE `antiages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `bodys`
--
ALTER TABLE `bodys`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `bridals`
--
ALTER TABLE `bridals`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `brightenings`
--
ALTER TABLE `brightenings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `calmings`
--
ALTER TABLE `calmings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `clasess`
--
ALTER TABLE `clasess`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=110;

--
-- AUTO_INCREMENT de la tabla `fibrofaces`
--
ALTER TABLE `fibrofaces`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de la tabla `gallerys`
--
ALTER TABLE `gallerys`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `hands`
--
ALTER TABLE `hands`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `hypertrophics`
--
ALTER TABLE `hypertrophics`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `looks`
--
ALTER TABLE `looks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `luxurings`
--
ALTER TABLE `luxurings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `modals`
--
ALTER TABLE `modals`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `permanents`
--
ALTER TABLE `permanents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `publicacions`
--
ALTER TABLE `publicacions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `restoratives`
--
ALTER TABLE `restoratives`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `sculptings`
--
ALTER TABLE `sculptings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `specialfs`
--
ALTER TABLE `specialfs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `specialts`
--
ALTER TABLE `specialts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `subcriptores`
--
ALTER TABLE `subcriptores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=136;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `waxs`
--
ALTER TABLE `waxs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `wrappings`
--
ALTER TABLE `wrappings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
