<?php
$title = "Page de contact";
require_once 'data/config.php';
require_once 'functions.php';
date_default_timezone_set('Europe/Paris');
// Récupérer l'heure d'aujourd'hui $heure
$heure = (int)($_GET['heure'] ?? date('G'));
$jour = (int)($_GET['jour'] ?? date('N') - 1);
// Récupérer les créneaux d'aujourd'hui $creneaux
$creneaux = CRENEAUX[$jour];
// Récupérer l'état d'ouverture du magasin
$ouvert = in_creneaux($heure, $creneaux);
$color = $ouvert ? 'green' : 'red';
require 'elements/header.php';
?>


<div class="container my-5">
    <div class="row">
        <div class="col-md-8">
            <h2>Nous Contactez</h2>
            <p>Coucou !</p>
        </div>
        <div class="col-md-4">
            <h2>Horaires d'ouvertures</h2>
            <?php if ($ouvert) : ?>
                <div class="alert alert-success">
                    Le magasin sera ouvert
                </div>
            <?php else : ?>
                <div class="alert alert-danger">
                    Le magasin sera fermé
                </div>
            <?php endif; ?>

            <form action="" method="GET">
                <div class="form-group">
                    <?= select('jour', $jour, JOURS) ?>
                </div>
                <div class="form-group">
                    <input class="form-control" type="number" name="heure" value="<? $heure ?>">
                </div>
                <button class="btn btn-primary mt-3" type="submit">Voir si le magasin est ouvert</button>
            </form>
            
            <ul>
                <?php foreach (JOURS as $k => $jour): ?>
                    <li>
                        <strong><?= $jour ?></strong> :
                        <?= creneaux_html(CRENEAUX[$k]); ?>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</div>