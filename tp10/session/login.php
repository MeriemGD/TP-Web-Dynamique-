<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Connexion</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background: linear-gradient(to right, #f0f8ff, #e1f5fe);
            padding: 60px;
        }

        .container {
            max-width: 400px;
            margin: auto;
            background: white;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            color: #1e88e5;
        }

        input {
            width: 100%;
            padding: 12px;
            margin-top: 15px;
            border-radius: 8px;
            border: 1px solid #ccc;
        }

        button {
            width: 100%;
            background: #1e88e5;
            color: white;
            border: none;
            border-radius: 8px;
            padding: 12px;
            margin-top: 20px;
            cursor: pointer;
            font-weight: bold;
        }

        button:hover {
            background-color: #1565c0;
        }

        .error {
            color: red;
            text-align: center;
            margin-top: 10px;
        }
    </style>
</head>
<body>
<div class="container">
    <h2>🔐 Connexion sécurisée</h2>
    <form method="post" action="validation.php">
        <input type="text" name="login" placeholder="Identifiant" required>
        <input type="password" name="pass" placeholder="Mot de passe" required>
        <button type="submit" name="submit">Se connecter</button>
    </form>

    <?php if (isset($_GET['erreur'])): ?>
        <p class="error">❌ Identifiants incorrects</p>
    <?php endif; ?>
</div>
</body>
</html>