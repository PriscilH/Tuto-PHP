<?php
$title = "Page du jeu";
$aDeviner = 140;
$erreur = null;
$succes = null;
$value = null;

//  Vérifier si la variable $_GET['chiffre'] est définie avant de l'utiliser
if (isset($_GET['chiffre'])) {
    if ($_GET['chiffre'] > $aDeviner) {
        $erreur = "Votre chiffre est trop grand";
    } elseif ($_GET['chiffre'] < $aDeviner) {
        $erreur = "Votre chiffre est trop petit";
    } else {
        $succes = "Bravo ! Vous avez deviné le chiffre <strong>$aDeviner</strong>";
    }
    $value = (int)$_GET['chiffre'];
}

require 'header.php';
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
        <input type="number" name="chiffre" placeholder="entre 0 et 1000" value="<?= $value ?>">
        <button type="submit">Deviner</button>
    </form>
</div>