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

-- Items table for menu
DROP TABLE IF EXISTS `items`;
CREATE TABLE `items` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(255) NOT NULL,
  `description` TEXT,
  `image_url` TEXT,
  `price` DECIMAL(10,2) NOT NULL DEFAULT 0.00,
  `category` VARCHAR(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `items` (`name`, `description`, `image_url`, `price`, `category`) VALUES
('Signature Black Coffee', 'Bold and smooth, our Signature Black Coffee is brewed to perfection with premium beans.', 'https://plus.unsplash.com/premium_photo-1723559972702-2659e41dbb5b?q=80&w=736&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D', 95.00, 'Drinks'),
('Iced Salted Caramel Macchiato', 'A creamy blend of espresso, steamed milk, and buttery caramel.', 'https://images.unsplash.com/photo-1645243370596-11b97810976c?q=80&w=686&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D', 140.00, 'Drinks'),
('Matcha Latte', 'Earthy and vibrant, our Matcha Latte blends finely ground green tea with steamed milk.', 'https://images.unsplash.com/photo-1582785513054-8d1bf9d69c1a?q=80&w=735&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D', 130.00, 'Drinks'),
('Pumpkin Spice Latte', 'A cozy seasonal favorite—rich espresso meets creamy milk and warm pumpkin spice flavors.', 'https://plus.unsplash.com/premium_photo-1667210180343-3ed8d69d7e07?q=80&w=735&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D', 150.00, 'Drinks'),
('Strawberry Frappuccino', 'Fruity, fun, and refreshingly sweet—our Strawberry Frappuccino is a creamy blended treat.', 'https://wearenotmartha.com/wp-content/uploads/Chocolate-Covered-Strawberry-Frappuccino-Featured.jpg', 160.00, 'Drinks'),
('Iced Chai Latte', 'Milk, ice, and black tea flavored with cloves, cinnamon, and other comforting spices.', 'https://images.unsplash.com/photo-1604959807242-9eb8fd0b5bfa?ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&q=80&w=688', 170.00, 'Drinks'),
('Cold Brew', 'Made with a special blend of beans who are cultivated to steep cold and long for a very smooth flavor.', 'https://images.unsplash.com/photo-1504753793650-d4a2b783c15e?ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&q=80&w=986', 170.00, 'Drinks'),
('Iced Latte', 'Cold coffee drink made with espresso, cold milk, ice, and caramel', 'https://images.unsplash.com/photo-1461023058943-07fcbe16d735?ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&q=80&w=1169', 150.00, 'Drinks'),
('Cappuccino', 'Italian coffee drink made with equal parts espresso, steamed milk, and milk foam', 'https://images.unsplash.com/photo-1534778101976-62847782c213?ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&q=80&w=687', 160.00, 'Drinks'),
('Hot Chocolate with Marshmallows', 'A hot, chocolate-flavored beverage made from chocolate or cocoa powder, milk or water, and a sweetener like sugar', 'https://images.unsplash.com/photo-1607196707151-2db8b71294ba?ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&q=80&w=747', 180.00, 'Drinks');