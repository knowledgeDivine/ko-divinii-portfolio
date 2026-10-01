CREATE DATABASE IF NOT EXISTS ko_divinii_golf_club CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE ko_divinii_golf_club;

CREATE TABLE IF NOT EXISTS membership_inquiries (
  id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(120) NOT NULL,
  email VARCHAR(190) NOT NULL,
  phone VARCHAR(40) DEFAULT NULL,
  membership_type VARCHAR(40) NOT NULL,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB;

CREATE TABLE IF NOT EXISTS tee_bookings (
  id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(120) NOT NULL,
  email VARCHAR(190) NOT NULL,
  tee_date DATE NOT NULL,
  tee_time TIME NOT NULL,
  players TINYINT UNSIGNED NOT NULL DEFAULT 2,
  notes TEXT DEFAULT NULL,
  status ENUM('Pending','Confirmed','Cancelled') NOT NULL DEFAULT 'Pending',
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  INDEX idx_booking_date (tee_date, tee_time)
) ENGINE=InnoDB;

CREATE TABLE IF NOT EXISTS events (
  id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  title VARCHAR(160) NOT NULL,
  category VARCHAR(60) NOT NULL,
  description TEXT NOT NULL,
  event_date DATE NOT NULL,
  event_time TIME NOT NULL,
  location VARCHAR(120) NOT NULL,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB;

CREATE TABLE IF NOT EXISTS contact_messages (
  id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(120) NOT NULL,
  email VARCHAR(190) NOT NULL,
  subject VARCHAR(180) DEFAULT NULL,
  message TEXT NOT NULL,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB;

INSERT INTO events (title, category, description, event_date, event_time, location) VALUES
('Divinii Opening Cup', 'TOURNAMENT', 'A members-only stroke-play tournament followed by clubhouse dinner and awards.', DATE_ADD(CURDATE(), INTERVAL 12 DAY), '08:00:00', 'First Tee'),
('Saturday Sunset Social', 'SOCIAL', 'An easygoing evening of putting games, live music and clubhouse dining.', DATE_ADD(CURDATE(), INTERVAL 21 DAY), '17:30:00', 'Clubhouse Lawn'),
('Junior Golf Clinic', 'CLINIC', 'A fundamentals session covering swing basics, short game and golf etiquette.', DATE_ADD(CURDATE(), INTERVAL 30 DAY), '10:00:00', 'Practice Range');
