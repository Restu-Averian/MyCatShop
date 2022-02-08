-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 23, 2021 at 03:22 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `catshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prod_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prod_qty` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(9, '2021_11_22_233650_create_order_items_table', 2),
(11, '2014_10_12_000000_create_users_table', 3),
(12, '2014_10_12_100000_create_password_resets_table', 3),
(13, '2019_08_19_000000_create_failed_jobs_table', 3),
(14, '2019_12_14_000001_create_personal_access_tokens_table', 3),
(15, '2021_11_03_024306_create_products_table', 3),
(16, '2021_11_20_043916_create_reviews_table', 3),
(17, '2021_11_21_023236_create_carts_table', 3),
(18, '2021_11_22_161443_create_orders_table', 3),
(19, '2021_11_22_234857_create_order_items_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notelp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pesan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `name`, `email`, `alamat`, `notelp`, `pesan`, `created_at`, `updated_at`) VALUES
(1, '2', 'Restu Averian Putra', 'restuaverianputra123@gmail.com', 'Padang', '082391365098', NULL, '2021-11-23 04:14:10', '2021-11-23 04:14:10'),
(2, '2', 'Restu Averian Putra', 'restuaverianputra123@gmail.com', 'Padang', '082391365098', NULL, '2021-11-23 04:14:43', '2021-11-23 04:14:43'),
(3, '2', 'Restu Averian Putra', 'restuaverianputra123@gmail.com', 'Padang', '082391365098', NULL, '2021-11-23 07:01:27', '2021-11-23 07:01:27'),
(4, '2', 'Restu Averian Putra', 'restuaverianputra123@gmail.com', 'Padang', '082391365098', NULL, '2021-11-23 07:14:04', '2021-11-23 07:14:04'),
(5, '2', 'Restu Averian Putra', 'restuaverianputra123@gmail.com', 'Padang', '082391365098', NULL, '2021-11-23 07:14:54', '2021-11-23 07:14:54');

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prod_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `qty` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `harga` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`id`, `user_id`, `order_id`, `image`, `prod_id`, `qty`, `status`, `harga`, `created_at`, `updated_at`) VALUES
(1, '2', '2', 'product-images/7bEfva76Vdsoui2M1BXBDX7oiDDeWXPqMycZ9IZB.jpg', '4', '2', 2, '955000', '2021-11-23 04:14:43', '2021-11-23 06:10:21');

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
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kategori` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `productname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` double NOT NULL,
  `kuantitas` int(11) NOT NULL,
  `deskripsi` varchar(2000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ulasan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `kategori`, `productname`, `harga`, `kuantitas`, `deskripsi`, `ulasan`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Wet Food', 'Profelin 400 Gr Kemasan Kaleng', 15000, 10, 'Makanan Kucing Basah Profelin Kaleng All Variant 400 Gram\r\n\r\n\r\nProfelin Wet Food 400 Gram Terdiri Dari Beberapa Varian Rasa Cantumkan Varian Ketika Order :\r\n\r\n1. TUNA IN jelly\r\n2. Sardine With Salmon\r\n3.Sardine With Crabmeat\r\n4. Tuna And Chunky\r\n\r\n\r\nngredients : Tuna, Chicken, Gelling agents, Vitamins and Minerals (vit A, vit D3, vi E, vit K3, vit B1, vit B2, vit B6, Niacin, Pantothenic acid, Folic acid, Biotin, Choline, Taurine, Iron, Manganese, Zinc, Iodine, Selenium)\r\nGuaranteed Analysis :\r\n- Crude Protein : min 10%\r\n- Crude Fat : min 2%\r\n- Crude Fiber : max 1%\r\n- Moisture : max 84%', NULL, 'product-images/JC2qltQB72kvrCJiE3RhXSTQXumY81ibHhqrebYF.svg', '2021-11-23 03:37:53', '2021-11-23 03:37:53'),
(2, 'Perlengkapan Pasir', 'Pawsitive bentonite cat sand / pasir kucing varian lemon 5.5 liter', 28000, 5, 'Pasir Kucing Pawsitive Cat Sand Lemon 10 Liter\r\n\r\nPasir gumpal wangi aroma lemon untuk kucing\r\n\r\nKeunggulan :\r\n- Daya serap yang tinggi\r\n- Mampu menghasilkan gumpalan yang sangat bagus, kuat dan tidak pecah ketika di angkat\r\n- Menghasilkan sangat sedikit debu/ 99% no dust', NULL, 'product-images/8Rdw4jlVv7jJZY2IZbK9e9sqIFwjF1ZlnGXYJoRt.svg', '2021-11-23 03:39:53', '2021-11-23 07:14:54'),
(3, 'Dry Food', 'BOLT CAT Donat Makanan Kucing  [1 Kg]', 19000, 2, 'Pasti Original\r\nPasti Ready Stock\r\nPasti Expired lama\r\nPasti Fast respon\r\nPasti Dikirim hari ini, Pengiriman ada setiap hari (Senin-Minggu), untuk order sebelum jam 16:00 WIB PASTI dikirim hari ini. Setelah jam 16:00 WIB dikirim besok.\r\n*Khusus JNE hari SABTU dan MINGGU maksimal order jam 14:00 untuk masuk ke pengiriman hari ini, lewat dari itu akan dikirim besoknya\r\n*Khusus Ninja Xpress pengiriman hanya (Senin-Sabtu) maksimal order 14:00 untuk masuk pengiriman hari ini, lewat dari itu dikirim besok. Hari minggu tidak ada pengiriman\r\n*Khusus sameday maksimal order 15:00 untuk masuk ke pengiriman hari ini\r\n\r\nNETTO 1 KG / 500GR , tinggal pilih sesuai keinginan\r\nbentuk donat & ikan\r\n\r\n- Semua produk yang kita jual adalah Original langsung dari pabriknya\r\n- Untuk bolt donat, biasanya serbuknya (tidak menutupi kemungkinan juga bolt ikan ada serbuknya). Tidak perlu khawatir, karena itu adalah bumbu makanan bolt nya, bukan karena hancur ya kaka2. Itu diperlukan utk menambah nafsu makan kucing kesayangan kk\r\n- Kalau ragu timbangannya, PASTIKAN menimbang dengan TIMBANGAN DIGITAL ya kk, bukan timbangan perasaan. Kita menggunakan timbangan digital merk CMOS dengan ketelitian 2 angka desinal di belakang koma, jadi PASTI PAS ??\r\nSelain itu, makanan kucing Bolt juga diclaim memiliki keunggul berikut ini:\r\n\r\n- Membuat kulit sehat dan bulu berkilau\r\n- Mempertajam penglihatan\r\n- Membantu menjaga kesehatan gigi\r\n- Mengurangi resiko FLUTD (penyakit saluran kemih pada kucing)\r\n- Meningkatkan sistem imunitas\r\n\r\nKabar baik buat Cat Lover yang sedang berhemat dan ingin mencegah kucingnya terkena FLUTD.\r\n\r\nNote : mengingat ini kemasan repack,untuk kemasan ada plastik yg bersablon dan ada yg plastik polos,tetapi isi dan kualitas pakan sama. .\r\n\r\nBonus 1 butir fish oil, kalau beli 5 berarti bonusnya 5. Maksimal bonus hanya 5 ya kaka\r\n\r\n- Waktu kirim ke ekspedisi/kurir 20:00\r\n- Waktu Resi diinput maksimal 24 jam\r\n- Untuk pengajuan barang tidak sesuai wajib untuk menyertakan video unboxing.', NULL, 'product-images/cxT7csL8IZNI7dX9tKgGwpNfuuVKyJuMbaIxuyHy.svg', '2021-11-23 03:41:07', '2021-11-23 07:14:04'),
(4, 'Kucing', 'Kucing Munchkin x Persia 8 Bulan', 955000, 1, 'Kucing napoleon betina (munchkin x persian) non standar.', NULL, 'product-images/7bEfva76Vdsoui2M1BXBDX7oiDDeWXPqMycZ9IZB.jpg', '2021-11-23 03:45:14', '2021-11-23 07:01:27');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `products_id` int(11) NOT NULL,
  `body` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isAdmin` tinyint(1) NOT NULL DEFAULT 0,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `isAdmin`, `email_verified_at`, `password`, `image`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', 1, NULL, '$2y$10$/OkU8lwAEAy3SO4LBDpXnOWgfd1TLSivenGm0S3jgz1UR8Pv0HI9.', 'user-images/Y0jML7nDWurIclhR7Smehq3qpDg0014PzYuz9ogw.png', NULL, '2021-11-23 03:34:27', '2021-11-23 03:34:27'),
(2, 'Restu Averian Putra', 'restuaverianputra123@gmail.com', 0, NULL, '$2y$10$Up336f3PujpcSVJvKyr3DemahsBHUsuP/eHu7wrMBQ4U78a./kaY2', 'user-images/g0Bsw3a0wZVBeuJPTq1dNOxTF3Eru3kYpE5vN6hB.png', NULL, '2021-11-23 03:34:56', '2021-11-23 03:34:56');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
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
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `products_productname_unique` (`productname`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
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
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
