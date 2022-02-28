<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Авторизация и регистрация</title>
    <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>

    <!-- Форма регистрации !-->

    <form action="vendor/signup.php" method="post">
        <label>ФИО</label>
        <input type="text" name="full_name" placeholder="Введите своё полное имя">
        <label>Почта</label>
        <input type="email" name="email" placeholder="Введите свой e-mail">
        <label>Серия</label>
        <input type="password" name="series" placeholder="Введите серию паспорта">
        <label>Номер</label>
        <input type="password" name="number" placeholder="Введите номер паспорта">
        <label>Кем выдан</label>
        <input type="text" name="who_issued" placeholder="Введите кем выдан паспорт">
        <label>Дата выдачи</label>
        <input type="text" name="date_of_issue" placeholder="Введите дату выдачи паспорта">
        <label>Пароль</label>
        <input type="password" name="password" placeholder="Введите пароль">
        <button type="submit">Войти</button>
        <p>
            У вас уже есть аккаунт? - <a href="/index.php">авторизируйтесь</a>!
        </p>
    </form>
    
</body>
</html>