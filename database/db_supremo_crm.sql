-- MySQL Workbench SQL Dump
-- version 8
--
-- Host: 127.0.0.1
-- PHP Version: 8.1.3


CREATE DATABASE db_supremo_crm;

CREATE TABLE contacts (
	id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    phone VARCHAR(20) NOT NULL,
    cpf VARCHAR(14) NOT NULL
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



