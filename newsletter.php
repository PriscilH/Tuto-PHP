<?php
$error = null;
$success = null;
$email = null;
if (!empty($_POST['email'])) {
    $email = $_POST['email'];
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $success = "Votre email a bien été enregistré";
    } else {
        $error = "Email invalide";
    }
}

require 'elements/header.php';
?>

<div class="container">
    <h1>S'inscrire à la Newsletter !</h1>

    <p>
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Veniam illum rerum, inventore sunt tempore soluta magni possimus assumenda molestiae dolor voluptatum provident perspiciatis optio ipsum perferendis! Enim consequatur modi necessitatibus?
    </p>

    <?php if($error): ?>
        <div class="alert alert-danger">
            <?= $error ?>
        </div>
    <?php endif; ?>

    <?php if($success): ?>
        <div class="alert alert-success">
            <?= $success ?>
        </div>
    <?php endif; ?>


    <form action="/newsletter.php" method="post" class="form-inline">
        <div class="form-group">
            <input type="email" name="email" placeholder="Entrer votre email" required class="form-control" value="<?= isset($email) ? htmlentities($email) : "" ?>">
        </div>
        <button type="submit" class="btn btn-primary mt-3">S'inscrire</button>
    </form>
</div>