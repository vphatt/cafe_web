-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th4 09, 2022 lúc 12:50 PM
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
-- Cấu trúc bảng cho bảng `cafe_banhngot`
--

CREATE TABLE `cafe_banhngot` (
  `id` int(100) NOT NULL,
  `ten` varchar(50) NOT NULL,
  `thanh_phan` text NOT NULL,
  `gia` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `cafe_banhngot`
--

INSERT INTO `cafe_banhngot` (`id`, `ten`, `thanh_phan`, `gia`) VALUES
(11, 'Bánh Tiramisu', 'Bột cacao, phô mai, whipping cream, trứng, đường.', '45000'),
(12, 'Bánh Mousse', 'Bột caccao, sữa tươi, đường, chocolate', '45000'),
(13, 'Bánh Black Forest', 'Bột cacao, anh đào, rượu Cherry, whipping cream, đường.', '45000'),
(14, 'Bánh Swedish Princess', 'Trứng, đường, kem tươi, sữa.', '45000'),
(15, 'Bánh Chocolate Fondant', 'Trứng, đường, chocolate, bột mì, bơ.', '45000'),
(16, 'Bánh Cream Brulee', 'Trứng, đường, caremeo, whipping crean.', '45000');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
