<?php
//dump($viewData);
?>

<div class="row">
    <!-- Gallery item -->
    <?php foreach ($viewData['pokemonData'] as $valuePokemonData) : ?>
    <div class="col-xl-3 col-lg-4 col-md-6 mb-4 ">
        <div class="bg-color-card_home  shadow-sm bord-arrondi_card">
            <img src="assets/img/<?= $valuePokemonData->getNumber() ?>.png" alt="image pokemon" class="img-fluid p-3">
            <div class="p-4 text-center">
                <a class="nav-link text-color-card_home"
                    href="<?= $router->generate('detail', ['id' => ($valuePokemonData->getNumber())]) ?>">
                    <h3>#<?= $valuePokemonData->getNumber() ?>
                        <?= $valuePokemonData->getName() ?></h3>
                </a>
            </div>
        </div>
    </div>
    <?php endforeach; ?>
    <!-- End -->