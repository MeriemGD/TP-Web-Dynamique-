<?php
$conn = new PDO("mysql:host=sql308.infinityfree.com;dbname=if0_39054632_XXX;charset=utf8", "if0_39054632", "j327t8wfnXsG");
$nom = $_GET['cible'];
$conn->exec("UPDATE guerriers SET degats = degats + 5 WHERE nom = '$nom'");
$conn->exec("DELETE FROM guerriers WHERE degats >= 100");
header("Location: index.php"); 
?>