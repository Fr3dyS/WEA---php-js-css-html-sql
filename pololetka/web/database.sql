

CREATE TABLE `admin` (
  `id` int(11) AUTO_INCREMENT PRIMARY KEY ,
  `Jmeno` varchar(100) NOT NULL,
  `Heslo` varchar(100) NOT NULL
);

INSERT INTO `admin` (`id`, `Jmeno`, `Heslo`) VALUES
(NULL, 'admin', 'admin');

CREATE TABLE `kontakt` (
  `id` int(11) AUTO_INCREMENT PRIMARY KEY,
  `Adresa` tinytext NOT NULL,
  `EmailId` varchar(255) NOT NULL,
  `KontaktCislo` char(11) NOT NULL
) 

INSERT INTO `kontakt` (`id`, `Adresa`, `EmailId`,  `KontaktCislo`) VALUES
(1, 'Stará 65', 'daafldafj@gmail.com', '605118877');

CREATE TABLE `uzivatel` (
  `id` int(11) AUTO_INCREMENT PRIMARY KEY,
  `CeleJmeno` varchar(120) NOT NULL,
  `EmailId` varchar(100) NOT NULL,
  `Heslo` varchar(100) NOT NULL,
  `KontaktCislo` char(11) NOT NULL,
  `Mesto` varchar(255) NOT NULL,
  `Adresa` varchar(100) NOT NULL,
);

INSERT INTO `uzivatel` (`id`, `CeleJmeno`, `EmailId`, `Heslo`, `KontaktCislo`, `Město`, `Adresa`) VALUES
(1, 'Test', 'test@gmail.com', 'f925916e2754e5e03f75dd58a5733251', '6465465465', 'Ústí nad Labem', 'Nová');


CREATE TABLE `akce` (
    `id` int(11) AUTO_INCREMENT PRIMARY KEY,
    `NazevAkce` varchar(120) NOT NULL,
    `MístoAkce` varchar(120) NOT NULL,
    `Cena` decimal(6,2) NOT NULL,
    `DatumStartu` DATE NOT NULL,
    `DatumKonce` DATE NOT NULL
);

INSERT INTO `akce` (`id`, `NazevAkce`, `MístoAkce` , `Cena`, `DatumStartu`, `DatumKonce`) VALUES
(1, 'běh', 'Ústí nad Labem', '200.00', '2021-07-07 14:00:49', '2021-07-07 16:00:49');
