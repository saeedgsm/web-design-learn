<?php
// declare(strict_types = 1);

// int, boll, float, string, null, array

// function add(int|float $x, int $y)
// {
//     return $x + $y;
// }


// $result = add('5', 6);
// $result = add(8, 6);

// echo $result;


function sum($x, $y, ...$numbers)
{
    // print_r($numbers);
    // $z = 0;
    // foreach($numbers as $number){
    //     // $z = $z + $number;
    //     $z += $number;
    // }

    $z = array_sum($numbers);
    
    return $x + $y + $z;
}

// echo sum(10, 12, 2, 6, 5);



function sum2(...$numbers)
{
    return array_sum($numbers);
}

echo sum2(10, 12, 2, 6, 6);