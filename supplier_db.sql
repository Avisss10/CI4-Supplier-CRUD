-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 09, 2025 at 08:35 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `supplier_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `id_supplier` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `telepon` varchar(15) NOT NULL,
  `email` varchar(100) NOT NULL,
  `kontak_pic` varchar(100) NOT NULL,
  `jenis_barang` varchar(50) DEFAULT NULL,
  `nama_barang` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`id_supplier`, `nama`, `alamat`, `telepon`, `email`, `kontak_pic`, `jenis_barang`, `nama_barang`) VALUES
(1, 'PT. Elektronik Jaya', 'Jl. Sudirman No. 10, Jakarta', '081234567890', 'kontak@elektronikjaya.co.id', 'Budi Hartono', 'Elektronik', 'Printer Epson L3110'),
(2, 'CV. Tulis Menulis', 'Jl. Kartini No. 23, Bandung', '082198765432', 'info@cv-tulismenulis.com', 'Siti Aminah', 'Alat Tulis', 'Kertas A4 70gr'),
(3, 'UD. Pakaian Sejahtera', 'Jl. Mawar No. 5, Surabaya', '081278945612', 'udps@gmail.com', 'Dedi Supriadi', 'Pakaian', 'Seragam Kerja'),
(4, 'PT. Maju Rasa', 'Jl. Pemuda No. 45, Semarang', '082234567891', 'majurasa@email.com', 'Wahyu Hidayat', 'Makanan', 'Biskuit Energen 125gr'),
(5, 'CV. Serba Ada', 'Jl. Merdeka No. 7, Yogyakarta', '081345678901', 'serbaada@mail.com', 'Lina Wijaya', 'Lainnya', 'Kursi Lipat Plastik');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`id_supplier`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `id_supplier` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
