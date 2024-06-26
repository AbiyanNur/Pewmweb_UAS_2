-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Bulan Mei 2024 pada 05.04
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `coba`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_about`
--

CREATE TABLE `tbl_about` (
  `id` int(25) NOT NULL,
  `image` varchar(255) NOT NULL,
  `artikel` text NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_about`
--

INSERT INTO `tbl_about` (`id`, `image`, `artikel`, `created_at`, `updated_at`) VALUES
(1, '', '                                                                                                                                                                                                        <p style=\"text-align: justify; \"><span style=\"font-size: 1rem;\">Selamat datang di situs berita \"WEBSITE BERITA JOMBANG,\" media online yang berbasis di Jombang, Jawa Timur. Kami didedikasikan untuk menyajikan informasi terkini seputar kejadian lokal, perkembangan terbaru di Jawa Timur, dan liputan mendalam mengenai isu-isu nasional dan internasional yang memengaruhi masyarakat kami. Dengan komitmen kami untuk keakuratan dan keberimbangan dalam pelaporan, \"Jombang Today\" hadir untuk menjadi sahabat setia Anda dalam memahami dunia. Terima kasih telah memilih kami sebagai sumber informasi utama Anda di Jombang dan sekitarnya.\r\n\r\nVisi kami adalah menjadi pilar informasi yang mengedepankan nilai kebenaran dan keterbukaan. Melalui liputan yang mendalam, kami bertujuan untuk memberikan wawasan yang lebih baik tentang berbagai peristiwa yang membentuk kehidupan masyarakat Jombang. Kami percaya bahwa akses yang mudah dan cepat terhadap berita lokal adalah kunci untuk memperkuat ikatan komunitas. Oleh karena itu, kami mengundang Anda untuk bergabung dalam perjalanan kami untuk membangun komunitas yang lebih informasi dan terhubung di Jombang.\r\n\r\nTerima kasih atas dukungan Anda yang telah membantu kami tumbuh dan berkembang. Bersama-sama, mari kita terus memperkuat jaringan informasi yang melayani kebutuhan masyarakat Jombang dengan baik.</span><br></p>                                                                                                                                                                                    ', '2023-11-01 00:00:00', '2024-05-26 00:37:28');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_gallery`
--

CREATE TABLE `tbl_gallery` (
  `id_img` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `slug_img` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kategori`
--

