<?php
require_once("pdo_connect.php");

if (isset($_POST['ajouter'])) {
    $titre = $_POST['titre'];
    $desc = $_POST['description'];
    $niveau = $_POST['niveau'];

    $stmt = $pdo->prepare("INSERT INTO exercices (titre, description, niveau) VALUES (?, ?, ?)");
    $stmt->execute([$titre, $desc, $niveau]);

    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>➕ Ajouter un exercice</title>
    <style>
        body { font-family: sans-serif; background: #f0f4f8; padding: 40px; }
        .form-box {
            background: white; padding: 30px; border-radius: 12px;
            max-width: 600px; margin: auto; box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        h2 { text-align: center; color: #1e88e5; }
        input, textarea, select, button {
            width: 100%; padding: 12px; margin: 10px 0;
            border-radius: 8px; border: 1px solid #ccc;
        }
        button {
            background: #1e88e5; color: white; font-weight: bold; cursor: pointer;
        }
        button:hover { background: #1565c0; }
    </style>
</head>
<body>
<div class="form-box">
    <h2>➕ Ajouter un exercice</h2>
    <form method="post">
        <input type="text" name="titre" placeholder="Titre de l'exercice" required>
        <textarea name="description" placeholder="Description" rows="4" required></textarea>
        <select name="niveau" required>
            <option value="">-- Choisir un niveau --</option>
            <option>Débutant</option>
            <option>Intermédiaire</option>
            <option>Avancé</option>
        </select>
        <button type="submit" name="ajouter">Ajouter</button>
    </form>
</div>
</body>
</html>