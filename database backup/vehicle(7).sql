-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 24, 2018 at 10:02 PM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `vehicle`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` bigint(10) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `phone`, `username`, `password`) VALUES
(1, 'Bipin', 'Bipinmv23@gmail.com', 9895051128, 'bb', 'bb'),
(2, 'akhil', 'akhilpv17@gmail.com', 9995453051, 'akhil', 'akhil');

-- --------------------------------------------------------

--
-- Table structure for table `carttable`
--

CREATE TABLE IF NOT EXISTS `carttable` (
  `productid` int(100) NOT NULL,
  `userid` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `rate` float NOT NULL,
  `status` int(123) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `carttable`
--

INSERT INTO `carttable` (`productid`, `userid`, `qty`, `rate`, `status`) VALUES
(47, 11, 1, 1159, 1),
(50, 11, 1, 680, 1),
(24, 0, 1, 800, 0),
(12, 11, 1, 399, 1),
(12, 11, 1, 399, 1),
(11, 6, 1, 449, 0),
(11, 0, 1, 449, 0),
(48, 11, 1, 2599, 1),
(46, 11, 1, 741, 1),
(18, 11, 1, 1250, 1),
(24, 11, 1, 800, 1),
(30, 0, 1, 299, 0),
(15, 11, 1, 1954, 1),
(17, 11, 1, 2509, 0),
(12, 11, 1, 399, 0),
(47, 0, 1, 1159, 0),
(11, 0, 1, 449, 0),
(47, 0, 1, 1159, 0),
(47, 0, 1, 1159, 0),
(48, 11, 1, 2599, 0);

-- --------------------------------------------------------

--
-- Table structure for table `delivery`
--

CREATE TABLE IF NOT EXISTS `delivery` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `pincode` int(10) NOT NULL,
  `address` varchar(100) NOT NULL,
  `phone` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `delivery`
--

INSERT INTO `delivery` (`id`, `pincode`, `address`, `phone`) VALUES
(4, 534353, 'kanur', 2147483647),
(14, 123456, 'q', 2147483647),
(13, 670581, 'dfgghh', 2147483647),
(12, 121314, 'qwerty', 2147483647),
(11, 5647, 'adfdgs', 17624),
(15, 123456, 'adfdgs', 2147483647),
(16, 0, '', 0),
(17, 670581, 'abcd', 2147483647),
(18, 667732, 'qwerty', 2147483647),
(19, 670581, 'qwerty', 2147483647),
(20, 670581, 'dhjjggfdh', 2147483647),
(21, 568987, 'gfgg', 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `si.no` int(100) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subject` varchar(100) NOT NULL,
  PRIMARY KEY (`si.no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`si.no`, `name`, `email`, `subject`) VALUES
(19, 'Bipin mv', 'bipinmv23@gmail.com', 'qwerty'),
(21, 'Bipin mv', 'bipinmv23@gmail.com', 'abcd');

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE IF NOT EXISTS `item` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `cname` varchar(100) NOT NULL,
  `iname` varchar(100) NOT NULL,
  `rate` int(10) NOT NULL,
  `des` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=53 ;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`id`, `cname`, `iname`, `rate`, `des`, `image`) VALUES
(11, 'Auto Hubs', 'Air Filter', 449, 'Air Filter', 'uploads/universal-for-all-bikes-allextreme-original-imaeqvu4gcej8589.jpeg'),
(12, 'Mocc Horn', 'Bike Horn', 399, 'Electrical & Lightings', 'uploads/imported-horn-leebo-original-imaeghzfjkdgxu7a.jpeg'),
(13, 'Autofy Horn', 'Bike Horn', 450, 'Electrical & Lightings', 'uploads/bolex-windtone-black-universal-horn-for-all-bikes-set-of-2-original-imaem2hgctbmvgw7.jpeg'),
(14, 'CEAT 80/100-18 ZOOM XL', 'Tubeless Bike Tyre', 1650, 'Miscellaneous Parts', 'uploads/80-100-18-80-100-18-zoom-xl-ceat-original-imaf2e7tywhmzh8z.jpeg'),
(15, 'Bike Exhaust System', 'Spidy Moto Royal Enfield ', 1954, 'Miscellaneous Parts', 'uploads/smj11164-spidy-moto-original-imaeqx47mtyr28wa.jpg.jpeg'),
(16, 'CEAT 120/80-17 ZOOM ', 'Tubeless Bike Tyre', 2550, 'Miscellaneous Parts', 'uploads/120-80-17-120-80-17-zoom-ceat-original-imaf2e7tw4ahywpz.jpeg'),
(17, 'CEAT 120/80-17 VERTIGO SPORT', 'Tubeless Bike Tyre', 2509, 'Miscellaneous Parts', 'uploads/120-80-17-120-80-17-vertigo-sport-ceat-original-imaf2e7t7quhhfgx.jpeg'),
(18, 'Auto Powerz Side LED Indicator', 'LED Indicator Light', 1250, 'Electrical & Lightings', 'uploads/royal-enfield-logo-with-multi-colored-led-autopowerz-original-imaeywv4dzvhb3qu.jpeg'),
(20, 'Autofy Side LED Indicator', 'LED Indicator Light', 799, 'Electrical & Lightings', 'uploads/led-side-indicator-turning-light-set-for-hero-passion-plus-original-imaexdcjjp2mkbsw.jpeg'),
(21, 'ACCESSOREEZ FTRST169 ', 'FOOT REST', 325, 'Miscellaneous Parts', 'uploads/ftrst282-accessoreez-original-imaedxxm5f5dedzw.jpeg'),
(22, 'Allure Auto sur-51134', 'FOOT REST', 399, 'Foot rest (silver)', 'uploads/sur-51156-allure-auto-original-imaekhw9chuyeh2g.jpeg'),
(23, 'SHINE TECH BULLET SEAT COVER ', 'Split Bike Seat cover', 390, 'Split Bike SEAT COVER  for ROYAL ENFIELD CLASSIC 350', 'uploads/bullet-seat-cover-classic-350cc-shine-tech-original-imaepw8fatpj8jta.jpeg'),
(24, 'Synthetic Engine Oil', 'MOTUL 7100 20W50', 800, '1000 ML Fluids & Lubrications', 'uploads/7100-20w50-motul-fully synthetic engine oil.jpeg'),
(25, 'Engine Oil', 'RIMULA R3X 15W40', 2400, '5 L Fluids & Lubrications', 'uploads/rimula-shell-5-original-imaefxedahezceym.jpeg'),
(26, 'DOT 4 Brake Oil', 'STP synthetic Brake Fluid', 445, '354 ML  Fluids & Lubrications', 'uploads/200833e-stp-354-original-imae4dhdpykqyh9s.jpeg'),
(27, 'DOT 3 Brake Oil', 'VAIISAN AEV500BO', 250, '500 ML  Fluids & Lubrications', 'uploads/500-aev500bo-vaiisan-original-imaf24vxfszaayd6.jpeg'),
(28, 'RADIGUARD HD4', 'Radiator Coolant', 243, '1000 ML  Fluids & Lubrications', 'uploads/1000-srcpi001-radiguard-hd4-original-imafy93b3huw3aaz.jpeg'),
(29, 'LIQUI MOLY', 'Radiator Coolant', 330, '200 ML  Fluids & Lubrications', 'uploads/200-48205-liqui-moly-original-imaetzzavpzshjfz.jpeg'),
(30, 'TECHLIFE SOLUTIONS Air Filter', 'Air Filter', 299, 'Air Filter', 'uploads/tech057-techlife-solutions-original-imaey9gf2vkrj6ph.jpeg'),
(37, 'HP Bike Air Filter For Universal ', 'Air Filter ', 330, 'Universal Air Filter', 'uploads/45842-hp-original-imae44s5edkj4gc7.jpeg'),
(38, ' Speed Bike Glass Bowl Fuel Filter ', 'Fuel Filter ', 249, 'Light duty fuel filters ', 'uploads/bike-glass-bowl-fuel-filter-withj.jpeg'),
(39, 'Purolator 175160 Universal Fuel Filter', 'Fuel Filter', 329, 'Universal Fuel Filter', 'uploads/175168-purolator-original-imaegtgprq7hzv9s.jpeg'),
(41, ' Puralator 5382 Engine Oil Filter', 'Engine Oil Filter', 125, 'Vehicle compatibility: Royal Enfield Bullet ', 'uploads/41PK89ICP-L._AC_US160_.jpg'),
(42, 'KN 138 Engine Oil Filter For SUZUKI', 'Engine Oil Filter ', 1290, 'Vehicle Compatibility: Suzuki ', 'uploads/51BMp41iROL._AC_US160_.jpg'),
(45, 'BIKIGHT 650/750LBS/IN Mountain Rear Suspension', 'Shock Absorber ', 1200, 'Suspension parts', 'uploads/index.jpg'),
(46, 'B95 Black Metal 450LBS/in Rear Suspension ', 'Shock Absorber ', 741, 'Suspension parts', 'uploads/Untitled.png'),
(47, 'Studds Open Face Helmet', 'Open Face Helmet ', 1159, 'Accessories', 'uploads/index5.jpg'),
(48, 'Vega Off Road Helmet', 'Full Face Helmet ', 2599, 'Accessories', 'uploads/411613oRn2L.jpg'),
(49, 'Monster Leather Gloves', 'Gloves', 799, 'Accessories', 'uploads/images3.jpg'),
(50, 'Honda GX160 Ignition Coil', 'Ignition Coil', 680, 'Engine Parts', 'uploads/Untitleda.png'),
(51, '2-stroke ATV Motorcycle carbureter', '21mm Carburetor', 990, 'Engine Parts', 'uploads/Untitledb.png'),
(52, 'YX 140cc Engine Pit Bike Parts', '56mm Cylinder', 3600, 'Engine Parts', 'uploads/Untitledc.png');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE IF NOT EXISTS `payment` (
  `paymentid` int(100) NOT NULL AUTO_INCREMENT,
  `userid` int(100) NOT NULL,
  `rate` int(10) NOT NULL,
  `paymentmethod` varchar(100) NOT NULL,
  PRIMARY KEY (`paymentid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`paymentid`, `userid`, `rate`, `paymentmethod`) VALUES
