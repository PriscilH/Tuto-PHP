<?php
function connecter(): bool
{
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }
    return !empty($_SESSION['connecte']);
}

function user_connect(): void
{
    if (!connecter()) {
        header('Location: /login.php');
        exit();
    }
}
