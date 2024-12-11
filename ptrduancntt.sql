-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 06, 2024 lúc 07:29 PM
-- Phiên bản máy phục vụ: 10.4.32-MariaDB
-- Phiên bản PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `ptrduancntt`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_danhmuc`
--

CREATE TABLE `tbl_danhmuc` (
  `id` int(4) NOT NULL,
  `tendm` varchar(50) NOT NULL,
  `uutien` tinyint(4) NOT NULL DEFAULT 0,
  `hienthi` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_danhmuc`
--

INSERT INTO `tbl_danhmuc` (`id`, `tendm`, `uutien`, `hienthi`) VALUES
(1, 'vivo', 0, 1),
(2, 'Samsung', 0, 1),
(3, 'Iphone', 0, 1),
(4, 'xiaomi', 0, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_donhang`
--

CREATE TABLE `tbl_donhang` (
  `id` int(15) NOT NULL,
  `iduser` int(15) NOT NULL,
  `trangthai` varchar(50) NOT NULL DEFAULT 'Chờ xác nhận đơn hàng',
  `thanhtien` int(100) NOT NULL,
  `sdtuser` varchar(15) NOT NULL,
  `diachi` varchar(200) NOT NULL,
  `nameuser` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_donhang`
--

INSERT INTO `tbl_donhang` (`id`, `iduser`, `trangthai`, `thanhtien`, `sdtuser`, `diachi`, `nameuser`) VALUES
(43, 6, 'Đang giao hàng', 359350000, '0348454626', 'Yên Lạc', 'Trần Trọng Tú'),
(44, 2, 'Chờ xác nhận đơn hàng', 164850000, '0348454627', 'Yên Lạc', 'Trần Trọng Tú'),
(45, 2, 'Giao hàng thành công', 69800000, '0348454627', 'tudeptrai2', 'Trần Trọng Tú'),
(47, 2, 'Chờ xác nhận đơn hàng', 34900000, '0348454627', 'tudeptrai2', 'Trần Trọng Tú'),
(48, 2, 'Chờ xác nhận đơn hàng', 29990000, '0348454627', 'Yên Lạc', 'Trần Trọng Tú'),
(49, 2, 'Chờ xác nhận đơn hàng', 29990000, '0348454627', 'Yên Lạc', 'Trần Trọng Tú'),
(50, 2, 'Chờ xác nhận đơn hàng', 29990000, '0348454627', 'Yên Lạc', 'Trần Trọng Tú'),
(51, 2, 'Chờ xác nhận đơn hàng', 29990000, '0348454627', 'Yên Lạc', 'Trần Trọng Tú'),
(52, 2, 'Chờ xác nhận đơn hàng', 149950000, '0348454627', 'Yên Lạc', 'Trần Trọng Tú'),
(53, 2, 'Chờ xác nhận đơn hàng', 34900000, '0348454627', 'Yên Lạc', 'Trần Trọng Tú'),
(54, 2, 'Chờ xác nhận đơn hàng', 34900000, '0348454627', 'Yên Lạc', 'Trần Trọng Tú'),
(55, 2, 'Chờ xác nhận đơn hàng', 34900000, '0348454627', 'Yên Lạc', 'Trần Trọng Tú'),
(56, 2, 'Chờ xác nhận đơn hàng', 34900000, '0348454627', 'Yên Lạc', 'Trần Trọng Tú'),
(57, 2, 'Chờ xác nhận đơn hàng', 34900000, '0348454627', 'Yên Lạc', 'Trần Trọng Tú'),
(58, 2, 'Chờ xác nhận đơn hàng', 34900000, '0348454627', 'Yên Lạc', 'Trần Trọng Tú'),
(59, 2, 'Chờ xác nhận đơn hàng', 34900000, '0348454627', 'Yên Lạc', 'Trần Trọng Tú'),
(60, 2, 'Chờ xác nhận đơn hàng', 34900000, '0348454627', 'Yên Lạc', 'Trần Trọng Tú'),
(61, 2, 'Chờ xác nhận đơn hàng', 34900000, '0348454627', 'Yên Lạc', 'Trần Trọng Tú'),
(62, 2, 'Chờ xác nhận đơn hàng', 34900000, '0348454627', 'Yên Lạc', 'Trần Trọng Tú'),
(63, 6, 'Đơn hàng đã bị hủy', 29990000, '0348454626', 'Yên Lạc', 'Trần Trọng Tú'),
(64, 2, 'Chờ xác nhận đơn hàng', 69800000, '0348454627', 'Yên Lạc', 'Trần Trọng Tú');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_donhang_sanpham`
--

CREATE TABLE `tbl_donhang_sanpham` (
  `id` int(11) NOT NULL,
  `idsp` int(11) NOT NULL,
  `iddh` int(15) NOT NULL,
  `soluong` int(11) NOT NULL,
  `gia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_donhang_sanpham`
--

INSERT INTO `tbl_donhang_sanpham` (`id`, `idsp`, `iddh`, `soluong`, `gia`) VALUES
(34, 29, 43, 3, 29990000),
(35, 30, 43, 2, 34900000),
(36, 15, 43, 2, 29990000),
(37, 36, 43, 3, 34900000),
(38, 33, 43, 1, 34900000),
(39, 29, 44, 1, 29990000),
(40, 40, 44, 1, 34900000),
(41, 35, 44, 2, 29990000),
(42, 53, 44, 2, 19990000),
(43, 33, 45, 2, 34900000),
(45, 30, 47, 1, 34900000),
(46, 29, 48, 1, 29990000),
(48, 39, 50, 1, 29990000),
(50, 39, 52, 5, 29990000),
(51, 33, 53, 1, 34900000),
(52, 33, 54, 1, 34900000),
(53, 33, 55, 1, 34900000),
(54, 33, 56, 1, 34900000),
(55, 33, 57, 1, 34900000),
(56, 33, 58, 1, 34900000),
(57, 33, 59, 1, 34900000),
(58, 33, 60, 1, 34900000),
(59, 33, 61, 1, 34900000),
(60, 33, 62, 1, 34900000),
(61, 15, 63, 1, 29990000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_giohang`
--

CREATE TABLE `tbl_giohang` (
  `id` int(11) NOT NULL,
  `idsp` int(11) NOT NULL,
  `soluong` int(11) NOT NULL,
  `iduser` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_giohang`
--

INSERT INTO `tbl_giohang` (`id`, `idsp`, `soluong`, `iduser`) VALUES
(50, 36, 2, 2),
(51, 39, 1, 2),
(62, 29, 2, 2),
(70, 44, 1, 2),
(71, 15, 2, 2),
(75, 30, 2, 2),
(76, 33, 1, 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_sanpham`
--

CREATE TABLE `tbl_sanpham` (
  `id` int(11) NOT NULL,
  `tensp` varchar(100) NOT NULL,
  `mota` varchar(300) NOT NULL,
  `manhinh` varchar(50) NOT NULL,
  `camera` varchar(50) NOT NULL,
  `iddm` int(4) NOT NULL,
  `chipset` varchar(50) NOT NULL,
  `pin` varchar(50) NOT NULL,
  `sac` varchar(50) NOT NULL,
  `operator` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_sanpham`
--

INSERT INTO `tbl_sanpham` (`id`, `tensp`, `mota`, `manhinh`, `camera`, `iddm`, `chipset`, `pin`, `sac`, `operator`) VALUES
(8, 'Z-flip5', 'sdgdfahdsahetjrdfhdsfgjft', '6.67inch', '80mp', 2, '', '', '', ''),
(9, 'Iphone 16', 'như sản phẩm ', '6.67inch', '120 MP', 3, '', '', '', ''),
(10, 'Z-flip6', 'sdgdfahdsahetjrftjdfhdsfgjft', '6.67inch', '80mp', 2, '', '', '', ''),
(11, 'Iphone 16 Plus', 'sdgdfahdsahetjrftjdfhdsfgjft', '7.43 inch', '80mp', 3, '', '', '', ''),
(12, 'Iphone 16 Pro', 'sdgdfahdsahetjrftjdfhdsfgjft', '6.67inch', '120 MP', 3, '', '', '', ''),
(13, 'Iphone 16 Pro Max', 'sdgdfahdsahetjrftjdfhdsfgjft', '7.43 inch', '120 MP', 3, '', '', '', ''),
(14, 'S24 Ultra', 'sdgdfahdsahetjrftjdfhdsfgjft', '7.43 inch', '120 MP', 2, '', '', '', ''),
(15, 'xiaomi note 12', 'sdgdfahdsahetjrftjdfhdsfgjft', '7.43 inch', '120 MP', 4, 'snapdragon 888', '5000 mA.h', '33 W', 'Androi 13');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_sanphamcase`
--

CREATE TABLE `tbl_sanphamcase` (
  `id` int(4) NOT NULL,
  `mau` varchar(50) NOT NULL,
  `dungluong` varchar(20) NOT NULL,
  `dungluong1` varchar(50) NOT NULL,
  `gia` float NOT NULL,
  `idsp` int(4) NOT NULL,
  `img` varchar(50) NOT NULL,
  `hot` tinyint(3) NOT NULL DEFAULT 0,
  `giacu` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_sanphamcase`
--

INSERT INTO `tbl_sanphamcase` (`id`, `mau`, `dungluong`, `dungluong1`, `gia`, `idsp`, `img`, `hot`, `giacu`) VALUES
(14, 'Trắng', '128 Gb', '12 Gb', 29990000, 9, '../upload/iphone-16-trang.webp', 0, 0),
(15, 'Xanh Lưu Ly', '128 Gb', '12 Gb', 29990000, 9, '../upload/iphone-16-xanh-luu-ly.webp', 1, 0),
(16, 'xanh Mồng kết', '128 Gb', '12 Gb', 29990000, 9, '../upload/iphone-16-xanh-mong-ket.webp', 0, 0),
(17, 'Trắng', '256 Gb', '12 Gb', 34900000, 9, '../upload/iphone-16-trang.webp', 0, 0),
(18, 'Xanh Lưu Ly', '256 Gb', '12 Gb', 34900000, 9, '../upload/iphone-16-xanh-luu-ly.webp', 0, 0),
(19, 'xanh Mồng kết', '256 Gb', '12 Gb', 34900000, 9, '../upload/iphone-16-xanh-mong-ket.webp', 0, 0),
(20, 'Đen', '128 Gb', '12 Gb', 29990000, 11, '../upload/iphone-16-plus-den.webp', 0, 0),
(21, 'Đen', '256 Gb', '12 Gb', 34900000, 9, '../upload/iphone-16-plus-den.webp', 0, 0),
(22, 'Xanh Lưu Ly', '128 Gb', '12 Gb', 29990000, 9, '../upload/iphone-16-plus-xanh-luu-ly.webp', 0, 0),
(23, 'Xanh Lưu Ly', '256 Gb', '12 Gb', 34900000, 11, '../upload/iphone-16-plus-xanh-luu-ly.webp', 0, 0),
(24, 'xanh Mồng kết', '128 Gb', '12 Gb', 29990000, 11, '../upload/iphone-16-plus-xanh-mong-ket.webp', 0, 0),
(25, 'xanh Mồng kết', '256 Gb', '12 Gb', 34900000, 11, '../upload/iphone-16-plus-xanh-mong-ket.webp', 0, 0),
(26, 'Trắng', '128 Gb', '12 Gb', 29990000, 12, '../upload/iphone-16-pro-titan-trang_1.webp', 0, 0),
(28, 'Trắng', '256 Gb', '12 Gb', 34900000, 12, '../upload/iphone-16-pro-titan-trang_1.webp', 0, 0),
(29, 'Sa Mạc', '256 Gb', '12 Gb', 29990000, 12, '../upload/iphone-16-pro-titan-sa-mac_1.webp', 1, 0),
(30, 'Sa Mạc', '256 Gb', '12 Gb', 34900000, 13, '../upload/iphone-16-pro-titan-sa-mac_1.webp', 1, 0),
(31, 'Đen', '256 Gb', '12 Gb', 34900000, 13, '../upload/iphone-16-pro-max-titan-den.webp', 0, 0),
(32, 'Đen', '512 Gb', '12 Gb', 39990000, 13, '../upload/iphone-16-pro-max-titan-den.webp', 1, 0),
(33, 'Tự nhiên ', '256 Gb', '12 Gb', 34900000, 12, '../upload/iphone-16-pro-max-titan-tu-nhien.webp', 1, 0),
(34, 'Tự nhiên ', '512 Gb', '12 Gb', 39990000, 13, '../upload/iphone-16-pro-max-titan-tu-nhien.webp', 0, 0),
(35, 'Đen', '128 Gb', '12 Gb', 29990000, 10, '../upload/flip-den.webp', 0, 0),
(36, 'Đen', '256 Gb', '12 Gb', 34900000, 8, '../upload/flip-den.webp', 1, 0),
(37, 'Vàng', '128 Gb', '12 Gb', 29990000, 10, '../upload/flip-vang.webp', 0, 0),
(38, 'Vàng', '256 Gb', '12 Gb', 34900000, 10, '../upload/flip-vang.webp', 0, 0),
(39, 'Đen', '128 Gb', '12 Gb', 29990000, 14, '../upload/image_1170.webp', 1, 0),
(40, 'Đen', '256 Gb', '12 Gb', 34900000, 14, '../upload/image_1170.webp', 0, 0),
(41, 'Xám', '256 Gb', '12 Gb', 34900000, 14, '../upload/image_1172.webp', 0, 0),
(42, 'Xám', '128 Gb', '12 Gb', 29990000, 14, '../upload/image_1172.webp', 0, 0),
(43, 'Đen', '128 Gb', '12 Gb', 29990000, 8, '../upload/flip-den.webp', 0, 0),
(44, 'Vàng', '128 Gb', '12 Gb', 29990000, 8, '../upload/flip-vang.webp', 1, 0),
(52, 'Đen', '128 Gb', '12 Gb', 19990000, 15, '../upload/download.jpg', 0, 29999000),
(53, 'xanh', '128 Gb', '12 Gb', 19990000, 15, '../upload/download (1).jpg', 0, 29999000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `address` varchar(150) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `user` varchar(50) DEFAULT NULL,
  `pass` varchar(50) DEFAULT NULL,
  `sdt` varchar(15) NOT NULL,
  `role` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `name`, `address`, `email`, `user`, `pass`, `sdt`, `role`) VALUES
(1, 'admin', NULL, NULL, 'admin', '123', '', 1),
(2, NULL, NULL, NULL, 'user', '123', '', 0),
(3, NULL, NULL, 'tutran123@gmail.com', 'tutran', 'Tutran123@', '', 0),
(4, 'Trần Trọng Tú', 'Yên Lạc', 'tudeptrai@gmail.com', 'tudeptrai2', 'Tudeptraihon12@', '0348454627', 0),
(5, NULL, NULL, 'tu10diem@gmail.com', 'tu10diem', 'Tu10diem@', '', 0),
(6, 'Trần Trọng Tú', 'Yên Lạc', 'tungon@gmail.com', 'tungon', 'Tungon123@', '0348454626', 0),
(7, NULL, NULL, 'nhacnhoky@gmail.com', 'nhacnhoky', 'Nhacnhoky123@', '', 0),
(8, NULL, NULL, 'longdan@gmail.com', 'longdan', 'Longdan123@', '', 0),
(9, NULL, NULL, 'longngu@gmail.com', 'longngu', 'Longngu123@', '', 0),
(10, NULL, NULL, 'tungonhon@gmail.com', 'tungonhon', 'Tungonhon123@', '', 0);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tbl_danhmuc`
--
ALTER TABLE `tbl_danhmuc`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tbl_donhang`
--
ALTER TABLE `tbl_donhang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_dh_user` (`iduser`);

--
-- Chỉ mục cho bảng `tbl_donhang_sanpham`
--
ALTER TABLE `tbl_donhang_sanpham`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_sp_ctdh` (`idsp`),
  ADD KEY `fk_ctdh_dh` (`iddh`);

--
-- Chỉ mục cho bảng `tbl_giohang`
--
ALTER TABLE `tbl_giohang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_sp_giohang` (`idsp`),
  ADD KEY `fk_user_giohang` (`iduser`);

--
-- Chỉ mục cho bảng `tbl_sanpham`
--
ALTER TABLE `tbl_sanpham`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_sp_dm` (`iddm`);

--
-- Chỉ mục cho bảng `tbl_sanphamcase`
--
ALTER TABLE `tbl_sanphamcase`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_sp_case` (`idsp`);

--
-- Chỉ mục cho bảng `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tbl_danhmuc`
--
ALTER TABLE `tbl_danhmuc`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT cho bảng `tbl_donhang`
--
ALTER TABLE `tbl_donhang`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT cho bảng `tbl_donhang_sanpham`
--
ALTER TABLE `tbl_donhang_sanpham`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT cho bảng `tbl_giohang`
--
ALTER TABLE `tbl_giohang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT cho bảng `tbl_sanpham`
--
ALTER TABLE `tbl_sanpham`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT cho bảng `tbl_sanphamcase`
--
ALTER TABLE `tbl_sanphamcase`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT cho bảng `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `tbl_donhang`
--
ALTER TABLE `tbl_donhang`
  ADD CONSTRAINT `fk_dh_user` FOREIGN KEY (`iduser`) REFERENCES `tbl_user` (`id`);

--
-- Các ràng buộc cho bảng `tbl_donhang_sanpham`
--
ALTER TABLE `tbl_donhang_sanpham`
  ADD CONSTRAINT `fk_ctdh_dh` FOREIGN KEY (`iddh`) REFERENCES `tbl_donhang` (`id`),
  ADD CONSTRAINT `fk_sp_ctdh` FOREIGN KEY (`idsp`) REFERENCES `tbl_sanphamcase` (`id`);

--
-- Các ràng buộc cho bảng `tbl_giohang`
--
ALTER TABLE `tbl_giohang`
  ADD CONSTRAINT `fk_sp_giohang` FOREIGN KEY (`idsp`) REFERENCES `tbl_sanphamcase` (`id`),
  ADD CONSTRAINT `fk_user_giohang` FOREIGN KEY (`iduser`) REFERENCES `tbl_user` (`id`);

--
-- Các ràng buộc cho bảng `tbl_sanpham`
--
ALTER TABLE `tbl_sanpham`
  ADD CONSTRAINT `fk_sp_dm` FOREIGN KEY (`iddm`) REFERENCES `tbl_danhmuc` (`id`);

--
-- Các ràng buộc cho bảng `tbl_sanphamcase`
--
ALTER TABLE `tbl_sanphamcase`
  ADD CONSTRAINT `fk_sp_case` FOREIGN KEY (`idsp`) REFERENCES `tbl_sanpham` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
