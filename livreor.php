<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>📖 Livre d'or</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background: linear-gradient(to right, #fffafc, #e0f7fa);
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
            box-shadow: 0 0 15px rgba(0,0,0,0.1);
        }

        h2 {
            text-align: center;
            color: #1e88e5;
        }

        textarea, input, button {
            width: 100%;
            padding: 12px;
            margin-top: 10px;
            border-radius: 8px;
            border: 1px solid #ccc;
            font-size: 16px;
        }

        button {
            background-color: #1e88e5;
            color: white;
            font-weight: bold;
            border: none;
            cursor: pointer;
            margin-top: 10px;
        }

        button:hover {
            background-color: #1565c0;
        }

        .messages {
            margin-top: 30px;
            background: #f1f8e9;
            padding: 15px;
            border-radius: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>📖 Livre d'or</h2>
        <form method="post">
            <input type="text" name="nom" placeholder="Votre nom" required>
            <textarea name="message" placeholder="Votre message..." rows="4" required></textarea>
            <button type="submit" name="envoyer">Envoyer</button>
        </form>

        <div class="messages">
            <h3>📬 Messages précédents :</h3>
            <?php
            $fichier = "livre.txt";

            if (isset($_POST['envoyer'])) {
                $nom = htmlspecialchars($_POST['nom']);
                $msg = nl2br(htmlspecialchars($_POST['message']));
                $ligne = "<p><strong>$nom :</strong><br>$msg</p>\n";
                file_put_contents($fichier, $ligne, FILE_APPEND);
            }

            if (file_exists($fichier)) {
                echo file_get_contents($fichier);
            } else {
                echo "<p>Aucun message pour le moment.</p>";
            }
            ?>
        </div>
    </div>
</body>
</html>