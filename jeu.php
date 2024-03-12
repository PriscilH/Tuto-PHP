<?php
$title = "Page du jeu";
$aDeviner = 140;
require 'header.php';
?>

<div class="container my-5">
<form action="/jeu.php" methode="GET">
    <input type="number" name="chiffre" placeholder="entre 0 et 1000">
    <button type=submit>Deviner</button>
</form>
</div>
