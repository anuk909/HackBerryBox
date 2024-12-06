CREATE DATABASE IF NOT EXISTS deserializationdb;
USE deserializationdb;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    isAdmin BOOLEAN DEFAULT FALSE
);

INSERT INTO users (name, isAdmin) VALUES ('Alice', FALSE), ('Bob', TRUE);
