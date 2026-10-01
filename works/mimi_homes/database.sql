CREATE DATABASE IF NOT EXISTS mimi_homes_db CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE mimi_homes_db;

CREATE TABLE IF NOT EXISTS properties (
  id INT AUTO_INCREMENT PRIMARY KEY,
  title VARCHAR(180) NOT NULL,
  type VARCHAR(60) NOT NULL,
  location VARCHAR(180) NOT NULL,
  price VARCHAR(80) NOT NULL,
  headline VARCHAR(255) NOT NULL,
  description TEXT NOT NULL,
  beds INT DEFAULT 0,
  baths INT DEFAULT 0,
  area INT DEFAULT 0,
  image VARCHAR(500) NOT NULL,
  featured TINYINT(1) DEFAULT 0,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE IF NOT EXISTS inquiries (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(120) NOT NULL,
  email VARCHAR(180) NOT NULL,
  phone VARCHAR(60),
  property VARCHAR(180),
  message TEXT NOT NULL,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO properties (title,type,location,price,headline,description,beds,baths,area,image,featured) VALUES
('The Ivory Residence','Villa','Banana Island, Lagos','₦850M','A private residence shaped by light, space and calm.','An expansive contemporary villa designed for effortless entertaining and private family living. Floor-to-ceiling glazing, generous outdoor areas and refined finishes create a residence with a quiet sense of luxury.',5,6,7200,'https://images.unsplash.com/photo-1600607687920-4e2a09cf159d?auto=format&fit=crop&w=1200&q=85',1),
('MIMI Sky House','Apartment','Victoria Island, Lagos','₦420M','Elevated city living with a private horizon.','A sophisticated apartment with panoramic city views, open-plan living and hotel-inspired amenities. Designed for buyers who want convenience without compromising on character.',3,4,3100,'https://images.unsplash.com/photo-1600607688969-a5bfcd646154?auto=format&fit=crop&w=1200&q=85',1),
('Palm Court Residences','Terrace','Ikoyi, Lagos','₦280M','Modern family living in a quiet enclave.','A beautifully planned terrace residence with generous proportions, private parking and a landscaped setting close to the best of Ikoyi.',4,4,2850,'https://images.unsplash.com/photo-1600566753086-00f18fb6b3ea?auto=format&fit=crop&w=1200&q=85',1),
('The Grove Land Collection','Land','Lekki, Lagos','From ₦75M','Prime land for your next legacy project.','A curated collection of serviced plots in a fast-developing residential corridor. Suitable for private homes and carefully planned investment projects.',0,0,5000,'https://images.unsplash.com/photo-1500382017468-9049fed747ef?auto=format&fit=crop&w=1200&q=85',0),
('Sable House','Detached Home','Chevron, Lagos','₦195M','A polished family home with room to grow.','A generous detached home balancing practical family spaces with a refined contemporary aesthetic and secure outdoor living.',4,5,3600,'https://images.unsplash.com/photo-1600585154340-be6161a56a0c?auto=format&fit=crop&w=1200&q=85',0),
('The Regent','Apartment','Ikoyi, Lagos','₦340M','A composed address for modern city life.','Elegant interiors, generous terraces and resident amenities combine in a boutique development for discerning homeowners.',3,3,2450,'https://images.unsplash.com/photo-1600566753190-17f0baa2a6c3?auto=format&fit=crop&w=1200&q=85',0);