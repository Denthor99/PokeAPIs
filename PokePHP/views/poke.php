<div class="container mt-5">
    <?php if (isset($pokemonData['error'])): ?>
        <div class="alert alert-danger text-center">
            <h4><?= $pokemonData['error'] ?></h4>
            <a href="index.php" class="btn btn-secondary mt-3">Volver</a>
        </div>
    <?php else: ?>
        <div class="card mx-auto shadow-lg text-center" style="max-width: 400px;">
            <div class="card-body">
                <h2 class="card-title text-primary"><?= ucfirst($pokemonData['name']) ?></h2>
                <img src="<?= $pokemonData['sprite'] ?>" alt="<?= $pokemonData['name'] ?>" class="img-fluid mb-3" style="width: 150px;">
                
                <p class="mb-1"><strong>Altura:</strong> <?= $pokemonData['height'] ?> dm</p>
                <p><strong>Peso:</strong> <?= $pokemonData['weight'] ?> hg</p>
                
                <h5 class="mt-3">Habilidades:</h5>
                <ul class="list-group">
                    <?php foreach ($pokemonData['abilities'] as $ability): ?>
                        <li class="list-group-item"><?= ucfirst($ability) ?></li>
                    <?php endforeach; ?>
                </ul>

                <a href="index.php" class="btn btn-secondary mt-3">Volver</a>
            </div>
        </div>
    <?php endif; ?>
</div>
