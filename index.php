<?php
session_start();
if (!$_SESSION['user']) {
    header('Location: profile.php');
}
?>    

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Авторизация</title>
    <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>

    <!-- Форма авторизации !-->

    <form action="vendor/signin.php" method="post">
        <label>Почта</label>
        <input type="email" name="email"placeholder="Введите свой e-mail">
        <label>Пароль</label>
        <input type="password" name="password" placeholder="Введите пароль">
        <button type="submit">Войти</button>
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