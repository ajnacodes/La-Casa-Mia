<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "be16_cr12_lacasamia_danielabuga";

$connect = mysqli_connect($host, $user, $pass, $db);

if (isset($_GET['display'])) {
    $sql = "SELECT * from properties where price_reduction LIKE '%yes%'";
    $result = mysqli_query($connect, $sql);
    echo json_encode($properties = mysqli_fetch_all($result, MYSQLI_ASSOC));    
} 
else {
    echo "Error";
}