<?php
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $max_price = $_GET['max_price'];
    $max_duration = $_GET['max_duration'];
    $min_rating = $_GET['min_rating'];
    $is_eco_friendly = $_GET['is_eco_friendly'];

    $sql = "SELECT rides.*, users.pseudo, users.photo, users.rating 
            FROM rides 
            JOIN users ON rides.driver_id = users.id 
            WHERE price <= :max_price 
            AND TIMESTAMPDIFF(HOUR, departure_date, arrival_date) <= :max_duration 
            AND users.rating >= :min_rating 
            AND is_eco_friendly = :is_eco_friendly 
            AND available_seats > 0";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':max_price', $max_price);
    $stmt->bindParam(':max_duration', $max_duration);
    $stmt->bindParam(':min_rating', $min_rating);
    $stmt->bindParam(':is_eco_friendly', $is_eco_friendly);
    $stmt->execute();

    $rides = $stmt->fetchAll(PDO::FETCH_ASSOC);

    if (count($rides) > 0) {
        echo json_encode($rides);
    } else {
        echo "No rides found with these filters.";
    }
}
?>
