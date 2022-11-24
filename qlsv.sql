-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1:3306
-- Thời gian đã tạo: Th5 14, 2022 lúc 05:03 AM
-- Phiên bản máy phục vụ: 5.7.36
-- Phiên bản PHP: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `qlsv`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comment`
--

DROP TABLE IF EXISTS `comment`;
CREATE TABLE IF NOT EXISTS `comment` (
  `id_cmt` varchar(10) NOT NULL,
  `id_cmtparent` varchar(10) DEFAULT NULL,
  `id_thaoluan` varchar(10) DEFAULT NULL,
  `id_gv` varchar(10) DEFAULT NULL,
  `id_sv` varchar(10) DEFAULT NULL,
  `noidung` text NOT NULL,
  PRIMARY KEY (`id_cmt`),
  KEY `id_cmtparent` (`id_cmtparent`),
  KEY `id_thaoluan` (`id_thaoluan`),
  KEY `id_gv` (`id_gv`),
  KEY `id_sv` (`id_sv`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `giaovien`
--

DROP TABLE IF EXISTS `giaovien`;
CREATE TABLE IF NOT EXISTS `giaovien` (
  `id_gv` varchar(10) NOT NULL,
  `ten_gv` varchar(50) CHARACTER SET utf32 COLLATE utf32_vietnamese_ci NOT NULL,
  `gioitinh_gv` tinyint(1) NOT NULL,
  `ngaysinh_gv` date NOT NULL,
  `cmnd_gv` decimal(10,0) NOT NULL,
  `pw_gv` varchar(20) NOT NULL,
  PRIMARY KEY (`id_gv`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `giaovien`
--

INSERT INTO `giaovien` (`id_gv`, `ten_gv`, `gioitinh_gv`, `ngaysinh_gv`, `cmnd_gv`, `pw_gv`) VALUES
('admin', 'admin', 0, '1992-04-01', '123111', 'admin'),
('GV01', 'Phạm Khánh Bình ', 1, '1993-07-13', '4624', 'GV01'),
('GV02', 'Cống Kiên Cường ', 1, '1992-06-13', '4668', 'GV02'),
('GV03', 'An Việt Cường ', 1, '1991-07-23', '962', 'GV03'),
('GV04', 'Đậu Vinh Diệu ', 1, '1993-02-06', '1723', 'GV04'),
('GV05', 'Thôi Hải Giang ', 0, '1994-01-15', '5363', 'GV05'),
('GV06', 'Thục Ðăng Khoa ', 1, '1995-12-16', '1457', 'GV06');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khoa`
--

