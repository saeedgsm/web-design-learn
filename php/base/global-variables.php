<?php

# PHP Global Variables - Superglobals
// Some predefined variables in PHP are "superglobals", which means that they are always accessible, regardless of scope - and you can access them from any function, class or file without having to do anything special.

// The PHP superglobal variables are:

// $GLOBALS
// $_SERVER
// $_REQUEST
// $_POST
// $_GET
// $_FILES
// $_ENV
// $_COOKIE
// $_SESSION





#PHP $GLOBALS
// $x = 75;
  
// function myfunction() {
//   echo $GLOBALS['x'];
// }

// myfunction()





// $x = 75;
  
// function myfunction() {
//   echo $x;
// }

// myfunction()






// $x = 75;
  
// function myfunction() {
//   global $x;
//   echo $x;
// }

// myfunction()





// function myfunction() {
//   $GLOBALS["x"] = 100;
// }

// myfunction();

// echo $GLOBALS["x"];
// echo $x;













# PHP - $_SERVER

// echo $_SERVER['PHP_SELF'];
// echo $_SERVER['SERVER_NAME'];
// echo $_SERVER['HTTP_HOST'];
// echo $_SERVER['HTTP_REFERER'];
// echo $_SERVER['HTTP_USER_AGENT'];
// echo $_SERVER['SCRIPT_NAME'];