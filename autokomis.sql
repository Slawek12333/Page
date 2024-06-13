-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Cze 13, 2024 at 09:52 AM
-- Wersja serwera: 10.4.32-MariaDB
-- Wersja PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `autokomis`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `samochody`
--

CREATE TABLE `samochody` (
  `ID` int(11) NOT NULL,
  `Marka` varchar(100) DEFAULT NULL,
  `Model` varchar(100) DEFAULT NULL,
  `RokProdukcji` int(11) DEFAULT NULL,
  `Cena` decimal(10,2) DEFAULT NULL,
  `Stan` enum('Nowy','Używany') DEFAULT NULL,
  `Opis` text DEFAULT NULL,
  `DataDodania` date DEFAULT NULL,
  `NazwaZdjecia` varchar(255) DEFAULT NULL,
  `Typ` varchar(50) DEFAULT NULL,
  `Paliwo` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `samochody`
--

INSERT INTO `samochody` (`ID`, `Marka`, `Model`, `RokProdukcji`, `Cena`, `Stan`, `Opis`, `DataDodania`, `NazwaZdjecia`, `Typ`, `Paliwo`) VALUES
(1, 'Toyota', 'Corolla', 2018, 45000.00, 'Używany', 'Bardzo dobry stan, niski przebieg', '2024-06-09', '1.jpg', 'Sedan', 'Benzyna'),
(2, 'Honda', 'Civic', 2017, 38000.00, 'Używany', 'Przestronny i ekonomiczny', '2024-06-09', '2.jpg', 'Sedan', 'Benzyna'),
(3, 'Volkswagen', 'Golf', 2019, 52000.00, 'Nowy', 'Nowy model z wieloma nowymi funkcjami', '2024-03-02', '3.jpg', 'Sedan', 'Diesel'),
(4, 'BMW', '3 Series', 2016, 60000.00, 'Używany', 'Sportowy sedan z mocnym silnikiem', '2024-06-09', '4.jpg', 'Sedan', 'Benzyna'),
(5, 'Mercedes', 'C-Class', 2020, 75000.00, 'Nowy', 'Luksusowy sedan z najnowszymi technologiami', '2021-08-04', '5.jpg', 'Sedan', 'Benzyna'),
(6, 'Audi', 'A4', 2015, 48000.00, 'Używany', 'Elegancki i dynamiczny sedan', '2022-11-19', '6.jpg', 'Sedan', 'Diesel'),
(7, 'Ford', 'Focus', 2018, 35000.00, 'Używany', 'Przestronny i ekonomiczny kompakt', '2024-05-15', '7.jpg', 'Sedan', 'Benzyna'),
(8, 'Chevrolet', 'Camaro', 2019, 70000.00, 'Nowy', 'Muscle car z potężnym silnikiem V8', '2023-09-09', '8.jpg', 'Muscle Car', 'Benzyna'),
(9, 'Hyundai', 'Elantra', 2017, 32000.00, 'Używany', 'Kompaktowy sedan z dobrym stosunkiem ceny do jakości', '2024-03-19', '9.jpg', 'Sedan', 'Benzyna'),
(10, 'Kia', 'Sorento', 2020, 58000.00, 'Nowy', 'SUV z dużą przestrzenią i zaawansowanymi funkcjami', '2024-04-11', '10.jpg', 'SUV', 'Diesel'),
(11, 'Toyota', 'Camry', 2020, 47000.00, 'Używany', 'Świetny stan, niska cena', '2024-06-11', '11.jpg', 'Sedan', 'Benzyna'),
(12, 'Toyota', 'RAV4', 2021, 52000.00, 'Nowy', 'Nowy model, świetne wyposażenie', '2024-06-11', '12.jpg', 'SUV', 'Hybryda'),
(13, 'Toyota', 'Yaris', 2019, 35000.00, 'Używany', 'Mały i ekonomiczny', '2024-06-11', '13.jpg', 'Kompakt', 'Benzyna'),
(14, 'Toyota', 'Prius', 2022, 55000.00, 'Nowy', 'Hybrydowy, bardzo ekonomiczny', '2024-06-11', '14.jpg', 'Kompakt', 'Hybryda'),
(15, 'Toyota', 'Land Cruiser', 2018, 80000.00, 'Używany', 'Solidny SUV na każdą drogę', '2024-06-11', '15.jpg', 'SUV', 'Diesel'),
(16, 'Honda', 'Accord', 2018, 40000.00, 'Używany', 'Komfortowy sedan z dużą przestrzenią', '2024-06-11', '16.jpg', 'Sedan', 'Benzyna'),
(17, 'Honda', 'CR-V', 2020, 60000.00, 'Nowy', 'Przestronny SUV z nowoczesnymi funkcjami', '2024-06-11', '17.jpg', 'SUV', 'Benzyna'),
(18, 'Honda', 'Fit', 2019, 30000.00, 'Używany', 'Kompaktowy i oszczędny', '2024-06-11', '18.jpg', 'Sedan', 'Benzyna'),
(19, 'Honda', 'Pilot', 2021, 55000.00, 'Nowy', 'Duży rodzinny SUV', '2024-06-11', '19.jpg', 'SUV', 'Benzyna'),
(20, 'Honda', 'Odyssey', 2017, 45000.00, 'Używany', 'Przestronny minivan', '2024-06-11', '20.jpg', 'Minivan', 'Benzyna'),
(21, 'Volkswagen', 'Passat', 2018, 50000.00, 'Używany', 'Duży i komfortowy', '2024-06-11', '21.jpg', 'Sedan', 'Diesel'),
(22, 'Volkswagen', 'Tiguan', 2019, 60000.00, 'Nowy', 'SUV z najnowszymi technologiami', '2024-06-11', '22.jpg', 'SUV', 'Benzyna'),
(23, 'Volkswagen', 'Polo', 2017, 35000.00, 'Używany', 'Mały i zwinny', '2024-06-11', '23.jpg', 'Sedan', 'Benzyna'),
(24, 'Volkswagen', 'Arteon', 2020, 70000.00, 'Nowy', 'Luksusowy i sportowy', '2024-06-11', '24.jpg', 'Sportowy Sedan', 'Benzyna'),
(25, 'Volkswagen', 'Jetta', 2018, 42000.00, 'Używany', 'Sedan z niskim przebiegiem', '2024-06-11', '25.jpg', 'Sedan', 'Diesel'),
(26, 'BMW', '5 Series', 2017, 65000.00, 'Używany', 'Luksusowy i dynamiczny', '2024-06-11', '26.jpg', 'Sedan', 'Benzyna'),
(27, 'BMW', 'X3', 2020, 75000.00, 'Nowy', 'Nowoczesny SUV', '2024-06-11', '27.jpg', 'SUV', 'Benzyna'),
(28, 'BMW', 'X5', 2019, 80000.00, 'Używany', 'Duży i komfortowy SUV', '2024-06-11', '28.jpg', 'SUV', 'Diesel'),
(29, 'BMW', '4 Series', 2018, 68000.00, 'Używany', 'Sportowy coupe', '2024-06-11', '29.jpg', 'Sedan', 'Benzyna'),
(30, 'BMW', '7 Series', 2021, 90000.00, 'Nowy', 'Luksusowy sedan z zaawansowanymi funkcjami', '2024-06-11', '30.jpg', 'Sedan', 'Benzyna'),
(31, 'Mercedes', 'E-Class', 2019, 70000.00, 'Używany', 'Elegancki i komfortowy', '2024-06-11', '31.jpg', 'Sedan', 'Benzyna'),
(32, 'Mercedes', 'GLC', 2020, 80000.00, 'Nowy', 'Luksusowy SUV', '2024-06-11', '32.jpg', 'SUV', 'Diesel'),
(33, 'Mercedes', 'A-Class', 2018, 40000.00, 'Używany', 'Kompaktowy i nowoczesny', '2024-06-11', '33.jpg', 'Sedan', 'Benzyna'),
(34, 'Mercedes', 'S-Class', 2021, 120000.00, 'Nowy', 'Najwyższa klasa luksusu', '2024-06-11', '34.jpg', 'Sedan', NULL),
(35, 'Mercedes', 'CLA', 2017, 45000.00, 'Używany', 'Kompaktowy i sportowy', '2024-06-11', '35.jpg', 'Sedan', 'Benzyna'),
(36, 'Audi', 'A6', 2018, 60000.00, 'Używany', 'Luksusowy sedan z mocnym silnikiem', '2024-06-11', '36.jpg', 'Sedan', 'Benzyna'),
(37, 'Audi', 'Q5', 2020, 70000.00, 'Nowy', 'Nowoczesny SUV z wieloma funkcjami', '2024-06-11', '37.jpg', 'SUV', 'Diesel'),
(38, 'Audi', 'A3', 2017, 35000.00, 'Używany', 'Kompaktowy i zwinny', '2024-06-11', '38.jpg', 'Sedan', 'Benzyna'),
(39, 'Audi', 'Q7', 2019, 85000.00, 'Używany', 'Duży SUV z przestronnym wnętrzem', '2024-06-11', '39.jpg', 'SUV', 'Diesel'),
(40, 'Audi', 'A8', 2021, 95000.00, 'Nowy', 'Luksusowy sedan z zaawansowanymi technologiami', '2024-06-11', '40.jpg', 'Sedan', 'Hybryda'),
(41, 'Ford', 'Mondeo', 2017, 38000.00, 'Używany', 'Duży i przestronny sedan', '2024-06-11', '41.jpg', 'Sedan', 'Benzyna'),
(42, 'Ford', 'Edge', 2019, 55000.00, 'Używany', 'SUV z wieloma funkcjami', '2024-06-11', '42.jpg', 'SUV', 'Diesel'),
(43, 'Ford', 'Mustang', 2020, 75000.00, 'Nowy', 'Ikoniczny muscle car', '2024-06-11', '43.jpg', 'Coupe', 'Diesel'),
(44, 'Ford', 'Kuga', 2018, 45000.00, 'Używany', 'Kompaktowy SUV', '2024-06-11', '44.jpg', 'SUV', 'Benzyna'),
(45, 'Ford', 'Explorer', 2021, 70000.00, 'Nowy', 'Duży SUV na długie podróże', '2024-06-11', '45.jpg', 'SUV', 'Diesel'),
(46, 'Chevrolet', 'Malibu', 2017, 35000.00, 'Używany', 'Komfortowy sedan', '2024-06-11', '46.jpg', 'Sedan', 'Benzyna'),
(47, 'Chevrolet', 'Equinox', 2019, 45000.00, 'Używany', 'Przestronny SUV', '2024-06-11', '47.jpg', 'SUV', 'Diesel'),
(48, 'Chevrolet', 'Traverse', 2020, 55000.00, 'Nowy', 'Duży rodzinny SUV', '2024-06-11', '48.jpg', 'SUV', 'Diesel'),
(49, 'Chevrolet', 'Spark', 2018, 20000.00, 'Używany', 'Mały i ekonomiczny', '2024-06-11', '49.jpg', 'Sedan', 'Benzyna'),
(50, 'Chevrolet', 'Tahoe', 2021, 80000.00, 'Nowy', 'Duży SUV z mocnym silnikiem', '2024-06-11', '50.jpg', 'SUV', 'Diesel'),
(51, 'Hyundai', 'Sonata', 2018, 38000.00, 'Używany', 'Komfortowy sedan z nowoczesnymi funkcjami', '2024-06-11', '51.jpg', 'Sedan', 'Benzyna'),
(52, 'Hyundai', 'Tucson', 2019, 45000.00, 'Używany', 'SUV z wieloma funkcjami', '2024-06-11', '52.jpg', 'SUV', 'Diesel'),
(53, 'Hyundai', 'Santa Fe', 2020, 55000.00, 'Nowy', 'Duży SUV z przestronnym wnętrzem', '2024-06-11', '53.jpg', 'SUV', 'Diesel'),
(54, 'Hyundai', 'Kona', 2017, 32000.00, 'Używany', 'Mały SUV, idealny do miasta', '2024-06-11', '54.jpg', 'SUV', 'Benzyna'),
(55, 'Hyundai', 'Palisade', 2021, 75000.00, 'Nowy', 'Luksusowy SUV z zaawansowanymi funkcjami', '2024-06-11', '55.jpg', 'SUV', 'Diesel'),
(56, 'Kia', 'Optima', 2018, 36000.00, 'Używany', 'Komfortowy sedan z nowoczesnym wnętrzem', '2024-06-11', '56.jpg', 'Sedan', 'Benzyna'),
(57, 'Kia', 'Sportage', 2019, 45000.00, 'Używany', 'SUV z nowoczesnym wyglądem', '2024-06-11', '57.jpg', 'SUV', 'Benzyna'),
(58, 'Kia', 'Telluride', 2020, 60000.00, 'Nowy', 'Duży rodzinny SUV', '2024-06-11', '58.jpg', 'SUV', 'Diesel'),
(59, 'Kia', 'Niro', 2017, 32000.00, 'Używany', 'Hybrydowy SUV', '2024-06-11', '59.jpg', 'SUV', 'Hybryda'),
(60, 'Kia', 'Stinger', 2021, 70000.00, 'Nowy', 'Sportowy sedan z mocnym silnikiem', '2024-06-11', '60.jpg', 'Sedan', 'Benzyna');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `imie` varchar(50) DEFAULT NULL,
  `nazwisko` varchar(50) DEFAULT NULL,
  `haslo` varchar(255) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `imie`, `nazwisko`, `haslo`, `email`) VALUES
(0, 'Admin', '.', '$2y$10$pWB.4MVo2wx8h3uzs821r.fb6aXecZ0Ylcd54scXHkOKuIuFgjKq6', 'szy-sla@o2.pl');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
