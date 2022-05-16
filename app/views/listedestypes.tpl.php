<?php
//dump($viewData);
//dump($pokemonTypeById->getId());
?>

<div>
    <h1 class="text-center text-color-card_home">Les Pokemons de type <?= $pokemonTypeById->getName()?></h1>
</div>

<div class="row">
    <!-- Gallery item -->
    <?php foreach ($viewData['pokemonByType'] as $valuePokemonType) : ?>
    <?php if ($pokemonTypeById->getId() == $valuePokemonType->getType_id()): ?>
    <div class="col-xl-3 col-lg-4 col-md-6 mb-4 ">
        <div class="bg-color-card_home  shadow-sm bord-arrondi_card">
            <img src="assets/img/<?= $valuePokemonType->getNumber() ?>.png" alt="image pokemon" class="img-fluid p-3">
            <div class="p-4 text-center">
                <a class="nav-link text-color-card_home"
                    href="<?= $router->generate('detail', ['id' => ($valuePokemonType->getNumber())]) ?>">
                    <h3>#<?= $valuePokemonType->getNumber() ?>
                        <?= $valuePokemonType->getName() ?></h3>
                </a>
            </div>
        </div>
    </div>
    <?php endif ; endforeach; ?>
    <!-- End -->