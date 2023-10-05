-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 04, 2023 at 04:45 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `init_db`
--

-- --------------------------------------------------------
CREATE DATABASE init_db;
GRANT ALL PRIVILEGES ON init_db.* TO 'ok'@'%' IDENTIFIED BY 'mysql';
GRANT ALL PRIVILEGES ON init_db.* TO 'ok'@'localhost' IDENTIFIED BY 'mysql';
USE init_db;

--
-- Table structure for table `album`
--

CREATE TABLE `album` (
  `id_album` int(11) NOT NULL,
  `nama_album` varchar(64) NOT NULL,
  `artist` varchar(128) NOT NULL,
  `durasi_album` int(11) NOT NULL,
  `image_path` varchar(256) NOT NULL,
  `tanggal_terbit` date NOT NULL,
  `genre` varchar(64) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `album`
--

INSERT INTO `album` (`id_album`, `nama_album`, `artist`, `durasi_album`, `image_path`, `tanggal_terbit`, `genre`) VALUES
(1, 'Oneiric Diary', 'IZ*ONE', 0, '', '2023-10-02', 'K-Pop'),
(2, 'type III', 'paris match', 29, '', '2023-10-02', 'Shibuya-kei'),
(3, 'Quattro', 'paris match', 23, '', '2023-10-02', 'Shibuya-kei'),
(4, 'Vibrant Colors', 'Murphy Radio', 15, '', '2023-10-02', 'Math rock');

-- --------------------------------------------------------

--
-- Table structure for table `artist`
--

CREATE TABLE `artist` (
  `artist` varchar(128) NOT NULL,
  `country` varchar(128) NOT NULL,
  `tipe` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `artist`
--

INSERT INTO `artist` (`artist`, `country`, `tipe`) VALUES
('IZ*ONE', 'Korea', 'Group'),
('Murphy Radio', 'Indonesia', 'Group'),
('paris match', 'Japan', 'Group');

-- --------------------------------------------------------

--
-- Table structure for table `song`
--

CREATE TABLE `song` (
  `id_song` int(11) NOT NULL,
  `nama_lagu` varchar(64) NOT NULL,
  `artist` varchar(128) NOT NULL,
  `tanggal_terbit` date NOT NULL,
  `genre` varchar(64) DEFAULT NULL,
  `durasi_lagu` int(11) NOT NULL,
  `audio_path` varchar(256) NOT NULL,
  `id_album` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `song`
--

INSERT INTO `song` (`id_song`, `nama_lagu`, `artist`, `tanggal_terbit`, `genre`, `durasi_lagu`, `audio_path`, `id_album`) VALUES
(1, 'Autumn', 'Murphy Radio', '2023-10-02', 'Math rock', 4, '', 4),
(2, 'Sandy', 'Murphy Radio', '2023-10-02', 'Math rock', 3, '', 4),
(3, 'Merry-go-round', 'IZ*ONE', '2023-10-02', 'K-Pop', 4, '', 1),
(4, 'cerulean blue', 'paris match', '2023-10-02', 'Shibuya-kei', 4, '', 2),
(5, 'ANGEL', 'paris match', '2023-10-01', 'Jazz', 3, '', 3);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `email` varchar(256) NOT NULL,
  `username` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL,
  `is_admin` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `email`, `username`, `password`, `is_admin`) VALUES
(1, 'user1@gmail.com', 'user1', 'pwuser1', 1),
(3, 'user2@gmail.com', 'user2', 'pwuser2', 1),
(4, 'user3@gmail.com', 'user3', 'pwuser3', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `album`
--
ALTER TABLE `album`
  ADD PRIMARY KEY (`id_album`),
  ADD KEY `artist` (`artist`);

--
-- Indexes for table `artist`
--
ALTER TABLE `artist`
  ADD PRIMARY KEY (`artist`);

--
-- Indexes for table `song`
--
ALTER TABLE `song`
  ADD PRIMARY KEY (`id_song`),
  ADD KEY `id_album` (`id_album`),
  ADD KEY `artist` (`artist`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `album`
--
ALTER TABLE `album`
  MODIFY `id_album` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `song`
--
ALTER TABLE `song`
  MODIFY `id_song` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `album`
--
ALTER TABLE `album`
  ADD CONSTRAINT `album_ibfk_1` FOREIGN KEY (`artist`) REFERENCES `artist` (`artist`);

--
-- Constraints for table `song`
--
ALTER TABLE `song`
  ADD CONSTRAINT `song_ibfk_1` FOREIGN KEY (`id_album`) REFERENCES `album` (`id_album`),
  ADD CONSTRAINT `song_ibfk_2` FOREIGN KEY (`artist`) REFERENCES `artist` (`artist`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
