CREATE DATABASE IF NOT EXISTS pibank;
USE pibank;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(255) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    reset_token VARCHAR(255)
);

-- Insert a sample user
INSERT INTO users (email, password) VALUES ('admin@pibank.com', '$2y$10$uKu7XZ6RqQ9RzQh5ZJ5.8.X6HyVTI6F9Z7Z9Z7Z9Z7Z9Z7Z9Z7Z9Z');

-- Create a user with limited privileges for the application
CREATE USER IF NOT EXISTS 'pibank_user'@'%' IDENTIFIED BY 'secure_password';
GRANT SELECT, INSERT, UPDATE ON pibank.* TO 'pibank_user'@'%';
FLUSH PRIVILEGES;
