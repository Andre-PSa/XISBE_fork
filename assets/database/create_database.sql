-- Create Database
CREATE DATABASE IF NOT EXISTS xsbe_db;

-- Use the Database
USE xsbe_db;

-- Create the Users Table
CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(255) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL
);
