<?php
require 'elements/header.php';
?>
<form action="" method="post">
    <div class="form-group">
        <input class="form-control" type="text" name="username" placeholder="Nom d'utilisateur">
    </div>
    <div class="form-group">
        <input class="form-control" type="password" name="password" placeholder="Votre mot de passe">
    </div>
    <button type="submit" class="btn btn-primary mt-3">Se connecter</button>
</form>