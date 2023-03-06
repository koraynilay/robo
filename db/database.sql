-- CREATE TABLE users (
-- 	id INT,
-- 	name VARCHAR(255),
-- 	email VARCHAR(255),
-- 	address VARCHAR(255),
-- 	hashpass VARCHAR(255),
-- 	
-- 	PRIMARY KEY (id)
-- );
-- 
-- CREATE TABLE category(
--     id INT, 
--     name VARCHAR(255),
-- 
--     PRIMARY KEY (id)
-- );
-- 
-- CREATE TABLE products(
-- 	id INT,
-- 	name VARCHAR(255),
-- 	weight INT,
-- 	price FLOAT,
-- 	IdCategory INT,
-- 	
-- 	PRIMARY KEY (id),
-- 	FOREIGN KEY (IdCategory) REFERENCES category(id)
-- );

-- INSERT INTO `users` (`id`, `name`, `email`, `address`) VALUES

INSERT INTO `category` (`id`, `name`) VALUES
	(1, 'industriali'),
	(2, 'giardinaggio'),
	(3, 'pulizia'),
	(4, 'svago'),
	(5, 'fotografia'),
	(6, 'sicurezza')
;

INSERT INTO `products` (`id`, `name`, `weight`, `price`, `IdCategory`) VALUES
	(1, 'Taidda 6DOF', 910, 119.52, 1),
	(2, 'Adeept 5 Assi Braccio Robotico', 745, 65.99, 1),
	(3, 'SUNFOUNDER Kit', 470, 69.99, 1),
	
	(4, 'Yard Force SA900ECO', 1300, 484.59, 2),
	(5, 'Landroid M700', 8800, 869.00, 2),
	(6, 'SILENO city', 14500, 1099.99, 2),
	
	(8, 'ECOVACS DEBOOT X1 OMNI', 1890, 1299.00, 3),
	(7, 'Dreame L10s', 3700, 1190.90, 3),
	(9, 'ECOVACS DEEBOT N8+', 1200, 495.00, 3),
	
	(10, 'Innjoo Robert Robot', 680, 89.99, 4),
	(11, 'Anki 000-00067', 150, 699.99, 4),
	(12, 'Emiglio', 2890, 65.59, 4),
	
	(13, 'DJI Mini 3 Pro con DJI Smart Control', 249, 1009, 5),
	(14, 'Holy Stone HS175D', 250, 229.99, 5),
	(15, 'Potensic Dreamer Pro GPS', 200, 469.99, 5),
	
	(16, 'Moorebot Scout', 350, 219.00, 6),
	(17, 'SHENGANG Robot', 10, 217.67, 6),
	(18, 'Truwelby Enabot Ebo SE', 280, 119.00, 6);
;
