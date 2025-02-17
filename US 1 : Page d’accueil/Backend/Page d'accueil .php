<?php
// Connexion à la base de données
$pdo = new PDO("mysql:host=localhost;dbname=ecoride", "root", "");

// Récupération des itinéraires
if (isset($_GET['search'])) {
    $depart = $_GET['depart'];
    $arrivee = $_GET['arrivee'];
    $query = $pdo->prepare("SELECT * FROM itineraires WHERE ville_depart = ? AND ville_arrivee = ?");
    $query->execute([$depart, $arrivee]);
    $resultats = $query->fetchAll();
}
?>
