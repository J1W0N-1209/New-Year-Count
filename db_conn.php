<?php
    $host= "terminal.kro.kr";
    $username = "cth";
    $password = "xogur38997";
    $db_name = "new-year-count";

    $conn = mysqli_connect($host,$username,$password,$db_name);
    
    if(!$conn) {
        die("Connection Failed .. ");
    }
?>