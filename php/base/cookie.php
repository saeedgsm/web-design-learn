<?php

// setcookie(name, value, expire)
// $_COOKIE['name]

// setcookie("user", "saeed ghasemi", time() + 3600);

// echo "<pre>";
// print_r($_COOKIE);

// if (isset($_COOKIE['user'])) {
//     echo $_COOKIE['user'];
// } else {
//     echo "cookie is not set";
// }


setcookie("user", "saeed ghasemi", time() - 3600);