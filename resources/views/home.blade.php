<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mes Tâches - Job Dispatcher</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <div class="div-login">
    <header class="main-header">
        <h1 class="logo-title">Job dispatcher</h1>
        <div class="profile-circle"></div>
    </header>

    <div class="p-10">
        <div class="flex justify-between items-center mb-12" style="position: relative;">
            <h2 class="text-6xl font-bold w-full text-center">Vos Tâches</h2>
            <a href="#" class="btn-add" style="position: absolute; right: 0;">Ajouter une Tâche</a>
        </div>

        <div class="flex justify-around mb-16 text-2xl">
            <div class="flex items-center gap-4">
                Terminé : <span class="status-circle bg-green"></span>
            </div>
            <div class="flex items-center gap-4">
                En cours : <span class="status-circle bg-orange"></span>
            </div>
            <div class="flex items-center gap-4">
                En attente : <span class="status-circle bg-red"></span>
            </div>
        </div>

        <div class="max-w-7xl mx-auto">
            
            <div class="task-card">
                <div class="task-info">
                    <span>Tâche: 1</span>
                    <span>Fichier : fichier_a_imprimer</span>
                </div>
                <div class="flex items-center gap-6">
                    Status : <span class="status-circle bg-green"></span>
                </div>
            </div>

            <div class="task-card">
                <div class="task-info">
                    <span>Tâche: 1</span>
                    <span>Fichier : fichier_a_imprimer</span>
                </div>
                <div class="flex items-center gap-6">
                    Status : <span class="status-circle bg-orange"></span>
                </div>
            </div>

            <div class="task-card">
                <div class="task-info">
                    <span>Tâche: 1</span>
                    <span>Fichier : fichier_a_imprimer</span>
                </div>
                <div class="flex items-center gap-6">
                    Status : <span class="status-circle bg-red"></span>
                </div>
            </div>

        </div>
    </div>
</div>
</body>
</html>
