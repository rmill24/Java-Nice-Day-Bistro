-- Create the database
CREATE DATABASE coffee_shop;
USE coffee_shop;

-- Users table for login and admin/customer roles
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    role ENUM('admin', 'customer') NOT NULL DEFAULT 'customer'
);

-- Admin user
-- pass: admin123
INSERT INTO users (username, email, password, role)
VALUES ('admin', 'admin@email.com', '$2y$10$JqqyXt5flJvfjJM8Ha.fb.Cy9PpqxAKLW1RsFLBJyTolx9jHmtlZu', 'admin');
