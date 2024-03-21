<?php
require 'functions/compteur.php';
$total = nombre_vues();
$annee = (int)date('Y');
$annee_select = empty($_GET['annee']) ? $annee : (int)$_GET['annee'];
require 'elements/header.php';
?>

<div class="container mt-3">
    <div class="row">
        <div class="col-md-4">
<div class="list-group">
    <?php for ($i = 0; $i < 5; $i++): ?>
    <a class="list-group-item <?= $annee - $i === $annee_select ? 'active' : ''; ?>"  href="dashboard.php?annee=<?= $annee - $i ?>"><?= $annee - $i ?></a>
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