<?php
session_start();
if (!isset($_SESSION['login'])) {
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
            background: #e3f2fd;
            padding: 60px;
            text-align: center;
        }

        .box {
            background: white;
            padding: 30px;
            margin: auto;
            max-width: 500px;
            border-radius: 15px;
            box-shadow: 0 0 20px rgba(0,0,0,0.1);
        }

        h1 {
            color: #1e88e5;
        }

        a {
            display: inline-block;
            margin-top: 25px;
            padding: 12px 25px;
            background: #e53935;
            color: white;
            border-radius: 8px;
            text-decoration: none;
            font-weight: bold;
        }

        a:hover {
            background: #c62828;
        }
    </style>
</head>
<body>
    <div class="box">
        <h1>👋 Bienvenue, <?= $_SESSION['login'] ?> !</h1>
        <p>Vous avez réussi à vous connecter.</p>
        <a href="logout.php">Se déconnecter</a>
    </div>
</body>
</html>