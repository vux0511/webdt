-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 07, 2021 lúc 04:14 AM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `webdt`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bill`
--

CREATE TABLE `bill` (
  `id_bill` int(11) NOT NULL,
  `id_user` varchar(250) NOT NULL,
  `date_order` datetime NOT NULL,
  `status` varchar(250) NOT NULL DEFAULT 'Wait',
  `address` varchar(250) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `fullname` varchar(250) NOT NULL,
  `note` varchar(250) NOT NULL,
  `subtotal` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `bill`
--

INSERT INTO `bill` (`id_bill`, `id_user`, `date_order`, `status`, `address`, `phone`, `fullname`, `note`, `subtotal`) VALUES
(48, '2', '2021-11-09 08:34:18', 'delivered', 'Da Nang', '0334373123', 'Hoàng Văn Vũ', 'ghi chú nè', '110020000'),
(66, '5', '2021-11-13 19:44:00', 'delivered', 'Ha Tinh', '0334373123', 'Hoàng Văn Vũ 2', 'hihi', '62030000'),
(67, '32', '2021-11-26 19:06:04', 'shiping', 'ok', '0334373123', 'Vũ Hoàng Văn', '', '681830000'),
(68, '32', '2021-11-26 19:09:29', 'Wait', 'ok', '0334373123', 'Vũ Hoàng Văn', '', '31040000'),
(69, '32', '2021-11-26 19:51:39', 'Wait', 'ok', '0334373123', 'Vũ Hoàng Văn', '', '93020000'),
(70, '32', '2021-11-26 19:57:17', 'Wait', 'ok', '0334373123', 'Vũ Hoàng Văn', '', '46040000'),
(72, '32', '2021-12-06 22:03:51', 'delivered', 'ok', '0334373123', 'Vũ Hoàng Văn', '', '31040000');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bill1`
--

