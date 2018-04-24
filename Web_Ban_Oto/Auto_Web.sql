-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 24, 2018 at 07:03 AM
-- Server version: 5.7.21-0ubuntu0.16.04.1
-- PHP Version: 7.0.25-0ubuntu0.16.04.1

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
-- Table structure for table `danhmuc`
--

CREATE TABLE `danhmuc` (
  `id` int(11) NOT NULL,
  `madanhmuc` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `tendanhmuc` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `danhmuc`
--

INSERT INTO `danhmuc` (`id`, `madanhmuc`, `tendanhmuc`) VALUES
(1, 'h1', 'Honda City 2018'),
(2, 'h2', 'Honda Jazz 2018'),
(3, 'h3', 'Honda CRV 2018'),
(4, 'h4', 'Honda Civic 2018'),
(5, 'h5', 'Honda Odyssey 2018'),
(6, 'h6', 'Honda Accord 2018');

-- --------------------------------------------------------

--
-- Table structure for table `hinhanh`
--

CREATE TABLE `hinhanh` (
  `id` int(11) NOT NULL,
  `id_sanpham` int(11) NOT NULL,
  `hinhanh` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `hinhanh`
--

INSERT INTO `hinhanh` (`id`, `id_sanpham`, `hinhanh`) VALUES
(9, 3, 'IMG_11524307381.jpg'),
(10, 3, 'IMG_21524307381.jpg'),
(11, 3, 'IMG_21524307381.jpg'),
(12, 3, 'IMG_31524307382.jpg'),
(13, 3, 'IMG_41524307382.jpg'),
(14, 3, 'IMG_51524307382.jpg'),
(15, 3, 'IMG_15361524307382.jpg'),
(16, 4, '11524497630.jpg'),
(17, 4, '21524497631.jpg'),
(18, 4, '31524497631.jpg'),
(19, 4, '41524497631.jpg'),
(20, 4, '51524497631.jpg'),
(21, 5, 'Bang-dieu-khien-Honda-City-2017-thuan-tien-cho-nguoi-su-dung-700x3941524497823.jpg'),
(22, 5, 'honda-city-2017-mau-do-man-700x3191524497823.jpg'),
(23, 5, 'Honda-city-2017-có-thiết-kế-khí-động-học-và-phong-cách-thể-thao-700x3941524497823.jpg'),
(24, 5, 'Trai-nghiem-thu-vi-khi-lai-xe-Honda-city-2017-700x3941524497823.jpg'),
(25, 7, 'Danh_gia_xe_Honda_Civic_20161524498353.jpg'),
(26, 7, 'Dau_xe_honda_civic_20161524498353.jpg'),
(27, 7, 'Den_pha_xe_civic_20161524498353.jpg'),
(28, 7, 'Duoi_xe_honda_civic_20161524498353.jpg'),
(29, 7, 'gia_xe_honda_civic_20161524498353.jpg'),
(30, 7, 'ngoai_that_honda_civic_20161524498353.jpg');

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
(3, 'sdef', 'sadfg', 'sdf');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `masp` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `tensp` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `giaban` float NOT NULL,
  `noidung` text COLLATE utf8_unicode_ci NOT NULL,
  `tomtat` text COLLATE utf8_unicode_ci NOT NULL,
  `hinhanh` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `nguoidang` int(11) NOT NULL,
  `madanhmuc` varchar(15) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `masp`, `tensp`, `giaban`, `noidung`, `tomtat`, `hinhanh`, `nguoidang`, `madanhmuc`) VALUES
(3, 'A01', 'Honda City 2018', 500000000, '<p><span style="font-size: 16px;"><span style="color: #0000cd;">+ Hộp số tự động v&ocirc; cấp CVT EARTH DREAMS TECHNOLOGY<br /> + Lẫy chuyển số thể thao tr&ecirc;n v&ocirc; lăng<br /> + C&acirc;n bằng điện tử VSA<br /> + Hỗ trợ khởi h&agrave;nh ngang dốc HAS<br /> + Ph&acirc;n bổ lực phanh điện tử EBD<br /> + Xe chạy đầm chắc &amp; Cảm gi&aacute;c l&aacute;i ch&iacute;nh x&aacute;c ở tốc độ cao<br /> + M&agrave;n h&igrave;nh cảm ứng, Camera l&ugrave;i 3 g&oacute;c quay<br /> + Ghế nỉ, Đ&egrave;n chạy ban ng&agrave;y Led<br /> + Chế độ rảnh ch&acirc;n ga Cruise Control<br /> + &Acirc;m thanh đỉnh với 4 loa<br /> + Cửa gi&oacute; điều h&ograve;a h&agrave;ng ghế ph&iacute;a sau<br /> + Đề nổ Start/Stop, Ch&igrave;a kho&aacute; th&ocirc;ng minh&nbsp;<br /> + Đ&agrave;m thoại rảnh tay, nghe nhạc Bluetooth<br /> + Kiểu d&aacute;ng thể thao bắt mắt!</span></span></p>', '<p>Th&ocirc;ng tin mi&ecirc;u tả 1</p>', '1_Honda_Colors_White01524493493.png', 12, 'h1'),
(4, 'A02', 'Honda City 1.5 TOP', 599000000, '<p>&nbsp;</p>\r\n<p>Ra đời v&agrave;o năm 1996, qua hơn 20 năm ph&aacute;t triển, Honda City đ&atilde; trở th&agrave;nh một mẫu xe to&agrave;n cầu của Honda với gần 3.5 triệu xe được giao đến tay kh&aacute;ch h&agrave;ng tr&ecirc;n to&agrave;n cầu t&iacute;nh đến hết th&aacute;ng 4/2017.</p>\r\n<p>&nbsp;</p>\r\n<p>Ch&iacute;nh thức được giới thiệu đến thị trường Việt Nam từ th&aacute;ng 9/2014, City thế hệ 4 đ&atilde; rất th&agrave;nh c&ocirc;ng, l&agrave; một trong những xe sedan cỡ nhỏ b&aacute;n chạy nhất ph&acirc;n kh&uacute;c B với c&aacute;c gi&aacute; trị vượt trội về vận h&agrave;nh v&agrave; tiết kiệm nhi&ecirc;n liệu. Đặc biệt, năm 2016, City l&agrave; mẫu xe c&oacute; mức tăng trưởng về doanh số b&aacute;n v&agrave; thị phần cao nhất trong ph&acirc;n kh&uacute;c.</p>\r\n<p>Tiếp nối th&agrave;nh c&ocirc;ng, ng&agrave;y 19 th&aacute;ng 6 năm 2017, C&ocirc;ng ty Honda Việt Nam ch&iacute;nh thức giới thiệu <strong>City phi&ecirc;n bản mới 2017</strong>. Đ&acirc;y l&agrave; phi&ecirc;n bản đ&atilde; ra mắt rất th&agrave;nh c&ocirc;ng tại c&aacute;c thị trường Th&aacute;i Lan, Malaysia, Ấn Độ, Indonesia, Phillippines v&agrave; Australia.</p>\r\n<p><img src="images/sanphamnen1524497435.jpg" alt="" /></p>\r\n<p>Với &yacute; tưởng ph&aacute;t triển tổng thể <strong><em>&ldquo;Chiếc xe th&ocirc;ng minh mạnh mẽ vượt trội&rdquo;</em></strong>, <strong>City 2017</strong> tập trung v&agrave;o 3 yếu tố: <strong><em>Thiết kế cao cấp &ndash; Tiện &iacute;ch tối ưu &ndash; An to&agrave;n vượt trội</em></strong>, hướng tới c&aacute;c kh&aacute;ch h&agrave;ng trẻ trung, ưa th&iacute;ch sự năng động, hiện đại c&ugrave;ng sự tiện nghi v&agrave; an to&agrave;n tối đa.</p>', '<p>sd</p>', 'nen1524497540.jpg', 12, 'h1'),
(5, 'A03', 'Honda CITY 1.5 MT', 535000000, '<p>Xe Honda City 2017 thiết lập một ti&ecirc;u chuẩn ho&agrave;n to&agrave;n mới cho ph&acirc;n kh&uacute;c sedan hạng nhỏ. Với những ti&ecirc;u chuẩn mới: kh&ocirc;ng gian nội thất rộng r&atilde;i nhất, c&ocirc;ng nghệ ti&ecirc;n tiến nhất, thiết kế năng động nhất &ndash; Honda City đang mang đến một lựa chọn kh&ocirc;ng thể bỏ qua trong d&ograve;ng sedan hạng nhỏ tại Việt Nam.<br /> <strong>Mẫu xe City 2017 c&oacute; th&ecirc;m nhiều t&iacute;nh năng mới :<br /></strong></p>\r\n<p>&nbsp;</p>\r\n<ul>\r\n<li><strong>Khởi động Start/Stop tr&ecirc;n Honda City mới</strong></li>\r\n<li><strong>Khởi h&agrave;nh ngang dốc</strong></li>\r\n<li><strong>Gương gập điện</strong></li>\r\n<li><strong>N&uacute;t chỉnh &acirc;m thanh ngay tr&ecirc;n v&ocirc; lăng</strong></li>\r\n<li><strong>Bổ sung m&agrave;u đỏ mận v&agrave; ngoại thất bắt mắt th&ecirc;m m&agrave;u đỏ mận</strong></li>\r\n<li>&nbsp;</li>\r\n</ul>\r\n<p>Honda&nbsp;Việt Nam đ&atilde; từng bước chiếm trọn tr&aacute;i tim kh&aacute;ch h&agrave;ng v&agrave; trở th&agrave;nh lựa chọn đầu ti&ecirc;n cho những ai đang t&igrave;m kiếm một chiếc xe ưng &yacute; trong ph&acirc;n kh&uacute;c sedan cỡ nhỏ.&nbsp;Với năm m&agrave;u sống động bao gồm: Xanh dương c&aacute; t&iacute;nh, Đen &aacute;nh độc t&ocirc;n, Titan mạnh mẽ, Ghi bạc thời trang v&agrave; Trắng ng&agrave; tinh tế. Giống như c&aacute;c mẫu xe kh&aacute;c, City ho&agrave;n to&agrave;n mới sẽ được &aacute;p dụng chế độ bảo h&agrave;nh 3 năm hoặc 100.000 km t&ugrave;y theo điều kiện n&agrave;o đến trước. B&ecirc;n cạnh đ&oacute;, Honda Việt Nam cũng cung cấp g&oacute;i gia hạn bảo h&agrave;nh t&ugrave;y chọn.</p>\r\n<p><strong>C&ocirc;ng nghệ cốt l&otilde;i ứng dụng tr&ecirc;n Honda City :</strong></p>\r\n<p>Ứng dụng tr&ecirc;n Động cơ xăng&nbsp;&ndash; Động cơ dẫn đầu ng&agrave;nh về t&iacute;nh năng vận h&agrave;nh v&agrave; tiết kiệm nhi&ecirc;n liệu.</p>\r\n<p>Với việc cải tiến c&ocirc;ng nghệ điều khiển van biến thi&ecirc;n VTEC nguy&ecirc;n bản nhằm tăng cường hiệu quả qu&aacute; tr&igrave;nh đốt ch&aacute;y v&agrave; giảm thiểu ma s&aacute;t, c&ocirc;ng nghệ n&agrave;y mang đến sự kết hợp tối ưu giữa c&ocirc;ng suất đầu ra cao v&agrave; hiệu suất sử dụng nhi&ecirc;n liệu. Hơn thế nữa, h&agrave;ng loạt c&aacute;c kiểu động cơ mới đ&atilde; được ph&aacute;t triển, ứng dụng cấu tr&uacute;c mới nhằm đạt được khả năng linh hoạt cao hơn.</p>\r\n<p>Thiết kế kh&iacute; động học v&agrave; phong c&aacute;ch thể thao to&aacute;t l&ecirc;n kiểu d&aacute;ng trẻ trung đầy linh hoạt, g&acirc;y ấn tượng ngay từ c&aacute;i nh&igrave;n đầu ti&ecirc;n.</p>', '<p>Zxcdfvgb</p>', 'Honda-city-2017-Modulo-700x3201524497959.jpg', 12, 'h1'),
(6, 'A04', 'Honda-jazz V', 544000000, '<p><img src="https://hondaoto.com.vn/hondajazz/assets/img/exterior-bg.jpg" alt="" /></p>', '<p>sdfvgbnh</p>', 'exterior-bg1524498091.jpg', 12, 'h2'),
(7, 'A05', 'Honda Civic 1.5 Turbo', 898000000, '<h1 class="title-h1">Honda Civic 2017</h1>\r\n<p>Honda Civic 2017 cao cấp nhập khẩu nguy&ecirc;n chiếc gi&aacute; li&ecirc;n hệ, chiếc xe sedan hạng C tại thị trường Việt Nam. Phi&ecirc;n bản 2017 đ&atilde; đ&aacute;nh dấu sự ph&aacute;t triển của 10 thế hệ c&ugrave;ng nhiều lần n&acirc;ng cấp của Honda Civic, dự kiến được tung ra thị trường Việt Nam v&agrave;o cuối năm 2017.</p>\r\n<p>Trải qua một thời gian d&agrave;i gắn b&oacute; với thị trường Việt Nam, Honda Civic được người ti&ecirc;u d&ugrave;ng Việt đ&aacute;nh gi&aacute; cao về khả năng vận h&agrave;nh ổn định, d&aacute;ng vẻ trẻ trung, tiết kiệm nhi&ecirc;n liệu, trang bị tiện nghi vừa đủ v&agrave; đặc biệt l&agrave; &ldquo;chịu kh&oacute;&rdquo; cải tiến, đổi mới để đ&aacute;p ứng thị hiếu của người ti&ecirc;u d&ugrave;ng trong từng giai đoạn.</p>\r\n<p>&nbsp;</p>\r\n<p>Hiện nay, tr&ecirc;n thị trường Việt Nam, Honda Civic đang được b&aacute;n với phi&ecirc;n bản động cơ 1.8L v&agrave; phi&ecirc;n bản dộng cơ 2.0L c&oacute; gi&aacute; b&aacute;n lần lượt l&agrave; 780 triệu v&agrave; 860 triệu. Kh&aacute;ch h&agrave;ng được t&ugrave;y chọn 4 m&agrave;u sơn ngoại thất v&agrave; được nh&agrave; ph&acirc;n phối bảo h&agrave;nh 3 năm hoặc 100.000 km.</p>\r\n<p>&nbsp;</p>\r\n<p>B&agrave;i&nbsp;đ&aacute;nh gi&aacute; xe Honda Civic 2017 xin được sử dụng phi&ecirc;n bản &ldquo;Full Option&rdquo; 2.0AT v&agrave; trong qu&aacute; tr&igrave;nh đ&aacute;nh gi&aacute; sẽ c&oacute; sự lồng gh&eacute;p th&ocirc;ng tin ở tất cả c&aacute;c phi&ecirc;n bản, gi&uacute;p người d&ugrave;ng c&oacute; c&aacute;i nh&igrave;n một c&aacute;ch tổng qu&aacute;t nhất.</p>', '<p>ưeg</p>', 'gia_xe_honda_civic_20161524498291.jpg', 12, 'h4');

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
  `trangthai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `taikhoan`
--

INSERT INTO `taikhoan` (`id`, `email`, `hoten`, `matkhau`, `gioitinh`, `sodienthoai`, `ngaysinh`, `trangthai`) VALUES
(11, 'nguyentheanh97@gmail.com', 'Nguyễn Thế Anh', 'ceea23519f6f86ad67e9f798bf8002cb', 1, 965565742, '1997-04-04', 2),
(12, 'nguyentuyengiangbn@gmail.com', 'Nguyễn Tuyển Giảng', '243079561a38e3d13383b8ea6bd444b5', 1, 965565742, '1997-10-24', 1),
(13, 'phamquanghieu@gmail.com', 'Pham Quang Hieu', 'fcea920f7412b5da7be0cf42b8c93759', 1, 965565742, '1997-01-10', 1),
(14, 'chiyeuminhem97@gmail.com', 'Nguyen The Anh', '768fcd9c676702d83aea952c948f9d07', 1, 1686130391, '1997-04-04', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`id`);

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
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `hinhanh`
--
ALTER TABLE `hinhanh`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `lienhe`
--
ALTER TABLE `lienhe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
