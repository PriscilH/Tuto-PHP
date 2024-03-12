<?php
$title = "Page du jeu";
$aDeviner = 140;
require 'header.php';
?>

<div class="container my-5">
    <?php 
    // Vérifier si la variable $_GET['chiffre'] est définie avant de l'utiliser
    if (isset($_GET['chiffre'])) {
        if ($_GET['chiffre'] > $aDeviner) : ?>
            Votre chiffre est trop grand
        <?php elseif ($_GET['chiffre'] < $aDeviner) : ?>
            Votre chiffre est trop petit
        <?php else : ?>
            Bravo ! Vous avez deviné le chiffre <?= $aDeviner ?>
        <?php endif ?>
    <?php } ?>

    <!-- htmlentities permet d'éviter à l'utilisateur de casser notre code html -->
    <form action="/jeu.php" method="GET"> 
        <input type="number" name="chiffre" placeholder="entre 0 et 1000" value="<?= isset($_GET['chiffre']) ? htmlentities($_GET['chiffre']) : '' ?>">
        <button type="submit">Deviner</button> 
    </form>
</div>
