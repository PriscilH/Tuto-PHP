<?php
require 'elements/header.php';
?>
<div class="container">
    <form class="mx-auto p-3" action="" method="post">
        <div class="form-group mt-3 ">
            <input class="form-control" type="text" name="username" placeholder="Nom d'utilisateur">
        </div>
        <div class="form-group">
            <input class="form-control mt-3" type="password" name="password" placeholder="Votre mot de passe">
        </div>
        <button type="submit" class="btn btn-primary mt-3">Se connecter</button>
    </form>
</div>