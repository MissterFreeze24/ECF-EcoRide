<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $ride_id = $_POST['ride_id'];
    $passenger_id = $_POST['passenger_id'];
    $rating = $_POST['rating'];
    $comment = $_POST['comment'];

    $sql = "INSERT INTO reviews (ride_id, passenger_id, rating, comment) 
            VALUES (:ride_id, :passenger_id, :rating, :comment)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':ride_id', $ride_id);
    $stmt->bindParam(':passenger_id', $passenger_id);
    $stmt->bindParam(':rating', $rating);
    $stmt->bindParam(':comment', $comment);

    if ($stmt->execute()) {
        echo "Review submitted successfully!";
    } else {
        echo "Error submitting review.";
    }
}
?>
