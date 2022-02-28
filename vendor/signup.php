<?php
    session_start();
    require_once 'connect.php';

    $full_name = $_POST['full_name'];
    $email = $_POST['email'];
    $series = $_POST['series'];
    $number = $_POST['number'];
    $who_issued = $_POST['who_issued'];
    $date_of_issue = $_POST['date_of_issue'];
    $password = $_POST['password'];

    mysqli_query($connect, "INSERT INTO `users`(`id`, `full_name`, `email`, `series`, `number`, `who_issued`, `date_of_issue`, `password`) VALUES (NULL, '$full_name', '$email', '$series', '$number', '$who_issued', '$date_of_issue', '$password')");

    $_SESSION['message']='Регистрация прошла успешно!';
    header('Location: ../index.php');