<?php

// if (isset($_POST['send'])) {
//     echo $_POST['email'];
// }

if (isset($_POST['send'])) {
    echo "<pre>";
    print_r($_POST);
}
?>


<form action="index.php" method="post">
    <!-- <input type="text" name="email" />
    <br>
    <input type="text" name="password" />
    <br> -->


    <!-- <input type="checkbox" name="php" /> php
    <input type="checkbox" name="laravel" value="LARAVEL" /> laravel
    <br> -->

    <!-- <input type="radio" name="vue.js" /> Vue.js
    <input type="radio" name="react" value="react" /> React.js
    <br> -->

    <!-- <textarea name="textarea">Webprog.io</textarea>
    <br> -->

    <!-- <select name="lang">
        <option value="1">PHP</option>
        <option value="2">JAVA</option>
        <option value="3">Python</option>
    </select> -->

    <select multiple name="lang[]">
        <option value="php">PHP</option>
        <option value="java">JAVA</option>
        <option value="python">Python</option>
    </select>
    
    <br>
    <button type="submit" name="send">send</button>
</form>