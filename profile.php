<?php
session_start();
if (!$_SESSION['user']) {
    header('Location: /');
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Личный кабинет</title>
    <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>

    <!-- Профиль -->

    <form>
        <b href="#"><?= $_SESSION['user']['full_name'] ?></b>
        <b href="#"><?= $_SESSION['user']['email'] ?></b>
        <b href="#"><?= $_SESSION['user']['series'] ?></b>
        <b href="#"><?= $_SESSION['user']['number'] ?></b>
        <b href="#"><?= $_SESSION['user']['who_issued'] ?></b>
        <b href="#"><?= $_SESSION['user']['date_of_issue'] ?></b>
        <a href="vendor/logout.php" class="logout">Выход</a>
    </form>

</body>
</html>