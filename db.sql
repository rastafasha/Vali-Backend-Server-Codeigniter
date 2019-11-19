-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Aug 07, 2019 at 10:51 PM
-- Server version: 5.7.23
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `Vali`
--

-- --------------------------------------------------------

--
-- Table structure for table `antiages`
--

CREATE TABLE `antiages` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `titleesp` varchar(255) DEFAULT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `description` text,
  `descriptionesp` text,
  `price` varchar(255) NOT NULL,
  `popup` varchar(255) NOT NULL,
  `button` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `is_featured` tinyint(1) NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `antiages`
--

INSERT INTO `antiages` (`id`, `title`, `titleesp`, `user_id`, `category_id`, `description`, `descriptionesp`, `price`, `popup`, `button`, `image`, `is_featured`, `is_active`, `created_at`) VALUES
(1, 'free Consultation Appointment ', 'titulo español', 1, 1, 'Let our skin experts help you choose the perfect treatment with your skin concern. Our first consultation is FREE, you will be receive a Complementary Facial.  <br><br> \n<b style=\"font-style: italic\">Let yourself, come, relax and enjoy with us!!</b>', ' descripcion español', 'Free', 'modal', 'https://squareup.com/appointments/buyer/widget/l4slmthu5ur3ot/RFSCRQJSQAYNW', '1_FREE-CONSULTATION.jpg', 1, 1, '2018-10-27 04:12:09'),
(2, 'Smoothing Eye Treatment With Collagen', 'titulo español', 1, 1, 'Counteract puffiness and dark circles with an instant release collagen Bio matrix infused with Ginko Biloba. This natural Fiber Mask Treatment increases periorbital circulation, soothes, cools, and decongests the fragile eye contour, while visibly reducing puffiness and dark circles through collagen eye gel pads. The eyes are considered to be visibly rejuvenated. <br><br>\nEach treatment performed requires at-home care to see better results in the short term. The use of sunscreen is important to prevent damage to the skin.', ' descripcion español', '50.00', 'Smoothing', 'https://squareup.com/appointments/buyer/widget/73qfkz26e1l8ih/RFSCRQJSQAYNW', '2_SMOOTHING-EYE-TREATMENT-WITH-COLLAGEN.jpg', 1, 1, '2018-10-27 06:12:09'),
(3, 'Anti Aging Collagen Treatment', 'titulo español', 1, 2, 'Our tightening, toning Anti-Aging Facial treatment infuses skin with a veil of collagen, cellular complexes, amino acids, vitamins and natural oils to help increase moisture level and minimize the appearance of fine lines and wrinkles. Feel refreshed and renewed!! A special refresher to your skin. It revives stressed, dehydrated and overworked skin in minutes. This treatment requires a boost of Hyaluronic Acid. <br><br>\nEach treatment performed requires at-home care to see better results in the short term. The use of sunscreen is important to prevent damage to the skin.', ' descripcion español', '85.00', 'modal2', 'https://squareup.com/appointments/buyer/widget/ea71veyz4t7wnj/RFSCRQJSQAYNW', '3_ANTI-AGING-COLLAGEN-TREATMENT.jpg', 1, 1, '2018-10-27 07:12:09'),
(4, 'Carbonic Co2 Gel Facial Therapy ', 'titulo español', 1, 2, 'A facial followed by a CO2 mask. When we apply CO2 to the skin, we make our body think that this area needs more oxygen. Blood then rushes to our skin and delivers a large amount of oxygen. In this case, you will notice wrinkle reduction and the prevention of  new ones forming. Also, moisturized skin and a  lifting effect will be seen. If you have sun damage, dark spots, or age spots, it will remove them from the skin and the look of the skin will be better. <br><br>\nEach treatment performed requires at-home care to see better results in the short term. The use of sunscreen is important to prevent damage to the skin.', ' descripcion español', '90.00', 'Carbonic', 'https://squareup.com/appointments/buyer/widget/bokrehdxyrfg2o/RFSCRQJSQAYNW', '4_CARBONIC-CO2-GEL-FACIAL-THERAPY.jpg', 1, 1, '2018-10-27 09:12:09'),
(5, 'Nourishment & Antioxidant Vitaolive treatment', 'titulo español', 1, 7, 'This treatment is perfect because it has a firming, tensor and decongestant effect on the skin. It provides the necessary components to keep the skin smooth, soft, fresh, safe and tonicity with moisturizing, active, antioxidant and moisturizing effect.', ' descripcion español', '100.00', 'Nourishment', 'https://squareup.com/appointments/buyer/widget/b4cm17ydxj2yr5/RFSCRQJSQAYNW', '5_NOURISHMENT--ANTIOXIDANT-VITAOLIVE-TREATMENT1.jpg', 1, 1, '2018-10-27 10:12:09'),
(6, 'Hydration Boost', 'titulo español', 1, 0, 'Excellent anti-aging treatment for mature skin, dry signs, dehydrated skin with wrinkles. It improves skin texture, hydrates, adds volume and rejuvenates with our special Hydro machine for a luxurious facial treatment. It is followed by an increase in hyaluronic acid, which ends with our hydration mask for hydration and expression wrinkle control. <br><br>\nEach treatment performed requires at-home care to see better results in the short term. The use of sunscreen is important to prevent damage to the skin.', ' descripcion español', '100.00', 'Hydration', 'https://squareup.com/appointments/buyer/widget/z9ekuysnjfu059/RFSCRQJSQAYNW', '6_HYDRATION-6-BOOST.jpg', 1, 1, '2019-07-28 03:43:17'),
(7, 'Firming And Contouring Facial', 'titulo español', 1, 0, 'Our unique firming and contouring facial consists of using a micro current device that can temporarily tight muscles in the face for a more lifted appearance. It may sound intense but it is super relaxing. We end our treatment by applying an exfoliator, hydrating cream and a boost of hyaluronic acid with a peel off hydro jelly mask, according to your skin type. <br><br>\nEach treatment performed requires at-home care to see better results in the short term. The use of sunscreen is important to prevent damage to the skin.', ' descripcion español', '100.00', 'Firming', 'https://squareup.com/appointments/buyer/widget/slmtr5lifgj9up/RFSCRQJSQAYNW', '7_FIRMING-AND-CONTOURING-FACIAL.jpg', 1, 1, '2019-07-28 03:44:02'),
(8, 'Micro Retinol Revitalize Special Treatment', 'titulo español', 1, 0, 'Amplify the results and recover the luminosity with an insurmountable formula. This high-performance treatment combines a powerful and smooth exfoliation and a treatment with micro retinol to instantly recover a smoother, denser and younger skin. This luxury treatment is ideal for the refinement of the skin and the renewal of aging skin. We recommend it once a year for its powerful ingredients, preferably between the months of August and March. <br><br>\nEach treatment performed requires at-home care to see better results in the short term. The use of sunscreen is important to prevent damage to the skin.', ' descripcion español', '120.00', 'Micro', 'https://squareup.com/appointments/buyer/widget/sl5cspfo2i2p0r/RFSCRQJSQAYNW', '8_MICRO-RETINOL-REVITALIZE-SPECIAL-TREATMENT.jpg', 1, 1, '2019-07-28 03:44:41'),
(9, 'Micro Retinol Revitalize Special Treatment Package – 12 Sessions', 'titulo español', 1, 0, 'For amazing results we recommend carrying out (12 sessions) preferably between the months from August to March. <br><br>\nAmplify the results and recover the luminosity with an insurmountable formula, this high-performance treatment combines a powerful and gentle exfoliation with micro retinol to instantly recover smoother, denser and younger skin. In this service, it is ideal for the refinement of the skin and the renewal of the aged skin that we suggest a package with high quality products. <br><br>\nYou should avoid sunlight for a few weeks afterwards. When outdoors, use a broad-spectrum sunscreen with an SPF of 30 or more, and wear a wide-brimmed hat.', ' descripcion español', '1,200.00', 'Micro12', 'https://squareup.com/appointments/buyer/widget/j5nwkakenqoob3/RFSCRQJSQAYNW', '9_MICRO-RETINOL-REVITALIZE-SPECIAL-TREATMENT-PACKAGE–12-SESSIONS.jpg', 1, 1, '2019-07-28 03:45:19'),
(10, 'Radiant Deluxe', 'titulo español', 1, 0, 'This rejuvenating facial will decrease the appearance of fine lines and wrinkles by tightening your skin and restoring collagen. It will hydrate, lift, clear, lighten and renew the skin. <br><br>\nWe use a RF session for this treatment, which increases the skin’s elasticity by repairing damaged fibers and promoting the formation of natural collagen. It can also increase blood flow circulation to treated areas, which can aid in the reduction of adipose (fat storing) tissue. <br><br>\nEach treatment performed requires at-home care to see better results in the short term. The use of sunscreen is important to prevent damage to the skin.', ' descripcion español', '130.00', 'Radiant', 'https://squareup.com/appointments/buyer/widget/udcg3rltbwiwtq/RFSCRQJSQAYNW', '10_RADIANT-DELUXE.jpg', 1, 1, '2019-07-28 03:45:58'),
(11, 'Caviar Anti Aging Treatment', 'titulo español', 1, 0, 'We prepare A Deluxe Treatment with the VIP ingredient  “Caviar” that has rejuvenating properties. Also, it is appreciated because the effects of protection and of deep repairation that it gives to the skin. It is fundamental for the cellular membranes and it is also enriched with amino acids and vitamins, minerals and oligoelements. This treatment is formulated to mature and dry skin by using repairing serums and masks to improve the vitality, hydration and promote radiance of your skin. <br><br>\nEach treatment performed requires at-home care to see better results in the short term. The use of sunscreen is important to prevent damage to the skin. <br><br>\nThis treatment utilizes the Collagen and Caviar Mask from Dermaswiss and the Myoxy Caviar Luxurious Gift Box.', ' descripcion español', '150.00', 'Caviar', 'https://squareup.com/appointments/buyer/widget/aqttkd2sfew1p9/RFSCRQJSQAYNW', '11_CAVIAR-ANTI-AGING-TREATMENT.jpg', 1, 1, '2019-07-28 03:46:41'),
(12, 'Beauty Skin Stem Cells Treatment', 'titulo español', 1, 0, 'This groundbreaking plant-based treatment redefines the anti-aging facial. It is infused with the first-ever blend of argan and comfrey stem cells and supercharged de-agers like collagen, retinol, elastin and other key actives. This exceptional age reversing treatment visibly reduces lines and wrinkles, delivers a smoother skin surface, and long-term protection of the skin’s naturally repairing stem cells.\nEach treatment performed requires at-home care to see better results in the short term. The use of sunscreen is important to prevent damage to the skin.', ' descripcion español', '150.00', 'Beauty', 'https://squareup.com/appointments/buyer/widget/g53rn1zstwp9hw/RFSCRQJSQAYNW', '12_BEAUTY-SKIN-STEM-CELLS-TREATMENT.jpg', 1, 1, '2019-07-28 03:47:17');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
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
-- Dumping data for table `blogs`
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
-- Table structure for table `bodys`
--

CREATE TABLE `bodys` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `description` text,
  `price` varchar(255) NOT NULL,
  `popup` varchar(255) NOT NULL,
  `button` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `is_featured` tinyint(1) NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bodys`
--

INSERT INTO `bodys` (`id`, `title`, `user_id`, `category_id`, `description`, `price`, `popup`, `button`, `image`, `is_featured`, `is_active`, `created_at`) VALUES
(1, 'Free Consultation Appointment ', 1, 1, 'Let our skin experts help you choose the perfect treatment with your skin concern. Our first consultation is FREE, you will be receive a Complementary Facial.  <br><br> \n<b style=\"font-style: italic\">Let yourself, come, relax and enjoy with us!!</b>', 'Free', 'modal1', 'https://squareup.com/appointments/buyer/widget/ro6vobv43tgfqu/RFSCRQJSQAYNW', '1_FREE-CONSULTATION.jpg', 1, 1, '2018-10-27 04:12:09'),
(2, 'Knee', 1, 1, 'Help lift excess of skin surrounding knee cap.', '350.00', 'Knee', 'https://squareup.com/appointments/buyer/widget/pcd2ffpyfnovhc/RFSCRQJSQAYNW', '2_KNEE.jpg', 1, 1, '2018-10-27 06:12:09'),
(3, 'Elbow', 1, 2, 'For those with excess and wrinkled skin.', '350.00', 'Elbow', 'https://squareup.com/appointments/buyer/widget/e5zu5kx0hlo1up/RFSCRQJSQAYNW', '3_ELBOW.jpg', 1, 1, '2018-10-27 07:12:09'),
(4, 'Hand', 1, 2, 'For those with aging appearance and excess of skin.', '800.00', 'Hand', 'https://squareup.com/appointments/buyer/widget/r3wttb5op34wtj/RFSCRQJSQAYNW', '4_HAND.jpg', 1, 1, '2018-10-27 09:12:09'),
(5, 'Tommy tighten', 1, 7, 'Ideal for those who have lost weight and now are left with excess saggy skin. if you were pregnant remember that you have to wait at least 9 month before gave birth.', 'Starting at $1,000.00', 'Tommy', 'https://squareup.com/appointments/buyer/widget/3htdgeoz3a0pr5/RFSCRQJSQAYNW', '5_TOMMY-TIGHTEN.jpg', 1, 1, '2018-10-27 10:12:09'),
(6, 'Neck', 1, 7, 'The skin is forced into repair the neck area', '950.00', 'Neck', 'https://squareup.com/appointments/buyer/widget/ozspjta0vur974/RFSCRQJSQAYNW', '6_NECK.jpg', 1, 1, '2018-10-27 12:12:09');

-- --------------------------------------------------------

--
-- Table structure for table `bridals`
--

CREATE TABLE `bridals` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `description` text,
  `price` varchar(255) NOT NULL,
  `popup` varchar(255) NOT NULL,
  `button` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `is_featured` tinyint(1) NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bridals`
--

