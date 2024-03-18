<?php 
require 'elements/header.php';
?>

<h1>S'inscrire à la Newsletter !</h1>

<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Veniam illum rerum, inventore sunt tempore soluta magni possimus assumenda molestiae dolor voluptatum provident perspiciatis optio ipsum perferendis! Enim consequatur modi necessitatibus?</p>

<form action="/newsletter.php" method="post" class="form-inline">
    <div class="form-group">
        <input type="email" placeholder="Entrer votre email" required>
    </div>
    <button type="submit" class="btn btn-primary">S'inscrire</button>
</form>