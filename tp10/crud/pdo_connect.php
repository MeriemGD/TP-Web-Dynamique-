<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$local = in_array($_SERVER['REMOTE_ADDR'], ['127.0.0.1', '::1']);

try {
    if ($local) {
        // En local (Laragon)
        $pdo = new PDO("mysql:host=localhost;dbname=tp10;charset=utf8", "root", "");
    } else {
        // En ligne (InfinityFree)
        $pdo = new PDO(
            "mysql:host=sql308.infinityfree.com;dbname=if0_39054632_tpsphp;charset=utf8",
            "if0_39054632",
            "j327t8wfnXsG" 
        );
    }
} catch (PDOException $e) {
    die("Erreur de connexion à la base de données : " . $e->getMessage());
}