<?php
    $host= "";
    $username = "";
    $password = "";
    $db_name = "";

    $conn = mysqli_connect($host,$username,$password,$db_name);
    
    if(!$conn) {
        die("Connection Failed .. ");
    }
?>
