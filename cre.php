<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Créer une Tâche</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <header>
            <h1>Créer une Nouvelle Tâche</h1>
        </header>
        
        <section class="form-container">
            <form action="#" method="POST">
                <label for="title">Titre de la Tâche :</label>
                <input type="text" id="title" name="title" required>
                
                <label for="description">Description :</label>
                <textarea id="description" name="description" required></textarea>
                
                <label for="due_date">Date Limite :</label>
                <input type="date" id="due_date" name="due_date" required>
                
                <label for="assigned_to">Assignée à :</label>
                <select id="assigned_to" name="assigned_to">
                    <option value="user1">Jean Dupont</option>
                    <option value="user2">Marie Dubois</option>
                </select>
                
                <button type="submit" class="btn">Créer la Tâche</button>
            </form>
        </section>
    </div>
</body>
</html>
