CREATE DATABASE IF NOT EXISTS loggingdb;
USE loggingdb;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL
);

INSERT INTO users (username, password) VALUES ('admin', 'password'), ('user', 'userpass');
