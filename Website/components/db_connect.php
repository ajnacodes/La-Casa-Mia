
<?php
// DB connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "be16_cr12_lacasamia_danielabuga";

// Create the DB connection
$connect = mysqli_connect($servername, $username, $password, $dbname);

// Check the DB connection
if (!$connect) {

    die("Connection failed: " . mysqli_connect_error());
}