INSERT INTO `bridals` (`id`, `title`, `user_id`, `category_id`, `description`, `price`, `popup`, `button`, `image`, `is_featured`, `is_active`, `created_at`) VALUES
(1, 'Bridal makeup trial', 1, 1, 'Before you say “I do”, there are so many things to do to plan for your big day. This is especially the case when it comes to your bridal look. Get a preview of what that makeup will look like. To hire this service, you need the Bridal Makeup.', '80.00', 'bridal', 'https://squareup.com/appointments/buyer/widget/ey7cw2l5ub9kcx/RFSCRQJSQAYNW', '1_BRIDAL-MAKEUP-TRIAL.jpg', 1, 1, '2018-10-27 04:12:09'),
(2, 'Bridal makeup', 1, 1, 'In your special day we will give you special treat. Feel comfortable and beautiful the day you celebrate love. Full makeup application + Luxury Hydration Skin: luxury hydration, primer, full coverage foundation, loose powder, contour and highlight. <br><br>\n<b>Eyes:</b> Subtle or intense eye definition. Fake eyelashes included. Cheeks: bronzer or blush. <br><br> \n<b>Lips:</b> Luxury hydration for lips and long lasting lipstick application. ', '200.00', 'bridalm', 'https://squareup.com/appointments/buyer/widget/4gtshsy89ea3zp/RFSCRQJSQAYNW', '2_BRIDAL-MAKEUP.jpg', 1, 1, '2018-10-27 06:12:09'),
(3, 'Bridal party makeup - 4 people', 1, 2, 'When it comes to the brides wedding day, the bride should absolutely be the center of everyone\'s attention. However, it\'s also important that those in her bridal party look their best too! To hire this service you need the Bridal Makeup.', '480.00', 'party4', 'https://squareup.com/appointments/buyer/widget/ia5i26s7za40g3/RFSCRQJSQAYNW', '3_BRIDAL-PARTY-MAKEUP-4-PEOPLE.jpg', 1, 1, '2018-10-27 07:12:09'),
(4, 'Bridal party makeup - 6 people', 1, 2, 'What about the sisters, the moms and the other wedding guests who want makeup at home services at affordable prices without compromising on quality? To hire this service you need the Bridal Makeup', '660.00', 'modal4', 'https://squareup.com/appointments/buyer/widget/r46v0096l07ipg/RFSCRQJSQAYNW', '4_BRIDAL-PARTY-MAKEUP-6-PEOPLE.jpg', 1, 1, '2018-10-27 09:12:09'),
(5, 'Bridal party makeup - 8 people', 1, 7, 'Everyone wants light makeup that’s subtle and not overdone. There are a lot of MUAs that cater to this need and enable brides to look their absolute best on this special day. To hire this service you need the Bridal Makeup. ', '800.00', 'modal5', 'https://squareup.com/appointments/buyer/widget/ek8t5tgh05penv/RFSCRQJSQAYNW', '5_BRIDAL-PARTY-MAKEUP-8-PEOPLE.jpg', 1, 1, '2018-10-27 10:12:09');

-- --------------------------------------------------------

--
-- Table structure for table `brightenings`
--

CREATE TABLE `brightenings` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `description` text,
  `price` varchar(255) NOT NULL,
  `popup` varchar(255) NOT NULL,
  `button` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `is_featured` tinyint(1) NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `brightenings`
--

INSERT INTO `brightenings` (`id`, `title`, `user_id`, `category_id`, `description`, `price`, `popup`, `button`, `image`, `is_featured`, `is_active`, `created_at`) VALUES
(1, 'free Consultation Appointment', 1, 1, '<p>Let our skin experts help you choose the perfect treatment with your skin concern. Our first consultation is FREE, you will be receive a Complementary Facial.</p><p><strong><em>Let yourself, come, relax and enjoy with us!!</em></strong></p>', 'Free', 'modal1', 'https://squareup.com/appointments/buyer/widget/zec4v7j1ie9cht/RFSCRQJSQAYNW', '1_FREE-CONSULTATION.jpg', 1, 1, '2018-10-27 04:12:09'),
(2, 'Fruit Facial Peel & Renew Treatment', 1, 1, '<p>In this light treatment we use fruit acids from foods such as apples, grapes, sugarcane and berries to exfoliate your skin. What we like most about this special treatment is how smooth it is while still being effective. This peeling works very well also on sensitive skin. The results are immediate and leave our skin soft and vibrant after the first treatment. This type of treatment is also recommended once a week to attribute to your radiant skin the gentle stimulation and exfoliation that allow our skin care to be absorbed in the deeper layers of your skin.&nbsp;</p><p>Each treatment performed requires at-home care to see better results in the short term. The use of sunscreen is important to prevent damage to the skin.</p>', '85.00', 'Fruit', 'https://squareup.com/appointments/buyer/widget/lbh2mj2ubgiqag/RFSCRQJSQAYNW', '2_FRUIT-FACIAL-PEEL--RENEW-TREATMENT.jpg', 1, 1, '2018-10-27 06:12:09'),
(3, 'Neck And Decollate Peeling Treatment', 1, 2, '<p>The neck and chest can show early signs of aging. The skin there is much thinner, which means that it will probably be one of the first places where we will notice things like brown spots, sagging and wrinkles.&nbsp;</p><p>This is the result of not having protected our neck and neckline from the sun every day. Thinking about taking care of your skin and offering a better service we have created special peeling treatment to help the skin look and feel better, with shine, softness, hydration, firmness, hydration, revitalization, finishing with a soothing mask.</p>', '100.00', 'Neck', 'https://squareup.com/appointments/buyer/widget/nc4lq18krok01h/RFSCRQJSQAYNW', '3_NECK-AND-DECOLLATE-PEELING-TREATMENT.jpg', 1, 1, '2018-10-27 07:12:09'),
(4, 'Super Exfoliation Enzyme Peel Treatment', 1, 2, '<p>This complete exfoliating treatment is recommended to eliminate impurities from the skin, softens the congestion of sebum, has a brightens complexion with the help of natural enzymes such as pineapple, papaya, ginkgo and arnica. We want to take care of your skin, so we add a special Vail with collagen and Ginko Biloba to the treatment to improve the microcirculation and strengthen the epidermis, which gives an anti-oxidant and anti-irritant effect to the skin.&nbsp;</p><p>Each treatment performed requires at-home care to see better results in the short term. The use of sunscreen is important to prevent damage to the skin</p>', '100.00', 'Super', 'https://squareup.com/appointments/buyer/widget/6pjvq1z42t8trw/RFSCRQJSQAYNW', '4_SUPER-EXFOLIATION-ENZYME-PEEL-TREATMENT.jpg', 1, 1, '2018-10-27 09:12:09'),
(5, 'Clearing And Lightening Peeling Treat With Peel Off Brightening Mask', 1, 7, '<p>This is an exfoliation to remove the top layer of the skin, dry acne spots, remove pimples and help clear up the appearance of blemishes.&nbsp;</p><p>Accelerate shine, improve skin tone, improve skin clarity and create a fresher and healthier appearance with this effective treatment. The powerful exfoliant softens the skin and releases the opaque surface cells, helping to minimize the appearance of sunspots and age. Botanical extracts, different ingredients in our products help to treat and prevent cellular discoloration for a brilliance and tonal balance without equal. The protocols of the series will vary depending on the amount of hyperpigmentation. Your skin specialist will suggest the number and frequency of necessary treatments. &nbsp;</p><p><strong>Benefits:</strong> Clarifies the complexion, detoxifies and lightens pigmentation spots, for all skin types.&nbsp;</p><p>Each treatment performed requires at-home care to see better results in the short term. The use of sunscreen is important to prevent damage to the skin.</p>', '120.00', 'Clearing', 'https://squareup.com/appointments/buyer/widget/ndhkm32wz60coc/RFSCRQJSQAYNW', '5_CLEARING-AND-LIGHTENING-PEELING-TREAT-WITH-PEEL-OFF-BRIGHTENING-MASK.jpg', 1, 1, '2018-10-27 10:12:09'),
(6, 'Peeling Package - 6 Sessions', 1, 0, '<p>To improve results according to their evolution we recommend carrying out 6 sessions. Thinking about your skin and the damage that occasioned by external factors such as the sun, pregnancy and hormonal processes, we offer you in Vali Skincare &amp; Makeup this fabulous peeling package so that with our help you get rid of these damage. It is an excellent treatment, so the improvements you see, will be constant, because the results are progressive.</p><p><strong>Note</strong> It is necessary to perform a skin evaluation to determine which treatment is indicated according to the conditions of your face</p>', '500.00', 'Peeling', 'https://squareup.com/appointments/buyer/widget/s2izruek6tl06h/RFSCRQJSQAYNW', '6_PEELING-PACKAGE-6-SESSIONS.jpg', 1, 1, '2019-07-28 18:27:33'),
(7, 'Peeling Package -  12 Sessions', 1, 0, '<p>For special conditions and amazing results according to their evolution we recommend carrying out 12 sessions. Thinking about your skin and the damage that occasioned by external factors such as the sun, pregnancy and hormonal processes, we offer you in Vali Skincare &amp; Makeup this fabulous peeling package so that with our help you get rid of these damage. It is an excellent treatment, so the improvements you see, will be constant, because the results are progressive.&nbsp;</p><p><strong>Note</strong> It is necessary to perform a skin evaluation to determine which treatment is indicated according to the conditions of your face.</p>', '950.00', 'Peeling2', 'https://squareup.com/appointments/buyer/widget/9k3u6ig90nrzvh/RFSCRQJSQAYNW', '7_PEELING-PACKAGE-12-SESSIONS.jpg', 1, 1, '2019-07-28 18:28:16');

-- --------------------------------------------------------

--
-- Table structure for table `calmings`
--

CREATE TABLE `calmings` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `description` text,
  `price` varchar(255) NOT NULL,
  `popup` varchar(255) NOT NULL,
  `button` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `is_featured` tinyint(1) NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `calmings`
--

