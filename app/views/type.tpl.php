<?php
//dump($viewData);
?>

<div class="row">
    <!-- Gallery item -->
    <?php foreach ($pokemonType as $valueType) : ?>
    <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
        <div class="bg-light shadow-sm bord-arrondi_card">
            <div class="p-4 bord-arrondi_card" style="background-color: #<?= $valueType->getColor()?>">
                <h3><a class="nav-link text-center text-color-card_home"
                        href="<?= $router->generate('typelisting', ['id' => ($valueType->getId())]) ?>"><?= $valueType->getName() ?></a>
                </h3>
            </div>
        </div>
    </div>
    <?php endforeach; ?>
    <!-- End -->