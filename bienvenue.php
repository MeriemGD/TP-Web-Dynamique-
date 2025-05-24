<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Bienvenue</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background: linear-gradient(to right, #e3f2fd, #fff);
            padding: 50px;
            text-align: center;
        }

        .box {
            background: white;
            padding: 30px;
            margin: auto;
            max-width: 500px;
            border-radius: 15px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        }

        h1 {
            color: #1e88e5;
        }

        a {
            display: inline-block;
            margin-top: 20px;
            background: #1e88e5;
            color: white;
            padding: 10px 20px;
            border-radius: 8px;
            text-decoration: none;
        }

        a:hover {
            background-color: #1565c0;
        }
    </style>
</head>
<body>
    <div class="box">
        <h1>👋 Bienvenue <?= $_SESSION['user'] ?> !</h1>
        <p>Vous êtes connecté avec succès.</p>
        <a href="logout.php">Se déconnecter</a>
    </div>
</body>
</html>