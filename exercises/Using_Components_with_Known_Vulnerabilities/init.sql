CREATE DATABASE IF NOT EXISTS ucwkvdb;
USE ucwkvdb;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL
);

INSERT INTO users (username, password) VALUES ('admin', 'password'), ('user', 'userpass');

-- Simulate a vulnerability by using an outdated hashing algorithm
UPDATE users SET password = MD5(password);

-- Create a table to store user input
CREATE TABLE user_input (
    id INT AUTO_INCREMENT PRIMARY KEY,
    input_text TEXT
);

-- Insert some sample data
INSERT INTO user_input (input_text) VALUES 
('This is a test input'),
('Another sample input'),
('<script>alert("XSS");</script>');
