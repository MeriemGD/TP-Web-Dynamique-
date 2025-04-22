<?php
$hote = "localhost";
$nomBase = "tp1-php";
$utilisateur = "root";
$motDePasse = "";

try {
    $pdo = new PDO("mysql:host=$hote;dbname=$nomBase;charset=utf8", $utilisateur, $motDePasse);
} catch (PDOException $e) {
    die("Erreur de connexion : " . $e->getMessage());
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $groupe_num = $_POST['groupe_num'];
    $sujet = $_POST['sujet'];
    $description_sujet = $_POST['description_sujet'];
    $date_debut = $_POST['date_debut'];
    $date_fin = $_POST['date_fin'];
    $encadrant = $_POST['encadrant'];

    $sql = "INSERT INTO utilisateurs (Nom, Prénom, Groupe_num, Sujet, Description_sujet, Date_début, Date_fin, Encadrant) 
            VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$nom, $prenom, $groupe_num, $sujet, $description_sujet, $date_debut, $date_fin, $encadrant]);

    echo "<body style='background-color:#f0f0f0; font-family: sans-serif;'>"; 
    echo "<div style='max-width: 600px; margin: 20px auto; padding: 20px; background-color: #fff; box-shadow: 0 0 10px rgba(0,0,0,0.1); border-radius: 10px;'>"; 
    echo "<h2 style='text-align:center; color:#333;'>Informations enregistrées :</h2>"; 

    echo "<div class='carte'>";
    echo "<p><strong>Nom :</strong> " . htmlspecialchars($nom) . "</p>";
    echo "<p><strong>Prénom :</strong> " . htmlspecialchars($prenom) . "</p>";
    echo "<p><strong>Numéro du groupe :</strong> " . htmlspecialchars($groupe_num) . "</p>";
    echo "<p><strong>Sujet :</strong> " . htmlspecialchars($sujet) . "</p>";
    echo "<p><strong>Description du sujet :</strong> " . nl2br(htmlspecialchars($description_sujet)) . "</p>";
    echo "<p><strong>Date de début :</strong> " . htmlspecialchars($date_debut) . "</p>";
    echo "<p><strong>Date de fin :</strong> " . htmlspecialchars($date_fin) . "</p>";
    echo "<p><strong>Encadrant :</strong> " . htmlspecialchars($encadrant) . "</p>";
    echo "</div>";

    echo "<div style='text-align:center; margin-top:20px;'>";
    echo "<a href='index.php' style='background-color: #5cb85c; 
    color: #fff;
    border: none;
    padding: 14px 30px;
    font-weight: 700;
    border-radius: 10px;
    cursor: pointer;
    text-decoration:none;'>Retour au formulaire</a>";
    echo "</div>";
    echo "</div>"; 
    echo "</body>"; 
}

if (isset($_POST['cancel'])) {
    echo "<h3 style='color: black; text-align:center; margin-top:20px;'>Formulaire annulé !</h3>";
}
?>