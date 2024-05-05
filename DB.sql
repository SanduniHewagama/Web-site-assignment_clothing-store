
CREATE DATABASE IF NOT EXISTS `bella`;
USE `bella`;

CREATE TABLE `users` (
  `id` int(11) AUTO_INCREMENT PRIMARY KEY,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ;
--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `password`) VALUES
(1, 'Gimhani', 'Jayamanna', 'jayamannagimhani@gmail.com', '$2y$10$yQZPLCRjzvoyLf5LByqGXepujZ4dLoVuG9RT.BZ.zr/Nadt8JEfq6');



CREATE TABLE products (
    product_id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    description TEXT,
    price DECIMAL(10, 2) NOT NULL,
    image_url VARCHAR(255),
    stock_quantity INT NOT NULL
);

CREATE TABLE carts (
    cart_id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users(id)
);

CREATE TABLE cart_items (
    item_id INT AUTO_INCREMENT PRIMARY KEY,
    cart_id INT NOT NULL,
    product_id INT NOT NULL,
    quantity INT NOT NULL,
    FOREIGN KEY (cart_id) REFERENCES carts(cart_id),
    FOREIGN KEY (product_id) REFERENCES products(product_id)
);

CREATE TABLE orders (
    order_id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT NOT NULL,
    order_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    total DECIMAL(10, 2) NOT NULL,
    FOREIGN KEY (user_id) REFERENCES users(id)
);

CREATE TABLE order_items (
    order_item_id INT AUTO_INCREMENT PRIMARY KEY,
    order_id INT NOT NULL,
    product_id INT NOT NULL,
    quantity INT NOT NULL,
    price_per_item DECIMAL(10, 2),
    FOREIGN KEY (order_id) REFERENCES orders(order_id),
    FOREIGN KEY (product_id) REFERENCES products(product_id)
);

INSERT INTO products (name, description, price, image_url, stock_quantity) VALUES 
('Graphic T-Shirt', '100% cotton graphic t-shirt in various sizes.', 20.00, 'img/tshirt.jpeg', 50),
('Denim Jeans', 'High-quality skinny denim jeans.', 40.00, 'img/denim_jeans.jpeg', 40),
('Summer Dress', 'Lightweight floral print summer dress, perfect for warm days.', 50.00, 'img/summer_dress.jpg', 30),
('Casual Blouse', 'Soft and comfortable blouse available in multiple colors.', 35.00, 'img/casual_blouse.jpeg', 45),
('Evening Gown', 'Elegant evening gown for special occasions.', 120.00, 'img/evening_gown.jpeg', 15);

INSERT INTO carts (cart_id,user_id) values (1,1);

INSERT INTO cart_items (cart_id, product_id, quantity) VALUES
(1, 4, 2), 
(1, 2, 1),
(1, 5, 1); 


INSERT INTO products (name, description, price, image_url, stock_quantity) VALUES
('Moose Comfort Fit Crew Neck T-shirt', 'High quality, comfortable crew neck T-shirt available in various colors.', 990.00, 'https://www.thilakawardhana.com/wp-content/uploads/2023/05/TM11985.png', 50),
('Moose Comfort Fit Crew Neck T-shirt', 'High quality, comfortable crew neck T-shirt available in various colors.', 990.00, 'https://static-01.daraz.lk/p/39efc0fcbed435905322f4d10ea2f571.jpg_750x400.jpg_.webp', 50),
('Moose Comfort Fit Crew Neck T-shirt', 'High quality, comfortable crew neck T-shirt available in various colors.', 990.00, 'https://static-01.daraz.lk/p/dff020f80cc3db915515a2a8966bc5fa.jpg_750x400.jpg_.webp', 50),
('Moose Comfort Fit Crew Neck T-shirt', 'High quality, comfortable crew neck T-shirt available in various colors.', 990.00, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS2mX2_Emv1KQ-ZB4dC0zWcZgzBi0Pa4Iug0zQMmp2jP8uwU8S6Gz3fRbKJnPKuqn6eU3U&usqp=CAU', 50),
('Moose Comfort Fit Crew Neck T-shirt', 'High quality, comfortable crew neck T-shirt available in various colors.', 990.00, 'https://springandsummer.lk/cdn/shop/files/MooseComfortFitCrewNeckT-shirt_Purple.jpg?v=1711768695', 50),
('Moose Comfort Fit Crew Neck T-shirt', 'High quality, comfortable crew neck T-shirt available in various colors.', 990.00, 'https://springandsummer.lk/cdn/shop/files/MooseComfortFitCrewNeckT-shirt_MintGreen.jpg?v=1711768695', 50),
('Moose Jogger short for Men', 'Stylish and comfortable jogger shorts perfect for casual wear.', 1200.00, 'https://static-01.daraz.lk/p/8ac58ca17b3a6fd56f7fad9e92e6ff46.jpg_750x400.jpg_.webp', 40),
('Moose Jogger short for Men', 'Stylish and comfortable jogger shorts perfect for casual wear.', 1200.00, 'https://static-01.daraz.lk/p/8b9254eb38b0b306ef53281c9e6f44a2.jpg_750x400.jpg_.webp', 40),
('Moose Womens Printed Chino Short', 'Comfortable and trendy printed chino shorts for women.', 1000.00, 'https://fbpros3v1.s3.ap-southeast-1.amazonaws.com/wp-content/uploads/2022/04/0304400199DMN_LADIES-SHORT_FASHION-BUG-SRI-LANKA.jpg', 30),
('Moose Womens Printed Chino Short', 'Comfortable and trendy printed chino shorts for women.', 1000.00, 'https://fbpros3v1.s3.ap-southeast-1.amazonaws.com/wp-content/uploads/2022/05/0304400199AQA_Ladies_Short_Fashion-Bug-Sri-Lanka.jpg', 30);
