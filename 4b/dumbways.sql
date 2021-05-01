-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 01 Bulan Mei 2021 pada 11.12
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dumbways`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `books`
--

CREATE TABLE `books` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `stok` int(10) NOT NULL,
  `image` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `books`
--

INSERT INTO `books` (`id`, `name`, `stok`, `image`, `deskripsi`, `category_id`) VALUES
(1, 'Naruto eps 303', 0, '1.jpg', 'diceritakan naruto remaja yang semangat berlatih', 1),
(4, 'Naruto eps 301', 13, '2.jpg', 'diceritakan naruto akan menikah dengan hinata', 1),
(5, 'avenger no.40', 10, '3.jpg', 'terjadi perpecahan diantara para avenger karena berbeda pendapat', 2),
(6, 'avenger no.45', 13, '4.jpg', 'para pahlawan superhero bersatu untuk menghadapi serangan tanos', 2),
(7, 'sejarah terciptanya big bang', 15, '5.jpg', 'diceritakan asal muasal terciptanya galaxy big bang', 4),
(8, 'sejarah dinosaurus', 21, '6.jpg', 'dinosaurus punah karena adanya meteor', 4),
(9, 'asal muasal danau toba', 11, '7.jpg', 'legenda danau toba', 3),
(10, 'legenda sangkuriang', 10, '8.jpg', 'seorang anak yang mencintai ibunya', 3),
(11, 'captain america', 12, '9.jpg', 'merupakan cerita asal muasal dari Captain America', 2),
(12, 'avenger no.499', 13, '4.jpg', 'para pahlawan superhero bersatu untuk menghadapi serangan tanos', 2),
(14, 'Tentor Fist 23', 2, 'Screenshot (2).png', 'asdasd', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'anime'),
(2, 'fiksi'),
(3, 'legenda'),
(4, 'ilmu pengetahuan'),
(5, 'Biografi'),
(6, 'fiksi 2');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `books`
--
ALTER TABLE `books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `books`
--
ALTER TABLE `books`
  ADD CONSTRAINT `fk_category_id` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
