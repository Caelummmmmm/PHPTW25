<?php
// WARNING: This script will crash on execution.

function count($val) {
    static $c = 0;
    $c += $val;
    echo $c;
}

count(4);
count(3);

// ERROR RECEIVED: Fatal error: Cannot redeclare count()
?>