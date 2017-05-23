-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 17, 2017 at 12:37 PM
-- Server version: 5.7.17-0ubuntu0.16.04.1
-- PHP Version: 7.0.13-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `qlda`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(50) NOT NULL COMMENT 'AUTO_INCREMENT',
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `first_name`, `last_name`, `email`, `password`) VALUES
(1, 'Van A', 'Nguyen ', 'nguyenvana@gmail.com', 'ba3253876aed6bc22d4a6ff53d8406c6ad864195ed144ab5c87621b6c233b548baeae6956df346ec8c17f5ea10f35ee3cbc514797ed7ddd3145464e2a0bab413');

-- --------------------------------------------------------

--
-- Table structure for table `advs`
--

CREATE TABLE `advs` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `advs`
--

INSERT INTO `advs` (`id`, `name`, `description`) VALUES
(1, '1.jpg', ''),
(2, '3.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` int(11) NOT NULL,
  `name` varchar(100) CHARACTER SET utf8 NOT NULL,
  `title` varchar(255) CHARACTER SET utf8 NOT NULL,
  `description` varchar(255) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `name`, `title`, `description`) VALUES
(1, '1.png', 'Giảm thêm 10% khi mua trên DoDo App', 'Áp dụng cho các dòng máy Oppo'),
(2, '2.png', 'Bạn mong đợi gì tại đại hội di động lớn nhất năm ?', ''),
(3, '3.png', 'LG Watch Style và LG Watch Sport chính thức lên kệ', ''),
(4, '4.gif', 'Smartwatch 2016: Apple thống trị với gần một nửa thị phần', '');

-- --------------------------------------------------------

--
-- Table structure for table `business`
--

CREATE TABLE `business` (
  `id` int(50) NOT NULL,
  `name` varchar(150) NOT NULL,
  `address` varchar(150) NOT NULL,
  `telephone` int(50) NOT NULL,
  `email` varchar(150) NOT NULL,
  `website` varchar(150) NOT NULL,
  `vat_rate` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `business`
--

INSERT INTO `business` (`id`, `name`, `address`, `telephone`, `email`, `website`, `vat_rate`) VALUES
(1, 'PHP My Admin', 'Đường Ngũ sắc, quận cầu Vồng, thành phố Vạn Hoa', 948402011, 'NIIT@gmail.com', 'Niit.com.vn', 10);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `parent_id` int(11) NOT NULL,
  `icon` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `parent_id`, `icon`) VALUES
