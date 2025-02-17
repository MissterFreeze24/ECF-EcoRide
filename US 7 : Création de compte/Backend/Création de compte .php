<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $pseudo = $_POST['pseudo'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);

    $query = $pdo->prepare("INSERT INTO utilisateurs (pseudo, email, mot_de_passe, credits) VALUES (?, ?, ?, 20)");
    $query->execute([$pseudo, $email, $password]);

    echo "Compte créé avec succès !";
}
?>
<form method="POST">
    <input type="text" name="pseudo" placeholder="Pseudo" required>
    <input type="email" name="email" placeholder="Email" required>
    <input type="password" name="password" placeholder="Mot de passe" required>
    <button type="submit">S'inscrire</button>
</form>

