-- Task 1
CREATE DATABASE IF NOT EXISTS exhibition_db;
USE exhibition_db;

-- Task 2
CREATE TABLE cars (
    car_id INT AUTO_INCREMENT PRIMARY KEY,
    make VARCHAR(25) NOT NULL,
    model VARCHAR(25) NOT NULL,
    price DECIMAL(10,2) NOT NULL,
    yom INT NOT NULL
);

-- Task 3
INSERT INTO cars (make, model, price, yom) VALUES
('Holden', 'Astra', 14000, 2009),
('BMW', 'X3', 35000, 2010),
('Ford', 'Falcon', 39000, 2013),
('Toyota', 'Corolla', 20000, 2012),
('Holden', 'Commodore', 28000, 2009);

-- Task 4 (run one at a time)
SELECT * FROM cars;
SELECT make, model, price FROM cars ORDER BY make, model;
SELECT make, model FROM cars WHERE price >= 20000;
SELECT make, AVG(price) FROM cars GROUP BY make;
SELECT make, model FROM cars WHERE price < 15000 AND price > 10000;
