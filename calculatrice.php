<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>🧮 Calculatrice</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background: linear-gradient(to right, #f2fbff, #dbeafe);
            margin: 0;
            padding: 40px;
            color: #333;
        }

        .container {
            max-width: 500px;
            margin: auto;
            background: white;
            border-radius: 15px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            padding: 30px;
            text-align: center;
        }

        h2 {
            color: #1e88e5;
            margin-bottom: 20px;
        }

        input, select, button {
            width: 100%;
            padding: 12px;
            margin: 10px 0;
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
            background: #e3f2fd;
            padding: 10px;
            border-radius: 10px;
            color: #0d47a1;
            font-weight: 500;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>🧮 Calculatrice simple</h2>
        <form method="post">
            <input type="number" name="a" placeholder="Nombre 1" required>
            <input type="number" name="b" placeholder="Nombre 2" required>
            <select name="op">
                <option value="add">Addition (+)</option>
                <option value="sub">Soustraction (-)</option>
                <option value="mul">Multiplication (*)</option>
                <option value="div">Division (/)</option>
            </select>
            <button type="submit" name="calc">Calculer</button>
        </form>

        <?php
        if (isset($_POST['calc'])) {
            $a = $_POST['a'];
            $b = $_POST['b'];
            $op = $_POST['op'];
            $res = "";

            if ($op == "add") $res = $a + $b;
            if ($op == "sub") $res = $a - $b;
            if ($op == "mul") $res = $a * $b;
            if ($op == "div") {
                $res = ($b == 0) ? "❌ Erreur : division par zéro" : $a / $b;
            }

            echo "<div class='result'>Résultat : <strong>$res</strong></div>";
        }
        ?>
    </div>
</body>
</html>