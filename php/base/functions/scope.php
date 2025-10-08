<?php

$x = 100; // global

function demo() {
    global $x;

    $y = 50; // local
    echo $x;
}

demo();

// echo $y;