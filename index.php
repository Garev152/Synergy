<?php

    session_start();

?>    

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Авторизация и регистрация</title>
    <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>

    <!-- Форма авторизации !-->

    <form action="" method="">
        <label>Почта</label>
        <input type="text" placeholder="Введите свой e-mail">
        <label>Пароль</label>
        <input type="password" placeholder="Введите пароль">
        <button>Войти</button>
        <p>
            У вас не аккаунта? - <a href="/register.php">зерегистрируйтесь</a>!
        </p>
        <?php
            if ($_SESSION['message']) {
                echo '<p class="msg">' . $_SESSION['message'] . '</p>'; 
            }
        unset($_SESSION['message']);
        ?>

    </form>
    
</body>
</html>