<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <title>ввод данных</title>
</head>
<body>
<h2>введите данные:</h2>
<form method="post" action="save.php">
    фамилия: <label>
        <input type="text" name="surname" required>
    </label><br>
    имя: <label>
        <input type="text" name="name" required>
    </label><br>
    возраст: <label>
        <input type="number" name="age" required>
    </label><br>
    <button type="submit">сохранить в сессию</button>
</form>
</body>
</html>