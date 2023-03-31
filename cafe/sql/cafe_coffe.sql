-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th4 09, 2022 lúc 12:45 PM
-- Phiên bản máy phục vụ: 10.4.22-MariaDB
-- Phiên bản PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `cafe`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cafe_coffe`
--

CREATE TABLE `cafe_coffe` (
  `id` int(100) NOT NULL,
  `ten` varchar(50) NOT NULL,
  `thanh_phan` text NOT NULL,
  `gia` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `cafe_coffe`
--

INSERT INTO `cafe_coffe` (`id`, `ten`, `thanh_phan`, `gia`) VALUES
(1, 'Cà Phê Đen Đá', 'đường, cà phê', '30000'),
(2, 'Cà Phê Sữa', 'cà phê, sữa đặc', '35000'),
(3, 'Bạc Xĩu', 'cà phê, sữa tươi, sữa đặc', '35000'),
(4, 'Cà Phê Capuchino', 'espresso, sữa nóng, bột cacao', '40000'),
(5, 'Cà Phê Latte', 'espresso, sữa nóng, bọt sữa', '40000');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
