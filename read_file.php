<?php

$file = fopen('file.txt', 'r');

$int = '';
while (!feof($file)) {
    $char = fread($file, 1);

    if (is_numeric($char)) {
        $int .= $char;
    } elseif (!empty($int)) {
        echo $int . PHP_EOL;
        $int = '';
    }
}

fclose($file);
