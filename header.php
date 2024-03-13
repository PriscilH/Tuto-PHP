
<!doctype html>
<html lang="en">
    <!-- php -S localhost:8000 -->
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- isset — Détermine si une variable est déclarée et est différente de null, ici title fait réf au titre de la page (onglet) -->
<title>
    <?php if (isset($title)) : ?>
        <?php echo $title; ?>
    <?php else : ?>
        Mon site
    <?php endif ?>
</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<link rel="stylesheet" href="styles.css">
</head>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
      <div class="container">
        <a class="navbar-brand" href="#">Mon site</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link <?php if ($_SERVER['SCRIPT_NAME'] === '/index.php'): ?>active<?php endif; ?>" href="/index.php">Accueil</a>
            </li>
            <li class="nav-item">
              <a class="nav-link <?php if ($_SERVER['SCRIPT_NAME'] === '/contact.php'): ?>active<?php endif; ?>" href="/contact.php">Contact</a>
            </li>
            <li class="nav-item">
              <a class="nav-link <?php if ($_SERVER['SCRIPT_NAME'] === '/jeu.php'): ?>active<?php endif; ?>" href="/jeu.php">Jeu</a>
            </li>
            <li class="nav-item">
              <a class="nav-link <?php if ($_SERVER['SCRIPT_NAME'] === '/glace.php'): ?>active<?php endif; ?>" href="/glace.php">Ice Cream</a>
            </li>
        </div>
      </div>
    </nav>
