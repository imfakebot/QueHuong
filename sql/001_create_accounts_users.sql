-- Minimal migration for Account and User tables (MySQL)

CREATE DATABASE IF NOT EXISTS quehuong_db CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE quehuong_db;

-- Account table: simplified compared to ERD for compatibility
CREATE TABLE IF NOT EXISTS `Account` (
  `accountID` BINARY(16) NOT NULL,
  `userName` VARCHAR(255) NOT NULL UNIQUE,
  `passwordHash` VARCHAR(255) NOT NULL,
  `createdAt` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`accountID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- User profile table
CREATE TABLE IF NOT EXISTS `User` (
  `userID` BINARY(16) NOT NULL,
  `fullName` VARCHAR(255) NOT NULL,
  `email` VARCHAR(255) NOT NULL UNIQUE,
  `phoneNumber` VARCHAR(255) DEFAULT NULL,
  `address` TEXT DEFAULT NULL,
  PRIMARY KEY (`userID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Note: accountID/userID generation: you can use UUID_TO_BIN(UUID()) in INSERT statements
