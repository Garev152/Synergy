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

    $password=md5($password);

    mysqli_query($connect, "INSERT INTO `users`(`id`, `full_name`, `email`, `series`, `number`, `who_issued`, `date_of_issue`, `password`) VALUES (NULL, '$full_name', '$email', '$series', '$number', '$who_issued', '$date_of_issue', '$password')");

    $error_fields = [];

    if ($full_name === '') {
        $error_fields[] = 'full_name';
    }
    
    if ($password === '') {
        $error_fields[] = 'password';
    }
    
    if ($series === '') {
        $error_fields[] = 'series';
    }
    
    if ($email === '' || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error_fields[] = 'email';
    }
    
    if ($number === '') {
        $error_fields[] = 'number';
    }
    
    if ($who_issued === '') {
        $error_fields[] = 'who_issued';
    }

    if ($date_of_issue === '') {
        $error_fields[] = 'date_of_issue';
    }
    
    if (!empty($error_fields)) {
        $response = [
            "status" => false,
            "type" => 1,
            "message" => "Проверьте правильность полей",
            "fields" => $error_fields
        ];
    
        echo json_encode($response);
    
        die();
    }

    $_SESSION['message']='Персональные данные изменены!';
    header('Location: ../profile.php');