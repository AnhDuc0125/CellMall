-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 16, 2022 lúc 06:31 PM
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
-- Cơ sở dữ liệu: `cellmall`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `brands`
--

CREATE TABLE `brands` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `brands`
--

INSERT INTO `brands` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Apple', '2022-04-21 11:02:06', '2022-04-21 11:02:06'),
(2, 'Samsung', '2022-04-21 11:02:06', '2022-04-21 11:02:06'),
(3, 'Asus', '2022-04-21 11:02:06', '2022-04-21 11:02:06'),
(4, 'Vivo', '2022-04-21 11:02:06', '2022-04-21 11:02:06'),
(5, 'Oppo', '2022-04-21 11:02:06', '2022-04-21 11:02:06'),
(6, 'Realme', '2022-04-21 11:02:06', '2022-04-21 11:02:06'),
(7, 'Xiaomi', '2022-04-21 11:02:06', '2022-04-21 11:02:06'),
(8, 'Nokia', '2022-04-21 11:02:06', '2022-04-21 11:02:06');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders`
--

CREATE TABLE `orders` (
  `cart_id` int(11) NOT NULL,
  `recipient` varchar(25) NOT NULL,
  `phone` varchar(16) DEFAULT NULL,
  `address` varchar(200) NOT NULL,
  `message` varchar(300) DEFAULT NULL,
  `total_price` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'On sale', '2022-04-21 05:08:47', '2022-04-21 05:48:44'),
(2, 'Best Seller', '2022-04-21 05:49:45', '2022-04-21 05:54:59'),
(3, 'Popular', '2022-04-21 05:54:49', '2022-04-21 05:54:49');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `name` varchar(25) DEFAULT NULL,
  `email` varchar(25) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  `description` text DEFAULT NULL,
  `feeling` varchar(25) DEFAULT NULL,
  `title` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `email`, `date`, `description`, `feeling`, `title`) VALUES
(1, 'Vũ Đức Anh', 'vuducanh0125@gmail.com', '2022-05-16 13:34:55', 'I love this design so much and i love the leader too', 'happy', 'So lovely web'),
(2, 'Doctor Strange', 'doctorstrange123@gmail.co', '2022-05-16 13:48:58', 'I lost my magic by using this web, I don\'t feel you have a nice target, stay away from my world. Get outtt...', 'sad', 'I hate this beautiful website i never seen before'),
(3, 'Elizabeth Olsen', 'scarletWitch@gmail.com', '2022-05-16 13:51:58', 'I love this colorful website, and finally, I can buy new smartphone by this site. Keep going boys!. Moah', 'happy', 'I love this madness site'),
(4, 'Harry Potter', 'harrythewitch@gmail.com', '2022-05-16 13:54:03', 'I love this site, these smartphone is so beautiful more than my magic. So I very like your website. Keep going', 'happy', 'So good site'),
(5, 'Chú gà mơ mộng', 'kfcKitchen@gmail.com', '2022-05-16 14:01:39', 'Tôi rất thích màu vàng của thóc, màu đen của đất trong trang web của bạn. Bạn giỏi quá, bạn là nhất, bạn là số một rồi đấy.\r\n', 'sad', 'Web đẹp, tốt, chất lượng!!!'),
(6, 'Boydetinh', 'detinhboy26@gmail.com', '2022-05-16 14:03:02', 'Em xin gửi tặng team anh một lời khen chân thành của em. Đội ngũ của anh thật là giỏi, thật đáng ghen tụ, fighting!!!', 'sad', 'Web đẹp quá ạ'),
(7, 'Cây xanh thân thiện', 'lemontree@gmail.com', '2022-05-16 14:06:57', 'Tôi không thể tượng tượng được trang web lại đẹp đến như vậy blah blah blah. Bạn là nhất là số một...\r\n', 'happy', 'Thật bất ngờ vì trang web!'),
(8, 'Nguyễn Phan Anh', 'phananhnguyen@gmail.com', '2022-05-16 14:08:53', 'Thiết kế đẹp, sang trọng mà không kém phần hoàn mĩ, ôi thật là đẹp, i love CellMall forever. Tôi thật đẹp trai', 'sad', 'Toàn điện thoại đẹp thôi!!!'),
(9, 'Anya Forger', 'tomteo1693@gmail.com', '2022-05-16 14:57:29', 'Em xin gửi tặng team anh một lời khen chân thành của em. Tuyệt vời web quá đã k thể chê được vào đâu k thể đẹp hơn được nữa ', 'happy', 'good!'),
(10, 'Scarlet Witch', 'ntdung@kcc.vn', '2022-05-16 15:00:55', 'đội ngũ làm việc quá chuyên nghiệp, thiết kế trang web vô cùng châu âu, quá chi tiết và dễ hiểu để tham khảo sản phẩm ', 'happy', 'quá tuyệt'),
(11, 'Gojo Satouru', 'dung.nt.1937@aptechlearni', '2022-05-16 15:02:29', 'thiết kế đẹp, chi tiết, tôi đã có 1 trải nghiệm tuyệt vời tại cellmall và hi vọng sau này có thể tiếp tục thấy cellmall duy trì và phát triển ', 'happy', 'đỉnh quá'),
(12, 'Uchiha Obito', 'bestboyhanoi@gmail.com', '2022-05-16 15:03:53', 'tôi đã mất niềm tin vào thế giới này nhưng trang web này là tia sáng dẫn tôi tới cuộc sống mới. Quá đẹp qúa tuyệt', 'sad', 'không ổn'),
(13, 'Nguyễn Tấn Dũng', 'kz90292003@gmail.com', '2022-05-16 15:05:18', 'trang web sơ sài hoàn thiện chưa tốt, cần cải thiện nhiều trong tương lai cả về thiết kế và nội dung', 'sad', 'bad exp');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order_items`
--

CREATE TABLE `order_items` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) DEFAULT NULL,
  `price` int(11) NOT NULL,
  `total_price` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `image` varchar(200) DEFAULT NULL,
  `price` int(100) NOT NULL,
  `description` text DEFAULT NULL,
  `star` int(11) DEFAULT NULL,
  `discount` int(11) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `brand_id` int(11) NOT NULL,
  `status_id` int(11) NOT NULL,
  `cate_id` int(11) DEFAULT NULL,
  `href_param` varchar(200) DEFAULT NULL,
  `storage` int(11) NOT NULL,
  `camera` varchar(300) NOT NULL,
  `chip` varchar(300) NOT NULL,
  `battery` int(11) NOT NULL,
  `resolution` varchar(50) NOT NULL,
  `old_price` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `title`, `image`, `price`, `description`, `star`, `discount`, `created_at`, `updated_at`, `brand_id`, `status_id`, `cate_id`, `href_param`, `storage`, `camera`, `chip`, `battery`, `resolution`, `old_price`) VALUES
