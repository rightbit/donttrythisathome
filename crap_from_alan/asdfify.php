<?php
/**
 * Asdfs the given variable
 * @param  mixed $asdf
 * @return string
 */
function asdfify(&$asdf) {
    $asdf = "asdf";
    return "asdf";
}

$hello = "Hello World";
print asdfify($hello);
?>