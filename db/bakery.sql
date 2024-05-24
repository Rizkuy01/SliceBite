-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 24 Bulan Mei 2024 pada 05.33
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bakery`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `checkout`
--

CREATE TABLE `checkout` (
  `id` int(11) NOT NULL,
  `time` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(14) NOT NULL,
  `address` varchar(255) NOT NULL,
  `payment` varchar(64) NOT NULL,
  `product` varchar(255) NOT NULL,
  `price` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `checkout`
--

INSERT INTO `checkout` (`id`, `time`, `name`, `phone`, `address`, `payment`, `product`, `price`) VALUES
(19, '22-5-2024 16:32:24', 'isa', '3322323232', 'nomaden', 'bank', 'Croissant', '18.000'),
(20, '23-5-2024 0:1:19', 'Rizky', '082123805041', 'Karawang, West Java', 'gopay', 'Tuna Cheese Puff', '15.000'),
(21, '23-5-2024 0:13:15', 'Ayeeee', '085643186672', 'Purwasari, Karawang', 'gopay', 'Bread Coffee Bun', '13.000'),
(22, '23-5-2024 0:14:44', 'Hasnazl', '082144309758', 'Grahayana, Karawang', 'bank', 'Apple Pie', '20.000'),
(64, '23-5-2024 20:53:34', 'Eva Juliani', '089645454', 'Lubuk terdalam di hati developer', 'bank', 'Tuna Cheese Puff', '15.000'),
(67, '24-5-2024 10:10:41', 'Eva', '089691936878', 'Jl. Jalan', 'GoPay', 'Chamomile Tea', '17.000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `Name_Product` varchar(255) NOT NULL,
  `Price` varchar(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `image` blob NOT NULL,
  `description` varchar(255) NOT NULL,
  `variant` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `product`
--

INSERT INTO `product` (`id`, `Name_Product`, `Price`, `qty`, `image`, `description`, `variant`) VALUES
(3, 'Croissant', '18000', 100, 0x75706c6f6164732f63726f697373616e742e706e67, 'A classic French pastry with a flaky, buttery crust and a soft.', 'Butter, Chocolate, Almond'),
(4, 'Cromboloni', '25000', 100, 0x75706c6f6164732f63726f6d626f6c6f6e692e706e67, 'A delightful pastry that combines the rich, flaky layers of a croissant with delightful Italian dessert fillings.', 'Chocolate, Matcha, Strawberry'),
(5, 'Croffle', '14000', 100, 0x75706c6f6164732f63726f66666c652e706e67, 'Delicious fusion of croissant and waffle, offering a crispy outside, and soft inside. Made from croissant dough.', 'Original, Chocolate, Strawberry'),
(6, 'Cinnamon Roll', '18000', 100, 0x75706c6f6164732f63696e6e616d6f6e2e706e67, 'A sweet, spiced pastry made from rolled dough with a cinnamon sugar filling, topped with a creamy glaze.', 'Classic, Caramel, Apple'),
(7, 'Apple Pie', '20000', 100, 0x75706c6f6164732f6170706c652e706e67, 'A timeless dessert featuring a buttery, flaky crust filled with sweet and tart spiced apples.', 'Classic, Caramel, Dustch'),
(8, 'Matcha Latte', '18000', 100, 0x75706c6f6164732f6c617474652e706e67, 'A creamy and frothy beverage made with finely ground green tea powder and milk.', '-'),
(9, 'Tuna Cheese Puff', '15000', 100, 0x75706c6f6164732f74756e612e706e67, 'A savory puff pastry filled with a creamy mixture of tuna and cheese, baked to golden perfection.', 'Original, Spicy'),
(10, 'Bread Coffee Bun', '13000', 100, 0x75706c6f6164732f636f666665652d62756e2e706e67, 'A soft, sweet bun with a coffe flavored crust and a buttery filling.', 'Classic, Mocha, Vanilla'),
(11, 'Garlic Baguette', '24000', 100, 0x75706c6f6164732f62616775657474652e706e67, 'A crusty French baguette infused with garlic butter, making it a flavorful side dish or appetizer.', 'Classic, Cheese'),
(12, 'Chamomile Tea', '17000', 100, 0x75706c6f6164732f6368616d6f6d696c65207465612e706e67, 'A soothing herbal tea made from dried chamomile flowers, known for its calming effect.', '-'),
(13, 'Mousse Cake', '22000', 100, 0x75706c6f6164732f6d6f757373652063616b652e706e67, ' A light and airy dessert made with layers of rich mousse.', 'Chocolate, Strawberry, Lemon'),
(14, 'Macaroon', '25000', 100, 0x75706c6f6164732f6d616361726f6e2e706e67, 'A delicate French confection made from almond flour and maringue, with a smooth ganache or buttercream filling.', 'Vanilla, Pistachio, Raspberry'),
(15, 'Espresso', '13000', 100, 0x75706c6f6164732f657370726573736f2e706e67, ' A strong and rich coffe brewed by forcing hot water through finely ground coffe beans.', '-');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `checkout`
--
ALTER TABLE `checkout`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `checkout`
--
ALTER TABLE `checkout`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT untuk tabel `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
