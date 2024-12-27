
<?php


include'class.php';
?>






















<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TaskFlow - Connexion</title>
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
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
  flex-direction: column;
}

/* Formulaire de connexion */
#login {
  background-color: white;
  padding: 2rem;
  border-radius: 8px;
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
  width: 300px;
  text-align: center;
}

#login h2 {
  margin-bottom: 1rem;
}

#login p {
  margin-bottom: 1.5rem;
  font-size: 1.1rem;
}

#login-form {
  display: flex;
  flex-direction: column;
}

#login-form label {
  margin-top: 10px;
  font-weight: bold;
}

#login-form input {
  padding: 10px;
  margin: 5px 0 15px 0;
  border: 1px solid #ccc;
  border-radius: 4px;
}

#login-form button {
  padding: 10px 15px;
  background-color: #4CAF50;
  color: white;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

#login-form button:hover {
  background-color: #45a049;
}
</style>
</head>
<body>

  <!-- Formulaire de connexion -->
  <section id="login">
    <h2>Bienvenue sur TaskFlow</h2>
    <p>Veuillez entrer vos informations pour accéder à la gestion des tâches :</p>
    <form id="login-form" method="POST">

      <label for="user-email">E-mail :</label>
      <input  id="user-email"  name="email"placeholder="Entrez votre email">

   <button name="button"> connecter</button>
    </form>
  </section>

  <script src="app.js"></script>

</body>
</html>
