<?php
$title = "Page profil";
// Exemple 1
// if (!empty($_GET['action']) && $_GET['action'] === 'deconnecter') {
//     unset($_COOKIE['user']);
//     setcookie('user', '', time() - 10);
// }
$nom = null;
// if (!empty($_COOKIE['user'])) {
//     $nom = $_COOKIE['user'];
// }
// if (!empty($_POST['nom'])) {
//     setcookie('user', $_POST['nom']);
//     $nom = $_POST['nom'];
// }

require 'elements/header.php';
?>

<div class="container">

    <?php if ($nom) : ?>
        <h1>Bonjour <?= isset($nom) ? htmlentities($nom) : "" ?></h1>
        <a href="profil.php?action=deconnecter">Se déconnecter</a>
    <?php else : ?>

        <form action="" method="post">
            <div class="form-group">
                <label for="birthday">Section adultes, entrer votre année de naissance :</label>
                <select name="birthday" class="form-control">
                    <?php for ($i = 2012; $i > 1990; $i--) : ?>
                        <option value="<?= $i ?>"><?= $i ?></option>
                    <?php endfor ?>
                </select>
            </div>
            <button type="submit" class="btn btn-primary mt-3">
                Envoyer
            </button>
        </form>
</div>
<?php endif; ?>