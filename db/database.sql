CREATE TABLE users (
    id INT,
    name VARCHAR(255),
    email VARCHAR(255),
    address VARCHAR(255),
    hashpass VARCHAR(255),

    PRIMARY KEY (id)
);

INSERT INTO `users` (`id`, `name`, `email`, `address`) VALUES

CREATE TABLE products(
    id INT,
    name VARCHAR(255),
    weight VARCHAR(255),
    price FLOAT,
    IdCategory INT,

    PRIMARY KEY (id),
    FOREIGN KEY (IdCategory) REFERENCES category(id)
);

INSERT INTO `products` (`id`, `name`, `weight`, `price`, `IdCategory`) VALUES
    (1, '')


CREATE TABLE category(
    id INT, 
    name VARCHAR(255),

    PRIMARY KEY (id)
)
INSERT INTO `category` (`id`, `name`) VALUES
(1, 'industriali'),
(2, 'giardinaggio'),
(3, 'pulizia'),
(4, 'svago'),
(5, 'fotografia'),
(6, 'sicurezza');
