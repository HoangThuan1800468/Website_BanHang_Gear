-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 06, 2022 lúc 06:10 PM
-- Phiên bản máy phục vụ: 10.4.24-MariaDB
-- Phiên bản PHP: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `quanlydathang2`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cart`
--

CREATE TABLE `cart` (
  `username` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `MSHH` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `cart`
--

INSERT INTO `cart` (`username`, `MSHH`, `quantity`) VALUES
('thuan', 35, 1),
('thuan', 36, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitietdathang`
--

CREATE TABLE `chitietdathang` (
  `SoDonDH` int(11) NOT NULL,
  `MSHH` int(11) NOT NULL,
  `SoLuong` int(11) NOT NULL,
  `GiaDatHang` int(11) NOT NULL,
  `GiamGia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `chitietdathang`
--

INSERT INTO `chitietdathang` (`SoDonDH`, `MSHH`, `SoLuong`, `GiaDatHang`, `GiamGia`) VALUES
(23, 54, 1, 2190000, 0),
(23, 57, 1, 1090000, 0),
(23, 39, 1, 3490000, 0),
(23, 50, 1, 3990000, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dathang`
--

CREATE TABLE `dathang` (
  `SoDonDH` int(11) NOT NULL,
  `MSKH` int(11) NOT NULL,
  `MSNV` int(11) DEFAULT NULL,
  `NgayDH` date NOT NULL,
  `NgayGH` date DEFAULT NULL,
  `TrangThaiDH` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `dathang`
--

INSERT INTO `dathang` (`SoDonDH`, `MSKH`, `MSNV`, `NgayDH`, `NgayGH`, `TrangThaiDH`) VALUES
(23, 9, NULL, '2021-11-25', NULL, 'Đã xác nhận');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `diachikh`
--

CREATE TABLE `diachikh` (
  `MaDC` int(11) NOT NULL,
  `DiaChi` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `MSKH` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `diachikh`
--

INSERT INTO `diachikh` (`MaDC`, `DiaChi`, `MSKH`) VALUES
(9, 'DHCT', 9),
(15, 'can tho', 15);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hanghoa`
--

CREATE TABLE `hanghoa` (
  `MSHH` int(11) NOT NULL,
  `TenHH` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `QuyCach` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Gia` int(11) NOT NULL,
  `SoLuongHang` int(11) NOT NULL,
  `MaLoaiHang` int(11) NOT NULL,
  `ChiTietHH` varchar(800) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `hanghoa`
--

INSERT INTO `hanghoa` (`MSHH`, `TenHH`, `QuyCach`, `Gia`, `SoLuongHang`, `MaLoaiHang`, `ChiTietHH`) VALUES
(1, 'Razer Deathadder Essential', 'Cái', 650000, 20, 1, 'Là phiên bản đổi tên từ Razer DeathAdder 2013.Thiết kế hình thái học dành cho người thuận tay phải với các rãnh bên hông được trang bị lớp cao su dạng lưới.Cảm biến quang học 6400dpi.Đèn LED 1 màu Green.Hỗ trợ Razer Synapse.5 nút nhấn siêu nhạy có thể lập trình riêng biệt.Tần số giao tiếp 1000Hz.Điều chỉnh độ nhạy tức thì.Chế độ luôn luôn bật.Tốc độ quét 450 inch mỗi giây*/gia tốc 50g.Đầu USB được mạ vàng.Cáp quang được bện, nhẹ và dài gần 2 mét.Kích cỡ ước tính : 127mm/5” (Dài) x 70mm/2,76” (Rộng) x 44mm/1,73” (Cao).Trọng lượng ước tính: 105g/0,23lbs.Phiên bản rút gọn của chuột Razer DeathadderMắt cảm biến với tốc độ 220IPSĐộ phân giải tối đa 6400DPIHệ thống Led màu xanh lá cây quen thuộcTrọng lượng chỉ 96gPhù hợp với các game thủ FPS'),
(26, 'Razer Viper Mini', 'Cái', 990000, 2, 1, 'Chuột Razer Viper Mini Trọng lượng siêu nhẹ chỉ 61g Mắt cảm biến Optical sensor với độ phân giải 8500 DPI Switch bấm quang học của Razer cho độ bền lên đến 50 triệu lần nhấn Dây cáp Speedflex giảm thiểu độ ma sát của dây chuột khi di chuột Thiết kế đối xứng, kích thước phù hợp với người sử dụng tay nhỏ'),
(27, 'Razer Viper Mercury', 'Cái', 1850000, 60, 1, 'Cảm biến Razer Focus+ Kết nối Có dây / Không dây 2.4GHz Loại Switch Razer Switch quang học Tuổi thọ Switch 70 triệu lần nhấn DPI 20.000 DPI với độ chính xác 99.6% Trọng lượng 74g'),
(28, 'Razer Pro Click', 'Cái', 2490000, 100, 1, 'Chuột không dây Razer Pro Click Humanscale Thiết k...'),
(29, 'Razer Orochi V2', 'Cái', 1790000, 100, 1, 'Chuột không dây Razer Orochi V2 Thiết kế siêu gọn ...'),
(30, 'Razer Mamba Elite', 'Cái', 2190000, 100, 1, 'Là một phiên bản nâng cấp đặc biệt cho thế hệ chuột Razer Mamba trước đây vốn nhận được rất nhiều sự hưởng ứng từ cộng đồng game thủ, Razer Mamba Elite là “vũ khí” đích thực cho những tay chơi khao khát chiến thắng trong thế giới ảo. Mọi chức năng đặc sắc được gói gọn trong thiết kế công thái học quen thuộc sẽ mang lại cảm giác “bình mới rượu cũ” cho mỗi cú nhấn chuột.'),
(31, 'Logitech G Pro Wireless', 'Cái', 2490000, 100, 1, 'Chuột chơi game không dây cao cấp của Logitech: Logitech G Pro Wireless Công nghệ không dây Lightspeed cho độ trễ cực thấp Trọng lượng siêu nhẹ : 80g Mắt cảm biến Hero, cho sự chính xác hoàn hảo, tiết kiệm năng lượng hơn so với mắt đọc thông thường Tương thích với bàn di chuột kèm sạc không dây Logitech PowerPlay Thời lượng pin sử dung lên tới 60h'),
(32, 'Logitech G102 Lightsync', 'Cái', 390000, 100, 1, 'Chuột Logitech G102 Gen2 LightSync Bộ xử lý ARM 32 bit bên trong DPI từ 200 - 8000 Thiết kế đối xứng cơ bản LED RGB 16.8 triệu màu đồng bộ LightSync'),
(33, 'Akko 3087 Silent', 'Cái', 1390000, 100, 2, 'Model: 3087 (Tenkeyless, 87 keys) Kết nối: USB Type-C, có thể tháo rời Kích thước: 360 x 140 x 40mm | Trọng lượng ~ 0.95 kg Hỗ trợ NKRO / Multimedia / Macro / Khóa phím windows Keycap: PBT Dye-Subbed – OEM Profile Loại switch: Akko switch (Blue/Orange/Pink) Phụ kiện: 1 sách hướng dẫn sử dụng + 1 keypuller + 1 cover che bụi + 1 dây cáp USB Type-C to USB + 14 keycap tặng kèm Tương thích: Windows / MacOS / Linux Bàn phím AKKO khi kết nối với MacOS: (Ctrl -> Control | Windows -> Command | Alt -> Option, Mojave OS trở lên sẽ điều chỉnh được thứ tự của các phím này)'),
(34, 'Akko 3098 Midnight', 'Cái', 890000, 100, 2, 'Model: 3098 (98 keys) Kết nối: USB Type C, có thể tháo rời Kích thước: 382x134x40 mm | Trọng lượng 0.97 kg Hỗ trợ NKRO / Multimedia / Macro / Khóa phím Windows Keycap: PBT Double-shot, Cherry profile Loại switch: AKKO switch (Blue/Orange/Pink) v2 Phụ kiện: 1 sách hướng dẫn sử dụng + 1 keypuller + 1 cover che bụi + 40 keycap tặng kèm + 1 dây cáp USB Type-C to USB Tương thích: Windows / MacOS / Linux Bàn phím AKKO khi kết nối với MacOS: (Ctrl -> Control | Windows -> Command | Alt -> Option, Mojave OS trở lên sẽ điều chỉnh được thứ tự của các phím này)'),
(35, 'Akko Blackpink', 'Cái', 1290000, 100, 2, 'Model: 3098 (98 keys) Kết nối: USB Type C, có thể tháo rời Hỗ trợ thay nóng switch (hotswap, 3 pin) Có lót tiêu âm (FOAM) dầy 3.5mm (nằm giữa plate và PCB) Kích thước: 382x134x40 mm | Trọng lượng 0.97 kg Keycap: PBT Double-Shot, ASA profile Loại switch: Akko CS switch (Ocean Blue / Rose Red / Matcha Green) Hỗ trợ NKRO / Multimedia / Macro / Khóa phím Windows Phụ kiện: 1 sách hướng dẫn sử dụng + 1 keypuller + 1 cover che bụi + 1 dây cáp USB + 20 keycap tặng kèm Tương thích: Windows / MacOS / Linux Bàn phím AKKO khi kết nối với MacOS: (Ctrl -> Control | Windows -> Command | Alt -> Option, Mojave OS trở lên sẽ điều chỉnh được thứ tự của các phím này)'),
(36, 'Akko Designer Studio', 'Cái', 3190000, 100, 2, 'Model: 3087 (Tenkeyless, 87 keys) Vỏ nhôm được chế tác theo công nghệ CNC, được anode hóa tỉ mỉ, chi tiết Kết nối: USB Type-C, có thể tháo rời Kích thước: 360 x 140 x 40mm | Trọng lượng ~ 2 kg Hỗ trợ NKRO / Multimedia / Macro / Khóa phím windows Keycap: PBT Double-Shot. OSA profle Loại switch: Cherry switch (Brown / Red) Phụ kiện: 1 sách hướng dẫn sử dụng + 1 keypuller + 1 cover che bụi + 1 dây cáp USB Type-C to USB + 10 keycap tặng kèm Tương thích: Windows / MacOS / Linux Bàn phím AKKO khi kết nối với MacOS: (Ctrl -> Control | Windows -> Command | Alt -> Option, Mojave OS trở lên sẽ điều chỉnh được thứ tự của các phím này)'),
(37, 'Akko Ocean Star', 'Cái', 1190000, 100, 2, 'Model: 3068 (68 keys) Kết nối: USB Type-C, có thể tháo rời Kích thước: 316x107x39 mm Keycap: PBT Side-Printed, OEM Profile Loại switch: Cherry switch (Blue/Brown/Red) Hỗ trợ NKRO / Multimedia / Macro / Khóa phím Windows Phụ kiện: 1 sách hướng dẫn sử dụng + 1 keypuller + 1 cover che bụi + 1 dây cáp USB + 11 keycap tặng kèm Tương thích: Windows / MacOS / Linux Bàn phím AKKO khi kết nối với MacOS: (Ctrl -> Control | Windows -> Command | Alt -> Option, Mojave OS trở lên sẽ điều chỉnh được thứ tự của các phím này)'),
(38, 'Akko OnePiece \"Chopper\"', 'Cái', 1490000, 100, 2, 'Model: 3108 (Fullsize, 108 keys) Kết nối: USB Type-C, có thể tháo rời Kích thước: 440 x 140 x 40mm | Trọng lượng ~ 1.2 kg Hỗ trợ NKRO / Multimedia / Macro / Khóa phím windows Keycap: PBT Dye-Subbed, OEM Profile Loại switch: Akko switch (Blue/Orange/Pink) v2 Phụ kiện: 1 sách hướng dẫn sử dụng + 1 keypuller + 1 cover che bụi + 1 dây cáp USB Type-C to USB + 08 keycap tặng kèm Tương thích: Windows / MacOS / Linux Bàn phím AKKO khi kết nối với MacOS: (Ctrl -> Control | Windows -> Command | Alt -> Option, Mojave OS trở lên sẽ điều chỉnh được thứ tự của các phím này)'),
(39, 'Leopold FC980 Retro', 'Cái', 3490000, 100, 2, 'Thương hiệu bàn phím cơ lâu đời đến từ Hàn Quốc Keycap chất liệu Thick PBT bền bỉ Sử dụng 100% Switch Cherry chất lượng cao nhất Không có hệ thống đèn Led, nhưng tối ưu tốt cảm giác gõ Dây cáp Mini-USB có thể tháo rời Phù hợp với người dùng thích sự đơn giản nhưng hiệu năng cao'),
(40, 'Razer Blackwidow V3', 'Cái', 2990000, 100, 2, 'Bàn phím Razer BlackWidow V3 Sử dụng switch cơ học độc quyền của Razer với phần housing được làm trong suốt giúp cho đèn led hiển thị đẹp hơn Keycap ABS Doubleshot Led RGB Chroma 16.8 triệu màu Thiết kế với vật liệu nhôm chắc chắn Núm xoay Multimedia tiện lợi Đi kèm kê tay chống mỏi có thể tháo rời'),
(41, 'Steelseries Arctis 5 White Edition', 'Cái', 1790000, 100, 3, 'Phiên bản mới nhất của Steelseries Arctis 5 Cải thiện chất lượng âm thanh, độ thoải mái Chất lượng Microphone được tăng cường đáng kể Một trong những chiếc tai nghe có Mic tốt nhất thế giới Âm trường rộng, cho trải nghiệm chơi game tuyệt vời Phù hợp với tất cả các thể loại game'),
(42, 'Razer Blackshark V2 Pro \"Rainbow-Six\"', 'Cái', 3490000, 100, 3, 'Tai nghe Razer BlackShark V2 Pro-Wireless-Rainbow Six Edition Chuẩn kết nối: Wireless HyperSpeed độ trễ cực thấp Màng loa RAZER™ TRIFORCE TITANIUM 50MM mang lại chất lượng âm thanh chi tiết và sống động RAZER™ HYPERCLEAR SUPERCARDIOID Micro mang lại chất lượng trò chuyện cao Tính năng chống ồn thụ động cao cấp Đệm tai FlowKnit memory foam mang lại sự thoải mái lâu dài Tích hợp công nghệ âm thanh vòm THX Spatial Audio'),
(43, 'Dareu A700 Wireless', 'Cái', 990000, 100, 3, 'Tai nghe không dây Dareu A700 (WIRELESS 2.4G) Chuẩn kết nối Wireless 2.4Ghz độ trễ thấp Driver: Φ50mm Pin: 930 mAh - Thời gian sạc: 2h Thời gian sử dụng: 9h ~ 15h Điện áp: 5V - 500mA Đệm tai: da mềm Frequency Range: 20Hz-20KHz Trọng lượng: 365 +/- 10g'),
(44, 'Logitech G733 Lightspeed', 'Cái', 3190000, 100, 3, 'Tai nghe Gaming Logitech LIGHTSPEED G733 Wireless 7.1 RGB Màng loa Pro-G 40mm cho âm thanh sống động Công nghệ không dây Lightspeed với độ trễ cực thấp Khoảng cách hoạt động lên đến 20m Led RGB Lightsync Trọng lượng siêu nhẹ chỉ 278g Thời gian sử dụng pin cao lên đến 29h đồng hồ'),
(45, 'Razer Blackshark V2', 'Cái', 2990000, 100, 3, 'Tai nghe RazerBlackShark V2 X Chuẩn kết nối 3.5mm RAZER™ TRIFORCE 50MM DRIVERS cho âm thanh mạnh mẽ hơn Micro tái tạo giọng nói tốt hơn, loại bỏ tiếng ồn Tính năng cách âm thụ động tiên tiến Trọng lượng nhẹ, đeo thoải mái Tích hợp âm thanh surround 7.1 (chỉ có trên windown 10 64bit)'),
(46, 'JBL Quantum \"ONE\"', 'Cái', 4990000, 20, 3, 'Cho cuộc chơi vượt tầm đẳng cấp. Tai nghe JBL Quantum ONE mang tới cho bạn âm thanh 360 độ đỉnh cao cùng công nghệ theo dõi chuyển động đầu JBL QuantumSPHERE 360™. Tính năng Chống ồn chủ động được tối ưu riêng cho game thủ. Thiết kế cho khả năng xác định vị trí âm thanh chuẩn xác, công nghệ JBL QuantumSOUND Signature mang tới chất âm đỉnh cao thông qua driver 50mm đạt chuẩn Hi-Res. Micro định hướng giọng nói gắn rời cho bạn khả năng tương tác đa người chơi với tiếng ồn được lọc thông minh, nhiều chế độ ngắt âm chuyên dụng cùng vòng xoay cân bằng trò chuyện game-chat được chứng nhận bởi DISCORD. Thiết kế cộng thái học siêu nhẹ cho bạn cảm giác thoải mái bất tận, hệ thống phần mềm JBL QuantumENGINE tùy chỉnh chuyên sâu và lưu lại hồ sơ người dùng. Tai nghe JBL Quantum ONE đại diện cho đỉnh c'),
(47, 'Razer Kraken Kitty Edition Quartz', 'Cái', 1390000, 100, 3, 'Tai nghe Razer Kraken Kitty Chroma Thiết kế tai mèo độc đáo Led RGB Chroma 16.8 triệu màu, bao gồm cả phần tai mèo Có thể cắm vào nguồn điện sạc dự phòng để hiện led mà không cần cắm vào PC Micro với tính năng lọc ồn Công nghệ THX Spatial Audio Đệm tai nghe làm mát bằng Gel'),
(48, 'Razer Kraken X Mercury', 'Cái', 1390000, 100, 3, 'Tai nghe Razer Kraken X Mercury Tần số : 12 Hz - 28.000Hz Driver : 40mm Hỗ trợ 7.1 thông qua phần mềm (chỉ dùng cho PC) Jack cắm 3.5mm tương thích với nhiều loại thiết bị Mic và phone tích hợp trên cùng 1 jack'),
(49, 'Razer Opus X Mercury', 'Cái', 2490000, 100, 3, 'Tai nghe Razer Opus X-Active Noise Cancellation Mercury Chuẩn kết nối: Bluetooth 5.0 độ trễ thấp Tích hợp công nghệ chống ồn chủ động Driver 40mm Micro ẩn tiện lợi Chế độ Quick Attention cho phép nghe được âm thanh bên ngoài'),
(50, 'Corsair Virtuoso Wireless \"Pearl\"', 'Cái', 3990000, 100, 3, 'Tai nghe không dây Corsair Virtuoso RGB Pearl Tai nghe không dây cao cấp đến từ Corsair Màng loa Neodymium 50mm cho chất lượng âm thanh sống động Công nghệ âm thanh vòm 7.1 chất lượng cao Đệm tai nghe Memory Foam cao cấp Thiết kế khung nhôm kim loại cao cấp và chắc chắn,thoải mái 3 dạng kết nối: Slipstream Wireless / Dây Usb / Dây 3.5mm Micro có thể tháo rời Led RGB Thời lượng pin lên đến 20h sử dụng.'),
(51, 'Asus ROG Delta \"Gundam\"', 'Cái', 4790000, 100, 3, 'Tai nghe Asus ROG Delta Gundam LTD Phiên bản đặc biệt thuộc series Gundam Tai nghe gaming của Asus LED RGB Aura cực đẹp Âm thanh độ chi tiết cao Công nghệ lọc tín hiệu âm thanh Thiết kế buồng kín âm độc quyền Ốp tai nghe hình chữ D thiết kế công thái học Thiết kế góc cạnh để tiện nghi hơn và cho âm thanh tốt hơn Điều khiển tức thời trong tầm tay Hai loại vành ốp tai Tương thích với nhiều nền tảng.'),
(52, 'Corsair Virtuoso SE \"Espresso\"', 'Cái', 3990000, 100, 3, 'Tai nghe không dây Corsair Virtuoso RGB SE Espresso Tai nghe không dây cao cấp đến từ Corsair Màng loa Neodymium 50mm cho chất lượng âm thanh sống động Công nghệ âm thanh vòm 7.1 chất lượng cao Đệm tai nghe Memory Foam cao cấp Thiết kế khung nhôm kim loại cao cấp và chắc chắn,thoải mái 3 dạng kết nối: Slipstream Wireless / Dây Usb / Dây 3.5mm Micro có thể tháo rời Led RGB Thời lượng pin lên đến 20h sử dụng.'),
(53, 'Corsair Void RGB Elite', 'Cái', 2290000, 100, 3, 'Tai nghe chơi game Corsair VOID RGB ELITE USB 7.1 Driver neodymium 50mm cho âm thanh sống động Khung tai nghe làm bang nhôm chắc chắn Âm thanh giả lập 7.1 Led RGB.'),
(54, 'Glorious Model O', 'Cái', 2190000, 100, 1, 'Được định hướng bởi cộng đồng game thủ đầy đam mê và được phát triển bởi một đội ngũ không chấp nhận bất cứ điều gì ngoài sự hoàn hảo - Glorious Model O sẽ nâng tầm khả năng của bạn lên ngoài sức tưởng tượng. Chú trọng vào tốc độ, sự kiểm soát và thoải mái khi sử dụng chuột, Glorious trang bị rất nhiều tính năng cao cấp vào một thân hình đối xứng nhẹ không tưởng. Chào mừng bạn đến với đẳng cấp mới của Competitive E-Sport.'),
(55, 'BenQ Zowie EC2', 'Cái', 1990000, 100, 1, 'Chuột Zowie BenQ EC2 Optical Professional Gaming Dòng EC được cải tiến với cảm biến PMW3360 cho độ chính xác cao và ổn định Phiên bản dành cho người chơi thuận tay phải. Tạo không gian rộng cho các chuyển động cổ tay một cách thoải mái nhất khi chơi game. Đầu chuột bên phải được vát tròn, giúp người dùng khi giữ/cầm chuột có thể di chuyển dễ dàng hơn. Đế chuột được thiết kế dạng lớn. Thiết kế Plug and Play không cần driver.'),
(56, 'Dareu EM908 Arctic', 'Cái', 390000, 1000, 1, 'Chuột Dareu EM908 Arctic RGB Chuột chơi game giá rẻ mới nhất của DareU Thiết kế công thái học kích cỡ trung bình Phù hợp với nhiều kích cỡ tay của game thủ Mắt cảm biến chơi game mới 6000DPI Tốc độ tối đa lên tới 150ips, đảm bảo độ chính xác Trọng lượng nhẹ nhàng dễ dàng kiểm soát Hệ thống led RGB bắt mắt.'),
(57, 'Logitech G304 \"KDA\"', 'Cái', 1090000, 100, 1, 'G304 KDA  Phiên bản Limited League of Legends  Chuột chơi game không dây thế hệ mới nhất của Logitech  Thiết kế đối xứng  Công nghệ không dây tiên tiến nhất Lightspeed  Độp phân giải: 12000DPI  Gia tốc tối đa: 40G  Tốc độ tối đa: 400IPS.'),
(58, 'SteelSeries Rival 600', 'Cái', 2090000, 100, 1, 'Chuột chơi game Tân Tiến nhất của Steelseries đầu năm 2018 Thiết kế mới lạ với 4 khu vực Led khác nhau, và 8 đèn Led bên trong Dây cáp Micro USB có thể tháo rời thuận tiện khi di chuyển Độ phân giải từ 100 tới 12000CPI (Tương đương 12000 DPI) Mắt cảm biến TRUEMOVE3+ chính xác Nhất Thế Giới Mắt cảm biến riêng biệt nhận diện độ sâu và Lift Off Distance 8 viên tạ 4g tạo ra 256 cách tùy biến trọng lượng và độ cân bằng.'),
(59, 'Steelseries Sensei Ten Neon \"Raider Edition\"', 'Cái', 1870000, 100, 1, 'Phiên bản giới hạn Neon Rider thiết kế từ CS: GO Cảm biến TrueMove Pro hoàn toàn mới và tính năng Memory Onboard Nút bấm với tuổi thọ 60 triệu lần nhấp Thiết kế thuận tiện cho người chơi thuận tay trái và tay phải Build quality siêu bền để chịu được sự hao mòn dữ dội nhất.'),
(60, 'Razer Viper Ultimate \"Quartz\"', 'Cái', 3490000, 100, 1, 'Razer Viper Ultimate with Charging Dock - Quartz được trang bị switch chuột Razer quang học với mỗi lần nhấp chuột của bạn sẽ được thực hiện ngay tức khắc với tốc độ ánh sáng. Switch quang Razer sử dụng chùm tia hồng ngoại để đăng ký lần nhấp chuột, dẫn đến thời gian phản hồi hàng đầu là 0,2 mili giây. Hoạt động tức thời của nó giúp loại bỏ các lần nhấp không mong muốn, cho phép bạn kiểm soát hoàn toàn chuột của mình.'),
(83, 'thuan33', 'cái', 10000000, 2, 1, 'sađâsda');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hinhhanghoa`
--

CREATE TABLE `hinhhanghoa` (
  `MaHinh` int(11) NOT NULL,
  `TenHinh` char(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `MSHH` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `hinhhanghoa`
--

INSERT INTO `hinhhanghoa` (`MaHinh`, `TenHinh`, `MSHH`) VALUES
(1, 'deathadder-essential.png', 1),
(21, 'viper-mini.jpg', 26),
(22, 'viper-mercury.jpg', 27),
(23, 'pro-click.jpg', 28),
(24, 'orochi-v2.png', 29),
(25, 'mamba-elite.jpg', 30),
(26, 'gpro-wireless.png', 31),
(27, 'g102-lightsync.jpg', 32),
(28, 'akko-3087-silent.jpg', 33),
(29, 'akko-3098-midnight.jpg', 34),
(30, 'akko-blackpink.jpg', 35),
(31, 'akko-designer-studio.jpg', 36),
(32, 'akko-ocean-star.jpg', 37),
(33, 'akko-one-piece-chopper.jpg', 38),
(34, 'leopold-fc980.jpg', 39),
(35, 'razer-blackwidow-v3.jpg', 40),
(36, 'arctis-5-white-edition.jpg', 41),
(37, 'blackshark-v2-pro-rainbow-six.jpg', 42),
(38, 'dareu-a700.jpg', 43),
(39, 'g733-lightspeed.png', 44),
(40, 'gearvn-tai-nghe-razer-blackshark-v2.jpg', 45),
(41, 'jbl-quantum-ONE.png', 46),
(43, 'kraken-kitty-edition-quartz.png', 47),
(44, 'razer-kraken-x-mercury.png', 48),
(45, 'razer-opus-x.png', 49),
(46, 'virtuoso-pearl.png', 50),
(47, 'ROG-delta-gundam.jpg', 51),
(48, 'virtuoso-se-espresso.png', 52),
(49, 'void-rgb-elite.png', 53),
(51, 'ModelO.jfif', 54),
(52, 'zowie_ec2.png', 55),
(53, 'EM908_Arctic.jpg', 56),
(54, 'G304_KDA.jpg', 57),
(55, 'Rival_600.jpg', 58),
(56, 'Sensei-ten-neon.png', 59),
(57, 'Viper-ultimate-quartz.jfif', 60),
(80, 'Nitro_Wallpaper_5000x2813.jpg', 83);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhang`
--

CREATE TABLE `khachhang` (
  `MSKH` int(11) NOT NULL,
  `HoTenKH` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TenCongTy` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `SoDienThoai` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL,
  `SoFax` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `khachhang`
--

INSERT INTO `khachhang` (`MSKH`, `HoTenKH`, `TenCongTy`, `SoDienThoai`, `SoFax`, `username`, `password`) VALUES
(9, 'Nguyễn Đình Quý', 'Can Tho University', '0123456789', '0123456789', 'b1812372', 'b1812372'),
(15, 'Thuận', 'DHCT', '0252521202', '01200540152', 'thuan', '123');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaihanghoa`
--

CREATE TABLE `loaihanghoa` (
  `MaLoaiHang` int(11) NOT NULL,
  `TenLoaiHang` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `anh` char(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `loaihanghoa`
--

INSERT INTO `loaihanghoa` (`MaLoaiHang`, `TenLoaiHang`, `anh`) VALUES
(-1, 'Tất cả', 'all.png'),
(1, 'Chuột', 'mouse.png'),
(2, 'Bàn phím', 'keyboard.png'),
(3, 'Tai nghe', 'headset.png'),
(18, 'thuan1234', 'Planet9_Wallpaper_5000x2813.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhanvien`
--

CREATE TABLE `nhanvien` (
  `MSNV` int(11) NOT NULL,
  `HoTenNV` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ChucVu` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `DiaChi` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL,
  `SoDienThoai` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `nhanvien`
--

INSERT INTO `nhanvien` (`MSNV`, `HoTenNV`, `ChucVu`, `DiaChi`, `SoDienThoai`, `username`, `password`) VALUES
(1, 'Nguyễn Đình Quý', 'Giám đốc', 'Can Tho', '0123456789', 'admin', 'admin'),
(7, 'thuanhoang', 'quan ly tat ca', 'can thow', '0252521202', 'thuanad', '123'),
(9, 'dang', 'cu li', 'can tho', '903423940293', 'dangad', '123');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `chitietdathang`
--
ALTER TABLE `chitietdathang`
  ADD KEY `SoDonDH` (`SoDonDH`),
  ADD KEY `MSHH` (`MSHH`);

--
-- Chỉ mục cho bảng `dathang`
--
ALTER TABLE `dathang`
  ADD PRIMARY KEY (`SoDonDH`),
  ADD KEY `MSKH` (`MSKH`),
  ADD KEY `MSNV` (`MSNV`);

--
-- Chỉ mục cho bảng `diachikh`
--
ALTER TABLE `diachikh`
  ADD PRIMARY KEY (`MaDC`),
  ADD KEY `MSKH` (`MSKH`);

--
-- Chỉ mục cho bảng `hanghoa`
--
ALTER TABLE `hanghoa`
  ADD PRIMARY KEY (`MSHH`),
  ADD KEY `MaLoaiHang` (`MaLoaiHang`);

--
-- Chỉ mục cho bảng `hinhhanghoa`
--
ALTER TABLE `hinhhanghoa`
  ADD PRIMARY KEY (`MaHinh`),
  ADD KEY `MSHH` (`MSHH`);

--
-- Chỉ mục cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`MSKH`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Chỉ mục cho bảng `loaihanghoa`
--
ALTER TABLE `loaihanghoa`
  ADD PRIMARY KEY (`MaLoaiHang`);

--
-- Chỉ mục cho bảng `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD PRIMARY KEY (`MSNV`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `dathang`
--
ALTER TABLE `dathang`
  MODIFY `SoDonDH` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT cho bảng `diachikh`
--
ALTER TABLE `diachikh`
  MODIFY `MaDC` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT cho bảng `hanghoa`
--
ALTER TABLE `hanghoa`
  MODIFY `MSHH` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;

--
-- AUTO_INCREMENT cho bảng `hinhhanghoa`
--
ALTER TABLE `hinhhanghoa`
  MODIFY `MaHinh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;

--
-- AUTO_INCREMENT cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `MSKH` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT cho bảng `loaihanghoa`
--
ALTER TABLE `loaihanghoa`
  MODIFY `MaLoaiHang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT cho bảng `nhanvien`
--
ALTER TABLE `nhanvien`
  MODIFY `MSNV` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `chitietdathang`
--
ALTER TABLE `chitietdathang`
  ADD CONSTRAINT `chitietdathang_ibfk_1` FOREIGN KEY (`SoDonDH`) REFERENCES `dathang` (`SoDonDH`),
  ADD CONSTRAINT `chitietdathang_ibfk_2` FOREIGN KEY (`MSHH`) REFERENCES `hanghoa` (`MSHH`);

--
-- Các ràng buộc cho bảng `dathang`
--
ALTER TABLE `dathang`
  ADD CONSTRAINT `dathang_ibfk_1` FOREIGN KEY (`MSKH`) REFERENCES `khachhang` (`MSKH`),
  ADD CONSTRAINT `dathang_ibfk_2` FOREIGN KEY (`MSNV`) REFERENCES `nhanvien` (`MSNV`);

--
-- Các ràng buộc cho bảng `diachikh`
--
ALTER TABLE `diachikh`
  ADD CONSTRAINT `diachikh_ibfk_1` FOREIGN KEY (`MSKH`) REFERENCES `khachhang` (`MSKH`);

--
-- Các ràng buộc cho bảng `hanghoa`
--
ALTER TABLE `hanghoa`
  ADD CONSTRAINT `hanghoa_ibfk_1` FOREIGN KEY (`MaLoaiHang`) REFERENCES `loaihanghoa` (`MaLoaiHang`);

--
-- Các ràng buộc cho bảng `hinhhanghoa`
--
ALTER TABLE `hinhhanghoa`
  ADD CONSTRAINT `hinhhanghoa_ibfk_1` FOREIGN KEY (`MSHH`) REFERENCES `hanghoa` (`MSHH`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
