<?php
$title = "Page de la glace";
$parfums = [
    'Fraise' => 4,
    'Chocolat' => 5,
    'Vanille' => 3
];
$cornets = [
    'Pot' => 2,
    'Cornet' => 3
];
$supplements = [
    'Pépites de chocolats' => 1,
    'Chantilly' => 0.5
];
$ingredients = [];
$total = 0;
foreach (['parfum', 'supplement', 'cornet'] as $name) {
    if (isset($_GET[$name])) {
        $liste = $name . 's';
        $choix = ($_GET[$name]);
        if (is_array($choix)) {
            foreach ($choix as $value) {
                if (isset($$liste[$value])) {
                    $ingredients[] = $value;
                    $total += $$liste[$value];
                }
            }
        } else {
            if (isset($$liste[$choix])) {
                $ingredients[] = $choix;
                $total += $$liste[$choix];
            }
        }
    }
}

require 'elements/header.php';
require 'functions.php';
?>

<div class="container my-5">

    <h1>Composer votre glace</h1>
    <div class="row">
        <div class="col-md-4">
            <div class="card mt-3">
                <div class="card-body">
                    <h5 class="card-title">
                        Votre glace :
                    </h5>
                    <ul>
                        <?php foreach ($ingredients as $ingredient) : ?>
                            <li><?= $ingredient ?></li>
                        <?php endforeach; ?>
                    </ul>
                    <p>
                        <strong>Prix : </strong> <?= $total ?> €
                    </p>
                </div>

            </div>
        </div>
        <div class="col-md-8">
            <form action="/glace.php" method="GET">
                <div class="form-group mb-3 mt-3">
                    <h3 class="mt-3">Choisissez vos parfums</h3>
                    <?php foreach ($parfums as $parfum => $prix) : ?>
                        <div class="checkbox">
                            <label>
                                <?= checkbox('parfum', $parfum, $_GET) ?>
                                <?= $parfum ?> - <?= $prix ?> €
                            </label>
                        </div>
                    <?php endforeach; ?>
                    <h3 class="mt-3">Choisissez votre cornet</h3>
                    <?php foreach ($cornets as $cornet => $prix) : ?>
                        <div class="checkbox">
                            <label>
                                <?= radio('cornet', $cornet, $_GET) ?>
                                <?= $cornet ?> - <?= $prix ?> €
                            </label>
                        </div>
                    <?php endforeach; ?>
                    <h3 class="mt-3">Choisissez vos suppléments</h3>
                    <?php foreach ($supplements as $supplement => $prix) : ?>
                        <div class="checkbox">
                            <label>
                                <?= checkbox('supplement', $supplement, $_GET) ?>
                                <?= $supplement ?> - <?= $prix ?> €
                            </label>
                        </div>
                    <?php endforeach; ?>
                </div>
                <button type="submit" class="btn btn-primary">Composer ma glace</button>
            </form>
        </div>

    </div>

</div>