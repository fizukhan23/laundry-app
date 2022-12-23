-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 23, 2022 at 10:20 AM
-- Server version: 10.3.37-MariaDB-cll-lve
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `celebritybytes_laundryapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`, `created_at`, `updated_at`, `name`) VALUES
(1, 'admin@gmail.com', '$2y$10$geJD0cHUqnnOsa4aceZlMuFhw4R8xHpYlHAShoaUb.35oDhyz3.0O', '2022-07-05 01:04:43', '2022-07-05 01:04:43', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `ads`
--

CREATE TABLE `ads` (
  `id` int(11) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `ads`
--

INSERT INTO `ads` (`id`, `image`, `status`, `created_at`, `updated_at`) VALUES
(12, 'image-1663826273.jpg', '1', '2022-09-22 10:57:53', '2022-09-22 10:57:53'),
(14, 'image-1663832424.jpg', '1', '2022-09-22 12:40:24', '2022-09-22 12:40:24'),
(15, 'image-1663832450.png', '1', '2022-09-22 12:40:50', '2022-09-22 12:40:50'),
(16, 'image-1663832492.png', '1', '2022-09-22 12:41:32', '2022-09-22 12:41:32'),
(18, 'image-1663833160.png', '1', '2022-09-22 12:52:40', '2022-09-22 14:31:01');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `icon` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `status`, `icon`, `created_at`, `updated_at`) VALUES
(7, 'dry cleaning', '1', 'dry.png', '2022-07-12 01:29:56', '2022-07-26 15:40:44'),
(9, 'streaming iron and roll press', '1', 'stream.png', '2022-07-12 02:36:23', '2022-08-03 11:55:45');

-- --------------------------------------------------------

--
-- Table structure for table `create`
--

CREATE TABLE `create` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `city` varchar(200) DEFAULT NULL,
  `number` varchar(20) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `googleid` varchar(255) DEFAULT NULL,
  `facebookid` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp(),
  `device_token` varchar(255) DEFAULT NULL,
  `appleid` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `create`
--

INSERT INTO `create` (`id`, `name`, `email`, `city`, `number`, `password`, `googleid`, `facebookid`, `created_at`, `updated_at`, `device_token`, `appleid`) VALUES
(1, 'babu', 'babu@gmail.com', '29/9 samajwadi indira nagr dravid nagr indore 452001', '9999999999', '$2y$10$votf3BJ5vrDvBaV4eRr0eOGhHOHSDI1sHFwbjpOhD3bsmcI.oC2Ka', NULL, NULL, '2022-07-30 05:49:37', '2022-08-03 10:16:31', 'cUMvL4SzQFquaB1_Kk0Rd-:APA91bFF_JLL6Cnj3OmZqJxdT-bdAteoZ8RHWrNtKu_GBJRmjscvhBUmFmIwLRylcbbIwUwd2TY5QcchUTjFyYddawaDB8rG_kMloTfOGsNGXHHPo2Ml2p01dQYtahTMpD2wNiVNHksZ', NULL),
(72, 'khan', 'khan@gmail.com', 'indore', '9977443322', '$2y$10$pnmx2G47soQtQjt8jYE1BOlFpIPf5o.v8AxAYkyw1B1WZR0UVU9pm', NULL, NULL, '2022-08-04 06:43:10', '2022-08-04 06:43:10', NULL, NULL),
(73, 'Pavan Patidar', 'pavanpatidar436@gmail.com', '302 Prince plaza  Sapana Sangita  Indore  452001', '9617020436', NULL, '114456754393510050962', NULL, '2022-08-06 05:37:18', '2022-08-06 05:37:18', 'c9O3H3uFT0W6SqZdljiCbu:APA91bFoRC5T8hnRB8ZVgqGun6CMwVLufpmFHwvwPmYEoW1vgQYYlED8Pp4wWHjDMenOiMJQIY5NFFHDiHXGb0i39ILlNgz6oVrn1l1vn3RDQQbmL1Pc0XeFVK8idY1oKhIUcsXdsajE', NULL),
(74, 'jaykishan bairagi', 'jayjkbairagi@gmail.com', 'Limbodi Khandwa  Indore 452001', '9770921402', '$2y$10$eowwIBzjKHwn1v1OlgJm3.JO0ekLW4gBSL.KQzbcd9Se44Xta6TQC', NULL, NULL, '2022-08-24 15:26:35', '2022-08-24 15:26:35', 'f_PqyVzMQim92pwdmSwl5Q:APA91bEAXO1z6GyrRcGj1dKwB84k0DtAnO0G_xu_ayzpNHY02AJWPBop7eRK25qY6OM_90lQiTwDkko2oWJk991Ywl0az19GoYjFF_R29WBT_WE61Pdtb6obr3dY6oLDWhr2VHDcmY96', NULL),
(75, 'khan', 'khan@gmail.com', 'indore', '9977443322', '$2y$10$U3X29m/u7lHXKsedIfQ/WejoeF.FIi2lXbn8fmYAYguBfViC8/CDy', NULL, NULL, '2022-09-22 10:05:45', '2022-09-22 10:05:45', NULL, NULL),
(76, 'Rohit', 'rohit@gmail.com', '115 navrang plaza Sapna sangeeta  Indore 452001', '8959402332', '$2y$10$HZ9vdseF/R8Tmr2u.28oCO0nWjvasBZLeT568TePraLMPyxiIS52W', NULL, NULL, '2022-09-22 10:19:59', '2022-09-22 10:19:59', 'f3XW11VXStaNvPaKF7Cfj_:APA91bFCa74xo6VusmEMUDPvvISOl6troFsAsdvorDH1gtMyI0PuO_mM6wHuDKKjSVLUIFz3mzIXL-kXNBZmlxFVcHhHuYulKGH52yIScjJYbcmPK5Q1OovGpMaeoNdo4MM1l_3ZL7mm', NULL),
(77, 'Pavan Patidar', 'pavanpatidar436@gmail.com', 'Indore', '9617020436', '$2y$10$j20Q2q8ts4veBw1r7wmkmOtKn1YoAGeFStFleLY.hGrcSZP/TqZ8a', NULL, NULL, '2022-09-23 08:05:13', '2022-09-23 08:05:13', NULL, NULL),
(78, 'Pavan Patidar', 'pavanpatidar436@gmail.com', 'Indore', '9617020436', '$2y$10$rPJI5ZHGreAltsmY15RooedVOdVIXCdE2TNvlZRWUDYcCWtU8Q9m.', NULL, NULL, '2022-09-23 08:06:49', '2022-09-23 08:06:49', NULL, NULL),
(79, 'Pavan Patidar', 'pavanpatidar436@gmail.com', 'Indore', '9617020436', '$2y$10$kFRSHSCTSB6hBMlZ/9WlQOuQ93S44/wo/Ps54sF1JKbFZSvsrAwWq', NULL, NULL, '2022-09-23 08:08:20', '2022-09-23 08:08:20', NULL, NULL),
(80, 'Pavan Patidar', 'pavanpatidar436@gmail.com', 'Indore', '9617020436', '$2y$10$RQngbR7H8p.XMDd5EBvnDe44LGT94Q6b7u//gqCrv1/I4HaAYFfvy', NULL, NULL, '2022-09-23 09:38:18', '2022-09-23 09:38:18', NULL, NULL),
(81, 'jaykishan bairagi', 'jayjkbairagi@gmail.com', 'Indore', '9770921402', '$2y$10$fgxKZVTfMFSoRBhwEp/Fre.PXLtc7IlA7Yk8Q5HOQnxoMGscOZutq', NULL, NULL, '2022-09-23 09:38:39', '2022-09-23 09:38:39', NULL, NULL),
(82, 'jaykishan bairagi', 'jayjkbairagi@gmail.com', 'Indore', '9770921402', '$2y$10$1NQ0gzw3ff8uZHdNsx65/el/K.9loa2O9nbiu2vsRWxM6J8GJrgg.', NULL, NULL, '2022-09-23 09:41:03', '2022-09-23 09:41:03', NULL, NULL),
(83, 'Abcd', 'jp.assist12345@gmail.com', 'Indore', '9174283361', '$2y$10$QY8zjTODN6QIER/MOQFir.JVbPkBDvuyqdUD3l9ObTrflnQopOYHK', NULL, NULL, '2022-09-23 09:42:20', '2022-09-23 09:42:20', 'null', NULL),
(89, 'khan', 'khan@gmail.com', 'indore', '6260902280', '$2y$10$zmUAQh3e7N2JgJk/FwQ5XOfVHf0f9RuLDn3MsC3fbD.d4e/fsD2Ia', NULL, NULL, '2022-09-30 05:27:42', '2022-09-30 05:27:42', NULL, NULL),
(90, 'khan', 'khan@gmail.com', 'indore', '6260902280', NULL, NULL, NULL, '2022-09-30 05:59:55', '2022-09-30 05:59:55', NULL, NULL),
(91, 'Jaatbabu', 'babulaljat2332@gmail.com', 'Bhawarkuaa  It part Lasudiyalad  452001', '8959402332', NULL, '114778813784178246602', NULL, '2022-09-30 07:14:28', '2022-09-30 07:14:28', NULL, NULL),
(92, 'khan', NULL, NULL, NULL, NULL, NULL, '468464', '2022-09-30 07:55:58', '2022-09-30 07:55:58', NULL, NULL),
(93, 'Babu Jat', NULL, NULL, NULL, NULL, NULL, '477193067399860', '2022-09-30 07:56:30', '2022-09-30 07:56:30', NULL, NULL),
(94, 'khan', 'khan@gmail.com', 'indore', NULL, NULL, '23456', NULL, '2022-09-30 10:32:43', '2022-09-30 10:32:43', NULL, NULL),
(96, 'Ronit Mehta', 'ronitmehta821@gmail.com', 'Indore', '+918269335928', NULL, NULL, NULL, '2022-09-30 12:26:17', '2022-09-30 12:26:17', NULL, NULL),
(97, 'Rahul sharma', 'Rahula@gmail.com', 'Bhawarkuaa it park indore', '8989898989', NULL, NULL, NULL, '2022-10-01 04:59:27', '2022-10-01 04:59:27', NULL, NULL),
(98, 'Ronit Mehta', 'ronitmehta821@gmail.com', 'Indore', '+918269335928', NULL, NULL, NULL, '2022-10-01 06:54:01', '2022-10-01 06:54:01', NULL, NULL),
(101, 'Mohit', 'Fhjkg@gmail.com', 'Apna sweets Apple hospital  Indore  452001', '+918269335928', NULL, NULL, NULL, '2022-10-01 07:01:04', '2022-10-01 07:01:04', 'fLdx50vIRVK4ff7LsQCMWm:APA91bEJ_tO92zl2wjJ1MW25VJVocyUzdjOhqxiGIu_gjz0zILWWgGEEjNUOFa8xmQ2Qz0Vwd7LJLWHtFvfZHXQfUBmJbJQzGefgqBskUvZN5ct5rYVkWE06Ui2kv8eVcL2g-DAA1tTh', NULL),
(102, 'Vishal', 'Expert@infocentroidtech.com', 'Indorw', '7566643042', NULL, NULL, NULL, '2022-10-03 09:59:59', '2022-10-03 09:59:59', 'null', NULL),
(103, 'khan', 'khan@gmail.com', 'indore', '6260902280', NULL, NULL, NULL, '2022-10-12 10:45:42', '2022-10-12 10:45:42', NULL, NULL),
(104, 'khan', 'khan@gmail.com', 'indore', '6260902280', NULL, NULL, NULL, '2022-10-13 05:47:36', '2022-10-13 05:47:36', NULL, NULL),
(105, 'Anuj bhati', 'Anujbhati7488@gmail.com', 'Bholaram Ustad marg', '9617432163', NULL, NULL, NULL, '2022-10-28 03:51:49', '2022-10-28 03:51:49', NULL, NULL),
(106, 'Babu Jat', '18rohitbabu@gmail.com', NULL, NULL, NULL, '116765587104365500817', NULL, '2022-12-02 09:37:21', '2022-12-02 09:37:21', 'clpJN43dT3ejIA-rH6RyKb:APA91bFC7QjjHFsp98ZUD3Gl9C1O7nqxHHUALCL9V2S8b8RuVG0ChPH4aoRe0Q-oyd4gzaLnwYXu6SuWKmFfXbrASTZ4OfZyYbOFW6UxWT_fAxwU-LuKohZU7L7XjO3jndZBtyLhaqzd', NULL),
(107, 'Ronit Mehta', 'ronitmehta821@gmail.com', 'Ujjain', '+918269335928', NULL, NULL, NULL, '2022-12-02 12:30:58', '2022-12-02 12:30:58', NULL, NULL),
(110, 'Ronit Mehta', 'ronitmehta821@gmail.com', 'Dewas', '+918269335928', NULL, NULL, NULL, '2022-12-02 13:02:30', '2022-12-02 13:02:30', NULL, NULL),
(111, 'Vishal', 'Shdjjhd@gmaul.com', 'Khamdwa', '9876543210', NULL, NULL, NULL, '2022-12-02 13:03:36', '2022-12-02 13:03:36', 'null', NULL),
(112, 'Ricky Shaw', 'rickyshaw.01904@gmail.com', NULL, NULL, NULL, '114322761477605568514', NULL, '2022-12-02 13:17:55', '2022-12-02 13:17:55', 'null', NULL),
(113, 'Ronit Mehta', 'ronitmehta821@gmail.com', 'Indore', '+918269335928', NULL, NULL, NULL, '2022-12-06 12:58:07', '2022-12-06 12:58:07', NULL, NULL),
(114, 'null', '123@yopmail.com', NULL, NULL, NULL, '001156.6bbf1672c18742dda039fb68fcda5fb8.1336', NULL, '2022-12-08 08:49:43', '2022-12-08 08:49:43', 'null', NULL),
(115, 'khan', 'khan@gmail.com', NULL, NULL, NULL, NULL, NULL, '2022-12-08 10:19:53', '2022-12-08 10:19:53', NULL, '23456'),
(116, 'null', '123@yopmail.com', NULL, NULL, NULL, NULL, NULL, '2022-12-09 05:21:04', '2022-12-09 05:21:04', 'null', '001156.6bbf1672c18742dda039fb68fcda5fb8.1338'),
(120, 'null', '123@yopmail.com', NULL, NULL, NULL, NULL, NULL, '2022-12-09 07:21:07', '2022-12-09 07:21:07', 'null', '1875236595582'),
(121, 'Apple', 'c2swrhqmf2@privaterelay.appleid.com', NULL, NULL, NULL, NULL, NULL, '2022-12-10 09:13:52', '2022-12-10 09:13:52', 'null', '001376.8d6f54d5f29b47d6b9756c6adb033b73.0913'),
(122, 'Ronit Mehta', 'ronitmehta821@gmail.com', 'Indire', '+918269335928', NULL, NULL, NULL, '2022-12-15 09:28:07', '2022-12-15 09:28:07', NULL, NULL),
(123, 'Ronit Mehta', 'ronitmehta821@gmail.com', 'Gxjchc Hcjfnc Ujjain  5985648', '8269335928', NULL, NULL, NULL, '2022-12-15 09:31:26', '2022-12-15 09:31:26', 'dT-qxsG6QN-FTuybqieO9l:APA91bFnxYzlpu5sq9brsXGH8DJTn5UcmpAuVmr8h4MPsbimHU2DUXPP8cRZZlWzxU7qWMwsbV8p_pu1QPJ1G7Uc9qjK1SZ_L6CBXp-i-QsBneV2H8t_dzX_GlQ82uM8629HQQgqSMlD', NULL),
(124, 'Romit mehta', 'ronitmehta821@gmail.com', 'ujjain', '3216549870', NULL, NULL, NULL, '2022-12-16 05:30:18', '2022-12-16 05:30:18', NULL, NULL),
(125, 'Sapna Mehra', 'Ross@infocentroidtech.com', 'Indore', '918839303356', NULL, NULL, NULL, '2022-12-20 06:47:02', '2022-12-20 06:47:02', NULL, NULL),
(126, 'Kushal', 'Kagalcha512@gmail.com', 'Indore', '9893556696', NULL, NULL, NULL, '2022-12-20 10:25:08', '2022-12-20 10:25:08', 'foKlk3UnQqWgmg0fG9mIj7:APA91bFMhFPFA3z4dCwznD2hlXy_DEXwPiguX8CN5zaNn6z6Ky2lrC80GL2eCGc57vl5Tl0LFoleOLyr6nPJim0bqFM1-pp8w6nID76NJMBWUcPt0MZhhq9zbAyYpCBFueI2rnqhQEEL', NULL),
(127, 'geetanjali', 'geetanjali@infocentroidtech.com', 'Indore', '7999563457', NULL, NULL, NULL, '2022-12-20 10:29:08', '2022-12-20 10:29:08', 'eD-pIt8-RA-2YmUc86QeQq:APA91bENmmTIaoN9_SNH7MGHJZEn2UAA3gl5qjihhWOf7ZbAPTUDBa1bMZ9WGfZFkbr4JEYDPtivZABSZvnA1ioLqp99krYaMSifb483uEFlYZijVheOGvmlLiVb8nhP3FiKoolOQtmT', NULL),
(128, 'srashti', 'shree@gmail.com', 'indore', '8839515176', NULL, NULL, NULL, '2022-12-20 12:04:06', '2022-12-20 12:04:06', 'dtip0yq0Ql-GrzMZCGadr8:APA91bEVyLFW6lMfJCrpXtNPcrqk546wjzPR4AEuvNB-I4WQ1Nc6bgzd_HXlr0EMGB95uFAvziJXNSPySbrgXDUsdnUm7VQubZRF_3qcxNm4Nao4pH8xhvOVLqc6Ip_xNkH4FPfLBpKJ', NULL),
(129, 'Vishal Jadhav', 'vj1480084@gmail.com', 'Indore', '8349429719', NULL, NULL, NULL, '2022-12-22 06:16:18', '2022-12-22 06:16:18', 'e-A2ONQWQ-irdskJ19XT8C:APA91bHYGgH2bp4QIjvJjYGnpuy2si7rN7vkXZ-FePcqp75k8gclAbZfnBMoXrQHo9DubhBsYJI-MliWJdPWBD0jBRnPufHKFb0H8rerh--bXdMTTwZ22HRiMO5oIy1lPJqOCjhd74CA', NULL),
(130, 'Gajendra Panwar', 'gajendra7386@gmail.com', 'Indore', '9977123458', NULL, NULL, NULL, '2022-12-22 07:43:41', '2022-12-22 07:43:41', 'null', NULL),
(131, 'Simran', 'simrangupta13112000@gmail.com', 'Indore', '6261693985', NULL, NULL, NULL, '2022-12-22 10:24:15', '2022-12-22 10:24:15', 'cnr6t5N_ReGK2pDZdOFPil:APA91bG2WLlNkM8s_VOohHU5_lrNHzPAr2OA2YLWW7PA_gJqpL4xQT-k9M3t5ZzldotXRoVfFdnQ517ilcuDR6QCQ1Em94EnOEE5U2cbMiZULM_FN7kYtwOBBrNRvQrCGdyquLiOa7ep', NULL),
(132, 'Ravina bairagi', 'Jayjkbairagi@gmail.com', 'Indore', '7000409296', NULL, NULL, NULL, '2022-12-22 10:26:13', '2022-12-22 10:26:13', 'null', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `Customerdetails`
--

CREATE TABLE `Customerdetails` (
  `id` int(11) NOT NULL,
  `c_name` varchar(255) NOT NULL,
  `number` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `Customerdetails`
--

INSERT INTO `Customerdetails` (`id`, `c_name`, `number`, `address`, `date`, `created_at`, `updated_at`) VALUES
(1, 'jeans', '4554646', 'bhopal', '2022-07-21', '2022-07-15 10:15:56', '2022-07-15 10:15:56'),
(2, 'tshirt', '24454545', 'indore', '2022-07-21', '2022-07-15 10:17:19', '2022-07-15 10:17:19'),
(3, 'tshirt', '24454545', 'indore', '2022-07-21', '2022-07-20 07:32:24', '2022-07-20 07:32:24'),
(4, 'khan', '1234234535', 'indore', '2022-07-20', '2022-07-20 07:47:51', '2022-07-20 07:47:51'),
(5, 'khan', '1234234535', 'indore', '2022-07-20', '2022-07-20 07:52:23', '2022-07-20 07:52:23');

-- --------------------------------------------------------

--
-- Table structure for table `detailsorder`
--

CREATE TABLE `detailsorder` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `categoryname` varchar(255) NOT NULL,
  `subcategoryname` varchar(255) NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `number` varchar(255) DEFAULT NULL,
  `quantities` varchar(255) NOT NULL,
  `subtotal` varchar(255) NOT NULL,
  `charges` varchar(255) NOT NULL,
  `total` varchar(255) NOT NULL,
  `delivary_type` varchar(255) NOT NULL,
  `pickup_date` date NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `coupen_code` varchar(255) NOT NULL,
  `discount` int(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `orderd_by` varchar(255) NOT NULL DEFAULT '1',
  `picked_up` varchar(255) NOT NULL DEFAULT '0',
  `Reached_to_plant` varchar(255) NOT NULL DEFAULT '0',
  `Reached_to_workshop` varchar(255) NOT NULL DEFAULT '0',
  `Ready_to_delivary` varchar(255) NOT NULL DEFAULT '0',
  `delivered` varchar(255) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `detailsorder`
--

INSERT INTO `detailsorder` (`id`, `user_id`, `categoryname`, `subcategoryname`, `item_name`, `number`, `quantities`, `subtotal`, `charges`, `total`, `delivary_type`, `pickup_date`, `address`, `coupen_code`, `discount`, `status`, `orderd_by`, `picked_up`, `Reached_to_plant`, `Reached_to_workshop`, `Ready_to_delivary`, `delivered`, `created_at`, `updated_at`) VALUES
(23, 1, 'streaming iron and roll press', '1,2,2,3,3,', 'T-shirt,Baby doll dress,Tutu dress,Lather Jacket,Hoodie,', '8959403333', '3,3,4,3,3,', '440', '20', '460', 'cash', '2022-08-17', '130,kumar bhatti , sundaram complex,bhawarkuaa indore', 'no', 0, 'Reject', '0', '1', '1', '1', '1', '0', '2022-07-30 10:35:55', '2022-08-04 22:45:36'),
(25, 61, '', '1,1,', 'T-shirt,Formal Shirt,', '6260902280', '1,1,', '50', '0', '50', 'Cash on Delivery', '2022-08-02', 'Nepanagar', 'no', 0, NULL, '0', '0', '0', '0', '0', '0', '2022-08-01 06:16:58', '2022-08-01 06:16:58'),
(26, 61, '', 'women', 'jeans', NULL, '2', '44', '0', '33', 'cashondelivary', '2022-08-02', NULL, 'w3e4', 10, NULL, '1', '0', '0', '0', '0', '0', '2022-08-01 11:26:06', '2022-08-01 11:26:06'),
(27, 65, '', '1,', 'T-shirt,', 'null', '2,', '60', '0', '60', 'Cash on Delivery', '2022-08-11', '130,kamar nagar novlakha road indore 452000', 'no', 0, 'Accept', '0', '0', '0', '0', '0', '0', '2022-08-01 08:51:49', '2022-10-01 15:53:36'),
(28, 68, '', '1,', 'Formal Shirt,', '8959402332', '3,', '60', '0', '25', 'Cash on Delivery', '2022-08-17', '130, bhawarkuaa  it park indore 455280', 'd343', 35, NULL, '0', '0', '0', '0', '0', '0', '2022-08-01 12:16:56', '2022-08-01 12:16:56'),
(29, 68, '', 'man', 'jeans', NULL, '1', '10', '0', '10', 'cash on delivary', '2022-08-03', NULL, 'd343', 5, NULL, '1', '0', '0', '0', '0', '0', '2022-08-01 17:26:09', '2022-08-01 17:26:09'),
(31, 68, '', '1,', 'Necktie,', '8959402332', '3,', '210', '0', '210', 'Cash on Delivery', '2022-08-18', '130, bhawarkuaa  it park indore 455280', 'no', 0, NULL, '0', '0', '0', '0', '0', '0', '2022-08-02 13:20:34', '2022-08-02 13:20:34'),
(32, 1, 'dry cleaning', 'man', 'tshirt,shirt', '12345679', '5,7,2', '70', '20', '90', 'cashondelivary', '2022-07-30', 'indore', '13e34e', 20, 'Reject', '0', '1', '0', '0', '0', '0', '2022-08-03 08:38:27', '2022-10-01 15:15:17'),
(35, 73, 'Dry Cleaning', '1,1,1,1,2,2,6,6,3,', 'T-shirt,Formal Shirt,Necktie,siglet,Baby doll dress,Kimono dress,Frok  girls,garara,Rain cort,', '9617020436', '1,2,1,2,2,2,2,2,2,', '400', '0', '400', 'Cash on Delivery', '2022-08-07', '302 Prince plaza  Sapana Sangita  Indore  452001', 'no', 0, 'Accept', '0', '0', '0', '0', '0', '0', '2022-08-06 06:00:37', '2022-08-06 11:24:20'),
(36, 74, 'Dry Cleaning', '2,1,1,2,', 'jeans,T-shirt,Formal Shirt,Polo dress,', '9770921402', '2,2,2,2,', '184', '0', '184', 'Cash on Delivery', '2022-08-25', 'Limbodi Khandwa  Indore 452001', 'no', 0, NULL, '0', '1', '1', '1', '1', '1', '2022-08-24 15:29:35', '2022-08-24 20:36:25'),
(37, 73, 'Dry Cleaning', '1,1,2,6,3,1,', 'T-shirt,Formal Shirt,Polo dress,garara,Badsheet,Kurta,', '9617020436', '4,3,3,3,2,3,', '550', '0', '550', 'Cash on Delivery', '2022-09-02', '302 Prince plaza  Sapana Sangita  Indore  452001', 'no', 0, NULL, '0', '0', '0', '0', '0', '0', '2022-09-01 11:41:35', '2022-09-01 11:41:35'),
(38, 73, 'Dry Cleaning', '1,1,', 'Shirt / T shirt,white shirt / T shirt,', '9617020436', '5,5,', '400', '0', '400', 'Cash on Delivery', '2022-09-17', '302 Prince plaza  Sapana Sangita  Indore  452001', 'no', 0, NULL, '0', '0', '0', '0', '0', '0', '2022-09-16 11:35:29', '2022-09-16 11:35:29'),
(40, 1, 'Dry Cleaning', 'man', 'tshirt,shirt', '12345679', '5,7,2', '70', '20', '90', 'cashondelivary', '2022-07-30', 'indore', '13e34e', 20, NULL, '0', '0', '0', '0', '0', '0', '2022-09-30 09:58:05', '2022-09-30 09:58:05'),
(41, 91, 'Dry Cleaning', '21,', 'jeans,', '8959402332', '3,', '105', '0', '105', 'Cash on Delivery', '2022-09-24', 'Bhawarkuaa  It part Lasudiyalad  452001', 'd6feUJ', 25, NULL, '0', '0', '0', '0', '0', '0', '2022-09-30 11:17:00', '2022-09-30 11:17:00'),
(42, 91, 'Streaming Iron And Roll Press', '21,', 'jeans,', '8959402332', '3,', '105', '0', '105', 'Cash on Delivery', '2022-10-01', 'Bhawarkuaa  It part Lasudiyalad  452001', 'no', 0, NULL, '0', '0', '0', '0', '0', '0', '2022-09-30 11:25:00', '2022-09-30 11:25:00'),
(43, 91, 'Streaming Iron And Roll Press', '21,21,24,', 'jeans,hoodie,Pullover / hoodies,', '8959402332', '2,3,2,', '300', '0', '275', 'Cash on Delivery', '2022-09-30', 'Bhawarkuaa  It part Lasudiyalad  452001', 'd6feUJ', 25, NULL, '0', '0', '0', '0', '0', '0', '2022-09-30 11:32:09', '2022-09-30 11:32:09'),
(44, 88, 'Dry Cleaning', '23,', 'Imported,', '+918982891545', '5,', '5', '0', '5', 'Cash on Delivery', '2022-10-08', 'Gshjhehk Gskjggd Gsjhggjkd 35975799558', 'no', 0, NULL, '0', '0', '0', '0', '0', '0', '2022-09-30 12:33:30', '2022-09-30 12:33:30'),
(45, 88, 'Dry Cleaning', '21,', 'T-shirt,', '+918982891545', '3,', '81', '0', '81', 'Cash on Delivery', '2022-10-09', 'Gshjhehk Gskjggd Gsjhggjkd 35975799558', 'no', 0, NULL, '0', '0', '0', '0', '0', '0', '2022-09-30 18:09:23', '2022-09-30 18:09:23'),
(46, 88, 'Streaming Iron And Roll Press', '21,', 'T-shirt,', '+918982891545', '1,', '27', '0', '27', 'Cash on Delivery', '2022-10-06', 'Gshjhehk Gskjggd Gsjhggjkd 35975799558', 'no', 0, NULL, '0', '0', '0', '0', '0', '0', '2022-09-30 18:13:33', '2022-09-30 18:13:33'),
(47, 88, 'Dry Cleaning', '21,', 'T-shirt,', '+918269335928', '2,', '54', '0', '54', 'Cash on Delivery', '2022-10-12', 'Gshjhehk Gskjggd Gsjhggjkd 35975799558', 'no', 0, 'Accept', '0', '0', '0', '0', '0', '0', '2022-10-01 05:03:29', '2022-10-01 16:10:32'),
(48, 100, 'Dry Cleaning', '21,', 'T-shirt,', '68385529294', '1,', '27', '0', '27', 'Cash on Delivery', '2022-10-08', 'Indore', 'no', 0, 'Accept', '0', '0', '0', '0', '0', '0', '2022-10-01 06:57:09', '2022-10-01 15:54:43'),
(49, 73, 'Dry Cleaning', '21,21,21,', 'T-shirt,jeans,shirt,', '9617020436', '5,5,5,', '360', '0', '360', 'Cash on Delivery', '2022-10-02', '302 Prince plaza  Sapana Sangita  Indore  452001', 'no', 0, 'Accept', '0', '0', '0', '0', '0', '0', '2022-10-01 09:31:31', '2022-10-01 15:52:00'),
(50, 73, 'Dry Cleaning', '21,21,21,', 'T-shirt,jeans,shirt,', '9617020436', '3,3,3,', '216', '0', '216', 'Cash on Delivery', '2022-10-05', '302 Prince plaza  Sapana Sangita  Indore  452001', 'no', 0, NULL, '0', '0', '0', '0', '0', '0', '2022-10-04 04:34:44', '2022-10-04 04:34:44'),
(51, 73, 'Dry Cleaning', '24,', 'Pullover / hoodies,', '9617020436', '2,', '200', '0', '200', 'Cash on Delivery', '2022-10-06', '302 Prince plaza  Sapana Sangita  Indore  452001', 'no', 0, NULL, '0', '0', '0', '0', '0', '0', '2022-10-04 04:36:42', '2022-10-04 04:36:42'),
(52, 76, 'Dry Cleaning', '21,', 'T-shirt,', '8959402332', '2,', '54', '0', '54', 'Cash on Delivery', '2022-10-07', 'Indore madhyapradesh', 'no', 0, NULL, '0', '0', '0', '0', '0', '0', '2022-10-06 09:28:43', '2022-10-06 09:28:43'),
(53, 76, 'Dry Cleaning', '24,', 'Pullover / hoodies,', '8959402332', '3,', '300', '0', '300', 'Cash on Delivery', '2022-10-13', 'Indore madhyapradesh', 'no', 0, NULL, '0', '1', '1', '1', '0', '0', '2022-10-06 09:42:35', '2022-10-06 15:18:30'),
(54, 76, 'Dry Cleaning', '21,21,22,24,', 'jeans,shirt,jeans,Pullover / hoodies,', '8959402332', '2,3,3,2,', '330', '0', '330', 'Cash on Delivery', '2022-10-07', 'Indore madhyapradesh', 'no', 0, NULL, '0', '0', '0', '0', '0', '0', '2022-10-06 10:22:52', '2022-10-06 10:22:52'),
(55, 76, 'Dry Cleaning', '21,', 'jeans,', '8959402332', '2,', '70', '0', '45', 'Cash on Delivery', '2022-10-14', 'Indore madhyapradesh', 'd6feUJ', 25, NULL, '0', '0', '0', '0', '0', '0', '2022-10-13 05:54:20', '2022-10-13 05:54:20'),
(56, 76, 'Dry Cleaning', '21,21,22,21,23,24,', 'T-shirt,jeans,jeans,hoodie,Imported,Pullover / hoodies,', '8959402332', '3,2,3,3,3,2,', '414', '0', '389', 'Cash on Delivery', '2022-10-14', 'Indore madhyapradesh', 'd6feUJ', 25, NULL, '0', '0', '0', '0', '0', '0', '2022-10-13 06:25:15', '2022-10-13 06:25:15'),
(57, 73, 'Dry Cleaning', '21,21,', 'T-shirt,jeans,', '9617020436', '2,2,', '124', '0', '124', 'Cash on Delivery', '2022-10-29', '302 Prince plaza  Sapana Sangita  Indore  452001', 'no', 0, NULL, '0', '0', '0', '0', '0', '0', '2022-10-28 03:41:53', '2022-10-28 03:41:53'),
(58, 76, 'Dry Cleaning', '21,21,', 'T-shirt,jeans,', '8959402332', '4,2,', '178', '0', '153', 'Cash on Delivery', '2022-10-31', '115 navrang plaza Sapna sangeeta  Indore 452001', 'd6feUJ', 25, NULL, '0', '0', '0', '0', '0', '0', '2022-10-29 05:20:34', '2022-10-29 05:20:34'),
(59, 74, 'Dry Cleaning', '21,', 'Shirt / T shirt,', '9770921402', '1,', '30', '0', '30', 'Cash on Delivery', '2022-11-02', 'Limbodi Khandwa  Indore 452001', 'no', 0, NULL, '0', '0', '0', '0', '0', '0', '2022-11-01 07:51:12', '2022-11-01 07:51:12'),
(60, 76, 'dry cleaning', '21,', 'Shirt / T shirt,', '8959402332', '1,', '30', '0', '30', 'Cash on Delivery', '2022-12-03', '115 navrang plaza Sapna sangeeta  Indore 452001', 'no', 0, NULL, '0', '0', '0', '0', '0', '0', '2022-12-02 11:04:05', '2022-12-02 11:04:05'),
(61, 73, 'dry cleaning', '21,', 'Shirt / T shirt,', '9617020436', '2,', '60', '0', '60', 'Cash on Delivery', '2022-12-03', '302 Prince plaza  Sapana Sangita  Indore  452001', 'no', 0, NULL, '0', '0', '0', '0', '0', '0', '2022-12-02 12:22:26', '2022-12-02 12:22:26'),
(62, 101, 'dry cleaning', '21,', 'Shirt / T shirt,', '8269335928', '1,', '30', '0', '30', 'Cash on Delivery', '2022-12-08', '876 Indore Indore 498001', 'no', 0, NULL, '0', '0', '0', '0', '0', '0', '2022-12-02 12:39:57', '2022-12-02 12:39:57'),
(63, 101, 'streaming iron and roll press', '21,', 'p,', '8269335928', '2,', '20', '0', '20', 'Cash on Delivery', '2022-12-13', '876 Indore Indore 498001', 'no', 0, NULL, '0', '0', '0', '0', '0', '0', '2022-12-02 12:41:16', '2022-12-02 12:41:16');

-- --------------------------------------------------------

--
-- Table structure for table `directorder`
--

CREATE TABLE `directorder` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `endtime` time(6) NOT NULL,
  `quantity` varchar(200) NOT NULL,
  `starttime` time(6) NOT NULL,
  `date` date NOT NULL,
  `status` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `directorder`
--

INSERT INTO `directorder` (`id`, `user_id`, `endtime`, `quantity`, `starttime`, `date`, `status`, `created_at`, `updated_at`) VALUES
(14, 0, '838:59:59.000000', '838:59:59.000000', '05:00:00.000000', '2012-03-22', 'Accept', '2022-07-19 06:03:41', '2022-07-30 11:30:14'),
(24, 1, '10:30:00.000000', '10:30:00.000000', '23:16:00.000000', '2022-07-31', 'Complete', '2022-07-29 13:09:54', '2022-08-01 10:43:30'),
(25, 1, '10:30:00.000000', '10:30:00.000000', '23:16:00.000000', '2022-07-31', 'Reject', '2022-07-29 13:09:59', '2022-08-02 11:05:25'),
(28, 1, '10:30:00.000000', '15', '23:16:00.000000', '2022-07-31', NULL, '2022-07-30 06:05:13', '2022-07-30 06:05:13'),
(29, 60, '14:29:17.000000', '23', '01:30:03.000000', '2022-07-28', NULL, '2022-07-30 07:07:16', '2022-07-30 07:07:16'),
(30, 60, '14:29:17.000000', '50', '01:30:03.000000', '2022-07-28', NULL, '2022-07-30 07:08:27', '2022-07-30 07:08:27'),
(31, 60, '14:29:17.000000', '50', '01:30:03.000000', '2022-08-03', NULL, '2022-07-30 07:12:56', '2022-07-30 07:12:56'),
(32, 60, '18:30:39.000000', '18:30:39.000000', '03:15:28.000000', '2022-07-31', 'Accept', '2022-07-30 07:33:35', '2022-07-30 15:35:59'),
(33, 1, '10:30:00.000000', '15', '23:16:00.000000', '2022-07-31', NULL, '2022-08-04 06:44:39', '2022-08-04 06:44:39'),
(34, 1, '00:24:13.000000', '70', '00:00:08.000000', '2022-08-19', NULL, '2022-08-05 05:58:33', '2022-08-05 05:58:33'),
(35, 73, '01:36:07.000000', '01:36:07.000000', '00:00:01.000000', '2022-08-07', 'Complete', '2022-08-06 06:06:11', '2022-09-21 17:57:10'),
(36, 74, '15:11:19.000000', '20', '21:11:13.000000', '2022-08-25', NULL, '2022-08-24 15:41:24', '2022-08-24 15:41:24'),
(37, 88, '17:00:12.000000', '5', '14:10:51.000000', '2022-10-04', NULL, '2022-09-30 17:09:39', '2022-09-30 17:09:39'),
(38, 88, '00:00:23.000000', '12', '11:51:19.000000', '2022-10-21', NULL, '2022-10-01 06:21:38', '2022-10-01 06:21:38'),
(39, 88, '00:00:23.000000', '12', '11:51:19.000000', '2022-10-21', NULL, '2022-10-01 06:22:12', '2022-10-01 06:22:12'),
(40, 100, '12:27:30.000000', '7', '12:27:27.000000', '2022-10-02', NULL, '2022-10-01 06:57:46', '2022-10-01 06:57:46'),
(41, 76, '15:53:02.000000', '56', '12:00:08.000000', '2022-10-07', NULL, '2022-10-06 10:23:31', '2022-10-06 10:23:31'),
(42, 76, '13:05:05.000000', '12', '08:39:38.000000', '2022-11-01', NULL, '2022-10-28 03:10:22', '2022-10-28 03:10:22'),
(43, 76, '16:34:25.000000', '12', '16:34:22.000000', '2022-12-31', NULL, '2022-12-02 11:04:36', '2022-12-02 11:04:36'),
(44, 101, '12:01:06.000000', '5', '18:11:55.000000', '2022-12-15', NULL, '2022-12-02 12:42:27', '2022-12-02 12:42:27'),
(45, 101, '12:01:06.000000', '5', '18:11:55.000000', '2022-12-15', NULL, '2022-12-02 12:42:36', '2022-12-02 12:42:36'),
(46, 123, '20:01:37.000000', '3', '19:01:11.000000', '2022-12-22', NULL, '2022-12-16 09:31:52', '2022-12-16 09:31:52'),
(47, 123, '18:05:42.000000', '3', '14:05:36.000000', '2022-12-21', NULL, '2022-12-16 09:35:48', '2022-12-16 09:35:48');

-- --------------------------------------------------------

--
-- Table structure for table `discount`
--

CREATE TABLE `discount` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `code` varchar(50) NOT NULL,
  `time` date NOT NULL,
  `discount` varchar(10) NOT NULL,
  `discount_type` varchar(255) DEFAULT '0',
  `limit` varchar(1) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `discount`
--

INSERT INTO `discount` (`id`, `title`, `code`, `time`, `discount`, `discount_type`, `limit`, `image`, `created_at`, `updated_at`) VALUES
(14, 'Todays offer', '1G2VJ85', '2022-10-06', '10', 'Rupees', '1', 'image-1664529528.png', '2022-09-30 14:18:48', '2022-09-30 15:24:54'),
(15, 'Special Offer', 'Fg78Gw', '2022-10-09', '20', 'percent', '1', 'image-1664529571.png', '2022-09-30 14:19:31', '2022-09-30 15:25:01'),
(16, 'Diwali Dhamaka', 'd6feUJ', '2022-10-14', '25', 'percent', '1', 'image-1664529616.png', '2022-09-30 14:20:16', '2022-09-30 15:25:08');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `number` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `number`, `password`, `created_at`, `updated_at`) VALUES
(2, '2367236767', '87678264', '2022-07-07 16:19:21', '2022-07-07 16:19:21'),
(3, '23454545', 'ed5t5tg', '2022-07-15 02:10:34', '2022-07-15 02:10:34'),
(4, '23454545', 'ed5t5tg', '2022-07-15 05:42:54', '2022-07-15 05:42:54'),
(5, '23454545', 'ed5t5tg', '2022-07-15 05:45:27', '2022-07-15 05:45:27'),
(11, '7828424341', '123456789', '2022-07-18 05:05:46', '2022-07-18 05:05:46'),
(12, '9977443387', '123456789', '2022-07-19 05:14:19', '2022-07-19 05:14:19'),
(13, '9977443387', '123456789', '2022-07-19 05:21:50', '2022-07-19 05:21:50'),
(14, '23454545', 'ed5t5tg', '2022-07-19 05:37:33', '2022-07-19 05:37:33'),
(15, '23454545', 'ed5t5tg', '2022-07-19 05:39:00', '2022-07-19 05:39:00'),
(16, '23454545', 'ed5t5tg', '2022-07-20 06:30:59', '2022-07-20 06:30:59'),
(17, '9977443387', '$2y$10$AsNt7Xhk0gCtLr6zObZRDeCGq/2xP1JqwryddH95U8gxshEeZgqeW', '2022-07-26 01:53:37', '2022-07-26 01:53:37'),
(18, '9977443387', '$2y$10$FFlWnG3yxrzzMsv9KQ5cBOpVitBj0/pM0awlQyllzq6.EQvaqIeXq', '2022-07-26 01:54:26', '2022-07-26 01:54:26'),
(19, '9977443387', '$2y$10$jrQPLUWjcEW0r0WYyDkNa.oI0pV5jfiHnyvP6LJFmN2zqpimUrAyy', '2022-07-26 01:54:50', '2022-07-26 01:54:50');

-- --------------------------------------------------------

--
-- Table structure for table `Notification`
--

CREATE TABLE `Notification` (
  `id` int(11) NOT NULL,
  `user_id` int(255) NOT NULL,
  `order_id` int(11) DEFAULT NULL,
  `message` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `Notification`
--

INSERT INTO `Notification` (`id`, `user_id`, `order_id`, `message`, `created_at`, `updated_at`) VALUES
(1, 1, NULL, 'Hello its sheetal', '2022-12-01 18:30:00', '2022-12-02 10:44:36'),
(2, 1, 27, 'Ready_to_delivary', '2022-12-01 18:30:00', '2022-12-02 10:47:20'),
(3, 1, NULL, 'Hello its sheetal', '2022-12-01 18:30:00', '2022-12-02 10:50:15'),
(4, 76, NULL, 'Hello its sheetal', '2022-12-01 18:30:00', '2022-12-02 10:50:15'),
(5, 1, 60, 'picked_up', '2022-12-01 18:30:00', '2022-12-02 11:06:03'),
(6, 76, 60, 'picked_up', '2022-12-01 18:30:00', '2022-12-02 11:06:03'),
(7, 1, 60, 'Your order is picked up', '2022-12-01 18:30:00', '2022-12-02 11:07:05'),
(8, 76, 60, 'Your order is picked up', '2022-12-01 18:30:00', '2022-12-02 11:07:05'),
(9, 71, 23, 'picked_up', '2022-12-01 18:30:00', '2022-12-02 12:21:57'),
(10, 72, 23, 'picked_up', '2022-12-01 18:30:00', '2022-12-02 12:21:57'),
(11, 74, 23, 'picked_up', '2022-12-01 18:30:00', '2022-12-02 12:21:57'),
(12, 75, 23, 'picked_up', '2022-12-01 18:30:00', '2022-12-02 12:21:57'),
(13, 77, 23, 'picked_up', '2022-12-01 18:30:00', '2022-12-02 12:21:57'),
(14, 78, 23, 'picked_up', '2022-12-01 18:30:00', '2022-12-02 12:21:57'),
(15, 79, 23, 'picked_up', '2022-12-01 18:30:00', '2022-12-02 12:21:57'),
(16, 80, 23, 'picked_up', '2022-12-01 18:30:00', '2022-12-02 12:21:57'),
(17, 81, 23, 'picked_up', '2022-12-01 18:30:00', '2022-12-02 12:21:57'),
(18, 82, 23, 'picked_up', '2022-12-01 18:30:00', '2022-12-02 12:21:57'),
(19, 83, 23, 'picked_up', '2022-12-01 18:30:00', '2022-12-02 12:21:57'),
(20, 84, 23, 'picked_up', '2022-12-01 18:30:00', '2022-12-02 12:21:57'),
(21, 85, 23, 'picked_up', '2022-12-01 18:30:00', '2022-12-02 12:21:57'),
(22, 86, 23, 'picked_up', '2022-12-01 18:30:00', '2022-12-02 12:21:57'),
(23, 87, 23, 'picked_up', '2022-12-01 18:30:00', '2022-12-02 12:21:57'),
(24, 88, 23, 'picked_up', '2022-12-01 18:30:00', '2022-12-02 12:21:57'),
(25, 89, 23, 'picked_up', '2022-12-01 18:30:00', '2022-12-02 12:21:57'),
(26, 90, 23, 'picked_up', '2022-12-01 18:30:00', '2022-12-02 12:21:57'),
(27, 91, 23, 'picked_up', '2022-12-01 18:30:00', '2022-12-02 12:21:57'),
(28, 92, 23, 'picked_up', '2022-12-01 18:30:00', '2022-12-02 12:21:57'),
(29, 93, 23, 'picked_up', '2022-12-01 18:30:00', '2022-12-02 12:21:57'),
(30, 94, 23, 'picked_up', '2022-12-01 18:30:00', '2022-12-02 12:21:57'),
(31, 95, 23, 'picked_up', '2022-12-01 18:30:00', '2022-12-02 12:21:57'),
(32, 96, 23, 'picked_up', '2022-12-01 18:30:00', '2022-12-02 12:21:57'),
(33, 97, 23, 'picked_up', '2022-12-01 18:30:00', '2022-12-02 12:21:57'),
(34, 98, 23, 'picked_up', '2022-12-01 18:30:00', '2022-12-02 12:21:57'),
(35, 99, 23, 'picked_up', '2022-12-01 18:30:00', '2022-12-02 12:21:57'),
(36, 100, 23, 'picked_up', '2022-12-01 18:30:00', '2022-12-02 12:21:57'),
(37, 101, 23, 'picked_up', '2022-12-01 18:30:00', '2022-12-02 12:21:57'),
(38, 102, 23, 'picked_up', '2022-12-01 18:30:00', '2022-12-02 12:21:57'),
(39, 103, 23, 'picked_up', '2022-12-01 18:30:00', '2022-12-02 12:21:57'),
(40, 104, 23, 'picked_up', '2022-12-01 18:30:00', '2022-12-02 12:21:57'),
(41, 105, 23, 'picked_up', '2022-12-01 18:30:00', '2022-12-02 12:21:57'),
(42, 106, 23, 'picked_up', '2022-12-01 18:30:00', '2022-12-02 12:21:57'),
(43, 71, 61, 'picked_up', '2022-12-01 18:30:00', '2022-12-02 12:23:16'),
(44, 72, 61, 'picked_up', '2022-12-01 18:30:00', '2022-12-02 12:23:16'),
(45, 74, 61, 'picked_up', '2022-12-01 18:30:00', '2022-12-02 12:23:16'),
(46, 75, 61, 'picked_up', '2022-12-01 18:30:00', '2022-12-02 12:23:16'),
(47, 77, 61, 'picked_up', '2022-12-01 18:30:00', '2022-12-02 12:23:16'),
(48, 78, 61, 'picked_up', '2022-12-01 18:30:00', '2022-12-02 12:23:16'),
(49, 79, 61, 'picked_up', '2022-12-01 18:30:00', '2022-12-02 12:23:16'),
(50, 80, 61, 'picked_up', '2022-12-01 18:30:00', '2022-12-02 12:23:16'),
(51, 81, 61, 'picked_up', '2022-12-01 18:30:00', '2022-12-02 12:23:16'),
(52, 82, 61, 'picked_up', '2022-12-01 18:30:00', '2022-12-02 12:23:16'),
(53, 83, 61, 'picked_up', '2022-12-01 18:30:00', '2022-12-02 12:23:16'),
(54, 84, 61, 'picked_up', '2022-12-01 18:30:00', '2022-12-02 12:23:16'),
(55, 85, 61, 'picked_up', '2022-12-01 18:30:00', '2022-12-02 12:23:16'),
(56, 86, 61, 'picked_up', '2022-12-01 18:30:00', '2022-12-02 12:23:16'),
(57, 87, 61, 'picked_up', '2022-12-01 18:30:00', '2022-12-02 12:23:16'),
(58, 88, 61, 'picked_up', '2022-12-01 18:30:00', '2022-12-02 12:23:16'),
(59, 89, 61, 'picked_up', '2022-12-01 18:30:00', '2022-12-02 12:23:16'),
(60, 90, 61, 'picked_up', '2022-12-01 18:30:00', '2022-12-02 12:23:16'),
(61, 91, 61, 'picked_up', '2022-12-01 18:30:00', '2022-12-02 12:23:16'),
(62, 92, 61, 'picked_up', '2022-12-01 18:30:00', '2022-12-02 12:23:16'),
(63, 93, 61, 'picked_up', '2022-12-01 18:30:00', '2022-12-02 12:23:16'),
(64, 94, 61, 'picked_up', '2022-12-01 18:30:00', '2022-12-02 12:23:16'),
(65, 95, 61, 'picked_up', '2022-12-01 18:30:00', '2022-12-02 12:23:16'),
(66, 96, 61, 'picked_up', '2022-12-01 18:30:00', '2022-12-02 12:23:16'),
(67, 97, 61, 'picked_up', '2022-12-01 18:30:00', '2022-12-02 12:23:16'),
(68, 98, 61, 'picked_up', '2022-12-01 18:30:00', '2022-12-02 12:23:16'),
(69, 99, 61, 'picked_up', '2022-12-01 18:30:00', '2022-12-02 12:23:16'),
(70, 100, 61, 'picked_up', '2022-12-01 18:30:00', '2022-12-02 12:23:16'),
(71, 101, 61, 'picked_up', '2022-12-01 18:30:00', '2022-12-02 12:23:16'),
(72, 102, 61, 'picked_up', '2022-12-01 18:30:00', '2022-12-02 12:23:16'),
(73, 103, 61, 'picked_up', '2022-12-01 18:30:00', '2022-12-02 12:23:16'),
(74, 104, 61, 'picked_up', '2022-12-01 18:30:00', '2022-12-02 12:23:16'),
(75, 105, 61, 'picked_up', '2022-12-01 18:30:00', '2022-12-02 12:23:16'),
(76, 106, 61, 'picked_up', '2022-12-01 18:30:00', '2022-12-02 12:23:16'),
(77, 71, 61, 'picked_up', '2022-12-01 18:30:00', '2022-12-02 12:24:29'),
(78, 72, 61, 'picked_up', '2022-12-01 18:30:00', '2022-12-02 12:24:29'),
(79, 74, 61, 'picked_up', '2022-12-01 18:30:00', '2022-12-02 12:24:29'),
(80, 75, 61, 'picked_up', '2022-12-01 18:30:00', '2022-12-02 12:24:29'),
(81, 77, 61, 'picked_up', '2022-12-01 18:30:00', '2022-12-02 12:24:29'),
(82, 78, 61, 'picked_up', '2022-12-01 18:30:00', '2022-12-02 12:24:29'),
(83, 79, 61, 'picked_up', '2022-12-01 18:30:00', '2022-12-02 12:24:29'),
(84, 80, 61, 'picked_up', '2022-12-01 18:30:00', '2022-12-02 12:24:29'),
(85, 81, 61, 'picked_up', '2022-12-01 18:30:00', '2022-12-02 12:24:29'),
(86, 82, 61, 'picked_up', '2022-12-01 18:30:00', '2022-12-02 12:24:29'),
(87, 83, 61, 'picked_up', '2022-12-01 18:30:00', '2022-12-02 12:24:29'),
(88, 84, 61, 'picked_up', '2022-12-01 18:30:00', '2022-12-02 12:24:29'),
(89, 85, 61, 'picked_up', '2022-12-01 18:30:00', '2022-12-02 12:24:29'),
(90, 86, 61, 'picked_up', '2022-12-01 18:30:00', '2022-12-02 12:24:29'),
(91, 87, 61, 'picked_up', '2022-12-01 18:30:00', '2022-12-02 12:24:29'),
(92, 88, 61, 'picked_up', '2022-12-01 18:30:00', '2022-12-02 12:24:29'),
(93, 89, 61, 'picked_up', '2022-12-01 18:30:00', '2022-12-02 12:24:29'),
(94, 90, 61, 'picked_up', '2022-12-01 18:30:00', '2022-12-02 12:24:29'),
(95, 91, 61, 'picked_up', '2022-12-01 18:30:00', '2022-12-02 12:24:29'),
(96, 92, 61, 'picked_up', '2022-12-01 18:30:00', '2022-12-02 12:24:29'),
(97, 93, 61, 'picked_up', '2022-12-01 18:30:00', '2022-12-02 12:24:29'),
(98, 94, 61, 'picked_up', '2022-12-01 18:30:00', '2022-12-02 12:24:29'),
(99, 95, 61, 'picked_up', '2022-12-01 18:30:00', '2022-12-02 12:24:29'),
(100, 96, 61, 'picked_up', '2022-12-01 18:30:00', '2022-12-02 12:24:29'),
(101, 97, 61, 'picked_up', '2022-12-01 18:30:00', '2022-12-02 12:24:29'),
(102, 98, 61, 'picked_up', '2022-12-01 18:30:00', '2022-12-02 12:24:29'),
(103, 99, 61, 'picked_up', '2022-12-01 18:30:00', '2022-12-02 12:24:29'),
(104, 100, 61, 'picked_up', '2022-12-01 18:30:00', '2022-12-02 12:24:29'),
(105, 101, 61, 'picked_up', '2022-12-01 18:30:00', '2022-12-02 12:24:29'),
(106, 102, 61, 'picked_up', '2022-12-01 18:30:00', '2022-12-02 12:24:29'),
(107, 103, 61, 'picked_up', '2022-12-01 18:30:00', '2022-12-02 12:24:29'),
(108, 104, 61, 'picked_up', '2022-12-01 18:30:00', '2022-12-02 12:24:29'),
(109, 105, 61, 'picked_up', '2022-12-01 18:30:00', '2022-12-02 12:24:29'),
(110, 106, 61, 'picked_up', '2022-12-01 18:30:00', '2022-12-02 12:24:29'),
(111, 71, 61, 'picked_up', '2022-12-06 18:30:00', '2022-12-07 07:24:17'),
(112, 72, 61, 'picked_up', '2022-12-06 18:30:00', '2022-12-07 07:24:17'),
(113, 74, 61, 'picked_up', '2022-12-06 18:30:00', '2022-12-07 07:24:17'),
(114, 75, 61, 'picked_up', '2022-12-06 18:30:00', '2022-12-07 07:24:17'),
(115, 77, 61, 'picked_up', '2022-12-06 18:30:00', '2022-12-07 07:24:17'),
(116, 78, 61, 'picked_up', '2022-12-06 18:30:00', '2022-12-07 07:24:17'),
(117, 79, 61, 'picked_up', '2022-12-06 18:30:00', '2022-12-07 07:24:17'),
(118, 80, 61, 'picked_up', '2022-12-06 18:30:00', '2022-12-07 07:24:17'),
(119, 81, 61, 'picked_up', '2022-12-06 18:30:00', '2022-12-07 07:24:17'),
(120, 82, 61, 'picked_up', '2022-12-06 18:30:00', '2022-12-07 07:24:17'),
(121, 83, 61, 'picked_up', '2022-12-06 18:30:00', '2022-12-07 07:24:17'),
(122, 84, 61, 'picked_up', '2022-12-06 18:30:00', '2022-12-07 07:24:17'),
(123, 85, 61, 'picked_up', '2022-12-06 18:30:00', '2022-12-07 07:24:17'),
(124, 86, 61, 'picked_up', '2022-12-06 18:30:00', '2022-12-07 07:24:17'),
(125, 87, 61, 'picked_up', '2022-12-06 18:30:00', '2022-12-07 07:24:17'),
(126, 89, 61, 'picked_up', '2022-12-06 18:30:00', '2022-12-07 07:24:17'),
(127, 90, 61, 'picked_up', '2022-12-06 18:30:00', '2022-12-07 07:24:17'),
(128, 91, 61, 'picked_up', '2022-12-06 18:30:00', '2022-12-07 07:24:17'),
(129, 92, 61, 'picked_up', '2022-12-06 18:30:00', '2022-12-07 07:24:17'),
(130, 93, 61, 'picked_up', '2022-12-06 18:30:00', '2022-12-07 07:24:17'),
(131, 94, 61, 'picked_up', '2022-12-06 18:30:00', '2022-12-07 07:24:17'),
(132, 95, 61, 'picked_up', '2022-12-06 18:30:00', '2022-12-07 07:24:17'),
(133, 96, 61, 'picked_up', '2022-12-06 18:30:00', '2022-12-07 07:24:17'),
(134, 97, 61, 'picked_up', '2022-12-06 18:30:00', '2022-12-07 07:24:17'),
(135, 98, 61, 'picked_up', '2022-12-06 18:30:00', '2022-12-07 07:24:17'),
(136, 99, 61, 'picked_up', '2022-12-06 18:30:00', '2022-12-07 07:24:17'),
(137, 100, 61, 'picked_up', '2022-12-06 18:30:00', '2022-12-07 07:24:17'),
(138, 102, 61, 'picked_up', '2022-12-06 18:30:00', '2022-12-07 07:24:17'),
(139, 103, 61, 'picked_up', '2022-12-06 18:30:00', '2022-12-07 07:24:17'),
(140, 104, 61, 'picked_up', '2022-12-06 18:30:00', '2022-12-07 07:24:17'),
(141, 105, 61, 'picked_up', '2022-12-06 18:30:00', '2022-12-07 07:24:17'),
(142, 107, 61, 'picked_up', '2022-12-06 18:30:00', '2022-12-07 07:24:17'),
(143, 108, 61, 'picked_up', '2022-12-06 18:30:00', '2022-12-07 07:24:17'),
(144, 109, 61, 'picked_up', '2022-12-06 18:30:00', '2022-12-07 07:24:17'),
(145, 110, 61, 'picked_up', '2022-12-06 18:30:00', '2022-12-07 07:24:17'),
(146, 113, 61, 'picked_up', '2022-12-06 18:30:00', '2022-12-07 07:24:17'),
(147, 71, 61, 'delivered', '2022-12-06 18:30:00', '2022-12-07 07:25:14'),
(148, 72, 61, 'delivered', '2022-12-06 18:30:00', '2022-12-07 07:25:14'),
(149, 74, 61, 'delivered', '2022-12-06 18:30:00', '2022-12-07 07:25:14'),
(150, 75, 61, 'delivered', '2022-12-06 18:30:00', '2022-12-07 07:25:14'),
(151, 77, 61, 'delivered', '2022-12-06 18:30:00', '2022-12-07 07:25:14'),
(152, 78, 61, 'delivered', '2022-12-06 18:30:00', '2022-12-07 07:25:14'),
(153, 79, 61, 'delivered', '2022-12-06 18:30:00', '2022-12-07 07:25:14'),
(154, 80, 61, 'delivered', '2022-12-06 18:30:00', '2022-12-07 07:25:14'),
(155, 81, 61, 'delivered', '2022-12-06 18:30:00', '2022-12-07 07:25:14'),
(156, 82, 61, 'delivered', '2022-12-06 18:30:00', '2022-12-07 07:25:14'),
(157, 83, 61, 'delivered', '2022-12-06 18:30:00', '2022-12-07 07:25:14'),
(158, 84, 61, 'delivered', '2022-12-06 18:30:00', '2022-12-07 07:25:14'),
(159, 85, 61, 'delivered', '2022-12-06 18:30:00', '2022-12-07 07:25:14'),
(160, 86, 61, 'delivered', '2022-12-06 18:30:00', '2022-12-07 07:25:14'),
(161, 87, 61, 'delivered', '2022-12-06 18:30:00', '2022-12-07 07:25:14'),
(162, 89, 61, 'delivered', '2022-12-06 18:30:00', '2022-12-07 07:25:14'),
(163, 90, 61, 'delivered', '2022-12-06 18:30:00', '2022-12-07 07:25:14'),
(164, 91, 61, 'delivered', '2022-12-06 18:30:00', '2022-12-07 07:25:14'),
(165, 92, 61, 'delivered', '2022-12-06 18:30:00', '2022-12-07 07:25:14'),
(166, 93, 61, 'delivered', '2022-12-06 18:30:00', '2022-12-07 07:25:14'),
(167, 94, 61, 'delivered', '2022-12-06 18:30:00', '2022-12-07 07:25:14'),
(168, 95, 61, 'delivered', '2022-12-06 18:30:00', '2022-12-07 07:25:14'),
(169, 96, 61, 'delivered', '2022-12-06 18:30:00', '2022-12-07 07:25:14'),
(170, 97, 61, 'delivered', '2022-12-06 18:30:00', '2022-12-07 07:25:14'),
(171, 98, 61, 'delivered', '2022-12-06 18:30:00', '2022-12-07 07:25:14'),
(172, 99, 61, 'delivered', '2022-12-06 18:30:00', '2022-12-07 07:25:14'),
(173, 100, 61, 'delivered', '2022-12-06 18:30:00', '2022-12-07 07:25:14'),
(174, 102, 61, 'delivered', '2022-12-06 18:30:00', '2022-12-07 07:25:14'),
(175, 103, 61, 'delivered', '2022-12-06 18:30:00', '2022-12-07 07:25:14'),
(176, 104, 61, 'delivered', '2022-12-06 18:30:00', '2022-12-07 07:25:14'),
(177, 105, 61, 'delivered', '2022-12-06 18:30:00', '2022-12-07 07:25:14'),
(178, 107, 61, 'delivered', '2022-12-06 18:30:00', '2022-12-07 07:25:14'),
(179, 108, 61, 'delivered', '2022-12-06 18:30:00', '2022-12-07 07:25:14'),
(180, 109, 61, 'delivered', '2022-12-06 18:30:00', '2022-12-07 07:25:14'),
(181, 110, 61, 'delivered', '2022-12-06 18:30:00', '2022-12-07 07:25:14'),
(182, 113, 61, 'delivered', '2022-12-06 18:30:00', '2022-12-07 07:25:14');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id` int(11) NOT NULL,
  `item` int(255) NOT NULL,
  `rupees` int(255) NOT NULL,
  `subtotal` int(255) NOT NULL,
  `total` int(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orderlist`
--

CREATE TABLE `orderlist` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `number` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `quantity` varchar(200) NOT NULL,
  `time` time(6) NOT NULL,
  `date` date NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orderlist`
--

INSERT INTO `orderlist` (`id`, `name`, `number`, `address`, `quantity`, `time`, `date`, `status`, `created_at`, `updated_at`) VALUES
(1, 'abc', '2434554545', 'bhopal', '4', '06:00:00.000000', '2012-03-22', 'Complete', '2022-07-14 02:35:15', '2022-07-14 04:51:47');

-- --------------------------------------------------------

--
-- Table structure for table `otp`
--

CREATE TABLE `otp` (
  `id` int(11) NOT NULL,
  `mobile_number` varchar(50) NOT NULL,
  `otp` varchar(10) NOT NULL,
  `create_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `otp`
--

INSERT INTO `otp` (`id`, `mobile_number`, `otp`, `create_at`, `updated_at`) VALUES
(2, '2367236767', '87678264', '2022-07-07 16:46:16', '2022-07-07 16:46:16'),
(3, '2367236767', '87678264', '2022-07-07 16:47:27', '2022-07-07 16:47:27'),
(4, '1234342342', '1234', '2022-07-07 16:48:48', '2022-07-07 16:48:48'),
(5, '1234567890', '3456', '2022-07-15 02:39:11', '2022-07-15 02:39:11'),
(6, '1234567890', '3456', '2022-07-15 04:03:37', '2022-07-15 04:03:37'),
(7, '9078906578', '1234', '2022-07-18 03:09:01', '2022-07-18 03:09:01'),
(8, '7828424341', '1234', '2022-07-18 03:09:41', '2022-07-18 03:09:41'),
(9, '7828424341', '1234', '2022-07-18 03:10:49', '2022-07-18 03:10:49'),
(10, '7828424341', '1234', '2022-07-18 03:51:37', '2022-07-18 03:51:37'),
(11, '1234567890', '3456', '2022-07-20 01:11:17', '2022-07-20 01:11:17'),
(12, '1234567890', '3456', '2022-07-20 05:34:43', '2022-07-20 05:34:43'),
(13, '1234567890', '3456', '2022-07-20 05:34:46', '2022-07-20 05:34:46'),
(14, '1234567890', '3456', '2022-07-20 05:34:50', '2022-07-20 05:34:50'),
(15, '1234567890', '3456', '2022-07-20 05:35:13', '2022-07-20 05:35:13'),
(16, '1234567890', '3456', '2022-07-20 05:35:25', '2022-07-20 05:35:25');

-- --------------------------------------------------------

--
-- Table structure for table `Rating`
--

CREATE TABLE `Rating` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `rating` varchar(5) NOT NULL,
  `Description` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `Rating`
--

INSERT INTO `Rating` (`id`, `username`, `rating`, `Description`, `created_at`, `updated_at`) VALUES
(14, 'rohit', '2', 'text', '2022-08-01 12:53:28', '2022-08-01 12:53:28'),
(8, 'khan', '5', 'lorem ipsum text', '2022-07-23 07:41:26', '2022-08-01 12:50:05'),
(13, 'abcd', '5', 'lorem ipsum text...', '2022-08-01 07:15:43', '2022-08-01 12:43:32'),
(15, 'abcd', '5', 'lorem ipsum text', '2022-10-12 10:45:15', '2022-10-12 10:45:15');

-- --------------------------------------------------------

--
-- Table structure for table `Reviews`
--

CREATE TABLE `Reviews` (
  `id` int(11) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `Ratenumber` varchar(255) NOT NULL,
  `Description` varchar(255) NOT NULL,
  `Created_at` timestamp NULL DEFAULT current_timestamp(),
  `Updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `Reviews`
--

INSERT INTO `Reviews` (`id`, `Username`, `Ratenumber`, `Description`, `Created_at`, `Updated_at`) VALUES
(2, 'rohit', '4', 'simple text', '2022-07-27 18:01:21', '2022-07-27 18:01:21');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `id` int(11) NOT NULL,
  `category_id` varchar(11) NOT NULL,
  `subcategory_id` varchar(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `price` varchar(200) NOT NULL,
  `status` varchar(200) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `count` int(1) NOT NULL DEFAULT 0,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`id`, `category_id`, `subcategory_id`, `name`, `price`, `status`, `image`, `count`, `created_at`, `updated_at`) VALUES
(204, '7', '21', 'Shirt / T shirt', '30', '1', NULL, 0, '2022-12-07 07:26:59', '2022-12-07 07:26:59'),
(205, '7', '21', 'white shirt / T shirt', '50', '1', NULL, 0, '2022-12-07 07:27:19', '2022-12-07 07:27:19'),
(206, '7', '21', 'Pent / jeans / Trousers', '30', '1', NULL, 0, '2022-12-07 07:27:39', '2022-12-07 07:27:39'),
(207, '7', '21', 'white pent / jeans Trouser', '50', '1', NULL, 0, '2022-12-07 07:27:59', '2022-12-07 07:27:59'),
(208, '7', '21', 'Pullover / hoodies', '80', '1', NULL, 0, '2022-12-07 07:28:18', '2022-12-07 07:28:18'),
(209, '7', '21', 'White Pullover / hoodies', '99', '1', NULL, 0, '2022-12-07 07:28:35', '2022-12-07 07:28:35'),
(210, '7', '21', 'Sweat Jackets', '149', '1', NULL, 0, '2022-12-07 07:28:51', '2022-12-07 07:28:51'),
(211, '7', '21', 'Sweaters', '149', '1', NULL, 0, '2022-12-07 07:29:54', '2022-12-07 07:29:54'),
(212, '7', '21', 'Leather Jackets', '180', '1', NULL, 0, '2022-12-07 07:30:29', '2022-12-07 07:30:29'),
(213, '7', '21', 'Sherwani', '199', '1', NULL, 0, '2022-12-07 07:30:57', '2022-12-07 07:30:57'),
(214, '7', '21', 'white Sherwani', '249', '1', NULL, 0, '2022-12-07 07:31:18', '2022-12-07 07:31:18'),
(215, '7', '21', 'Modi Jackets', '80', '1', NULL, 0, '2022-12-07 07:31:36', '2022-12-07 07:31:36'),
(216, '7', '21', 'Singal pics blazer / coat', '149', '1', NULL, 0, '2022-12-07 07:31:57', '2022-12-07 07:31:57'),
(217, '7', '21', '2 pics blazer / coat', '199', '1', NULL, 0, '2022-12-07 07:32:21', '2022-12-07 07:32:21'),
(218, '7', '21', '3 pics blazer / coat', '249', '1', NULL, 0, '2022-12-07 07:32:41', '2022-12-07 07:32:41'),
(219, '7', '21', '4 pics blazer / coat', '299', '1', NULL, 0, '2022-12-07 07:33:00', '2022-12-07 07:33:00'),
(220, '7', '21', 'Kurta Paijama', '99', '1', NULL, 0, '2022-12-07 07:33:21', '2022-12-07 07:33:21'),
(221, '7', '21', 'White Kurta Paijama', '120', '1', NULL, 0, '2022-12-07 07:33:39', '2022-12-07 07:33:39'),
(222, '7', '24', 'Blanket Singal Bed', '250', '1', NULL, 0, '2022-12-07 07:36:44', '2022-12-07 07:36:44'),
(223, '7', '24', 'Blanket Double Bed', '300', '1', NULL, 0, '2022-12-07 07:37:00', '2022-12-07 07:37:00'),
(224, '7', '24', 'Door Curtens', '99', '1', NULL, 0, '2022-12-07 07:37:17', '2022-12-07 07:37:17'),
(225, '7', '24', 'Window Curtens', '99', '1', NULL, 0, '2022-12-07 07:37:34', '2022-12-07 07:37:34'),
(226, '7', '24', 'Bedsheet Singal bed', '80', '1', NULL, 0, '2022-12-07 07:39:17', '2022-12-07 07:39:17'),
(227, '7', '24', 'Bedsheet Double bed', '120', '1', NULL, 0, '2022-12-07 07:39:34', '2022-12-07 07:39:34'),
(228, '7', '24', 'Shawl', '149', '1', NULL, 0, '2022-12-07 07:39:59', '2022-12-07 07:39:59'),
(229, '7', '24', 'Comforter small size', '249', '1', NULL, 0, '2022-12-07 07:40:18', '2022-12-07 07:40:18'),
(230, '7', '24', 'Comforter Big size', '299', '1', NULL, 0, '2022-12-07 07:40:38', '2022-12-07 07:40:38'),
(231, '7', '24', 'Pillow cover', '30', '1', NULL, 0, '2022-12-07 07:40:58', '2022-12-07 07:40:58'),
(232, '7', '24', 'Sofa cover per pics', '50', '1', NULL, 0, '2022-12-07 07:41:19', '2022-12-07 07:41:19'),
(233, '7', '24', 'Sofa cover big size', '149', '1', NULL, 0, '2022-12-07 07:41:36', '2022-12-07 07:41:36'),
(234, '7', '24', 'Mat / galicha small', '249', '1', NULL, 0, '2022-12-07 07:42:01', '2022-12-07 07:42:01'),
(235, '7', '24', 'Mat / galicha big', '349', '1', NULL, 0, '2022-12-07 07:42:37', '2022-12-07 07:42:37'),
(236, '7', '22', 'Shirt / T shirt / Top', '30', '1', NULL, 0, '2022-12-07 08:34:14', '2022-12-07 08:34:14'),
(237, '7', '22', 'white shirt / T shirt / Top', '50', '1', NULL, 0, '2022-12-07 08:34:32', '2022-12-07 08:34:32'),
(238, '7', '22', 'Pent / jeans / Trousers', '30', '1', NULL, 0, '2022-12-07 08:34:44', '2022-12-07 08:34:44'),
(239, '7', '22', 'Plazo / Garara / sharara', '50', '1', NULL, 0, '2022-12-07 08:35:08', '2022-12-07 08:35:08'),
(240, '7', '22', 'white pent / jeans Trouser', '50', '1', NULL, 0, '2022-12-07 08:35:27', '2022-12-07 08:35:27'),
(241, '7', '22', 'Pullover / hoodies', '80', '1', NULL, 0, '2022-12-07 08:35:43', '2022-12-07 08:35:43'),
(242, '7', '22', 'White Pullover / hoodies', '99', '1', NULL, 0, '2022-12-07 08:35:58', '2022-12-07 08:35:58'),
(243, '7', '22', 'Sweat Jackets', '149', '1', NULL, 0, '2022-12-07 08:36:13', '2022-12-07 08:36:13'),
(244, '7', '22', 'Sweaters', '149', '1', NULL, 0, '2022-12-07 08:36:24', '2022-12-07 08:36:24'),
(245, '7', '22', 'Leather Jackets', '180', '1', NULL, 0, '2022-12-07 08:36:40', '2022-12-07 08:36:40'),
(246, '7', '22', 'Regular Sari', '99', '1', NULL, 0, '2022-12-07 08:38:03', '2022-12-07 08:38:03'),
(247, '7', '22', 'Blouse', '50', '1', NULL, 0, '2022-12-07 08:38:17', '2022-12-07 08:38:17'),
(248, '7', '22', 'Peticote / Ghagra', '70', '1', NULL, 0, '2022-12-07 08:38:33', '2022-12-07 08:38:33'),
(249, '7', '22', 'Work sari', '149', '1', NULL, 0, '2022-12-07 08:38:51', '2022-12-07 08:38:51'),
(250, '7', '22', 'Heavy Sari', '199', '1', NULL, 0, '2022-12-07 08:39:07', '2022-12-07 08:39:07'),
(251, '7', '22', 'Salwar Kurties chuni', '149', '1', NULL, 0, '2022-12-07 08:39:23', '2022-12-07 08:39:23'),
(252, '7', '22', 'only kurties', '99', '1', NULL, 0, '2022-12-07 08:39:45', '2022-12-07 08:39:45'),
(253, '7', '22', 'Night Gown', '99', '1', NULL, 0, '2022-12-07 08:39:59', '2022-12-07 08:39:59'),
(254, '7', '22', 'Weeding Lehanga /Gown', '249', '1', NULL, 0, '2022-12-07 08:40:17', '2022-12-07 08:40:17'),
(255, '7', '22', 'White Weeding Lehanga /Gown', '299', '1', NULL, 0, '2022-12-07 08:40:33', '2022-12-07 08:40:33'),
(256, '7', '22', 'Bridal Lehanga / Gown', '499', '1', NULL, 0, '2022-12-07 08:40:48', '2022-12-07 08:40:48'),
(257, '7', '22', 'White Bridal Lehanga / Gown', '599', '1', NULL, 0, '2022-12-07 08:41:03', '2022-12-07 08:41:03'),
(258, '7', '23', 'Shirt / T shirt', '20', '1', NULL, 0, '2022-12-07 08:44:04', '2022-12-07 08:44:04'),
(259, '7', '23', 'white shirt / T shirt', '30', '1', NULL, 0, '2022-12-07 08:44:18', '2022-12-07 08:44:18'),
(260, '7', '23', 'Pent / jeans / Trousers', '20', '1', NULL, 0, '2022-12-07 08:44:32', '2022-12-07 08:44:32'),
(261, '7', '23', 'white pent / jeans Trouser', '30', '1', NULL, 0, '2022-12-07 08:44:48', '2022-12-07 08:44:48'),
(262, '7', '23', 'Pullover / hoodies', '50', '1', NULL, 0, '2022-12-07 08:45:01', '2022-12-07 08:45:01'),
(263, '7', '23', 'White Pullover / hoodies', '70', '1', NULL, 0, '2022-12-07 08:45:15', '2022-12-07 08:45:15'),
(264, '7', '23', 'Sweat Jackets', '99', '1', NULL, 0, '2022-12-07 08:45:30', '2022-12-07 08:45:30'),
(265, '7', '23', 'Sweaters', '99', '1', NULL, 0, '2022-12-07 08:45:44', '2022-12-07 08:45:44'),
(266, '7', '23', 'Leather Jackets', '120', '1', NULL, 0, '2022-12-07 08:46:01', '2022-12-07 08:46:01'),
(267, '7', '23', 'Sherwani', '130', '1', NULL, 0, '2022-12-07 08:46:19', '2022-12-07 08:46:19'),
(268, '7', '23', 'white Sherwani', '149', '1', NULL, 0, '2022-12-07 08:46:36', '2022-12-07 08:46:36'),
(269, '7', '23', 'Modi Jackets', '50', '1', NULL, 0, '2022-12-07 08:46:50', '2022-12-07 08:46:50'),
(270, '7', '23', 'Singal pics blazer / coat', '99', '1', NULL, 0, '2022-12-07 08:47:04', '2022-12-07 08:47:04'),
(271, '7', '23', '2 pics blazer / coat', '149', '1', NULL, 0, '2022-12-07 08:47:18', '2022-12-07 08:47:18'),
(272, '7', '23', '3 pics blazer / coat', '199', '1', NULL, 0, '2022-12-07 08:47:50', '2022-12-07 08:47:50'),
(273, '7', '23', '4 pics blazer / coat', '249', '1', NULL, 0, '2022-12-07 08:48:04', '2022-12-07 08:48:04'),
(274, '7', '23', 'Kurta Paijama', '80', '1', NULL, 0, '2022-12-07 08:48:18', '2022-12-07 08:48:18'),
(275, '7', '23', 'White Kurta Paijama', '99', '1', NULL, 0, '2022-12-07 08:48:33', '2022-12-07 08:48:33'),
(276, '7', '23', 'baby girl Frock', '99', '1', NULL, 0, '2022-12-07 08:48:47', '2022-12-07 08:48:47'),
(277, '7', '23', 'baby girl desinger Frock', '149', '1', NULL, 0, '2022-12-07 08:49:01', '2022-12-07 08:49:01'),
(278, '7', '23', 'baby girl Wihite desinger Frock', '175', '1', NULL, 0, '2022-12-07 08:49:17', '2022-12-07 08:49:17'),
(279, '7', '23', 'Weding Dress', '199', '1', NULL, 0, '2022-12-07 08:49:39', '2022-12-07 08:49:39');

-- --------------------------------------------------------

--
-- Table structure for table `subcategory`
--

CREATE TABLE `subcategory` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `status` varchar(200) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `subcategory`
--

INSERT INTO `subcategory` (`id`, `category_id`, `name`, `status`, `created_at`, `updated_at`) VALUES
(21, 7, 'man', '1', '2022-09-22 10:26:33', '2022-09-22 10:26:33'),
(22, 7, 'women', '1', '2022-09-22 10:29:27', '2022-09-22 10:29:27'),
(23, 7, 'child', '1', '2022-09-22 10:29:38', '2022-09-22 10:29:38'),
(24, 7, 'house hold', '1', '2022-09-22 10:29:53', '2022-09-22 10:29:53');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ads`
--
ALTER TABLE `ads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `create`
--
ALTER TABLE `create`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Customerdetails`
--
ALTER TABLE `Customerdetails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `detailsorder`
--
ALTER TABLE `detailsorder`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `directorder`
--
ALTER TABLE `directorder`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `discount`
--
ALTER TABLE `discount`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Notification`
--
ALTER TABLE `Notification`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orderlist`
--
ALTER TABLE `orderlist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `otp`
--
ALTER TABLE `otp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Rating`
--
ALTER TABLE `Rating`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Reviews`
--
ALTER TABLE `Reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subcategory`
--
ALTER TABLE `subcategory`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ads`
--
ALTER TABLE `ads`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `create`
--
ALTER TABLE `create`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=133;

--
-- AUTO_INCREMENT for table `Customerdetails`
--
ALTER TABLE `Customerdetails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `detailsorder`
--
ALTER TABLE `detailsorder`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `directorder`
--
ALTER TABLE `directorder`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `discount`
--
ALTER TABLE `discount`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `Notification`
--
ALTER TABLE `Notification`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=183;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orderlist`
--
ALTER TABLE `orderlist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `otp`
--
ALTER TABLE `otp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `Rating`
--
ALTER TABLE `Rating`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `Reviews`
--
ALTER TABLE `Reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=281;

--
-- AUTO_INCREMENT for table `subcategory`
--
ALTER TABLE `subcategory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
