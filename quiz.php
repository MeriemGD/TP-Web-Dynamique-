<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>📝 Quiz</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background: linear-gradient(to right, #fdfbfb, #e3f2fd);
            margin: 0;
            padding: 50px;
            color: #333;
        }

        .container {
            max-width: 700px;
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

        form {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .question {
            background: #f3f6f9;
            padding: 15px;
            border-radius: 10px;
        }

        label {
            display: block;
            margin-top: 8px;
        }

        button {
            width: 200px;
            align-self: center;
            padding: 12px;
            background-color: #1e88e5;
            color: white;
            border: none;
            border-radius: 8px;
            font-weight: bold;
            cursor: pointer;
            margin-top: 20px;
        }

        .result {
            margin-top: 30px;
            background: #e8f5e9;
            padding: 15px;
            border-radius: 10px;
            text-align: center;
            color: #2e7d32;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>📝 Mini-Quiz PHP</h2>
        <form method="post">
            <div class="question">
                <p>1. Quelle balise sert à ouvrir un bloc PHP ?</p>
                <label><input type="radio" name="q1" value="a"> &lt;script&gt;</label>
                <label><input type="radio" name="q1" value="b"> &lt;php&gt;</label>
                <label><input type="radio" name="q1" value="c"> &lt;?php</label>
            </div>
            <div class="question">
                <p>2. Quelle variable contient les données envoyées en POST ?</p>
                <label><input type="radio" name="q2" value="a"> $_GET</label>
                <label><input type="radio" name="q2" value="b"> $_POST</label>
                <label><input type="radio" name="q2" value="c"> $_SESSION</label>
            </div>
            <button type="submit" name="valider">Valider</button>
        </form>

        <?php
        if (isset($_POST['valider'])) {
            $score = 0;
            if (!empty($_POST['q1']) && $_POST['q1'] == 'c') $score++;
            if (!empty($_POST['q2']) && $_POST['q2'] == 'b') $score++;

            echo "<div class='result'>Score : $score / 2</div>";
        }
        ?>
    </div>
</body>
</html>