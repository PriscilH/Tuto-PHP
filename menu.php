<?php 
$title = "Page Menu";
$menu = file_get_contents(__DIR__ . DIRECTORY_SEPARATOR . 'data' . DIRECTORY_SEPARATOR . 'menu.tsv');
$lignes = explode(PHP_EOL, $menu);
foreach ($lignes as $ligne)
require 'header.php';
?>

<div class="container">
   <h1>Menu</h1> 
</div>
