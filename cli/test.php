<?php
require dirname(__DIR__) . DIRECTORY_SEPARATOR . 'class' . DIRECTORY_SEPARATOR . 'Form.php';
echo Form::checkbox('demo', 'Demo', []);



// php cli/test.php


// Période de 1 mois = P1M 1jour = 1D 1minute = T1M
// $date = new DateTime('2024-07-02');
// $interval = new DateInterval('P1M1DT1M'); 
// $date->add($interval); // cela ajoutera 1 jour 1 mois et 1 min à la date
// soit 2024-08-03 00:01:00.000000

// var_dump($date); 

// $date = '2020-03-01';
// $date2 = '2024-06-01';

// $d = new DateTime($date);
// $d2 = new DateTime($date2);
// $diff = $d->diff($d2, true);
// echo "Il y a {$diff->y} années, {$diff->m} mois et {$diff->d} jours de différence";

// echo "\n";

// $time = strtotime($date);
// $time2 = strtotime($date2);
// $days = floor(abs(($time - $time2) / (24 * 60 * 60)));
// echo "Il y a $days jours de différence";


// Chemin absolu du fichier
// $fichier = __DIR__ . DIRECTORY_SEPARATOR . 'demo.txt';

// On créer le fichier demo avec les données Salut les gens
// file_put_contents($fichier, ' comment allez-vous ?', FILE_APPEND);

// Fonction pour lire le fichier
// echo file_get_contents($fichier);
