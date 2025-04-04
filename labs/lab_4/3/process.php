<?php
session_start(); // инициализация сессии

if (isset($_POST['submit'])) {
    if (!empty($_POST['text'])) {
        $text = $_POST['text'];
        $words = preg_split('/[\s\W]+/u', $text, -1, PREG_SPLIT_NO_EMPTY);
        $count = 0;

        foreach ($words as $word) {
            $cleanWord = preg_replace('/[^a-zA-Zа-яА-ЯёЁ]/u', '', $word);
            if (mb_strlen($cleanWord) > 5) $count++;
        }

        $_SESSION['result'] = $count; //  результат в сессии
    }
    header("Location: index.php"); // перенаправляем обратно
    exit();
}

if (isset($_POST['clear'])) {
    unset($_SESSION['result']);
    header("Location: index.php");
    exit();
}