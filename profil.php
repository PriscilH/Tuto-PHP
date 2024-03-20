<?php
$title = "Page profil";

$age = null;

if (!empty($_POST['birthday'])) {
    $birthday = (int)$_POST['birthday']; 
    $age = (int)date('Y') - $birthday;
    setcookie('birthday', $birthday, time() + 60 * 60 * 24);
} elseif (!empty($_COOKIE['birthday'])) {
    $age = (int)date('Y') - (int)$_COOKIE['birthday'];
}



require 'elements/header.php';
?>

<div class="container">
   <?php if ($age >= 18): ?>
    <h1>Contenu pour adultes</h1>
<?php elseif ($age !== null): ?>
    <div class="alert alert-danger">Vous n'avez pas l'âge requis pour voir ce contenu</div>
<?php else: ?>
    <form action="" method="post">
        <div class="form-group">
            <label for="birthday">Section adultes, entrez votre année de naissance :</label>
            <select name="birthday" id="birthday" class="form-control">
                <?php for ($i = 2012; $i > 1990; $i--) : ?>
                <option value="<?= $i ?>"><?= $i ?></option>
                <?php endfor ?>
            </select>
        </div>
        <button type="submit" class="btn btn-primary mt-3">Envoyer</button>
    </form>
<?php endif; ?> 
</div>

