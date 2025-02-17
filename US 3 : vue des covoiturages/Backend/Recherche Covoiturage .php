<?php
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $departure_city = $_GET['departure_city'];
    $arrival_city = $_GET['arrival_city'];
    $date = $_GET['date'];

    $sql = "SELECT rides.*, users.pseudo, users.photo, users.rating 
            FROM rides 
            JOIN users ON rides.driver_id = users.id 
            WHERE departure_address LIKE :departure_city 
            AND arrival_address LIKE :arrival_city 
            AND DATE(departure_date) = :date 
            AND available_seats > 0";
    $stmt = $conn->prepare($sql);
    $stmt->bindValue(':departure_city', "%$departure_city%");
    $stmt->bindValue(':arrival_city', "%$arrival_city%");
    $stmt->bindParam(':date', $date);
    $stmt->execute();

    $rides = $stmt->fetchAll(PDO::FETCH_ASSOC);

    if (count($rides) > 0) {
        echo json_encode($rides);
    } else {
        echo "No rides found.";
    }
}
?>
