<?php
if (isset($_POST['nom'])) {
    $conn = new PDO("mysql:host=sql308.infinityfree.com;dbname=if0_39054632_XXX;charset=utf8", "if0_39054632", "j327t8wfnXsG");
    $stmt = $conn->prepare("INSERT INTO guerriers (nom, degats) VALUES (?, 0)");
    $stmt->execute([$_POST['nom']]);
    header("Location: index.php");
}
?>

<form method="post">
    <input name="nom" placeholder="Nom du guerrier">
    <button type="submit">Créer</button>
</form>