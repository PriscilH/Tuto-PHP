<?php
$title = "Page profil";
if (!empty($_GET['action']) && $_GET['action'] === 'deconnecter') {
    unset($_COOKIE['user']);
    setcookie('user', '', time() - 10);
}
$nom = null;
if (!empty($_COOKIE['user'])) {
    $nom = $_COOKIE['user'];
}
if (!empty($_POST['nom'])) {
    setcookie('user', $_POST['nom']);
    $nom = $_POST['nom'];
}
require 'elements/header.php';
?>

<div class="container">

    <?php if ($nom) : ?>
        <h1>Bonjour <?= isset($nom) ? htmlentities($nom) : "" ?></h1>
        <a href="profil.php?action=deconnecter">Se déconnecter</a>
    <?php else : ?>
        
        <form action="" method="post">
            <div class="form-group">
                <input class="form-control" name="nom" placeholder="Entrer votre nom">
            </div>
            <button class="btn btn-primary mt-3">
                Se connecter
            </button>
        </form>
</div>
<?php endif; ?>