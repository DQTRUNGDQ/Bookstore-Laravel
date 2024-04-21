-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 21, 2024 at 08:20 AM
-- Server version: 10.8.4-MariaDB
-- PHP Version: 8.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `SellBook`
--

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `id` int(11) NOT NULL,
  `image` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`id`, `image`) VALUES
(1, './upload/img/banner/StPatrick.jpg'),
(2, './upload/img/banner/WomensHistoryMonth.jpg'),
(3, './upload/img/banner/BlackHistory.jpg'),
(4, './upload/img/banner/Lunar.jpg'),
(5, './upload/img/banner/EsterFavourites.jpg'),
(6, './upload/img/banner/ChildrenSpring.jpg'),
(7, './upload/img/banner/CollectionsRC.jpg'),
(8, './upload/img/banner/SpringBreakTravel.jpg'),
(9, './upload/img/banner/ShelfSteals.jpg'),
(10, './upload/img/banner/TheSchoolofAthens.jpg'),
(11, './upload/img/banner/sen.jpg'),
(12, './upload/img/banner/longden.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `bestproduct`
--

CREATE TABLE `bestproduct` (
  `id` int(11) NOT NULL,
  `category` int(11) NOT NULL,
  `image` varchar(1000) NOT NULL,
  `name` varchar(1000) NOT NULL,
  `price` int(11) NOT NULL,
  `imgstatus` varchar(1000) NOT NULL,
  `timedelivery` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bestproduct`
--

INSERT INTO `bestproduct` (`id`, `category`, `image`, `name`, `price`, `imgstatus`, `timedelivery`) VALUES
(1, 1, './upload/img/BestProducts/sachvanhoc-tpkd/nhungtamlongcaoca.jpg', 'Những tấm lòng cao ', 55000, './upload/img/BestProducts/now.png', 'Giao siêu tốc 2h'),
(2, 2, './upload/img/BestProducts/sachhocngoaingu-ta/destinationb1.jpg', 'Sách - Destination B1 Grammar and Vocabulary Kèm Đáp Án', 118300, './upload/img/BestProducts/now.png', 'Giao siêu tốc 2h'),
(3, 3, './upload/img/BestProducts/sachtuduykinangsong/cangkyluatcangtudo.jpg', 'Càng Kỷ Luật, Càng Tự Do', 78000, './upload/img/BestProducts/now.png', 'Giao siêu tốc 2h'),
(4, 4, './upload/img/BestProducts/truyentranhcomic/conan101.jpg', 'Sách - Thám Tử Lừng Danh Conan - Tập 101 - NHBook', 25000, './upload/img/BestProducts/now.png', 'Giao siêu tốc 2h'),
(5, 1, './upload/img/BestProducts/sachvanhoc-tpkd/haisophan.jpg', 'Hai Số Phận (Bìa Cứng) - Tặng Bookmark Happy Life', 211500, './upload/img/BestProducts/now.png', 'Giao siêu tốc 2h'),
(6, 1, './upload/img/BestProducts/sachvanhoc-tpkd/huckleberryfinn.jpg', 'Những Cuộc Phiêu Lưu Của Huckleberry Finn', 60000, './upload/img/BestProducts/now.png', 'Giao siêu tốc 2h'),
(7, 1, './upload/img/BestProducts/sachvanhoc-tpkd/godfather.jpg', 'Bố Già (Bìa Cứng) (Tái Bản)', 157000, './upload/img/BestProducts/now.png', 'Giao siêu tốc 2h'),
(8, 1, './upload/img/BestProducts/sachvanhoc-tpkd/daigiagatsby.jpg', 'Đại Gia Gatsby', 59000, './upload/img/BestProducts/now.png', 'Giao siêu tốc 2h'),
(9, 1, './upload/img/BestProducts/sachvanhoc-tpkd/khonggiadinh.jpg', 'Không Gia Đình (Phiên Bản Mới) - Tặng kèm bộ Postcard', 120000, './upload/img/BestProducts/now.png', 'Giao siêu tốc 2h'),
(10, 1, './upload/img/BestProducts/sachvanhoc-tpkd/nghinlemotdem.jpg', 'NGHÌN LẺ MỘT ĐÊM (Ấn bản bìa cứng)', 796000, './upload/img/BestProducts/now.png', 'Giao siêu tốc 2h'),
(11, 1, './upload/img/BestProducts/sachvanhoc-tpkd/nhathoducbaparis.jpg', 'Nhà thờ Đức Bà Paris (Bìa Cứng)', 418000, './upload/img/BestProducts/now.png', 'Giao siêu tốc 2h'),
(12, 1, './upload/img/BestProducts/sachvanhoc-tpkd/onggiavabienca.jpg', 'Ông già và biển cả', 128000, './upload/img/BestProducts/now.png', 'Giao siêu tốc 2h'),
(13, 1, './upload/img/BestProducts/sachvanhoc-tpkd/robinsoncrusoe.jpg', 'Robinson Crusoe', 148000, './upload/img/BestProducts/now.png', 'Giao siêu tốc 2h'),
(14, 1, './upload/img/BestProducts/sachvanhoc-tpkd/sherlockholmes.png', 'Sherlock Holmes Toàn Tập (3 Tập - Hộp Đứng) (Bìa Mềm)(Tái Bản', 318000, './upload/img/BestProducts/now.png', 'Giao siêu tốc 2h'),
(15, 1, './upload/img/BestProducts/sachvanhoc-tpkd/tupleucuabactom.jpg', 'Túp Lều Bác Tom', 69000, './upload/img/BestProducts/now.png', 'Giao siêu tốc 2h'),
(16, 2, './upload/img/BestProducts/sachhocngoaingu-ta/giaithichnguphapta.jpg', 'Giải Thích Ngữ Pháp Tiếng Anh (Với Bài Tập Và Đáp Án) (Tái Bản)', 143000, './upload/img/BestProducts/now.png', ''),
(17, 2, './upload/img/BestProducts/sachhocngoaingu-ta/combogiaotrinhhanngu.jpg', 'Combo Trọn Bộ 6 Cuốn Giáo Trình Hán Ngữ', 620000, './upload/img/BestProducts/now.png', ''),
(18, 2, './upload/img/BestProducts/sachhocngoaingu-ta/combogiaotrinhhsk.jpg', 'Combo Giáo Trình Chuẩn HSK 1 - Bài Học (Kèm 1 MP3) và Giáo Trình Chuẩn HSK 1 - Bài Tập (Kèm 1 MP3) ( Tặng Kèm Viết )', 283000, './upload/img/BestProducts/now.png', ''),
(19, 2, './upload/img/BestProducts/sachhocngoaingu-ta/combotienghantonghop.png', 'Combo Tiếng Hàn tổng hợp dành cho người Việt Nam sơ cấp 2 ( Sách giáo trình +  sách bài tập) bản 1 màu ', 158000, './upload/img/BestProducts/now.png', ''),
(20, 2, './upload/img/BestProducts/sachhocngoaingu-ta/tienganhchonguoibatdau.jpg', 'Sách ID Tiếng Anh cho người mới bắt đầu - người mới mất gốc Cô Trang Anh', 154000, './upload/img/BestProducts/now.png', ''),
(21, 2, './upload/img/BestProducts/sachhocngoaingu-ta/combo25chuyendenpta.png', 'Combo 25 Chuyên đề ngữ pháp tiếng anh trọng tâm ( trọn bộ tập 1+2 )', 142000, './upload/img/BestProducts/now.png', ''),
(22, 3, './upload/img/BestProducts/sachtuduykinangsong/camxucosho.jpg', 'OSHO - Cảm Xúc', 131000, './upload/img/BestProducts/now.png', 'Giao siêu tốc 2h'),
(23, 3, './upload/img/BestProducts/sachtuduykinangsong/dacnhantam.jpg', 'Đắc Nhân Tâm (Bìa Mềm)(Tái Bản)', 58000, './upload/img/BestProducts/now.png', 'Giao siêu tốc 2h'),
(24, 3, './upload/img/BestProducts/sachtuduykinangsong/danongsaohoadanbasaokim.jpg', 'Đàn Ông Sao Hỏa Đàn Bà Sao Kim', 130000, './upload/img/BestProducts/now.png', 'Giao siêu tốc 2h'),
(25, 3, './upload/img/BestProducts/sachtuduykinangsong/gian.jpg', 'Giận (Tái Bản 2023)', 104000, './upload/img/BestProducts/now.png', 'Giao siêu tốc 2h'),
(26, 3, './upload/img/BestProducts/sachtuduykinangsong/loisongtoigiancuanguoinhat.jpg', 'Lối Sống Tối Giản Của Người Nhật (Tái Bản)', 80400, './upload/img/BestProducts/now.png', 'Giao siêu tốc 2h'),
(27, 3, './upload/img/BestProducts/sachtuduykinangsong/yeuosho.jpg', 'Sách OSHO Yêu - Being In Love - Yêu Trong Tỉnh Thức', 114000, './upload/img/BestProducts/now.png', 'Giao siêu tốc 2h'),
(28, 4, './upload/img/BestProducts/truyentranhcomic/boxsethaikyu.jpg', 'Premium Boxset Haikyu!! 2 - Tập: 16 - 30 (Bộ 15 Cuốn) - Tặng Kèm Quà Bí Mật', 558000, './upload/img/BestProducts/now.png', 'Giao hàng siêu tốc 2h'),
(29, 4, './upload/img/BestProducts/truyentranhcomic/combonguoibataigioivungsaga.png', 'Combo Người Bà Tài Giỏi Vùng Saga (Tập 1+2+3+4+5+6+7+8)_Tặng Kèm Khóa và Bookmark', 383500, './upload/img/BestProducts/now.png', 'Giao hàng siêu tốc 2h'),
(30, 4, './upload/img/BestProducts/truyentranhcomic/doraemonphieuluuxuquy.jpg', 'Doraemon Movie Story: Tân Nobita Và Chuyến Phiêu Lưu Vào Xứ Quỷ - 7 Dũng Sĩ Phép Thuật', 30000, './upload/img/BestProducts/now.png', 'Giao hàng siêu tốc 2h'),
(31, 4, './upload/img/BestProducts/truyentranhcomic/onepiece99.jpg', 'One Piece - Tập 99', 25000, './upload/img/BestProducts/now.png', 'Giao hàng siêu tốc 2h'),
(32, 4, './upload/img/BestProducts/truyentranhcomic/thanhguomdietquy4.jpg', 'Thanh Gươm Diệt Quỷ Tập 4: Lưỡi Gươm Mạnh Mẽ', 23800, './upload/img/BestProducts/now.png', 'Giao hàng siêu tốc 2h'),
(33, 4, './upload/img/BestProducts/truyentranhcomic/tokyorevenger4.jpg', 'Tokyo Revengers - Tập 4', 72400, './upload/img/BestProducts/now.png', 'Giao hàng siêu tốc 2h');

-- --------------------------------------------------------

--
-- Table structure for table `brandofficial`
--

CREATE TABLE `brandofficial` (
  `id` int(11) NOT NULL,
  `imgbook` varchar(1000) NOT NULL,
  `imgbrand` varchar(1000) NOT NULL,
  `title` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `brandofficial`
--

INSERT INTO `brandofficial` (`id`, `imgbook`, `imgbrand`, `title`) VALUES
(1, './upload/img/BrandOfficial/book/hieuvetraitim.jpg', './upload/img/BrandOfficial/brand/firstnews.jpg', 'Sách best seller giảm đến 40%'),
(2, './upload/img/BrandOfficial/book/1980books.jpg', './upload/img/BrandOfficial/brand/1980books.png', ''),
(3, './upload/img/BrandOfficial/book/fahasa.jpg', './upload/img/BrandOfficial/brand/fahasa.jpg', ''),
(4, './upload/img/BrandOfficial/book/giver.png', './upload/img/BrandOfficial/brand/giver.jpg', ''),
(5, './upload/img/BrandOfficial/book/hocmai.png', './upload/img/BrandOfficial/brand/hocmai.png', ''),
(6, './upload/img/BrandOfficial/book/nhanam.jpg', './upload/img/BrandOfficial/brand/nhanam.png', ''),
(7, './upload/img/BrandOfficial/book/nhanvan.png', './upload/img/BrandOfficial/brand/nhanvan.jpg', ''),
(8, './upload/img/BrandOfficial/book/riobook.jpg', './upload/img/BrandOfficial/brand/riobook.png', '');

-- --------------------------------------------------------

--
-- Table structure for table `careproduct`
--

CREATE TABLE `careproduct` (
  `id` int(11) NOT NULL,
  `image` varchar(1000) NOT NULL,
  `name` varchar(1000) NOT NULL,
  `price` int(11) NOT NULL,
  `imgstatus` varchar(1000) NOT NULL,
  `timedelivery` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `careproduct`
--

INSERT INTO `careproduct` (`id`, `image`, `name`, `price`, `imgstatus`, `timedelivery`) VALUES
(1, './upload/img/ProductsCare/dichhach.jpg', 'Dịch Hạch (Nobel Văn Chương 1957)', 95000, './upload/img/ProductsCare/now.png', 'Giao nhanh trong 2h'),
(2, './upload/img/ProductsCare/khihoithohoathinhkhong.jpg', 'Khi Hơi Thở Hóa Thinh Không', 79100, './upload/img/ProductsCare/day.png', 'Giao thứ hai, 04/03'),
(3, './upload/img/ProductsCare/doigiohu.jpg', 'Đồi Gió Hú (Tái Bản)', 80500, './upload/img/ProductsCare/now.png', 'Giao nhanh trong 2h'),
(4, './upload/img/ProductsCare/utopia.jpg', 'Utopia - Địa đàng trần gian (Tái Bản 2020)', 44000, './upload/img/ProductsCare/day.png', 'Giao thứ hai, 04/03'),
(5, './upload/img/ProductsCare/nguoiduadieu.jpg', 'Người Đua Diều (Tái Bản 2018)', 100000, './upload/img/ProductsCare/now.png', 'Giao nhanh trong 2h'),
(6, './upload/img/ProductsCare/buocchamlaigiuathegianvoiva.jpg', 'Bước Chậm Lại Giữa Thế Gian Vội Vã (Tái Bản)', 63300, './upload/img/ProductsCare/now.png', 'Giao nhanh trong 2h'),
(7, './upload/img/ProductsCare/motthoangtarucroonhangian.jpg', 'Một Thoáng Ta Rực Rỡ Ở Nhân Gian', 100000, './upload/img/ProductsCare/now.png', 'Giao nhanh trong 2h'),
(8, './upload/img/ProductsCare/dieukydieuotiemtaphoanamiya.jpg', 'Điều Kỳ Diệu Của Tiệm Tạp Hóa NAMIYA (Tái Bản)', 81400, './upload/img/ProductsCare/now.png', 'Giao nhanh trong 2h'),
(9, './upload/img/ProductsCare/danhthucconnguoiphithuongtrongban.jpg', 'Sách Đánh Thức Con Người Phi Thường Trong Bạn', 114900, './upload/img/ProductsCare/now.png', 'Giao nhanh trong 2h'),
(10, './upload/img/ProductsCare/4thoauoc.jpg', 'Bốn Thỏa Ước', 84300, './upload/img/ProductsCare/now.png', 'Giao nhanh trong 2h'),
(11, './upload/img/ProductsCare/48nguyentacquyenluc.jpg', '48 Nguyên Tắc Chủ Chốt Của Quyền Lực (Tái Bản 2020)', 141000, './upload/img/ProductsCare/now.png', 'Giao nhanh trong 2h'),
(12, './upload/img/ProductsCare/tuoithodudoi.jpg', 'Tuổi Thơ Dữ Dội - Tập 1 (Tái Bản)', 59000, './upload/img/ProductsCare/now.png', 'Giao nhanh trong 2h'),
(13, './upload/img/ProductsCare/38lathu.jpg', 'Tỷ Phú John Davison Rockefeller và 38 Lá Thư Gửi Cho Con Trai', 113760, './upload/img/ProductsCare/now.png', 'Giao nhanh trong 2h'),
(14, './upload/img/ProductsCare/sucmanhngontu.jpg', 'Sách Sức Mạnh Của Ngôn Từ (Tái Bản 2022)', 73900, './upload/img/ProductsCare/now.png', 'Giao nhanh trong 2h');

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `subtotal` int(11) NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quantity` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `checked` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`id`, `user_id`, `product_id`, `product_name`, `price`, `subtotal`, `image`, `quantity`, `created_at`, `updated_at`, `checked`) VALUES
(9, 3, 2, 'Xứ Cát', 174000, 174000, './upload/img/products/vanhoc/2.jpg', 1, '2024-04-20 01:29:22', '2024-04-20 01:29:22', 0),
(11, 4, 1, 'Một người phụ nữ (Nobel Prize in Literature 2022)', 59300, 118600, './upload/img/products/vanhoc/1.jpg', 2, '2024-04-20 08:40:57', '2024-04-21 02:18:31', 0),
(12, 4, 2, 'Xứ Cát', 174000, 348000, './upload/img/products/vanhoc/2.jpg', 2, '2024-04-20 08:41:14', '2024-04-21 02:19:24', 0);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `image` varchar(256) NOT NULL,
  `title` varchar(256) NOT NULL,
  `Published_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `image`, `title`, `Published_at`) VALUES
(1, './upload/img/category/vanhoc.jpg\r\n', 'Sách Văn Học', '2024-03-10 16:43:54'),
(2, './upload/img/category/kinhte.jpg', 'Sách Kinh Tế', '2024-03-10 16:43:54'),
(3, './upload/img/category/thieunhi.jpg', 'Sách Thiếu Nhi', '2024-03-10 16:43:54'),
(4, './upload/img/category/selfhelp.jpg', 'Sách Kỹ Năng Sống', '2024-03-10 16:43:54'),
(5, './upload/img/category/mevabe.jpg', 'Sách Bà Mẹ - Em Bé', '2024-03-10 16:43:54'),
(6, './upload/img/category/giaotrinh.jpg', 'Sách Giáo Khoa - Giáo Trình', '2024-03-10 16:43:54'),
(7, './upload/img/category/thamkhao.jpeg', 'Sách Tham Khảo', '2024-03-10 16:43:54'),
(8, './upload/img/category/tudien.jpg', 'Từ Điển', '2024-03-10 16:43:54'),
(9, './upload/img/category/tonghop.jpg', 'Sách Kiến Thức Tổng Hợp', '2024-03-10 16:43:54'),
(10, './upload/img/category/kythuat.jpg', 'Sách Khoa Học - Kỹ Thuật ', '2024-03-10 16:43:54'),
(11, './upload/img/category/lichsu.jpg', 'Sách Lịch Sử', '2024-03-10 16:43:54'),
(12, './upload/img/category/dienanh.jpg', 'Điện Ảnh - Nhạc - Họa', '2024-03-10 16:43:54'),
(13, './upload/img/category/truyentranh.jpg', 'Truyện Tranh, Manga, Comic', '2024-03-10 16:43:54'),
(14, './upload/img/category/tongiao.jpg', 'Sách Tôn Giáo - Tâm Linh', '2024-03-10 16:43:54'),
(15, './upload/img/category/dialy.jpg', 'Sách Văn Hóa - Địa Lý - Du Lịch', '2024-03-10 16:43:54'),
(16, './upload/img/category/chinhtri.jpg', 'Sách Chính Trị - Pháp Lý', '2024-03-10 16:43:54'),
(17, './upload/img/category/nongnghiep.jpg', 'Sách Nông - Lâm - Ngư Nghiệp', '2024-03-10 16:43:54'),
(18, './upload/img/category/it.jpg', 'Sách Công Nghệ Thông Tin', '2024-03-10 16:43:54'),
(19, './upload/img/category/yhoc.jpg', 'Sách Y Học', '2024-03-10 16:43:54'),
(20, './upload/img/category/tapchi.jpeg', 'Tạp Chí - Catalogue', '2024-03-10 16:43:54'),
(21, './upload/img/category/tamly.jpg', 'Sách Tâm lý - Giới tính', '2024-03-10 16:43:54'),
(22, './upload/img/category/giadinh.jpg', 'Sách Thường Thức - Gia Đình', '2024-03-10 16:43:54'),
(23, './upload/img/category/thethao.jpg', 'Thể Dục - Thể Thao', '2024-03-10 16:43:54');

-- --------------------------------------------------------

--
-- Table structure for table `category_details`
--

CREATE TABLE `category_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `title_details` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category_details`
--

INSERT INTO `category_details` (`id`, `category_id`, `title_details`, `created_at`, `updated_at`) VALUES
(1, 1, 'Du ký', NULL, NULL),
(2, 1, 'Light novel', NULL, NULL),
(3, 1, 'Phê Bình - Lý Luận Văn Học', NULL, NULL),
(4, 1, 'Phóng sự - Ký sự - Bút ký', NULL, NULL),
(5, 1, 'Tác phẩm kinh điển', NULL, NULL),
(6, 1, 'Thơ', NULL, NULL),
(7, 1, 'Tiểu sử - Hồi ký', NULL, NULL),
(8, 1, 'Tiểu Thuyết', NULL, NULL),
(9, 1, 'Tranh Truyện', NULL, NULL),
(10, 1, 'Truyện cổ tích - Ngụ ngôn', NULL, NULL),
(11, 1, 'Truyện cười', NULL, NULL),
(12, 1, 'Truyện dài', NULL, NULL),
(13, 1, 'Truyện đam mỹ', NULL, NULL),
(14, 1, 'Truyện Giả tưởng - Huyền Bí - Phiêu Lưu', NULL, NULL),
(15, 1, 'Truyện kiếm hiệp', NULL, NULL),
(16, 1, 'Truyện kinh dị', NULL, NULL),
(17, 1, 'Truyện ngắn - Tản văn - Tạp Văn', NULL, NULL),
(18, 1, 'Truyện ngôn tình', NULL, NULL),
(19, 1, 'Truyện trinh thám', NULL, NULL),
(20, 1, 'Ca Dao - Tục Ngữ - Thành ngữ\r\n', NULL, NULL),
(21, 1, 'Sách ảnh', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `dealtoday`
--

CREATE TABLE `dealtoday` (
  `dealtoday_id` int(11) NOT NULL,
  `name` varchar(1000) NOT NULL,
  `image` varchar(1000) NOT NULL,
  `category` varchar(256) NOT NULL,
  `subcategory` varchar(256) NOT NULL,
  `thumbnail1` varchar(256) NOT NULL,
  `thumbnail2` varchar(256) NOT NULL,
  `thumbnail3` varchar(256) NOT NULL,
  `thumbnail4` varchar(256) NOT NULL,
  `author` varchar(256) NOT NULL,
  `feature1` varchar(1000) NOT NULL,
  `feature2` varchar(1000) NOT NULL,
  `feature3` varchar(1000) NOT NULL,
  `quantity` int(11) NOT NULL,
  `sold` int(11) NOT NULL,
  `discount` int(11) NOT NULL,
  `pricediscount` float NOT NULL,
  `status` varchar(100) NOT NULL,
  `percentsold` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dealtoday`
--

INSERT INTO `dealtoday` (`dealtoday_id`, `name`, `image`, `category`, `subcategory`, `thumbnail1`, `thumbnail2`, `thumbnail3`, `thumbnail4`, `author`, `feature1`, `feature2`, `feature3`, `quantity`, `sold`, `discount`, `pricediscount`, `status`, `percentsold`) VALUES
(1, '', './upload/img/Productsdeal/thientaibentraikedienbenphai.jpg', '', '', '', '', '', '', '', '', '', '', 0, 0, 31, 124000, 'Vừa mở bán', 50),
(2, '', './upload/img/Productsdeal/caycamngotcuatoi.jpg', '', '', '', '', '', '', '', '', '', '', 0, 0, 32, 73100, 'Vừa mở bán', 100),
(3, '', './upload/img/Productsdeal/chuthuathoichien.jpg', '', '', '', '', '', '', '', '', '', '', 0, 0, 10, 30000, 'Vừa mở bán', 50),
(14, '', './upload/img/Productsdeal/chunghiakhacky.jpg', '', '', '', '', '', '', '', '', '', '', 0, 0, 30, 106000, 'Vừa mở bán', 70),
(15, '', './upload/img/Productsdeal/giaithichnguphaptienganh.jpg', '', '', '', '', '', '', '', '', '', '', 0, 0, 33, 147900, 'Vừa mở bán', 150),
(16, '', './upload/img/Productsdeal/hieuvetraitim.jpg', '', '', '', '', '', '', '', '', '', '', 0, 0, 17, 130500, 'Vừa mở bán', 70),
(17, '', './upload/img/Productsdeal/khongphailasoicungdunglacuu.jpg', '', '', '', '', '', '', '', '', '', '', 0, 0, 29, 91200, 'Vừa mở bán', 100),
(18, 'Luật Tâm Thức - Giải Mã Ma Trận Vũ Trụ', './upload/img/Productsdeal/luattamthuc.jpg', 'Sách kiến thức tổng hợp', 'Lĩnh vực khác', './upload/img/Productsdeal/luattamthuc.jpg', '/upload/img/Productdetails/sach/Luattamthuc/xemtruoc.jpg', '/upload/img/Productdetails/sach/Luattamthuc/xemtruoc1.jpg', '/upload/img/Productdetails/sach/Luattamthuc/xemtruoc2.jpg', 'Ngô Sa Thạch', 'Giải thích quy luật tự nhiên và nguồn gốc vũ trụ một cách đơn giản và liên quan chặt chẽ tới khoa học hiện đại.', 'Giải thích hiện tượng tâm linh như quy hồi tiền kiếp và tiên đoán sự kiện.', 'Cung cấp cách thay đổi cuộc sống bằng cách thay đổi tâm thức và hiểu đúng về quy luật vũ trụ.', 6640, 5000, 23, 226000, 'Vừa mở bán', 50),
(19, 'Nhà Giả Kim (Tái Bản 2020)', './upload/img/Productsdeal/nhagiakim.jpg', 'Sách văn học', 'Tác phẩm kinh điển', '/upload/img/Productdetails/sach/Nhagiakim/covertruoc.jpg', '/upload/img/Productdetails/sach/Nhagiakim/xemtruoc.jpg', '/upload/img/Productdetails/sach/Nhagiakim/xemtruoc1.jpg', '/upload/img/Productdetails/sach/Nhagiakim/xemtruoc2.jpg', 'Paulo Coelho', 'Câu chuyện cổ tích giản dị, giàu chất thơ và nhân ái.', 'Thấm đẫm những minh triết huyền bí của phương Đông.\r\n\r\n', 'Có khả năng thay đổi cuộc sống người đọc.', 5850, 5000, 23, 60600, 'Vừa mở bán', 160),
(20, '', './upload/img/Productsdeal/nonggianlabannang.jpg', '', '', '', '', '', '', '', '', '', '', 0, 0, 29, 63200, 'Vừa mở bán', 90),
(21, '', './upload/img/Productsdeal/tuoithodudoi.jpg', '', '', '', '', '', '', '', '', '', '', 0, 0, 40, 48000, 'Vừa mở bán', 60),
(22, '', './upload/img/Productsdeal/vithanquyetdinh.jpg', '', '', '', '', '', '', '', '', '', '', 0, 0, 28, 57000, 'Vừa mở bán', 50);

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `id` int(11) DEFAULT NULL,
  `TitleEvent` varchar(1000) NOT NULL,
  `TimeEvent` varchar(1000) NOT NULL,
  `Description` varchar(1000) NOT NULL,
  `More` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id`, `TitleEvent`, `TimeEvent`, `Description`, `More`) VALUES
(NULL, 'SALE KHỦNG NGÀY QUỐC TẾ PHỤ NỮ 8/3', 'Sự kiện diễn ra vào thứ sáu, 8/3/2024 vào lúc 0:00am (giờ Việt Nam).', 'Để tận hưởng trải nghiệm tốt nhất, hãy bật âm thanh.', 'Khám phá');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(13, '2014_10_12_000000_create_users_table', 1),
(14, '2014_10_12_100000_create_password_resets_table', 2),
(15, '2019_08_19_000000_create_failed_jobs_table', 2),
(16, '2019_12_14_000001_create_personal_access_tokens_table', 2),
(18, '2024_03_31_153807_create_carts_table', 3),
(19, '2024_04_19_150901_create_product_details_table', 4),
(20, '2024_04_20_031050_create_carts_table', 5),
(22, '2024_04_21_030008_add_checked_to_products_table', 6);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `populartool`
--

CREATE TABLE `populartool` (
  `id` int(11) NOT NULL,
  `image` varchar(1000) NOT NULL,
  `title` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `populartool`
--

INSERT INTO `populartool` (`id`, `image`, `title`) VALUES
(1, './upload/img/populartool/giamgia.png', 'Mã giảm giá'),
(2, './upload/img/populartool/maydocsach.jpg', 'Máy Đọc Sách');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `author` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subcategory` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thumbnail1` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thumbnail2` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thumbnail3` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thumbnail4` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `feature1` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `feature2` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `feature3` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` int(11) NOT NULL,
  `rating` int(11) NOT NULL DEFAULT 0,
  `quantity` int(11) NOT NULL,
  `sold` int(11) NOT NULL DEFAULT 0,
  `discount_percent` decimal(5,2) DEFAULT NULL,
  `delivery_time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `image`, `name`, `author`, `category`, `subcategory`, `thumbnail1`, `thumbnail2`, `thumbnail3`, `thumbnail4`, `feature1`, `feature2`, `feature3`, `description`, `price`, `rating`, `quantity`, `sold`, `discount_percent`, `delivery_time`, `created_at`, `updated_at`) VALUES
