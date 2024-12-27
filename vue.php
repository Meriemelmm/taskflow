<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mes Tâches</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <header>
            <h1>Mes Tâches</h1>
        </header>
        
        <section class="tasks">
            <table>
                <thead>
                    <tr>
                        <th>Titre</th>
                        <th>Statut</th>
                        <th>Date limite</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Tâche 1 - Correction du bug</td>
                        <td>En cours</td>
                        <td>2024-12-30</td>
                        <td>
                            <a href="task-detail.html" class="btn">Voir</a>
                            <a href="edit-task.html" class="btn">Modifier</a>
                        </td>
                    </tr>
                    <tr>
                        <td>Tâche 2 - Ajouter une fonctionnalité</td>
                        <td>À faire</td>
                        <td>2024-12-25</td>
                        <td>
                            <a href="task-detail.html" class="btn">Voir</a>
                            <a href="edit-task.html" class="btn">Modifier</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </section>
    </div>
</body>
</html>
