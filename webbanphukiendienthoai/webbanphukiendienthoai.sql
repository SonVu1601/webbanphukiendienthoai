-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 02, 2021 lúc 05:03 PM
-- Phiên bản máy phục vụ: 10.4.18-MariaDB
-- Phiên bản PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `webbanphukiendienthoai`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmuc`
--

CREATE TABLE `danhmuc` (
  `id` int(10) UNSIGNED NOT NULL,
  `tenloai` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mota` longtext COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `danhmuc`
--

INSERT INTO `danhmuc` (`id`, `tenloai`, `mota`) VALUES
(0, 'Cáp Sạc', 'Sạc iphone, samsung'),
(1, 'Loa', 'Loa mini, Bluetooth'),
(2, 'Sạc Điện Thoại', 'Củ sạc, Sạc không dây'),
(3, 'Tai Nghe', 'Airpods, dây');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhang`
--

CREATE TABLE `khachhang` (
  `id` int(10) UNSIGNED NOT NULL,
  `hoten` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sdt` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `diachi` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `khachhang`
--

INSERT INTO `khachhang` (`id`, `hoten`, `sdt`, `diachi`, `email`, `password`) VALUES
(1, 'Vũ Trường Sơn', '0963235909', 'Thanh Xuân', 'vutruongson01102000@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(6, 'Vũ Trường Sơn', '0963235909', 'Thanh Xuân', 'admindayhaha@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(7, 'Mai Phương', '0133881493', 'Thanh Xuân', 'lethimaiphuong@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(12, 'Trần Thành', '0963235909', 'Thanh Xuân', 'thanh123@gmail.com', 'e10adc3949ba59abbe56e057f20f883e');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhang_sanpham`
--

CREATE TABLE `khachhang_sanpham` (
  `id_kh` int(10) UNSIGNED NOT NULL,
  `id_sp` int(50) UNSIGNED NOT NULL,
  `soluong` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhanvien`
--

CREATE TABLE `nhanvien` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_ql` int(10) UNSIGNED NOT NULL,
  `hoten` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `diachi` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sodt` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `nhanvien`
--

INSERT INTO `nhanvien` (`id`, `id_ql`, `hoten`, `diachi`, `sodt`, `email`, `password`) VALUES
(1, 1, 'Vũ Trường Sơn', 'Thanh Xuân', '0963235909', 'vutruongson01102000@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(8, 1, 'Nhân viên', 'Thanh Xuân', '09632555665', 'nv@gmail.com', 'e10adc3949ba59abbe56e057f20f883e');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhanvien_danhmuc`
--

CREATE TABLE `nhanvien_danhmuc` (
  `id_nhanvien` int(10) UNSIGNED NOT NULL,
  `id_danhmuc` int(50) UNSIGNED NOT NULL,
  `thoigiantao` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhanvien_sanpham`
--

CREATE TABLE `nhanvien_sanpham` (
  `id_nhanvien` int(10) UNSIGNED NOT NULL,
  `id_sanpham` int(50) UNSIGNED NOT NULL,
  `ngaytao` timestamp NOT NULL DEFAULT current_timestamp(),
  `tensp` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `quanly`
--

CREATE TABLE `quanly` (
  `id` int(10) UNSIGNED NOT NULL,
  `hoten` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sodt` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `quanly`
--

INSERT INTO `quanly` (`id`, `hoten`, `sodt`, `email`, `password`) VALUES
(1, 'Vũ Trường Sơn', '0963235909', 'admin@gmail.com', 'e10adc3949ba59abbe56e057f20f883e');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_dm` int(10) UNSIGNED NOT NULL,
  `tensp` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `giact` int(10) NOT NULL,
  `giakm` int(10) NOT NULL,
  `anhsp` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `thuonghieu` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `motasp` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`id`, `id_dm`, `tensp`, `giact`, `giakm`, `anhsp`, `thuonghieu`, `motasp`) VALUES
(28, 0, 'Dây cáp sạc USB Type-C LG chính hãng', 139000, 119000, 'cap-usb-type-c-1m-aukey-cb-cd2-xam-avatar-1-600x600.jpg', 'LG ', 'Tương thích với mọi thiết bị sạc sử dụng cổng sạc Micro USB'),
(29, 0, 'Dây sạc nhanh iPhone | Cáp sạc PD18W WK WDC-115, A', 159000, 139000, 'cap-type-c-type-c-1m-mbest-ds075x-trang-ava-600x600.jpg', 'WK', 'Cáp sạc chính hãng WDC-115 đến từ thương hiệu đình đám WK sẽ giúp bạn kết nối dữ liệu an toàn, ổn định từ củ sạc nhanh hay Macbook ra điện thoại iphone một cách dễ dàng hơn. Dây sạc nhanh chuẩn PD18w sẽ giúp bạn tiết kiệm thời gian sạc pin cho chiếc điện thoại hay máy tính bảng'),
(30, 0, 'Cáp Lightning AVA+ DR-L04         ', 150000, 112000, 'cap-lightning-ava-dr-l04-ava-1-600x600.jpg', 'AVA', 'Cáp Lightning AVA+ DR-L04 có dây dẫn thuần sắc trẻ trung, thời trang, chiều dài dây đến 1 m, kết nối thiết bị nằm cách xa ổ điện thuận tiện. '),
(31, 0, ' Cáp Type C AVA+ DR-T02         ', 150000, 112000, 'cap-type-c-ava-dr-t02-ava-600x600.jpg', 'AVA', 'Cáp Type C AVA+ DR-T02 được làm đơn giản, màu đen lịch lãm đồng nhất từ dây cáp đến chuôi cắm, dây dày dặn, bao bọc kín, bảo vệ tốt linh kiện bên dưới. Chất liệu mềm, thao tác quấn lại nhẹ nhàng, rất linh hoạt khi cất giữ và mang đi. '),
(32, 0, ' Cáp USB - Type C AUKEY CB-CD2         ', 120000, 79000, 'cap-type-c-ava-ds07cw-tb-trang-600x600.jpg', 'AUKEY', 'Cáp USB Type-C 1 m AUKEY CB-CD2 Xám có thiết kế đơn giản, với chất liệu vải dù chắc chắn, không bị rối trong quá trình sử dụng'),
(33, 1, ' Loa Bluetooth JBL Charge 5         ', 3900000, 3699000, 'bluetooth-jbl-charge-5-ava-600x600.jpg', 'LBL', 'Chống nước, chống bụi IP67Kết nối cùng lúc 2 loaSạc được cho thiết bị khác (cổng USB)'),
(34, 1, ' Loa Bluetooth Sony SRS-XB13                 ', 2990000, 1890000, 'bluetooth-sony-srs-xb13-avatar-600x600.jpg', 'SONY', 'Thiết kế loa Bluetooth Sony đơn giản, gọn nhẹ chỉ 0.4 kg, đi kèm dây treo cho bạn dễ dàng đeo vào cổ tay của mình hoặc treo móc vào balo mang theo khi đi chơi, du lịch, đi học,...'),
(35, 1, 'Loa Bluetooth JBL Clip 4         ', 1700000, 1490000, 'bluetooth-jbl-clip-4-ava-600x600.jpg', 'JBL', 'Loa JBL Clip 4 mang tính di động cao nhờ kích thước rất nhỏ gọn với chiều dài 134 mm, chiều rộng 86 mm, độ dày 46 mm và trọng lượng chỉ 230 gram.'),
(36, 1, 'Loa vi tính Microlab B26         ', 400000, 299000, 'vi-tinh-microlab-b26-den-1.-600x600.jpg', 'Microlab', 'Loa vi tính Microlab B26 có 2 chiếc loa nhỏ trọng lượng chỉ 0.5 kg, chất liệu nhựa tốt, màu đen trơn bóng đẹp, rất tiện lợi khi mang đi và đặt ở bất kỳ nơi nào bạn muốn'),
(37, 1, 'Loa JBL Partybox On The Go', 9000000, 8590000, 'bluetooth-600x600.jpg', 'JBL', 'Toàn bộ thân loa bluetooth JBL Partybox On-The-Go được bao phủ bởi gam màu đen hiện đại, mặt trước của loa có logo JBL trên nền đỏ tạo điểm nhấn nổi bật.'),
(38, 2, 'Sạc Type C Xmobile TCE20W         ', 300000, 259000, 'adapter-sac-type-c-pd-20w-xmobile-tce20w-trang-avatar-1-600x600.jpg', 'xmoble', 'Adapter Xmobile sử dụng với nhiều dòng điện thoại như Samsung, Oppo, Huawei,... bên cạnh đó còn có các thiết bị phổ biến khác như máy tính bảng, sạc dự phòng, tai nghe Bluetooth,...'),
(39, 2, 'Sạc Type C 20W dùng cho iPhone/iPad Apple', 700000, 659000, 'adapter-sac-type-c-20w-cho-iphone-ipad-apple-mhje3-avatar-1-1-600x600.jpg', 'Apple', 'Kiểu dáng adapter sạc đơn giản, trang nhã, chất lượng tốt cho độ bền cao. Thiết kế đầu cắm loại có 2 chấu quen thuộc, dùng được với các ổ điện ở mọi nơi từ nhà cho tới công sở, trường học, nhà hàng, khách sạn,...'),
(40, 2, ' Adapter Sạc Type C PD 25W Samsung ', 500000, 489000, 'type-c-pd-25w-samsung-ep-ta800n-den-thumb-1-2-600x600.jpg', 'SamSung', 'Đường nét adapter mềm mại, màu trắng sạch đẹp, màu đen sang trọng, duy trì độ mới lâu, cầm trên tay cực thoải mái, giúp bạn thao tác khi sạc cũng như khi cất giữ, dịch chuyển sản phẩm linh hoạt, nhanh nhẹn.'),
(41, 2, ' Adapter sạc 2 cổng USB 12W Dual AVA ACL168A', 200000, 159000, 'adapter-sac-24a-dual-ava-acl168a-trang-600x600.jpg', 'AVA', 'Adapter sạc AVA màu trắng sáng thời trang, nhỏ gọn, không chiếm chỗ nên rất tiện mang theo'),
(42, 2, 'Adapter Sạc Type C PD 30W Anker PowerPort Atom A20', 700000, 599000, 'adapter-type-c-pd-30w-anker-powerport-atom-a2017-211021-073923-600x600.jpg', 'ANKER', 'Adapter Sạc Anker PowerPort Atom A2017 Trắng được hoàn thiện từ chất liệu bán dẫn GaN (Gallium Nitride) giúp thu gọn kích thước tối đa, nhỏ nhắn hơn nhưng vẫn đảm bảo hiệu suất cao.'),
(43, 3, 'Tai nghe Bluetooth AirPods Pro', 7000000, 6590000, 'bluetooth-airpods-pro-magsafe-charge-apple-mlwk3-avatar-600x600.jpg', 'Apple', 'Tai nghe Bluetooth AirPods Pro MagSafe Charge Apple MLWK3 trắng được chế tác với vẻ ngoài tinh giản, gam màu trắng trẻ trung, sáng đẹp, phối hợp tuyệt vời với mọi trang phục từ đời thường đến công sở, dự tiệc của bạn. '),
(44, 3, 'Tai nghe EP Bluetooth Sony WI-1000XM2', 8000000, 7560000, 'tai-nghe-ep-bluetooth-sony-wi-1000xm2-avatar-1-600x600.jpg', 'SONY', 'Tai nghe Sony kích thước nhỏ gọn, sang trọng, tinh tế, với thiết kế đeo vòng cổ dây silicone mềm dẻo, thoải mái sử dụng suốt ngày dài'),
(45, 3, 'Tai nghe Bluetooth True Wireless Xiaomi Earbuds Ba', 700000, 599000, 'bluetooth-tws-xiaomi-earbuds-basic-2-ava-1-600x600.jpg', 'Xiaomi', 'Tai nghe Bluetooth True Wireless Xiaomi Earbuds Basic 2 BHR4272GL có kích thước nhỏ gọn chỉ nặng 35.4 g không hề nặng tai khi sử dụng lâu. Tai nghe tặng kèm 2 nút đệm tai với kích thước khác nhau giúp bạn dễ dàng lựa chọn phù hợp với tai tránh lỏng lẻo, rơi rớt.'),
(46, 3, 'Tai nghe Bluetooth Beats Flex MYMC2/ MYMD2', 1500000, 1290000, 'bluetooth-beats-flex-mymc2-mymd2-600x600.jpg', 'Beats', 'Tai nghe Bluetooth ghi dấu ấn với các tín đồ tai nghe Beats (Apple) với kiểu dáng gọn nhẹ, có 2 phiên bản màu đen và vàng Yuzu thuần khiết, đẹp mắt, giúp tạo phong cách năng động, thời thượng cho cả phái mạnh và phái đẹp.'),
(47, 3, 'Tai nghe Bluetooth True Wireless Soundpeats Sonic ', 900000, 859000, 'bluetooth-true-wireless-soundpeats-sonic-avatar-1-1-600x600.jpg', 'Soundpeats', 'SoundPeats Sonic có mỗi tai nghe chỉ nặng 4 g, bề mặt phủ màu xám, nút nhấn và đường viền tô điểm bởi màu vàng đồng bóng loáng, logo thương hiệu in rõ ràng trên tai nghe cho sản phẩm bắt mắt, thời thượng, người dùng thêm phong cách khi bước xuống phố cùng mẫu tai nghe độc đáo này của SoundPeats.');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `khachhang_sanpham`
--
ALTER TABLE `khachhang_sanpham`
  ADD KEY `id_kh` (`id_kh`,`id_sp`),
  ADD KEY `id_kh_2` (`id_kh`,`id_sp`),
  ADD KEY `id_sp` (`id_sp`);

--
-- Chỉ mục cho bảng `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_ql` (`id_ql`),
  ADD KEY `id_ql_2` (`id_ql`);

--
-- Chỉ mục cho bảng `nhanvien_danhmuc`
--
ALTER TABLE `nhanvien_danhmuc`
  ADD KEY `id_nhanvien` (`id_nhanvien`,`id_danhmuc`),
  ADD KEY `id_danhmuc` (`id_danhmuc`);

--
-- Chỉ mục cho bảng `nhanvien_sanpham`
--
ALTER TABLE `nhanvien_sanpham`
  ADD KEY `id_nhanvien` (`id_nhanvien`,`id_sanpham`),
  ADD KEY `id_sanpham` (`id_sanpham`);

--
-- Chỉ mục cho bảng `quanly`
--
ALTER TABLE `quanly`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_dm` (`id_dm`),
  ADD KEY `id_dm_2` (`id_dm`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `nhanvien`
--
ALTER TABLE `nhanvien`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `quanly`
--
ALTER TABLE `quanly`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `khachhang_sanpham`
--
ALTER TABLE `khachhang_sanpham`
  ADD CONSTRAINT `khachhang_sanpham_ibfk_1` FOREIGN KEY (`id_kh`) REFERENCES `khachhang` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `khachhang_sanpham_ibfk_2` FOREIGN KEY (`id_sp`) REFERENCES `sanpham` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD CONSTRAINT `nhanvien_ibfk_1` FOREIGN KEY (`id_ql`) REFERENCES `quanly` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `nhanvien_danhmuc`
--
ALTER TABLE `nhanvien_danhmuc`
  ADD CONSTRAINT `nhanvien_danhmuc_ibfk_1` FOREIGN KEY (`id_nhanvien`) REFERENCES `nhanvien` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `nhanvien_danhmuc_ibfk_2` FOREIGN KEY (`id_danhmuc`) REFERENCES `danhmuc` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `nhanvien_sanpham`
--
ALTER TABLE `nhanvien_sanpham`
  ADD CONSTRAINT `nhanvien_sanpham_ibfk_1` FOREIGN KEY (`id_nhanvien`) REFERENCES `nhanvien` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `nhanvien_sanpham_ibfk_2` FOREIGN KEY (`id_sanpham`) REFERENCES `sanpham` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `sanpham_ibfk_1` FOREIGN KEY (`id_dm`) REFERENCES `danhmuc` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
