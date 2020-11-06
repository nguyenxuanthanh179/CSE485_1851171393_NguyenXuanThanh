<?php
    // define("HOST","localhost");
    // define("USER","admin");
    // define("PASS","abcabc");
    // define("DB","Ch01");
    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $db   = 'prac04';
    // B1: Ket noi DS
    $conn = mysqli_connect($host, $user, $pass, $db);
    if(!$conn){
        die("Ko the ket noi");
    }

?>