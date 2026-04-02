<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<div class="div-login">
    <x-header/>
    <div class="flex flex-1 items-center justify-center p-10">
        <div class="w-full max-w-5xl">
            <div class="drop-zone shadow-lg">    
                Glisser-déposer votre fichier à imprimer
                 <input type="file" id="inputfile" name="inputfile"><br>
            </div>
            <div class="mb-12"> 
            <form method="POST">
                @csrf
                <div class="flex justify-around mb-16">
                    <div class="flex items-center gap-6 text-3xl">
                        <label>Couleur + matériau:</label>
                        <select class="select-custom">
                            <option value="blanc">Blanc , PLA</option>
                            <option value="blanc">Blanc , PETG</option>
                            <option value="blanc">Noire , ABS </option>
                            <option value="blanc">Noire , Nylon</option>
                        </select>
                    </div>
                </div>
                <div class="flex justify-center gap-10">
                    <a href="{{ route('home') }}" class="btn-login">Annuler</a>
                    <button type="submit" class="btn-login">Envoyer</button>
                </div>
            </form>
        </div>
    </div>
</div>
</html>