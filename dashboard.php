<?php
require 'functions/compteur.php';
$total = nombre_vues();
$annee = (int)date('Y');
$annee_select = empty($_GET['annee']) ? null : (int)$_GET['annee'];
$mois_select = empty($_GET['mois']) ? null : (int)$_GET['mois'];
$mois = [
    '01' => 'Janvier',
    '02' => 'Février',
    '03' => 'Mars',
    '04' => 'Avril',
    '05' => 'Mai',
    '06' => 'Juin',
    '07' => 'Juillet',
    '08' => 'Août',
    '09' => 'Septembre',
    '10' => 'Octobre',
    '11' => 'Novembre',
    '12' => 'Décembre'
];

require 'elements/header.php';
?>

<div class="container mt-3">
    <div class="row">
        <div class="col-md-4">
            <div class="list-group">
                <?php for ($i = 0; $i < 5; $i++) : ?>
                    <a class="list-group-item <?= $annee - $i === $annee_select ? 'active' : ''; ?>" href="dashboard.php?annee=<?= $annee - $i ?>"><?= $annee - $i ?></a>
                    <?php if ($annee - $i === $annee_select) : ?>
                        <div class="list-group">
                            <?php foreach ($mois as $numero => $nom) : ?>
                                <a class="list-group-item" <?= $numero === $mois_select ? 'active' : '' ?> href="dashboard.php?annee<?= $annee_select ?>&mois=<?= $numero ?>">
                                    <?= $nom ?>
                                </a>
                            <?php endforeach ?>
                        </div>
                    <?php endif ?>
                <?php endfor ?>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <strong style="font-size: 3em;"><?= $total ?></strong><br>
                    Visite<?= $total > 1 ? 's' : '' ?> total
                </div>
            </div>
        </div>
    </div>
</div>