INSERT INTO `calmings` (`id`, `title`, `user_id`, `category_id`, `description`, `price`, `popup`, `button`, `image`, `is_featured`, `is_active`, `created_at`) VALUES
(1, 'free Consultation Appointment', 1, 1, 'Let our skin experts help you choose the perfect treatment with your skin concern. Our first consultation is FREE, you will be receive a Complementary Facial.  <br><br> \n<b style=\"font-style: italic\">Let yourself, come, relax and enjoy with us!!</b>', 'Free', 'modal', 'https://squareup.com/appointments/buyer/widget/ro6vobv43tgfqu/RFSCRQJSQAYNW', '1_FREE-CONSULTATION.jpg', 1, 1, '2018-10-27 04:12:09'),
(2, 'European Facial (Deep Pore Cleanse)', 1, 1, 'This personalized facial cleans deeply the pores and tones your face to give back the vibration to your skin. This facial includes cleansing, exfoliation, extractions (when necessary), massages, tonics, mask and hydration, leaving your skin renewed and radiant.', '80.00', 'eur', 'https://squareup.com/appointments/buyer/widget/cm7ebmvj0e52ux/RFSCRQJSQAYNW', '2_EUROPEAN-FACIAL-DEEP-PORE-CLEANSE.jpg', 1, 1, '2018-10-27 06:12:09'),
(3, 'Led Light Therapy For Acne', 1, 2, 'LED phototherapy is an amazing technology invented by NASA scientist. It is completely non-invasive, plus there is no downtime or irritation after receiving a treatment.  It works great on aging and acne skin as well. It will leave you with nothing but glowing, beautiful skin. <br><br>\n \nDuring this treatment, you will receive a customized acne treatment plus 15 minutes LED light treatment. Incorporating the LED light therapy into the treatment has many benefits:\n <ul>\n         <li>Speed up the healing process</li>\n        <li>Kills the bacteria in the pores</li>\n        <li>Reduce inflammation</li>\n        <li>Help heal scarring, pigmentation</li>\n        <li>Reduces fine lines, wrinkles</li>\n     </ul>', '90.00', 'Led', 'https://squareup.com/appointments/buyer/widget/zgnqsyollxitvf/RFSCRQJSQAYNW', '3_LED-LIGHT-THERAPY-FOR-ACNE.jpg', 1, 1, '2018-10-27 07:12:09'),
(4, 'Rosacea And Sensitive Calm Skin Pamper Treatment', 1, 2, '<p>The perfect facial to feel relaxed and pampered. In this special treatment we choose the best products with the right ingredients to treat this type of skin lesion. We designed a protocol that includes cleaning, light exfoliation, tonic, soothing mask, hydration and protection.</p><p>Each treatment performed requires at-home care to see better results in the short term. The use of sunscreen is important to prevent damage to the skin.</p>', '100.00', 'rosacea', 'https://squareup.com/appointments/buyer/widget/rev0nequc22pmj/RFSCRQJSQAYNW', '4_ROSACEA-AND-SENSITIVE-CALM-SKIN-PAMPER-TREATMENT.jpg', 1, 1, '2018-10-27 09:12:09'),
(5, 'Rosacea And Sensitive Treatment Package - 6 Sessions', 1, 7, '<p>We create a special package for those skins that need to be treated more than one session with specific ingredients and therapies that will help to relax, calm, and reduce inflammation and redness. In all sessions a facial is included, we vary the therapies with phototherapy, aromatherapy facial, deep hydration, facial lymphatic drain, and others. We invite you to try this spectacular package that will change the appearance of your skin with the best products and best prices.&nbsp;</p><p>You should avoid sunlight for a few weeks. we recommend include in your skin care routine the 4 steps treatment &nbsp;cleanser, tonic, moisturizer and sunscreen (at least 2 times) twice daily. We recommend you ask your specialist for recommendations products.</p>', '500.00', 'Rosacea6', 'https://squareup.com/appointments/buyer/widget/srkjg0iz9bhguy/RFSCRQJSQAYNW', '5_ROSACEA-AND-SENSITIVE-TREATMENT-PACKAGE-6-SESSIONS.jpg', 1, 1, '2018-10-27 10:12:09'),
(6, 'Acne Killer With Charcoal Mask', 1, 0, '<p>Customized to treat the outbreaks, balance the oil, rinse and refine your skin. Includes a clean facial with deep pores with ozone, which ends in high frequency with a carbon mask.</p><p>In addition to this treatment we include a phototherapy session with Blue Light, that will help reducing acne inflammation.&nbsp;</p><p>Each treatment we must perform due care at home to see better results in the short term, Important the use of sunscreen to prevent damage to our skin.</p>', '100.00', 'acne', 'https://squareup.com/appointments/buyer/widget/o91u2a5shbu1d9/RFSCRQJSQAYNW', '6_ACNE-KILLER-WITH-CHARCOAL-MASK.jpg', 1, 1, '2019-07-28 18:21:29'),
(7, 'Acne Killer Package – 6 Sessions', 1, 0, '<p>We created a special package for those skins that should be treated acne condition. The sessions vary weekly including the following: European facial, microdermabrasion, super exfoliation enzyme, a session of our best-selling service for acne (acne killer) with carbon mask and others. We invite you to try this spectacular package that will change the appearance of your skin with the best products and the best prices.</p><p>Remember that after a facial treatment you should avoid sunlight for a few weeks. We recommend include in your facial care routine the cleanser, tonic, moisturizer and sunscreen for the treatment of 4 steps twice a day (consult your specialist for recommendations).</p>', '500.00', 'acn', 'https://squareup.com/appointments/buyer/widget/mo3dv04hmi0ueg/RFSCRQJSQAYNW', '7_ACNE-KILLER-PACKAGE–6-SESSIONS.jpg', 1, 1, '2019-07-28 18:22:12');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `category_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
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
-- Table structure for table `clasess`
--

CREATE TABLE `clasess` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `description` text,
  `price` varchar(255) NOT NULL,
  `popup` varchar(255) NOT NULL,
  `button` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `is_featured` tinyint(1) NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `clasess`
--

INSERT INTO `clasess` (`id`, `title`, `user_id`, `category_id`, `description`, `price`, `popup`, `button`, `image`, `is_featured`, `is_active`, `created_at`) VALUES
(1, 'One on one makeup class', 1, 1, 'The course offers the ins and outs of how to effectively enhance your beauty, choose the correct products for your tone and undertone, and unique face and eye shape. I also teach you how to cover blemishes, reduce the appearance of dark circles; I teach you how is a perfect blend shadow, and the best makeup tricks. I teach you how to convert a glam but natural day makeup into a night and glowing one. ', '180.00', 'modal1', 'https://squareup.com/appointments/buyer/widget/sbbfu31vtw32px/RFSCRQJSQAYNW', '1_ONE-ON-ONE-MAKEUP-CLASS.jpg', 1, 1, '2018-10-27 04:12:09'),
(2, 'One day group makeup class - 4 people', 1, 1, 'Learn how to apply your own makeup and about the best products to use for your skin this class will help you achieve your perfect day to night makeup look!. Bring your makeup bag to find out what works and what doesn\'t work!. I also recommend you which makeup could work on you. This event is perfect for at specials best friends Plan!!! We have a lot of fun!! ', '550.00', 'One4', 'https://squareup.com/appointments/buyer/widget/wwqzn6hzkke7mx/RFSCRQJSQAYNW', '2_ONE-DAY-GROUP-MAKEUP-CLASS-4-PEOPLE.jpg', 1, 1, '2018-10-27 06:12:09'),
(3, 'One day group makeup class - 6 people', 1, 2, 'Invite some friends for some makeup fun sessions! We can show you how to use your own makeup products to create the perfect look for you. This is the perfect chance to ask a professional any questions you’ve ever had about makeup! During each demonstration, you’ll get to take notes and ask questions so you can recreate the looks in the future. We give you a certificate of completion. ', '750.00', 'One6', 'https://squareup.com/appointments/buyer/widget/d7aqoj359zf26u/RFSCRQJSQAYNW', '3_ONE-DAY-GROUP-MAKEUP-CLASS-6-PEOPLE.jpg', 1, 1, '2018-10-27 07:12:09');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
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
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `lastname`, `email`, `phone`, `message`, `created_at`) VALUES
(1, 'Malcolm', 'Cordova', 'mercadocreativo@gmail.com', '9999999999', 'This is test message', '2018-10-30 10:14:15'),
(2, 'Malcolm', 'Cordova', 'mercadocreativo@gmail.com', '4241874370', 'prueba', '2019-07-25 22:57:00');

-- --------------------------------------------------------

--
-- Table structure for table `fibrofaces`
--

CREATE TABLE `fibrofaces` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `description` text,
  `price` varchar(255) NOT NULL,
  `popup` varchar(255) NOT NULL,
  `button` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `is_featured` tinyint(1) NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `fibrofaces`
--

INSERT INTO `fibrofaces` (`id`, `title`, `user_id`, `category_id`, `description`, `price`, `popup`, `button`, `image`, `is_featured`, `is_active`, `created_at`) VALUES
(1, 'free Consultation Appointment', 1, 0, 'Let our skin experts help you choose the perfect treatment with your skin concern. Our first consultation is FREE, you will be receive a Complementary Facial.  <br><br> \n<b style=\"font-style: italic\">Let yourself, come, relax and enjoy with us!!</b>', 'Free', 'modal1', 'https://squareup.com/appointments/buyer/widget/6lxaht17ira8gt/RFSCRQJSQAYNW', '1_FREE-CONSULTATION.jpg', 1, 1, '2018-10-27 04:12:09'),
(2, 'Upper eyelids', 1, 0, 'Tighten upper eyelid wrinkles reduce the fine lines, excess skin and sun spots.', '400.00', 'Uppere', 'https://squareup.com/appointments/buyer/widget/4q0yfo4ymrq7oz/RFSCRQJSQAYNW', '2_UPPER-EYELIDS.jpg', 1, 1, '2018-10-27 06:12:09'),
(3, 'Lower Eyelids', 1, 0, 'Tighten lower eyelid wrinkles reduce the fine lines, excess skin and sun spots.', '400.00', 'Lowere', 'https://squareup.com/appointments/buyer/widget/i56pnphm9vchy9/RFSCRQJSQAYNW', '3_LOWER-EYELIDS.jpg', 1, 1, '2018-10-27 07:12:09'),
(4, 'Upper & Lower Eyelids with FREE Crows Feet Fibroblast Package', 1, 0, 'Special package for Eyelids !!!', '800.00', 'Upper2', 'https://squareup.com/appointments/buyer/widget/eivm1bbrxlx88k/RFSCRQJSQAYNW', '4_Upper--Lower-Eyelids-with-FREE-Crows-Feet-Fibroblast-Package.jpg', 1, 1, '2018-10-27 09:12:09'),
(5, 'Accordion lines (Nasolabial Fold)', 1, 0, 'The lines that form outside of the mouth when you smile', '250.00', 'Accordion', 'https://squareup.com/appointments/buyer/widget/5p4hqcts0sros6/RFSCRQJSQAYNW', '5_ACCORDION-LINES.jpg', 1, 1, '2018-10-27 10:12:09'),
(6, 'Under the eyes', 1, 0, 'Reduce the appearance of lines, excess of skin and dark spots.', '250.00', 'Under2', 'https://squareup.com/appointments/buyer/widget/fq0o0tafqgbmsy/RFSCRQJSQAYNW', '6_UNDER-THE-EYES.jpg', 1, 1, '2018-10-27 12:12:09'),
(7, 'Crow\'s feet around the eyes', 1, 0, 'Decrease the appearance of harsh wrinkles', '250.00', 'feet', 'https://squareup.com/appointments/buyer/widget/szmby052h4gn6l/RFSCRQJSQAYNW', '7_CROWS-FEET-AROUND-THE-EYES.jpg', 1, 1, '2019-07-28 02:53:36'),
(8, 'Glabella (Frown lines)', 1, 0, 'Reduce the appearance of frown lines.', '300.00', 'Glabella', 'https://squareup.com/appointments/buyer/widget/sri7ifc0t6mxf8/RFSCRQJSQAYNW', '8_GLABELLA-FROWN-LINES.jpg', 1, 1, '2019-07-28 02:54:11'),
(9, 'Before Ear Lines Fibrioblast', 1, 0, 'Tight the skin before ears', '250.00', 'ear', 'https://squareup.com/appointments/buyer/widget/1hooi7x4xqh0tq/RFSCRQJSQAYNW', '9_Before-Ear-Lines-Fibrioblast.jpg', 1, 1, '2019-07-28 02:54:48'),
(10, 'Acne Scars', 1, 0, 'Improvement in the appearance of post acne marks and scars.', 'Starting at $400.00', 'Acne', 'https://squareup.com/appointments/buyer/widget/5g6p7srkrccd7s/RFSCRQJSQAYNW', '10_ACNE-SCARS.jpg', 1, 1, '2019-07-28 02:55:25'),
(11, 'Forehead lines', 1, 0, 'Decrease the appearance of harsh expressions and wrinkles.', '350.00', 'Forehead', 'https://squareup.com/appointments/buyer/widget/jrez4xgahowgct/RFSCRQJSQAYNW', '11_FOREHEAD-LINES.jpg', 1, 1, '2019-07-28 02:56:05'),
(12, 'Nasolabial fold', 1, 0, 'Soften the appearance of (parentheses) smile lines that add years to your face.', '250.00', 'Nasolabial', 'https://squareup.com/appointments/buyer/widget/5p4hqcts0sros6/RFSCRQJSQAYNW', '12_NASOLABIAL-FOLD.jpg', 1, 1, '2019-07-28 02:56:45'),
(13, 'Upper Lips (Bar code)', 1, 0, 'Soften the appearance of \"smoker lines\" or \"straw lines\"', '250.00', 'upLips', 'https://squareup.com/appointments/buyer/widget/6vvngviqv7a6i6/RFSCRQJSQAYNW', '13_UPPER-LIPS-BAR-CODE.jpg', 1, 1, '2019-07-28 02:57:28'),
(14, 'Lower lips (lower lips)', 1, 0, 'Before ear lines diminish harsh expression lines.', '250.00', 'Lower', 'https://squareup.com/appointments/buyer/widget/9zyjcrpolkmj5d/RFSCRQJSQAYNW', '14_LOWER-LIPS.jpg', 1, 1, '2019-07-28 02:58:06'),
(15, 'Jaw lines', 1, 0, 'Tight the skin for good.', '250.00', 'Jaw', 'https://squareup.com/appointments/buyer/widget/4jw80hvur4kk5i/RFSCRQJSQAYNW', '15_JAW-LINES.jpg', 1, 1, '2019-07-28 02:58:57'),
(16, 'Jowl line', 1, 0, 'Reduce the excess of skin and lift your face', '300.00', 'Jowl', 'https://squareup.com/appointments/buyer/widget/6rtnkcun6apsqi/RFSCRQJSQAYNW', '16_JOWL-LINE.jpg', 1, 1, '2019-07-28 02:59:37'),
(17, 'Marionette lines', 1, 0, 'Refresh the smile zone', '400.00', 'Marionette', 'https://squareup.com/appointments/buyer/widget/k45u32d0m1bfdz/RFSCRQJSQAYNW', '17_MARIONETTE-LINES.jpg', 1, 1, '2019-07-28 03:00:13'),
(18, 'V Shape Contouring', 1, 0, 'Soften the appearance of lines and wrinkles ', '400.00', 'Shape', 'https://squareup.com/appointments/buyer/widget/rb3llqpuw7q37y/RFSCRQJSQAYNW', '18_V-Shape-Contouring.jpg', 1, 1, '2019-07-28 03:01:02'),
(19, 'Chin', 1, 0, 'Reduce the appearance of lines and wrinkles', '300.00', 'Chin', 'https://squareup.com/appointments/buyer/widget/btp06j5mwfljr7/RFSCRQJSQAYNW', '19_CHIN.jpg', 1, 1, '2019-07-28 03:01:37'),
(20, 'Lower Face', 1, 0, 'Includes Nasolabial Folds, Lip Lines, Marionette Lines, Chin, Jowl Lift, Jaw Lines, V Shapes Contouring (Neck Not Included).', '950.00', 'Lowerf', 'https://squareup.com/appointments/buyer/widget/iiwekp6nyo8l8m/RFSCRQJSQAYNW', '20_LOWER-FACE.jpg', 1, 1, '2019-07-28 03:02:16'),
(21, 'Full Face', 1, 0, 'Includes all the fibroblast zones in the face, you can exclude any zone. (Neck Not Included)', '1,900.00', 'Full', 'https://squareup.com/appointments/buyer/widget/d6fwk8ji5vtlns/RFSCRQJSQAYNW', '21_FULL-FACE.jpg', 1, 1, '2019-07-28 03:02:53');

-- --------------------------------------------------------

--
-- Table structure for table `gallerys`
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
-- Dumping data for table `gallerys`
--

INSERT INTO `gallerys` (`id`, `title`, `user_id`, `category_id`, `description`, `image`, `is_featured`, `is_active`, `created_at`) VALUES
(2, 'Sample blog post 2', 1, 1, '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', 'location-vali.jpeg', 1, 1, '2018-10-27 06:12:09'),
(3, 'Sample blog post 3', 1, 2, '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', 'location-vali1.jpg', 0, 1, '2018-10-27 07:12:09'),
(4, 'Sample blog post 4', 1, 2, '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', 'location-vali2.jpg', 0, 1, '2018-10-27 09:12:09'),
(5, 'Sample blog post 5', 1, 7, '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', 'location-vali3.jpg', 1, 1, '2018-10-27 10:12:09'),
(6, 'Sample blog post 6', 1, 7, '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', 'location-vali4.jpg', 0, 1, '2018-10-27 12:12:09'),
(7, 'prueba', 1, 0, 'prueba', 'BODY-hand.jpg', 0, 1, '2019-07-20 19:08:23');

-- --------------------------------------------------------

--
-- Table structure for table `hands`
--

CREATE TABLE `hands` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `description` text,
  `price` varchar(255) NOT NULL,
  `popup` varchar(255) NOT NULL,
  `button` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `is_featured` tinyint(1) NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `hands`
--

INSERT INTO `hands` (`id`, `title`, `user_id`, `category_id`, `description`, `price`, `popup`, `button`, `image`, `is_featured`, `is_active`, `created_at`) VALUES
(1, 'Hands hydrating with Exfoliation paraffin treatments', 1, 1, 'The paraffin treatments have many therapeutic benefits for internal ailments as well but the truth is, it can be more than just an add-on to a manicure. We offer it in our spa because we think that it could be a helpful treatment not just to hydrate your hands also to treat some conditions like arthritis and fibromyalgia among others. A wax treatment acts as a type of thermotherapy, or heat therapy, that helps treat these conditions by increasing blood flow, relaxing muscles and reducing stiffness in joints. It can also help with minimizing muscle spasms and inflammation, and to treat sprains and pulled muscles. Can also help with lowering fluid retention and flushing toxins, which can reduce swelling. In addition to soothing and healing the skin, paraffin treatments have many therapeutic benefits for internal ailments as well. <br><br>\nParaffin wax therapy can be particularly effective for those suffering from osteoarthritis and rheumatoid arthritis. Regular paraffin hand treatments can help relax joints and relieve pain in hands before physical therapy and exercise.  <br><br>\nAfter several layers are added, the wax will be covered in a plastic bag, wrapped in hot towels and you can relax as the benefits kick in. The wax will trap the heat against your skin as it hardens, opening the pores. Once the wax is completely cooled it will be pulled away, taking dead skin cells along with it. ). Its warm temperature is meant to provide relief from arthritis pain, sore joints or sore muscles. You can use paraffin wax (may be called either paraffin or wax) to apply moist heat to your hands or feet to ease the pain and stiffness of osteoarthritis. Paraffin especially helps to reduce pain and loosen up your hand and finger joints before exercise. <br><br>\nA paraffin treatment creates a sort of barrier on your skin that helps retain the oils that your body naturally produces. ... Paraffin wax can be effective in soothing and softening calluses on hands and healing dry cracked skin.', '35.00', 'Hands', 'https://squareup.com/appointments/buyer/widget/k3hsy4kk6c0iaz/RFSCRQJSQAYNW', '1_HANDS-HYDRATING-WITH-EXFOLIATION-PARAFFIN-TREATMENT.jpg', 1, 1, '2018-10-27 04:12:09'),
(2, 'Tyred legs and Feet Therapy', 1, 1, 'Unique and exclusive treatment for all public; We must consent to those twins who lead us day by day, for this we offer this service in which the following is offered, decreases varicose veins, telangiectasia and swelling, relieves heaviness and provides freshness and immediate sensation of rest, relaxes the muscles, revitalizing, toning and decongesting.', '80.00', 'Tyred', 'https://squareup.com/appointments/buyer/widget/k0igkyus4gr0pb/RFSCRQJSQAYNW', '2_TIRED-LEGS-AND-FEET-THERAPY.jpg', 1, 1, '2018-10-27 06:12:09');

-- --------------------------------------------------------

--
-- Table structure for table `hypertrophics`
--

CREATE TABLE `hypertrophics` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `description` text,
  `price` varchar(255) NOT NULL,
  `popup` varchar(255) NOT NULL,
  `button` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `is_featured` tinyint(1) NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `hypertrophics`
--

INSERT INTO `hypertrophics` (`id`, `title`, `user_id`, `category_id`, `description`, `price`, `popup`, `button`, `image`, `is_featured`, `is_active`, `created_at`) VALUES
(1, 'Free Consultation Appointment ', 1, 1, 'Let our skin experts help you choose the perfect treatment with your skin concern. Our first consultation is FREE, you will be receive a Complementary Facial.  <br><br> \n<b style=\"font-style: italic\">Let yourself, come, relax and enjoy with us!!</b>', 'Free', 'modal1', 'https://squareup.com/appointments/buyer/widget/yr87b7er5ehipy/RFSCRQJSQAYNW', '1_FREE-CONSULTATION.jpg', 1, 1, '2018-10-27 04:12:09'),
(2, 'Scars / Small area', 1, 1, 'Decrease the appearance of your small scar with this special treatment. We will need you send us pictures of the treating area before your appointment to  decide which treatment is better for you.', '700.00', 'ScarsS', 'https://squareup.com/appointments/buyer/widget/mew0akb7c6epud/RFSCRQJSQAYNW', '2_SCARS-SMALL-AREA.jpg', 1, 1, '2018-10-27 06:12:09'),
(3, 'Scars / Medium area', 1, 2, 'Decrease the appearance of your medium scar with this special treatment. We will need you send us pictures of the treating area before your appointment to  decide which treatment is better for you.', '900.00', 'ScarsM', 'https://squareup.com/appointments/buyer/widget/mxjzre9h0jvvyg/RFSCRQJSQAYNW', '3_SCARS-MEDIUM-AREA.jpg', 1, 1, '2018-10-27 07:12:09'),
(4, 'Scars / large area', 1, 2, 'Decrease the appearance of your large scar with this special treatment.  We will need you send us pictures of the treating area before your appointment to  decide which treatment is better for you.', '1,400.00', 'modal4', 'https://squareup.com/appointments/buyer/widget/ajbl1zkt0lgpe5/RFSCRQJSQAYNW', '4_SCARS-LARGE-AREA.jpg', 1, 1, '2018-10-27 09:12:09'),
(5, 'Stretch marks / small area', 1, 7, 'Decrease the appearance of your small stretch mark with this special treatment.  We will need you send us pictures of the treating area before your appointment to  decide which treatment is better for you.', '900.00', 'modal5', 'https://squareup.com/appointments/buyer/widget/r337otp58th4ti/RFSCRQJSQAYNW', '5_STRETCH-MARKS-SMALL-AREA.jpg', 1, 1, '2018-10-27 10:12:09'),
(6, 'Stretch marks / medium area', 1, 7, 'Decrease the appearance of your medium stretch mark with this special treatment. We will need you send us pictures of the treating area before your appointment to  decide which treatment is better for you.', '1,400.00', 'modal6', 'https://squareup.com/appointments/buyer/widget/yudnr08rbizwkm/RFSCRQJSQAYNW', '6_STRETCH-MARKS-MEDIUM-AREA.jpg', 1, 1, '2018-10-27 12:12:09'),
(7, 'Stretch marks / large area ', 1, 0, 'Decrease the appearance of your large stretch mark with this special treatment. We will need you send us pictures of the treating area before your appointment to  decide which treatment is better for you.', '2,400.00', 'Stretch', 'https://squareup.com/appointments/buyer/widget/5y6xishnkj9pba/RFSCRQJSQAYNW', '7_STRETCH-MARKS-LARGE-AREA.jpg', 1, 1, '2019-07-28 03:14:09');

-- --------------------------------------------------------

--
-- Table structure for table `looks`
--

CREATE TABLE `looks` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `description` text,
  `price` varchar(255) NOT NULL,
  `popup` varchar(255) NOT NULL,
  `button` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `is_featured` tinyint(1) NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `looks`
--

INSERT INTO `looks` (`id`, `title`, `user_id`, `category_id`, `description`, `price`, `popup`, `button`, `image`, `is_featured`, `is_active`, `created_at`) VALUES
(1, 'Glam makeup look', 1, 1, 'It\'s time to indulge yourself ! Every woman deserves a “Red Carpet Look\" once in a while and our makeup artist professional team can get you ready for your personal night at the Special time.  <br><br>\nBook your best makeup for a holiday party or special occasion. In this makeup application you will be treated to flawless makeup, beautiful eye makeup with a touch of glow, either smokey or natural, perfect blush and lips.', '100.00', 'modal1', 'https://squareup.com/appointments/buyer/widget/mssmvjgw0nr6q8/RFSCRQJSQAYNW', '1_GLAM-MAKEUP-LOOK.jpg', 1, 1, '2018-10-27 04:12:09'),
(2, 'Soft makeup look', 1, 1, 'Whether you’re looking for natural, glamorous or something in between, we take a personalized approach to create your perfect look. We recommend it for an special day event but if you are the person that likes the natural but glam makeup look this is your perfect choice ! <br><br> \nBook your treatment for a holiday party or special occasion in this makeup application you will be treated to flawless foundation makeup techniques, beautiful eye makeup either smoke or natural, perfect blush and lips.', '100.00', 'Soft', 'https://squareup.com/appointments/buyer/widget/d1cqm1x4dgw5l7/RFSCRQJSQAYNW', '2_SOFT-MAKEUP-LOOK.jpg', 1, 1, '2018-10-27 06:12:09'),
(3, 'Sweet 16 / 15 makeup look', 1, 2, 'We want to be part of your team in your unforgettable and special occasions of your young woman life with an unique and glam glow makeup to be ready to rock that night!!! Let us live with you this moment!!', '100.00', 'Sweet', 'https://squareup.com/appointments/buyer/widget/jdmzdq8j87ahle/RFSCRQJSQAYNW', '3_SWEET-16-15-MAKEUP-LOOK.jpg', 1, 1, '2018-10-27 07:12:09'),
(4, 'Prom makeup look', 1, 2, 'We also LOVE to fancy up girls for their prom!. High school prom marks the time when you end your teenage years and head into adulthood. It’s the perfect occasion to get glammed up and look your best!!! We will make them glow with glam but natural look for the occasion!!! Let us be part of that history!!! ', '100.00', 'Prom', 'https://squareup.com/appointments/buyer/widget/e3dd496qga4e6u/RFSCRQJSQAYNW', '4_PROM-MAKEUP-LOOK.jpg', 1, 1, '2018-10-27 09:12:09'),
(5, 'Photoshoot makeup - 2 Hours', 1, 7, 'We contribute to the look in your images helping you to enhance your beauty with special photography makeup products. We will follow the instructions of the photography expert. Include Retouches.', '250.00', 'Photos', 'https://squareup.com/appointments/buyer/widget/migfzhib2aeoss/RFSCRQJSQAYNW', '5_PHOTOSHOOT-MAKEUP-2-HOURS.jpg', 1, 1, '2018-10-27 10:12:09'),
(6, 'Eyebrow design and tint', 1, 7, 'In Vali Skin Care and Makeup, we try to do everything you need to look beautiful. Speaking of eyebrows that are the frame of your eyes, we think that they offer a complete service to pamper this area of your face. To achieve a PERFECT We not only configure your eyebrows, we make an analysis of your facial structure and adopt an architectural approach to define the shape and structure of your forehead. We shape, fill and adjust your eyebrows perfectly! <br><br>\nWith just a touch of dye (non-toxic, organic and natural) you can wear natural and full-looking eyebrows. With a special dye that adheres even to the finest hairs of your eyebrows, simply sit back and relax while our eyebrow experts take your eyebrows and become fabulous with a custom color that will leave you impressed for a week or more, depending on the color. Skin type and home care.', '40.00', 'edesign', 'https://squareup.com/appointments/buyer/widget/4bomcxmevonqto/RFSCRQJSQAYNW', '6_EYEBROW-DESIGN-AND-TINT.jpg', 1, 1, '2018-10-27 12:12:09');

-- --------------------------------------------------------

--
-- Table structure for table `luxurings`
--

CREATE TABLE `luxurings` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `description` text,
  `price` varchar(255) NOT NULL,
  `popup` varchar(255) NOT NULL,
  `button` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `is_featured` tinyint(1) NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `luxurings`
--

INSERT INTO `luxurings` (`id`, `title`, `user_id`, `category_id`, `description`, `price`, `popup`, `button`, `image`, `is_featured`, `is_active`, `created_at`) VALUES
(1, 'free Consultation Appointment', 1, 1, '<p>Let our skin experts help you choose the perfect treatment with your skin concern. Our first consultation is FREE, you will be receive a Complementary Facial.</p><p><strong><em>Let yourself, come, relax and enjoy with us!!</em></strong></p>', 'Free', 'modal', 'https://squareup.com/appointments/buyer/widget/pvey5b8tveiq7h/RFSCRQJSQAYNW', '1_FREE-CONSULTATION.jpg', 1, 1, '2018-10-27 04:12:09'),
(2, 'Hydra Facial Advance Skin Treatment', 1, 1, '<p>The Hydra Facial treatment is the newest advance in non-laser skin resurfacing. Hydra Facial is the only hydrodermabrasion procedure that combines cleansing, exfoliation, extraction, hydration and antioxidant protection simultaneously, resulting in clearer, more beautiful skin with no discomfort or downtime. The treatment is soothing, moisturizing, non-invasive and non-irritating. Hydration is the foundation of healthy, radiant skin. Irritation of the skin has been proven to increase signs of aging. Hydra Facial is a hydrating and non-irritating treatment</p>', '100.00', 'Hydro', 'https://squareup.com/appointments/buyer/widget/gobr17w1cbuyyw/RFSCRQJSQAYNW', '2_HYDRA-FACIAL-ADVANCE-SKIN-TREATMENT.jpg', 1, 1, '2018-10-27 06:12:09'),
(3, 'Red Carpet Facial', 1, 2, '<p>Thinking about what we can offer our clients to show them how important they are to us, we created a three-hour treatment that includes almost all anti-aging tools in our arsenal. Beginning with a complete cleansing and exfoliation with diamond peel, your skin specialist will perform a specialized lymphatic drainage massage. This is followed by a gentle non-surgical face lift that uses micro currents to restore elasticity, stimulate circulation and re-sculpt the facial structure. Finally, your skin is treated with a nourishing caviar facial mask, a mega-moisturizing treatment for the eyes and a curative LED light therapy. Throughout this age-defying treatment, you will receive a relaxing massage that includes a treatment for hands and feet.</p>', '250.00', 'Red', 'https://squareup.com/appointments/buyer/widget/83msnsj8ls2ysg/RFSCRQJSQAYNW', '3_RED-CARPET-FACIAL.jpg', 1, 1, '2018-10-27 07:12:09');

-- --------------------------------------------------------

--
-- Table structure for table `modals`
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
-- Dumping data for table `modals`
--

INSERT INTO `modals` (`id`, `title`, `user_id`, `category_id`, `description`, `image`, `is_featured`, `is_active`, `created_at`) VALUES
(2, 'modal home', 1, 1, 'as', 'POPUP.jpg', 1, 1, '2018-10-27 06:12:09');

-- --------------------------------------------------------

--
-- Table structure for table `permanents`
--

CREATE TABLE `permanents` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `description` text,
  `price` varchar(255) NOT NULL,
  `popup` varchar(255) NOT NULL,
  `button` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `is_featured` tinyint(1) NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `permanents`
--

INSERT INTO `permanents` (`id`, `title`, `user_id`, `category_id`, `description`, `price`, `popup`, `button`, `image`, `is_featured`, `is_active`, `created_at`) VALUES
(1, 'free Consultation Appointment', 1, 1, 'Let our skin experts help you choose the perfect treatment with your skin concern. Our first consultation is FREE, you will be receive a Complementary Facial.  <br><br> \n<b style=\"font-style: italic\">Let yourself, come, relax and enjoy with us!!</b>', 'free', 'modal', 'https://squareup.com/appointments/buyer/widget/fn59fks2x4upm1/RFSCRQJSQAYNW', '1_FREE-CONSULTATION.jpg', 1, 1, '2018-10-27 04:12:09'),
(2, 'Microblading Session', 1, 1, 'Microblading usually takes two appointments to complete. On the first appointment, the client is outlined and the eyebrows are drawn with a waterproof pencil, so that the artist and the client can agree on the appearance. The artist then cleans the eyebrows and the client is ready to return to the world. There are some mild scabs and further care is required, but your microblading must be completely cured in 30 days. <br><br>\nThe second appointment is a retouch at least 30 days after the first session. This allows enough time for the ink on the epidermis to naturally come off and the color to settle on the skin. At the touch-up appointment, the artist can see how his skin has received the ink and make the necessary corrections (included). <br><br>\nSometimes, the background tones of a client\'s skin may have unexpected effects on the color of the ink, and the artist may need to add color to adjust. This type of correction is normal with any microblading artist and an essential part of the process, since the skin of each person is different and receives the ink in a different way.', '350.00', 'Microblading', 'https://squareup.com/appointments/buyer/widget/4h9t68v24cvcx1/RFSCRQJSQAYNW', '2_MICROBLADING-SESSION.jpeg', 1, 1, '2018-10-27 06:12:09'),
(3, 'Microblading Touch up Session', 1, 2, 'Only with a Microblanding Session up to 30 days after the treatment. The client will need touched up approximately once a year to keep them, as the pigment is near the surface of the skin and is carried away much faster than with tattooed brows.', 'Free', 'Touch', 'https://squareup.com/appointments/buyer/widget/xnqsg41zmosk38/RFSCRQJSQAYNW', '3_MICROBLADING-TOUCH-UP-SESSION.jpg', 1, 1, '2018-10-27 07:12:09'),
(4, 'Microblading Semi annual touch up session', 1, 2, 'Services within 5-7 months after the Microblading Session. Each skin reacts differently, the client will need touched up approximately once or twice per year to keep them, as the pigment is near the surface of the skin and is carried away much faster than with tattooed brows.', '250.00', 'sannualT', 'https://squareup.com/appointments/buyer/widget/3lz54nbj5f0b8o/RFSCRQJSQAYNW', '4_MICROBLADING-SEMI-ANNUAL-TOUCH-UP-SESSION.jpg', 1, 1, '2018-10-27 09:12:09'),
(5, 'Microblading  annual touch up session', 1, 7, 'Services within 10-13 months after after the Microblading Session. Each skin reacts differently, the client will need touched up approximately once or twice per year to keep them, as the pigment is near the surface of the skin and is carried away much faster than with tattooed brows. ', '300.00', 'annualT', 'https://squareup.com/appointments/buyer/widget/5p4l6ctbwil33t/RFSCRQJSQAYNW', '5_MICROBLADING-ANNUAL-TOUCH-UP-SESSION.jpg', 1, 1, '2018-10-27 10:12:09');

-- --------------------------------------------------------

--
-- Table structure for table `publicacions`
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
-- Dumping data for table `publicacions`
--

INSERT INTO `publicacions` (`id`, `title`, `user_id`, `category_id`, `description`, `image`, `is_featured`, `is_active`, `created_at`) VALUES
(1, 'Sample blog post 1', 1, 1, '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '1specials.jpg', 1, 1, '2018-10-27 04:12:09'),
(2, 'Sample blog post 2', 1, 1, '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '2specials.jpg', 1, 1, '2018-10-27 06:12:09'),
(3, 'Sample blog post 3', 1, 2, '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '3specials.jpg', 0, 1, '2018-10-27 07:12:09'),
(4, 'Sample blog post 4', 1, 2, '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '4specials.jpg', 0, 1, '2018-10-27 09:12:09'),
(5, 'Sample blog post 5', 1, 7, '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '5specials.jpg', 1, 1, '2018-10-27 10:12:09'),
(6, 'Sample blog post 6', 1, 7, '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '6specials.jpg', 1, 1, '2018-10-27 12:12:09');

-- --------------------------------------------------------

--
-- Table structure for table `restoratives`
--

CREATE TABLE `restoratives` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `description` text,
  `price` varchar(255) NOT NULL,
  `popup` varchar(255) NOT NULL,
  `button` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `is_featured` tinyint(1) NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `restoratives`
--

INSERT INTO `restoratives` (`id`, `title`, `user_id`, `category_id`, `description`, `price`, `popup`, `button`, `image`, `is_featured`, `is_active`, `created_at`) VALUES
(1, 'Free Consultation Appointment', 1, 1, 'Let our skin experts help you choose the perfect treatment with your skin concern. Our first consultation is FREE, you will be receive a Complementary Facial.  <br><br> \n<b style=\"font-style: italic\">Let yourself, come, relax and enjoy with us!!</b>', 'Free', 'modal1', 'https://squareup.com/appointments/buyer/widget/tsk256flyspy2f/RFSCRQJSQAYNW', '1_FREE-CONSULTATION.jpg', 1, 1, '2018-10-27 04:12:09'),
(2, 'Eye Contour Regeneration', 1, 1, 'In our exclusive eye treatment, we use the best products that will improve the texture and vitality of your eye zone, will help you to soften lines, diminish dark circles, relieve congestion, and reduce puffiness, improves under eye bags, increase natural collagen and elastin, bring back firmness with a little help of micro current therapy, leaving the delicate eye area feeling refreshed and toned. It ends with a special hydro Jelly eye mask. <br><br>\nEach treatment performed requires at-home care to see better results in the short term. The use of sunscreen is important to prevent damage to the skin.', '30.00', 'Eye', 'https://squareup.com/appointments/buyer/widget/e5ofw9y8roub2s/RFSCRQJSQAYNW', '2_EYE-CONTOUR-REGENERATION.jpg', 1, 1, '2018-10-27 06:12:09'),
(3, 'Detox With A Deep Exfoliating Facial', 1, 2, 'Our detoxifying facial encourages the skin to purge, detoxify and cleanse while purifying. This spa treatment is designed to soften the skin. Rescue your congested and dull skin while defending it from impurities that clog pores. Our facial detoxifies and cleanses while it purifies and reconstructs the texture of the skin. It is for problematic and acne conditions that end with our anti-inflammatory and anti-irritant mask of azulene.', '80.00', 'Detox', 'https://squareup.com/appointments/buyer/widget/ye9apou4ldb71l/RFSCRQJSQAYNW', '3_DETOX-WITH-A-DEEP-EXFOLIATING-FACIAL.jpg', 1, 1, '2018-10-27 07:12:09'),
(4, 'Skin Smooth, Firm And Lift Treatment', 1, 2, 'Improve the tone and firmness of the skin through a cosmetic \"Lifting Effect\" with herbal lotions and Hydrolyzed Silk Proteins as our protocol products. We also add an ultrasound therapy to deepen the layers of the skin and stimulate the fibroblast who is in charge of the production of collagen. Our goal with this treatment is to restore the levels of hydration and nutrition that result in skin that looks and feels like silk and returns to the skin its optimal firmness by the action of proteins in the skin fibers. It helps to diminish the appearance of wrinkles better called fine lines. If you have all those signs ... This is your treatment! <br><br>\nEach treatment performed requires at-home care to see better results in the short term. The use of sunscreen is important to prevent damage to the skin.', '90.00', 'Skin', 'https://squareup.com/appointments/buyer/widget/p546b47fhpisa4/RFSCRQJSQAYNW', '4_SKIN-SMOOTH-FIRM-AND-LIFT-TREATMENT.jpg', 1, 1, '2018-10-27 09:12:09'),
(5, 'Recovery Boost', 1, 7, 'Our Ultra Hydrating Recovery Boost is a skin fit Treatment that is directed to skins that are opaque, without radiance with unhealthy look and dehydrated. In Vali Skincare & Makeup we want to share with you our formulated treatment beginning with our special enzymes Freeze-Dried Peel followed by a Hyaluronic Acid splash, in a small amount of time you will be enjoying a relaxing aromatherapy with calming essences ending with a Led Therapy to calm and restore your skin applying also a Marine Collagen Mask. <br><br>\nEach treatment performed requires at-home care to see better results in the short term. The use of sunscreen is important to prevent damage to the skin.', '100.00', 'Recovery', 'https://squareup.com/appointments/buyer/widget/20hly0ynmgyxp5/RFSCRQJSQAYNW', '5_RECOVERY-BOOST.jpg', 1, 1, '2018-10-27 10:12:09'),
(6, 'Rejuv Radiant Restoration Treatment With Hyaluronic Acid', 1, 0, '<p>Designed to restore skin moisture by increasing hydration and nutrition. This amazing complex (Hyaluronic Acid) occurs naturally in the body and has a thousand times its weight in water. The rejuvenating complex helps to smooth out wrinkles and fine lines and also helps to minimize the appearance of enlarged pores, helps with the texture of the skin and diminishes the appearance of dry, scaly skin and reveals a smoother, fuller complexion, ending this favorable treatment with a radiant collagen Mask. &nbsp;</p><p>Each treatment performed requires at-home care to see better results in the short term. The use of sunscreen is important to prevent damage to the skin.</p>', '100.00', 'Rejuv', 'https://squareup.com/appointments/buyer/widget/ke29cck771d41k/RFSCRQJSQAYNW', '6_REJUV-RADIANT-RESTORATION-TREATMENT-WITH-HYALURONIC-ACID4.jpg', 1, 1, '2019-07-28 19:18:01'),
(7, 'Firming Marine Elastin Treatment', 1, 0, '<p>Special treatment in which impurities are removed, softens the texture of the skin, makes the circulation run and remineralizes with this luxurious body exfoliation of algae your face. Using only the best and most of the world\'s mineral-rich algae, your skin replicates better, rejuvenated, hydrated and softer.&nbsp;</p><p>Each treatment performed requires at-home care to see better results in the short term. The use of sunscreen is important to prevent damage to the skin.</p>', '140.00', 'Firming', 'https://squareup.com/appointments/buyer/widget/noanptfasaz8ps/RFSCRQJSQAYNW', '7_FIRMING-MARINE-ELASTIN-TREATMENT1.jpg', 1, 1, '2019-07-28 19:18:46'),
(8, 'Luminous And Oxygenated Skin With Vitamin “C”', 1, 0, '<p>This treatment brightens the skin, while stimulating collagen production. Good for strengthening elasticity and reducing lines, wrinkles, mottled texture and age spots.</p><p>The skin is treated with a powerful Vitamin C cocktail that is comprised of only the highest quality ingredients and penetrates the skin in high concentrations. At the end of the treatment, we will apply a special CO2 Mask that will help you to moisturize by giving you a lifting effect, whitening, pore reduction and more...Your skin will glow after this amazing facial and with a continued treatment, you will notice a dramatic improvement.&nbsp;</p><p>Each treatment performed requires at-home care to see better results in the short term. The use of sunscreen is important to prevent damage to the skin</p><p><br></p>', '$120.00', 'Luminous', 'https://squareup.com/appointments/buyer/widget/8j0jlrcgnncv5o/RFSCRQJSQAYNW', '8_LUMINOUS-AND-OXYGENATED-SKIN-WITH-VITAMIN-C.jpg', 1, 1, '2019-07-28 19:19:30'),
(9, 'Micro Pore Deep Treatment', 1, 0, '<p>If you want to experience lighter skin, smaller visible pores, and make your complexion look beautiful and matte, we can help you. The objective of this exclusive treatment is to eliminate all the impurities and the balance of the skin. Starting with our unique Vali Skincare &amp; Makeup facial, we continue with the application of Bio\'Active Serums, and the products that are exclusive to our spa and will help the skin reduce oil production, working to visibly refine pores and illuminate the complexion.&nbsp;</p><p>Each treatment performed requires at-home care to see better results in the short term. The use of sunscreen is important to prevent damage to the skin.</p>', '120.00', 'Micro', 'https://squareup.com/appointments/buyer/widget/38qfyagtjxwv9z/RFSCRQJSQAYNW', '9_MICRO-PORE-DEEP-TREATMENT.jpeg', 1, 1, '2019-07-28 19:20:11'),
(10, 'Repair And Redefine Skin Texture With Microneedling', 1, 0, '<p>Wonderful and complete treatment in which we offer a safe technique that detonates the regeneration of the skin avoiding invasive methods. It greatly increases and stimulates the production of collagen due to said detonation in the natural mechanism of self-repair of the skin. The results are visible from the first session, superior to those made with other treatments due to the stimulation of the structures that hold and give smoothness to the skin.</p><p><strong>BENEFITS</strong></p><p>&lt;ul &gt;</p><p>&nbsp; &nbsp; &lt;li&gt;Annealing of acne scars&lt;/li&gt;</p><p>&lt;li&gt;Enlargement of enlarged pores&lt;/li&gt;</p><p>&lt;li&gt;Scarring from burns&lt;/li&gt;</p><p>&lt;li&gt;Absorption of hyperpigmentation or uneven skin tone&lt;/li&gt;</p><p>&lt;li&gt;Alleviation of wrinkles&lt;/li&gt;</p><p>&lt;li&gt;Fight and improve skin flaccidity&lt;/li&gt;</p><p>&lt;li&gt;Gives a smooth texture to the skin&lt;/li&gt;</p><p>&lt;li&gt;Adjusts and disguises stretch marks&lt;/li&gt;</p><p>&lt;li&gt;Facial rejuvenation&lt;/li&gt;</p><p>&lt;li&gt;It is good for hair loss&lt;/li&gt;</p><p>&lt;/ul&gt;</p><p>Each treatment performed requires at-home care to see better results in the short term. The use of sunscreen is important to prevent damage to the skin.</p>', '140.00', 'Repair', 'https://squareup.com/appointments/buyer/widget/3ii2aldgv29j0u/RFSCRQJSQAYNW', '10_REPAIR-AND-REDEFINE-SKIN-TEXTURE-WITH-MICRONEEDLING.jpg', 1, 1, '2019-07-28 19:21:11'),
(11, 'Repair And Redefine Skincare Microneedling Package – 6 Sessions', 1, 0, '<p>For amazing results we recommend a minimum of 6 sessions due to the stimulation of the structures that hold and give smoothness to the skin.&nbsp;</p><p>Complete treatment in which we offer a safe technique that detonates the regeneration of the skin avoiding invasive methods. It greatly increases and stimulates the production of collagen due to said detonation in the natural mechanism of self-repair of the skin. The results are visible from the first session; for this reason.&nbsp;</p><p>Remember that after a treatment with microneedling, you should avoid sunlight for a few weeks. We recommend to include in your facial care routine the cleanser, tonic, moisturizer and sunscreen for the treatment of 4 steps twice a day (consult your specialist for recommendations).</p>', '500.00', 'Repair2', 'https://squareup.com/appointments/buyer/widget/kwr54uomt4yqat/RFSCRQJSQAYNW', '11_REPAIR-AND-REDEFINE-SKINCARE-MICRONEEDLING-PACKAGE-6-SESSIONS.jpg', 1, 1, '2019-07-28 19:21:49'),
(12, 'Hydra Facial Treatment With Phototherapy', 1, 0, '<p>The Hydra Facial treatment is the newest advance in non-laser skin resurfacing. Hydra Facial is the only hydrodermabrasive procedure that combines cleansing, exfoliation, extraction, hydration and antioxidant protection simultaneously, resulting in clearer, more beautiful skin with no discomfort or downtime. The treatment is soothing, moisturizing, non-invasive and non-irritating. Hydration is the foundation of healthy, radiant skin. Irritation of the skin has been proven to increase signs of aging. The Hydra Facial treatment improves the appearance of fine lines, wrinkles, congested and enlarged pores, oily or acne-prone skin, hyperpigmentation and brown spots. &nbsp;</p><p>The Hydra Facial procedure is suitable for most skin types, including thin or aging skin, ethnic skin, and dry skin or oily skin. Start your skin maintenance program now with Hydra Facial to slow down your skin\'s aging process and delay the need for invasive procedures.&nbsp;</p><p>Hydra Facial’s versatility makes it the go-to treatment for a number of skin conditions because even patients with sensitive skin can tolerate the procedure, just about everyone is a good candidate for the Hydra Facial treatment. Various serums are available, and your treatment can be customized to meet specific needs.</p><p>Skin conditions that can be alleviated by a Hydra Facial procedure include:&nbsp;</p><p>&lt;ul&gt;</p><p>&nbsp; &nbsp; &lt;li&gt;Uneven texture&lt;/li&gt;</p><p>&lt;li&gt;Oily, congested skin that’s prone to acne&lt;/li&gt;</p><p>&lt;li&gt;Dry skin by removing dead skin cells and providing hydration&lt;/li&gt;</p><p>&lt;/ul&gt;</p><p>A Hydra Facial treatment firms and tones the skin, improving its texture and the skin’s overall health.</p><p>Our team can customize your treatment to target your precise concerns. To end the treatment, we close it with an add on 20 min customized phototherapy depending on your skin’s need.&nbsp;</p>', '150.00', 'Hydra', 'https://squareup.com/appointments/buyer/widget/xw5carh9n1kvg6/RFSCRQJSQAYNW', '12_HYDRA-FACIAL-TREATMENT-WITH-PHOTOTHERAPY.jpg', 1, 1, '2019-07-28 19:23:00');

-- --------------------------------------------------------

--
-- Table structure for table `sculptings`
--

CREATE TABLE `sculptings` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `description` text,
  `price` varchar(255) NOT NULL,
  `popup` varchar(255) NOT NULL,
  `button` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `is_featured` tinyint(1) NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sculptings`
