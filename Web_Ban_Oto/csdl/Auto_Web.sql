-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 24, 2018 at 10:48 PM
-- Server version: 5.7.22-0ubuntu0.16.04.1
-- PHP Version: 7.0.30-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Auto_Web`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `masp` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `tensp` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `hinhanh` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `soluong` int(11) NOT NULL,
  `giaban` int(11) NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `check_cart` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `masp`, `tensp`, `hinhanh`, `soluong`, `giaban`, `email`, `check_cart`) VALUES
(1, 'A27', 'Honda City 1.5 TOP', 'nen1524497540.jpg', 2, 1198000000, 'giangle@gmail.com', 1),
(2, 'A26', 'Honda City 2016', 'Honda-Amaze-New-Exterior-1203221524538799.jpg', 2, 1000000000, 'giangle@gmail.com', 1),
(3, 'A27', 'Honda City 1.5 TOP', 'nen1524497540.jpg', 3, 1797000000, 'giangle@gmail.com', 1),
(4, 'A27', 'Honda City 1.5 TOP', 'nen1524497540.jpg', 1, 599000000, 'giangle@gmail.com', 1),
(5, 'A27', 'Honda City 1.5 TOP', 'nen1524497540.jpg', 3, 1797000000, 'giangtuyen@gmail.com', 1),
(6, 'A24', 'Honda City New', 'Honda-Civic-New-Exterior-905241524537653.jpg', 1, 990000000, 'giangtuyen@gmail.com', 1),
(7, 'A27', 'Honda City 1.5 TOP', 'nen1524497540.jpg', 2, 1198000000, 'giangtuyen@gmail.com', 1),
(8, 'A26', 'Honda City 2016', 'Honda-Amaze-New-Exterior-1203221524538799.jpg', 2, 1000000000, 'giangtuyen@gmail.com', 1),
(9, 'A24', 'Honda City New', 'Honda-Civic-New-Exterior-905241524537653.jpg', 2, 1980000000, 'giangtuyen@gmail.com', 1),
(10, 'A24', 'Honda City New', 'Honda-Civic-New-Exterior-905241524537653.jpg', 2, 1980000000, 'giangtuyen@gmail.com', 1),
(13, 'A27', 'Honda City 1.5 TOP', 'nen1524497540.jpg', 1, 599000000, 'giangdaica@gmail.com', 1),
(14, 'A24', 'Honda City New', 'Honda-Civic-New-Exterior-905241524537653.jpg', 2, 1980000000, 'giangdaica@gmail.com', 1),
(15, 'A15', 'HONDA CITY 2018 1.5 CVT', '3-21524534457.jpg', 1, 523000000, 'giangdaica@gmail.com', 1),
(16, 'A27', 'Honda City 1.5 TOP', 'nen1524497540.jpg', 2, 1198000000, 'giangtuyen@gmail.com', 1),
(17, 'A01', 'Honda City 2018', '1_Honda_Colors_White01524493493.png', 1, 500000000, 'giangtuyen@gmail.com', 0),
(18, 'A27', 'Honda City 1.5 TOP', 'nen1524497540.jpg', 1, 599000000, 'hieuhight@gmail.com', 1);

-- --------------------------------------------------------

--
-- Table structure for table `danhmuc`
--

CREATE TABLE `danhmuc` (
  `madanhmuc` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `tendanhmuc` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `danhmuc`
--

INSERT INTO `danhmuc` (`madanhmuc`, `tendanhmuc`) VALUES
('h1', 'Honda City 2018'),
('h2', 'Honda Jazz 2018'),
('h3', 'Honda CRV 2018'),
('h4', 'Honda Civic 2018'),
('h5', 'Honda Odyssey 2018'),
('h6', 'Honda Accord 2018');

-- --------------------------------------------------------

--
-- Table structure for table `hinhanh`
--

CREATE TABLE `hinhanh` (
  `id` int(11) NOT NULL,
  `id_sanpham` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `hinhanh` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `hinhanh`
--

INSERT INTO `hinhanh` (`id`, `id_sanpham`, `hinhanh`) VALUES
(1, 'A01', 'IMG_11524307381.jpg'),
(2, 'A01', 'IMG_21524307381.jpg'),
(3, 'A01', 'IMG_21524307381.jpg'),
(4, 'A01', 'IMG_31524307382.jpg'),
(5, 'A01', 'IMG_41524307382.jpg'),
(6, 'A01', 'IMG_51524307382.jpg'),
(7, 'A01', 'IMG_15361524307382.jpg'),
(8, 'A02', '11524497630.jpg'),
(9, 'A02', '21524497631.jpg'),
(10, 'A02', '31524497631.jpg'),
(11, 'A02', '41524497631.jpg'),
(12, 'A02', '51524497631.jpg'),
(13, 'A03', 'Bang-dieu-khien-Honda-City-2017-thuan-tien-cho-nguoi-su-dung-700x3941524497823.jpg'),
(14, 'A03', 'honda-city-2017-mau-do-man-700x3191524497823.jpg'),
(15, 'A03', 'Honda-city-2017-có-thiết-kế-khí-động-học-và-phong-cách-thể-thao-700x3941524497823.jpg'),
(16, 'A03', 'Trai-nghiem-thu-vi-khi-lai-xe-Honda-city-2017-700x3941524497823.jpg'),
(17, 'A04', 'Danh_gia_xe_Honda_Civic_20161524498353.jpg'),
(18, 'A04', 'Dau_xe_honda_civic_20161524498353.jpg'),
(19, 'A04', 'Den_pha_xe_civic_20161524498353.jpg'),
(20, 'A04', 'Duoi_xe_honda_civic_20161524498353.jpg'),
(21, 'A04', 'gia_xe_honda_civic_20161524498353.jpg'),
(22, 'A04', 'ngoai_that_honda_civic_20161524498353.jpg'),
(23, 'A05', 'gap-3-hang-ghe1524529726.jpg'),
(24, 'A05', 'guong-chieu-hau1524529726.jpg'),
(25, 'A05', 'hoc-dung-do-ghe-lai-21524529727.jpg'),
(26, 'A05', 'honda-cr-v-the-he-thu-5_1-800x4701524529727.jpg'),
(27, 'A05', 'cr-v-goc-truoc-800x4701524529916.jpg'),
(28, 'A06', 'khung-xe1524529916.jpg'),
(29, 'A06', 'la-zang-moi1524529916.jpg'),
(30, 'A06', 'nep-trang-tri-crom1524529916.jpg'),
(31, 'A06', 'nut-bam-tren-vo-lang1524529916.jpg'),
(32, 'A06', 'tui-khi1524529916.jpg'),
(33, 'A07', 'cam-bien-gat-mua1524530085.jpg'),
(34, 'A07', 'chuc-nang-khoa-cua-tu-dong1524530085.jpg'),
(35, 'A07', 'cr-v-goc-ngang-800x4701524530085.jpg'),
(36, 'A07', 'cum-den-sau-led1524530085.jpg'),
(37, 'A07', 'cum-den-truoc-full-led1524530085.jpg'),
(38, 'A08', 'honda-accord2_1-800x4701524530220.jpg'),
(39, 'A08', 'honda-accord4_1-800x4701524530220.jpg'),
(40, 'A08', 'honda-accord6_1-800x4701524530220.jpg'),
(41, 'A08', 'honda-accord7_1-800x4701524530220.jpg'),
(42, 'A08', 'honda-accord8-800x4701524530220.jpg'),
(43, 'A08', 'honda-accord_2-800x4701524530220.jpg'),
(44, 'A09', 'honda-jazz-2017-11524530623.jpg'),
(45, 'A09', 'honda-jazz-dai-dien1524530623.jpg'),
(46, 'A09', 'honda-jazz-dd41524530623.jpg'),
(47, 'A09', 'honda-jazz-dd-51524530623.jpg'),
(48, 'A10', 'honda-odyssey3_21524530837.jpg'),
(49, 'A10', 'honda-odyssey6_11524530837.jpg'),
(50, 'A10', 'honda-odyssey11_11524530837.jpg'),
(51, 'A10', 'honda-odyssey12_11524530837.jpg'),
(52, 'A11', 'city2-800x4701524531012.jpg'),
(53, 'A11', 'city3-800x4701524531012.jpg'),
(54, 'A11', 'city4-800x4701524531012.jpg'),
(55, 'A11', 'city5-800x4701524531012.jpg'),
(56, 'A12', '41524531231.jpg'),
(57, 'A12', 'index1524531231.png'),
(58, 'A12', '41524532379.jpg'),
(59, 'A12', 'index1524532379.png'),
(60, 'A13', 'ct21524534210.jpg'),
(61, 'A13', 'ct31524534210.jpg'),
(62, 'A13', 'ct41524534210.jpg'),
(63, 'A13', 'honda-civic71524534210.jpg'),
(64, 'A14', '1-51524534320.jpg'),
(65, 'A14', '3-41524534320.jpg'),
(66, 'A14', '3-51524534320.jpg'),
(67, 'A14', '4-41524534320.jpg'),
(68, 'A15', '2-21524534465.jpg'),
(69, 'A15', '3-21524534465.jpg'),
(70, 'A16', '1-41524534597.jpg'),
(71, 'A16', '2-41524534597.jpg'),
(72, 'A16', '3-41524534597.jpg'),
(73, 'A17', '2-41524534696.jpg'),
(74, 'A17', '2-51524534696.jpg'),
(75, 'A17', '3-41524534696.jpg'),
(76, 'A18', '2-21524535872.jpg'),
(77, 'A18', 'new-2018-honda-civic_sedan-excvt-6713-17396834-3-10241524535872.jpg'),
(78, 'A19', 'crv_2018__zing1524536432.jpg'),
(79, 'A19', 'hondacrv00311524536432.jpg'),
(80, 'A19', 'hondacrv0071_thumb1524536432.jpg'),
(81, 'A19', 'hondacrv01011524536432.jpg'),
(82, 'A19', 'Honda-CR-V-VTi-S-2WD-131524536432.jpg'),
(83, 'A20', '3-21524536550.jpg'),
(84, 'A20', '5-31524536550.jpg'),
(85, 'A20', '6-31524536550.jpg'),
(86, 'A20', '10-31524536550.jpg'),
(87, 'A20', '11-21524536550.jpg'),
(88, 'A21', 'IMG_1984-510x6001524536700.jpg'),
(89, 'A21', 'IMG_1985-510x6001524536700.jpg'),
(90, 'A21', 'IMG_1990-510x6001524536700.jpg'),
(91, 'A21', 'IMG_19721-510x6001524536700.jpg'),
(92, 'A21', 'IMG_19751-510x6001524536700.jpg'),
(93, 'A22', 'Honda-City-Facelife-Left-Front-Three-Quarter-889501524536869.jpg'),
(94, 'A22', 'Honda-City-Front-view-906811524536869.jpg'),
(95, 'A22', 'Honda-City-Right-Rear-Three-Quarter-906831524536869.jpg'),
(96, 'A23', 'Honda-Jazz-Facelift-Exterior-1164651524537423.jpg'),
(97, 'A23', 'Honda-Jazz-Facelift-Exterior-1164661524537423.jpg'),
(98, 'A23', 'Honda-Jazz-Facelift-Exterior-1164671524537423.jpg'),
(99, 'A23', 'Honda-Jazz-Facelift-Exterior-1164681524537423.jpg'),
(100, 'A23', 'Honda-Civic-New-Exterior-905231524537598.jpg'),
(101, 'A23', 'Honda-Civic-New-Exterior-905241524537598.jpg'),
(102, 'A23', 'Honda-Civic-New-Exterior-905271524537598.jpg'),
(103, 'A23', 'Honda-Civic-New-Rear-view-905261524537598.jpg'),
(104, 'A24', 'Honda-Civic-New-Exterior-905231524537663.jpg'),
(105, 'A24', 'Honda-Civic-New-Exterior-905241524537663.jpg'),
(106, 'A24', 'Honda-Civic-New-Exterior-905271524537663.jpg'),
(107, 'A24', 'Honda-Civic-New-Rear-view-905261524537664.jpg'),
(108, 'A25', 'Honda-WRV-Exterior-1189561524538291.jpg'),
(109, 'A25', 'Honda-WRV-Front-view-929841524538291.jpg'),
(110, 'A25', 'Honda-WRV-Right-Front-Three-Quarter-929871524538291.jpg'),
(111, 'A26', 'Honda-Amaze-New-Exterior-1203221524538807.jpg'),
(112, 'A30', 'nguoi_con_gai_toi_yeu1525418204.jpg'),
(113, 'dfgh', '30174380_263346797539999_51543276_o1526563583.jpg'),
(114, 'dfgh', '30224038_263346844206661_798520487_o1526563583.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `lienhe`
--

CREATE TABLE `lienhe` (
  `id` int(11) NOT NULL,
  `hoten` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `noidung` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `lienhe`
--

INSERT INTO `lienhe` (`id`, `hoten`, `email`, `noidung`) VALUES
(2, 'Nguyễn Tuyển Giảng', 'nguyentuyengiangbn@gmail.com', 'Trang cần thêm nhiều tính năng cụ thể hơn'),
(3, 'sdef', 'sadfg', 'sdf'),
(4, 'h hh', 'hieuhight@gmail.com', 'qqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqq'),
(5, 'h hh', 'hieuhight@gmail.com', 'qqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqq');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `masp` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `tensp` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `giaban` float NOT NULL,
  `noidung` text COLLATE utf8_unicode_ci NOT NULL,
  `hinhanh` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `nguoidang` int(11) NOT NULL,
  `madanhmuc` varchar(15) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`masp`, `tensp`, `giaban`, `noidung`, `hinhanh`, `nguoidang`, `madanhmuc`) VALUES
('A01', 'Honda City 2018', 500000000, '<p><span style="font-size: 16px;"><span style="color: #0000cd;">+ Hộp số tự động v&ocirc; cấp CVT EARTH DREAMS TECHNOLOGY<br /> + Lẫy chuyển số thể thao tr&ecirc;n v&ocirc; lăng<br /> + C&acirc;n bằng điện tử VSA<br /> + Hỗ trợ khởi h&agrave;nh ngang dốc HAS<br /> + Ph&acirc;n bổ lực phanh điện tử EBD<br /> + Xe chạy đầm chắc &amp; Cảm gi&aacute;c l&aacute;i ch&iacute;nh x&aacute;c ở tốc độ cao<br /> + M&agrave;n h&igrave;nh cảm ứng, Camera l&ugrave;i 3 g&oacute;c quay<br /> + Ghế nỉ, Đ&egrave;n chạy ban ng&agrave;y Led<br /> + Chế độ rảnh ch&acirc;n ga Cruise Control<br /> + &Acirc;m thanh đỉnh với 4 loa<br /> + Cửa gi&oacute; điều h&ograve;a h&agrave;ng ghế ph&iacute;a sau<br /> + Đề nổ Start/Stop, Ch&igrave;a kho&aacute; th&ocirc;ng minh&nbsp;<br /> + Đ&agrave;m thoại rảnh tay, nghe nhạc Bluetooth<br /> + Kiểu d&aacute;ng thể thao bắt mắt!</span></span></p>', '1_Honda_Colors_White01524493493.png', 12, 'h1'),
('A02', 'Honda City 1.5 TOP', 599000000, '<p>&nbsp;</p>\r\n<p>Ra đời v&agrave;o năm 1996, qua hơn 20 năm ph&aacute;t triển, Honda City đ&atilde; trở th&agrave;nh một mẫu xe to&agrave;n cầu của Honda với gần 3.5 triệu xe được giao đến tay kh&aacute;ch h&agrave;ng tr&ecirc;n to&agrave;n cầu t&iacute;nh đến hết th&aacute;ng 4/2017.</p>\r\n<p>&nbsp;</p>\r\n<p>Ch&iacute;nh thức được giới thiệu đến thị trường Việt Nam từ th&aacute;ng 9/2014, City thế hệ 4 đ&atilde; rất th&agrave;nh c&ocirc;ng, l&agrave; một trong những xe sedan cỡ nhỏ b&aacute;n chạy nhất ph&acirc;n kh&uacute;c B với c&aacute;c gi&aacute; trị vượt trội về vận h&agrave;nh v&agrave; tiết kiệm nhi&ecirc;n liệu. Đặc biệt, năm 2016, City l&agrave; mẫu xe c&oacute; mức tăng trưởng về doanh số b&aacute;n v&agrave; thị phần cao nhất trong ph&acirc;n kh&uacute;c.</p>\r\n<p>Tiếp nối th&agrave;nh c&ocirc;ng, ng&agrave;y 19 th&aacute;ng 6 năm 2017, C&ocirc;ng ty Honda Việt Nam ch&iacute;nh thức giới thiệu <strong>City phi&ecirc;n bản mới 2017</strong>. Đ&acirc;y l&agrave; phi&ecirc;n bản đ&atilde; ra mắt rất th&agrave;nh c&ocirc;ng tại c&aacute;c thị trường Th&aacute;i Lan, Malaysia, Ấn Độ, Indonesia, Phillippines v&agrave; Australia.</p>\r\n<p><img src="images/sanphamnen1524497435.jpg" alt="" /></p>\r\n<p>Với &yacute; tưởng ph&aacute;t triển tổng thể <strong><em>&ldquo;Chiếc xe th&ocirc;ng minh mạnh mẽ vượt trội&rdquo;</em></strong>, <strong>City 2017</strong> tập trung v&agrave;o 3 yếu tố: <strong><em>Thiết kế cao cấp &ndash; Tiện &iacute;ch tối ưu &ndash; An to&agrave;n vượt trội</em></strong>, hướng tới c&aacute;c kh&aacute;ch h&agrave;ng trẻ trung, ưa th&iacute;ch sự năng động, hiện đại c&ugrave;ng sự tiện nghi v&agrave; an to&agrave;n tối đa.</p>', 'nen1524497540.jpg', 12, 'h1'),
('A03', 'Honda CITY 1.5 MT', 535000000, '<p>Xe Honda City 2017 thiết lập một ti&ecirc;u chuẩn ho&agrave;n to&agrave;n mới cho ph&acirc;n kh&uacute;c sedan hạng nhỏ. Với những ti&ecirc;u chuẩn mới: kh&ocirc;ng gian nội thất rộng r&atilde;i nhất, c&ocirc;ng nghệ ti&ecirc;n tiến nhất, thiết kế năng động nhất &ndash; Honda City đang mang đến một lựa chọn kh&ocirc;ng thể bỏ qua trong d&ograve;ng sedan hạng nhỏ tại Việt Nam.<br /> <strong>Mẫu xe City 2017 c&oacute; th&ecirc;m nhiều t&iacute;nh năng mới :<br /></strong></p>\r\n<p>&nbsp;</p>\r\n<ul>\r\n<li><strong>Khởi động Start/Stop tr&ecirc;n Honda City mới</strong></li>\r\n<li><strong>Khởi h&agrave;nh ngang dốc</strong></li>\r\n<li><strong>Gương gập điện</strong></li>\r\n<li><strong>N&uacute;t chỉnh &acirc;m thanh ngay tr&ecirc;n v&ocirc; lăng</strong></li>\r\n<li><strong>Bổ sung m&agrave;u đỏ mận v&agrave; ngoại thất bắt mắt th&ecirc;m m&agrave;u đỏ mận</strong></li>\r\n<li>&nbsp;</li>\r\n</ul>\r\n<p>Honda&nbsp;Việt Nam đ&atilde; từng bước chiếm trọn tr&aacute;i tim kh&aacute;ch h&agrave;ng v&agrave; trở th&agrave;nh lựa chọn đầu ti&ecirc;n cho những ai đang t&igrave;m kiếm một chiếc xe ưng &yacute; trong ph&acirc;n kh&uacute;c sedan cỡ nhỏ.&nbsp;Với năm m&agrave;u sống động bao gồm: Xanh dương c&aacute; t&iacute;nh, Đen &aacute;nh độc t&ocirc;n, Titan mạnh mẽ, Ghi bạc thời trang v&agrave; Trắng ng&agrave; tinh tế. Giống như c&aacute;c mẫu xe kh&aacute;c, City ho&agrave;n to&agrave;n mới sẽ được &aacute;p dụng chế độ bảo h&agrave;nh 3 năm hoặc 100.000 km t&ugrave;y theo điều kiện n&agrave;o đến trước. B&ecirc;n cạnh đ&oacute;, Honda Việt Nam cũng cung cấp g&oacute;i gia hạn bảo h&agrave;nh t&ugrave;y chọn.</p>\r\n<p><strong>C&ocirc;ng nghệ cốt l&otilde;i ứng dụng tr&ecirc;n Honda City :</strong></p>\r\n<p>Ứng dụng tr&ecirc;n Động cơ xăng&nbsp;&ndash; Động cơ dẫn đầu ng&agrave;nh về t&iacute;nh năng vận h&agrave;nh v&agrave; tiết kiệm nhi&ecirc;n liệu.</p>\r\n<p>Với việc cải tiến c&ocirc;ng nghệ điều khiển van biến thi&ecirc;n VTEC nguy&ecirc;n bản nhằm tăng cường hiệu quả qu&aacute; tr&igrave;nh đốt ch&aacute;y v&agrave; giảm thiểu ma s&aacute;t, c&ocirc;ng nghệ n&agrave;y mang đến sự kết hợp tối ưu giữa c&ocirc;ng suất đầu ra cao v&agrave; hiệu suất sử dụng nhi&ecirc;n liệu. Hơn thế nữa, h&agrave;ng loạt c&aacute;c kiểu động cơ mới đ&atilde; được ph&aacute;t triển, ứng dụng cấu tr&uacute;c mới nhằm đạt được khả năng linh hoạt cao hơn.</p>\r\n<p>Thiết kế kh&iacute; động học v&agrave; phong c&aacute;ch thể thao to&aacute;t l&ecirc;n kiểu d&aacute;ng trẻ trung đầy linh hoạt, g&acirc;y ấn tượng ngay từ c&aacute;i nh&igrave;n đầu ti&ecirc;n.</p>', 'Honda-city-2017-Modulo-700x3201524497959.jpg', 12, 'h1'),
('A04', 'Honda-jazz V', 544000000, '<p><img src="https://hondaoto.com.vn/hondajazz/assets/img/exterior-bg.jpg" alt="" /></p>', 'exterior-bg1524498091.jpg', 12, 'h2'),
('A05', 'Honda Civic 1.5 Turbo', 898000000, '<h1 class="title-h1">Honda Civic 2017</h1>\r\n<p>Honda Civic 2017 cao cấp nhập khẩu nguy&ecirc;n chiếc gi&aacute; li&ecirc;n hệ, chiếc xe sedan hạng C tại thị trường Việt Nam. Phi&ecirc;n bản 2017 đ&atilde; đ&aacute;nh dấu sự ph&aacute;t triển của 10 thế hệ c&ugrave;ng nhiều lần n&acirc;ng cấp của Honda Civic, dự kiến được tung ra thị trường Việt Nam v&agrave;o cuối năm 2017.</p>\r\n<p>Trải qua một thời gian d&agrave;i gắn b&oacute; với thị trường Việt Nam, Honda Civic được người ti&ecirc;u d&ugrave;ng Việt đ&aacute;nh gi&aacute; cao về khả năng vận h&agrave;nh ổn định, d&aacute;ng vẻ trẻ trung, tiết kiệm nhi&ecirc;n liệu, trang bị tiện nghi vừa đủ v&agrave; đặc biệt l&agrave; &ldquo;chịu kh&oacute;&rdquo; cải tiến, đổi mới để đ&aacute;p ứng thị hiếu của người ti&ecirc;u d&ugrave;ng trong từng giai đoạn.</p>\r\n<p>&nbsp;</p>\r\n<p>Hiện nay, tr&ecirc;n thị trường Việt Nam, Honda Civic đang được b&aacute;n với phi&ecirc;n bản động cơ 1.8L v&agrave; phi&ecirc;n bản dộng cơ 2.0L c&oacute; gi&aacute; b&aacute;n lần lượt l&agrave; 780 triệu v&agrave; 860 triệu. Kh&aacute;ch h&agrave;ng được t&ugrave;y chọn 4 m&agrave;u sơn ngoại thất v&agrave; được nh&agrave; ph&acirc;n phối bảo h&agrave;nh 3 năm hoặc 100.000 km.</p>\r\n<p>&nbsp;</p>\r\n<p>B&agrave;i&nbsp;đ&aacute;nh gi&aacute; xe Honda Civic 2017 xin được sử dụng phi&ecirc;n bản &ldquo;Full Option&rdquo; 2.0AT v&agrave; trong qu&aacute; tr&igrave;nh đ&aacute;nh gi&aacute; sẽ c&oacute; sự lồng gh&eacute;p th&ocirc;ng tin ở tất cả c&aacute;c phi&ecirc;n bản, gi&uacute;p người d&ugrave;ng c&oacute; c&aacute;i nh&igrave;n một c&aacute;ch tổng qu&aacute;t nhất.</p>', 'gia_xe_honda_civic_20161524498291.jpg', 12, 'h4'),
('A06', 'Honda CR-V 15 MID ( 1.5 G )', 900000000, '<p><strong>Honda CR-V 2018 &ndash;&nbsp;</strong>L&agrave; mẫu SUV h&agrave;ng đầu tại thị trường Mỹ, Honda CR-V tiếp tục gặt h&aacute;i th&agrave;nh c&ocirc;ng rực rỡ khi ra mắt thế hệ mới nhất. Hội tụ đầy đủ phẩm chất từ tổng thể thiết kế cho đến khả năng vận h&agrave;nh, tiết kiệm nhi&ecirc;n liệu, t&iacute;nh an to&agrave;n v&agrave; mức gi&aacute; hợp l&yacute;, phi&ecirc;n bản n&acirc;ng cấp CR-V 2018 xứng đ&aacute;ng l&agrave; qu&aacute;n qu&acirc;n ng&ocirc;i vị &ldquo;SUV của năm 2018&rdquo;.</p>\r\n<p>&nbsp;</p>\r\n<p>Với nhiều năm kinh nghiệm trong ng&agrave;nh &ocirc; t&ocirc;, Mr Nghĩa sẽ gi&uacute;p bạn chọn được chiếc&nbsp;xe ưng &yacute; nhất với&nbsp;<strong>MỨC GI&Aacute; TỐT NHẤT</strong>!&nbsp;H&atilde;y li&ecirc;n hệ ngay&nbsp;với Mr Giang để được tư vấn tốt nhất: <strong>0965565742</strong></p>', 'honda-cr-v-the-he-thu-5_1-800x4701524529667.jpg', 12, 'h3'),
('A07', 'Honda CR-V 15 BASE ( 1.5 E )', 963000000, '<p><strong>Honda CR-V 2018 &ndash;&nbsp;</strong>L&agrave; mẫu SUV h&agrave;ng đầu tại thị trường Mỹ, Honda CR-V tiếp tục gặt h&aacute;i th&agrave;nh c&ocirc;ng rực rỡ khi ra mắt thế hệ mới nhất. Hội tụ đầy đủ phẩm chất từ tổng thể thiết kế cho đến khả năng vận h&agrave;nh, tiết kiệm nhi&ecirc;n liệu, t&iacute;nh an to&agrave;n v&agrave; mức gi&aacute; hợp l&yacute;, phi&ecirc;n bản n&acirc;ng cấp CR-V 2018 xứng đ&aacute;ng l&agrave; qu&aacute;n qu&acirc;n ng&ocirc;i vị &ldquo;SUV của năm 2018&rdquo;.</p>\r\n<p>&nbsp;</p>\r\n<p>Với nhiều năm kinh nghiệm trong ng&agrave;nh &ocirc; t&ocirc;, Mr Nghĩa sẽ gi&uacute;p bạn chọn được chiếc&nbsp;xe ưng &yacute; nhất với&nbsp;<strong>MỨC GI&Aacute; TỐT NHẤT</strong>!&nbsp;H&atilde;y li&ecirc;n hệ ngay&nbsp;với Mr Giang để được tư vấn tốt nhất:<strong>0965565742</strong></p>', 'cr-v-goc-truoc-800x4701524529893.jpg', 12, 'h3'),
('A08', 'Honda CR-V 15 TOP ( 1.5 L )', 900000000, '<p><strong>Honda CR-V 2018 &ndash;&nbsp;</strong>L&agrave; mẫu SUV h&agrave;ng đầu tại thị trường Mỹ, Honda CR-V tiếp tục gặt h&aacute;i th&agrave;nh c&ocirc;ng rực rỡ khi ra mắt thế hệ mới nhất. Hội tụ đầy đủ phẩm chất từ tổng thể thiết kế cho đến khả năng vận h&agrave;nh, tiết kiệm nhi&ecirc;n liệu, t&iacute;nh an to&agrave;n v&agrave; mức gi&aacute; hợp l&yacute;, phi&ecirc;n bản n&acirc;ng cấp CR-V 2018 xứng đ&aacute;ng l&agrave; qu&aacute;n qu&acirc;n ng&ocirc;i vị &ldquo;SUV của năm 2018&rdquo;.</p>\r\n<p>&nbsp;</p>\r\n<p>Với nhiều năm kinh nghiệm trong ng&agrave;nh &ocirc; t&ocirc;, Mr Nghĩa sẽ gi&uacute;p bạn chọn được chiếc&nbsp;xe ưng &yacute; nhất với&nbsp;<strong>MỨC GI&Aacute; TỐT NHẤT</strong>!&nbsp;H&atilde;y li&ecirc;n hệ ngay&nbsp;với Mr Giang để được tư vấn tốt nhất: <strong>0965565742</strong></p>', 'cr-v-goc-ngang-800x4701524530066.jpg', 12, 'h3'),
('A09', 'Honda Accord 2018', 800000000, '<div class="product-short-description">\r\n<p>K&iacute;nh ch&agrave;o qu&yacute; kh&aacute;ch, qu&yacute; kh&aacute;ch đang t&igrave;m hiểu mẫu xe sedan hạng D với&nbsp;kiểu d&aacute;ng thiết kế năng động v&agrave; lịch l&atilde;m, Honda Accord 2018 được trang bị tiện nghi an to&agrave;n hướng đến sự thoải m&aacute;i cho người sử dụng, khả năng vận h&agrave;nh thể thao v&agrave; ổn định.</p>\r\n<p>Với nhiều năm kinh nghiệm trong ng&agrave;nh &ocirc; t&ocirc;, Mr Nghĩa sẽ gi&uacute;p bạn chọn được chiếc&nbsp;xe ưng &yacute; nhất với&nbsp;<strong>MỨC GI&Aacute; TỐT NHẤT</strong>!&nbsp;H&atilde;y li&ecirc;n hệ ngay&nbsp;với Mr Giang để được tư vấn tốt nhất: <strong>0965565742</strong></p>\r\n<p>Gi&aacute; xe Honda Accord 2018: 1.203.000.000 VNĐ</p>\r\n</div>', 'honda-accord_2-800x4701524530208.jpg', 12, 'h6'),
('A10', 'Honda Jazz 2018', 600000000, '<p>Đ&uacute;ng như dự đo&aacute;n, mẫu xe hatchback của Honda đ&atilde; được giới thiệu đến người ti&ecirc;u d&ugrave;ng Việt nam nh&acirc;n sự kiện Vietnam Motor Show 2018 (VMS2018) diễn ra v&agrave;o th&aacute;ng 8/2017. Honda Jazz ra mắt tại Việt nam trong bối cảnh trong nước đ&atilde; c&oacute; những đối thủ tầm cỡ như Toyota Yaris, Mazda 2 Hatchback, Ford Fiesta đang kh&aacute; th&agrave;nh c&ocirc;ng. Xe được nhập khẩu từ Th&aacute;i Lan</p>\r\n<p>&nbsp;</p>\r\n<p>Với nhiều năm kinh nghiệm trong ng&agrave;nh &ocirc; t&ocirc;, MrHieu sẽ gi&uacute;p bạn chọn được chiếc&nbsp;xe ưng &yacute; nhất với&nbsp;<strong>MỨC GI&Aacute; TỐT NHẤT</strong>!&nbsp;H&atilde;y li&ecirc;n hệ ngay&nbsp;với Mr Hieu để được tư vấn tốt nhất:&nbsp;<strong>0969887848</strong></p>', 'honda-jazz-dai-dien1524530604.jpg', 12, 'h2'),
('A11', 'Honda Odyssey 2018', 990000000, '<p>K&iacute;nh ch&agrave;o qu&yacute; kh&aacute;ch, qu&yacute; kh&aacute;ch đang t&igrave;m hiểu mẫu xe sedan<strong>&nbsp;Honda Odyssey 2018</strong></p>\r\n<p>&nbsp;</p>\r\n<p><strong>Odyssey</strong>&nbsp;l&agrave; một chiếc xe đa dụng cao cấp, sở hữu c&aacute;c t&iacute;nh năng an to&agrave;n h&agrave;ng đầu ph&acirc;n kh&uacute;c, cabin cao cấp tiện nghi v&agrave; tiết kiệm nhi&ecirc;n liệu vượt trội, Honda Việt Nam sẽ tạo n&ecirc;n một chuẩn mực mới cho ph&acirc;n kh&uacute;c MPV.</p>\r\n<p>&nbsp;</p>\r\n<p>Với nhiều năm kinh nghiệm trong ng&agrave;nh &ocirc; t&ocirc;, Mr Anh sẽ gi&uacute;p bạn chọn được chiếc&nbsp;xe ưng &yacute; nhất với&nbsp;<strong>MỨC GI&Aacute; TỐT NHẤT</strong>!&nbsp;H&atilde;y li&ecirc;n hệ ngay&nbsp;với Mr Anh để được tư vấn tốt nhất:&nbsp;<strong>0969887848</strong></p>', 'honda-odyssey11_11524530827.jpg', 12, 'h5'),
('A12', 'Honda Accord 2.4 – 2018', 763000000, '<p>Hotline 0965565742</p>', '41524532213.jpg', 12, 'h6'),
('A13', 'HONDA CIVIC 1.5G', 850000000, '<p style="text-align: center;"><strong>KỶ NGUY&Ecirc;N CIVIC, KỶ NGUY&Ecirc;N CỦA BỨT PH&Aacute;&rdquo;OTOKOMAE&rdquo; &ndash; ĐỊNH NGHĨA MỚI VỀ SỰ HO&Agrave;N MỸ&nbsp;</strong><br /> Khi mọi xu hướng đ&atilde; trở n&ecirc;n cũ kỹ v&agrave; b&atilde;o h&ograve;a, h&atilde;y ph&aacute; vỡ n&oacute; bằng định luật của ri&ecirc;ng bạn. Với Civic mới, bạn ho&agrave;n to&agrave;n c&oacute; đủ quyền năng v&agrave; sự ki&ecirc;n nhẫn để bứt ph&aacute;, kiến tạo v&agrave; dẫn đầu xu hướng. Civic thế hệ mới được ph&aacute;t triển tr&ecirc;n tinh thần &ldquo;OTOKOMAE&rdquo;. Đẹp kh&ocirc;ng chỉ đơn thuần l&agrave; một d&aacute;ng vẻ b&ecirc;n ngo&agrave;i cuốn h&uacute;t, m&agrave; c&ograve;n l&agrave; vẻ đẹp nội tại &ndash; những gi&aacute; trị l&agrave;m n&ecirc;n một phong c&aacute;ch &ldquo;chất&rdquo;. Vượt tr&ecirc;n kiểu d&aacute;ng ph&aacute; c&aacute;ch, khả năng vận h&agrave;nh v&agrave; những c&ocirc;ng nghệ hiện đại gi&uacute;p Civic định nghĩa lại chuẩn mực cho ph&acirc;n kh&uacute;c compact sedan. Đồng h&agrave;nh c&ugrave;ng Civic sức h&uacute;t kh&oacute; cưỡng.<strong>ALL NEW CIVIC &ndash; VTEC TURBO</strong><br /> Duy tr&igrave; &ldquo;gen&rdquo; cốt l&otilde;i của Civic, thế hệ thứ 10 đ&atilde; n&acirc;ng cảm gi&aacute;c l&aacute;i thể thao v&agrave; th&uacute; vị l&ecirc;n một tầm cao mới.</p>\r\n<p>&nbsp;</p>\r\n<p style="text-align: center;"><strong>ĐỘNG CƠ 1.5L VTEC TURBO MỚI &ndash; VẬN H&Agrave;NH BỨT PH&Aacute;</strong><br /> Động cơ 1.5L VTEC TURBO tăng tốc nhanh v&agrave; mạnh mẽ tương đương động cơ 2.4L thường m&agrave; vẫn tiết kiệm nhi&ecirc;n liệu tr&ecirc;n mọi điều kiện giao th&ocirc;ng khi mức ti&ecirc;u thụ nhi&ecirc;n liệu tương đương động cơ 1.5L thường.<strong>CIVIC MỚI ĐƯỢC TRANG BỊ H&Agrave;NG LOẠT C&Aacute;C TRANG BỊ VẬN H&Agrave;NH TI&Ecirc;N TIẾN</strong><strong>KỶ NGUY&Ecirc;N MỚI VỀ THIẾT KẾ</strong><br /> Kiểu d&aacute;ng ph&aacute; c&aacute;ch với những dường n&eacute;t rắn rỏi m&agrave; vẫn uyển chuyển đầy cảm x&uacute;c c&ugrave;ng c&aacute;c chi tiết cao cấp, mang đến cho Civic diện mạo trẻ trung, hiện đại v&agrave; thể thao hơn bao giờ hết. Đặc biệt, phong c&aacute;ch thiết kế kh&iacute; động học cũng gi&uacute;p ho&agrave;n thiện hiệu suất nhi&ecirc;n liệu v&agrave; sự tĩnh lặng của cabin.</p>\r\n<p>&nbsp;</p>\r\n<p style="text-align: center;"><strong>NỘI THẤT CHINH PHỤC MỌI TR&Aacute;I TIM</strong><br /> Kh&ocirc;ng gian nội thất của Civic mới đạt đến sự ho&agrave;n mỹ m&agrave; bất cứ ai cũng phải khao kh&aacute;t. Rộng r&atilde;i v&agrave; tiện nghi n&acirc;ng tầm, chất liệu cao cấp đ&aacute;p ứng những h&agrave;nh kh&aacute;ch muốn tận dụng sự thư gi&atilde;n, sang trọng. Kh&ocirc;ng gian thiết kế thể thao hay những trang bị giao tiếp th&ocirc;ng minh lại mang lại cho chủ nh&acirc;n c&aacute; t&iacute;nh những trải nghiệm đầy cảm hứng.</p>\r\n<p style="text-align: center;"><strong>GIAO TIẾP TH&Ocirc;NG MIN</strong></p>\r\n<p><strong>AN TO&Agrave;N TI&Ecirc;N PHONG</strong><br /> Sự an to&agrave;n của người l&aacute;i lu&ocirc;n l&agrave; mối quan t&acirc;m h&agrave;ng đầu của Honda. Với hệ thống an to&agrave;n chủ động v&agrave; bị động vượt trội, bạn ho&agrave;n to&agrave;n an t&acirc;m tận hưởng niềm vui cầm l&aacute;i c&ugrave;ng Civic</p>\r\n<p><strong>PHỤ KIỆN T&Ugrave;Y CHỌN CH&Iacute;NH H&Atilde;NG</strong><br /> Bạn c&oacute; thể lựa chọn những phụ kiện trang tr&iacute; gi&uacute;p cho chiếc Civic sở hữu phong c&aacute;ch thể thao nổi bật hay sang trọng c&aacute; t&iacute;nh hơn v&agrave; trang bị th&ecirc;m những chi tiết gi&uacute;p cho mọ</p>', 'honda-civic71524534199.jpg', 12, 'h4'),
('A14', 'HONDA JAZZ 1.5VX', 7200000000, '<p>Hotel: 0965565742</p>', '4-41524534310.jpg', 12, 'h2'),
('A15', 'HONDA CITY 2018 1.5 CVT', 523000000, '<ul>\r\n<li>Honda Việt Nam ch&iacute;nh thức giới thiệu City 2017 mới &ndash; &ldquo;Tầm cao dẫn bước&rdquo;!</li>\r\n</ul>\r\n<p>&nbsp;</p>\r\n<p>Ra đời v&agrave;o năm 1996, qua hơn 20 năm ph&aacute;t triển, Honda City đ&atilde; trở th&agrave;nh một mẫu xe to&agrave;n cầu của Honda với gần 3.5 triệu xe được giao đến tay kh&aacute;ch h&agrave;ng tr&ecirc;n to&agrave;n cầu t&iacute;nh đến hết th&aacute;ng 4/2017.</p>\r\n<p>&nbsp;</p>\r\n<p>Ch&iacute;nh thức được giới thiệu đến thị trường Việt Nam từ th&aacute;ng 9/2014, City thế hệ 4 đ&atilde; rất th&agrave;nh c&ocirc;ng, l&agrave; một trong những xe sedan cỡ nhỏ b&aacute;n chạy nhất ph&acirc;n kh&uacute;c B với c&aacute;c gi&aacute; trị vượt trội về vận h&agrave;nh v&agrave; tiết kiệm nhi&ecirc;n liệu. Đặc biệt, năm 2016, City l&agrave; mẫu xe c&oacute; mức tăng trưởng về doanh số b&aacute;n v&agrave; thị phần cao nhất trong ph&acirc;n kh&uacute;c.</p>\r\n<p>&nbsp;</p>\r\n<p>Tiếp nối th&agrave;nh c&ocirc;ng, ng&agrave;y 19 th&aacute;ng 6 năm 2017, C&ocirc;ng ty Honda Việt Nam ch&iacute;nh thức giới thiệu&nbsp;City phi&ecirc;n bản mới 2017. Đ&acirc;y l&agrave; phi&ecirc;n bản đ&atilde; ra mắt rất th&agrave;nh c&ocirc;ng tại c&aacute;c thị trường Th&aacute;i Lan, Malaysia, Ấn Độ, Indonesia, Phillippines v&agrave; Australia.</p>\r\n<p>&nbsp;</p>\r\n<div>&nbsp;Với &yacute; tưởng ph&aacute;t triển tổng thể&rdquo;Chiếc xe th&ocirc;ng minh mạnh mẽ vượt trội&rdquo;,City 2017tập trung v&agrave;o 3 yếu tố:Thiết kế cao cấp &ndash; Tiện &iacute;ch tối ưu &ndash; An to&agrave;n vượt trội, hướng tới c&aacute;c kh&aacute;ch h&agrave;ng trẻ trung, ưa th&iacute;ch sự năng động, hiện đại c&ugrave;ng sự tiện nghi v&agrave; an to&agrave;n tối đa.</div>\r\n<div>City 2017&nbsp;&ndash; Phong c&aacute;ch hơn &ndash; Hiện đại hơn &ndash; Tiện &iacute;ch hơn &ndash; An to&agrave;n hơn sẽ ch&iacute;nh thức được cung cấp tại Việt Nam:</div>\r\n<p>&nbsp;</p>\r\n<ul type="disc">\r\n<li>Từ ng&agrave;y&nbsp;19/6/2017&nbsp;qua hệ thống đại l&yacute; &Ocirc; t&ocirc; Honda tr&ecirc;n to&agrave;n quốc</li>\r\n<li>2 phi&ecirc;n bản: City 1.5 v&agrave; City 1.5TOP (bản cao cấp)</li>\r\n<li>6 m&agrave;u, bao gồm 5 m&agrave;u hiện tại l&agrave; Đỏ, Trắng ng&agrave;, Titan, Đen &aacute;nh, Ghi bạc v&agrave; th&ecirc;m một m&agrave;u mới &ndash; Xanh đậm c&aacute; t&iacute;nh.</li>\r\n<li>Gi&aacute; b&aacute;n lẻ đề xuất &ldquo;đ&aacute;ng tiền&rdquo;&nbsp;so với những gi&aacute; trị vượt trội mang lại:&nbsp;568.000.000 VND cho bản City 1.5 v&agrave; 604.000.000 VND cho bản cao cấp City 1.5TOP (bao gồm VAT).&nbsp;City 1.5, l&agrave; bản n&acirc;ng cấp của bản số tự động thuộc City 2016, được bổ sung nhiều tiện &iacute;ch gi&aacute; trị nhưng c&oacute; gi&aacute; b&aacute;n thấp hơn 15 triệu đồng. Đ&acirc;y l&agrave; nỗ lực của Honda Việt Nam trong việc tối ưu h&oacute;a hoạt động sản xuất &ndash; kinh doanh nhằm cung cấp những sản phẩm chất lượng tốt nhất với gi&aacute; b&aacute;n ph&ugrave; hợp nhất, dựa tr&ecirc;n những điều kiện tương đương với năm 2018. C&ugrave;ng với đ&oacute; l&agrave; bản 1.5TOP với việc được trang bị h&agrave;ng loạt c&aacute;c t&iacute;nh năng cao cấp nhưng vẫn được duy tr&igrave; ở mức gi&aacute; cạnh tranh được kỳ vọng sẽ tạo n&ecirc;n những gi&aacute; trị vượt trội, tr&ecirc;n cả sự mong đợi của kh&aacute;ch h&agrave;ng.</li>\r\n<li>Chế độ bảo h&agrave;nh 3 năm hoặc 100.000 km t&ugrave;y theo điều kiện n&agrave;o đến trước. B&ecirc;n cạnh đ&oacute;, Honda Việt Nam cũng cung cấp g&oacute;i gia hạn bảo h&agrave;nh t&ugrave;y chọn.</li>\r\n</ul>', '3-21524534457.jpg', 12, 'h1'),
('A16', 'HONDA JAZZ 1.5RS', 725000000, '<p>Hotel: 0965656742</p>', '2-41524534586.jpg', 12, 'h2'),
('A17', 'HONDA JAZZ 1.5V', 544000000, '<p>Hotel: 0965565742</p>', '3-41524534687.jpg', 12, 'h2'),
('A18', 'HONDA CIVIC 2018 THẾ HỆ THỨ 10 ', 898000000, '<p><span style="font-family: \'times new roman\', times, serif;">&nbsp;Honda Việt Nam (HVN) ch&iacute;nh thức ra mắt&nbsp;<strong>Honda Civic</strong>&nbsp;thế hệ thứ 10 ho&agrave;n to&agrave;n mới&nbsp;tại Việt Nam Motor Show 2016. Civic ho&agrave;n to&agrave;n mới được giới thiệu với một thiết kế mang t&iacute;nh c&aacute;ch mạng v&agrave; động cơ tăng &aacute;p VTEC TURBO 1.5L ho&agrave;n to&agrave;n mới lần đầu ti&ecirc;n xuất hiện tr&ecirc;n xe &ocirc; t&ocirc; Honda tại Việt Nam. Civic thế hệ mới sẽ định nghĩa lại chuẩn mực cho d&ograve;ng xe sedan ph&acirc;n kh&uacute;c C ở Việt Nam với rất nhiều c&aacute;c t&iacute;nh năng nổi bật. Mẫu xe n&agrave;y sẽ được&nbsp;nhập khẩu từ Th&aacute;i Lan v&agrave; dự kiến sẽ được b&aacute;n v&agrave;o th&aacute;ng 1 năm 2017.</span></p>\r\n<p><span style="font-family: \'times new roman\', times, serif;"><span style="font-family: \'times new roman\', times, serif;">Việc s&aacute;ng tạo n&ecirc;n Civic thế hệ 10 đại diện cho một trong những dự &aacute;n ph&aacute;t triển sản phẩm mới to&agrave;n diện v&agrave; tham vọng nhất được thực hiện bởi đội ngũ nghi&ecirc;n cứu v&agrave; ph&aacute;t triển sản phẩm Honda. Civic thế hệ mới được đ&aacute;nh gi&aacute; c&oacute; thiết kế ph&aacute; c&aacute;ch v&agrave; mang phong c&aacute;ch thể thao nhất từ trước đến nay, kiến tạo n&ecirc;n chuẩn mực mới trong ph&acirc;n kh&uacute;c về tất cả c&aacute;c đặc t&iacute;nh, từ kh&ocirc;ng gian rộng r&atilde;i, chất lượng nội thất, tiện nghi, kết nối ti&ecirc;n tiến, c&aacute;c t&iacute;nh năng an to&agrave;n v&agrave; đặc biệt l&agrave; động cơ VTEC TURBO ho&agrave;n to&agrave;n mới mang đến khả năng vận h&agrave;nh mạnh mẽ v&agrave; tiết kiệm nhi&ecirc;n liệu vượt trội.</span></span></p>', '2-21524535863.jpg', 12, 'h4'),
('A19', ' HONDA CRV 1.5 TURBO 2018', 958000000, '<p><span style="font-family: \'times new roman\', times, serif;">Ng&agrave;y 13/11, Honda ch&iacute;nh thức v&eacute;n m&agrave;n CR-V thế hệ thứ 5 với thiết kế thực dụng hơn, động cơ 1.5L turbo mới, nội thất sang trọng hơn với thiết kế 7&nbsp;chỗ.</span></p>\r\n<p>&nbsp;</p>\r\n<p><span style="font-family: \'times new roman\', times, serif;">Suốt thời gian Honda &ldquo;thai ngh&eacute;n&rdquo; CR-V thế hệ thứ 5, h&agrave;ng loạt nguồn tin dựa tr&ecirc;n c&aacute;c th&ocirc;ng số r&ograve; rỉ v&agrave; h&igrave;nh ảnh xe chạy thử cho rằng Honda CR-V ho&agrave;n to&agrave;n mới sẽ c&oacute; th&ecirc;m h&agrave;ng ghế thứ 3 &ndash; đồng nghĩa với việc mẫu crossover n&agrave;y sẽ c&oacute; th&ecirc;m lựa chọn 7 chỗ. Đ&acirc;y l&agrave; c&aacute;ch m&agrave; Hyundai &aacute;p dụng cho Santa Fe v&agrave; kh&aacute; th&agrave;nh c&ocirc;ng.</span></p>\r\n<p><span style="font-family: \'times new roman\', times, serif;">Tuy nhi&ecirc;n, những ai đang ng&oacute;ng chờ điều n&agrave;y đ&atilde; phải vỡ mộng khi h&atilde;ng xe Nhật Bản ch&iacute;nh thức giới thiệu phi&ecirc;n bản ho&agrave;n to&agrave;n mới thuộc thế hệ thứ 5 của CR-V tại thị trường Mỹ.</span></p>\r\n<p><span style="font-family: \'times new roman\', times, serif;">Sở dĩ Mỹ được chọn l&agrave; thị trường đầu ti&ecirc;n bởi ở nơi đ&acirc;y, Honda CR-V đang rất th&agrave;nh c&ocirc;ng. CR-V hiện l&agrave; xe Honda b&aacute;n chạy thứ 2 với tổng số gần 4 triệu chiếc b&aacute;n ra trong v&ograve;ng 2 thập kỷ qua, đồng thời dẫn đầu ph&acirc;n kh&uacute;c SUV cỡ nhỏ &ndash; nơi c&oacute; sự g&oacute;p mặt của&nbsp;Toyota RAV4, Subaru Forester, Chevrolet Equinox v&agrave; Ford Escape.</span></p>\r\n<p>&nbsp;</p>', 'crv_2018__zing1524536423.jpg', 12, 'h3'),
('A20', 'HONDA ACCORD 2.0AT 2018', 950000000, '<h3 class="title"><span style="font-family: \'times new roman\', times, serif;"><span style="font-size: 12pt;">Ch&iacute;nh v&agrave;o ng&agrave;y 25/12/2016 Một phi&ecirc;n bản thế hệ thứ 10 của honda accord được cho ra mắt tại triển l&atilde;m xe, với&nbsp;gi&aacute; honda accord&nbsp;được điều chỉnh cho ph&ugrave; hợp với mức t&agrave;i ch&iacute;nh của kh&aacute;ch h&agrave;ng n&ecirc;n mẫu xe n&agrave;y được kỳ vọng lớn mang chiếc xe mơ ước cho rất nhiều người.</span></span></h3>\r\n<p><span style="font-family: \'times new roman\', times, serif;"><span style="font-size: 12pt;"><span style="font-family: \'times new roman\', times, serif;">Sang trọng hơn, cuốn h&uacute;t hơn, vận h&agrave;nh tốt hơn v&agrave; được trang bị tốt ,&nbsp;<strong>Accord</strong>&nbsp;ho&agrave;n to&agrave;n mới mang đến niềm tự h&agrave;o về đẳng cấp, khẳng định vị thế v&agrave; phong c&aacute;ch ri&ecirc;ng biệt của chủ sở hữu.Thế hệ thứ 9 được coi l&agrave; biểu tượng tự h&agrave;o của&nbsp;<strong>Honda</strong>&nbsp;về độ bền bỉ, chất lượng v&agrave; sự tin cậy. Đ&oacute; l&agrave; sự kết hợp ho&agrave;n hảo của thiết kế th&ocirc;ng minh v&agrave; phong c&aacute;ch hiện đại, t&ocirc;n l&ecirc;n sự sang trọng v&agrave; tinh tế tuyệt đối trong ph&acirc;n kh&uacute;c.</span></span></span></p>', '6-31524536543.jpg', 12, 'h6'),
('A21', 'Honda City 2017', 500000000, '<p>Hotel: 09655656742</p>', 'IMG_1984-510x6001524536692.jpg', 12, 'h1'),
('A22', 'Honda City Price', 990000000, '<p>Hotel :0965565742</p>', 'Honda-City-Front-view-906811524536860.jpg', 12, 'h1'),
('A23', 'Honda Jazz Facelift', 853000000, '<pre id="tw-target-text" class="tw-data-text tw-ta tw-text-small" dir="ltr" style="text-align: left; height: 1200px;" data-placeholder="Bản dịch" data-fulltext=""><span lang="vi">Như đ&atilde; thấy tại Triển l&atilde;m &ocirc; t&ocirc; Frankfurt 2017, chiếc Honda Jazz mới được n&acirc;ng cấp b&ecirc;n ngo&agrave;i v&agrave; nội thất mới. Khoảng thời gian n&agrave;y, chiếc hatchback cao cấp cũng được trang bị c&aacute;c t&ugrave;y chọn động cơ xăng mới c&ugrave;ng với c&aacute;c thiết bị cải tiến cho tiện nghi s&aacute;ng tạo.\r\n\r\nĐộng cơ\r\n\r\nVề mặt cơ học, Jazz mới nhận được t&ugrave;y chọn động cơ xăng 1.5 l&iacute;t mới tạo ra 130bhp c&ugrave;ng với động cơ 1.2 l&iacute;t tạo ra 89bhp điện. Biến thể diesel sẽ tiếp tục được trang bị động cơ 1,5 l&iacute;t tạo ra 98bhp điện năng. Động cơ xăng sẽ c&oacute; sẵn trong t&ugrave;y chọn thủ c&ocirc;ng v&agrave; CVT 5 tốc độ, trong khi động cơ diesel sẽ bị giới hạn trong s&aacute;ch hướng dẫn s&aacute;u tốc độ.\r\n\r\nNgoại thất\r\n\r\nJazz mới dựa tr&ecirc;n ng&ocirc;n ngữ thiết kế mới nhất của gia đ&igrave;nh Honda, bao gồm kết hợp đ&egrave;n pha v&agrave; lưới tản nhiệt \'C&aacute;nh rắn\'. C&aacute;c cản trước cũng kh&aacute;c nhau với c&aacute;c đường n&eacute;t t&iacute;ch cực hơn xung quanh lỗ th&ocirc;ng hơi. Ở ph&iacute;a sau, c&aacute;c phần lưới tản nhiệt n&ocirc;ng hơn được li&ecirc;n kết với nhau bằng một dải cắt m&agrave;u đen b&oacute;ng ph&iacute;a tr&ecirc;n phần h&igrave;nh thang ph&iacute;a dưới. Tất cả trong tất cả, Jazz vẫn giữ hồ sơ giống như MPV của n&oacute;, do đ&oacute; l&agrave;m cho n&oacute; cực kỳ thiết thực v&agrave; rộng r&atilde;i.\r\n\r\nNội địa\r\n\r\nKhoảng thời gian n&agrave;y, chiếc Honda Jazz mới nhận được một mẫu h&igrave;nh sọc tr&ecirc;n ghế v&agrave; tay l&aacute;i bọc da v&agrave; n&uacute;m số, tất cả đều được tăng cường bằng c&aacute;c đường kh&acirc;u m&agrave;u da cam. Jazz giữ lại t&iacute;nh linh hoạt của m&ocirc; h&igrave;nh trước đ&oacute;, bao gồm cả một kh&ocirc;ng gian khởi động của 354 l&iacute;t (c&oacute; thể l&ecirc;n tới 897 l&iacute;t với ghế sau gập xuống) v&agrave; cấu h&igrave;nh Magic Seat để lưu trữ c&aacute;c vật phẩm cao.</span></pre>', 'Honda-Jazz-Facelift-Exterior-1164651524537411.jpg', 12, 'h2'),
('A24', 'Honda City New', 990000000, '<pre id="tw-target-text" class="tw-data-text tw-ta tw-text-small" dir="ltr" style="text-align: left; height: 240px;" data-placeholder="Bản dịch" data-fulltext=""><span lang="vi">Sau th&agrave;nh phố, chiếc xe Honda được y&ecirc;u th&iacute;ch nhất ở Ấn Độ phải l&agrave; Civic. <br />Chiếc sedan thấp slung đầy kh&ocirc;ng gian giữa th&agrave;nh phố v&agrave; Accord v&agrave; ngay lập tức được y&ecirc;u th&iacute;ch trong số những người đam m&ecirc; với động cơ mạnh mẽ 1,8 l&iacute;t của n&oacute;.<br /> Với những chiếc xe chạy xăng hết thời trang v&agrave;o đầu thập kỷ, <br />Civic từ từ tự l&aacute;i v&agrave;o qu&ecirc;n l&atilde;ng.</span></pre>', 'Honda-Civic-New-Exterior-905241524537653.jpg', 12, 'h1'),
('A25', 'Honda CR-V Price', 853000000, '<p>Hotel:0965565742</p>', 'Honda-WRV-Right-Front-Three-Quarter-929871524538283.jpg', 12, 'h3'),
('A26', 'Honda City 2016', 500000000, '<p>Hotel : 0965565742</p>', 'Honda-Amaze-New-Exterior-1203221524538799.jpg', 12, 'h1'),
('A27', 'Honda City 1.5 TOP', 599000000, '<p>&nbsp;</p>\r\n<p>Ra đời v&agrave;o năm 1996, qua hơn 20 năm ph&aacute;t triển, Honda City đ&atilde; trở th&agrave;nh một mẫu xe to&agrave;n cầu của Honda với gần 3.5 triệu xe được giao đến tay kh&aacute;ch h&agrave;ng tr&ecirc;n to&agrave;n cầu t&iacute;nh đến hết th&aacute;ng 4/2017.</p>\r\n<p>&nbsp;</p>\r\n<p>Ch&iacute;nh thức được giới thiệu đến thị trường Việt Nam từ th&aacute;ng 9/2014, City thế hệ 4 đ&atilde; rất th&agrave;nh c&ocirc;ng, l&agrave; một trong những xe sedan cỡ nhỏ b&aacute;n chạy nhất ph&acirc;n kh&uacute;c B với c&aacute;c gi&aacute; trị vượt trội về vận h&agrave;nh v&agrave; tiết kiệm nhi&ecirc;n liệu. Đặc biệt, năm 2016, City l&agrave; mẫu xe c&oacute; mức tăng trưởng về doanh số b&aacute;n v&agrave; thị phần cao nhất trong ph&acirc;n kh&uacute;c.</p>\r\n<p>Tiếp nối th&agrave;nh c&ocirc;ng, ng&agrave;y 19 th&aacute;ng 6 năm 2017, C&ocirc;ng ty Honda Việt Nam ch&iacute;nh thức giới thiệu <strong>City phi&ecirc;n bản mới 2017</strong>. Đ&acirc;y l&agrave; phi&ecirc;n bản đ&atilde; ra mắt rất th&agrave;nh c&ocirc;ng tại c&aacute;c thị trường Th&aacute;i Lan, Malaysia, Ấn Độ, Indonesia, Phillippines v&agrave; Australia.</p>\r\n<p><img src="images/sanphamnen1524497435.jpg" alt="" /></p>\r\n<p>Với &yacute; tưởng ph&aacute;t triển tổng thể <strong><em>&ldquo;Chiếc xe th&ocirc;ng minh mạnh mẽ vượt trội&rdquo;</em></strong>, <strong>City 2017</strong> tập trung v&agrave;o 3 yếu tố: <strong><em>Thiết kế cao cấp &ndash; Tiện &iacute;ch tối ưu &ndash; An to&agrave;n vượt trội</em></strong>, hướng tới c&aacute;c kh&aacute;ch h&agrave;ng trẻ trung, ưa th&iacute;ch sự năng động, hiện đại c&ugrave;ng sự tiện nghi v&agrave; an to&agrave;n tối đa.</p>', 'nen1524497540.jpg', 12, 'h1'),
('A28', 'Honda-jazz V', 544000000, '<p><img src="https://hondaoto.com.vn/hondajazz/assets/img/exterior-bg.jpg" alt="" /></p>', 'exterior-bg1524498091.jpg', 12, 'h2'),
('A29', 'Honda Odyssey 2018', 990000000, '<p>K&iacute;nh ch&agrave;o qu&yacute; kh&aacute;ch, qu&yacute; kh&aacute;ch đang t&igrave;m hiểu mẫu xe sedan<strong>&nbsp;Honda Odyssey 2018</strong></p>\r\n<p>&nbsp;</p>\r\n<p><strong>Odyssey</strong>&nbsp;l&agrave; một chiếc xe đa dụng cao cấp, sở hữu c&aacute;c t&iacute;nh năng an to&agrave;n h&agrave;ng đầu ph&acirc;n kh&uacute;c, cabin cao cấp tiện nghi v&agrave; tiết kiệm nhi&ecirc;n liệu vượt trội, Honda Việt Nam sẽ tạo n&ecirc;n một chuẩn mực mới cho ph&acirc;n kh&uacute;c MPV.</p>\r\n<p>&nbsp;</p>\r\n<p>Với nhiều năm kinh nghiệm trong ng&agrave;nh &ocirc; t&ocirc;, Mr Anh sẽ gi&uacute;p bạn chọn được chiếc&nbsp;xe ưng &yacute; nhất với&nbsp;<strong>MỨC GI&Aacute; TỐT NHẤT</strong>!&nbsp;H&atilde;y li&ecirc;n hệ ngay&nbsp;với Mr Anh để được tư vấn tốt nhất:&nbsp;<strong>0969887848</strong></p>', 'honda-odyssey11_11524530827.jpg', 12, 'h5'),
('A30', 'HONDA JAZZ 1.5RS', 725000000, '<p>Hotel: 0965656742</p>', '2-41524534586.jpg', 12, 'h2');

-- --------------------------------------------------------

--
-- Table structure for table `taikhoan`
--

CREATE TABLE `taikhoan` (
  `id` int(11) NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `hoten` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `matkhau` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `gioitinh` int(11) NOT NULL,
  `sodienthoai` int(11) NOT NULL,
  `ngaysinh` date NOT NULL,
  `hinhanh` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `trangthai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `taikhoan`
