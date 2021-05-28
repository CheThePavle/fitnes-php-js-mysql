<?php session_start(); ?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Я фитнес</title>
    <link rel="stylesheet" href="style/main.css">
</head>
<body>
    <header>
        <a href="/"><img src="img/logo.png" alt=""></a>
        <p id="hello_user">Приветсвую, <span>
                <?php
                    if ($_SESSION['login']){echo $_SESSION['login'] . '<a href="lk"> ЛK</a>';}else{echo 'Гость <a href="auth"> Вход </a>';}
                ?>
            </span>
        </p>
    </header>