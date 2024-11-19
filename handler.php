<?php
    $mail = $_POST["mail"];
    $password = $_POST["password"];
    $mail = htmlspecialchars($mail);
    $password = htmlspecialchars($password);
    $mysqli = new mysqli('localhost', 'root', '', 'reg');
    $mysqli->query("INSERT INTO `users`(`id`, `mail`, `password`) VALUES (NULL, '$mail', '$password')");
?>