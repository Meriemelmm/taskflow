<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Détails de la Tâche</title>
    <link rel="stylesheet" href="styles.css">
    <style>/* Définir les styles de base */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f9;
    color: #333;
    line-height: 1.6;
    padding: 20px;
}

.container {
    max-width: 900px;
    margin: 0 auto;
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
}

header {
    text-align: center;
    margin-bottom: 30px;
}

h1 {
    font-size: 2em;
}

h2 {
    font-size: 1.6em;
    color: #4CAF50;
    margin-bottom: 15px;
}

/* Table styles */
table {
    width: 100%;
    border-collapse: collapse;
    margin-bottom: 20px;
}

table th, table td {
    border: 1px solid #ddd;
    padding: 10px;
    text-align: left;
}

table th {
    background-color: #4CAF50;
    color: white;
}

table td a {
    background-color: #4CAF50;
    color: white;
    padding: 5px 10px;
    border-radius: 5px;
    text-decoration: none;
}

table td a:hover {
    background-color: #45a049;
}

/* Form styles */
form label {
    display: block;
    margin-bottom: 8px;
    font-weight: bold;
}

form input, form textarea, form select {
    width: 100%;
    padding: 10px;
    margin-bottom: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

form button {
    background-color: #4CAF50;
    color: white;
    border: none;
    padding: 10px 20px;
    border-radius: 5px;
    cursor: pointer;
}

form button:hover {
    background-color: #45a049;
}

/* Buttons */
.btn {
    display: inline-block;
    background-color: #4CAF50;
    color: white;
    padding: 10px 15px;
    border-radius: 5px;
    text-decoration: none;
    text-align: center;
    cursor: pointer;
}

.btn:hover {
    background-color: #45a049;
}

/* Footer */
footer {
    text-align: center;
    margin-top: 40px;
    font-size: 0.9em;
    color: #777;
}
</style>
</head>
<body>
    <div class="container">
        <header>
            <h1>Détails de la Tâche</h1>
        </header>
        
        <section class="task-details">
            <h2>Tâche: Correction du Bug d'Envoi</h2>
            <p><strong>Description:</strong> Corriger le bug d'envoi des notifications aux utilisateurs dans la version précédente.</p>
            <p><strong>Statut:</strong> En cours</p>
            <p><strong>Date Limite:</strong> 2024-12-30</p>
            <p><strong>Assignée à:</strong> Jean Dupont</p>
            
            <div class="task-actions">
                <button class="btn">Marquer comme Terminée</button>
                <button class="btn">Modifier</button>
            </div>
        </section>
    </div>
</body>
</html>
