<?php
// Chemin absolu du fichier
$fichier = __DIR__ . DIRECTORY_SEPARATOR . 'demo.txt';

// On créer le fichier demo avec les données Salut les gens
// file_put_contents($fichier, ' comment allez-vous ?', FILE_APPEND);

// Fonction pour lire le fichier
echo file_get_contents($fichier);