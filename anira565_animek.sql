-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Máy chủ: mysql06.dotvndns.vn:3306
-- Thời gian đã tạo: Th4 03, 2019 lúc 08:47 PM
-- Phiên bản máy phục vụ: 5.6.38
-- Phiên bản PHP: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `anira565_animek`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `vhn_admin`
--

CREATE TABLE `vhn_admin` (
  `id` int(6) UNSIGNED NOT NULL,
  `taikhoan` varchar(999) NOT NULL DEFAULT '',
  `matkhau` varchar(999) NOT NULL DEFAULT '',
  `thoigian` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `vhn_admin`
--

INSERT INTO `vhn_admin` (`id`, `taikhoan`, `matkhau`, `thoigian`) VALUES
(0, 'vohuunhan', 'vohuunhan', '2019-04-03 04:58:03');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `vhn_film`
--

CREATE TABLE `vhn_film` (
  `id` int(10) NOT NULL,
  `tenphim` varchar(999) NOT NULL DEFAULT '',
  `thumbnail` varchar(999) NOT NULL DEFAULT '',
  `namphim` varchar(999) NOT NULL DEFAULT '',
  `noidung` varchar(999) NOT NULL DEFAULT '',
  `theloai` varchar(999) NOT NULL DEFAULT '',
  `anhbia` varchar(999) NOT NULL DEFAULT '',
  `thoiluong` varchar(999) NOT NULL DEFAULT '',
  `luotxem` varchar(999) NOT NULL DEFAULT '',
  `tongsotap` varchar(255) DEFAULT NULL,
  `loaiphim` varchar(255) DEFAULT NULL,
  `linkphim` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `vhn_film`
--

INSERT INTO `vhn_film` (`id`, `tenphim`, `thumbnail`, `namphim`, `noidung`, `theloai`, `anhbia`, `thoiluong`, `luotxem`, `tongsotap`, `loaiphim`, `linkphim`) VALUES
(6, 'Kobayashi-san Chi no Maid Dragon', 'https://images2-focus-opensocial.googleusercontent.com/gadgets/proxy?container=focus&gadget=a&no_expand=1&refresh=604800&url=http://animehay.tv/uploads/images/2017/01/kobayashi-san-chi-no-maid-dragon-thumbnail.jpg', '2017', 'Kobayashi - một nữ kĩ sư phần mềm chăm chỉ, độc thân, sống một mình ở một khu chung cư. Một lần, cô tình cờ cứu giúp một con rồng, loài vật huyền thoại có thể hủy diệt cả thế giới. Có nợ thì phải trả, dù đó có là loài người thấp kém, Tohru đã được dạy như thế. Cô tâm niệm sẽ giúp đỡ hết mình cho ân nhân trong vai trò maid - một hầu gái, dù đôi khi mọi thứ có vẻ không suôn sẻ lắm... Hãy cùng 2o7Fansub theo dõi hành trình trở thành Hầu Gái của Tohru và những tình huống dở khóc dở cười mà Kobayashi phải trải qua nào!\r\n\r\n', 'Hài hước', 'https://images2-focus-opensocial.googleusercontent.com/gadgets/proxy?container=focus&gadget=a&no_expand=1&refresh=604800&url=http://animehay.tv/uploads/images/2017/01/kobayashi-san-chi-no-maid-dragon-cover.jpg', '', '31', '13', 'phimbo', 'kobayashi-san-chi-no-maid-dragon');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `vhn_tap`
--

CREATE TABLE `vhn_tap` (
  `id` int(10) NOT NULL,
  `sotap` varchar(300) NOT NULL,
  `player` varchar(600) NOT NULL,
  `linkphim` varchar(500) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `vhn_tap`
--

INSERT INTO `vhn_tap` (`id`, `sotap`, `player`, `linkphim`) VALUES
(1, '1', '0BwlqjR896kPUdTlqTEdOSEc1NFE', 'kobayashi-san-chi-no-maid-dragon'),
(2, '2', '0BwlqjR896kPUMHVSVW1rbDJoeUE', 'kobayashi-san-chi-no-maid-dragon'),
(3, '3', '0BwlqjR896kPUb1lmdHdpZHZuX1k', 'kobayashi-san-chi-no-maid-dragon');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `vhn_film`
--
ALTER TABLE `vhn_film`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `vhn_tap`
--
ALTER TABLE `vhn_tap`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `vhn_film`
--
ALTER TABLE `vhn_film`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `vhn_tap`
--
ALTER TABLE `vhn_tap`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
