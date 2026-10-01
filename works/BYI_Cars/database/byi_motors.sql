CREATE DATABASE IF NOT EXISTS byi_motors CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE byi_motors;

DROP TABLE IF EXISTS inquiries;
DROP TABLE IF EXISTS cars;

CREATE TABLE cars (
  id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(120) NOT NULL,
  category VARCHAR(60) NOT NULL,
  tagline VARCHAR(180) NOT NULL,
  power_hp INT NOT NULL,
  drive VARCHAR(80) NOT NULL,
  image_url TEXT NOT NULL,
  featured TINYINT(1) DEFAULT 0,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO cars (name,category,tagline,power_hp,drive,image_url,featured) VALUES
('BYI VANTA','GRAND TOURER','Dark elegance. Serious velocity.',610,'AWD • 8-SPEED','https://images.unsplash.com/photo-1614200187524-dc4b892acf16?auto=format&fit=crop&w=1400&q=85',1),
('BYI AERO','SPORT SEDAN','Designed around the perfect line.',520,'RWD • 8-SPEED','https://images.unsplash.com/photo-1555215695-3004980ad54e?auto=format&fit=crop&w=1400&q=85',1),
('BYI NOIR','PERFORMANCE SUV','Command every road.',580,'AWD • 9-SPEED','https://images.unsplash.com/photo-1606664515524-ed2f786a0bd6?auto=format&fit=crop&w=1400&q=85',0);

CREATE TABLE inquiries (
  id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(120) NOT NULL,
  email VARCHAR(190) NOT NULL,
  car VARCHAR(120) DEFAULT NULL,
  message TEXT,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO inquiries (name,email,car,message) VALUES
('Demo Client','demo@example.com','BYI VANTA','Request a private viewing.');
