<?php
$str = 'a5b10c3';
$result = preg_replace_callback('/\d+/', function ($matches) {
    $number = (int)$matches[0];
    return $number - 1; // 7 вариант: число - 1
}, $str);
echo $result;