--

INSERT INTO `taikhoan` (`id`, `email`, `hoten`, `matkhau`, `gioitinh`, `sodienthoai`, `ngaysinh`, `hinhanh`, `trangthai`) VALUES
(11, 'nguyentheanh97@gmail.com', 'Nguyễn Thế Anh', 'ceea23519f6f86ad67e9f798bf8002cb', 1, 965565742, '1997-04-04', '', 2),
(12, 'nguyentuyengiangbn@gmail.com', 'Nguyễn Tuyển Giảng', '243079561a38e3d13383b8ea6bd444b5', 1, 965565742, '1997-10-24', 'nguoi_con_gai_toi_yeu1525748086.jpg', 1),
(13, 'phamquanghieu@gmail.com', 'Pham Quang Hieu', 'fcea920f7412b5da7be0cf42b8c93759', 1, 965565742, '1997-01-10', '', 1),
(14, 'tuyengiang97@gmail.com', 'Nguyễn Tuyển Giảng', '9cbf8a4dcb8e30682b927f352d6559a0', 1, 965565742, '1997-10-24', '', 2),
(20, 'tuyengiang1005@gmail.com', 'Nguyen Tuyen Giang', 'fcea920f7412b5da7be0cf42b8c93759', 1, 965565742, '1997-10-24', '', 2),
(21, 'tuyengiang1997@gmail.com', 'Giang dai ca', 'ceea23519f6f86ad67e9f798bf8002cb', 1, 965565742, '1997-10-24', 'co-gai-toi-yeu1525058258.jpg', 1),
(22, 'giangtuyen@gmail.com', 'Giảng Tuyển', 'ceea23519f6f86ad67e9f798bf8002cb', 1, 965565742, '1997-10-24', NULL, 2),
(23, 'giangdaica@gmail.com', 'Tuyển Giảng', 'ceea23519f6f86ad67e9f798bf8002cb', 1, 965565742, '1950-01-01', NULL, 2),
(24, 'hieuhight@gmail.com', 'crhfu', 'faeb35c5e94e8ba95885629e7475d79d', 1, 965565742, '1950-01-01', NULL, 2),
(25, '11@gmail.com', 'h hh', '25d55ad283aa400af464c76d713c07ad', 1, 987654321, '1950-01-01', NULL, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`madanhmuc`);

--
-- Indexes for table `hinhanh`
--
ALTER TABLE `hinhanh`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lienhe`
--
ALTER TABLE `lienhe`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`masp`);

--
-- Indexes for table `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `hinhanh`
--
ALTER TABLE `hinhanh`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=115;
--
-- AUTO_INCREMENT for table `lienhe`
--
ALTER TABLE `lienhe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