CREATE TABLE `tbl_kategori` (
  `id_kat` int(11) NOT NULL,
  `value` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `tbl_kategori`
--

INSERT INTO `tbl_kategori` (`id_kat`, `value`, `created_at`, `updated_at`) VALUES
(1, 'Informasi Umum', NULL, NULL),
(3, 'Kesehatan', '2024-05-23 04:32:16', '2024-05-23 04:32:16'),
(4, 'Bisnis', '2024-05-23 04:34:47', '2024-05-23 04:34:47'),
(5, 'Olah Raga', '2024-05-23 04:35:02', '2024-05-23 04:35:02');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kebijakan`
--

CREATE TABLE `tbl_kebijakan` (
  `id` int(25) NOT NULL,
  `pdf` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_kebijakan`
--

INSERT INTO `tbl_kebijakan` (`id`, `pdf`) VALUES
(1, 'kebijakan_undip.pdf');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_lvuser`
--

CREATE TABLE `tbl_lvuser` (
  `id_lvuser` int(10) NOT NULL,
  `leveluser` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_lvuser`
--

INSERT INTO `tbl_lvuser` (`id_lvuser`, `leveluser`) VALUES
(1, 'Admin'),
(2, 'User');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_organisasi`
--

CREATE TABLE `tbl_organisasi` (
  `id` int(25) NOT NULL,
  `pdf` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_organisasi`
--

INSERT INTO `tbl_organisasi` (`id`, `pdf`, `created_at`, `updated_at`) VALUES
(1, 'Peraturan_Daerah_1.pdf', NULL, '2024-05-26 03:02:38');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_posts`
--

CREATE TABLE `tbl_posts` (
  `id_post` int(25) NOT NULL,
  `img` varchar(255) NOT NULL,
  `judul` varchar(255) DEFAULT NULL,
  `slug` varchar(255) NOT NULL,
  `artikel` text DEFAULT NULL,
  `kategori` varchar(255) NOT NULL,
  `author` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_seting`
--

CREATE TABLE `tbl_seting` (
  `id_set` int(11) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `tlp` varchar(20) NOT NULL,
  `email` varchar(225) NOT NULL,
  `kisikisi` text NOT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `tbl_seting`
--

INSERT INTO `tbl_seting` (`id_set`, `alamat`, `tlp`, `email`, `kisikisi`, `updated_at`) VALUES
(6, 'Jl. K.H. Wahid Hasyim Jombang, Kode Pos 61411 Indonesa', '+62 821 4683 0661', 'rusdingawi314@gmail.com', '                                                                                                                                                                                                                                                                                        <div style=\"text-align: justify; \">Jombang adalah&nbsp;<span style=\"font-size: 1rem;\">sebuah kabupaten yang terletak di bagian tengah Provinsi Jawa Timur, Indonesia.&nbsp;</span><span style=\"font-size: 1rem;\">Ibu kotanya adalah Kecamatan Jombang. Kabupaten Jombang memiliki ketinggian 44 meter di atas permukaan laut, dan berjarak 79 km dari barat daya Surabaya, ibu kota Provinsi Jawa Timur.&nbsp;</span><span style=\"font-size: 1rem;\">Luas wilayah kabupaten Jombang yakni 1.159,50 km².&nbsp;</span><span style=\"font-size: 1rem;\">Pada tahun 2021, penduduk Jombang mencapai 1.325.914 jiwa, dengan kepadatan penduduk 1.143 jiwa/km2.</span></div>                                                                                                                                                                                                                                                            ', '2024-05-23 13:50:47');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_users`
--

CREATE TABLE `tbl_users` (
  `id_user` int(255) NOT NULL,
  `username` varchar(25) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama_pengguna` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `id_lvuser` int(11) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_users`
--

INSERT INTO `tbl_users` (`id_user`, `username`, `pass`, `password`, `nama_pengguna`, `img`, `id_lvuser`, `created_at`, `updated_at`) VALUES
(43, 'admin@gmail.com', 'adminadmin', 'f6fdffe48c908deb0f4c3bd36c032e72', 'admin', 'writer_2.png', 1, '2024-05-22 21:44:28', '2024-05-23 13:46:22'),
(44, 'fedryk@m.com', 'akukauselalubersama', 'fb5b111b6ce4a5ca7fb3de4f63420bfd', 'paijo', 'avatar_1.png', 2, '2024-05-24 10:55:05', '2024-05-24 10:55:05');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_about`
--
ALTER TABLE `tbl_about`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_gallery`
--
ALTER TABLE `tbl_gallery`
  ADD PRIMARY KEY (`id_img`);

--
-- Indeks untuk tabel `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  ADD PRIMARY KEY (`id_kat`);

--
-- Indeks untuk tabel `tbl_kebijakan`
--
ALTER TABLE `tbl_kebijakan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_lvuser`
--
ALTER TABLE `tbl_lvuser`
  ADD PRIMARY KEY (`id_lvuser`);

--
-- Indeks untuk tabel `tbl_organisasi`
--
ALTER TABLE `tbl_organisasi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_posts`
--
ALTER TABLE `tbl_posts`
  ADD PRIMARY KEY (`id_post`);

--
-- Indeks untuk tabel `tbl_seting`
--
ALTER TABLE `tbl_seting`
  ADD PRIMARY KEY (`id_set`);

--
-- Indeks untuk tabel `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `tbl_users_ibfk_1` (`id_lvuser`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_about`
--
ALTER TABLE `tbl_about`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tbl_gallery`
--
ALTER TABLE `tbl_gallery`
  MODIFY `id_img` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  MODIFY `id_kat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tbl_kebijakan`
--
ALTER TABLE `tbl_kebijakan`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tbl_lvuser`
--
ALTER TABLE `tbl_lvuser`
  MODIFY `id_lvuser` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tbl_organisasi`
--
ALTER TABLE `tbl_organisasi`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tbl_posts`
--
ALTER TABLE `tbl_posts`
  MODIFY `id_post` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99342;

--
-- AUTO_INCREMENT untuk tabel `tbl_seting`
--
ALTER TABLE `tbl_seting`
  MODIFY `id_set` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `id_user` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
