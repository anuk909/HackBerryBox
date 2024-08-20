-- SQL script to set up the database for the Software Data Integrity Failures exercise

CREATE DATABASE IF NOT EXISTS codeguard;

USE codeguard;

CREATE TABLE IF NOT EXISTS packages (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    version VARCHAR(255) NOT NULL,
    integrity_hash VARCHAR(255) NOT NULL
);

INSERT INTO packages (name, version, integrity_hash) VALUES
('PackageA', '1.0', 'abc123'),
('PackageB', '2.0', 'def456');
