<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>📨 Formulaire de contact</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background: linear-gradient(to right, #fdfcff, #e6f0ff);
            margin: 0;
            padding: 50px;
            color: #333;
        }

        .container {
            max-width: 600px;
            margin: auto;
            background: white;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            color: #1e88e5;
            margin-bottom: 20px;
        }

        label {
            font-weight: bold;
            margin-top: 10px;
            display: block;
        }

        input, textarea, button {
            width: 100%;
            padding: 12px;
            margin-top: 8px;
            border-radius: 8px;
            border: 1px solid #ccc;
            font-size: 15px;
        }

        button {
            background-color: #1e88e5;
            color: white;
            border: none;
            cursor: pointer;
            font-weight: bold;
            margin-top: 15px;
            transition: 0.3s ease;
        }

        button:hover {
            background-color: #1565c0;
        }

        .confirmation {
            margin-top: 20px;
            background: #e8f5e9;
            padding: 15px;
            border-radius: 10px;
            color: #2e7d32;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>📨 Contactez-nous</h2>
        <form method="post">
            <label for="nom">Nom :</label>
            <input type="text" id="nom" name="nom" required>

            <label for="email">Email :</label>
            <input type="email" id="email" name="email" required>

            <label for="message">Message :</label>
            <textarea id="message" name="message" rows="5" required></textarea>

            <button type="submit" name="envoyer">Envoyer</button>
        </form>

        <?php
if (isset($_POST['envoyer'])) {
    $nom = htmlspecialchars($_POST['nom']);
    $email = htmlspecialchars($_POST['email']);
    $message = nl2br(htmlspecialchars($_POST['message']));

    echo "<div class='confirmation'>";
    echo "Merci <strong>$nom</strong>, nous avons bien reçu votre message !<br><br>";
    echo "<strong>Email :</strong> $email<br>";
    echo "<strong>Message :</strong><br>$message";
    echo "</div>";
}
?>
    </div>
</body>
</html>
