<?php
require_once "./controllers/PokeController.php";

$controller = new PokeController();

if (isset($_GET['pokemon'])) {
    $controller->showPokemon($_GET['pokemon']);
} else {
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buscar Pokémon</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5 text-center">
            <h1 class="mb-4 text-primary">Busca un Pokémon</h1>
            <div class="card p-4 shadow-lg mx-auto" style="max-width: 400px;">
                <form method="GET">
                    <div class="mb-3">
                        <input type="text" name="pokemon" class="form-control" placeholder="Ejemplo: pikachu o 34" required>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Buscar</button>
                </form>
            </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
<?php } ?>
