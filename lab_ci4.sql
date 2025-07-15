-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 05 Jul 2025 pada 07.29
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
-- Database: `lab_ci4`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `artikel`
--

CREATE TABLE `artikel` (
  `id` int(11) NOT NULL,
  `judul` varchar(200) NOT NULL,
  `isi` text DEFAULT NULL,
  `gambar` varchar(200) DEFAULT NULL,
  `status` tinyint(1) DEFAULT 0,
  `slug` varchar(200) DEFAULT NULL,
  `id_kategori` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `artikel`
--

INSERT INTO `artikel` (`id`, `judul`, `isi`, `gambar`, `status`, `slug`, `id_kategori`) VALUES
(7, 'Pemakzulan Wapres Gibran, Pengamat Politik Ungkap Tiga Jalan Ini yang Bisa Ditempuh', 'Kali ini, Forum Purnawirawan TNI terus mendorong untuk menyuarakan pemakzulan Gibran Rakabuming Raka dari jabatan sebagai Wakil Presiden RI.\r\nUntuk usulan pemakzulan Gibran itu telah dilayankan kepada DPR dan MPR melalui surat resmi.\r\n\r\n', '1751626630_b5736d744b8d6a448d1b.webp', 1, 'pemakzulan-wapres-gibran-pengamat-politik-ungkap-tiga-jalan-ini-yang-bisa-ditempuh', 3),
(8, 'Piala Dunia Antarklub 2025: Klub Brasil Unggul Vs Tim Eropa', 'Fluminense menjadi tim Brasil terbaru yang mengalahkan klub Eropa. Di babak 16 besar Piala Dunia Antarklub 2025, Tricolor memetik kemenangan 2-0 atas Inter Milan.\r\n\r\nBertanding di Bank of America Stadium, Selasa (1/7/2025), German Cano dan Hercules yang menjadi penentu kemenangan Fluminense. Sejauh ini, ada tujuh pertandingan antara klub Brasil melawan tim Eropa di Piala Dunia Antarklub 2025.\r\n\r\nHasilnya, klub Brasil menang tiga kali, imbang dua kali, dan dua kali menalan kekalahan. Bayern Munich dan Atletico Madrid yang sukses mengalahkan klub Brasil.', '1751627635_d66a2f4b2f6d4af0a472.jpeg', 1, 'piala-dunia-antarklub-2025-klub-brasil-unggul-vs-tim-eropa', 2),
(10, 'Menyambut Inovasi Teknologi Baru 2025', 'Melihat ke depan, tahun 2025 diprediksi akan menjadi momentum konsolidasi berbagai teknologi ini. AI diperkirakan tidak hanya semakin canggih, tetapi juga lebih manusiawi dengan kemampuan memahami emosi dan konteks yang lebih mendalam. Di sisi lain, perkembangan 6G sudah mulai direncanakan sebagai pengganti 5G, yang menjanjikan kecepatan komunikasi yang jauh lebih tinggi serta mendukung inovasi yang membutuhkan, seperti dalam kendaraan mobil yang tidak menggunakan pengemudi.\r\n\r\nSalah satu prediksi utama untuk 2025 adalah adopsi teknologi energi terbarukan berbasis AI. Teknologi baru tersebut diperkirakan akan membantu dalam mengoptimalkan penggunaan sumber daya alam, seperti turbin angin dan panel surya, digunakan untuk meningkatkan keberlanjutan dan efisiensi.', '1751630079_c0c082feecfd0534e359.jpg', 1, 'menyambut-inovasi-teknologi-baru-2025', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(100) NOT NULL,
  `slug_kategori` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`, `slug_kategori`) VALUES
(1, 'Teknologi', 'teknologi'),
(2, 'Olahraga', 'olahraga'),
(3, 'Politik', 'politik'),
(4, 'Ekonomi', 'ekonomi'),
(5, 'Hiburan', 'hiburan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `useremail` varchar(200) DEFAULT NULL,
  `userpassword` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `useremail`, `userpassword`) VALUES
(12, 'admin', 'admin@email.com', '$2y$10$tvFbB47gKmrR4oLXd34hme0hsk9mff/Ga84hgOAGWrwkAPm8xfagO'),
(13, 'admin', 'admin@admin.com', '$2y$10$6eqAgLcPsJ3EU5dEW8tKNOGkjAOUWEDf2hia1jVhu5quFjquAO5MC');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_kategori_artikel` (`id_kategori`);

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `artikel`
--
ALTER TABLE `artikel`
  ADD CONSTRAINT `fk_kategori_artikel` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id_kategori`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