(1, 'Điện Thoại', 0, 'glyphicon glyphicon-phone'),
(3, 'Laptop', 0, 'fa fa-laptop'),
(4, 'Phụ kiện', 0, 'fa fa-headphones'),
(5, 'May Cu', 0, 'fa fa-qrcode'),
(7, 'Công nghệ', 0, 'fa fa-bandcamp'),
(8, 'Hỏi Đáp', 0, 'fa fa-question-circle'),
(9, 'Game, App', 0, 'fa fa-gamepad'),
(10, 'Khuyến Mãi', 0, 'fa fa-gift');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` int(11) NOT NULL,
  `first_name` varchar(150) NOT NULL,
  `last_name` varchar(150) NOT NULL,
  `address_1` varchar(255) NOT NULL,
  `address_2` varchar(255) NOT NULL,
  `town` varchar(255) NOT NULL,
  `country` int(11) NOT NULL,
  `post_code` varchar(10) NOT NULL,
  `county` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `date` datetime NOT NULL,
  `active` tinyint(1) DEFAULT '0',
  `hash` varchar(255) DEFAULT NULL,
  `viewed` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `first_name`, `last_name`, `address_1`, `address_2`, `town`, `country`, `post_code`, `county`, `email`, `password`, `date`, `active`, `hash`, `viewed`) VALUES
(1, 'trang', 'huyen', 'thanh xuan', 'tu liem', 'ha noi', 1, 'sjks', 'sgsg', 'duonghuyentdfrang1505@gmail.com', 'ba3253876aed6bc22d4a6ff53d8406c6ad864195ed144ab5c87621b6c233b548baeae6956df346ec8c17f5ea10f35ee3cbc514797ed7ddd3145464e2a0bab413', '2017-02-20 00:00:00', 1, NULL, NULL),
(15, 'trang', 'huyen', 'thanh xuan', 'ha noi', 'ha noi', 229, '234', '233', 'duonghuyentrandfsg1505@gmail.com', 'ba3253876aed6bc22d4a6ff53d8406c6ad864195ed144ab5c87621b6c233b548baeae6956df346ec8c17f5ea10f35ee3cbc514797ed7ddd3145464e2a0bab413', '2017-02-12 18:27:39', 0, '774773112201702121827391614964367', NULL),
(25, 'trang', 'huyen', 'thanh xuan', 'ha noi', 'ha noi', 229, '234', '345', 'duonghuyentrang1505@gmail.com', 'ba3253876aed6bc22d4a6ff53d8406c6ad864195ed144ab5c87621b6c233b548baeae6956df346ec8c17f5ea10f35ee3cbc514797ed7ddd3145464e2a0bab413', '2017-02-15 22:16:28', 1, '134594747020170215221628223915434', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `code` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `name`, `code`) VALUES
(1, 'Viet Nam', 'VNM'),
(2, 'American Samoa', 'AS'),
(3, 'Andorra', 'AD'),
(4, 'Angola', 'AO'),
(5, 'Irag', 'Ig'),
(6, 'Slovakia', 'SL'),
(7, 'Baidu', 'BA'),
(8, 'Anguilla', 'AI'),
(9, 'Antarctica', 'AQ'),
(10, 'Antigua And Barbuda', 'AG'),
(11, 'Argentina', 'AR'),
(12, 'Armenia', 'AM'),
(13, 'Aruba', 'AW'),
(14, 'Australia', 'AU'),
(15, 'Austria', 'AT'),
(16, 'Azerbaijan', 'AZ'),
(17, 'Bahamas', 'BS'),
(18, 'Bahrain', 'BH'),
(19, 'Bangladesh', 'BD'),
(20, 'Barbados', 'BB'),
(21, 'Belarus', 'BY'),
(22, 'Belgium', 'BE'),
(23, 'Belize', 'BZ'),
(24, 'Benin', 'BJ'),
(25, 'Bermuda', 'BM'),
(26, 'Bhutan', 'BT'),
(27, 'Bolivia', 'BO'),
(28, 'Bosnia And Herzegovina', 'BA'),
(29, 'Botswana', 'BW'),
(30, 'Bouvet Island', 'BV'),
(31, 'Brazil', 'BR'),
(32, 'British Indian Ocean Territory', 'IO'),
(33, 'Brunei Darussalam', 'BN'),
(34, 'Bulgaria', 'BG'),
(35, 'Burkina Faso', 'BF'),
(36, 'Burundi', 'BI'),
(37, 'Cambodia', 'KH'),
(38, 'Cameroon', 'CM'),
(39, 'Canada', 'CA'),
(40, 'Cape Verde', 'CV'),
(41, 'Cayman Islands', 'KY'),
(42, 'Central African Republic', 'CF'),
(43, 'Chad', 'TD'),
(44, 'Chile', 'CL'),
(45, 'China', 'CN'),
(46, 'Christmas Island', 'CX'),
(47, 'Cocos (keeling) Islands', 'CC'),
(48, 'Colombia', 'CO'),
(49, 'Comoros', 'KM'),
(50, 'Congo', 'CG'),
(51, 'Congo', 'CD'),
(52, 'Cook Islands', 'CK'),
(53, 'Costa Rica', 'CR'),
(54, 'Cote D\'ivoire', 'CI'),
(55, 'Croatia', 'HR'),
(56, 'Cuba', 'CU'),
(57, 'Cyprus', 'CY'),
(58, 'Czech Republic', 'CZ'),
(59, 'Denmark', 'DK'),
(60, 'Djibouti', 'DJ'),
(61, 'Dominica', 'DM'),
(62, 'Dominican Republic', 'DO'),
(63, 'Ecuador', 'EC'),
(64, 'Egypt', 'EG'),
(65, 'El Salvador', 'SV'),
(66, 'Equatorial Guinea', 'GQ'),
(67, 'Eritrea', 'ER'),
(68, 'Estonia', 'EE'),
(69, 'Ethiopia', 'ET'),
(70, 'Falkland Islands (malvinas)', 'FK'),
(71, 'Faroe Islands', 'FO'),
(72, 'Fiji', 'FJ'),
(73, 'Finland', 'FI'),
(74, 'France', 'FR'),
(75, 'French Guiana', 'GF'),
(76, 'French Polynesia', 'PF'),
(77, 'French Southern Territories', 'TF'),
(78, 'Gabon', 'GA'),
(79, 'Gambia', 'GM'),
(80, 'Georgia', 'GE'),
(81, 'Germany', 'DE'),
(82, 'Ghana', 'GH'),
(83, 'Gibraltar', 'GI'),
(84, 'Greece', 'GR'),
(85, 'Greenland', 'GL'),
(86, 'Grenada', 'GD'),
(87, 'Guadeloupe', 'GP'),
(88, 'Guam', 'GU'),
(89, 'Guatemala', 'GT'),
(90, 'Guernsey', 'GG'),
(91, 'Guinea', 'GN'),
(92, 'Guinea-bissau', 'GW'),
(93, 'Guyana', 'GY'),
(94, 'Haiti', 'HT'),
(95, 'Heard & Mcdonald Islands', 'HM'),
(96, 'Holy See', 'VA'),
(97, 'Honduras', 'HN'),
(98, 'Hong Kong', 'HK'),
(99, 'Hungary', 'HU'),
(100, 'Iceland', 'IS'),
(101, 'India', 'IN'),
(102, 'Indonesia', 'ID'),
(103, 'Iran, Islamic Republic Of', 'IR'),
(104, 'Iraq', 'IQ'),
(105, 'Ireland', 'IE'),
(106, 'Isle Of Man', 'IM'),
(107, 'Israel', 'IL'),
(108, 'Italy', 'IT'),
(109, 'Jamaica', 'JM'),
(110, 'Japan', 'JP'),
(111, 'Jersey', 'JE'),
(112, 'Jordan', 'JO'),
(113, 'Kazakhstan', 'KZ'),
(114, 'Kenya', 'KE'),
(115, 'Kiribati', 'KI'),
(116, 'Korea', 'KP'),
(117, 'Korea, Republic Of', 'KR'),
(118, 'Kuwait', 'KW'),
(119, 'Kyrgyzstan', 'KG'),
(120, 'Laos', 'LA'),
(121, 'Latvia', 'LV'),
(122, 'Lebanon', 'LB'),
(123, 'Lesotho', 'LS'),
(124, 'Liberia', 'LR'),
(125, 'Libyan Arab Jamahiriya', 'LY'),
(126, 'Liechtenstein', 'LI'),
(127, 'Lithuania', 'LT'),
(128, 'Luxembourg', 'LU'),
(129, 'Macao', 'MO'),
(130, 'Macedonia', 'MK'),
(131, 'Madagascar', 'MG'),
(132, 'Malawi', 'MW'),
(133, 'Malaysia', 'MY'),
(134, 'Maldives', 'MV'),
(135, 'Mali', 'ML'),
(136, 'Malta', 'MT'),
(137, 'Marshall Islands', 'MH'),
(138, 'Martinique', 'MQ'),
(139, 'Mauritania', 'MR'),
(140, 'Mauritius', 'MU'),
(141, 'Mayotte', 'YT'),
(142, 'Mexico', 'MX'),
(143, 'Micronesia', 'FM'),
(144, 'Moldova, Republic Of', 'MD'),
(145, 'Monaco', 'MC'),
(146, 'Mongolia', 'MN'),
(147, 'Montserrat', 'MS'),
(148, 'Morocco', 'MA'),
(149, 'Mozambique', 'MZ'),
(150, 'Myanmar', 'MM'),
(151, 'Namibia', 'NA'),
(152, 'Nauru', 'NR'),
(153, 'Nepal', 'NP'),
(154, 'Netherlands', 'NL'),
(155, 'Netherlands Antilles', 'AN'),
(156, 'New Caledonia', 'NC'),
(157, 'New Zealand', 'NZ'),
(158, 'Nicaragua', 'NI'),
(159, 'Niger', 'NE'),
(160, 'Nigeria', 'NG'),
(161, 'Niue', 'NU'),
(162, 'Norfolk Island', 'NF'),
(163, 'Northern Mariana Islands', 'MP'),
(164, 'Norway', 'NO'),
(165, 'Oman', 'OM'),
(166, 'Pakistan', 'PK'),
(167, 'Palau', 'PW'),
(168, 'Palestinian Territory', 'PS'),
(169, 'Panama', 'PA'),
(170, 'Papua New Guinea', 'PG'),
(171, 'Paraguay', 'PY'),
(172, 'Peru', 'PE'),
(173, 'Philippines', 'PH'),
(174, 'Pitcairn', 'PN'),
(175, 'Poland', 'PL'),
(176, 'Portugal', 'PT'),
(177, 'Puerto Rico', 'PR'),
(178, 'Qatar', 'QA'),
(179, 'Reunion', 'RE'),
(180, 'Romania', 'RO'),
(181, 'Russian Federation', 'RU'),
(182, 'Rwanda', 'RW'),
(183, 'Saint Helena', 'SH'),
(184, 'Saint Kitts And Nevis', 'KN'),
(185, 'Saint Lucia', 'LC'),
(186, 'Saint Pierre And Miquelon', 'PM'),
(187, 'Saint Vincent ', 'VC'),
(188, 'Samoa', 'WS'),
(189, 'San Marino', 'SM'),
(190, 'Sao Tome And Principe', 'ST'),
(191, 'Saudi Arabia', 'SA'),
(192, 'Senegal', 'SN'),
(193, 'Serbia And Montenegro', 'CS'),
(194, 'Seychelles', 'SC'),
(195, 'Sierra Leone', 'SL'),
(196, 'Singapore', 'SG'),
(197, 'Slovakia', 'SK'),
(198, 'Slovenia', 'SI'),
(199, 'Solomon Islands', 'SB'),
(200, 'Somalia', 'SO'),
(201, 'South Africa', 'ZA'),
(202, 'South Georgia', 'GS'),
(203, 'Spain', 'ES'),
(204, 'Sri Lanka', 'LK'),
(205, 'Sudan', 'SD'),
(206, 'Suriname', 'SR'),
(207, 'Svalbard And Jan Mayen', 'SJ'),
(208, 'Swaziland', 'SZ'),
(209, 'Sweden', 'SE'),
(210, 'Switzerland', 'CH'),
(211, 'Syrian Arab Republic', 'SY'),
(212, 'Taiwan, Province Of China', 'TW'),
(213, 'Tajikistan', 'TJ'),
(214, 'Tanzania', 'TZ'),
(215, 'Thailand', 'TH'),
(216, 'Timor-leste', 'TL'),
(217, 'Togo', 'TG'),
(218, 'Tokelau', 'TK'),
(219, 'Tonga', 'TO'),
(220, 'Trinidad And Tobago', 'TT'),
(221, 'Tunisia', 'TN'),
(222, 'Turkey', 'TR'),
(223, 'Turkmenistan', 'TM'),
(224, 'Turks And Caicos Islands', 'TC'),
(225, 'Tuvalu', 'TV'),
(226, 'Uganda', 'UG'),
(227, 'Ukraine', 'UA'),
(228, 'United Arab Emirates', 'AE'),
(229, 'United Kingdom', 'GB'),
(230, 'United States', 'US'),
(231, 'United States Minor', 'UM'),
(232, 'Uruguay', 'UY'),
(233, 'Uzbekistan', 'UZ'),
(234, 'Vanuatu', 'VU'),
(235, 'Venezuela', 'VE'),
(236, 'Viet Nam', 'VN'),
(237, 'Virgin Islands, British', 'VG'),
(238, 'Virgin Islands, U.S.', 'VI'),
(239, 'Wallis And Futuna', 'WF'),
(240, 'Western Sahara', 'EH'),
(241, 'Yemen', 'YE'),
(242, 'Zambia', 'ZM'),
(243, 'Zimbabwe', 'ZW');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `client` int(11) NOT NULL,
  `vat_rate` decimal(5,2) NOT NULL,
  `vat` decimal(8,2) NOT NULL,
  `subtotal` int(235) NOT NULL,
  `total` int(235) NOT NULL,
  `date` datetime NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `pp_status` tinyint(11) NOT NULL DEFAULT '0',
  `txn_id` varchar(100) DEFAULT NULL,
  `payment_status` varchar(100) DEFAULT NULL,
  `ipn` text,
  `response` varchar(100) DEFAULT NULL,
  `note` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `client`, `vat_rate`, `vat`, `subtotal`, `total`, `date`, `status`, `pp_status`, `txn_id`, `payment_status`, `ipn`, `response`, `note`) VALUES
(2, 15, '10.00', '3.47', 35, 38, '2017-02-14 14:03:30', 1, 0, NULL, NULL, NULL, NULL, NULL),
(3, 25, '10.00', '3.47', 35, 38, '2017-02-15 22:17:38', 1, 0, NULL, NULL, NULL, NULL, NULL),
(4, 25, '10.00', '500000.00', 5000000, 5500000, '2017-02-17 09:21:00', 1, 0, NULL, NULL, NULL, NULL, NULL),
(5, 25, '10.00', '500000.00', 5000000, 5500000, '2017-02-17 09:21:32', 1, 0, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `orders_items`
--

CREATE TABLE `orders_items` (
  `id` int(11) NOT NULL,
  `order` int(11) NOT NULL,
  `product` int(11) NOT NULL,
  `price` int(235) NOT NULL,
  `qty` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orders_items`
