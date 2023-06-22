-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 22, 2023 at 10:22 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perpustakaan`
--

-- --------------------------------------------------------

--
-- Table structure for table `tabel_buku`
--

CREATE TABLE `tabel_buku` (
  `id_buku` varchar(20) NOT NULL,
  `judul_buku` varchar(100) NOT NULL,
  `pengarang_buku` varchar(50) NOT NULL,
  `penerbit_buku` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tabel_buku`
--

INSERT INTO `tabel_buku` (`id_buku`, `judul_buku`, `pengarang_buku`, `penerbit_buku`) VALUES
('B001', 'Sejarah Indonesia Modern 1200-2008', 'M.C. Ricklefs', 'Serambi Ilmu Pustaka'),
('B0010', 'Perahu Kertas', 'Dewi Lestari', 'Bentang Pustaka'),
('B0011', 'Algoritma Dan Pemrograman', 'Drs. Lamhot Sitorus, M.Kom.', 'Penerbit Andi'),
('B002', 'The Devil All the Time', 'Donald Ray Pollock', 'Elex Media Komputindo'),
('B003', 'Negeri 5 Menara', 'Ahmad Fuadi', 'Gramedia Pustaka Utama'),
('B004', 'Naruto', 'Masashi Kishimoto', 'Shueisha'),
('B005', 'Dilan: Dia adalah Dilanku Tahun 1990', 'Pidi Baiq', 'Pastel Books'),
('B006', 'Ken Arok', 'M. Syamsudin', 'Araska Publisher'),
('B007', 'Pulang', 'Tere Liye', 'Replubika Penerbit'),
('B008', 'Harry Potter and The Sorceres Stone', 'J.K. Rowling', 'Bloomsburry Publishing'),
('B009', 'Teman', 'Jounatan & Guntur Alam', 'Elex Media Komputindo');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_petugas`
--

CREATE TABLE `tabel_petugas` (
  `id_petugas` varchar(10) NOT NULL,
  `nama_petugas` varchar(100) NOT NULL,
  `no_telp` varchar(20) NOT NULL,
  `username_petugas` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tabel_petugas`
--

INSERT INTO `tabel_petugas` (`id_petugas`, `nama_petugas`, `no_telp`, `username_petugas`, `password`) VALUES
('P1', 'Zulkifly', '081266742890', 'admin', 'admin'),
('P2', 'Sri', '085613890255', 'admin1', 'admin1'),
('P3', 'Hartono', '081245760990', 'admin2', 'Jakarta'),
('P4', 'Hasu', '081266816078', 'admin3', 'Medan'),
('P5', 'Wawan', '081284753644', 'admin4', 'admin4');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_pinjam`
--

CREATE TABLE `tabel_pinjam` (
  `id_pinjam` varchar(10) NOT NULL,
  `id_petugas` varchar(10) NOT NULL,
  `id_user` varchar(10) NOT NULL,
  `id_buku` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tabel_pinjam`
--

INSERT INTO `tabel_pinjam` (`id_pinjam`, `id_petugas`, `id_user`, `id_buku`) VALUES
('PI01', 'P2', 'U0001', 'B001'),
('PI02', 'P1', 'U0001', 'B005'),
('PI03', 'P5', 'U0003', 'B004'),
('PI04', 'P5', 'U0004', 'B0011'),
('PI05', 'P2', 'U0002', 'B0010');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_user`
--

CREATE TABLE `tabel_user` (
  `id_user` varchar(10) NOT NULL,
  `nama_user` varchar(100) NOT NULL,
  `no_telp_user` varchar(20) NOT NULL,
  `alamat_user` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tabel_user`
--

INSERT INTO `tabel_user` (`id_user`, `nama_user`, `no_telp_user`, `alamat_user`) VALUES
('U0001', 'Mita', '086712690301', 'Sragen'),
('U0002', 'Kartono', '081263574772', 'Semarang'),
('U0003', 'Cika', '085342890465', 'Madura'),
('U0004', 'Hani', '081299179692', 'Surabaya'),
('U0005', 'Mayang', '081285015845', 'Samarinda');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tabel_buku`
--
ALTER TABLE `tabel_buku`
  ADD PRIMARY KEY (`id_buku`);

--
-- Indexes for table `tabel_petugas`
--
ALTER TABLE `tabel_petugas`
  ADD PRIMARY KEY (`id_petugas`);

--
-- Indexes for table `tabel_pinjam`
--
ALTER TABLE `tabel_pinjam`
  ADD KEY `fk_tblpetugas` (`id_petugas`),
  ADD KEY `fk_tbluser` (`id_user`),
  ADD KEY `fk_tblbuku` (`id_buku`);

--
-- Indexes for table `tabel_user`
--
ALTER TABLE `tabel_user`
  ADD PRIMARY KEY (`id_user`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tabel_pinjam`
--
ALTER TABLE `tabel_pinjam`
  ADD CONSTRAINT `fk_tblbuku` FOREIGN KEY (`id_buku`) REFERENCES `tabel_buku` (`id_buku`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_tblpetugas` FOREIGN KEY (`id_petugas`) REFERENCES `tabel_petugas` (`id_petugas`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_tbluser` FOREIGN KEY (`id_user`) REFERENCES `tabel_user` (`id_user`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
