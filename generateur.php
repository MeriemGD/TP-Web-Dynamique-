<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>🔐 Générateur de mot de passe</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background: linear-gradient(to right, #fdfbfb, #ebedee);
            margin: 0;
            padding: 50px;
            color: #333;
        }

        .container {
            max-width: 500px;
            margin: auto;
            background: white;
            border-radius: 15px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            padding: 30px;
            text-align: center;
        }

        h2 {
            color: #1e88e5;
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: 500;
        }

        input, button {
            width: 100%;
            padding: 12px;
            margin-top: 10px;
            border: 1px solid #ccc;
            border-radius: 8px;
            font-size: 16px;
        }

        button {
            background-color: #1e88e5;
            color: white;
            border: none;
            cursor: pointer;
            font-weight: bold;
            transition: 0.3s ease;
        }

        button:hover {
            background-color: #1565c0;
        }

        .result {
            margin-top: 20px;
            font-size: 18px;
            background: #e8f5e9;
            padding: 12px;
            border-radius: 10px;
            color: #2e7d32;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>🔐 Générateur de mot de passe</h2>
        <form method="post">
            <label for="longueur">Longueur du mot de passe :</label>
            <input type="number" id="longueur" name="longueur" min="4" max="30" required>
            <button type="submit" name="gen">Générer</button>
        </form>

        <?php
        if (isset($_POST['gen'])) {
            $long = (int) $_POST['longueur'];
            $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#";
            $mot = "";

            for ($i = 0; $i < $long; $i++) {
                $mot .= $chars[rand(0, strlen($chars)-1)];
            }

            echo "<div class='result'>Mot de passe généré : <strong>$mot</strong></div>";
        }
        ?>
    </div>
</body>
</html>