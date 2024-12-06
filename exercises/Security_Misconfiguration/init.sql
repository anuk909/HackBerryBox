CREATE DATABASE IF NOT EXISTS misconfigdb;
USE misconfigdb;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL
);

INSERT INTO users (username, password) VALUES ('admin', 'password'), ('user', 'userpass');

-- Insecure configuration: Create a user with excessive privileges
CREATE USER 'insecure_user'@'%' IDENTIFIED BY 'weak_password';
GRANT ALL PRIVILEGES ON *.* TO 'insecure_user'@'%' WITH GRANT OPTION;

-- Insecure configuration: Enable local infile
SET GLOBAL local_infile = 1;

-- Insecure configuration: Disable binary logging
SET SQL_LOG_BIN = 0;
