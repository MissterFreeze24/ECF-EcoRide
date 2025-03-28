<?php
// Démarrage de la session
session_start();

// Connexion à la base de données MySQL
$host = 'db'; // Nom du service dans docker-compose
$dbname = 'ecoride';
$user = 'root';
$password = 'password';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erreur de connexion à la base de données: " . $e->getMessage());
}

// Classe PHP pour gérer les covoiturages
class Covoiturage {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function getCovoiturages() {
        $stmt = $this->pdo->query("SELECT * FROM covoiturages");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function addCovoiturage($depart, $arrivee, $date) {
        $stmt = $this->pdo->prepare("INSERT INTO covoiturages (depart, arrivee, date) VALUES (:depart, :arrivee, :date)");
        $stmt->execute(['depart' => $depart, 'arrivee' => $arrivee, 'date' => $date]);
    }
}

$covoiturage = new Covoiturage($pdo);

// Traitement du formulaire
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $depart = $_POST['depart'];
    $arrivee = $_POST['arrivee'];
    $date = $_POST['date'];
    $covoiturage->addCovoiturage($depart, $arrivee, $date);
}

$covoiturages = $covoiturage->getCovoiturages();
?>
