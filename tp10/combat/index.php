<?php
session_start();

if (!isset($_SESSION['vie_joueur'])) {
    $_SESSION['vie_joueur'] = 100;
    $_SESSION['vie_monstre'] = 100;
    $_SESSION['log'] = [];
}

if (isset($_POST['attaque'])) {
    $degats_joueur = rand(5, 15);
    $degats_monstre = rand(10, 20);

    $_SESSION['vie_monstre'] -= $degats_joueur;
    $_SESSION['vie_joueur'] -= $degats_monstre;

    $_SESSION['log'][] = "👊 Vous infligez $degats_joueur dégâts au monstre.";
    $_SESSION['log'][] = "💥 Le monstre vous inflige $degats_monstre dégâts.";

    if ($_SESSION['vie_joueur'] <= 0 || $_SESSION['vie_monstre'] <= 0) {
        $_SESSION['log'][] = ($_SESSION['vie_joueur'] <= 0) ? "❌ Vous avez perdu !" : "🏆 Vous avez gagné !";
    }
}

if (isset($_POST['reset'])) {
    session_destroy();
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>⚔️ Combat</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background: radial-gradient(circle at top, #fce4ec, #e3f2fd);
            padding: 50px;
            color: #333;
        }

        .container {
            max-width: 600px;
            margin: auto;
            background: white;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 0 20px rgba(0,0,0,0.1);
        }

        h2 {
            text-align: center;
            color: #d81b60;
        }

        .stats {
            display: flex;
            justify-content: space-between;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .log {
            background: #f3f3f3;
            padding: 15px;
            border-radius: 10px;
            max-height: 200px;
            overflow-y: auto;
        }

        button {
            padding: 12px 20px;
            background-color: #d81b60;
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            cursor: pointer;
            margin: 10px 5px;
        }

        button:hover {
            background-color: #ad1457;
        }

        form {
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>⚔️ Jeu de Combat</h2>
        <div class="stats">
            <div>👨 Joueur : <?= max(0, $_SESSION['vie_joueur']) ?> HP</div>
            <div>👹 Monstre : <?= max(0, $_SESSION['vie_monstre']) ?> HP</div>
        </div>

        <form method="post">
            <?php if ($_SESSION['vie_joueur'] > 0 && $_SESSION['vie_monstre'] > 0): ?>
                <button type="submit" name="attaque">Attaquer</button>
            <?php endif; ?>
            <button type="submit" name="reset">Réinitialiser</button>
        </form>

        <div class="log">
            <?php foreach (array_reverse($_SESSION['log']) as $ligne): ?>
                <p><?= $ligne ?></p>
            <?php endforeach; ?>
        </div>
    </div>
</body>
</html>