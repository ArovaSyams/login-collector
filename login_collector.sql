-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 25 Mar 2021 pada 05.28
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login_collector`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `account`
--

CREATE TABLE `account` (
  `id` int(11) NOT NULL,
  `session` int(11) NOT NULL,
  `account_type` int(11) NOT NULL,
  `account` varchar(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `account`
--

INSERT INTO `account` (`id`, `session`, `account_type`, `account`, `username`, `email`, `password`) VALUES
(1, 1, 1, 'Facebook', 'User', 'user@gmail.com', 'wertyuiop'),
(2, 1, 2, 'Valorant', 'User', 'user@gmail.com', 'qweqweqwe'),
(3, 1, 3, 'AWS', 'User', 'user@gmail.com', 'sadads'),
(6, 1, 1, 'Twitter', 'user', 'user', 'saddsad');

-- --------------------------------------------------------

--
-- Struktur dari tabel `account_type`
--

CREATE TABLE `account_type` (
  `id` int(11) NOT NULL,
  `account_type` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `account_type`
--

INSERT INTO `account_type` (`id`, `account_type`) VALUES
(1, 'Social Account'),
(2, 'Games Account'),
(3, 'Other Account');

-- --------------------------------------------------------

--
-- Struktur dari tabel `login_session`
--

CREATE TABLE `login_session` (
  `id` int(11) NOT NULL,
  `username` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `login_session`
--

INSERT INTO `login_session` (`id`, `username`, `email`, `password`) VALUES
(1, 'Admin', 'admin@gmail.com', '$2y$10$KskqBJN9dmge20PIX8KkAebpLNC6ggTZ9JM7CBWJrhG8DiVYWj/xu');

-- --------------------------------------------------------

--
-- Struktur dari tabel `logo`
--

CREATE TABLE `logo` (
  `id` int(11) NOT NULL,
  `logo` varchar(250) NOT NULL,
  `logo_name` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `logo`
--

INSERT INTO `logo` (`id`, `logo`, `logo_name`) VALUES
(1, '1616573622_029f2ef1c21b570bb47a.svg', 'Gmail'),
(2, '1616573735_77cf0c4ea6452f7783ba.svg', 'Facebook'),
(3, '1616574817_8e8811a1ac57bc9d7b08.jpg', 'Gojek'),
(4, '1616574825_42127670f258924e6ecc.png', 'Grab'),
(5, '1616574837_7d65936da4bd576edc8a.svg', 'zoom'),
(6, '1616574847_564820665e70ed58653a.svg', 'Tiktok'),
(7, '1616574862_7b8cd6a63b8ccd025695.jpg', 'Shopee'),
(8, '1616574873_26545e07143ba2faaad6.png', 'Ovo'),
(9, '1616574885_f61eb0cfacc46ca908c6.svg', 'Whatsapp'),
(10, '1616574915_f7555344f144f3c49024.png', 'Linkaja'),
(11, '1616574925_6b05d45fb5268ed22f17.png', 'Byu'),
(12, '1616574938_fe38cb41c38b433767bb.png', 'Kai Access'),
(13, '1616574949_0059968a7c5c4984e4ed.svg', 'Freelancer'),
(14, '1616574961_14f6811f4f7a03a7b045.png', 'Paypal'),
(15, '1616574974_42b7714e28a8ad2f979a.svg', 'Sportify'),
(16, '1616574983_bacdd498072165c72ded.png', 'Valorant'),
(17, '1616574995_4b181fcd3330c2e0886f.svg', 'PUBG Lite'),
(18, '1616575006_c60e34d44a0393140f37.svg', 'Discord'),
(19, '1616575018_c8f2f3d5101dc6f3816e.svg', 'Epic Games'),
(20, '1616575027_f7194c3c2d6045cff169.svg', 'Steam'),
(21, '1616575040_550f8215f14a5a552def.svg', 'Telegram'),
(22, '1616575052_f347f09816d2700d1b45.svg', 'Twitter'),
(23, '1616575060_d68b95a5a83aac0acdbe.svg', 'Instagram'),
(24, '1616575161_3ffdc49cc576d04bd5e8.svg', 'Google'),
(25, '1616575199_89b4b3c4bbeb8f6d7c23.svg', 'Youtube'),
(26, '1616575541_9b173b08e4fbd672b6a5.svg', 'IBM'),
(27, '1616575548_0c569ef03601bdeeabbc.svg', 'AWS'),
(28, '1616575823_21a5c4853e0aedb0150f.svg', 'Wargaming'),
(29, 'default.png', 'Default'),
(30, '1616585542_216e1c7a1b8562b16339.svg', 'Unity'),
(31, '1616586881_f59bffa83ba81af8e771.svg', 'Trello'),
(32, '1616586898_65f92abc23ced1d48f25.svg', 'Github');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `account_type`
--
ALTER TABLE `account_type`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `login_session`
--
ALTER TABLE `login_session`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `logo`
--
ALTER TABLE `logo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `account`
--
ALTER TABLE `account`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `account_type`
--
ALTER TABLE `account_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `login_session`
--
ALTER TABLE `login_session`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `logo`
--
ALTER TABLE `logo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
