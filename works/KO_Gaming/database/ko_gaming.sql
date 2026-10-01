-- K.O GAMING DATABASE
-- Import this file in phpMyAdmin after creating/selecting database: ko_gaming

CREATE DATABASE IF NOT EXISTS ko_gaming CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE ko_gaming;

DROP TABLE IF EXISTS subscribers;
DROP TABLE IF EXISTS news;
DROP TABLE IF EXISTS games;

CREATE TABLE games (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(100) NOT NULL,
    genre VARCHAR(80) NOT NULL,
    status VARCHAR(40) NOT NULL DEFAULT 'COMING SOON',
    symbol VARCHAR(20) NOT NULL DEFAULT 'K.O',
    accent VARCHAR(30) NOT NULL DEFAULT '#d8ff32',
    featured TINYINT(1) NOT NULL DEFAULT 1,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO games (title, genre, status, symbol, accent, featured) VALUES
('K.O.//ZERO', 'Competitive Action', 'IN DEVELOPMENT', 'KO', '#d8ff32', 1),
('NIGHT//SHIFT', 'Cyber Arena', 'COMING SOON', 'NS', '#ff2e78', 1),
('AFTER//RISE', 'Open World', 'CONCEPT', 'AR', '#32e6ff', 1);

CREATE TABLE news (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(180) NOT NULL,
    category VARCHAR(60) NOT NULL,
    excerpt TEXT NOT NULL,
    published_at DATE NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO news (title, category, excerpt, published_at) VALUES
('K.O. Studio enters a new era', 'STUDIO', 'A new chapter begins as we expand our creative universe and build experiences for players everywhere.', '2026-09-28'),
('Inside the K.O. creative engine', 'BEHIND THE SCENES', 'Meet the ideas, technology and people shaping the next generation of K.O. experiences.', '2026-09-18'),
('The network is going live', 'COMMUNITY', 'Players, creators and competitors are invited into the K.O. network. More drops are coming soon.', '2026-09-05');

CREATE TABLE subscribers (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(190) NOT NULL UNIQUE,
    subscribed_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Optional demo subscriber:
-- INSERT INTO subscribers (email) VALUES ('you@example.com');