CREATE TABLE `bill1` (
  `id` int(11) NOT NULL,
  `id_bill` varchar(250) NOT NULL,
  `id_product` varchar(250) NOT NULL,
  `quantity` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `bill1`
--

INSERT INTO `bill1` (`id`, `id_bill`, `id_product`, `quantity`) VALUES
(8, '44', '55', '1'),
(9, '45', '55', '1'),
(10, '47', '55', '1'),
(11, '47', '51', '1'),
(12, '48', '1', '2'),
(13, '48', '54', '1'),
(14, '49', '55', '1'),
(15, '49', '51', '1'),
(16, '49', '61', '1'),
(17, '49', '1', '2'),
(18, '50', '1', '1'),
(19, '50', '54', '1'),
(20, '58', '1', '1'),
(21, '59', '1', '1'),
(22, '61', '1', '1'),
(23, '62', '51', '1'),
(24, '63', '1', '2'),
(25, '64', '1', '1'),
(26, '64', '54', '1'),
(27, '65', '1', '3'),
(28, '65', '55', '1'),
(29, '65', '51', '1'),
(30, '65', '54', '1'),
(31, '65', '61', '1'),
(32, '66', '1', '2'),
(33, '67', '1', '22'),
(34, '68', '1', '1'),
(35, '69', '1', '3'),
(36, '70', '55', '1'),
(37, '71', '1', '3'),
(38, '72', '1', '1');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cart`
--

CREATE TABLE `cart` (
  `id_cart` int(11) NOT NULL,
  `id_user_order` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  `quantity_cart` int(11) NOT NULL DEFAULT 1,
  `name_product` varchar(250) NOT NULL,
  `image_product` varchar(250) NOT NULL,
  `new_price_product` varchar(250) NOT NULL,
  `total_price_cart` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `cart`
--

INSERT INTO `cart` (`id_cart`, `id_user_order`, `id_product`, `quantity_cart`, `name_product`, `image_product`, `new_price_product`, `total_price_cart`) VALUES
(77, 19, 4, 2, 'iPhone 12 I Chính hãng VN/A', 'ip12.jpg', '27500000', 0),
(83, 1, 4, 2, 'iPhone 12 I Chính hãng VN/A', 'ip12.jpg', '27500000', 0),
(84, 1, 61, 2, 'Samsung Galaxy Z Flip3 5G 256GB', 'zflip256.jpg', '26990000', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
--

CREATE TABLE `category` (
  `id_category` int(11) NOT NULL,
  `name_category` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `category`
--

INSERT INTO `category` (`id_category`, `name_category`) VALUES
(1, 'iPhone'),
(2, 'Samsung'),
(3, 'Xiaomi'),
(9, 'Vsmart'),
(125, '123');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `images_detail`
--

CREATE TABLE `images_detail` (
  `id_product` int(11) NOT NULL,
  `images_detail` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `images_detail`
--

INSERT INTO `images_detail` (`id_product`, `images_detail`) VALUES
(1, '11.128.jpg'),
(1, '12pro.jpg'),
(1, 'ip111.jpg'),
(1, 'ip12.jpg'),
(54, '1633167122631.jpg'),
(54, '1633169337107samsunh.jpg'),
(1, '163316957755iphone-se-2020-1.jpg'),
(1, 'zfold3.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `new`
--

CREATE TABLE `new` (
  `id_new` int(11) NOT NULL,
  `title_new` varchar(250) NOT NULL,
  `image_new` varchar(250) NOT NULL,
  `info_new` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `new`
--

INSERT INTO `new` (`id_new`, `title_new`, `image_new`, `info_new`) VALUES
(1, 'Những tin tức mới nhất về loạt sản phẩm của Apple trong thời gian tới - Tin công nghệ mới nhất ', '163342832889163342817427new1.png', 'Năm nay được các chuyên gia dự đoán rằng sẽ là sự bùng nổ của các sản phẩm công nghệ hậu Covid-19. Một trong đó chính là ông lớn giới công nghệ Apple. Có vẻ như nhà “Táo” đã có những kết hoạch để phát triển các sản phẩm chính của mình trong năm nay. Bao gồm iPad, Apple Watch, iPhone mới và cả Macbook M1 thế hệ tiếp theo sẽ được giới thiệu trong năm nay. Vậy là một iFan bạn mong chờ Apple sẽ ra mắt sản phẩm mới nào trong năm nay?.'),
(2, 'FPT Shop giảm 1.000.000 đồng cho khách hàng giao dịch online qua thẻ tín dụng VIB', 'new2.jpeg', 'Năm nay được các chuyên gia dự đoán rằng sẽ là sự bùng nổ của các sản phẩm công nghệ hậu Covid-19. Một trong đó chính là ông lớn giới công nghệ Apple. Có vẻ như nhà “Táo” đã có những kết hoạch để phát triển các sản phẩm chính của mình trong năm nay. Bao gồm iPad, Apple Watch, iPhone mới và cả Macbook M1 thế hệ tiếp theo sẽ được giới thiệu trong năm nay. Vậy là một iFan bạn mong chờ Apple sẽ ra mắt sản phẩm mới nào trong năm nay?.'),
(3, 'Khám phá chi tiết bộ mã ưu đãi dành cho chủ nhân Galaxy A22 | A22 5G', 'new3.jpg', 'VTV.vn - Đúng như dự đoán, dịch vụ tin tức có tên Apple News+ đã chính thức được Apple trình làng trong sự kiện \"Its Show Time\" diễn ra vào rạng sáng nay (26/3), theo giờ Việt Nam.');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `id_product` int(11) NOT NULL,
  `id_category` int(11) NOT NULL,
  `hot_product` int(11) NOT NULL,
  `quantity_product` int(11) NOT NULL,
  `name_product` varchar(255) NOT NULL,
  `image_product` varchar(250) NOT NULL,
  `images_2` varchar(250) NOT NULL,
  `images_3` varchar(250) NOT NULL,
  `images_4` varchar(250) NOT NULL,
  `old_price_product` varchar(50) NOT NULL,
  `new_price_product` varchar(50) NOT NULL,
  `view` int(11) NOT NULL,
  `screen` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `front_camera` varchar(50) NOT NULL,
  `rear_camera` varchar(50) NOT NULL,
  `cpu` varchar(50) NOT NULL,
  `ram` varchar(50) NOT NULL,
  `rom` varchar(50) NOT NULL,
  `sdcard` varchar(50) NOT NULL,
  `battery` varchar(50) NOT NULL,
  `info_product` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`id_product`, `id_category`, `hot_product`, `quantity_product`, `name_product`, `image_product`, `images_2`, `images_3`, `images_4`, `old_price_product`, `new_price_product`, `view`, `screen`, `type`, `front_camera`, `rear_camera`, `cpu`, `ram`, `rom`, `sdcard`, `battery`, `info_product`) VALUES
(1, 1, 0, 3, 'iPhone 13 | Chính hãng VN/A', 'iphone13.jpg', 'iphone13_2.jpg', 'iphone-13-03.jpg', 'iphone-13-04.jpg', '33990000', '30990000', 200, 'OLED', 'iPhone', '12MP, f/2.2', 'Camera góc rộng: 12MP, f/1.6', 'Apple A15', '	4 GB', '128 GB', 'Không', '3,095mAh', 'iPhone 13 Pro Max xứng đáng là một chiếc iPhone lớn nhất, mạnh mẽ nhất và có thời lượng pin dài nhất từ trước đến nay sẽ cho bạn trải nghiệm tuyệt vời, từ những tác vụ bình thường cho đến các ứng dụng chuyên nghiệp.'),
(2, 1, 0, 5, 'iPhone 13 Pro Max | Chính hãng VN/A', 'iphone13promax.jpg', '', '', '', '34999000', '32999000', 0, '', '', '', '', '', '', '', '', '', 'iPhone 11 với 6 phiên bản màu sắc, camera có khả năng chụp ảnh vượt trội, thời lượng pin cực dài và bộ vi xử lý mạnh nhất từ trước đến nay sẽ mang đến trải nghiệm tuyệt vời dành cho bạn.'),
(3, 1, 0, 56, 'iPhone 11 I Chính hãng VN/A', 'ip111.jpg', '', '', '', '19500000', '18500000', 0, '', '', '', '', '', '', '', '', '', 'Chiếc iPhone với màn hình Liquid Retina hoàn toàn mới, công nghệ màn hình LCD tiên tiến nhất đi cùng Face ID nhanh hơn, con chip mạnh mẽ và hệ thống camera xóa phông hoàn hảo. Đó chính là iPhone XR với nhiều màu sắc tuyệt vời đang chờ đón bạn.'),
(4, 1, 1, 231, 'iPhone 12 I Chính hãng VN/A', 'ip12.jpg', '', '', '', '29500000', '27500000', 0, '', '', '', '', '', '', '', '', '', 'Một chiếc iPhone nhỏ gọn mang trên mình bộ vi xử lý mạnh mẽ hàng đầu, iPhone SE 2020 với mức giá hấp dẫn chưa từng thấy sẽ là sự lựa chọn phù hợp dành cho tất cả người dùng.'),
(6, 1, 1, 22, 'iPhone XR 64GB I Chính hãng VN/A', 'ipxr.jpg', '', '', '', '12400000', '11400000', 0, '', '', '', '', '', '', '', '', '', 'iPhone 13 sở hữu hệ thống camera kép xuất sắc nhất từ trước đến nay, bộ vi xử lý Apple A15 nhanh nhất thế giới smartphone cùng thời lượng pin cực khủng, sẵn sàng đồng hành cùng bạn suốt cả ngày.'),
(49, 1, 0, 10, 'iPhone 12 Pro I Chính hãng VN/A', '12pro.jpg', '', '', '', '30500000', '36500000', 0, '', '', '', '', '', '', '', '', '', 'Điện thoại iPhone 12 Pro - Đột phá về thiết kế, hiệu năng nâng cấp\r\nRa mắt vào cuối năm 2020, iPhone 12 series mang đến một luồng gió với trong phân khúc smartphone cao cấp. Với thiết kế đổi mới đột phá so với thế hệ trước cùng nhiều nâng cấp về hiệu năng đáng kể trên iPhone 12 Pro. Đây sẽ là một trong những chiếc điện thoại đáng được bạn lựa chọn nhất so với các chiếc điện thoại khác cùng phân khúc giá.  '),
(50, 1, 0, 12, 'iPhone 11 128GB I Chính hãng VN/A', '11.128.jpg', '', '', '', '17500000', '15500000', 5, '', '', '', '', '', '', '', '', '', 'Màu sắc phù hợp cá tính - 6 màu sắc bắt mắt để lựa chọn\r\nHiệu năng mượt mà, ổn định - Chip A13, RAM 4GB\r\nBắt trọn khung hình - Camera kép hỗ trợ góc rộng, chế độ Night Mode\r\nYên tâm sử dụng - Kháng nước, kháng bụi IP68, kính cường lực Gorilla Glass'),
(51, 2, 1, 10, 'Samsung Galaxy Note 20 Ultra 5G', '20ultra.jpg', '', '', '', '20500000', '30500000', 45, '', '', '', '', '', '', '', '', '', 'Bên cạnh biên bản Galaxy Note 20 thường, Samsung còn cho ra mắt Note 20 Ultra 5G cho khả năng kết nối dữ liệu cao cùng thiết kế nguyên khối sang trọng, bắt mắt. Đây sẽ là sự lựa chọn hoàn hảo dành cho bạn để sử dụng mà không bị lỗi thời sau thời gian dài ra mắt.'),
(52, 2, 1, 10, 'Samsung Galaxy Z Flip3 5G', '1633333454111zplip.jpg', '', '', '', '24990000', '29990000', 0, '', '', '', '', '', '', '', '', '', 'Bên cạnh biên bản Galaxy Note 20 thường, Samsung còn cho ra mắt Note 20 Ultra 5G cho khả năng kết nối dữ liệu cao cùng thiết kế nguyên khối sang trọng, bắt mắt. Đây sẽ là sự lựa chọn hoàn hảo dành cho bạn để sử dụng mà không bị lỗi thời sau thời gian dài ra mắt.'),
(53, 2, 0, 10, 'Samsung Galaxy Note 20 Ultra', 'not20ultra.jpg', '', '', '', '19200000', '24200000', 3, '', '', '', '', '', '', '', '', '', 'Bên cạnh biên bản Galaxy Note 20 thường, Samsung còn cho ra mắt Note 20 Ultra 5G cho khả năng kết nối dữ liệu cao cùng thiết kế nguyên khối sang trọng, bắt mắt. Đây sẽ là sự lựa chọn hoàn hảo dành cho bạn để sử dụng mà không bị lỗi thời sau thời gian dài ra mắt.'),
(54, 2, 0, 10, 'Samsung Galaxy Z Fold3 5G', 'zfold3.jpg', '', '', '', '41990000', '47990000', 102, '', '', '', '', '', '', '', '', '', 'Bên cạnh biên bản Galaxy Note 20 thường, Samsung còn cho ra mắt Note 20 Ultra 5G cho khả năng kết nối dữ liệu cao cùng thiết kế nguyên khối sang trọng, bắt mắt. Đây sẽ là sự lựa chọn hoàn hảo dành cho bạn để sử dụng mà không bị lỗi thời sau thời gian dài ra mắt.'),
(55, 3, 0, 10, 'Xiaomi 11 Lite 5G NE 8GB - 128GB', 'xiaomi.jpg', '', '', '', '41990000', '45990000', 56, '', '', '', '', '', '', '', '', '', 'Bên cạnh biên bản Galaxy Note 20 thường, Samsung còn cho ra mắt Note 20 Ultra 5G cho khả năng kết nối dữ liệu cao cùng thiết kế nguyên khối sang trọng, bắt mắt. Đây sẽ là sự lựa chọn hoàn hảo dành cho bạn để sử dụng mà không bị lỗi thời sau thời gian dài ra mắt.'),
(56, 3, 0, 10, 'Xiaomi POCO X3 Pro NFC 8GB-256GB', 'poco.jpg', '', '', '', '7290000 ', '9290000', 10, '', '', '', '', '', '', '', '', '', 'Bên cạnh biên bản Galaxy Note 20 thường, Samsung còn cho ra mắt Note 20 Ultra 5G cho khả năng kết nối dữ liệu cao cùng thiết kế nguyên khối sang trọng, bắt mắt. Đây sẽ là sự lựa chọn hoàn hảo dành cho bạn để sử dụng mà không bị lỗi thời sau thời gian dài ra mắt.'),
(57, 3, 0, 11, 'Xiaomi Redmi 10 4GB-128GB', '1633321885127redmi10.jpg', '', '', '', '4290000', '7290000', 5, '', '', '', '', '', '', '', '', '', 'Bên cạnh biên bản Galaxy Note 20 thường, Samsung còn cho ra mắt Note 20 Ultra 5G cho khả năng kết nối dữ liệu cao cùng thiết kế nguyên khối sang trọng, bắt mắt. Đây sẽ là sự lựa chọn hoàn hảo dành cho bạn để sử dụng mà không bị lỗi thời sau thời gian dài ra mắt.'),
(61, 2, 1, 10, 'Samsung Galaxy Z Flip3 5G 256GB', 'zflip256.jpg', '', '', '', '30990000', '26990000', 19, '', '', '', '', '', '', '', '', '', 'Samsung Galaxy Z Flip 3 5G dự kiến sẽ được ra mắt vào ngày 11/8 tại sự kiện Unpacked diễn ra trực tuyến. Nhiều khả năng, điện thoại màn hình gập này sẽ lên kệ tại thị trường Việt Nam vào giữa cuối tháng 9.'),
(88, 1, 0, 3123, '123', '1.png', '2.png', '3.jpg', '4.jpg', '12312', '5000000', 0, '123123', '1231231', '23123', '3213', '3123', '12', '3123', '312', '213', 'hihi');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product_order`
--

CREATE TABLE `product_order` (
  `id_order` int(11) NOT NULL,
  `id_product` int(250) NOT NULL,
  `quantity_product` varchar(255) NOT NULL,
  `total_price_product` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `product_order`
--

INSERT INTO `product_order` (`id_order`, `id_product`, `quantity_product`, `total_price_product`) VALUES
(3, 2, '1', '123'),
(3, 51, '3', '123'),
(4, 2, '1', '123'),
(4, 51, '3', '123'),
(5, 2, '1', '123'),
(6, 2, '1', '123'),
(7, 2, '1', '123'),
(8, 2, '1', '123'),
(9, 2, '1', '123'),
(9, 51, '3', '123'),
(10, 2, '1', '123'),
(10, 51, '3', '123'),
(11, 2, '1', '123'),
(11, 51, '3', '123'),
(12, 4, '1', '123'),
(14, 4, '1', '123'),
(18, 4, '1', '0'),
(18, 49, '1', '0'),
(19, 4, '1', '0');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `slide`
--

CREATE TABLE `slide` (
  `id_slide` int(11) NOT NULL,
  `image` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `slide`
--

INSERT INTO `slide` (`id_slide`, `image`) VALUES
(1, 'slide.jpg'),
(2, 'slide2.jpg'),
(3, 'slide3.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `lever` varchar(20) NOT NULL,
  `user` varchar(250) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(250) NOT NULL,
  `fullname` varchar(250) NOT NULL,
  `phone_user` varchar(20) NOT NULL,
  `address_user` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`id_user`, `lever`, `user`, `password`, `email`, `fullname`, `phone_user`, `address_user`) VALUES
(1, 'admin', 'vu', 'vu', 'vux.0511@gmail.com', 'Hoàng Văn Vũ Hihi', '0334373123', 'HT'),
(2, 'admin', 'demo', '123', 'email@gmail.com', 'Nguyễn Thu Trang', '1231234', 'VP'),
(3, '0', 'test', 'test', 'test@gmail.com', 'BIDV', '', ''),
(5, '0', 'hi', 'hi', 'email@gmail.com', 'Hoàng Văn Gũ', '1111', '12312312312'),
(32, '', 'admin', 'admin', 'vux.0511@gmail.com', 'Vũ Hoàng Văn', '0334373123', 'ok'),
(33, '', '123', '123', '', '', '', '');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`id_bill`);

--
-- Chỉ mục cho bảng `bill1`
--
ALTER TABLE `bill1`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id_cart`);

--
-- Chỉ mục cho bảng `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id_category`);

--
-- Chỉ mục cho bảng `new`
--
ALTER TABLE `new`
  ADD PRIMARY KEY (`id_new`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id_product`);

--
-- Chỉ mục cho bảng `slide`
--
ALTER TABLE `slide`
  ADD PRIMARY KEY (`id_slide`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `user` (`user`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `bill`
--
ALTER TABLE `bill`
  MODIFY `id_bill` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT cho bảng `bill1`
--
ALTER TABLE `bill1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT cho bảng `cart`
--
ALTER TABLE `cart`
  MODIFY `id_cart` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT cho bảng `category`
--
ALTER TABLE `category`
  MODIFY `id_category` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=126;

--
-- AUTO_INCREMENT cho bảng `new`
--
ALTER TABLE `new`
  MODIFY `id_new` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `id_product` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;

--
-- AUTO_INCREMENT cho bảng `slide`
--
ALTER TABLE `slide`
  MODIFY `id_slide` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
