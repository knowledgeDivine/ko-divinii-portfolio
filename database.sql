CREATE DATABASE IF NOT EXISTS ko_divinii_cv CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE ko_divinii_cv;

CREATE TABLE IF NOT EXISTS profile (
 id INT AUTO_INCREMENT PRIMARY KEY,
 name VARCHAR(120) NOT NULL,
 tagline VARCHAR(255),
 bio TEXT,
 email VARCHAR(150),
 phone VARCHAR(50),
 location VARCHAR(120)
);

CREATE TABLE IF NOT EXISTS projects (
 id INT AUTO_INCREMENT PRIMARY KEY,
 title VARCHAR(150) NOT NULL,
 category VARCHAR(80),
 description TEXT,
 image VARCHAR(255),
 link VARCHAR(255),
 featured TINYINT(1) DEFAULT 0,
 created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE IF NOT EXISTS skills (
 id INT AUTO_INCREMENT PRIMARY KEY,
 name VARCHAR(100) NOT NULL,
 level INT DEFAULT 80,
 sort_order INT DEFAULT 0
);

CREATE TABLE IF NOT EXISTS experience (
 id INT AUTO_INCREMENT PRIMARY KEY,
 role VARCHAR(150) NOT NULL,
 company VARCHAR(150),
 start_year VARCHAR(20),
 end_year VARCHAR(20),
 description TEXT
);

INSERT INTO profile (name,tagline,bio,email,phone,location) VALUES
('K.O DIVINII','Creative professional building bold digital experiences, brands and ideas.','Welcome to my personal portfolio. Replace this paragraph with your real professional summary, achievements and career story.','your@email.com','+234 000 000 0000','Lagos, Nigeria');

INSERT INTO skills (name,level,sort_order) VALUES
('Creative Direction',95,1),('Web Design & Development',90,2),('Brand Strategy',88,3),('UI / UX',85,4),('Project Management',82,5);

INSERT INTO experience (role,company,start_year,end_year,description) VALUES
('Your Professional Role','Your Company','2025','PRESENT','Replace this with your responsibilities, achievements and measurable results.'),
('Previous Role','Previous Company','2023','2025','Add another experience entry here with a concise description.');

INSERT INTO projects (title,category,description,image,link,featured) VALUES
('BYI Cars','AUTOMOTIVE','Premium automotive website and digital showroom.','assets/images/project-placeholder.svg','works/BYI_Cars/index.php',1),
('K.O Gaming','GAMING','Gaming brand website with an immersive digital experience.','assets/images/project-placeholder.svg','works/KO_Gaming/index.php',1),
('MIMI Homes','REAL ESTATE','Real-estate website with property browsing and contact flows.','assets/images/project-placeholder.svg','works/MIMI_Homes/index.php',1),
('Not An Ordinary Mind','FASHION / BRAND','Creative shoe and brand launch website.','assets/images/project-placeholder.svg','works/Not_An_Ordinary_Mind/index.php',1),
('K.O DIVINII VIP Golf Club','LIFESTYLE / GOLF','Premium golf club experience with bookings and membership pages.','assets/images/project-placeholder.svg','works/KO_DIVINII_VIP_Golf_Club/index.php',1);
