<?php

// $x = 20;

// $greet = function ($name) use ($x) {
//     // global $x;

//     return "hello $name - $x";
// };

// echo $greet("ali");



$y = 50;

$greet = fn($name) => "hello $name - $y";

echo $greet("liam");