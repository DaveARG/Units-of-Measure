
CREATE TABLE IF NOT EXISTS `levels_and_categories` (
  `level_and_category` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  PRIMARY KEY (`level_and_category`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `levels_and_categories` (`level_and_category`, `description`) VALUES
	('1', 'Normative'),
	('1M', 'Commonly Used Multiples'),
	('1S', 'Standard Multiples'),
	('2', 'Normative Equivalent'),
	('2S', 'Normative Equivalent Multiples'),
	('3', 'Informative'),
	('3.1', 'Qualified base units from levels 1 and 2'),
	('3.2', 'Sales units'),
	('3.3', 'Packing units'),
	('3.4', 'Shipping and transportation units'),
	('3.5', 'Industry specific units (various)'),
	('3.6', 'Information technology units'),
	('3.7', 'Integers/Numbers/Ratios'),
	('3.8', 'Multiples/Fractions/Decimals'),
	('3.9', 'Miscellaneous');