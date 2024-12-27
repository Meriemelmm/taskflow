<?php


include'class.php';











?>



<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TaskFlow - Application de gestion de tâches</title>
  <link rel="stylesheet" href="styles.css">
  <style>/* Réinitialisation de base */
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

/* Corps de la page */
body {
  font-family: Arial, sans-serif;
  line-height: 1.6;
  background-color: #f4f4f9;
  color: #333;
}

/* En-tête */
header {
  background-color: #4CAF50;
  color: white;
  padding: 1rem;
  text-align: center;
}

header nav ul {
  list-style: none;
  padding: 0;
}

header nav ul li {
  display: inline;
  margin: 0 15px;
}

header nav ul li a {
  color: white;
  text-decoration: none;
}

header nav ul li a:hover {
  text-decoration: underline;
}

/* Section formulaire de création de tâche */
#add-task {
  padding: 2rem;
  background-color: white;
  margin: 1rem;
  border-radius: 8px;
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}

#task-form {
  display: flex;
  flex-direction: column;
}

#task-form label {
  margin-top: 10px;
}

#task-form input, #task-form select {
  padding: 10px;
  margin: 5px 0 15px 0;
  border: 1px solid #ccc;
  border-radius: 4px;
}

#task-form button {
  padding: 10px 15px;
  background-color: #4CAF50;
  color: white;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

#task-form button:hover {
  background-color: #45a049;
}

/* Liste des tâches */
#tasks {
  padding: 2rem;
  background-color: white;
  margin: 1rem;
  border-radius: 8px;
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}






</style>
</head>
<body>




  <!-- Formulaire de création de tâche -->
  <section id="add-task">
    <h2>Créer une Tâche</h2>
    <form id="task-form" method="post">
      <label for="task-name">Nom de la tâche :</label>
      <input type="text" id="task-name"  name="titre">

      <label for="task-type">Type de tâche :</label>
      <select id="task-type" name="type">
        <option value="bug">Bug</option>
        <option value="feature">Feature</option>
        <option value="simple">Simple</option>
      </select>

      <label for="assigned-user">description :</label>
      <input type="text" id="assigned-user"  name="description">

      <label for="task-status">Statut :</label>
      <select id="task-status" name="status">
        <option value="to-do"> to do</option>
        <option value="in-progress">in-progress</option>
        <option value="done">done</option>
      </select>

      <button type="submit" name="submit">Ajouter la tâche</button>
    </form>
  </section>
 


 

  <script src="app.js"></script>
</body>
</html>
