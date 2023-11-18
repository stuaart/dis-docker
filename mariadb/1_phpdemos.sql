/* Database for use with COMP4039-DIS php demos and exerises related to this */

-- Host: mariadb
-- Generation Time: Sep 21, 2023 at 12:49 PM
-- Server version: 10.8.8-MariaDB-1:10.8.8+maria~ubu2204
-- PHP Version: 8.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phpdemos`
--

CREATE DATABASE IF NOT EXISTS `phpdemos` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `phpdemos`;

-- --------------------------------------------------------

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8mb4 COLLATE utf8mb4_unicode_ci;

INSERT INTO `users` (`username`, `password`) VALUES
('stuart', 'password1');


--
-- Table structure for table `people`
--

DROP TABLE IF EXISTS `People`;
CREATE TABLE IF NOT EXISTS `People` (
  `ID` int PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `Name` varchar(50) NOT NULL,
  `PhoneNumber` varchar(12) DEFAULT NULL,
  `Address` varchar(60) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=212 DEFAULT CHARSET=utf8mb4 COLLATE utf8mb4_unicode_ci;

--
-- Dumping data for table `people`
--

INSERT INTO `People` (`ID`, `Name`, `PhoneNumber`, `Address`) VALUES
(1, 'Jeremie Clos', '0123456789', 'Wollaton Road'),
(2, 'Stuart Reeves', '9876543210', 'Beeston'),
(13, 'Davy D. Bertrand', '064-877-7349', '7926 Lectus. Rd.'),
(12, 'Lucie J. Humbert', '042-418-9156', 'P.O. Box 903, 7196 Velit Avenue'),
(14, 'Elsa T. Lefevre', '06141 630665', '726-5578 Primis Rd.'),
(15, 'Sara B. Louis', '62 65 057 24', '5331 Tellus Road'),
(16, 'Alexandre A. Henry', '62 93 204 10', 'P.O. Box 786, 6788 Enim, Road'),
(17, 'Zoé V. Etienne', '049-020-4434', '883-1179 Sed Road'),
(18, 'Roméo D. Herve', '62 43 058 38', 'P.O. Box 650, 2301 Nunc Av.'),
(19, 'Laura Q. Leroy', '062-707-7650', 'P.O. Box 792, 3360 Tincidunt Ave'),
(20, 'Lucie K. Mallet', '044-118-2121', '8345 A, St.'),
(21, 'Katell D. Girard', '09975 141546', '391-9083 Integer Road'),
(22, 'Léonie T. Leclercq', '07189 138410', 'Ap #697-7048 Integer Avenue'),
(23, 'Candice U. Morin', '04778 970645', '8543 Diam. Rd.'),
(24, 'Alexandra L. Baron', '00748 052003', 'Ap #269-2483 Turpis Avenue'),
(25, 'Quentin K. Morel', '62 31 822 46', '131-657 Penatibus Avenue'),
(26, 'Roméo Y. Bonnet', '62 40 527 33', 'Ap #977-6617 Cras St.'),
(27, 'Erwan Y. Schneider', '00612 985432', 'Ap #205-7892 Vel, Av.'),
(28, 'Timothée F. Roche', '62 65 275 60', '990-3053 Ut Rd.'),
(29, 'Quentin M. Le gall', '00026 414449', '644-3928 Eu Rd.'),
(30, 'Louna C. Menard', '043-047-8502', '504-9622 Parturient Street'),
(31, 'Gabriel R. Petit', '07424 066795', '3581 Donec Rd.'),
(32, 'Yohan Q. Roussel', '62 73 050 86', '8405 Ligula Av.'),
(33, 'Julien A. Carre', '031-856-1479', '137-5995 Sem. Rd.'),
(34, 'Clara A. Bonnet', '62 65 787 88', '331-457 Facilisis Street'),
(35, 'Maëlle G. Marie', '62 26 963 25', '574-6219 Quis Ave'),
(36, 'Angelina B. Vincent', '62 88 934 28', '3475 Amet, Street'),
(37, 'Lauriane Y. Sanchez', '06966 076508', 'Ap #860-9312 Phasellus St.'),
(38, 'Anna L. Aubert', '02153 477771', 'P.O. Box 694, 9203 Lorem, Av.'),
(39, 'Lucas Z. Carpentier', '01370 654752', 'Ap #761-4143 Consectetuer, Rd.'),
(40, 'Loane M. Picard', '03650 135195', '161-5845 Id Avenue'),
(41, 'Clara J. Perrot', '62 62 579 70', 'P.O. Box 256, 677 Tellus. Street'),
(42, 'Mélanie U. Marie', '62 70 229 05', '726-3322 Auctor, Street'),
(43, 'Hugo B. Caron', '62 14 690 37', 'P.O. Box 985, 6635 Lectus. Rd.'),
(44, 'Gabin E. Schmitt', '055-970-9821', '6562 Ligula. Rd.'),
(45, 'Antonin U. Roger', '049-362-0434', 'P.O. Box 223, 9997 Magna. Road'),
(46, 'Élise R. Fernandez', '62 61 001 56', '810-3261 Suspendisse Street'),
(47, 'Julia Q. Lacroix', '62 62 743 14', '1898 Felis Street'),
(48, 'Mélanie P. Leclercq', '62 47 018 21', '774-9994 Per St.'),
(49, 'Maëlle D. Collet', '061-156-7010', 'P.O. Box 666, 7935 Vivamus Road'),
(50, 'Bastien F. Carre', '044-460-2447', 'Ap #526-9958 At, Road'),
(51, 'Romain A. Mercier', '03357 177944', '787 Non, St.'),
(52, 'Élise Y. Royer', '62 66 181 66', '561-1006 Posuere St.'),
(53, 'Timéo K. Bernard', '03799 272415', '8702 Ut Ave'),
(54, 'Noémie Q. Leroy', '08462 585957', '159-9963 Aliquet. St.'),
(55, 'Yasmine U. Le roux', '05462 024618', 'P.O. Box 897, 7819 Volutpat Rd.'),
(56, 'Noémie K. Meunier', '07855 013868', '388-9374 Amet Ave'),
(57, 'Julia R. Gaillard', '62 34 584 42', '244-3411 Sed St.'),
(58, 'Alicia Z. Albert', '62 46 618 15', '3732 Ante. Ave'),
(59, 'Léane A. Thomas', '62 34 994 69', '223-6332 Pellentesque Av.'),
(60, 'Gilbert U. Perrin', '06554 824875', '7244 Placerat Street'),
(61, 'Cloé N. Rousseau', '061-495-5303', '9899 Auctor St.'),
(62, 'Ambre T. Royer', '062-137-9995', 'Ap #669-4017 Vehicula St.'),
(63, 'Lucas F. Durand', '62 20 186 33', 'Ap #180-2898 Urna. Street'),
(64, 'Rémi W. Simon', '08049 742798', '182-3216 Nam Ave'),
(65, 'Émilie H. Deschamps', '62 92 735 46', '8620 Vulputate Av.'),
(66, 'Élisa U. Adam', '62 40 300 85', '654-9920 Donec Rd.'),
(67, 'Léane L. Roger', '62 24 208 36', 'Ap #902-2580 Feugiat. Ave'),
(68, 'Mélissa N. Faure', '62 15 542 99', 'P.O. Box 607, 6612 Pharetra. Ave'),
(69, 'Baptiste J. Fontaine', '044-664-4962', '565-4141 Aliquam Av.'),
(70, 'Dylan G. Vincent', '00202 658629', 'Ap #594-1554 Lorem, Street'),
(71, 'Lou Y. Barbier', '053-345-4534', 'P.O. Box 597, 5230 Tempor Rd.'),
(72, 'Lucie B. Schneider', '62 54 750 57', 'P.O. Box 417, 647 Dolor. Street'),
(73, 'Élouan B. Bernard', '62 67 655 25', '734-9206 Ullamcorper Av.'),
(74, 'Fanny V. Roger', '62 94 758 16', 'P.O. Box 825, 3525 Est Road'),
(75, 'Thibault R. Julien', '043-476-7506', '5107 Eu Rd.'),
(76, 'Alexandra V. Pereira', '055-760-4697', 'Ap #655-2513 Nullam St.'),
(77, 'Carla L. Giraud', '05086 885716', '629-8388 Viverra. Street'),
(78, 'Lily Z. Chevallier', '06306 732978', '334-6655 Fames St.'),
(79, 'Lorenzo C. Morel', '62 10 352 05', '379-8423 Amet, Avenue'),
(80, 'Tom W. Gonzalez', '054-502-1005', '8002 Pharetra St.'),
(81, 'Félix E. Guillot', '09089 615649', '1217 Sit Av.'),
(82, 'Émile Y. Marie', '042-783-2407', 'Ap #223-6854 Purus St.'),
(83, 'Clara E. Gay', '055-180-0591', 'Ap #525-2257 Non Ave'),
(84, 'Jordan H. Boulanger', '62 71 668 36', '4033 Aliquam Av.'),
(85, 'Jeanne X. Lacroix', '043-321-1456', 'Ap #553-2139 Sed Avenue'),
(86, 'Renaud M. Weber', '62 98 479 70', 'Ap #868-5661 Lacinia St.'),
(87, 'Elsa U. Germain', '62 81 338 67', 'P.O. Box 929, 229 Vestibulum Road'),
(88, 'Lucas V. Julien', '064-864-5801', '485-964 Duis St.'),
(89, 'Bienvenue K. Bernard', '041-114-2342', 'P.O. Box 361, 1154 At Rd.'),
(90, 'Dylan P. Jean', '62 44 656 77', '1527 Felis Street'),
(91, 'Kilian Q. Renard', '043-780-7120', 'Ap #157-3889 Enim, St.'),
(92, 'Élouan X. Le roux', '04839 244349', '778 Donec St.'),
(93, 'Cédric H. Gerard', '62 78 787 52', '6355 Dis Street'),
(94, 'Diego Q. Boucher', '05950 092759', '553-1451 Molestie Street'),
(95, 'Valentine G. Gomez', '062-494-9142', '7815 Nec Avenue'),
(96, 'Killian X. Roussel', '061-314-9998', 'Ap #710-4746 Mi Rd.'),
(97, 'Célia L. Vincent', '08729 316832', '4519 Et Avenue'),
(98, 'Élisa H. Remy', '62 97 607 49', 'Ap #197-4988 Convallis Rd.'),
(99, 'Lutécia F. Marchal', '62 13 355 38', 'P.O. Box 135, 4250 Eleifend. Rd.'),
(100, 'Lilian S. Noel', '043-791-3686', 'Ap #655-2523 Mollis. Avenue'),
(101, 'Lilou H. Renaud', '00798 914099', '806-7772 Purus, Road'),
(102, 'Catherine P. Noel', '04488 364748', '619-1582 Luctus Avenue'),
(103, 'Paul L. Dupuy', '05501 614981', '712-9649 Auctor Rd.'),
(104, 'Noah S. Marty', '052-858-6055', '4930 Ornare, Av.'),
(105, 'Lamia B. Mathieu', '62 34 802 90', '8012 Hendrerit St.'),
(106, 'Marine J. Rolland', '62 27 880 46', 'P.O. Box 861, 2953 Integer Street'),
(107, 'Nicolas Q. Rolland', '62 55 103 70', 'P.O. Box 735, 6696 Nec Road'),
(108, 'Noah R. Barbier', '07002 613789', 'P.O. Box 310, 576 Malesuada Avenue'),
(109, 'Kevin R. Rey', '044-941-7975', '367-1304 Ultrices Rd.'),
(110, 'Aaron A. Gaillard', '62 20 878 80', '970-3975 Non, Rd.'),
(111, 'Syrine O. Collin', '01453 655596', 'Ap #385-1705 In Ave'),
(112, 'Alexia I. Mathieu', '09406 033527', 'P.O. Box 684, 2764 Fusce Ave'),
(113, 'Jeanne T. Deschamps', '62 41 035 74', 'P.O. Box 547, 9657 Auctor St.'),
(114, 'Tom L. Paris', '04505 706484', '8701 Fusce Street'),
(115, 'Baptiste O. Mathieu', '05618 203375', 'P.O. Box 897, 9961 Et Ave'),
(116, 'Adrian E. Adam', '62 21 897 06', '2587 Ac, Road'),
(117, 'Nicolas A. Cousin', '05401 366873', '184-244 Consectetuer Rd.'),
(118, 'Valentin B. Cordier', '062-612-3214', 'Ap #700-1334 Cursus Road'),
(119, 'Esteban R. Marie', '032-402-0621', '2278 Gravida Street'),
(120, 'Nicolas I. Aubert', '055-182-2525', '684-918 Rutrum, Road'),
(121, 'Bienvenue A. Giraud', '04467 323059', 'P.O. Box 903, 5503 Consequat, Ave'),
(122, 'Léonie Q. Renaud', '05510 864388', 'Ap #938-3267 Duis Rd.'),
(123, 'Manon R. Chevallier', '62 61 288 80', 'P.O. Box 378, 2493 Est Avenue'),
(124, 'Carla W. Fleury', '052-077-9017', '605-5552 Nulla Av.'),
(125, 'Kevin L. Royer', '02268 706494', 'P.O. Box 766, 2277 Augue. Ave'),
(126, 'Juliette H. Deschamps', '05236 939826', 'Ap #984-4820 Rhoncus Road'),
(127, 'Chloé X. Garnier', '04430 658808', '491-597 Malesuada Rd.'),
(128, 'Mathis F. Collin', '62 54 356 24', '295-6230 Risus. Ave'),
(129, 'Théo E. Marechal', '05571 658110', '2074 Donec Avenue'),
(130, 'Victor R. Leveque', '053-234-8030', '762-9016 Auctor Road'),
(131, 'Amélie J. Rousseau', '62 68 645 05', '6409 Hendrerit St.'),
(132, 'Lamia O. Bernard', '043-835-9488', '9805 Vitae, Rd.'),
(133, 'Yanis X. Jacob', '062-278-6819', 'P.O. Box 953, 9549 Urna. Street'),
(134, 'Maxence E. Marchal', '08558 977321', '159-1486 Placerat, St.'),
(135, 'Killian R. Le roux', '06311 718447', '6019 Lectus, Street'),
(136, 'Adrian C. Perrot', '00769 681918', '4250 Nam Ave'),
(137, 'Yanis R. Bouvier', '07660 404594', '1635 Dictum St.'),
(138, 'Rosalie Q. Brun', '042-727-6886', 'P.O. Box 993, 7199 Eget Rd.'),
(139, 'Marwane T. Marty', '04329 025129', '633-3240 Volutpat Road'),
(140, 'Valentin D. Michel', '62 44 943 04', 'P.O. Box 898, 5589 Sit Ave'),
(141, 'Nicolas W. Pons', '054-080-2257', '972-5200 Tincidunt St.'),
(142, 'Capucine Z. Lopez', '62 53 841 67', 'P.O. Box 100, 7563 Convallis Av.'),
(143, 'Chloé U. Royer', '043-150-6649', 'P.O. Box 377, 2885 Semper Ave'),
(144, 'Amandine H. Le roux', '08231 473569', 'Ap #676-8097 Vestibulum Road'),
(145, 'Tristan L. Chevallier', '62 78 079 99', 'Ap #522-5654 Ligula Road'),
(146, 'Marion B. Gillet', '054-201-3940', '8052 Imperdiet Street'),
(147, 'Florentin K. Bailly', '62 76 933 74', '6719 Vel, Avenue'),
(148, 'Hugo U. Humbert', '62 54 344 68', '8430 Tempor Avenue'),
(149, 'Louis T. Aubert', '62 18 878 71', 'Ap #465-9321 Eu, Rd.'),
(150, 'Éléna E. Schneider', '043-561-4133', 'Ap #127-249 Nisi St.'),
(151, 'Luna Z. Hubert', '06222 516969', 'Ap #405-7956 Id, Road'),
(152, 'Malo O. Girard', '62 62 295 65', 'Ap #989-3655 Malesuada Ave'),
(153, 'Maéva N. Roche', '052-194-1156', 'Ap #983-8596 Aliquet. St.'),
(154, 'Gaspard Y. Durand', '049-959-9105', 'P.O. Box 693, 765 Purus St.'),
(155, 'Baptiste R. Le roux', '62 46 859 22', '1104 Velit Rd.'),
(156, 'Solene X. Dupuis', '03655 503070', '8097 Vitae, Av.'),
(157, 'Lina S. Robert', '05472 717577', 'Ap #288-5395 Ante Ave'),
(158, 'Lilou F. Renaud', '62 51 647 74', 'P.O. Box 498, 7964 Molestie St.'),
(159, 'Sarah C. Poirier', '06037 351807', 'P.O. Box 697, 6584 Lobortis. Rd.'),
(160, 'Capucine M. Robert', '62 93 653 82', '864-8499 Vitae Avenue'),
(161, 'Mélanie Q. Denis', '62 22 590 71', 'P.O. Box 577, 8149 Eget Street'),
(162, 'Valentin X. Guillaume', '042-456-8793', '531-5751 Pharetra St.'),
(163, 'Romane G. Thomas', '62 60 852 40', '515-8396 Ac Road'),
(164, 'Océane B. Leroux', '031-645-6402', '667 Etiam St.'),
(165, 'Célia M. Jacob', '09271 420519', 'P.O. Box 101, 4626 Interdum. Av.'),
(166, 'Louis D. Dufour', '07305 202050', '8492 Integer Avenue'),
(167, 'Léonard P. Le gall', '042-150-9106', '319-8197 Etiam St.'),
(168, 'Victor U. Mathieu', '02886 022117', 'Ap #513-213 Aliquam St.'),
(169, 'Thomas Z. Pereira', '08667 894996', '6571 Sit Ave'),
(170, 'Louis I. Roussel', '042-836-6402', '5353 Vel Road'),
(171, 'Mathieu Q. Le gall', '033-023-6955', 'Ap #675-2584 Id Ave'),
(172, 'Luna N. Boulanger', '054-052-2937', 'Ap #103-3614 Elit, Street'),
(173, 'Alexia Y. Jean', '08988 331121', '869-1900 Vel, Avenue'),
(174, 'Anaëlle M. Schneider', '051-318-0687', '7090 Nullam Avenue'),
(175, 'Valentine H. Lefebvre', '62 14 830 25', 'P.O. Box 488, 4954 Ultricies Avenue'),
(176, 'Anthony G. Joly', '62 22 069 05', 'P.O. Box 801, 8679 Mauris Rd.'),
(177, 'Simon K. Dubois', '051-230-1862', 'P.O. Box 216, 9293 Malesuada Ave'),
(178, 'Evan B. Rousseau', '62 70 478 34', '5885 Non Ave'),
(179, 'Florian G. Barre', '62 10 360 03', '215-5057 Aptent Road'),
(180, 'Mathis V. Boulanger', '055-839-4913', 'Ap #580-5660 Tempor Street'),
(181, 'Grégory O. Cordier', '62 93 196 40', '9283 Semper Rd.'),
(182, 'Théo H. Clement', '053-252-8728', 'P.O. Box 401, 2197 Et Av.'),
(183, 'Éléna V. Lopez', '07158 839358', 'P.O. Box 976, 9135 Auctor St.'),
(184, 'Guillemette I. Albert', '051-426-4081', '505-2187 Enim, St.'),
(185, 'Lola B. Gonzalez', '62 12 777 23', '1264 Consectetuer, Avenue'),
(186, 'Ambre O. Fernandez', '05762 191473', '5558 Nullam Rd.'),
(187, 'Cédric K. Moreau', '62 93 014 69', 'P.O. Box 944, 9938 Tempor Street'),
(188, 'Fanny P. Deschamps', '00577 757239', 'P.O. Box 909, 7557 Velit. Ave'),
(189, 'Guillaume X. Leroy', '09274 300901', '240-3175 Feugiat Av.'),
(190, 'Maéva W. Dumas', '05843 612957', 'Ap #572-8724 Tincidunt St.'),
(191, 'Cloé Y. Duval', '031-142-3284', '667-7687 Velit. Avenue'),
(192, 'Noë H. Picard', '62 75 615 29', 'Ap #301-8947 Augue Street'),
(193, 'Maelys J. Lopez', '064-385-4669', '796-8200 Venenatis Road'),
(194, 'Léonard C. Marie', '051-733-4865', '845-1330 Fusce Road'),
(195, 'Syrine I. Fontaine', '62 74 407 02', 'Ap #306-3697 Amet Ave'),
(196, 'Davy J. Leclerc', '62 69 230 53', '771-1258 Integer Rd.'),
(197, 'Gilbert X. Joly', '061-523-4819', 'P.O. Box 265, 3185 Ipsum Rd.'),
(198, 'Maïlé L. Pierre', '62 57 325 21', '407-7484 Euismod St.'),
(199, 'Elsa E. Jacquet', '05877 644374', 'Ap #908-7569 Eget, St.'),
(200, 'Zoé K. Pereira', '62 32 715 38', 'Ap #912-3479 Duis Av.'),
(201, 'Lina D. Legrand', '00926 423012', '382-3946 Ac Ave'),
(202, 'Evan E. Fontaine', '07285 015696', 'Ap #891-2518 Arcu. Road'),
(203, 'Jérémy K. Evrard', '03573 470877', '4931 Et, St.'),
(204, 'Clara A. Boulanger', '62 28 382 49', 'P.O. Box 609, 4661 Velit Street'),
(205, 'Yüna W. David', '063-434-3615', '6371 Lacinia Avenue'),
(206, 'Luna T. Albert', '041-272-2323', 'Ap #579-6410 Nulla Ave'),
(207, 'Sarah X. Michel', '00468 844783', 'P.O. Box 449, 6929 Orci, St.'),
(208, 'Thibault H. Rey', '62 18 782 37', 'P.O. Box 487, 1451 Donec Rd.'),
(209, 'Antonin U. Faure', '62 45 304 35', 'P.O. Box 999, 1385 Donec St.'),
(210, 'Lilian M. Arnaud', '061-845-0871', 'Ap #124-7328 Vel Rd.'),
(211, 'Lisa Q. Bernard', '043-384-5907', 'Ap #381-9311 Eros. Ave');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
