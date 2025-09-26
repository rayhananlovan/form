CREATE DATABASE db_project;

USE db_project;

CREATE TABLE produk (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama_produk VARCHAR(100) NOT NULL,
    password VARCHAR(100) NOT NULL,
    kategori VARCHAR(50) NOT NULL,
    fitur TEXT,
    status VARCHAR(20) NOT NULL,
    deskripsi TEXT
);
