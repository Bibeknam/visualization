-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 21, 2013 at 03:52 PM
-- Server version: 5.5.24-log
-- PHP Version: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `population`
--

-- --------------------------------------------------------

--
-- Table structure for table `pop_district`
--

CREATE TABLE IF NOT EXISTS `pop_district` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `house_holds` int(11) NOT NULL,
  `pop_total` int(11) NOT NULL,
  `pop_male` int(11) NOT NULL,
  `pop_female` int(11) NOT NULL,
  `zoneId` int(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=76 ;

--
-- Dumping data for table `pop_district`
--

INSERT INTO `pop_district` (`id`, `name`, `house_holds`, `pop_total`, `pop_male`, `pop_female`, `zoneId`) VALUES
(1, 'Taplejung', 26509, 127461, 60552, 66909, 1),
(2, 'Panchthar', 41196, 191817, 90186, 101631, 1),
(3, 'Ilam', 64502, 290254, 141126, 149128, 1),
(4, 'Jhapa', 184552, 812650, 385096, 427554, 1),
(5, 'Morang', 213997, 965370, 466712, 498658, 2),
(6, 'Sunsari', 162407, 763487, 371229, 392258, 2),
(7, 'Dhankuta', 37637, 163412, 76515, 86897, 2),
(8, 'Terhathum', 22094, 101577, 47151, 54426, 2),
(9, 'Sankhuwasabha', 34624, 158742, 75225, 83517, 2),
(10, 'Bhojpur', 39419, 182459, 86053, 96406, 2),
(11, 'Solukhumbu', 23785, 105886, 51200, 54686, 3),
(12, 'Okhaldhunga', 32502, 147984, 68687, 79297, 3),
(13, 'Khotang', 42664, 206312, 97092, 109220, 3),
(14, 'Udayapur', 66557, 317532, 149712, 167820, 3),
(15, 'Saptari', 121098, 639284, 313846, 325438, 3),
(16, 'Siraha', 117962, 637328, 310101, 327227, 3),
(17, 'Dhanusa', 138249, 754777, 378538, 376239, 4),
(18, 'Mahottari', 111316, 627580, 311016, 316564, 4),
(19, 'Sarlahi', 132844, 769729, 389756, 379973, 4),
(20, 'Sindhuli', 57581, 296192, 142123, 154069, 4),
(21, 'Ramechhap', 43910, 202646, 93386, 109260, 4),
(22, 'Dolakha', 45688, 186557, 87003, 99554, 4),
(23, 'Sindhupalchok', 66688, 287798, 138351, 149447, 5),
(24, 'Kavrepalanchok', 80720, 381937, 182936, 199001, 5),
(25, 'Lalitpur', 109797, 468132, 238082, 230050, 5),
(26, 'Bhaktapur', 68636, 304651, 154884, 149767, 5),
(27, 'Kathmandu', 436344, 1744240, 913001, 831239, 5),
(28, 'Nuwakot', 59215, 277471, 132787, 144684, 5),
(29, 'Rasuwa', 9778, 43300, 21475, 21825, 5),
(30, 'Dhading', 73851, 336067, 157834, 178233, 5),
(31, 'Makwanpur', 86127, 420477, 206684, 213793, 6),
(32, 'Rautahat', 106668, 686722, 351079, 335643, 6),
(33, 'Bara', 108635, 687708, 351244, 336464, 6),
(34, 'Parsa', 95536, 601017, 312358, 288659, 6),
(35, 'Chitawan', 132462, 579984, 279087, 300897, 6),
(36, 'Gorkha', 66506, 271061, 121041, 150020, 7),
(37, 'Lamjung', 42079, 167724, 75913, 91811, 7),
(38, 'Tanahu', 78309, 323288, 143410, 179878, 7),
(39, 'Syangja', 68881, 289148, 125833, 163315, 7),
(40, 'Kaski', 125673, 492098, 236385, 255713, 7),
(41, 'Manang', 1480, 6538, 3661, 2877, 7),
(42, 'Mustang', 3354, 13452, 7093, 6359, 9),
(43, 'Myagdi', 27762, 113641, 51395, 62246, 9),
(44, 'Parbat', 35719, 146590, 65301, 81289, 9),
(45, 'Baglung', 61522, 268613, 117997, 150616, 9),
(46, 'Gulmi', 64921, 280160, 120995, 159165, 8),
(47, 'Palpa', 59291, 261180, 115840, 145340, 8),
(48, 'Nawalparasi', 128793, 643508, 303675, 339833, 8),
(49, 'Rupandehi', 163916, 880196, 432193, 448003, 8),
(50, 'Kapilbastu', 91321, 571936, 285599, 286337, 8),
(51, 'Arghakhanchi', 46835, 197632, 86266, 111366, 8),
(52, 'Pyuthan', 47730, 228102, 100053, 128049, 12),
(53, 'Rolpa', 43757, 224506, 103100, 121406, 12),
(54, 'Rukum', 41856, 208567, 99159, 109408, 12),
(55, 'Salyan', 46556, 242444, 115969, 126475, 12),
(56, 'Dang', 116415, 552583, 261059, 291524, 12),
(57, 'Banke', 94773, 491313, 244255, 247058, 11),
(58, 'Bardiya', 83176, 426576, 205080, 221496, 11),
(59, 'Surkhet', 72863, 350804, 169421, 181383, 11),
(60, 'Dailekh', 48919, 261770, 126990, 134780, 11),
(61, 'Jajarkot', 30472, 171304, 85537, 85767, 11),
(62, 'Dolpa', 7488, 36700, 18238, 18462, 10),
(63, 'Jumla', 19303, 108921, 54898, 54023, 10),
(64, 'Kalikot', 23013, 136948, 68833, 68115, 10),
(65, 'Mugu', 9619, 55286, 28025, 27261, 10),
(66, 'Humla', 9479, 50858, 25833, 25025, 10),
(67, 'Bajura', 24908, 134912, 65806, 69106, 13),
(68, 'Bajhang', 33786, 195159, 92794, 102365, 13),
(69, 'Achham', 48351, 257477, 120008, 137469, 13),
(70, 'Doti', 41440, 211746, 97252, 114494, 13),
(71, 'Kailali', 142480, 775709, 378417, 397292, 13),
(72, 'Kanchanpur', 82152, 451248, 216042, 235206, 14),
(73, 'Dadeldhura', 27045, 142094, 66556, 75538, 14),
(74, 'Baitadi', 45191, 250898, 117407, 133491, 14),
(75, 'Darchula', 24618, 133274, 63605, 69669, 14);

-- --------------------------------------------------------

--
-- Table structure for table `zone`
--

CREATE TABLE IF NOT EXISTS `zone` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `Latitude` double NOT NULL,
  `Longitude` double NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `zone`
--

INSERT INTO `zone` (`id`, `name`, `Latitude`, `Longitude`) VALUES
(1, 'Mechi', 26.8760007, 87.9334803),
(2, 'Koshi', 27.0536524, 87.3016132),
(3, 'Sagarmatha', 27.3238263, 86.74163739999995),
(4, 'Janakpur', 27.2110899, 86.01215730000001),
(5, 'Bagmati', 28.0367577, 85.43755740000006),
(6, 'Narayani', 27.3611766, 84.85679319999997),
(7, 'Gandaki', 28.3732037, 84.43827209999995),
(8, 'Lumbini', 27.6791987, 83.50702030000002),
(9, 'Dhaulagiri', 28.7, 83.5),
(10, 'Karnali', 29.3862555, 82.38857830000006),
(11, 'Bheri', 28.517456, 81.77870209999992),
(12, 'Rapti', 28.274347, 82.38857830000006),
(13, 'Seti', 29.6905427, 81.33994140000004),
(14, 'Mahakali', 29.3929765, 80.28230630000007);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
