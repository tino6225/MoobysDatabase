DROP TABLE IF EXISTS `mby_sales`;
DROP TABLE IF EXISTS `mby_schedule`;
DROP TABLE IF EXISTS `mby_employee`;
DROP TABLE IF EXISTS `mby_position`;
DROP TABLE IF EXISTS `mby_menu_items`;
DROP TABLE IF EXISTS `mby_restaurant`;

CREATE TABLE `mby_restaurant` (
    id smallint(5) unsigned NOT NULL AUTO_INCREMENT,
    address varchar(100) NOT NULL,
    city varchar(50) NOT NULL,
    state varchar(2) NOT NULL,
    zip varchar(5) NOT NULL,
    PRIMARY KEY (id)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

CREATE TABLE mby_position (
    id SMALLINT UNSIGNED NOT NULL AUTO_INCREMENT,
    title VARCHAR(100) NOT NULL,
    PRIMARY KEY (id)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE mby_employee (
    id SMALLINT UNSIGNED NOT NULL AUTO_INCREMENT,
    restaurant_id SMALLINT UNSIGNED,
    position_id SMALLINT UNSIGNED,
    fname VARCHAR(50),
    lname VARCHAR(50),
    hourly_rate DECIMAL(4,2),
    phone VARCHAR(10),
    PRIMARY KEY (id),
    KEY idx_fk_mby_employee_restaurant_id (restaurant_id),
    KEY idx_fk_mby_employee_position_id (position_id),
    CONSTRAINT fk_mby_employee_restaurant_id FOREIGN KEY (restaurant_id) REFERENCES mby_restaurant (id) ON DELETE RESTRICT ON UPDATE CASCADE,
    CONSTRAINT fk_mby_employee_position_id FOREIGN KEY (position_id) REFERENCES mby_position (id) ON DELETE RESTRICT ON UPDATE CASCADE
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE mby_schedule (
    id SMALLINT UNSIGNED NOT NULL AUTO_INCREMENT,
    employee_id SMALLINT UNSIGNED,
    date DATE,
    start_time TIME,
    end_time TIME,
    PRIMARY KEY (id),
    KEY idx_fk_mby_schedule_employee_id (employee_id),
    CONSTRAINT fk_mby_schedule_employee_id FOREIGN KEY (employee_id) REFERENCES mby_employee (id) ON DELETE RESTRICT ON UPDATE CASCADE
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE mby_menu_items (
    id SMALLINT UNSIGNED NOT NULL AUTO_INCREMENT,
    name VARCHAR(100) NOT NULL,
    price DECIMAL(3,2) NOT NULL,
    description TEXT,
    PRIMARY KEY (id)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE mby_sales (
    id SMALLINT UNSIGNED NOT NULL AUTO_INCREMENT,
    restaurant_id SMALLINT UNSIGNED NOT NULL,
    employee_id SMALLINT UNSIGNED NOT NULL,
    item_id SMALLINT UNSIGNED NOT NULL,
    item_quantity INT UNSIGNED NOT NULL,
    date DATE,
    PRIMARY KEY (id),
    KEY idx_fk_mby_sales_restaurant_id (restaurant_id),
    KEY idx_fk_mby_sales_employee_id (employee_id),
    KEY idx_fk_mby_sales_item_id (item_id),
    CONSTRAINT fk_mby_sales_restaurant_id FOREIGN KEY (restaurant_id) REFERENCES mby_restaurant (id) ON DELETE RESTRICT ON UPDATE CASCADE,
    CONSTRAINT fk_mby_sales_employee_id FOREIGN KEY (employee_id) REFERENCES mby_employee (id) ON DELETE RESTRICT ON UPDATE CASCADE,
    CONSTRAINT fk_mby_sales_item_id FOREIGN KEY (item_id) REFERENCES mby_menu_items (id) ON DELETE RESTRICT ON UPDATE CASCADE
)ENGINE=InnoDB DEFAULT CHARSET=utf8;