--

INSERT INTO `sculptings` (`id`, `title`, `user_id`, `category_id`, `description`, `price`, `popup`, `button`, `image`, `is_featured`, `is_active`, `created_at`) VALUES
(1, 'Free Consultation Appointment ', 1, 1, 'Let our skin experts help you choose the perfect treatment with your skin concern. Our first consultation is FREE, you will be receive a Complementary Facial.  <br><br> \n<b style=\"font-style: italic\">Let yourself, come, relax and enjoy with us!!</b>', 'Free', 'modal', 'https://squareup.com/appointments/buyer/widget/ykox318pcrvxoz/RFSCRQJSQAYNW', '1_FREE-CONSULTATION.jpg', 1, 1, '2018-10-27 04:12:09'),
(2, 'Cavitation Treatment', 1, 1, 'Cavitation is a new, non-surgical and non-invasive fat removal procedure. Because there is no surgery and no anesthesia, there is no hospital stay, no time off from work and no recovery time. Clients see immediate results and will continue to see results in the reduction of fat up to 72 hours following the treatment. The most common problem areas are the buttocks, abdomen, love handles, male chest, upper arms, inner thighs and the chin area. It is especially effective in the removal of cellulite. Cavitation is the perfect treatment for people who want to contour their bodies and regain their confidence and figure. Most clients see an immediate change in their appearance after the first session, with optimum results after 4 to 8 sessions. <br><br>\n\nCavitation is a method of liposuction. Cavitation destroys fat cells by using low frequency sound waves. Once the fat cell is destroyed, the fat is discharged between the cells where they are turned into protein and then changed to free fatty acids and glycerol. Free fatty acids are moved to the liver where they decay and are removed from the body while glycerol is used as energy.', '70.00', 'Cavitation', 'https://squareup.com/appointments/buyer/widget/q3b1nd2mm7deun/RFSCRQJSQAYNW', '2_CAVITATION-TREATMENT.jpg', 1, 1, '2018-10-27 06:12:09'),
(3, 'Radio frequency treatment', 1, 2, 'Radiofrequency is currently the best available technology for non-invasive, non-surgical skin tightening and cellulite removal. Radiofrequency treatments are used in aesthetics as a way to deliver intense heat to tissues deeper than the epidermis (the outermost layer of the skin), with the aim to boost collagen production, circulation and (optionally, depending on treatment depth) fat release from those tissues.\nRadiofrequency is based on the fact that very high frequency electrical currents (300kHz-40MHz) penetrate the superficial layers of the skin without heating them, only heating selected tissues, such as the dermis, the middle skin layer where collagen-producing cells are located, and hypodermis, deepest skin layer where big collagen structures and fat tissue are located. <br><br>\nWith a deep radiofrequency treatment, skin looseness and cellulite can be treated at the same time for smoother, slimmer firmer skin with one treatment. The essence of a radiofrequency procedure is to provide a deep, focused action where it matters without causing irritation, redness and burns which can occur when the surface of the skin is affected. <br><br>\nThe treatment gives you tight, rejuvenated, and invigorated skin on both the surface, and in the deeper subcutaneous layers. The overall effect of the therapy is supported by the stimulation of collagen fibers, the “building blocks” of the skin. The better the condition of these fibers, the younger your skin will look. <br><br>\nThe thinner fat layer, combined with a stronger more pronounced skin layer, leads to circumference reduction and improves appearance of cellulite, resulting in smoother, firmer, and more radiant skin. <br><br>\nAfter every treatment session, you will see a noticeable change in your skin\'s appearance. With the completion of the full treatment course you will enjoy long lasting body contouring and tightening. <br><br>\nA pleasant, warm sensation is felt while the RF beams generate the therapeutic action that stimulates the fat and dermis layers. The RF energy transmitted into the fat layers forces the fat cells to release liquid fat, causing them to shrink and contract. Simultaneously, dermal activity stimulates the skin’s fibroblasts to increase collagen replenishment to strengthen and rejuvenate skin for a smoother, tighter, more contoured appearance. <br><br>\n\nEach person requires a different number of times but the average is between 8 and 12. This is the number of sessions you will need and is indicative. They can be less and also more. Less than 6 does not usually reproduce a continuity so that the effects are maintained over time. It is one session per week, so for the price of body radiofrequency you will be 2 or 3 months', '70.00', 'Radio', 'https://squareup.com/appointments/buyer/widget/okceve8y2z5yca/RFSCRQJSQAYNW', '3_RADIO-FREQUENCY-TREATMENT.jpg', 1, 1, '2018-10-27 07:12:09'),
(4, 'Vacuum therapy', 1, 2, 'Tired of the dimples, lumps and excess fat deposits? It’s time to say good bye to that disgusting fats with the Vacuum Therapy.  <br><br>\nVacuum Therapy eliminates fat + smooth and firms the skin. The treatment combines the ancient art of cupping with negative pressure to assist in eliminating fat, waste, toxins and excess fluids from your body. Vacuum Therapy is a non-invasive scientifically researched treatment, certified by Quality Standards like CE and FDA. It offers an effective solution to fight cellulite in all its stages, reduces localized fat and reshapes the body. <br><br>\nVacuum Therapy is great as a stand-alone treatment for cellulite, reduces fluid retention, improves skin texture, increases lymphatic circulation, reduces muscle tension, body reshape and for reducing small deposits of fat. The treatment leaves your skin immediately smoother and firmer.  <br><br>\nThe Cellulite Vacuum therapy system uses suction and power driven rollers to manipulate and massage the tissues in problem cellulite areas. This new system of Vacuum Therapy uses a high-revolution axial turbine (15,000 rpm) instead of the well-known vacuum pump used in other vacuum treatments.  This turbine produces a continuous suction at a constant flow, which prevents the skin and tissues from being damaged thus, it is possible to achieve better results in fewer sessions. <br><br>\nThe roller head, with a revolving coupling, has low friction rollers which slide in a linear and perpendicular way so that the therapist can exert the right pressure according to each patient’s treatment requirements. The combination of the rollers with the suction mobilizes the different skin tissues and stimulates micro-circulation, which generates lymphatic drainage to eliminate fluids accumulated in the areas that have been treated therefore, facilitating the elimination of toxins. <br><br>\nIn addition, the innovative light therapy (Dermoleds) activates the cell receptors producing and stimulating collagen and elastin. In this way, the skin\'s elasticity is stimulated, giving it a smooth and youthful appearance.\n<br><br>\n<center>\n    WHAT RESULTS CAN I EXPECT TO SEE?\n</center>\n<ul>\n         <li>Reduced excess fat deposit in hips, tights and buttocks.</li>\n<li>Improved blood circulation</li>\n<li>Relaxed Muscle Tension</li>\n<li>Increased lymph circulation and elimination of toxins</li>\n<li>Improved skin tightness, firmness and elasticity</li>\n     </ul>', '70.00', 'Vacuum', 'https://squareup.com/appointments/buyer/widget/rmhqgwu006v7i6/RFSCRQJSQAYNW', '4_VACUUM-THERAPY.jpg', 1, 1, '2018-10-27 09:12:09'),
(5, 'Body sculpting package treatment (RF + cavitation + vacuum) - 6 sessions', 1, 7, 'We customize your sessions depending of the areas you want sculpt, we use a sort of therapies that will help your skin look better. <br><br>\nThis treatment has numerous uses, some of the most common are:\n\n</p>\n     <ul>\n         <li>Reducing pockets of stubborn fat</li>\n<li>Improving the look and texture of stretch marks and scars</li>\n<li>Lifting the skin on the face and neck to give a non-invasive and natural looking facelift</li>\n<li>Targeting areas of cellulite</li>\n\n     </ul>\n     <p><b>Cavitation</b> <br>\nUltrasonic Cavitation is a sound wave which has been designed to target fat cells, it penetrates through your bodies skin layers and destroys the fat cells with up to 1 million vibrations per second, this causes the cell to expand because tiny bubbles of oxygen are formed within the cell which causes internal pressure in the cell which in turn then causes it to disperse its contents into the body. <br><br>\n<b>Radio Frequency and Vacuum Suction</b>  <br>\nThe Radio Frequency part of the treatment is designed to clean up the content left in the body from the ultrasonic cavitation treatment. this is done by increasing the body temperature which causes capillary dilation enabling a faster, more efficient blood circulation, the vacuum then causes better blood to fat exchange, then the fat enriched blood is circulated and processed through your liver, which cleans your blood whilst removing the fat, Radio Frequency also has the ability to shrink loose skin and repair collagen /Elastin in the skin', '350.00', 'modal4', 'https://squareup.com/appointments/buyer/widget/ze2ji5uj3odo1g/RFSCRQJSQAYNW', '5_BODY-SCULPTING-PACKAGE-TREATMENT-RF-CAVITATION-VACUUM-6-SESSIONS.jpg', 1, 1, '2018-10-27 10:12:09');

