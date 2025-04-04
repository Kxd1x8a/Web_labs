<?php
$str = 'gxyzg g123g gH@#g gabc';
preg_match_all('/g...g/ui', $str, $matches); // 7 вариант
print_r($matches[0]);