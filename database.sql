CREATE DATABASE `student`;

USE `student`;

CREATE TABLE `sdetail` (
    `Id` INT PRIMARY KEY AUTO_INCREMENT,
    `Name` VARCHAR(255) NOT NULL,
    `RollNo` VARCHAR(255) NOT NULL,
    `Course` VARCHAR(255) NOT NULL,
    `Division` VARCHAR(255) NOT NULL
);