CREATE TABLE product_type (
    id INT(5) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    id_product VARCHAR(50) NOT NULL,
    name_product VARCHAR(50) NOT NULL,
    quantity_product VARCHAR(50) NOT NULL,
    price_product DECIMAL(10,2) NOT NULL
    
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

