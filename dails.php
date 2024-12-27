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

header h1 {
    text-align: center;
    font-size: 2em;
    margin-bottom: 20px;
}

/* Section de détails de la tâche */
.task-details h2 {
    color: #4CAF50;
    font-size: 1.8em;
    margin-bottom: 10px;
}

.task-description {
    font-size: 1.1em;
    margin-bottom: 20px;
}

.task-info p {
    font-size: 1em;
    margin: 10px 0;
}

.assigned-user p {
    font-size: 1.1em;
    margin: 10px 0;
}

.task-actions {
    margin-top: 30px;
}

.task-actions .btn {
    background-color: #4CAF50;
    color: #fff;
    border: none;
    padding: 10px 20px;
    margin-right: 10px;
    font-size: 1em;
    border-radius: 5px;
    cursor: pointer;
}

.task-actions .btn:hover {
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
            <h2>Tâche: Correction de Bug dans le système</h2>
            <p class="task-description">
                <strong>Description:</strong> Cette tâche consiste à corriger un bug qui empêche l'envoi de notifications
                aux utilisateurs. Le problème a été identifié dans la version précédente de l'application et doit être
                résolu avant la prochaine mise à jour.
            </p>

            <div class="task-info">
                <p><strong>Statut:</strong> En cours</p>
                <p><strong>Date de création:</strong> 2024-12-20</p>
                <p><strong>Date limite:</strong> 2024-12-30</p>
                <p><strong>Type de tâche:</strong> Bug</p>
            </div>

            <div class="assigned-user">
                <p><strong>Assignée à:</strong> Jean Dupont</p>
            </div>

            <div class="task-actions">
                <button class="btn">Marquer comme Terminée</button>
                <button class="btn">Changer le Statut</button>
            </div>
        </section>
        
        <footer>
            <p>&copy; 2024 TaskFlow. Tous droits réservés.</p>
        </footer>
    </div>
</body>
</html>
