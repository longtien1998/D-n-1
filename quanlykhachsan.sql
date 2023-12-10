-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 08, 2023 lúc 09:02 AM
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
-- Cấu trúc bảng cho bảng `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `iddh` int(11) NOT NULL,
  `idroom` int(11) NOT NULL,
  `soluong` int(10) NOT NULL DEFAULT 0,
  `dongia` double(10,0) NOT NULL DEFAULT 0,
  `tenPhong` varchar(50) NOT NULL,
  `maPhong` varchar(100) NOT NULL,
  `loaiPhong` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `cart`
--

INSERT INTO `cart` (`id`, `iddh`, `idroom`, `soluong`, `dongia`, `tenPhong`, `maPhong`, `loaiPhong`) VALUES
(26, 34, 2, 2, 896000, 'Phòng Đôi', 'R103', 'Double'),
(27, 34, 1, 2, 699000, 'Phòng Đơn', 'R102', 'Single'),
(28, 38, 1, 2, 1398000, 'Phòng Đơn', 'R102', 'Single'),
(29, 38, 2, 1, 896000, 'Phòng Đôi', 'R103', 'Double'),
(30, 40, 1, 2, 1398000, 'Phòng Đơn', 'R102', 'Single'),
(31, 41, 1, 3, 2097000, 'Phòng Đơn', 'R102', 'Single'),
(32, 41, 2, 2, 1792000, 'Phòng Đôi', 'R103', 'Double');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `donhang`
--

CREATE TABLE `donhang` (
  `id` int(11) NOT NULL,
  `madh` varchar(20) NOT NULL,
  `pttt` tinyint(1) NOT NULL DEFAULT 1,
  `tongdonhang` double(10,0) DEFAULT 0,
  `iduser` int(20) NOT NULL,
  `hoten` varchar(50) NOT NULL,
  `tel` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `checkin` date NOT NULL,
  `checkout` date NOT NULL,
  `trangThaiDonHang` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `donhang`
--

INSERT INTO `donhang` (`id`, `madh`, `pttt`, `tongdonhang`, `iduser`, `hoten`, `tel`, `email`, `checkin`, `checkout`, `trangThaiDonHang`) VALUES
(33, 'DH3868302', 1, 3190000, 0, 'dfg', '46546', 'dfg@gmail.com', '2023-12-08', '2023-12-22', '2'),
(34, 'DH9644857', 1, 3190000, 0, 'dfg', '46546', 'dfg@gmail.com', '2023-12-08', '2023-12-22', '2'),
(35, 'DH4340172', 1, 3190000, 0, 'dfg', '46546', 'dfg@gmail.com', '2023-12-08', '2023-12-22', ''),
(36, 'DH3137643', 1, 3190000, 0, 'dfg', '46546', 'dfg@gmail.com', '2023-12-08', '2023-12-22', '3'),
(37, 'DH9362153', 1, 3190000, 0, 'dfg', '46546', 'dfg@gmail.com', '2023-12-08', '2023-12-22', '2'),
(38, 'DH9692384', 1, 2294000, 0, 'gs', '276', 'adg@gmail.com', '2023-12-07', '2023-12-09', '2'),
(39, 'DH4485416', 1, 2294000, 0, 'gs', '276', 'adg@gmail.com', '2023-12-07', '2023-12-09', '2'),
(40, 'DH9541563', 1, 1398000, 0, 'sad', '74854', 'a@gmail.com', '2023-12-08', '2023-12-09', '2'),
(41, 'DH4478724', 2, 3889000, 0, 'thành linh', '0813979994', 'thanhlinh@gmail.com', '2023-12-09', '2023-12-09', '2');

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
  `caLamViec` varchar(40) NOT NULL,
  `Id_KhachSan` int(11) NOT NULL,
  `tenDangNhap` varchar(50) NOT NULL,
  `urlimage` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `phone` int(10) NOT NULL,
  `diachi` varchar(250) NOT NULL,
  `macode` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `nhanvien`
--

INSERT INTO `nhanvien` (`maNhanVien`, `tenNhanVien`, `password`, `congViec`, `ngaylamViec`, `caLamViec`, `Id_KhachSan`, `tenDangNhap`, `urlimage`, `email`, `phone`, `diachi`, `macode`) VALUES
('NV001', 'Trần Hoài An', '123', 'Lễ Tân', '2023-11-13', 'ca full', 0, 'hoaian', 'uploads/z4865498818964_115bed6566b39af0519bc49a85df5873.jpg', 'hoaian@gmail.com', 982268784, 'Liên chiểu, Đà Nẵng', 4626164),
('NV002', 'Trần Ngọc Diễm', 'Diem123@', 'Quản lý', '2020-11-18', 'Full ca', 0, 'NgocDiem', '', '', 0, '0', 0),
('NV003', 'Lê Hoài Lê', 'Lê Hoài Lê', 'Lễ Tân', '0000-00-00', 'Ca full: 6h - 14h30', 0, 'HoaiLe', '', 'hoaile@gmail.com', 982268784, 'Tam giang, Núi Thành, Quảng Nam', 7000),
('NV004', 'Cao Thị Hoài Nhi', '1234@hn', 'Dọn Phòng', '2020-11-18', 'Ca Sáng', 0, 'HoaiNhi', '', '', 0, '0', 0),
('NV005', 'Hồ Văn Tính', 'Tinh123@', 'Dọn Phòng', '2021-09-07', 'Full Ca', 0, 'LeTinh', '', '', 0, '0', 0),
('NV006', 'rswywsjsadgrsgs]', 'rswywsjsadgrsgs', 'Quản lý', '2023-12-02', 'Ca full: 14h - 22h30', 0, 'hdfds', './uploads/user.png', 'hdfds@gmail.com', 2147483647, 'jbfaihfvguahf', 450000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `tieude` text NOT NULL,
  `url` varchar(100) NOT NULL,
  `noidung` text NOT NULL,
  `img` varchar(110) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `room`
--

CREATE TABLE `room` (
  `id` int(50) NOT NULL,
  `maPhong` varchar(11) NOT NULL,
  `tenPhong` varchar(100) NOT NULL,
  `img` varchar(100) NOT NULL,
  `loaiPhong` varchar(50) NOT NULL,
  `giaPhong` int(11) NOT NULL,
  `tThai` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `room`
--

INSERT INTO `room` (`id`, `maPhong`, `tenPhong`, `img`, `loaiPhong`, `giaPhong`, `tThai`) VALUES
(1, 'R102', 'Phòng Đơn', '', 'Single', 699000, '0'),
(2, 'R103', 'Phòng Đôi', '', 'Double', 896000, '0'),
(3, 'R104', 'Phòng Gia Đình', '', 'Family', 1299000, '0'),
(4, 'R105', 'Phòng Vip', '', 'VIP', 2149000, '0'),
(0, 'R101', 'Phòng đơn', '', 'Single', 299000, ''),
(0, 'R108', 'Phòng đôi', '', 'Double', 599000, '');

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
(10, 'Nguyễn Đỗ Thanh Nguyên', 'Alexnguyen', '12345', 'nguyen@gmail.com', '0787559037', '', 0, ''),
(11, 'Phạm Hữu Nhất', 'Akitonhat', '12345', 'nhatp5410@gmail.com', '0942686045', '', 0, ''),
(14, 'Tôn Long Tiến', 'longtien1998', '123123', 'longtien1998@gmail.com', '0982268784', 'nghĩa Thắng, Tư Nghĩa , Quảng Ngãi', 50000, 'uploads/dại diện.jpg');

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
-- Chỉ mục cho bảng `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD PRIMARY KEY (`maNhanVien`);

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
  ADD KEY `maKhachHang` (`maKhachHang`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT cho bảng `donhang`
--
ALTER TABLE `donhang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT cho bảng `useradmin`
--
ALTER TABLE `useradmin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT cho bảng `đánh giá`
--
ALTER TABLE `đánh giá`
  MODIFY `MaBaiViet` int(15) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
