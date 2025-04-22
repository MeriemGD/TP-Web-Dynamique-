<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>TP Formulaire php</title>
<style>
 body {
  margin: 0;
  min-height: 100vh;
  background: linear-gradient(135deg, #2e2e2e, #1c1c1c);
  font-family: sans-serif;
  color: #f0f0f0; 
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 15px;
}

form {
  width: 100%;
  max-width: 600px;
}

h1 {
  text-align: center;
  margin-bottom: 30px;
  font-weight: 700;
  font-size: 2.5rem;
  letter-spacing: 1.2px;
  color: #f0f0f0;
  background-color: #5a8fa8; 
  padding: 15px 25px;
  border-radius: 12px;
  box-shadow: 0 4px 10px rgba(90, 143, 168, 0.7);
  display: inline-block;
  max-width: 90%;
  margin-left: auto;
  margin-right: auto;
}

label {
  display: block;
  margin-bottom: 6px;
  font-weight: 600;
  color: #dcdcdc; 
}

input[type="text"],
input[type="date"],
textarea,
select {
  width: 100%;
  padding: 12px 14px;
  margin-bottom: 20px;
  border: 1.5px solid #888; 
  border-radius: 8px;
  background-color: rgba(255, 255, 255, 0.15); 
  color: #f9f9f9; 
  font-size: 1rem;
  transition: border-color 0.3s ease, background-color 0.3s ease;
}

input::placeholder,
textarea::placeholder,
select::placeholder {
  color: #ccc;
  opacity: 1;
}

input[type="text"]:focus,
input[type="date"]:focus,
textarea:focus,
select:focus {
  border-color: #bbb; 
  background-color: rgba(255, 255, 255, 0.25);
  outline: none;
}

textarea {
  height: 120px;
  resize: vertical;
}

.boutons {
  display: flex;
  justify-content: flex-end;
  gap: 15px;
}

input[type="submit"][name="submit"] {
  background: linear-gradient(145deg, #4facfe, #00f2fe);
  color: #fff;
  border: none;
  padding: 14px 30px;
  font-weight: 700;
  border-radius: 10px;
  cursor: pointer;
}

input[type="submit"][name="submit"]:hover {
  background: linear-gradient(145deg, #00f2fe, #4facfe);
}

input[type="submit"][name="cancel"] {
  background: linear-gradient(145deg, #ff758c, #ff7eb3);
  color: #fff;
  border: none;
  padding: 14px 30px;
  font-weight: 700;
  border-radius: 10px;
  cursor: pointer;
}

input[type="submit"][name="cancel"]:hover {
  background: linear-gradient(145deg, #ff7eb3, #ff758c);
}

@media (max-width: 480px) {
  .boutons {
    flex-direction: column;
    gap: 12px;
  }
  input[type="submit"] {
    width: 100%;
  }
}

select {
    color: #f0f0f0;
    background-color: rgba(255, 255, 255, 0.15); 
    border: 1.5px solid #888;
    border-radius: 8px;
    padding: 12px 14px;
    font-size: 1rem;
    box-shadow: inset 0 1px 3px #00000060;
}

select option {
    background-color: #2e2e2e; 
    color: #f0f0f0; 
}

.carte {
    background: rgba(255, 255, 255, 0.1);
    border-radius: 10px;
    padding: 20px;
    margin-top: 30px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    max-width: 600px;
    margin-left: auto;
    margin-right: auto;
}

.carte h2 {
    text-align: center;
    color: #a89ec9;
    margin-bottom: 20px;
}

.carte p {
    margin-bottom: 10px;
    line-height: 1.6;
}

.carte strong {
    color: #ddd;
}
</style>
</head>
<body>

  <form method="POST" action="reponse.php" novalidate>
    <h1>TP Formulaire avec du php</h1>

    <label for="nom">Nom :</label>
    <input type="text" id="nom" name="nom" required>

    <label for="prenom">Prénom :</label>
    <input type="text" id="prenom" name="prenom" required>

    <label for="groupe_num">Numéro du groupe :</label>
    <input type="text" id="groupe_num" name="groupe_num" required>

    <label for="sujet">Sujet :</label>
    <input type="text" id="sujet" name="sujet" required>

    <label for="description_sujet">Description du sujet :</label>
    <textarea id="description_sujet" name="description_sujet" required></textarea>

    <label for="date_debut">Date de début :</label>
    <input type="date" id="date_debut" name="date_debut" required>

    <label for="date_fin">Date de fin :</label>
    <input type="date" id="date_fin" name="date_fin" required>

    <label for="encadrant">Encadrant :</label>
    <select id="encadrant" name="encadrant" required>
      <option value="">-- Choisissez un encadrant --</option>
      <option>Professeur 1</option>
      <option>Professeur 2</option>
      <option>Professeur 3</option>
      <option>Professeur 4</option>
    </select>

    <div class="boutons">
      <input type="submit" name="submit" value="Envoyer">
      <input type="submit" name="cancel" value="Annuler">
    </div>
  </form>

</body>
</html>