-- --------------------------------------------------------

--
-- Table structure for table `specialfs`
--

CREATE TABLE `specialfs` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `description` text,
  `price` varchar(255) NOT NULL,
  `popup` varchar(255) NOT NULL,
  `button` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `is_featured` tinyint(1) NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `specialfs`
--

INSERT INTO `specialfs` (`id`, `title`, `user_id`, `category_id`, `description`, `price`, `popup`, `button`, `image`, `is_featured`, `is_active`, `created_at`) VALUES
(1, 'Free Consultation Appointment ', 1, 1, '<p>Let our skin experts help you choose the perfect treatment with your skin concern. Our first consultation is FREE, you will be receive a Complementary Facial.&nbsp;</p><p><strong><em>Let yourself, come, relax and enjoy with us!!</em></strong></p>', 'Free', 'modal', 'https://squareup.com/appointments/buyer/widget/w3jb3vgpxj8twc/RFSCRQJSQAYNW', '1_FREE-CONSULTATION.jpg', 1, 1, '2018-10-27 04:12:09'),
(2, 'Express Facial', 1, 1, '<p>Vali Skincare &amp; Makeup combine the power of plants and fruits with modern science to create a prescription facial to balance the skin. Dry, oily, aged, uneven, sensitive and acne qualify if the skin conditions are addressed with this good treatment. It only takes five steps (clean, exfoliate, mask, moisturize and protect) to make your skin look radiant.</p>', '60.00', 'Express', 'https://squareup.com/appointments/buyer/widget/8lgg8b9x5u5gz7/RFSCRQJSQAYNW', '2_EXPRESS-FACIAL.jpg', 1, 1, '2018-10-27 06:12:09'),
(3, 'Mini Facial With Hydro Jelly Mask', 1, 2, '<p>eautiful skin starts here, We add to Special Natural Hydro Jelly Mask enriched with antioxidants and moisturizing properties that you will love. It only takes five steps (clean, exfoliate, mask, moisturize and protect) to give your skin a radiant look.&nbsp;</p><p>Vali Skincare &amp; Makeup combine the power of plants and fruits with modern science to create a prescript facial to balance the skin. Dry, oily, aged, uneven, sensitive and acne qualify if the skin conditions are addressed with this good treatment.&nbsp;</p><p>Each treatment performed requires at-home care to see better results in the short term. The use of sunscreen is important to prevent damage to the skin.</p>', '70.00', 'Mini', 'https://squareup.com/appointments/buyer/widget/80c9n37s9z7e7o/RFSCRQJSQAYNW', '3_MINI-FACIAL-WITH-HYDRO-JELLY-MASK.jpg', 1, 1, '2018-10-27 07:12:09'),
(4, 'Gentleman Facial', 1, 2, '<p>The gentleman\'s facial is designed for the specific needs of a man\'s skin care. The treatment begins with a deep cleaning, followed by a special exfoliating exfoliation of apricot seeds and extraction. To replenish the skin, the facial concludes with a fresh and soothing algae mask that is used to balance and moisturize the skin and also helps to alleviate the irritation that occurs in the skin after shaving.</p>', '70.00', 'Gentleman', 'https://squareup.com/appointments/buyer/widget/m3wm3hzou5nuei/RFSCRQJSQAYNW', '4_GENTLEMAN-FACIAL.jpg', 1, 1, '2018-10-27 09:12:09'),
(5, '911 Teen Treatment', 1, 7, '<p>We create a special treatment thinking in our special teens with a selection of products just for their needs including the hormonal changes, there are recharged of non aggressive principal actives like Papaya, strawberry, Hyaluronic Acid, Lemon and lime that will help their skin feel more heal, smooth, hydrated, brightened and will be more confident with the appearance of it.</p><p>Acne is a skin condition that causes clogged pores, pimples and, in more severe cases, inflamed patches of skin and painful cysts. These can appear on the face, neck, chest, shoulders, back and upper arms.&nbsp;</p><p>Acne occurs when the pores on the surface of the skin become clogged with an accumulation of oil (sebum) produced by the glands in the hair follicles with a mixture of dirt, dead skin cells and bacteria. Acne most often begins at puberty as teenagers experience hormonal changes that can cause their skin to produce more oil. We will start with an analysis of the skin to prepare a personalized treatment. We will create a customized treatment that will variety weekly with high frequency, extractions with steamer, exfoliants with enzymes, microdermabrasion, and more, according to the criteria of your specialist.&nbsp;</p><p>If you want to see the better results, a package of at least 6 sessions (1 per week) is recommended.</p>', '80.00', 'modal4', 'https://squareup.com/appointments/buyer/widget/x9545trt1ihkzk/RFSCRQJSQAYNW', '5_911-TEEN-TREATMENT.jpg', 1, 1, '2018-10-27 10:12:09'),
(6, '911 Teen Package – 6 Sessions', 1, 0, '<p>Emergency treatment for acne.&nbsp;</p><p>To obtain an amazing result we offer a package of our special treatment for teens with a selection of products just for their needs including the hormonal changes, there are recharged of non aggressive principal actives like Papaya, strawberry, Hyaluronic Acid, Lemon and lime that will help their skin feel more heal, smooth, hydrated, brightened and will be more confident with the appearance of it.</p><p>Acne is a skin condition that causes clogged pores, pimples and, in more severe cases, inflamed patches of skin and painful cysts. These can appear on the face, neck, chest, shoulders, back and upper arms.&nbsp;</p><p>Acne occurs when the pores on the surface of the skin become clogged with an accumulation of oil (sebum) produced by the glands in the hair follicles with a mixture of dirt, dead skin cells and bacteria. Acne most often begins at puberty as teenagers experience hormonal changes that can cause their skin to produce more oil. We will start with an analysis of the skin to prepare a personalized treatment. We will create a customized treatment that will variety weekly with high frequency, extractions with steamer, exfoliants with enzymes, microdermabrasion, and more, according to the criteria of your specialist.&nbsp;</p><p>If you want to see the better results, a package of at least 6 sessions (1 per week) is recommended.</p>', '400.00', '911t', 'https://squareup.com/appointments/buyer/widget/ruschl3cuo8yj1/RFSCRQJSQAYNW', '6_911-TEEN-PACKAGE–6-SESSIONS.jpg', 1, 1, '2019-07-28 18:33:37'),
(7, 'Back Facial', 1, 0, '<p>A special facial to pamper your back. Designed to treat spots and buds. It includes a deep cleansing exfoliation and detoxification, which leaves you fresh and hydrated, includes a personalized mask and aromatherapy.</p>', '80.00', 'Back', 'https://squareup.com/appointments/buyer/widget/uu5phrrzhgmkqd/RFSCRQJSQAYNW', '7_BACK-FACIAL.jpg', 1, 1, '2019-07-28 18:34:13'),
(8, 'Led Facial Therapy', 1, 0, '<p>This special facial begins with a fabulous cleanse, then a gentle exfoliation is needed that adds the properties of the fruit to stimulate the hydration of the skin; the next step is a moisturizer to prepare the skin for therapy with LED. We add harnesses to the specific wavelengths in the LED light to soothe outbreaks and inflammation, making it ideal for those with skin prone to acne and redness. A single treatment can improve both, but for severe outbreaks, it can take more than three sessions to notice a dramatic reduction. Each LED wavelength (color) of light provides unique therapeutic benefits.&nbsp;</p><p><strong>Red Light:&nbsp;</strong>Complementary photo-aging treatment. Increases the growth factor of fibroblasts in macrophage cells.</p><p><strong>Amber Light:</strong> Healing acceleration. Increases lymphatic flow to eliminate waste and stimulate cell growth and healing.</p><p><strong>Green Light:&nbsp;</strong>Adjuvant treatment of hyperpigmentation. Illuminates the skin and reduces inflammation.</p><p><strong>Blue Light:&nbsp;</strong>Complementary Treatment of Acne. Propionibacterium responds to blue light, reducing acne inflammation.</p><p>We finish this treatment with a super hydrated mask to give your skin a bright and nourishing.</p>', '90.00', 'Ledf', 'https://squareup.com/appointments/buyer/widget/3skhnz2xq3waft/RFSCRQJSQAYNW', '8_LED-LIGHT-THERAPY-FOR-ACNE.jpg', 1, 1, '2019-07-28 18:35:59'),
(9, 'Lymphatic Drainage Facial', 1, 0, '<p>Lymphatic massage is a fantastic treatment which has been around for many years, and its multiple benefits are always widely documented . The lymphatic massage of the face and decollete area can be highly effective due to its ability to prevent sluggish circulation and remove unwanted toxins. This reduces puffiness and keeps our complexion healthy.&nbsp;</p><p>&nbsp;Here are the 6 key benefits of a lymphatic facial massage.&nbsp;</p><p style=\"margin-left: 20px;\">Deep cleanse</p><p style=\"margin-left: 20px;\">Accelerated healing</p><p style=\"margin-left: 20px;\">Reduced puffiness</p><p style=\"margin-left: 20px;\">Congestion free skin&nbsp;</p><p style=\"margin-left: 20px;\">Reduction of scar tissue</p><p style=\"margin-left: 20px;\">Promotes the feeling of relaxation and wellbeing</p><p>Come and enjoy a complete and effective service starting with a mini facial, followed by constant drains applying oxygenating products that repair damaged cells hydrating and deep moisturizing your face. It eliminates fine wrinkles and smoothest lines of expression improves circulation, culminates giving that firmness that we want for the properties of moisturizers that we use among others hyaluronic acid yerba mate, the hydrolyzed protein of peptide-rich silk, helping to regenerate mature skin thus achieving a youthful appearance. Come enjoy it and we will be happy to assist you.</p>', '90.00', 'Lymphatic', 'https://squareup.com/appointments/buyer/widget/omz6mg2bqh7bh7/RFSCRQJSQAYNW', '9_LYMPHATIC-DRAINAGE-FACIAL.jpg', 1, 1, '2019-07-28 18:38:12');

