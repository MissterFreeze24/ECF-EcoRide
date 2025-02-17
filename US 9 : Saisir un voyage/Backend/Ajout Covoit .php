<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $driver_id = $_POST['driver_id'];
    $departure_address = $_POST['departure_address'];
    $arrival_address = $_POST['arrival_address'];
    $departure_date = $_POST['departure_date'];
    $arrival_date = $_POST['arrival_date'];
    $price = $_POST['price'];
    $available_seats = $_POST['available_seats'];
    $is_eco_friendly = $_POST['is_eco_friendly'];
    $vehicle_model = $_POST['vehicle_model'];
    $vehicle_energy = $_POST['vehicle_energy'];

    $sql = "INSERT INTO rides (driver_id, departure_address, arrival_address, departure_date, arrival_date, price, available_seats, is_eco_friendly, vehicle_model, vehicle_energy) 
            VALUES (:driver_id, :departure_address, :arrival_address, :departure_date, :arrival_date, :price, :available_seats, :is_eco_friendly, :vehicle_model, :vehicle_energy)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':driver_id', $driver_id);
    $stmt->bindParam(':departure_address', $departure_address);
    $stmt->bindParam(':arrival_address', $arrival_address);
    $stmt->bindParam(':departure_date', $departure_date);
    $stmt->bindParam(':arrival_date', $arrival_date);
    $stmt->bindParam(':price', $price);
    $stmt->bindParam(':available_seats', $available_seats);
    $stmt->bindParam(':is_eco_friendly', $is_eco_friendly);
    $stmt->bindParam(':vehicle_model', $vehicle_model);
    $stmt->bindParam(':vehicle_energy', $vehicle_energy);

    if ($stmt->execute()) {
        echo "Ride added successfully!";
    } else {
        echo "Error adding ride.";
    }
}
?>
