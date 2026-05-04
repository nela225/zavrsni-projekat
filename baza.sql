CREATE DATABASE IF NOT EXISTS kafic_db;
USE kafic_db;

CREATE TABLE kategorije (
    id INT PRIMARY KEY AUTO_INCREMENT,
    naziv VARCHAR(50)
);

CREATE TABLE proizvodi (
    id INT PRIMARY KEY AUTO_INCREMENT,
    kategorija_id INT,
    naziv VARCHAR(100),
    cijena DECIMAL(10,2),
    FOREIGN KEY (kategorija_id) REFERENCES kategorije(id)
);

CREATE TABLE narudzbe (
    id INT PRIMARY KEY AUTO_INCREMENT,
    proizvod_id INT,
    kolicina INT,
    datum TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (proizvod_id) REFERENCES proizvodi(id)
);