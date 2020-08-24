
CREATE DATABASE Pololetka;

CREATE TABLE `kontakt` (
  `id` int(11) AUTO_INCREMENT PRIMARY KEY,
  `Adresa` tinytext NOT NULL,
  `EmailId` varchar(255) NOT NULL,
  `KontaktCislo` char(11) NOT NULL
);

INSERT INTO `kontakt` (`id`, `Adresa`, `EmailId`,  `KontaktCislo`) VALUES
(1, 'Stará 65', 'daafldafj@gmail.com', '605118877');

CREATE TABLE `uzivatel` (
  `id_uzivatel` int(11) AUTO_INCREMENT PRIMARY KEY,
  `jmeno` varchar(120) NOT NULL,
  `prijmeni` varchar(120) NOT NULL,
  `email` varchar(100) NOT NULL,
  `heslo` varchar(100) NOT NULL
);

INSERT INTO `uzivatel` (`id_uzivatel`, `jmeno`, `prijmeni`, `email`, `heslo`) VALUES
(1, 'admin', 'admin', 'kadle.tom@gmail.com' ,'21232f297a57a5a743894a0e4a801fc3');


CREATE TABLE `akce` (
    `id` int(11) AUTO_INCREMENT PRIMARY KEY,
    `NazevAkce` varchar(120) NOT NULL,
    `MistoAkce` varchar(120) NOT NULL,
    `Cena` decimal(6,2) NOT NULL,
    `DatumStartu` DATE NOT NULL,
    `DatumKonce` DATE NOT NULL
);

INSERT INTO `akce` (`id`, `NazevAkce`, `MistoAkce` , `Cena`, `DatumStartu`, `DatumKonce`) VALUES
(1, 'běh', 'Ústí nad Labem', '200.00', '2021-07-07 14:00:49', '2021-07-07 16:00:49'),
(2, 'běh', 'Brno', '200.00', '2021-07-07 14:00:49', '2021-07-07 16:00:49'),
(3, 'běh', 'Praha', '200.00', '2021-07-07 14:00:49', '2021-07-07 16:00:49'),
(4, 'běh', 'Ostrava', '200.00', '2021-07-07 14:00:49', '2021-07-07 16:00:49');