-- --------------------------------------------------------

--
-- Table structure for table `specialts`
--

CREATE TABLE `specialts` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `description` text,
  `price` varchar(255) NOT NULL,
  `popup` varchar(255) NOT NULL,
  `button` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `is_featured` tinyint(1) NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `specialts`
--

INSERT INTO `specialts` (`id`, `title`, `user_id`, `category_id`, `description`, `price`, `popup`, `button`, `image`, `is_featured`, `is_active`, `created_at`) VALUES
(1, 'free Consultation Appointment ', 1, 1, '<p>Let our skin experts help you choose the perfect treatment with your skin concern. Our first consultation is FREE, you will be receive a Complementary Facial.  <br><br> \n<b style=\"font-style: italic\">Let yourself, come, relax and enjoy with us!!</b>', 'Free', 'modal', 'https://squareup.com/appointments/buyer/widget/zec4v7j1ie9cht/RFSCRQJSQAYNW', '1_FREE-CONSULTATION.jpg', 1, 1, '2018-10-27 04:12:09'),
(2, 'Bb glow treatment - 1 session', 1, 1, 'The BB Glow treatment is a safe and intensive treatment for the skin that can help reduce the appearance of freckles and help to lighten the skin. It also helps with the discoloration of the skin caused by the photoaging of acne or age spots and the production of collagen by the use of nanotechnology with the microneedling technique. With this treatment, your skin can look shiny, soft and radiant without using foundation. <br><br>\n\nKeep in mind that with one session of the BB Glow Treatment you will not see drastic changes. For better results we recommend a treatment of 4 sessions. Ask your specialist what is best for your type of skin.', '150.00', 'glow', 'https://squareup.com/appointments/buyer/widget/eketirzns7jkmk/RFSCRQJSQAYNW', '2_BB-GLOW-TREATMENT–1-SESSIONS.jpg', 1, 1, '2018-10-27 06:12:09'),
(3, 'Bb glow treatment - 4 sessions', 1, 2, 'Perfect package to reach real changes. The BB Glow treatment is a safe and intensive treatment for the skin that can help reduce the appearance of freckles and help to lighten the skin. It also helps with the discoloration of the skin caused by the photoaging of acne or age spots and the production of collagen by the use of nanotechnology with the microneedling technique. With this treatment, your skin can look shiny, soft and radiant without using foundation.', '480.00', 'glow4', 'https://squareup.com/appointments/buyer/widget/okwk3cnnuz6vu1/RFSCRQJSQAYNW', '3_BB-GLOW-TREATMENT–4-SESSIONS.jpg', 1, 1, '2018-10-27 07:12:09'),
(4, 'Under eye camouflage treatment', 1, 2, 'Skin Camouflage: (Use tattoo techniques to hide or mix the scars to make them less visible). Dark circles are a famous enemy of beauty. This dark shading around the eyes appears in both men and women thus affecting their self-esteem. Dark circles are a product of poor sleep, fatigue, alcohol consumption, cigar. \n<br><br>\nThe dark circles have no cure but can be mitigated with special care with bleaching, creams, laser treatments or camouflage with tattoo. The solution for each case is defined with a Dermatologist because it is necessary to check the origin of these imperfections to find the best treatment. <br><br>\n\nThe less severe and less marked cases are treated with whitening creams based on vitamins, however, the most severe and most marked cases are reduced with laser treatments and / or procedure of dark circles for skin treatment. In Vali skincare and makeup we offer you this magnificent treatment working in the area and helping to blur the dark circles. If we consider that your eyes can be treated with other procedures to help clarify it without using the ink, your specialist will inform you and will present you other option like our <br><br> \n<center>MAGIC ENLIGHTENMENT TREATMENT.</center>', '300.00', 'under', 'https://squareup.com/appointments/buyer/widget/iqx4xb3jitd1c/RFSCRQJSQAYNW', '4_UNDER-EYE-CAMOUFLAGE-TREATMENT.jpg', 1, 1, '2018-10-27 09:12:09'),
(5, 'Magic Enlightenment', 1, 7, 'Magic Enlightenment treatment is different from camouflage but works in the same way, because we use the same techniques to work the area, thus improving the appearance of dark circles without using inks. In the procedure, a cocktail is used based on different sera and vitamins that help address the hyperpigmentation due to damage caused by the sun, lines of expression, wrinkles and hormonal acne thus giving a clear and healthy shine to the area to be treated.', '300.00', 'magic', 'https://squareup.com/appointments/buyer/widget/rfwn0mruo26lv8/RFSCRQJSQAYNW', '5_MAGIC-ENLIGHTMENT.jpg', 1, 1, '2018-10-27 10:12:09'),
(6, 'The Hair Loss Treatment with Microneedles', 1, 0, 'Microneedle is a method that creates transdermal microchannels across the stratum corneum barrier layer of skin. No previous study showed a therapeutic effect of microneedle itself on hair growth by wounding. microneedling may also be a method of treatment for hair loss. There\'s even evidence that it can help hereditary hair loss, also known as alopecia. The Micro needling  Pen creates micro-injury to the scalp, which is a catalyst for the body\'s natural healing response, That response instigates collagen production — which in turn stimulates hair growth. We use many different and special products to stimulate hair growth ,strengthening hair follicles, leading to stronger, thicker strands. We offer an intensive 1 per weeks treatment to stimulate endothelial growth factor production for follicle and hair growth.', '130.00', 'Hair', 'https://squareup.com/appointments/buyer/widget/udji3u1ds9x09/RFSCRQJSQAYNW', '6_The-Hair-Loss-Treatment-with-Microneedles.jpg', 1, 1, '2019-07-28 02:44:53'),
(7, 'Stretch Marks Camouflage Treatment (Tatoo) Belly, Arm, Hips, Buttocks, Legs, Waist, Chest', 1, 0, 'Skin Camouflage … Use tattoo techniques to hide or mix the scars to make them less visible. For scars 1 year (+): All scars should be evaluated before treatment to determine what treatment is recommended, and if you are a candidate for scar treatment. Patch tests may be required for sensitivity and color prior to procedures. <br><br>\nThe camouflage of the scar is an exciting alternative treatment that works directly on the damaged skin, relaxing and smoothing the scars, as well as reducing stretch marks. Essentially, this treatment brings new life to damaged skin and by using a digital tattoo machine, this can be done in a very fast and accurate manner. When pigment is used, skin tone colors are the options. <br><br>\nThe complete basis of this type of tattoo technique is to slide the groups of needles through the very surface of the skin to add a slight dispersion of skin tone color to camouflage the stain. <br><br>\nThis is not a new service for the market, it was invented by tattoo artists more than 30 years ago.\nScar Camouflage works in the specific areas of the affected skin, that is, in each stretch mark or only in the scar. The areas that are not affected are not treated. It can be used on all skin colors, with only dark skins being used with caution as they are prone to hyperpigmentation. <br><br>\nYou can see an improvement of 20-50% in only ONE SESSION, with 3 recommended sessions to obtain the best results.\nWe will need you send us pictures of the treating area before your appointment to  decide which treatment is better for you.', '250.00', 'Stretch', 'https://squareup.com/appointments/buyer/widget/6epd5st8h2suie/RFSCRQJSQAYNW', '7_STRETCH-MARKS-CAMOUFLAGE-TREATMENT-Tattoo.jpg', 1, 1, '2019-07-28 02:45:54');

