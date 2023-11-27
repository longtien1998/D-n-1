-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 27, 2023 lúc 04:08 AM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `quanlykhachsan`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `booking`
--

CREATE TABLE `booking` (
  `maPhong` varchar(10) NOT NULL,
  `maKhachHang` varchar(10) NOT NULL,
  `Check-in` date NOT NULL,
  `Check-out` date NOT NULL,
  `thanhToan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bài viết`
--

CREATE TABLE `bài viết` (
  `idBaiViet` int(11) NOT NULL,
  `tieuDe` text NOT NULL,
  `urlHinh` text NOT NULL,
  `ngay` int(11) NOT NULL,
  `noi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachsan`
--

CREATE TABLE `khachsan` (
  `ID` int(11) NOT NULL,
  `tenKhachSan` varchar(50) NOT NULL,
  `DiaChi` varchar(255) NOT NULL,
  `XepHang` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhanvien`
--

CREATE TABLE `nhanvien` (
  `maNhanVien` varchar(10) NOT NULL,
  `tenNhanVien` varchar(255) NOT NULL,
  `password` varchar(50) NOT NULL,
  `congViec` text NOT NULL,
  `ngaylamViec` date NOT NULL,
  `caLamViec` varchar(10) NOT NULL,
  `Id_KhachSan` int(11) NOT NULL,
  `tenDangNhap` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `room`
--

CREATE TABLE `room` (
  `maPhong` varchar(10) NOT NULL,
  `LoaiPhong` varchar(50) NOT NULL,
  `giaPhong` int(11) NOT NULL,
  `trangThai` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `room`
--

INSERT INTO `room` (`maPhong`, `LoaiPhong`, `giaPhong`, `trangThai`) VALUES
('R101', 'Phòng Đơn', 699000, 0),
('R102', 'Phòng Đơn', 699000, 1),
('R103', 'Phòng Đơn', 699000, 1),
('R104', 'Phòng Đơn', 699000, 1),
('R105', 'Phòng Đôi', 896000, 1),
('R106', 'Phòng Đôi', 896000, 0),
('R107', 'Phòng Đôi', 896000, 0),
('R108', 'Phòng Đôi', 896000, 1),
('R109', 'Phòng Gia Đình', 1299000, 0),
('R110', 'Phòng Gia Đình', 1299000, 1),
('R201', 'Phòng Vip', 2149000, 1),
('R202', 'Phòng Vip', 2149000, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `maKhachHang` varchar(10) NOT NULL,
  `tenKhachHang` varchar(50) NOT NULL,
  `matKhau` varchar(20) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `hoTen` varchar(255) NOT NULL,
  `SĐT` int(10) NOT NULL,
  `groupID` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `useradmin`
--

CREATE TABLE `useradmin` (
  `id` int(11) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `diachi` varchar(250) NOT NULL,
  `macode` int(10) NOT NULL,
  `urlimage` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `useradmin`
--

INSERT INTO `useradmin` (`id`, `fullname`, `username`, `password`, `email`, `phone`, `diachi`, `macode`, `urlimage`) VALUES
(2, 'Tôn Long Tiến', 'longtien', '123123', 'longtien@1998', '0982268784', 'Nghĩa Thắng, Tư Nghĩa, Quãng Ngãi', 700000, ''),
(10, 'Nguyễn Đỗ Thanh Nguyên', 'Alexnguyen', '12345', 'nguyen@gmail.com', '0787559037', '', 0, ''),
(11, 'Phạm Hữu Nhất', 'Akitonhat', '12345', 'nhatp5410@gmail.com', '0942686045', '', 0, '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `đánh giá`
--

CREATE TABLE `đánh giá` (
  `MaBaiViet` int(15) NOT NULL,
  `maPhong` varchar(10) NOT NULL,
  `maKhachHang` varchar(10) NOT NULL,
  `danhGia` text NOT NULL,
  `noiDung` text NOT NULL,
  `binhLuan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `booking`
--
ALTER TABLE `booking`
  ADD KEY `maPhong` (`maPhong`);

--
-- Chỉ mục cho bảng `khachsan`
--
ALTER TABLE `khachsan`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD PRIMARY KEY (`maNhanVien`),
  ADD KEY `Id_KhachSan` (`Id_KhachSan`);

--
-- Chỉ mục cho bảng `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`maPhong`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`maKhachHang`);

--
-- Chỉ mục cho bảng `useradmin`
--
ALTER TABLE `useradmin`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `đánh giá`
--
ALTER TABLE `đánh giá`
  ADD PRIMARY KEY (`MaBaiViet`),
  ADD KEY `maKhachHang` (`maKhachHang`),
  ADD KEY `maPhong` (`maPhong`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `khachsan`
--
ALTER TABLE `khachsan`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `useradmin`
--
ALTER TABLE `useradmin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `đánh giá`
--
ALTER TABLE `đánh giá`
  MODIFY `MaBaiViet` int(15) NOT NULL AUTO_INCREMENT;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `booking_ibfk_1` FOREIGN KEY (`maKhachHang`) REFERENCES `user` (`maKhachHang`),
  ADD CONSTRAINT `booking_ibfk_2` FOREIGN KEY (`maPhong`) REFERENCES `room` (`maPhong`);

--
-- Các ràng buộc cho bảng `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD CONSTRAINT `nhanvien_ibfk_1` FOREIGN KEY (`Id_KhachSan`) REFERENCES `khachsan` (`ID`);

--
-- Các ràng buộc cho bảng `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`maKhachHang`) REFERENCES `booking` (`maKhachHang`);

--
-- Các ràng buộc cho bảng `đánh giá`
--
ALTER TABLE `đánh giá`
  ADD CONSTRAINT `đánh giá_ibfk_1` FOREIGN KEY (`maKhachHang`) REFERENCES `user` (`maKhachHang`),
  ADD CONSTRAINT `đánh giá_ibfk_2` FOREIGN KEY (`maPhong`) REFERENCES `room` (`maPhong`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
