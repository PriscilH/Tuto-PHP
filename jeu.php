<?php
$title = "Page du jeu";
$aDeviner = 140;
$erreur = null;
$succes = null;
$value = null;

//  Vérifier si la variable $_GET['chiffre'] est définie avant de l'utiliser
if (isset($_POST['chiffre'])) {
    $value = (int)$_POST['chiffre'];
    if ($value > $aDeviner) {
        $erreur = "Votre chiffre est trop grand";
    } elseif ($value < $aDeviner) {
        $erreur = "Votre chiffre est trop petit";
    } else {
        $succes = "Bravo ! Vous avez deviné le chiffre <strong>$aDeviner</strong>";
    }
}

require 'elements/header.php';
?>

<div class="container my-5">
    <?php if ($erreur) : ?>
        <div class="alert alert-danger">
            <?= $erreur ?>
        </div>
    <?php elseif ($succes) : ?>
        <div class="alert alert-success">
            <?= $succes ?>
        </div>
    <?php endif ?>

    <form action="/jeu.php" method="GET">
        <div class="form-group">
        <input type="number" class="form-control mb-3
        " name="chiffre" placeholder="entre 0 et 1000" value="<?= $value ?>">
        </div>
        <button type="submit" class="btn btn-primary">Deviner</button>
    </form>
</div>