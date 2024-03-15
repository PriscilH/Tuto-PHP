<?php
// Chemin absolu du fichier
$fichier = __DIR__ . DIRECTORY_SEPARATOR . 'demo.txt';
// On créer le fichier demo avec les données Salut les gens
file_put_contents($fichier, 'Salut les gens');