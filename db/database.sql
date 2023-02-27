CREATE TABLE users (
    id INT AUTO_INCREMENT,
    name VARCHAR(255),
    email VARCHAR(255),
    address VARCHAR(255),
    hashpass VARCHAR(255),

    PRIMARY KEY (id)
);

CREATE TABLE category(
    id INT AUTO_INCREMENT,
    name VARCHAR(255),

    PRIMARY KEY (id)
);

CREATE TABLE products(
    id INT AUTO_INCREMENT,
    name VARCHAR(255),
    weight VARCHAR(255),
    price FLOAT,
    IdCategory INT,

    PRIMARY KEY (id),
    FOREIGN KEY (IdCategory) REFERENCES category(id)
);
