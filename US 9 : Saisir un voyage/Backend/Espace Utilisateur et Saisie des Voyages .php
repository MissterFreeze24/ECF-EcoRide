<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $depart = $_POST['depart'];
    $arrivee = $_POST['arrivee'];
    $prix = $_POST['prix'];
    $vehicule_id = $_POST['vehicule_id'];

    $query = $pdo->prepare("INSERT INTO itineraires (ville_depart, ville_arrivee, prix, vehicule_id) VALUES (?, ?, ?, ?)");
    $query->execute([$depart, $arrivee, $prix, $vehicule_id]);

    echo "Voyage ajouté avec succès !";
}
?>
<form method="POST">
    <input type="text" name="depart" placeholder="Ville de départ" required>
    <input type="text" name="arrivee" placeholder="Ville d'arrivée" required>
    <input type="number" name="prix" placeholder="Prix" required>
    <select name="vehicule_id">
        <!-- Options dynamiques depuis la base -->
    </select>
    <button type="submit">Ajouter</button>
</form>

