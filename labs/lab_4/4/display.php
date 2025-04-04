<?php session_start(); ?>
<!DOCTYPE html>
<html lang="">
<head>
    <title>данные пользователя</title>
</head>
<body>
<h2>cохраненные данные</h2>
<?php
if (isset($_SESSION['user_data'])) {
    echo "фамилия: " . $_SESSION['user_data']['surname'] . "<br>";
    echo "имя: " . $_SESSION['user_data']['name'] . "<br>";
    echo "возраст: " . $_SESSION['user_data']['age'] . "<br>";
} else {
    echo "Данные не найдены в сессии!";
}
?>
<br>
<a href="form.php">вернуться к форме</a>
</body>
</html>