(1, 'iPhone 11 64GB', 'https://image.cellphones.com.vn/358x/media/catalog/product/i/p/iphone_11_white_4_.png', 11790000, '<ul>\n    <li>Colors to match your personality - 6 eye-catching colors to choose from</li>\n    <li>Smooth, stable performance - A13 chip, 4GB RAM</li>\n    <li>Capture full frame - Dual camera supports wide angle, Night Mode</li>\n    <li>Use with confidence - IP68 waterproof, dustproof, Gorilla tempered glass</li>\n</ul>', NULL, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 1, 2, 'iPhone-11-64GB', 64, 'Dual Camera 12MP:\r\n- Wide-angle Camera: ƒ/1.8 aperture\r\n- Ultra-wide Camera: ƒ/2.4 aperture', 'A13 Bionic', 3110, '1792 x 828 pixels', 11790000),
(2, 'iPhone 11 128GB', 'https://image.cellphones.com.vn/358x/media/catalog/product/l/a/layer_20_1.jpg', 13700000, '<ul>\n    <li>Colors to match your personality - 6 eye-catching colors to choose from</li>\n    <li>Smooth, stable performance - A13 chip, 4GB RAM</li>\n    <li>Capture full frame - Dual camera supports wide angle, Night Mode</li>\n    <li>Use with confidence - IP68 waterproof, dustproof, Gorilla tempered glass</li>\n</ul>', NULL, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 1, 3, 'iPhone-11-128GB', 128, 'Dual Camera 12MP:\r\n- Wide-angle Camera: ƒ/1.8 aperture\r\n- Ultra-wide Camera: ƒ/2.4 aperture', 'A13 Bionic', 3110, '1792 x 828 pixels', 13700000),
(3, 'iPhone 11 Pro 512GB', 'https://image.cellphones.com.vn/358x/media/catalog/product/l/a/layer_23_2.jpg', 21600000, '<ul>\n    <li>Colors to match your personality - 6 eye-catching colors to choose from</li>\n    <li>Smooth, stable performance - A13 chip, 4GB RAM</li>\n    <li>Capture full frame - Dual camera supports wide angle, Night Mode</li>\n    <li>Use with confidence - IP68 waterproof, dustproof, Gorilla tempered glass</li>\n</ul>', NULL, 20, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 1, 1, 'iPhone-11-Pro-512GB', 512, '3 Camera 12MP:\r\n- Camera tele: ƒ/2.0 aperture\r\n- Wide-angle Camera: ƒ/1.8 aperture\r\n- Ultra-wide Camera: ƒ/2.4 aperture', 'A13 Bionic', 3046, '2436 x 1125 pixels', 27000000),
(4, 'iPhone 12 64GB', 'https://image.cellphones.com.vn/358x/media/catalog/product/i/p/iphone-12_2__3.jpg', 16800000, '<ul>\r\n    <li>Powerful, super fast with A14 chip, 4GB RAM, high speed 5G network</li>\r\n    <li>Brilliant, sharp, high-brightness - Premium OLED display, Super Retina XDR with HDR10, Dolby Vision support</li>\r\n    <li>Impressive night photography - Night Mode for 2 cameras, Deep Fusion algorithm, Smart HDR 3</li>\r\n    <li>Excellent durability - IP68 waterproof, dustproof, Ceramic Shield back</li>\r\n</ul>', NULL, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 1, 2, 'iPhone-12-64GB', 64, '12 MP, f/1.6, 26mm (wide), 1.4µm, dual pixels PDAF, OIS\r\n12 MP, f/2.4, 120˚, 13mm (ultrawide), 1/3.6\"', ' Apple A14 Bionic (5 nm)', 2815, '1170 x 2532 pixels', 16800000),
(5, 'iPhone 12 128GB', 'https://image.cellphones.com.vn/358x/media/catalog/product/i/p/iphone-12_7__6_3.jpg', 18800000, '<ul>\r\n    <li>Powerful, super fast with A14 chip, 4GB RAM, high speed 5G network</li>\r\n    <li>Brilliant, sharp, high-brightness - Premium OLED display, Super Retina XDR with HDR10, Dolby Vision support</li>\r\n    <li>Impressive night photography - Night Mode for 2 cameras, Deep Fusion algorithm, Smart HDR 3</li>\r\n    <li>Excellent durability - IP68 waterproof, dustproof, Ceramic Shield back</li>\r\n</ul>', NULL, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 1, 3, 'iPhone-12-128GB', 128, '12 MP, f/1.6, 26mm (wide), 1.4µm, dual pixels PDAF, OIS\r\n12 MP, f/2.4, 120˚, 13mm (ultrawide), 1/3.6\"', ' Apple A14 Bionic (5 nm)', 2815, '1170 x 2532 pixels', 18800000),
(6, 'iPhone 12 Pro 128GB', 'https://image.cellphones.com.vn/358x/media/catalog/product/i/p/iphone-12-pro-max_3__9.jpg', 18750000, '<ul>\r\n    <li>Powerful, super fast with A14 chip, 4GB RAM, high speed 5G network</li>\r\n    <li>Brilliant, sharp, high-brightness - Premium OLED display, Super Retina XDR with HDR10, Dolby Vision support</li>\r\n    <li>Impressive night photography - Night Mode for 2 cameras, Deep Fusion algorithm, Smart HDR 3</li>\r\n    <li>Excellent durability - IP68 waterproof, dustproof, Ceramic Shield back</li>\r\n</ul>', NULL, 25, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 1, 1, 'iPhone-12-Pro-128GB', 128, '12 MP, f/1.6, 26mm (wide), 1.4µm, dual pixels PDAF, OIS\r\n12 MP, f/2.0, 52mm (telephoto), 1/3.4\", 1.0µm, PDAF, OIS, 2x optical zoom\r\n12 MP, f/2.4, 120˚, 13mm (ultrawide), 1/3.6\"\r\nTOF 3D LiDAR scanner (depth)', ' Apple A14 Bionic (5 nm)', 2815, '1170 x 2532 pixels', 25000000),
(7, 'iPhone 12 Pro 256GB', 'https://image.cellphones.com.vn/358x/media/catalog/product/i/p/iphone-12-pro-max_3__9.jpg', 26500000, '<ul>\r\n    <li>Powerful, super fast with A14 chip, 4GB RAM, high speed 5G network</li>\r\n    <li>Brilliant, sharp, high-brightness - Premium OLED display, Super Retina XDR with HDR10, Dolby Vision support</li>\r\n    <li>Impressive night photography - Night Mode for 2 cameras, Deep Fusion algorithm, Smart HDR 3</li>\r\n    <li>Excellent durability - IP68 waterproof, dustproof, Ceramic Shield back</li>\r\n</ul>', NULL, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 1, 2, 'iPhone-12-Pro-256GB', 256, '12 MP, f/1.6, 26mm (wide), 1.4µm, dual pixels PDAF, OIS\r\n12 MP, f/2.0, 52mm (telephoto), 1/3.4\", 1.0µm, PDAF, OIS, 2x optical zoom\r\n12 MP, f/2.4, 120˚, 13mm (ultrawide), 1/3.6\"\r\nTOF 3D LiDAR scanner (depth)', ' Apple A14 Bionic (5 nm)', 2815, '1170 x 2532 pixels', 26500000),
(8, 'iPhone 12 Pro 512GB', 'https://image.cellphones.com.vn/358x/media/catalog/product/i/p/iphone-12-pro-max_3__9.jpg', 28500000, '<ul>\r\n    <li>Powerful, super fast with A14 chip, 4GB RAM, high speed 5G network</li>\r\n    <li>Brilliant, sharp, high-brightness - Premium OLED display, Super Retina XDR with HDR10, Dolby Vision support</li>\r\n    <li>Impressive night photography - Night Mode for 2 cameras, Deep Fusion algorithm, Smart HDR 3</li>\r\n    <li>Excellent durability - IP68 waterproof, dustproof, Ceramic Shield back</li>\r\n</ul>', NULL, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 1, 3, 'iPhone-12-Pro-512GB', 512, '12 MP, f/1.6, 26mm (wide), 1.4µm, dual pixels PDAF, OIS\r\n12 MP, f/2.0, 52mm (telephoto), 1/3.4\", 1.0µm, PDAF, OIS, 2x optical zoom\r\n12 MP, f/2.4, 120˚, 13mm (ultrawide), 1/3.6\"\r\nTOF 3D LiDAR scanner (depth)', ' Apple A14 Bionic (5 nm)', 2815, '1170 x 2532 pixels', 28500000),
(9, 'iPhone 13 128GB', 'https://image.cellphones.com.vn/358x/media/catalog/product/i/p/ip13-pro_2.jpg', 16050000, '<ul>\r\n    <li>Superior performance - Powerful Apple A15 Bionic chip, supports high-speed 5G network</li>\r\n    <li>Vivid display space - High-brightness, sharp 6.1\" Super Retina XDR display</li>\r\n    <li>The ultimate cinematic experience - 12MP dual cameras with optical image stabilization</li>\r\n    <li>Optimizing power - Fast charging 20W, full 50% battery in about 30 minutes</li>\r\n</ul>', NULL, 25, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 1, 1, 'iPhone-13-128GB', 128, 'Wide-angle Camera: 12MP, f/1.6\r\nUltra-wide Camera: 12MP, ƒ/2.4', 'Apple A15', 3200, '2532 x 1170 pixels', 21400000),
(10, 'iPhone 13 256GB', 'https://image.cellphones.com.vn/358x/media/catalog/product/i/p/iphone-13-04_2.jpg', 23500000, '<ul>\r\n    <li>Superior performance - Powerful Apple A15 Bionic chip, supports high-speed 5G network</li>\r\n    <li>Vivid display space - High-brightness, sharp 6.1\" Super Retina XDR display</li>\r\n    <li>The ultimate cinematic experience - 12MP dual cameras with optical image stabilization</li>\r\n    <li>Optimizing power - Fast charging 20W, full 50% battery in about 30 minutes</li>\r\n</ul>', NULL, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 1, 2, 'iPhone-13-256GB', 256, 'Wide-angle Camera: 12MP, f/1.6\r\nUltra-wide Camera: 12MP, ƒ/2.4', 'Apple A15', 3200, '2532 x 1170 pixels', 23500000),
(11, 'iPhone 13 Pro 128GB', 'https://image.cellphones.com.vn/358x/media/catalog/product/i/p/iphone_13-_pro-5.jpg', 27190000, '<ul>\r\n    <li>Superior performance - Powerful Apple A15 Bionic chip, supports high-speed 5G network</li>\r\n    <li>Vivid display space - High-brightness, sharp 6.1\" Super Retina XDR display</li>\r\n    <li>The ultimate cinematic experience - 12MP dual cameras with optical image stabilization</li>\r\n    <li>Optimizing power - Fast charging 20W, full 50% battery in about 30 minutes</li>\r\n</ul>', NULL, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 1, 3, 'iPhone-13-Pro-128GB', 128, 'Wide-angle Camera: 12MP, ƒ/1.5\r\nUltra-wide Camera: 12MP, ƒ/1.8\r\nCamera tele : 12MP, /2.8', 'Apple A15', 3095, '1170 x 2532 pixels', 27190000),
(12, 'iPhone 13 mini 128GB', 'https://image.cellphones.com.vn/358x/media/catalog/product/i/p/iphone-13-01_6.jpg', 17091000, '<ul>\r\n    <li>Superior performance - Powerful Apple A15 Bionic chip, supports high-speed 5G network</li>\r\n    <li>Vivid display space - High-brightness, sharp 6.1\" Super Retina XDR display</li>\r\n    <li>The ultimate cinematic experience - 12MP dual cameras with optical image stabilization</li>\r\n    <li>Optimizing power - Fast charging 20W, full 50% battery in about 30 minutes</li>\r\n</ul>', NULL, 10, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 1, 1, 'iPhone-13-mini-128GB', 128, 'Wide-angle Camera: 12MP, f/1.6\r\nUltra-wide Camera: 12MP, ƒ/2.4', 'Apple A15', 2406, '1080 x 2340 pixels', 18990000),
(13, 'iPhone 13 Pro Max 512GB ', 'https://image.cellphones.com.vn/358x/media/catalog/product/i/p/iphone_13-_pro-2_2_1_1.jpg', 38500000, '<ul>\r\n    <li>Superior performance - Powerful Apple A15 Bionic chip, supports high-speed 5G network</li>\r\n    <li>Vivid display space - High-brightness, sharp 6.1\" Super Retina XDR display</li>\r\n    <li>The ultimate cinematic experience - 12MP dual cameras with optical image stabilization</li>\r\n    <li>Optimizing power - Fast charging 20W, full 50% battery in about 30 minutes</li>\r\n</ul>', NULL, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 1, 2, 'iPhone-13-Pro-Max-512GB ', 512, 'Wide-angle Camera: 12MP, ƒ/1.5\r\nUltra-wide Camera: 12MP, ƒ/1.8\r\nCamera tele : 12MP, /2.8', 'Apple A15', 4325, '2778 x 1284 pixels', 38500000),
(14, 'Samsung Galaxy S22 Ultra', 'https://image.cellphones.com.vn/358x/media/catalog/product/s/m/sm-s908_galaxys22ultra_front_green_211119.jpg', 30990000, '<ul>\r\n    <li>The most powerful processor - Snapdragon 8 Gen 1 (4 nm)</li>\r\n    <li>Nightography - The ultimate night shot</li>\r\n    <li>First S-Pen on Galaxy S - Low latency, easy operation</li>\r\n    <li>Battery capacity regardless of day and night - 5000mAh battery, 45W fast charging</li>\r\n</ul>', NULL, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 2, 1, 3, 'Samsung-Galaxy-S22-Ultra', 128, '108 MP, f/1.8 wide-angle\r\n10 MP, f/4.9\r\n10 MP, f/2.4\r\n12 MP, f/2.2 ultra-wide', ' Qualcomm Snapdragon 8 Gen 1 (4 nm)', 5000, '1440 x 3088 pixels', 30990000),
(15, 'Samsung Galaxy A73', 'https://image.cellphones.com.vn/358x/media/catalog/product/s/a/samsung-galaxy-a73-1-600x600.jpg', 10392000, '<ul>\r\n    <li>The most powerful processor - Snapdragon 8 Gen 1 (4 nm)</li>\r\n    <li>Nightography - The ultimate night shot</li>\r\n    <li>First S-Pen on Galaxy S - Low latency, easy operation</li>\r\n    <li>Battery capacity regardless of day and night - 5000mAh battery, 45W fast charging</li>\r\n</ul>', NULL, 20, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 2, 1, 1, 'Samsung-Galaxy-A73', 256, 'Main Camera: 108 MP, f/1.8, PDAF, OIS\r\nUltra-wide Camera: 12 MP, f/2.2\r\nMacro Camera: 5 MP, f/2.4\r\nPortrait Camera: 5 MP, f/2.4', 'Snapdragon 778G 5G 8 cores', 5000, '1080 x 2400 pixels', 12990000),
(16, 'Samsung Galaxy S22', 'https://image.cellphones.com.vn/358x/media/catalog/product/s/m/sm-s901_galaxys22_front_pinkgold_211122.jpg', 21990000, '<ul>\r\n    <li>The most powerful processor - Snapdragon 8 Gen 1 (4 nm)</li>\r\n    <li>Nightography - The ultimate night shot</li>\r\n    <li>First S-Pen on Galaxy S - Low latency, easy operation</li>\r\n    <li>Battery capacity regardless of day and night - 5000mAh battery, 45W fast charging</li>\r\n</ul>', NULL, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 2, 1, 2, 'Samsung-Galaxy-S22', 128, 'Main Camera: 50MP, f/1.8\r\nUltra-wide Camera: 12MP, f/2.2\r\nCamera tele: 10MP, f/2.4', 'Chip Snapdragon 8 Gen 1', 3700, '2340 x 1080-pixels', 21990000),
(17, 'Samsung Galaxy A12', 'https://image.cellphones.com.vn/358x/media/catalog/product/s/a/samsung-galaxy-a12_2_.jpg', 3750000, '<ul>\r\n    <li>The most powerful processor - Snapdragon 8 Gen 1 (4 nm)</li>\r\n    <li>Nightography - The ultimate night shot</li>\r\n    <li>First S-Pen on Galaxy S - Low latency, easy operation</li>\r\n    <li>Battery capacity regardless of day and night - 5000mAh battery, 45W fast charging</li>\r\n</ul>', NULL, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 2, 1, 3, 'Samsung-Galaxy-A12', 128, 'Wide-angle Camera: 48 MP, f/2.0, 26mm, AF\r\nUltra-wide Camera: 5 MP, f/2.2, 123˚\r\nClose-up Camera: 2 MP, f/2.4', 'Helio G35', 5000, '720 x 1560 pixels', 3750000),
(18, 'Samsung Galaxy A72', 'https://image.cellphones.com.vn/358x/media/catalog/product/s/a/samsung-galaxy-a72-30.jpg', 9090000, '<ul>\r\n    <li>The most powerful processor - Snapdragon 8 Gen 1 (4 nm)</li>\r\n    <li>Nightography - The ultimate night shot</li>\r\n    <li>First S-Pen on Galaxy S - Low latency, easy operation</li>\r\n    <li>Battery capacity regardless of day and night - 5000mAh battery, 45W fast charging</li>\r\n</ul>', NULL, 10, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 2, 1, 1, 'Samsung-Galaxy-A72', 128, 'Wide-angle Camera: 64 MP, f/1.8, 26mm (wide), PDAF, OIS\r\nCamera tele: 8 MP, f/2.4, (telephoto), PDAF, OIS, Zoom 3X\r\nUltra-wide Camera: 12 MP, f/2.2, 123˚\r\nMacro Camera: 5 MP, f/2.4', 'Snapdragon 720G (8 nm)', 5000, '1080 x 2400 pixels', 10100000),
(19, 'Samsung Galaxy S22 Plus', 'https://image.cellphones.com.vn/358x/media/catalog/product/s/2/s22_4_1.jpg', 25990000, '<ul>\r\n    <li>The most powerful processor - Snapdragon 8 Gen 1 (4 nm)</li>\r\n    <li>Nightography - The ultimate night shot</li>\r\n    <li>First S-Pen on Galaxy S - Low latency, easy operation</li>\r\n    <li>Battery capacity regardless of day and night - 5000mAh battery, 45W fast charging</li>\r\n</ul>', NULL, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 2, 1, 2, 'Samsung-Galaxy-S22-Plus', 128, 'Main Camera: 50 MP, f/1.8\r\nUltra-wide Camera: 12 MP, f/2.2\r\nCamera tele:10 MP, f/2.4', 'Snapdragon 8 Gen 1', 4500, '1080 x 2340 pixels', 25990000),
(20, 'Samsung Galaxy A71', 'https://image.cellphones.com.vn/358x/media/catalog/product/s/a/samsung-galaxy-a71-thumblo_n-tra_ng-600x600_1_2_1.jpg', 7700000, '<ul>\r\n    <li>The most powerful processor - Snapdragon 8 Gen 1 (4 nm)</li>\r\n    <li>Nightography - The ultimate night shot</li>\r\n    <li>First S-Pen on Galaxy S - Low latency, easy operation</li>\r\n    <li>Battery capacity regardless of day and night - 5000mAh battery, 45W fast charging</li>\r\n</ul>', NULL, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 2, 1, 3, 'Samsung-Galaxy-A71', 128, ' Main Camera 64MP\r\nUltra-wide Camera 12MP\r\n2 Wide-angle Camera 5MP', 'Qualcomm Snapdragon 730', 4500, '1080 x 2400 pixels', 7700000),
(21, 'Samsung Galaxy Note 20', 'https://image.cellphones.com.vn/358x/media/catalog/product/m/i/mint_final.jpg', 1200000, '<ul>\r\n    <li>The most powerful processor - Snapdragon 8 Gen 1 (4 nm)</li>\r\n    <li>Nightography - The ultimate night shot</li>\r\n    <li>First S-Pen on Galaxy S - Low latency, easy operation</li>\r\n    <li>Battery capacity regardless of day and night - 5000mAh battery, 45W fast charging</li>\r\n</ul>', NULL, 20, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 2, 1, 1, 'Samsung-Galaxy-Note-20', 128, '12 MP, f/1.8, 26mm (wide), 1/1.76\", 1.8µm, Dual pixels PDAF, OIS\r\n64 MP, f/2.0, (telephoto), 1/1.72\", 0.8µm, PDAF, OIS, 3x hybrid optical zoom\r\n12 MP, f/2.2, 120˚, 13mm (ultrawide), 1/2.55\", 1.4µm', ' Exynos 990 (7 nm+)', 4300, '1080 x 2400 pixels', 1500000),
(22, 'Samsung Galaxy S20 Ultra', 'https://image.cellphones.com.vn/358x/media/catalog/product/6/3/637170935875912528_ss-s20-ultra-den-1.png', 16000000, '<ul>\r\n    <li>The most powerful processor - Snapdragon 8 Gen 1 (4 nm)</li>\r\n    <li>Nightography - The ultimate night shot</li>\r\n    <li>First S-Pen on Galaxy S - Low latency, easy operation</li>\r\n    <li>Battery capacity regardless of day and night - 5000mAh battery, 45W fast charging</li>\r\n</ul>', NULL, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 2, 1, 2, 'Samsung-Galaxy-S20-Ultra', 128, 'Main Camera: 108 MP, f/1.8, PDAF, OIS\r\nUltra-wide Camera:12 MP, f/2.2, AF\r\nCamera Zoom: 48 MP, f/3.6, PDAF, OIS, Zoom  10x\r\nCamera TOF: 0.3 MP', ' Exynos 990 (7 nm+)', 5000, '3200 x 1440 pixels', 16000000),
(23, 'Samsung Galaxy A52', 'https://image.cellphones.com.vn/358x/media/catalog/product/s/a/samsung-galaxy-a52-26.jpg', 8650000, '<ul>\r\n    <li>The most powerful processor - Snapdragon 8 Gen 1 (4 nm)</li>\r\n    <li>Nightography - The ultimate night shot</li>\r\n    <li>First S-Pen on Galaxy S - Low latency, easy operation</li>\r\n    <li>Battery capacity regardless of day and night - 5000mAh battery, 45W fast charging</li>\r\n</ul>', NULL, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 2, 1, 3, 'Samsung-Galaxy-A52', 128, 'Wide-angle Camera: 64 MP, f/1.8, 26mm, PDAF, OIS\r\nUltra-wide Camera: 12 MP, f/2.2, 123˚\r\nClose-up Camera: 5 MP, f/2.4', 'Snapdragon 720G (8 nm)', 4500, '1080 x 2400 pixels ', 8650000),
(24, 'Xiaomi POCO X3 Pro', 'https://image.cellphones.com.vn/358x/media/catalog/product/x/i/xiaomi-poco-x3-pro-2.jpg', 6000000, '<ul>\r\n    <li>Enhance your visual experience - 6.43\" Full HD+ AMOLED screen, DotDisplay technology</li>\r\n    <li>Impressive performance - Snapdragon 680 octa-core with 4GB RAM, 64GB memory</li>\r\n    <li>Conquer every moment - Cluster of 4 50MP cameras, many convenient shooting modes</li>\r\n    <li>Comfortable to use without worries - 5000 mAh battery, 33 W fast charging</li>\r\n</ul>', NULL, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 7, 1, 2, 'Xiaomi-POCO-X3-Pro', 256, ' 48MP + 8MP + 2MP + 2MP', 'Snapdragon 860 (7 nm)', 5160, '1080 x 2400 pixels ', 6000000),
(25, 'Xiaomi Mi 11 Lite 5G', 'https://image.cellphones.com.vn/358x/media/catalog/product/x/i/xiaomi-mi-11-lite-5g-2_10.png', 7490000, '<ul>\r\n    <li>Enhance your visual experience - 6.43\" Full HD+ AMOLED screen, DotDisplay technology</li>\r\n    <li>Impressive performance - Snapdragon 680 octa-core with 4GB RAM, 64GB memory</li>\r\n    <li>Conquer every moment - Cluster of 4 50MP cameras, many convenient shooting modes</li>\r\n    <li>Comfortable to use without worries - 5000 mAh battery, 33 W fast charging</li>\r\n</ul>', NULL, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 7, 1, 2, 'Xiaomi-Mi-11-Lite-5G', 128, 'Main Camera: 64 MP, f/1.8\r\nWide-angle Camera: 8 MP, f/2.2, 119˚\r\nMacro Camera: 5 MP, f/2.4', 'Snapdragon 780G (5 nm)', 4250, '1080 x 2400 pixels', 7490000),
(26, 'Xiaomi Poco X3 GT', 'https://image.cellphones.com.vn/358x/media/catalog/product/p/o/pocox3gt1-1600x1600.png', 6290000, '<ul>\r\n    <li>Enhance your visual experience - 6.43\" Full HD+ AMOLED screen, DotDisplay technology</li>\r\n    <li>Impressive performance - Snapdragon 680 octa-core with 4GB RAM, 64GB memory</li>\r\n    <li>Conquer every moment - Cluster of 4 50MP cameras, many convenient shooting modes</li>\r\n    <li>Comfortable to use without worries - 5000 mAh battery, 33 W fast charging</li>\r\n</ul>', NULL, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 7, 1, 3, 'Xiaomi-Poco-X3-GT', 128, 'Main Camera: 64 MP, f/1.79, PDAF\r\nUltra-wide Camera: 8 MP, f/2.2\r\nMacro Camera: 2 MP, f/2.4', 'MediaTek Dimensity 1100', 5000, '1080 x 2400 pixels', 6290000),
(27, 'Xiaomi Redmi 10', 'https://image.cellphones.com.vn/358x/media/catalog/product/0/0/004.jpg', 3187500, '<ul>\r\n    <li>Enhance your visual experience - 6.43\" Full HD+ AMOLED screen, DotDisplay technology</li>\r\n    <li>Impressive performance - Snapdragon 680 octa-core with 4GB RAM, 64GB memory</li>\r\n    <li>Conquer every moment - Cluster of 4 50MP cameras, many convenient shooting modes</li>\r\n    <li>Comfortable to use without worries - 5000 mAh battery, 33 W fast charging</li>\r\n</ul>', NULL, 15, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 7, 1, 1, 'Xiaomi-Redmi-10', 64, 'Main Camera: 50 MP, f/1.8\r\nUltra-wide Camera: 8MP, f/2.2\r\nMacro Camera: 2MP, f/2.4', 'MediaTek Helio G88', 5000, '1080 x 2400 pixels', 3750000),
(28, 'Xiaomi Redmi Note 10', 'https://image.cellphones.com.vn/358x/media/catalog/product/x/i/xiaomi-redmi-note-10_1.jpg', 4590000, '<ul>\r\n    <li>Enhance your visual experience - 6.43\" Full HD+ AMOLED screen, DotDisplay technology</li>\r\n    <li>Impressive performance - Snapdragon 680 octa-core with 4GB RAM, 64GB memory</li>\r\n    <li>Conquer every moment - Cluster of 4 50MP cameras, many convenient shooting modes</li>\r\n    <li>Comfortable to use without worries - 5000 mAh battery, 33 W fast charging</li>\r\n</ul>', NULL, 10, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 7, 1, 1, 'Xiaomi-Redmi-Note-10', 128, 'Wide-angle Camera: 48 MP, f/1.8, 26mm, 1/2.0\", 0.8µm, PDAF\r\nUltra-wide Camera: 8 MP, f/2.2, 118˚, 1/4.0\", 1.12µm\r\nMacro Camera: 2 MP, f/2.4', 'Snapdragon 678 (11 nm)', 5000, '1080 x 2400 pixels', 5100000),
(29, 'Xiaomi Redmi 9T', 'https://image.cellphones.com.vn/358x/media/catalog/product/x/i/xiaomi-redmi-9t_1__2.jpg', 3990000, '<ul>\r\n    <li>Enhance your visual experience - 6.43\" Full HD+ AMOLED screen, DotDisplay technology</li>\r\n    <li>Impressive performance - Snapdragon 680 octa-core with 4GB RAM, 64GB memory</li>\r\n    <li>Conquer every moment - Cluster of 4 50MP cameras, many convenient shooting modes</li>\r\n    <li>Comfortable to use without worries - 5000 mAh battery, 33 W fast charging</li>\r\n</ul>', NULL, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 7, 1, 3, 'Xiaomi-Redmi-9T', 64, '48 MP, f/1.8, 26mm (wide), 1/2.0\", 0.8µm, PDAF\r\n8 MP, f/2.2, 120˚ (ultrawide), 1/4.0\", 1.12µm\r\n2 MP, f/2.4, (macro)\r\n2 MP, f/2.4, (depth)', 'Qualcomm SM6115 Snapdragon 662 (11 nm)', 6000, '1080 x 2340 pixels', 3990000),
(30, 'Xiaomi Redmi Note 10 Pro', 'https://image.cellphones.com.vn/358x/media/catalog/product/x/i/xiaomi-redmi-note-10-pro_2_.png', 6090000, '<ul>\r\n    <li>Enhance your visual experience - 6.43\" Full HD+ AMOLED screen, DotDisplay technology</li>\r\n    <li>Impressive performance - Snapdragon 680 octa-core with 4GB RAM, 64GB memory</li>\r\n    <li>Conquer every moment - Cluster of 4 50MP cameras, many convenient shooting modes</li>\r\n    <li>Comfortable to use without worries - 5000 mAh battery, 33 W fast charging</li>\r\n</ul>', NULL, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 7, 1, 2, 'Xiaomi-Redmi-Note-10-Pro', 128, 'Wide-angle Camera: 108 MP, f/1.9, 26mm , 1/1.52\", 0.7µm, dual pixels PDAF\r\nUltra-wide Camera: 8 MP, f/2.2, 118˚, 1/4.0\", 1.12µm\r\nMacro Camera: 5 MP, f/2.4, AF', 'Snapdragon 732G (8 nm)', 5020, '1080 x 2400 pixels', 6090000),
(31, 'Xiaomi Mi 10T Pro', 'https://image.cellphones.com.vn/358x/media/catalog/product/x/i/xiaomi-mi-10t-pro_2_.jpg', 10080000, '<ul>\r\n    <li>Enhance your visual experience - 6.43\" Full HD+ AMOLED screen, DotDisplay technology</li>\r\n    <li>Impressive performance - Snapdragon 680 octa-core with 4GB RAM, 64GB memory</li>\r\n    <li>Conquer every moment - Cluster of 4 50MP cameras, many convenient shooting modes</li>\r\n    <li>Comfortable to use without worries - 5000 mAh battery, 33 W fast charging</li>\r\n</ul>', NULL, 10, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 7, 1, 1, 'Xiaomi-Mi-10T-Pro', 256, '108 MP, f/1.7, 26mm (wide), 1/1.33\", 0.8µm, PDAF, OIS\r\n13 MP, f/2.4, 123˚ (ultrawide), 1.12µm\r\n5 MP, f/2.4, (macro), AF', 'Qualcomm Snapdragon™ 865 5G', 5000, '1080 x 2400 pixels ', 11200000),
(32, 'Xiaomi Redmi 10', 'https://image.cellphones.com.vn/358x/media/catalog/product/0/0/001_2.jpg', 4050000, '<ul>\r\n    <li>Enhance your visual experience - 6.43\" Full HD+ AMOLED screen, DotDisplay technology</li>\r\n    <li>Impressive performance - Snapdragon 680 octa-core with 4GB RAM, 64GB memory</li>\r\n    <li>Conquer every moment - Cluster of 4 50MP cameras, many convenient shooting modes</li>\r\n    <li>Comfortable to use without worries - 5000 mAh battery, 33 W fast charging</li>\r\n</ul>', NULL, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 7, 1, 3, 'Xiaomi-Redmi-10', 128, 'Main Camera: 50 MP, f/1.8\r\nUltra-wide Camera: 8MP, f/2.2\r\nMacro Camera: 2MP, f/2.4', 'MediaTek Helio G88', 5001, '1080 x 2400 pixels', 4050000),
(33, 'Xiaomi Redmi 9A', 'https://image.cellphones.com.vn/358x/media/catalog/product/r/e/redmi_9a_0005_background.jpg', 2300000, '<ul>\r\n    <li>Enhance your visual experience - 6.43\" Full HD+ AMOLED screen, DotDisplay technology</li>\r\n    <li>Impressive performance - Snapdragon 680 octa-core with 4GB RAM, 64GB memory</li>\r\n    <li>Conquer every moment - Cluster of 4 50MP cameras, many convenient shooting modes</li>\r\n    <li>Comfortable to use without worries - 5000 mAh battery, 33 W fast charging</li>\r\n</ul>', NULL, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 7, 1, 2, 'Xiaomi-Redmi-9A', 64, '13MP ƒ/2.2, AF,Single Flash', 'MediaTek Helio G25 (12 nm)', 5000, '720 x 1600 pixels', 2300000),
(34, 'OPPO Reno7 Z', 'https://image.cellphones.com.vn/358x/media/catalog/product/c/o/combo_product_-_rainbow_spectrum_-_reno7_z.png', 8811000, '<ul>\r\n    <li>Smooth experience of tasks - Powerful Snapdragon 695 processor 8 GB RAM</li>\r\n    <li>Endless all-day power - 4500 mAh large battery capacity and 60W fast charging</li>\r\n    <li>Complete every moment - Cluster of 3 rear cameras with up to 64MP sensor, taking professional portraits</li>\r\n    <li>Screen display sharp, vivid colors - 6.43 AMOLED screen, 60 Hz refresh rate</li>\r\n</ul>', NULL, 10, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 5, 1, 1, 'OPPO-Reno7-Z', 128, 'Triple Camera 64 MP &  2 MP, 2 MP', 'Snapdragon 695 5G 8 ', 4500, '1080 x 2400 pixels', 9790000),
(35, 'OPPO Reno4 Pro', 'https://image.cellphones.com.vn/358x/media/catalog/product/_/0/_0001_combo_-_reno4_pro_-_white.jpg', 7990000, '<ul>\r\n    <li>Smooth experience of tasks - Powerful Snapdragon 695 processor 8 GB RAM</li>\r\n    <li>Endless all-day power - 4500 mAh large battery capacity and 60W fast charging</li>\r\n    <li>Complete every moment - Cluster of 3 rear cameras with up to 64MP sensor, taking professional portraits</li>\r\n    <li>Screen display sharp, vivid colors - 6.43 AMOLED screen, 60 Hz refresh rate</li>\r\n</ul>', NULL, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 5, 1, 2, 'OPPO-Reno4-Pro', 256, '48 MP (IMX586) + 8 MP + 2 MP + 2 MP, 4 camera', 'Qualcomm SM7125 Snapdragon 720G (8 nm)', 4000, '1080 x 2400 pixels', 7990000),
(36, 'OPPO Find X3 Pro', 'https://image.cellphones.com.vn/358x/media/catalog/product/o/p/oppo-find-x3-pro-5g-3_2.jpg', 18790000, '<ul>\r\n    <li>Smooth experience of tasks - Powerful Snapdragon 695 processor 8 GB RAM</li>\r\n    <li>Endless all-day power - 4500 mAh large battery capacity and 60W fast charging</li>\r\n    <li>Complete every moment - Cluster of 3 rear cameras with up to 64MP sensor, taking professional portraits</li>\r\n    <li>Screen display sharp, vivid colors - 6.43 AMOLED screen, 60 Hz refresh rate</li>\r\n</ul>', NULL, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 5, 1, 3, 'OPPO-Find-X3-Pro', 256, 'Main Camera: 50 MP, f/1.8, 1/1.56\", 1.0µm, PDAF, OIS\r\nCamera tele: 13 MP, f/2.4, 52mm PDAF, zoom 5x\r\nCamera Wide-angle: 50 MP, f/2.2, 110˚, 1/1.56\", 1.0µm, omnidirectional PDAF\r\nMacro Camera: 3 MP, f/3.0', 'Snapdragon 888 (5 nm)', 4500, '1440 x 3216 pixels', 18790000),
(37, 'OPPO A95', 'https://image.cellphones.com.vn/358x/media/catalog/product/c/o/combo_a95_-_en_-_cmyk.jpg', 6290000, '<ul>\r\n    <li>Smooth experience of tasks - Powerful Snapdragon 695 processor 8 GB RAM</li>\r\n    <li>Endless all-day power - 4500 mAh large battery capacity and 60W fast charging</li>\r\n    <li>Complete every moment - Cluster of 3 rear cameras with up to 64MP sensor, taking professional portraits</li>\r\n    <li>Screen display sharp, vivid colors - 6.43 AMOLED screen, 60 Hz refresh rate</li>\r\n</ul>', NULL, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 5, 1, 3, 'OPPO-A95', 128, 'Main Camera: 48MP, f/1.7, AF\r\nPortrait Camera: 2MP, f/2.4\r\nMacro Camera: 2MP, f/2.4', 'Qualcomm® Snapdragon™ 662', 5000, '1080 x 2400 pixels', 6290000),
(38, 'OPPO Reno6 Z', 'https://image.cellphones.com.vn/358x/media/catalog/product/o/p/oppo_reno6.jpg', 7690000, '<ul>\r\n    <li>Smooth experience of tasks - Powerful Snapdragon 695 processor 8 GB RAM</li>\r\n    <li>Endless all-day power - 4500 mAh large battery capacity and 60W fast charging</li>\r\n    <li>Complete every moment - Cluster of 3 rear cameras with up to 64MP sensor, taking professional portraits</li>\r\n    <li>Screen display sharp, vivid colors - 6.43 AMOLED screen, 60 Hz refresh rate</li>\r\n</ul>', NULL, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 5, 1, 2, 'OPPO-Reno6-Z', 128, '64MP (Main) + 8MP (Wide-angle) + 2MP (Marco)', 'MediaTek Dimensity 800U 5G 8 cores', 4310, '1080 x 2400 pixels', 7690000),
(39, 'OPPO A55', 'https://image.cellphones.com.vn/358x/media/catalog/product/c/o/combo_a55_-_xanh_-_cmyk.jpg', 4041000, '<ul>\r\n    <li>Smooth experience of tasks - Powerful Snapdragon 695 processor 8 GB RAM</li>\r\n    <li>Endless all-day power - 4500 mAh large battery capacity and 60W fast charging</li>\r\n    <li>Complete every moment - Cluster of 3 rear cameras with up to 64MP sensor, taking professional portraits</li>\r\n    <li>Screen display sharp, vivid colors - 6.43 AMOLED screen, 60 Hz refresh rate</li>\r\n</ul>', NULL, 10, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 5, 1, 1, 'OPPO-A55', 64, 'Camera Wide-angle: 50 MP, f/2.2, 25mm 1/3.06\", 1.12µm, PDAF\r\nMacro Camera: 2 MP, f/2.4', 'MediaTek Helio G35', 5000, '720 x 1600 pixels', 4490000),
(40, 'OPPO A16K', 'https://image.cellphones.com.vn/358x/media/catalog/product/c/o/combo_a16k_-_black.jpg', 3190000, '<ul>\r\n    <li>Smooth experience of tasks - Powerful Snapdragon 695 processor 8 GB RAM</li>\r\n    <li>Endless all-day power - 4500 mAh large battery capacity and 60W fast charging</li>\r\n    <li>Complete every moment - Cluster of 3 rear cameras with up to 64MP sensor, taking professional portraits</li>\r\n    <li>Screen display sharp, vivid colors - 6.43 AMOLED screen, 60 Hz refresh rate</li>\r\n</ul>', NULL, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 5, 1, 2, 'OPPO-A16K', 64, '13 MP, f/2.2', 'Helio G35 8 cores', 4230, '720 x 1600 pixels', 3190000),
(41, 'OPPO Reno6 5G', 'https://image.cellphones.com.vn/358x/media/catalog/product/r/e/reno6_1.jpg', 10790000, '<ul>\r\n    <li>Smooth experience of tasks - Powerful Snapdragon 695 processor 8 GB RAM</li>\r\n    <li>Endless all-day power - 4500 mAh large battery capacity and 60W fast charging</li>\r\n    <li>Complete every moment - Cluster of 3 rear cameras with up to 64MP sensor, taking professional portraits</li>\r\n    <li>Screen display sharp, vivid colors - 6.43 AMOLED screen, 60 Hz refresh rate</li>\r\n</ul>', NULL, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 5, 1, 2, 'OPPO-Reno6-5G', 128, 'Camera Wide-angle: 64 MP, f/1.7, PDAF\r\nUltra-wide Camera: 8 MP, f/2.2\r\nMacro Camera: 2 MP, f/2.4', 'MT6877 Dimensity 900 5G (6 nm)', 4300, '1080 x 2400 pixels', 10790000),
(42, 'OPPO Reno7', 'https://image.cellphones.com.vn/358x/media/catalog/product/c/o/combo_product_-_black_-_reno7_5g.png', 11990000, '<ul>\r\n    <li>Smooth experience of tasks - Powerful Snapdragon 695 processor 8 GB RAM</li>\r\n    <li>Endless all-day power - 4500 mAh large battery capacity and 60W fast charging</li>\r\n    <li>Complete every moment - Cluster of 3 rear cameras with up to 64MP sensor, taking professional portraits</li>\r\n    <li>Screen display sharp, vivid colors - 6.43 AMOLED screen, 60 Hz refresh rate</li>\r\n</ul>', NULL, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 5, 1, 3, 'OPPO-Reno7', 256, 'Main Camera: 64 MP, f/1.7, PDAF\r\nUltra-wide Camera: 8 MP, f/2.25, 120˚\r\nMacro Camera: 2 MP, f/2.4', 'MediaTek Dimensity 900', 4500, '1080 x 2400 pixels', 11990000),
(43, 'OPPO Reno5', 'https://image.cellphones.com.vn/358x/media/catalog/product/o/p/oppo-reno-5-5g_2_.jpg', 7192000, '<ul>\r\n    <li>Smooth experience of tasks - Powerful Snapdragon 695 processor 8 GB RAM</li>\r\n    <li>Endless all-day power - 4500 mAh large battery capacity and 60W fast charging</li>\r\n    <li>Complete every moment - Cluster of 3 rear cameras with up to 64MP sensor, taking professional portraits</li>\r\n    <li>Screen display sharp, vivid colors - 6.43 AMOLED screen, 60 Hz refresh rate</li>\r\n</ul>', NULL, 20, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 5, 1, 1, 'OPPO-Reno5', 128, '64 MP + 8 MP + 2 MP + 2 MP', 'Qualcomm SM7250 Snapdragon 765G (7 nm)', 4300, '1080 x 2400 pixels', 8990000),
(44, 'Nokia G21', 'https://image.cellphones.com.vn/358x/media/catalog/product/t/h/thumb_602966_default_big.jpg', 3591000, '<ul>\r\n    <li>Endless entertainment space - 6.5  IPS LCD large screen, 90 Hz refresh rate</li>\r\n    <li>Stable performance, handling common tasks - Unisoc T606 Chipset (12 nm), 4 GB RAM</li>\r\n    <li>Three super-sharp 50MP cameras that capture the whole landscape with multiple shooting modes</li>\r\n    <li>5050mAh battery capacity, enough power for all day use, 18W fast charging</li>\r\n</ul>', NULL, 10, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 8, 1, 1, 'Nokia-G21', 128, '50 MP + 2 MP + 2 MP', 'Unisoc T606 (12 nm)', 5050, '1600 x 720 pixels', 3990000),
(45, 'Nokia G10', 'https://image.cellphones.com.vn/358x/media/catalog/product/t/_/t_i_xu_ng_3.png', 2990000, '<ul>\r\n    <li>Endless entertainment space - 6.5  IPS LCD large screen, 90 Hz refresh rate</li>\r\n    <li>Stable performance, handling common tasks - Unisoc T606 Chipset (12 nm), 4 GB RAM</li>\r\n    <li>Three super-sharp 50MP cameras that capture the whole landscape with multiple shooting modes</li>\r\n    <li>5050mAh battery capacity, enough power for all day use, 18W fast charging</li>\r\n</ul>', NULL, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 8, 1, 2, 'Nokia-G10', 64, 'Main Camera: 13 MP\r\nCamera cảm biến độ sâu: 2 MP\r\nMacro Camera: 2 MP', 'Mediatek G25 8x A53 2.0GHz', 5050, '1600 x 720 pixels', 2990000),
(46, 'Nokia G50', 'https://image.cellphones.com.vn/358x/media/catalog/product/n/o/nokia-g50-4_1.jpeg', 4990000, '<ul>\r\n    <li>Endless entertainment space - 6.5  IPS LCD large screen, 90 Hz refresh rate</li>\r\n    <li>Stable performance, handling common tasks - Unisoc T606 Chipset (12 nm), 4 GB RAM</li>\r\n    <li>Three super-sharp 50MP cameras that capture the whole landscape with multiple shooting modes</li>\r\n    <li>5050mAh battery capacity, enough power for all day use, 18W fast charging</li>\r\n</ul>', NULL, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 8, 1, 3, 'Nokia-G50', 128, 'Wide-angle Camera: 48 MP, PDAF\r\nUltra-wide Camera: 5 MP\r\nMacro Camera: 2 M', 'Snapdragon 480 8 cores 5G', 5000, '720 x 1560 pixels', 4990000),
(47, 'Nokia C30', 'https://image.cellphones.com.vn/358x/media/catalog/product/6/3/637649100605269420_nokia-c30-xanh-1_5_2.jpg', 2290000, '<ul>\r\n    <li>Endless entertainment space - 6.5  IPS LCD large screen, 90 Hz refresh rate</li>\r\n    <li>Stable performance, handling common tasks - Unisoc T606 Chipset (12 nm), 4 GB RAM</li>\r\n    <li>Three super-sharp 50MP cameras that capture the whole landscape with multiple shooting modes</li>\r\n    <li>5050mAh battery capacity, enough power for all day use, 18W fast charging</li>\r\n</ul>', NULL, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 8, 1, 3, 'Nokia-C30', 64, '13MP AF + 2MP', 'SC9863A 8 cores 1.6GHz', 6000, '720 x 1600 pixels', 2290000),
(48, 'Nokia C20', 'https://image.cellphones.com.vn/358x/media/catalog/product/n/o/nokia-c20-2.jpg', 1990000, '<ul>\r\n    <li>Endless entertainment space - 6.5  IPS LCD large screen, 90 Hz refresh rate</li>\r\n    <li>Stable performance, handling common tasks - Unisoc T606 Chipset (12 nm), 4 GB RAM</li>\r\n    <li>Three super-sharp 50MP cameras that capture the whole landscape with multiple shooting modes</li>\r\n    <li>5050mAh battery capacity, enough power for all day use, 18W fast charging</li>\r\n</ul>', NULL, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 8, 1, 2, 'Nokia-C20', 64, '5 MP', 'Unisoc SC9863A', 2950, '720 x 1600 pixels', 1990000),
(49, 'Nokia 5.4', 'https://image.cellphones.com.vn/358x/media/catalog/product/n/o/nokia-5-4-xanh_1.png', 3591000, '<ul>\r\n    <li>Endless entertainment space - 6.5  IPS LCD large screen, 90 Hz refresh rate</li>\r\n    <li>Stable performance, handling common tasks - Unisoc T606 Chipset (12 nm), 4 GB RAM</li>\r\n    <li>Three super-sharp 50MP cameras that capture the whole landscape with multiple shooting modes</li>\r\n    <li>5050mAh battery capacity, enough power for all day use, 18W fast charging</li>\r\n</ul>', NULL, 10, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 8, 1, 1, 'Nokia-5.4', 128, '48 MP, f/1.8, (wide), PDAF\r\n5 MP, 13mm (ultrawide)\r\n2 MP, (macro)\r\n2 MP, (depth)', 'Qualcomm SM6115 Snapdragon 662 (11 nm)', 4000, '720 x 1560 pixels', 3990000),
(50, 'Nokia 3.4', 'https://image.cellphones.com.vn/358x/media/catalog/product/n/o/nokia-34_1_.jpg', 3321000, '<ul>\r\n    <li>Endless entertainment space - 6.5  IPS LCD large screen, 90 Hz refresh rate</li>\r\n    <li>Stable performance, handling common tasks - Unisoc T606 Chipset (12 nm), 4 GB RAM</li>\r\n    <li>Three super-sharp 50MP cameras that capture the whole landscape with multiple shooting modes</li>\r\n    <li>5050mAh battery capacity, enough power for all day use, 18W fast charging</li>\r\n</ul>', NULL, 10, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 8, 1, 1, 'Nokia-3.4', 64, '13 MP, (wide), PDAF\r\n5 MP, (ultrawide)\r\n2 MP, (depth)', 'Qualcomm SM4250 Snapdragon 460 (11 nm)', 4000, '720 x 1560 pixels', 3690000),
(51, 'Nokia 2.4', 'https://image.cellphones.com.vn/358x/media/catalog/product/n/o/nokia-2.4_1_.jpg', 2690000, '<ul>\r\n    <li>Endless entertainment space - 6.5  IPS LCD large screen, 90 Hz refresh rate</li>\r\n    <li>Stable performance, handling common tasks - Unisoc T606 Chipset (12 nm), 4 GB RAM</li>\r\n    <li>Three super-sharp 50MP cameras that capture the whole landscape with multiple shooting modes</li>\r\n    <li>5050mAh battery capacity, enough power for all day use, 18W fast charging</li>\r\n</ul>', NULL, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 8, 1, 3, 'Nokia-2.4', 64, '13 MP + 2 MP', 'MediaTek Helio P22', 4500, '720 x 1520 pixels', 2690000),
(52, 'Realme 9 Pro', 'https://image.cellphones.com.vn/358x/media/catalog/product/r/e/real_me_pro_002.jpg', 6990000, '<ul>\r\n    <li>Immerse yourself in every frame - 6.6 IPS LCD display, 1080 x 2412 pixels</li>\r\n    <li>Strong Performance, Huge Memory - Qualcomm Snapdragon 695 Chipset, 8GB RAM</li>\r\n    <li>Capture every moment - 64MP main camera, 4K video recording</li>\r\n    <li>Energy all day long - Huge battery with 5000mAh capacity</li>\r\n</ul>', NULL, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 6, 1, 3, 'Realme-9-Pro', 128, 'Main Camera: 64MP, f/1.79\r\nWide-angle Camera: 8MP, f/2.2\r\nMacro Camera: 2MP, f/2.4', 'Qualcomm Snapdragon 695 5G', 5000, '2412 x 1080 pixels', 6990000),
(53, 'Realme C25', 'https://image.cellphones.com.vn/358x/media/catalog/product/r/e/realme-c25-1.jpg', 4690000, '<ul>\r\n    <li>Immerse yourself in every frame - 6.6 IPS LCD display, 1080 x 2412 pixels</li>\r\n    <li>Strong Performance, Huge Memory - Qualcomm Snapdragon 695 Chipset, 8GB RAM</li>\r\n    <li>Capture every moment - 64MP main camera, 4K video recording</li>\r\n    <li>Energy all day long - Huge battery with 5000mAh capacity</li>\r\n</ul>', NULL, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 6, 1, 2, 'Realme-C25', 128, 'Main Camera: 48MP + f/1.8\r\nPortrait Camera: 2MP + f/2.4\r\nSuper Macro Camera: 2MP + f/2.4', 'MediaTek G70', 6000, '720 x 1600 pixels', 4690000),
(54, 'Realme 8', 'https://image.cellphones.com.vn/358x/media/catalog/product/r/e/realme-8-1_2.png', 5391000, '<ul>\r\n    <li>Immerse yourself in every frame - 6.6 IPS LCD display, 1080 x 2412 pixels</li>\r\n    <li>Strong Performance, Huge Memory - Qualcomm Snapdragon 695 Chipset, 8GB RAM</li>\r\n    <li>Capture every moment - 64MP main camera, 4K video recording</li>\r\n    <li>Energy all day long - Huge battery with 5000mAh capacity</li>\r\n</ul>', NULL, 10, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 6, 1, 1, 'Realme-8', 128, 'Main Camera: 64 MP, f/1.8, 26mm, 1/1.73\", 0.8µm, PDAF\r\nUltra-wide Camera: 8 MP, f/2.3, 119˚, 16mm, 1/4.0\", 1.12µm', 'Mediatek Helio G95 (12 nm)', 5000, '1080 x 2400 pixels', 5990000),
(55, 'Realme 9 Pro Plus', 'https://image.cellphones.com.vn/358x/media/catalog/product/9/_/9_ro_plus.png', 7301500, '<ul>\r\n    <li>Immerse yourself in every frame - 6.6 IPS LCD display, 1080 x 2412 pixels</li>\r\n    <li>Strong Performance, Huge Memory - Qualcomm Snapdragon 695 Chipset, 8GB RAM</li>\r\n    <li>Capture every moment - 64MP main camera, 4K video recording</li>\r\n    <li>Energy all day long - Huge battery with 5000mAh capacity</li>\r\n</ul>', NULL, 15, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 6, 1, 1, 'Realme-9-Pro-Plus', 128, 'Main Camera: 50MP, f/1.8\r\nMacro Camera: 2MP, f/2.4\r\nWide-angle Camera: 8MP, 119°, f/2.2', 'MediaTek Dimensity 920 5G', 4500, '1080 x 2400 pixels', 8590000),
(56, 'Realme 6', 'https://image.cellphones.com.vn/358x/media/catalog/product/6/3/637202043964930819_realme-6-trang-1.png', 4411500, '<ul>\r\n    <li>Immerse yourself in every frame - 6.6 IPS LCD display, 1080 x 2412 pixels</li>\r\n    <li>Strong Performance, Huge Memory - Qualcomm Snapdragon 695 Chipset, 8GB RAM</li>\r\n    <li>Capture every moment - 64MP main camera, 4K video recording</li>\r\n    <li>Energy all day long - Huge battery with 5000mAh capacity</li>\r\n</ul>', NULL, 15, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 6, 1, 1, 'Realme-6', 128, '64 MP + 8 MP, 2 MP, 2 MP', 'Mediatek Helio G90T', 4300, '1080 x 2400 pixels', 5190000),
(57, 'Realme C21Y', 'https://image.cellphones.com.vn/358x/media/catalog/product/r/e/realme-c21y.jpg', 2790000, '<ul>\r\n    <li>Immerse yourself in every frame - 6.6 IPS LCD display, 1080 x 2412 pixels</li>\r\n    <li>Strong Performance, Huge Memory - Qualcomm Snapdragon 695 Chipset, 8GB RAM</li>\r\n    <li>Capture every moment - 64MP main camera, 4K video recording</li>\r\n    <li>Energy all day long - Huge battery with 5000mAh capacity</li>\r\n</ul>', NULL, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 6, 1, 2, 'Realme-C21Y', 64, '13 MP + 2 MP, 2 MP', 'Spreadtrum T610 8 cores', 5000, '720 x 1600 pixels', 2790000),
(58, 'Realme C15', 'https://image.cellphones.com.vn/358x/media/catalog/product/6/3/637400868092278961_realme-c15-xanh-1_2.png', 3490000, '<ul>\r\n    <li>Immerse yourself in every frame - 6.6 IPS LCD display, 1080 x 2412 pixels</li>\r\n    <li>Strong Performance, Huge Memory - Qualcomm Snapdragon 695 Chipset, 8GB RAM</li>\r\n    <li>Capture every moment - 64MP main camera, 4K video recording</li>\r\n    <li>Energy all day long - Huge battery with 5000mAh capacity</li>\r\n</ul>', NULL, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 6, 1, 3, 'Realme-C15', 64, '13 MP, f/2.2, (wide), PDAF\r\n8 MP, f/2.3, 119˚ (ultrawide)\r\n2 MP B/W, f/2.4\r\n2 MP, f/2.4', 'Qualcomm SM4250 Snapdragon 460 (11 nm)', 6000, '720 x 1560 pixels', 3490000),
(59, 'Realme 7', 'https://image.cellphones.com.vn/358x/media/catalog/product/r/e/realme-7-1.jpg', 5590000, '<ul>\r\n    <li>Immerse yourself in every frame - 6.6 IPS LCD display, 1080 x 2412 pixels</li>\r\n    <li>Strong Performance, Huge Memory - Qualcomm Snapdragon 695 Chipset, 8GB RAM</li>\r\n    <li>Capture every moment - 64MP main camera, 4K video recording</li>\r\n    <li>Energy all day long - Huge battery with 5000mAh capacity</li>\r\n</ul>', NULL, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 6, 1, 2, 'Realme-7', 128, ' Main Camera: 64MP + f/1.8 Sony IMX682\r\nWide-angle Camera: 8MP + f/2.3\r\nSuper Macro Camera: 2MP + f/2.4\r\nPortrait Camera: 2MP + f/2.4', ' MediaTek Helio G95 Cortex-A76', 5000, '1080 x 2400 pixels', 5590000),
(60, 'Realme 9i', 'https://image.cellphones.com.vn/358x/media/catalog/product/t/_/t_i_xu_ng_2__3_6.png', 5390000, '<ul>\r\n    <li>Immerse yourself in every frame - 6.6 IPS LCD display, 1080 x 2412 pixels</li>\r\n    <li>Strong Performance, Huge Memory - Qualcomm Snapdragon 695 Chipset, 8GB RAM</li>\r\n    <li>Capture every moment - 64MP main camera, 4K video recording</li>\r\n    <li>Energy all day long - Huge battery with 5000mAh capacity</li>\r\n</ul>', NULL, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 6, 1, 2, 'Realme-9i', 128, 'Main Camera: 50 MP, f/1.8, PDAF\r\nMacro Camera: 2 MP, f/2.4\r\nPortrait Camera: 2 MP, f/2.4', 'Qualcomm SM6225 Snapdragon 680 4G (6 nm)', 5000, '1081 x 2400 pixels', 5390000),
(61, 'Realme C11', 'https://image.cellphones.com.vn/358x/media/catalog/product/d/o/download_15_5.jpg', 2490000, '<ul>\r\n    <li>Immerse yourself in every frame - 6.6 IPS LCD display, 1080 x 2412 pixels</li>\r\n    <li>Strong Performance, Huge Memory - Qualcomm Snapdragon 695 Chipset, 8GB RAM</li>\r\n    <li>Capture every moment - 64MP main camera, 4K video recording</li>\r\n    <li>Energy all day long - Huge battery with 5000mAh capacity</li>\r\n</ul>', NULL, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 6, 1, 3, 'Realme-C11', 64, '8MP + f/2.0', 'Unisoc SC9863A', 5000, '750 x 1560 pixels', 2490000),
(62, 'ASUS ROG Phone 5', 'https://image.cellphones.com.vn/358x/media/catalog/product/a/s/asus-rog-phone-5_0002_gsmarena_001.jpg', 18990000, '<ul>\r\n    <li>Conquer All Limits - Powerful Snapdragon 888, LPDDR5 RAM, UFS 3.1 Memory</li>\r\n    <li>Classy display - 144Hz refresh rate AMOLED display, 1ms response, Gorilla Victus glass</li>\r\n    <li>Gamer features - AirTrigger 5 multi-touch, quality dual speakers</li>\r\n    <li>Endless game battle - 6000mAh battery, 65W super fast charging</li>\r\n</ul>', NULL, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 3, 1, 2, 'ASUS-ROG-Phone-5', 256, 'Wide-angle Camera: 64 MP, f/1.8, 26mm, 1/1.73\", 0.8µm, PDAF\r\nUltra-wide Camera: 13 MP, f/2.4, 11mm, 125˚\r\nMacro Camera\" 5 MP, f/2.0', 'Snapdragon 888 (5 nm)', 6000, '1080 x 2448 pixels', 18990000),
(63, 'ASUS ROG Phone 5S', 'https://image.cellphones.com.vn/358x/media/catalog/product/a/s/asus-rog-phone-5_0002_gsmarena_001_3_1.jpg', 19990000, '<ul>\r\n    <li>Conquer All Limits - Powerful Snapdragon 888, LPDDR5 RAM, UFS 3.1 Memory</li>\r\n    <li>Classy display - 144Hz refresh rate AMOLED display, 1ms response, Gorilla Victus glass</li>\r\n    <li>Gamer features - AirTrigger 5 multi-touch, quality dual speakers</li>\r\n    <li>Endless game battle - 6000mAh battery, 65W super fast charging</li>\r\n</ul>', NULL, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 3, 1, 2, 'ASUS-ROG-Phone-5S', 256, 'Main Camera: 64 MP, f/1.8, PDAF\r\nUltra-wide Camera: 13 MP, f/2.4\r\nMacro Camera: 5 MP, f/2.0', 'Qualcomm® Snapdragon® 888+ 5G Mobile Platform', 6000, '1081 x 2448 pixels', 19990000),
(64, 'ASUS ROG Phone 2', 'https://image.cellphones.com.vn/358x/media/catalog/product/_/6/_600x600__crop_600_asus_rog_phone2_min_1.jpg', 20490000, '<ul>\r\n    <li>Conquer All Limits - Powerful Snapdragon 888, LPDDR5 RAM, UFS 3.1 Memory</li>\r\n    <li>Classy display - 144Hz refresh rate AMOLED display, 1ms response, Gorilla Victus glass</li>\r\n    <li>Gamer features - AirTrigger 5 multi-touch, quality dual speakers</li>\r\n    <li>Endless game battle - 6000mAh battery, 65W super fast charging</li>\r\n</ul>', NULL, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 3, 1, 3, 'ASUS-ROG-Phone-2', 512, '48 MP + 13 MP', 'Snapdragon 855 Plus Mobile Platform', 6000, '1080 x 2340 pixels', 20490000),
(65, 'ASUS ROG Phone 3', 'https://image.cellphones.com.vn/358x/media/catalog/product/r/o/rog_3.jpg', 16990000, '<ul>\r\n    <li>Conquer All Limits - Powerful Snapdragon 888, LPDDR5 RAM, UFS 3.1 Memory</li>\r\n    <li>Classy display - 144Hz refresh rate AMOLED display, 1ms response, Gorilla Victus glass</li>\r\n    <li>Gamer features - AirTrigger 5 multi-touch, quality dual speakers</li>\r\n    <li>Endless game battle - 6000mAh battery, 65W super fast charging</li>\r\n</ul>', NULL, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 3, 1, 3, 'ASUS-ROG-Phone-3', 512, 'Main Wide-angle Camera 64 MP, f/1.8, lấy nét theo pha kép PDAF\r\nUltra-wide Camera 13 MP, f/2.4, 125˚\r\nMacro Camera 5 MP, f/2.0', 'Qualcomm Snapdragon 865+ (7nm+)', 6000, '1080 x 2340 pixels', 16990000),
(66, 'Vivo V23', 'https://image.cellphones.com.vn/358x/media/catalog/product/v/i/vivo_v23_03.jpg', 10990000, '<ul>\r\n    <li>Perfect in every photo - Set of 3 64MB AI Rear Cameras, 2 50MP and 8MP selfie cameras</li>\r\n    <li>Excellent Performance - octa-core MediaTek Dimensity 920 5G Chip, Extended RAM 2.0</li>\r\n    <li>Endless experience without interruption - Large 4200 mAh battery, 44 W fast charging</li>\r\n    <li>Luxury - beautiful - classy design - Thin and light, high finish, metal frame</li>\r\n</ul>', NULL, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 4, 1, 3, 'Vivo-V23', 128, 'Main Camera: 64MP, f/1.89\r\nWide-angle Camera: 8MP, f/2.2\r\nMacro Camera: 2MP, f/2.4', ' MediaTek Dimensity 920', 4200, '1080 x 2400 pixels', 10990000);
INSERT INTO `products` (`id`, `title`, `image`, `price`, `description`, `star`, `discount`, `created_at`, `updated_at`, `brand_id`, `status_id`, `cate_id`, `href_param`, `storage`, `camera`, `chip`, `battery`, `resolution`, `old_price`) VALUES
(67, 'Vivo V23e', 'https://image.cellphones.com.vn/358x/media/catalog/product/c/9/c91ba5bf721d5b2d4eae4f821b8e4ced.png', 6390000, '<ul>\r\n    <li>Perfect in every photo - Set of 3 64MB AI Rear Cameras, 2 50MP and 8MP selfie cameras</li>\r\n    <li>Excellent Performance - octa-core MediaTek Dimensity 920 5G Chip, Extended RAM 2.0</li>\r\n    <li>Endless experience without interruption - Large 4200 mAh battery, 44 W fast charging</li>\r\n    <li>Luxury - beautiful - classy design - Thin and light, high finish, metal frame</li>\r\n</ul>', NULL, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 4, 1, 2, 'Vivo-V23e', 128, 'Main Camera: 64MP AF\r\nUltra-wide Camera: 8MP, f/2.2\r\nSuper Macro Camera: 2MP, f/2.4', 'MediaTek Helio G96', 4050, '1080 x 2400 pixels', 6390000),
(68, 'Vivo X70 Pro', 'https://image.cellphones.com.vn/358x/media/catalog/product/6/3/637677310894938336_vivo-x70-pro-den-1_1.jpg', 16990000, '<ul>\r\n    <li>Perfect in every photo - Set of 3 64MB AI Rear Cameras, 2 50MP and 8MP selfie cameras</li>\r\n    <li>Excellent Performance - octa-core MediaTek Dimensity 920 5G Chip, Extended RAM 2.0</li>\r\n    <li>Endless experience without interruption - Large 4200 mAh battery, 44 W fast charging</li>\r\n    <li>Luxury - beautiful - classy design - Thin and light, high finish, metal frame</li>\r\n</ul>', NULL, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 4, 1, 2, 'Vivo-X70-Pro', 256, '50 MP + 12 MP + 12 MP + 8 MP', 'Dimensity 1200', 4450, '1080 x 2376 pixels', 16990000),
(69, 'Vivo Y33S', 'https://image.cellphones.com.vn/358x/media/catalog/product/v/i/vivo-y33s-100.jpg', 6050000, '<ul>\r\n    <li>Perfect in every photo - Set of 3 64MB AI Rear Cameras, 2 50MP and 8MP selfie cameras</li>\r\n    <li>Excellent Performance - octa-core MediaTek Dimensity 920 5G Chip, Extended RAM 2.0</li>\r\n    <li>Endless experience without interruption - Large 4200 mAh battery, 44 W fast charging</li>\r\n    <li>Luxury - beautiful - classy design - Thin and light, high finish, metal frame</li>\r\n</ul>', NULL, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 4, 1, 3, 'Vivo-Y33S', 128, 'Wide-angle Camera: 50 MP, f/1.8, PDAF,\r\nCamera Micro: 2 MP, f/2', 'MediaTek Helio G80', 5000, '2408 x 1080 pixels', 6050000),
(70, 'Vivo Y21S', 'https://image.cellphones.com.vn/358x/media/catalog/product/v/i/vivo-y21s-600x600.jpg', 3440000, '<ul>\r\n    <li>Perfect in every photo - Set of 3 64MB AI Rear Cameras, 2 50MP and 8MP selfie cameras</li>\r\n    <li>Excellent Performance - octa-core MediaTek Dimensity 920 5G Chip, Extended RAM 2.0</li>\r\n    <li>Endless experience without interruption - Large 4200 mAh battery, 44 W fast charging</li>\r\n    <li>Luxury - beautiful - classy design - Thin and light, high finish, metal frame</li>\r\n</ul>', NULL, 20, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 4, 1, 1, 'Vivo-Y21S', 128, '50MP + 2MP + 2MP', 'MediaTek Helio G80 8 cores', 5000, '720 x 1600 pixels', 4300000),
(71, 'Vivo Y53S', 'https://image.cellphones.com.vn/358x/media/catalog/product/v/i/vivo_y53s_blue_bg.png', 4990000, '<ul>\r\n    <li>Perfect in every photo - Set of 3 64MB AI Rear Cameras, 2 50MP and 8MP selfie cameras</li>\r\n    <li>Excellent Performance - octa-core MediaTek Dimensity 920 5G Chip, Extended RAM 2.0</li>\r\n    <li>Endless experience without interruption - Large 4200 mAh battery, 44 W fast charging</li>\r\n    <li>Luxury - beautiful - classy design - Thin and light, high finish, metal frame</li>\r\n</ul>', NULL, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 4, 1, 2, 'Vivo-Y53S', 128, 'Main Camera: 64MP, f/1.79 ,\r\nSuper Macro Camera: 2MP, f/2.4', 'Helio G80', 5000, '1080 x 2400 pixels', 4990000),
(72, 'Vivo V20', 'https://image.cellphones.com.vn/358x/media/catalog/product/v/i/vivo-v20_2_.jpg', 5850000, '<ul>\r\n    <li>Perfect in every photo - Set of 3 64MB AI Rear Cameras, 2 50MP and 8MP selfie cameras</li>\r\n    <li>Excellent Performance - octa-core MediaTek Dimensity 920 5G Chip, Extended RAM 2.0</li>\r\n    <li>Endless experience without interruption - Large 4200 mAh battery, 44 W fast charging</li>\r\n    <li>Luxury - beautiful - classy design - Thin and light, high finish, metal frame</li>\r\n</ul>', NULL, 10, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 4, 1, 1, 'Vivo-V20', 128, '64 MP, f/1.9, 26mm (wide), 1/1.72\", 0.8µm, PDAF\r\n8 MP, f/2.2, 120˚, 16mm (ultrawide), 1/4.0\", 1.12µm\r\n2 MP, f/2.4, (depth)', 'Qualcomm SM7125 Snapdragon 720G (8 nm)', 4000, '1080 x 2400 pixels', 6500000),
(73, 'Vivo X60 Pro', 'https://image.cellphones.com.vn/358x/media/catalog/product/v/i/vivo-x60-pro-8.jpg', 11961000, '<ul>\r\n    <li>Perfect in every photo - Set of 3 64MB AI Rear Cameras, 2 50MP and 8MP selfie cameras</li>\r\n    <li>Excellent Performance - octa-core MediaTek Dimensity 920 5G Chip, Extended RAM 2.0</li>\r\n    <li>Endless experience without interruption - Large 4200 mAh battery, 44 W fast charging</li>\r\n    <li>Luxury - beautiful - classy design - Thin and light, high finish, metal frame</li>\r\n</ul>', NULL, 10, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 4, 1, 1, 'Vivo-X60-Pro', 256, '48MP (Gimbal 2.0) + 13MP + 13MP', 'Snapdragon 870 5G (7 nm)', 4200, '1080 x 2400 pixels', 13290000),
(74, 'Vivo Y15s', 'https://image.cellphones.com.vn/358x/media/catalog/product/v/i/vivo-y15s-2021-261021-114837-600x600.jpg', 2950000, '<ul>\r\n    <li>Perfect in every photo - Set of 3 64MB AI Rear Cameras, 2 50MP and 8MP selfie cameras</li>\r\n    <li>Excellent Performance - octa-core MediaTek Dimensity 920 5G Chip, Extended RAM 2.0</li>\r\n    <li>Endless experience without interruption - Large 4200 mAh battery, 44 W fast charging</li>\r\n    <li>Luxury - beautiful - classy design - Thin and light, high finish, metal frame</li>\r\n</ul>', NULL, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 4, 1, 3, 'Vivo-Y15s', 64, '13 MP + 2 MP', 'MediaTek Helio P35 8 cores', 5000, '720 x 1600 pixels', 2950000),
(75, 'Vivo Y21', 'https://image.cellphones.com.vn/358x/media/catalog/product/v/i/vivo-y21-white-01-1-600x600.jpg', 4000000, '<ul>\r\n    <li>Perfect in every photo - Set of 3 64MB AI Rear Cameras, 2 50MP and 8MP selfie cameras</li>\r\n    <li>Excellent Performance - octa-core MediaTek Dimensity 920 5G Chip, Extended RAM 2.0</li>\r\n    <li>Endless experience without interruption - Large 4200 mAh battery, 44 W fast charging</li>\r\n    <li>Luxury - beautiful - classy design - Thin and light, high finish, metal frame</li>\r\n</ul>', NULL, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 4, 1, 2, 'Vivo-Y21', 64, '13MP + 2MP', 'Helio P35 (MTK6765)', 5000, '720 x 1600 pixels', 4000000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `status`
--

CREATE TABLE `status` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `status`
--

INSERT INTO `status` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'In stock', '2022-04-28 03:41:27', '2022-04-28 03:41:27'),
(2, 'Out of stock', '2022-04-28 03:41:27', '2022-04-28 03:41:27');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `email` varchar(25) NOT NULL,
  `password` varchar(32) NOT NULL,
  `address` varchar(200) NOT NULL,
  `phone` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `username`, `fullname`, `email`, `password`, `address`, `phone`) VALUES
(1, 'anhduc0125', 'Vũ Đức Anh', 'vuducanh0125@gmail.com', '5b021fb6fe122183c19b8752d818df8c', 'Hà Nội', '0975502334');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`cart_id`);

--
-- Chỉ mục cho bảng `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `brands`
--
ALTER TABLE `brands`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `orders`
--
ALTER TABLE `orders`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT cho bảng `status`
--
ALTER TABLE `status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
