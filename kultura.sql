-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 25, 2019 at 10:03 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kultura`
--
CREATE DATABASE IF NOT EXISTS `kultura` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `kultura`;

-- --------------------------------------------------------

--
-- Table structure for table `dogadjaji`
--

CREATE TABLE `dogadjaji` (
  `id_dogadjaja` int(11) NOT NULL,
  `naziv_dogadjaja` varchar(100) NOT NULL,
  `vrsta_dogadjaja` int(11) NOT NULL,
  `pocetak_dogadjaja` datetime NOT NULL,
  `kraj_dogadjaja` datetime NOT NULL,
  `opis_dogadjaja` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dogadjaji`
--

INSERT INTO `dogadjaji` (`id_dogadjaja`, `naziv_dogadjaja`, `vrsta_dogadjaja`, `pocetak_dogadjaja`, `kraj_dogadjaja`, `opis_dogadjaja`) VALUES
(11, 'KONCERT KLASIČNE MUZIKE: Simfonijski orkestar na Trgu republike', 1, '2019-11-30 20:00:00', '2019-11-30 23:59:00', 'Simfonijski orkestar održaće koncert prvi put na rekonstruisanom Trgu republike 30. Novembra 2019. godine u 20 časova. Saobraćaj na trgu biće zatvoren od 19 časova do ponoći, takođe uključiće se novogodišnja rasveta prvi put ove godine radi bolje atmosfere. Ulaz je besplatan, a članovi orkesta, kao i organizatori, se nadaju da će ih slušati što više mladih.\r\n\r\n'),
(12, 'JAZZ KONCERT: SKA-JAZZ festival', 1, '2019-12-06 20:00:00', '2019-12-07 23:59:00', 'Ove godine na Beogradskom sajmu  6. i 7. Decembra održaće se festival ska i džez muzike. Neverovatna muzička grupa pod nazivom New York Ska Jazz ensemble imaće priliku da nas oduševi 7. Decembra od 20 časova. Tada kao i prvi dan sviraće i muzički sastavi iz Srbije kao što su: Samostalni Referenti, Ringišpil, Lost Propellers, Skadrila i mnogi drugi. A u subotu (7.) posetioci će imati priliku da čuju mnoge stvari o džez kao i o ska muzici, pogledaju kratkometražne dokumentarne filmove o velikim džez zvezdama, da kupe ploče i cd-ove i još mnogo drugo. Ulaznice su u prodaji od 27. novembra. Za prvi dan karta će koštati 400 dinara, za drugi dan 1000 dinara, a karta za ceo festival koštaće 1100 dinara.'),
(14, 'ROK KONCERT: Plavi orkestar ponovo u Beogradu', 1, '2020-01-11 17:00:00', '2020-01-11 20:00:00', 'Na početku ovog meseca Plavi orkestar održao je koncert u Štark areni u Beogradu, članovi benda iznenađeni brojem ljudi, prvenstveno mladih, kao i neverovatnom atmosferom odlučili su da ponovo održe koncert. Ovog puta planiraju još veći spektakl, koncert će se održati 11. Januara 2020. godine na stadionu \"Rajko Mitić\". Karte će koštati od 1500 do 4000 u zavisnosti od mesta sedenja, a prodaja će početi 01. Decembra 2019. godine.'),
(15, 'Beogradski festival dokumentarnih filmova', 2, '2019-12-20 18:00:00', '2019-12-22 22:30:00', 'Tema ovogodišeg BFDF-a je kultura Dalekog istoka. Na festivalu mogu se videti dokumentarci o japanskim samurajima, nastanku borilačkih veština poput karate-a i kung fu-a, kao i kastama o Indiji, indijskoj kulturi, ali i tajlandska kultura i običaji filipinskih država. Festival će trajati tri dana počevši od 20. Decembra u 18 časova sa završetkom 22. Decembra. Održaće se u Sava centru, a na ulazu će naplaćivati 400 dinara, prvog dana na ulazu moći će da se kupi propusnica za sva tri dana koja će koštati 1000 dinara. Za studente uz indeks ulaz će koštati 300 dinara, a propusnica za tri dana 750 dinara.'),
(16, '\"Ujka Vanja\" u Jugoslovenskom dramskom pozorištu', 3, '2019-11-28 20:00:00', '2019-11-28 22:00:00', 'U četvrtak, 28. Novembra 2019. godine u 20 časova, u Jugoslovenskom dramskom pozorištu održaće se predstava \"Ujka Vanja\". U predstavi će glumiti Branislav Lečić, Nenad Jezdić, Bogdan Diklić i drugi veliki talenti. Cene karata su 1200, 700 i 200 dinara u zavisnosti od mesta sedenja. Cene za srednjoškolce uz đačku knjižicu su 1000, 500 i 200 dinara.\r\n'),
(17, '\"Čistač\", Marija Avramović', 4, '2019-12-30 08:00:00', '2019-12-30 20:00:00', 'Neverovatna izložba Marije Avramović pod nazivom čistač biće ponovo predstavljena publici 30. Decembra 2019. godine u Sava centru. Marija se nada dolasku što većeg broja mladih zainteresovanih za umetnost, takođe naglašava da će posle performansa rado popričati sa mladim umetnicima, dati im savete i odgovoriti na bilo kakva pitanja. Ulaz će koštati 800 dinara, i karte se mogu naći na blagajnama Sava centra.\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `korisnici`
--

CREATE TABLE `korisnici` (
  `id_korisnika` int(11) NOT NULL,
  `korisnicko_ime` varchar(20) NOT NULL,
  `lozinka` varchar(100) NOT NULL,
  `ime` varchar(20) NOT NULL,
  `prezime` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `biografija` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `korisnici`
--

INSERT INTO `korisnici` (`id_korisnika`, `korisnicko_ime`, `lozinka`, `ime`, `prezime`, `email`, `biografija`) VALUES
(3, 'skocimis', '$2y$10$DX0RK9.RZsFacdZI9.aXduw2Q4AqF.LFZJIk7u8wcCUTSoXMBgUaS', 'Aleksandar', 'Spremo', 'imejl@gmail.com', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `korisnici_dogadjaji`
--

CREATE TABLE `korisnici_dogadjaji` (
  `id_korisnika` int(11) NOT NULL,
  `id_dogadjaja` int(11) NOT NULL,
  `zainteresovan` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `session_tokens`
--

CREATE TABLE `session_tokens` (
  `token` varchar(60) NOT NULL,
  `id_korisnika` int(11) NOT NULL,
  `login_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MEMORY DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `vrste_dogadjaja`
--

CREATE TABLE `vrste_dogadjaja` (
  `id_vrste` int(11) NOT NULL,
  `naziv` varchar(30) NOT NULL,
  `opis` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vrste_dogadjaja`
--

INSERT INTO `vrste_dogadjaja` (`id_vrste`, `naziv`, `opis`) VALUES
(1, 'Muzika', 'Opis muzike'),
(2, 'Film', 'Opis filma'),
(3, 'Predstava', 'Opis predstave'),
(4, 'Galerija', 'Opis galerije');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dogadjaji`
--
ALTER TABLE `dogadjaji`
  ADD PRIMARY KEY (`id_dogadjaja`),
  ADD KEY `fk` (`vrsta_dogadjaja`);

--
-- Indexes for table `korisnici`
--
ALTER TABLE `korisnici`
  ADD PRIMARY KEY (`id_korisnika`);

--
-- Indexes for table `korisnici_dogadjaji`
--
ALTER TABLE `korisnici_dogadjaji`
  ADD PRIMARY KEY (`id_korisnika`,`id_dogadjaja`),
  ADD KEY `fk2` (`id_dogadjaja`);

--
-- Indexes for table `session_tokens`
--
ALTER TABLE `session_tokens`
  ADD PRIMARY KEY (`token`),
  ADD KEY `id_korisnika` (`id_korisnika`);

--
-- Indexes for table `vrste_dogadjaja`
--
ALTER TABLE `vrste_dogadjaja`
  ADD PRIMARY KEY (`id_vrste`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dogadjaji`
--
ALTER TABLE `dogadjaji`
  MODIFY `id_dogadjaja` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `korisnici`
--
ALTER TABLE `korisnici`
  MODIFY `id_korisnika` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `vrste_dogadjaja`
--
ALTER TABLE `vrste_dogadjaja`
  MODIFY `id_vrste` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `dogadjaji`
--
ALTER TABLE `dogadjaji`
  ADD CONSTRAINT `fk` FOREIGN KEY (`vrsta_dogadjaja`) REFERENCES `vrste_dogadjaja` (`id_vrste`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `korisnici_dogadjaji`
--
ALTER TABLE `korisnici_dogadjaji`
  ADD CONSTRAINT `fk1` FOREIGN KEY (`id_korisnika`) REFERENCES `korisnici` (`id_korisnika`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk2` FOREIGN KEY (`id_dogadjaja`) REFERENCES `dogadjaji` (`id_dogadjaja`) ON DELETE CASCADE ON UPDATE CASCADE;

DELIMITER $$
--
-- Events
--
CREATE DEFINER=`root`@`localhost` EVENT `auto_delete_session_tokens` ON SCHEDULE EVERY 10 MINUTE STARTS '2019-11-25 20:11:08' ON COMPLETION PRESERVE ENABLE DO DELETE FROM session_tokens WHERE datetime < date_sub(now(), INTERVAL 6 hour)$$

DELIMITER ;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
