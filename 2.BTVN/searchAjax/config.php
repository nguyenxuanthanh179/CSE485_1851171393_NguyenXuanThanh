<?php
    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $db   = '1851171393';
    $connect = mysqli_connect($host,$user,$pass, $db);
    if(!$connect){
        die("Không thể kết nối");
    }
?>