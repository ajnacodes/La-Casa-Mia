<?php 

$localhost = "localhost";

$username = "root";

$password = "";

$dbname = "be16_cr12_lacasamia_danielabuga";

try {
    $connect = mysqli_connect($localhost, $username, $password, $dbname);

    // echo "connection successfully";
    
} catch (mysqli_sql_exception $e) {
     die("failed to connect to database".mysqli_connect_error());
    };
   