(1, 1, './upload/img/products/vanhoc/1.jpg', 'Một người phụ nữ (Nobel Prize in Literature 2022)', 'Annie Ernaux', 'Sách văn học', 'Truyện ngắn - Tản văn - Tạp Văn\r\n', '/upload/img/Products/vanhoc/Thumbnail/1/1.jpg', '/upload/img/Products/vanhoc/Thumbnail/1/2.jpg', '/upload/img/Products/vanhoc/Thumbnail/1/3.jpg', '/upload/img/Products/vanhoc/Thumbnail/1/4.jpg', 'Nhân văn và cảm xúc sâu sắc.', 'Ngôn ngữ thân thiện và gần gũi.', 'Tác giả được trao giải Nobel Văn chương 2022.', NULL, 59300, 5, 1217, 497, '25.00', 'Giao thứ 2, 22/04', NULL, NULL),
(2, 1, './upload/img/products/vanhoc/2.jpg', 'Xứ Cát', 'Frank Herbert', 'Sách văn học', 'Truyện Giả tưởng - Huyền Bí - Phiêu Lưu\r\n', '/upload/img/Products/vanhoc/Thumbnail/2/1.jpg', '/upload/img/Products/vanhoc/Thumbnail/2/2.jpg', '/upload/img/Products/vanhoc/Thumbnail/2/3.jpg', '/upload/img/Products/vanhoc/Thumbnail/2/4.jpg', 'Cốt truyện đa dạng và phức tạp, hấp dẫn và căng thẳng.\r\n', '\r\nXây dựng tâm lý nhân vật tinh tế, độc đáo và thú vị.\r\n', 'Kiến thức khổng lồ về không gian và con người được tận dụng một cách hấp dẫn.', NULL, 174000, 1, 0, 5000, '30.00', 'Giao Thứ 2, 22/04', NULL, NULL),
(3, 1, './upload/img/products/vanhoc/3.jpg', 'Utopia - Địa đàng trần gian (Tái Bản 2020)', 'Thomas More', 'Sách văn học', 'Truyện ngắn - Tản văn - Tạp Văn\r\n', 'Sách văn học', 'Sách văn học', 'Sách văn học', 'Sách văn học', 'Sách văn học', 'Sách văn học', 'Sách văn học', NULL, 45100, 5, 0, 1000, '25.00', 'Giao thứ 3, 23/04', NULL, NULL),
(4, 1, './upload/img/products/vanhoc/4.jpg', 'Hoa Vẫn Nở Mỗi Ngày', 'Valérie Perrin', 'Sách văn học', 'Truyện ngắn - Tản văn - Tạp Văn\r\n', 'Sách văn học', 'Sách văn học', 'Sách văn học', 'Sách văn học', 'Sách văn học', 'Sách văn học', 'Sách văn học', NULL, 203650, 5, 0, 400, '0.00', 'Giao thứ 3, 23/04', NULL, NULL),
(5, 1, '/upload/img/products/vanhoc/5.jpg', 'Nỗi nhục (Nobel Prize in Literature 2022)', 'Annie Ernaux', 'Sách văn học', 'Truyện ngắn - Tản văn - Tạp Văn\r\n', 'Sách văn học', 'Sách văn học', 'Sách văn học', 'Sách văn học', 'Sách văn học', 'Sách văn học', 'Sách văn học', NULL, 59300, 5, 0, 500, '25.00', '', NULL, NULL),
(6, 1, './upload/img/products/vanhoc/6.jpg', 'Cây Cam Ngọt Của Tôi', 'José Mauro de Vasconcelos', 'Sách văn học', 'Sách văn học', 'Sách văn học', 'Sách văn học', 'Sách văn học', 'Sách văn học', 'Sách văn học', 'Sách văn học', 'Sách văn học', NULL, 75400, 5, 13265, 5000, NULL, 'Giao thứ 3, 23/04', NULL, NULL),
(7, 1, './upload/img/products/vanhoc/7.jpg', 'Thiên Tài Bên Trái, Kẻ Điên Bên Phải (Tái Bản)', 'Sách văn học', 'Sách văn học', 'Sách văn học', 'Sách văn học', 'Sách văn học', 'Sách văn học', 'Sách văn học', 'Sách văn học', 'Sách văn học', 'Sách văn học', NULL, 116000, 5, 0, 5000, NULL, 'Giao thứ 3, 23/04', NULL, NULL),
(8, 1, './upload/img/products/vanhoc/8.jpg', 'Nhà Giả Kim (Tái Bản 2020)', 'Sách văn học', 'Sách văn học', 'Sách văn học', 'Sách văn học', 'Sách văn học', 'Sách văn học', 'Sách văn học', 'Sách văn học', 'Sách văn học', 'Sách văn học', NULL, 55100, 5, 0, 5000, NULL, 'Giao thứ 3, 23/04', NULL, NULL),
(9, 1, './upload/img/products/vanhoc/9.jpg', 'Dear, Darling', 'Sách văn học', 'Sách văn học', 'Sách văn học', 'Sách văn học', 'Sách văn học', 'Sách văn học', 'Sách văn học', 'Sách văn học', 'Sách văn học', 'Sách văn học', NULL, 59600, 5, 0, 5000, NULL, 'Giao thứ 3, 23/04', NULL, NULL),
(10, 1, './upload/img/products/vanhoc/10.jpg', 'Xa Ngoài Kia Nơi Loài Tôm Hát - Where The Crawdads Sing', 'Sách văn học', 'Sách văn học', 'Sách văn học', 'Sách văn học', 'Sách văn học', 'Sách văn học', 'Sách văn học', 'Sách văn học', 'Sách văn học', 'Sách văn học', NULL, 104000, 5, 10, 4000, '37.00', 'Giao thứ 3, 23/04', NULL, NULL),
(11, 1, './upload/img/products/vanhoc/11.jpg', 'Một chỗ trong đời', 'Sách văn học', 'Sách văn học', 'Sách văn học', 'Sách văn học', 'Sách văn học', 'Sách văn học', 'Sách văn học', 'Sách văn học', 'Sách văn học', 'Sách văn học', NULL, 51800, 5, 10, 1000, '25.00', 'Giao thứ 3, 23/04', NULL, NULL),
(12, 1, './upload/img/products/vanhoc/12.jpg', 'Hội Chứng E', 'Sách văn học', 'Sách văn học', 'Sách văn học', 'Sách văn học', 'Sách văn học', 'Sách văn học', 'Sách văn học', 'Sách văn học', 'Sách văn học', 'Sách văn học', NULL, 126000, 5, 0, 1000, '30.00', 'Giao thứ 3, 23/04', NULL, NULL),
(13, 1, './upload/img/products/vanhoc/13.jpg', 'Những Giấc Mơ Ở Hiệu Sách Morisaki', 'Sách văn học', 'Sách văn học', 'Sách văn học', 'Sách văn học', 'Sách văn học', 'Sách văn học', 'Sách văn học', 'Sách văn học', 'Sách văn học', 'Sách văn học', NULL, 126000, 5, 0, 2000, '30.00', 'Giao thứ 3, 23/04', NULL, NULL),
(14, 1, './upload/img/products/vanhoc/14.jpg', 'Tam Thể 1 (Tái Bản)', 'Sách văn học', 'Sách văn học', 'Sách văn học', 'Sách văn học', 'Sách văn học', 'Sách văn học', 'Sách văn học', 'Sách văn học', 'Sách văn học', 'Sách văn học', NULL, 105000, 5, 0, 1500, '30.00', 'Giao thứ 3, 23/04', NULL, NULL),
(15, 1, './upload/img/products/vanhoc/15.jpg', 'Điều Đẹp Nhất Có Khi Là Buông Tay (Tặng Kèm Bookmark)', 'Sách văn học', 'Sách văn học', 'Sách văn học', 'Sách văn học', 'Sách văn học', 'Sách văn học', 'Sách văn học', 'Sách văn học', 'Sách văn học', 'Sách văn học', NULL, 49000, 5, 0, 5000, '32.00', 'Giao thứ 3, 23/04', NULL, NULL),
(16, 1, './upload/img/products/vanhoc/16.jpg', 'Một Thoáng Ta Rực Rỡ Ở Nhân Gian', 'Sách văn học', 'Sách văn học', 'Sách văn học', 'Sách văn học', 'Sách văn học', 'Sách văn học', 'Sách văn học', 'Sách văn học', 'Sách văn học', 'Sách văn học', NULL, 94300, 5, 0, 5000, '30.00', 'Giao thứ 3, 23/04', NULL, NULL),
(17, 1, './upload/img/products/vanhoc/17.jpg', 'Yêu Những Điều Không Hoàn Hảo', 'Sách văn học', 'Sách văn học', 'Sách văn học', 'Sách văn học', 'Sách văn học', 'Sách văn học', 'Sách văn học', 'Sách văn học', 'Sách văn học', 'Sách văn học', NULL, 89000, 5, 10, 100, NULL, 'Giao thứ 3, 23/04', NULL, NULL),
(18, 1, './upload/img/products/vanhoc/18.jpg', 'Đại Dương Đen - Những Câu Chuyện Từ Thế Giới Của Trầm Cảm', 'Sách văn học', 'Sách văn học', 'Sách văn học', 'Sách văn học', 'Sách văn học', 'Sách văn học', 'Sách văn học', 'Sách văn học', 'Sách văn học', 'Sách văn học', NULL, 56100, 5, 0, 500, NULL, 'Giao thứ 3, 23/04', NULL, NULL),
(19, 1, './upload/img/products/vanhoc/19.jpg', 'Thư Viện Nửa Đêm', 'Sách văn học', 'Sách văn học', 'Sách văn học', 'Sách văn học', 'Sách văn học', 'Sách văn học', 'Sách văn học', 'Sách văn học', 'Sách văn học', 'Sách văn học', NULL, 56100, 5, 0, 500, NULL, 'Giao thứ 3, 23/04', NULL, NULL),
(20, 1, './upload/img/products/vanhoc/20.jpg', 'Tiểu Thuyết - Gió Lạnh Đầu Mùa (Thạch Lam) - SBOOKS', 'Sách văn học', 'Sách văn học', 'Sách văn học', 'Sách văn học', 'Sách văn học', 'Sách văn học', 'Sách văn học', 'Sách văn học', 'Sách văn học', 'Sách văn học', NULL, 56100, 5, 0, 500, NULL, 'Giao thứ 3, 23/04', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `product_details`
--

CREATE TABLE `product_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `issuingcompany` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `versiontype` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `publicationdate` date NOT NULL,
  `size` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `translator` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `covertype` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pages` int(11) NOT NULL,
  `language` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `publishingcompany` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `titledescription` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `descriptionmore` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_details`
--

INSERT INTO `product_details` (`id`, `product_id`, `issuingcompany`, `versiontype`, `publicationdate`, `size`, `translator`, `covertype`, `pages`, `language`, `publishingcompany`, `titledescription`, `description`, `descriptionmore`, `created_at`, `updated_at`) VALUES
(1, 1, 'Nhã Nam', 'Phiên bản thường', '2023-04-01', '14 x 20.5 cm', 'Thu Phương', 'Bìa mềm', 109, 'Tiếng Việt', 'Nhà Xuất Bản Phụ Nữ', 'Mô tả sản phẩm', '“Tôi sẽ không còn nghe thấy giọng nói của bà nữa. […] Tôi đã đánh mất sợi dây nối cuối cùng với thế giới xuất thân của mình.”\r\nẤy là cảm giác của Annie Ernaux khi thực sự nhận ra mẹ mình không còn trên cõi đời. Và bà gắng đi tìm lại những gương mặt khác nhau của người mẹ ấy, một người phụ nữ vốn rất khỏe, xông xáo, cởi mở, qua đời ngày 7 tháng Tư năm 1986, sau một thời gian mắc bệnh Alzeimer. Qua sự tái hiện cuộc đời một nữ công nhân, rồi chủ hàng thực phẩm luôn lo âu về địa vị và học hỏi không ngừng, Annie Ernaux cũng cho ta thấy sự tiến triển cũng như tính hai mặt của những tình cảm mà một người con gái dành cho mẹ: tình yêu, lòng thù ghét, sự âu yếm, cảm giác tội lỗi và cuối cùng là sự gắn bó máu thịt với người đàn bà già cả đã sa sút trí tuệ. Cùng với đó phảng phất những thăng trầm của nước Pháp suốt thế kỷ 20, giống như lời tổng thống Pháp Emmanuel Macron đã phát biểu khi Annie Ernaux trở thành chủ nhân giải Nobel Văn chương 2022:\r\n\r\n“Suốt 50 năm qua, Annie Ernaux viết cuốn tiểu thuyết về ký ức tập thể và riêng tư của đất nước chúng ta. Tiếng nói của bà là tiếng nói của tự do của người phụ nữ và của những điều đã bị lãng quên trong thế kỷ qua.”', 'Annie Ernaux sinh năm 1940 tại Lillebonne, lớn lên tại Yvetot, đều thuộc tỉnh Seine-Maritime, vùng Normandie, tây bắc nước Pháp. Bà học ngành Văn học hiện đại ở đại học Rouen, sau đó làm giáo viên văn ở Annecy, Pontoise rồi Trung tâm giáo dục từ xa quốc gia. Bà là tiến sĩ danh dự của đại học Cergy-Pontoise.\r\n\r\nNăm 1974, bà xuất bản tác phẩm đầu tay Les armoires vides (Những ngăn kéo rỗng) kể về lần phá thai chui của bản thân vào năm 1964. Năm 1983, bà xuất bản Một chỗ trong đời, kể về cuộc đời của cha mình, và cuốn sách đã đoạt giải Renaudot. Năm 2008, bà xuất bản Les années (Những năm tháng), tác phẩm được coi là hoàn chỉnh cả về nội dung lẫn hình thức của thể loại hồi ức tập thể.\r\n\r\nTrong suốt sự nghiệp, Annie Ernaux đã được trao rất nhiều giải thưởng: giải Renaudot (1984), giải thưởng về ngôn ngữ Pháp, giải François Mauriac (2008), giải Marguerite Youcenar (2017)… và đặc biệt, giải Nobel Văn chương (2022) vì “với lòng can đảm cùng sự nhạy bén bên trong, bà đã khám phá ra những cội rễ, những cách biệt và những câu thúc tập thể của hồi ức cá nhân”.\r\n\r\nBà hiện sống ở Cergy, vùng Île-de-France.\r\n\r\n\r\nCác tác phẩm của Annie Ernaux xuất bản tại Nhã Nam:\r\n\r\n- Một chỗ trong đời\r\n\r\n- Hồi ức thiếu nữ\r\n\r\n- Nỗi nhục\r\n\r\n- Cơn cuồng si\r\n\r\n- Một người phụ nữ\r\n\r\n- Những năm tháng (sắp xuất bản)\r\n\r\nGiá sản phẩm trên Tiki đã bao gồm thuế theo luật hiện hành. Bên cạnh đó, tuỳ vào loại sản phẩm, hình thức và địa chỉ giao hàng mà có thể phát sinh thêm chi phí khác như phí vận chuyển, phụ phí hàng cồng kềnh, thuế nhập khẩu (đối với đơn hàng giao từ nước ngoài có giá trị trên 1 triệu đồng).....', NULL, NULL),
(2, 2, '\r\nNhã Nam', '\r\nPhiên bản thường', '2021-12-01', '17 x 25 cm', '\r\nTrần Tiễn Cao Đăng', 'Bìa mềm', 714, 'Tiếng Việt', 'Nhà Xuất Bản Hội Nhà Văn', 'Sơ lược về tác phẩm', 'Một thời điểm rất xa trong tương lai…\r\n\r\nTừ đời này sang đời khác, người Fremen trên hành tinh sa mạc lưu truyền lời tiên tri về một đấng cứu tinh sẽ dẫn dắt họ giành lấy tự do đích thực…\r\n\r\nTừ thế hệ này sang thế hệ khác, những nữ phù thủy Bene Gesserit mỏi mòn chờ đợi sự xuất hiện của một B.G. nam giới duy nhất, người có thể vượt qua mọi giới hạn không gian - thời gian…\r\n\r\nLà Lisal al-Gaib của người Fremen, là Kwisatz Haderach của học viện Bene Gesserit, chàng công tước trẻ tuổi Paul Atreides đã làm tất cả những gì có thể để thay đổi định mệnh đó. Cha bị giết chết, mẹ bị cho là kẻ phản bội, gia tộc bị tàn sát, bản thân bị săn đuổi đến đường cùng, Paul đơn độc dấn thân vào một cuộc phiêu lưu sinh tử, không hề biết rằng mỗi hành động của mình sẽ góp phần quyết định vận mệnh của cả thiên hà. Sa mạc Arrakis khắc nghiệt tưởng như sẽ là nơi chôn vùi vĩnh viễn vinh quang của gia tộc Atreides, nhưng hóa ra lại thành điểm khởi đầu cho một huyền thoại mới…', 'Là một trong những cuốn tiểu thuyết khoa học giả tưởng bán chạy nhất mọi thời đại, Xứ Cát không chỉ là lựa chọn đối với những tín đồ của Chúa nhẫn, Chiến tranh giữa các vì sao… mà còn chinh phục độc giả đủ mọi lứa tuổi, mọi tầng lớp và sở thích bởi sự đa dạng và phức tạp của con người và không gian trong truyện, bởi sự tinh tế trong xây dựng tâm lý, bởi sự hấp dẫn, căng thẳng và bất ngờ của cốt truyện, bởi sự độc đáo và thú vị của khối lượng kiến thức khổng lồ cũng như bởi sự hấp dẫn trong những tư tưởng về tôn giáo, về tự do, về tình yêu, về sự sống và cái chết…\r\n\r\nNhận định\r\n\r\nĐộc nhất vô nhị… Không gì có thể sánh nổi, ngoại trừ Chúa nhẫn.\r\nArthur C. Clarke\r\n\r\nCó lẽ khó khăn lớn nhất khi đọc quyển sách này chính là phải đặt nó xuống.\r\n\r\nClassic Sci-Fi\r\n\r\n“Bức tranh toàn cảnh về một xã hội ngoài hành tinh hoàn thiện và chi tiết hơn bất kỳ tác giả nào trong lĩnh vực này từng dựng được… Một câu chuyện lôi cuốn vừa bởi hành động vừa bởi tầm nhìn triết học.”\r\n\r\nWashington Post Book World\r\n\r\nGiá sản phẩm trên Tiki đã bao gồm thuế theo luật hiện hành. Bên cạnh đó, tuỳ vào loại sản phẩm, hình thức và địa chỉ giao hàng mà có thể phát sinh thêm chi phí khác như phí vận chuyển, phụ phí hàng cồng kềnh, thuế nhập khẩu (đối với đơn hàng giao từ nước ngoài có giá trị trên 1 triệu đồng).....', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `qa`
--

CREATE TABLE `qa` (
  `id` int(11) NOT NULL,
  `img` varchar(1000) NOT NULL,
  `title` varchar(1000) NOT NULL,
  `question` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `qa`
--

INSERT INTO `qa` (`id`, `img`, `title`, `question`) VALUES
(1, './upload/img/QA/cart.jpg', 'Mua sắm', 'Cuốn sách nào để giúp tôi có thể giao tiếp tốt hơn?'),
(2, './upload/img/QA/cart.jpg', 'Mua sắm', 'Tôi muốn biết các thương hiệu sách nổi tiếng?'),
(3, './upload/img/QA/sale.jpg', 'Khuyến mãi', 'Chính sách freeship cho khác hàng thường xuyên là gì?'),
(4, './upload/img/QA/inbox.jpg', 'Dịch vụ', 'Làm thế nào để hủy đơn hàng?'),
(5, './upload/img/QA/knowledges.jpg', 'Kiến thức', 'Hãy chỉ cho tôi phương pháp đọc sách hiệu quả?'),
(6, './upload/img/QA/cart.jpg', 'Mua sắm', 'Tôi muốn thành công trong việc quản lý thời gian, vậy cuốn sách nào tốt nhất cho tôi?');

-- --------------------------------------------------------

--
-- Table structure for table `quicktoolswidget`
--

CREATE TABLE `quicktoolswidget` (
  `id` int(11) NOT NULL,
  `image` varchar(1000) NOT NULL,
  `title` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `quicktoolswidget`
--

INSERT INTO `quicktoolswidget` (`id`, `image`, `title`) VALUES
(1, './upload/img/quicklinkswidget/banchay.png', 'Sản phẩm bán chạy nhất của chúng tôi'),
(2, './upload/img/quicklinkswidget/giamgia.png', 'Ưu đãi'),
(3, './upload/img/quicklinkswidget/blog.png', 'Blog '),
(4, './upload/img/quicklinkswidget/sanphammoi.png', 'Sách mới nhất'),
(5, './upload/img/quicklinkswidget/nhasach.png', 'Nhà sách BookWorld'),
(6, './upload/img/quicklinkswidget/maydocsach.jpg', 'Máy đọc sách');

-- --------------------------------------------------------

--
-- Table structure for table `similarproducts`
--

CREATE TABLE `similarproducts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `dealtoday_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `namebook` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `imgbook` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subimg` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pricebook` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `similarproducts`
--

INSERT INTO `similarproducts` (`id`, `dealtoday_id`, `created_at`, `updated_at`, `namebook`, `imgbook`, `subimg`, `pricebook`) VALUES
(1, 19, NULL, NULL, '', '/upload/img/Productdetails/combo/nhagiakim.jpg', '', 0),
(2, 19, NULL, NULL, '', '/upload/img/Productdetails/combo/danongsaohoadanbasaokim.jpg', '', 0),
(3, 19, NULL, NULL, '', '/upload/img/Productdetails/combo/batdaucauhoitaisao.jpg', '', 0),
(4, 19, NULL, NULL, '', '/upload/img/Productdetails/combo/muonanduocan.jpg', '', 0),
(5, 18, NULL, NULL, '', '/upload/img/Productdetails/combo/luattamthuc.jpg', '', 0),
(6, 18, NULL, NULL, '', '/upload/img/Productdetails/combo/danongsaohoadanbasaokim.jpg', '', 0),
(7, 18, NULL, NULL, '', '/upload/img/Productdetails/combo/batdaucauhoitaisao.jpg', '', 0),
(8, 18, NULL, NULL, '', '/upload/img/Productdetails/combo/muonanduocan.jpg', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `sugestionproduct`
--

CREATE TABLE `sugestionproduct` (
  `id` int(11) NOT NULL,
  `tab` int(11) NOT NULL,
  `image` varchar(1000) NOT NULL,
  `name` varchar(1000) NOT NULL,
  `price` int(11) NOT NULL,
  `imgstatus` varchar(1000) NOT NULL,
  `timedelivery` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sugestionproduct`
--

INSERT INTO `sugestionproduct` (`id`, `tab`, `image`, `name`, `price`, `imgstatus`, `timedelivery`) VALUES
(1, 1, './upload/img/suggestionwidget/book/tedtalks.jpg', 'Combo Hùng Biện Kiểu Ted Talk (3 quyển)', 450350, './upload/img/suggestionwidget/day.png', 'Giao thứ 2, 11/03');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `province` varchar(256) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `province_id` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `district_id` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ward_id` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `birthday` varchar(256) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(256) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ip` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role`, `name`, `phone`, `province`, `province_id`, `district_id`, `ward_id`, `address`, `birthday`, `image`, `status`, `description`, `user_agent`, `ip`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'TrungDepTrai', NULL, 'Lựa chọn', NULL, NULL, NULL, 'số 79 Tống Trân, Quang Trung,TP Hưng Yên, Hưng Yên', '06/11/2003', 'upload/img/users/photo.png', '', NULL, NULL, NULL, 'trungthpthy@gmail.com', NULL, '$2y$10$f.d.VH8/lqdM4qUo4XoVCe.7Cm.1EqrCpg1bCYy3y33t9DAaRerHK', NULL, NULL, '2024-04-06 06:51:48'),
(3, 'user', 'Thần Đèn', NULL, 'Lựa chọn', NULL, NULL, NULL, 'Bãi Sậy, Bối Khê, Ân Thi, Hưng Yên', '04/11/2003', 'upload/img/users/thanden.jpg', '', NULL, NULL, NULL, 'thanden@gmail.com', NULL, '$2y$10$uc5N5r/zPxfdLXBqn5//pOONbRkUXTywJI8/Bz/H.jflGDlJx3.Ie', NULL, NULL, '2024-04-06 06:58:14'),
(4, 'user', 'Heo Con', '0788023724', 'Lựa chọn', NULL, NULL, NULL, 'Vân Trì, Dân Tiến, Khoái Châu, Hưng Yên', '05/03/2003', 'upload/img/users/heocon.jpg', '', NULL, NULL, NULL, 'heocon@gmail.com', NULL, '$2y$10$R8uvENf2dGR3E8ntILmkg.WF7ZFWQYRH8aMS6dtt60WySJldjS8J.', NULL, '2024-04-02 06:49:12', '2024-04-06 06:54:58'),
(5, 'user', 'Tít Con', NULL, 'Lựa chọn', NULL, NULL, NULL, 'Tân Trường, Cẩm Giàng, Hải Dương', '23/05/2003', 'upload/img/users/titcon.jpg', NULL, NULL, NULL, NULL, 'titcon@gmail.com', NULL, '$2y$10$io56vDdBU/si0QA7fCTR.O3U7LU7KweYye/8WG/G5KNJ4NzyXNEky', NULL, '2024-04-04 13:08:26', '2024-04-06 06:55:13'),
(9, 'user', 'Gia Đình Trường Con', '0788023724', 'Lựa chọn', NULL, NULL, NULL, NULL, '05/03/2003', 'upload/img/users/shrekfamily.jpg', NULL, NULL, NULL, NULL, 'shrekfamily@gmail.com', NULL, '$2y$10$pAPN3eBabAk4bi4hPjTkLuq9c7aQEiTTr/csauDbjSXmWKF9.1ixW', NULL, '2024-04-05 10:30:47', '2024-04-15 06:54:24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bestproduct`
--
ALTER TABLE `bestproduct`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brandofficial`
--
ALTER TABLE `brandofficial`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `careproduct`
--
ALTER TABLE `careproduct`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `carts_user_id_foreign` (`user_id`),
  ADD KEY `carts_product_id_foreign` (`product_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category_details`
--
ALTER TABLE `category_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dealtoday`
--
ALTER TABLE `dealtoday`
  ADD PRIMARY KEY (`dealtoday_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `populartool`
--
ALTER TABLE `populartool`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_details`
--
ALTER TABLE `product_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_details_product_id_foreign` (`product_id`);

--
-- Indexes for table `qa`
--
ALTER TABLE `qa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quicktoolswidget`
--
ALTER TABLE `quicktoolswidget`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `similarproducts`
--
ALTER TABLE `similarproducts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sugestionproduct`
--
ALTER TABLE `sugestionproduct`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `category_details`
--
ALTER TABLE `category_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `product_details`
--
ALTER TABLE `product_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `quicktoolswidget`
--
ALTER TABLE `quicktoolswidget`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `similarproducts`
--
ALTER TABLE `similarproducts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `carts`
--
ALTER TABLE `carts`
  ADD CONSTRAINT `carts_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `carts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `product_details`
--
ALTER TABLE `product_details`
  ADD CONSTRAINT `product_details_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
