<?php

$file = fopen('file.txt', 'r');
$stdout = fopen('php://stdout', 'w');

$int = '';
while (!feof($file)) {
    $char = fread($file, 1);

    if (is_numeric($char)) {
        $int .= $char;
    } elseif (!empty($int)) {
        fwrite($stdout, $int . PHP_EOL);
        $int = '';
    }
}

fclose($file);
fclose($stdout);
