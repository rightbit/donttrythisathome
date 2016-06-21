<?php
// Incrementing variables in PHP is easy!

$i = 2;
try {
    a:
    if (empty($_GLOBALS['new_i'])) {
        throw new Exception($i);
    }
    $i = $_GLOBALS['new_i'];
    unset($_GLOBALS['new_i']);
} catch (Exception $e) {
    $_GLOBALS['new_i'] = intval($e->getMessage()) + 1;
    goto a;
}
echo $i; // 3