-- --------------------------------------------------------

--
-- Table structure for table `subcriptores`
--

CREATE TABLE `subcriptores` (
  `id` int(11) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `subcriptores`
--

INSERT INTO `subcriptores` (`id`, `email`, `created_at`) VALUES
(1, 'demoang@rsgitech.com', '2018-10-30 10:14:15');

-- --------------------------------------------------------

--
-- Table structure for table `users`
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
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `first_name`, `last_name`, `token`, `image`, `is_active`, `created_at`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'mercadocreativo', NULL, 'a1aed1a77c0916c43a4a67afe49af265', 'img2.jpg', 1, '2018-10-27 05:25:13');

-- --------------------------------------------------------

--
-- Table structure for table `waxinfos`
--

CREATE TABLE `waxinfos` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `titleesp` varchar(255) DEFAULT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `description` text,
  `descriptionesp` text,
  `image` varchar(255) DEFAULT NULL,
  `is_featured` tinyint(1) NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `waxinfos`
--

INSERT INTO `waxinfos` (`id`, `title`, `titleesp`, `user_id`, `category_id`, `description`, `descriptionesp`, `image`, `is_featured`, `is_active`, `created_at`) VALUES
(13, 'Wax', 'Depilación con Cera', 1, 0, '<p>Many people are afraid of the pain that is associated with making a wax. The truth of the matter is that the more a specific area is waxed, the less painful it will be. At first, the pain will be shocking, but if you keep receiving wax from time to time, you will get used to it. Hair removal lasts longer than shaving because it pulls hair directly from its roots. When you wax, you do not run the risk of cuts or scars like when you shave. You may have rashes after shaving, especially if you have sensitive skin. The hair removal will not leave you any rash. Hair removal does not consume much time. It is fast and convenient. We guarantee the use of the best product in the skin care market to ensure the best results in the treatment you are choosing.&nbsp;<br><br>The skin care specialist in our place can help you remove all or part of your hair in areas of your body that you would not want to have there. Call today to make an appointment with us. You will feel beautiful and soft as silk.</p>', '<p>Muchas personas tienen miedo del dolor que se asocia con hacer una depilación con cera. La verdad del asunto es que cuanto más se encere un área específica, menos doloroso será. Al principio, el dolor será impactante, pero si sigues recibiendo cera de vez en cuando, te acostumbrarás. La eliminación del vello dura más que el afeitado, ya que lo extrae directamente de sus raíces. Cuando enceras, no corres el riesgo de sufrir cortes o cicatrices como cuando te afeitas. Es posible que tenga sarpullidos después del afeitado, especialmente si tiene piel sensible. La depilación no te dejará ningún sarpullido. La depilación no consume mucho tiempo, es rápido y conveniente. Garantizamos el uso del mejor producto en el mercado del cuidado de la piel para garantizar los mejores resultados en el tratamiento que elija.</p><p>&nbsp;</p><p>El especialista en cuidado de la piel en nuestro lugar puede ayudarlo a eliminar todo o parte de su cabello en áreas de su cuerpo que no querría tener allí. Llama hoy para concertar una cita con nosotros. Te sentirás bella y suave como la seda.</p>', 'CATEGORiA-WAX1.jpg', 1, 1, '2019-08-06 03:51:29');

-- --------------------------------------------------------

--
-- Table structure for table `waxs`
--

CREATE TABLE `waxs` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `titleesp` varchar(255) DEFAULT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `description` text,
  `descriptionesp` text,
  `price` varchar(255) NOT NULL,
  `popup` varchar(255) NOT NULL,
  `button` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `is_featured` tinyint(1) NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `waxs`
--

