CREATE TABLE rides (
    id INT AUTO_INCREMENT PRIMARY KEY,
    driver_id INT NOT NULL,
    departure_address VARCHAR(255) NOT NULL,
    arrival_address VARCHAR(255) NOT NULL,
    departure_date DATETIME NOT NULL,
    arrival_date DATETIME NOT NULL,
    price DECIMAL(10, 2) NOT NULL,
    available_seats INT NOT NULL,
    is_eco_friendly BOOLEAN DEFAULT FALSE,
    vehicle_model VARCHAR(100),
    vehicle_energy ENUM('electric', 'gasoline', 'diesel'),
    FOREIGN KEY (driver_id) REFERENCES users(id)
);
