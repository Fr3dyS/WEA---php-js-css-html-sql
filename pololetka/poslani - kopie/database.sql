

CREATE TABLE `admin` (
  `id` int(11) AUTO_INCREMENT PRIMARY KEY ,
  `Jmeno` varchar(100) NOT NULL,
  `Heslo` varchar(100) NOT NULL
);

INSERT INTO `admin` (`id`, `Jmeno`, `Heslo`) VALUES
(NULL, 'admin', 'admin');

CREATE TABLE `stranky` (
  `id` int(11) AUTO_INCREMENT PRIMARY KEY,
  `JmenoStranky` varchar(255) DEFAULT NULL,
  `typ` varchar(255) NOT NULL DEFAULT 
);

INSERT INTO `stranky` (`id`, `JmenoStranky`, `typ`) VALUES
(1, 'Terms and Conditions', 'terms'),
(2, 'Privacy Policy', 'privacy'),
(3, 'About Us ', 'aboutus'),
(4, 'FAQs', 'faqs');


CREATE TABLE `predplatitel` (
  `id` int(11)AUTO_INCREMENT PRIMARY KEY,
  `PredplatitelEmail` varchar(120) DEFAULT NULL,
  `DatumPost` timestamp NULL DEFAULT current_timestamp()
);

INSERT INTO `predplatitel` (`id`, `PredplatitelEmail`, `DatumPost`) VALUES
(1, 'daafldafj@gmail.com', '2010-07-07 09:26:21'),
(2, 'kudfdsfd@gmail.com', '2000-07-07 09:35:07');

CREATE TABLE `kontakt` (
  `id` int(11) AUTO_INCREMENT PRIMARY KEY,
  `Adresa` tinytext DEFAULT NULL,
  `EmailId` varchar(255) DEFAULT NULL,
  `KontaktCislo` char(11) DEFAULT NULL
) 

INSERT INTO `kontakt` (`id`, `Adresa`, `EmailId`,  `KontaktCislo`) VALUES
(1, 'Stará 65', 'daafldafj@gmail.com', '605118877');

CREATE TABLE `uzivatel` (
  `id` int(11) AUTO_INCREMENT PRIMARY KEY,
  `CeleJmeno` varchar(120) DEFAULT NULL,
  `EmailId` varchar(100) DEFAULT NULL,
  `Heslo` varchar(100) DEFAULT NULL,
  `KontaktCislo` char(11) DEFAULT NULL,
  `Mesto` varchar(255) DEFAULT NULL,
  `Adresa` varchar(100) DEFAULT NULL,
);

INSERT INTO `uzivatel` (`id`, `CeleJmeno`, `EmailId`, `Heslo`, `KontaktCislo`, `Město`, `Adresa`) VALUES
(1, 'Test', 'test@gmail.com', 'f925916e2754e5e03f75dd58a5733251', '6465465465', 'Ústí nad Labem', 'Nová');


CREATE TABLE `akce` (
    `id` int(11) AUTO_INCREMENT PRIMARY KEY,
    `NazevAkce` varchar(120) DEFAULT NULL,
    `MístoAkce` varchar(120) DEFAULT NULL,
    `Cena` decimal(6,2) DEFAULT NULL,
    `DatumStartu` DATE DEFAULT NULL,
    `DatumKonce` DATE DEFAULT NULL
);

INSERT INTO `akce` (`id`, `NazevAkce`, `MístoAkce` , `Cena`, `DatumStartu`, `DatumKonce`) VALUES
(1, 'běh', 'Ústí nad Labem', '200.00', '2021-07-07 14:00:49', '2021-07-07 16:00:49');