DROP TABLE IF EXISTS `khoa`;
CREATE TABLE IF NOT EXISTS `khoa` (
  `id_khoa` varchar(10) NOT NULL,
  `ten_khoa` varchar(50) CHARACTER SET utf16 COLLATE utf16_vietnamese_ci NOT NULL,
  PRIMARY KEY (`id_khoa`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `khoa`
--

INSERT INTO `khoa` (`id_khoa`, `ten_khoa`) VALUES
('CNTT', 'Công nghệ thông tin'),
('DDT', 'Điện điện tử'),
('KTXD', 'Kỹ thuật xây dựng'),
('NNA', 'Ngôn ngữ Anh'),
('QTKD', 'Quản trị kinh doanh'),
('TTCN', 'Thiết kế công nghiệp');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lopmh`
--

DROP TABLE IF EXISTS `lopmh`;
CREATE TABLE IF NOT EXISTS `lopmh` (
  `id_lopmh` varchar(10) NOT NULL,
  `ten_lopmh` varchar(50) CHARACTER SET utf32 COLLATE utf32_vietnamese_ci NOT NULL,
  `id_gv` varchar(10) NOT NULL,
  `id_monhoc` varchar(10) NOT NULL,
  PRIMARY KEY (`id_lopmh`),
  UNIQUE KEY `ten_lopmh` (`ten_lopmh`),
  KEY `id_gv` (`id_gv`),
  KEY `id_monhoc` (`id_monhoc`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `lopmh`
--

INSERT INTO `lopmh` (`id_lopmh`, `ten_lopmh`, `id_gv`, `id_monhoc`) VALUES
('CS03044L01', 'Xây dựng phần mềm windows Lớp 01', 'GV03', 'CS03044'),
('CS03044L12', 'Xây Dựng Web', 'GV01', 'CS03044'),
('CS03151L01', 'Thực tập tốt nghiệp Lớp 01', 'GV01', 'CS03151'),
('CS03153L02', 'Đồ án tốt nghiệp Lớp 02', 'GV05', 'CS03153'),
('CS03153L03', 'Đồ án tốt nghiệp Lớp 03', 'GV01', 'CS03153');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lopmh_sv`
--

DROP TABLE IF EXISTS `lopmh_sv`;
CREATE TABLE IF NOT EXISTS `lopmh_sv` (
  `id_lopmh` varchar(10) NOT NULL,
  `id_sv` varchar(10) NOT NULL,
  PRIMARY KEY (`id_lopmh`,`id_sv`),
  KEY `id_sv` (`id_sv`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `lopmh_sv`
--

INSERT INTO `lopmh_sv` (`id_lopmh`, `id_sv`) VALUES
('CS03153L03', 'SV01'),
('CS03153L02', 'SV02'),
('CS03153L03', 'SV02'),
('CS03153L02', 'SV03'),
('CS03153L03', 'SV03'),
('CS03151L01', 'SV04'),
('CS03153L02', 'SV04'),
('CS03151L01', 'SV05'),
('CS03153L02', 'SV05'),
('CS03153L03', 'SV05'),
('CS03151L01', 'SV06'),
('CS03153L02', 'SV06'),
('CS03153L02', 'SV07'),
('CS03153L02', 'SV08'),
('CS03153L02', 'SV09'),
('CS03153L03', 'SV09');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `monhoc`
--

DROP TABLE IF EXISTS `monhoc`;
CREATE TABLE IF NOT EXISTS `monhoc` (
  `id_monhoc` varchar(10) NOT NULL,
  `ten_monhoc` varchar(50) CHARACTER SET utf32 COLLATE utf32_vietnamese_ci NOT NULL,
  `sotinchi` int(11) NOT NULL,
  PRIMARY KEY (`id_monhoc`),
  UNIQUE KEY `ten_monhoc` (`ten_monhoc`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `monhoc`
--

INSERT INTO `monhoc` (`id_monhoc`, `ten_monhoc`, `sotinchi`) VALUES
('CS03044', 'Xây dựng phần mềm windows', 3),
('CS03151', 'Thực tập tốt nghiệp', 2),
('CS03153', 'Đồ án tốt nghiệp', 5);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhom`
--

DROP TABLE IF EXISTS `nhom`;
CREATE TABLE IF NOT EXISTS `nhom` (
  `id_nhom` varchar(10) NOT NULL,
  `ten_nhom` varchar(50) CHARACTER SET utf32 COLLATE utf32_vietnamese_ci NOT NULL,
  `id_lopmh` varchar(10) NOT NULL,
  `soluongtoida` int(11) NOT NULL,
  PRIMARY KEY (`id_nhom`),
  KEY `id_lopmh` (`id_lopmh`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `nhom`
--

INSERT INTO `nhom` (`id_nhom`, `ten_nhom`, `id_lopmh`, `soluongtoida`) VALUES
('N01', 'Nhóm 1', 'CS03151L01', 4),
('N02', 'Nhóm 2', 'CS03151L01', 4),
('N03', 'Nhóm 3', 'CS03153L02', 4),
('N04', 'Nhóm 4', 'CS03153L02', 4),
('N05', 'Nhóm A', 'CS03153L03', 4);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhom_sv`
--

DROP TABLE IF EXISTS `nhom_sv`;
CREATE TABLE IF NOT EXISTS `nhom_sv` (
  `id_nhom` varchar(10) NOT NULL,
  `id_sv` varchar(10) NOT NULL,
  PRIMARY KEY (`id_nhom`,`id_sv`),
  KEY `id_sv` (`id_sv`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `nhom_sv`
--

INSERT INTO `nhom_sv` (`id_nhom`, `id_sv`) VALUES
('N01', 'SV02'),
('N03', 'SV03'),
('N03', 'SV04'),
('N04', 'SV04'),
('N02', 'SV05'),
('N03', 'SV05'),
('N04', 'SV06'),
('N05', 'SV06'),
('N02', 'SV07'),
('N04', 'SV07'),
('N04', 'SV08'),
('N05', 'SV09');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phanhoi`
--

DROP TABLE IF EXISTS `phanhoi`;
CREATE TABLE IF NOT EXISTS `phanhoi` (
  `id_phanhoi` varchar(10) CHARACTER SET latin1 NOT NULL,
  `id_gv` varchar(10) CHARACTER SET latin1 NOT NULL,
  `id_sv` varchar(10) CHARACTER SET latin1 NOT NULL,
  `id_yeucau` varchar(10) CHARACTER SET latin1 NOT NULL,
  `tinhtrang` tinyint(1) NOT NULL,
  `noidung` text CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`id_phanhoi`),
  KEY `id_gv` (`id_gv`),
  KEY `id_yeucau` (`id_yeucau`),
  KEY `id_sv` (`id_sv`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sinhvien`
--

DROP TABLE IF EXISTS `sinhvien`;
CREATE TABLE IF NOT EXISTS `sinhvien` (
  `id_sv` varchar(10) NOT NULL,
  `ten_sv` varchar(50) CHARACTER SET utf32 COLLATE utf32_vietnamese_ci NOT NULL,
  `gioitinh_sv` tinyint(1) NOT NULL,
  `ngaysinh_sv` date NOT NULL,
  `cmnd_sv` decimal(10,0) NOT NULL,
  `id_khoa` varchar(10) NOT NULL,
  `pw_sv` varchar(20) NOT NULL,
  PRIMARY KEY (`id_sv`),
  UNIQUE KEY `cmnd_sv` (`cmnd_sv`),
  KEY `id_khoa` (`id_khoa`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `sinhvien`
--

INSERT INTO `sinhvien` (`id_sv`, `ten_sv`, `gioitinh_sv`, `ngaysinh_sv`, `cmnd_sv`, `id_khoa`, `pw_sv`) VALUES
('SV01', 'Đăng Bảo Ðịnh ', 1, '2000-12-14', '1234', 'CNTT', 'SV01'),
('SV02', 'Lãnh Minh Giang ', 0, '1999-11-12', '1325', 'CNTT', 'SV02'),
('SV03', 'Cống Phú Hiệp ', 1, '1998-02-14', '2453', 'CNTT', 'SV03'),
('SV04', 'Tào Hiệp Hòa ', 1, '2000-03-13', '5453', 'CNTT', 'SV04'),
('SV05', 'Hồ Quốc Hùng ', 1, '2000-04-15', '7634', 'CNTT', 'SV05'),
('SV06', 'Võ Thanh Liêm ', 1, '2000-06-05', '8623', 'CNTT', 'SV06'),
('SV07', 'Tấn Thanh Liêm ', 1, '2000-03-12', '3441', 'CNTT', 'SV07'),
('SV08', 'Tống Văn Minh ', 1, '2000-12-16', '4235', 'CNTT', 'SV08'),
('SV09', 'Sơn Ngọc Sơn ', 1, '2000-10-23', '1257', 'CNTT', 'SV09'),
('SV10', 'Tăng Quyết Thắng ', 1, '2000-11-14', '8451', 'CNTT', 'SV10');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thaoluan`
--

DROP TABLE IF EXISTS `thaoluan`;
CREATE TABLE IF NOT EXISTS `thaoluan` (
  `id_thaoluan` varchar(10) CHARACTER SET latin1 NOT NULL,
  `tieude` text NOT NULL,
  `id_gv` varchar(10) CHARACTER SET latin1 DEFAULT NULL,
  `id_nhom` varchar(10) CHARACTER SET latin1 DEFAULT NULL,
  `id_sv` varchar(10) CHARACTER SET latin1 DEFAULT NULL,
  `nguoigui` int(11) NOT NULL,
  `noidung` text CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`id_thaoluan`),
  KEY `id_gv` (`id_gv`),
  KEY `id_nhom` (`id_nhom`),
  KEY `id_sv` (`id_sv`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thongbao`
--

DROP TABLE IF EXISTS `thongbao`;
CREATE TABLE IF NOT EXISTS `thongbao` (
  `id_thongbao` int(10) NOT NULL AUTO_INCREMENT,
  `noidung_thongbao` text NOT NULL,
  `id_gv` varchar(10) NOT NULL,
  `id_lopmh` varchar(10) DEFAULT NULL,
  `id_sv` varchar(10) DEFAULT NULL,
  `id_nhom` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id_thongbao`),
  KEY `id_gv` (`id_gv`),
  KEY `id_lopmh` (`id_lopmh`),
  KEY `id_sv` (`id_sv`),
  KEY `id_nhom` (`id_nhom`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `thongbao`
--

INSERT INTO `thongbao` (`id_thongbao`, `noidung_thongbao`, `id_gv`, `id_lopmh`, `id_sv`, `id_nhom`) VALUES
(21, 'qqqqqq', 'GV01', 'CS03151L01', NULL, NULL),
(22, 'qqqqqq', 'GV01', 'CS03153L03', NULL, NULL),
(23, 'aaaaaaaaaad ddddd', 'GV01', 'CS03151L01', NULL, NULL),
(24, 'aaaaaaaaaad ddddd', 'GV01', 'CS03153L03', NULL, NULL),
(25, '4/5/2023 Báo Cáo', 'GV01', 'CS03153L03', NULL, NULL),
(26, 'nhà home ', 'GV01', 'CS03151L01', NULL, NULL),
(27, 'nhà home ', 'GV01', 'CS03153L03', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `yeucau`
--

DROP TABLE IF EXISTS `yeucau`;
CREATE TABLE IF NOT EXISTS `yeucau` (
  `id_yeucau` varchar(10) NOT NULL,
  `id_sv` varchar(10) NOT NULL,
  `id_gv` varchar(10) NOT NULL,
  `noidung` text NOT NULL,
  `tinhtrang` tinyint(1) NOT NULL,
  `nhanxet` text NOT NULL,
  PRIMARY KEY (`id_yeucau`),
  KEY `id_gv` (`id_gv`),
  KEY `id_sv` (`id_sv`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `yeucau_chuyennhom`
--

DROP TABLE IF EXISTS `yeucau_chuyennhom`;
CREATE TABLE IF NOT EXISTS `yeucau_chuyennhom` (
  `id_yeucaucn` int(10) NOT NULL AUTO_INCREMENT,
  `id_sv` varchar(10) NOT NULL,
  `id_nhomgoc` varchar(10) NOT NULL,
  `id_nhom` varchar(10) NOT NULL,
  `tinhtrang` tinyint(1) DEFAULT NULL,
  `nhanxet` text CHARACTER SET utf8,
  `id_gv` varchar(10) NOT NULL,
  PRIMARY KEY (`id_yeucaucn`),
  KEY `id_sv` (`id_sv`),
  KEY `id_nhom` (`id_nhom`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `yeucau_chuyennhom`
--

INSERT INTO `yeucau_chuyennhom` (`id_yeucaucn`, `id_sv`, `id_nhomgoc`, `id_nhom`, `tinhtrang`, `nhanxet`, `id_gv`) VALUES
(1, 'SV06', 'N02', 'N05', 1, NULL, 'GV01'),
(2, 'SV02', 'N01', 'N05', 0, NULL, 'GV01'),
(4, 'SV04', 'N05', 'N04', 1, NULL, 'GV01');

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comment_ibfk_1` FOREIGN KEY (`id_cmtparent`) REFERENCES `comment` (`id_cmt`),
  ADD CONSTRAINT `comment_ibfk_2` FOREIGN KEY (`id_thaoluan`) REFERENCES `thaoluan` (`id_thaoluan`),
  ADD CONSTRAINT `comment_ibfk_3` FOREIGN KEY (`id_gv`) REFERENCES `giaovien` (`id_gv`),
  ADD CONSTRAINT `comment_ibfk_4` FOREIGN KEY (`id_sv`) REFERENCES `sinhvien` (`id_sv`);

--
-- Các ràng buộc cho bảng `lopmh`
--
ALTER TABLE `lopmh`
  ADD CONSTRAINT `lopmh_ibfk_1` FOREIGN KEY (`id_gv`) REFERENCES `giaovien` (`id_gv`),
  ADD CONSTRAINT `lopmh_ibfk_2` FOREIGN KEY (`id_monhoc`) REFERENCES `monhoc` (`id_monhoc`);

--
-- Các ràng buộc cho bảng `lopmh_sv`
--
ALTER TABLE `lopmh_sv`
  ADD CONSTRAINT `lopmh_sv_ibfk_1` FOREIGN KEY (`id_lopmh`) REFERENCES `lopmh` (`id_lopmh`),
  ADD CONSTRAINT `lopmh_sv_ibfk_2` FOREIGN KEY (`id_sv`) REFERENCES `sinhvien` (`id_sv`);

--
-- Các ràng buộc cho bảng `nhom`
--
ALTER TABLE `nhom`
  ADD CONSTRAINT `nhom_ibfk_1` FOREIGN KEY (`id_lopmh`) REFERENCES `lopmh` (`id_lopmh`);

--
-- Các ràng buộc cho bảng `nhom_sv`
--
ALTER TABLE `nhom_sv`
  ADD CONSTRAINT `nhom_sv_ibfk_1` FOREIGN KEY (`id_nhom`) REFERENCES `nhom` (`id_nhom`),
  ADD CONSTRAINT `nhom_sv_ibfk_2` FOREIGN KEY (`id_sv`) REFERENCES `sinhvien` (`id_sv`);

--
-- Các ràng buộc cho bảng `phanhoi`
--
ALTER TABLE `phanhoi`
  ADD CONSTRAINT `phanhoi_ibfk_1` FOREIGN KEY (`id_gv`) REFERENCES `giaovien` (`id_gv`),
  ADD CONSTRAINT `phanhoi_ibfk_2` FOREIGN KEY (`id_yeucau`) REFERENCES `yeucau` (`id_yeucau`),
  ADD CONSTRAINT `phanhoi_ibfk_3` FOREIGN KEY (`id_sv`) REFERENCES `sinhvien` (`id_sv`);

--
-- Các ràng buộc cho bảng `sinhvien`
--
ALTER TABLE `sinhvien`
  ADD CONSTRAINT `sinhvien_ibfk_1` FOREIGN KEY (`id_khoa`) REFERENCES `khoa` (`id_khoa`);

--
-- Các ràng buộc cho bảng `thaoluan`
--
ALTER TABLE `thaoluan`
  ADD CONSTRAINT `ThaoLuan_ibfk_1` FOREIGN KEY (`id_gv`) REFERENCES `giaovien` (`id_gv`),
  ADD CONSTRAINT `ThaoLuan_ibfk_2` FOREIGN KEY (`id_nhom`) REFERENCES `nhom` (`id_nhom`),
  ADD CONSTRAINT `ThaoLuan_ibfk_3` FOREIGN KEY (`id_sv`) REFERENCES `sinhvien` (`id_sv`);

--
-- Các ràng buộc cho bảng `thongbao`
--
ALTER TABLE `thongbao`
  ADD CONSTRAINT `thongbao_ibfk_1` FOREIGN KEY (`id_gv`) REFERENCES `giaovien` (`id_gv`),
  ADD CONSTRAINT `thongbao_ibfk_2` FOREIGN KEY (`id_lopmh`) REFERENCES `lopmh` (`id_lopmh`),
  ADD CONSTRAINT `thongbao_ibfk_3` FOREIGN KEY (`id_sv`) REFERENCES `sinhvien` (`id_sv`),
  ADD CONSTRAINT `thongbao_ibfk_4` FOREIGN KEY (`id_nhom`) REFERENCES `nhom` (`id_nhom`);

--
-- Các ràng buộc cho bảng `yeucau`
--
ALTER TABLE `yeucau`
  ADD CONSTRAINT `YeuCau_ibfk_1` FOREIGN KEY (`id_gv`) REFERENCES `giaovien` (`id_gv`),
  ADD CONSTRAINT `YeuCau_ibfk_2` FOREIGN KEY (`id_sv`) REFERENCES `sinhvien` (`id_sv`);

--
-- Các ràng buộc cho bảng `yeucau_chuyennhom`
--
ALTER TABLE `yeucau_chuyennhom`
  ADD CONSTRAINT `yeucau_chuyennhom_ibfk_1` FOREIGN KEY (`id_sv`) REFERENCES `sinhvien` (`id_sv`),
  ADD CONSTRAINT `yeucau_chuyennhom_ibfk_2` FOREIGN KEY (`id_nhom`) REFERENCES `nhom` (`id_nhom`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
