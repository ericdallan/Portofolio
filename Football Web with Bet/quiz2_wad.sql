-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Waktu pembuatan: 05 Jan 2022 pada 18.41
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quiz2_wad`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` bigint(20) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `no_hp` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `nama`, `email`, `password`, `no_hp`) VALUES
(2, 'Admin 1', 'Admin@gmail.com', 'Admin123', '087725113689');

-- --------------------------------------------------------

--
-- Struktur dari tabel `article`
--

CREATE TABLE `article` (
  `id_article` int(100) NOT NULL,
  `id_editor` bigint(20) NOT NULL,
  `judul_article` varchar(255) NOT NULL,
  `penulis_article` varchar(255) NOT NULL,
  `tanggal_terbit` date NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `tag` varchar(255) NOT NULL,
  `bahasa` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `article`
--

INSERT INTO `article` (`id_article`, `id_editor`, `judul_article`, `penulis_article`, `tanggal_terbit`, `deskripsi`, `gambar`, `tag`, `bahasa`) VALUES
(1, 1, 'Kemenangan Manchester United', 'Subagja Eric', '2021-12-30', 'Kemenangan Manchester United', '431987.jpg', 'Premier League', 'Indonesia'),
(2, 1, 'Kekalahan Manchester United', 'Subagja Eric', '2021-12-31', 'United Mengalami Kekalahan', '528520.jpg', 'Premier League', 'Indonesia'),
(3, 1, 'Manchester United ditahan imbang', 'Subagja Eric', '2021-12-29', 'Manchester United', '510612.jpg', 'Premier League', 'Indonesia');

-- --------------------------------------------------------

--
-- Struktur dari tabel `bet`
--

CREATE TABLE `bet` (
  `id_bet` int(100) NOT NULL,
  `id_user` bigint(20) NOT NULL,
  `club` varchar(255) NOT NULL,
  `placed_bet` int(100) NOT NULL,
  `date` date NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `bet`
--

INSERT INTO `bet` (`id_bet`, `id_user`, `club`, `placed_bet`, `date`, `status`) VALUES
(16, 2, 'Inter vs Juventus', 100, '2021-12-31', 'Proceed'),
(17, 2, 'Barcelona vs Real Madrid', 290, '2021-12-31', 'Proceed'),
(18, 1, 'Manchester United vs Liverpool', 560, '2022-01-26', 'On Hold'),
(19, 1, 'Inter vs Juventus', 120, '2022-01-04', 'Proceed');

-- --------------------------------------------------------

--
-- Struktur dari tabel `editor`
--

CREATE TABLE `editor` (
  `id_editor` bigint(20) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `no_hp` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `editor`
--

INSERT INTO `editor` (`id_editor`, `nama`, `email`, `password`, `no_hp`) VALUES
(1, 'Subagja Eric', 'bingung@gmail.com', 'lokasari171', '087725113689');

-- --------------------------------------------------------

--
-- Struktur dari tabel `payment`
--

CREATE TABLE `payment` (
  `id_payments` int(100) NOT NULL,
  `id_bet` int(100) NOT NULL,
  `club` varchar(255) NOT NULL,
  `placed_bet` int(100) NOT NULL,
  `date` date NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `payment`
--

INSERT INTO `payment` (`id_payments`, `id_bet`, `club`, `placed_bet`, `date`, `gambar`) VALUES
(11, 19, 'Inter vs Juventus', 120, '2022-01-04', '839526.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` bigint(20) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `no_hp` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `nama`, `email`, `password`, `no_hp`) VALUES
(1, 'Subagja Eric Dallan', 'ericsubagja@gmail.com', 'lokasari171', '087725113689'),
(2, 'Dzaki Alpin', 'Alpin@gmail.com', 'hayohloh', '085321520581'),
(3, 'Kanza Jilan', 'JilanKanza@gmail.com', 'bingung', '085213184271');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id_article`),
  ADD KEY `id_editor` (`id_editor`);

--
-- Indeks untuk tabel `bet`
--
ALTER TABLE `bet`
  ADD PRIMARY KEY (`id_bet`),
  ADD KEY `id_user` (`id_user`);

--
-- Indeks untuk tabel `editor`
--
ALTER TABLE `editor`
  ADD PRIMARY KEY (`id_editor`);

--
-- Indeks untuk tabel `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id_payments`),
  ADD KEY `id_bet` (`id_bet`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `article`
--
ALTER TABLE `article`
  MODIFY `id_article` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `bet`
--
ALTER TABLE `bet`
  MODIFY `id_bet` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `editor`
--
ALTER TABLE `editor`
  MODIFY `id_editor` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `payment`
--
ALTER TABLE `payment`
  MODIFY `id_payments` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `article`
--
ALTER TABLE `article`
  ADD CONSTRAINT `article_ibfk_1` FOREIGN KEY (`id_editor`) REFERENCES `editor` (`id_editor`);

--
-- Ketidakleluasaan untuk tabel `bet`
--
ALTER TABLE `bet`
  ADD CONSTRAINT `bet_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Ketidakleluasaan untuk tabel `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `payment_ibfk_1` FOREIGN KEY (`id_bet`) REFERENCES `bet` (`id_bet`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
