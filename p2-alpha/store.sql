CREATE TABLE IF NOT EXISTS `customer` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` text,
  `password_hash` text,
  PRIMARY KEY (`id`)
);

INSERT INTO customer
	(`username`, `password_hash`)
VALUES
  ('Testbob', '$2y$10$Uc2MGBbfLE12WgRLMLp2iunQoMn1USVmd5rOxkzKyDYtJQWv4W8.a'),
	('Bobalina', '$2y$10$/l9SUQqYDTz0AYY4xLZbGepLbwWbl8tP62pJRQFRbcvlCuJXsTzqa');


CREATE TABLE IF NOT EXISTS `inventory` (
	`id` int NOT NULL AUTO_INCREMENT,
	`product_name` varchar(200),
	`cost` varchar(50),
  `number_in_stock` varchar(50),
	PRIMARY KEY (`id`)
);

INSERT INTO `inventory`
	(`product_name`, `cost`, `number_in_stock`)
VALUES
	('jeff bezos\'s crusty fingernails', '$20', '10'),
  ('biden x trump wattpad fanfic', '$100', '200'),
  ('tesla factory', '$3,999,999,991', '4'),
  ('Pyramids of Giza', '$4,999,999,992', '118'),
  ('Facebook', '$22', '1'),
  ('Crocs', '$22', '100,000'),
  ('The Mona Lisa', '$7', '1')
	;

CREATE TABLE IF NOT EXISTS `previouspurchases` (
	`id` int NOT NULL AUTO_INCREMENT,
	`date_of_purchase` varchar(64),
  `cost_of_purchase` varchar(50),
	PRIMARY KEY (`id`)
);

CREATE TABLE IF NOT EXISTS `cart` (
	`id` int NOT NULL AUTO_INCREMENT,
	`product_name` varchar(200),
	`product_price` varchar(64),
  `user` varchar(64),
	PRIMARY KEY (`id`)
);