--

INSERT INTO `orders_items` (`id`, `order`, `product`, `price`, `qty`) VALUES
(1, 2, 5, 35, 1),
(2, 3, 5, 35, 1),
(3, 5, 5, 5000000, 1);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `pre_price` int(235) NOT NULL DEFAULT '0',
  `price` int(235) NOT NULL,
  `date` datetime NOT NULL,
  `category` int(11) NOT NULL,
  `image` varchar(100) DEFAULT NULL,
  `viewed` text,
  `sold` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `pre_price`, `price`, `date`, `category`, `image`, `viewed`, `sold`) VALUES
(1, 'Lenovo A2500', 'Galaxy J7 Prime sở hữu thiết kế nguyên khối cùng cảm biến vân tay sẽ là tân binh mới của Samsung trong phân khúc smartphone tầm trung. Màn hình hiển thị nét hơn Với màn hình lớn 5.5 inch cùng độ phân giải Full HD sẽ mang đến cho bạn khung ảnh với độ nét tốt hơn, giúp bạn không bị mỏi mắt khi đọc chữ hay giải trí trên máy.', 16000000, 14000000, '2017-01-10 00:00:00', 1, '20170214094028-1.jpg', NULL, NULL),
(2, 'Tai nghe', 'sgs', 150000, 130000, '2017-01-03 00:00:00', 4, '20170214103825-2.jpg', NULL, NULL),
(3, 'Sim vinaphone', 'Sim đẹp \r\nSố: 094 840 2011', 60000, 50000, '2017-01-12 00:00:00', 4, '20170214113732-2.jpg', NULL, NULL),
(4, 'Star World', 'Game mới', 0, 0, '2017-01-09 00:00:00', 8, '20170214113800-3.jpg', NULL, NULL),
(5, 'Sam Sung J7 Prime', 'Galaxy J7 Prime sở hữu thiết kế nguyên khối cùng cảm biến vân tay sẽ là tân binh mới của Samsung trong phân khúc smartphone tầm trung. Màn hình hiển thị nét hơn Với màn hình lớn 5.5 inch cùng độ phân giải Full HD sẽ mang đến cho bạn khung ảnh với độ nét tốt hơn, giúp bạn không bị mỏi mắt khi đọc chữ hay giải trí trên máy.', 6000000, 5000000, '2017-02-15 00:00:00', 1, '2.jpg', NULL, NULL),
(8, 'Nokia', 'sfsf', 8800000, 7500000, '2017-02-05 02:15:43', 1, '20170214113833-2.jpg', NULL, NULL),
(11, 'Samsung J7', 'Galaxy J7 Prime sở hữu thiết kế nguyên khối cùng cảm biến vân tay sẽ là tân binh mới của Samsung trong phân khúc smartphone tầm trung.\r\nMàn hình hiển thị nét hơn\r\n\r\nVới màn hình lớn 5.5 inch cùng độ phân giải Full HD sẽ mang đến cho bạn khung ảnh với độ nét tốt hơn, giúp bạn không bị mỏi mắt khi đọc chữ hay giải trí trên máy.', 6000000, 5000000, '2017-02-13 20:02:13', 1, '20170213202436-1.jpg', NULL, NULL),
(12, 'Nokia', 'Galaxy J7 Prime sở hữu thiết kế nguyên khối cùng cảm biến vân tay sẽ là tân binh mới của Samsung trong phân khúc smartphone tầm trung.\r\nMàn hình hiển thị nét hơn\r\n\r\nVới màn hình lớn 5.5 inch cùng độ phân giải Full HD sẽ mang đến cho bạn khung ảnh với độ nét tốt hơn, giúp bạn không bị mỏi mắt khi đọc chữ hay giải trí trên máy.', 13700000, 12500000, '2017-02-13 20:02:45', 1, '20170213202415-1.jpg', NULL, NULL),
(13, 'Nokia', 'Galaxy J7 Prime sở hữu thiết kế nguyên khối cùng cảm biến vân tay sẽ là tân binh mới của Samsung trong phân khúc smartphone tầm trung.\r\nMàn hình hiển thị nét hơn\r\n\r\nVới màn hình lớn 5.5 inch cùng độ phân giải Full HD sẽ mang đến cho bạn khung ảnh với độ nét tốt hơn, giúp bạn không bị mỏi mắt khi đọc chữ hay giải trí trên máy.', 7690000, 6560000, '2017-02-13 20:03:12', 1, '20170213202401-1.jpg', NULL, NULL),
(14, 'tai nghe', 'tai nghe tot', 400000, 304000, '2017-02-13 20:22:49', 4, '20170213202343-1.jpg', NULL, NULL),
(15, 'lenono', 'May cu su dung tot', 5500000, 4560000, '2017-02-13 20:26:16', 5, '20170213202841-2.jpg', NULL, NULL),
(16, 'Lumia', 'Galaxy J7 Prime sở hữu thiết kế nguyên khối cùng cảm biến vân tay sẽ là tân binh mới của Samsung trong phân khúc smartphone tầm trung.\r\nMàn hình hiển thị nét hơn\r\n\r\nVới màn hình lớn 5.5 inch cùng độ phân giải Full HD sẽ mang đến cho bạn khung ảnh với độ nét tốt hơn, giúp bạn không bị mỏi mắt khi đọc chữ hay giải trí trên máy.', 8900000, 7800000, '2017-02-13 20:26:50', 10, '20170213202827-1.jpg', NULL, NULL),
(17, 'Start world', 'Galaxy J7 Prime sở hữu thiết kế nguyên khối cùng cảm biến vân tay sẽ là tân binh mới của Samsung trong phân khúc smartphone tầm trung.\r\nMàn hình hiển thị nét hơn\r\n\r\nVới màn hình lớn 5.5 inch cùng độ phân giải Full HD sẽ mang đến cho bạn khung ảnh với độ nét tốt hơn, giúp bạn không bị mỏi mắt khi đọc chữ hay giải trí trên máy.', 2400000, 200000, '2017-02-13 20:27:58', 9, '20170213202813-1.jpg', NULL, NULL),
(18, 'Cong nghe moi', 'Galaxy J7 Prime sở hữu thiết kế nguyên khối cùng cảm biến vân tay sẽ là tân binh mới của Samsung trong phân khúc smartphone tầm trung.\r\nMàn hình hiển thị nét hơn\r\n\r\nVới màn hình lớn 5.5 inch cùng độ phân giải Full HD sẽ mang đến cho bạn khung ảnh với độ nét tốt hơn, giúp bạn không bị mỏi mắt khi đọc chữ hay giải trí trên máy.', 0, 0, '2017-02-13 20:29:33', 7, '20170214103913-3.jpg', NULL, NULL),
(19, 'Samsung', 'jskjfks', 11200000, 9800000, '2017-02-13 21:04:48', 1, '20170214103857-3.jpg', NULL, NULL),
(20, 'Oppo', 'Galaxy J7 Prime sở hữu thiết kế nguyên khối cùng cảm biến vân tay sẽ là tân binh mới của Samsung trong phân khúc smartphone tầm trung. Màn hình hiển thị nét hơn Với màn hình lớn 5.5 inch cùng độ phân giải Full HD sẽ mang đến cho bạn khung ảnh với độ nét tốt hơn, giúp bạn không bị mỏi mắt khi đọc chữ hay giải trí trên máy.', 6800000, 5700000, '2017-02-14 09:37:35', 1, '20170214093841-1.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `products_view`
--

CREATE TABLE `products_view` (
  `id` int(11) NOT NULL DEFAULT '0',
  `name` varchar(255) NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `statuses`
--

CREATE TABLE `statuses` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `statuses`
--

INSERT INTO `statuses` (`id`, `name`) VALUES
(1, 'Pending'),
(2, 'Processing'),
(3, 'Dispatched');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `advs`
--
ALTER TABLE `advs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `business`
--
ALTER TABLE `business`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `country` (`country`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `client` (`client`,`status`),
  ADD KEY `status` (`status`);

--
-- Indexes for table `orders_items`
--
ALTER TABLE `orders_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order` (`order`,`product`),
  ADD KEY `product` (`product`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category` (`category`);

--
-- Indexes for table `products_view`
--
ALTER TABLE `products_view`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `statuses`
--
ALTER TABLE `statuses`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `advs`
--
ALTER TABLE `advs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `business`
--
ALTER TABLE `business`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=244;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `orders_items`
--
ALTER TABLE `orders_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`status`) REFERENCES `statuses` (`id`),
  ADD CONSTRAINT `orders_ibfk_3` FOREIGN KEY (`client`) REFERENCES `clients` (`id`);

--
-- Constraints for table `orders_items`
--
ALTER TABLE `orders_items`
  ADD CONSTRAINT `orders_items_ibfk_3` FOREIGN KEY (`product`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `orders_items_ibfk_4` FOREIGN KEY (`order`) REFERENCES `orders` (`id`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`category`) REFERENCES `categories` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
