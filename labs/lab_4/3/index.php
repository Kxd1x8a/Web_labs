<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>сессии</title>
</head>
<body>
<form method="post" action="process.php">
    <label>
        <textarea name="text" placeholder="введите текст"></textarea>
    </label>
    <button type="submit" name="submit">посчитать</button>
    <button type="submit" name="clear">сбросить результат</button>
</form>

<?php
if (isset($_SESSION['result'])) {
    echo "<p>результат: {$_SESSION['result']} слов</p>";
}
?>
</body>
</html>