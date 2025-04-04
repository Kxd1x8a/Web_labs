<?php
session_start();

// сохраняем данные
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $_SESSION['user_data'] = [
        'surname' => $_POST['surname'],
        'name' => $_POST['name'],
        'age' => $_POST['age']
    ];
}

header("Location: display.php"); // перенаправление
exit();