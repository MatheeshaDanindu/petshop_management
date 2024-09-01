

-- Dumping database structure for petshop_db
CREATE DATABASE IF NOT EXISTS `petshop_db` /*!40100 DEFAULT CHARACTER SET utf8mb4  */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `petshop_db`;

-- Dumping structure for table petshop_db.categories
CREATE TABLE IF NOT EXISTS `categories` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 ;

-- Dumping data for table petshop_db.categories: ~5 rows (approximately)
INSERT INTO `categories` (`id`, `name`) VALUES
	(1, 'Dog'),
	(2, 'Cat'),
	(3, 'Rabbit'),
	(4, 'Fish'),
	(5, 'Birds');

-- Dumping structure for table petshop_db.inventory
CREATE TABLE IF NOT EXISTS `inventory` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `description` text,
  `quantity` int NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `category` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 ;

-- Dumping data for table petshop_db.inventory: ~10 rows (approximately)
INSERT INTO `inventory` (`id`, `name`, `description`, `quantity`, `price`, `category`, `created_at`) VALUES
	(10, 'mine', 'Small to medium-sized dogs known for their keen sense of smell and friendly nature. Beagles are energetic and great with families and children.', 5, 50000.00, 'Dog', '2024-08-26 17:12:34'),
	(11, 'Shih Tzu', 'Small toy dogs with a long, flowing coat and a friendly personality. They are affectionate and good for apartment living.', 1, 20000.00, 'Dog', '2024-08-26 17:13:26'),
	(12, 'Persian', 'Known for their long, luxurious fur and flat faces. Persians are calm, affectionate, and enjoy a quiet environment. They require regular grooming.', 1, 5000.00, 'Cat', '2024-08-26 17:14:15'),
	(13, 'British Shorthair', 'Stocky, round-faced cats with a dense, plush coat. They are calm, easygoing, and make excellent companions for families and individuals alike.\r\n', 6, 30000.00, 'Cat', '2024-08-26 17:14:51'),
	(14, 'Budgerigar', 'Small, colorful parrots known for their playful and social nature. Budgies are easy to care for and can mimic human speech and sounds.', 4, 20000.00, 'Birds', '2024-08-26 17:16:01'),
	(15, 'Cockatiel', 'Medium-sized parrots with a distinctive crest on their head. They are affectionate, enjoy interaction, and can learn to mimic sounds and speech.', 8, 8000.00, 'Birds', '2024-08-26 17:16:47'),
	(16, 'Canary', 'Small, songbirds known for their bright colors and melodious singing. Canaries are low-maintenance and prefer to live in pairs or small groups.', 2, 9000.00, 'Birds', '2024-08-26 17:17:23'),
	(17, 'Goldfish', 'Classic freshwater fish with a variety of colors and fin shapes. Goldfish are relatively easy to care for but require a well-filtered tank due to their waste production.', 70, 800.00, 'Fish', '2024-08-26 17:18:19'),
	(18, 'German Shepherd', 'Well Behaved Dogs with great pedigrees', 6, 30000.00, 'Dog', '2024-08-26 17:43:12'),
	(19, 'Parrot', 'Domestic Bird with great value', 2, 5000.00, 'Birds', '2024-08-26 17:44:24');

-- Dumping structure for table petshop_db.items
CREATE TABLE IF NOT EXISTS `items` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `description` text,
  `quantity` int NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `category_id` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `category_id` (`category_id`),
  CONSTRAINT `items_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ;



-- Dumping structure for table petshop_db.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(50) CHARACTER SET utf8mb4  NOT NULL,
  `password_hash` varchar(255) CHARACTER SET utf8mb4  NOT NULL,
  `email` varchar(100) CHARACTER SET utf8mb4  NOT NULL,
  `phone_number` varchar(20) CHARACTER SET utf8mb4  NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `remember_token` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 ;

-- Dumping data for table petshop_db.users: ~2 rows (approximately)
INSERT INTO `users` (`id`, `username`, `password_hash`, `email`, `phone_number`, `created_at`, `remember_token`) VALUES
	(6, 'admin', '$2y$10$nm1t9mM.XqGFKlgxVBBjHOp2pp8Pi90tUHQTg6e8uy.9i8axGVSH6', 'admin@gmail.com', '1234567890', '2024-08-26 04:18:07', NULL);


