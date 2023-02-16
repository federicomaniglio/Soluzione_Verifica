CREATE DATABASE IF NOT EXISTS esercizio1;

USE esercizio1;

CREATE TABLE `studenti` (
    `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `name` varchar(120) NOT NULL,
    `surname` varchar(120) NOT NULL,
    `age` int(3) NOT NULL
);

INSERT INTO `studenti` (`name`, `surname`, `age`) VALUES

("Federico", "Maniglio", 25),
("Alberto", "Costa", 37),
("Mario", "Rossi", 18);