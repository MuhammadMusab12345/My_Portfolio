-- ========================================================
-- Muhammad Musab - Full-Stack Portfolio Database Schema
-- Database: musab_portfolio
-- ========================================================

CREATE DATABASE IF NOT EXISTS `musab_portfolio` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE `musab_portfolio`;

-- --------------------------------------------------------
-- Table structure for table `projects`
-- --------------------------------------------------------
CREATE TABLE IF NOT EXISTS `projects` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `title` VARCHAR(255) NOT NULL,
  `slug` VARCHAR(255) NOT NULL UNIQUE,
  `description` TEXT NOT NULL,
  `image_path` VARCHAR(255) NOT NULL,
  `live_url` VARCHAR(500) NOT NULL,
  `category` ENUM('normal', '3d') NOT NULL DEFAULT 'normal',
  `category_label` VARCHAR(50) NOT NULL DEFAULT 'Website',
  `tags` VARCHAR(255) DEFAULT NULL,
  `is_featured` TINYINT(1) DEFAULT 1,
  `sort_order` INT DEFAULT 0,
  `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------
-- Table structure for table `testimonials`
-- --------------------------------------------------------
CREATE TABLE IF NOT EXISTS `testimonials` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `client_name` VARCHAR(150) NOT NULL,
  `client_role` VARCHAR(150) NOT NULL,
  `company_name` VARCHAR(150) DEFAULT NULL,
  `feedback_text` TEXT NOT NULL,
  `rating` DECIMAL(2,1) NOT NULL DEFAULT 5.0,
  `avatar_initials` VARCHAR(5) DEFAULT NULL,
  `avatar_bg` VARCHAR(20) DEFAULT '#415A77',
  `avatar_path` VARCHAR(255) DEFAULT NULL,
  `project_name` VARCHAR(150) DEFAULT NULL,
  `sort_order` INT DEFAULT 0,
  `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------
-- Table structure for table `contact_messages`
-- --------------------------------------------------------
CREATE TABLE IF NOT EXISTS `contact_messages` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `name` VARCHAR(150) NOT NULL,
  `email` VARCHAR(150) NOT NULL,
  `subject` VARCHAR(255) NOT NULL,
  `message` TEXT NOT NULL,
  `ip_address` VARCHAR(45) DEFAULT NULL,
  `is_read` TINYINT(1) DEFAULT 0,
  `submitted_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------
-- Table structure for table `pricing_packages`
-- --------------------------------------------------------
CREATE TABLE IF NOT EXISTS `pricing_packages` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `name` VARCHAR(100) NOT NULL,
  `price` DECIMAL(10,2) NOT NULL,
  `currency` VARCHAR(10) NOT NULL DEFAULT '$',
  `tagline` VARCHAR(255) DEFAULT NULL,
  `badge` VARCHAR(100) DEFAULT NULL,
  `is_popular` TINYINT(1) DEFAULT 0,
  `features_json` TEXT NOT NULL,
  `sort_order` INT DEFAULT 0,
  `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------
-- Seed Initial Data
-- --------------------------------------------------------

-- Projects
INSERT INTO `projects` (`id`, `title`, `slug`, `description`, `image_path`, `live_url`, `category`, `category_label`, `tags`, `is_featured`, `sort_order`) VALUES
(1, 'Shale Pizzas', 'shale-pizzas', 'A bold, modern pizza restaurant website with fiery orange accents, interactive menus, and seamless ordering.', 'assets/images/My Websites (4).png', 'https://laiba-iqbal.github.io/shale-pizza/', 'normal', 'Website', 'HTML5, CSS3, JavaScript, UI/UX', 1, 1),
(2, 'FurEver Care', 'furever-care', 'A friendly pet-care and veterinary services website with cheerful visuals, service booking, and pet wellness info.', 'assets/images/My Websites (5).png', 'https://abdul-rafay-art.github.io/furever-care/', 'normal', 'Website', 'Responsive Design, Front-End, CSS Grid', 1, 2),
(3, 'School''s Info', 'schools-info', 'A clean, professional school information and student admissions portal with structured academic pathways.', 'assets/images/My Websites (6).png', 'https://muhammadmusab12345.github.io/School-Informations/', 'normal', 'Website', 'Full-Stack, JavaScript, PHP, MySQL', 1, 3),
(4, 'SDI Presence', 'sdi-presence', 'A corporate IT & technology services platform featuring an isometric 3D city landscape and enterprise solutions.', 'assets/images/My Websites (2).png', 'https://www.sdipresence.com/', '3d', '3D Website', '3D Web, Corporate IT, JavaScript, WebGL', 1, 4),
(5, 'Ducati — Superleggera V4', 'ducati-superleggera', 'A high-end luxury motorcycle showcase website featuring cinematic product visuals and high-performance specs.', 'assets/images/My Websites (1).png', 'https://superleggerav4centenario.ducati.com/en/ww', '3d', '3D Website', 'Luxury Showcase, 3D Experience, High Performance', 1, 5),
(6, 'Emons Logistics', 'emons-logistics', 'A global logistics & freight-forwarding company website with an isometric 3D interactive warehouse ecosystem.', 'assets/images/My Websites (3).png', 'https://www.emons.de/en', '3d', '3D Website', '3D Logistics, Interactive Web, Enterprise Tech', 1, 6)
ON DUPLICATE KEY UPDATE `title`=VALUES(`title`);

-- Pricing Packages
INSERT INTO `pricing_packages` (`id`, `name`, `price`, `currency`, `tagline`, `badge`, `is_popular`, `features_json`, `sort_order`) VALUES
(1, 'Basic', 8.00, '$', 'Essential web presence for individuals & simple projects', NULL, 0, '["Proper front-end (basic)", "Basic back-end functionality", "Beautiful, clean look", "Full source code provided", "GitHub repository hosting included", "Responsive layout (Mobile & Desktop)", "Cross-browser compatibility"]', 1),
(2, 'Standard', 14.00, '$', 'High-impact solution tailored for growing businesses', 'Most Popular', 1, '["Premium, eye-catching web look", "Premium front-end development", "Premium back-end integration", "Full source code + GitHub repo link", "Domain + Hosting included", "High-speed loading & optimization", "Interactive micro-animations", "SEO-ready code structure"]', 2),
(3, 'Premium', 20.00, '$', 'All-inclusive enterprise package with VIP ongoing updates', 'Ultimate Value', 0, '["Everything included in Standard package", "Domain + Hosting included", "5 months of free changes/updates included", "Advanced database & custom backend", "Full UI/UX custom interactive elements", "Chatbot & contact integration", "Priority 24/7 technical support"]', 3)
ON DUPLICATE KEY UPDATE `name`=VALUES(`name`);
