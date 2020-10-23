-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 21 Feb 2020 pada 16.52
-- Versi Server: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `separingkuy`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `alert`
--

CREATE TABLE `alert` (
  `id_alert` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_jadwal` int(11) NOT NULL,
  `id_pengirim` int(11) NOT NULL,
  `username` varchar(80) NOT NULL,
  `tgl` datetime NOT NULL,
  `isi_notif` varchar(150) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `venue` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `jam` time NOT NULL,
  `area` varchar(150) NOT NULL,
  `lawan` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `alert`
--

INSERT INTO `alert` (`id_alert`, `id_user`, `id_jadwal`, `id_pengirim`, `username`, `tgl`, `isi_notif`, `kategori`, `venue`, `tanggal`, `jam`, `area`, `lawan`) VALUES
(75, 3, 37, 1, 'Spartan FC', '2020-02-19 20:58:17', ' MENGAJUKAN separing pada jadwal yang ini...', 'FUTSAL', 'Wangsa Futsal', '2020-02-20', '09:00:00', 'Kota Cilegon', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_pemain`
--

CREATE TABLE `data_pemain` (
  `id_pemain` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `no_punggung` int(11) NOT NULL,
  `nama` varchar(80) NOT NULL,
  `usia` int(11) NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_pemain`
--

INSERT INTO `data_pemain` (`id_pemain`, `id_user`, `no_punggung`, `nama`, `usia`, `foto`) VALUES
(13, 2, 12, 'sapeiii', 23, '15541_166246373907_57201283907_2771831_2534904_n1.jpg'),
(20, 1, 13, 'JUNED DOANK', 23, 'img001.jpg'),
(21, 1, 12, 'muha azir', 21, 'img007.jpg'),
(23, 2, 231, 'muha azir', 13, 'FC.jpg'),
(26, 1, 90, 'supri kw', 34, 'TOU.png'),
(27, 3, 8, 'Alfan ', 22, 'azir1.jpg'),
(28, 4, 56, 'alfin malfoy', 23, '1.jpg'),
(29, 4, 12, 'supardi', 23, 'img0011.jpg'),
(43, 4, 23, 'svdf12', 23, './upload/TOU.png'),
(48, 3, 7, 'Dandi', 21, 'dandi1.png'),
(49, 3, 4, 'Pramu', 22, 'rian.png'),
(50, 3, 9, 'Azir', 22, 'img0072.jpg'),
(51, 3, 13, 'Kusnay', 22, 'azir2.jpg'),
(52, 3, 5, 'Uloh', 22, 'rian1.png'),
(53, 3, 11, 'Benu', 8, 'dandi11.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `history_team`
--

CREATE TABLE `history_team` (
  `id_history` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `team` varchar(80) NOT NULL,
  `skor_akhir` varchar(11) NOT NULL,
  `team_lawan` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `history_team`
--

INSERT INTO `history_team` (`id_history`, `id_user`, `team`, `skor_akhir`, `team_lawan`) VALUES
(1, 1, 'Spartan FC', '3-2', 'Dalung FC'),
(2, 2, 'Dalung FC', '2-3', 'Spartan FC'),
(3, 3, 'Koplak FC', '2-4', 'Spartan FC'),
(5, 3, 'Koplak FC', '3-1', 'dalung fc'),
(6, 1, 'Spartan FC', '3-1', 'Koplak FC'),
(8, 2, 'Dalung FC', '3-1', 'Spartan FC'),
(9, 3, 'Koplak FC', '3-1', 'Ciruas FC'),
(10, 3, 'Koplak FC', '3-1', 'Spartan FC'),
(11, 3, 'Koplak FC', '2-3', 'Dalung FC'),
(12, 3, 'Koplak FC', '3-1', 'Spartan FC');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwal_team`
--

CREATE TABLE `jadwal_team` (
  `id_jadwal` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `username` varchar(80) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `venue` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `jam` time NOT NULL,
  `area` varchar(255) NOT NULL,
  `lawan` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jadwal_team`
--

INSERT INTO `jadwal_team` (`id_jadwal`, `id_user`, `username`, `kategori`, `venue`, `tanggal`, `jam`, `area`, `lawan`) VALUES
(2, 7, 'Kalanganyar FC', 'FUTSAL', 'Lapangan Kodam Siliwangi', '2020-02-20', '03:00:00', 'Badung', ''),
(36, 3, 'Koplak FC', 'FUTSAL', 'Cia Futsal', '2020-02-28', '09:00:00', 'Kota Serang', 'Spartan FC'),
(37, 3, 'Koplak FC', 'FUTSAL', 'Wangsa Futsal', '2020-02-20', '09:00:00', 'Kota Cilegon', ''),
(38, 1, '', 'FUTSAL', 'Cia Futsal', '2020-02-28', '09:00:00', 'Kota Serang', 'Koplak FC'),
(39, 3, 'Koplak FC', 'FUTSAL', 'Cia Futsal', '2020-02-22', '09:00:00', 'Kota Serang', ''),
(40, 3, 'Koplak FC', 'FUTSAL', 'Cia Futsal', '2020-02-21', '09:00:00', 'Bandung', ''),
(41, 3, 'Koplak FC', 'FOOTBALL', 'Lapangan Kodam Siliwangi', '2020-02-22', '09:00:00', 'Kota Cilegon', ''),
(42, 3, 'Koplak FC', 'FOOTBALL', 'Lapangan Sumampir', '2020-02-22', '09:00:00', 'Kota Cilegon', ''),
(43, 3, 'Koplak FC', 'FUTSAL', 'Cia Futsal', '2020-02-22', '09:00:00', 'Kota Serang', ''),
(44, 1, 'Spartan FC', 'FUTSAL', 'Wangsa Futsal', '2020-02-22', '09:00:00', 'Kota Serang', ''),
(45, 1, 'Spartan FC', 'FUTSAL', 'Wangsa Futsal', '2020-02-22', '09:00:00', 'Kota Serang', ''),
(46, 1, 'Spartan FC', 'FUTSAL', 'Wangsa Futsal', '2020-02-22', '09:00:00', 'Kota Serang', ''),
(47, 1, 'Spartan FC', 'FUTSAL', 'Wangsa Futsal', '2020-02-22', '09:00:00', 'Kota Serang', ''),
(48, 1, 'Spartan FC', 'FUTSAL', 'Wangsa Futsal', '2020-02-22', '09:00:00', 'Kota Serang', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `email` varchar(80) NOT NULL,
  `password` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `bio` varchar(150) NOT NULL,
  `no_tlp` varchar(13) NOT NULL,
  `email_team` varchar(80) NOT NULL,
  `home_base` varchar(255) NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `email`, `password`, `username`, `bio`, `no_tlp`, `email_team`, `home_base`, `foto`) VALUES
(1, 'spartan@gmail.com', '123', 'Spartan FC', 'Team sepakbola amatir', '08976765678', 'spartan@gmail.com', 'https://goo.gl/maps/JHuCcaABrq9848et8', 'spartan.jpeg'),
(2, 'dalungfc@gmail.com', '123', 'kuyFC', 'AMATIR', '0897656447', 'dalungfc@gmail.com', 'Jl. dalung raya', 'TOU.png'),
(3, 'koplakfc@gmail.com', '123', 'Koplak FC', 'Team ala kadarnya', '089678966461', 'koplakfcteam@gmail.com', 'https://goo.gl/maps/JHuCcaABrq9848et8', 'FC2.jpg'),
(4, 'jagarayufc@gmail.com', '123', 'Jagarayu FC', 'Sepakbola amatir', '0898765765', 'jagarayuteam@gmail.com', 'jl. jagarayu', '15541_166246373907_57201283907_2771831_2534904_n2.jpg'),
(7, 'kalanganyarfc@gmail.com', '123', 'Kalanganyar FC', 'sfd', '3524542', 'koplakfc@gmail.com', 'https://goo.gl/maps/JHuCcaABrq9848et8', 'img0012.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alert`
--
ALTER TABLE `alert`
  ADD PRIMARY KEY (`id_alert`);

--
-- Indexes for table `data_pemain`
--
ALTER TABLE `data_pemain`
  ADD PRIMARY KEY (`id_pemain`);

--
-- Indexes for table `history_team`
--
ALTER TABLE `history_team`
  ADD PRIMARY KEY (`id_history`);

--
-- Indexes for table `jadwal_team`
--
ALTER TABLE `jadwal_team`
  ADD PRIMARY KEY (`id_jadwal`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alert`
--
ALTER TABLE `alert`
  MODIFY `id_alert` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;
--
-- AUTO_INCREMENT for table `data_pemain`
--
ALTER TABLE `data_pemain`
  MODIFY `id_pemain` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;
--
-- AUTO_INCREMENT for table `history_team`
--
ALTER TABLE `history_team`
  MODIFY `id_history` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `jadwal_team`
--
ALTER TABLE `jadwal_team`
  MODIFY `id_jadwal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
