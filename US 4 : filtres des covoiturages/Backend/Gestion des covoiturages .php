<?php
// Filtrer les résultats
if (isset($_GET['filtre'])) {
    $ecologique = $_GET['ecologique'];
    $prix_max = $_GET['prix_max'];
    $duree_max = $_GET['duree_max'];
    $query = $pdo->prepare("
        SELECT * FROM itineraires 
        WHERE (voiture_electrique = ? OR ? = 0)
          AND prix <= ?
          AND duree <= ?
    ");
    $query->execute([$ecologique, $ecologique, $prix_max, $duree_max]);
    $resultats = $query->fetchAll();
}
?>
<form method="GET">
    <label>Voyage écologique :</label>
    <select name="ecologique">
        <option value="0">Tous</option>
        <option value="1">Oui</option>
    </select>
    <label>Prix maximum :</label>
    <input type="number" name="prix_max">
    <label>Durée maximum (en heures) :</label>
    <input type="number" name="duree_max">
    <button type="submit" name="filtre">Filtrer</button>
</form>

