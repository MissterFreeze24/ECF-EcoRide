-- Création de la table des utilisateurs
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    pseudo VARCHAR(50) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    credits INT DEFAULT 20,
    role ENUM('visitor', 'user', 'employee', 'admin') DEFAULT 'visitor'
);

-- Création de la table des covoiturages
CREATE TABLE rides (
    id INT AUTO_INCREMENT PRIMARY KEY,
    driver_id INT,
    departure VARCHAR(100),
    arrival VARCHAR(100),
    date DATETIME,
    price DECIMAL(10, 2),
    available_seats INT,
    car_model VARCHAR(100),
    car_brand VARCHAR(100),
    energy_type ENUM('electric', 'gasoline', 'diesel') DEFAULT 'gasoline',
    preferences TEXT,
    FOREIGN KEY (driver_id) REFERENCES users(id)
);

-- Création de la table des avis
CREATE TABLE reviews (
    id INT AUTO_INCREMENT PRIMARY KEY,
    ride_id INT,
    reviewer_id INT,
    comment TEXT,
    rating INT CHECK (rating >= 1 AND rating <= 5),
    FOREIGN KEY (ride_id) REFERENCES rides(id),
    FOREIGN KEY (reviewer_id) REFERENCES users(id)
);

