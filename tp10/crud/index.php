<?php
require_once("pdo_connect.php");
$exercices = $pdo->query("SELECT * FROM exercices")->fetchAll();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>📂 Liste des Exercices</title>
    <style>
        body { font-family: sans-serif; background: #f1f8e9; padding: 30px; }
        .container { background: white; padding: 25px; border-radius: 10px; max-width: 800px; margin: auto; }
        h2 { color: #43a047; text-align: center; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th, td { border: 1px solid #ccc; padding: 10px; text-align: center; }
        th { background: #e8f5e9; }
        a.btn { padding: 6px 12px; border-radius: 5px; text-decoration: none; color: white; }
        .edit { background: #43a047; }
        .delete { background: #e53935; }
        .add { background: #1e88e5; margin-bottom: 10px; display: inline-block; }
    </style>
</head>
<body>
<div class="container">
    <h2>📂 Liste des Exercices</h2>
    <a class="btn add" href="add.php">➕ Ajouter</a>
    <table>
        <tr><th>ID</th><th>Titre</th><th>Description</th><th>Niveau</th><th>Actions</th></tr>
        <?php foreach ($exercices as $exo): ?>
        <tr>
            <td><?= $exo['id'] ?></td>
            <td><?= htmlspecialchars($exo['titre']) ?></td>
            <td><?= htmlspecialchars($exo['description']) ?></td>
            <td><?= $exo['niveau'] ?></td>
            <td>
                <a class="btn edit" href="edit.php?id=<?= $exo['id'] ?>">Modifier</a>
                <a class="btn delete" href="delete.php?id=<?= $exo['id'] ?>" onclick="return confirm('Confirmer la suppression ?')">Supprimer</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</div>
</body>