CREATE TABLE product_list (
    id INT(10) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    product_code VARCHAR(50) NOT NULL,
    product_name VARCHAR(200) NOT NULL,
    product_desc VARCHAR(100) NOT NULL,
    product_quantity VARCHAR(100) NOT NULL,
    product_price DECIMAL(10,2) NOT NULL,
    recording_date VARCHAR(100) NOT NULL
   
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
