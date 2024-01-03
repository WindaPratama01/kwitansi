-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 28 Feb 2023 pada 01.47
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kwitansi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `kwitansi`
--

CREATE TABLE `kwitansi` (
  `nokwitansi` int(11) NOT NULL,
  `tglkwitansi` date NOT NULL,
  `nama` varchar(100) NOT NULL,
  `amount` varchar(500) NOT NULL,
  `payment` text DEFAULT NULL,
  `jumlah` int(11) NOT NULL,
  `metode` char(30) NOT NULL,
  `bank` char(50) NOT NULL,
  `nomer` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `ttd` char(100) NOT NULL,
  `ttdf` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kwitansi`
--

INSERT INTO `kwitansi` (`nokwitansi`, `tglkwitansi`, `nama`, `amount`, `payment`, `jumlah`, `metode`, `bank`, `nomer`, `tanggal`, `ttd`, `ttdf`) VALUES
(2607, '2023-02-20', 'Winda Pratama', '100000', 'bri', 100000, 'BG', 'BRI', 2607, '2023-02-20', 'kebab', '63f33b8476bdc.png'),
(2608, '2023-02-20', 'Winda Pratama', '200000', 'bca', 200000, 'cash', 'BCA', 2608, '2023-02-20', 'kebab', '63f33fefaa468.png'),
(2609, '2023-02-20', 'Winda Pratama', '300000', 'bni', 300000, 'cheque', 'BNI', 2609, '2023-02-20', 'kebab', '63f348eab179e.png'),
(2609, '2023-02-23', 'Winda Pratama', '400000', 'BPD', 400000, 'cash', 'BPD', 2609, '2023-02-23', 'kebab', '63f6d105b65ec.png'),
(2610, '2023-02-27', 'Winda Pratama', '500000', 'BCA', 500000, 'cheque', 'BCA', 2610, '2023-02-27', 'kebab', '63fca45122ed2.png');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
