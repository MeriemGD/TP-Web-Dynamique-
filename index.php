<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Mes TPs PHP</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            margin: 0;
            padding: 0;
            background: linear-gradient(to right, #f7fafc, #dbefff);
            color: #333;
        }
        h1 {
            text-align: center;
            padding: 30px 0 10px;
            color: #1e88e5;
        }
        h2 {
            text-align: center;
            color: #333;
            margin-top: 40px;
        }
        .section {
            max-width: 900px;
            margin: auto;
            padding: 20px;
        }
        .tp-buttons {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
            margin-top: 20px;
        }
        .tp-buttons a {
            background: #ffffff;
            color: #1e88e5;
            border: 2px solid #1e88e5;
            padding: 15px 25px;
            border-radius: 10px;
            text-decoration: none;
            font-size: 16px;
            font-weight: 500;
            width: 220px;
            text-align: center;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
            transition: all 0.3s ease;
        }
        .tp-buttons a:hover {
            background: #1e88e5;
            color: white;
        }
    </style>
</head>
<body>
    <h1>🎓 Mes Travaux Pratiques PHP</h1>

    <div class="section">
        <h2>📘 TP 8</h2>
        <div class="tp-buttons">
            <a href="tp8/calculatrice.php">🧮 Calculatrice</a>
            <a href="tp8/generateur.php">🔐 Générateur de mot de passe</a>
            <a href="tp8/contact.php">📨 Formulaire de contact</a>
            <a href="tp8/login.php">🔑 Connexion (sans BDD)</a>
            <a href="tp8/livreor.php">📖 Livre d’or</a>
            <a href="tp8/quiz.php">📝 Quiz</a>
        </div>

        <h2>📗 TP 10</h2>
        <div class="tp-buttons">
            <a href="tp10/session/login.php">🔐 Connexion avec sessions</a>
            <a href="tp10/crud/index.php">📁 CRUD avec base</a>
            <a href="tp10/combat/index.php">⚔️ Jeu de combat</a>
        </div>
    </div>
</body>
</html>
