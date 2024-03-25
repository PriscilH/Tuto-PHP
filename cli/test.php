<?php
$date = '2024-03-01';
$date2 = '2024-06-01';

$d = new DateTime($date);
$d2 = new DateTime($date2);
$diff = $d->diff($d2, true);
echo "Il y a {$diff->days} jours de différence";

echo "\n";

$time = strtotime($date);
$time2 = strtotime($date2);
$days = floor(abs(($time - $time2) / (24 * 60 * 60)));
echo "Il y a $days jours de différence";


// Chemin absolu du fichier
// $fichier = __DIR__ . DIRECTORY_SEPARATOR . 'demo.txt';

// On créer le fichier demo avec les données Salut les gens
// file_put_contents($fichier, ' comment allez-vous ?', FILE_APPEND);

// Fonction pour lire le fichier
// echo file_get_contents($fichier);



