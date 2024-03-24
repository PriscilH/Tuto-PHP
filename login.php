<?php
$error = null;
$password = '$2y$10$pX7AdDrNJtS.fkkC08tW9.gCWK7B4OXlBWqW74X.Uo5vMPdOq1hH6';
if (!empty($_POST['username']) && !empty($_POST['password'])) {
    if ($_POST['username'] === 'John' && password_verify($_POST['password'], $password)) {
        session_start();
        $_SESSION['connecte'] = 1;
        header('Location: /dashboard.php');
        exit();
    } else {
        $error = "Identifiants incorrects";
    }
}

require_once 'functions/auth.php';
if (connecter()) {
    header('Location: /dashboard.php');
        exit();
}

require_once 'elements/header.php';
?>

<div class="container mt-3">
    <?php if ($error) : ?>
        <div class="alert alert-danger">
            <?= $error ?>
        </div>
    <?php endif; ?>
</div>


<div class="container">
    <form class="mx-auto " action="" method="post">
        <div class="form-group mt-3 ">
            <input class="form-control" type="text" name="username" placeholder="Nom d'utilisateur">
        </div>
        <div class="form-group">
            <input class="form-control mt-3" type="password" name="password" placeholder="Votre mot de passe">
        </div>
        <button type="submit" class="btn btn-primary mt-3">Se connecter</button>
    </form>
</div>