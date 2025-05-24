<?php
require_once("pdo_connect.php");
$id = $_GET['id'];
$exo = $pdo->query("SELECT * FROM exercices WHERE id=$id")->fetch();

if (isset($_POST['modifier'])) {
    $titre = $_POST['titre'];
    $desc = $_POST['description'];
    $niveau = $_POST['niveau'];

    $stmt = $pdo->prepare("UPDATE exercices SET titre=?, description=?, niveau=? WHERE id=?");
    $stmt->execute([$titre, $desc, $niveau, $id]);

    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>✏️ Modifier l'exercice</title>
    <style>
        body { font-family: sans-serif; background: #f9fbe7; padding: 40px; }
        .form-box {
            background: white; padding: 30px; border-radius: 12px;
            max-width: 600px; margin: auto; box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        h2 { text-align: center; color: #43a047; }
        input, textarea, select, button {
            width: 100%; padding: 12px; margin: 10px 0;
            border-radius: 8px; border: 1px solid #ccc;
        }
        button {
            background: #43a047; color: white; font-weight: bold; cursor: pointer;
        }
        button:hover { background: #2e7d32; }
    </style>
</head>
<body>
<div class="form-box">
    <h2>✏️ Modifier un exercice</h2>
    <form method="post">
        <input type="text" name="titre" value="<?= htmlspecialchars($exo['titre']) ?>" required>
        <textarea name="description" rows="4" required><?= htmlspecialchars($exo['description']) ?></textarea>
        <select name="niveau" required>
            <option <?= $exo['niveau'] == 'Débutant' ? 'selected' : '' ?>>Débutant</option>
            <option <?= $exo['niveau'] == 'Intermédiaire' ? 'selected' : '' ?>>Intermédiaire</option>
            <option <?= $exo['niveau'] == 'Avancé' ? 'selected' : '' ?>>Avancé</option>
        </select>
        <button type="submit" name="modifier">Modifier</button>
    </form>
</div>
</body>
</html>