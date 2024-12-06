CREATE DATABASE IF NOT EXISTS insecuredesign;
USE insecuredesign;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    auth_key VARCHAR(255) NOT NULL
);

INSERT INTO users (name, auth_key) VALUES ('Alice', 'secret'), ('Bob', 'notsosecret');