INSERT INTO `waxs` (`id`, `title`, `titleesp`, `user_id`, `category_id`, `description`, `descriptionesp`, `price`, `popup`, `button`, `image`, `is_featured`, `is_active`, `created_at`) VALUES
(1, 'Eyebrows wax', 'cera para ojos', 1, 1, 'Come and shave your eyebrows in Vali Skincare & Makeup, straight or curved wax strips will be used to give the desired eyebrow shape, our products have more natural and vegetable components than the rest of the market waxes <br><br>\n\n<b>Square:</b> Because square faces have sharp, well-defined angles naturally, a rounded or soft angled forehead will create a magnificent balance. <br><br>\n\n<b>Round:</b> With a round face, angled eyebrows with a high arc look better and help to create defined lines that are flatter. <br><br>\n\n<b>Long or oval:</b> Long or oval faces benefit from soft arches or flat eyebrows, as too high an arch can lengthen the face. <br><br>\n\n<b>Heart-shaped:</b> Heart-shaped faces look better with a natural soft-angle bow that draws the correct attention to the upper half of the face. <br><br>\n\n<b>Note:</b> use post-depilatory gels such as glycerin, azulene, calendula or chamomile.','descripcion español', '15.00', 'eyebrows', 'https://squareup.com/appointments/buyer/widget/p5oq7n3y1fkw9l/RFSCRQJSQAYNW', '1_EYEBROWS-WAX1.jpg', 1, 1, '2018-10-27 04:12:09'),
(2, 'Facial Lips wax ', '', 1, 1, 'Here we extract that delicate hair around our upper lip. <br><br>\n<b>Note:</b> use post-depilatory gels such as glycerin, azulene, calendula or chamomile Upper Legs Wax. <br><br>\nThe treatment of epilation of the upper part of the leg involves the depilation of the front and back of both thighs and above the knees. After applying the wax strips, our beautician removes them quickly to minimize your discomfort. <br><br>\n<b>Note:</b>  use post-depilatory gels such as glycerin, azulene, calendula or chamomile.', '', '15.00', 'Facial', 'https://squareup.com/appointments/buyer/widget/mlz96omq048jcb/RFSCRQJSQAYNW', '2_FACIAL-LIPS-WAX.jpg', 1, 1, '2018-10-27 06:12:09'),
(3, 'Full Face Wax', '', 1, 2, 'Entire face is enclosed from the forehead, the cheeks, the sideburns, the lips, the chin and just below the jaw. <br><br>\n<b>Note:</b> use post-depilatory gels such as glycerin, azulene, calendula or chamomile', '', '40.00', 'fullF', 'https://squareup.com/appointments/buyer/widget/lhxjlsdn9ytax3/RFSCRQJSQAYNW', '3_FULL-FACE-WAX.jpg', 1, 1, '2018-10-27 07:12:09'),
(4, 'Underams Wax', '', 1, 2, 'Waxing your underarms has the same benefits as waxing anywhere else. <br><br>\n <b>Note:</b> use post-depilatory gels such as glycerin, azulene, calendula or chamomile', '', '15.00', 'Underams', 'https://squareup.com/appointments/buyer/widget/azytaiw2dd24df/RFSCRQJSQAYNW', '4_UNDERARMS-WAX.jpg', 1, 1, '2018-10-27 09:12:09'),
(5, 'Half arm Wax', '', 1, 7, 'You can choose to have your lower arms waxed which removes everything from the elbow down to the wrist.\n<b>Note:</b> use post-depilatory gels such as glycerin, azulene, calendula or chamomile.', '', '20.00', 'Half', 'https://squareup.com/appointments/buyer/widget/a4crcfgbrynl34/RFSCRQJSQAYNW', '5_HALF-ARM-WAX.jpg', 1, 1, '2018-10-27 10:12:09'),
(6, 'Full arms Wax', '', 1, 7, 'We remove every single hair from the arms in a quick and almost painless fashion.\n<br><br>\n<b>Note:</b> use post-depilatory gels such as glycerin, azulene, calendula or chamomile', '', '30.00', 'FullA', 'https://squareup.com/appointments/buyer/widget/9hulptbkyvo5r6/RFSCRQJSQAYNW', '6_FULL-ARMS-WAX.jpg', 1, 1, '2018-10-27 12:12:09'),
(7, 'Upper legs Wax', '', 1, 0, 'The treatment of epilation of the upper part of the leg involves the depilation of the front and back of both thighs and above the knees. After applying the wax strips, our beautician removes them quickly to minimize your discomfort. <br><br>\n<b>Note:</b> use post-depilatory gels such as glycerin, azulene, calendula or chamomile.', '', '30.00', 'Upper', 'https://squareup.com/appointments/buyer/widget/9kj9yyxaqcwsjv/RFSCRQJSQAYNW', '7_UPPER-LEGS1.jpg', 1, 1, '2019-07-28 01:56:56'),
(8, 'Lower legs Wax', '', 1, 0, 'The wax is applied in strips on the front and back of both legs, from the top of the knee to the ankle, eliminating the wax quickly and professionally. <br><br>\n<b>Note:</b> use post-depilatory gels such as glycerin, azulene, calendula or chamomile.', '', '35.00', 'Lower', 'https://squareup.com/appointments/buyer/widget/39vh1j6i2vqn7p/RFSCRQJSQAYNW', '8_LOWER-LEGS-WAX.jpg', 1, 1, '2019-07-28 02:30:27'),
(9, 'Full Legs Wax', '', 1, 0, 'The complete treatment of leg hair removal involves removing the hair from both legs and applying our wax formula, from the upper part of the thigh to the ankle. Hair removal begins approximately two inches from the bikini line and includes the front and back of the thighs, knees and lower legs. <br><br>\n<b>Note: </b>use post-depilatory gels such as glycerin, azulene, calendula or chamomile.', '','60.00', 'FullL', 'https://squareup.com/appointments/buyer/widget/tenoe3aturfj1a/RFSCRQJSQAYNW', '9_FULL-LEGS-WAX.jpg', 1, 1, '2019-07-28 02:31:10'),
(10, 'Classic Bikini Wax', '', 1, 0, 'Bikini hair removal is the removal of pubic hair with a special wax. A bikini line is the area of the upper leg and inner thigh where pubic hair grows that is not normally covered by the bottom of a swimsuit. <br><br>\n<b>Note:</b> use post-depilatory gels such as glycerin, azulene, calendula or chamomile.', '', '35.00', 'Classic', 'https://squareup.com/appointments/buyer/widget/h9iel2m44poq5g/RFSCRQJSQAYNW', '10_CLASSIC-BIKINI-WAX.jpg', 1, 1, '2019-07-28 02:31:51'),
(11, 'Brazilian Wax', '', 1, 0, 'In this hair removal the pubic hair is extracted in its entirety from the front to the back with an additional back strap. This is perfect for a completely nude look or you can leave a triangle, a strip or a clean square on the front. <br><br>\n<b>Note:</b> use post-depilatory gels such as glycerin, azulene, calendula or chamomile.', '', '40.00', 'Brazilian', 'https://squareup.com/appointments/buyer/widget/6ye7bg1ogdxolc/RFSCRQJSQAYNW', '11_BRAZILIAN-WAX.jpg', 1, 1, '2019-07-28 02:32:30'),
(12, 'Full Body Wax ', '', 1, 0, 'Full Body Wax includes Brows, Lips, Full Arms, Full Legs, Classic or Brazilian Bikini wax. <br><br>\n<b>Note:</b> use post-depilatory gels such as glycerin, azulene, calendula or chamomile', '125.00', 'FullB', 'https://squareup.com/appointments/buyer/widget/bz6m0vsl2fan1r/RFSCRQJSQAYNW', '', '12_FULL-BODY-WAX.jpeg', 1, 1, '2019-07-28 02:33:16');

-- --------------------------------------------------------

--
-- Table structure for table `wrappings`
--

CREATE TABLE `wrappings` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `description` text,
  `price` varchar(255) NOT NULL,
  `popup` varchar(255) NOT NULL,
  `button` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `is_featured` tinyint(1) NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `wrappings`
--

INSERT INTO `wrappings` (`id`, `title`, `user_id`, `category_id`, `description`, `price`, `popup`, `button`, `image`, `is_featured`, `is_active`, `created_at`) VALUES
(1, 'Free Consultation Appointment', 1, 1, 'Let our skin experts help you choose the perfect treatment with your skin concern. Our first consultation is FREE, you will be receive a Complementary Facial.  <br><br> \n<b style=\"font-style: italic\">Let yourself, come, relax and enjoy with us!!</b>', 'Free', 'modal', 'https://squareup.com/appointments/buyer/widget/plex848yjw4ase/RFSCRQJSQAYNW', '1_FREE-CONSULTATION.jpg', 1, 1, '2018-10-27 04:12:09'),
(2, 'Cryogen treatment body wrapping', 1, 1, 'Our exclusive treatment to reduce the flaccidity that makes us feel uncomfortable when we do not have the time factor in favor, with this procedure we are dedicated to activate the lymphatic system, eliminating accumulated lipids and toxins; has decongestive effects; Anti-inflammatory and sedative for its cryogenic action reduces localized adiposity ideal to reduce and control cellulite.', '90.00', 'Cryogen', 'https://squareup.com/appointments/buyer/widget/pde454y9be83kt/RFSCRQJSQAYNW', '2_CRYOGEN-TREATMENT-BODY-WRAPPING.jpg', 1, 1, '2018-10-27 06:12:09'),
(3, 'Modeler thermal body wrapping', 1, 2, 'This treatment stimulates the blood supply and facilitates perspiration. Its thermogenic assets promote lipo-mobilization and thermo lipolysis for its ingredients.', '120.00', 'Modeler', 'https://squareup.com/appointments/buyer/widget/l4u9qp8hrtwpmw/RFSCRQJSQAYNW', '3_MODELER-THERMAL-BODY-WRAPPING.jpg', 1, 1, '2018-10-27 07:12:09'),
(4, 'Reaffirming treatment with Nano-liposomes body wrapping ', 1, 2, 'Exquisite firming and toning treatment returns elasticity to the tissues due to its rich retinol ingredients that help to rejuvenate the skin, oil that delays aging, improving stretch marks, scars and spots.', '120.00', 'Reaffirming', 'https://squareup.com/appointments/buyer/widget/6iiq0ufcxru03k/RFSCRQJSQAYNW', '4_REAFFIRMING-TREATMENT-WITH-NANO-LIPOSOMES-BODY-WRAPPING.jpg', 1, 1, '2018-10-27 09:12:09'),
(5, 'Body wrapping package -6 sessions', 1, 7, 'The body wrap at Vali Skincare & Makeup detoxifies the body. Minerals are the building block of the body. The process of hydrating the body with minerals helps the body eliminates toxins caused by excessive consumption of salt, sugar, carbohydrates and alcohol. The process of detoxification helps the body to lose ctms. The slimming body wrap takes around 90 minutes. <br><br>\nOur Body Wrapping treatment will be customizes depending of the need of our customers.', '600.00', 'Wrapping', 'https://squareup.com/appointments/buyer/widget/3mhtjql3al9fe7/RFSCRQJSQAYNW', '5_BODY-WRAPPING-PACKAGE-6-SESSIONS.jpg', 1, 1, '2018-10-27 10:12:09');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `antiages`
--
ALTER TABLE `antiages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bodys`
--
ALTER TABLE `bodys`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bridals`
--
ALTER TABLE `bridals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brightenings`
--
ALTER TABLE `brightenings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `calmings`
--
ALTER TABLE `calmings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clasess`
--
ALTER TABLE `clasess`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fibrofaces`
--
ALTER TABLE `fibrofaces`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallerys`
--
ALTER TABLE `gallerys`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hands`
--
ALTER TABLE `hands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hypertrophics`
--
ALTER TABLE `hypertrophics`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `looks`
--
ALTER TABLE `looks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `luxurings`
--
ALTER TABLE `luxurings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `modals`
--
ALTER TABLE `modals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permanents`
--
ALTER TABLE `permanents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `publicacions`
--
ALTER TABLE `publicacions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `restoratives`
--
ALTER TABLE `restoratives`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sculptings`
--
ALTER TABLE `sculptings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `specialfs`
--
ALTER TABLE `specialfs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `specialts`
--
ALTER TABLE `specialts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subcriptores`
--
ALTER TABLE `subcriptores`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `waxinfos`
--
ALTER TABLE `waxinfos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `waxs`
--
ALTER TABLE `waxs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wrappings`
--
ALTER TABLE `wrappings`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `antiages`
--
ALTER TABLE `antiages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `bodys`
--
ALTER TABLE `bodys`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `bridals`
--
ALTER TABLE `bridals`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `brightenings`
--
ALTER TABLE `brightenings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `calmings`
--
ALTER TABLE `calmings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `clasess`
--
ALTER TABLE `clasess`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `fibrofaces`
--
ALTER TABLE `fibrofaces`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `gallerys`
--
ALTER TABLE `gallerys`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `hands`
--
ALTER TABLE `hands`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `hypertrophics`
--
ALTER TABLE `hypertrophics`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `looks`
--
ALTER TABLE `looks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `luxurings`
--
ALTER TABLE `luxurings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `modals`
--
ALTER TABLE `modals`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `permanents`
--
ALTER TABLE `permanents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `publicacions`
--
ALTER TABLE `publicacions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `restoratives`
--
ALTER TABLE `restoratives`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `sculptings`
--
ALTER TABLE `sculptings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `specialfs`
--
ALTER TABLE `specialfs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `specialts`
--
ALTER TABLE `specialts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `subcriptores`
--
ALTER TABLE `subcriptores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `waxinfos`
--
ALTER TABLE `waxinfos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `waxs`
--
ALTER TABLE `waxs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `wrappings`
--
ALTER TABLE `wrappings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

-- buscador

CREATE OR REPLACE VIEW products AS 
select id,'antiages' as type,title,description,price,popup,button,image,is_featured,is_active,created_at from antiages union
select id,'bodys',title,description,price,popup,button,image,is_featured,is_active,created_at  from bodys union
select id,'bridals', title,description,price,popup,button,image,is_featured,is_active,created_at  from bridals union      
select id,'brightenings',title,description,price,popup,button,image,is_featured,is_active,created_at  from brightenings union 
select id,'calmings',title,description,price,popup,button,image,is_featured,is_active,created_at  from calmings union     
select id,'clasess',title,description,price,popup,button,image,is_featured,is_active,created_at  from clasess union      
select id,'fibrofaces',title,description,price,popup,button,image,is_featured,is_active,created_at  from fibrofaces union   
select id,'hands',title,description,price,popup,button,image,is_featured,is_active,created_at  from hands union        
select id,'hypertrophics',title,description,price,popup,button,image,is_featured,is_active,created_at  from hypertrophics union 
select id,'looks',title,description,price,popup,button,image,is_featured,is_active,created_at  from looks union         
select id,'luxurings',title,description,price,popup,button,image,is_featured,is_active,created_at  from luxurings union            
select id,'permanents',title,description,price,popup,button,image,is_featured,is_active,created_at  from permanents union    
select id,'restoratives',title,description,price,popup,button,image,is_featured,is_active,created_at  from restoratives union  
select id,'sculptings',title,description,price,popup,button,image,is_featured,is_active,created_at  from sculptings union    
select id,'specialfs',title,description,price,popup,button,image,is_featured,is_active,created_at  from specialfs union     
select id,'specialts',title,description,price,popup,button,image,is_featured,is_active,created_at  from specialts union     
select id,'waxs',title,description,price,popup,button,image,is_featured,is_active,created_at  from waxs union          
select id,'wrappings',title,description,price,popup,button,image,is_featured,is_active,created_at  from wrappings
