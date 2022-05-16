<?php
//dump($viewData);
?>

<div>
    <h1 class="text-center text-color-card_home">Details de <?= $curentPokemon->getName()?></h1>
</div>
<div class="row m-1">
    <?php foreach ($viewData['pokemonData'] as $valueDetailPokemon): ?>
    <?php if ($curentPokemon->getNumber() == $valueDetailPokemon->getNumber()) : ?>
    <div class="col-xl-5 col-lg-5 col-md-6">
        <img src="assets/img/<?= $valueDetailPokemon->getNumber() ?>.png" alt="image pokemon" class="mx-auto d-block">
    </div>
    <!-- right-side -->
    <div class="col-xl-7 col-lg-7 col-md-6 mb-4 bg-color-card_home shadow-sm bord-arrondi_card">
        <h3 class="text-color-card_home mt-3 mb-3">#<?= $valueDetailPokemon->getNumber() ?>
            <?= $valueDetailPokemon->getName()?></h3>
        <?php
        $donnees = $valueDetailPokemon->getConcat();
        $array_donnees = explode(',', $donnees);
        ?>
        <div class="types">
            <h3 class="text-color-card_home mt-3 mb-3">Types <?= $array_donnees[0] ?> <?= $array_donnees[1] ?></h3>

            <h4 class="text-color-card_home mt-3 mb-3">Statistiques</h4>

            <div class="stat">
                <div class="label text-color-card_home">PV</div>
                <div class="value text-color-card_home"><?= $valueDetailPokemon->getHp() ?></div>
                <div class="stat_container">
                    <div class="bar_value" style="width:<?= ($valueDetailPokemon->getHp() * 100) / 255 ?>%"></div>
                </div>
            </div>
            <div class="stat">
                <div class="label text-color-card_home">Attaque</div>
                <div class="value text-color-card_home"><?= $valueDetailPokemon->getAttack() ?></div>
                <div class="stat_container">
                    <div class="bar_value" style="width:<?= ($valueDetailPokemon->getAttack() * 100) / 255 ?>%"></div>
                </div>
            </div>
            <div class="stat">
                <div class="label text-color-card_home">Defence</div>
                <div class="value text-color-card_home"><?= $valueDetailPokemon->getDefense() ?></div>
                <div class="stat_container">
                    <div class="bar_value" style="width:<?= ($valueDetailPokemon->getDefense() * 100) / 255 ?>%"></div>
                </div>
            </div>
            <div class="stat">
                <div class="label text-color-card_home">Attaque spéciale</div>
                <div class="value text-color-card_home"><?= $valueDetailPokemon->getSpe_attack() ?></div>
                <div class="stat_container">
                    <div class="bar_value" style="width:<?= ($valueDetailPokemon->getSpe_attack() * 100) / 255 ?>%">
                    </div>
                </div>
            </div>
            <div class="stat">
                <div class="label text-color-card_home">Défense spéciale</div>
                <div class="value text-color-card_home"><?= $valueDetailPokemon->getSpe_defense() ?></div>
                <div class="stat_container">
                    <div class="bar_value" style="width:<?= ($valueDetailPokemon->getSpe_defense() * 100) / 255 ?>%">
                    </div>
                </div>
            </div>
            <div class="stat">
                <div class="label text-color-card_home">Vitesse</div>
                <div class="value text-color-card_home"><?= $valueDetailPokemon->getSpeed() ?></div>
                <div class="stat_container">
                    <div class="bar_value" style="width:<?= ($valueDetailPokemon->getSpeed() * 100) / 255 ?>%"></div>
                </div>
            </div>

        </div>
        <!-- right-side -->
    </div>
    <?php endif ; ?>
    <?php endforeach; ?>