(1, 11, 2637, 'c'),
(2, 11, 2637, 'c'),
(3, 11, 5390, 'c'),
(4, 11, 1954, 'n');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_buyer_reg`
--

CREATE TABLE IF NOT EXISTS `tbl_buyer_reg` (
  `SI.no` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `address` varchar(40) NOT NULL,
  `street` varchar(20) NOT NULL,
  `district` varchar(20) NOT NULL,
  `pincode` int(10) NOT NULL,
  `email` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`SI.no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `tbl_buyer_reg`
--

INSERT INTO `tbl_buyer_reg` (`SI.no`, `name`, `phone`, `address`, `street`, `district`, `pincode`, `email`, `username`, `password`) VALUES
(6, 'jasim', 9988776655, 'mattul', 'mattul', 'kasaragod', 670307, 'akil22@gmail.com', '', ''),
(8, 'Bipin', 9895051128, 'dfdf', 'dfdfa', 'kannur', 232312, 'bipinmv23@gmail.com', '', ''),
(10, 'Bipin mv', 9895051128, 'kottakkunnu', 'pilathara', 'kannur', 670504, 'bipinmv23@gmail.com', '', ''),
(11, 'Bipin mv', 9895051128, 'kottakkunnu', 'pilathara', 'kannur', 670504, 'bipinmv23@gmail.com', 'bipin', 'bipin');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
