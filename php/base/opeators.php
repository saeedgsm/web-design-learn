<?php

// PHP Operators

// PHP Arithmetic Operators

// +	Addition	$x + $y	Sum of $x and $y	
// -	Subtraction	$x - $y	Difference of $x and $y	
// *	Multiplication	$x * $y	Product of $x and $y	
// /	Division	$x / $y	Quotient of $x and $y	
// %	Modulus	$x % $y	Remainder of $x divided by $y	
// **	Exponentiation	$x ** $y	Result of raising $x to the $y'th power
// $x = 5;
// $y = 10;

// echo $x + $y;
// echo $x - $y;
// echo $x * $y;
// echo $x / $y;
// echo $x % $y;






// PHP Assignment Operators

// x = y	x = y	The left operand gets set to the value of the expression on the right	
// x += y	x = x + y	Addition	
// x -= y	x = x - y	Subtraction	
// x *= y	x = x * y	Multiplication	
// x /= y	x = x / y	Division	
// x %= y	x = x % y	Modulus






// PHP Comparison Operators

// ==	Equal	$x == $y	Returns true if $x is equal to $y	
// ===	Identical	$x === $y	Returns true if $x is equal to $y, and they are of the same type	
// !=	Not equal	$x != $y	Returns true if $x is not equal to $y	
// <>	Not equal	$x <> $y	Returns true if $x is not equal to $y	
// !==	Not identical	$x !== $y	Returns true if $x is not equal to $y, or they are not of the same type	
// >	Greater than	$x > $y	Returns true if $x is greater than $y	
// <	Less than	$x < $y	Returns true if $x is less than $y	
// >=	Greater than or equal to	$x >= $y	Returns true if $x is greater than or equal to $y	
// <=	Less than or equal to	$x <= $y	Returns true if $x is less than or equal to $y	
// <=>	Spaceship	$x <=> $y	Returns an integer less than, equal to, or greater than zero, depending on if $x is less than, equal to, or greater than $y. Introduced in PHP 7.

///////////////////////////
// $x = 50;
// $y = 50;

// var_dump($x >= $y)




//////////////////////
// $x = 5;  
// $y = 10;

// echo ($x <=> $y); // returns -1 because $x is less than $y
// echo "<br>";

// $x = 10;  
// $y = 10;

// echo ($x <=> $y); // returns 0 because values are equal
// echo "<br>";

// $x = 15;  
// $y = 10;

// echo ($x <=> $y); // returns +1 because $x is greater than $y
 









// PHP String Operators
// .	Concatenation	$txt1 . $txt2	Concatenation of $txt1 and $txt2	
// .=	Concatenation assignment	$txt1 .= $txt2	Appends $txt2 to $txt1




















// PHP Conditional Assignment Operators
// ?:	Ternary	$x = expr1 ? expr2 : expr3
// ??	Null    coalescing	$x = expr1 ?? expr2
