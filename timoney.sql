-- timoney.sql - run in phpMyAdmin to create DB & tables
CREATE DATABASE IF NOT EXISTS timoney_db CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE timoney_db;
CREATE TABLE users (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(100) NOT NULL,
  email VARCHAR(150) NOT NULL UNIQUE,
  password_hash VARCHAR(255) NOT NULL,
  salary DECIMAL(12,2) DEFAULT 0,
  rent DECIMAL(12,2) DEFAULT 0,
  groceries DECIMAL(12,2) DEFAULT 0,
  transport DECIMAL(12,2) DEFAULT 0,
  entertainment DECIMAL(12,2) DEFAULT 0,
  other DECIMAL(12,2) DEFAULT 0,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
