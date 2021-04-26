<?php

exec('php generate_file.php');

$proc = proc_open(
    'php -d memory_limit=20M read_file.php',
    [
        ['pipe', 'r'], // in
        ['pipe', 'w'], // out
        ['pipe', 'w'], // err
    ],
    $pipes
);

$result = true;
while ($string = fgets($pipes[1])) {
    $string = trim($string);

    if (!is_numeric($string)) {
        $result = false;
        break;
    }
}

proc_close($proc);

echo ($result ? 'test ok' : 'test fail') . PHP_EOL;
