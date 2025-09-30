<?php

// PHP Constants
// A constant is an identifier (name) for a simple value. The value cannot be changed during the script.

// A valid constant name starts with a letter or underscore (no $ sign before the constant name).

// Note: Unlike variables, constants are automatically global across the entire script.

// Syntax
//define(name, value);



define("GREETING", "Welcome to W3Schools.com!");
echo GREETING;


// PHP const Keyword


const MYCAR = "Volvo";
echo MYCAR;





//Constant Arrays

define("cars", [
  "Alfa Romeo",
  "BMW",
  "Toyota"
]);
echo cars[0];







// Constants are Global

define("GREETING", "Welcome to W3Schools.com!");

function myTest() {
  echo GREETING;
}

myTest();