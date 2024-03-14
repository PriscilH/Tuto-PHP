<?php
$title = "Page de contact";
require_once 'config.php';
require_once 'functions.php';
require 'header.php';
?>


<div class="container my-5">
    <div class="row">
        <div class="col-md-8">
            <h2>Nous Contactez</h2>
            <p>Coucou !</p>
        </div>
        <div class="col-md-4">
            <h2>Horaires d'ouvertures</h2>
            <ul>
                <?php foreach (JOURS as $k => $jour) : ?>
                    <li>
                        <strong><?= $jour ?></strong> 
                        <?= creneaux_html(CRENEAUX[$k]); ?>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</div>